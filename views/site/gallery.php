<div class="banner banner5">
	<div class="container">
	<h2>Gallery</h2>
	</div>
</div>
			<div class="gallery">
				<div class="content">
					<div class="container">
						<div class="gallery">
							<div class="gallery-top">
								<?php foreach ($gallery as $gallery) {?>	
								<div class="view view-tenth">
									<a href="<?php echo "upload/gallery/". $gallery['name']?>" data-lightbox="paridaycare">
									<img alt="<?php echo $gallery['title'];?>" src="<?php echo "upload/gallery/". $gallery['name']?>" style="width:100%;height: 300px;" title="<?php echo $gallery['title'];?>"  class="img-fluid img-responsive"/></a>
									
								</div>
								<?php } ?>

							</div>
							<div class="clearfix"> </div>
						</div>
						<?php
							$pagLink = "<nav><ul class='pagination'>";  
							for ($i=1; $i<=$total_pages; $i++) {  
				             	$pagLink .= "<li><a href='{$BASE_PATH}/index.php?a=site/gallery&page=".$i."'>".$i."</a></li>";  
							};  
							echo $pagLink . "</ul></nav>";
						?>
					</div>

				</div>
				
			</div>
			 
	

