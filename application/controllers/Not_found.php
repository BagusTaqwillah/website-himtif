<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Not_found extends CI_Controller {

    public function index()
    {
        $this->load->view('errors');
        
    }

}

/* End of file Not_found.php */


?>