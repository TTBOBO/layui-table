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
class Api_company_service_cate extends Apibase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('um/um_company_service_cate', 'model');
    }

}
