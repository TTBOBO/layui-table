<?php

/**
 * 海脉-ioffice模块
 * @author: Version 1.0.0 2017-11-4
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Hm_ioffice extends Base {

    public function index()
    {
        $this->data['title'] = '首页';
        $file_yz = file_get_contents("http://api.hm-space.yunkepai.net/pc_api/api_ioffice/high_quality_projects_list");
        $datayz = json_decode($file_yz, true);
        $file_ly = file_get_contents("http://api.hm-space.yunkepai.net/pc_api/api_activity/list");
        $dataly = json_decode($file_ly, true);
        $file_com = file_get_contents("http://api.hm-space.yunkepai.net/pc_api/api_im_channel/list");
        $datacom = json_decode($file_com, true);
        $data = array(
        	'title' => $this->data,
        	'datayz' => $datayz,
        	'dataly' => $dataly,
        	'datacom' => $datacom
        );
        $this->twig->render('front/hmspace/i-ioffice.html', $data);
    }

    public function member()			//会员列表
    {
        $this->data['title'] = '会员列表';

        $this->twig->render('front/hmspace/i-member-list.html', $this->data);
    }

	public function city_choice()		//城市选择
	{
		$this->data['title'] = '城市选择';
		$file_city= file_get_contents("http://api.hm-space.yunkepai.net/pc_api/api_common/city_list");
        $datacity = json_decode($file_city, true);
        $data = array(
        	'title' => $this->data,
        	'datacity' => $datacity
        );
		$this->twig->render('front/hmspace/i-city-choice.html', $data);
	}

	public function entity_purchase()			//商务规格图
	{
		$this->data['title'] = '商务规格图';
		$this->twig->render('front/hmspace/i-entity-purchase.html', $this->data);
	}
	
	public function entity_purchase_all()		//商务规格图-全部
	{
		$this->data['title'] = '商务规格图-全部';
		$this->twig->render('front/hmspace/i-entity-purchase-all.html', $this->data);
	}
	
	public function entity_purchase_room()		//商务规格图-选中会议室
	{
		$this->data['title'] = '选中会议室';
		$this->twig->render('front/hmspace/i-entity-purchase-room.html', $this->data);
	}
	
	public function istore_details()			//店铺详情
	{
		$this->data['title'] = '店铺详情';
		$this->twig->render('front/hmspace/i-store-details.html', $this->data);
	}
	
	public function istore_details_company()	//订单详情企业会员
	{
		$this->data['title'] = '订单详情企业会员';
		$this->twig->render('front/hmspace/i-store-details-company.html', $this->data);
	}
	
	public function istore_details_feedback()	//订单详情反馈
	{
		$this->data['title'] = '订单详情反馈';
		$this->twig->render('front/hmspace/i-store-details-feedback.html', $this->data);
	}
	
	public function isuccessful_feedback()		//订单成功反馈
	{
		$this->data['title'] = '订单成功反馈';
		$this->twig->render('front/hmspace/i-successful-feedback.html', $this->data);
	}
	
	public function ivirtual_sitem()			//单项购买-单项
	{
		$this->data['title'] = '单项购买-单项';
		$this->twig->render('front/hmspace/i-virtual-sitem.html', $this->data);
	}
	
	public function ivirtual_sitem_choice()		//单项购买-选项
	{
		$this->data['title'] = '单项购买-选项';
		$this->twig->render('front/hmspace/i-virtual-sitem-choice.html', $this->data);
	}
}
