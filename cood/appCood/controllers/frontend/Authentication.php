<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//model
		$this->load->model('auth_model');	

		//variable session
		$this->nama_member = $this->session->userdata('is_user_cood');	

	}

	public function login()
	{
		$is_user_cood = $this->session->userdata('is_user_cood'); //variable id login
		if(!isset($is_user_cood) || $is_user_cood != true) //cek sedang sudah login apa belum
		{
			$data['title'] = 'Portal Login';						
			$data['main_content'] = 'frontend/auth/login';
			$this->load->view('template/frontend/aloneview', $data);
		}
		else
		{
			redirect('dashboard');
		}
	}

	//user valid
	function valid_login()
	{		
	
		
		$this->form_validation->set_message('required', '<i class="fa fa-times-circle-o"></i> Anda belum memberikan %s '); 
		//------------------Valid
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');	


		
		if($this->form_validation->run() == false)
		{	
			$data['title'] = 'Portal Login';						
			$data['main_content'] = 'frontend/auth/login';
			$this->load->view('template/frontend/aloneview', $data);
		}
		else
		{
			
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$date = date('Y-m-d');

						
			$result = $this->auth_model->valid_login($email, $password);			
			//
			if ($result) 
			{
				
				foreach ($result as $rows):
				
					$user_id = $rows->user_id;
					$email_user = $rows->email;
					$password_user = $rows->password;
					$status = $rows->status;
					$nama = $rows->member_nama;
				
				
				
				if($email_user != $email)
				{
			
					$data['title'] = 'Portal Login';						
					$data['error'] = 'email "'.$email.'" Belum Terdaftar atau Belum Terverifikasi';
					$data['main_content'] = 'frontend/auth/login';
					$this->load->view('template/frontend/aloneview', $data);
				}		
				elseif ($password_user != $password) 						
				{

					$data['title'] = 'Portal Login';						
					$data['error'] = 'Password Salah';
					$data['main_content'] = 'frontend/auth/login';
					$this->load->view('template/frontend/aloneview', $data);
				}
				elseif ($status != 'Y') 						
				{

					$data['title'] = 'Portal Login';						
					$data['error'] = 'email Anda Tidak Terdaftar';
					$data['main_content'] = 'frontend/auth/login';
					$this->load->view('template/frontend/aloneview', $data);

				}						
				elseif ( ($email_user == $email) and ($password_user == $password) and ($status == 'Y') )
				{
					
					$data = array(
						'email_login' => $email_user,
						'nama' => $nama,	
						'date' => $date,
						'user_id' => $user_id,		
						'is_user_cood' => true
					);
					
					$this->session->set_userdata('is_user_cood', $data);			
					redirect('dashboard');
				}

				endforeach;
				
			}else {

					$data['title'] = 'Portal Login';						
					$data['error'] = 'email "'.$email.'"  Belum Terdaftar atau Belum Terverifikasi';
					$data['main_content'] = 'frontend/auth/login';
					$this->load->view('template/frontend/aloneview', $data);
			}
		}
	}

	public function cood_admin()
	{
		$is_admin_cood = $this->session->userdata('is_admin_cood'); //variable id login
		if(!isset($is_admin_cood) || $is_admin_cood != true) //cek sedang sudah login apa belum
		{
			$data['title'] = 'Liga Indramayu Administrator Login ';						
			$data['main_content'] = 'frontend/auth/cood-admin';
			$this->load->view('template/frontend/aloneview', $data);
		}
		else
		{
			redirect('cood-admin/dashboard');
		}
	}

	//admin valid
	function valid_login_admin()
	{		
	
		
		$this->form_validation->set_message('required', '<i class="fa fa-times-circle-o"></i> Anda belum memberikan %s '); 
		//------------------Valid
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');	


		
		if($this->form_validation->run() == false)
		{	
			$data['title'] = 'Liga Login';						
			$data['main_content'] = 'frontend/auth/cood-admin';
			$this->load->view('template/frontend/aloneview', $data);
		}
		else
		{
			
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$date = date('Y-m-d');

						
			$result = $this->auth_model->valid_login_admin($email, $password);			
			//
			if ($result) 
			{
				
				foreach ($result as $rows):
				
					$admin_id = $rows->admin_id;
					$email_user = $rows->email;
					$password_user = $rows->password;
					$status = $rows->status;
					$admin_nama = $rows->admin_nama;
				
				
				
				if($email_user != $email)
				{
			
					$data['title'] = 'Liga Login';						
					$data['error'] = 'email "'.$email.'" Belum Terdaftar atau Belum Terverifikasi';
					$data['main_content'] = 'home/cood-admin';
					$this->load->view('template/home/aloneview', $data);
				}		
				elseif ($password_user != $password) 						
				{

					$data['title'] = 'Liga Login';						
					$data['error'] = 'Password Salah';
					$data['main_content'] = 'home/cood-admin';
					$this->load->view('template/home/aloneview', $data);
				}
				elseif ($status != 'Y') 						
				{

					$data['title'] = 'Liga Login';						
					$data['error'] = 'email Anda Tidak Terdaftar';
					$data['main_content'] = 'home/cood-admin';
					$this->load->view('template/home/aloneview', $data);

				}						
				elseif ( ($email_user == $email) and ($password_user == $password) and ($status == 'Y') )
				{
					
					$data = array(
						'email_login' => $email_user,
						'nama' => $admin_nama,	
						'date' => $date,
						'admin_id' => $admin_id,		
						'is_admin_cood' => true
					);
					
					$this->session->set_userdata('is_admin_cood', $data);			
					redirect('cood-admin/dashboard');
				}

				endforeach;
				
			}else {

					$data['title'] = 'Liga Login';						
					$data['error'] = 'email "'.$email.'"  Belum Terdaftar atau Belum Terverifikasi';
					$data['main_content'] = 'home/cood-admin';
					$this->load->view('template/home/aloneview', $data);
			}
		}
	}

}