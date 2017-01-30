<a href="<?php echo HTML::url('result/create');?>"><button class="btn btn-success">Add result</button></a>
<div class="form-group"></div>
<table class="table table-responsive table-bordered">
	<thead>
		<th>Id</th>
		<th>Name</th>
		<th>Mark</th>
		<th>class</th>
		<th>Image</th>
		<th>Action</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php 

		foreach ($result as $result) {
		?>
			<tr>
				<td><?php echo $result['id'];?></td>
				<td><?php echo $result['name'];?></td>
				<td><?php echo $result['mark'];?></td>
				<td><?php echo $result['class'];?></td>
				<td><img alt="parisdaycare" height="200px" width="200px" src="<?php echo "../upload/result/". $result['image']?>"></td>
				<td><a href="<?php echo HTML::url('result/create',array('id'=>$result['id']));?>"><button class="btn btn-info btn-xs">Update</button></a></td>
				<td><a href="<?php echo HTML::url('result/delete',array('id'=>$result['id']));?>"><button class="btn btn-danger btn-xs">Delete</button></a></td>
		</tr>


		<?php }?>
		


	</tbody>


</table>

