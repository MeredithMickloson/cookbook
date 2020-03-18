<?php

Class Controller_Author extends Controller
{

	function __construct(){	
			
		$this->model = new Model_Author();
		$this->view = new View();
		Controller::get_categories();
		Controller::get_authors();
}

	function action_index(){
		$author = $this->model->get_author($_GET['id']);
		$this->view->template('view_author.php', $author);
		return $author;
	}

}