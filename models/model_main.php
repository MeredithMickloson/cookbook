<?php

class Model_Main extends Model
{
	

	public function get_recipes()
	{ 		
		$query = $this->connect->query("select * from recipes left join categories on 
		categories.category_id = recipes.category_id left join authors on authors.author_id = recipes.author_id
		left join images on recipes.id = images.recipe_id order by id desc");
		while($row = $query->fetch())
	{
		$data[] = $row;
	}
		return $data;
	}
	

	
}	