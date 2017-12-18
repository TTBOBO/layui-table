<?php

/*
 * 支付相关通用接口
 * @author:jacky Version 1.0.0 2016-9-29
 */


defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/Apibase.php';

class Api_pay extends Apibase {

    function __construct()
    {
        parent::__construct();
        $this->load->model('um/um_user');
        $this->model = $this->um_user;
    }

    /**
     * 充值接口 （积分,有量币） 目前只支持微信app支付
     * http://api.test.ejiuzhen.net/api/api_pay/unified_order POST
     * @param int    $uid      用户id
     * @param string $pay_type 暂时写死为wxapp
     * @param int $order_price 订单价格
     */
    public function rechare_post()
    {
        //验证请求数据
        $request_data = $this->check_param([
            'uid' => ['required', 'integer'], // 用户id
            'pay_type' => ['required', 'in_list[wxapp,aliapp]'], //支付方式
            'order_price' => ['required', 'integer'], //充值金额
            'platform_id' => ['required', 'in_list[1,2,3,4]'], //充值支付的时候使用的平台 支付的平台类型ID 0表示未知 1表示安卓 2表示ios 3表示h5 4表示wx
            'buy_type' => ['required', 'in_list[1,2]'], //1积分，2有量币
                ], [], 'post'); //支付订单的价格

        /*
         * 验证成功后的逻辑
         * 存储用户支付时候的ip地址
         * 创建一个待支付订单记录
         * 调用支付接口在（微信 支付宝等端口）创建待支付订单
         * 返回给调用端
         */

        //创建一个待支付订单记录
        $out_trade_no = make_order_code();
        $pay_type_name = $this->config->item('pay_type_names')[$request_data['pay_type']];
        $pay_type_id = $this->config->item('pay_type_ids')[$request_data['pay_type']];
        $now_date = date("Y-m-d H:i:s");

        $this->load->model('om/om_order');

        $insert_data = [
            'code' => $out_trade_no,
            'uid' => $request_data['uid'],
            'money' => $request_data['order_price'],
            'pay_type' => $pay_type_id,
            'buy_type' => $request_data['buy_type'],
            'pay_type_name' => $pay_type_name,
            'platform_id' => $request_data['platform_id'],
            'create_at' => $now_date,
            'update_at' => $now_date,
        ];
        $order_id = $this->om_order->add($insert_data);
        if (!$order_id) {
            $this->returnError("创建待支付订单失败!");
        }

        //调用支付接口在（微信 支付宝等端口）创建待支付订单
        $class_name = $request_data['pay_type'] . 'pay';
        $this->load->library($class_name);
        $pay_order = $this->$class_name->create_unified_order($out_trade_no, $request_data['order_price']);
        if (!$pay_order) {
            $this->returnError("创建待支付订单失败！");
        }
        $this->returnData($pay_order);
    }

    /**
     * 积分与有量币相互兑换
     */
    public function score_excg_vir_money_post()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'type' => ['兑换类型', 'required', 'integer'], //1：积分兑换成有量币，2：有量币兑换成积分
            'uid' => ['用户ID', 'required', 'integer'],
            'value' => ['兑换额', 'required', 'integer'],
                ], [], "post");
        /*
         * 验证成功后的逻辑
         * 1.校验参数有效性(已前置处理)
         * 2.积分与有量币相互兑换
         */
        $this->load->model('um/um_trans_record');
        $res = $this->um_trans_record->score_excg_money($request_data['uid'], $request_data['value'], $request_data['type']);
        if ($res === TRUE) {
            $this->returnData([]);
        } else {
            $this->returnError($res);
        }
    }

}
