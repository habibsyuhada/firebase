<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Budget extends CI_Controller
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
        $data['subview']             = 'budget/budget_list';
        $data['meta_title']     = 'Budget List';
        $this->load->view('index', $data);
    }

    public function budget_new()
    {
        $data['module']             = 'new';
        $data['subview']             = 'budget/budget_new';
        $data['meta_title']     = 'Budget New';
        $this->load->view('index', $data);
    }

    public function budget_edit($id)
    {
        $data['id']                     = $id;
        $data['module']             = 'edit';
        $data['subview']             = 'budget/budget_new';
        $data['meta_title']     = 'Budget Edit';
        $this->load->view('index', $data);
    }
}
