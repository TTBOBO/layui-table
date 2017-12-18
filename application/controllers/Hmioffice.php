<?php

/**
 * 海脉-ioffice模块
 * @author:jacky Version 1.0.0 2017-10-28
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Hmioffice extends Base {

    public function index()
    {
        $this->data['title'] = '海脉-ioffice';
        $this->data['banners'] = [
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/BG.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/banner.png', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
        ];
        $this->data['img'] = [
            ['title' => '订经理室',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '订独立办公室',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '订联合办公工位',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '订会议室',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '订会客厅',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '订物品寄存',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '虚拟办公室',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '地址挂靠',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '电话秘书',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '行政文秘',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '商务支持',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '更多more',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
        ];
        $this->data['qdzy_num'] = 1000;
        $this->data['qdzy_channel'] = array('招商渠道','招商渠道','招商渠道','招商渠道');
        $this->data['qdzy'] = [
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['company' => '中国石油天然气集团公司', 'type' => '石油化工' , 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
        ];
        $this->data['hdly_num'] = 120;
        $this->data['hdly'] = [
            ['title' => '海脉空间产品展览会',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '海脉空间产品展览会',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '海脉空间产品展览会',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '海脉空间产品展览会',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '海脉空间产品展览会',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
        ];
        $this->data['yzxm_num'] = 2300;
        $this->data['yzxm'] = [
            ['title' => '移动共享小房间',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '移动共享小房间',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '移动共享小房间',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '移动共享小房间',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '移动共享小房间',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
            ['title' => '移动共享小房间',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => ''],
        ];
        $this->data['get_res'] = [
            ['title' => '渠道服务商', 'num' => '7486'],
            ['title' => '融资服务商', 'num' => '386'],
            ['title' => '贷款服务商', 'num' => '37086'],
            ['title' => '企业服务商', 'num' => '7486'],
            ['title' => '空间服务', 'num' => '486'],
            ['title' => '商业资源', 'num' => '453486'],
        ];
        $this->data['kjhb_num'] = 2300;
        $this->data['kjhb'] = [
            ['title' => '移动共享小房间',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '' , 'details1' => '优客广场','details2' => '白金卡9折','details3' => '广州天河区民族广场泰邦大厦45层','details4' => '办公室24间','details5' => '办公室24间'],
            ['title' => '移动共享小房间',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '' , 'details1' => '优客广场','details2' => '白金卡9折','details3' => '广州天河区民族广场泰邦大厦45层','details4' => '办公室24间','details5' => '办公室24间'],
            ['title' => '移动共享小房间',  'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '' , 'details1' => '优客广场','details2' => '白金卡9折','details3' => '广州天河区民族广场泰邦大厦45层','details4' => '办公室24间','details5' => '办公室24间'],
        ];
        $this->twig->render('front/ioffice/ioffice_index.html', $this->data);
    }

    /*
    * 海脉通-ioffice产品详情页
    */

    public function hmtIofficeDetails()
    {
        $this->data['title'] = '海脉通-ioffic产品详情';
        $this->data['tel'] = '400-822-3230';
        $this->data['content'] = [
            'personnel' => [
                ['name' => '黄经理', 'position' => '招商经理', 'tel' => '020-35806008', 'email' => 'zhz454@iwspace.com'],
                ['name' => '黄经理', 'position' => '招商经理', 'tel' => '020-35806008', 'email' => 'zhz454@iwspace.com'],
            ],
            'space_addr' => ['addr' => '广州珠江广州珠江广州珠江', 'img' => '',],
            'space_service' => [
                ['field' => '经理室', 'price' => '400',],
                ['field' => '经理室', 'price' => '400',],
                ['field' => '经理室', 'price' => '400',],
                ['field' => '经理室', 'price' => '400',],
                ['field' => '经理室', 'price' => '400',],
                ['field' => '经理室', 'price' => '400',],
                ['field' => '经理室', 'price' => '400',],
            ],
            'space_service2' => [
                ['field' => '虚拟办公室', 'price' => '200',],
                ['field' => '虚拟办公室', 'price' => '200',],
                ['field' => '虚拟办公室', 'price' => '200',],
                ['field' => '虚拟办公室', 'price' => '200',],
                ['field' => '虚拟办公室', 'price' => '200',],
                ['field' => '虚拟办公室', 'price' => '200',],
                ['field' => '虚拟办公室', 'price' => '200',],
            ],
            'peitao' => [
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
                ['name' => '消防',],
            ],
            'sheshi' =>  [
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
                ['name' => '银行',],
            ],
            'qiye' =>  [
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
                ['img' => '',],
            ],
            'get_res' =>  [
                ['title' => '渠道服务商', 'num' => '7486'],
                ['title' => '融资服务商', 'num' => '386'],
                ['title' => '贷款服务商', 'num' => '37086'],
                ['title' => '企业服务商', 'num' => '7486'],
                ['title' => '空间服务', 'num' => '486'],
                ['title' => '商业资源', 'num' => '453486'],
            ],
            'fuwu' =>  [
                ['title' => '南山大型超市广场', 'img' => ''],
                ['title' => '南山大型超市广场', 'img' => ''],
                ['title' => '南山大型超市广场', 'img' => ''],
                ['title' => '南山大型超市广场', 'img' => ''],
                ['title' => '南山大型超市广场', 'img' => ''],
                ['title' => '南山大型超市广场', 'img' => ''],
                ['title' => '南山大型超市广场', 'img' => ''],
                ['title' => '南山大型超市广场', 'img' => ''],
                ['title' => '南山大型超市广场', 'img' => ''],
                ['title' => '南山大型超市广场', 'img' => ''],
            ],
        ];
        $this->twig->render('front/hmtong/hmtDDTDetails.html', $this->data);
    }

}
