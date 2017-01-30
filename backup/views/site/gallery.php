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
								<img src="<?php echo "upload/gallery/". $gallery['name']?>" alt=""/>
								<div class="mask">
									<h3>Our Gallery</h3>
									<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
								</div>
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


