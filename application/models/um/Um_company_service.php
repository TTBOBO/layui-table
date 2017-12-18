<?php

/*
 * 收货地址模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Um_company_service extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    public function setQuery($it, $select = "*", $filter = NULL)
    {
        if ($select == '*') {
            $select = array_merge($this->getCols($this->_table), $this->getCols('um_company'));
            //$select[] = "table.name as 'table.name'";
        }
        $it->db->select($select);
        $it->db->distinct(TRUE);
        $it->db->from($this->_table);
        $it->db->join("um_company", "um_company.id = {$this->_table}.company_id", "left");
        if (!empty($filter)) {
            $it->db->where($filter);
        }
        return $it;
    }

    public function getFinCompanyIds()
    {
        $ids = [];
        $list = $this->get_all('id', ['child_type' => FIN_TYPE_ID]);

        if ($list) {
            foreach ($list as $lv) {
                $ids[] = $lv['id'];
            }
        }

        return $ids;
    }

}
