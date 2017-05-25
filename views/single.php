<?php
include('inc/function.php');

$chitiettin = $data['chitiettin'];
$comment = $data['comment'];

//print_r($chitiettin);
$ngay = date('d',strtotime($chitiettin->created_at));
$thang = (int)date('m',strtotime($chitiettin->created_at));
$thang = getMonth($thang);
//echo $thang; die;
?>
<div class="single">
	<div class="container">
		<div class="single-grid">
			<div class="col-md-8 blog-left">
				<div class="blog-left-grid">
					<div class="blog-leftl">
						<h4><?=$thang?> <span><?=$ngay?></span></h4>
						<a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>10</a>
					</div>
					<div class="blog-leftr">
						<img src="public/images/tintuc/<?=$chitiettin->Hinh?>" alt=" " class="img-responsive" />
						<p><?=$chitiettin->NoiDung?></p>
						<ul>
							<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>User Name</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>0 Tages</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i>10 Comments</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<div class="admin-text">
							<h5>Written By Admin Name</h5>
							<div class="admin-text-left">
								<a href="#"><img src="public/images/icon1.png" alt=""/></a>
							</div>
							<div class="admin-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<span>View all posts by:<a href="#"> Admin </a></span>
							</div>
							<div class="clearfix"> </div>
					</div>
					<div class="response">
						<h4>Bình luận</h4>
						<?php
						foreach($comment as $binhluan){


						?>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="<?=$binhluan->avatar?>" alt="" style="width: 70px"/>
								</a>
								<h5><a href="#"><?=$binhluan->name?></a></h5>
							</div>
							<div class="media-body response-text-right">
								<p><?=$binhluan->NoiDung?></p>
								<ul>
									<li><?=date('d-m-Y H:i',strtotime($binhluan->created_at))?></li>
								</ul>		
							</div>
							<div class="clearfix"> </div>
						</div>
						<?php
						}
						?>
					</div>	
					<div class="coment-form">
						<h4>Leave your comment</h4>
						<form >
							<input type="hidden" id="id_user" value="<?=isset($_SESSION['id_user'])?$_SESSION['id_user']:''?>">
							<input type="hidden" id="id_tin" value="<?=$_GET['id']?>">
							<textarea id="noidung" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
							<input type="button" value="Submit Comment" id="guibinhluan" >
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog-right">
				<h3>Categories</h3>
				<ul>
					<li><a href="#">Aliquam erat volutpat</a></li>
					<li><a href="#">Integer rutrum ante eu lacus</a></li>
					<li><a href="#">Cum sociis natoque penatibus</a></li>
					<li><a href="#">Mauris fermentum dictum magna</a></li>
					<li><a href="#">Sed laoreet aliquam leo</a></li>
					<li><a href="#">Cum sociis natoque penatibus</a></li>
				</ul>
				<div class="recent">
					<h3>Recent Comments</h3>
					<div class="recent-grids">
						<div class="recent-grid">
							<div class="wom">
								<a href="#"><img src="public/images/6.jpg" alt=" " class="img-responsive" /></a>
							</div>
							<div class="wom-right">
								<h4><a href="#">Integer rutrum ante eu</a></h4>
								<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
									Ut tellus dolor, dapibus eget.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="recent-grid">
							<div class="wom">
								<a href="#"><img src="public/images/7.jpg" alt=" " class="img-responsive" /></a>
							</div>
							<div class="wom-right">
								<h4><a href="#">Integer rutrum ante eu</a></h4>
								<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
									Ut tellus dolor, dapibus eget.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="recent-grid">
							<div class="wom">
								<a href="#"><img src="public/images/8.jpg" alt=" " class="img-responsive" /></a>
							</div>
							<div class="wom-right">
								<h4><a href="#">Integer rutrum ante eu</a></h4>
								<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
									Ut tellus dolor, dapibus eget.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#guibinhluan').click(function(){
		var noidung = $('#noidung').val();
		var id_user = $('#id_user').val();
		var id_tin = $('#id_tin').val();
		$.ajax({
			url:'http://localhost/news/comment.php',
			data:{
				noidungbinhluan:noidung,
				id_nguoidung:id_user,
				id_tintuc:id_tin
			},
			type:'GET',
			success:function(){
				console.log("thành công")
			},
			error:function(){
				console.log('lỗi');
			}
		})
	})
	
})
</script>