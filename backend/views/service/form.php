<?php 
$model=new Service();
if(isset($_GET['id']))
{
	$service =  $model->findByPk($_GET['id']); 
}
?>
<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
	<div class="panel-heading">
		Service Form
	</div>
	<div class="panel-body">
	<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" name="submitfrm" novalidate>
			<div class="form-group">
				<label for="name" class="control-label">Enter Service Name:</label>
				<?php echo HTML::inputText((isset($service['name'])?$service['name']:''),array("placeholder"=>"Enter Service Name ",'class'=>"form-control",'id'=>'name','name'=>'service[name]','required'=>''));?>
				
			</div>
			<div class="form-group">&nbsp</div>
			<div class="form-group">
				<label for="information" class="control-label">Enter Service Information:</label>
				<textarea class="form-control" id="servicetext" name="service[information]" rows="5" cols="5" placeholder="Enter Service Information" required><?php echo (isset($service['information']) ? $service['information']:'')?></textarea>
			</div>
			<div class="form-group">&nbsp</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit">
			</div>
	</form>
	</div>
</div>
