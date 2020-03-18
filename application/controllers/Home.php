<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index(){
		if(!$this->session->userdata('id')){
			redirect('home/login');
		}
		$data['subview'] 			= 'home/index';
		$data['meta_title'] 	= 'Dashboard';
		$this->load->view('index', $data);
	}

	public function login(){
		if($this->session->userdata('id')){
			redirect('home');
		}
		$this->load->view('login');
	}

	public function login_process(){
		$data_post 					= $this->input->post();
		$session_user = array(
			"id" 					=> $data_post['id'],
			"nama" 				=> $data_post['nama'],
			"email" 			=> $data_post['email'],
			"role" 				=> $data_post['role'],
			"departemen"	=> $data_post['departemen'],
		);
		$this->session->set_userdata($session_user);
	}

	public function logout(){
		if($this->session->userdata('id')){
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('nama');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('role');
			$this->session->unset_userdata('departemen');
			session_destroy();
		}

		redirect('home/login');
	}
}
