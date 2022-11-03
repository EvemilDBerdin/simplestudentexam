<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage extends MY_Controller
{
    public function index()
    {
        $session = $_SESSION['userdata'];
        if ($session->user_type == "1") {
            $this->admin_load_page('manage');
        } else {
            redirect(base_url());
        }
    }

    function delete_student()
    {
        $id = $_POST['student_id'];

        $set = array('user_status' => 1);
        $where = array(
            'id' => $id,
            'user_type' => 2
        );

        // $result = delete('users', $options);
        $result = update('users', $set, $where);
        if ($result) response(status_res('success'), "", "Student has been successfully deleted.");
        else response(status_res('fail'), "", "failed.");
    }

    function editStudentAdminForm()
    {
        $data = array();
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }
        $data['user_type'] = 2;
        $data['user_status'] = 0;

        $where = array(
            'id' => $data['id']
        );

        $options['where'] = array(
            'email' => $data['email'],
            'user_status' => 0,
            'user_type' => 2
        );

        $options_verification['where'] = array(
            'id' => $data['id'],
            'user_type' => 2,
            'user_status' => 0
        );

        $res = email_exists('users', $options, $options_verification); 
        
        if ($res) response(status_res('fail'), "", "Email already exists. please choose another one.");
        else {
            $result = update('users', $data, $where);
            if ($result) response(status_res('success'), "", "Student updated successfully.");
            else response(status_res('fail'), "", "Failed.");
        }
    }

    function getStudentById()
    {
        $id = $_POST['id'];

        $options['where'] = array(
            'id' => $id,
        );
        $result = getrow('users', $options);

        if (!isset($_SESSION['userdata'])) {
            redirect(base_url());
        } else {
            json($result);
        }
    }
}
