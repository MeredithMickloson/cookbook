<?php

use App\Database;
class Model extends Connection
{
	function __construct()
	{
		Connection::database_setup();
	}	

	public function get_categories()
	{ 		
		$query = $this->connect->query("select * from categories");
		while($row = $query->fetch())
		{
			$data[] = $row;
		}
			return $data;
		}
	
	public function get_authors()
	{ 		
		$query = $this->connect->query("select * from authors");
		while($row = $query->fetch())
		{
			$data[] = $row;
		}
			return $data;
		}
}	

