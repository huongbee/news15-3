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

	public function getChitietTin($id_tin){
		$sql = "SELECT * FROM tintuc WHERE id=$id_tin";
		$this->setQuery($sql);
		return $this->loadRow(array($id_tin));
	}


	public function getComment($id_tin){
		$sql = "SELECT m.*, u.name, u.avatar FROM comment m INNER JOIN users u ON m.idUser = u.id WHERE idTinTuc = $id_tin";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_tin));
	}



	public function insertComment($idUser,$idTinTuc,$NoiDung){
		$sql = "INSERT INTO comment(idUser,idTinTuc,NoiDung) VALUES (?,?,?)";
		$this->setQuery($sql);
		$comment = $this->execute(array($idUser,$idTinTuc,$NoiDung));
		if($comment){
			return $this->getLastId();
		}
		else{
			return false;
		}
	}









	
}


?>