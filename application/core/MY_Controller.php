<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class MY_Controller extends CI_Controller {

	

	protected $user_id;

	protected $data;

	protected $user;



    public function __construct()

    {

        parent::__construct();

    }

    public function draw_page($options=array()){

		// add title and meta tags
		$this->data['page_title'] 		= $this->document->get_title(); // get page title
		$this->data['meta_description']	= $this->document->get_description(); // get meta description
		$this->data['meta_keywords']	= $this->document->get_keywords(); // get meta keywords */
		// eof add title and meta tags

		// add common styles
		$this->document->add_style(assets_url().'css/pages/bootstrap.min.css');
		$this->document->add_style(assets_url().'css/pages/style.css');
		$this->data['styles'] = $this->document->get_styles();
		// eof common add styles		

 		$header_data = array();
 		$footer_data = array();
		$header_data['user'] = $this->user; 

		$nav_data = array();
 		$nav_data['user'] = $this->user;

		//default header template of the page
 		if(!isset($this->data['header'])) { 
 			$this->data['header'] 	= $this->load->view('construct/page/header', $header_data, TRUE);
 		}

		//default footer template of the page
		$this->data['footer'] 		= $this->load->view('construct/page/footer',$footer_data,TRUE);

		//trow all the data in the template view
		$this->load->view('construct/page/template',$this->data);
	}

	public function draw_admin_page($options=array()){

		// add title and meta tags
		$this->data['page_title'] 		= $this->document->get_title(); // get page title
		$this->data['meta_description']	= $this->document->get_description(); // get meta description
		$this->data['meta_keywords']	= $this->document->get_keywords(); // get meta keywords */
		// eof add title and meta tags
		
		// add common styles
		
		$this->document->add_style(assets_url().'css/admin/bootstrap.css');
		$this->document->add_style(assets_url().'css/admin/bootstrap-tagsinput.css');
		$this->document->add_style(assets_url().'css/admin/jquery-ui.min.css');
		$this->document->add_style(assets_url().'css/admin/pace-theme-minimal.css');
		$this->document->add_style(assets_url().'css/admin/font-awesome.css');
		$this->document->add_style(assets_url().'css/admin/animate.css');
		$this->document->add_style(assets_url().'css/admin/sweetalert.css');
		
		
		$this->data['styles'] = $this->document->get_styles();
		// eof common add styles

 		$header_data = array();
 		$footer_data = array();
		$header_data['user'] = $this->user; 
		$chat_data = array();

		if(isset($options['header_data'])){

			foreach($options['header_data'] AS $hdkey=>$hdval){
				$header_data[$hdkey] = $hdval;
			}
		}

		$nav_data = array();
 		$nav_data['user'] = $this->user;

		//default header template of the page
 		if(!isset($this->data['header'])) { 
 			$this->data['header'] 		= $this->load->view('construct/admin/header', $header_data, TRUE);
 		}

 		//default navigation template of the page
 		if(!isset($this->data['navigation'])) {
 			$this->data['navigation'] 	= $this->load->view('construct/admin/navigation',$nav_data,TRUE);
 		}
		
		//defualt footer template of the page
		$this->data['footer'] 		= $this->load->view('construct/admin/footer',$footer_data,TRUE);

		//trow all the data in the template view
		$this->load->view('construct/admin/template',$this->data);
	}
	
}

