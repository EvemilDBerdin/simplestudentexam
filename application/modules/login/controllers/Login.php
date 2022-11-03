<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller { 

	public function index(){
		if (isset($_SESSION['userdata'])) {
            $session = $_SESSION['userdata'];
            if ($session->user_type == "1") redirect(base_url('admin'));
            if ($session->user_type == "2") redirect(base_url('user'));
        }
		$this->login_load_page('login');
	}

	function createAccount(){ 
        $data = array();
        foreach($_POST as $key => $value){
            $data[$key] = $value;
        }
        $data['user_type'] = 2;
        $data['user_status'] = 0; 
        
        $result = insert('users', $data);
        if($result){
            response(status_res('success'), "" ,"You are officially registered.");
		}
		else{
            response(status_res('fail'), "" ,"Fail to register.");
		} 
	}

	function userAuth(){
		$username = $_POST['login_username'];
		$password = $_POST['login_password'];

		$options['where'] = array(
            'username' => $username,
            'password' => $password,
            'user_status' => 0
        );

        $result = getrow('users', $options, 'row');
        if ((bool)$result === true) {
            $this->session->set_userdata('userdata', $result);
            response(status_res('success'), "" ,"You are successfull login.");
        } else {
            response(status_res('fail'), "" ,"Password do not match in our database.");
        }
	}

	function logout()
    {
        if(!$_SESSION['userdata']){
            redirect(base_url());
        }
        else{
            session_destroy(); 
            response(status_res('success'), "", "You are logging out.");
        }
    }
}
