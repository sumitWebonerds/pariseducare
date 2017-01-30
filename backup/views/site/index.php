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
                <img  class="img-responsive" alt="inmage not display" src="<?php echo "upload/".$slider['name'];?>" >
         
                <div class="container">
                  <div class="carousel-caption  hidden-xs">
                    <p><?php echo $slider['caption'];?></p>
                    <p><a class="btn btn-lg btn-primary hidden-xs hidden-sm" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>
              </div>        
          <?php $i++; } ?>
          <ol class="carousel-indicators">
          <?php for($j=0;$j<=$i;$j++){ ?>
          
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

<div class="welcome">
	<div class="container">
		<h2>Welcome To Pari&#39;s Day Care</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	</div>
</div>
<!--/welcome-->
<div class="welcome-grids">
	<div class="container">
		<div class="w3-row">
		<div class="welcome-gridsinfo">
		<?php foreach($service as $service){?>
		<div class="col-xs-4 col-sm-4  col-md-4 col-lg-4  space thumbnail">			
			<h3><?php echo $service['name'];?></h3>
			<p><?php echo $service['information'];?></p>
				<a class="pull-right" href="#"> Read More ></a>		
		</div>
		<?php } ?>
		<!-- <div class="clearfix"> </div> -->
		</div>
	</div>
</div>
<!--effect-grid-->

<div class="effect-grid">
	<div class="container">
		<ul class="grid cs-style-5">
			<?php foreach($gallery as $gallery){ ?>
				<li>
					<figure>
                            <img src="<?php echo "upload/gallery/". $gallery['name'];?>" alt="img04">
						<figcaption>
							<h3>Preparing</h3>
							<span>Jacob Cummings</span>
							<a href="about.html">Read More</a>
						</figcaption>
					</figure>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="container">
	<div class="testimonials">
			<div class="testimonial-nfo">
				<h3>Testimonials</h3>	
			</div>
			<div class="testimonal-grids">
			<?php foreach ($testimonial as $testimonial) {?>
				<div class=" col-md-4 testimonial-grid">
					<div class="testi-info">
						<p><span>&#34;</span> <?php echo $testimonial['content']?><span> &#34;</span>
						</p>
						<p style="font-size:20px; text-align:right;"><?php echo $testimonial['author']?></p>					
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="pull-right">
				<a href="<?php echo url::to("site/testimonial")?>">View More >></a>
			</div>
	</div>
</div>
<!--specfication-->
<div class="news">
		<div class="container">
			<div class="news-text">
				<h3>Latest News</h3>
			</div>
			<div class="news-grids">
			<?php foreach($news as $news) { ?>
				<div class="col-md-3 news-grid">
					<a href="#"><h4><?php echo $news['title']?></h4></a>
					<span><?php echo $news['time']?>| <?php echo $news['date']?></span>
                                        <a href="#" class="mask"><img src="<?php echo "upload/news/".$news['file_name'];?>" alt="image" class="img-responsive zoom-img"></a>
					<div class="news-info">
						<p><?php echo $news['content'];?></p>
					</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--/specfication-->
