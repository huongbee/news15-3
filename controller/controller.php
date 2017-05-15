<?php

class Controller{

	public function __construct(){

	}

	public function loadView($view,$data=array()){
		include "views/layout.php";
	}


	// public function getMenu($array=array()){
	// 	include "views/menu.php";
	// }


}

?>