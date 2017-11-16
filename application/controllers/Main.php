<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	public function __construct() {

       parent::__construct();

       $this->_user_session = user_session();

       $this->load->model('Account_model');

	}


	public function index()	{

		$user_session = user_session();
				
		if(count($user_session) > 0){
			redirect('account/dashboard');
		}

		$this->document->set_title('UServ');
		
        $data = array();

		if($this->input->post()){

			$this->form_validation->set_rules('employee_number', 'Employee No', 'required|trim');
			$this->form_validation->set_rules('password', 'Password', 'required|trim');

		    if($this->form_validation->run() == TRUE)
	        {
    			
    			$accountData = $this->Account_model->auth_user();

	  			if(count($accountData) > 0){

  			        $this->session->set_userdata('user_data',$accountData[0]);

  			        redirect('account/dashboard');

	  			}else{

  			        $message = 'Sorry, we didn&apos;t recognize your login details.';
  			        $this->session->set_flashdata('danger',$message);

  			        redirect('main');

	  			}            

	        }

		}

    	$this->data['content'] = $this->load->view('pages/main', $data, TRUE);
    	$this->draw_page();

	}

}

