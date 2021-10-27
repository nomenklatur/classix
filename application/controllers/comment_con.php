<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comment_con extends CI_Controller {
	public function index()
	{
        $this->load->model('comment_model');
        $this->comment_model->setComment();
	}

	public function delete($id,$idkelas){
		$this->load->model('comment_model');
        $this->comment_model->delComment($id,$idkelas);
	}
}
