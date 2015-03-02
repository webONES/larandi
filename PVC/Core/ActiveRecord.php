<?php 

/**
* Active Record Trait interface
* @author Arandi López <arandilopez.93@gmail.com>
*/

interface ActiveRecord {

	public function save();

	public function delete();

	public function update();

	public static function all();

}