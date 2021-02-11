<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Department extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['subview']             = 'department/department_list';
        $data['meta_title']     = 'Department List';
        $this->load->view('index', $data);
    }

    public function department_new()
    {
        $data['module']             = 'new';
        $data['subview']             = 'department/department_new';
        $data['meta_title']     = 'Department New';
        $this->load->view('index', $data);
    }

    public function department_edit($id)
    {
        $data['id']                     = $id;
        $data['module']             = 'edit';
        $data['subview']             = 'department/department_new';
        $data['meta_title']     = 'Department Edit';
        $this->load->view('index', $data);
    }
}
