
<?php

/*
 * 用户管理
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Adminbase.php';

/**
 * Ioffice
 */
class Ioffice extends Adminbase {

    public function __construct()
    {
        parent::__construct();
//        $this->load->model('om/om_cz_order');
//        $this->model = $this->om_cz_order;
        $this->data = array_merge($this->data, array("category" => "活动管理", "model" => strtolower(__CLASS__)));
    }

    public function roadshow()
    {

        $this->data['title'] = '活动信息';
        $this->twig->render('admin/im/roadshow', $this->data);
    }

    public function info_roadshow()
    {
        $this->data['controlName'] = '/roadshow';
        $this->data['prevTitle'] = '活动信息';
        $this->data['title'] = '活动信息';
        $this->twig->render('admin/im/info_roadshow', $this->data);
    }
     public function addRoadshow()
    {
        $this->data['controlName'] = '/roadshow';
        $this->data['prevTitle'] = '活动信息';
        $this->data['title'] = '添加';
        $this->twig->render('admin/im/addRoadshow', $this->data);
    }
     public function editRoadshow()
    {
        $this->data['controlName'] = '/roadshow';
        $this->data['prevTitle'] = '活动信息';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/im/editRoadshow', $this->data);
    }

}
