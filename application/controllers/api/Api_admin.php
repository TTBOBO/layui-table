<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/Apibase.php';

class Api_admin extends Apibase {

    function __construct()
    {
        parent::__construct();
        $this->load->model('am/am_admin');
        $this->model = $this->am_admin;
    }

    public function before_update($modelInfo)
    {
        if (isset($modelInfo['am_admin.userpass'])) {
            $modelInfo['am_admin.userpass'] = md5($modelInfo['am_admin.userpass']);
        }
        return $modelInfo;
    }

    public function login_post()
    {
        $login_username = $this->input->post('login_username');
        $login_pass = $this->input->post('login_pass');
        if (empty($login_username)) {
            $this->returnError("用户名不能为空！");
        }
        if (empty($login_pass)) {
            $this->returnError("密码不能为空！");
        }
        $request_data = $this->check_param(array("login_username" => array("required"),
            "login_pass" => array("required")
                ), [], 'post');
        $userinfo = $this->model->check_login($request_data['login_username'], $request_data['login_pass']);
        if (NULL == $userinfo) {
            $this->returnError("用户名或密码错误！");
        } else {
            //登录以后写入IP
            $this->model->update_login($userinfo['uid']);
            //获取权限列表
            if (!empty($userinfo['role_id'])) {
                $this->load->model('am/am_permission');
                $permissions = $this->am_permission->get_permission_item_by_role($userinfo['role_id'], "youliang");
                $perm_arr = array_column($permissions, 'id', 'permkey');
                $userinfo['permissions'] = $perm_arr;
            }
            $userinfo['token'] = md5($request_data['login_username'] . "**admin**" . $request_data['login_pass']);
            writelog($userinfo);
            $this->returnData($userinfo);
        }
    }

}
