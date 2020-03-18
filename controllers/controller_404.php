<?php

Class Controller_404 extends Controller
{

	function __construct(){	
		$this->model = new Model();
		$this->view = new View();
		Controller::get_categories();
		Controller::get_authors();
}
        
	function action_index()
	{
		$this->view->template('view_404.php');
    }

}