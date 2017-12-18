<?php
/*
 * 海脉会接口
 * @author:quzhanggui Version 1.0.0 2016-9-18
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/ApiCbase.php';

/**
 * 海脉汇接口
 */
class Api_im_channel extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;
    }

     /**
     * 渠道入住
    */
    public function add_post()
    {
        $this->check_param([
            'name' => ['渠道名称', 'required'],
            'channel_cateid' => ['渠道资源分类', 'required', 'integer'],
            'industry_id' => ['行业ID', 'required', 'integer'],
            'city_id' => ['城市ID', 'required', 'integer'],
            'logo' => ['渠道logo', 'required'],
            'description' => ['渠道描述', 'required'],
            'special_info' => ['渠道特色信息', 'required'],
            'recommend_reason' => ['推荐理由', 'required'],
            'content' => ['渠道内容', 'required'],
        ]);
        
        $this->load->model('im/im_channel');
        $data = $this->inputData;
        
        //todo这里的数据正确性有待校验比如金额？
        $insert_data = [
            'name' => $data['name'],
            'channel_cateid' => $data['channel_cateid'],
            'industry_id' => $data['industry_id'],
            'city_id' => $data['city_id'],
            'logo' => $data['logo'],
            'description' => $data['description'],
            'special_info' => $data['special_info'],
            'recommend_reason' => $data['recommend_reason'],
            'content' => $data['content'],
        ];
        $this->im_channel->add($insert_data);
        
        $this->returnData([]);
    }

    /**
     * 渠道列表
    */
    public function list_get()
    {
        $this->load->model('im/im_channel');
        $data = $this->inputData;
        
        $this->searchField = ['industry_id', 'city_id', 'keyword'=>'name@like'];
        
        $grid = $this->im_channel->newGrid('*', $this->getInputConditon(), $this->getInputPage(), $this->getInputPageSize(), 'id asc');
        $this->returnData($grid);
    }
    
     /**
     * 详情
    */
    public function detail_get()
    {
         //验证请求数据 
        $this->check_param([
            'id' => ['海脉汇渠道公司ID', 'required', 'integer'],
        ]);
        
        $this->load->model('im/im_channel');
        $info = $this->im_channel->get_one('*', ['id'=>$this->inputData['id']]);

        $this->returnData($info);
    }

     /**
     * 渠道人才列表
    */
    public function peopleList_get()
    {
        $this->load->model('im/im_channel_people');
        $data = $this->inputData;
        
        $this->searchField = ['industry_id', 'city_id'];
        
        $grid = $this->im_channel_people->newGrid('*', $this->getInputWhere()+['is_show'=>1], $this->getInputPage(), $this->getInputPageSize(), 'id DESC');
        $this->returnData($grid);
    }
    
     /**
     * 渠道人才详情
    */
    public function peopleDetail_get()
    {
         //验证请求数据 
        $this->check_param([
            'id' => ['海脉汇渠道资源人才ID', 'required', 'integer'],
        ]);
        
        $this->load->model('im/im_channel_people');
        $info = $this->im_channel_people->get_one('*', ['id'=>$this->inputData['id']]);

        $this->returnData($info);
    }

}
