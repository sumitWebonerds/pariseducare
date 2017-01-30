<div class="welcome-grids">
	<div class="container">
	<div class="row">
		<div class="welcome-gridsinfo">
			<?php foreach ($service as $service) {?>
			<div class="col-md-3 space thumbnail">			
				<h3><?php echo $service['name'];?></h3>
				<p><?php echo $service['information'];?></p>	
			</div>
			<?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
</div>