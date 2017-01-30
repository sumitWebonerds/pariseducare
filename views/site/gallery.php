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
							<?php 

							 ?>
							<div class="view view-tenth">
							<a href="<?php echo "upload/gallery/". $gallery['name']?>" data-lightbox="paridaycare">
								<img alt="<?php echo $gallery['title'];?>" src="<?php echo "upload/gallery/". $gallery['name']?>" style="width:100%;height: 300px;" title="<?php echo $gallery['title'];?>" /></a>
								<!-- <div class="mask">
									<h3><?php echo $gallery['title'];?></h3>
									<p><?php echo (!empty($gallery['description']))?$gallery['description']:'';?></p>
								</div> -->
							</div>
							<?php } ?>

							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>


