<?php
$model=new Gallery();
if(isset($_GET['id'])){
	$gallery=$model->findByPk($_GET['id']);
}
?>
<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">
			Gallery Form
		</div>
		<div class="panel-body">
			<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data" name="submitfrm" novalidate>
				<div class="form-group">
					<?php 
						if(isset($gallery['name'])){
					?>
						<img class="img-responsive" height="200px" width="300px" src="../upload/gallery/<?php echo isset($gallery['name'])?$gallery['name']:''?>">

					<?php			
					}
					?>
					<div class="form-group"></div>
					<label class="control-label">Upload Images:</label>
					<input type="file" class="btn btn-primary" name="uploadfile" id="fileToUpload" >
				</div>
				<div class="form-group">&nbsp</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary" value="save">
				</div>
			</form>
		</div>
	</div>
</div>
