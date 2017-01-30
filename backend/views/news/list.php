<a href="<?php echo HTML::url('news/create');?>"><button class="btn btn-success">Add News</button></a>
<div class="form-group"></div>
<table class="table table-responsive table-bordered">
	<thead>
		<th>Id</th>
		<th>Title</th>
		<th>Time</th>
		<th>Date</th>
		<th>Image</th>
		<th>Content</th>
		
		<th>Action</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php 
		foreach ($news as $news) {
		?>
			<tr>
				<td><?php echo $news['id'];?></td>
				<td><?php echo $news['title'];?></td>
				<td><?php echo $news['time'];?></td>
				<td><?php echo $news['date'];?></td>
				<td><img height="100px" width="100px" src="<?php echo "../upload/news/". $news['file_name']?>"</td>
				<td><?php echo $news['content'];?></td>

				<td><a href="<?php echo HTML::url('news/create',array('id'=>$news['id']));?>"><button class="btn btn-info btn-xs">Update</button></a></td>
				<td>
					<a  onClick="confirmBox()"href="<?php echo HTML::url('news/delete',array('id'=>$news['id']));?>"><button class="btn btn-danger btn-xs">Delete</button></a>
				</td>
		</tr>


		<?php }?>
		


	</tbody>


</table>

