<div class="form-group">
<a href="<?php echo HTML::url('news/create',array('id'=>$news['id']));?>" ><button class="btn btn-success">Update</button></a></td>	
	<a onClick="confirmBox()" href="<?php echo HTML::url('news/delete',array('id'=> $news['id']));?>"><button class="btn btn-danger">Delete</button></a>
</div>
<div class="container">
   <div class="row">
      		<div class="news-title">
      		<h3><?= $news['title']?></h3>
      	</div>
      	<div class="news-images">
      		<img src="../upload/news/<?= $news['file_name']?>" class="img-responsive">
      	</div>
      	<div>&nbsp;</div>
      <div class="news-content col-md-10">
      	<p><?= $news['content'];?></p>
      </div>
   </div>
    <div>
         <p><i class="fa fa-calendar-o" aria-hidden="true"></i>Date:<?= $news['date']?>  
         <i class="fa fa-clock-o" aria-hidden="true"></i>Time:<?= $news['time']?></p>
      </div>
	
</div>