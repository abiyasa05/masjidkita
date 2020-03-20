<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_masjid extends CI_Model
{

    function tampil()
    {
        return $this->db->get('tb_user')->result();
    }

    function tambah()
    {
        
        $id_masjid_user     = $this->input->post('id_masjid_user');
        $nama_masjid        = $this->input->post('nama_masjid');
        $alamat_masjid      = $this->input->post('alamat_masjid');
        $No_Tlp_Takmir      = $this->input->post('No_Tlp_Takmir');
        $Kode_Masjid        = $this->input->post('Kode_Masjid');
        $Sejarah_Masjid     = $this->input->post('Sejarah_Masjid');
        $Berdiri_Tahun      = $this->input->post('Berdiri_Tahun');
        $Luas_Tanah         = $this->input->post('Luas_Tanah');
        $Email              = $this->input->post('Email');
       
       



        $this->load->library('upload');
        $nmfile = "file_" . time();
        $config['upload_path']        = 'assets/img/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']            = 5120;
        $config['max_width']        = 4300;
        $config['max_height']        = 4300;
        $config['file_name']         = $nmfile;

        $this->upload->initialize($config);

        if ($_FILES['foto_user']['name']) {
            if ($this->upload->do_upload('foto_user')) {
                $gbr = $this->upload->data();
                $data = array(
                    'id_masjid_user'        => $id_masjid_user,
                    'Nama_Masjid'           => $Nama_Masjid,
                    'Alamat_Masjid'         => $Alamat_Masjid,
                    'No_Tlp_Takmir '        => $No_Tlp_Takmir,
                    'Kode_Masjid'           => $Kode_Masjid,
                    'Sejarah_Masjid'        => $Sejarah_Masjid,
                    'Berdiri_Tahun'         => $Berdiri_Tahun,
                    'Luas_Tanah'            => $Luas_Tanah,
                    'Email'                 => $Email,



                );
                $this->db->insert('tb_user', $data);
            }
        } else {
            $data = array(
                'id_masjid_user'        => $id_masjid_user,
                'Nama_Masjid'           => $Nama_Masjid,
                'Alamat_Masjid'         => $Alamat_Masjid,
                'No_Tlp_Takmir '        => $No_Tlp_Takmir,
                'Kode_Masjid'           => $Kode_Masjid,
                'Sejarah_Masjid'        => $Sejarah_Masjid,
                'Berdiri_Tahun'         => $Berdiri_Tahun,
                'Luas_Tanah'            => $Luas_Tanah,
            );
            $this->db->insert('tb_user', $data);
        }
    }

    // function edit()
    // {
    //     $id_user = $this->input->post('id_user');
    //     $id_masjid_user    = $this->input->post('id_masjid_user');
    //     $tanggal_user   = $this->input->post('tanggal_user');
    //     $waktu_user   = $this->input->post('waktu_user');
    //     $penanggung_jawab_acara   = $this->input->post('penanggung_jawab_acara');
    //     $deskripsi_user   = $this->input->post('deskripsi_user');


    //     $this->load->library('upload');
    //     $nmfile = "file_" . time();
    //     $config['upload_path']        = 'assets/img/';
    //     $config['allowed_types']    = 'gif|jpg|png|jpeg';
    //     $config['max_size']            = 5120;
    //     $config['max_width']        = 4300;
    //     $config['max_height']        = 4300;
    //     $config['file_name']         = $nmfile;

    //     $this->upload->initialize($config);

    //     if ($_FILES['foto_user']['name']) {
    //         if ($this->upload->do_upload('foto_user')) {
    //             $gbr = $this->upload->data();
    //             $data = array(
    //                 'id_masjid_user'        => $id_masjid_user,
    //                 'tanggal_user'          => $tangal_user,
    //                 'waktu_user'            => $waktu_user,
    //                 'penanggung_jawab_acara'    => $penanggung_jawab_acara,
    //                 'deskripsi_user'        => $deskripsi_user,
    //                 'foto_siswa'                => $gbr['file_name'],
    //             );
    //             $this->db->where('id_user', $id_siswa)->update('tb_user', $data);
    //         }
    //     } else {
    //         $data = array(
    //             'id_masjid_user'        => $id_masjid_user,
    //             'tanggal_user'          => $tangal_user,
    //             'waktu_user'            => $waktu_user,
    //             'penanggung_jawab_acara'    => $penanggung_jawab_acara,
    //             'deskripsi_user'        => $deskripsi_user,
    //         );
    //         $this->db->where('id_user', $id_siswa)->update('tb_user', $data);
    //     }
    // }

    function hapus($id)
    {
        $this->db->where('id_user', $id)->delete('tb_user');
    }

    // function cari()
    // {
    //     $cari         = $this->input->post('cari');
    //     return $this->db->like('deskripsi_user', $cari)->get('tb_user')->result();
    // }
}
