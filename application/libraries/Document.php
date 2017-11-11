<?php

class Document {



	private $title;

	private $description;

	private $keywords;	

	private $links = array();		

	private $styles = array();

	private $scripts = array();

	private $page_scripts = array();

	

	public function set_title($title) {

		$this->title = $title;

	}

	

	public function get_title() {

		return $this->title;

	}

	

	public function set_description($description) {

		$this->description = $description;

	}

	

	public function get_description() {

		return $this->description;

	}

	

	public function set_keywords($keywords) {

		$this->keywords = $keywords;

	}

	

	public function get_keywords() {

		return $this->keywords;

	}

	

	public function add_link($href, $rel) {

		$this->links[md5($href)] = array(

			'href' => $href,

			'rel'  => $rel

		);			

	}

	

	public function get_links() {

		return $this->links;

	}	

	

	public function add_style($href, $rel = 'stylesheet') {

		$this->styles[md5($href)] = array(

			'rel'   => $rel,
			'href'  => $href

		);

	}

	

	public function get_styles() {

		return $this->styles;

	}	

	

	public function add_script($script,$location='top') {

		if(is_array($script) AND count($script) > 0) {

			foreach($script AS $src) {

				if($location == 'top') {

					$this->scripts[md5($src)] = $src;		

				}

				elseif($location == 'bottom') {

					$this->page_scripts[md5($src)] = $src;

				}	

			}

		}

		else {

			if($location == 'top') {

				$this->scripts[md5($script)] = $script;		

			}

			elseif($location == 'bottom') {

				$this->page_scripts[md5($script)] = $script;

			}

		}			

	}

	

	public function get_scripts() {

		return $this->scripts;

	}



	public function get_page_scripts() {

		return $this->page_scripts;

	}

}

?>