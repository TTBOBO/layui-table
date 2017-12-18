<?php

/*
 * 文章管理
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/Apibase.php';

/**
 * test
 */
class Api_product extends Apibase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('cp/cp_service', 'model');
    }

    /**
     * 产品管理服务管理start
     */
    public function index_post()
    {
        $request_data = $this->check_param([
            'select' => ['查询字段'],
            'limit' => ['每页显示多少条', 'required', 'integer'],
            'page' => ['第几页', 'integer'],
            'filter' => ['查询条件'],
            'order' => ['排序'],
                ], [], 'post');
        if (!$request_data['order']) {
            $request_data['order'] = 'id desc';
        }
        if (!$request_data['filter']) {
            $request_data['filter'] = 'im_service.is_del = 0';
        } else {
            $request_data['filter'] .= ' and im_service.is_del = 0';
        }
        $grid = $this->model->grid($request_data['select'], $request_data['filter'], $request_data['page'], $request_data['limit'], '', '', $request_data['order']);

        $type = array('虚拟服务', '实体服务');
        $is_limit_num = array('不限制', '限制次数');
        $data = $grid['rows'];
        if (!$data) {
            $this->outData([]);
            return;
        }
//        foreach ($data as $key => $val) {
//            $data[$key]['type'] = $type[$data[$key]['type']];
//            $data[$key]['is_limit_num'] = $is_limit_num[$data[$key]['is_limit_num']];
//        }
        $grid['rows'] = $data;
        $this->outData($grid);
    }

    public function getInfo_post()
    {
        $request_data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
                ], [], 'post');
        $data = $this->model->get_one('*', ['id' => $request_data['id']]);
        $this->returnData($data);
    }

    public function edit_post()
    {
        $request_data = $this->check_param([
            'id' => ['ID', 'required', 'integer'],
            'title' => ['标题', 'required', 'regex_match[/[\x{4e00}-\x{9fa5}\w]+/u]', 'max_length[200]'],
                ], [], 'post');
        $cid = $this->loginData['cid'];
        $_color = $this->model->get_one('color', ['id' => $request_data['id']]);
        $info = $this->model->get_one('*', ['title' => $request_data['title'], 'color' => $_color['color'], 'is_del' => 0, 'cid' => $cid]);
        if ($info) {
            $this->returnError('标题名称和颜色已存在');
        }
        $request_data['sort'] = isset($request_data['sort']) ? $request_data['sort'] : 100; //默认100
        $condition = ['id' => $request_data['id']];
        $res = $this->model->edit($condition, $request_data);
        if ($res === false) {
            $this->returnError('编辑失败');
        }
        $this->returnData([]);
    }

    public function del_post()
    {
        $request_data = $this->check_param([
            'id' => ['ID', 'required'],
                ], [], 'post');
        $where = 'id in (' . $request_data['id'] . ")";
        $res = $this->model->edit($where, ['is_del' => 1]);
        if ($res === false) {
            $this->returnError('删除失败');
        }
        $this->returnData([]);
    }

    public function add_edit_post()
    {
        $request_data = $this->check_param([
            'id' => ['ID', 'integer'],
            'name' => ['名称', 'required'],
            'icon' => ['图标地址', 'required'],
            'title' => ['服务简介', 'required'],
            'content' => ['服务内容', 'required'], //1-增值税专用发票 2-普通
            'pics' => ['图片地址', 'required'],
            'type' => ['类型', 'required', 'integer'],
                ], [], 'post');


        if (empty($request_data['id'])) {
            unset($request_data['id']);
            $request_data['create_at'] = date('Y-m-d h:i:s', time());
            $this->model->add($request_data);
        } else {
            $info = $this->model->get_one('*', ['id' => $request_data['id']]);
            if (!$info) {
                $this->returnError('未查询到信息');
            }
            $this->model->edit(['id' => $request_data['id']], $request_data);
        }
        $this->returnData([]);
    }

    /**
     * 产品管理服务管理end
     */

    /**
     * 产品管理服务管理类型  start
     */
    public function product_type_post()
    {
        $request_data = $this->check_param([
            'select' => ['查询字段'],
            'limit' => ['每页显示多少条', 'required', 'integer'],
            'page' => ['第几页', 'integer'],
            'filter' => ['查询条件'],
            'order' => ['排序'],
                ], [], 'post');
        if (!$request_data['order']) {
            $request_data['order'] = 'product_type_id  desc';
        }

        if (!$request_data['filter']) {
            $request_data['filter'] = 'im_product_type.is_del = 0';
        } else {
            $request_data['filter'] .= ' and im_product_type.is_del = 0';
        }

        $this->load->model('cp/cp_type');
        $grid = $this->cp_type->grid($request_data['select'], $request_data['filter'], $request_data['page'], $request_data['limit'], '', '', $request_data['order']);
        $this->outData($grid);
    }

    public function type_edit_add_post()
    {
        $request_data = $this->check_param([
            'id' => ['ID', 'integer'],
            'name' => ['名称', 'required']
                ], [], 'post');

        $this->load->model('cp/cp_type');
        if (empty($request_data['id'])) {
            unset($request_data['id']);
            $request_data['create_at'] = date('Y-m-d h:i:s', time());
            $this->cp_type->add($request_data);
        } else {
            $info = $this->cp_type->get_one('*', ['product_type_id' => $request_data['id']]);
            if (!$info) {
                $this->returnError('未查询到信息');
            }
            $request_data['product_type_id'] = $request_data['id'];
            unset($request_data['id']);
            $this->cp_type->edit(['product_type_id' => $request_data['product_type_id']], $request_data);
        }
        $this->returnData([]);
    }

    /*
      public function type_del_post()
      {
      $request_data = $this->check_param([
      'id' => ['ID', 'required'],
      ], [], 'post');
      $where = 'id in (' . $request_data['id'] . ")";
      $this->load->model('cp/cp_type');
      $res = $this->cp_type->edit($where, ['is_del' => 1]);
      if ($res === false) {
      $this->returnError('删除失败');
      }
      $this->returnData([]);
      } */

    /**
     * 产品管理服务管理类型  end
     */
}
