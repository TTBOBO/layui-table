<?php

/*
 * 基类
 * @author:jacky Version 1.0.0 2016-9-18
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/api/Apibase.php';

/**
 * 所有API的基类
 */
class ApiCbase extends Apibase {

    public $inputData = [];
    public $needLogin = true;
    public $userInfo = null;
    public $realRequest = [];
    public $searchField = [];
    public $converCommonField = [];
    public $extendWhere = [];

    function __construct()
    {
        parent::__construct();

        $this->_commonInit();
        $this->getInputDataByJson();//接收数据
        //$this->_initUserInfo();//初始化用户登录信息    
        $this->_init();//子类控制器初始化
        $this->checkLogin();//检查登录状态
        $this->_validData();//执行验证方法    
    }

    protected function _commonInit()
    {
        $this->realRequest['action'] = $this->uri->segments[3].'_'.$this->request->method;
    }

    protected function _initUserInfo()
    {
        # code...
        // if(isset($this->inputData['uid'])){
        //     $this->load->model('um/um_user');
        //     $res = $this->um_user->get_one('uid,username,nickname', ['uid' => $this->inputData['uid']]);
        //     if ($res) {
        //         $this->userInfo = [
        //             'uid'=>$res['uid'],
        //             'username'=>$res['username'],
        //             'nickname'=>$res['nickname'],
        //         ];
        //     }
        // }
    }

    protected function checkLogin()
    {
        if($this->needLogin && !$this->loginData){
            $this->returnError('请先登录', 201);
        }
    }

    /**
     * 自动化校验数据
    */
    private function _validData()
    {
        $valid_method = 'valid'.ucfirst($this->realRequest['action']);
        if(method_exists($this, $valid_method)){
            $this->$valid_method();
        }
    }
    
    protected function getInputPage()
    {
        return isset($this->inputData['page'])?(int) $this->inputData['page']:1;
    }

    protected function getInputPageSize()
    {
        return isset($this->inputData['page_size'])?(int) $this->inputData['page_size']:20;
    }

    /**
     * 保存数据到缓存系统
    */
    protected function setMem($key, $value)
    {
        if(is_array($value)) $value = json_encode($value);
        
        //暂时用cookie实现后期可以优化这里对app的兼容实现
        $_COOKIE[$key] = $value;
        setcookie($key,$value);
        
        return true;
    }

    /**
     * 追加数据到缓存系统
    */
    protected function appendMem($key, $value)
    {
        $data = $this->getMem($key);
        if(!is_array($data)){
            $jsonData = json_decode($data, true);
            $data = $jsonData?$jsonData:$data;
        }
        
        $data = $data?$data:[];
        if(is_array($data)) $data[] = $value;
        //暂时用cookie实现后期可以优化这里对app的兼容实现
        $this->setMem($key, $data);
        
        return true;
    }

    protected function getMem($key = '')
    {
        $data = $_COOKIE;
        if(!empty($key)){
            if(!isset($data[$key])){
                $data = null;
            }else{
                $data = $data[$key];
                $jsonData = json_decode($data, true);
                $data = $jsonData?$jsonData:$data;
            }
        }
        
        return $data;
    }

    protected function getInputDataByJson()
    {
        if ($this->input->method() === 'get'){
            $this->inputData = array_merge($this->_get_args, $this->_query_args);
       }else{
            $this->inputData = $this->input->post();
       }
        # code...
    //   if ($this->input->method() === 'get'){
    //         $this->inputData = array_merge($this->_get_args, $this->_query_args);
    //   }else{
    //       if ($this->request->format)
    //         {
    //             $this->request->body = $this->input->raw_input_stream;
    //             if ($this->request->format === 'json')
    //             {
    //                 $this->inputData = json_decode($this->input->raw_input_stream, true);
    //             }
    //         }
    //         else
    //         {
    //           // If no filetype is provided, then there are probably just arguments
    //           $this->inputData = $this->input->input_stream();
    //         }
    //     }
    }
    
    protected function getInputConditon()
    {
        $returnData = '';
        $where = $this->getInputWhere();
        if(is_array($where) && !empty($where)){
            foreach($where as $wk=>$wv){
                $operation = '=';
                $val = $wv;
                if(is_array($wv)){
                    $operation = $wv[0];
                    if(!isset($wv[1]) && is_array($wv[0])){
                        foreach($wv as $wvk=>$wvv){
                            $returnData .= $this->changeArrToSql($wk, $wvv[0], $wvv[1]);
                        }
                        continue;
                    }
                    $val = $wv[1];
                }
                $returnData .= $this->changeArrToSql($wk, $operation, $val);
            }
        }
        
        return trim($returnData, ' AND ');
    }

    protected function changeArrToSql($key, $operation, $val)
    {
        $returnData = '';
         switch ($operation) {
            case '=':
                // code...
                $returnData .= ' AND '.$key.'='.$val;
                break;
            case 'in':
                // code...
                $varr = $val;
                if(!is_array($val)) $varr = explode(',', trim($val, ','));
                if(0 !== $varr && empty($varr)) break;
                $varr = '\''.implode('\',\'', $varr).'\'';
                $returnData .= ' AND '.$key.' in('.$varr.')';
                break;
            case 'like':
                // code...
                $returnData .= ' AND '.$key.' like '."'".$val."'";
                break;
            case '<=':case '<':case '>':case '>=':case '<>':
                // code...
                $returnData .= ' AND '.$key.$operation."'".$val."'";
                break;
            default:
                // code...
                break;
        }
        
        return $returnData;
    }

