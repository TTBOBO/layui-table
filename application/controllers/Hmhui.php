<?php

/**
 * 海脉汇模块
 * @author:jacky Version 1.0.0 2017-10-28
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Haimaivip extends Base {

    public function index()
    {
        $this->twig->render('front/haimaivip.html', $this->data);
    }

}
