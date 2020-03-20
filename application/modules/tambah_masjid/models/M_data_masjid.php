<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_Masjid extends CI_Model {

	function tampildatamasjid() 
	{
		return $this->db->get('tb_masjid')->result();
	}
	
function tambah()
{
	$nama 					= $this->input->post('nama_masjid');
	$alamat_masjid 			= $this->input->post('alamat_masjid');
	$No_Tlp_Takmir			= $this->input->post('No_Tlp_Takmir');
	$Kode_Masjid 			= $this->input->post('Kode_Masjid');
	$Sejarah 				= $this->input->post('Sejarah');
	$Luas_Tanah 			= $this->input->post('Luas_Tanah');
	$Email		 			= $this->input->post('Email');
	$Tahun_Berdiri			= $this->input->post('Tahun_Berdiri');
	$gambar					= $this->input->post('file_name');
	


	$this->load->library('upload');
	$nmfile = "file_".time();
	$config['upload_path']		= 'assets/img/';
	$config['allowed_types']	= 'gif|jpg|png|jpeg';
	$config['max_size']			= 5120;
	$config['max_width']		= 4300;
	$config['max_height']		= 4300;
	$config['file_name'] 		= $nmfile;
	
	$this->upload->initialize($config);
	
	if($_FILES['gambar']['name'])
	{
		if ($this->upload->do_upload('gambar'))
		{
			$gbr = $this->upload->data();
			$data = array(
				'nama_masjid'		=> $nama,
				'alamat_masjid'		=> $alamat_masjid,
				'No_Tlp_Takmir'		=> $No_Tlp_Takmir,
				'Kode_Masjid'		=> $Kode_Masjid,
				'Sejarah' 			=> $Sejarah,
				'Email' 			=> $Email,
				'Berdiri_Tahun'		=> $Berdiri_Tahun,		
				'Luas_Tanah'		=> $Luas_Tanah

			);
				
			$this->db->insert('tb_masjid', $data);
		
		}	 
	}
	else{
			$data = array(
				
				'nama_masjid'		=> $nama,
				'alamat_masjid'		=> $alamat_masjid,
				'No_Tlp_Takmir'		=> $No_Tlp_Takmir,
				'Kode_Masjid'		=> $Kode_Masjid,
				'Sejarah' 			=> $Sejarah,
				'Email' 			=> $Email,
				'Berdiri_Tahun'		=> $Berdiri_Tahun,		
				'Luas_Tanah'		=> $Luas_Tanah
			);
			$this->db->insert('Data_Masjid', $data);
		}
	}

function edit()
{
	
	$nama 					= $this->input->post('nama_masjid');
	$alamat_masjid 			= $this->input->post('alamat_masjid');
	$No_Tlp_Takmir			= $this->input->post('No_Tlp_Takmir');
	$Kode_Masjid 			= $this->input->post('Kode_Masjid');
	$Sejarah 				= $this->input->post('Sejarah');
	$Luas_Tanah 			= $this->input->post('Luas_Tanah');
	$Email		 			= $this->input->post('Email');
	$Tahun_Berdiri			= $this->input->post('Tahun_Berdiri');
	

		$data = array(

			'nama_masjid'		=> $nama,
			'alamat_masjid'		=> $alamat_masjid,
			'No_Tlp_Takmir'		=> $No_Tlp_Takmir,
			'Kode_Masjid'		=> $Kode_Masjid,
			'Sejarah' 			=> $Sejarah,
			'Email' 			=> $Email,
			'Berdiri_Tahun'		=> $Berdiri_Tahun,		
			'Luas_Tanah'		=> $Luas_Tanah





		);
		$this->db->where('id_masjid',$id_masjid)->update('tb_masjid', $data);
	}
	function hapus($id_masjid)
	{
		$this->db->where('id_masjid', $id_masjid)->delete('tb_masjid');
	}



}
?>