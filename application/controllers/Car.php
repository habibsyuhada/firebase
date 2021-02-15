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
    $this->load->model('car_mod');
  }

  public function index()
  {
    $data['car_list'] = $this->car_mod->car_list_db();

    $data['subview']      = 'car/car_list';
    $data['meta_title']     = 'Car List';
    $this->load->view('index', $data);
  }

  public function car_new()
  {
    $data['module']       = 'new';
    $data['subview']       = 'car/car_new';
    $data['meta_title']   = 'Car New';
    $this->load->view('index', $data);
  }

  public function car_new_process(){
    $post = $this->input->post();
    $form_data = [
      "car_name" => $post['car_name'],
      "police_number" => $post['police_number'],
      "status" => "Idle",
    ];
    $data['car_list'] = $this->car_mod->car_new_process_db($form_data);

    $this->session->set_flashdata('success', 'Your car has been created!');
    redirect('car');
  }

  public function car_edit($id)
  {
    $data['id']           = $id;
    $car_list = $this->car_mod->car_list_db(["id" => $id]);
    $data['car']       = $car_list[0];

    $data['module']       = 'edit';
    $data['subview']       = 'car/car_edit';
    $data['meta_title']   = 'Car Edit';
    $this->load->view('index', $data);
  }

  public function car_edit_process()
  {
    $post = $this->input->post();
    $form_data = [
      "car_name" => $post['car_name'],
      "police_number" => $post['police_number'],
      "status" => "Idle",
    ];
    $where["id"] = $post['id'];
    $data['car_list'] = $this->car_mod->car_edit_process_db($form_data, $where);

    $this->session->set_flashdata('success', 'Your car has been updated!');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function car_delete_process($id)
  {
    $where["id"] = $id;
    $data['car_list'] = $this->car_mod->car_delete_process_db($where);

    $this->session->set_flashdata('success', 'Your car has been deleted!');
    redirect($_SERVER['HTTP_REFERER']);
  }
  
}
