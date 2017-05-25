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

		$id_tintuc = (int)$_GET['id'];
		//$id_tintuc = settype($id_tintuc, 'int');

		$model = new PageModel;
		$chitiettin = $model->getChitietTin($id_tintuc);
		$comment = $model->getComment($id_tintuc);


		$theloai = $this->getMenu();

		$arrData = array(
					'theloai'=>$theloai,
					'chitiettin'=>$chitiettin,
					'comment'=>$comment
				);

		return $this->loadView('single',$arrData);
	}


	public function getContact(){
		$theloai = $this->getMenu();
		$arrData = array('theloai'=>$theloai);
		return $this->loadView('contact',$arrData);
	}



	public function insert_Comment(){
		$noidung = $_GET['noidungbinhluan'];
		$id_tintuc = $_GET['id_tintuc'];
		$id_user = $_GET['id_nguoidung'];
		$model = new PageModel();
		$comment = $model->insertComment($id_user,$id_tintuc,$noidung);
		if($comment>0){
			return 'thành công';
		}
		else{
			return 'thất bại';
		}
	}



}



?>