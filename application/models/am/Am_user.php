<?php

/*
 * 角色模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Am_user extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

}
