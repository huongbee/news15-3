<?php

include('controller.php');
include('model/AdminModel.php');

class AdminController extends Controller{

	public function getIndex(){
		$model = new AdminModel();
		$tintuc = $model->getTintuc();

		$arrData  = array('tintuc'=>$tintuc);

		return $this->loadView('trangchu',$arrData);
	}

}







?>