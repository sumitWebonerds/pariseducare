<a href="<?php echo HTML::url('coaching/create');?>"><button class="btn btn-success">Add coaching</button></a>
<div class="form-group"></div>
<div class="" style="overflow-x:auto;">
<table class="table table-responsive table-bordered" id="example">
	<thead>
	
		<th>Sr.no.</th>
		<th>Card No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Subject</th>
		<th>Reports</th>
		<th>Actions</th>
		
		
		
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
				<td><?php echo $coaching['email'];?></td>
				<td><?php echo $coaching['mobile'];?></td>
				<td><?php echo $coaching['address'];?></td>
				<td><?php echo $coaching['subject'];?></td>

				<td>
					<a href="<?php echo $BASE_PATH;?> /index.php?a=site/reports&coaching_id=<?php echo $coaching['id'];?>" target='_BLANK' class="btn btn-info btn-xs">Check Report</a>
				</td>
				<td>	
					<a href="<?php echo HTML::url('coaching/create',array('id'=>$coaching['id']));?>" ><i class="glyphicon glyphicon-pencil"></i></a>
		
						<a onClick="confirmBox()" href="<?php echo HTML::url('coaching/delete',array('id'=> $coaching['id']));?>"><i class="glyphicon glyphicon-trash"></i></a>
						<a href="<?php echo HTML::url('coaching/view',array('id'=> $coaching['id']));?>"><i class="glyphicon glyphicon-eye-open"></i></a>
				</td>
		</tr>


		<?php $i++; }?>
		


	</tbody>


</table>
</div>