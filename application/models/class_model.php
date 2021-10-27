<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class class_model extends CI_Model {
	public function getClass()
	{
        $data = $this->db->get('kelas');
        return $data->result_array();
	}
	public function mainClass($idClass){
			$this->db->where('id_kelas',$idClass);
			$data = $this->db->get('kelas');

			return $data->row_array();
	}
	public function joinClass(){
		$this->load->model('user_model');
		$name = $this->user_model->getUserLog();
		$class_code = $this->input->post('class');
		$code  = $this->input->post('code');
		if($class_code==$code){
				$data = [
					'id'=>$name['id'],
					'id_kelas'=>$code
				];
				$this->db->insert('drivekelas',$data);
				$this->session->set_flashdata('message',
				'<div class="alert alert-info" role="alert">
					You Have Been join Class
				  </div>');
				
				redirect('user/Myclass');
		}else{
			$this->session->set_flashdata('message',
            '<div class="alert alert-danger" role="alert">
                Your code is Wrong
			  </div>');
			  redirect('user/join');
		}
	}

	public function yourClass(){
		$this->load->model('user_model');
		$name = $this->user_model->getUserLog();

		$this->db->select('*');
		$this->db->from('drivekelas');
		$this->db->where('id',$name['id']);
		$this->db->join('kelas', 'drivekelas.id_kelas = kelas.id_kelas');
		$data = $this->db->get()->result_array();
		
		return $data;
	}

	public function createClass(){
		$this->load->model('user_model');
		$host = $this->user_model->getUserLog();
		$name = $this->input->post('name');
		$desc = $this->input->post('desc');

		$data = [ 
			'nama_kelas'=>$name,
			'deskripsi'=>$desc,
			'id_host'=>$host['id']

		];

		$this->db->insert('kelas',$data);

		$this->session->set_flashdata('message',
		'<div class="alert alert-success" role="alert">
			You Have Been Create the Class
		  </div>');
		  redirect('user/manageClass');

	}

	public function getOwnClass(){
		$this->load->model('user_model');
		$host = $this->user_model->getUserLog();

		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->where('id_host',$host['id']);
		$data = $this->db->get()->result_array();
		return $data;

	}

	public function manageClass(){
		$name = $this->input->post('name');
		$desc = $this->input->post('desc');
		$id=$this->input->post('id_kelas');
		$data = [
			'nama_kelas'=>$name,
			'deskripsi'=>$desc
		];
		
		$this->db->set($data);
		$this->db->where('id_kelas',$id);
		$this->db->update('kelas');

		$this->session->set_flashdata('message',
		'<div class="alert alert-success" role="alert">
			You Have Update Your Class
		  </div>');
		  redirect('user/manageClass');

	}

	public function deleteClass($id){
		$this->db->where('id_kelas', $id);
		$this->db->delete('kelas');

		$this->session->set_flashdata('message',
		'<div class="alert alert-info" role="alert">
			You Have Delete Your Class
		  </div>');
		  redirect('user/manageClass');
	}
	public function getStudentClass($idClass){
		$this->db->where('id_kelas',$idClass);
		$this->db->join('user', 'drivekelas.id = user.id');
		$data = $this->db->get('drivekelas')->result_array();

		return $data;
	}
	public function kickStudents($id,$idkelas){
		$this->db->where('id',$id);
		$this->db->where('id_kelas',$idkelas);
		$this->db->delete('drivekelas');

		$this->session->set_flashdata('message',
		'<div class="alert alert-success" role="alert">
			You Have Kicked Your Student Form Class
		  </div>');
		  redirect(base_url('class_con/manageStudents/').$idkelas);
	}

	public function getTeach($id){
		$this->db->where('id',$id);
		$data =	$this->db->get('user');
		return $data->row_array();
	}

}
