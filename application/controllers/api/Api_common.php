<?php

/*
 * 用户相关
 * @author:jacky Version 1.0.0 2016-9-18
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/ApiCbase.php';

/**
 * 用户模块通用接口
 */
class Api_common extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;
    }

    public function checkUserLogin_get()
    {
        $return = ['isLogin' => 0];
        if ($this->loginData) {
            $return = $this->loginData;
            $return['isLogin'] = 1;
        }

        $this->returnData($return);
    }

    /**
     * 上传文件 dir文件夹名称
     */
    public function upload_file_post()
    {
        $dir = $this->input->get_post('dir');
        $fileName = $_FILES['file']['name']; //源文件名
        if (!empty($fileName)) {
            $file_ext = strrchr($fileName, '.');
            $cur_path = $dir . DIRECTORY_SEPARATOR . date('Ymd') . DIRECTORY_SEPARATOR;
            //$savePath = 'statics' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $cur_path;
            $savePath = 'resource' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $cur_path;
            if (!is_dir($savePath)) {
                $mkres = @mkdir($savePath, 0777, TRUE);
            }
            $file_name = $this->make_rand_code() . $file_ext; //文件保存名字
            $file_path = FCPATH . $savePath; //文件保存路径
            $tmp_file_name = $_FILES['file']['tmp_name']; //得到上传后的临时文件
            move_uploaded_file($tmp_file_name, $file_path . $file_name); //移动文件到最终保存目录
            $http_url = base_url() . $savePath . $file_name;
            $this->returnData($http_url);
        }
    }

    public function switchLanguage_get()
    {
        $this->setMem('lang', $this->inputData['lang']); //中文语言包似乎还没有？

        $this->returnData([]);
    }

    protected function validSwitchLanguage_get()
    {
        //验证请求数据 
        $this->check_param([
            'lang' => ['required', 'in_list[englist,chinese]'],
        ]);
    }

    /**
     * 获取网站配置信息
     */
    public function webConfig_get()
    {
        $this->load->model('pm/pm_web_cfg');

        $this->returnData($this->pm_web_cfg->get_one('*', []));
    }

    /**
     * 获取城市列表
     */
    public function cityList_get()
    {
        $this->load->model('um/um_regions');

        $list = $this->um_regions->get_all('*', ['level' => 1]);
        $this->returnData($list);
    }

    /**
     * 获取资源统计
     */
    public function resourceTotal_get()
    {
        $this->load->model('im/im_channel');
        $this->load->model('im/im_service');
        $this->load->model('pm/pm_industry');
        $this->load->model('um/um_regions');
        $this->load->model('um/um_regions');
        $this->load->model('um/um_regions');

        $info = [
            'channelTotal' => $this->im_channel->countTotal(),
            'finTotal' => 0,
            'billTotal' => 0,
            'servivceTotal' => $this->im_service->countTotal(),
            'spaceTotal' => 0,
            'instustryTotal' => $this->pm_industry->countTotal(),
        ];

        $this->returnData($info);
    }

    /**
     * 添加留言
     */
    public function addGuestBook_post()
    {
        $data = $this->check_param([
            'title' => ['留言主题', 'required'],
            'contact_name' => ['留言者称呼', 'required'],
            'email' => ['留言者email', 'required'],
            'mobile' => ['留言人电话', 'required'],
            'qq' => ['留言人qq', 'required'],
            'addr' => ['留言人地址', 'required'],
            'content' => ['留言内容', 'required'],
        ]);

        $this->load->model('pm/pm_guestbook');

        $insert_data = [
            'title' => $data['title'],
            'contact_name' => $data['contact_name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'qq' => $data['qq'],
            'addr' => $data['addr'],
            'content' => $data['content'],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'create_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ];
        $this->pm_guestbook->add($insert_data);

        $this->returnData([]);
    }

    /**
     * 添加预约看房
     */
    public function addBootHouse_post()
    {
        $data = $this->check_param([
            'prov' => ['省', 'required'],
            'city' => ['市', 'required'],
            'dist' => ['地区', 'required'],
            'boot_time' => ['看房时间', 'required'],
            'name' => ['看房人称呼', 'required'],
            'team_num' => ['团队人数', 'required'],
        ]);

        $this->load->model('im/im_boot_house');

        $insert_data = [
            'prov' => $data['title'],
            'city' => $data['contact_name'],
            'dist' => $data['email'],
            'boot_time' => $data['mobile'],
            'name' => $data['qq'],
            'team_num' => $data['addr'],
            'mobile' => $data['content'],
            'create_at' => date('Y-m-d H:i:s'),
        ];
        $this->im_boot_house->add($insert_data);

        $this->returnData([]);
    }

}
