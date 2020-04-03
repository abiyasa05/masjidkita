<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('m_detail');
        $this->load->model('login/m_session');
    }


    // index
    function index()
    {
        $data = array(
            'namamodule'     => "detail",
            'namafileview'     => "V_detail",
            'tampil'        => $this->M_detail->tampil(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

    function tambah()
    {
        $this->M_detail->tambah();
        redirect('user');
    }

    function edit()
    {
        $this->M_detail->edit();
        redirect('user');
    }

    function hapus($id)
    {
        $this->m_detail->hapus($id);
        redirect('user');
    }

    function cari()
    {
        $data = array(
            'namamodule'     => "detail",
            'namafileview'     => "V_detail",
            'tampil'        => $this->M_detail->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }
}
