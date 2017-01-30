<?php
	if(isset($error))
	{
?>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<?php
		 echo $error;
?>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>

<?php	
	}else{
?>
<div class="container">
	<div class="col-md-12">
		<form action="<?php echo $_SERVER['REQUEST_URI'];?>" name="submitfrm" method="post" enctype="multipart/form-data" novalidate>
			<div class="row" style="padding: 20px;">
			<div class="col-md-5">
				<div class="form-group">
					<label for="date">From</label>			
					<?php echo HTML::inputText('',array("placeholder"=>"Select Date to generate report",'class'=>"form-control",'id'=>'from_date','name'=>'from_date','required'=>''));?>
				</div>
			</div>
			<div class="col-md-5">
				<div class="form-group">	
					<label for="date">To</label>			
					<?php echo HTML::inputText('',array("placeholder"=>"Select Date to generate report",'class'=>"form-control",'id'=>'to_date','name'=>'to_date','required'=>''));?>
				</div>
			</div>
			<div class="col-md-2">
				<div>&nbsp;</div>
				<input type="submit" name="submit" value="Generate Report" class="btn btn-primary">
			</div>
			</div>

		</form>
	</div>
</div>
<div class="container " id="printarea">
	<div class="col-md-12">	
		<div>&nbsp;</div>
		<?php
			echo "<h1><div class='student_name'>".$name." Weekly Report</div></h1>";
			$cntp=0;
			$cnta=0;
			$size=sizeof($record);
			for ($i=0; $i < sizeof($record); $i++) { 
			if($record[$i]['status']=='P'){
					
						$cntp++;
					
					}else{
					
						$cnta++;
					
					}
			}		
		?>
		<div class="row">
			<div class="col-md-12">
			<?php
				if(empty($record)){		
			?>
				<div class="jumbotron text-center"> <h3> Sorry No Records Found !!!</h3></div>
			<?php }else{
			?>	
				<div id="visualization" style="width: 600px; height: 400px;" ></div>
			<?php } ?>
			</div>
			
		</div>

		<div class="col-md-12">
			
			<table class="table table-bordered">
			<thead>
				<th>Sr.no</th>
				<th>Date</th>
				<th>Batch</th>
				<th>Timing</th>
				<th>Arrival Time</th>
				<th>Departure Time</th>
				<th>Attended Hours</th>
				<th>Status</th>
			</thead>
			<?php
			if(empty($record)){
			?>
			<tr>
				<td colspan="8" class="text-center"><strong>Sorry !!! No Records Found</strong></td>
			</tr>
			<?php
			}else{
			for ($i=0; $i < sizeof($record); $i++) { 
			?>
			<tr class="<?php if($record[$i]['status']=='P'){ echo 'success'; }else{ echo 'danger'; } ?>">
				<td><?= $i+1 ?></td>
				<td><?= $record[$i]['report_of_date']?></td>
				<td><?= $record[$i]['batch']?></td>
				<td><?= $record[$i]['timing']?></td>
				<td><?= $record[$i]['arriaval_time']?></td>
				<td><?= $record[$i]['departure_time']?></td>
				<td><?= $record[$i]['hrs_attended'].' Hrs.'?></td>
				<td><?php if($record[$i]['status']=='P'){
					
						echo 'Present';
						

					}else{
						echo 'Absent';
						
						}?></td>
			</tr>
			<?php	
			}
		}
			?>
			</table>
			</div>
			
	</div>

</div>
<div class="container">
	<div class="col-md-offset-4 col-md-4">
		<div class="form-group">
			<button type="button" onclick="printDiv('printarea')" class="btn btn-primary btn-block btn-lg"><span class="glyphicon glyphicon-print"></span> Print Report</button>
		</div>
	</div>
</div>			
<?php
		}
	?>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
        
        <script type="text/javascript">
            //load package
            google.load('visualization', '1', {packages: ['corechart']});
        </script>
 
        <script type="text/javascript">
            function drawVisualization() {
                // Create and populate the data table.
                var data = google.visualization.arrayToDataTable([
                    ['PL', 'Ratings'],
                    <?php
                    	if($cntp==0 && $cnta==0){
                    		echo "['Present', {0}],['Absent',{0}]";	
                    	}else{
						    echo "['Present', {$cntp}],['Absent', {$cnta}]";                    		
                    	}

               
                    ?>
                ]);
 
                // Create and draw the visualization.
                new google.visualization.PieChart(document.getElementById('visualization')).
                draw(data, {title:"Weekly Present And Absent"});
            }
 
            google.setOnLoadCallback(drawVisualization);
        </script>

<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
