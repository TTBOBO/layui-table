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
class Api_program extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;

        $this->load->model('um/um_program');
    }

    /**
     * 添加项目
    */
    public function add_post()
    {
        $data = $this->check_param([
            'name' => ['name', 'required'],
            'thumb' => ['thumb', 'required'],
            'pics' => ['pics', 'required'],
            'descrption' => ['descrption', 'required'],
            'content' => ['content', 'required'],
            'city_ids' => ['city_ids', 'required'],
            'need_amount' => ['need_amount', 'required'],
            'take_shares' => ['take_shares', 'required'],
            'programe_cate_id' => ['programe_cate_id', 'required', 'integer'],
            'platform_name' => ['platform_name', 'required'],
            'platform_status' => ['platform_status', 'required', 'integer'],
            'industry_id' => ['industry_id', 'required', 'integer'],
        ]);
        //todo这里的数据正确性有待校验比如金额？
        $insert_data = [
            'uid' => $this->loginData['id'],
            'company_id' => $this->loginData['company_id'],
            'name' => $data['name'],
            'thumb' => $data['thumb'],
            'pics' => $data['pics'],
            'industry_id' => $data['industry_id'],
            'descrption' => $data['descrption'],
            'content' => $data['content'],
            'create_at' => time(),
            'city_ids' => $data['city_ids'],
            'need_amount' => $data['need_amount'],
            'take_shares' => $data['take_shares'],
            'programe_cate_id' => $data['programe_cate_id'],
            'platform_name' => $data['platform_name'],
            'platform_status' => $data['platform_status'],
        ];
        $this->um_program->add($insert_data);
        
        $this->returnData([]);
    }

    /**
     * 项目列表
    */
    public function list_get()
    {
        $this->searchField = ['industry_id', 'programe_cate_id', 'city_ids@like'];
        
        $grid = $this->um_program->newGrid('*', $this->getInputConditon(), $this->getInputPage(), $this->getInputPageSize(), 'id desc');
        $this->returnData($grid);
    }

    /**
     * 优质项目详情
    */
    public function detail_get()
    {
        //验证请求数据 
        $data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
        ]);
        
        $info = $this->um_program->get_one('*', ['id'=>$data['id']]);

        $this->returnData($info);
    }

}
