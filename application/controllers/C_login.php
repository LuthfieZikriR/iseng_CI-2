<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function login()
	{
		$data["nama"] = $this->input->post('user');
		$cek = $this->m_login->login();

		if ($cek) {
			echo "<script>alert('Berhasil')</script>";
			redirect('login','refresh');
		}else{
			echo "<script>alert('Gagal')</script>";
			redirect('c_masuk','refresh');
		}
	}

}
?>