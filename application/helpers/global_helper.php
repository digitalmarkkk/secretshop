<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if( ! function_exists('user_session')) {
	function user_session(){
		$ci =& get_instance();
		
		$user_data = $ci->session->userdata('user_data');
		$sess = array();
		
		if(isset($user_data['id'])){
			$sess = $user_data;
		}
		
		return $sess;
	}
}
if( ! function_exists('char_limit'))
{
	function char_limit($str, $length){
	
		//parse the string to limit the character
		$result = substr($str,0,$length);
		
		if( strlen($result) >= $length){
			$result .= (substr($result,-1) == '.')? '':'...';
		}
		return $result;
	}
}

function isSecure() {
  return
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || $_SERVER['SERVER_PORT'] == 443;
}

function is_superadmin(){

	$user_session = user_session();
	
	if(isset($user_session['role']) && $user_session['role'] == 2){
		$res = true;
	}
	else{
		$res = false;
	}
	
	return $res;
}