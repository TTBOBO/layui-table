<?php

/*
 * 消息模型
 * @author:jacky Version 1.0.0 2016-9-19
 */
require_once APPPATH . '/models/Modelbase.php';

class Nm_notice extends Modelbase {

    public $_table;

    public function __construct()
    {
        parent::__construct();
        $this->_table = strtolower(__CLASS__);
    }

    public function setQuery($it, $select = "*", $filter = NULL)
    {
        if ($select == '*') {
            $select = array_merge($this->getCols($this->_table), $this->getCols('um_user'), $this->getCols('nm_notice_type'));
            //$select[] = "table.name as 'table.name'";
        }
        $it->db->select($select);
        $it->db->distinct(TRUE);
        $it->db->from($this->_table);
        $it->db->join("um_user", "um_user.uid = {$this->_table}.uid", "left");
        $it->db->join("nm_notice_type", "nm_notice_type.id = {$this->_table}.type_id", "left");
        if (!empty($filter)) {
            $it->db->where($filter);
        }
        return $it;
    }

    /**
     * 添加消息到消息中心并推送
     * @param type $uid
     * @param type $msg_type
     * @param type $name
     * @param type $desc
     * @param type $thumb
     * @return boolean
     */
    public function push_notice($uid, $msg_type, $name, $desc, $thumb, $param = [])
    {

        /**
         * 1.插入到消息记录表
         * 2.判断用户是否有clientid
         * 3.推送消息
         */
        $date = date("Y-m-d H:i:s");
        $param += [
            'msg_type' => $msg_type,
        ];
        $param = json_encode($param);
        $insert_data = [
            'name' => $name,
            'type_id' => $msg_type,
            'description' => $desc,
            'link' => '',
            'uid' => $uid,
            'thumb' => $thumb,
            'param' => $param,
            'create_at' => $date,
            'update_at' => $date,
        ];
        $msg_id = $this->add($insert_data);
        if (!$msg_id) {
            return FALSE;
        }
        $this->load->model('um/um_user');
        $user_info = $this->um_user->get_one('*', ['uid' => $uid]);
        if (empty($user_info['clientid'])) {
            return TRUE;
        }
        $this->load->library('push');
        //获取手机类型
        $phone_type = $user_info['device_type'];
        if (2 == $phone_type) {
            //ios要使用透传模版
            $template = $this->push->TransmissionTemplate(['title' => $name, 'text' => $desc, 'transmissionContent' => json_encode($param)], 2);
        } else {
            //通知+透传模版
            $template = $this->push->NotificationTemplate(['title' => $name, 'text' => $desc, 'transmissionContent' => json_encode($param)]);
        }

        $rs = $this->push->pushMessageToSingle($template, $user_info['clientid']);
        if (isset($rs['result']) and 'ok' == $rs['result']) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
