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
class Api_service extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;
        $this->load->model('im/im_service');
    }

    /**
     * 服务列表
    */
    public function list_get()
    {
        $grid = $this->im_service->newGrid('*', ['is_del'=>0], $this->getInputPage(), $this->getInputPageSize(), 'id asc');
        $this->returnData($grid);
    }

}
