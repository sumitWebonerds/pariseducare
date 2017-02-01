<div class="form-group">
<a href="<?php echo HTML::url('result/create',array('id'=>$result['id']));?>" ><button class="btn btn-success">Update</button></a></td>	
	<a onClick="confirmBox()" href="<?php echo HTML::url('result/delete',array('id'=> $result['id']));?>"><button class="btn btn-danger">Delete</button></a>
</div>
<?php
$model=new Result();
if(isset($_GET['id'])){
	$result=$model->findByPk($_GET['id']);
}
?>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
	<div class="panel-body">
	   <?php 
					if(isset($result['image'])){
			?>
			<img class="img-responsive img-thumbnail center-block" src="../upload/result/<?php echo isset($result['image'])?$result['image']:''?>">
            
            <div class="form-group col-md-offset-2">
            	<h4>Student Name: <?= $result['name']?></h4>
            	<h4>Mark: <?= $result['mark']?></h4>
            	<h4>Class: <?= $result['class']?></h4>
            </div>

        <?php			
			}
			?>


	</div>
</div>

</div>