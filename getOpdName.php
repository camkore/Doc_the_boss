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
$id = $_REQUEST['id'];
//$con = mysqli_connect('localhost','root','','astha_clinic');
//if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
//}
    include_once("db/connection.php");
//mysqli_select_db($con,"astha_clinic");

$sql="select * from opd where patient_id=".$id.";";
$result = mysqli_query($con,$sql);
$sr=0;
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
     <th>Comments</th>
    </tr>
    </thead>
<?php
while($row = mysqli_fetch_array($result)) {
    $sr++;
    $expense += $row["expenses"];
$fees += $row["fees"];
?>
    <tbody>
    <tr>
    <td><?php echo $sr; ?> </td>
    <td><?php echo $row["name"]; ?> </td>
    <td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["proc"]; ?></td>
    <td><?php echo $row["proc_pl"]; ?></td>
    <td><?php echo $row["expenses"]; ?></td>
    <td><?php echo $row["fees"]; ?></td>
    <td><?php echo $row["comments"]; ?></td>
    </tr>
   
<?php
}
?>
  </tbody>
    <tfoot>
    <tr>
      <td></td>
     <td></td>
    <td></td>
        <td></td>
        <td><b>Total</td>
      <td><b><?php echo $expense; ?></td>
      <td><b><?php echo $fees; ?></td>
        <td></td>
    </tr>
  </tfoot>
</table>
</body>
</html>