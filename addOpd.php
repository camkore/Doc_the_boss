<?php
$name=$_REQUEST['name'];
$id = $_REQUEST['id'];
$date = $_REQUEST['date'];
$proc = $_REQUEST['proc'];
$pproc = $_REQUEST['pproc'];
$expense = $_REQUEST['expense'];
$fee = $_REQUEST['fee'];
$comment = $_REQUEST['comment'];
$con = mysqli_connect('localhost','root','','astha_clinic');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"astha_clinic");

echo $id." ".$date." ".$proc." ".$pproc." ".$expense." ".$fee." ".$comment;
$sql="insert into opd(patient_id,date,proc,proc_pl,fees,expenses,comments,name) values(".$id.",'".$date."','".$proc."','".$pproc."',".$expense.",".$fee.",'".$comment."','".$name."');";
$result = mysqli_query($con,$sql);
echo "\n".$sql;
if($result)
    echo "user added successfully!!!";
else 
    echo "something went wrong (:(:";

?>