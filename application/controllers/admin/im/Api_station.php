<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Apibase.php';


class Api_station extends Apibase
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('im/im_station', 'model');
    }

}
