<?php

/*
 * 后台管理系统帐户
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Adminbase.php';

class Auser extends Adminbase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('am/am_admin');
        $this->model = $this->am_admin;
        $this->data = array_merge($this->data, array("category" => "系统管理", "model" => strtolower(__CLASS__)));
    }

    public function banner()
    {
        $this->data['title'] = 'banner管理';
        $this->twig->render('admin/auser/banner', $this->data);
    }

    public function addbanner()
    {
        $this->data['controlName'] = '/banner';
        $this->data['prevTitle'] = 'banner管理';
        $this->data['title'] = '添加banner';
        $this->twig->render('admin/auser/addbanner', $this->data);
    }

    public function editbanner()
    {
        $this->data['controlName'] = '/banner';
        $this->data['prevTitle'] = 'banner管理';
        $this->data['title'] = '编辑banner管理';
        $this->twig->render('admin/auser/editbanner', $this->data);
    }

    public function info_banner()
    {
        $this->data['controlName'] = '/banner';
        $this->data['prevTitle'] = 'banner管理';
        $this->data['title'] = 'banner管理详情';
        $this->twig->render('admin/auser/infoBanner', $this->data);
    }

    public function banner_type()
    {
        $this->data['title'] = 'banner类型管理 ';
        $this->twig->render('admin/auser/banner_type', $this->data);
    }

    public function addbanner_type()
    {
        $this->data['controlName'] = '/banner_type';
        $this->data['prevTitle'] = 'banner类型管理';
        $this->data['title'] = '添加banner类型 ';
        $this->twig->render('admin/auser/addbanner_type', $this->data);
    }

    public function editbanner_type()
    {
        $this->data['controlName'] = '/banner_type';
        $this->data['prevTitle'] = 'banner类型管理';
        $this->data['title'] = '编辑banner类型 ';
        $this->twig->render('admin/auser/editbanner_type', $this->data);
    }

    public function info_banner_type()
    {
        $this->data['controlName'] = '/banner_type';
        $this->data['prevTitle'] = 'banner类型管理';
        $this->data['title'] = 'banner类型管理详情';
        $this->twig->render('admin/auser/infoBannerType', $this->data);
    }

    public function business_dynamics()
    {
        $this->data['title'] = '商机动态管理';
        $this->twig->render('admin/auser/business_dynamics', $this->data);
    }

    public function addbusiness_dynamics()
    {
        $this->data['controlName'] = '/business_dynamics';
        $this->data['prevTitle'] = '商机动态管理';
        $this->data['title'] = '添加商机动态';
        $this->twig->render('admin/auser/addbusiness_dynamics', $this->data);
    }

    public function editbusiness_dynamics()
    {
        $this->data['controlName'] = '/business_dynamics';
        $this->data['prevTitle'] = '商机动态管理';
        $this->data['title'] = '编辑商机动态';
        $this->twig->render('admin/auser/editbusiness_dynamics', $this->data);
    }

    public function info_business_dynamics()
    {
        $this->data['controlName'] = '/business_dynamics';
        $this->data['prevTitle'] = '商机动态管理';
        $this->data['title'] = '商机动态管理详情';
        $this->twig->render('admin/auser/infoBusinessdDynamics', $this->data);
    }

    public function circle_dynamic()
    {
        $this->data['title'] = '圈子动态管理';
        $this->twig->render('admin/auser/circle_dynamic', $this->data);
    }

    public function info_circle_dynamic()
    {
        $this->data['controlName'] = '/circle_dynamic';
        $this->data['prevTitle'] = '圈子动态管理';
        $this->data['title'] = '圈子动态管理详情';
        $this->twig->render('admin/auser/infoCircleDynamic', $this->data);
    }

    public function add_circle_dynamic()
    {
        $this->data['controlName'] = '/circle_dynamic';
        $this->data['prevTitle'] = '圈子动态管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/auser/add_circle_dynamic', $this->data);
    }

    public function edit_circle_dynamic()
    {
        $this->data['controlName'] = '/circle_dynamic';
        $this->data['prevTitle'] = '圈子动态管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/auser/edit_circle_dynamic', $this->data);
    }

    public function dynamic()
    {
        $this->data['title'] = '人脉用户管理';
        $this->twig->render('admin/auser/dynamic', $this->data);
    }

    public function info_dynamic()
    {
        $this->data['controlName'] = '/dynamic';
        $this->data['prevTitle'] = '人脉用户管理';
        $this->data['title'] = '人脉用户管理详情';
        $this->twig->render('admin/auser/infoDynamic', $this->data);
    }

    public function add_dynamic()
    {
        $this->data['controlName'] = '/dynamic';
        $this->data['prevTitle'] = '人脉用户管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/auser/add_dynamic', $this->data);
    }

    public function edit_dynamic()
    {
        $this->data['controlName'] = '/dynamic';
        $this->data['prevTitle'] = '人脉用户管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/auser/edit_dynamic', $this->data);
    }

    public function index()
    {
        $this->data['title'] = '帐号列表';
        $this->twig->render('admin/auser/auser', $this->data);
    }

    public function role()
    {
        $this->data['title'] = '角色列表';
        $this->twig->render('admin/auser/role', $this->data);
    }

    public function permission()
    {
        $this->data['title'] = '权限列表';
        $this->twig->render('admin/auser/permission', $this->data);
    }

    public function invoice()
    {
        $this->data['title'] = '发票管理';
        $this->twig->render('admin/auser/invoice', $this->data);
    }

    public function info_invoice()
    {
        $this->data['controlName'] = '/invoice';
        $this->data['prevTitle'] = '发票管理';
        $this->data['title'] = '发票管理详情';
        $this->twig->render('admin/auser/infoInvoice', $this->data);
    }

    public function add_invoice()
    {
        $this->data['controlName'] = '/invoice';
        $this->data['prevTitle'] = '发票管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/auser/add_invoice', $this->data);
    }

    public function edit_invoice()
    {
        $this->data['controlName'] = '/invoice';
        $this->data['prevTitle'] = '发票管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/auser/edit_invoice', $this->data);
    }

    public function marking_people()
    {
        $this->data['title'] = '运营人员管理';
        $this->twig->render('admin/auser/marking_people', $this->data);
    }

    public function info_marking_people()
    {
        $this->data['controlName'] = '/marking_people';
        $this->data['prevTitle'] = '运营人员管理';
        $this->data['title'] = '运营人员详情';
        $this->twig->render('admin/auser/infoMarkingPeople', $this->data);
    }

    public function add_marking_people()
    {
        $this->data['controlName'] = '/marking_people';
        $this->data['prevTitle'] = '运营人员管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/auser/add_marking_people', $this->data);
    }

    public function edit_marking_people()
    {
        $this->data['controlName'] = '/marking_people';
        $this->data['prevTitle'] = '运营人员管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/auser/edit_marking_people', $this->data);
    }

    public function message()
    {
        $this->data['title'] = '短信管理';
        $this->twig->render('admin/nm/message', $this->data);
    }

    public function infoMessage()
    {
        $this->data['controlName'] = '/message';
        $this->data['prevTitle'] = '短信管理';
        $this->data['title'] = '短信管理详情';
        $this->twig->render('admin/nm/infoMessage', $this->data);
    }

    public function notice()
    {
        $this->data['title'] = '消息管理';
        $this->twig->render('admin/nm/notice', $this->data);
    }

    public function infoNotice()
    {
        $this->data['controlName'] = '/notice';
        $this->data['prevTitle'] = '消息管理';
        $this->data['title'] = '消息管理详情';
        $this->twig->render('admin/nm/infoNotice', $this->data);
    }

    public function notice_type()
    {
        $this->data['title'] = '消息类型管理';
        $this->twig->render('admin/nm/notice_type', $this->data);
    }

    public function info_notice_type()
    {
        $this->data['controlName'] = '/notice_type';
        $this->data['prevTitle'] = '消息类型管理';
        $this->data['title'] = '消息类型管理详情';
        $this->twig->render('admin/nm/info_notice_type', $this->data);
    }

    public function channel()
    {
        $this->data['title'] = '渠道信息';
        $this->twig->render('admin/im/channel', $this->data);
    }

    public function info_channel()
    {
        $this->data['controlName'] = '/channel';
        $this->data['prevTitle'] = '渠道信息';
        $this->data['title'] = '渠道信息详情';
        $this->twig->render('admin/im/infoChannel', $this->data);
    }

    public function edit_channel()
    {
        $this->data['controlName'] = '/channel';
        $this->data['prevTitle'] = '渠道信息';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/im/edit_channel', $this->data);
    }

    public function add_channel()
    {
        $this->data['controlName'] = '/channel';
        $this->data['prevTitle'] = '渠道信息';
        $this->data['title'] = '添加';
        $this->twig->render('admin/im/add_channel', $this->data);
    }

    public function channel_type()
    {
        $this->data['title'] = '渠道类型';
        $this->twig->render('admin/auser/channel_type', $this->data);
    }

    public function info_channel_type()
    {
        $this->data['controlName'] = '/channel_type';
        $this->data['prevTitle'] = '渠道类型';
        $this->data['title'] = '渠道类型详情';
        $this->twig->render('admin/auser/info_channel_type', $this->data);
    }

    public function add_channel_type()
    {
        $this->data['controlName'] = '/channel_type';
        $this->data['prevTitle'] = '渠道类型';
        $this->data['title'] = '添加';
        $this->twig->render('admin/auser/add_channel_type', $this->data);
    }

    public function edit_channel_type()
    {
        $this->data['controlName'] = '/channel_type';
        $this->data['prevTitle'] = '渠道类型';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/auser/edit_channel_type', $this->data);
    }

    public function shop()
    {
        $this->data['title'] = '店铺管理';
        $this->twig->render('admin/im/shop', $this->data);
    }

    public function infoShop()
    {
        $this->data['controlName'] = '/shop';
        $this->data['prevTitle'] = '店铺管理';
        $this->data['title'] = '店铺管理详情';
        $this->twig->render('admin/im/infoShop', $this->data);
    }

    public function editShop()
    {
        $this->data['controlName'] = '/shop';
        $this->data['prevTitle'] = '店铺管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/im/editShop', $this->data);
    }

    public function addShop()
    {
        $this->data['controlName'] = '/shop';
        $this->data['prevTitle'] = '店铺管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/im/addShop', $this->data);
    }

    public function station()
    {
        $this->data['title'] = '工位管理';
        $this->twig->render('admin/im/station', $this->data);
    }

    public function infoStation()
    {
        $this->data['controlName'] = '/station';
        $this->data['prevTitle'] = '工位管理';
        $this->data['title'] = '工位管理详情';
        $this->twig->render('admin/im/infoStation', $this->data);
    }

    public function addStation()
    {
        $this->data['controlName'] = '/station';
        $this->data['prevTitle'] = '工位管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/im/addStation', $this->data);
    }

    public function editStation()
    {
        $this->data['controlName'] = '/station';
        $this->data['prevTitle'] = '工位管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/im/editStation', $this->data);
    }

    public function express()
    {
        $this->data['title'] = '优质项目管理';
        $this->twig->render('admin/im/express', $this->data);
    }

    public function infoExpress()
    {
        $this->data['controlName'] = '/express';
        $this->data['prevTitle'] = '优质项目管理';
        $this->data['title'] = '优质项目管理详情';
        $this->twig->render('admin/im/infoExpress', $this->data);
    }

    public function addExpress()
    {
        $this->data['controlName'] = '/express';
        $this->data['prevTitle'] = '优质项目管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/im/addExpress', $this->data);
    }

    public function editExpress()
    {
        $this->data['controlName'] = '/express';
        $this->data['prevTitle'] = '优质项目管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/im/editExpress', $this->data);
    }

    public function center()
    {
        $this->data['title'] = '中心配置管理';
        $this->twig->render('admin/im/center', $this->data);
    }

    public function infoCenter()
    {
        $this->data['controlName'] = '/center';
        $this->data['prevTitle'] = '中心配置管理';
        $this->data['title'] = '中心配置管理详情';
        $this->twig->render('admin/im/infoCenter', $this->data);
    }

    public function rim_serve()
    {
        $this->data['title'] = '周边服务';
        $this->twig->render('admin/im/rim_serve', $this->data);
    }

    public function infoServe()
    {
        $this->data['controlName'] = '/rim_serve';
        $this->data['prevTitle'] = '周边服务';
        $this->data['title'] = '周边服务详情';
        $this->twig->render('admin/im/infoServe', $this->data);
    }

    /* public function addServe()
      {
      $this->data['controlName'] = '/rim_serve';
      $this->data['prevTitle'] = '周边服务';
      $this->data['title'] = '添加';
      $this->twig->render('admin/im/addServe', $this->data);
      }
      public function editServe()
      {
      $this->data['controlName'] = '/rim_serve';
      $this->data['prevTitle'] = '周边服务';
      $this->data['title'] = '编辑';
      $this->twig->render('admin/im/editServe', $this->data);
      } */

    public function roomcate()
    {
        $this->data['title'] = '房间类型';
        $this->twig->render('admin/im/roomcate', $this->data);
    }

    public function addroomcate()
    {
        $this->data['controlName'] = '/roomcate';
        $this->data['prevTitle'] = '房间类型';
        $this->data['title'] = '添加房间类型';
        $this->twig->render('admin/currency/addroomcate', $this->data);
    }

    public function editroomcate()
    {
        $this->data['controlName'] = '/roomcate';
        $this->data['prevTitle'] = '房间类型';
        $this->data['title'] = '编辑房间类型';
        $this->twig->render('admin/currency/editroomcate', $this->data);
    }

    public function infoRoomCate()
    {
        $this->data['controlName'] = '/roomcate';
        $this->data['prevTitle'] = '房间类型';
        $this->data['title'] = '房间类型详情';
        $this->twig->render('admin/im/infoRoomCate', $this->data);
    }

    public function status()
    {
        $this->data['title'] = '房间预定状态';
        $this->twig->render('admin/im/status', $this->data);
    }

    public function infoStatus()
    {
        $this->data['controlName'] = '/status';
        $this->data['prevTitle'] = '房间预定状态';
        $this->data['title'] = '房间预定状态详情';
        $this->twig->render('admin/im/infoStatus', $this->data);
    }

    public function rim_facility()
    {
        $this->data['title'] = '周边设施管理';
        $this->twig->render('admin/im/rim_facility', $this->data);
    }

    public function enter_company()
    {
        $this->data['title'] = '入驻企业管理';
        $this->twig->render('admin/im/enter_company', $this->data);
    }

    public function infoEnterCompany()
    {
        $this->data['controlName'] = '/enter_company';
        $this->data['prevTitle'] = '入驻企业管理';
        $this->data['title'] = '入驻企业管理详情';
        $this->twig->render('admin/im/infoEnterCompany', $this->data);
    }

    public function addEnterCompany()
    {
        $this->data['controlName'] = '/enter_company';
        $this->data['prevTitle'] = '入驻企业管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/im/addEnterCompany', $this->data);
    }

    public function editEnterCompany()
    {
        $this->data['controlName'] = '/enter_company';
        $this->data['prevTitle'] = '入驻企业管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/im/editEnterCompany', $this->data);
    }

    public function serve_template()
    {
        $this->data['title'] = '服务模板管理';
        $this->twig->render('admin/im/serve_template', $this->data);
    }

    public function channel_people()
    {
        $this->data['title'] = '人才信息管理';
        $this->twig->render('admin/im/channel_people', $this->data);
    }

    public function info_channel_people()
    {
        $this->data['title'] = '人才信息管理';
        $this->twig->render('admin/im/info_channel_people', $this->data);
    }

    public function admin_log()
    {
        $this->data['title'] = '日志管理';
        $this->twig->render('admin/auser/admin_log', $this->data);
    }

    public function customManager()
    {
        $this->data['title'] = '客户管理';
        $this->twig->render('admin/auser/customManager', $this->data);
    }
	
	public function addCustomManager()
    {
        $this->data['controlName'] = '/customManager';
        $this->data['prevTitle'] = '客户管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/auser/addCustomManager', $this->data);
    }
    public function editCustomManager()
    {
        $this->data['controlName'] = '/customManager';
        $this->data['prevTitle'] = '客户管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/auser/editCustomManager', $this->data);
    }
    public function admin_user()
    {
        $this->data['title'] = '管理员列表管理';
        $this->twig->render('admin/auser/adminUser', $this->data);
    }

	 public function infoAdminUser()
    {
        $this->data['controlName'] = '/admin_user';
        $this->data['prevTitle'] = '管理员列表管理';
        $this->data['title'] = '管理员列表管理详情';
        $this->twig->render('admin/auser/infoAdminUser', $this->data);
    }

	 public function addAdminUser()
    {
        $this->data['controlName'] = '/admin_user';
        $this->data['prevTitle'] = '管理员列表管理';
        $this->data['title'] = '添加';
        $this->twig->render('admin/auser/addAdminUser', $this->data);
    }
     public function editAdminUser()
    {
        $this->data['controlName'] = '/admin_user';
        $this->data['prevTitle'] = '管理员列表管理';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/auser/editAdminUser', $this->data);
    }
    public function addRole()
    {
        $this->data['controlName'] = '/role';
        $this->data['prevTitle'] = '角色列表';
        $this->data['title'] = '添加角色';
        $this->load->model('am/am_admin_role');
        $list = $this->am_admin_role->getPermission($_SESSION['userInfo']['role_id']);
        $this->data['nodes'] = json_encode($list);
        $this->twig->render('admin/auser/addRole', $this->data);
    }

    public function editRole()
    {
        $this->data['controlName'] = '/role';
        $this->data['prevTitle'] = '角色列表';
        $this->data['title'] = '编辑角色';
        $request_data = $this->check_param([
            'role_id' => ['角色ID', 'required', 'integer'],
                ], [], 'get');
        $this->load->model('am/am_admin_role');
        $list = $this->am_admin_role->getPermission($_SESSION['userInfo']['role_id']);
        $list2 = $this->am_admin_role->getPermission($request_data['role_id']);
        $_list = [];
        foreach ($list2 as $k) {
            $_list[] = $k['id'];
        }
        foreach ($list as &$v) {
            if (in_array($v['id'], $_list)) {
                $v['checked'] = true;
                $v['open'] = true;
            }
        }
        $this->data['nodes'] = json_encode($list);
        $info = $this->am_admin_role->get_one('*', ['id' => $request_data['role_id']]);
        $this->data['info'] = $info;
        $this->twig->render('admin/auser/editRole', $this->data);
    }

}
