<a href="<?php echo HTML::url('testimonials/create');?>"><button class="btn btn-success">Add Testimonial</button></a>
<div class="form-group"></div>
<table class="table table-responsive table-bordered" id="example">
	<thead>
		<th>Sr.no</th>
		<th>Content</th>
		<th>Author</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php 
		foreach ($testimonial as $testimonial) {
		?>
			<tr>
				<td><?php echo $testimonial['id'];?></td>
				<td><?php echo $testimonial['content'];?></td>
				<td><?php echo $testimonial['author'];?></td>
				
				<td>
				<a href="<?php echo HTML::url('testimonials/create',array('id'=>$testimonial['id']));?>" ><i class="glyphicon glyphicon-pencil"></i></a>
					<a onClick="confirmBox()" href="<?php echo HTML::url('testimonials/delete',array('id'=> $testimonial['id']));?>"><i class="glyphicon glyphicon-trash"></i></a>	
					<a href="<?php echo HTML::url('testimonials/view',array('id'=> $testimonial['id']));?>"><i class="glyphicon glyphicon-eye-open"></i></a>	
				</td>
		</tr>


		<?php }?>
		


	</tbody>


</table>
