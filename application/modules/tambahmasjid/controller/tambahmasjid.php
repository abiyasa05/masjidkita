<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tambahmasjid extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_masjid');
        $this->load->model('login/m_session');
    }


    // index
    function index()
    {
        $data = array(
            'namamodule'     => "tambahmasjid",
            'namafileview'   => "V_masjid",
            'tampil'         => $this->M_masjid->tampil(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

    function tambah()
    {
        $thismasjid->tambah();
        redirect('user');
    }

    function edit()
    {
        $thismasjid->edit();
        redirect('user');
    }

    function hapus($id)
    {
        $thismasjid->hapus($id);
        redirect('user');
    }

    function cari()
    {
        $data = array(
            'namamodule'    => "tambahmasjid",
            'namafileview'  =>  "V_masjid",
            'tampil'        => $thismasjid->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }
}
