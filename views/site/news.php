<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php 
			foreach($news as $news)
			{
		?>
				<div class="row">
					<div class="col-md-4 post-img">
						<img src="upload/news/<?= $news['file_name']?>" class="img-responsive thumbnail">
					</div>				
					<div class=" col-md-8 content">
						<h3 class="news-title"><a href="<?php echo HTML::url("news/list",array('id'=>$news['id']));?>"><?= $news['title']?></a></h3>
						<p><?= substr($news['content'],0,400 )?></p>
					
						<div class="date-time">
							<i class="fa fa-calender-o" class="icon-color"></i> Date : <?= $news['date'] ?>
							<i class="fa fa-clock-o" class="icon-color"></i> Time : <?= $news['time'] ?>
						</div>
						<div class="col-md-offset-8 btn-readmore">
							<a href="<?php echo HTML::url("news/list",array('id'=>$news['id']));?>" class="pull-right  btn btn-default">Read More</a>
						</div>
					</div>
					<div class="clearfix">&nbsp;</div>
				</div>
		<?php		
			}
		?>
		</div>
	</div>
	<?php
							$pagLink = "<nav><ul class='pagination'>";  
							for ($i=1; $i<=$total_pages; $i++) {  
				             	$pagLink .= "<li><a href='{$BASE_PATH}/index.php?a=site/news&page=".$i."'>".$i."</a></li>";  
							};  
							echo $pagLink . "</ul></nav>";
						?>
</div>