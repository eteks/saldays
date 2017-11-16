<?php
class Login_process extends CI_Model
{
	Public function check($data)
	{
		//$this->load->library('session');
		$this->load->database();
		$query=$this->db->get_where('saai_users', array('unique_id' => $data['username'],'user_password' => $data['password'],'user_status'=>1));
		//echo $query->num_rows();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}