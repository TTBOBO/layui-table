<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/Apibase.php';

class Api_role extends Apibase {

    function __construct()
    {
        parent::__construct();
        $this->load->model('am/am_admin_role');
        $this->model = $this->am_admin_role;
    }

}
