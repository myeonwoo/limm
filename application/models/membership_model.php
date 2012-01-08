<?php

class Membership_model extends Model {

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		//$this->db->where('password', md5($this->input->post('password')));
		$this->db->where('password', $this->input->post('password'));
		
		$query = $this->db->get('user');
		
		if($query->num_rows == 1)
		{
		    //$row = $query->row();
		    //echo $row->first_name.'<br />';
		    //echo $row->last_name;
			return true;
		} else
		    return false;
		
	}
	
	function create_member()
	{
		
		$new_member_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),			
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))						
		);
		
		$insert = $this->db->insert('membership', $new_member_insert_data);
		return $insert;
	}
}