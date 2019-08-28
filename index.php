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

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.php"><img src="images/synergoslogo.PNG" style="width:260px;margin-top:-24px;"/></a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse ">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="images/seattle-front.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content" style="height:100%;">
                <h2 class="animated fadeInDown" style="margin-top:50%;">Welcome to<br>Synergōs Advisory</h2>
                <p class="animated fadeInUp" style="font-size: 14pt; font-weight:bold;width:100%;">A Collaborative<br>Financial Planning & Wealth Management<br>Practice</p>
                <a href="#about" class="btn-get-started animated fadeInUp readmore" style="margin-bottom:40%;">Learn More</a><br>
                 <span style="color:white;font-weight:bold;font-size:30px"><!---&#11167;---></span>
              </div>
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="item">
            <div class="carousel-background"><img src="images/seattle5h-min.JPG" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                  <center>
                <h3 class="animated fadeInDown" style="color:white;width:70%;">
                    As an entrepreneur, you’re juggling personnel decisions, capital allocation, 
					growing sales, cutting costs and constantly putting fires out…
                  </h3></center>
                <p class="animated fadeInUp"></p>
                <a href="#about" class="btn-get-started animated fadeInUp readmore">Learn More</a>
                  <!---<span style="color:white;font-weight:bold;font-size:30px">&#11167;</span>--->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="item">
            <div class="carousel-background"><img src="images/seattle2h-min.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                  <center>
                <h3 class="animated fadeInDown" style="color:white;width:70%;">
                    With all your time tied up in running your business, who’s making sure your personal finances are on track?
                 </h3>
                  </center>
                <p class="animated fadeInUp"></p>
                <a href="#about" class="btn-get-started animated fadeInUp readmore">Learn More</a>
                  <!---<span style="color:white;font-weight:bold;font-size:30px">&#11167;</span>--->
              </div>
            </div>
          </div>
		  
		  <!-- Slide 4 -->
          <div class="item">
            <div class="carousel-background"><img src="images/seattle3h-min.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                  <center>
                <h3 class="animated fadeInDown" style="color:white;width:70%;">
                    We do!<br><br>Synergōs can provide you with ongoing financial planning and wealth management 
					tailored to your unique needs while you focus on running your business.<br><br>Allow us to work on your behalf.
                 </h3>
                  </center>
                <p class="animated fadeInUp"></p>
                <a href="#about" class="btn-get-started animated fadeInUp readmore">Learn More</a>
                  <!---<span style="color:white;font-weight:bold;font-size:30px">&#11167;</span>--->
              </div>
            </div>
          </div>
            
           <!-- Slide 5 -->
          <div class="item">
            <div class="carousel-background"><img src="images/seattle4h-min.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h3 class="animated fadeInDown" style="color:white">Plan Today for a Better Tomorrow</h3>
                <p class="animated fadeInUp"></p>
                <a href="https://calendly.com/synergosadvice" class="btn-schedule animated fadeInUp" target="_blank">Schedule Complimentary Consultation</a>
                  
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon fa fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <!-- About -->
  <section id="about" class="about-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>About</h2>
            <!---<div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>--->
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <!---<div class="col-md-6 about-img">
          <img src="img/about-img.jpg" alt="">
        </div>--->

        <div class="col-md-12 content">
          <!---<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elite storium paralate</h2>
          <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.</h3>--->
          <p style="font-size:14pt;">
            <!---Based in Seattle, Synergē Advisory provides independent financial planning and wealth management services to entrepreneurs, 
              independent contractors and emerging business owners across the continental United States. We align your values, goals and resources 
              to craft tailored financial solutions.  And, most importantly, we work with you to implement the recommendations through our coaching 
              services – after all, a plan is only as good as its implementation.--->
              Synergōs Advisory develops comprehensive financial solutions to help 
              clients – self-employed individuals, business owners, entrepreneurs, 
              technology professionals and those who care about their financial 
              future -- achieve the quality of life they aspire to.  
              <br><br>
              We differentiate ourselves by incorporating:</p>
              <br>
              <ul class="aboutInfo">
                <li>
                    A <b>values-based approach</b> to financial planning.  
                We will help you define what values and motivations are important to you.  
				These serve as the foundation for you to make informed financial decisions 
				that align with your goals and financial resources.  
				We have found our clients are most successful when they can make that alignment.
                </li>
                <li>
                    <b>Coaching</b>.  It doesn’t end with just a financial plan.  
                As we implement and monitor progress against goals, we will work closely with you, encouraging you to make positive 
				changes in financial behavior.  We will serve as your accountability partner, consistent with the 
				collaborative process we advocate.
                </li>
                <li>
                    <b>Fiduciary duty</b>.  We always put our clients’ interests first.  
                Synergōs is a fee-only advisor and does not sell any financial products 
                or receive commissions, referral fees or payments from insurance or investment products.
                </li>
                <li>
                    <b>Technology</b>. We understand you lead a busy life.  So we’ve incorporated tools to facilitate online collaboration and virtual meetings.  We want to ensure your time is well spent on the process – not fighting traffic to get to and from appointments although we are always happy to meet with you in-person, too.
                </li>
              </ul>
            <br>
                <a href="https://calendly.com/synergosadvice" class="btn-schedule animated" target="_blank" style="color:#002060;font-weight:bold;">Schedule Complimentary Consultation</a>
          
          <br>
            <br>
          <input id="aboutButton" type="button" value="Meet Our Founder" onclick="location.href='david-uhlmann.php';">
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 1 -->
  <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s">You are most likely to succeed when you align your core values with your goals and financial resources.</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s"></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Services</h2>
              <div class="heading-line"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4>Financial Coaching</h4>
            <ul>
                <li class="serviceList">Aligning your values, goals and resources to make quality financial decisions</li>
                <li class="serviceList">Uncovering and resolving hidden cognitive biases preventing you from establishing healthy financial habits</li>
                <li class="serviceList">Nonjudgmental accountability and encouragement as you implement changes and stay on track with your plan</li>
            </ul>
        </div>
        <div class="col-md-4">
          <h4>Financial Planning</h4>
           <ul>
               <li class="serviceList">Revenue and Expense Projections</li>
               <li class="serviceList">Budgeting</li>
               <li class="serviceList">Cash Flow Management Strategies</li>
               <li class="serviceList">Financing and SBA Strategies</li>
               <li class="serviceList">Tax Planning Strategies</li>
               <li class="serviceList">Business Retirement Strategies</li>
               <li class="serviceList">Deferred Compensation Strategies</li>
               <li class="serviceList">Succession Planning</li>
               <li class="serviceList">Exit Strategies</li>
               <li class="serviceList">Risk Management Strategies</li>
               <li class="serviceList">Estate Planning Strategies</li>
               <li class="serviceList">Stock Options and RS/RSU Planning</li>
            </ul>
        </div>
        <div class="col-md-4">
          <h4>Wealth Management</h4>
           <ul>
               <li class="serviceList">Portfolio Construction</li>
               <li class="serviceList">Asset Allocation</li>
               <li class="serviceList">Active/Passive Strategies</li>
               <li class="serviceList">Wealth Preservation Strategies</li>
               <li class="serviceList">Tax Efficient Portfolios </li>
               <li class="serviceList">Income Strategies</li>
               <li class="serviceList">Socially Responsible Investing and Environmental-Social-Governance (ESG) Solutions</li>
               <li class="serviceList">Impact Investing</li>
            </ul>
        </div>
      </div>
    </div>
  </section>

  
  <!-- Parallax 2 -->
  <section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s" style="color:#002060">Plan today for a better tomorrow</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s"><a href="https://calendly.com/synergosadvice" class="btn-schedule animated" target="_blank" style="color:#002060;font-weight:bold;">Schedule Complimentary Consultation</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  <!-- Contact -->
  <section id="contact" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Contact us</h2>
            <div class="heading-line"></div>
        
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="" method="post" class="form-horizontal contactForm" role="form">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Send message</button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>

  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Main Office</h5>
            <p>
              The Met Tower<br>
              1942 Westlake Avenue, # 904<br>
              Seattle, WA 98101
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Call</h5>
            <p>
             Toll free:  877.752.6609  (877 PLAN N0W)<br>
             Direct:	206.800.8056
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email</h5>
            <p>
              <a href="mailto:plannow@synergosadvice.com">plannow@synergosadvice.com</a>
            </p>
          </div>
        </div>
      </div>
     
    </div>
  </section>
  
  <!-- Contact -->
  <section id="affiliations" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h3>Professional Designations & Affiliations</h3>
            <div class="heading-line"></div>
          </div>
		</div>
	  </div>
		<div class="row">
		  <ul style="list-style-type:none;">
			<li class="">
				<div class="col-sm-3">
					<img src="images/napfa-logo.png" width="175" style="padding-bottom:20px;">
				</div>
				<div class="col-sm-9 affil" style="text-align:left">
					<a href="https://www.napfa.org/member/96187/29196" style="font-weight: 700; color:#002060" target="_blank">David R. Uhlmann is a NAPFA-Registered Financial Advisor</a><br>
					The National Association of Personal Financial Advisors (NAPFA) is a leading professional association of Fee-Only 
					financial advisors—highly trained professionals who are committed to working in the best interests of those they serve.
				</div>
			</li>
			<li class="">
				<div class="col-sm-3">
					<img src="images/cfp-logo.jpg" width="175" style="padding-bottom:20px;">
				</div>
				<div class="col-sm-9 affil" style="text-align:left">
					<a target="_blank" style="font-weight: 700; color:#002060" href="https://www.letsmakeaplan.org/choose-a-cfp-professional/find-a-cfp-professional/Details/?key=0f3b200b-9ff1-4dfd-a07f-9af9b6d33fdb&SimpleSearch=False&Latitude=0&Longitude=0&AreasOfSpecialization=&LastName=Uhlmann&Page=1&Session=28273">
					David R. Uhlmann is a CERTIFIED FINANCIAL PLANNER&#153; Professional - Click for Verification</a><br>
					CFP® professionals are held to strict ethical standards to ensure financial planning recommendations are in your best interest. 
					What’s more, a CFP® professional must acquire several years of experience related to delivering financial planning services 
					to clients and pass the comprehensive CFP® Certification Exam before they can use the CFP® designation.
				</div>
			</li>
			<li class="">
				<div class="col-sm-3">
					<img src="images/xy-logo.jpg" width="175" style="padding-bottom:20px;">
				</div>
				<div class="col-sm-9 affil" style="text-align:left">
					<a href="http://www.xyplanningnetwork.com/"  style="font-weight: 700; color:#002060" target="_blank">David R. Uhlmann is a Member of the XY Planning Network</a><br>
					The XY Planning Network is the leading organization of fee-only financial advisors who are focused on working 
					with Generation X and Generation Y clients. Our mission is to connect consumers with best-in-class financial 
					advisors who specialize in working with clients just like you.
				</div>
			</li>
		  </ul>
		</div>
      </div>

     </div>

    </div>
  </section>
  
  
	<?php require 'include/javascript/master.php' ?>
	<?php require 'footer.php'; ?>
	
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    
  <script>
    
    $( document ).ready(function() {
      $("#introCarousel").carousel({interval: 8000})
    });  
  </script>

</body>

</html>
