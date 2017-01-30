<?php
$model=new News();
if(isset($_GET['id'])){
	$news=$model->findByPk($_GET['id']);
}
?>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
	<div class="panel panel-heading">
		News Form
	</div>
	<div class="panel-body">
	<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data" name="submitfrm" novalidate>
		<div class="form-group">
				<label class="control-label">Enter News Title:</label>
				<?php echo HTML::inputText((isset($news['title'])?$news['title']:''),array("placeholder"=>"Enter Service Name ",'class'=>"form-control",'id'=>'name','name'=>'news[title]','required'=>''));?>
		</div>
		<div class="form-group">&nbsp</div>
		<div class="form-group">
			<?php 
					if(isset($news['file_name'])){
			?>
			<img class="img-responsive" height="200px" width="300px" src="../upload/news/<?php echo isset($news['file_name'])?$news['file_name']:''?>">

			<?php			
			}
			?>
			<div class="form-group"></div>

			<label class="control-label">Upload Images:</label>
				<input type="file" class="btn btn-primary" name="uploadfile" id="fileToUpload" value="<?php echo"upload/news/".(isset($news['file_name'])?$news['file_name']:'')?>">
		</div>
		<div class="form-group">&nbsp</div>
		<div class="form-group">
				<label class="control-label">Enter News Information:</label>
				<textarea name="news[content]" rows="5" cols="5" id="information" required class="form-control"><?php echo (isset($news['content']) ? $news['content']:'')?></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-primary" value="save">
		</div>


	</form>
	</div>
</div>

</div>