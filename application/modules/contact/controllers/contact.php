<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contact extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_contact');
        $this->load->model('login/m_session');
    }


    // index
    function index()
    {
        $data = array(
            'namamodule'     => "contact",
            'namafileview'     => "V_contact",
            'tampil'        => $this->M_contact->tampil(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

    function tambah()
    {
        $this->M_contact->tambah();
        redirect('contact');
    }

    function edit()
    {
        $this->M_contact->edit();
        redirect('contact');
    }

    function hapus($id)
    {
        $this->M_contact->hapus($id);
        redirect('contact');
    }

    function cari()
    {
        $data = array(
            'namamodule'     => "contact",
            'namafileview'     => "V_contact",
            'tampil'        => $this->M_contact->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }
}
