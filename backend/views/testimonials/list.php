<a href="<?php echo HTML::url('testimonials/create');?>"><button class="btn btn-success">Add Testimonial</button></a>
<div class="form-group"></div>
<table class="table table-responsive table-bordered">
	<thead>
		<th>Id</th>
		<th>Content</th>
		<th>Author</th>
	</thead>
	<tbody>
		<?php 
		foreach ($testimonial as $testimonial) {
		?>
			<tr>
				<td><?php echo $testimonial['id'];?></td>
				<td><?php echo $testimonial['content'];?></td>
				<td><?php echo $testimonial['author'];?></td>
				
				<td>	<a href="<?php echo HTML::url('testimonials/create',array('id'=>$testimonial['id']));?>" ><button class="btn btn-info btn-xs">Update</button></a></td>
				<td>
					<a onClick="confirmBox()" href="<?php echo HTML::url('testimonials/delete',array('id'=> $testimonial['id']));?>"><button class="btn btn-danger btn-xs">Delete</button></a>
				</td>
		</tr>


		<?php }?>
		


	</tbody>


</table>
