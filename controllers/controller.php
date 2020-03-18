<?php

Class Controller
{

	function get_categories()
	{
		$categories = $this->model->get_categories();		
		$this->view->header_category($categories);
		return $categories;
	}

	function get_authors()
    {
        $authors = $this->model->get_authors();
        $this->view->header_author($authors);
        return $authors;
    }

}