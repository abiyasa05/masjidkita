<?php
defined('BASEPATH') or exit('No direct script access allowed');

class komentar extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('m_komentar');
        $this->load->model('login/m_session');
    }


    // index
    function index()
    {
        $data = array(
            'namamodule'    => "komentar",
            'namafileview'  => "v_komentar",
            'tampil'        => $this->m_komentar->tampil(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

    function tambah()
    {
        $this->M_komentar->tambah();
        redirect('komentar');
    }
}

    function edit()
    {
        $this->M_komentar->edit();
        redirect('komentar');
    }

    function hapus($id)
    {
        $this->M_komentar->hapus($id);
        redirect('komentar');
    }

    function cari()
    {
        $data = array(
            'namamodule'    => "komentar",
            'namafileview'  => "V_komentar",
            'tampil'        => $this->M_komentar->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

?>