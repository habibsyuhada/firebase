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
    $this->load->model('department_mod');
  }

  public function index()
  {
    $data['department_list'] = $this->department_mod->department_list_db();

    $data['subview']      = 'department/department_list';
    $data['meta_title']     = 'Department List';
    $this->load->view('index', $data);
  }

  public function department_new()
  {
    $data['module']       = 'new';
    $data['subview']       = 'department/department_new';
    $data['meta_title']   = 'Department New';
    $this->load->view('index', $data);
  }

  public function department_new_process(){
    $post = $this->input->post();
    $form_data = [
      "department_name" => $post['department_name'],
    ];
    $data['department_list'] = $this->department_mod->department_new_process_db($form_data);

    $this->session->set_flashdata('success', 'Your department has been created!');
    redirect('department');
  }

  public function department_edit($id)
  {
    $data['id']           = $id;
    $department_list = $this->department_mod->department_list_db(["id" => $id]);
    $data['department']       = $department_list[0];

    $data['module']       = 'edit';
    $data['subview']       = 'department/department_edit';
    $data['meta_title']   = 'Department Edit';
    $this->load->view('index', $data);
  }

  public function department_edit_process()
  {
    $post = $this->input->post();
    $form_data = [
      "department_name" => $post['department_name'],
    ];
    $where["id"] = $post['id'];
    $data['department_list'] = $this->department_mod->department_edit_process_db($form_data, $where);

    $this->session->set_flashdata('success', 'Your department has been updated!');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function department_delete_process($id)
  {
    $where["id"] = $id;
    $data['department_list'] = $this->department_mod->department_delete_process_db($where);

    $this->session->set_flashdata('success', 'Your department has been deleted!');
    redirect($_SERVER['HTTP_REFERER']);
  }
  
}
