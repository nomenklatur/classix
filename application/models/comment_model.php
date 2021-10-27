<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comment_model extends CI_Model {

	public function getComment($Classid)
	{  
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->where('id_kelas',$Classid);
		$this->db->join('user', 'comment.id = user.id');
        $data = $this->db->get()->result_array();
        
        return $data;
    }
    
    public function setComment(){
        $name = $this->input->post('name');
        $class = $this->input->post('class');
        $date = $this->input->post('date');
        $time = $this->input->post('time');
        $text = $this->input->post('text');
        $data = [
                'id'=>$name,
                'id_kelas'=>$class,
                'text'=>$text,
                'date'=>$date,
                'time'=>$time,
        ];

        $this->db->insert('comment',$data);
        redirect(base_url('class_con/mainClass/').$class);

    }

    public function delComment($id,$idkelas){
            $this->db->delete('comment',['id_comment'=>$id]);
            redirect(base_url('class_con/mainClass/').$idkelas);
    }

}
