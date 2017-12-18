<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Adminbase.php';

class Login extends AdminBase
{

    protected $need_login = false;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 用户登录页面
     */
    public function index()
    {
        $this->data['title'] = '后台登录';
        if ('get' == $this->input->method()) {
            if (isset($_SESSION['userInfo'])) {
                redirect('admin');
            }
            $this->twig->render('admin/login', $this->data);
        } elseif ('post' == $this->input->method()) {
            $request_data = $this->check_param([
                'username' => ['用户名', 'required', 'regex_match[/^[\w-]{4,30}$/]'],
                'userpass' => ['密码', 'required', 'regex_match[/^[\w\@-]{6,30}$/]'],
            ], [], 'post');
            /**
             * 验证成功处理逻辑
             */
            $this->load->model('am/am_admin');
            $res = $this->am_admin->get_one('*', ['username' => $request_data['username']]);
            if (empty($res)) {
                $this->returnError('用户名不存在');
            }
            if ($res['status'] != 1) {
                $this->returnError('禁止登录');
            }
            $password = sha1(md5($request_data['userpass']));
            if ($password !== $res['userpass']) {
                $this->returnError('用户密码错误');
            }
            $this->load->model('am/am_admin_role');
            $permission = $this->am_admin_role->roleGetPermission($res['role_id']);
            if ($permission === false) {
                $this->returnError('用户角色有误');
            }
            unset($res['userpass']);
            $_SESSION['userInfo'] = $res;
            $_SESSION['permission'] = $permission;
            $citys = GetIpLookup();
            $data = [
                'aid' => $res['aid'],
                'username' => $res['username'],
                'realname' => $res['realname'],
                'login_at' => date('Y-m-d H:i:s'),
                'ip' => getClientIp(),
                'city' => $citys['province'] . $citys['city']
            ];
            $this->load->model('am/am_admin_log');
            $this->am_admin_log->add($data);
            $this->returnData($res);
        }
    }

    /**
     * 获取验证码
     */
    public function get_captcha()
    {
        $this->load->library('captcha');
        $res = $this->captcha->build_captcha();
        $this->session->set_userdata('captcha', $res['word']);
        $data = ['image_url' => $res['image_url']];
        $this->returnData($data);
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        session_destroy(); //退出登录
        redirect(ADMIN_DIR . '/login'); //跳转到登录页面
    }

}
