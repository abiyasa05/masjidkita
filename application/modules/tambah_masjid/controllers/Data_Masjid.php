
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Masjid extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_masjid');
		 $this->load->model('login/m_session');
    }
    // index
	function index()
	{
		$data = array(
			'title' 		=> "tambah_masjid"
			'namamodule' 	=> "Data_Masjid",
			'namafileview' 	=> "V_data_masjid",
			'tampil'		=> $this->M_data_masjid->tampildatamasjid(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function tambah()
	{
		$this->M_data_masjid->tampil();
		// redirect('Data_Masjid');
	}
	function edit()
	{
		$this->M_data_Masjid->edit();
		// redirect('Data_Masjid');
	}
	function hapus($id_masjid)
	{
		$this->M_data_Masjid->hapus($id_masjid);
		// redirect('Data_Masjid');
	}
}
?>