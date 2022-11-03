<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	public function index(){
		$session = $_SESSION['userdata'];
        if($session->user_type == "1"){
			$options['where'] = array(
				'user_type' => 2,
				'user_status' => 0
			);

			$options2['where'] = array(
				'user_type' => 2
			);
			$all_data = getrow('users',$options2);
			$all_registered = getrow('users',$options); 
			$data['all_data'] = count($all_data);
			$data['all_registered'] = count($all_registered);
			$data['all_deleted'] = count($all_data) - count($all_registered);

			$this->admin_load_page('admin', $data);  
        }
        else{
            redirect(base_url());
        }
	}

    // RETRIEVE TODOS
   	function getAllStudent(){
        $limit = $this->input->post('length');
		$offset = $this->input->post('start');
		$search = $this->input->post('search');
		$order = $this->input->post('order');
		$draw = $this->input->post('draw');
		$select = "*"; 
		$column_order = array(
			'id','firstname','lastname','age','contact','email','username','user_status'
		);

		$join = array();

		$where = array(
            'user_type' => 2,
            'user_status' => 0
        );

		$list = datatables('users',$column_order, $select, $where, $join, $limit, $offset ,$search, $order);
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
?>
