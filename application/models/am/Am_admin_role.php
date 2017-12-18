<?php

/**
 * 角色模型
 */
require_once APPPATH . '/models/Modelbase.php';

class Am_admin_role extends Modelbase
{

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    public function roleGetPermission($role_id)
    {
        $res = $this->get_one('permission', ['id' => $role_id]);
        if (empty($res) || empty($res['permission'])) {
            return false;
        }
        $this->load->model('am/am_permission');
        $data = [];
        if ($res['permission'] == '*') {
            $data['list'] = $this->am_permission->get_all('*', ['is_show' => 1, 'type' => 0], "id asc");
            $button = $this->am_permission->get_all('*', ['type' => 1], "id asc");
        } else {
            $data['list'] = $this->am_permission->get_all('*', "is_show = 1 and type = 0 and id in ({$res['permission']})", "id asc");
            $button = $this->am_permission->get_all('*', "type = 1 and id in ({$res['permission']})", "id asc");
        }
        $_button = [];
        foreach ($button as $k => $v) {
            $_button[] = $v['id'];
        }
        $data['button'] = $_button;
        return $data;
    }

    public function getPermission($role_id)
    {
        $res = $this->get_one('permission', ['id' => $role_id]);
        if (empty($res) || empty($res['permission'])) {
            return [];
        }
        $this->load->model('am/am_permission');
        $list = [];
        if ($res['permission'] == '*') {
            $list = $this->am_permission->get_all('*', ['is_show' => 1], "id asc");
        } else {
            $list = $this->am_permission->get_all('*', "is_show = 1 and id in ({$res['permission']})", "id asc");
        }
        return $list;
    }
}
