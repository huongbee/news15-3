<?php

include_once('database.php');

class LoaiTinModel extends database{


	public function getTinByIdLoai($id_loai){
		$sql = "SELECT * FROM tintuc WHERE idLoaiTin = $id_loai";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai));
	}


	public function getLoaitinbyId($id_loai){
		$sql = "SELECT lt.*,tl.Ten as TenTheLoai FROM loaitin lt INNER JOIN theloai tl ON lt.idTheLoai = tl.id WHERE lt.id=$id_loai";
		$this->setQuery($sql);
		return $this->loadRow(array($id_loai));
	}


	public function getTinByIdLoaiPhantrang($id_loai,$vitri=0,$limit=10){
		$sql = "SELECT * FROM tintuc WHERE idLoaiTin = $id_loai LIMIT  $vitri,$limit";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai));
	}


//voh6GGvYIxfXdm6RZy5JvzUROYF0PN8jL8P3MXL8
//voh6GGvYIxfXdm6RZy5JvzUROYF0PN8jL8P3MXL8




}

?>