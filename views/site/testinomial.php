<div class="container-fluid">

	<div class="testimonials">
			<div class="testimonial-info">
				<h3>Testimonials</h3>	
			</div>
		
			<?php  foreach ( $testimonial as $testimonial) {?>
					<div class="form-group">
					<div class="testimonal-grids">
						<div class="testimonial-grid">
							<div class="testi-info">
								<p><span>&#34;</span> <?php echo $testimonial['content']; ?><span> &#34;</span>
								</p>
								<p style="font-size:20px; text-align:right;"><?php echo $testimonial['author'];?></p>					
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

	</div>
	<div class="form-group"></div>
