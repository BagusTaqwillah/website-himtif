<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    public function index()
    {
        $data['judul']='Materi Web';
        $this->load->view('materi/web',$data);
    }
    public function database()
    {
        $data['judul']='Materi Database';
        $this->load->view('materi/database', $data, FALSE);
        
    }
    public function chanel_rekomendasi()
    {
        $data['judul']='Rekomendasi Chanel youtube';
        $this->load->view('materi/rekomendasi', $data, FALSE);
    }

}

/* End of file Web.php */

?>