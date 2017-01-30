<div class="testimonial-nfo">
	<h3>Testimonials</h3>	
</div>
<?php  foreach($testimonial as $testimonial){?>
<div class="row">
	<div class="testimonials">
			<div class="testimonal-grids">
				<div class="testimonial-grid">
					<div class="testi-info">
						<p><span>&#34;</span> <?php echo $testimonial['content']?><span> &#34;</span>
						</p>
						<p style="font-size:20px; text-align:right;"><?php echo $testimonial['author']?></p>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php } ?>
