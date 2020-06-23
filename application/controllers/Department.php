<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

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
		redirect('department/department_list');
	}

	public function department_list(){
		$data['subview'] 			= 'department/department_list';
		$data['meta_title'] 	= 'Training';
		$this->load->view('index', $data);
	}

	public function department_new(){
		$data['module'] 			= 'new';
		$data['subview'] 			= 'department/department_new';
		$data['meta_title'] 	= 'Training';
		$this->load->view('index', $data);
	}

	public function department_edit($id){
		$data['id'] 					= $id;
		$data['module'] 			= 'edit';
		$data['subview'] 			= 'department/department_new';
		$data['meta_title'] 	= 'Training';
		$this->load->view('index', $data);
	}
}
