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
class Api_industry extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;

    }

 
   /**
     * 行业列表
    */
    public function list_get()
    {
        $this->load->model('pm/pm_industry');
        
        $grid = $this->pm_industry->newGrid('*', [], $this->getInputPage(), $this->getInputPageSize(), 'id asc');
        $this->returnData($grid);
    }

}
