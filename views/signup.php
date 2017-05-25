<?php
ob_start();

if(isset($_POST['dangki'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = trim($_POST['password']);
	$re_password = trim($_POST['passwordAgain']);
	if($password == $re_password){
		$control = new UserController;
		$user = $control->postSignup($name,$email,md5(md5($password)));
		

	}
	else{
		$_SESSION['pass_error'] = "Mật khẩu không giống nhau";
	}

}



?>

<style>
.dangki:hover{
	cursor: pointer
}
</style>
<div class="banner-bottom">
	<div class="container">
		<!-- news-and-events -->
			<div class="row carousel-holder">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
			  	<h2 class="dangki">Đăng kí thành viên</h2>

			  	<div class="row" style="margin-top: 20px">
			  		<?php
			  		if(isset($_SESSION['pass_error']) ){
			  			echo "<div class='alert alert-danger'>$_SESSION[pass_error]</div>";
			  		}
			  		if(isset($_SESSION['error'])){
			  			echo "<div class='alert alert-danger'>$_SESSION[error]</div>";
			  		}

			  		?>
			  	</div>
			  	<div class="panel-body">
			    	<form method="POST" >
			    		<div>
			    			<label>Họ tên</label>
						  	<input type="text" class="form-control" placeholder="Họ tên" name="name" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
			    			<label>Email</label>
						  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1">
						</div>
						<br>	
						<div>
			    			<label>Nhập mật khẩu</label>
						  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
			    			<label>Nhập lại mật khẩu</label>
						  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
						</div>
						<br>
						<button type="submit" class="btn btn-success" name="dangki">Đăng kí
						</button>

			    	</form>
			  	</div>
			</div>
        </div>
        <div class="col-md-2">
        </div>
        <div class="clearfix"></div>
    </div>
		<!-- //news-and-events -->
	</div>
</div>