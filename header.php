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
  
  <script type="text/javascript"> _linkedin_partner_id = "1667964"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1667964&fmt=gif" /> </noscript>
  
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
		height: 75px !important;
	}
	
	.navbar-default .navbar-nav>li>a {
		color:white;
	}
	
	.navbar-default .navbar-collapse, .navbar-default .navbar-form {
		border-color: transparent;
	}

	@media (min-width: 810px) {
		.myNav.container {
			width: 1200px !important;
		}
		.underNavImg {
			height:130px;
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="PphIxwD9"></script>
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
      <div id="navbar" class="navigation collapse navbar-collapse navbar-ex1-collapse staticLinks" style="background-color: darkcyan;padding:0px !important">
        <ul class="nav navbar-nav" style="margin: 7.5px -15px !important;">
          <li class="navlink"><a href="/">Home</a></li>
          <li class="navlink"><a href="/index.php#services">Services</a></li>
          <li class="navlink"><a href="/investment.php">Investments</a></li>
          
		  
		  <li class="navlink dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Learning <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="navlink"><a href="/blogs.php">Blog</a></li>
              <li role="separator" class="divider"></li>
              <li class="navlink"><a href="/videos.php">Videos</a></li>
            </ul>
          </li>
		  <li class="navlink dropdown dropdown-large">
				<a href="#" style="background-color: transparent;" class="dropdown-toggle" data-toggle="dropdown">Insights & Tools<b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
			
					
					<li class="col-sm-4">
						<ul class="navDrop">
							<li class="dropdown-header">Insights For You</li>
							<li><a href="/assessment.php?a=wealth-building-potential">Wealth Building Potential Assessment</a></li>
							<li><a href="/assessment.php?a=career-fit">Career Fit Assessment</a></li>
							<li><a href="/assessment.php?a=investor-composure">Investor Composure Assessment</a></li>
							<li><a href="/assessment.php?a=financial-planning-habits">Financial Planning Habits Assessment</a></li>
							<li><a href="/assessment.php?a=financial-life-satisfaction">Financial Life Satisfaction Assessment</a></li>
						</ul>
					</li>
					<li class="col-sm-5">
					
						<ul class="navDrop">
							<li class="dropdown-header">Tools for your business</li>
							<li><a href="/calculator.php?c=what-are-the-tax-savings-of-a-qualified-retirement_cafeteria-plan">What are the tax savings of a qualified retirement/cafeteria plan?</a></li>
							<li><a href="/calculator.php?c=what-are-my-new-business-startup-costs">What are my new business startup costs?</a></li>
							<li><a href="/calculator.php?c=should-I-pay-or-charge-monthly-quarterly-or-annually">Should I pay or charge monthly, quarterly or annually?</a></li>
							<li><a href="/calculator.php?c=what-is-the-value-of-my-business">What is the value of my business?</a></li>
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
			<li class="navlink"><a href="/david-uhlmann.php">About</a></li>
			<li class="navlink"><a href="/index.php#contact">Contact</a></li>
			<li class="navlink dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portal <span class="caret"></span></a>
	            <ul class="dropdown-menu">
	              <li class="navlink" style="text-transform: none;"><a href="https://www.rightcapital.com/login?cobrand=Bk2t09O2NLeM47NJBweHXA&type=client" target="_blank" style="padding-left:5px;"><img src="images/rclogo.png" width="50" /> RightCapital</a></li>
	              <li role="separator" class="divider"></li>
	              <li class="navlink" style="text-transform: none;"><a href="https://wwws.betterment.com/app/login" target="_blank" style="padding-left:5px;"><img src="images/bettermentlogo.jpeg" width="50"/> Betterment</a></li>
	              <li role="separator" class="divider"></li>
	              <li class="navlink" style="text-transform: none;"><a href="https://www.advisorclient.com/login" target="_blank" style="padding-left:5px;"><img src="images/tdlogo.png" width="50"/> TDAmeritrade</a></li>
	            </ul>
	         </li>
        </ul>
      </div>
    </div>
  </nav>
 <!--  <a href='https://financeinsights.net/g6pUKQbhNG3JcAb7jc02Qr' target="_blank">
	<img src="https://d281oufm7mm6g9.cloudfront.net/campaigns/hto_2020/web_widgets/horiz.jpg" style="margin-top:70px;width:100%;" class="underNavImg">
  </a> -->