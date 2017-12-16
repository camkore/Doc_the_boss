<html>
<head>
<title>OPD</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php

$date = $_REQUEST['date'];
   $sr = 0;
//$con = mysqli_connect('localhost','root','','astha_clinic');
//if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
//}
include_once("db/connection.php");
    echo" <h3>Todays Follow UP</h3>";
    echo"<table class='table table-striped'>";
   echo "<thead>";
    echo "<tr>";
    echo "<th>Sr. No.</th>";
     echo "<th>Name</th>";
    echo "<th>Contact</th>";
     echo "<th>Procedure planed</th>";
    echo "<th>Details</th>";
     echo "</tr>";
    echo "</thead>";
//mysqli_select_db($con,"astha_clinic");
$sql="select * from opd where follow_up='".$date."';";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
$id=$row["patient_id"];
    $procedure_planed=$row["proc_pl"];

       $sql1="select * from patient_details where id='".$id."';";
    $result1 = mysqli_query($con,$sql1);
while($row1 = mysqli_fetch_array($result1)) {
    $sr++;
    
    $name=$row1["name"];
    $contact_no=$row1["contact"];
echo "<tbody>";
     echo "<tr>";
       echo "<td>$sr</td>";
     echo "<td>$name</td>";
    echo "<td>$contact_no</td>";
     echo "<td>$procedure_planed</td>";
    echo"<td> <a href='patientDetails.php?row_id=".$id."'>select</a></td>"; 
    echo "</tr>";
     echo "</tbody>";
}
}
?>
</body>
</html>    