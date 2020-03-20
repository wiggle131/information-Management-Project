<?php
 $con = mysqli_connect("localhost","root","","esport_org")
 or die("Error in Connection");

$sqlQuery = "SELECT tournamentWinning,dateOfEvent FROM tournament ";

$result = mysqli_query($con,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($con);

echo json_encode($data);
?>