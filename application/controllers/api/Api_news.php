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
class Api_news extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;
        $this->load->model('pm/pm_news');
        $this->model = $this->pm_news;
    }

    /**
     * 资讯列表
    */
    public function list_get()
    {
        $grid = $this->model->newGrid('*', ['is_show'=>1], $this->getInputPage(), $this->getInputPageSize(), 'sort DESC,id desc');
        $this->returnData($grid);
    }

    /**
     * 资讯详情
    */
    public function detail_get()
    {
        $info = $this->model->get_one('*', ['id'=>$this->inputData['id'],'is_show'=>1]);

        $this->returnData($info);
    }

    protected function validDetail_get()
    {
         //验证请求数据 
        $this->check_param([
            'id' => ['资讯ID', 'required', 'integer'],
        ]);
    }


}
