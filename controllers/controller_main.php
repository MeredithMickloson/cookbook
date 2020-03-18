<?php

Class Controller_Main extends Controller
{
	function __construct(){		
		$this->model = new Model_Main();
		$this->view = new View();
		Controller::get_categories();
		Controller::get_authors();
	}

	function action_index()
	{
		$recipes = $this->model->get_recipes();		
		$this->view->template('view_main.php', $recipes);
		return $recipes;
	}

}