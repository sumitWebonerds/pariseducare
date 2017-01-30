<?php 
	include ("constants.php"); 
	require_once "common/model/base.php" ;
	require_once "common/model/user.php" ;
	$model = new User();
	$user=$model->findAll();
	foreach($user as $user){
?>

<!--footer-->
<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6 footer-left">
				<ul>
					<li><a href="<?php echo url::to("site/index");?>">Home</a></li>
					<li><a href="<?php echo url::to("site/about");?>">About</a></li>
					<li><a href="<?php echo url::to("site/gallery");?>">Gallery</a></li>
					<li><a href="<?php echo url::to("site/Contact");?>">Contact</a></li>
				</ul>
				<form method="POST" name="subscribe" id="subscribeFrm" >
					<input type="text" name="email" id="email" placeholder="Enter Email" required>
					<div class="error" id="subscribe_error"></div>
					<button type="button" class="sub-btn sub-effect" id="submit">Subscribe</button>
				</form>
			</div>
			<div class="col-md-6 footer-middle">
				<h3>Address</h3>
				<div class="address">
					<p><?php echo $user['address'];?>
					</p>
				</div>
				<div class="phone">
					<p>+91<?php echo $user['contact'];?></p>
				</div>
			</div>
<!-- 			<div class="col-md-3 footer-right">
				
			</div> -->
			<div class="clearfix"> </div>	
		</div>
		<?php } ?>
		<!-- //container -->
	</div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
		<!-- container -->
		<div class="container">
			<div class="copyright-left">
			<p>&copy; <?php echo date("Y");?> Paris Day Care. All rights reserved</p>
			<p>Design &amp; Devolped By<a href="http://www.webonerds.com/"> Webonerds</a></p>
			</div>
			<div class="copyright-right">
				<ul>
					<li><a href="javascript:void(0)" class="twitter"> </a></li>
					<li><a href="javascript:void(0)" class="twitter facebook"> </a></li>
					<li><a href="javascript:void(0)" class="twitter chrome"> </a></li>
					<!-- <li><a href="javascript:void(0)" class="twitter pinterest"> </a></li> -->
					<li><a href="javascript:void(0)" class="twitter linkedin"> </a></li>
					<!-- <li><a href="javascript:void(0)" class="twitter dribbble"> </a></li> -->
				</ul>
			</div>
		<!-- 	<div class="clearfix"> </div> -->
			
		</div>
		<!-- //container -->
		<!---->
		<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
</div>
	
	<!--script-->
	 <script src="<?php echo $BASE_PATH;?>/assets/js/jquery.min.js"></script>
	<!-- js -->
	<script src="<?php echo $BASE_PATH;?>/assets/js/bootstrap.min.js"></script>
	<!-- /js -->
	<!--fonts-->

	<!--/fonts-->
	<script src="<?php echo $BASE_PATH;?>/assets/js/modernizr.custom.js"></script>
	<!--/hover-grids-->
	<script type="text/javascript" src="<?php echo $BASE_PATH;?>/assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo $BASE_PATH;?>/assets/js/easing.js"></script>
	<!--script-->
		 </script>
		 <script type="text/javascript" src="<?php echo $BASE_PATH;?>/backend/sbadmin/dist/js/jquery-ui.min.js"></script>
	<script type="text/javascript">
$(document).ready(function() {

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

            $('#submit').click(function() {
                var email = $('#email').val();
               if(email != "" && email != null)
               {

               		if(validateEmail(email))
               		{
	            		$("#subscribe_error").html("");
		                $.ajax({
		                    type: "POST",
		                    url: "views/layout/new.php",
		                    data:'email='+email,
		                    success: function(data) {
		                        alert('data has been stored to database');
		                    }
		                });
		            }
		            else
		            {
		            	$("#subscribe_error").html("Email is invalid.");
		            }
            	}
            	else
            	{
            		$("#subscribe_error").html("Email is required.");
            	}


            });
        });
       
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
					});
				});
	</script>
	  <script>
  $( function() {
    $( "#report_date" ).datepicker({  
      maxDate: new Date(),
      dateFormat: 'D dd-M-yy' 
    });
    $( "#report_date" ).datepicker();

  
  } );
   $( function() {
    $( "#from_date" ).datepicker({  
      maxDate: new Date(),
      dateFormat: 'yy-m-d' 
    });
    $( "#from_date" ).datepicker();

  
  } );
    $( function() {
    $( "#to_date" ).datepicker({  
      maxDate: new Date(),
      dateFormat: 'yy-m-d' 
    });
    $( "#to_date" ).datepicker();

  
  } );
  $(function() {
        $( "#dob" ).datepicker({
          dateFormat : 'yy-mm-dd',
          changeMonth: true,
          changeYear: true,
          yearRange: '-100y:c+nn',
            maxDate: '-1d',
        });
      });
  </script>
	<!--/script-->

	</body>
</html>
