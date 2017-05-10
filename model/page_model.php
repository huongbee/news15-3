<?php

include('database.php');

class PageModel extends database{


	public function getTheloai(){
		$sql = "SELECT tl.*, GROUP_CONCAT(DISTINCT lt.Ten) as TenLoaitin FROM `theloai` tl INNER JOIN loaitin lt ON tl.id = lt.idTheLoai  GROUP BY tl.id";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
}


?>