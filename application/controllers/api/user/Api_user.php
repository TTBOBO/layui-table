<?php

/*
 * 文章管理
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/Apibase.php';

/**
 * test
 */

class Api_user extends Apibase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('am/am_user', 'model');
    }

    /**
     * 用户管理用户列表start
     */
    public function index_post()
    {
        $request_data = $this->check_param([
            'select' => ['查询字段'],
            'limit' => ['每页显示多少条', 'required', 'integer'],
            'page' => ['第几页', 'integer'],
            'filter' => ['查询条件'],
            'order' => ['排序'],
                ], [], 'post');
        if (!$request_data['order']) {
            $request_data['order'] = 'uid desc';
        }

        $grid = $this->model->grid($request_data['select'], $request_data['filter'], $request_data['page'], $request_data['limit'], '', '', $request_data['order']);
        $sex = array('未知', '男', '女');
        $mobilecode = array('未认证', '已认证');
        $type = array('个人', '企业');
        $is_company = array('未认证', '已认证');
        $is_provider = array('否', '是');
        $data = $grid['rows'];
        if (!$data) {
            $this->outData([]);
            return;
        }
        foreach ($data as $key => $val) {
            $data[$key]['sex'] = $sex[$data[$key]['sex']];
            $data[$key]['mobilecode'] = $mobilecode[$data[$key]['mobilecode']];
            $data[$key]['type'] = $type[$data[$key]['type']];
            $data[$key]['is_company'] = $is_company[$data[$key]['is_company']];
            $data[$key]['is_provider'] = $is_provider[$data[$key]['is_provider']];
        }
        $grid['rows'] = $data;
        $this->outData($grid);
    }

}
