<div class="col-md-12">
<div class="panel panel-default">
	<div class="panel panel-heading">
		Upload Attendence Report
	</div>
	<div class="panel-body">
	<form action="<?php echo $_SERVER['REQUEST_URI'];?>" name="submitfrm" method="post" enctype="multipart/form-data" novalidate>
		<div class="col-md-offset-4 col-md-4">
			<div class="form-group">
							<label for="date">Select Date</label>			
							<?php echo HTML::inputText('',array("placeholder"=>"Select Date to upload report",'class'=>"form-control",'id'=>'report_date','name'=>'report_date','required'=>''));?>
						</div>
			<div class="form-group">
				<input type="file" name="fileToUpload">	
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success btn-block" name="submit" >			
			</div>	
		</div>
	</form>
	</div>
</div>
</div>
