<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_admin');
        
    }
    

    public function index()
    {
        $data['judul']='Halaman user';
        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('user/page_user', $data);
        $this->load->view('template_user/footer');
        
    }
    public function tampil_acara()
    {
        $data['acara']=$this->M_user->ambil_acara();
        $this->load->view('user/acara', $data, FALSE);
        
    }
    public function profile_admin()
    {
        $data['admin']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']='Profil saya';
        $this->load->view('template_admin/header',$data);
        $this->load->view('template_admin/topbar',$data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/profile',$data);
        $this->load->view('template_admin/footer');
    }
    public function profile_user()
    {
        $data['admin']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
        $data['judul']='Profil saya';
        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('admin/profile',$data);
        $this->load->view('template_user/footer');
    }
    public function blog()
    {
        $data['judul']='Profil saya';
        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('user/blog',$data);
        $this->load->view('template_user/footer');  
    }
    public function struktur()
    {
        $data['pengurus']=$this->M_admin->tampil_struktur();
        $this->load->model('M_admin');
        $data['judul']='Profil saya';
        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('user/struktur',$data);
        $this->load->view('template_user/footer');  
    }

}

/* End of file Daftar.php */


?>