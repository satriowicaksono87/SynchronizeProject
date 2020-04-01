<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
    public function proses_login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',['email'=>$email])->row_array();
        $admin = $this->db->get_where('admin',['email'=>$email])->row_array();


        if($user){
            if ($password == $user['password']) {
                $data = [
                    'logged_in' => TRUE,
                    'id_user' => $user['id_user'],
                    'nama_user' => $user['nama_user'],
                    'email' => $user['email'],
                    'telepon' => $user['telepon']
                ];
                $this->session->set_userdata($data);
                redirect('home/home');
            } 
            $this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-times-circle"></i> Password Salah!
            </div>');
            redirect('log/login');
            
        } elseif ($admin) {
            if(password_verify($password,$admin['password'])){
                $data = [
                    'logged_in' => TRUE,
                    'email' => $admin['email'],
                    'nama' => $admin['nama'],
                ];
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            }  
            $this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-times-circle"></i> Password Salah!
            </div>');
            redirect('login');
        }
        else{
            $this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-times-circle"></i> Akun Tidak Ditemukan!
            </div>');
            redirect('login');
        }
    }

}

/* End of file login_model.php */
