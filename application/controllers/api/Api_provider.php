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
class Api_provider extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;
        $this->load->model('um/um_provider');
        $this->model = $this->um_provider;
    }

    /**
     * 投资机构入住
    */
    public function add_post()
    {
        $data = $this->check_param([
            'invest_type' => ['invest_type', 'required', 'integer'],
            'fund_type' => ['fund_type', 'required', 'integer'],
            'invest_field' => ['invest_field', 'required', 'integer'],
            'invest_area' => ['invest_area', 'required', 'integer'],
            'invest_amount' => ['invest_amount', 'required', 'integer'],
        ]);
        //todo这里的数据正确性有待校验比如金额？
        $insert_data = [
            'uid' => $this->loginData['id'],
            'company_id' => $this->loginData['company_id'],
            'apply_time' => date('Y-m-d H:i:s'),
            'invest_type' => $data['invest_type'],
            'fund_type' => $data['fund_type'],
            'invest_field' => $data['invest_field'],
            'invest_area' => $data['invest_area'],
            'invest_amount' => $data['invest_amount'],
        ];
        $this->model->add($insert_data);
        
        $this->returnData([]);
    }

    /**
     * 投资机构列表
    */
    public function list_get()
    {
        $this->searchField = [];
        $this->load->model('um/um_company_info');
        $grid = $this->model->newGrid('*', $this->getInputConditon(), $this->getInputPage(), $this->getInputPageSize(), 'id desc');
        
        if($grid['rows']){
            foreach($grid['rows'] as &$gv){
                $gv = $gv+ $this->um_company_info->get_one('company_name,logo',['id'=>$gv['company_id']]);
            }
        }
        
        $this->returnData($grid);
    }

    /**
     * 投资机构详情
    */
    public function detail_get()
    {
        $data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
        ]);
        $this->load->model('um/um_company_info');
        $info = $this->model->get_one('*', ['id'=>$data['id']]);
        $info = $info+ $this->um_company_info->get_one('company_name,logo',['id'=>$info['company_id']]);
        
        $this->returnData($info);
    }

    /**
     * 投资机构列表
    */
    public function peopleList_get()
    {
        $this->searchField = [];
        $this->load->model('um/um_provider_people');
        $this->load->model('um/um_user');

        $grid = $this->um_provider_people->newGrid('*', $this->getInputConditon(), $this->getInputPage(), $this->getInputPageSize(), 'id desc');

        if($grid['rows']){
            foreach($grid['rows'] as &$gv){
                $gv = $gv+ $this->um_user->get_one('nickname,avatar',['uid'=>$gv['uid']]);
            }
        }

        $this->returnData($grid);
    }

    /**
     * 投资机构详情
    */
    public function peopleDetail_get()
    {
        $data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
        ]);
        $this->load->model('um/um_provider_people');
        $this->load->model('um/um_user');
        $info = $this->um_provider_people->get_one('*', ['id'=>$data['id']]);
        $info = $info+ $this->um_user->get_one('nickname,avatar',['uid'=>$info['uid']]);
        
        $this->returnData($info);
    }


}
