<?php

/**
 * 海脉-企服宝模块
 * @author: Version 1.0.0 2017-11-4
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Hmqfb extends Base {

    public function index()
    {
        $this->data['title'] = '首页';
        $this->data['banners'] = [
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '广告', 'path' => '../resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '广告', 'path' => '../resource/front/images/BG.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '广告', 'path' => '../resource/front/images/banner.png', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '广告', 'path' => '../resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
        ];
        $this->twig->render('front/hmqifubao/index.html', $this->data);
    }

}
