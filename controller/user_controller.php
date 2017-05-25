<?php
ob_start();
include('controller.php');
include('model/page_model.php');
include('model/user_model.php');

class UserController extends Controller{

	public function getMenu(){
		$model = new PageModel;
		$theloai = $model->getTheloai();
		return $theloai;

	}

	public function getSignup(){

		$theloai = $this->getMenu();
		$arrData = array('theloai'=>$theloai);
		return $this->loadView('signup',$arrData);
	}

	public function postSignup($name,$email,$password){

		$model = new M_User;
		$user = $model->register($name,$email,$password);
		if($user>0){
			$_SESSION['email'] = $email;
			
			if(isset($_SESSION['pass_error']) || isset($_SESSION['error'])){
				unset($_SESSION['error']);
				unset($_SESSION['pass_error']);
			}
			header('Location:index.php');
			
			setcookie('thanhcong','Đăng kí thành công', time()+5);
		}
		else{
			header('Location:signup.php');
			$_SESSION['error'] = "Đăng kí không thành công";
		}


	}

	public function getLogin(){

		$theloai = $this->getMenu();
		$arrData = array('theloai'=>$theloai);
		return $this->loadView('login',$arrData);
	}


	public function postLogin($email, $password){
		$model = new M_User();
		$user = $model->searchUser($email,$password);
		if($user){
			//print_r($user); die;
			$_SESSION['username'] = $user->name;
			$_SESSION['id_user'] = $user->id;
  			header('Location:index.php');
			setcookie('thanhcong','Đăng nhập thành công', time()+5);
			unset($_SESSION['error']);
		}
		else{
			$_SESSION['error'] = 'Sai thông tin đăng nhập';
		}
	}



	public function logout(){
		session_destroy();
		header('Location:index.php');
	}



}



?>