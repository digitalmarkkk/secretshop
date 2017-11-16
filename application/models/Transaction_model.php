<?php
class Transaction_model extends CI_Model {

	function pending_transaction($mac=array()){

		if($mac){
			$this->db->where_in('mac_address', $mac);
		}else{
			$mac = 'xxxxxxxxxxxxxxxxx';
			$this->db->where('mac_address', $mac);
		}

		$query = $this->db->get('table_transaction_pending');
		return $query->result_array();

	}


}