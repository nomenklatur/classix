<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('class_model');
		$this->load->model('comment_model');
		if($this->user_model->getUserLog()=== null) redirect(site_url('login'));
	}

	public function index()
	{
		
		$data['myClass'] = $this->class_model->getOwnClass();
		$data['class'] = $this->class_model->yourClass();
		$data['user'] = $this->user_model->getUserLog();
		$data['title']='Dashboard';

		$this->load->view('template/sidebar',$data);
		$this->load->view('home/dashboard',$data);

		/*$this->load->view('template/header',$data);
		$this->load->view('home/home',$data);
		$this->load->view('template/footer');*/
	}
	public function join()
	{
        if($this->input->post('code')){
			$this->class_model->joinClass();
		}else{

			$data['class'] = $this->class_model->getClass();
			$data['user'] = $this->user_model->getUserLog();
			$data['myClass'] = $this->class_model->getOwnClass();
			$data['title']='Join';
	
			$this->load->view('template/sidebar',$data);
			$this->load->view('home/join_view',$data);
			$this->load->view('template/footer');
		}
	}
	public function Myclass()
	{

		$data['myClass'] = $this->class_model->getOwnClass();
		$data['class'] = $this->class_model->yourClass();
		$data['user'] = $this->user_model->getUserLog();
        $data['title']='Class';
	

		$this->load->view('template/sidebar',$data);
        $this->load->view('home/class_view',$data);
		$this->load->view('template/footer');
	}
	
	public function manageClass(){

        if($this->input->post('name')){
			$this->class_model->manageClass();
		}else{

			$data['class'] = $this->class_model->getOwnClass();
			$data['user'] = $this->user_model->getUserLog();
			$data['title']='Manage';
			$data['myClass'] = $this->class_model->getOwnClass();
	
			$this->load->view('template/sidebar',$data);
			$this->load->view('home/manage_view',$data);
			$this->load->view('template/footer');
		}

	}
	public function edit(){

        $data['user'] = $this->user_model->getUserLog();
        $data['title'] = 'Edit';
		
        $this->form_validation->set_rules('nama','Full Name','required|trim');
        if($this->form_validation->run() == True){
			$this->user_model->edit();
        }else{
			$data['myClass'] = $this->class_model->getOwnClass();
					$this->load->view('template/sidebar',$data);
                    $this->load->view('home/editprofile_view',$data);
                    $this->load->view('template/footer');
                }

        }


}
