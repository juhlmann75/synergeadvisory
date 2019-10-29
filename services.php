<?php require 'header.php'; ?>

<?php
/*
$servername = "a2plcpnl0301";
$username = "webadmin";
$password = "u4LmAnNj3986$#";
$dbname = "synergos";
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "synergos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM serviceMenu";
$result = $conn->query($sql);
?>
<style>
tr td {
	text-align:left;
}
.rLabel {
	float: left;
    width: 90%;
    margin-left: 5px;
}

.rRadio {
	float:left;
}
.tiers{
	width:25%;
}
</style>
   <div class="container" style="margin-top: 75px;">

    <!-- Intro Content -->
    <div class="row">
        <h2 >Build Your Plan</h2><br>
		<h6 style="line-height: 1.5;">Allow Synergos to serve as your guide on your path toward your aspirations.<br>
Select the categories below that match your interests. <br>
Your custom plan will fall under one of three tiers: Pathfinder, Navigator or Trailblazer.</h6>
		<form name="serviceForm">
		<div id="tab">
		<table class="table table-striped">
			<tr>
				<th scope="col" style="width:25%;"></th>
				<th scope="col" class="tiers">Pathfinder</th>
				<th scope="col" class="tiers">Navigator</th>
				<th scope="col" class="tiers">Trailblazer</th>
			</tr>
			
			<?php
			$index = 0;
			while($row = $result->fetch_assoc()) { ?>
				<tr>
					<th scope='row'><?php echo $row["service"]; ?></th>
					<td>
						<input type='radio' class="rRadio" name="<?php echo $row["service"]; ?>" value="<?php echo $row["lowValue"]; ?>" onclick='calculateFee("<?php echo $index; ?>","<?php echo $row["lowValue"]; ?>");'> <div class="rLabel"><?php echo $row["lowName"]; ?></div>
					</td>
					<td>
						<input type='radio' class="rRadio" name="<?php echo $row["service"]; ?>" value="<?php echo $row["mediumValue"]; ?>" onclick='calculateFee("<?php echo $index; ?>","<?php echo $row["mediumValue"]; ?>");'> <div class="rLabel"><?php echo $row["mediumName"]; ?></div>
					</td>
					<td>
						<input type='radio' class="rRadio" name="<?php echo $row["service"]; ?>" value="<?php echo $row["highValue"]; ?>" onclick='calculateFee("<?php echo $index; ?>","<?php echo $row["highValue"]; ?>");'> <div class="rLabel"><?php echo $row["highName"]; ?></div>
					</td>
				</tr>
				<?php $index = $index + 1;
			}
			?>
			<tr><td colspan="4"></th></tr>
			<tr>
				<th scope="row">Planning Tiers</th>
				<td >Pathfinder<br>$500 - $2,750</td>
				<td >Navigator<br>$2,751 - $4,525</td>
				<td >Trailblazer<br>$4,526 - $6,750</td>
			</tr>
			<tr><td colspan="4"></th></tr>
			<tr>
				<th scope="row">Estimated Fee:</th>
				<td colspan="3">$<span id="fee">0</span><span id="feeLabel" style="margin-left:5px;font-weight:bold;"></span></td>
			</tr>
		</table>
		</div>
		</form>
		<button type="button" class="btn btn-primary" id="clear">Clear Form</button>
    </div>
  </div>
  <br>
  <?php
	  $conn->close();
	?>
  <?php require 'include/javascript/master.php' ?>
  <?php require 'footer.php'; ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</body>

</html>

<script>
var services = [];
var fee = 0;

for(var i = 0; i < <?php echo $index; ?>; i++){
	services[i] = 0;
}

function calculateFee(index, value){
	services[index] = value;
	fee = 0;
	for(var i = 0; i < <?php echo $index; ?>; i++){
		fee += services[i] * 250;
	}
	//console.log(fee);
	$('#fee').html(fee);
	if(fee >= 500 && fee <= 2750){
		$('#feeLabel').text("(Pathfinder)");
	}
	else if(fee > 2750 && fee <= 4525){
		$('#feeLabel').text("(Navigator)");
	}
	else if(fee > 4525 && fee <= 6750){
		$('#feeLabel').text("(Trailblazer)");
	}
	else {
		$('#feeLabel').text("");
	}
}

$('#clear').on('click', function(){
	for(var i = 0; i < <?php echo $index; ?>; i++){
		services[i] = 0;
	}
	$('#fee').html(0);
	
	allInp = document.getElementsByTagName("input");
	for (i = 0; i < allInp.length; i++) 
	{
	  if (allInp[i].type == "radio")
	  {
		allInp[i].checked = false; 
	  }
	}
	$('#feeLabel').text("");
});


</script>
    