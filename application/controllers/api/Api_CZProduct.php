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
class Api_CZProduct extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;
        
        $this->load->model('im/im_cz_product');
        $this->model = $this->im_cz_product;
    }

    /**
     * 长租列表
    */
    public function list_get()
    {
        $grid = $this->model->newGrid('*', [], $this->getInputPage(), $this->getInputPageSize(), 'id desc');
        $this->returnData($grid);
    }

    /**
     * 长租详情
    */
    public function detail_get()
    {
        $info = $this->model->get_one('*', ['id'=>$this->inputData['id']]);

        $this->returnData($info);
    }

}
