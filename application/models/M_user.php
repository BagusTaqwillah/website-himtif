<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function ambil_acara()
    {
        return $this->db->get_where('tb_acara')->row_array();
    }
    public function ambil_user()
    {
        return $this->db->get('tb_user')->result_array();
    }

}

/* End of file M_user.php */




