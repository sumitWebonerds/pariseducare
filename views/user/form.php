<div class="col-md-8 col-md-offset-2">

	<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" name="cardFrm">
			<div class="form-group">
				<label class="control-label">Enter Name:</label>
				<?php echo HTML::inputText((isset($user['name'])?$user['name']:''),array("placeholder"=>"Name",'class'=>"form-control",'name'=>'user[name]'));?>
			</div>
			<div class="form-group">
				<label class="control-label">Enter Email:</label>
				<?php echo HTML::inputText((isset($user['email'])?$user['email']:''),array("placeholder"=>"email",'class'=>"form-control",'name'=>'user[email]'));?>
			</div>
			<div class="form-group">
				<label class="control-label">Enter Password:</label>
				<?php echo HTML::inputText((isset($user['password'])?$user['password']:''),array("placeholder"=>"phone",'class'=>"form-control",'name'=>'user[password]'));?>
			</div>
			<div class="form-group">
				<label class="control-label">Enter Conatct:</label>
				<?php echo HTML::inputText((isset($user['contact'])?$user['contact']:''),array("placeholder"=>"Contact",'class'=>"form-control",'name'=>'user[contact]'));?>
			</div>
			<div class="form-group">
				<label class="control-label">Enter address:</label>
				<?php echo HTML::inputText((isset($user['address'])?$user['address']:''),array("placeholder"=>"enter Address",'class'=>"form-control",'name'=>'user[address]'));?>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primray" value="Submit">
			</div>
	</form>
</div>

