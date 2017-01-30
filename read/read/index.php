<?php
/*
	Read Excel file and save details to database using PHP-Repost
	Sumith Harshan
	http://webexplorar.com/read-excel-file-and-save-details-to-database-using-php-repost
*/
?>
<?php
require('connection.php');
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Reports</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"  enctype="multipart/form-data">
		<input type="file" name="fileToUpload">
		<input type="submit" name="submit" value="Upload Report">
	</form>
	<?php
	/** Include path **/
	// $date = date('D').' '.date('d-M-Y');
	// echo $date;
	// exit;
	
		if(isset($_POST['submit'])){
			$filename =	basename($_FILES["fileToUpload"]["name"]);
			}
			 	
	
	set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
	
	/** PHPExcel_IOFactory */
	include 'PHPExcel/IOFactory.php';

	 $inputFileName = $filename;  // New format Excel File to read
	 
 	//  Read your Excel workbook
	try {
		$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($inputFileName);
	} catch(Exception $e) {
		die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
	}
	//  Get worksheet dimensions
	$sheet = $objPHPExcel->getSheet(0); 
	$highestRow = $sheet->getHighestRow(); 
	$highestColumn = $sheet->getHighestColumn();
	$sql = ''; // query
	$rowData = '';
	$DataArr ='';
	$dateArr='';
	$sqlCreate = '';
	$result_insert = '';
 
	$path_parts = pathinfo($inputFileName);
	$excelFileName = $path_parts['filename']; 
?>
<?php	
	for ($row = 1; $row <= $highestRow; $row++){ 
			//  Read a row of data into an array
			$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
			 $DataArr = $rowData[0];
			 $dateArr = $rowData[0];	
			if($row==1){
					$reportdate=$dateArr[3];
			}else if($row==2){

			}else{
				$sql1 = "SELECT * FROM `attendence` WHERE `batch`='".$DataArr[4]."' AND `report_of_date`='".$reportdate."'";
				$result_check = mysql_query($sql1) or die(mysql_error());
				$num = mysql_num_rows($result_check);
				if($num > 0){
					echo "Report Updated for batch ".$DataArr[4]. " of date ".$reportdate."<br>";	
				}else{
					$sql  = "INSERT INTO `attendence`(`student_id`, `card_no`, `name`, `batch`, `timing`, `arriaval_time`, `departure_time`, `status`, `report_of_date`) VALUES ('".$DataArr[1]."','".$DataArr[2]."','".$DataArr[3]."','".$DataArr[4]."','".$DataArr[5]."','".$DataArr[6]."','".$DataArr[8]."','".$DataArr[12]."','".$reportdate."')";	
						$result_insert = mysql_query($sql) or die(mysql_error());	
				}
				

			} 

	}
?>

<?php
 	if($result_insert) echo 'Succssfully Inserted '.($highestRow-1).' records to the Database'; 
?>
</body>
</html>