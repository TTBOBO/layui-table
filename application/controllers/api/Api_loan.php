<?php

/*
 * 用户相关
 * @author:jacky Version 1.0.0 2016-9-18
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/ApiCbase.php';
/**
 * 用户模块通用接口
 */
class Api_loan extends ApiCbase {

    public function _init()
    {
        $this->needLogin = true;
    }

    public function add_post()
    {
        $data = $this->check_param([
            'loan_amount' => ['loan_amount', 'required'],
            'loan_period' => ['loan_period', 'required'],
            'carrer' => ['carrer', 'required'],
        ]);
        
        $this->load->model('um/um_loan');

        $insert_data = [
            'loan_amount' => $data['loan_amount'],
            'loan_period' => $data['loan_period'],
            'carrer' => $data['carrer'],
            'uid' => $this->loginData['uid'],
            'company_id' => $this->loginData['company_id'],
            'create_at' => date('Y-m-d H:i:s'),
        ];
        $this->um_loan->add($insert_data);
        
        $this->returnData([]);
    }


}
