
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
			<a class="navbar-brand" href="index.php"><span>T</span> Trendy Blog</a>
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
				  	<li><a href="loaitin.php?id=<?=$id?>"><?php echo $ten;?></a></li>
				<?php
				}
				?>
				</ul>
			</li>

			<?php
			}
			?>
			
			<li><a href="contact.php">Liên hệ</a></li>
		</ul>
	</div>
</nav>