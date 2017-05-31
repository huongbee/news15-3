
<nav class="navbar navbar-default">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
		<div class="logo">

			<input style="margin: 20px 20px 30px; float: left;" class="form-control txtSearch" type="text" value="" placeholder="Nhập từ khóa">
			<input style="float: left;top: 20px;position: absolute;" type="submit" class="btnSearch" value="Search">
		</div>
	</div>
	<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
			<li class="act"><a href="index.php" class="effect1 active">Trang chủ</a></li>

			<?php
			$_Theloai = $data['theloai'];
			foreach($_Theloai as $theloai){
			?>
			
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				  <?=$theloai->Ten?><span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
				<?php
					$loaitin = $theloai->TenLoaitin;
					$arrLoaitin = explode(',', $loaitin);
					foreach($arrLoaitin as $value){
						list($ten, $id,$alias) = explode(":", $value);
						//[$ten, $id,$alia] = explode(":", $value);
					
				?>
				  	<li><a href="<?=$id?>-<?=$alias?>"><?php echo $ten;?></a></li>
				<?php
				}
				?>
				</ul>
			</li>

			<?php
			}
			?>
			<li><a href="contact.php">Liên hệ</a></li>
			<?php

			if(isset($_SESSION['username'])){
			?>
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Chào bạn <?=$_SESSION['username']?>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="logout.php">Đăng xuất</a></li>
					</ul>
				</li>
			<?php
			}
			else{

			?>
			<li><a href="dang-ki">Đăng kí</a></li>
			<li><a href="login.php">Đăng nhập</a></li>
			<?php
			}

			?>
			
		</ul>
	</div>
</nav>