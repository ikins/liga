<?php
class Auth_model extends CI_Model {

//user login valid
function valid_login($email, $password)
	{		

		$q = $this->db->select('
				a.user_id as user_id,			
				a.email as email,
				a.password as password,
				a.status as status,
				b.member_nama as member_nama 
			')
			
			->from('users a')
			->join('profils b','b.member_id = a.member_id')
			->where('a.email', $email)
			->where('a.password', $password)
			;			
				
			$result = $q->get()->result();
			return $result;
				
	}

//admin login valid
function valid_login_admin($email, $password)
	{		

		$q = $this->db->select('
				a.admin_id as admin_id,			
				a.email as email,
				a.password as password,
				a.admin_nama as admin_nama,
				a.status as status,
			')
			
			->from('webadmin a')
			->where('a.email', $email)
			->where('a.password', $password)
			;			
				
			$result = $q->get()->result();
			return $result;
				
	}

}