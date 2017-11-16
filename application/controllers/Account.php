<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Account extends MY_Controller {



	public function __construct()

	{

		parent::__construct();
	
		$this->_user_session = user_session();
		$this->load->model('Account_model');
		$this->load->model('Transaction_model');

		if((count(user_session()) == 0)){
			redirect('404');
		}

	}


	public function index()

	{

		$user_session = user_session();
				
		if((count($user_session) == 0)){
			redirect('404');
		}

		$data = array();

		$this->document->set_title('UServ | Dashboard');

		$this->data['content'] = $this->load->view('pages/account/dashboard', $data, TRUE);
		$this->draw_admin_page();

	}

	public function transaction_pending($transactions='')

	{

		$user_session = user_session();
				
		if((count($user_session) == 0)){
			redirect('404');
		}

		$data = array();

		$this->document->set_title('UServ | Pending Transaction');
		
		// $this->get_pending_data();

		// $cmd = 'arp -a';
		// $arp = shell_exec($cmd);
		// $ips = explode("\n ", substr($arp, 143));

		// $mac = array();
		// foreach ($ips as $key) {
		// 	$a = substr($key, 45, -3);
		// 	$b = substr($key, 16, -10);			

		// 	if($a == 'dynamic'){
		// 		$mac[] = substr($b, 7, -5);
		// 		$ip[] = substr($key, 1, -41);
		// 	}
		// }

        // $data['pending_transaction'] = $transactions;

  //       if(isset($ip)){
	 //        foreach ($ip as $k => $v) {
	 //        	shell_exec('arp -d '.$v);
	 //        }
	 //    }

		$this->data['content'] = $this->load->view('pages/transaction/pending', $data, TRUE);
		$this->draw_admin_page();

	}


	//get pending data
	public function get_pending_data()

	{

		$user_session = user_session();
				
		if((count($user_session) == 0)){
			redirect('404');
		}

		$data = array();

		$cmd = 'arp -a';
		$arp = shell_exec($cmd);
		$ips = explode("\n ", substr($arp, 143));

		$mac = array();
		foreach ($ips as $key) {
			$a = substr($key, 45, -3);
			$b = substr($key, 16, -10);			

			if($a == 'dynamic'){
				$mac[] = substr($b, 7, -5);
				$ip[] = substr($key, 1, -41);
			}
		}

		// $this->load->library('table');
		// $this->table->set_heading('id', 'MAC Address', 'Content');
		// $style = array('table_open'  => '<table class="table table-striped table-hover">');
  //       $this->table->set_template($style);

		// print_r($this->db->get('table_transaction_pending')->result_array());

		if($mac){
			$this->db->where_in('mac_address', $mac);
		}else{
			$mac = 'xxxxxxxxxxxxxxxxx';
			$this->db->where('mac_address', $mac);
		}

		$transactions = $this->db->get('table_transaction_pending')->result_array());

        $this->transaction_pending($transactions);

        if(isset($ip)){
	        foreach ($ip as $k => $v) {
	        	shell_exec('arp -d '.$v);
	        }
	    }

	}	

}

