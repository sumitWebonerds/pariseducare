<a href="<?php echo HTML::url('service/create');?>"><button class="btn btn-success">Add Service</button></a>
<div class="form-group"></div>
<table class="table table-responsive table-bordered" id="example">
	<thead>
		<th>Sr.no</th>
		<th>Title</th>
		<th>Information</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php 

		foreach ($service as $service) {
		?>
			<tr>
				<td><?php echo $service['id'];?></td>
				<td><?php echo $service['name'];?></td>
				<td><?php echo $service['information'];?></td>
				

				<td>	
					<a href="<?php echo HTML::url('service/create',array('id'=>$service['id']));?>"><i class="glyphicon glyphicon-pencil"></i></a>
					<a href="<?php echo HTML::url('service/delete',array('id'=>$service['id']));?>"><i class="glyphicon glyphicon-trash"></i></a>
					<a href="<?php echo HTML::url('service/view',array('id'=>$service['id']));?>"><i class="glyphicon glyphicon-eye-open"></i></a>

				</td>
		</tr>


		<?php }?>
		


	</tbody>


</table>

