<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_mapper extends CI_Model {
	
	public function __construct () {
		parent::__construct();
		$this->load->database();
	}
	
	/**
	 * EMAIL EXISTS
	 * 
	 * Returns nonzero integer if the email doesnt existed yet,
	 * otherwise returns number of occurence
	 * 
	 * @param string $email
	 */
	public function emailExists($email) {
		$this->db->select('email');
		$query = $this->db->get_where('users', array('email' => $email));
		return $query->num_rows();
	}
	
	/**
	 * CREATE USER
	 * 
	 * Creates a new user. Return last insert id of the inserted user,
	 * otherwise FALSE is the insert is unsuccessful
	 * 
	 * @param User usr => User object
	 * @param string passwd => user's password in plain text
	 * @return void
	 */
	public function createUser($user, $password) {
		
		$salt = $this->helpers_model->generate_salt();
		
		$user->salt = $salt;
		$user->hash = hash('sha256', $salt . $password);
		
		if ($this->emailExists($user->email) == 0) { 
			$query = $this->db->insert('users', $user);
			return ($query ? $this->db->insert_id() : false);
		} else {
			return FALSE;
		}
	}


	/**
	 * LOGIN FETCH
	 * 
	 * Fetches a user by email and password. Returns a User object if the email/password
	 * matches an account otherwise false
	 * 
	 * @param string email 
	 * @param string password(plain)
	 * @return User => User object
	**/
	public function loginFetch($email, $password) {
		$query = $this->db->get_where('users', array('email' => $email));
		
		if ($query->num_rows()) {
			$rowArray = $query->row_array();
			
			$hash = hash('sha256', $rowArray['salt'] . $password);
			
			if ($rowArray['hash'] == $hash) {
				$theUser = new User();
				$theUser->createObject($rowArray);
				return $theUser;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	/**
	 * CHECK USER ID
	 * 
	 * Checks if a user id exists
	 * 
	 * @param  int id => user id
	 * @return bool   => existence of user id
	 *
	**/
	public function checkUserId($id) {
		$query = $this->db->get('users', array('id' => $id));
		return ($query->num_rows() > 0);
	}
	

	/**
	 * SAVE USER
	 * 
	 * Inserts or Updates a User. If insert, it will return the
	 * last insert id.
	 * 
	 * @param  User user   => User object
	 * @return int  id     => last insert id
 	 *         bool update => success of update
	 *
	**/
	public function saveUser(User $user) {
		if ($user->id == 0) {
			$this->db->insert('users', $user);
			$id = $this->db->insert_id();
			return $id;
		} else {
			if ($this->checkUserId($user->id)) {
				$this->db->where('id', $user->id);
				$this->db->update('users', $user);
				return true;
			} else {
				return false;
			}
		}
	}
	
}