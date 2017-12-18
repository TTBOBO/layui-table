<?php

/*
 * 用户管理
 * @author:jacky Version 1.0.0 2016-6-12
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/admin/Adminbase.php';

/**
 * 用户管理
 */
class User extends Adminbase {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('um/um_user');
        $this->model = $this->um_user;
        $this->data = array_merge($this->data, array("category" => "用户管理", "model" => strtolower(__CLASS__)));
    }

    public function index()
    {
        $this->data['title'] = '用户列表';
        $this->twig->render('admin/user', $this->data);
    }

    public function user()
    {
        $this->data['title'] = '用户列表';
        $this->twig->render('admin/user/userList', $this->data);
    }

//编辑
    public function editUser()
    {
        $this->data['controlName'] = '/user';
        $this->data['prevTitle'] = '用户列表';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/editUser', $this->data);
    }

//页面详情
    public function pageInfo()
    {
        $this->data['controlName'] = '/user';
        $this->data['prevTitle'] = '用户列表';
        $this->data['title'] = '用户详情';
        $this->twig->render('admin/pageInfo', $this->data);
    }

    public function tab()
    {
        $this->data['title'] = 'tab选项卡';
        $this->twig->render('admin/tab', $this->data);
    }

    public function addUser()
    {
        $this->data['controlName'] = '/user';
        $this->data['prevTitle'] = '服务列表';
        $this->data['title'] = '添加服务';
        $this->twig->render('admin/user/addUser', $this->data);
    }

    public function userInfo()
    {
        $this->data['controlName'] = '/user';
        $this->data['prevTitle'] = '用户列表';
        $this->data['title'] = '个人信息';
        $this->twig->render('admin/user/userInfo', $this->data);
    }

    public function addr()
    {
        $this->data['prevTitle'] = '用户列表';
        $this->data['title'] = '地址列表';
        $this->twig->render('admin/user/addr', $this->data);
    }

    public function info_addr()
    {
        $this->data['controlName'] = '/addr';
        $this->data['prevTitle'] = '地址列表';
        $this->data['title'] = '地址列表详情';
        $this->twig->render('admin/user/info_addr', $this->data);
    }

    public function add_addr()
    {
        $this->data['controlName'] = '/addr';
        $this->data['prevTitle'] = '地址列表';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/add_addr', $this->data);
    }

    public function edit_addr()
    {
        $this->data['controlName'] = '/addr';
        $this->data['prevTitle'] = '地址列表';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/edit_addr', $this->data);
    }

    public function company()
    {
        $this->data['title'] = '企业用户';
        $this->twig->render('admin/user/company', $this->data);
    }

    public function addCompany()
    {
        $this->data['controlName'] = '/company';
        $this->data['prevTitle'] = '企业用户';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/addCompany', $this->data);
    }

    public function editCompany()
    {
        $this->data['controlName'] = '/company';
        $this->data['prevTitle'] = '企业用户';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/editCompany', $this->data);
    }

    public function info_Company()
    {
        $this->data['controlName'] = '/company';
        $this->data['prevTitle'] = '公司列表';
        $this->data['title'] = '公司列表详情';
        $this->twig->render('admin/user/infoCompany', $this->data);
    }

    public function company_service()
    {
        $this->data['title'] = '公司服务';
        $this->twig->render('admin/user/company_service', $this->data);
    }

    public function add_Company_service()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '公司服务';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/add_Company_service', $this->data);
    }

    public function edit_Company_service()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '公司服务';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/edit_Company_service', $this->data);
    }

    public function info_Company_service()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '公司服务';
        $this->data['title'] = '公司服务详情';
        $this->twig->render('admin/user/infoCompanyService', $this->data);
    }

