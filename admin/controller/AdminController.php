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

	public function getEditNewsById(){
		$model = new AdminModel();
		$loaitin = $model->getLoaitin();
		$arrData  = array('loaitin'=>$loaitin);
		return $this->loadView('suatintuc',$arrData);
	}



}







?>