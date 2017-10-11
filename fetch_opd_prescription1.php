<?php
include_once("db/connection.php");
    $key=$_GET['key'];
    $array = array();

$sqlQuery="select * from ointment where ointmnet1 LIKE '%{$key}%'";
$result = mysqli_query($con,$sqlQuery);    

    while($row=mysqli_fetch_array($result))
    {
      $array[] = $row['ointmnet1'];
    }
    echo json_encode($array);
?>