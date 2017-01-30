<div class="services">
	
	<div class="container-fluid">
	<div class="services-icon col-md-1 hidden-xs hidden-sm">
		<img src="assets/images/abc.png">
		<img src="assets/images/class.png">
		<img src="assets/images/abacus.png">
		<img src="assets/images/judo.png">
		<img src="assets/images/summer.png">
		<img src="assets/images/camping-tent.png">
	</div>
		<div class="main-service col-md-8 col-md-offset-1">
			<?php 
				foreach($service as $service)
				{
			?>		
					<div class="service-name col-xs-12 col-sm-8 col-md-4 col-md-offset-5">
						<h3 class="service-title"><?= $service['name'] ?></h3>
					</div>
					<div class="service-content col-xs-12 col-sm-8 col-md-12">
						<?php echo $service['information']; ?>
					</div>
			<?php	
				}
			?>
			<div class="clearfix"></div>
		</div>
		<div class="services-icon col-md-1 pull-right hidden-xs hidden-sm">
			<img src="assets/images/children-faces.png">
			<img src="assets/images/classroom.png">
			<img src="assets/images/language.png">
			<img src="assets/images/taekwondo.png">
			<img src="assets/images/art.png">
			<img src="assets/images/dancing.png">
		</div>
	</div>
</div>
