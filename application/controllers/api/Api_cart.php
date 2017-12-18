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
class Api_cart extends ApiCbase {
    
    const CART_NAME = 'cart';

    public function _init()
    {
        $this->needLogin = false;
    }

    /**
     * 添加购物车
    */
    public function add_post()
    {
        //todo添加购物车这里还需要优化参数
        $data = $this->check_param([
            'price' => ['产品总金额金额', 'required'],
            'product_id' => ['产品ID', 'required', 'integer'],
        ]);

        $this->returnData($this->appendMem(self::CART_NAME, $data));
    }
    
     /**
     * 删除购物车
    */
    public function del_post()
    {
        $requestData = $this->check_param([
            'id' => ['购物车ID', 'required', 'integer'],
        ]);
        $data = $this->getMem(self::CART_NAME);
        unset($data[$requestData['id']]);
        $this->returnData($this->setMem(self::CART_NAME, $data));
    }
    
    /**
     * 购物车详情
    */
    public function detail_get()
    {
        $this->returnData($this->getMem(self::CART_NAME));
    }


}
