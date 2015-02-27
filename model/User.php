<?php 

/**
* g
*/
class User {
	
	function __construct($data)
	{
		$this->firstName = isset($data['firstName']) ? $data['firstName'] : null;
		$this->lastName  = isset($data['lastName']) ? $data['lastName'] : null;
		$this->email     = isset($data['email']) ? $data['email']: null;
		$this->password  = isset($data['password']) ? $data['password']: null;
	}

	public function add()
	{
		
	}

	public function delete()
	{
		
	}

	public function modify()
	{
		
	}

	public static function listAll()
	{
		
	}
}