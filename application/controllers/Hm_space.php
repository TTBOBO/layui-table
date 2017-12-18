<?php

/**
 * 海脉-企服宝模块
 * @author: Version 1.0.0 2017-11-4
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Hmspace extends Base {

    public function index()
    {
        $this->data['title'] = '首页';
        $file_bussiness = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/business_dynamics_list');
        $bussiness = json_decode($file_bussiness,true);

        $file_circle = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/circle_dynamics_list');
        $circle = json_decode($file_circle,true);

        $file_people = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/contacts_dynamics_list');
        $people = json_decode($file_people,true);

        $file_project = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_ioffice/high_quality_projects_list');
        $project = json_decode($file_project,true);

        $file_ly = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/list');
        $ly = json_decode($file_ly,true);


        $data =array(
            'buss' =>  $bussiness,
            'circle' => $circle,
            'people' => $people,
            'project' => $project,
            'ly' => $ly,
            'title' => $this->data,
        );
        var_dump($data);
        $this->twig->render('front/hmspace/h-index.html', $data);
    }

    public function talent()
    {
        $this->data['title'] = '人才列表';
        $file_people = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_im_channel/people_list');
        $people =json_decode($file_people,true);

        $file_city = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_common/city_list');
        $city =json_decode($file_city,true);

        $data =array(
            'people' =>  $people,
            'city' => $city,
            'title' => $this->data,
        );
        var_dump($data);
        $this->twig->render('front/hmspace/h-talents-resources.html', $data);
    }

    public function talent_details()
    {
        $id = $_GET['id'];
        $this->data['title'] = '人才详情';

        $file_details = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_im_channel/people_detail?id='.$id);
        $details =json_decode($file_details,true);


        $data =array(
            'details' =>  $details,
            'title' => $this->data,
        );
        var_dump($data);
        $this->twig->render('front/hmspace/h-talent-details.html', $data);
    }


    public function carveout()
    {
        $this->data['title'] = '创业汇';

        $file_bussiness = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/business_dynamics_list');
        $bussiness = json_decode($file_bussiness,true);

        $file_circle = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/circle_dynamics_list');
        $circle = json_decode($file_circle,true);

        $file_people = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/contacts_dynamics_list');
        $people = json_decode($file_people,true);

        $file_ly = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/list');
        $ly = json_decode($file_ly,true);


        $data =array(
            'buss' =>  $bussiness,
            'circle' => $circle,
            'people' => $people,
            'ly' => $ly,
            'title' => $this->data,
        );
        $this->twig->render('front/hmspace/h-entrepreneurship.html', $data);
    }

    public function qusutuo()
    {
        $this->data['title'] = '渠速拓';

        $this->twig->render('front/hmspace/h-qusutuo.html', $this->data);
    }

    public function business()
    {
        $this->data['title'] = '商机汇';

        $this->twig->render('front/hmspace/h-business-opportunity.html', $this->data);
    }

    public function business_details()
    {
        $this->data['title'] = '商机详情';

        $this->twig->render('front/hmspace/h-business-details.html', $this->data);
    }

    public function training()
    {
        $this->data['title'] = '渠道学院';

        $this->twig->render('front/hmspace/h-training-institution.html', $this->data);
    }

    public function college()
    {
        $this->data['title'] = '渠道学院首页';

        $this->twig->render('front/hmspace/h-qd-college.html', $this->data);
    }

    public function resources_list()
    {
        $this->data['title'] = '渠速拓资源列表';
        $file_contents = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_im_channel/list');
        $jsondata =json_decode($file_contents,true);
        $data =array(
            'data' =>  $jsondata,
            'title' => $this->data,
        );
       // var_dump($data);
//        $data = $jsondata['data']['rows'];
//        var_dump($data);
//        for($i=0;$i<count($data);$i++){
//            echo $data[$i]['id'];
//            echo $data[$i]['name'];
//        }
        $this->twig->render('front/hmspace/h-resources_list.html',$data);
    }

    public function resources_view()
    {
        $this->data['title'] = '渠速拓资源详情';
        $id =$_GET['id'];
        $file_contents = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_im_channel/detail?id='.$id);
        $data =json_decode($file_contents,true);

        $this->twig->render('front/hmspace/h-channel-company_view.html', $data);
    }







}
