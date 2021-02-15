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
    $this->load->model('user_mod');
  }

  public function index()
  {
    $data['user_list'] = $this->user_mod->user_list_db();

    $data['subview']      = 'user/user_list';
    $data['meta_title']     = 'User List';
    $this->load->view('index', $data);
  }

  public function user_new()
  {
    $data['module']       = 'new';
    $data['subview']       = 'user/user_new';
    $data['meta_title']   = 'User New';
    $this->load->view('index', $data);
  }

  public function user_new_process(){
    $post = $this->input->post();
    $form_data = [
      "name" => $post['name'],
      "email" => $post['email'],
      "role" => $post['role'],
      "department" => $post['department'],
      "password" => "123456",
    ];
    $data['user_list'] = $this->user_mod->user_new_process_db($form_data);

    $this->session->set_flashdata('success', 'Your user has been created!');
    redirect('user');
  }

  public function user_edit($id)
  {
    $data['id']           = $id;
    $user_list = $this->user_mod->user_list_db(["id" => $id]);
    $data['user']       = $user_list[0];

    $data['module']       = 'edit';
    $data['subview']       = 'user/user_edit';
    $data['meta_title']   = 'User Edit';
    $this->load->view('index', $data);
  }

  public function user_edit_process()
  {
    $post = $this->input->post();
    $form_data = [
      "name" => $post['name'],
      "email" => $post['email'],
      "role" => $post['role'],
      "department" => $post['department'],
    ];
    $where["id"] = $post['id'];
    $data['user_list'] = $this->user_mod->user_edit_process_db($form_data, $where);

    $this->session->set_flashdata('success', 'Your user has been updated!');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function user_delete_process($id)
  {
    $where["id"] = $id;
    $data['user_list'] = $this->user_mod->user_delete_process_db($where);

    $this->session->set_flashdata('success', 'Your user has been deleted!');
    redirect($_SERVER['HTTP_REFERER']);
  }
  
}
