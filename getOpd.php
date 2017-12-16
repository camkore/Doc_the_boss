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
//$con = mysqli_connect('localhost','root','','astha_clinic');
//if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
//}
//mysqli_select_db($con,"astha_clinic");
    include_once("db/connection.php");
$sql="select * from opd where date='".$date."';";
$result = mysqli_query($con,$sql);
$sr = 0;
$expense = 0;
$fees = 0;
?>
<table class="table table-striped">
    <thead>
    <tr>
     <th>Sr. No.</th>
     <th>Name</th>
     <th>Date</th>
     <th>Procedure</th>
     <th>Procedure planned</th>
     <th>Expenses</th>
     <th>Fees</th>
<!--     <th>Comments</th>-->
    </tr>
    </thead>
<?php
while($row = mysqli_fetch_array($result)) {
    $patient_id=$row["patient_id"];
    $sql1="select * from patient_details where id='".$patient_id."';";
    $result1 = mysqli_query($con,$sql1);
    while($row1 = mysqli_fetch_array($result1)) {
$sr++;
$expense += $row["expenses"];
$fees += $row["fees"];
?>
    <tbody>
    <tr>
    <td><?php echo $sr; ?> </td>
    <td><?php echo $row1["name"]; ?> </td>
    <td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["proc"]; ?></td>
    <td><?php echo $row["proc_pl"]; ?></td>
    <td><?php echo $row["expenses"]; ?></td>
    <td><?php echo $row["fees"]; ?></td>
<!--    <td><?php echo $row["comments"]; ?></td>-->
    </tr>
   
<?php
}
}
?>
 </tbody>
    <tfoot>
    <tr>
      <td></td>
     <td></td>
    <td></td>
        <td></td>
        <td><b>Total</b></td>
        <td><b><?php echo $expense; ?></b></td>
        <td><b><?php echo $fees; ?></b></td>
        <td></td>
    </tr>
  </tfoot>
</table>
</body>
</html>    