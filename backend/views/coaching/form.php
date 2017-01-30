<?php
$model=new Coaching();
if(isset($_GET['id'])){
	$coaching=$model->findByPk($_GET['id']);
}
?>
		<div class="col-md-12">
			<form action="<?php echo $_SERVER['REQUEST_URI'];?>" name="submitfrm" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="tracking">Card No.</label>
					<?php echo HTML::inputText((isset($coaching['tracking_no'])?$coaching['tracking_no']:''),array("placeholder"=>"Enter Tracking No",'id'=>'tracking_no','class'=>"form-control",'name'=>'coaching[tracking_no]' ,'required'=>''));?>
				</div>
				<div class="form-group">
					<label for="fullname">Name</label>
					<?php echo HTML::inputText((isset($coaching['name'])?$coaching['name']:''),array("placeholder"=>"Enter Your Full Name ",'id'=>'name','class'=>"form-control",'name'=>'coaching[name]' ,'required'=>''));?>
				</div>
				<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="gender">Gender</label>
						<div class="form-group">
							<div class="col-md-3">
								<label for="gender">
								<input type="radio" name="coaching[gender]" checked value="m"> Male </label>	
							</div>
							<div class="col-md-3">
								<label for="gender">
								<input type="radio" name="coaching[gender]" value="f"> Female </label>	
							</div>							
						</div>							
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="dob">Date Of Birth</label>
							<?php echo HTML::inputText((isset($coaching['dob'])?$coaching['dob']:''),array("placeholder"=>"Enter Your Date Of Birth",'class'=>"form-control",'name'=>'coaching[dob]' ,'id'=>'dob' ,'required'=>''));?>
						</div>	
					</div>
				</div>
				</div>
				
				<div class="form-group">
					<label for="email">Email</label>
					<?php echo HTML::inputText((isset($coaching['email'])?$coaching['email']:''),array("type"=>"email","placeholder"=>"Enter Your Email ",'class'=>"form-control",'name'=>'coaching[email]','id'=>'email' ,'required'=>''));?>
				</div>
				<div class="row">

				<div class="col-md-12">
						<label><h3>Contact Details :</h3></label>
					</div>
				</div>
				<fieldset>
					<div class="row">					
						<div class="col-md-6">
							<div class="form-group">
								<label for="resphone">Residential Phone No.</label>
								<?php echo HTML::inputText((isset($coaching['res_mobile'])?$coaching['res_mobile']:''),array("type"=>"number","placeholder"=>"Enter Your Residential Phone Number",'class'=>"form-control",'name'=>'coaching[res_mobile]'));?>
							</div>		
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="mob">Mobile No.</label>
								<?php echo HTML::inputText((isset($coaching['mobile'])?$coaching['mobile']:''),array("type"=>"number","placeholder"=>"Enter Your Mobile Number ",'class'=>"form-control",'name'=>'coaching[mobile]','id'=>'mobno' ,'required'=>''));?>
							</div>						
						</div>
					</div>
				</fieldset>
				<div class="form-group">
					<label for="college">School/College</label>
					<textarea name='coaching[school_name]' value="<?php (isset($coaching['school_name'])?$coaching['school_name']:'') ?>" class="form-control"></textarea>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label for="std">Standard</label>
						<?php echo HTML::inputText((isset($coaching['standered'])?$coaching['standered']:''),array("placeholder"=>"",'class'=>"form-control",'id'=>'std','name'=>'coaching[standered]'));?>
						</div>						
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="academic">Academic Year</label>
							<?php echo HTML::inputText((isset($coaching['year'])?$coaching['year']:''),array("placeholder"=>"",'class'=>"form-control",'name'=>'coaching[year]'));?>
						</div>		
					</div>
				</div>
				<div class="form-group">
					<label for="perlast">Percentage in Last Year</label>
					<?php echo HTML::inputText((isset($coaching['last_percentage'])?$coaching['last_percentage']:''),array( "type"=>"number","placeholder"=>"",'class'=>"form-control",'name'=>'coaching[last_percentage]'));?>
				</div>
				
					<div class="form-group">
					<label for="address">Subject To Be Join Here</label>
					<textarea name="coaching[subject]" value="<?php (isset($coaching['subject'])?$coaching['subject']:'') ?>" class="form-control"></textarea>
				</div>
				</div> 				
				<div class="form-group">
					<label for="address">Address of Correspondence</label>
					<textarea name="coaching[address]" value="<?php (isset($coaching['address'])?$coaching['address']:'') ?>" class="form-control"></textarea>
				</div>
				<fieldset>
				<div class="col-md-12">
					<label ><h3>Information About Family :</h3></label>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="fname">Father's Name</label>
							<?php echo HTML::inputText((isset($coaching['father_name'])?$coaching['father_name']:''),array("placeholder"=>"",'class'=>"form-control",'name'=>'coaching[father_name]','id'=>'father_name' ,'required'=>''));?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="occup">Occupation</label>
							<?php echo HTML::inputText((isset($coaching['occupation'])?$coaching['occupation']:''),array("placeholder"=>"",'class'=>"form-control",'name'=>'coaching[occupation]'));?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="fullname">Mobile Number</label>
							<?php echo HTML::inputText((isset($coaching['father_mobile'])?$coaching['father_mobile']:''),array("placeholder"=>"",'class'=>"form-control",'name'=>'coaching[father_mobile]','id'=>'mobno' ,'required'=>''));?>
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="fullname">Email</label>
							<?php echo HTML::inputText((isset($coaching['father_email'])?$coaching['father_email']:''),array("type"=>"email","placeholder"=>"",'class'=>"form-control",'name'=>'coaching[father_email]','id'=>'father_email','required'=>''));?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="fullname">Mother's Name</label>
							<?php echo HTML::inputText((isset($coaching['mother_name'])?$coaching['mother_name']:''),array("placeholder"=>"",'class'=>"form-control",'name'=>'coaching[mother_name]','id'=>'mother_email' ,'required'=>''));?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="fullname">Occupation</label>
							<?php echo HTML::inputText((isset($coaching['mother_occupation'])?$coaching['mother_occupation']:''),array("placeholder"=>"",'class'=>"form-control",'name'=>'coaching[mother_occupation]'));?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="fullname">Mobile Number</label>
							<?php echo HTML::inputText((isset($coaching['mother_mobile'])?$coaching['mother_mobile']:''),array("placeholder"=>"",'class'=>"form-control",'name'=>'coaching[mother_mobile]','id'=>'name' ,'required'=>''));?>
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="fullname">Email</label>
							<?php echo HTML::inputText((isset($coaching['mother_email'])?$coaching['mother_email']:''),array("placeholder"=>"",'class'=>"form-control",'name'=>'coaching[mother_email]','id'=>'mother_email' ,'required'=>''));?>
						</div>
					</div>
				</div>
			</fieldset>
			<div class="row">
				<div class="col-md-offset-4 col-md-4 text-center">
					<div class="form-group">
						<input type="submit" value="Submit" name="submit" class="btn btn-primary">
					</div>					
				</div>
			</div>

			</form>			
		</div>