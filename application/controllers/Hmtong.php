<?php

/**
 * 海脉通模块
 * @author:jacky Version 1.0.0 2017-10-28
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Hmtong extends Base {
    /*
     * 海脉通首页页面
     */

    public function index()
    {
        $this->data['title'] = '海脉通';
        $this->data['tel'] = '400-822-3230';
        $this->data['consult'] = '咨询我们,了解更多';

        $this->data['banners'] = [
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/BG.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/banner.png', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
        ];

        $this->data['qwt_title'] = '全网通 — 企业发展需求快速软着路的解决方案';
        $this->data['qwt_title2'] = '可享受全国34个省份所有已布局及将布局城市的服务';
        $this->data['qwt'] = [
            ['title' => '渠道服务商', 'num' => '7486'],
            ['title' => '融资服务商', 'num' => '386'],
            ['title' => '贷款服务商', 'num' => '37086'],
            ['title' => '企业服务商', 'num' => '7486'],
            ['title' => '空间服务', 'num' => '486'],
            ['title' => '商业资源', 'num' => '453486'],
        ];
        $this->data['qwt_img'] = [
            ['title' => '地址挂靠', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/hmIco1.png', 'path2' => '/resource/front/images/hmIco1.png'],
            ['title' => '电话秘书', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/kfIco.png', 'path2' => '/resource/front/images/kfIco.png'],
            ['title' => '行政文秘', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/humanIco.png', 'path2' => '/resource/front/images/humanIco.png'],
        ];
        $this->data['qwt_give'] = [
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '会议室使用券', 'num' => '3', 'company' => '小时'],
            ['name' => '赠送总额', 'num' => '3150+', 'company' => '元'],
            ['name' => '洽谈室使用券', 'num' => '10', 'company' => '小时'],
            ['name' => '每消费一元积一分(积分可用于实体消费)', 'num' => '', 'company' => ''],
            ['name' => '联合办公卡位使用劵', 'num' => '10', 'company' => '张'],
            ['name' => '获取平台海量资源权限', 'num' => '', 'company' => ''],
        ];

        $this->data['szt_title'] = '神州通   —   企业发展需求快速软着路的解决方案';
        $this->data['szt_title2'] = '可享受全国34个省份所有已布局及将布局城市如下全部服务，且享受实体消费折扣优惠';
        $this->data['szt'] = [
            ['title' => '渠道服务商', 'num' => '7486'],
            ['title' => '融资服务商', 'num' => '386'],
            ['title' => '贷款服务商', 'num' => '37086'],
            ['title' => '企业服务商', 'num' => '7486'],
            ['title' => '空间服务', 'num' => '486'],
            ['title' => '商业资源', 'num' => '453486'],
        ];
        $this->data['szt_tc'] = [
            ['type' => 'A套餐', 'money' => '***', 'discount' => '9.7', 'give' => '', 'use_jls' => '2', 'use_hys' => '5', 'use_hks' => '5', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '1300+'],
            ['type' => 'B套餐', 'money' => '***', 'discount' => '9.5', 'give' => '', 'use_jls' => '5', 'use_hys' => '8', 'use_hks' => '8', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '2800+'],
            ['type' => 'C套餐', 'money' => '***', 'discount' => '9.2', 'give' => '', 'use_jls' => '10', 'use_hys' => '10', 'use_hks' => '10', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '5000+'],
            ['type' => 'D套餐', 'money' => '***', 'discount' => '8.8', 'give' => '', 'use_jls' => '15', 'use_hys' => '20', 'use_hks' => '20', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '8000+'],
        ];
        $this->data['szt_img'] = [
            ['title' => '地址挂靠','title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/hmIco1.png','path2' => '/resource/front/images/hmIco1.png'],
            ['title' => '电话秘书','title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/kfIco.png','path2' => '/resource/front/images/kfIco.png'],
            ['title' => '行政文秘','title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/humanIco.png','path2' => '/resource/front/images/humanIco.png'],
            ['title' => '商务支持','title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/xzIco.png','path2' => '/resource/front/images/xzIco.png'],
        ];

        $this->data['ddt_title'] = '点点通 — 企业按需发展软着路的解决方案';
        $this->data['ddt_title2'] = '可享受全国34个省份所有已布局城市如下全部服务，按需下单';
        $this->data['ddt'] = [
            ['title' => '渠道服务商', 'num' => '7486'],
            ['title' => '融资服务商', 'num' => '386'],
            ['title' => '贷款服务商', 'num' => '37086'],
            ['title' => '企业服务商', 'num' => '7486'],
            ['title' => '空间服务', 'num' => '486'],
            ['title' => '商业资源', 'num' => '453486'],
        ];
        $this->data['ddt_give'] = [
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
        ];
        $this->data['ddt_tc'] = [
            [ 'full_amount' => '5000', 'give' => '', 'use_jls' => '2', 'use_hys' => '5', 'use_hks' => '5', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '1300+'],
            [ 'full_amount' => '10000', 'give' => '', 'use_jls' => '5', 'use_hys' => '8', 'use_hks' => '8', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '2800+'],
            [ 'full_amount' => '20000', 'give' => '', 'use_jls' => '10', 'use_hys' => '10', 'use_hks' => '10', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '5000+'],
        ];
        $this->data['ddt_img'] = [
            ['title' => '地址挂靠', 'path' => '/resource/front/images/hmIco1.png'],
            ['title' => '电话秘书', 'path' => '/resource/front/images/kfIco.png'],
            ['title' => '行政文秘', 'path' => '/resource/front/images/humanIco.png'],
            ['title' => '商务支持', 'path' => '/resource/front/images/xzIco.png'],
        ];

        $this->data['yxt_title'] = '一线通   —   企业重点城市发展软着路的解决方案';
        $this->data['yxt_title2'] = '可享受北京、上海、深圳、广州四个城市如下全部服务';
        $this->data['yxt'] = [
            ['title' => '渠道服务商', 'num' => '7486'],
            ['title' => '融资服务商', 'num' => '386'],
            ['title' => '贷款服务商', 'num' => '37086'],
            ['title' => '企业服务商', 'num' => '7486'],
            ['title' => '空间服务', 'num' => '486'],
            ['title' => '商业资源', 'num' => '453486'],
        ];
        $this->data['yxt_give'] = [
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
        ];
        $this->data['yxt_tc'] = [
            ['use_ydbg' => '10', 'use_gdbg' => '10', 'use_jls' => '15', 'use_hys' => '3', 'use_dlhks' => '10', 'integral' => '1', 'get_res' => '1', 'gift_amount' => '3150+'],
        ];
        $this->data['yxt_img'] = [
            ['title' => '地址挂靠', 'path' => '/resource/front/images/hmIco1.png'],
            ['title' => '电话秘书', 'path' => '/resource/front/images/kfIco.png'],
            ['title' => '行政文秘', 'path' => '/resource/front/images/humanIco.png'],
            ['title' => '商务支持', 'path' => '/resource/front/images/xzIco.png'],
        ];
        /*
         * 海脉通-实体会员
         */
        $this->data['sthy'] = [
            'jk1' => ['discount' => '9.9', 'grade' => '金卡初级会员', 'title' => '全国34个省级行政区域全部IOFFICE联合空间，所有服务，金卡会员一律', 'title2' => '一卡在手、全网通达、灵活租赁、按需下单、即来即走', 'img1' => '/resource/front/images/vipcard.png', 'img2' => array('/resource/front/images/0003.png'), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'isget_res' => '1', 'fl' => '0',
                'get_res' => [
                    ['title' => '渠道服务商', 'num' => '7486'],
                    ['title' => '融资服务商', 'num' => '386'],
                    ['title' => '贷款服务商', 'num' => '37086'],
                    ['title' => '企业服务商', 'num' => '7486'],
                    ['title' => '空间服务', 'num' => '486'],
                    ['title' => '商业资源', 'num' => '453486'],
                ],
                'right_img' => [
                    ['title' => '', 'path' => '/resource/front/images/0003.png'],
                    ['title' => '', 'path' => '/resource/front/images/0003.png'],
                    ['title' => '', 'path' => '/resource/front/images/0003.png'],
                ]
            ],
            'jk2' => ['discount' => '9.8', 'grade' => '金卡高级会员', 'title' => '全国34个省级行政区域全部IOFFICE联合空间，所有服务，金卡会员一律', 'title2' => '一卡在手、全网通达、灵活租赁、按需下单、即来即走', 'img1' => '/resource/front/images/vipcard.png', 'img2' => array('/resource/front/images/0003.png'), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'isget_res' => '1', 'fl' => '0',
                'get_res' => [
                    ['title' => '渠道服务商', 'num' => '7486'],
                    ['title' => '融资服务商', 'num' => '386'],
                    ['title' => '贷款服务商', 'num' => '37086'],
                    ['title' => '企业服务商', 'num' => '7486'],
                    ['title' => '空间服务', 'num' => '486'],
                    ['title' => '商业资源', 'num' => '453486'],
                ]
            ],
            'bj1' => ['discount' => '9.6', 'grade' => '白金初级会员', 'title' => '全国34个省级行政区域全部IOFFICE联合空间，所有服务，金卡会员一律', 'title2' => '一卡在手、全网通达、灵活租赁、按需下单、即来即走', 'img1' => '/resource/front/images/vipcard.png', 'img2' => array('/resource/front/images/0003.png'), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'isget_res' => '1', 'fl' => '0',
                'get_res' => [
                    ['title' => '渠道服务商', 'num' => '7486'],
                    ['title' => '融资服务商', 'num' => '386'],
                    ['title' => '贷款服务商', 'num' => '37086'],
                    ['title' => '企业服务商', 'num' => '7486'],
                    ['title' => '空间服务', 'num' => '486'],
                    ['title' => '商业资源', 'num' => '453486'],
                ]
            ],
            'bj2' => ['discount' => '9.5', 'grade' => '白金高级会员', 'title' => '全国34个省级行政区域全部IOFFICE联合空间，所有服务，金卡会员一律', 'title2' => '一卡在手、全网通达、灵活租赁、按需下单、即来即走', 'img1' => '/resource/front/images/vipcard.png', 'img2' => array('/resource/front/images/0003.png'), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'isget_res' => '1', 'fl' => '1',
                'get_res' => [
                    ['title' => '渠道服务商', 'num' => '7486'],
                    ['title' => '融资服务商', 'num' => '386'],
                    ['title' => '贷款服务商', 'num' => '37086'],
                    ['title' => '企业服务商', 'num' => '7486'],
                    ['title' => '空间服务', 'num' => '486'],
                    ['title' => '商业资源', 'num' => '453486'],
                ]
            ],
            'hj1' => ['discount' => '9.2', 'grade' => '黑金初级会员', 'title' => '全国34个省级行政区域全部IOFFICE联合空间，所有服务，金卡会员一律', 'title2' => '一卡在手、全网通达、灵活租赁、按需下单、即来即走', 'img1' => '/resource/front/images/vipcard.png', 'img2' => array('/resource/front/images/0003.png'), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'isget_res' => '1', 'fl' => '1',
                'get_res' => [
                    ['title' => '渠道服务商', 'num' => '7486'],
                    ['title' => '融资服务商', 'num' => '386'],
                    ['title' => '贷款服务商', 'num' => '37086'],
                    ['title' => '企业服务商', 'num' => '7486'],
                    ['title' => '空间服务', 'num' => '486'],
                    ['title' => '商业资源', 'num' => '453486'],
                ]
            ],
            'hj2' => ['discount' => '9.2', 'grade' => '黑金高级会员', 'title' => '全国34个省级行政区域全部IOFFICE联合空间，所有服务，金卡会员一律', 'title2' => '一卡在手、全网通达、灵活租赁、按需下单、即来即走', 'img1' => '/resource/front/images/vipcard.png', 'img2' => array('/resource/front/images/0003.png'), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'isget_res' => '1', 'fl' => '1',
                'get_res' => [
                    ['title' => '渠道服务商', 'num' => '7486'],
                    ['title' => '融资服务商', 'num' => '386'],
                    ['title' => '贷款服务商', 'num' => '37086'],
                    ['title' => '企业服务商', 'num' => '7486'],
                    ['title' => '空间服务', 'num' => '486'],
                    ['title' => '商业资源', 'num' => '453486'],
                ]
            ],
            'zt' => ['discount' => '9.2', 'grade' => '至尊会员', 'title' => '全国34个省级行政区域全部IOFFICE联合空间，所有服务，金卡会员一律', 'title2' => '一卡在手、全网通达、灵活租赁、按需下单、即来即走', 'img1' => '/resource/front/images/vipcard.png', 'img2' => array('/resource/front/images/0003.png'), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'isget_res' => '1', 'fl1' => '', 'xj_fl' => '5',
                'get_res' => [
                    ['title' => '渠道服务商', 'num' => '7486'],
                    ['title' => '融资服务商', 'num' => '386'],
                    ['title' => '贷款服务商', 'num' => '37086'],
                    ['title' => '企业服务商', 'num' => '7486'],
                    ['title' => '空间服务', 'num' => '486'],
                    ['title' => '商业资源', 'num' => '453486'],
                ]
            ],
        ];
        /*
         * 海脉通-长租
         */
        $this->data['changzu'] = [
            ['term' => '三月期', 'cost' => '城市单价', 'deposit' => '两押一租', 'pay' => '一次性付款', 'range' => '经理室等', 'img' => '/resource/front/images/thir.png'],
            ['term' => '六月期', 'cost' => '城市单价', 'deposit' => '两押一租', 'pay' => '一次性付款', 'range' => '经理室等', 'img' => '/resource/front/images/6.png'],
            ['term' => '一年期', 'cost' => '城市单价', 'deposit' => '两押一租', 'pay' => '一次性付款', 'range' => '经理室等', 'img' => '/resource/front/images/year.png'],
            ['term' => '两年期', 'cost' => '城市单价', 'deposit' => '两押一租', 'pay' => '一次性付款', 'range' => '经理室等', 'img' => '/resource/front/images/2.png'],
        ];

        $this->twig->render('front/hmtong/hmtHome.html', $this->data);
    }

    /*
     * 海脉通-实体会员页
     */

    public function hmtvip1()
    {
        $this->data['title'] = '海脉通-实体会员';
        $this->data['banners'] = [
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/BG.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/banner.png', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
        ];
        $this->twig->render('front/hmtong/hmtvip.html', $this->data);
    }

    /*
     * 海脉通-长租页
     */

    public function hmtLongRent()
    {
        $this->data['title'] = '海脉通-长租';
        $this->data['tel'] = '400-822-3230';
        $this->data['content'] = [
            ['term' => '三月期', 'cost' => '城市单价', 'deposit' => '两押一租', 'pay' => '一次性付款', 'range' => '经理室等'],
            ['term' => '六月期', 'cost' => '城市单价', 'deposit' => '两押一租', 'pay' => '一次性付款', 'range' => '经理室等'],
            ['term' => '一年期', 'cost' => '城市单价', 'deposit' => '两押一租', 'pay' => '一次性付款', 'range' => '经理室等'],
            ['term' => '两年期', 'cost' => '城市单价', 'deposit' => '两押一租', 'pay' => '一次性付款', 'range' => '经理室等'],
        ];
        $this->twig->render('front/hmtong/hmtLongRent.html', $this->data);
    }

    /*
     * 海脉通-长租-产品详情页
     */

    public function hmtLongRentDetails()
    {
        $this->data['title'] = '海脉通-长租-产品详情';
        $this->data['tel'] = '400-822-3230';
        $this->data['content'] = [
                    'type' => array('经理室', '办公室', '移动工位', '固定工位'),
                    'addr' => array('广州', '广州', '广州', '广州'),
                    'term' => array('两年', '一年', '六月', '三月'),
                    'goods' => array('茶具 X 1', '茶包 X 2', '老板椅 X 1'),
                    'begin' => array('2017年11月11日', '2017年11月12日', '2017年11月13日'),
                    'start' => '',
                    'choose_room' => array('M2606', 'M2607', 'M2608', 'M2609', 'M2010', 'M2611', 'M2612', 'M2613'),
                    'img1' => '/resource/front/images/hmt_banner.jpg',
                    'img2' => '/resource/front/images/hmt_banner.jpg',
                    'Monthly' => '1500',
                    'deposit' => '两押一租',
                    'mode' => array('每月一缴', '一次性缴清'),
                    'give' => '',
                    'detailed' => array('1500', '3000'),
                    'rent' => '4500'
        ];
        $this->twig->render('front/hmtong/hmtLongRentDetails.html', $this->data);
    }

    /*
     * 海脉通-长租-订单详情页
     */

    public function hmtLongRentOrderDetails()
    {
        $this->data['title'] = '海脉通-长租-订单详情';
        $this->data['tel'] = '400-822-3230';
        $this->data['content'] = [
            'order_num' => '201728356315',
            'order_state' => '未付款',
            'order_time' => '2017-08-25 16：32：46',
            'type' => '经理室长租',
            'addr' => '深圳--大厦',
            'term' => '一年',
            'start' => '2017/08/25-2018/08/24',
            'choose_room' => 'O280',
            'goods' => array('茶具 X 1', '茶包 X 2', '老板椅 X 1'),
            'Monthly' => '1500',
            'deposit' => '两押一租',
            'mode' => '每月一缴',
            'give' => '无',
            'detailed' => array('1500', '3000'),
            'rent' => '10000',
            'pay_type' => array('微信支付' => '/resource/front/images/a1_06.png', '支付宝支付' => '/resource/front/images/a1_08.png ', '对公转账' => '/resource/front/images/a1_03.png'),
            'tip' => '如需开票，请使用对公转账。',
        ];
        $this->twig->render('front/hmtong/hmtLongRentOrderDetails.html', $this->data);
    }

    /*
     * 海脉通-全网通产品详情页
     */

    public function hmtQWTDetails()
    {
        $this->data['title'] = '海脉通-全网通';
        $this->data['tel'] = '400-822-3230';
        $this->data['qwt_img'] = [
           ['title' => '地址挂靠', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/hmIco1.png', 'path2' => '/resource/front/images/hmIco1.png'],
           ['title' => '电话秘书', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/kfIco.png', 'path2' => '/resource/front/images/kfIco.png'],
           ['title' => '行政文秘', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/humanIco.png', 'path2' => '/resource/front/images/humanIco.png'],
        ];
        $this->data['content'] = [
            'open' => array('深圳', '广州', '香港', '长沙', '北京', '上海', '厦门', '武汉', '天津', '贵阳', '成都', '重庆', '郑州'),
            'no_open' => array('厦门', '台北', '南昌', '福州'),
            'get_res' => [
                ['title' => '渠道服务商', 'num' => '7486'],
                ['title' => '融资服务商', 'num' => '386'],
                ['title' => '贷款服务商', 'num' => '37086'],
                ['title' => '企业服务商', 'num' => '7486'],
                ['title' => '空间服务', 'num' => '486'],
                ['title' => '商业资源', 'num' => '453486'],
            ],
            'give' => [
                ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
                ['name' => '经理室使用券', 'num' => '10', 'company' => '小时'],
                ['name' => '会客室使用券', 'num' => '3', 'company' => '小时'],
                ['name' => '洽谈室使用券', 'num' => '10', 'company' => '小时'],
                ['name' => '赠送总额', 'num' => '3150+', 'company' => '元'],
                ['name' => '最大可获得', 'num' => '10000', 'company' => '积分'],
                ['name' => '获取平台海量资源权限', 'num' => '', 'company' => ''],
            ],
            'cost' => '10,000/年',
        ];
        $this->data['qwt'] = [
            ['title' => '渠道服务商', 'num' => '7486'],
            ['title' => '融资服务商', 'num' => '386'],
            ['title' => '贷款服务商', 'num' => '37086'],
            ['title' => '企业服务商', 'num' => '7486'],
            ['title' => '空间服务', 'num' => '486'],
            ['title' => '商业资源', 'num' => '453486'],
        ];
        $this->twig->render('front/hmtong/hmtQWTDetails.html', $this->data);
    }

    /*
     * 海脉通-全网通-订单详情页
     */

    public function hmtQWTOrderDetails()
    {
        $this->data['title'] = '海脉通-全网通-产品详情';
        $this->data['tel'] = '400-822-3230';
        $this->data['content'] = [
            'order_num' => '201728356315',
            'order_state' => '未付款',
            'order_time' => '2017-08-25 16：32：46',
            'card_type' => '全网通',
            'city' => array('深圳', '广州', '香港', '长沙', '北京', '上海', '厦门', '武汉', '天津', '贵阳', '成都', '重庆', '郑州'),
            'term' => '一年',
            'begin' => '开始时间',
            'end' => '结束时间',
            'fwnr' => 'a.全国地址挂靠   b.挂靠地址电话秘书服务   c.挂靠地址行政文秘服务   d.挂靠地址商务支持服务',
            'give' => [
                ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
                ['name' => '会议室使用券', 'num' => '10', 'company' => '小时'],
                ['name' => '会客室使用券', 'num' => '3', 'company' => '小时'],
                ['name' => '洽谈室使用券', 'num' => '10', 'company' => '小时'],
                ['name' => '赠送总额', 'num' => '3150+', 'company' => '元'],
                ['name' => '最大可获得', 'num' => '10000', 'company' => '积分(积分可用于实体消费)'],
                ['name' => '获取平台海量资源权限', 'num' => '', 'company' => ''],
            ],
            'cost' => '10000',
            'pay_type' => array('微信支付' => '/resource/front/images/a1_06.png', '支付宝支付' => '/resource/front/images/a1_08.png ', '对公转账' => '/resource/front/images/a1_03.png'),
            /*'tip' => '我已阅读《全网通会员卡使用说明》并同意《全网通会员卡购买及使用协议》',*/
        ];
        $this->twig->render('front/hmtong/hmtQWTOrderDetails.html', $this->data);
    }

    /*
     * 海脉通-神州通产品详情页
     */

    public function hmtSZTDetails()
    {
        $this->data['title'] = '海脉通-神州通';
        $this->data['tel'] = '400-822-3230';
        $this->data['szt_img'] = [
           ['title' => '地址挂靠', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/hmIco1.png', 'path2' => '/resource/front/images/hmIco1.png'],
           ['title' => '电话秘书', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/kfIco.png', 'path2' => '/resource/front/images/kfIco.png'],
           ['title' => '行政文秘', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/humanIco.png', 'path2' => '/resource/front/images/humanIco.png'],
            ['title' => '商务支持','title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/xzIco.png','path2' => '/resource/front/images/xzIco.png'],
        ];
        $this->data['content'] = [
            'open' => array('深圳', '广州', '香港', '长沙', '北京', '上海', '厦门', '武汉', '天津', '贵阳', '成都', '重庆', '郑州'),
            'no_open' => array('澳门', '台北', '南昌', '福州'),
            'get_res' => [
                ['title' => '渠道服务商', 'num' => '7486'],
                ['title' => '融资服务商', 'num' => '386'],
                ['title' => '贷款服务商', 'num' => '37086'],
                ['title' => '企业服务商', 'num' => '7486'],
                ['title' => '空间服务', 'num' => '486'],
                ['title' => '商业资源', 'num' => '453486'],
            ],
            'szt_tc' => [
                ['type' => 'A套餐', 'money' => '***', 'discount' => '9.7', 'give' => '', 'use_jls' => '2', 'use_hys' => '5', 'use_hks' => '5', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '1300+'],
                ['type' => 'B套餐', 'money' => '***', 'discount' => '9.5', 'give' => '', 'use_jls' => '5', 'use_hys' => '8', 'use_hks' => '8', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '2800+'],
                ['type' => 'C套餐', 'money' => '***', 'discount' => '9.2', 'give' => '', 'use_jls' => '10', 'use_hys' => '10', 'use_hks' => '10', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '5000+'],
                ['type' => 'D套餐', 'money' => '***', 'discount' => '8.8', 'give' => '', 'use_jls' => '15', 'use_hys' => '20', 'use_hks' => '20', 'integral' => '√', 'get_res' => '√', 'gift_amount' => '8000+'],
            ],
        ];
        $this->twig->render('front/hmtong/hmtSZTDetails.html', $this->data);
    }

    /*
     * 海脉通-神州通-订单详情页
     */

    public function hmtSZTOrderDetails()
    {
        $this->data['title'] = '海脉通-神州通-订单详情';
        $this->data['tel'] = '400-822-3230';
        $this->data['content'] = [
            'order_num' => '201728356315',
            'order_state' => '未付款',
            'order_time' => '2017-08-25 16：32：46',
            'card_type' => '神州通 A 套餐',
            'city' => array('深圳', '广州', '香港', '长沙', '北京', '上海', '厦门', '武汉', '天津', '贵阳', '成都', '重庆', '郑州'),
            'term' => '一年',
            'begin' => '开始时间',
            'end' => '截止时间',
            'service' => array('a.全国地址挂靠', 'b.挂靠地址电话秘书服务', 'c.挂靠地址行政文秘服务', 'd.挂靠地址商务支持服务'),
            'give' => [
                ['name' => '经理室使用券', 'num' => '2', 'company' => '张'],
                ['name' => '会议室使用券(1小时/张)', 'num' => '5', 'company' => '张'],
                ['name' => '经理室使用券(1小时/张)', 'num' => '5', 'company' => '张'],
                ['name' => '最大可获得10000积分(积分可用于实体消费)', 'num' => '', 'company' => ''],
                ['name' => '获取平台海量权限', 'num' => '', 'company' => ''],
            ],
            'cost' => '10000',
            'pay_type' => array('微信支付' => '/resource/front/images/a1_06.png', '支付宝支付' => '/resource/front/images/a1_08.png ', '对公转账' => '/resource/front/images/a1_03.png'),
            'tip' => '如需开票，请使用对公转账。',
        ];
        $this->twig->render('front/hmtong/hmtSZTOrderDetails.html', $this->data);
    }

    /*
     * 海脉通-点点通产品详情页
     */

    public function hmtDDTDetails()
    {
        $this->data['title'] = '海脉通-点点通';
        $this->data['tel'] = '400-822-3230';
        $this->data['szt_img'] = [
           ['title' => '地址挂靠', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/hmIco1.png', 'path2' => '/resource/front/images/hmIco.png'],
           ['title' => '电话秘书', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/kfIco.png', 'path2' => '/resource/front/images/kfIco.png'],
           ['title' => '行政文秘', 'title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/humanIco.png', 'path2' => '/resource/front/images/humanIco.png'],
            ['title' => '商务支持','title2' => '可使用我们的地址做为您对外公布的办公、通信及收件地址。', 'path' => '/resource/front/images/xzIco.png','path2' => '/resource/front/images/xzIco.png'],
        ];
        $this->data['content'] = [
            'addr' => array('全部', '深圳', '广州', '香港', '长沙', '上海', '厦门', '武汉', '天津', '贵阳', '成都', '重庆', '郑州', '北京'),
            'term' => '一年',
            'get_res' => [
                ['title' => '渠道服务商', 'num' => '7486'],
                ['title' => '融资服务商', 'num' => '386'],
                ['title' => '贷款服务商', 'num' => '37086'],
                ['title' => '企业服务商', 'num' => '7486'],
                ['title' => '空间服务', 'num' => '486'],
                ['title' => '商业资源', 'num' => '453486'],
            ],
            'tc' => [
                [ 'full_amount' => '5000', 'give' => '', 'use_jls' => array('num' => '2', 'company' => '张'), 'use_hys' => array('num' => '2', 'company' => '小时'), 'use_hks' => array('num' => '2', 'company' => '小时'), 'get_res' => '√', 'jf' => '√'],
                [ 'full_amount' => '15000', 'give' => '', 'use_jls' => array('num' => '2', 'company' => '张'), 'use_hys' => array('num' => '2', 'company' => '小时'), 'use_hks' => array('num' => '2', 'company' => '小时'), 'get_res' => '√', 'jf' => '√'],
                [ 'full_amount' => '25000', 'give' => '', 'use_jls' => array('num' => '2', 'company' => '张'), 'use_hys' => array('num' => '2', 'company' => '小时'), 'use_hks' => array('num' => '2', 'company' => '小时'), 'get_res' => '√', 'jf' => '√'],
            ],
        ];
        $this->twig->render('front/hmtong/hmtDDTDetails.html', $this->data);
    }

    /*
     * 海脉通-点点通-订单详情页
     */

    public function hmtDDTOrderDetails()
    {
        $this->data['title'] = '海脉通-点点通-订单详情';
        $this->data['tel'] = '400-822-3230';
        $this->data['content'] = [
            'order_num' => '201728356315',
            'order_state' => '未付款',
            'order_time' => '2017-08-25 16：32：46',
            'card_type' => '点点通',
            'city' => array('全部', '深圳', '广州', '香港', '长沙', '上海', '厦门', '武汉', '天津', '贵阳', '成都', '重庆', '郑州', '北京'),
            'choose' => [
                [ 'addr' => '深圳', 'cost' => '￥5,500', 'begin' => '2017-08-25', 'end' => '2018-08-25'],
                [ 'addr' => '香港', 'cost' => '￥5,500', 'begin' => '2017-08-25', 'end' => '2018-08-25'],
                [ 'addr' => '上海', 'cost' => '￥4,500', 'begin' => '2017-08-25', 'end' => '2018-08-25'],
            ],
            'fwnr' => 'a.全国地址挂靠   b.挂靠地址电话秘书服务   c.挂靠地址行政文秘服务   d.挂靠地址商务支持服务',
            'give' => [
                ['name' => '经理室使用券', 'num' => '2', 'company' => '张'],
                ['name' => '移动卡位使用券', 'num' => '2', 'company' => '张'],
                ['name' => '会议室使用券(1小时/张)', 'num' => '5', 'company' => '张'],
                ['name' => '会客室使用券(1小时/张)', 'num' => '5', 'company' => '张'],
            ],
            'cost' => '10000',
            'pay_type' => array('微信支付' => '/resource/front/images/a1_06.png', '支付宝支付' => '/resource/front/images/a1_08.png ', '对公转账' => '/resource/front/images/a1_03.png'),
            'tip' => '如需开票，请使用对公转账。',
        ];
        $this->twig->render('front/hmtong/hmtDDTOrderDetails.html', $this->data);
    }

    /*
     * 海脉通-实体会员页
     */

    public function hmtVip()
    {
        $this->data['title'] = '海脉通-实体会员';
        $this->data['tel'] = '400-822-3230';

        $this->data['content'] = [
            'jk1' => [ 'discount' => '9.9', 'img1' => '', 'img2' => array(), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'get_res' => '1', 'fl' => '0'],
            'jk2' => [ 'discount' => '9.8', 'img1' => '', 'img2' => array(), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'get_res' => '1', 'fl' => '0'],
            'bj1' => [ 'discount' => '9.6', 'img1' => '', 'img2' => array(), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'get_res' => '1', 'fl' => '0'],
            'bj2' => [ 'discount' => '9.5', 'img1' => '', 'img2' => array(), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'get_res' => '1', 'fl' => '1'],
            'hj1' => [ 'discount' => '9.2', 'img1' => '', 'img2' => array(), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'get_res' => '1', 'fl' => '1'],
            'hj2' => [ 'discount' => '9.2', 'img1' => '', 'img2' => array(), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'get_res' => '1', 'fl' => '1'],
            'zt' => [ 'discount' => '9.2', 'img1' => '', 'img2' => array(), 'water' => '免费', 'A4' => '10', 'free_hyx' => '1', 'get_integral' => '10000', 'Coffee' => '1', 'free_hkx' => '1', 'gift_amount' => '3150', 'get_res' => '1', 'fl1' => '', 'xj_fl' => '5'],
        ];
        $this->twig->render('front/hmtong/hmtVip.html', $this->data);
    }

    /*
     * 海脉通-实体会员-订单详情页
     */

    public function hmtVipOrderDetails()
    {

        $this->data['title'] = '海脉通-点点通-订单详情';
        $this->data['tel'] = '400-822-3230';
        $this->data['grade'] = '400-822-3230';
        $this->data['content'] = [
            'order_num' => '201728356315',
            'order_state' => '未付款',
            'order_time' => '2017-08-25 16：32：46',
            'card_type' => '金卡初级会员',
            'discount' => '9.9',
            'term' => '一年',
            'begin' => '2017-08-25',
            'end' => '2017-08-25',
            'service' => array('线下场地实体服务,线下场地实体服务,线下场地实体服务,线下场地实体服务'),
            'give' => [
                ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
                ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
                ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
                ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
                ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
                ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
                ['name' => '经理室使用券', 'num' => '5', 'company' => '张'],
            ],
            'cost' => '15000',
            'pay_type' => array('微信支付' => '/resource/front/images/a1_06.png', '支付宝支付' => '/resource/front/images/a1_08.png ', '对公转账' => '/resource/front/images/a1_03.png'),
            'tip' => '如需开票，请使用对公转账。',
        ];
        $this->twig->render('front/hmtong/hmtVipOrderDetails.html', $this->data);
    }

}
