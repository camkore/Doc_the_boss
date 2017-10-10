<!DOCTYPE html>
<html>

<head>
    <title>Patient Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/prescription_print.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <style>
        body {
            background: #e2e1e0;
        }
        
        .card {
            background: #fff;
            padding: 5%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }
    </style>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Astha Clinic</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.html">OPD</a></li>
                <li><a href="patients.php">Patients</a></li>
                <li><a href="addOpd.html">Add OPD</a></li>
                <li><a href="addPatient.html">Add Patient</a></li>
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
   
    $sql="select * from prescription where opd_id=".$r_id.";";
     $sql1="select * from ointment where opd_id=".$r_id.";";
       $sql3="select * from other where opd_id=".$r_id.";";
    $result = mysqli_query($con,$sql);
  $result1 = mysqli_query($con,$sql1);
         $result3 = mysqli_query($con,$sql3);
?>
        <div class="container" style="margin-top:5%;margin-bottom:2%">
            <button onclick="goBack()">Go Back</button>
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Drug</th>
                                        <th>Quantity</th>
                                        <th>Timing</th>
                                        <th>Instruction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
             while($row = mysqli_fetch_array($result)) {
                 $sr++;
            ?>


                                        <tr>
                                            <td>
                                                <?php echo $sr;?>
                                            </td>
                                            <td>
                                                <?php echo $row["drug"];?>
                                            </td>
                                            <td>
                                                <?php echo $row["quantity"];?>
                                            </td>
                                            <td>
                                                <?php echo $row["timing"];?>
                                            </td>
                                            <td>
                                                <?php echo $row["instruction"];?>
                                            </td>

                                        </tr>

                                        <?php
}
?>

                                            <?php
while($row = mysqli_fetch_array($result3)) {
$sr++;
?>

                                                <?php
while($row = mysqli_fetch_array($result1)) {
$sr++;
?>

                                                    <tr>
                                                        <td>
                                                            <?php echo $sr;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["ointmnet1"];?> +
                                                                <?php echo $row["ointment2"];?> +
                                                                    <?php echo $row["ointment3"];?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["quntity"];?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["timing"];?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["instruction"];?>
                                                        </td>

                                                    </tr>

                                                    <?php
}
}
?>

                                                        <tr>
                                                            <td>
                                                                <?php echo $sr;?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row["other1"];?>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <?php echo $row["instruction"];?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <?php echo $sr+1;?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row["other2"];?>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <?php echo $row["instruction2"];?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <?php echo $sr+2;?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row["other3"];?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row["quantity"];?>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <?php echo $row["instruction3"];?>
                                                            </td>
                                                        </tr>

                                                        <?php
             }
           ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


            </div>
        </div>

</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>