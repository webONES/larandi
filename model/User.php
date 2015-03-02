<?php 

/**
* g
*/

class User extends Model {

	function __construct($data)
	{
		$this->firstName = isset($data['firstName']) ? $data['firstName'] : null;
		$this->lastName  = isset($data['lastName']) ? $data['lastName'] : null;
		$this->email     = isset($data['email']) ? $data['email']: null;
		$this->password  = isset($data['password']) ? $data['password']: null;
	}

	protected $fields = ['firstName', 'lastName', 'email', 'password'];
	private $table = 'users';
}