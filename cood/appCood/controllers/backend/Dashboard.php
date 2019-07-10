<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//User Login
		$this->is_admin_cood();

		//variable session
		$this->nama_admin = $this->session->userdata('is_admin_cood');	

	}

	//login admin
	function is_admin_cood()
	{
		$is_admin_cood = $this->session->userdata('is_admin_cood');
		
		if(!isset($is_admin_cood) || $is_admin_cood != true)
		{
			redirect('cood-admin');
		}	
	}

	//logout
	function logout()
	{
		
		$this->session->unset_userdata('is_admin_cood');
		redirect('cood-admin');
	}

	public function dashboard()
	{
		$data['title'] = 'Dashboard';
		$data['main_content'] = 'backend/dashboard/dashboard';
		$data['nama'] = $this->nama_admin["nama"];
		$this->load->view('template/backend/view', $data);
	}

}
