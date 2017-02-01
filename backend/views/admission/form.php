<?php
$model=new Admission();
if(isset($_GET['id'])){
	$student=$model->findByPk($_GET['id']);
}
?>
<div class="col-md-12">
<div class="panel panel-default">
	<div class="panel panel-heading">student Form</div>
	<div class="panel-body">
	<form action="<?php echo $_SERVER['REQUEST_URI'];?>" name="submitfrm" method="post" enctype="multipart/form-data" novalidate>
		<div class="col-md-12 form-group">
						<label>Card Number</label>

						<input type="number" value="<?php echo (isset($student['tracking_no']) ? $student['tracking_no']:'')?>" class="form-control input-sm" name="student[tracking_no]" required id="tracking_no">
		</div>
		<div class="col-md-12 form-group">
					<div class="col-md-4">
						<label>First Name</label>
						<?php echo HTML::inputText((isset($student['first_name'])?$student['first_name']:''),array("placeholder"=>"Enter first Name ",'class'=>"form-control input-sm input-sm",'id'=>'name','name'=>'student[first_name]','required'=>''));?>
					</div>
					<div class="col-md-4">
						<label>Middle Name</label>
						<input type="text" value="<?php echo (isset($student['father_name']) ? $student['father_name']:'')?>" name="student[father]" class="form-control input-sm" id='father_name' required>
					</div>
					<div class="col-md-4">
						<label>Last Name</label>
						<?php echo HTML::inputText((isset($student['last_name'])?$student['last_name']:''),array("placeholder"=>"Enter last Name ",'class'=>"form-control input-sm",'id'=>'lastname','name'=>'student[last_name]','required'=>''));?>
					</div>
			</div>
			<div class="col-md-12 form-group">
				<div class="col-md-6">
					<label class="control-label">Mother Name:</label>
					<?php //echo HTML::inputText((isset($student['mothername'])?$student['mothername']:''),array("placeholder"=>"Enter mother's Name ",'class'=>"form-control input-sm",'name'=>'student[mother]'));?>
					<input type="text" value="<?php echo (isset($student['mother_name']) ? $student['mother_name']:'')?>" name="student[mother]" class="form-control input-sm" id="mother_name" required>
				</div>
				 <div class="col-md-6">
					<label class="control-label">Mother Education:</label>
					<?php echo HTML::inputText((isset($student['mother_education'])?$student['mother_education']:''),array("placeholder"=>"Enter Mother Education ",'class'=>"form-control input-sm",'name'=>'student[mother_education]'));?>
				</div>
			</div>
			<div class="col-md-12 form-group">
				<div class="form-group col-md-6">
						<label class="control-label">Date Of Birth:</label>
						<?php echo HTML::inputText((isset($student['dob'])?$student['dob']:''),array("placeholder"=>"Enter Date Of Birth",'class'=>"form-control input-sm",'id'=>'dob','name'=>'student[dob]','required'=>''));?>
				</div>
				<div class="form-group col-md-6">
						<label class="control-label">Place Of Birth:</label>
						<?php echo HTML::inputText((isset($student['birth_place'])?$student['birth_place']:''),array("placeholder"=>"Enter Birth Place ",'class'=>"form-control input-sm",'name'=>'student[birth_place]'));?>
				</div>
			</div>
			<div class="col-md-12 form-group">
				<div class="form-group col-md-6">
						<label class="control-label">Age as On June 1:</label>
						<?php echo HTML::inputText((isset($student['age'])?$student['age']:''),array("placeholder"=>"Enter Age as On June",'class'=>"form-control input-sm",'name'=>'student[age]','id'=>'age','required'=>''));?>
				</div>
				<div class="form-group col-md-6">
						<label class="control-label">1st/2nd Child:</label>
						<?php echo HTML::inputText((isset($student['child_no'])?$student['child_no']:''),array("type"=>"number","placeholder"=>" ",'class'=>"form-control input-sm",'name'=>'student[child_no]'));?>
			</div>
			</div>
			<div class="form-group col-md-12">
				<div class="col-md-6">
					<label class="control-label">Gender:</label><br>
					<div class="row">
					<label class="col-md-3"><input  type="radio" value="m" checked="checked" name='student[gender]' selected>Male</label>

					<label class="col-md-3"><input type="radio" value="f" name='student[gender]'>Female</label>
					</div>
				</div>
				<div class="col-md-6">
					<label class="control-label">cast:</label>
					 <select class="form-control input-sm" id="sel1" name='student[cast]'>
					    <option value="bc">BC</option>
					    <option value="bc">NON-BC</option>
					  </select>
				</div>
			</div>
			<div class="col-md-12 form-group">
				<div class="col-md-6">
						<label class="control-label">Father Education:</label>
						<?php echo HTML::inputText((isset($student['father_education'])?$student['father_education']:''),array("placeholder"=>"Enter Father's Education ",'class'=>"form-control input-sm",'name'=>'student[father_education]'));?>
				</div>
				<div class="col-md-6">
						<label class="control-label">Father Occupation:</label>
						<?php echo HTML::inputText((isset($student['father_occupation'])?$student['father_occupation']:''),array("placeholder"=>"Enter Father's Occupation",'class'=>"form-control input-sm",'name'=>'student[father_occupation]'));?>
				</div>
			</div>
	<div class="col-md-12">
			<div class="form-group col-md-6">
					<label class="control-label">Telephone:</label>
					<?php echo HTML::inputText((isset($student['telephone'])?$student['telephone']:''),array("placeholder"=>"Enter Telephone Number",'class'=>"form-control input-sm",'name'=>'student[telephone]'));?>
			</div>
			 <div class="form-group col-md-6">
					<label class="control-label">Residental Telephone:</label>
					<?php echo HTML::inputText((isset($student['res_telephone'])?$student['res_telephone']:''),array("placeholder"=>"Enter Residental Tel. No.",'class'=>"form-control input-sm",'name'=>'student[res_telephone]'));?>
			</div>
		</div>
			<div class="form-group col-md-12">
			<div class="col-md-6">
				<label class="control-label">Pin:</label>
				<?php echo HTML::inputText((isset($student['pin'])?$student['pin']:''),array("placeholder"=>"Enter Pin Code",'class'=>"form-control input-sm",'name'=>'student[pin]'));?>
			</div>
			<div class="col-md-6">
				<label class="control-label">City:</label>
				<?php echo HTML::inputText((isset($student['city'])?$student['city']:''),array("placeholder"=>"Enter City",'class'=>"form-control input-sm",'name'=>'student[city]'));?>
			</div>
 
		</div>
		<div class="col-md-12">
			<div class="form-group col-md-6">
					<label class="control-label">Mothers Occupation:</label>
					<?php echo HTML::inputText((isset($student['mother_occupation'])?$student['mother_occupation']:''),array("placeholder"=>"Enter Mother's Occupation",'class'=>"form-control input-sm",'name'=>'student[mother_occupation]'));?>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group col-md-6">
					<label class="control-label">Language Spoken At Home:</label>
					<?php echo HTML::inputText((isset($student['language_at_home'])?$student['language_at_home']:''),array("placeholder"=>"Enter Language Spoken At Home",'class'=>"form-control input-sm",'name'=>'student[language_at_home]'));?>
			</div>
			<div class="form-group col-md-6">
					<label class="control-label">Languages spoken by child:</label>
					<?php echo HTML::inputText((isset($student['language_child'])?$student['language_child']:''),array("placeholder"=>"Enter Languages spoken by child",'class'=>"form-control input-sm",'name'=>'student[language_child]'));?>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group col-md-6">
					<label class="control-label">Any other relatives sharing house :</label>
					<?php echo HTML::inputText((isset($student['relative_name'])?$student['relative_name']:''),array("placeholder"=>"Enter relatives Name ",'class'=>"form-control input-sm",'name'=>'student[relative_name]'));?>
			</div>
			<div class="form-group col-md-6">
					<label class="control-label">Email Id:</label>
					<?php echo HTML::inputText((isset($student['email'])?$student['email']:''),array("type"=>"email","placeholder"=>"Enter Email Address ",'class'=>"form-control input-sm",'name'=>'student[email]','id'=>'email','required'=>''));?>
			</div>
		</div>
		<div class="form-group col-md-12">
			<div class="col-md-12">
				<label class="control-label">Does the child have any problem:</label>
				<div class="row">
				<div class="col-md-12">
				<div class="col-md-6">
					<label class="control-label">Bed wetting :</label>

					<?php echo HTML::inputText((isset($student['bed_wetting'])?$student['bed_wetting']:''),array("placeholder"=>"Enter Only yes/no",'class'=>"form-control input-sm",'name'=>'student[bed_wetting]'));?>
				</div>
				<div class="col-md-6">
					<label class="control-label">Thumb sucking :</label>

					<?php echo HTML::inputText((isset($student['thumb_sucking'])?$student['thumb_sucking']:''),array("placeholder"=>"Enter Only yes/no",'class'=>"form-control input-sm",'name'=>'student[thumb_sucking]'));?>
				</div>
				</div>
				<div class="col-md-12">
				<div class="col-md-6">

				<label class="control-label">Stuttering:</label>
					<?php echo HTML::inputText((isset($student['stuttering'])?$student['stuttering']:''),array("placeholder"=>"Enter Only yes/no",'class'=>"form-control input-sm",'name'=>'student[stuttering]'));?>
				</div>
				<div class="col-md-6">
					<label class="control-label">Bed Time:</label>
					<?php echo HTML::inputText((isset($student['bed_time'])?$student['bed_time']:''),array("placeholder"=>"Enter child's bed time ",'class'=>"form-control input-sm",'name'=>'student[bed_time]'));
					?> 
				</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
							<label class="control-label">Any other:</label>

					<?php echo HTML::inputText((isset($student['other'])?$student['other']:''),array("placeholder"=>"Give Description",'class'=>"form-control input-sm",'name'=>'student[other]'));?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group col-md-12">
			<div class="col-md-6">
				<label class="control-label">How does the child spend the afternoon? :</label>
				<textarea class="form-control" rows="3" cols="50" name='student[spend_afternoon]'></textarea>
			</div>
			<div class="col-md-6">
				<label class="control-label">Generally how would you describe your child’s behaviour? :</label>
				<textarea class="form-control" rows="3" cols="50" name='student[behaviour]'></textarea>
			</div>
		</div> 
		<div class="form-group col-md-12">
			
		</div>
		<div class="form-group col-md-12">
			<div class="col-md-6">
				<label class="control-label">Has the child been to any other Nursary School? Which One :</label>
				<textarea class="form-control" rows="3" cols="50" name='student[other_school]'></textarea>

			</div>
			<div class="col-md-6">
				<label class="control-label">Address :</label><br>
				<textarea class="form-control" rows="3" cols="50" name='student[address]'></textarea>

			</div>
		</div>
		<div class="form-group col-md-12">
		<div class="col-md-12">
				<label class="checkbox-inline"><input type="checkbox" value="" name='student[agree]'>I have read the Prospectus stating the rules & regulations. I agree to abid by them.</label>
		</div>

		</div>
		<div class="form-group col-md-12">
			<input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit Form">
		</div>
	</form>
	</div>
</div>
</div>
