<?php
$id = $_REQUEST['id'];
//$con = mysqli_connect('localhost','root','','astha_clinic');
//if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
//}
include_once("db/connection.php");
//mysqli_select_db($con,"astha_clinic");
$sql="select name,contact,dob,place from patient_details where id=".$id.";";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo $row["name"];
}

?>