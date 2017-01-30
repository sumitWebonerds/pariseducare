<a href="<?php echo HTML::url('gallery/create');?>"><button class="btn btn-success">Add images</button></a>
<div class="form-group"></div>
<table class="table table-responsive table-bordered">
	<thead>
		<th>Id</th>
		<th>Uploades Images</th>
		<th>Action</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php
		foreach ($gallery as $gallery) {
		?>
			<tr>
				<td><?php echo $gallery['id'];?></td>
				<td>
					<img  alt="image Not Display" height="200px" width="200px" class="img-responsive" src="<?php echo"../upload/gallery/". $gallery['name'];?>" >
				</td>
				<td><a href="<?php echo HTML::url('gallery/create',array('id'=>$gallery['id']));?>"><button class="btn btn-info btn-xs">Update</button></a></td>
				<td>
					<a onClick="confirmBox()" href="<?php echo HTML::url('gallery/delete',array('id'=> $gallery['id']));?>"><button class="btn btn-danger btn-xs">Delete</button></a>
				</td>
		</tr>


		<?php }?>
		


	</tbody>


</table>