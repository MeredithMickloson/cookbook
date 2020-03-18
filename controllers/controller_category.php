<?php

Class Controller_Category extends Controller
{

	function __construct(){		
		$this->model = new Model_Category();
		$this->view = new View();
		Controller::get_categories();
		Controller::get_authors();
	}

	function action_index(){
		$category = $this->model->get_category($_GET['id']);	
		$this->view->template('view_category.php', $category);
	}

}