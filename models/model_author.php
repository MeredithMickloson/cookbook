<?php

class Model_Author extends Model
{
	function __construct()
	{
		Connection::database_setup();
	}

	public function get_author($id)
	{ 	
		$query = $this->connect->prepare("select * from recipes left join authors on authors.author_id = recipes.author_id 
		left join images on recipes.id = images.recipe_id where authors.author_id = ?");
		$query->execute([$id]);
		while($row = $query->fetch())
	{
		$data[] = $row;
	}
		return $data;
    }	
   
}