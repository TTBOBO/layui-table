<?php

/*
 * 用户模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Um_user extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    /**
     * 生成加密后的密码     
     */
    public function gen_encrypt_password($password)
    {
        $this->load->helper('string');
        $salt = random_string('alnum', 10); //获取10位随机盐化值
        $encrypt_password = md5($password . $salt);
        return ['encrypt_password' => $encrypt_password, 'salt' => $salt];
    }

    /**
     * 获取密码（根据原始密码+盐值 来加密）    
     */
    public function get_encrypt_password($password, $salt)
    {
        return $encrypt_password = md5($password . $salt);
    }

    /**
     * 充值回调
     * @param type $out_trade_no
     * @param type $money
     * @return boolean
     */
    public function recharge_callback($out_trade_no, $money, $third_trade_no = '')
    {
        //查询对应的支付订单
        $query = $this->db->get_where('om_order', ['code' => $out_trade_no, 'status' => 0, 'money' => $money], 1);
        $cz_order_info = (!$query->num_rows()) ? NULL : $query->row_array();
        writelog([ 'file' => __FILE__ . ' ' . __LINE__, 'cz_order_info' => $cz_order_info]);
        if (!isset($cz_order_info['id'])) {
            return -1; //查询不到订单信息
        }

        //更新支付订单状态
        $this->db->where('id', $cz_order_info['id']);
        $this->db->update('om_order', [ 'status' => 1, 'third_trade_no' => $third_trade_no]);
        if (!$this->db->affected_rows()) {
            return -2;
        }

        //查询用户的信息
        $query = $this->db->query("SELECT * FROM `{$this->db->dbprefix}{$this->_table}` where `uid` = '{$cz_order_info['uid']}' for update");
        if (!$query->num_rows()) {
            return -5;
        }
        $user_info = $query->row_array();



        //增加用户的积分或者有量币

        switch ($cz_order_info['buy_type']) {
            case 1:
                $add = $money * RATE_MONEY_TO_SCORE;
                $this->db->set('money', 'money+' . $add, FALSE);
                $trans_unit = 2;
                $name = '充值积分';
                break;
            case 2:
                $add = $money * RATE_MONEY_TO_VIR_MONEY;
                $this->db->set('banlance', 'banlance+' . $add, FALSE);
                $trans_unit = 3;
                $name = '充值有量币';
                break;
        }

        $this->db->where('uid', $cz_order_info['uid']);
        $this->db->update($this->_table);
        if (!$this->db->affected_rows()) {
            return -3;
        }
        //添加积分或者有量币记录
        $date = date("Y-m-d H:i:s");
        $insert_data = [
            'name' => $name,
            'uid' => $cz_order_info['uid'],
            'value' => $add,
            'desctiption' => '',
            'trans_type' => 1,
            'trans_unit' => $trans_unit,
            'create_at' => $date,
            'update_at' => $date,
        ];
        $this->load->model('um/um_trans_record');
        $up_q3 = $this->um_trans_record->add($insert_data);

        if (!$up_q3) {
            return -4;
        }
        $cz_order_info['add'] = $add;
        return $cz_order_info;
    }

    /**
     * 通用送币（或送积分或加钱）的方法
     * @param type $uid
     * @param type $money
     * @param type $trans_unit 交易单位（1.余额，2.积分，3.有量币，4其他）
     * @param type $trans_type 交易类型（1.充值，2.兑换，3.下载软件，4.消费,5.签到,6.其它）
     * @param type $extra
     * @return type
     */
    public function send_money($uid, $money = 1, $title, $trans_unit = 1, $trans_type = 1, $extra = [])
    {
        if (empty($this->get_one('uid', ['uid' => $uid]))) {
            return -1; //查询不到用户
        }
        switch ($trans_unit) {
            case 1: //余额 （直接加余额）,暂时的余额=有量币,没有余额本身的逻辑
            /* $add = $money;
              $this->db->set('money', 'money+' . $add, FALSE);
              $trans_unit = 1;
              $name = '增加余额';
              break; */
            case 2: //积分
                $add = $money * RATE_MONEY_TO_VIR_MONEY;
                $this->db->set('score', 'score+' . $add, FALSE);
                $trans_unit = 2;
                $name = isset($title) ? $title : '充值积分';
                break;
            case 3: //有量币
                $add = $money * RATE_MONEY_TO_VIR_MONEY;
                $this->db->set('banlance', 'banlance+' . $add, FALSE);
                $trans_unit = 3;
                $name = isset($title) ? $title : '充值有量币';
                break;
        }
        //更新用户的钱（或积分或有量币）
        $this->db->where('uid', $uid);
        $this->db->update($this->_table);
        if (!$this->db->affected_rows()) {
            return -2;
        }

        //增加交易记录
        $date = date("Y-m-d H:i:s");
        $insert_data = [
            'name' => $name,
            'uid' => $uid,
            'value' => $add,
            'desctiption' => '',
            'trans_type' => $trans_type, //交易类型（1.充值，2.兑换，3.签到，4.消费,5.做任务,6.其它）
            'trans_unit' => $trans_unit,
            'create_at' => $date,
            'update_at' => $date,
        ];
        $this->load->model('um/um_trans_record');
        $up_q3 = $this->um_trans_record->add($insert_data);
        if (!$up_q3) {
            return -3;
        }
        return $up_q3;
    }

    /**
     * 纯通用加钱或加积分方法（只是加余额,不写交易记录的,没有支付,没有倍率转换的）
     */
    public function add_money($uid, $money = 0, $score = 0)
    {
        $this->db->set('banlance', 'banlance+' . $money, FALSE);
        $this->db->set('score', 'score+' . $score, FALSE);
        $this->db->where('uid', $uid);
        $this->db->update($this->_table);
        if (!$this->db->affected_rows()) {
            return false;
        }
        return true;
    }

}
