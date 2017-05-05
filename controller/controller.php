<?php

class Controller{

	public function __construct(){

	}

	public function loadView($view,$data=array()){
		include "views/layout.php";
	}


}

?>