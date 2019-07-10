<?php
class Home_model extends CI_Model {


//tambah member
function add_member($data_member)
	{					
		$insert = $this->db->insert('profils', $data_member);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;					
	}

function add_login($data)
	{					
		$insert = $this->db->insert('users', $data);
		return $insert;					
	}

//check email
function checkemail($email)
	 {
	   $this->db->select('email');
	   $this->db->from('users');
	   $this->db->where('email', $email);
	   $this->db->limit(1);
	 
	   $query = $this->db->get();
	 
	   if($query -> num_rows() == 1)
	   {
		 return $query->result();
	   }
	   else
	   {
		 return false;
	   }
	}

}