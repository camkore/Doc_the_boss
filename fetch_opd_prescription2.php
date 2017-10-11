<?php
include_once("db/connection.php");
    $key=$_GET['key'];
    $array = array();

$sqlQuery="select * from other where other LIKE '%{$key}%'";
$result = mysqli_query($con,$sqlQuery);    

    while($row=mysqli_fetch_array($result))
    {
      $array[] = $row['other'];
    }
    echo json_encode($array);
?>