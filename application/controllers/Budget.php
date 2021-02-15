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
    $this->load->model('budget_mod');
  }

  public function index()
  {
    $data['budget_list'] = $this->budget_mod->budget_list_db();

    $data['subview']      = 'budget/budget_list';
    $data['meta_title']     = 'Budget List';
    $this->load->view('index', $data);
  }

  public function budget_new()
  {
    $data['module']       = 'new';
    $data['subview']       = 'budget/budget_new';
    $data['meta_title']   = 'Budget New';
    $this->load->view('index', $data);
  }

  public function budget_new_process(){
    $post = $this->input->post();
    $where = [
      "year_budget" => $post['year_budget'],
      "month_budget" => $post['month_budget'],
    ];
    $datadb = $this->budget_mod->budget_list_db($where);
    if(count($datadb) > 0){
      $this->session->set_flashdata('error', 'Duplicate Data!');
			redirect($_SERVER['HTTP_REFERER']);
    }

    $form_data = [
      "year_budget" => $post['year_budget'],
      "month_budget" => $post['month_budget'],
      "cost_budget" => $post['cost_budget'],
    ];
    $data['budget_list'] = $this->budget_mod->budget_new_process_db($form_data);

    $this->session->set_flashdata('success', 'Your budget has been created!');
    redirect('budget');
  }

  public function budget_edit($id)
  {
    $data['id']           = $id;
    $budget_list = $this->budget_mod->budget_list_db(["id" => $id]);
    $data['budget']       = $budget_list[0];

    $data['module']       = 'edit';
    $data['subview']       = 'budget/budget_edit';
    $data['meta_title']   = 'Budget Edit';
    $this->load->view('index', $data);
  }

  public function budget_edit_process()
  {
    $post = $this->input->post();
    $where = [
      "year_budget" => $post['year_budget'],
      "month_budget" => $post['month_budget'],
      "id NOT IN (".$post['id'].")" => NULL,
    ];
    $datadb = $this->budget_mod->budget_list_db($where);
    if(count($datadb) > 0){
      $this->session->set_flashdata('error', 'Duplicate Data!');
			redirect($_SERVER['HTTP_REFERER']);
    }
    unset($where);

    $form_data = [
      "year_budget" => $post['year_budget'],
      "month_budget" => $post['month_budget'],
      "cost_budget" => $post['cost_budget'],
    ];
    $where["id"] = $post['id'];
    $data['budget_list'] = $this->budget_mod->budget_edit_process_db($form_data, $where);

    $this->session->set_flashdata('success', 'Your budget has been updated!');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function budget_delete_process($id)
  {
    $where["id"] = $id;
    $data['budget_list'] = $this->budget_mod->budget_delete_process_db($where);

    $this->session->set_flashdata('success', 'Your budget has been deleted!');
    redirect($_SERVER['HTTP_REFERER']);
  }
  
}
