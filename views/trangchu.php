
<?php
$_Slide = $data['slide'];
$tinnoibat = $data['tinnoibat'];
$tinmoi_1 = $data['tinmoi_1'];
$tinmoi = $data['tinmoi'];
$the_loai = $data['theloai'];
?>
<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <?php
	   for($i=0;$i<count($_Slide);$i++){


	    ?>
	    <div class="item <?= $i==0?'active':''?>">
	      <img src="public/images/slide/<?=$_Slide[$i]->Hinh?>" alt="Chania">
	      <div class="carousel-caption">
	        <h3>Chania</h3>
	        <p><?=$_Slide[$i]->Ten?></p>
	      </div>
	    </div>
		<?php

		}
		?>
	  </div>

	  <!-- Left and right controls -->
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="move-text">
				<div class="breaking_news">
					<h2>Tin nổi bật</h2>
				</div>
				<div class="marquee">
				<?php
				foreach($tinnoibat as $noibat){

				?>
					<div class="marquee1"><a class="breaking" href="single.html"><?=$noibat->TieuDe?></a></div>
				<?php
				}
				?>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="public/js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<!-- video-grids -->
				<div class="video-grids">
					<div class="col-md-8 video-grids-left">
						<div class="video-grids-left1">
							<img src="public/images/tintuc/<?=$tinmoi_1->Hinh?>" alt=" " class="img-responsive" />
							
							<div class="video-grid-pos">
								<h3><?=$tinmoi_1->TieuDe?></h3>
								<ul>
									<li><?=date('d-m-Y H:i:s',strtotime($tinmoi_1->created_at))?></li>
									
								</ul>
							</div>
								
						</div>
						<div class="video-grids-left2">
							<div class="course_demo1">
								<ul id="flexiselDemo1">	
								<?php
								foreach($tinmoi as $tin){
								?>
									<li>
										<a href="chitiet.php?id=<?=$tin->id?>">
										<div class="item">
											<img style="height:150px" src="public/images/tintuc/<?=$tin->Hinh?>" alt=" " class="img-responsive"/>
											
											<div class="floods-text">
												<h3><?=$tin->TieuDe?></h3>
												
											</div>
										</div>
										</a>
									</li>
								<?php
								}
								?>
								</ul>
							</div>
							<!-- requried-jsfiles-for owl -->
								<script type="text/javascript">
								 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="public/js/jquery.flexisel.js"></script>
						</div>
					</div>

					<div class="col-md-4 video-grids-right">
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list resp-tab-item grid1 resp-tab-active">
									<span>Tin xem nhiều</span>
									<div class="clear"></div>
								</ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/10.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#">Blogger</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/11.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="green">international</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/12.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange">general</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/10.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange1">business</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/12.jpg" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="#" class="orange2">world</a> <label>|</label></li>
													<li>30.03.2016</li>
												</ul>
												<p><a href="#">Nam libero tempore, cum soluta nobis.</a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<script src="public/js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
								</script>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			<!-- //video-grids -->
			<!-- video-bottom-grids -->
				<div class="video-bottom-grids">
					<div class="video-bottom-grids1">
					<?php
					foreach($the_loai as $tl){
					?>
						<div class="col-md-4 video-bottom-grid">
							<div class="video-bottom-grid1" style="padding-bottom: 30px">
								<div class="video-bottom-grid1-before">
									<img style="height: 250px" src="public/images/tintuc/<?=$tl->image?>" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p><?=$tl->Ten?></p>
									</div>
								</div>
								<ul>
								<?php
								$loaitin = $tl->TenLoaitin;
								$arrLoaitin = explode(',', $loaitin);
								foreach($arrLoaitin as $loai){

								list($ten,$id,$alias) = explode(':', $loai);
								?>
									<li><a href="loaitin.php?id=<?=$id?>"><?=$ten?></a></li>
								<?php

								}
								?>
								</ul>
							</div>
						</div>
					<?php
					}
					?>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //video-bottom-grids -->
			
		</div>
	</div>
<!-- //banner-bottom -->