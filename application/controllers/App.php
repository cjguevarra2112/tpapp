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
		
		$data = array(
			'title' => 'Home'
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('modules/public/home');
		$this->load->view('layout/footer');
		
		/*$um = new User_mapper();
		$user = $um->loginFetch('jimmy2112@yahoo.com', 'jimmy2112');
		var_dump($user);*/
	}
	
	public function lectures() {
		$data = array(
			'title' => 'Lectures'
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('modules/public/lectures');
		$this->load->view('layout/footer');
	}
	
	public function login() {
		$data = array(
			'title' => 'Login'
		);
		
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			// validate form
			echo $this->input->post('login-email');
		}
		
		$this->load->view('layout/header', $data);
		$this->load->view('modules/public/loginform');
		$this->load->view('layout/footer');
	}
	
	
	public function register () {
		
		$data = array(
			'title' => 'Register'
		);
		
		$this->load->view('layout/header', $data);
		$this->load->view('modules/public/registerform');
		$this->load->view('layout/footer');
	}
	
	
	public function members () {
		echo "You are now in members page!";
	}
	
}