<?php

/*
 * 收货地址模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Um_user_level extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = "um_user_level";
    }

}
