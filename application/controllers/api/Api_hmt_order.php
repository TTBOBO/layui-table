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
class Api_hmt_order extends ApiCbase {

    public function _init()
    {
        $this->load->model('om/om_hmt_order');
    }

    /**
     * 添加订单
    */
    public function add_post()
    {
        $data = $this->inputData;
        //todo这里的数据正确性有待校验比如金额？
        $insert_data = [
            'code' => 'HMT'.date('YmdHis').rand(100, 999),
            'price' => $data['price'],
            'uid' => $this->loginData['id'],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'creator' => $this->loginData['id'],
            'service_start' => strtotime($data['service_start']),
            'service_end' => strtotime($data['service_end']),
            'create_at' => time(),
            'product_id' => $data['product_id'],
        ];
        $this->om_hmt_order->add($insert_data);
        
        $this->returnData([]);
    }

    public function validAdd_post()
    {
        $this->check_param([
            'price' => ['订单总金额', 'required'],
            'service_start' => ['服务开始时间', 'required'],
            'service_end' => ['服务结束时间', 'required'],
        ]);
    }
    
    /**
     * 查看订单详情
    */
    public function detail_get()
    {
        $info = $this->om_hmt_order->getDetail($this->inputData['id'], ['uid'=>$this->loginData['id']]);
        if(!$info) $this->returnError('订单信息不存在', 210);

        $this->returnData($info);
    }

    public function validDetail_get()
    {
        $this->check_param([
            'id'=>['订单ID', 'required', 'integer'],    
        ]);
    }

    /**
     * 支付订单
    */
    public function pay_post()
    {
        $data =  $this->inputData;
        $info = $this->om_hmt_order->getDetail($data['id'], ['uid'=>$this->loginData['id']]);
        if(!$info) $this->returnError('订单信息不存在', 210);

        //调用支付接口在（微信 支付宝等端口）创建待支付订单
        $this->returnData($this->orderGoToPay($data['pay_type'], $info['code'], $info['price']));
    }

    public function validPay_post()
    {
        $this->check_param([
            'id'=>['订单ID', 'required', 'integer'],   
            'pay_type'=>['required', 'in_list[wxapp,aliapp]'], //支付方式
        ]);
    }

}
