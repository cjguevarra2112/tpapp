<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	
	/**
	 * 
	 * 
	 * For logging in:
	 * 1. generate a salt and concatenate the password ()
	 *	  (prepend the salt to the user's password)
	 * 2. hash the combined string using sha256
	 * 
	 * SALT => generated using CSPRING algorithm
	 * HASH => combined SALT and PASSWORD then hashed using sha256 
	 * 
	 * sample account:
	 * email: johndoe@yahoo.com
	 * passwd: johndoepass
	 *  
	 **/
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index(){
		$um = new User_mapper();
		$user = $um->loginFetch('nessEB@yahoo.com', 'nesspass');
		
		$user->email = "nessmother2@yahoo.com";
		$um->saveUser($user);
	}
	
	
}