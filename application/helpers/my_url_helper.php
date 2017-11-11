<?php

if ( ! function_exists('assets_url')) {
	function assets_url() {
		$ci =& get_instance();
		return $ci->config->item('assets_url');
	}
}