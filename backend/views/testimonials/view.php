<div class="form-group">
<a href="<?php echo HTML::url('testimonials/create',array('id'=>$testimonials['id']));?>" ><button class="btn btn-success">Update</button></a></td>	
	<a onClick="confirmBox()" href="<?php echo HTML::url('testimonials/delete',array('id'=> $testimonials['id']));?>"><button class="btn btn-danger">Delete</button></a>
</div>
<?php
$model=new Testimonial();
if(isset($_GET['id'])){
	$testimonial=$model->findByPk($_GET['id']);
}
?>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
	<div class="panel-body">
			<div class="form-group">
				<p> <?= $testimonial['content']?></p>
					<p class="text-right"><strong><?= $testimonial['author']?></strong></p>
				
				
			</div>
			
	</div>
</div>

</div>