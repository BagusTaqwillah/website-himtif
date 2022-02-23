<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->model('M_user');
        
    }
    

    public function index()
    { 
    $data['judul']='halaman admin';
    $this->load->view('template_admin/header',$data);
    $this->load->view('template_admin/topbar');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/page_admin',$data);
    $this->load->view('template_admin/footer');
    
    }
    public function berita_acara()
    { 
    $data['judul']='halaman admin';
    $this->load->model('M_admin');
    $data['acara']=$this->M_admin->allAcara();
    $this->load->view('template_admin/header',$data);
    $this->load->view('template_admin/topbar');
    $this->load->view('template_admin/sidebar');
    $this->load->view('admin/berita_acara',$data);
    $this->load->view('template_admin/footer');
    
    }
   
    public function form_acara()
    { 
        $this->form_validation->set_rules('judul', 'Judul', 'required',['required'=>'judul harus diisi']);
        $this->form_validation->set_rules('waktu', 'Waktu', 'required',['required'=>'waktu harus diisi']);
        $this->form_validation->set_rules('isi', 'Isi', 'required',['required'=>'harus diisi']);
        $this->form_validation->set_rules('tempat', 'Tempat', 'required',['required'=>'tempat harus diisi']);
        
        if ($this->form_validation->run()== false) {
            $data['judul']='halaman admin';
            $this->load->view('template_admin/header',$data);
            $this->load->view('template_admin/topbar');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/form_acara',$data);
            $this->load->view('template_admin/footer');
        }else{
           $this->M_Admin->upload_acara();
           $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
           Berita Berhasil Di upload
         </div>');
           redirect('berita_acara');
           
        }
    
    }
    public function hapus_acara($id)
    {
        $this->db->where('id_acara', $id);
       $this->db->delete('tb_acara');
       $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
       Berita Berhasil Di hapus
     </div>');
       redirect('berita_acara');
    }
    public function data_user()
    {
        $data['judul']='Data User';
        $data['user']=$this->M_user->ambil_user();
        $this->load->model('M_admin');
        $this->load->view('template_admin/header',$data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_user',$data);
        $this->load->view('template_admin/footer');
    }
    public function tampil_struktur()
    {
        $data['pengurus']=$this->M_admin->tampil_pengurus();
        $data['judul']='form struktur';
        $this->load->model('M_admin');
        $this->load->view('template_admin/header',$data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_struktur',$data);
        $this->load->view('template_admin/footer');
     
    }
    public function tambah_struktur()
    {
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $semester = $this->input->post('semester');
        $gambar=$_FILES['gambar']['name'];

        if ($gambar !='') {
          $config['upload_path']          = './assets/pengurus';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $this->load->library('upload', $config);

              if ( ! $this->upload->do_upload('gambar'))
              {
                echo"gagal d upload";
                      // $error = array('error' => $this->upload->display_errors());

              }
              else
              {
                      $gambar =  $this->upload->data('file_name');
              }

        }
        $data = [
            'nama'=> $nama,
            'jabatan'=>$jabatan,
            'semester'=>$semester,
            'gambar'=>$gambar
        ];
        $this->M_admin->tambah_struktur($data,'tb_pengurus');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil disimpan</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('form_struktur');
    }
    public function hapus_struktur($id)
    {
        $this->db->where('id_pengurus', $id);
        $this->db->delete('tb_pengurus');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('form_struktur');
    }
    public function edit_struktur($id)
    {
        $where= ['id_pengurus'=>$id];
        $data['pengurus']=$this->M_admin->edit_struktur($where,'tb_pengurus')->result();
        $data['judul']='edit struktur';
        $this->load->view('template_admin/header', $data, FALSE);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_struktur', $data, FALSE);
        $this->load->view('template_admin/footer');
        
    }
    public function update_struktur()
    {
        $id = $this->input->post('id_pengurus');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $semester = $this->input->post('semester');
        $data = [
            'nama'=> $nama,
            'jabatan'=>$jabatan,
            'semester'=>$semester,
            'foto'=>'default.jpg'
        ];
        $where = ['id_pengurus'=>$id];
        $this->M_admin->update_struktur($where,$data,'tb_pengurus');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diupdate</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('form_struktur');
    }


}

/* End of file Admin.php */



?>
