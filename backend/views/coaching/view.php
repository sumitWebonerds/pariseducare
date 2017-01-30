<div class="form-group">
<a href="<?php echo HTML::url('coaching/create',array('id'=>$coaching['id']));?>" ><button class="btn btn-success">Update</button></a></td>	
	<a onClick="confirmBox()" href="<?php echo HTML::url('coaching/delete',array('id'=> $coaching['id']));?>"><button class="btn btn-danger">Delete</button></a>
</div>
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<td><strong>Id</strong></td>
			<td><?php if(empty($coaching['id'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['id'];
				} ?>
			</td>
		</tr>

		<tr>
			<td><strong>Tracking No</strong></td>
			<td><?php if(empty($coaching['tracking_no'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['tracking_no'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Full Name</strong></td>
			<td><?php if(empty($coaching['name'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['name'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Date Of Birth</strong></td>
			<td><?php if(empty($coaching['dob'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['dob'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Gender</strong></td>
			<td><?php if($coaching['gender']=='m'){echo 'Boy';}else{ echo "Girl";}; ?></td>
		</tr>
		<tr>
			<td><strong>Email</strong></td>
			<td><?php if(empty($coaching['email'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['email'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Residental Telephone</strong></td>
			<td><?php if(empty($coaching['res_mobile'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['res_mobile'];
				} ?></td>
		</tr>
		
		<tr>
			<td><strong>Mobile</strong></td>
			<td><?php if(empty($coaching['mobile'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['mobile'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>School Name</strong></td>
			<td><?php if(empty($coaching['school_name'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['school_name'];
				} ?> </td>
		</tr>

		<tr>
			<td><strong>Standered</strong></td>
			<td><?php if(empty($coaching['standered'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['standered'];
				} ?></td>
		</tr>
		
		<tr>
			<td><strong>Year</strong></td>
			<td><?php if(empty($coaching['year'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['year'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Last Percentage</strong></td>
			<td><?php if(empty($coaching['last_percentage'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['last_percentage'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Address</strong></td>
			<td><?php if(empty($coaching['address'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['address'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Subject</strong></td>
			<td><?php if(empty($coaching['subject'])){ echo "<i>(not set)</i>";} else{
				echo $coaching['subject'];} ?></td>
		</tr>
		
		<tr>
			<td><strong>Father's Name</strong></td>
			<td><?php if(empty($coaching['father_name'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['father_name'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Occupation</strong></td>
			<td><?php if(empty($coaching['occupation'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['occupation'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Father's Mobile</strong></td>
			<td><?php if(empty($coaching['father_mobile'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['father_mobile'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Father's Email</strong></td>
			<td><?php if(empty($coaching['father_email'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['father_email'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Mother's Name</strong></td>
			<td><?php if(empty($coaching['mother_name'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['mother_name'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Mother's Occupation</strong></td>
			<td><?php if(empty($coaching['mother_occupation'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['mother_occupation'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Mother's Mobile</strong></td>
			<td><?php if(empty($coaching['mother_mobile'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['mother_mobile'];
				} ?></td>
		</tr>
		<tr>
			<td><strong>Mother's Email</strong></td>
			<td><?php if(empty($coaching['mother_email'])){ echo "<i>(not set)</i>";}else{
					echo $coaching['mother_email'];
				} ?></td>
		</tr>
		
		
		
	</tbody>
</table>