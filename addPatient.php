<?php
$name =$_POST['name'];
$age =$_POST['age'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$place = $_POST['place'];
$refer = $_POST['refer'];
$complaint = $_POST['complaint'];
$past = $_POST['past'];
$drug = $_POST['drug'];
$extra = $_POST['extra'];
 
//$con = mysqli_connect('localhost','root','','astha_clinic');
//if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
//}
//mysqli_select_db($con,"astha_clinic");
include_once("db/connection.php");

$sql="insert into patient_details(name,age,contact,dob,sex,referal,place,complaint,past,drug,extra) values ('".$name."','".$age."','".$contact."','".$dob."','".$gender."','".$refer."','".$place."','".$complaint."','".$past."','".$drug."','".$extra."');";
$result = mysqli_query($con,$sql);

echo $sql;

?>