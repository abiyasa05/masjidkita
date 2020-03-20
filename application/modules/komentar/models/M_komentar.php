<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_komentar extends CI_Model
{

    function tampil()
    {
        return $this->db->get('tb_komentar')->result();
    }

    function tambah()
    {
        
        $id_komentar   = $this->input->post('id_komentar');
        $nama_komentar   = $this->input->post('nama_komentar');
        $jumlah_komentar   = $this->input->post('jumlah_komentar');
        $tanggal_awal_komentar   = $this->input->post('tanggal_awal_komentar');
       



        $this->load->library('upload');
        $nmfile = "file_" . time();
        $config['upload_path']        = 'assets/img/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']            = 5120;
        $config['max_width']        = 4300;
        $config['max_height']        = 4300;
        $config['file_name']         = $nmfile;

        $this->upload->initialize($config);

        if ($_FILES['foto_kegiatan']['name']) {
            if ($this->upload->do_upload('foto_kegiatan')) {
                $gbr = $this->upload->data();
                $data = array(
                'id_komentar'            => $id_komentar,
                'nama_lengkap_komentar'  => $nama_lengkap_komentar,
                'no_telp'                => $no_telp,
                'email'                  => $email,
                'komentar'               => $komentar,
                );
                $this->db->insert('tb_komentar', $data);
            }
        } else {
            $data = array(
                'id_komentar'            => $id_komentar,
                'nama_lengkap_komentar'  => $nama_lengkap_komentar,
                'no_telp'                => $no_telp,
                'email'                  => $email,
                'komentar'               => $komentar,
            );
            $this->db->insert('tb_komentar', $data);
        }
    }

    function edit()
    {
        $id_komentar              = $this->input->post('id_komentar');
        $nama_lengkap_komentar    = $this->input->post('nama_lengkap_komentar');
        $no_telp                  = $this->input->post('no_telp');
        $email                    = $this->input->post('email');
        $komentar                 = $this->input->post('komentar');

    }

    function hapus($id)
    {
        $this->db->where('id_komentar', $id)->delete('tb_komentar');
    }

    function cari()
    {
        $cari         = $this->input->post('cari');
        return $this->db->like('nama_komentar', $cari)->get('tb_komentar')->result();
    }
}
