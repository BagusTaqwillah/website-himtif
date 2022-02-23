<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function index()
    {
        $data['judul']='Kontak';
        $this->load->view('user/kontak',$data);
    }

}

/* End of file Kontak.php */



?>