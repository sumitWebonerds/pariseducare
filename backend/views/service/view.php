<div class="form-group">
<a href="<?php echo HTML::url('service/create',array('id'=>$service['id']));?>" ><button class="btn btn-success">Update</button></a></td>	
	<a onClick="confirmBox()" href="<?php echo HTML::url('service/delete',array('id'=> $service['id']));?>"><button class="btn btn-danger">Delete</button></a>
</div>
<?php 
$model=new Service();
if(isset($_GET['id']))
{
	$service =  $model->findByPk($_GET['id']); 
}
?>
<div class="col-md-9 col-md-offset-2">
	<div class="panel panel-default">
    	<div class="panel-body">
            <div><label>Service Name:</label> <?= $service['name']?></div>
            <div>&nbsp;</div>
            <div><label>Service Information:</label>
            <div class="form-group"><p><?= $service['information']?></p></div>
            
            </div>
			
	</div>
</div>
</div>
