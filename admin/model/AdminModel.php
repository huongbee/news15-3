<?php

include('database.php');

class AdminModel extends database{
	
	public function getTintuc(){
		$sql = "SELECT * FROM tintuc";

		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}


?>