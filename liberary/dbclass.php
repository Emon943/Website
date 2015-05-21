<?php

class DBClass {
	public $dbUserName = 'root';
	public $dbUserPassword = 'root123';
	public $dbName = 'db_sa';
	public $dbHostName = 'localhost';
	
	private $link;
	
	public function dbConnect(){
		if(!$this->link = mysql_connect($this->dbHostName, $this->dbUserName, $this->dbUserPassword)){
			die('could not connect to the database');
		}
		mysql_select_db($this->dbName, $this->link);
	}
	
	public function doQuery($query)
	{
		$result = mysql_query($query, $this->link);
		
		return $result;
	}
	
	public function fetchObject($result)
	{
		$row = mysql_fetch_object($result);

		return $row;
	}
	
	public function fetchArray($result)
	{
		$row = mysql_fetch_array($result);

		return $row;
	}
	
	public function numOfRows($result)
	{
		$numberOfRows = mysql_num_rows($result);

		return $numberOfRows;
	}
}
?>