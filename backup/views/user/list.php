	<a href="<?php echo HTML::url('user/create');?>">Add user</a>
<table>
	<thead>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Address</th>
	</thead>
	<tbody>
		<?php 
		foreach ($users as $user) {
		?>
			<tr>
				<td><?php echo $user['id'];?></td>
				<td><?php echo $user['name'];?></td>
				<td><?php echo $user['email'];?></td>
				<td><?php echo $user['contact'];?></td>
				<td><?php echo $user['address'];?></td>
				<td>

					<a href="<?php echo HTML::url('user/create',array('id'=>$user['user_id']));?>" >Update</a>
					<a href="index.php?delete_id=<?php echo $user['user_id'];?>">Delete</a>
				</td>
		</tr>


		<?php }?>
		


	</tbody>


</table>