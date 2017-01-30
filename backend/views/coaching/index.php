<a href="<?php echo HTML::url('coaching/create');?>"><button class="btn btn-success">Add coaching</button></a>
<div class="form-group"></div>
<div class="" style="overflow-x:auto;">
<table class="table table-responsive table-bordered">
	<thead>
	
		<th>Sr.no.</th>
		<th>Card No.</th>
		<th>Name</th>
		<th>Dob</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Res. Mobile</th>
		<th>school</th>
		<th>Address</th>
		<th>Subject</th>
		<th>View Report</th> 
		<th colspan="2">Actions</th>
		
		
		
	</thead>
	<tbody>
		<?php 
		$i=1;
		foreach ($coaching as $coaching) {
		?>
		<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $coaching['tracking_no'];?></td>
				<td><?php echo $coaching['name'];?></td>
				<td><?php echo $coaching['dob'];?></td>
				<td><?php 
				if($coaching['gender']=='m'){
					echo 'Male';
				}else{
					echo 'Female';
					}?></td>
				<td><?php echo $coaching['email'];?></td>
				<td><?php echo $coaching['mobile'];?></td>
				<td><?php echo $coaching['res_mobile'];?></td>
				<td><?php echo $coaching['school_name'];?></td>
				<td><?php echo $coaching['address'];?></td>
				<td><?php echo $coaching['subject'];?></td>

				<td>
					<a href="<?php echo $BASE_PATH;?>index.php?a=site/reports&coaching_id=<?php echo $coaching['id'];?>" target='_BLANK' class="btn btn-info btn-xs">Check Report</a>
				</td>
				<td>	<a href="<?php echo HTML::url('coaching/create',array('id'=>$coaching['id']));?>" ><button class="btn btn-info btn-xs">Update</button></a></td>
				<td>
					<a onClick="confirmBox()" href="<?php echo HTML::url('coaching/delete',array('id'=> $coaching['id']));?>"><button class="btn btn-danger btn-xs">Delete</button></a>
				</td>
		</tr>


		<?php $i++; }?>
		


	</tbody>


</table>
</div>