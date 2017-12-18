<?php

/*
 * 收货地址模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Im_cz_product extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    public function setQuery($it, $select = "*", $filter = NULL)
    {
        if ($select == '*') {
            $select = array_merge($this->getCols($this->_table), $this->getCols('um_user'), $this->getCols('im_shop'));
            //$select[] = "table.name as 'table.name'";
        }
        $it->db->select($select);
        $it->db->distinct(TRUE);
        $it->db->from($this->_table);
        $it->db->join("um_user", "um_user.uid = {$this->_table}.creator_id", "left");
        $it->db->join("im_shop", "im_shop.shop_id = {$this->_table}.shop_id", "left");
//        $it->db->join("pm_regions", "pm_regions.id = {$this->_table}.city_id", "left");

        if (!empty($filter)) {
            $it->db->where($filter);
        }
        return $it;
    }

}
