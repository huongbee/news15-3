<?php

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = md5(md5($_POST['password']));
	$login = new UserController();
	$user = $login->postLogin($email,$password);
}

?>
	<div class="banner-bottom">
		<div class="container">
			<!-- news-and-events -->
		<div class="row carousel-holder">
    		<div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
				  	<h2>Login</h2>
				  	<br>
				  	<?php
				  	if(isset($_SESSION['error'])){
				  		echo "<div class='alert alert-danger'>$_SESSION[error]</div>";
				  	}
				  	?>
				  	<div class="panel-body">

				    	<form method="post">
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email">
							</div>
							<br>	
							<div>
				    			<label>Password</label>
							  	<input type="password" class="form-control" name="password">
							</div>
							<br>
							<button type="submit" class="btn btn-success" name="login">Đăng nhập
							</button>
				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="clearfix" style="margin-bottom: 100px"></div>
			<!-- //news-and-events -->
		</div>
	</div>