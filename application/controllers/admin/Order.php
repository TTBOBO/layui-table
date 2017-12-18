<?php

/*
 * 用户管理
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Adminbase.php';

/**
 * 用户管理
 */
class Order extends Adminbase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('om/om_cz_order');
        $this->model = $this->om_cz_order;
        $this->data = array_merge($this->data, array("category" => "订单管理", "model" => strtolower(__CLASS__)));
    }

    public function cz_order()
    {

        $this->data['title'] = '长租订单';
        $this->twig->render('admin/order/czOrder', $this->data);
    }

    public function cz_order_info()
    {
        $this->data['controlName'] = '/cz_order';
        $this->data['prevTitle'] = '长租订单';
        $this->data['title'] = '长租订单详情';
        $this->twig->render('admin/order/czOrderInfo', $this->data);
    }

    public function ioffice_order()
    {

        $this->data['title'] = 'ioffice订单';
        $this->twig->render('admin/order/iofficeOrder', $this->data);
    }

    public function ioffice_order_info()
    {
        $this->data['controlName'] = '/ioffice_order';
        $this->data['prevTitle'] = 'ioffice订单';
        $this->data['title'] = 'ioffice订单详情';
        $this->twig->render('admin/order/iofficeOrderInfo', $this->data);
    }

    public function entity_order()
    {

        $this->data['title'] = '实体订单';
        $this->twig->render('admin/order/entityOrder', $this->data);
    }

    public function entity_order_info()
    {
        $this->data['controlName'] = '/entity_order';
        $this->data['prevTitle'] = '实体订单';
        $this->data['title'] = '实体订单详情';
        $this->twig->render('admin/order/entityOrderInfo', $this->data);
    }

    public function vir_order()
    {

        $this->data['title'] = '虚拟订单';
        $this->twig->render('admin/order/virOrder', $this->data);
    }

    public function vir_order_info()
    {
        $this->data['controlName'] = '/vir_order';
        $this->data['prevTitle'] = '虚拟订单';
        $this->data['title'] = '虚拟订单详情';
        $this->twig->render('admin/order/virOrderInfo', $this->data);
    }

}
