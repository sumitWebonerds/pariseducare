<div id="myCarousel" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner" role="listbox">
      <?php $i=0; foreach($slider as $slider){?>
      
          <?php if($slider['status']){
           ?>
              <div class="item active">
                <img  class="img-responsive" alt="inmage not display" src="<?php echo "upload/".$slider['name'];?>" >
         
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p><?php echo $slider['caption'];?></p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>
              </div>
               <?php } else{ ?>
              <div class="item">
                <img class="img-responsive" alt="inmage not display" src="<?php echo "upload/".$slider['name'];?>" >
         
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p><?php echo $slider['caption'];?></p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>
              </div>
           <?php } ?>         
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
