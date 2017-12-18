<?php

/*
 * 角色
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Apibase.php';

class Api_role extends Apibase
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('am/am_admin_role', 'model');
    }

    public function add_or_edit_post()
    {
        $request_data = $this->check_param([
            'id' => ['主键', 'integer'],
            'name' => ['角色名称', 'required'],
            'permission' => ['权限列表', 'required'],
        ], [], 'post');
        if (empty($request_data['id'])) {
            $info = $this->model->get_one('id', ['name' => $request_data['name']]);
            if (!empty($info)) {
                $this->returnError($this->errorApi[999]);
            }
            $request_data['create_at'] = date('Y-m-d H:i:s');
            $request_data['update_at'] = date('Y-m-d H:i:s');
            $request_data['creator_id'] = $this->loginData['aid'];
            $res = $this->model->add($request_data);
        } else {
            if ($request_data['id'] == 1) {
                $this->returnError($this->errorApi[998]);
            }
            $info = $this->model->get_one('id', "name ='{$request_data['name']}' and id != {$request_data['id']}");
            if (!empty($info)) {
                $this->returnError($this->errorApi[999]);
            }
            $request_data['update_at'] = date('Y-m-d H:i:s');
            $res = $this->model->edit(['id' => $request_data['id']], $request_data);
        }
        if ($res === false) {
            $this->returnError($this->errorApi[1]);
        }
        $this->returnData();
    }

    public function del_post()
    {
        $request_data = $this->check_param([
            'id' => ['主键', 'required'],
        ], [], 'post');
        if (strpos($request_data['id'], '1') !== false) {
            $this->returnError($this->errorApi[997]);
        }
        $info = $this->model->get_one('id', "id in ({$request_data['id']})");
        if (empty($info)) {
            $this->returnError($this->errorApi[0]);
        }
        $this->load->model('am/am_admin');
        $admin = $this->am_admin->get_one('aid', "role_id in ({$request_data['id']})");
        if (!empty($admin)) {
            $this->returnError($this->errorApi[996]);
        }
        $this->model->del("id in ({$request_data['id']})");
        $this->returnData();
    }
}
