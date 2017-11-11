<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Account extends MY_Controller {



	public function __construct()

	{

		parent::__construct();
	
		$this->_user_session = user_session();
		$this->load->model('Account_model');

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

	public function transaction_pending()

	{

		$user_session = user_session();
				
		if((count($user_session) == 0)){
			redirect('404');
		}

		$data = array();

		$this->document->set_title('UServ | Pending Transaction');

		$this->data['content'] = $this->load->view('pages/transaction/pending', $data, TRUE);
		$this->draw_admin_page();

	}


}

