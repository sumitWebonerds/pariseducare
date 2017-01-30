<?php
include ("../constants.php");
?>
<!doctype html>
<html lang="en">
<head>
<title>Pariseducare </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="sbadmin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="sbadmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet" type="text/css" media="all">
<link href="sbadmin/bower_components/bootstrap/dist/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="sbadmin/dist/css/timeline.css" rel="stylesheet" type="text/css"/>
<link href="sbadmin/dist/css/sb-admin-2.css" rel="stylesheet" type="text/css"/>
<link href="sbadmin/dist/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="sbadmin/bower_components/morrisjs/morris.css" rel="stylesheet" type="text/css"/>
<link href="sbadmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
<link rel="stylesheet" type="text/css" href="sbadmin/dist/css/style.css">
</head>
	<body>
		<div class="header" id="home">
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo url::to("site/index")?>"><?php  echo($_SESSION['user']['site_name']);?></a>
            </div>
             <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><?php 
                            echo "Welcome"." " .($_SESSION['user']['name']); ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo url::to("user/profile")?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?php echo HTML::url('user/changepassword',array('id'=>$_SESSION['user']['id']));?>"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo url::to("site/logout")?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo url::to("site/index");?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo url::to('slider/list')?>"><i class="fa fa-bar-chart-o fa-fw"></i>slider</a>
                            <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php //echo url::to('slider/list')?>">Index</a>
                                </li>
                                <li>
                                   <a href="<?php //echo url::to('slider/create');?>">Create</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="<?php echo url::to('testimonials/list')?>"><i class=""></i>Testimonials</a>
                            <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php //echo url::to('testimonials/list');?>">Index</a>
                                </li>
                                <li>
                                    <a href="<?php //echo url::to('testimonials/create');?>">Create</a>
                                </li>
                            </ul> -->
                        </li>
                         <li>
                            <a href="<?php echo url::to('news/list');?>"><i class=""></i>News</a>
                            <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php //echo url::to('news/list');?>">Index</a>
                                </li>
                                <li>
                                    <a href="<?php //echo url::to('news/create');?>">Create</a>
                                </li>
                            </ul> -->
                        </li>
                         <li>
                            <a href="<?php echo url::to('service/list');?>"><i class=""></i>Services</a>
                        </li>
                        <li>
                            <a href="<?php echo url::to('gallery/list');?>"><i class=""></i>Gallery</a>
                            <!-- <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php //echo url::to('gallery/list');?>">Index</a>
                                </li>
                                <li>
                                    <a href="<?php //echo url::to('gallery/create');?>">Create</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="<?php echo url::to('result/list');?>"><i class=""></i>Result</a>
                            <!-- <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php //echo url::to('result/list');?>">Index</a>
                                </li>
                                <li>
                                    <a href="<?php //echo url::to('result/create');?>">Create</a>
                                </li>
                            </ul>
 -->                        </li>
                        <li>
                            <a href="<?php echo url::to('admission/list');?>"><i class=""></i>Admission</a>
                            <!-- <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php //echo url::to('admission/list');?>">Index</a>
                                </li>
                                <li>
                                    <a href="<?php //echo url::to('admission/create');?>">Create</a>
                                </li>
                            </ul>
                     -->    </li>
                        <li>
                            <a href="<?php echo url::to('coaching/list');?>"><i class=""></i>Coaching Form</a>
                            <!-- <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php //echo url::to('coaching/list');?>">Index</a>
                                </li>
                                <li>
                                    <a href="<?php //echo url::to('coaching/create');?>">Create</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="<?php echo url::to('subscribe/list');?>"><i class=""></i>Subscribe</a>
                            <!-- <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php //echo url::to('subscribe/list');?>">Index</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="<?php echo url::to('attendence/form');?>"><i class=""></i>Attendence Report<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo url::to('attendence/form');?>">Upload</a>
                                </li>
                                <li>
                                    <a href="<?php echo url::to('attendence/list');?>">Display</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	</div>
        <div id="wrapper">
        <div id="page-wrapper" style="min-height: 800px !important;">
        <div class="clearfix">&nbsp;</div>
