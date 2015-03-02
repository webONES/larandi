<?php 

/**
* CSV Data Access
* This is just an example
* @author Arandi López <arandilopez.93@gmail.com>
*/
class CSVDataAccess {

	function __construct()
	{
		global $database;
		$this->file = $database['csv_path'];
	}

	public function write($data)
	{
		// Debugger::dump($data);
		$handle = fopen($this->file, 'a+');
		fputcsv($handle, $data);
		fclose($handle);	
	}

	public function read()
	{
		$handle = fopen($this->file, 'r+');
		$data = array();
		while (!feof($handle)) 
		{
			$cdata = fgetcsv($handle);
			if (!empty($cdata)) 
			{
				array_push($data, $cdata);	
			}
		}
		fclose($handle);
		return $data;
	}
}