<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_donasi extends CI_Model
{

    function tampil()
    {
        return $this->db->get('tb_donasi')->result();
    }

    function tambah()
    {
        
        $id_donasi   = $this->input->post('id_donasi');
        $nama_donasi   = $this->input->post('nama_donasi');
        $jumlah_donasi   = $this->input->post('jumlah_donasi');
        $tanggal_awal_donasi   = $this->input->post('tanggal_awal_donasi');
        $tanggal_terakhir_donasi   = $this->input->post('tanggal_terakhir_donasi');
        $keterangan   = $this->input->post('keterangan');

       



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
                    'id_donasi'            => $id_donasi,
                    'nama_donasi'          => $nama_donasi,
                    'jumlah_donasi'        => $jumlah_donasi,
                    'tanggal_awal_donasi'  => $tanggal_awal_donasi,
                    'tanggal_terakhir_donasi' => $tanggal_terakhir_donasi,
                    'keterangan'            => $keterangan,
                    'foto_donasi'           => $gbr['file_name'],


                );
                $this->db->insert('tb_donasi', $data);
            }
        } else {
            $data = array(
                'id_donasi'            => $id_donasi,
                'nama_donasi'          => $nama_donasi,
                'jumlah_donasi'        => $jumlah_donasi,
                'tanggal_awal_donasi'  => $tanggal_awal_donasi,
                'tanggal_terakhir_donasi' => $tanggal_terakhir_donasi,
                'keterangan'        => $keterangan,
                'foto_donasi'           => 'kosong1.png',
            );
            $this->db->insert('tb_donasi', $data);
        }
    }

    function edit()
    {
        $id_donasi = $this->input->post('id_donasi');
        $nama_donasi    = $this->input->post('nama_donasi');
        $jumlah_donasi   = $this->input->post('jumlah_donasi');
        $tanggal_awal_donasi   = $this->input->post('tanggal_awal_donasi');
        $tanggal_terakhir_donasi   = $this->input->post('tanggal_terakhir_donasi');
        $keterangan  = $this->input->post('keterangan');
    }

    function hapus($id)
    {
        $this->db->where('id_donasi', $id)->delete('tb_donasi');
    }

    function cari()
    {
        $cari         = $this->input->post('cari');
        return $this->db->like('nama_donasi', $cari)->get('tb_donasi')->result();
    }
}
