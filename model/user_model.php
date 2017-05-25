<?php

include_once('database.php');

class M_User extends database{


	public function register($name,$email,$password){
		$sql = "INSERT INTO users(name, email, password) VALUES (?,?,?)";

		$this->setQuery($sql);
		$user = $this->execute(array($name,$email,$password));
		if($user){
			return $this->getLastId(); //43
		}
		else{
			return false;
		}
	}


	public function searchUser($email,$password){
		$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		$this->setQuery($sql);
		return $this->loadRow(array($email,$password));
	}
}

?>