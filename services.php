<?php require 'header.php'; ?>

<?php
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
</style>
   <div class="container">

    <!-- Intro Content -->
    <div class="row">
        <h2 >Financial Plan Menu of Services</h2><br>
		<h6>Click on checkboxes for services of interest and the estimated financial planning fee will be calculated for your reference.</h6>
		<form name="serviceForm">
		<table class="table table-striped">
			<tr>
				<th scope="col" style="width:20%;"></th>
				<th scope="col">Basic</th>
				<th scope="col">Moderate</th>
				<th scope="col">Complex</th>
			</tr>
			
			<?php
			$index = 0;
			while($row = $result->fetch_assoc()) {
				echo "<tr><th scope='row'>" . $row["service"]. "</th><td><input type='radio' name='".$row["service"]."' value='" . $row["lowValue"]. "' onclick='calculateFee(".$index.",".$row["lowValue"].");'> " 
				. $row["lowName"] . "</td><td><input type='radio' name='".$row["service"]."' value='" . $row["mediumValue"]. "' onclick='calculateFee(".$index.",".$row["mediumValue"].");'> " 
				. $row["mediumName"] . "</td><td><input type='radio' name='".$row["service"]."' value='" . $row["highValue"]. "' onclick='calculateFee(".$index.",".$row["highValue"].");'> " 
				. $row["highName"] . "</td></tr>";
				$index = $index + 1;
			}
			?>
			<tr><td colspan="4"></th></tr>
			<tr>
				<th scope="row">Fee based on level of complexity</th>
				<td style="text-align:center;">$500 - $2,750</td>
				<td style="text-align:center;">$2,750 - $4,525</td>
				<td style="text-align:center;">$4,525 - $6,750</td>
			</tr>
			<tr><td colspan="4"></th></tr>
			<tr>
				<th scope="row">Estimated Fee:</th>
				<td colspan="3">$<span id="fee">0</span></td>
			</tr>
		</table>
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
});
</script>
    