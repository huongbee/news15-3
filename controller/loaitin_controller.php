<?php
require('controller.php');
require('model/page_model.php');
require('model/loaitin_model.php');

class LoaitinController extends Controller{

	public function getMenu(){
		$model = new PageModel;
		$theloai = $model->getTheloai();
		return $theloai;

	}

	public function getType(){

		$id_loai = $_GET['id'];
		$model = new LoaiTinModel();
		$tintheoloai = $model->getTinByIdLoai($id_loai);

		//print_r($tintheoloai); die;

		$theloai = $this->getMenu();
		$arrData = array(
						'theloai'=>$theloai,
						'tintheoloai'=>$tintheoloai
					);
		return $this->loadView('type',$arrData);
	}

}



?>