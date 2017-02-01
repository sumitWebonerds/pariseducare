
<?php
	include ("constants.php");
	require_once "common/model/base.php" ;
	require_once "common/model/user.php" ;
	$model = new User();
	$user=$model->findAll();
	foreach($user as $user){
?>

<!doctype html>
<html>
	<head>
		<title><?php echo $user['site_name'];?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="UTF-8">
		<meta name="description" content="Pari’s Day Care, Preschool  and Activity Center’, we recognise it is essential that your child feels safe, secure, loved and—most important—that he or she is happy. We are very committed to providing your child with an enriched learning environment that encourages social and emotional growth, and promotes a strong educational foundation for the future. It is never too early to teach someone how to live well">
		<meta name="keywords" content="pariseducare , daycare ,Coaching,Preschool,Activity Center">
		<meta name="author" content="Webonerds">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--bootstrap-->
		<link href="<?php echo $BASE_PATH;?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

		<!--coustom css-->
	
		<link href="<?php echo $BASE_PATH;?>/backend/sbadmin/dist/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
		<!--hover-girds-->
		<link rel="stylesheet" type="text/css" href="<?php echo $BASE_PATH;?>/assets/css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $BASE_PATH;?>/assets/css/component.css" />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet"> 
		<link href="<?php echo $BASE_PATH;?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
		<!--- Lightbox css-->
		<link href="<?php echo $BASE_PATH;?>/assets/lib/lightbox/dist/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all">
			<link rel="stylesheet" href="<?php echo $BASE_PATH;?>/assets/css/simplePagination.css" />	
		<link href="<?php echo $BASE_PATH;?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo $BASE_PATH;?>/assets/css/custom.css" rel="stylesheet" type="text/css" media="all">	
		
	
	</head>
	<body>
		<div id="to-top">
			<div class="header" id="home">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
							</button>
							<h4><a class="navbar-brand" href="<?php echo url::to("site/index")?>"><span><?php echo $user['site_name'];?></span></a></h4>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="navbar-collapse" id="bs-example-navbar-collapse-1 ">
							<ul class="nav navbar-nav navbar-right margin-top cl-effect-2" id="nav">
								<li><a class="<?php if($currentPage =='home'){echo 'active';}?>" href="<?php echo url::to('site/index');?>"><span data-hover="Home">Home</span></a></li>
								<li><a href="<?php echo url::to('site/about');?>"><span data-hover="About">About</span></a></li>
								<li><a href="<?php echo url::to('site/gallery');?>"><span data-hover="Gallery">Gallery</span></a></li>
								<li><a href="<?php echo url::to('site/service'); ?>"><span data-hover="Services">Services</span></a></li>
								<li><a href="<?php echo url::to('site/testimonial');?>"><span data-hover="Testimonials">Testimonials</span></a></li>
								<li><a href="<?php echo url::to('site/result');?>"><span data-hover="result">Result</span></a></li>
								<li><a href="<?php echo url::to('site/news');?>"><span data-hover="news">News</span></a></li>
								<li><a href="<?php echo url::to('site/contact');?>"><span data-hover="Contact">Contact</span></a></li>

							</ul>
							<div class="clearfix"> </div>
						</div>
					</div>
				</nav>
				<div class="clearfix"> </div>
			</div>
		</div>
	<?php } ?>
