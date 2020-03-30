<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_register');
        $this->load->model('login/m_session');
    }


    // index
    function index()
    {
        $data = array(
            'namamodule'     =>  "Register",
            'namafileview'     => "V_register",
            'tampil'        => $this->M_register->tampil(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

    function tambah()
    {
        $this->M_register->tambah();
        redirect('user');
    }

    function edit()
    {
        $this->m_register->edit();
        redirect('user');
    }

    function hapus($id)
    {
        $this->m_register->hapus($id);
        redirect('user');
    }

    function cari()
    {
        $data = array(
            'namamodule'        =>  "Register",
            'namafileview'      => "V_register",
            'tampil'            => $this->m_register->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }
}
