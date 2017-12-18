<?php

/*
 * 收货地址模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Im_channel extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    public function setQuery($it, $select = "*", $filter = NULL)
    {
        if ($select == '*') {
            $select = array_merge($this->getCols($this->_table), $this->getCols('im_channel_cate'), $this->getCols('pm_industry'), $this->getCols('pm_regions'));
            //$select[] = "table.name as 'table.name'";
        }
        $it->db->select($select);
        $it->db->distinct(TRUE);
        $it->db->from($this->_table);
        $it->db->join("im_channel_cate", "im_channel_cate.id = {$this->_table}.channel_cateid", "left");
        $it->db->join("pm_industry", "pm_industry.id = {$this->_table}.industry_id", "left");
        $it->db->join("pm_regions", "pm_regions.id = {$this->_table}.city_id", "left");

        if (!empty($filter)) {
            $it->db->where($filter);
        }
        return $it;
    }

}
