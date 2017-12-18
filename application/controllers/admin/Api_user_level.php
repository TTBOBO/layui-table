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
class Api_user_level extends Apibase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('um/Um_user_level', 'model');
    }

    public function user_level_info_post()
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

}
