<?php

class Model_Recipe extends Model
{
	function __construct()
	{
		Connection::database_setup();
	}

	public function get_recipe($id)
	{ 	
		$query1 = $this->connect->prepare("Update recipes Set views = views + 1 WHERE id = $id;");
        $query2 = $this->connect->prepare("select * from recipes left join categories on
        categories.category_id = recipes.category_id 
		left join authors on authors.author_id = recipes.author_id
		left join images on recipes.id = images.recipe_id where recipes.id = $id");
		$query1->execute();
		$query2->execute();
		while($row = $query2->fetch())
	{
		$data[] = $row;
	}
		return $data;
    }	
   
}