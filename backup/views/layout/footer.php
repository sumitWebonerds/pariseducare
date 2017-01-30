<?php 
		include ("constants.php"); 
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
					<button type="button" class="sub-btn sub-effect" id="submit">Subscribe</button>
				</form>
			</div>
			<div class="col-md-3 footer-middle">
				<h3>Address</h3>
				<div class="address">
					<p><?php echo "756 gt globel Place, Kothrud-Road,M 07 435 ";?>
					</p>
				</div>
				<div class="phone">
					<p>+91<?php echo "+91987654321";?></p>
				</div>
			</div>
			<div class="col-md-3 footer-right">
				<h3>Book Info</h3>
				<p>Proin eget ipsum ultrices, aliquet velit eget, tempus tortor. Phasellus non velit sit amet diam faucibus molestie tincidunt efficitur nisi.</p>
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //container -->
	</div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
		<!-- container -->
		<div class="container">
			<div class="copyright-left">
			<p>© <?php echo date("Y");?> Paris Day Care. All rights reserved</p>
			</div>
			<div class="copyright-right">
				<ul>
					<li><a href="#" class="twitter"> </a></li>
					<li><a href="#" class="twitter facebook"> </a></li>
					<li><a href="#" class="twitter chrome"> </a></li>
					<li><a href="#" class="twitter pinterest"> </a></li>
					<li><a href="#" class="twitter linkedin"> </a></li>
					<li><a href="#" class="twitter dribbble"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
		</div>
		<!-- //container -->
		<!---->
		<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
</div>
	
	<!--script-->
	 <script src="<?php echo $BASE_PATH;?>/assets/js/jquery-1.11.0.min.js"></script>
	<!-- js -->
	<script src="<?php echo $BASE_PATH;?>/assets/js/bootstrap.js"></script>
	<!-- /js -->
	<!--fonts-->

	<!--/fonts-->
	<script src="<?php echo $BASE_PATH;?>/assets/js/modernizr.custom.js"></script>
	<!--/hover-grids-->
	<script type="text/javascript" src="<?php echo $BASE_PATH;?>/assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo $BASE_PATH;?>/assets/js/easing.js"></script>
	<!--script-->
	 </script>
	<script type="text/javascript">
$(document).ready(function() {
            $('#submit').click(function() {
                var email = $('#email').val();
                $.ajax({
                    type: "POST",
                    url: "views/layout/new.php",
                    data:'email='+email,
                    success: function(data) {
                        console.log(data);
                        alert('data has been stored to database');
                    }
                });
            });
        });
       
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
					});
				});
	</script>
	<!--/script-->

	</body>
</html>
