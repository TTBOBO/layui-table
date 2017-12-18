<?php

/*
 * 消息模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Nm_message extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    /**
     * 添加消息记录到数据库
     * @param string $to_user 手机号码或者邮件地址或者微信openid
     * @param string $title 标题
     * @param string $message 消息体
     * @param string $vcode 验证码
     * @param string $type 类型 sms,email,tmplmsg
     * @param string $send_status 0未发送 1发送成功 2发送失败
     * @return int
     */
    public function add_message($to_user, $title, $message, $vcode, $type = 1)
    {
        $now_date = date("Y-m-d H:i:s");
        $insert_data = array(
            'to_user' => $to_user,
            'title' => $title,
            'message' => $message,
            'vcode' => $vcode,
            'type' => $type,
            'create_at' => $now_date,
            'update_at' => $now_date
        );
        $this->db->insert($this->_table, $insert_data);
        return $this->db->insert_id();
    }

    /**
     * 取得消息详情
     * @param int $message_id
     * @return array
     */
    public function get_message($message_id)
    {
        $query = $this->db->get_where($this->_table, array('id' => $message_id), 1);
        return (!$query->num_rows()) ? NULL : $query->row_array();
    }

    /**
     * 更新消息
     * @param int $message_id
     * @param array $update_data
     * @return int
     */
    public function update_message($message_id, $update_data)
    {
        $this->db->where('id', $message_id);
        $this->db->update($this->_table, $update_data);
        return $this->db->affected_rows();
    }

    /**
     * 取得某用户的最新消息
     * @param string $to_user
     * @return array
     */
    public function get_latest_message($to_user)
    {
        $query = $this->db->where('to_user', $to_user)
                ->order_by('id', 'DESC')
                ->limit(1)
                ->get($this->_table);

        return (!$query->num_rows()) ? NULL : $query->row_array();
    }

}
