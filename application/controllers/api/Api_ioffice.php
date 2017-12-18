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
class Api_ioffice extends ApiCbase {

    public function _init()
    {
        $this->needLogin = false;
    }

    /**
     * 优质项目列表
     */
    public function highQualityProjectsList_get()
    {
        $this->load->model('im/im_high_quality_projects');

        $grid = $this->im_high_quality_projects->newGrid('*', [], $this->getInputPage(), $this->getInputPageSize(), 'id desc');
        $this->returnData($grid);
    }

    /**
     * 优质项目详情
     */
    public function highQualityProjectsDetail_get()
    {
        //验证请求数据 
        $data = $this->check_param([
            'id' => ['项目ID', 'required', 'integer'],
        ]);

        $this->load->model('im/im_high_quality_projects');
        $info = $this->im_high_quality_projects->get_one('*', ['id' => $data['id']]);

        $this->returnData($info);
    }

}
