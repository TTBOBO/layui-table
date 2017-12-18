<?php

/*
 * 广告相关
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/Apibase.php';

class Api_ads extends Apibase {

    public $model;

    function __construct()
    {
        parent::__construct();
        $this->load->model('am/am_ads');
        $this->model = $this->am_ads;
    }

    /**
     * 获取广告
     */
    public function get_ads_list_get()
    {
        //验证请求数据 
        $request_data = $this->check_param([
            'type' => ['广告类型', 'required', 'integer'], //type 1:启动页,2:首页banner,3:底部广告
        ]);
        /*
         * 验证成功后的逻辑
         * 1.校验参数有效性(已前置处理)
         * 2.查询广告列表数据
         */
        $sql = $this->model->getListSql('*', [
            'type' => $request_data['type'],
            //'is_show' => 1,
                //'UNIX_TIMESTAMP(begin_at)<' => $this->_start_rtime, //暂时不支持上下架功能
                //'UNIX_TIMESTAMP(end_at)>' => $this->_start_rtime//暂时不支持上下架功能
        ]);
        $grid = $this->grid($sql, 'id desc');
        $this->returnData($grid);
    }

}
