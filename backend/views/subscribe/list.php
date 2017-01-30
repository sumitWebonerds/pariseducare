<div class="form-group"></div>
<table class="table table-responsive table-bordered">
	<thead>
		<th>Id</th>
		<th>Email</th>
	</thead>
	<tbody>
		<?php 
		foreach ($subscribe as $subscribe) {
		?>
			<tr>
				<td><?php echo $subscribe['id'];?></td>
				<td><?php echo $subscribe['email'];?></td>
			</tr>


		<?php }?>
		


	</tbody>


</table>
