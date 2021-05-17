<?php 
	/**
	 * 
	 */
	class User_model extends CI_model
	{
		
		function create($formArray)
		{
			$this->db->insert('users',$formArray);
		}

		function all()
		{
			return $users = $this->db->get("users")->result_array();
		}

		function getUser($user_id)
		{
			$this->db->where('user_id',$user_id);
			return $user = $this->db->get("users")->row_array();	
		}

		function updateUser($user_id,$formArray)
		{
			$this->db->where('user_id',$user_id);
			$this->db->update('users',$formArray);
		}

		function deleteUser($user_id)
		{
			$this->db->where('user_id',$user_id);
			return $user = $this->db->delete("users");	
		}
	}
?>