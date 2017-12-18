<?php

/*
 * 用户相关
 * @author:jacky Version 1.0.0 2016-9-18
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/Apibase.php';

/**
 * 用户模块通用接口
 */
class Api_user extends Apibase {

    function __construct()
    {
        parent::__construct();
        $this->load->model('um/um_user');
        $this->model = $this->um_user;
    }

    /**
     * 获取用户信息
     */
    public function get_userinfo_get()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'uid' => ['用户ID', 'required', 'integer'],
        ]);

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.查询用户信息表数据
         * 3.附加默认收货地址
         */
        $res = $this->model->get_one('uid,username,nickname,sex,avatar,mobile,score,banlance,prov,city,dist,create_at', ['uid' => $request_data['uid']]);
        $res['avatar'] = strpos($res['avatar'], '://') ? $res['avatar'] : base_url() . $res['avatar']; //相对路径       
        $this->returnData($res);
    }

    /**
     * 更改个人信息
     */
    public function edit_userinfo_post()
    {
        //验证请求数据
        $sex_list_type = implode(',', array_keys($this->config->item('sex_list')));

        //用户id
        $request_data = $this->check_param([ 'uid' => ['用户ID', 'required', 'integer']], [], 'post');

        //昵称
        if (!empty($this->input->post('nickname'))) {
            $request_data += $this->check_param([ 'nickname' => ['呢称', 'required', 'min_length[1]', 'max_length[100]']], [], 'post');
        }

        //头像
        if (!empty($this->input->post('avatar'))) {
            $request_data += $this->check_param([ 'avatar' => ['头像', 'required', 'min_length[10]',]], [], 'post');
        }

        //性别
        if (!empty($this->input->post('sex'))) {
            $request_data += $this->check_param([ 'sex' => ['性别', 'required', 'integer']], [], 'post');
        }

        //居住地 省
        if (!empty($this->input->post('prov'))) {
            $request_data += $this->check_param([ 'prov' => ['省', 'required', 'max_length[20]']], [], 'post');
        }

        //居住地 市
        if (!empty($this->input->post('city'))) {
            $request_data += $this->check_param([ 'city' => ['市', 'required', 'max_length[20]']], [], 'post');
        }

        //居住地 区
        if (!empty($this->input->post('dist'))) {
            $request_data += $this->check_param([ 'dist' => ['区', 'required', 'max_length[20]']], [], 'post');
        }

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.查询用户信息表数据
         */
        if (isset($request_data['avatar'])) {
            //$pics = explode(',', json_decode($request_data['avatar'], true));
            $pics = explode(',', $request_data['avatar']);
            if (is_array($pics) && count($pics) > 1) {
                $this->returnError('最多只能上传一张图片');
            }
            //检测并创建目录
            $upload_path = 'avatar' . DIRECTORY_SEPARATOR . date('Ymd') . DIRECTORY_SEPARATOR;
            $fina_path = FCPATH . FRONT_UPLOAD_PATH . $upload_path;
            if (!file_exists($fina_path)) {
                mkdir($fina_path, 0777, true);
            }

            //写入文件
            $img_paths = [];
            $filename = get_randdata() . '.jpg'; //文件名            
            base64_to_img(end($pics), $fina_path . $filename);
            $linux_file_path = FRONT_UPLOAD_PATH . $upload_path . $filename;
            $request_data['avatar'] = str_replace('\\', '/', $linux_file_path);
            //if (!file_exists($linux_file_path) || filesize($linux_file_path) <= 0) {
            //    $this->returnError('用户头像格式错误,请检查');
            // }
        }
        $res = $this->model->edit(['uid' => $request_data['uid']], $request_data);
        if (!$res) {
            $this->returnError('未更改任何用户信息,或更新信息失败');
        }
        $this->returnData([]);
    }

    /**
     * 一键快捷注册
     */
    public function shortcut_regist_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'mobile' => ['手机号码', 'required', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'vcode' => ['验证码', 'required', 'exact_length[4]'], //验证码            
                ], [], 'post');

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.查询用户信息表数据
         */
        $info = $this->model->get_one('*', ['mobile' => $request_data['mobile']]);
        if (!empty($info)) {
            $this->returnError('此手机号已被注册过了');
        }
        //检查验证码
        $this->load->model('nm/nm_message');
        $vcode = $this->nm_message->get_one('*', ['to_user' => $request_data['mobile']], 'id desc');
        if (empty($vcode)) {
            $this->returnError('验证码失效或不存在,请重新发送');
        }
        if ($vcode['vcode'] !== $request_data['vcode']) {
            $this->returnError('验证码错误,请检查');
        }
        $request_data['username'] = substr($request_data['mobile'], 0, 3) . '****' . substr($request_data['mobile'], 7);
        //$pwd_info = $this->model->gen_encrypt_password($request_data['password']);
        //list($request_data['password'], $request_data['salt']) = [$pwd_info['encrypt_password'], $pwd_info['salt']];
        $request_data['create_at'] = $request_data['update_at'] = date('Y-m-d H:i:s');
        unset($request_data['vcode']);
        $request_data['avatar'] = $this->config->item('default_avatar');
        $id = $this->model->add($request_data);
        if (!$id) {
            $this->returnError('用户注册失败');
        }
        $this->returnData(['uid' => $id]);
    }

    /**
     * 用户注册
     */
    public function regist_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'mobile' => ['手机号码', 'required', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'vcode' => ['验证码', 'required', 'exact_length[4]'], //验证码
            'password' => ['密码', 'required', 'max_length[100]'],
                ], [], 'post');

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.查询用户信息表数据
         */
        $info = $this->model->get_one('*', ['mobile' => $request_data['mobile']]);
        if (!empty($info)) {
            $this->returnError('此手机号已被注册过了');
        }
        //检查验证码
        $this->load->model('nm/nm_message');
        $vcode = $this->nm_message->get_one('*', ['to_user' => $request_data['mobile']], 'id desc');
        if (empty($vcode)) {
            $this->returnError('验证码失效或不存在,请重新发送');
        }
        if ($vcode['vcode'] !== $request_data['vcode']) {
            $this->returnError('验证码有误，请重新输入');
        }
        $request_data['username'] = substr($request_data['mobile'], 0, 3) . '****' . substr($request_data['mobile'], 7);
        $pwd_info = $this->model->gen_encrypt_password($request_data['password']);
        list($request_data['password'], $request_data['salt']) = [$pwd_info['encrypt_password'], $pwd_info['salt']];
        $request_data['create_at'] = $request_data['update_at'] = date('Y-m-d H:i:s');
        unset($request_data['vcode']);
        $request_data['avatar'] = $this->config->item('default_avatar');
        $id = $this->model->add($request_data);
        if (!$id) {
            $this->returnError('用户注册失败');
        }
        $this->returnData(['uid' => $id]);
    }

    /**
     * 用户登陆 
     */
    public function login_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'mobile' => ['手机号', 'required', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'password' => ['密码', 'max_length[100]'],
            'vcode' => ['验证码', 'exact_length[4]'], //验证码
                ], [], 'post');

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.查询用户信息表数据
         */
        $res = $this->model->get_one('*', ['mobile' => $request_data['mobile']]);
        if (empty($res)) {
            $this->returnError('账号不存在,请重新输入');
        }
        $salt = isset($res['salt']) ? $res['salt'] : '';
        if (!empty($request_data['password'])) {
            $pwd = $this->model->get_encrypt_password($request_data['password'], $salt);
            if ($pwd !== $res['password']) {
                $this->returnError('账号密码错误，请重新输入');
            }
        } elseif (!empty($request_data['vcode'])) {
            $this->load->model('nm/nm_message');
            $rs = $this->nm_message->get_one('*', ['to_user' => $request_data['mobile']], 'id desc');
            if (empty($rs)) {
                $this->returnError('无验证码记录,请重新发送验证码');
            }
            $createAt = strtotime($rs['create_at']);
            if (time() - $createAt > 60) {
                $this->returnError("验证码已过期,请重新发送!");
            }
            if (isset($rs['vcode']) && $rs['vcode'] != $request_data['vcode']) {
                $this->returnError('验证码有误,请重新输入');
            }
        }
        $res['avatar'] = base_url() . $res['avatar'];
        $loginToken = md5(time().'eredfer@#');
        $this->saveCache($loginToken, $res['uid']);
        array_filts($res, ['uid', 'salt', 'password', 'mobilecode'], false);
        $this->returnData(['user_info' => $res, 'login_token'=>$loginToken]);
    }

    /**
     *  找回密码 （修改密码）
     */
    public function getback_pwd_post()
    {
        //验证请求数据
        $request_data = $this->check_param([
            'mobile' => ['手机号', 'required', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'vcode' => ['验证码', 'required', 'exact_length[4]'], //验证码
            'password' => ['密码', 'required', 'max_length[100]'],
                ], [], 'post');

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.查询用户信息表数据
         */
        //验证手机号是否有用户注册的
        $info = $this->model->get_one('uid', ['mobile' => $request_data['mobile']]);
        if (empty($info)) {
            $this->returnError('用户不存在');
        }
        $this->load->model('nm/nm_message');
        $res = $this->nm_message->get_one('*', ['to_user' => $request_data['mobile']], 'id desc');
        if (empty($res)) {
            $this->returnError('无验证码记录,请重新发送验证码');
        }
        if (isset($res['vcode']) && $res['vcode'] != $request_data['vcode']) {
            $this->returnError('验证码有误,请重新输入');
        }
        //重新设置密码
        $new_pwd_info = $this->model->gen_encrypt_password($request_data['password']);
        $update = ['salt' => $new_pwd_info['salt'], 'password' => $new_pwd_info['encrypt_password'], 'update_at' => date('Y-m-d H:i:s')];
        $rs = $this->model->edit(['mobile' => $request_data['mobile']], $update);
        if (!$rs) {
            $this->returnError('新密码设置失败');
        }
        $this->returnData([]);
    }

    /**
     * 修改密码
     */
    public function change_pwd_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'mobile' => ['手机号', 'required', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'old_pwd' => ['原密码', 'required', 'max_length[100]'], //原密码
            'new_pwd' => ['新密码', 'required', 'max_length[100]'], //新密码
                ], [], 'post');

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.查询用户信息表数据
         */
        $res = $this->model->get_one('uid,salt,password', ['mobile' => $request_data['mobile']]);
        if (empty($res)) {
            $this->returnError('用户不存在');
        }
        //检查原密码是否正确        
        $salt = isset($res['salt']) ? $res['salt'] : '';
        $pwd = $this->model->get_encrypt_password($request_data['old_pwd'], $salt);
        if ($pwd !== $res['password']) {
            $this->returnError('原始密码错误');
        }
        //替换新密码
        $new_pwd_info = $this->model->gen_encrypt_password($request_data['new_pwd']);
        $rs = $this->model->edit(['mobile' => $request_data['mobile']], ['password' => $new_pwd_info['encrypt_password'], 'salt' => $new_pwd_info['salt']]);
        if (!$rs) {
            $this->returnError('修改密码失败');
        }
        $this->returnData([]);
    }

    /**
     * 获取收货地址库
     */
    public function get_addr_bucket_get()
    {
        $this->load->model('um/um_regions');
        $res = $this->um_regions->get_all('*');
        $this->returnData($res);
    }

    /**
     * 获取收货地址列表
     */
    public function get_addr_get()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'uid' => ['用户ID', 'required', 'integer'],
        ]);

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.获取用户真实收货地址数据表
         */
        $this->load->model('um/um_addr');
        $sql = $this->um_addr->getListSql('*', [ 'uid' => $request_data['uid']]);
        $grid = $this->grid($sql, 'create_at asc');
        $this->returnData($grid);
    }

    /**
     * 添加收货地址
     */
    public function add_addr_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'uid' => ['用户ID', 'required', 'integer'],
            'mobile' => ['手机号', 'required', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'mobile2' => ['手机号2', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'mobile3' => ['手机号3', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'prov' => ['省', 'required', 'max_length[20]'],
            'city' => ['市', 'required', 'max_length[20]'],
            'dist' => ['区', 'required', 'max_length[20]'],
            'street' => ['街道', 'required', 'max_length[255]'],
            'receiver' => ['收货人', 'required', 'regex_match[/^[\x{4e00}-\x{9fa5}a-z]+$/iu]', 'max_length[20]'],
            //'tell' => ['用户ID','required',), //座机
            'default' => ['默认收货地址', 'in_list[0,1]'], //是否默认 0:非默认,1:默认
                ], [], 'post');

        /*
         * 验证成功后的逻辑
         * 1.判断地址是否有重复
         * 2.判断有否已有默认收货地址, 如有默认,用新默认地址来替换
         * 3.如果用户还没有收货地址, 将当前添加的地址设为默认地址
         * 4.添加真实收货地址数据表
         */
        $this->load->model('um/um_addr');
        $request_data['default'] = !empty($request_data['default']) ? 1 : 0;
        $check = $this->um_addr->get_one('*', $request_data);
        if (!empty($check)) {
            $this->returnError('不能添加重复的收货地址');
        }

        //检查是否已有默认地址
        if (isset($request_data['default']) && $request_data['default'] == 1) {
            $this->um_addr->edit(['uid' => $request_data['uid']], ['default' => 0]);
        } else {
            //检查是否是第1次添加虚拟地址,是则设置为默认地址
            if (empty($this->um_addr->get_one('*', ['uid' => $request_data['uid']]))) {
                $request_data['default'] = 1;
            }
        }

        //添加收货地址数据表
        $request_data['create_at'] = date('Y-m-d H:i:s');
        $id = $this->um_addr->add($request_data);
        if (!$id) {
            $this->returnError('添加收货地址失败');
        }
        $this->returnData([]);
    }

    /**
     * 修改收货地址
     */
    public function edit_addr_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'id' => ['地址ID', 'required', 'integer'],
            'uid' => ['用户ID', 'required', 'integer'],
            'mobile' => ['手机号', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'mobile2' => ['手机号2', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'mobile3' => ['手机号3', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
            'prov' => ['省', 'max_length[20]'],
            'city' => ['市', 'max_length[20]'],
            'dist' => ['区', 'max_length[20]'],
            'street' => ['街道', 'max_length[255]'],
            'receiver' => ['收货人', 'regex_match[/^[\x{4e00}-\x{9fa5}a-z]+$/iu]', 'max_length[20]'],
            //'tell' => ['用户ID','required',), //座机
            'default' => ['默认收货地址', 'in_list[0,1]'], //是否默认 0:非默认,1:默认
                ], [], 'post');

        /**
         * 验证成功后的逻辑
         * 1.判断当前用户需要更新的地址是否是他自己的
         * 2.更新用户相应的收货地址
         */
        $this->load->model('um/um_addr');
        $check = $this->um_addr->get_one('*', ['id' => $request_data['id']]);
        if (empty($check)) {
            $this->returnError('地址不存在,请检查');
        }
        if (!empty($check) && $check['uid'] !== $request_data['uid']) {
            $this->returnError('用户信息不对应,请检查');
        }
        //检查是否已有默认地址
        if (isset($request_data['default']) && $request_data['default'] == 1) {
            $this->um_addr->edit(['uid' => $request_data['uid']], ['default' => 0]);
        }
        foreach ($request_data as $k => &$n) {
            if (empty($n)) {
                unset($request_data[$k]);
            }
        }
        //更新收货地址
        $request_data['update_at'] = date('Y-m-d H:i:s');
        $res = $this->um_addr->edit(['uid' => $request_data['uid'], 'id' => $request_data['id']], $request_data);
        if (!$res) {
            $this->returnError('未更改任何信息,或更新收货地址失败');
        }
        $this->returnData([]);
    }

    /**
     * 删除收货地址  （支持批量删除）
     */
    public function del_addr_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'id' => ['地址ID', 'required', 'regex_match[/^[1-9]+[\d]*(,[1-9]+[\d]*)*$/]'],
            'uid' => ['用户ID', 'required', 'integer'],
                ], [], 'post');

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.查询用户信息表数据
         */
        //检测用户数据信息有效性
        $this->load->model('um/um_addr');
        $ids = explode(',', $request_data['id']);
        $check = $this->um_addr->get_all('*', "id in({$request_data['id']}) and uid={$request_data['uid']}");
        if (empty($check)) {
            $this->returnError('该地址不存在,请检查');
        }
        if (count($check) !== count($ids)) {
            $this->returnError('有不存在的地址ID,请检查');
        }

        //删除虚拟收货地址
        $res = $this->um_addr->del("id in({$request_data['id']})");
        if (!$res) {
            $this->returnError('删除地址失败');
        }
        $this->returnData([]);
    }

    /**
     * 短信验证发送 (企业信使)
     */
    public function send_vcode_post()
    {
        //验证请求数据
        $request_data = $this->check_param([
            'mobile' => ['手机号', 'required', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
                ], [], 'post');

        /**
         * 验证成功后的逻辑
         * 1.频繁发送短信的时间限制
         * 1.根据短信模板发送短信
         */
        $this->load->library('sms');
        $this->load->model('nm/nm_message');
        $vcode_overtime = 60; //60秒需要重新发验证码
        $now_time = time();
        //1.根据手机号码查询对应的验证码
        $rs_message = $this->nm_message->get_latest_message($request_data['mobile']);
        if (!empty($rs_message)) {
            $createAt = strtotime($rs_message['create_at']);
            if ($now_time - $createAt < $vcode_overtime) {
                $this->returnError("您的请求过于频繁,请稍候再试!");
            }
        }

        //根据短信模板发送短信
        $vcode = rand(1000, 9999); //4位验证码        
        $content = "您的验证码是{$vcode}，快去完成验证吧~";
        $message_id = $this->nm_message->add_message($request_data['mobile'], '发送短信验证码', $content, $vcode);
        $rs = $this->sms->send_vcode_qyxs($content, $request_data['mobile']);
        if ($rs) {
            $update_rs = $this->nm_message->update_message($message_id, ['send_status' => 1]);
        } else {
            $update_rs = $this->message->update_message($message_id, ['send_status' => 2, 'update_at' => date("Y-m-d H:i:s")]);
            $error = isset($rs['detail']) ? $rs['detail'] : '您请求过于频繁,请稍候再试!';
            $this->returnError($error);
        }
        $this->returnData([]);
    }

    /**
     * 短信验证发送 (阿里大鱼)
     */
    public function send_vcode2_post()
    {
        //验证请求数据
        $request_data = $this->check_param([
            'mobile' => ['手机号', 'required', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/]'],
                ], [], 'post');

        //临时测试        
        $this->load->model('nm/nm_message');
        $vcode = rand(1000, 9999); //4位验证码
        $content = sprintf('您的验证码是%s ，快去完成验证吧~', $vcode);
        $message_id = $this->nm_message->add_message($request_data['mobile'], '发送短信验证码', $content, $vcode);
        $this->returnData(['vcode' => $vcode]);
        return true;

        /**
         * 验证成功后的逻辑
         * 1.频繁发送短信的时间限制
         * 1.根据短信模板发送短信
         */
        $this->load->library('sms');
        $this->load->model('nm/nm_message');
        $vcode_overtime = 300; //300秒需要重新发验证码
        $now_time = time();
        //1.根据手机号码查询对应的验证码
        $rs_message = $this->nm_message->get_latest_message($request_data['mobile']);
        if (!empty($rs_message)) {
            $createAt = strtotime($rs_message['create_at']);
            if ($now_time - $createAt < $vcode_overtime) {
                $this->returnError("您的请求过于频繁,请稍候再试!");
            }
        }

        //根据短信模板发送短信
        $vcode = rand(1000, 9999); //4位验证码

        $content = sprintf('您的验证码是%s', $vcode);
        $message_id = $this->nm_message->add_message($request_data['mobile'], '发送短信验证码', $content, $vcode, 'sms');
        $rs = $this->sms->send_vcode($vcode, $request_data['mobile']);
        if ($rs) {
            $update_rs = $this->nm_message->update_message($message_id, ['send_status' => 1]);
        } else {
            $update_rs = $this->message->update_message($message_id, ['send_status' => 2, 'update_at' => date("Y-m-d H:i:s")]);
            $error = isset($rs['detail']) ? $rs['detail'] : '您请求过于频繁,请稍候再试!';
            $this->returnError($error);
        }
        $this->returnData([]);
    }

    /**
     * FAQ 常见问题
     */
    public function faq_get()
    {
        $this->returnData(['url' => base_url() . 'home/faq']);
    }

    /**
     * 更新个推clientid
     */
    public function clientid_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'uid' => ['用户ID', 'required', 'integer'],
            'device_type' => ['设备ID', 'required', 'in_list[1, 2]'], //1:android,2:ios',
            'clientid' => ['个推ID', 'required', 'max_length[45]'], //个推的clientid
                ], [], 'get_post'); //首先获取注册的类型
        /**
         * 验证成功后的逻辑
         * 1.读取用户信息
         * 2.判断是否需要更新
         * 3.更新
         */
        $this->load->model('um/um_user');
        $user_info = $this->um_user->get_one('*', ['uid' => $request_data['uid']]);
        //检查是否有传clientid参数
        if (!empty($request_data['clientid']) and $request_data['clientid'] != $user_info['clientid'] and ! empty($request_data['device_type'])) {
            $up_rs = $this->um_user->edit(['uid' => $user_info['uid']], ['clientid' => $request_data['clientid'], 'device_type' => $request_data['device_type']]);
            if (!$up_rs) {
                writelog(['msg' => "更新clientid失败 clientid|{$request_data['clientid']} uid|{$user_info['uid']}"]);
                $this->returnError("更新clientid失败");
            }
        }
        //成功返回数据
        $this->returnData([]);
    }

    /**
     * 将消息标记为已读
     */
    public function readmsg_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([ 'uid' => ['用户ID', 'required', 'integer'], 'msg_id' => ['消息ID', 'required', 'integer']], [], 'post');
        /*
         * 验证成功后的逻辑
         * 根据用户id清理badge
         */
        $this->load->model('nm/nm_notice');
        $this->nm_notice->edit(['uid' => $request_data['uid'], 'id' => $request_data['msg_id']], ['status' => '1']);
        //判断是否需要领取的消息
        $this->load->model('nm/nm_notice');
        $info = $this->nm_notice->get_one('*', ['id' => $request_data['msg_id'], 'uid' => $request_data['uid']]);
        $this->returnData($info);
    }

    /**
     * 将消息标记为已经领取
     */
    public function receivemsg_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([ 'uid' => ['用户ID', 'required', 'integer'], 'msg_id' => ['消息ID', 'required', 'integer']], [], 'post');
        /*
         * 验证成功后的逻辑
         * 根据用户id清理badge
         */
        $this->load->model('nm/nm_notice');
        $info = $this->nm_notice->get_one('*', ['id' => $request_data['msg_id'], 'uid' => $request_data['uid']]);
        if (isset($info['is_get']) && $info['is_get'] == 1) {
            $this->returnError('你已经领取该消息的奖励,无需重复领取');
        }
        $this->nm_notice->edit(['uid' => $request_data['uid'], 'id' => $request_data['msg_id']], ['is_get' => '1', 'status' => '1']);

        //如果是下载软件的情况,需要将送下载软件的积分送给用户 ,即 msg_type=3 (只有下载软件，需要在消息领取处增加用户积分，其它的均不变)
        //此处逻辑客户要修改为, 下载软件后推送消息到用户，在消息列表里领取下载软件送的积分，再写交易记录和更新用户的积分.
        $info = $this->nm_notice->get_one('*', ['id' => $request_data['msg_id'], 'uid' => $request_data['uid']]);
        $param = isset($info['param']) ? json_decode($info['param'], true) : [];
        if (isset($param['msg_type']) && $param['msg_type'] == 3) {
            $this->load->model('um/um_trans_record');
            $time = date("Y-m-d H:i:s");
            $insert_data = [
                'name' => "下载软件获取积分",
                'uid' => $request_data['uid'],
                'software_id' => isset($param['software_id']) ? $param['software_id'] : 0,
                'trans_type' => 3, //1.充值，2.兑换，3.下载软件，4.消费,5.签到,6.其它
                'value' => isset($param['score']) ? $param['score'] : 0, //订单额
                'trans_unit' => isset($param['trans_unit']) ? $param['trans_unit'] : 0, //交易单位（1.余额，2.积分，3.流量币，4其他）
                'create_at' => $time,
                'update_at' => $time,
            ];
            $this->um_trans_record->add($insert_data);
            //更新用户积分
            $this->load->model('um/um_user');
            $user = $this->um_user->get_one("*", ['uid' => $request_data['uid']]);
            $this->um_user->edit(['uid' => $request_data['uid']], [
                'score' => $user['score'] + $insert_data['value'],
                'update_at' => date("Y-m-d H:i:s"),
            ]);
        }
        $this->returnData([]);
    }

    /**
     * 将消息全部标记为已读
     */
    public function readallmsg_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([ 'uid' => ['用户ID', 'required', 'integer']], [], 'post');
        /*
         * 验证成功后的逻辑
         * 根据用户id清理badge
         */
        $this->load->model('nm/nm_notice');
        $this->nm_notice->edit(['uid' => $request_data['uid'], 'status' => '0'], ['status' => '1']);
        $this->returnData([]);
    }

    /**
     * 消息删除
     * @param int uid 用户id
     * @param int msg_id 消息id
     * @return json
     * */
    public function delmsg_post()
    {
        //验证请求数据
        $request_data = $this->check_param([ 'uid' => ['用户ID', 'required', 'integer'], 'msg_id' => ['消息ID', 'required', 'integer']], [], 'post');
        /**
         * 验证成功后根据用户id清理badge
         * */
        $this->load->model('nm/nm_notice');
        $this->nm_notice->del(['uid' => $request_data['uid'], 'id' => $request_data['msg_id']]);
        $this->returnData([]);
    }

    /**
     * 获取消息列表
     */
    public function msg_get()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'uid' => ['用户ID', 'required', 'integer'],
            'type' => ['消息类型', 'required', 'in_list[all,unread,read]'], //所有消息 未读消息 已读消息
        ]);

        /*
         * 验证成功后的逻辑
         * 1.校验用户有效性(已前置处理)
         * 2.获取用户真实收货地址数据表
         */
        $this->load->model('nm/nm_notice');
        $where = ['uid' => $request_data['uid']];
        switch ($request_data['type']) {
            case 'unread':
                $where['status'] = '0';
                break;
            case 'read':
                $where['status'] = '1';
                break;
        }
        $sql = $this->nm_notice->getListSql('*', $where);
        $grid = $this->grid($sql, 'id desc');
        $this->returnData($grid);
    }

}
