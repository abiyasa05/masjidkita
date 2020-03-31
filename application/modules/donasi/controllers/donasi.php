<?php
defined('BASEPATH') or exit('No direct script access allowed');

class donasi extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_donasi');
        $this->load->model('login/m_session');
    }


    // index
    function index()
    {
        $data = array(
            'namamodule'    => "donasi",
            'namafileview'  => "V_donasi",
            'tampil'        => $this->M_donasi->tampil(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

    function tambah()
    {
        $this->M_donasi->tambah();
        redirect('donasi');
    }
}

    function edit()
    {
        $this->M_donasi->edit();
        redirect('donasi');
    }

    function hapus($id)
    {
        $this->M_donasi->hapus($id);
        redirect('donasi');
    }

    function cari()
    {
        $data = array(
            'namamodule'    => "donasi",
            'namafileview'  => "V_donasi",
            'tampil'        => $this->M_donasi->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

?>