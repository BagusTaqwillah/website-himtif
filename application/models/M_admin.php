<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function upload_acara()
    {
        $data=[
            'judul'=>$this->input->post('judul'),
            'waktu'=>$this->input->post('waktu'),
            'isi'=>$this->input->post('isi'),
            'tempat'=>$this->input->post('tempat'),
            'tgl_buat'=>date('y,m,d'),

        ];
        $this->db->insert('tb_acara',$data);
    }
    public function allAcara()
    {
        return $this->db->get_where('tb_acara')->result_array();
    }
    public function tambah_struktur($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function edit_struktur($where,$table)
    {
     return  $this->db->get_where($table,$where);
    }
    public function update_struktur($where,$data,$table)
    {
     $this->db->where($where);
      $this->db->update($table,$data);
    }
    public function tampil_struktur()
    {
       return $this->db->get_where('tb_pengurus')->result_array();
    }

}

/* End of file M_admin.php */



?>