<a href="<?php echo HTML::url('admission/create');?>"><button class="btn btn-success">Add admission</button></a>
<div class="form-group"></div>
<div class="" >
<table class="table table-responsive table-bordered" id="example">
	<thead>
		<th>Sr.No.</th>
		<th>Card No.</th>
		<th>Full Name</th>
		<th>Telephone</th>
		<th>Email</th>
		<th>Reports</th>
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
							
				<!-- <td><?php //echo $admission['age'];?></td>
				<td><?php 
				//if($admission[//'gender']=='m'){
					//echo "Boy";	
				//}//else{
					//echo "Girl";
				//}

				?></td> -->
				<td><?php echo $admission['telephone'];?></td>
				
				<td><?php echo $admission['email'];?></td>
				
				
				
				<td>
					<a href="<?php echo $BASE_PATH;?>/index.php?a=site/reports&id=<?php echo $admission['id'];?>" target="_BLANK" class="btn btn-primary">Check Report</a>

				</td>
				<td>
					
				
					
				<a href="<?php echo HTML::url('admission/create',array('id'=>$admission['id']));?>" ><i class="glyphicon glyphicon-pencil"></i></a>
				<a onClick="confirmBox()" href="<?php echo HTML::url('admission/delete',array('id'=> $admission['id']));?>"><i class="glyphicon glyphicon-trash"></i></a>
				
					<a  href="<?php echo HTML::url('admission/view',array('id'=> $admission['id']));?>"><i class="glyphicon glyphicon-eye-open"></i></a>
				</td>
		</tr>


		<?php $i++; }?>
		


	</tbody>


</table>
</div>