<?php
class Account_model extends CI_Model {

	function auth_user(){
		
		$employee_no = $_POST['employee_number'];

		$this->db->where('employee_no',$employee_no);
		$this->db->where('password',md5('digitalmark'.$this->input->post('password')));
		$query = $this->db->get('table_account');

		return $query->result_array();

	}


}