<?php

/*
 * 海脉通模块页面
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Adminbase.php';

class Product extends Adminbase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('um/um_user');
        $this->model = $this->um_user;
        $this->data = array_merge($this->data, array("category" => "产品包管理", "model" => strtolower(__CLASS__)));
    }

    //海脉通首页
    public function index()
    {
        $this->data['title'] = '产品管理';
        $this->twig->render('admin/product/product_list', $this->data);
    }

    //海脉服务管理列表
    public function service()
    {
        $this->data['title'] = '服务管理';
        $this->twig->render('admin/product/service', $this->data);
    }
	
	//海脉服务管理  详情
    public function serviceInfo()
    {
        $this->data['controlName'] = '/service';
        $this->data['prevTitle'] = '服务列表';
        $this->data['title'] = '服务详情';
        $this->twig->render('admin/product/serviceInfo', $this->data);
    }

    //海脉服务管理  添加
    public function addService()
    {
        $this->data['controlName'] = '/service';
        $this->data['prevTitle'] = '服务列表';
        $this->data['title'] = '添加服务';
        $this->twig->render('admin/product/addService', $this->data);
    }

    //海脉服务管理  编辑
    public function editService()
    {
        $this->data['controlName'] = '/service';
        $this->data['prevTitle'] = '服务列表';
        $this->data['title'] = '编辑服务';
        $this->twig->render('admin/product/editService', $this->data);
    }
    //赠送项目（仅限虚拟产品）
    public function presend_item()
    {
        $this->data['title'] = '赠送项目管理';
        $this->twig->render('admin/product/presend_item', $this->data);
    }

    //赠送项目（仅限虚拟产品）
    public function edit_presend_item()
    {
        $this->data['title'] = '赠送项目管理';
        $this->twig->render('admin/product/edit_presend_item', $this->data);
    }

    //赠送项目（仅限虚拟产品）
    public function add_presend_item()
    {
        $this->data['controlName'] = '/presend_item';
        $this->data['prevTitle'] = '赠送项目管理';
        $this->data['title'] = '添加赠送项目管理';
        $this->twig->render('admin/product/add_presend_item', $this->data);
    }

    public function info_presend()
    {
        $this->data['controlName'] = '/presend_item';
        $this->data['prevTitle'] = '赠送项目管理';
        $this->data['title'] = '赠送项目管理详情';
        $this->twig->render('admin/product/infoPresend', $this->data);
    }

    

    //海脉服务管理  产品类型
    public function productType()
    {
        $this->data['title'] = '产品类型列表';
        $this->twig->render('admin/product/product_type', $this->data);
    }

    //海脉服务管理  产品套餐
    public function productPackage()
    {
        $this->data['title'] = '产品包类型';
        $this->twig->render('admin/product/productPackage', $this->data);
    }
	public function addProductPackage()
    {
        $this->data['controlName'] = '/productPackage';
        $this->data['prevTitle'] = '产品包类型';
        $this->data['title'] = '添加';
        $this->twig->render('admin/product/addProductPackage', $this->data);
    }
    public function editProductPackage()
    {
        $this->data['controlName'] = '/productPackage';
        $this->data['prevTitle'] = '产品包类型';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/product/editProductPackage', $this->data);
    }
	
    //海脉服务管理  长租产品
   public function czProduct()
    {
        $this->data['title'] = '长租产品';
        $this->twig->render('admin/product/czProduct', $this->data);
    }

    //海脉服务管理  长租产品
    public function addczProduct()
    {
        $this->data['controlName'] = '/czProduct';
        $this->data['prevTitle'] = '长租产品';
        $this->data['title'] = '添加长租产品';
        $this->twig->render('admin/product/addczProduct', $this->data);
    }

    //海脉服务管理  长租产品
    public function editczProduct()
    {
        $this->data['controlName'] = '/czProduct';
        $this->data['prevTitle'] = '长租产品';
        $this->data['title'] = '编辑长租产品';
        $this->twig->render('admin/product/editczProduct', $this->data);
    }

    public function info_czProduct()
    {
        $this->data['controlName'] = '/czProduct';
        $this->data['prevTitle'] = '长租产品';
        $this->data['title'] = '长租产品详情';
        $this->twig->render('admin/product/infoCzProduct', $this->data);
    }

    //海脉服务管理  实体产品
    public function entityProduct()
    {
        $this->data['title'] = '实体产品';
        $this->twig->render('admin/product/entityProduct', $this->data);
    }

    public function info_entityProduct()
    {
        $this->data['controlName'] = '/entityProduct';
        $this->data['prevTitle'] = '实体产品';
        $this->data['title'] = '实体产品详情';
        $this->twig->render('admin/product/infoEntityProduct', $this->data);
    }

    public function add_entityProduct()
    {
        $this->data['controlName'] = '/entityProduct';
        $this->data['prevTitle'] = '实体产品';
        $this->data['title'] = '添加实体产品';
        $this->twig->render('admin/product/addEntityProduct', $this->data);
    }

    public function edit_entityProduct()
    {
        $this->data['controlName'] = '/entityProduct';
        $this->data['prevTitle'] = '实体产品';
        $this->data['title'] = '编辑实体产品';
        $this->twig->render('admin/product/editEntityProduct', $this->data);
    }

    //海脉服务管理  虚拟产品
    public function virProduct()
    {
        $this->data['title'] = '虚拟产品';
        $this->twig->render('admin/product/virProduct', $this->data);
    }

    //海脉服务管理  虚拟产品
    public function addvirProduct()
    {
        $this->data['controlName'] = '/virProduct';
        $this->data['prevTitle'] = '虚拟产品';
        $this->data['title'] = '添加虚拟产品';
        $this->twig->render('admin/product/addvirProduct', $this->data);
    }

    //海脉服务管理  虚拟产品
    public function editvirProduct()
    {
        $this->data['controlName'] = '/virProduct';
        $this->data['prevTitle'] = '虚拟产品';
        $this->data['title'] = '编辑虚拟产品';
        $this->twig->render('admin/product/editvirProduct', $this->data);
    }

    public function info_virProduct()
    {
        $this->data['controlName'] = '/virProduct';
        $this->data['prevTitle'] = '虚拟产品';
        $this->data['title'] = '虚拟产品详情';
        $this->twig->render('admin/product/infoVirProduct', $this->data);
    }

}