    /**
     * 统一API参数检验方法
     * 调用示例 check_param(array('money' => array('required', 'integer', 'greater_than_equal_to[1]', 'less_than_equal_to[200]')));
     * @param   array       $arr
     * @return  boolean
     */
    public function check_param($arr, $data = array(), $requestMethod = '')
    {
        if(empty($requestMethod))  $requestMethod = 'input';
        
        return parent::check_param($arr, $data, $requestMethod);
    }

   /**
     *自动过滤组装where条件数组
     *
     * @author quzhanggui <[andy.qu@dazong.com]>
     * @param
     * @return 
     */
    protected function getInputWhere($alias = '')
    {
        return $this->filterSearchField($this->changeSearchField($this->inputData), $alias);
    }

    public function getSearchFiterField()
    {
        $this->search_fiter_field = [];
        $this->searchField = $this->searchField + $this->converCommonField;
        foreach($this->searchField as $tv){
            if(is_array($tv)){
                $this->search_fiter_field = array_merge($this->search_fiter_field, $tv);
            }else{
                $arr = explode('@', $tv);
                if(!empty($arr[0])) array_push($this->search_fiter_field, $arr[0]);
            }
        }
    }

    protected function changeSearchField()
    {
        $this->getSearchFiterField();
        $data = $this->inputData;
        $converCommonField = $this->converCommonField + $this->searchField;
        if(empty($converCommonField) || !is_array($converCommonField)) return [];
        if(is_array($data)){
            foreach($data as $ik=>$iv){
                if(isset($converCommonField[$ik]) && !empty($converCommonField[$ik])){
                    $new_key = $converCommonField[$ik];
                    $extend_op='';
                    if(is_array($new_key)){
                        $new_key = implode('|', $new_key);
                        $extend_op = '@like';
                    }
                    $data[$new_key.$extend_op] = $iv;
                    unset($data[$ik]);
                }
            }
            if(!isset($data['orderby']) && isset($data['field']) && isset($data['sort_type'])){
                $data['orderby'] = $data['field'].'@'.$data['sort_type'];
                unset($data['field']);
            }
        }
        
        return $data;
    }

    /**
     *自动组装成model需要的where条件数组
     *
     * @author quzhanggui <[andy.qu@dazong.com]>
     * @param
     * @return 
     */
    protected function filterSearchField($searc_data, $alias = '')
    {
        $return = [];
        
        if(is_array($searc_data)){
            foreach($searc_data as $ik=>$iv){
                if(!is_array($iv)) $iv = trim($iv);
                $ik = strtolower($ik);
                $ik =  trim($ik, '|');
                if(empty($ik) || (!is_array($iv) && is_null($iv)) || '' === $iv) continue;
                $oper_arr = explode('@', $ik);
                if(isset($oper_arr[1]) && !$this->checkValidOperation($oper_arr[1])) continue;
                $field_arr = explode('|', $oper_arr[0]);
                $is_valid = true;
                foreach($field_arr as $fv){
                    if(empty($fv) || !in_array($fv, $this->search_fiter_field)){
                        $is_valid = false;
                        break;
                    }
                }
                if(!$is_valid) continue;
                $operation =  isset($oper_arr[1])?$oper_arr[1]:'in';
                if('like' == strtolower($operation)) $iv = '%'.$iv.'%';
                if('>:' == $operation) $operation = '>=';//由于前端有个暂时无法解决的转换异常 兼容模式
                if(in_array(strtolower($operation), ['nin', 'not in', 'notin'])) $operation = 'not in';
                if(!empty($alias)) $oper_arr[0] = $alias.'.'.$oper_arr[0];
                if(stripos($operation, '<') !== false || stripos($operation, '>') !== false){
                    $return[$oper_arr[0]][] = [$operation, $iv];
                }elseif('between' == strtolower($operation)){
                    if(is_string($iv) && stripos($iv, ',')!== false) $iv = explode(',', $iv);
                    if(!is_array($iv)) continue;
                    if(isset($iv[0]) && !empty($iv[0])) $return[$oper_arr[0]][] = ['>=', $iv[0]];
                    if(isset($iv[1]) && !empty($iv[1])) $return[$oper_arr[0]][] = ['<=', $iv[1]];
                }else{
                    $return[$oper_arr[0]] = [$operation, $iv];
                }
            }
        }
        
        return $this->extendWhere + $return;
    }

     /**
     *检查是否是合法操作符
     *
     * @author quzhanggui <[andy.qu@dazong.com]>
     * @param
     * @return 
     */
    protected function checkValidOperation($operation)
    {
        return in_array(strtoupper($operation), $this->getValidOperation());
    }

    private function getValidOperation()
    {
        return ['=', '<>', '>', '>=', '<', '<=', 'LIKE', 'IN', 'NOT IN', 'NIN', '>:', 'BETWEEN', 'NOT BETWEEN'];
    }

    protected function orderGoToPay($pay_type, $orderCode, $orderPrice)
    {
        //调用支付接口在（微信 支付宝等端口）创建待支付订单
        $class_name = $pay_type . 'pay';
        $this->load->library($class_name);
        //todo这里可能有问题 如何区分不同类型订单？
        $pay_order = $this->$class_name->create_unified_order($orderCode, $orderPrice);

        if (!$pay_order) {
            $this->returnError("创建待支付订单失败！");
        }
        
        return $pay_order;
    }
    

}
