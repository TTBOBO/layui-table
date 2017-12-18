<?php

/**
 * 海脉-企服宝模块
 * @author: Version 1.0.0 2017-11-4
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Ioffice extends Base {

    public function index()
    {
        $this->data['title'] = '首页';
        $this->twig->render('front/haimai/ioffice.html', $this->data);
    }

}
