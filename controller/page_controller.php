<?php

require('controller.php');

class PageController extends Controller{

	public function loadView($view,$data=array()){
		include "views/layout.php";
	}

	public function getIndex(){
		return $this->loadView('trangchu');
	}

}



?>