<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

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
	public function __construct(){
		parent::__construct();
		$this->load->model('user_mod');
	}

	public function index()
	{
		$this->load->view('login');
	}

	// public function login_process()
	// {
	// 	$data_post 					= $this->input->post();
	// 	$session_user = array(
	// 		"id" 					=> $data_post['id'],
	// 		"nama" 				=> $data_post['nama'],
	// 		"email" 			=> $data_post['email'],
	// 		"role" 				=> $data_post['role'],
	// 		"departemen"	=> $data_post['departemen'],
	// 	);
	// 	$this->session->set_userdata($session_user);
	// }

	public function logout()
	{
		if ($this->session->userdata('id')) {
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('nama');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('role');
			$this->session->unset_userdata('departemen');
			session_destroy();
		}

		redirect('home/login');
	}

	public function login_process(){
		$post = $this->input->post();
		// test_var($post);
		$where = [
			"email" => $post["email"],
			"password" => $post["password"],
		];
		$datadb = $this->user_mod->user_list_db($where);
		if(count($datadb) < 1){
			$this->session->set_flashdata('error', 'Wrong email or password!');
			redirect($_SERVER['HTTP_REFERER']);
		}
		elseif($datadb[0]['role'] != "Cost Manager"){
			$this->session->set_flashdata('error', 'Only Cost Manager can login to this Apps!');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$user = $datadb[0];
		$session_user = array(
			"id" 					=> $user['id'],
			"nama" 				=> $user['nama'],
			"email" 			=> $user['email'],
			"role" 				=> $user['role'],
			"departemen"	=> $user['departemen'],
		);
		$this->session->set_userdata($session_user);

		redirect('dashboard');
	}
}
