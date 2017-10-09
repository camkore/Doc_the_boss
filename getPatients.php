<html>
<head>
<title>OPD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    body {
            background: #e2e1e0;
         }
</style>
<?php
$name = $_REQUEST['name'];
$con = mysqli_connect('localhost','root','','astha_clinic');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"astha_clinic");
$sql="select id,name,contact,dob,place from patient_details where name like '".$name."%';";
$result = mysqli_query($con,$sql);
?>
<table class="table table-striped">
<thead>
<tr><th>Name</th><th>Contact</th><th>Date of birth</th><th>Place</th><th>Action</th></tr>
</thead>
<?php
while($row = mysqli_fetch_array($result)) {
?>
    <tbody>
     <tr>
     <td><?php echo $row["name"];?></td>
     <td><?php echo $row["contact"];?></td>
     <td><?php echo $row["dob"];?></td>
     <td><?php echo $row["place"];?></td>
    <td><button class='button btn btn-primary' onclick="selectPatient(<?php echo $row['id'];?>)" id="<?php echo $row['id'];?>" >select</button></td>
     </tr>
<?php
}
?>
</tbody>
    </table>
    </body>    
</html>