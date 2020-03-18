<?php

class Model_Category extends Model
{
	function __construct()
	{
		Connection::database_setup();
	}

	public function get_category($id)
	{ 	
		$query = $this->connect->prepare("select * from recipes left join categories on 
		categories.category_id = recipes.category_id left join images on 
		recipes.id = images.recipe_id where categories.category_id = ?");
		$query->execute([$id]);
		while($row = $query->fetch())
	{
		$data[] = $row;
	}
		return $data;
    }	
   
}