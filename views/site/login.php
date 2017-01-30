<?php
	if(isset($_SESSION['email'])){
		$this->redirect("site/signup");
   		header("Location:signup.php");

	}
?>
	<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-8">
				<div class="form-group"></div>
				<div class="panel panel-default">
				  <div class="panel-heading"><h4>Login</h4></div>
				  <div class="panel-body">
					  	<form method="post" action="#">

					  		<div class="form-group">
					  			<label class="control-label">Enter UserName : </label>
					  			<input type="text" class="form-control" name="email">
					  		</div>
					  		<div class="form-group">
					  			<label class="control-label">Enter UserName :</label>
					  			<input type="password" class="form-control" name="password">
					  		</div>
					  		<div class="form-group footer-left ">
					  			<input type="submit" class="" name="submit" value="Login">
					  			<input type="submit" class="pull-right" name="submit" value="Register Here">

					  		</div>
					  		<div class="form-group footer-left ">
					  			<a href="#">Forgot Password?</a>
					  		</div>

					  	</form>
				  	</div>
				  	</div>
				  	</div>
				  	</div>
				  	</div>