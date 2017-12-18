
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
class Api_agent extends Apibase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pm/pm_agent', 'model');
    }

    public function change_status_post()
    {
        $request_data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
            'status' => ['代理审批状态', 'required', 'integer'], // 0-待审核 1-通过 2-不通过 
                ], [], 'post');
        $info = $this->model->get_one('*', ['id' => $request_data['id']]);
        if (!$info) {
            $this->returnError('未查到代理');
        }
        $request_data['examine_time'] = date("Y-m-d H-i-s", time());
        $this->model->edit(['id' => $request_data['id']], $request_data);
        $this->returnData();
    }

}
