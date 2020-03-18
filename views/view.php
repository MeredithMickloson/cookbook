<?php

class View
{

	function header_category($categories = null){
		include "category_list.php";
		return $categories;
	}

	function header_author($authors = null){
		include "author_list.php";
		return $authors;
	}

	function template($content, $data = null)
	{
		include "template.php";
		$answer = array(
		    "content" => $content,
            "data" => $data
        );
		return $answer;
	}

}