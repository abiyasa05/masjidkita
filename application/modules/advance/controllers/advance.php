<?php
defined('BASEPATH') or exit('No direct script access allowed');

class advance extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_advance');
        $this->load->model('login/m_session');
    }


    // index
    function index()
    {
        $data = array(
            'namamodule'     => "advance",
            'namafileview'     => "V_advance",
            'tampil'        => $this->M_advance->tampil(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

    function tambah()
    {
        $this->M_advance->tambah();
        redirect('user');
    }

    function edit()
    {
        $this->M_advance->edit();
        redirect('user');
    }

    function hapus($id)
    {
        $this->M_advance->hapus($id);
        redirect('user');
    }

    function cari()
    {
        $data = array(
            'namamodule'     => "advance",
            'namafileview'     => "V_advance",
            'tampil'        => $this->M_advance->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }
}
