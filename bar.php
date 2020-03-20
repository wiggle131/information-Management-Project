<?php
 $con = mysqli_connect("localhost","root","","esport_org")
 or die("Error in Connection");

$sqlQuery = "SELECT COUNT(*) as count from item_usage";

$result = mysqli_query($con,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($con);

echo json_encode($data);
?>