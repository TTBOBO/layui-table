<?php

/*
 * 用户管理
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit
                ('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Adminbase.php';

/**
 * 通用管理
 */
class Currency extends Adminbase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('om/om_cz_order');
        $this->model = $this->om_cz_order;
        $this->data = array_merge($this->data, array("category" => "通用管理", "model" => strtolower(__CLASS__)));
    }

    public function pm_coupon()
    {
        $this->data['title'] = '优惠券管理';
        $this->twig->render('admin/currency/pm_coupon', $this->data);
    }

    public function info_coupon()
    {
        $this->data['controlName'] = '/pm_coupon';
        $this->data['prevTitle'] = '优惠券管理';
        $this->data['title'] = '优惠券管理详情';
        $this->twig->render('admin/currency/infoCoupon', $this->data);
    }

    public function add_coupon()
    {
        $this->data['controlName'] = '/pm_coupon';
        $this->data['prevTitle'] = '优惠券管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/add_coupon', $this->data);
    }

    public function edit_coupon()
    {
        $this->data['controlName'] = '/pm_coupon';
        $this->data['prevTitle'] = '优惠券管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/edit_coupon', $this->data);
    }

    public function pm_coupon_config()
    {
        $this->data['title'] = '优惠券配置';
        $this->twig->render('admin/currency/pm_coupon_config', $this->data);
    }

    public function info_coupon_config()
    {
        $this->data['controlName'] = '/pm_coupon_config';
        $this->data['prevTitle'] = '优惠券配置';
        $this->data['title'] = '优惠券配置详情';
        $this->twig->render('admin/currency/infoConfig', $this->data);
    }

    public function add_coupon_config()
    {
        $this->data['controlName'] = '/pm_coupon_config';
        $this->data['prevTitle'] = '优惠券配置';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/add_coupon_config', $this->data);
    }

    public function edit_coupon_config()
    {
        $this->data['controlName'] = '/pm_coupon_config';
        $this->data['prevTitle'] = '优惠券配置';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/edit_coupon_config', $this->data);
    }

    public function pm_guestbook()
    {
        $this->data['title'] = '留言管理';
        $this->twig->render('admin/currency/pm_guestbook', $this->data);
    }

    public function info_guestbook()
    {
        $this->data['controlName'] = '/pm_guestbook';
        $this->data['prevTitle'] = '留言管理';
        $this->data['title'] = '留言管理详情';
        $this->twig->render('admin/currency/infoguestbook', $this->data);
    }
    
    public function add_guestbook()
    {
        $this->data['controlName'] = '/pm_guestbook';
        $this->data['prevTitle'] = '留言管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/add_guestbook', $this->data);
    }
    public function edit_guestbook()
    {
        $this->data['controlName'] = '/pm_guestbook';
        $this->data['prevTitle'] = '留言管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/edit_guestbook', $this->data);
    }

    public function label()
    {
        $this->data['title'] = '标签管理';
        $this->twig->render('admin/currency/label', $this->data);
    }

    public function infoLabel()
    {
        $this->data['controlName'] = '/label';
        $this->data['prevTitle'] = '标签管理';
        $this->data['title'] = '标签管理详情';
        $this->twig->render('admin/currency/infoLabel', $this->data);
    }

    public function addLabel()
    {
        $this->data['controlName'] = '/label';
        $this->data['prevTitle'] = '标签管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addLabel', $this->data);
    }

    public function editLabel()
    {
        $this->data['controlName'] = '/label';
        $this->data['prevTitle'] = '标签管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editLabel', $this->data);
    }

    public function pm_industry()
    {
        $this->data['title'] = '行业管理';
        $this->twig->render('admin/currency/pm_industry', $this->data);
    }

    public function info_industry()
    {
        $this->data['controlName'] = '/pm_industry';
        $this->data['prevTitle'] = '行业管理';
        $this->data['title'] = '行业管理详情';
        $this->twig->render('admin/currency/infoIndustry', $this->data);
    }

    public function addIndustry()
    {
        $this->data['controlName'] = '/pm_industry';
        $this->data['prevTitle'] = '行业管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addIndustry', $this->data);
    }

    public function editIndustry()
    {
        $this->data['controlName'] = '/pm_industry';
        $this->data['prevTitle'] = '行业管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editIndustry', $this->data);
    }

    public function pm_news()
    {
        $this->data['title'] = '新闻管理';
        $this->twig->render('admin/currency/pm_news', $this->data);
    }

    public function info_news()
    {
        $this->data['controlName'] = '/pm_industry';
        $this->data['prevTitle'] = '新闻管理';
        $this->data['title'] = '新闻管理详情';
        $this->twig->render('admin/currency/infoNews', $this->data);
    }

    public function addNews()
    {
        $this->data['controlName'] = '/pm_industry';
        $this->data['prevTitle'] = '新闻管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addNews', $this->data);
    }

    public function editNews()
    {
        $this->data['controlName'] = '/pm_industry';
        $this->data['prevTitle'] = '新闻管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editNews', $this->data);
    }

    public function pm_pay_cfg()
    {
        $this->data['title'] = '支付管理';
        $this->twig->render('admin/currency/pm_pay_cfg', $this->data);
    }

    public function info_pay_cfg()
    {
        $this->data['controlName'] = '/pm_pay_cfg';
        $this->data['prevTitle'] = '支付管理';
        $this->data['title'] = '支付管理详情';
        $this->twig->render('admin/currency/infoPay', $this->data);
    }
	
	public function add_pay_cfg()
    {
        $this->data['controlName'] = '/pm_pay_cfg';
        $this->data['prevTitle'] = '支付管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/add_pay_cfg', $this->data);
    }
    public function edit_pay_cfg()
    {
        $this->data['controlName'] = '/pm_pay_cfg';
        $this->data['prevTitle'] = '支付管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/edit_pay_cfg', $this->data);
    }
