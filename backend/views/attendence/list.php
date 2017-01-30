<div class="col-md-12">
<div class="panel panel-default">
	<div class="panel panel-heading">
	Attendence Report
	</div>
	<div class="panel-body">
	<form action="<?php echo $_SERVER['REQUEST_URI'];?>" name="submitfrm" method="post" enctype="multipart/form-data" novalidate>
		<div class="col-md-offset-4 col-md-4">
			<div class="form-group">
				<label for="date">Select Date</label>			
					<?php echo HTML::inputText('',array("placeholder"=>"Select Date ",'class'=>"form-control",'id'=>'report_date','name'=>'report_date','required'=>''));?>
			</div>			
			<div class="form-group">
				<input type="submit" class="btn btn-success btn-block" name="submit" >		
			</div>	
		</div>
	</form>
	</div>
</div>
<?php 
if(isset($records)){
if (empty($records)) {
?>
	<div class="col-md-12 text-center">
		<h4>No Record Found on this Date !!!</h4>
	</div>
	
<?php
}else{


?>
<div class="row">
	<div class="col-md-4 text-center">
		<h4><?= "Date :".$report_date ?></h4>		
	</div>
	<div class="col-md-4 text-center">
		<h4><?= "No. of Present Students :".$countPresent ?></h4>
	</div>
	<div class="col-md-4 text-center">
		<h4><?= "No. of Absent Students :".$countAbsent ?></h4>
	</div>
</div>



	<table class="table table-bordered" id="example">
	<thead>
		<th>Sr.no.</th>
		<th>Card No.</th>
		<th>Name</th>
		<th>Status</th>

	</thead>	
<?php
	$i=1;	
	foreach( $records as $records) {
?>
	<tr>
		<td><?= $i?></td>
		<td><?= '0000000'.$records['tracking_no']?></td>
		<td><?= $records['name']?></td>
		<td><?= $records['status']?></td>
	</tr>

<?php
	$i++;
	}
?>
	</table>
<?php
}	//print_r($records);
}?>

</div>

