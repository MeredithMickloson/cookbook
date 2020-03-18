<?php

Class Controller_Recipe extends Controller 
{

	function __construct(){		
		$this->model = new Model_Recipe();
		$this->view = new View();
		Controller::get_categories();
		Controller::get_authors();
}

	function action_index(){
		$recipe = $this->model->get_recipe($_GET['id']);	
		$this->view->template('view_recipe.php', $recipe);
		return $recipe;
	}

}