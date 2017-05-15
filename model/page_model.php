<?php

include_once('database.php');

class PageModel extends database{


	public function getTheloai(){
		$sql = "SELECT tl.*, GROUP_CONCAT(DISTINCT lt.Ten,':',lt.id, ':',lt.TenKhongDau) as TenLoaitin FROM `theloai` tl INNER JOIN loaitin lt ON tl.id = lt.idTheLoai  GROUP BY tl.id";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	public function getSlide(){
		$sql = "SELECT * FROM slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	public function getTinNoiBat(){
		$sql = "SELECT id,TieuDe,TieuDeKhongDau FROM tintuc WHERE NoiBat = 1 ORDER BY id DESC LIMIT 0,5";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getTinMoiNhat_1(){
		$sql = "SELECT * FROM tintuc ORDER BY id DESC LIMIT 0,1";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	public function getTinMoiNhat(){
		$sql = "SELECT * FROM tintuc ORDER BY id DESC LIMIT 1,10";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}



	
}


?>