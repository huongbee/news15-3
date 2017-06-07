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

		$id = $_GET['id'];
		$tintuc = $model->getNewsById($id);

		$arrData  = array('loaitin'=>$loaitin,'tintuc'=>$tintuc);
		return $this->loadView('suatintuc',$arrData);
	}


	public function postUpdateNews($id,$id_loai,$tieude,$tieudekhongdau,$tomtat,$nddaydu,$hinh,$noibat){

		$model = new AdminModel();
		$tintuc = $model->updateNews($id,$id_loai,$tieude,$tieudekhongdau,$tomtat,$nddaydu,$hinh,$noibat);
		if($tintuc){
			header("location:editnews.php?id=$id");
			setcookie('thanhcong','Sửa thành công',time()+3);
		}
		else{
			setcookie('khongthanhcong','Sửa thất bại',time()+3);
		}

	}


	public function getAddNews(){
		$model = new AdminModel();
		$loaitin = $model->getLoaitin();


		$arrData  = array('loaitin'=>$loaitin);
		return $this->loadView('themtintuc',$arrData);
	}



	public function postAddNews($id_loai,$tieude,$tieudekhongdau,$tomtat,$nddaydu,$hinh,$noibat){

		$model = new AdminModel();
		$tintuc = $model->insertNews($tieude,$tieudekhongdau,$tomtat,$nddaydu,$hinh,$noibat, $id_loai);
		if($tintuc){
			header("location:themtintuc.php");
			setcookie('thanhcong','Thêm thành công',time()+3);
		}
		else{
			setcookie('khongthanhcong','Thêm thất bại',time()+3);
		}

	}

	public function deleteNewsById(){
		$id = $_GET['id'];
		$model = new AdminModel();
		$tintuc = $model->deleteNews($id);
		
		if($tintuc){
			header("location:index.php");
			setcookie('thanhcong','Xóa thành công',time()+3);
		}
		else{
			header("location:index.php");
			setcookie('khongthanhcong','Xóa thất bại',time()+3);
		}
	}



}







?>