<div class="welcome-grids">
	<div class="container">
		<div>
			<?php foreach ($service as $service) {?>
			<div>			
				<h3><u><?php echo $service['name'];?>:</u></h3>
				<p class="lead" style="font-size:15px;line-height:1.428"><?php echo $service['information'];?></p>	
			</div>
			<?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
</div>