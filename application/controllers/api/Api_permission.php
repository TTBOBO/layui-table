<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/Apibase.php';

class Api_permission extends Apibase {

    function __construct()
    {
        parent::__construct();
        $this->load->model('am/am_permission');
        $this->model = $this->am_permission;
    }

    public function before_update($modelInfo)
    {
        $now_date = date("Y-m-d H:i:s");
        $permkey = $modelInfo['am_permission.class'] . "@" . $modelInfo['am_permission.method'] . "@" . $modelInfo['am_permission.http_method'];
        if (isset($modelInfo['am_permission.name']) && !empty($modelInfo['am_permission.name'])) {
            
        } else {
            $modelInfo['am_permission.name'] = $permkey;
        }
        $modelInfo['am_permission.permkey'] = $permkey;
        $modelInfo['am_permission.update_at'] = $now_date;
        if (isset($modelInfo['am_permission.id']) && !empty($modelInfo['am_permission.id'])) {
            unset($modelInfo['am_permission.create_at']);
        } else {
            $modelInfo['am_permission.create_at'] = $now_date;
        }
        return $modelInfo;
    }

}
