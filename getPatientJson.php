<?php
//$con = mysqli_connect('localhost','root','','astha_clinic');
//if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
//}
include_once("db/connection.php");
//mysqli_select_db($con,"astha_clinic");
$sql="select * from patient_details;";
$result = mysqli_query($con,$sql);
$emparray[] = array();
echo "{\"patients\":";
while($row = mysqli_fetch_array($result)) {
$emparray[] = $row;
}
 echo json_encode($emparray);
echo "}";
?>