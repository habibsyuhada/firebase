<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
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
        $data['subview']             = 'order/history_order_list';
        $data['meta_title']     = 'Order History';
        $this->load->view('index', $data);
    }
}
