<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminbase extends CI_Controller
{

    protected $need_login = true;
    public $data = array();

    public function __construct()
    {
        parent::__construct();
        if ($this->need_login) {
            if (!isset($_SESSION['userInfo'])) {
                redirect('admin/login');
            }
        }
        $this->data = array_merge($this->data, $this->session->get_userdata());
        $this->data['version'] = $this->config->item('version');
        $this->data['webname'] = $this->config->item('webinfo')['name'];
        $this->data['button_list'] = isset($_SESSION['permission']['button']) ? $_SESSION['permission']['button'] : [];
        $this->data['base_url'] = base_url();       // $this->config->item('base_url');    
        //$this->data['front_upload_path'] = FRONT_UPLOAD_PATH;
        $this->data['admin_upload_path'] = ADMIN_UPLOAD_PATH;
        $this->check_lang();
        //$this->check_user_id();
    }

    /**
     * 校验用户有效性
     */
    public function check_user_id()
    {
        $request_data = $this->check_param([
            'uid' => ['用户ID', 'integer'],
        ], [], 'get_post');
        if (!empty($request_data['uid'])) {
            $this->load->model('um/um_user');
            $res = $this->um_user->get_one('uid', ['uid' => $request_data['uid']]);
            if (!$res) {
                $this->returnError('用户不存在,请检查');
            }
        }
    }

    /**
     * 统一获取数据列表，子类不要复写
     */
    public function info()
    {
        return false;
        $select = $this->input->get_post('select');
        $filter = $this->input->get_post('filter');
        $order = $this->input->get_post('order');
        $info = $this->model->info($select, $filter, $order);
        $info = $this->afterInfo($info);
        $this->returnData($info);
    }

    public function afterInfo($info)
    {
        return $info;
    }

    public function grid()
    {
        $select = $this->input->get_post('select');
        $page_size = $this->input->get_post('limit'); //每页显示多少条
        $page = $this->input->get_post('page');
        $sidx = $this->input->get_post('sidx');
        $sord = $this->input->get_post('sort');
        $filter = $this->input->get_post('filter');
        $order = $this->input->get_post('order');
        $grid = $this->model->grid($select, $filter, $page, $page_size, $sidx, $sord, $order);
        //$this->response($grid, self::HTTP_OK);        
        $this->returnData($grid);
    }

    /**
     * 移动端分页列表数据接口
     * @param type $sql
     * @return type
     */
    public function list_post($sql)
    {
        $request_data = $this->check_param(array("page" => array("integer", "greater_than_equal_to[1]"),
            "rows" => array("integer", "greater_than_equal_to[1]", "less_than_equal_to[1000]"),
            "filter" => array("max_length[100]"),
            "order" => array("max_length[100]"),
        ), [], $_SERVER['REQUEST_METHOD']);
        $request_data['filter'] = htmlspecialchars_decode($request_data['filter']);
        $request_data['order'] = htmlspecialchars_decode($request_data['order']);
        $grid = $this->model->list_do($sql, $request_data['filter'], $request_data['order'], $request_data['page'], $request_data['rows'], TRUE);
        return $grid;
    }

    /**
     * 获取列表数据
     * @param type $postData
     * @param type $isCount
     * @return type
     */
    public function getGrid($postData, $isCount)
    {
        $select = empty($postData['select']) ? NULL : $postData['select'];
        $page_size = empty($postData['limit']) ? 10000 : $postData['limit'];
        $page = empty($postData['page']) ? 1 : $postData['page'];
        $sidx = empty($postData['sidx']) ? NULL : $postData['sidx'];
        $sord = empty($postData['sord']) ? NULL : $postData['sord'];
        $filter = empty($postData['filter']) ? NULL : $postData['filter'];
        $order = empty($postData['order']) ? NULL : $postData['order'];
        $grid = $this->model->grid($select, $filter, $page, $page_size, $sidx, $sord, $order, $isCount);
        return $grid;
    }

    /**
     * 统一API参数检验方法
     * 调用示例 check_param(array('money' => array('required', 'integer', 'greater_than_equal_to[1]', 'less_than_equal_to[200]')));
     * @param   array $arr
     * @return  boolean
     */
    public function check_param($arr, $data = array(), $method = 'get')
    {
        /**
         * 设置要验证的请求数据
         */
        if (!empty($arr)) {
            $key_arr = array();
            $rule_arr = array();
            $tmp_arr = [];
            foreach ($arr as $key => $value) {
                $tmp_arr[$key] = array_shift($value);
                $temp_arr = explode(",", $key);
                if (!is_array($value)) {
                    $value = explode("|", $value);
                }
                $key_arr = array_merge($key_arr, $temp_arr);
                if (!empty($temp_arr)) {
                    foreach ($temp_arr as $temp_value) {
                        if (!empty($rule_arr[$temp_value])) {
                            $rule_arr[$temp_value] = array_merge($rule_arr[$temp_value], $value);
                        } else {
                            $rule_arr[$temp_value] = $value;
                        }
                    }
                }
            }
            $key_arr = array_unique($key_arr);
            if (!empty($rule_arr)) {
                foreach ($rule_arr as $rule_key => $rule_value) {
                    $rule_arr[$rule_key] = array_unique($rule_value);
                }
            }
        }
        if ($method === 'post' || $method === 'POST') {
            $request_data = $this->input->post($key_arr, TRUE);
        } else {
            $request_data = $this->input->get($key_arr, TRUE);
        }

        if ('get_post' == $method) {
            $request_data = [];
            foreach ($key_arr as $one_key) {
                $request_data[$one_key] = $this->input->get_post($one_key, TRUE);
            }
        }

        $this->form_validation->set_data($request_data);
        /**
         * 设置验证规则
         */
        if (!empty($rule_arr)) {
            foreach ($rule_arr as $rule_key => $rule_value) {
                $this->form_validation->set_rules($rule_key, '', $rule_value, array('required' => '%s 不能为空;'
                , 'integer' => '%s 必须是数字;'
                , 'regex_match' => '%s 格式有误;'
                , 'greater_than' => '%s 有误;'
                , 'max_length' => '%s 超过长度;'
                , 'min_length' => '%s 长度不够;'
                ));
            }
        }
        /**
         * 开始验证
         */
        if (!$this->form_validation->run()) {
            //验证失败处理逻辑
            $errmsg = validation_errors(' ', ' ');
            if (!empty($tmp_arr)) {
                foreach ($tmp_arr as $arr_key => $arr_value) {
                    if ($arr_value) {
                        $errmsg = str_replace($arr_key, $tmp_arr[$arr_key], $errmsg);
                    }
                }
            }
            $this->returnError($errmsg . "请检查是否正确", '400');
            return FALSE;
        }
        return $request_data;
    }

    /**
     *  api返回数据格式
     * @param array $data
     * @param int $code
     * @param string $msg
     */
    public function returnData($data = [], $msg = '', $code = 0)
    {
        $ret_data = array(
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
        );
        echo json_encode($ret_data);
        exit;
    }

    /**
     * 获取数据失败提示
     * @param number $code
     * @param string $msg
     */
    public function returnError($msg, $code = -1)
    {
        $this->returnData(array(), $msg, $code);
    }

    public function delete()
    {
        $filter = $this->input->get_post('filter');
        $table = $this->model->_table;
        $ret = $this->db->delete($table, $filter);
        $this->returnData($ret);
    }

    public function setExcelData($objPHPExcel, $colModel, $grid)
    {
        $colModel_total = sizeof($colModel);
        for ($i = 0, $t = 0; $i < $colModel_total; $i++) {
            $label = $colModel[$i]->title;
            $name = $colModel[$i]->name;
            $hidden = empty($colModel[$i]->hidden) ? FALSE : $colModel[$i]->hidden;
            $key = empty($colModel[$i]->key) ? FALSE : $colModel[$i]->key;
            $sorttype = empty($colModel[$i]->sorttype) ? 'string' : $colModel[$i]->sorttype;
            $width = empty($colModel[$i]->width) ? 20 : $colModel[$i]->width / 5;
            if ('number' === $sorttype) {
                $dataType = PHPExcel_Cell_DataType::TYPE_NUMERIC;
            } else {
                $dataType = PHPExcel_Cell_DataType::TYPE_STRING;
            }
            /* if ($hidden) { //默认导出所有的列,不过滤隐藏的列
              continue;
              } */
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, 1)->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getColumnDimensionByColumn($t)->setWidth($width);
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, 1)->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID); //首行背景
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, 1)->getFill()->getStartColor()->setARGB('0091F0F2'); //首行背景色
            //列循环里逐行追加样式
            for ($m = 1; $m <= $colModel_total; $m++) {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); //水平居中
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER); //垂直居中
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getBorders()->getAllBorders()->setBorderStyle(\PHPExcel_Style_Border::BORDER_THIN);
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getBorders()->getLeft()->getColor()->setARGB('00000000');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getBorders()->getLeft()->getColor()->setARGB('00000000');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getBorders()->getTop()->getColor()->setARGB('00000000');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getBorders()->getBottom()->getColor()->setARGB('00000000');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getBorders()->getTop()->getColor()->setARGB('00000000');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getBorders()->getBottom()->getColor()->setARGB('00000000');
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, 1, $label)->getStyleByColumnAndRow($t, $m)->getBorders()->getRight()->getColor()->setARGB('00000000');
            }
            for ($j = 0; $j < count($grid["items"]); $j++) {
                $item = $grid["items"][$j];
                $value = $item[$name];
                if ($sorttype === 'image' && !empty($value) && file_exists(FCPATH . $value)) {
                    $url = FCPATH . $value;
                    $img = new PHPExcel_Worksheet_Drawing();
                    $img->setName($name);
                    $img->setDescription($name);
                    $img->setPath($url);
                    $img->setHeight($width * 3); //写入图片高度                   
                    $img->setOffsetX(1); //写入图片在指定格中的X坐标值
                    $img->setOffsetY(1); //写入图片在指定格中的Y坐标值
                    $img->setRotation(1); //设置旋转角度
                    $img->getShadow()->setVisible(true);
                    $img->getShadow()->setDirection(50);
                    $columnLetter = PHPExcel_Cell::stringFromColumnIndex($t);
                    $coordinate = $columnLetter . ($j + 2);
                    $img->setCoordinates($coordinate); //设置图片所在表格位置
                    $img->setWorksheet($objPHPExcel->getActiveSheet()); //把图片写到当前的表格中
                } else {
                    $objPHPExcel->getActiveSheet()->setCellValueExplicitByColumnAndRow($t, $j + 2, $value, $dataType);
                }
            }
            $t++;
        }
    }

    public function exportExcel()
    {
        $postData = $this->input->get_post('postData');
        $postData = urldecode($postData);
        $postData = json_decode($postData, true);

        $grid = $this->getGrid($postData, FALSE);
        $title = empty($postData['title']) ? 'yunkepai' : $postData['title'];
        $colModel = empty($postData['cols']) ? NULL : $postData['cols'];
        $colModel = json_decode($colModel);
        require_once APPPATH . '/third_party/PHPExcel.php';
        require_once APPPATH . '/third_party/PHPExcel/Writer/Excel5.php';
        $rand_filename = date("YmdHis") . '-' . mt_rand(1000, 9999);
        $fileName = $title . $rand_filename;
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setCreator("云客派");
        $objPHPExcel->getProperties()->setLastModifiedBy("ejiuzhen");
        $objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Document");
        $objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Document");
        $objPHPExcel->getProperties()->setDescription("云客派描述");
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(20);
        $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10);
        //填充数据          
        $this->setExcelData($objPHPExcel, $colModel, $grid);
        $objPHPExcel->getActiveSheet()->setTitle($title);
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $upload_path = 'resource' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR . 'export_excels' . DIRECTORY_SEPARATOR;
        $pub_dir = FCPATH . $upload_path;
        if (!is_dir($pub_dir)) {
            @mkdir($pub_dir, 0777, TRUE);
        }
        //$file_name = $pub_dir . $fileName . ".xls"; //暂不去支持中文名(需编码)     
        $file_name = $pub_dir . $rand_filename . '.xls';
        $objWriter->save($file_name);
        //$file_name = APP_URL . $upload_path . $file_name . ".xls";
        //$this->returnData($file_name);        
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        header("Content-Disposition:attachment;filename=" . $fileName . ".xls");
        header("Content-Transfer-Encoding:binary");
        $objWriter->save("php://output");
    }

    public function exportWord()
    {
        $postData = $this->input->get_post('postData');
        $postData = urldecode($postData);
        $postData = json_decode($postData);
        $title = empty($postData->title) ? NULL : $postData->title;
        $content = empty($postData->content) ? NULL : $postData->content;
        $absolutePath = empty($postData->absolutePath) ? NULL : $postData->absolutePath;
        $isEraseLink = empty($postData->isEraseLink) ? TRUE : $postData->isEraseLink;
        $word = PHPWord::getWordDocument($content, $absolutePath, $isEraseLink);
        if (empty($title)) {
            $title = "ejiuzhen";
        }
        $fileName = $title . date("YmdHis");
        header("Content-type: application/octet-stream");
        header("Accept-Ranges: bytes");
        header("Accept-Length: " . strlen($word));
        header('Content-Disposition: attachment; filename=' . $fileName . '.doc');
        header("Pragma:no-cache");
        header("Expires:0");
        echo $word;
    }

    public function exportPDF()
    {
        $this->exportWord();
    }

    private function check_lang()
    {
        $type = (int)$this->input->post_get('language_type');
        switch ($type) {
            case 0:
                $this->config->set_item('language', 'chinese');
                break;
            case 1:
                $this->config->set_item('language', 'english');
                break;
            default:
                $this->config->set_item('language', 'chinese');
                break;
        }
    }

}
