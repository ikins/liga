<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//model
		$this->load->model('home_model');	

		//variable session
		$this->nama_member = $this->session->userdata('is_user_cood');	

	}

	public function index()
	{
		$data['title'] = 'Liga Indramayu';
		$data['main_content'] = 'frontend/home/index';
		$data['nama'] = $this->nama_member["nama"];
		$this->load->view('template/frontend/view', $data);
	}


}

