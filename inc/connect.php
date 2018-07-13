<?php
class Dbh{
	
	private $serverName;
	private $userName;
	private $userPassword;
	
	protected function connect(){
		$this->serverName = 'localhost';
		$this->userName = 'root';
		$this->userPassword = '';
		$this->dbName = 'test';
		
		$db = new MySQLi($this->serverName,$this->userName,$this->userPassword,$this->dbName);
		return $db;
		}		
	
	}

?>	