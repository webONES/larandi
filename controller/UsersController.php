<?php 


class UsersController extends Controller {
	
	function __construct()
	{
		# code...
	}

	public function listUsers()
	{
		View::make('user_add_view', array(
			'name' => 'Arandi López Alonzo'
		));
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
}