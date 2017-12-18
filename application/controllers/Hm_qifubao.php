<?php

/**
 * 海脉-企服宝模块
 * @author: Version 1.0.0 2017-11-4
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Hm_qifubao extends Base {

    public function index()
    {
        $this->data['title'] = '企服宝';
		//访问分类数据接口，获取数据
		$str ="http://api.hm-space.yunkepai.net/pc_api/api_company_service/child_cate_list";
		$json_data = file_get_contents($str);
		$data = json_decode( $json_data, true);
		
        $this->twig->render('front/hmspace/q-index.html',$data);
    }

    public function qmajor_list()
    {
        $this->data['title'] = '企服宝-专业企服1026';
		//访问分类数据接口，获取数据
		$str ="http://api.hm-space.yunkepai.net/pc_api/api_company_service/child_cate_list";
		$json_data = file_get_contents($str);
		$data = json_decode( $json_data, true);
        $this->twig->render('front/hmspace/q-major-list.html', $data);
    }
	
	public function qprofessional_qf()
    {
        $this->data['title'] = '企服宝列表页1026';
		//访问分类数据接口，获取数据
		$str ="http://api.hm-space.yunkepai.net/pc_api/api_company_service/child_cate_list";
		$json_data = file_get_contents($str);
		$data = json_decode( $json_data, true);
        $this->twig->render('front/hmspace/q-professional-qf.html', $data);
    }
	
	public function qfb_view()
    {
        $this->data['title'] = '企服宝详情页1103';
		//访问分类数据接口，获取数据
		$str ="http://api.hm-space.yunkepai.net/pc_api/api_company_service/child_cate_list";
		$json_data = file_get_contents($str);
		$data = json_decode( $json_data, true);
        $this->twig->render('front/hmspace/q-qfb-view.html', $data);
    }
	
	public function qservice_index()
    {
        $this->data['title'] = '企服宝服务商详情页';
		//访问分类数据接口，获取数据
		$str ="http://api.hm-space.yunkepai.net/pc_api/api_company_service/child_cate_list";
		$json_data = file_get_contents($str);
		$data = json_decode( $json_data, true);
        $this->twig->render('front/hmspace/q-service-index.html', $data);
    }
}
