<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_admin');
        $this->load->model('login/m_session');
    }


    // index
    function index()
    {
        $data = array(
            'namamodule'     => "admin",
            'namafileview'     => "V_admin",
            'tampil'        => $this->M_admin->tampil(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

    function tambah()
    {
        $this->M_admin->tambah();
        redirect('user');
    }

    function edit()
    {
        $this->m_admin->edit();
        redirect('user');
    }

    function hapus($id)
    {
        $this->m_admin->hapus($id);
        redirect('user');
    }

    function cari()
    {
        $data = array(
            'namamodule'     => "admin",
            'namafileview'     => "V_admin",
            'tampil'        => $this->m_admin->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }
}
