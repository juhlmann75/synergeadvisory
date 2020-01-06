<?php require 'header.php'; ?>

<style>
.assessInfo {
	margin-bottom:30px;
	text-align:left;
}

.dataLink {
	text-decoration: underline;
}
</style>

<?php 
if(isset($_GET['a']))
{
	$assess = htmlspecialchars($_GET["a"]); 
}
else {
	$assess = "";
}
?>
<div style="margin-top:100px;"></div>
<?php
if($assess == "wealth-building-potential"){
?>
<div class="container" >
<h4>What’s your potential for building and maintaining wealth? Take the assessment.</h4>

<div class="assessInfo">
Understanding your patterns of wealth behaviors can help identify your strengths and areas for
improvement as you create your personalized financial plan. Synergōs Advisory collaborates with
<a href="https://www.datapoints.com" class="dataLink" target="_blank">DataPoints</a>, a behavioral-finance research and technology firm, to develop a comprehensive picture of
your wealth-related behaviors, attitudes, and values, all based on 40+ years of data and research that
led to the published works “The Millionaire Next Door” and “The Millionaire Mind.” This assessment can
uncover opportunities for positive changes in behavior so you can build and maintain your wealth over
time.
</div>
<button style="margin-bottom:-3px;background:#002060;font-weight:bold;" type="button" onclick="alert('The assessment is not loaded yet');" data-token="7MOzVncdSjnxv4wjXNy2" class="embed-survey-start-button">
Wealth Building Potential Assessment</button>
<script src="https://measure.datapoints.com/js/embed.js?v=1.031" 
data-id="survey" data-domain="https://measure.datapoints.com" data-token="7MOzVncdSjnxv4wjXNy2"></script>
</div>
<?php
}
else if($assess == "career-fit"){
?>
<div class="container" >
<h4>Your career fit and long-term income potential. Take the assessment.</h4>

<div class="assessInfo">
Synergōs Advisory strongly believes that having a career that “fits” your interests and skills, and job
satisfaction, typically relates to your income potential — an important factor in savings and, therefore,
wealth building. Career Fit is a short assessment that can help you understand the match between your
career and long-term income potential, one of the first steps toward building success and finding
happiness, ultimately affecting all future financial planning.
</div>
<button style="margin-bottom:-3px;background:#002060;font-weight:bold;" type="button" onclick="alert('The assessment is not loaded yet');" data-token="UVmsqXF3DYKgA8jbvKQb" class="embed-survey-start-button">
Career Fit Assessment</button><script src="https://measure.datapoints.com/js/embed.js?v=1.031" data-id="survey" data-domain="https://measure.datapoints.com" data-token="UVmsqXF3DYKgA8jbvKQb"></script>
</div>
<?php 
}
else if($assess == "investor-composure"){
?>
<div class="container" >
<h4>How do you react to market changes? Take the assessment.</h4>

<div class="assessInfo">
According to extensive research conducted by <a href="https://www.datapoints.com" class="dataLink" target="_blank">DataPoints</a>, a behavioral finance research and technology
firm, how you react to changes in the market can not only have a profound impact on how much wealth
you build overtime, but more importantly, it can impact if you achieve your financial goals and dreams.
<a href="https://www.datapoints.com" class="dataLink" target="_blank">DataPoints'</a> findings are based on 40+ years of data and research that led to best-selling “The Millionaire
Next Door“ and “The Millionaire Mind“ books. Take the assessment to find out how you react to market
changes and be better prepared for future financial planning.
</div>
<button style="margin-bottom:-3px;background:#002060;font-weight:bold;" type="button" onclick="alert('The assessment is not loaded yet');" data-token="5BuRnDel8TdjotZbOijt" class="embed-survey-start-button">
Investor Composure Assessment</button><script src="https://measure.datapoints.com/js/embed.js?v=1.031" data-id="survey" data-domain="https://measure.datapoints.com" data-token="5BuRnDel8TdjotZbOijt"></script>
</div>
<?php
}
else if($assess == "financial-planning-habits"){
?>
<div class="container" >
<h4>How does your financial planning stack up? Take the assessment.</h4>

<div class="assessInfo">
According to extensive research conducted by <a href="https://www.datapoints.com" class="dataLink" target="_blank">DataPoints</a>, a behavioral finance research and technology
firm, effective financial planning behaviors can have a profound effect on your success in achieving your
financial goals and accumulating wealth. <a href="https://www.datapoints.com" class="dataLink" target="_blank">DataPoints'</a> findings are based on 40+ years of data and
research that lead to best-selling “The Millionaire Next Door” and “The Millionaire Mind” books.
</div>
<button style="margin-bottom:-3px;background:#002060;font-weight:bold;" type="button" onclick="alert('The assessment is not loaded yet');" data-token="sgP2O9ngbGPIBirWhvn1" class="embed-survey-start-button">
Financial Planning Habits Assessment</button><script src="https://measure.datapoints.com/js/embed.js?v=1.031" data-id="survey" data-domain="https://measure.datapoints.com" data-token="sgP2O9ngbGPIBirWhvn1"></script>
</div>
<?php 
}
else{
?>
<div class="container" >
  <h2>Insights For You</h2>
  <div class="list-group">
    <a href="/assessment.php?a=wealth-building-potential" class="list-group-item">Wealth Building Potential Assessment</a></li>
	<a href="/assessment.php?a=career-fit" class="list-group-item">Career Fit Assessment</a></li>
	<a href="/assessment.php?a=investor-composure" class="list-group-item">Investor Composure Assessment</a></li>
	<a href="/assessment.php?a=financial-planning-habits" class="list-group-item">Financial Planning Habits Assessment</a></li>
  </div>
</div>
<?php } ?>

<div style="margin-bottom:20%;"></div>

<?php require 'include/javascript/master.php' ?>
<?php require 'footer.php'; ?>

  

</body>

</html>
