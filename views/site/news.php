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
						<div class="col-md-offset-8 readmore">
							<a href="<?php echo HTML::url("news/list",array('id'=>$news['id']));?>" class="pull-right">Read More</a>
						</div>
					</div>
				</div>
		<?php		
			}
		?>
		</div>
	</div>
</div>