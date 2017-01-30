<div class="container">
<div class="news-grids">
<?php

?>
				<?php foreach($result as $result) {?>
					<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 news-grid">
	                   	<div class="col-md-12 card">
						 <!--Card image-->
						 <img  class="img-responsive res-img" src="<?php echo "upload/result/".$result['image'];?>"  alt="<?php echo $result['name'];?>" >
						        <a href="#">
						            <div class="mask"></div>
						        </a>
						    
						    <div>
						        <ul class="res-detail">
								  <li>Name: <?php echo $result['name'];?></li>
								  <li>Class: <?php echo $result['class'];?></li>
								  <li>Mark : <?php echo $result['mark'];?></li>
								  <p class="text-center" style="font-size:14px"><?php echo $result['comment'];?></p>
								</ul>
						    </div>
						</div>
					</div>
					<?php } ?>
					<div class="clearfix"> </div>
			</div>
			</div>
		
		<div class="clearfix"> &nbsp;</div>