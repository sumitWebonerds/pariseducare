<a href="<?php echo HTML::url('admission/create');?>"><button class="btn btn-success">Add admission</button></a>
<div class="form-group"></div>
<div class="" style="overflow-x:auto;">
<table class="table table-responsive table-bordered" id="example">
	<thead>
		<th>Sr.No.</th>
		<th>Card No.</th>
		<th>Full Name</th>
		<th>Mother Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Telephone</th>
		<th>Email</th>
		<th>Address</th>
		<th>City</th>
		<th>View Reports</th>
		<th>Actions</th>
	</thead>
	<tbody>
		<?php 
		$i=1;
		foreach ($admission as $admission) {
		?>
		<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $admission['tracking_no'];?></td>
				<td><?php echo $admission['first_name'].' '.$admission['father_name'].' '.$admission['last_name'];?></td>
				<td><?php echo $admission['mother_name'];?></td>
			
				<td><?php echo $admission['age'];?></td>
				<td><?php 
				if($admission['gender']=='m'){
					echo "Boy";	
				}else{
					echo "Girl";
				}

				?></td>
				<td><?php echo $admission['telephone'];?></td>
				
				<td><?php echo $admission['email'];?></td>
				
				<td><?php echo $admission['address'];?></td>
				<td><?php echo $admission['city'];?></td>
				<td>
					<td>
					<a href="<?php echo $BASE_PATH;?>index.php?a=site/reports&id=<?php echo $admission['id'];?>" target="_BLANK" class="btn btn-info btn-xs">Check Report</a>
				</td>
				</td>
				<td>	<a href="<?php echo HTML::url('admission/create',array('id'=>$admission['id']));?>" ><button class="btn btn-info btn-xs">Update</button></a></td>
				<td>
					<a onClick="confirmBox()" href="<?php echo HTML::url('admission/delete',array('id'=> $admission['id']));?>"><button class="btn btn-danger btn-xs">Delete</button></a>
				</td>
		</tr>


		<?php $i++; }?>
		


	</tbody>


</table>
</div>