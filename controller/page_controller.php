<?php

require('controller.php');
require('model/page_model.php');

class PageController extends Controller{


	public function getMenu(){
		$model = new PageModel;
		$theloai = $model->getTheloai();
		return $theloai;

	}

	public function getIndex(){
		$theloai = $this->getMenu();

		$model = new PageModel;
		$slide = $model->getSlide();
		$noibat = $model->getTinNoiBat();
		$tinmoi_1 = $model->getTinMoiNhat_1();
		$tinmoi = $model->getTinMoiNhat();


		$arrData = array(
					'theloai'=>$theloai,
					'slide'=>$slide,
					'tinnoibat'=>$noibat,
					'tinmoi_1'=>$tinmoi_1,
					'tinmoi'=>$tinmoi
				);

		return $this->loadView('trangchu',$arrData);
	}


	

	public function getDetail(){

		$theloai = $this->getMenu();
		$arrData = array('theloai'=>$theloai);
		return $this->loadView('single',$arrData);
	}

	public function getLogin(){

		$theloai = $this->getMenu();
		$arrData = array('theloai'=>$theloai);
		return $this->loadView('login',$arrData);
	}


	public function getSignup(){

		$theloai = $this->getMenu();
		$arrData = array('theloai'=>$theloai);
		return $this->loadView('signup',$arrData);
	}


	public function getContact(){
		$theloai = $this->getMenu();
		$arrData = array('theloai'=>$theloai);
		return $this->loadView('contact',$arrData);
	}



}



?>