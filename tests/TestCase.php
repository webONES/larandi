<?php 

/**
* TestCase class for PHPUnit
* @author Arandi López <arandilopez.93@gmail.com>
*/
class TestCase extends PHPUnit_Framework_TestCase {
	
	public function createNewApp()
	{
		return new App();
	}
}