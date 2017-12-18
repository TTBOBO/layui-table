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
class Api_fin extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;
        $this->load->model('um/um_company_service');
        
        $this->extendWhere = ['company_id'=>['in', $this->um_company_service->getFinCompanyIds()]];
    }

    /**
     * 投融学院列表
    */
    public function companyList_get()
    {
        $this->load->model('um/um_company_service');

        $this->searchField = ['cate_id', 'industry_id', 'city_ids'=>'city_ids@like'];
        $grid = $this->um_company_service->newGrid('*', $this->getInputConditon(), $this->getInputPage(), $this->getInputPageSize(), 'id desc');
        $this->returnData($grid);
    }

    /**
     * 活动路演列表
    */
    public function activityList_get()
    {
        $this->load->model('um/um_activity');
        $data = $this->inputData;

        $this->searchField = ['industry_id', 'city_ids'=>'city_ids@like'];
        
        $grid = $this->um_activity->newGrid('*', $this->getInputConditon(), $this->getInputPage(), $this->getInputPageSize(), 'um_activity.id DESC');
        $this->returnData($grid);
    }


}
