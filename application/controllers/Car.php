<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Car extends CI_Controller
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
        $data['subview']             = 'car/car_list';
        $data['meta_title']     = 'Car List';
        $this->load->view('index', $data);
    }

    public function car_new()
    {
        $data['module']             = 'new';
        $data['subview']             = 'car/car_new';
        $data['meta_title']     = 'Car New';
        $this->load->view('index', $data);
    }

    public function car_edit($id)
    {
        $data['id']                     = $id;
        $data['module']             = 'edit';
        $data['subview']             = 'car/car_new';
        $data['meta_title']     = 'Car Edit';
        $this->load->view('index', $data);
    }
}
