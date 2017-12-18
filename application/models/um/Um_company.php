<?php

/*
 * 收货地址模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Um_company extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    public function get_com($id)
    {
        $this->db->select(' id,logo,company_name,sort,show');
        $this->db->from('um_company');
        $this->db->where_in($id);
        $data = $this->db->get()->result_array();
        return $data;
    }

}
