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

        $file_number = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_common/resource_total');
        $wnumber = json_decode($file_number,true);
        $data =array(
            'buss' =>  $bussiness,
            'circle' => $circle,
            'people' => $people,
            'project' => $project,
            'ly' => $ly,
            'wnumber' => $wnumber,
            'title' => $this->data,
        );
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

        for($i=0;$i<3;$i++){
            $lydata = $ly['data']['rows'][$i];
            $data = array(
                'page' => $ly['data']['page'],
                'page_size' => $ly['data']['page_size'],
                'records' => $ly['data']['records'],
                'rows' => $lydata
            );
        }
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
        $file_contents = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_im_channel/list');
        $jsondata =json_decode($file_contents,true);
        $data =array(
            'data' =>  $jsondata,
            'title' => $this->data,
        );
        $this->twig->render('front/hmspace/h-qusutuo.html', $data);
    }

    public function business()
    {
        $this->data['title'] = '商机汇';

        $file_city = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_common/city_list');
        $city =json_decode($file_city,true);

        $file_contents = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/business_dynamics_list');
        $jsondata =json_decode($file_contents,true);
        $data =array(
            'data' =>  $jsondata,
            'title' => $this->data,
            'city' => $city
        );
        $this->twig->render('front/hmspace/h-business-opportunity.html', $data);
    }

    public function business_details()
    {
        $id = $_GET['id'];

        $this->data['title'] = '商机详情';

        $this->twig->render('front/hmspace/h-business-details.html', $this->data);
    }

    public function training()
    {
        $this->data['title'] = '渠道学院';

        $file_city = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_common/city_list');
        $city =json_decode($file_city,true);
        $file_college = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_company_service/list');
        $college =json_decode($file_college,true);
        $data =array(
            'college' =>  $college,
            'title' => $this->data,
            'city' => $city
        );
        $this->twig->render('front/hmspace/h-training-institution.html', $data);
    }

    public function college()
    {
        $this->data['title'] = '渠道学院首页';

        $file_ly = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_activity/list');
        $ly = json_decode($file_ly,true);
        $file_college = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_company_service/list');
        $college = json_decode($file_college,true);
        $data =array(
            'ly' =>  $ly,
            'college' => $college,
            'title' => $this->data,
        );
        $this->twig->render('front/hmspace/h-qd-college.html', $data);
    }

    public function resources_list()
    {
        $this->data['title'] = '渠速拓资源列表';
        $file_city = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_common/city_list');
        $city =json_decode($file_city,true);
        $file_contents = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_im_channel/list');
        $jsondata =json_decode($file_contents,true);
        $data =array(
            'data' =>  $jsondata,
            'title' => $this->data,
            'city' => $city
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
        $file_resources = file_get_contents('http://api.hm-space.yunkepai.net/pc_api/api_im_channel/detail?id='.$id);
        $resources =json_decode($file_resources,true);
        $data =array(
            'resources' =>  $resources,
            'title' => $this->data,
        );
        $this->twig->render('front/hmspace/h-channel-company_view.html', $data);
    }

    public function message()
    {
        $contact_name = $_POST['contact_name'];
        $email = $_POST['email'];
        $title =  "assssssss";
        $mobile = $_POST['mobile'];
        $qq = "910494825";
        $addr = $_POST['addr'];
        $content = $_POST['content'];
        $postData = array(
            'title'=>$title,
            'contact_name'=>$contact_name,
            'email'=>$email,
            'mobile'=>$mobile,
            'qq'=>$qq,
            'addr'=>$addr,
            'content'=>$content,
        );
        $postData = http_build_query($postData);
        print_r($postData);
        $postUrl = "http://api.hm-space.yunkepai.net/pc_api/api_common/add_guest_book";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $postUrl);
        curl_setopt($curl, CURLOPT_USERAGENT,'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // stop verifying certificate
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        $r = curl_exec($curl);
        curl_close($curl);
        echo "2www1";
//        $url ="http://api.hm-space.yunkepai.net/pc_api/api_common/add_guest_book";
//        $ch = curl_init ();
//        curl_setopt ( $ch, CURLOPT_URL, $url );
//        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
//        curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
//        curl_setopt ( $ch, CURLOPT_POST, 1 ); //启用POST提交
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $name);
//        $file_contents = curl_exec ( $ch );
//        echo $file_contents;
//        curl_close ( $ch );

    }







}