//company_service_cat
    public function company_service_cat()
    {
        $this->data['title'] = '公司服务类型';
        $this->twig->render('admin/user/company_service_cat', $this->data);
    }

    public function info_company_service_cat()
    {
        $this->data['controlName'] = '/company_service_cat';
        $this->data['prevTitle'] = '公司服务类型';
        $this->data['title'] = '公司服务类型详情';
        $this->twig->render('admin/user/infoCompanyServiceCat', $this->data);
    }

    public function add_company_service_cat()
    {
        $this->data['controlName'] = '/company_service_cat';
        $this->data['prevTitle'] = '公司服务类型';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/add_company_service_cat', $this->data);
    }

    public function edit_company_service_cat()
    {
        $this->data['controlName'] = '/company_service_cat';
        $this->data['prevTitle'] = '公司服务类型';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/edit_company_service_cat', $this->data);
    }

    public function provider()
    {
        $this->data['title'] = '服务商';
        $this->twig->render('admin/user/provider', $this->data);
    }

    public function addProvider()
    {
        $this->data['controlName'] = '/user_level';
        $this->data['prevTitle'] = '服务商';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/addProvider', $this->data);
    }

    public function editProvider()
    {
        $this->data['controlName'] = '/user_level';
        $this->data['prevTitle'] = '服务商';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/editProvider', $this->data);
    }

    public function user_level()
    {
        $this->data['title'] = '用户等级';
        $this->twig->render('admin/user/user_level', $this->data);
    }

    public function infoUserLevel()
    {
        $this->data['controlName'] = '/user_level';
        $this->data['prevTitle'] = '用户等级';
        $this->data['title'] = '用户等级详情';
        $this->twig->render('admin/user/infoUserLevel', $this->data);
    }

    public function addUserLevel()
    {
        $this->data['controlName'] = '/user_level';
        $this->data['prevTitle'] = '用户等级';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/addUserLevel', $this->data);
    }

    public function editUserLevel()
    {
        $this->data['controlName'] = '/user_level';
        $this->data['prevTitle'] = '用户等级';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/editUserLevel', $this->data);
    }

    public function active()
    {
        $this->data['title'] = '活动表';
        $this->twig->render('admin/user/active', $this->data);
    }

    public function infoActive()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '活动表';
        $this->data['title'] = '活动表详情';
        $this->twig->render('admin/user/infoActive', $this->data);
    }

    public function addActive()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '活动表';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/addActive', $this->data);
    }

    public function editActive()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '活动表';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/editActive', $this->data);
    }

    public function personal()
    {
        $this->data['title'] = '个人投资人';
        $this->twig->render('admin/user/personal', $this->data);
    }

    public function infoPersonal()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '个人投资人';
        $this->data['title'] = '个人投资人详情';
        $this->twig->render('admin/user/infoPersonal', $this->data);
    }

    public function addPersonal()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '个人投资人';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/addPersonal', $this->data);
    }

    public function editPersonal()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '个人投资人';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/editPersonal', $this->data);
    }

    public function product_travelog()
    {
        $this->data['title'] = '用户产品消费追踪';
        $this->twig->render('admin/user/product_travelog', $this->data);
    }

    public function info_product_travelog()
    {
        $this->data['controlName'] = '/product_travelog';
        $this->data['prevTitle'] = '用户产品消费追踪';
        $this->data['title'] = '用户产品消费追踪详情';
        $this->twig->render('admin/user/infoProductTravelog', $this->data);
    }

    public function add_product_travelog()
    {
        $this->data['controlName'] = '/product_travelog';
        $this->data['prevTitle'] = '用户产品消费追踪';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/add_product_travelog', $this->data);
    }

    public function edit_product_travelog()
    {
        $this->data['controlName'] = '/product_travelog';
        $this->data['prevTitle'] = '用户产品消费追踪';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/edit_product_travelog', $this->data);
    }

    public function active_tex()
    {
        $this->data['title'] = '个人项目';
        $this->twig->render('admin/user/active_tex', $this->data);
    }

    public function info_active_tex()
    {
        $this->data['controlName'] = '/active_tex';
        $this->data['prevTitle'] = '个人项目';
        $this->data['title'] = '个人项目详情';
        $this->twig->render('admin/user/infoActiveTex', $this->data);
    }

    public function add_active_tex()
    {
        $this->data['controlName'] = '/active_tex';
        $this->data['prevTitle'] = '个人项目';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/add_active_tex', $this->data);
    }

    public function edit_active_tex()
    {
        $this->data['controlName'] = '/active_tex';
        $this->data['prevTitle'] = '个人项目';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/edit_active_tex', $this->data);
    }

    public function finance_management()
    {
        $this->data['title'] = '退款管理';
        $this->twig->render('admin/user/finance_management', $this->data);
    }

    public function add_provider()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '服务商';
        $this->data['title'] = '编辑服务商';
        $this->twig->render('admin/user/addProvider', $this->data);
    }

    public function infoProvider()
    {
        $this->data['controlName'] = '/provider';
        $this->data['prevTitle'] = '服务商';
        $this->data['title'] = '服务商详情';
        $this->twig->render('admin/user/infoProvider', $this->data);
    }

    public function um_company_contract()
    {
        $this->data['title'] = '公司合同';
        $this->twig->render('admin/user/um_company_contract', $this->data);
    }

    public function infoCompanyContract()
    {
        $this->data['controlName'] = '/um_company_contract';
        $this->data['prevTitle'] = '公司合同';
        $this->data['title'] = '公司合同详情';
        $this->twig->render('admin/user/infoCompanyContract', $this->data);
    }

    public function addCompanyContract()
    {
        $this->data['controlName'] = '/um_company_contract';
        $this->data['prevTitle'] = '公司合同';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/addCompanyContract', $this->data);
    }

    public function editCompanyContract()
    {
        $this->data['controlName'] = '/um_company_contract';
        $this->data['prevTitle'] = '公司合同';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/editCompanyContract', $this->data);
    }

    /* public function score()
      {
      $this->data['title'] = '积分管理';
      $this->twig->render('admin/user/score', $this->data);
      } */

    public function om_integeral()
    {
        $this->data['title'] = '积分流水';
        $this->twig->render('admin/user/om_integeral', $this->data);
    }

    /* public function infoScore()
      {
      $this->data['controlName'] = '/score';
      $this->data['prevTitle'] = '积分管理';
      $this->data['title'] = '积分管理详情';
      $this->twig->render('admin/user/infoScore', $this->data);
      }
     */

    public function loan()
    {
        $this->data['title'] = '找贷款';
        $this->twig->render('admin/user/umLoad', $this->data);
    }

    public function info_Load()
    {
        $this->data['controlName'] = '/loan';
        $this->data['prevTitle'] = '找贷款';
        $this->data['title'] = '找贷款详情';
        $this->twig->render('admin/user/infoLoad', $this->data);
    }

    public function add_Load()
    {
        $this->data['controlName'] = '/loan';
        $this->data['prevTitle'] = '找贷款';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/add_Load', $this->data);
    }

    public function edit_Load()
    {
        $this->data['controlName'] = '/loan';
        $this->data['prevTitle'] = '找贷款';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/infoLoad', $this->data);
    }

    public function messege()
    {
        $this->data['title'] = '消息列表';
        $this->twig->render('admin/user/messege', $this->data);
    }

    public function info_messege()
    {
        $this->data['controlName'] = '/messege';
        $this->data['prevTitle'] = '消息列表';
        $this->data['title'] = '消息列表详情';
        $this->twig->render('admin/user/infoMessege', $this->data);
    }

    public function add_messege()
    {
        $this->data['controlName'] = '/messege';
        $this->data['prevTitle'] = '消息列表';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/add_messege', $this->data);
    }

    public function edit_messege()
    {
        $this->data['controlName'] = '/messege';
        $this->data['prevTitle'] = '消息列表';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/edit_messege', $this->data);
    }

    public function look_house()
    {
        $this->data['title'] = '预约看房';
        $this->twig->render('admin/user/look_house', $this->data);
    }

    public function infoHouse()
    {
        $this->data['controlName'] = '/look_house';
        $this->data['prevTitle'] = '预约看房';
        $this->data['title'] = '预约看房详情';
        $this->twig->render('admin/user/infoHouse', $this->data);
    }

    public function addHouse()
    {
        $this->data['controlName'] = '/look_house';
        $this->data['prevTitle'] = '预约看房';
        $this->data['title'] = '添加';
        $this->twig->render('admin/user/addHouse', $this->data);
    }

    public function editHouse()
    {
        $this->data['controlName'] = '/look_house';
        $this->data['prevTitle'] = '预约看房';
        $this->data['title'] = '编辑';
        $this->twig->render('admin/user/editHouse', $this->data);
    }

    public function demo_data()
    {
        $data = '{"code":0,"msg":"","count":1000,"data":[{"id":10000,"username":"user-0","sex":"女","city":"城市-0","sign":"签名-0","experience":255,"logins":24,"wealth":1510625859,"classify":"作家","score":"http://css.tools.chinaz.com/tools/images/public/logos/logo-index.png"},{"id":10001,"username":"user-1","sex":"男","city":"城市-1","sign":"签名-1","experience":884,"logins":58,"wealth":64928690,"classify":"词人","score":"27"},{"id":10002,"username":"user-2","sex":"女","city":"城市-2","sign":"签名-2","experience":650,"logins":77,"wealth":6298078,"classify":"酱油","score":31},{"id":10003,"username":"user-3","sex":"女","city":"城市-3","sign":"签名-3","experience":362,"logins":157,"wealth":37117017,"classify":"诗人","score":68},{"id":10004,"username":"user-4","sex":"男","city":"城市-4","sign":"签名-4","experience":807,"logins":51,"wealth":76263262,"classify":"作家","score":6},{"id":10005,"username":"user-5","sex":"女","city":"城市-5","sign":"签名-5","experience":173,"logins":68,"wealth":60344147,"classify":"作家","score":87},{"id":10006,"username":"user-6","sex":"女","city":"城市-6","sign":"签名-6","experience":982,"logins":37,"wealth":57768166,"classify":"作家","score":34},{"id":10007,"username":"user-7","sex":"男","city":"城市-7","sign":"签名-7","experience":727,"logins":150,"wealth":82030578,"classify":"作家","score":28},{"id":10008,"username":"user-8","sex":"男","city":"城市-8","sign":"签名-8","experience":951,"logins":133,"wealth":16503371,"classify":"词人","score":14},{"id":10009,"username":"user-9","sex":"女","city":"城市-9","sign":"签名-9","experience":484,"logins":25,"wealth":86801934,"classify":"词人","score":75}]}';
        echo $data;
    }

    public function edit()
    {
        if ('post' == $this->input->method()) {
            $user_status = implode(',', array_keys($this->config->item('user_status')));
            $request_data = $this->check_param([
                'uid' => ['用户ID', 'required', 'integer'],
                'sex' => ['性别', 'integer', 'in_list[1,2]'],
                //'username' => ['required', 'regex_match[/^[\w-]{4,30}$/]'], 暂不支持修改用户名
                'mobile' => ['手机', 'regex_match[/^(0|86|17951)?(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{7,8}$/]'],
                //'qq' => ['qq', 'regex_match[/[\w\d]+$/]', 'max_length[20]'],
                'email' => ['邮箱', 'valid_email', 'max_length[255]'],
                'status' => ['状态', 'required', 'integer', "in_list[{$user_status}]"],
                    ], [], 'post');
            $this->load->model('um/um_user');
            $res = $this->um_user->get_one('*', ['uid' => $request_data['uid']]);
            if (empty($res)) {
                $this->returnError('用户不存在,请检查');
            }

            /**
             * 验证成功后的逻辑
             * 1.检查是否有重复
             * 2. 更新用户表
             */
            $rs = $this->um_user->edit(['uid' => $request_data['uid']], $request_data); //$filter = NULL, $postdata = [], $return_resource = false
            if (!$rs) {
                $this->returnError('更新用户失败,或未做任何修改');
            }
            $this->returnData([]);
        }
        $request_data = $this->check_param([
            'uid' => ['用户ID', 'required', 'integer'],], [], 'get');
//校验帐号
        $this->load->model('um/um_user');
        $res = $this->um_user->get_one('*', ['uid' => $request_data['uid']]);
        if (empty($res)) {
            return false;
        }
        $this->data['title'] = '编辑用户';
        $this->data['user_info'] = $res;
        $this->data['status'] = $this->config->item('user_status');
        $this->data['sex_list'] = $this->config->item('sex_list');
        $this->twig->render('admin/user_edit', $this->data);
    }

}
