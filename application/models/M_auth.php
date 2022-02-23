<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

    public function registrasi() 
    {
        $data=[
            'nama'=>$this->input->post('nama'),
            'email'=>$this->input->post('email'),
            'no_tlpn'=>$this->input->post('no_tlpn'),
            'password'=>password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
            'role_id'=>2,
            'status'=>1,
            'tgl_buat'=>time(),
            'img'=>'default.jpg'

        ];
        $this->db->insert('tb_user',$data);
    }

}

/* End of file M_auth.php */

?>