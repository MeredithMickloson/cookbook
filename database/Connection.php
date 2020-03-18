<?php

class Connection
{
	public function database_setup(){	
		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES   => false,
		];	
		$this->connect = new PDO("mysql:host=localhost;dbname=cookbook;charset=utf8", "root", "", $options);
		if(!isset($this->connect)){
			echo "No connection!";
		}
		else{
		    return "Yes connection!";
        }
	}
}	

