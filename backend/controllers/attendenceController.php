<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include "baseController.php";

class AttendenceController extends BaseController{
	function actionForm(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}

		$model=new Attendence();
		if(isset($_POST['submit']))
		{
				$report_date = $_POST['report_date'];

				$file_name =	basename($_FILES["fileToUpload"]["name"]);
				//echo $file_name."<br>";
				$image_tmp = $_FILES['fileToUpload']['tmp_name'];
					
				$extension = strtolower(substr($file_name,strpos($file_name,'.') + 1));
				$actual_name = pathinfo($file_name,PATHINFO_FILENAME);
				$original_name = $actual_name;
				$extension =pathinfo($file_name,PATHINFO_EXTENSION);
				$file_name="report_".$report_date.'.'.$extension;
				while(file_exists('../upload/reports/'.$actual_name.'.'.$extension)){
						$actual_name = "report_".$report_date;
						$file_name = $actual_name.'.'.$extension;
					}
				move_uploaded_file($image_tmp,'../upload/reports/'.$file_name);
				// echo $file_name;
				// exit;
				set_include_path(get_include_path() . PATH_SEPARATOR . 'PHPExcel/PHPExcel/');
			
		 	$inputFileName = '../upload/reports/'.$file_name;  
			try {
					$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
					$objReader = PHPExcel_IOFactory::createReader($inputFileType);
					$objPHPExcel = $objReader->load($inputFileName);
			} catch(Exception $e) {
				die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}	
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
			for ($row = 1; $row <= $highestRow; $row++){ 
					//  Read a row of data into an array
					$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
					 $DataArr = $rowData[0];
					 $dateArr = $rowData[0];
					 $user_type = $rowData[0];	
					// print_r($DataArr);exit;
					if($row==1){
							$reportdate=$dateArr[3];
							// echo $reportdate;
							// exit;
							$report = date('Y-m-d',strtotime($reportdate));

							// echo $report;
							// exit;
							
					}else if($row==2){
					}else if($row==3){

						 $usertype=$user_type[3];
						
					}else if($row > 3){
						$hrs_attend=$DataArr[10];
						$model->tracking_no =  $DataArr[2];
						$model->name = $DataArr[3];
						$model->batch = $DataArr[4];
						$model->timing = $DataArr[5];

						$model->arriaval_time = $DataArr[6];
						$model->departure_time = $DataArr[8];
						$model->hrs_attended = $hrs_attend;
						$status = $DataArr[12];
						 
						if($DataArr[6]==0){
							$status = "A";	
						}else{
							$status = "P";

						}
						$model->status = $status;
						$model->user_type =  $usertype;;
						$model->report_of_date = $report;						
						//print_r($model);exit;
						$model->save();

					}else{

					} 
			}

			$this->redirect("attendence/list");

		}	

		$this->render('attendence/form');
	}
	function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}

		$records=new Attendence();
		$countAbsent = $records;
		$countPresent = $records;
		if(isset($_POST['submit']))
		{
			$report_date = $_POST['report_date'];
		 	// echo $report_date;
			$records=$records->findAllByDate($report_date);
			$countAbsent=$countAbsent->getCount('A',$report_date);
			$countPresent=$countPresent->getCount('P',$report_date);
			// echo "<br>".$countAbsent.' '.$countPresent;exit;
			$this->render('attendence/list',array('report_date'=>$report_date,'records'=>$records,'countAbsent'=>$countAbsent,'countPresent'=>$countPresent));
		}

		$this->render('attendence/list');	
	}
}

?>