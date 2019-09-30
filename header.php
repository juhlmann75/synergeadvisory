<!DOCTYPE html>
<html>

<head>
  <?php require 'googleanalytics.php'; ?>
  <title>Synergōs Advice</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="css/default.css" rel="stylesheet" media="screen">
  
  <style>
	.navlink a:hover {
		background-color: transparent !important;
		color:#3a3a3a;
	}
	.navlink {
		text-transform: uppercase;
		font-weight:bold;
		font-size:14px !important;
	}
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="staticNav" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.php"><img src="images/synergoslogo.PNG" style="width:260px;margin-top:-20px;"/></a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse staticLinks">
        <ul class="nav navbar-nav" style="margin: 7.5px -15px !important;">
          <li class="navlink"><a href="/index.php">Home</a></li>
          <li class="navlink"><a href="/index.php#about">About</a></li>
          <li class="navlink"><a href="/index.php#services">Service</a></li>
          <li class="navlink"><a href="/index.php#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>