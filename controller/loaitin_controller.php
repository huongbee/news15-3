<?php
require('controller.php');
require('model/page_model.php');
require('model/loaitin_model.php');
require('model/pager.php');

class LoaitinController extends Controller{

	public function getMenu(){
		$model = new PageModel;
		$theloai = $model->getTheloai();
		return $theloai;

	}

	public function getType(){

		$id_loai = $_GET['id'];

		$model = new LoaiTinModel();
		$tenloaitin = $model->getLoaitinbyId($id_loai);

		$tintheoloai = $model->getTinByIdLoai($id_loai);

		$tranghientai = isset($_GET['page'])?$_GET['page']:1;
		$limit = 5;

		$phantrang = new pagination(count($tintheoloai),$tranghientai,$limit,5);

		$hienthi = $phantrang->showPagination();

		$vitri = ($tranghientai - 1)*$limit;

		$tintheoloai = $model->getTinByIdLoaiPhantrang($id_loai,$vitri,$limit);




		//print_r($tintheoloai); die;

		$theloai = $this->getMenu();
		$arrData = array(
						'theloai'=>$theloai,
						'tintheoloai'=>$tintheoloai,
						'hienthiphantrang'=>$hienthi,
						'tenloaitin'=>$tenloaitin
					);
		return $this->loadView('type',$arrData);
	}




	function getTinByIdLoai(){
		$id_loai = $_GET['id_loai'];
		$m_tintuc = new M_tintuc();
		$tin = $m_tintuc->getTintucTheoLoai($id_loai);

		$currentPage    = (isset($_GET['page'])) ? $_GET['page'] : 1;
		$pagination     = new pagination(count($tin),$currentPage,5,4); //tổng số trang,trang hien tai,so phần tử trên trang, số trang sẽ hiển thị
		$paginationHTML = $pagination->showPagination();
		$position       = ($currentPage-1)*$pagination->_nItemOnPage;

		$tin = $m_tintuc->getTintucPhantrang($id_loai,$position, $pagination->_nItemOnPage);

		$array = array('tintuc'=>$tin, 'list'=>$paginationHTML);
		return $this->loadView('loaitin',$array);
	}

}



?>