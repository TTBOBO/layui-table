<?php

/**
 * 海脉-ioffice模块
 * @author: Version 1.0.0 2017-11-4
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Hm_zhong extends Base {

    public function index()
    {
        $this->data['title'] = '首页';
//        $this->twig->render('front/home.html');
        $this->twig->render('front/hmzhongbao/index.html');
    }

}
