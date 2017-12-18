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
class Api_company_service extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;
        $this->load->model('um/um_company_service');
        $this->model = $this->um_company_service;
    }

    /**
     * 添加企服
    */
    public function add_post()
    {
        $data = $this->check_param([
            'name' => ['name', 'required'],
            'cate_id' => ['cate_id', 'required', 'integer'],
            'industry_id' => ['industry_id', 'required', 'integer'],
            'type' => ['type', 'required', 'integer'],
            'child_type' => ['child_type', 'required', 'integer'],
            'city_ids' => ['city_ids', 'required'],
            'sell_label' => ['sell_label', 'required'],
            'promise_label' => ['promise_label', 'required'],
            'price' => ['price', 'required'],
            'introduce' => ['introduce', 'required'],
        ]);
        //todo这里的数据正确性有待校验比如金额？
        $insert_data = [
            'name' => $data['name'],
            'cate_id' => $data['cate_id'],
            'industry_id' => $data['industry_id'],
            'type' => $data['type'],
            'child_type' => $data['child_type'],
            'city_ids' => $data['city_ids'],
            'sell_label' => $data['sell_label'],
            'promise_label' => $data['promise_label'],
            'price' => $data['price'],
            'introduce' => $data['introduce'],
            'create_at' => date('Y-m-d H:i:s'),
        ];
        $this->model->add($insert_data);
        
        $this->returnData([]);
    }

    public function childCateList_get()
    {
        $this->searchField = ['cate_id'=>'parent_id'];
        $this->load->model('um/um_company_service_cate');
        $grid = $this->um_company_service_cate->get_all('*', $this->getInputConditon(), 'id desc');

        $this->returnData(getChildTree($grid));
    }

    /**
     * 企服列表
    */
    public function list_get()
    {
        $this->searchField = ['cate_id', 'industry_id', 'type', 'child_type'];
        $grid = $this->model->newGrid('*', $this->getInputConditon(), $this->getInputPage(), $this->getInputPageSize(), 'id desc');
        $this->returnData($grid);
    }

    /**
     * 企服详情
    */
    public function detail_get()
    {
        //验证请求数据 
        $this->check_param([
            'id' => ['ID', 'required', 'integer'],
        ]);
        
        $info = $this->model->get_one('*', ['id'=>$this->inputData['id']]);

        $this->returnData($info);
    }


}
