<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Home extends Base {

    public function index()
    {
        $this->data['title'] = '首页';
        $this->data['banners'] = [
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/BG.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/banner.png', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
            ['title' => '测试广告', 'cate_id' => '1', 'cate_name' => '首页广告', 'path' => '/resource/front/images/hmt_banner.jpg', 'link' => '', 'width' => '100%', 'height' => '700px', 'desc' => ''],
        ];
        $this->twig->render('front/index.html', $this->data);
    }

    public function login()
    {
        $this->data['title'] = '登陆';
        $this->twig->render('front/common/login.html', $this->data);
    }

    public function regist()
    {
        $this->data['title'] = '注册';
        $this->twig->render('front/common/regist.html', $this->data);
    }

    public function navList()
    {
        $this->twig->render('front/navList.html', $this->data);
    }

    public function checkCity()
    {
        $this->data['title'] = '城市选择';
        $this->twig->render('front/check_city.html', $this->data);
    }

}
