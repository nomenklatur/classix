<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('pass','Password','required|trim');

		if($this->form_validation->run()==false){
			$data['title']='Login';
			$this->load->view('login/loginPage');
			
		}else{
			$this->load->model('user_model');
			$this->user_model->loginUser();


		}
	}

	public function register(){

		$this->form_validation->set_rules('email','Email','is_unique[user.email]');
		$this->form_validation->set_rules('pass','Password','min_length[5]|trim|matches[pass1]');
		$this->form_validation->set_rules('pass1','Password','trim|matches[pass]');

		if($this->form_validation->run()==false){		
			$this->load->view('login/loginPage');
		}else{
			$this->load->model('user_model'); 
			$this->user_model->registerUser();
		}
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nama');
		$this->session->set_flashdata('message',
		'<div class="alert alert-primary" role="alert">
			You have been logout
		  </div>');
		redirect('login');
	}





}
