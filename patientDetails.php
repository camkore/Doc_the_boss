<!DOCTYPE html>
<html>
<head>
<title>Patient Details</title>
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
   .card{
     background: #fff;
   padding:5%;
   box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
   } 
  </style>
         <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Astha Clinic</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="index.html">home</a></li>
       <li><a href="patients.php">Patient</a></li>
       <li><a href="addPatient.html">Add Patient</a></li>
       <li><a href="current_opd.html">Todays OPD</a></li>
        
    </ul>
      
  </div>
</nav>
<?php
  if(isset($_GET['row_id']))
{
$r_id=$_GET['row_id'];
    $sr=0;
    $con = mysqli_connect('localhost','root','','astha_clinic');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    mysqli_select_db($con,"astha_clinic");
    $sql1="select * from opd where patient_id=".$r_id.";";
    $sql="select * from patient_details where id=".$r_id.";";
    $result = mysqli_query($con,$sql);
    $result1 = mysqli_query($con,$sql1);

?>
    <div class="container" style="margin-top:5%;margin-bottom:2%">
        <input action="action" type="button" value="Back" onclick="history.go(-1);" />
    <div class="row">
     <div class="col-md-9">
      <div class="card">
          <h2>Patient Details</h2>
            <?php
            while($row = mysqli_fetch_array($result)) {
            ?>
          <div class="row">
              <div class="col-md-4">
               <label>Name: </label><?php echo $row["name"];?>
              </div>
               <div class="col-md-4">
               <label>Contact: </label><?php echo $row["contact"];?>
              </div>
               <div class="col-md-4">
                <label>Place: </label><?php echo $row["place"];?>
              </div>
          </div>
           <div class="row">
              <div class="col-md-9 ">
                <label>Complaints:</label><br> <?php echo $row["complaint"];?><br>
              </div>
          </div>
          <div class="row">
              <div class="col-md-9 ">
                 <label>Past History:</label><br><?php echo $row["past"];?><br>
              </div>
          </div>
          <div class="row">
              <div class="col-md-9 ">
             <label>Drug History:</label><br><?php echo $row["drug"];?><br>
              </div>
          </div>
          <div class="row">
              <div class="col-md-9 ">
                <label>Extra Points:</label><br> <?php echo $row["extra"];?><br>
              </div>
          </div>
          <!--  <input type="button" value="Add OPD" class='button btn btn-primary' onclick="/">-->
          
            <?php
                $patient_id =$row['id'];
                echo "<a href='add_newOpd.php?id=$patient_id'>Add opd</a>";
            }
            ?>
          <h2>OPD Details</h2>
           <div class="row">
            <div class="col-md-9">
          <table class="table table-striped">
            <thead>
            <tr>
            <th>Sr. No.</th><th>Date</th><th>Procedure</th><th>Expenses</th><th>Fees</th><th>Procedure Planned</th><th>Diagnosis</th><th>Comments</th><th>Prescription</th><th>Follow Up</th>    
            </tr>
            </thead>
            <?php
             while($row = mysqli_fetch_array($result1)) {
                 $opd_id=$row["id"];
                 $sr++;
            ?>    
               
                    <tbody>
                        <tr>
                         <td><?php echo $sr;?></td>
                        <td><?php echo $row["date"];?></td>
                        <td><?php echo $row["proc"];?></td>
                        <td><?php echo $row["expenses"];?></td>
                        <td><?php echo $row["fees"];?></td>
                        <td><?php echo $row["proc_pl"];?></td>  
                        <td><?php echo $row["diagnosis"];?></td>
                                   <td><?php echo $row["comments"];?></td>
                         <?php echo"<td> <a href='viewpriscription.php?row_id=".$opd_id."'>view</a></td>"; ?>
    
          <td><?php echo $row["follow_up"];?></td>
                        </tr>
                       
           <?php
             }
             }
           ?>
                         </tbody>
                    </table>
                  </div>
                </div>
           </div> 
    </div>
    
         
    </div>
</div>
    
</body>

</html>