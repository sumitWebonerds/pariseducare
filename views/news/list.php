
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 ">
			<div class="news">
				<div class="news-title">
					<h3><?= $news['title'] ?></h3>
				</div>
				<div class="news-photo">
					<img src="upload/news/<?= $news['file_name']?>" class="img-responsive thumbnail news-img">
				</div>
				<div class="news-content">
					<?= $news['content'] ?>
				</div>
				<div class="date-time-1">
					<i class="fa fa-calender-o" class="icon-color"></i> Date : <?= $news['date'] ?>
					<i class="fa fa-clock-o" class="icon-color"></i> Time : <?= $news['time'] ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
				<div class="news">
					<h3>Similar</h3>
					<?php 
						foreach ($similar as $similar) {
						if($_GET['id']!=$similar['id']){
					
					?>

					
					<a href="<?php echo HTML::url("news/list",array('id'=>$similar['id']));?>"><img src="upload/news/<?= $similar['file_name']?>" class="img-responsive thumbnail similar-img"></a>
					<a href="<?php echo HTML::url("news/list",array('id'=>$similar['id']));?>" class="pull-left similar-news-title"><?php if(strlen($similar['title'])<=25){
											echo substr($similar['title'],0,25);	
										}else{
											echo substr($similar['title'],0,25)." [...]";
										}?></a><!-- 
					<a href="<?php echo HTML::url("news/list",array('id'=>$news['id']));?>" class="pull-right smiliar-read">Read More</a> -->
					<?php
				}
						}

					 ?>
				</div>
		</div>
	</div>
</div>