<?php require 'header.php'; ?>

<style>

</style>

<?php 
if(isset($_GET['c']))
{
	$assess = htmlspecialchars($_GET["c"]); 
}
else {
	$assess = "";
}
?>


<?php
if($assess == "what-are-the-tax-savings-of-a-qualified-retirement_cafeteria-plan"){
?>

<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js'></script><iframe frameBorder='0' src='https://www.calcxml.com/calculators/bus01?skn=791&r=2&tabs=1&secure=1' style='width: 100%;'></iframe><script type='text/javascript'>
iFrameResize({heightCalculationMethod: 'lowestElement', inPageLinks: true, initCallback: function (iFrame)
{iFrame.iFrameResizer.moveToAnchor('results');}});</script>

<?php
}
else if($assess == "what-are-my-new-business-startup-costs"){
?>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js'></script><iframe frameBorder='0' src='https://www.calcxml.com/calculators/bus02?skn=791&r=2&tabs=1&secure=1' style='width: 100%;'></iframe><script type='text/javascript'>
iFrameResize({heightCalculationMethod: 'lowestElement', inPageLinks: true, initCallback: function (iFrame)
{iFrame.iFrameResizer.moveToAnchor('results');}});</script>
<?php 
}
else if($assess == "should-I-pay-or-charge-monthly-quarterly-or-annually"){
?>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js'></script><iframe frameBorder='0' src='https://www.calcxml.com/calculators/bus03?skn=791&r=2&tabs=1&secure=1' style='width: 100%;'></iframe><script type='text/javascript'>
iFrameResize({heightCalculationMethod: 'lowestElement', inPageLinks: true, initCallback: function (iFrame)
{iFrame.iFrameResizer.moveToAnchor('results');}});</script>


<?php
}
else if($assess == "what-is-the-value-of-my-business"){
?>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js'></script><iframe frameBorder='0' src='https://www.calcxml.com/calculators/bus04?skn=791&r=2&tabs=1&secure=1' style='width: 100%;'></iframe><script type='text/javascript'>
iFrameResize({heightCalculationMethod: 'lowestElement', inPageLinks: true, initCallback: function (iFrame)
{iFrame.iFrameResizer.moveToAnchor('results');}});</script>

<?php
}
else if($assess == "how-many-units-do-i-need-to-sell-to-breakeven"){
?>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js'></script><iframe frameBorder='0' src='https://www.calcxml.com/calculators/bus05?skn=791&r=2&tabs=1&secure=1' style='width: 100%;'></iframe><script type='text/javascript'>
iFrameResize({heightCalculationMethod: 'lowestElement', inPageLinks: true, initCallback: function (iFrame)
{iFrame.iFrameResizer.moveToAnchor('results');}});</script>

<?php
}
else if($assess == "should-i-lease-or-buy-equipment"){
?>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js'></script><iframe frameBorder='0' src='https://www.calcxml.com/calculators/bus06?skn=791&r=2&tabs=1&secure=1' style='width: 100%;'></iframe><script type='text/javascript'>
iFrameResize({heightCalculationMethod: 'lowestElement', inPageLinks: true, initCallback: function (iFrame)
{iFrame.iFrameResizer.moveToAnchor('results');}});</script>

<?php
}
else if($assess == "what-are-my-business-financial-ratios"){
?>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js'></script><iframe frameBorder='0' src='https://www.calcxml.com/calculators/bus07?skn=791&r=2&tabs=1&secure=1' style='width: 100%;'></iframe><script type='text/javascript'>
iFrameResize({heightCalculationMethod: 'lowestElement', inPageLinks: true, initCallback: function (iFrame)
{iFrame.iFrameResizer.moveToAnchor('results');}});</script>

<?php
}
else if($assess == "what-is-my-employee-total-compensation-package-worth"){
?>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js'></script><iframe frameBorder='0' src='https://www.calcxml.com/calculators/bus08?skn=791&r=2&tabs=1&secure=1' style='width: 100%;'></iframe><script type='text/javascript'>
iFrameResize({heightCalculationMethod: 'lowestElement', inPageLinks: true, initCallback: function (iFrame)
{iFrame.iFrameResizer.moveToAnchor('results');}});</script>

<?php
}
else if($assess == "what-are-my-tax-savings-with-section-179-deduction"){
?>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.5/iframeResizer.min.js'></script><iframe frameBorder='0' src='https://www.calcxml.com/calculators/bus09?skn=791&r=2&tabs=1&secure=1' style='width: 100%;'></iframe><script type='text/javascript'>
iFrameResize({heightCalculationMethod: 'lowestElement', inPageLinks: true, initCallback: function (iFrame)
{iFrame.iFrameResizer.moveToAnchor('results');}});</script>
<?php 
}
else{
?>
<div class="container" style="margin-top:100px;margin-bottom:10%;">
  <h2>Tools for your Business</h2>
  <div class="list-group">
    <a href="/calculator.php?c=what-are-the-tax-savings-of-a-qualified-retirement_cafeteria-plan" class="list-group-item">What are the tax savings of a qualified retirement/cafeteria plan?</a>
	<a href="/calculator.php?c=what-are-my-new-business-startup-costs" class="list-group-item">What are my new business startup costs?</a>
	<a href="/calculator.php?c=should-I-pay-or-charge-monthly-quarterly-or-annually" class="list-group-item">Should I pay or charge monthly, quarterly or annually?</a>
	<a href="/calculator.php?c=what-is-the-value-of-my-business" class="list-group-item">What is the value of my business?</a>
	<a href="/calculator.php?c=how-many-units-do-i-need-to-sell-to-breakeven" class="list-group-item">How many units do I need to sell to breakeven?</a>
	<a href="/calculator.php?c=should-i-lease-or-buy-equipment" class="list-group-item">Should I lease or buy equipment?</a>
	<a href="/calculator.php?c=what-are-my-business-financial-ratios" class="list-group-item">What are my business financial ratios?</a>
	<a href="/calculator.php?c=what-is-my-employee-total-compensation-package-worth" class="list-group-item">What is my employee total compensation package worth?</a>
	<a href="/calculator.php?c=what-are-my-tax-savings-with-section-179-deduction" class="list-group-item">What are my tax savings with Section 179 deduction?</a>
  </div>
</div>
<?php } ?>

<?php require 'include/javascript/master.php' ?>
<?php require 'footer.php'; ?>

  

</body>

</html>
