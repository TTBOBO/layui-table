<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Adminbase.php';

class Home extends AdminBase
{

    public function __construct()
    {
        parent::__construct();
        $this->data = array_merge($this->data, ['category' => '欢迎页', 'title' => '首页', "model" => strtolower(__CLASS__)]);
    }

    public function index()
    {
        $manu_list = $_SESSION['permission']['list'];
        $this->data['manu_list'] = getTreeData($manu_list);
        $this->twig->render('admin/index.html', $this->data);
    }

    public function default_index()
    {
        $this->twig->render('admin/default.html', $this->data);
    }

    public function add()
    {
        $list = [
            ['title' => '服务管理添加', 'id' => 134, 'parent_id' => 21, 'type' => 1, 'create_at' => date('Y-m-d H:i:s'), 'update_at' => date('Y-m-d H:i:s')],
            ['title' => '服务管理编辑', 'id' => 135, 'parent_id' => 21, 'type' => 1, 'create_at' => date('Y-m-d H:i:s'), 'update_at' => date('Y-m-d H:i:s')],
            ['title' => '服务管理删除', 'id' => 136, 'parent_id' => 21, 'type' => 1, 'create_at' => date('Y-m-d H:i:s'), 'update_at' => date('Y-m-d H:i:s')],
            ['title' => '赠送项目添加', 'id' => 137, 'parent_id' => 22, 'type' => 1, 'create_at' => date('Y-m-d H:i:s'), 'update_at' => date('Y-m-d H:i:s')],
            ['title' => '赠送项目编辑', 'id' => 138, 'parent_id' => 22, 'type' => 1, 'create_at' => date('Y-m-d H:i:s'), 'update_at' => date('Y-m-d H:i:s')],
            ['title' => '赠送项目删除', 'id' => 139, 'parent_id' => 22, 'type' => 1, 'create_at' => date('Y-m-d H:i:s'), 'update_at' => date('Y-m-d H:i:s')],
        ];
        $this->am_permission->add_batch($list);
    }

}
