<?php

require('controller.php');
require('model/page_model.php');

class PageController extends Controller{

	public function __construct(){
		$model = new PageModel;
		$theloai = $model->getTheloai();
		return $this->getMenu($theloai);
		//print_r($);

	}

	public function getIndex(){
		return $this->loadView('trangchu');
	}


	public function getType(){
		return $this->loadView('type');
	}

	public function getDetail(){
		return $this->loadView('single');
	}

	public function getLogin(){
		return $this->loadView('login');
	}


	public function getSignup(){
		return $this->loadView('signup');
	}


	public function getContact(){
		return $this->loadView('contact');
	}



}



?>