<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends MY_Controller {
	public function index(){
		$session = $_SESSION['userdata'];
        if($session->user_type == "1"){
            $this->admin_load_page('exam');    
        }
        else{
            redirect(base_url());
        }
	}

    function e_result(){
        $limit = $this->input->post('length');
		$offset = $this->input->post('start');
		$search = $this->input->post('search');
		$order = $this->input->post('order');
		$draw = $this->input->post('draw');
		$select = "*";
        $column_order = array(
			'exam.id','exam.users_id','exam.student_answer','questionaire.question','questionaire.id'
		);
		$join = array(
            'questionaire' => 'questionaire.id = exam.questionaire_id'
        );

		$where = array(
            'exam.exam_status' => 0,
			'questionaire.questionaire_status' => 0
        );

		$list = datatables('exam',$column_order, $select, $where, $join, $limit, $offset ,$search, $order);

		$new_array = array();
        foreach ($list['data'] as $key => $value) {
            $new_array[] = $value;
        }
		$output = array(
			"draw" => $draw,
			"recordsTotal" => $list['count_all'],
			"recordsFiltered" => $list['count'],
			"data" => $new_array,
		);
		json($output);
    }
}

