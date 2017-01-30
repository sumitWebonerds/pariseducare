<?php
$model=new Slider();
if(isset($_GET['id'])){
	$slider=$model->findByPk($_GET['id']);
}
?>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">
	Slider Form
</div>
<div class="panel-body">
	<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data" name="submitfrm" novalidate>

		<div class="form-group">
			<?php 
					if(isset($slider['name'])){
			?>
			<img class="img-responsive" height="200px" width="300px" src="../upload/<?php echo isset($slider['name'])?$slider['name']:''?>">

			<?php			
			}
			?>
			<div class="form-group"></div>
			
			<input type="file" class="btn btn-primary" name="uploadfile" id="fileToUpload" value="<?php echo isset($slider['name'])?$slider['name']:''?>">
			
		</div>
		<div class="form-group">&nbsp</div>
		<div class="form-group">
			<label class="control-label">Enter Caption:</label>
			<?php echo HTML::inputText((isset($slider['caption'])?$slider['caption']:''),array("placeholder"=>"Enter Caption",'class'=>"form-control",'required'=>'','id'=>'caption','name'=>'slider[caption]'));?>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-primary" value="Save">
		</div>


	</form>
</div>
</div>
</div>