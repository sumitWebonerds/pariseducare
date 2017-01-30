<?php foreach($users as $users){
	$address=$users['address'];
    $contact=$users['contact'];
    $email=$users['email'];
}?>
<div class="banner banner5">
	<div class="container">
	<h2>Contact</h2>
	</div>
</div>
		<div class="contact">
			<!-- container -->
			<div class="container">
				<div class="contact-info">
					<h3 class="c-text">Find Us</h3>
				</div>
					<div id="map"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30267.805166015794!2d73.78705893009273!3d18.507395837027236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfb732af849d%3A0xd4078b48b3fe44f0!2sKothrud%2C+Pune%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1475742041437" width="1150" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				    </script>
				    <script async defer
				        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHV9tjry0noNTbUttPalJxP7xFRAzTq_4&callback=initMap">
				    </script>

				<div class="contact-grids">
					<div class="col-md-4 contact-grid-left">
						<h3>Address :</h3>
						<p><?php echo $address ;?>
						</p>
					</div>
					<div class="col-md-4 contact-grid-middle">
						<h3>Phones :</h3>
						<ul>
							<li>Ph <?php echo $contact; ?></li>
						</ul>
					</div>
					<div class="col-md-4 contact-grid-right">
						<h3>E-mail :</h3>
						<a href=""><?php echo $email; ?></a>
					</div>
					<div class="clearfix"> </div>
					<div class="contact-info cf-1">
						
					<h3></h3>
							
						<div class="contact-info-grids">
							<form>
								<input type="text" placeholder="Name" required="">
								<input type="text" placeholder="Email" required="">
								<input type="text" placeholder="Subject" required="">
								<textarea placeholder="Message" required=""></textarea>
								<input type="submit" value="SEND">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		