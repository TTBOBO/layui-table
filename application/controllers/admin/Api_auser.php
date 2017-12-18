<?php

/*
 * 管理员
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Apibase.php';

/**
 * test
 */
class Api_auser extends Apibase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('am/am_admin', 'model');
    }

    /**
     * 多语言测试
     * @param language_type  默认0为中文,1为英文
     */
    public function tt_get()
    {
        $this->lang->load('error');
        $a = $this->lang->line('txt_base_validation');
        var_dump($a);
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
            $this->returnData([]);
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
        $this->returnData($grid);
    }

    public function user_addr_post()
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
        $this->load->model('um/um_addr');
        $grid = $this->um_addr->grid($request_data['select'], $request_data['filter'], $request_data['page'], $request_data['limit'], '', '', $request_data['order']);

        $default = array('非默认', '默认');
        $data = $grid['rows'];
        if (!$data) {
            $this->returnData([]);
            return;
        }
        foreach ($data as $key => $val) {
            $data[$key]['default'] = $default[$data[$key]['default']];
        }
        $grid['rows'] = $data;
        $this->returnData($grid);
    }

    //公司列表
    public function company_list_post()
    {
        $request_data = $this->check_param([
            'select' => ['查询字段'],
            'limit' => ['每页显示多少条', 'required', 'integer'],
            'page' => ['第几页', 'integer'],
            'filter' => ['查询条件'],
            'order' => ['排序'],
                ], [], 'post');
        if (!$request_data['order']) {
            $request_data['order'] = 'id desc';
        }
        $this->load->model('um/um_company');
        $grid = $this->um_company->grid($request_data['select'], $request_data['filter'], $request_data['page'], $request_data['limit'], '', '', $request_data['order']);
        $data = $grid['rows'];
        if (!$data) {
            $this->returnData([]);
            return;
        }
        $grid['rows'] = $data;
        $this->returnData($grid);
    }

    //公司服务
    public function company_service_post()
    {
        $request_data = $this->check_param([
            'select' => ['查询字段'],
            'limit' => ['每页显示多少条', 'required', 'integer'],
            'page' => ['第几页', 'integer'],
            'filter' => ['查询条件'],
            'order' => ['排序'],
                ], [], 'post');
        if (!$request_data['order']) {
            $request_data['order'] = 'id desc';
        }
        $this->load->model('um/um_company_service');
        $grid = $this->um_company_service->grid($request_data['select'], $request_data['filter'], $request_data['page'], $request_data['limit'], '', '', $request_data['order']);
        $data = $grid['rows'];
        if (!$data) {
            $this->returnData([]);
            return;
        }
        $grid['rows'] = $data;
        $this->returnData($grid);
    }

    //服务类型
    public function company_service_cate_post()
    {
        $request_data = $this->check_param([
            'select' => ['查询字段'],
            'limit' => ['每页显示多少条', 'required', 'integer'],
            'page' => ['第几页', 'integer'],
            'filter' => ['查询条件'],
            'order' => ['排序'],
                ], [], 'post');
        if (!$request_data['order']) {
            $request_data['order'] = 'id desc';
        }
        $this->load->model('um/um_company_service_cate');
        $grid = $this->um_company_service_cate->grid($request_data['select'], $request_data['filter'], $request_data['page'], $request_data['limit'], '', '', $request_data['order']);
        $data = $grid['rows'];
        if (!$data) {
            $this->returnData([]);
            return;
        }
        $grid['rows'] = $data;
        $this->returnData($grid);
    }

    public function service_cate_edit_add_post()
    {
        $request_data = $this->check_param([
            'id' => ['ID', 'integer'],
            'name' => ['名称', 'required'],
            'parent_id' => ['父类id', 'integer']
                ], [], 'post');

        $this->load->model('um/um_company_service_cate');
        if (empty($request_data['id'])) {
            unset($request_data['id']);
            $request_data['create_at'] = date('Y-m-d h:i:s', time());
            $this->um_company_service_cate->add($request_data);
        } else {
            $info = $this->um_company_service_cate->get_one('*', ['id' => $request_data['id']]);
            if (!$info) {
                $this->returnError('未查询到信息');
            }
            $this->um_company_service_cate->edit(['id' => $request_data['id']], $request_data);
        }
        $this->returnData([]);
    }

}
