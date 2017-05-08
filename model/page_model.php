<?php

include('database.php');

class PageModel extends database{


	function getTheloai(){
		$sql = "SELECT * FROM theloai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}


?>