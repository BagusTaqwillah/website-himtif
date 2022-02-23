<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }
    

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',[
            'required'=> 'email harus diisi',
            'valid_email'=>'email tidak valid'
        ]);

        $this->form_validation->set_rules('password', 'password', 'required',[
            'required'=>'password harus diisi'
        ]);
       
        if ($this->form_validation->run()==false) {
            $data['judul']='Login';
            $this->load->view('template_auth/header', $data);    
            $this->load->view('user/login');
            $this->load->view('template_auth/footer');     
        }else{
         $this->_login();
        }

        
    }
    
    private function _login(){
        $email=$this->input->post('email');
        $pass=$this->input->post('password');
        $user=$this->db->get_where('tb_user',['email'=>$email])->row_array();
        // cek email
        if ($user) {
            // cek aktivasi
            if ($user['status']==1) {
                if (password_verify($pass,$user['password'])) {
                    $data=[
                        'email'=>$user['email'],
                        'role_id'=>$user['role_id']
                    ];
                    $this->session->set_userdata( $data);
                    if ($user['role_id']==1) {
                        redirect('admin/Admin');
                        
                     }else{
                         redirect('user/User');
                         
                     }
                }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Maaf password<a href="#" class="alert-link"> salah.
                </div>');
                redirect('login');
                }
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Email belum <a href="#" class="alert-link"> teraktivasi.
                </div>');
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Email tidak <a href="#" class="alert-link">terdaftar.
          </div>');
          redirect('login');
        }
      
    }
    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required',[
            'required'=>'nama harus diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',[
            'required'=> 'email harus diisi',
            'valid_email'=>'email tidak valid'
        ]);
        $this->form_validation->set_rules('no_tlpn', 'No_tlpn', 'required|numeric',[
            'required'=>'no telpon hrus diisi'
            ,'numeric'=>'harus angka'
        ]);
        $this->form_validation->set_rules('password1', 'password', 'required|matches[password2]|min_length[3]',[
            'matches'=>'password tidak sama',
            'min_length'=>'minimal 3 karakter',
            'required'=>'password harus diisi'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|matches[password1]',[
            'required'=>'password harus diisi'
        ]);
        if ($this->form_validation->run()== false) {
            $data['judul']='Daftar akun';
            $this->load->view('template_auth/header', $data);
            $this->load->view('user/registrasi');
            $this->load->view('template_auth/footer');
            
        }else{
            $this->M_auth->registrasi();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Registrasi berhasil <a href="#" class="alert-link">silahkan login.
          </div>');
          redirect('login');
            
        }
        
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        anda telah logout <a href="#" class="alert-link">silahkan login kembali.
      </div>');
        redirect('Auth');
    }
}

/* End of file Auth.php */

?>