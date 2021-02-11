<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['subview']             = 'user/user_list';
        $data['meta_title']     = 'User List';
        $this->load->view('index', $data);
    }

    public function user_new()
    {
        $data['module']             = 'new';
        $data['subview']             = 'user/user_new';
        $data['meta_title']     = 'User New';
        $this->load->view('index', $data);
    }

    public function user_edit($id)
    {
        $data['id']                     = $id;
        $data['module']             = 'edit';
        $data['subview']             = 'user/user_new';
        $data['meta_title']     = 'User Edit';
        $this->load->view('index', $data);
    }
}
