<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Apibase.php';

/**
 * 积分流水
 */
class Api_integral extends Apibase
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('om/om_integral', 'model');
    }

}
