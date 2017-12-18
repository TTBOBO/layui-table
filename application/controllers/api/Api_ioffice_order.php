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
class Api_ioffice_order extends ApiCbase {

    public function _init()
    {
        $this->load->model('om/om_iof_order');
        // $this->userInfo = [
        //     'uid'=>1
        //     ];
        // $this->inputData = [
        //     'pay_type'=>'wxapp',
        //     'id'=>1,
        // ];
    }

    /**
     * 添加订单
    */
    public function add_post()
    {
        $data = $this->inputData;
        //todo这里的数据正确性有待校验比如金额？
        $insert_data = [
            'code' => 'IOF'.date('YmdHis').rand(100, 999),
            'price' => $data['price'],
            'uid' => $this->loginData['id'],
            'shop_id' => $data['shop_id'],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'creator' => $this->loginData['id'],
            'service_start' => strtotime($data['service_start']),
            'service_end' => strtotime($data['service_end']),
            'create_at' => time(),
            'floor_room_info' => isset($data['floor_room_info'])?serialize($data['floor_room_info']):'',
            'remark' => isset($data['remark'])?$data['remark']:'',
            'goods_list_ids' => isset($data['goods_list_ids'])?implode(',',$data['goods_list_ids']):'',
            'goods_list_price' =>(float) $data['goods_list_price'],
            'product_id' => $data['product_id'],
        ];
        $this->om_iof_order->add($insert_data);
        
        $this->returnData([]);
    }

    public function validAdd_post()
    {
        $this->check_param([
            'price' => ['订单总金额', 'required'],
            'shop_id' => ['店铺ID', 'required', 'integer'],
            'service_start' => ['服务开始时间', 'required'],
            'service_end' => ['服务结束时间', 'required'],
            // 'floor_room_info' => ['楼层房号信息', 'required'],
            // 'goods_list_ids' => ['房号里的增值服务清单', 'required'],
            'goods_list_price' => ['房号里的增值服务总价', 'required'],
            'product_id' => ['商品ID', 'required', 'integer'],
        ]);
    }
    
    /**
     * 查看订单详情
    */
    public function detail_get()
    {
        $info = $this->om_iof_order->getDetail($this->inputData['id'], ['uid'=>$this->loginData['id']]);
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
        $info = $this->om_iof_order->getDetail($data['id'], ['uid'=>$this->loginData['id']]);
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
