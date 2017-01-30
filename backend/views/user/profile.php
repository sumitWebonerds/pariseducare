<?php
	//print_r($_SESSION['user']); 
	// 	foreach ($value as $user) {
	// 		$name=$value['name'];
	// 		$email=$value['email'];
	// 		$password=$value['password'];
	// 		$address=$value['address'];
	// 		$contact=$value['contact'];
 //}
 ?>
	

	<div class="col-md-8 col-md-offset-2 well">				
		<div class="form-group">
			<div class="col-md-4">
				<lable class="control-lable">Name :</lable>
			</div>
			<div class="col-md-8">
				<?php  echo($_SESSION['user']['name']);?>
			</div>
		</div>
		<div class="clearfix">&nbsp</div>
		<div class="form-group">
			<div class="col-md-4">
				<lable class="control-lable">Email:</lable>
			</div>
			<div class="col-md-8">
				<?php echo ($_SESSION['user']['email']);?> 
			</div>
		</div>
		<div class="clearfix">&nbsp</div>
		<div><?php $password?></div>
		<div class="form-group">
			<div class="col-md-4">
				<lable class="control-lable">Address :</lable>
			</div>
			<div class="col-md-8">
				<?php echo ($_SESSION['user']['address']);?>
			</div>	
		</div>
		<div class="clearfix">&nbsp</div>
		<div class="form-group">
			<div class="col-md-4">
				<lable class="control-lable">Contact :</lable>
			</div>
			<div class="col-md-8">
				<?php echo ($_SESSION['user']['contact']);?>
			</div>
		</div>
		<div class="clearfix">&nbsp</div>
		<div class="form-group">
			<div class="col-md-4">
				<lable class="control-lable">Site Name:</lable>
			</div>
			<div class="col-md-8">
				<?php echo ($_SESSION['user']['site_name']);?>
			</div>
		</div>
		<div class="form-group col-md-6 col-md-offset-6">
			<a class="btn btn-success btn-xs pull-right" href="<?php echo HTML::url('user/create',array('id'=>$_SESSION['user']['id']));?>">Update</a>
		</div>
	</div>