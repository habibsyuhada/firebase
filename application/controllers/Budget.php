<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('id')){
			redirect('home/login');
		}
	}
	
	public function index(){
		redirect('budget/budget_list');
	}

	public function budget_list(){
		$data['subview'] 			= 'budget/budget_list';
		$data['meta_title'] 	= 'Training';
		$this->load->view('index', $data);
	}

	public function budget_new(){
		$data['module'] 			= 'new';
		$data['subview'] 			= 'budget/budget_new';
		$data['meta_title'] 	= 'Training';
		$this->load->view('index', $data);
	}

	public function budget_edit($id){
		$data['id'] 					= $id;
		$data['module'] 			= 'edit';
		$data['subview'] 			= 'budget/budget_new';
		$data['meta_title'] 	= 'Training';
		$this->load->view('index', $data);
	}
}
