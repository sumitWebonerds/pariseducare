<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include "baseController.php";

class AdmissionController extends BaseController{
	public function actionCreate(){

		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new Admission();
		if(isset($_POST['submit'])){

				$model->tracking_no=$_POST['student']['tracking_no'];
			    $model->first_name=$_POST['student']['first_name'];
			    $model->father_name=$_POST['student']['father'];
			    $model->last_name=$_POST['student']['last_name'];
			    $model->mother_name=$_POST['student']['mother'];
			    $model->mother_education=$_POST['student']['mother_education'];
			    $model->dob=$_POST['student']['dob'];
	 		    $model->birth_place=$_POST['student']['birth_place'];
	 			$model->age=$_POST['student']['age'];
	    		$model->child_no=$_POST['student']['child_no'];
				$model->gender=$_POST['student']['gender'];
		    	$model->cast=$_POST['student']['cast'];
		    	$model->father_education=$_POST['student']['father_education'];
		    	$model->father_occupation=$_POST['student']['father_occupation'];
			  	$model->telephone=$_POST['student']['telephone'];
		    	$model->res_telephone=$_POST['student']['res_telephone'];
	   			$model->city=$_POST['student']['city'];
		    	$model->pin=$_POST['student']['pin'];
		    	$model->mother_occupation=$_POST['student']['mother_occupation'];
				$model->language_at_home=$_POST['student']['language_at_home'];
			    $model->language_child=$_POST['student']['language_child'];
			    $model->relative_name=$_POST['student']['relative_name'];
			    $model->email=$_POST['student']['email'];
			    $model->bed_wetting=$_POST['student']['bed_wetting'];
			    $model->thumb_sucking=$_POST['student']['thumb_sucking'];
			    $model->stuttering=$_POST['student']['stuttering'];
			    $model->address=$_POST['student']['address'];
			    $model->bed_time=$_POST['student']['bed_time'];
			    $model->other=$_POST['student']['other'];
			    $model->spend_afternoon=$_POST['student']['spend_afternoon'];
			    $model->behaviour=$_POST['student']['behaviour'];
			    $model->other_school=$_POST['student']['other_school'];
				$model->created_on=date('Y-m-d');
				if(isset($_GET['id']))
				{

					$model->id = $_GET['id']; 
					
					if($model->update())
					{
						$this->redirect("admission/list");
					} 

				}
				else
				{
				if($model->save())
					{
						$this->redirect("admission/list");
					}
				}
		}
		$this->render('admission/form');
	}
	public function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new admission();
		$admission=$model->findAll();
		$this->render("admission/list",array("admission"=>$admission));
	}
	public function actionDelete(){
		$model=new admission();
		$model->id=$_GET['id'];
		$model->DeleteByPk($model->id);
		$this->redirect("admission/list");
	}
	public function actionView(){
	$model=new admission();
	$model->id =$_GET['id'];
	//print_r($model);
    //exit;
	$id = $model->id;
	$admission=$model->findByPk($id);
	$this->render('admission/view',array("admission"=>$admission));
} 
}
?>