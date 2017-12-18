<?php

/*
 * 服务商模块
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Apibase.php';

/**
 * test
 */
class Api_provider extends Apibase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('um/um_provider', 'model');
    }

    public function provider_info_post()
    {
        $request_data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
                ], [], 'post');
        $data = $this->model->get_one('*', ['id' => $request_data['id']]);
        if (!$data) {
            $this->returnData([]);
        }
        $this->returnData($data);
    }

    public function add_edit_provider_post()
    {
        $request_data = $this->check_param([
            'id' => ['ID', 'integer'],
            'uid' => ['uid', 'required', 'integer'],
            'company_id' => ['公司id', 'required', 'integer'],
            'apply_time' => ['申请时间', 'required'],
            'effect_time' => ['生效时间', 'required'],
            'invest_type' => ['投资方式', 'required', 'integer'],
            'fund_type' => ['资金类型', 'required', 'integer'],
            'invest_field' => ['投资区域', 'required', 'integer'],
            'invest_area' => ['投资区域', 'required'],
            'invest_amount' => ['投资资金范围', 'required', 'integer'],
            'content' => ['机构介绍', 'required'],
                ], [], 'post');

        if (empty($request_data['id'])) {
            unset($request_data['id']);
            $this->model->add($request_data);
        } else {
            $info = $this->model->get_one('*', ['id' => $request_data['id']]);
            if (!$info) {
                $this->returnError('未查询到信息');
            }
            $this->model->edit(['id' => $request_data['id']], $request_data);
        }
        $this->returnData([]);
    }

}
