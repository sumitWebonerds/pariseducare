<!---Carousel -->
<section class="slider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner" role="listbox">
      <?php $i=0; foreach($slider as $slider){
           if($i===0){
             $a="item active";
            }
            else{
               $a="item";
            }
            ?>
              <div class="<?php echo $a ?>">
                <img  class="img-responsive" alt="Paris EduCare" src="<?php echo "upload/".$slider['name'];?>" >
         
                <div class="container">
                  <div class="carousel-caption  hidden-xs">
                    <p><?php echo $slider['caption'];?></p>
                  </div>
                </div>
              </div>        
          <?php $i++; } ?>
          <ol class="carousel-indicators">
          <?php for($j=0;$j<$i;$j++){ ?>
          
            <li data-target="#myCarousel" data-slide-to="<?php echo $j ;?>" ></li>
         
       <?php } ?>
        </ol>
         </div>

 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
 </div>
</section>
<!-- /Carousel -->
<div class="welcome">
	<div class="container">
		<h2>Welcome To Pari&#39;s EduCare</h2>
		<p>"Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid." - Albert Einstein</p>
	</div>
</div>
<!--/welcome-->
<div class="welcome-grids">
	<div class="container">
		<div class="row">
		<div class="services-text">
			<h3>Services</h3>
		</div>
		<div class="welcome-gridsinfo">
		<?php foreach($service as $service){?>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
			<div class="col-md-12 service-information" style="border: solid 1px #ccc;">
			<h3><?php echo $service['name'];?></h3>
			<div class="info">
				<?php
					if(strlen($service['information'])>30){
					 echo substr($service['information'],0,250);
					}
				?>
			</div>		
			<div class="btn-readmore">
				<a class="pull-right btn btn-default" href="<?php echo url::to("site/service");?>"> Read More</a>	
			</div>	
				
				
			</div>		
		</div>
		<?php } ?>
		<!-- <div class="clearfix"> </div> -->
		</div>
	</div>
</div>
<!--effect-grid-->

<div class="effect-grid">
	<div class="container">
	<div class="gallery-text">
		<h3>Gallery</h3>
	</div>
		<ul class="grid cs-style-5">
			<?php foreach($gallery as $gallery){ ?>
				<li>
					<figure>
                            <img src="<?php echo "upload/gallery/". $gallery['name'];?>" alt="img04" class="grid-img">
						<figcaption>
							<a href="<?php echo url::to("site/gallery"); ?>">View More</a>
						</figcaption>
					</figure>
				</li>
			<?php } ?>
		</ul>
	</div>                                                   
</div>
<!-- Testimonials -->
<?php 
	if(empty($testimonial))
	{
		echo '';
	}
	else if(!empty($testimonial))
	{
	?>
			<div class="container">
				<div class="testimonials">

					<div class="testimonial-text">
							<h3>Testimonials</h3>	
						</div>
						<div class="testimonal-grids">
						<?php foreach ($testimonial as $testimonial) {?>
							<div class=" col-md-4 testimonial-grid">
								<div class="testi-info">
									<p><span>&#34;</span>
										<?php
										if(strlen($testimonial['content'])>30){
										 echo substr($testimonial['content'],0,200);
										}?>
									</p>
									<p style="font-size:20px; text-align:right;"><?php echo $testimonial['author']?></p>					
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="pull-right btn-readmore">
							<a href="<?php echo url::to("site/testimonial")?>" class="btn btn-default ">View More >></a>
						</div>		
				</div>
			</div>
<?php
}
?>
<!--/Testimonials -->
<!--specfication-->
<div class="news">
		<div class="container">
			<div class="news-text">
				<h3>Latest News</h3>
			</div>
			<div class="news-grids">
			<?php foreach($news as $news) { ?>
				<div class="col-md-3 news-grid">
					<a href="<?php echo HTML::url("news/list",array('id'=>$news['id'])); ?>"><h4><?php //echo $news['title'];
										//echo strlen($news['title']);
										if(strlen($news['title'])<=25){
											echo substr($news['title'],0,25);	
										}else{
											echo substr($news['title'],0,25)." [...]";
										}
										
					?></h4></a>
					<span><?php echo $news['time']?>| <?php echo $news['date']?></span>
                                        <a href="#" class="mask"><img src="<?php echo "upload/news/".$news['file_name'];?>" alt="EduCare Coaching" class="img-responsive zoom-img"></a>
					<div class="news-info">
						<p>
						<?php
							if(strlen($news['content'])>30){
							 echo substr($news['content'],0,300);
							}?>
					</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--/specfication-->
