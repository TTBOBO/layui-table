<?php

/*
 * 收货地址模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Rz_company extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = 'om_iof_order';
    }

    public function setQuery($it, $select = "*", $filter = NULL)
    {
        if ($select == '*') {
            $select = array_merge($this->getCols('om_iof_order'), $this->getCols('um_user'), $this->getCols('um_company'));
            //$select[] = "table.name as 'table.name'";
        }
        $it->db->select($select);
        $it->db->distinct(TRUE);
        $it->db->from($this->_table);
        $it->db->join("um_user", "um_user.uid = om_iof_order.uid", "left");
        $it->db->join("um_company", "um_user.company_id = um_company.id", "left");
        if (!empty($filter)) {
            $it->db->where($filter);
        }
        return $it;
    }

}
