<?php 

/**
* Model class
*/

abstract class Model implements ActiveRecord {

	protected $fields = array();

	function __construct()
	{
		
	}

	public function save()
	{
		
	}

	public function delete()
	{
		
	}

	public function update()
	{
		
	}

	public static function all()
	{

	}

	public static function __toArray( Model $o )
	{
		$a = array();
		foreach ($o->fields as $field) {
			$a[$field] = $o->$field;
		}
		return $a;
	}
}