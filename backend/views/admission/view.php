<div class="form-group">
<a href="<?php echo HTML::url('admission/create',array('id'=>$admission['id']));?>" ><button class="btn btn-success">Update</button></a></td>	
	<a onClick="confirmBox()" href="<?php echo HTML::url('admission/delete',array('id'=> $admission['id']));?>"><button class="btn btn-danger">Delete</button></a>
</div>
<table class="table table-bordered table-striped">
	<tbody>
		<tr>
			<td><strong>Id</strong></td>
			<td><?php if(empty($admission['id'])){echo "<i>(not set)</i>";}else{
				echo $admission['id'];} ?></td>
 		</tr>

		<tr>
			<td><strong>Tracking No</strong></td>
			<td><?php if(empty($admission['tracking_no'])){echo "<i>(not set)</i>";}else{ echo $admission['tracking_no'];} ?></td>
		</tr>
		<tr>
			<td><strong>Full Name</strong></td>
			<td><?php 
			if(empty($admission['first_name']) && empty($admission['father_name']) && empty($admission['last_name']))
			{
			
				echo "<i>(not set)</i>";

			}else{
			
				echo $admission['first_name'].' '.$admission['father_name'].' '.$admission['last_name'];
			} ?></td>
		</tr>
		<tr>
			<td><strong>Mother's Name</strong></td>
			<td><?php if(empty($admission['mother_name'])){ echo "<i>(not set)</i>";}else{ echo $admission['mother_name'];} ?></td>
		</tr>
		<tr>
			<td><strong>Date Of Birth</strong></td>
			<td><?php if(empty($admission['dob'])){ echo "<i>(not set)";} else{ echo $admission['dob'];}?></td>
		</tr>
		<tr>
			<td><strong>Birth Place</strong></td>
			<td><?php if(empty($admission['birth_place'])){ echo "<i>(not set)</i>";} else{ echo $admission['birth_place'];}?></td>
		</tr>
		<tr>
			<td><strong>Age</strong></td>
			<td><?php if(empty($admission['age'])){ echo "<i>(not set)</i>";} else{echo $admission['age'];} ?></td>
		</tr>
		<tr>
			<td><strong>Child no</strong></td>
			<td><?php if(empty($admission['child_no'])){echo "<i>(not set)</i>";} else{echo $admission['child_no'];} ?></td>
		</tr>
		<tr>
			<td><strong>Gender</strong></td>
			<td><?php if($admission['gender']=='m'){echo "Boy";}else{ echo "Girl";}; ?></td>
		</tr>
		<tr>
			<td><strong>Cast</strong></td>
			<td><?php if(empty($admission['cast'])){echo "<i>(not set)</i>";} else
				echo $admission['cast'];?></td>
		</tr>
		<tr>
			<td><strong>Father's Education</strong></td>
			<td><?php if(empty($admission['father_education'])){echo "<i>(not set)</i>";}else echo $admission['father_education']; ?></td>
		</tr>
		<tr>
			<td><strong>Father's Occupation </strong></td>
			<td><?php if(empty($admission['father_occupation'])){echo "<i>(not use)</i>";}else echo $admission['father_occupation'];?></td>
		</tr>
		<tr>
			<td><strong>Telephone</strong></td>
			<td><?php if(empty($admission['telephone'])){echo "<i>(not use)</i>";} else echo $admission['telephone'];?></td>
		</tr>
		<tr>
			<td><strong>Residental Telephone</strong></td>
			<td><?php if(empty($admission['res_telephone'])){echo "<i>(not use)</i>";}else echo $admission['res_telephone']; ?></td>
		</tr>
		<tr>
			<td><strong>Pin number</strong></td>
			<td><?php if(empty($admission['pin'])){echo "<i>(not use)</i>";}else
			echo $admission['pin'];?></td>
		</tr>
		<tr>
			<td><strong>City</strong></td>
			<td><?php if(empty($admission['city'])){echo "<i>(not use)</i>";}else
			echo $admission['city'];?></td>
		</tr>
		<tr>
			<td><strong>Mother's Education</strong></td>
			<td><?php if(empty($admission['mother_education'])){echo "<i>(not use)</i>";}else echo $admission['mother_education'];?></td>
		<tr>
			<td><strong>Mother's Occupation</strong></td>
			<td><?php if(empty($admission['mother_occupation'])){echo "<i>(not use)</i>";}else echo $admission['mother_occupation'];?></td>
		</tr>
		<tr>
			<td><strong>Language At Home</strong></td>
			<td><?php if(empty($admission['language_at_home'])){echo "<i>(not use)</i>";}else echo $admission['language_at_home'];?></td>
		</tr>
		<tr>
			<td><strong>Language Child</strong></td>
			<td><?php if(empty($admission['language_child'])){echo "<i>(not use)</i>";}else	echo $admission['language_child'];?></td>
		</tr>
		<tr>
			<td><strong>Relative Name</strong></td>
			<td><?php if(empty($admission['relative_name'])){ echo "<i>(not set)</i>";}else{ echo $admission['relative_name'];} ?></td>
		</tr>
		<tr>
			<td><strong>Email</strong></td>
			<td><?php if(empty($admission['email'])){echo "<i>(not use)</i>";}else
			echo $admission['email'];?></td>
		</tr>
		<tr>
			<td><strong>Bed Wetting</strong></td>
			<td><?php if(empty($admission['bed_wetting'])){echo "<i>(not use)</i>";}else echo $admission['bed_wetting'];?></td>		</tr>
				<tr>
			<td><strong>Thumb Sucking</strong></td>
			<td><?php if(empty($admission['thumb_sucking'])){echo "<i>(not use)</i>";}else echo $admission['thumb_sucking'];?></td>
		</tr>
				<tr>
			<td><strong>Stuttering</strong></td>
			<td><?php if(empty($admission['stuttering'])){echo "<i>(not use)</i>";}else
			echo $admission['stuttering'];?></td>
		</tr>
				<tr>
			<td><strong>Address</strong></td>
			<td><?php if(empty($admission['address'])){echo "<i>(not use)</i>";}else
			echo $admission['address'];?></td>
		</tr>
				<tr>
			<td><strong>Bed Time</strong></td>
			<td><?php if(empty($admission['bed_time'])){echo "<i>(not use)</i>";}else
			echo $admission['bed_time'];?></td>
		</tr>
				<tr>
			<td><strong>Other</strong></td>
			<td><?php if(empty($admission['other'])){echo "<i>(not use)</i>";}else
			echo $admission['other'];?></td>
		</tr>
				<tr>
			<td><strong>Spend Afternoon</strong></td>
			<td><?php if(empty($admission['spend_afternoon'])){echo "<i>(not use)</i>";}else echo $admission['spend_afternoon'];?></td>
		</tr>
				<tr>
			<td><strong>Behaviour</strong></td>
			<td><?php if(empty($admission['behaviour'])){echo "<i>(not use)</i>";}else
			echo $admission['behaviour'];?></td>
		</tr>
		<tr>
			<td><strong>Other School</strong></td>
			<td><?php if(empty($admission['other_school'])){echo "<i>(not use)</i>";}else  echo $admission['other_school'];?></td>
		</tr>
		
		
	</tbody>
</table>