<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
	<div class="panel-heading">
	<span>Change Password</span>
	<span class="pull-right"><a href="<?php echo url::to("site/logout")?>">Logout</a></span>
	</div>
	<div class="panel-body">
	<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>" id="form" name="submitfrm">
		<div class="form-group">
			<label class="control-label">Enter Password</label>
			<input type="password" class="form-control" name="user[password]" id="password" required>
		</div>
		<div class="form-group">&nbsp</div>
		<div class="form-group">
			<label class="control-label">Enter New Password</label>
			<input type="password" class="form-control" name="user[newpassword]" id="newpassword" required>
		</div>
		<div class="form-group">&nbsp</div>
		<div class="form-group">
			<label class="control-label">Enter Confirm Password</label>
			<input type="password" class="form-control" name="user[confirmpassword]" id="confirmpassword" required >
		</div>
		<div class="form-group">&nbsp</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Change Password"> 
		</div>
	</form>
	</div>
	</div>
</div>

<script>
	function checkpass() {
    var confirmpassword = $('#confirmpassword').val();
    var newpassword= $('#newpassword').val();

    if (newpassword == confirmpassword) {
        alert("New Password & confirm password does not match ");
        //return false;
    }
    else
    {
    return true;
    }

};
</script>