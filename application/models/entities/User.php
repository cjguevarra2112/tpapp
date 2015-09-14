<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	
	public $id;
	public $fname;
	public $lname;
	public $email;
	public $hash;
	public $salt;
	public $regdate;
	public $is_admin;
	public $status;
	public $last_login;
	
	public function createObject($data) {
		$this->id = isset($data['id']) ? $data['id'] : 0;
		$this->fname = isset($data['fname']) ? $data['fname'] : "";
		$this->lname = isset($data['lname']) ? $data['lname'] : "";
		$this->email = isset($data['email']) ? $data['email'] : "";
		$this->hash = isset($data['hash']) ? $data['hash'] : "";
		$this->salt = isset($data['salt']) ? $data['salt'] : "";
		$this->regdate = isset($data['regdate']) ? $data['regdate'] : 0;
		$this->is_admin = isset($data['is_admin']) ? $data['is_admin'] : 0;
		$this->status = isset($data['status']) ? $data['status'] : "Deny";
		$this->last_login = isset($data['last_login']) ? $data['last_login'] : 0;
	}
}