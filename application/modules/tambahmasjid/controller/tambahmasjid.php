<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tambahmasjid extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('m_masjid');
        $this->load->model('login/m_session');
    }


    // index
    function index()
    {
        $data = array(
            'namamodule'     => "tambahmasjid",
            'namafileview'   => "v_masjid",
            'tampil'         => $this->m_masjid->tampil(),
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
