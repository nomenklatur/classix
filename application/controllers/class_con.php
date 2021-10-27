<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class class_con extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->model('class_model');
		$this->load->model('comment_model');
		if($this->user_model->getUserLog()=== null) redirect(site_url('login'));
	}


	public function createClass(){
		if($this->input->post('name')){
			$this->class_model->createClass();
		}else{

			$data['class'] = $this->class_model->getClass();
			$data['user'] = $this->user_model->getUserLog();
			$data['title']='Create';
	
			$this->load->view('template/header',$data);
			$this->load->view('home/create_view',$data);
			$this->load->view('template/footer');
		}
	}

	public function deleteClass($id){
		$this->load->model('class_model');
		$this->class_model->deleteClass($id);
	}

	public function manageStudents($idClass){

		$data['students'] = $this->class_model->getStudentClass($idClass);

		$data['myClass'] = $this->class_model->getOwnClass();
		$data['user'] = $this->user_model->getUserLog();
		$data['title']='Manage Students';
		$data['idkelas']=$idClass;

		$this->load->view('template/header',$data);
		$this->load->view('class/students_view',$data);
		$this->load->view('template/footer');
	}

	public function kickStudents($id,$idkelas){
		$this->class_model->kickStudents($id,$idkelas);
	}

	public function mainClass($idkelas){

		$data['myClass'] = $this->class_model->getOwnClass();
		$data['user'] = $this->user_model->getUserLog();

		$TheClass=$this->class_model->mainClass($idkelas);
		
		$data['TheClass'] = $TheClass;
		$data['teacher'] = $this->class_model->getTeach($TheClass['id_host']);
		$data['students'] = $this->class_model->getStudentClass($idkelas);

		$data['title']=$TheClass['nama_kelas'];
		$data['comment']=$this->comment_model->getComment($idkelas);

		$this->load->view('template/sidebar',$data);
		$this->load->view('class/classView',$data);
		$this->load->view('template/footer');
	}
}
