<div class="form-group"></div>
<table class="table table-responsive table-bordered" id="example">
	<thead>
		<th>Sr.no</th>
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
