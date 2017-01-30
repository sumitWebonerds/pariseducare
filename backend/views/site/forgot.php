
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-default">

 	<div class="panel-heading">
 	 	Forgot Password
 	</div>

 	<div class="panel-body">
	<form method="post" action="<?php  echo $_SERVER['REQUEST_URI']; ?>">
		<div class="form-group">
			<input type="email" name="email" class="form-control" placeholder="Enter registered email address">	
		</div>
		<div class="form-group footer-left ">
			<input type="submit" class="btn btn-info" name="submit" value="Submit">
			 <a class="pull-right" href="<?php echo url::to('testimonials/list');?>">Back ToLogin</a>
		</div>
	</form>

	</div>
	</div>

</div>