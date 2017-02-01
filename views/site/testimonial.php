<div class="banner banner5">
	<div class="container">
	<h2>Testimonials</h2>
	</div>
</div>
<div class="container">
<div class="row">
		<div class="testimonials ">
			<?php foreach ($testimonial as $testimonial) {
			?>
			
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="col-md-12 testimonial-information" style="border: solid 1px #ccc;">
					<div class="testimonial-author text-center">
					<?= $testimonial['author']?>
					</div>
					<div class="testimonial-content">
						<i class="fa fa-quote-left"></i>  <?= $testimonial['content']?>	
					</div>		
						
				</div>		
			</div>
			<?php	
			}
			?>			
		</div>
	</div>
	<div>&nbsp;</div>
	<?php
							$pagLink = "<nav><ul class='pagination'>";  
							for ($i=1; $i<=$total_pages; $i++) {  
				             	$pagLink .= "<li><a href='{$BASE_PATH}/index.php?a=site/testimonial&page=".$i."'>".$i."</a></li>";  
							};  
							echo $pagLink . "</ul></nav>";
						?>
</div>