<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('static/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('static/css/flat-ui.min.css');?>" rel="stylesheet">
    
    <link href="<?php echo base_url('static/css/style.css');?>" rel="stylesheet">
	<style>
		/* Small devices (tablets, 768px and up) */
@media (min-width: @screen-sm-min) { 
	#login-panel {
		margin:0 auto;
		width:100%;
	}
	
}
	</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-inverse navbar-embossed" role="navigation">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <!--<span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> -->
	      </button>
	      <a class="navbar-brand" href="#">PHCAI</a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="<?php echo base_url('/');?>">Home</a></li>
	        <li><a href="<?php echo base_url('lectures');?>">Lectures</a></li>
	        <li><a href="#">About</a></li>
	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin/Teacher Panel <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="<?php echo base_url('login');?>"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Login</a></li>
	            <li><a href="<?php echo base_url('register');?>"><span class="glyphicon glyphicon-registration-mark"></span>&nbsp; Register</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
    