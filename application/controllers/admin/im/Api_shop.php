
<?php

/*
 * 文章管理
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Apibase.php';

/**
 * test
 */
class Api_shop extends Apibase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('im/im_shop', 'model');
    }

    public function ru_custom_post()
    {
        $request_data = $this->check_param([
            'select' => ['查询字段'],
            'limit' => ['每页显示多少条', 'required', 'integer'],
            'page' => ['第几页', 'integer'],
            'filter' => ['查询条件'],
            'order' => ['排序'],
            'id' => ['ID', 'required', 'integer'],
                ], [], 'post');
        $request_data['select'] = 'company_ids';
        $grid = $this->model->grid($request_data['select'], $request_data['filter'], $request_data['page'], $request_data['limit'], '', '', $request_data['order']);
        $id = explode(',', $grid['rows'][0]['company_ids']);

        $this->load->model('um/um_company');
        $res = $this->um_company->get_com($grid['rows'][0]['company_ids']);
        $data = [];
        $data['rows'] = $res;
        $data['code'] = 0;

        $this->returnData($data);
    }

}