//info_pay

    public function info_pay()
    {
        $this->data['controlName'] = '/pm_pay_cfg';
        $this->data['prevTitle'] = '支付管理';
        $this->data['title'] = '支付管理';
        $this->twig->render('admin/currency/info_pay', $this->data);
    }

    public function pm_region1()
    {
        $this->data['title'] = '城市管理';
        $this->twig->render('admin/currency/pm_region1', $this->data);
    }

    public function info_region1()
    {
        $this->data['controlName'] = '/pm_region1';
        $this->data['prevTitle'] = '城市管理';
        $this->data['title'] = '城市管理详情';
        $this->twig->render('admin/currency/infoRegion1', $this->data);
    }

    public function add_region1()
    {
        $this->data['controlName'] = '/pm_region1';
        $this->data['prevTitle'] = '城市管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/add_region1', $this->data);
    }

    public function edit_region1()
    {
        $this->data['controlName'] = '/pm_region1';
        $this->data['prevTitle'] = '城市管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/edit_region1', $this->data);
    }

    public function pm_region()
    {
        $this->data['title'] = '地址库管理';
        $this->twig->render('admin/currency/pm_region', $this->data);
    }

    public function info_region()
    {
        $this->data['controlName'] = '/pm_region';
        $this->data['prevTitle'] = '地址库管理';
        $this->data['title'] = '地址库详情';
        $this->twig->render('admin/currency/info_region', $this->data);
    }
	
	public function add_region()
    {
        $this->data['controlName'] = '/pm_region';
        $this->data['prevTitle'] = '地址库管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/add_region', $this->data);
    }
    public function edit_region()
    {
        $this->data['controlName'] = '/pm_region';
        $this->data['prevTitle'] = '地址库管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/edit_region', $this->data);
    }
    public function pm_web_cfg()
    {
        $this->data['title'] = '网站信息表';
        $this->twig->render('admin/currency/pm_web_cfg', $this->data);
    }

    public function info_web_cfg()
    {
        $this->data['controlName'] = '/pm_web_cfg';
        $this->data['prevTitle'] = '网站信息表';
        $this->data['title'] = '网站信息详情';
        $this->twig->render('admin/currency/info_web_cfg', $this->data);
    }

    public function addWebCfg()
    {
        $this->data['controlName'] = '/pm_web_cfg';
        $this->data['prevTitle'] = '网站信息表';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addWebCfg', $this->data);
    }

    public function editWebCfg()
    {
        $this->data['controlName'] = '/pm_web_cfg';
        $this->data['prevTitle'] = '网站信息表';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editWebCfg', $this->data);
    }

    public function other_serve()
    {
        $this->data['title'] = '其他服务管理';
        $this->twig->render('admin/currency/other_Service', $this->data);
    }

    public function acticle()
    {
        $this->data['title'] = '物品清单管理';
        $this->twig->render('admin/currency/acticle', $this->data);
    }

    public function space_type()
    {
        $this->data['title'] = '类型管理';
        $this->twig->render('admin/currency/space_type', $this->data);
    }

    public function enter_company()
    {
        $this->data['title'] = '入驻企业管理';
        $this->twig->render('admin/currency/enter_company', $this->data);
    }

    public function frame()
    {
        $this->data['title'] = '框架管理';
        $this->twig->render('admin/currency/frame', $this->data);
    }

    public function infoFrame()
    {
        $this->data['controlName'] = '/frame';
        $this->data['prevTitle'] = '框架管理';
        $this->data['title'] = '框架管理详情';
        $this->twig->render('admin/currency/infoFrame', $this->data);
    }

    public function editFrame()
    {
        $this->data['controlName'] = '/frame';
        $this->data['prevTitle'] = '框架管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editFrame', $this->data);
    }

    public function addFrame()
    {
        $this->data['controlName'] = '/frame';
        $this->data['prevTitle'] = '框架管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addFrame', $this->data);
    }

    public function custom()
    {
        $this->data['title'] = '自定义管理';
        $this->twig->render('admin/currency/custom', $this->data);
    }

    public function infoCustom()
    {
        $this->data['controlName'] = '/custom';
        $this->data['prevTitle'] = '自定义管理';
        $this->data['title'] = '自定义管理详情';
        $this->twig->render('admin/currency/infoCustom', $this->data);
    }

    public function editCustom()
    {
        $this->data['controlName'] = '/custom';
        $this->data['prevTitle'] = '自定义管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editCustom', $this->data);
    }

    public function addCustom()
    {
        $this->data['controlName'] = '/custom';
        $this->data['prevTitle'] = '自定义管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addCustom', $this->data);
    }

    public function use_house()
    {
        $this->data['title'] = '预约订单用房';
        $this->twig->render('admin/currency/use_house', $this->data);
    }

    public function infoUseHouse()
    {
        $this->data['controlName'] = '/use_house';
        $this->data['prevTitle'] = '预约订单用房';
        $this->data['title'] = '预约订单用房详情';
        $this->twig->render('admin/currency/infoUseHouse', $this->data);
    }

    public function addUseHouse()
    {
        $this->data['controlName'] = '/use_house';
        $this->data['prevTitle'] = '预约订单用房';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addUseHouse', $this->data);
    }
	
	public function editUseHouse()
    {
        $this->data['controlName'] = '/use_house';
        $this->data['prevTitle'] = '预约订单用房';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editUseHouse', $this->data);
    }
    public function advisory()
    {
        $this->data['title'] = '资讯管理';
        $this->twig->render('admin/currency/advisory', $this->data);
    }

    public function infoAdvisory()
    {
        $this->data['controlName'] = '/advisory';
        $this->data['prevTitle'] = '资讯管理';
        $this->data['title'] = '资讯管理详情';
        $this->twig->render('admin/currency/infoAdvisory', $this->data);
    }

    public function addAdvisory()
    {
        $this->data['controlName'] = '/advisory';
        $this->data['prevTitle'] = '资讯管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addAdvisory', $this->data);
    }

    public function editAdvisory()
    {
        $this->data['controlName'] = '/advisory';
        $this->data['prevTitle'] = '资讯管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editAdvisory', $this->data);
    }

    public function agent()
    {
        $this->data['title'] = '项目代理管理';
        $this->twig->render('admin/currency/agent', $this->data);
    }

    public function addAgent()
    {
        $this->data['controlName'] = '/agent';
        $this->data['prevTitle'] = '项目代理管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addAgent', $this->data);
    }

    public function infoAgent()
    {
        $this->data['controlName'] = '/agent';
        $this->data['prevTitle'] = '项目代理管理';
        $this->data['title'] = '项目代理管理详情';
        $this->twig->render('admin/currency/infoAgent', $this->data);
    }

    public function editAgent()
    {
        $this->data['controlName'] = '/agent';
        $this->data['prevTitle'] = '项目代理管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editAgent', $this->data);
    }

    public function product_service()
    {

        $this->data['title'] = '服务产品';
        $this->twig->render('admin/currency/product_service', $this->data);
    }

    public function addproduct_service()
    {
        $this->data['controlName'] = '/product_service';
        $this->data['prevTitle'] = '服务产品';
        $this->data['title'] = '添加服务产品';
        $this->twig->render('admin/currency/addproduct_service', $this->data);
    }

    public function editproduct_service()
    {
        $this->data['controlName'] = '/product_service';
        $this->data['prevTitle'] = '服务产品';
        $this->data['title'] = '编辑服务产品';
        $this->twig->render('admin/currency/editproduct_service', $this->data);
    }

    public function proser_type()
    {
        $this->data['title'] = '服务商产品类型管理';
        $this->twig->render('admin/currency/proser_type', $this->data);
    }
	
	public function infoProser_type()
    {
        $this->data['controlName'] = '/proser_type';
        $this->data['prevTitle'] = '服务商产品类型管理';
        $this->data['title'] = '服务商产品类型管理';
        $this->twig->render('admin/currency/infoProser_type', $this->data);
    }
    public function addProser_type()
    {
        $this->data['controlName'] = '/proser_type';
        $this->data['prevTitle'] = '服务商产品类型管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/currency/addProser_type', $this->data);
    }

    public function editProser_type()
    {
        $this->data['controlName'] = '/proser_type';
        $this->data['prevTitle'] = '服务商产品类型管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/currency/editProser_type', $this->data);
    }

    public function infoProductService()
    {
        $this->data['controlName'] = '/product_service';
        $this->data['prevTitle'] = '服务产品';
        $this->data['title'] = '服务产品详情';
        $this->twig->render('admin/currency/infoProductService', $this->data);
    }

    public function lineChart()
    {
        $this->data['title'] = '用户报表';
        $this->twig->render('admin/statistics/userTable', $this->data);
    }

    public function behavior()
    {
        $this->data['title'] = '行为管理';
        $this->twig->render('admin/currency/behavior', $this->data);
    }

    public function info_behavior()
    {
        $this->data['title'] = '行为管理';
        $this->twig->render('admin/currency/info_behavior', $this->data);
    }

}
