<?php
$model=new Result();
if(isset($_GET['id'])){
	$result=$model->findByPk($_GET['id']);
}
?>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
	<div class="panel panel-heading">
		Result Form
	</div>
	<div class="panel-body">
	<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" id="formid" enctype="multipart/form-data" name="submitfrm" novalidate>
		
		<div class="form-group">
				<label class="control-label">Enter Student Name :</label>
				<?php echo HTML::inputText((isset($result['name']) ? $result['name']:''),array("placeholder"=>"Enter Student Name",'class'=>"form-control",'name'=>'result[name]','id'=>'name','required'=>''));?>
		</div>
		<div class="form-group">&nbsp</div>	
		<div class="form-group">
			<?php 
					if(isset($result['image'])){
			?>
			<img class="img-responsive" height="200px" width="300px" src="../upload/result/<?php echo isset($result['image'])?$result['image']:''?>">

			<?php			
			}
			?>
			<div class="form-group">&nbsp</div>	
			<label class="control-label">Upload Images:</label>
			<input type="file" name="uploadfile" class="btn btn-primary" id="fileToUpload" value="<?php echo "upload/result/".(isset($result['image']) ?   $result['image']:'')?>">
		</div>
			<div class="form-group">&nbsp</div>
			<div class="form-group">
				<label class="control-label">Enter Mark:</label>
				<?php echo HTML::inputText((isset($result['mark']) ? $result['mark']:''),array("placeholder"=>"Enter Student Name",'class'=>"form-control",'id'=>'mark','name'=>'result[mark]','type'=>'number','required'=>''));?>
			</div>
				<div class="form-group">&nbsp</div>
			<div class="form-group">
				<label class="control-label">Enter Class:</label>
				<?php echo HTML::inputText((isset($result['class']) ? $result['class']:''),array("placeholder"=>"Enter Student Class",'class'=>"form-control",'id'=>'class','name'=>'result[class]','required'=>''));?>
			</div>
			<div class="form-group">&nbsp</div>
			<div class="form-group">
				<label class="control-label">Enter Comment:</label>
				<textarea  id="information" name="result[comment]" rows="5" cols="4" class="form-control" required ><?php echo (isset($result['comment']) ? $result['comment']:'')?></textarea>
			</div>
			<div class="form-group">&nbsp</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="save">
			</div>


	</form>
	</div>
</div>

</div>