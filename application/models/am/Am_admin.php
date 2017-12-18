<?php

/*
 * 管理后台
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Am_admin extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    public function setQuery($it, $select = "*", $filter = NULL)
    {
        if ($select == '*') {
            $select = array_merge($this->getCols($this->_table), $this->getCols('am_admin_role'));
            //$select[] = "table.name as 'table.name'";
        }
        $it->db->select($select);
        $it->db->distinct(TRUE);
        $it->db->from($this->_table);
        $it->db->join("am_admin_role", "am_admin_role.id = {$this->_table}.role_id", "left");
        if (!empty($filter)) {
            $it->db->where($filter);
        }
        return $it;
    }

    public function check_login($username, $pass)
    {
        $this->db->select("uid,role_id,username,create_at,login_at,login_ip");
        $this->db->distinct(TRUE);
        $this->db->from($this->_table);
        $pass = md5($pass);
        $this->db->where('username', $username);
        $this->db->where('userpass', $pass);
        $query = $this->db->get();
        $userinfo = (!$query->num_rows()) ? NULL : $query->row_array();
        return $userinfo;
    }

    public function update_login($uid)
    {
        $ip_address = $this->input->ip_address();
        if (!empty($ip_address) && !empty($uid)) {
            $this->db->where("{$this->_table}.uid", $uid);
            $this->db->update("{$this->_table}", array("login_ip" => $ip_address, "login_at" => date('Y-m-d H:i:s')));
            $num = $this->db->affected_rows();
            return $num;
        }
        return FALSE;
    }

}
