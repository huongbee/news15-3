<?php

include('database.php');

class AdminModel extends database{
	
	public function getTintuc(){
		$sql = "SELECT * FROM tintuc ";

		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getLoaitin(){
		$sql = "SELECT * FROM loaitin";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getNewsById($id){
		$sql = "SELECT * FROM tintuc WHERE id=$id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}


	public function updateNews($id,$id_loai,$tieude,$tieudekhongdau,$tomtat,$nddaydu,$hinh,$noibat){
		$sql = "UPDATE tintuc SET TieuDe='$tieude', TieuDeKhongDau = '$tieudekhongdau', TomTat='$tomtat', NoiDung = '$nddaydu', Hinh='$hinh',NoiBat='$noibat', idLoaiTin=$id_loai WHERE id=$id";
		$this->setQuery($sql);
		return $this->execute(array($id,$id_loai,$tieude,$tieudekhongdau,$tomtat,$nddaydu,$hinh,$noibat));
		

	}


	public function insertNews($tieude,$tieudekhongdau,$tomtat,$nddaydu,$hinh,$noibat, $id_loai){
		$sql = "INSERT INTO tintuc(TieuDe, TieuDeKhongDau, TomTat, NoiDung, Hinh, NoiBat , idLoaiTin) VALUES (?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$result =  $this->execute(array($tieude,$tieudekhongdau,$tomtat,$nddaydu,$hinh,$noibat, $id_loai));
		
		if($result){
			return $this->getLastId();
		}
		else{
			return false;
		}
	}
}


?>