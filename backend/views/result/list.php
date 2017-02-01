<a href="<?php echo HTML::url('result/create');?>"><button class="btn btn-success">Add result</button></a>
<div class="form-group"></div>
<table class="table table-responsive table-bordered" id="example">
	<thead>
		<th>Sr.no</th>
		<th>Name</th>
		<th>Mark</th>
		<th>class</th>
		<th>Image</th>
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
				<td><img alt="parisdaycare" height="100px" width="100px" src="<?php echo "../upload/result/". $result['image']?>" class="center-block"></td>
				<td>
					<a href="<?php echo HTML::url('result/create',array('id'=>$result['id']));?>"><i class="glyphicon glyphicon-pencil"></i></a>
				    <a href="<?php echo HTML::url('result/delete',array('id'=>$result['id']));?>"><i class="glyphicon glyphicon-trash"></i>
				    <a href="<?php echo HTML::url('result/view',array('id'=>$result['id']));?>"><i class="glyphicon glyphicon-eye-open"></i>
				</td>
		</tr>


		<?php }?>
		


	</tbody>


</table>

