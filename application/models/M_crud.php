<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_crud extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function insert()
	{
		$this->load->helper('url');
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'nama' => $this->input->post('nama'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'asal_sekolah' => $this->input->post('asal_sekolah')
		);
		return $this->db->insert('tbl_daftar', $data);
	}

	public function lihat()
	{
		return $this->db->get('tbl_daftar');
		// $this->$db->get('tbl_daftar');
	}

	public function delete($nisn)
	{
		$this->db->where('nisn',$nisn);
		return $this->db->delete('tbl_daftar');
	}

	public function edite($nisn)
	{
		$this->db->where('nisn',$nisn);
		return $this->db->get('tbl_daftar');
	}

	public function updatee($nisn)
	{
		$row = array(
			'nisn' => $this->input->post('nisn'),
			'nama' => $this->input->post('nama'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'asal_sekolah' => $this->input->post('asal_sekolah')
		);
		$this->db->where('nisn',$nisn);
		return $this->db->update('tbl_daftar',$row);
	}

	public function keluar()
	{
		return $this->session->sess_destroy();
	}
}

 ?>