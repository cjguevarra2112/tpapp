<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helpers_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	
	/**
	 * Generates secure password using CSPRING algorithm
	 * 
	 * @param string length => length of encrypted plain text 
	 * @return string       => encrypted string
	 */
	public function generate_salt($length=24) {
		if(function_exists('openssl_random_pseudo_bytes')) {
			$password = base64_encode(openssl_random_pseudo_bytes($length, $strong));
			if($strong == TRUE)
				return substr($password, 0, $length); //base64 is about 33% longer, so we need to truncate the result
		}
		
		# fallback to mt_rand if php < 5.3 or no openssl available
		$characters = '0123456789';
		$characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz/+';
		$charactersLength = strlen($characters)-1;
		$password = '';
		
		# select some random characters
		for ($i = 0; $i < $length; $i++) {
			$password .= $characters[mt_rand(0, $charactersLength)];
		}
		return $password;
	}
}