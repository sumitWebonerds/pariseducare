<?php $model = new User;
	  if(isset($_SESSION['user'])){
	  		 
             $id = $_SESSION['user']['id']; 
	  		
	  		$user = $model->findByPk($id);

	  }
 ?>
<div class="clearfix">&nbsp;&nbsp;</div>
<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" name="cardFrm">
		<div class="row">
			<div class="col-xs-offset-1 col-xs-5 ">
				<div class="form-group">						
				<label class="control-label">Name:</label>
						<?php echo HTML::inputText((isset($user['name'])?$user['name']:''),array("placeholder"=>"Name",'class'=>"form-control",'name'=>'user[name]'));?>						
				</div>
			</div>
			<div class="col-xs-offset-1 col-xs-5">
				<div class="form-group">	
					<label class="control-label ">Email:</label>				
						<?php echo HTML::inputText((isset($user['email'])?$user['email']:''),array("placeholder"=>"email",'class'=>"form-control",'name'=>'user[email]'));?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-5 ">
				<div class="form-group">
					<label class="control-label ">Contact:</label>					
					<?php echo HTML::inputText((isset($user['contact'])?$user['contact']:''),array("placeholder"=>"Contact",'class'=>"form-control",'name'=>'user[contact]'));?>					
				</div>
			</div>
			<div class="col-xs-offset-1 col-xs-5 ">
				<div class="form-group">
					<label class="control-label ">Address:</label>					
					<textarea placeholder="enter Address" class="form-control" name="user[address]" ><?php echo (isset($user['address'])?$user['address']:'');?></textarea>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-5 ">
				<div class="form-group">						
				<label class="control-label ">Password</label>	
						<input type="password" readonly class="form-control" name="user[password]" value="<?php echo (isset($user['password'])?$user['password']:'');?>">	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-5 ">
				<div class="form-group">						
				<label class="control-label ">Site Name</label>	
						<input type="text" class="form-control" name="user[site_name]" value="<?php echo (isset($user['site_name'])?$user['site_name']:'');?>">	
				</div>
			</div>
		</div>		
		<div class="form-group " align="center">
					<input type="submit" class="btn btn-info" value="Submit">

					<input type="reset" class="btn btn-info" value="Reset">
				</div>
		</form>
	</div>
</div>

