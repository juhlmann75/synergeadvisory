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
		$title = 'Synergōs Advisory';
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
					<li class="col-sm-4">
						<ul>
							<li class="dropdown-header">Insights for you</li>
							<li> <button style="margin-bottom:-3px;" type="button" onclick="alert('The assessment is not loaded yet');" data-token="UVmsqXF3DYKgA8jbvKQb" class="embed-survey-start-button">
							Wealth Building Potential Assessment</button><script src="https://measure.datapoints.com/js/embed.js?v=1.031" 
							data-id="survey" data-domain="https://measure.datapoints.com" data-token="UVmsqXF3DYKgA8jbvKQb"></script></li>
							<li><button style="margin-bottom:-3px;" type="button" onclick="alert('The assessment is not loaded yet');" data-token="ObedLHwAJVBioWFLSnpC" class="embed-survey-start-button">
							Career Fit Assessment</button><script src="https://measure.datapoints.com/js/embed.js?v=1.031" data-id="survey" data-domain="https://measure.datapoints.com" data-token="ObedLHwAJVBioWFLSnpC"></script></li>
							<li><button style="margin-bottom:-3px;" type="button" onclick="alert('The assessment is not loaded yet');" data-token="sgP2O9ngbGPIBirWhvn1" class="embed-survey-start-button">
							Investor Composure Assessment</button><script src="https://measure.datapoints.com/js/embed.js?v=1.031" data-id="survey" data-domain="https://measure.datapoints.com" data-token="sgP2O9ngbGPIBirWhvn1"></script></li>
							<li> <button style="margin-bottom:-3px;" type="button" onclick="alert('The assessment is not loaded yet');" data-token="7MOzVncdSjnxv4wjXNy2" class="embed-survey-start-button">
							Financial Planning Habits Assessment</button><script src="https://measure.datapoints.com/js/embed.js?v=1.031" data-id="survey" data-domain="https://measure.datapoints.com" data-token="7MOzVncdSjnxv4wjXNy2"></script></li>

						</ul>
					</li>
					<li class="col-sm-5">
					
						<ul>
							<li class="dropdown-header">Tools for your business</li>
							<li><a target="_blank" href="https://urldefense.proofpoint.com/v2/url?u=https-3A__calcxml.com_do_bus01&d=DwMFaQ&c=euGZstcaTDllvimEN8b7jXrwqOf-v5A_CdpgnVfiiMM&r=asuTQzV4vdcqpk82UnvSgmRHVR5lXYYIApEMGysGBHY&m=mh_bTn8OBpyPlgEanrCc2lvYzv8gBLuBMv3ZhiSHm0w&s=eCUcUPh_rqzC9KD02Dn4sfsrnDt16zAj5v-oB7KxUII&e=">What are the tax savings of a qualified retirement/cafeteria plan?</a></li>
							<li><a target="_blank" href="https://urldefense.proofpoint.com/v2/url?u=https-3A__calcxml.com_do_bus02&d=DwMFaQ&c=euGZstcaTDllvimEN8b7jXrwqOf-v5A_CdpgnVfiiMM&r=asuTQzV4vdcqpk82UnvSgmRHVR5lXYYIApEMGysGBHY&m=lcrffRSh-bPXfnDENNQJr8Dz11DWteCqP543EUrMVPA&s=iKWnTP-NDgGYX7iUYV-jLW8SeXEUZz6y4SeHdZjELE8&e=">What are my new business startup costs?</a></li>
							<li><a target="_blank" href="https://urldefense.proofpoint.com/v2/url?u=https-3A__calcxml.com_calculators_modal-2Dpremium-2Dapr-2Dcalculator&d=DwMFaQ&c=euGZstcaTDllvimEN8b7jXrwqOf-v5A_CdpgnVfiiMM&r=asuTQzV4vdcqpk82UnvSgmRHVR5lXYYIApEMGysGBHY&m=lcrffRSh-bPXfnDENNQJr8Dz11DWteCqP543EUrMVPA&s=um45hrCPrL2TMeOuBCM8kDeAI1iNyn9t-QCHLWm-Q4o&e=">Should I pay or charge monthly, quarterly or annually?</a></li>
						</ul>
						<!---<center><span class="dropdown-header">Tools for your business</span></center>
						<ul class="row dropdown-menu-large">
							<li class="col-sm-6">
								<ul>
									<li><a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__calcxml.com_do_bus01&d=DwMFaQ&c=euGZstcaTDllvimEN8b7jXrwqOf-v5A_CdpgnVfiiMM&r=asuTQzV4vdcqpk82UnvSgmRHVR5lXYYIApEMGysGBHY&m=mh_bTn8OBpyPlgEanrCc2lvYzv8gBLuBMv3ZhiSHm0w&s=eCUcUPh_rqzC9KD02Dn4sfsrnDt16zAj5v-oB7KxUII&e=">What are the tax savings of a qualified retirement/cafeteria plan?</a></li>
									<li><a href="#">What are my new business startup costs?</a></li>
									<li><a href="#">Should I pay or charge monthly, quarterly or annually?</a></li>
									<li><a href="#">What is the value of my business?</a></li>
									<li><a href="#">How many units do I need to sell to breakeven?</a></li>
								</ul>
							</li>
							<li class="col-sm-6">
								<ul>
									<li><a href="#">Should I lease or buy equipment?</a></li>
									<li><a href="#">What are my business financial ratios?</a></li>
									<li><a href="#">What is my employee total compensation package worth?</a></li>
									<li><a href="#">What are my tax savings with Section 179 deduction?</a></li>
								</ul>
							</li>
				
					
						</ul>--->
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Insights For You</li>
							<li><a href="https://www.rightcapital.com/sign-up?referral=Bk2t09O2NLeM47NJBweHXA&type=client" target="_blank">Track your finances</a></li>
							
						</ul>
					</li>
				</ul>
				
			</li>
        </ul>
      </div>
    </div>
  </nav>