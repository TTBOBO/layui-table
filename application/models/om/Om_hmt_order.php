<?php

/*
 * 收货地址模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Om_hmt_order extends Modelbase {


    public function getDetail($id, $where = [])
    {
        $info = $this->get_one('*', ['id'=>$id] + $where);
        
        if($info){
            if(!empty($info['service_start'])) $info['service_start'] = date('Y-m-d H:i:s', $info['service_start']);
            if(!empty($info['service_end'])) $info['service_end'] = date('Y-m-d H:i:s', $info['service_end']);
        }
        
        return $info;
    }

}
