<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>ITexperts</title>

  	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/jobs.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
  				</button>
  				<a class="navbar-brand" href="<?php echo base_url();?>">IT Experts</a>
  			</div>
  			<div class="collapse navbar-collapse">
  				<ul class="nav navbar-nav">
  					<li class="active"><a href="<?php echo base_url();?>">Home</a></li>
  				</ul>
          <form  method="post" action="<?php echo base_url();?>/jobs/results"class="navbar-form navbar-right">
	  					<div class="form-group"  method="post" action="<?php echo base_url();?>">
	  						<input type="text" name="search" placeholder="Search for jobs or company" class="form-control">
	  					</div>
  					<button type="submit" name="submit"class="btn btn-default">Search</button>
  				</form>
          <button type="submit" class="navbar navbar-right btn btn-default"><a href="register.php">Register</a></button>
          <button type="submit" class="navbar navbar-right btn btn-success"><a href="login.php">Login</a></button>

  			</div>
  	--	</div>
  	</div> 
  	<div class="container">
