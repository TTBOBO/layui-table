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
class Api_activity extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;

    }

    /**
     * 活动路演列表
    */
    public function list_get()
    {
        $this->load->model('um/um_activity');

        $grid = $this->um_activity->newGrid('*', $this->getInputWhere(), $this->getInputPage(), $this->getInputPageSize(), 'id DESC');
        $this->returnData($grid);
    }
    
    /**
     * 详情
    */
    public function detail_get()
    {
         //验证请求数据 
        $this->check_param([
            'id' => ['ID', 'required', 'integer'],
        ]);
        
        $this->load->model('um/um_activity');
        $info = $this->um_activity->get_one('*', ['id'=>$this->inputData['id']]);

        $this->returnData($info);
    }

    /**
     * 商机动态列表
    */
    public function businessDynamicslist_get()
    {
        $this->load->model('am/am_business_dynamics');

        $grid = $this->am_business_dynamics->newGrid('*', $this->getInputWhere(), $this->getInputPage(), $this->getInputPageSize(), 'id DESC');
        $this->returnData($grid);
    }
    
    /**
     * 商机动态详情
    */
    public function businessDynamicsDetail_get()
    {
         //验证请求数据 
        $data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
        ]);
        
        $this->load->model('am/am_business_dynamics');
        $info = $this->am_business_dynamics->get_one('*', ['id'=>$data['id']]);

        $this->returnData($info);
    }


     /**
     * 圈子动态列表
    */
    public function circleDynamicslist_get()
    {
        $this->load->model('am/am_circle_dynamics');

        $grid = $this->am_circle_dynamics->newGrid('*', $this->getInputWhere(), $this->getInputPage(), $this->getInputPageSize(), 'id DESC');
        $this->returnData($grid);
    }
    
    /**
     * 圈子动态详情
    */
    public function circleDynamicsDetail_get()
    {
         //验证请求数据 
        $data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
        ]);
        
        $this->load->model('am/am_circle_dynamics');
        $info = $this->am_circle_dynamics->get_one('*', ['id'=>$data['id']]);

        $this->returnData($info);
    }

    
     /**
     * 人脉动态列表
    */
    public function contactsDynamicslist_get()
    {
        $this->load->model('am/am_contacts_dynamics');

        $grid = $this->am_contacts_dynamics->newGrid('*', $this->getInputWhere(), $this->getInputPage(), $this->getInputPageSize(), 'id DESC');
        $this->returnData($grid);
    }
    
    /**
     * 人脉动态详情
    */
    public function contactsDynamicsDetail_get()
    {
         //验证请求数据 
        $data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
        ]);
        
        $this->load->model('am/am_contacts_dynamics');
        $info = $this->am_contacts_dynamics->get_one('*', ['id'=>$data['id']]);

        $this->returnData($info);
    }

}
