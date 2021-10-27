<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
	public function getUser()
	{
        $data = $this->db->get('user');
        return $data->result_array();
    }
    public function loginUser(){
        $email = $this->input->post('email'); 
        $pass = $this->input->post('pass'); 
        $user=$this->db->get_where('user',['email'=>$email])->row_array();

        if($user){
            if(password_verify($pass,$user['pass'])){
                $data =[
                    'email' =>$user['email'],
                    'name' =>$user['name']
                ];
                $this->session->set_userdata($data);
                redirect('user');

            }else{
                $this->session->set_flashdata('message',
                '<div class="alert alert-danger" role="alert">
                    Email or Password is Wrong
                  </div>');
            }
        }else{
            $this->session->set_flashdata('message',
            '<div class="alert alert-danger" role="alert">
                Email dosent exist
              </div>');
        }
    
        redirect('login');

    }
    public function getUserLog(){
        $data=$this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
        return $data;
    }
    public function registerUser(){

        $email = $this->input->post('email');
        $nama = $this->input->post('name');
        $pass = password_hash($this->input->post('pass'),PASSWORD_DEFAULT);
        $img = 'sayur.png';
        $back = 'back.jpg';

        $data=[ 
            'nama'=>$nama,
            'email'=>$email,
            'img'=>$img,
            'back_img'=>$back,
            'pass'=>$pass
        ];
        $this->db->insert('user',$data);
        $this->session->set_flashdata('message',
        '<div class="alert alert-primary" role="alert">
            Email has been registered
          </div>');
        
		redirect('login');
    }

    public function edit(){
        
        $data=[
            'nama'=>$this->input->post('nama',true),
            'email'=>$email=$this->input->post('email')         
        ];

        
        $gambar=$_FILES['image']['name'];
        if($gambar){

            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './assets/img';

            $this->upload->initialize($config);

            if($this->upload->do_upload('image')){

                $new_image=$this->upload->data('file_name');

                $this->db->set('img',$new_image);
                $this->db->where('email',$email=$this->input->post('email'));
                 $this->db->update('user');

            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            }
        }
        $this->db->set($data);
        $this->db->where('email',$email=$this->input->post('email'));
        $this->db->update('user');

        $this->session->set_flashdata('update',
        '<div class="alert alert-primary" role="alert">
            Account Has Been Update
          </div>');
        redirect('user');
    }

    

}
