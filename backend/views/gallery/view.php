<div class="form-group">
<a href="<?php echo HTML::url('gallery/create',array('id'=>$gallery['id']));?>" ><button class="btn btn-success">Update</button></a></td>	
	<a onClick="confirmBox()" href="<?php echo HTML::url('gallery/delete',array('id'=> $gallery['id']));?>"><button class="btn btn-danger">Delete</button></a>
</div>

<?php
$model=new Gallery();
if(isset($_GET['id'])){
	$gallery=$model->findByPk($_GET['id']);
}
?>
<div class="col-md-8 col-md-offset-2">
	<!-- <div class="panel panel-default">
		<div class="panel-body"> -->
			<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data" name="submitfrm" novalidate>
				<div class="form-group">
					<?php 
						if(isset($gallery['name'])){
					?>
						<img class="img-responsive img-thumbnail" src="../upload/gallery/<?php echo isset($gallery['name'])?$gallery['name']:''?>">

					<?php			
					}
					?>
			</form>
		<!-- </div>
	</div> -->
</div>
