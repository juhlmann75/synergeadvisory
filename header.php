<!DOCTYPE html>
<html>

<head>
  <?php require 'googleanalytics.php'; ?>
  <?php 
	if($_SERVER['REQUEST_URI'] == '/david-uhlmann.php'){
		$title = 'David Uhlmann';
	}
	else if($_SERVER['REQUEST_URI'] == '/services.php') {
		$title = 'Build Your Plan';
	}
	else {
		$title = 'Synergos Advisory';
	}
  ?>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="&quot;From my very first day as an entrepreneur, I've felt the only mission worth pursuing in business is to make people's lives better.&quot; - Richard Branson 
  If you're reading this, I'm sure you can relate...">
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
	
	.navbar {
		border: none !important;
		height: 70px !important;
	}
	
	.navbar-default .navbar-nav>li>a {
		color:white;
	}
	
	.navbar-default .navbar-collapse, .navbar-default .navbar-form {
		border-color: transparent;
	}

	@media (min-width: 810px) {
		.myNav.container {
			width: 992px !important;
		}
	|
	
	.navDrop li{
		margin-bottom:10px;
	}
	
	.dropdown-menu-large {
		padding: 0;
	}
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="myNav container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="/"><img src="images/synergoslogo.PNG" style="width:260px;margin-top:-20px;"/></a>

      </div>
      <div id="navbar" class="navigation collapse navbar-collapse navbar-ex1-collapse staticLinks" style="background-color: #002060;padding:0px !important">
        <ul class="nav navbar-nav" style="margin: 7.5px -15px !important;">
          <li class="navlink"><a href="/">Home</a></li>
          <li class="navlink"><a href="/index.php#about">About</a></li>
          <li class="navlink"><a href="/index.php#services">Services</a></li>
          <li class="navlink"><a href="/index.php#contact">Contact</a></li>
		  <li class="navlink dropdown dropdown-large">
				<a href="#" style="background-color: transparent;" class="dropdown-toggle" data-toggle="dropdown">Insights & Tools (Beta)<b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<!---<ul style="float:right;list-style:none;">
						<li>Wealth Building Potential Assessment</li>
						<li>Career Fit Assessment</li>
						<li>Investor Composure Assessment</li>
						<li>Financial Planning Habits Assessment</li>
					</ul>--->
					
					<li class="col-sm-4">
						<ul class="navDrop">
							<li class="dropdown-header">Insights For You</li>
							<li><a href="/assessment.php?a=wealth-building-potential">Wealth Building Potential Assessment</a></li>
							<li><a href="/assessment.php?a=career-fit">Career Fit Assessment</a></li>
							<li><a href="/assessment.php?a=investor-composure">Investor Composure Assessment</a></li>
							<li><a href="/assessment.php?a=financial-planning-habits">Financial Planning Habits Assessment</a></li>
						</ul>
					</li>
					<li class="col-sm-5">
					
						<ul class="navDrop">
							<li class="dropdown-header">Tools for your business</li>
							<li><a href="/calculator.php?c=what-are-the-tax-savings-of-a-qualified-retirement_cafeteria-plan">What are the tax savings of a qualified retirement/cafeteria plan?</a></li>
							<li><a href="/calculator.php?c=what-are-my-new-business-startup-costs">What are my new business startup costs?</a></li>
							<li><a href="/calculator.php?c=should-I-pay-or-charge-monthly-quarterly-or-annually">Should I pay or charge monthly, quarterly or annually?</a></li>
							<li><a href="/calculator.php" style="color:blue">More >></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul class="navDrop">
							<li class="dropdown-header">Track your Finances</li>
							<li><a href="https://www.rightcapital.com/sign-up?referral=Bk2t09O2NLeM47NJBweHXA&type=client" target="_blank">Complimentary Financial Tracking Tool</a></li>
							
						</ul>
					</li>
				</ul>
				
			</li>
        </ul>
      </div>
    </div>
  </nav>