<div class="banner-bottom">
	<div class="container">
		<div class="row">Tìm thấy <?=count($data)?> kết quả</div>
		<div class="row">
			<div class="news">
				<div class="news-grids">

					<div class="col-md-12 news-grid-left">
						<ul>
						<?php 
						foreach($data as $news){

						
						?>
							<li>
								<div class="news-grid-left1">
									<img src="public/images/tintuc/<?=$news->Hinh?>" alt=" " class="img-responsive" />
								</div>
								<div class="news-grid-right1">
									<h4><a href="chitiet.php?id=<?=$news->id?>"><?=$news->TieuDe?></a></h4>
									<h5><i><?=date("d-m-Y",strtotime($news->created_at))?></i></h5>
									<p><?=$news->TomTat?></p>
								</div>
								<div class="clearfix"> </div>
							</li>
						<?php
						}
						?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>