<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') != 'Admin' && $this->session->userdata('level') != 'Petugas') {
			redirect('auth');
		}
	}

	public function index()
	{
		$this->load->view('admin/index');
	}
}
