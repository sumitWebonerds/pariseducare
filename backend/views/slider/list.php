<a href="<?php echo HTML::url('slider/create');?>"><button class="btn btn-success">Add Slide</button></a>
<div class="form-group"></div>
<table class="table table-responsive table-bordered">
	<thead>
		<th>Id</th>
		<th>Uploades File</th>
		<th>Caption</th>
		<th>Action</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php 
		foreach ($slider as $slider) {
		?>
			<tr>
				<td><?php echo $slider['id'];?></td>
				<td>
					<img src="<?php echo"../upload/". $slider['name'];?>" alt="image Not Display" class="img-responsive" >
				</td>
				<td><?php echo $slider['caption'];?></td>
				

				<td><a href="<?php echo HTML::url('slider/create',array('id'=>$slider['id']));?>"><button class="btn btn-info btn-xs">Update</button></a></td>
				<td>
					<a onClick="confirmBox()" href="<?php echo HTML::url('slider/delete',array('id'=>$slider['id']));?>"><button class="btn btn-danger btn-xs">Delete</button></a>
				</td>

		</tr>


		<?php }?>
		


	</tbody>


</table>


