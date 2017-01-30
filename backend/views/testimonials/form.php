<?php
$model=new Testimonial();
if(isset($_GET['id'])){
	$testimonial=$model->findByPk($_GET['id']);
}
?>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
	<div class="panel panel-heading">
		Testinomial Form
	</div>
	<div class="panel-body">
	<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" name="submitfrm" novalidate>
		
			<div class="form-group">
				<label class="control-label">Enter Testimonial Content:</label>
				<textarea  id="content" name="testimonial[content]" rows="5" cols="4" minlength="200" maxlength="250" class="form-control" required ><?php echo (isset($testimonial['content']) ? $testimonial['content']:'')?></textarea>
			</div>
			<div class="form-group">&nbsp</div>
			<div class="form-group">
				<label class="control-label">Enter Author Name :</label>
				<?php echo HTML::inputText((isset($testimonial['author']) ? $testimonial['author']:''),array("placeholder"=>"Enter Author Name",'class'=>"form-control",'name'=>'testimonial[author]','id'=>'author','required'=>''));?>
			</div>
			<div class="form-group">&nbsp</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="save">
			</div>


	</form>
	</div>
</div>

</div>