<?php

/**
 * 海脉-企服宝模块
 * @author: Version 1.0.0 2017-11-4
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Enterprisebaby extends Base {

    public function index()
    {
        $this->data['title'] = '首页';

        $this->twig->render('front/hmspace/q-index.html', $this->data);
    }

    public function talent()
    {
        $this->data['title'] = '人才列表';

        $this->twig->render('front/hmspace/h-talents-resources.html', $this->data);
    }

    public function talent_details()
    {
        $this->data['title'] = '人才详情';

        $this->twig->render('front/hmspace/h-talent-details.html', $this->data);
    }


    public function training()
    {
        $this->data['title'] = '人才详情';

        $this->twig->render('front/hmspace/h-qusutuo.html', $this->data);
    }



}
