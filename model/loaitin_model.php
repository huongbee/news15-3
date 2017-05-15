<?php

include_once('database.php');

class LoaiTinModel extends database{


	public function getTinByIdLoai($id_loai){
		$sql = "SELECT * FROM tintuc WHERE idLoaiTin = $id_loai";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai));
	}	


}

?>