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
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Astha Clinic</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.html">OPD</a></li>
                <li><a href="patients.php">Patients</a></li>
<!--                <li><a href="addOpd.html">Add OPD</a></li>-->
                <li><a href="addPatient.html">Add Patient</a></li>
            </ul>
        </div>
    </nav>
    <?php
        $patient_id=$_COOKIE['id'];
        $opd_id=$_COOKIE['opd_id'];
        $follow_up=$_COOKIE['follow_up'];
        $sr=0;
//        $con = mysqli_connect('localhost','root','','astha_clinic');
//        if (!$con) {
//            die('Could not connect: ' . mysqli_error($con));
//        }
//        mysqli_select_db($con,"astha_clinic");
    include_once("db/connection.php");

        $sql="select * from prescription where opd_id=".$opd_id.";";
        $sql1="select * from ointment where opd_id=".$opd_id.";";
        $sql2="select * from patient_details where id=".$patient_id.";";
        $sql3="select * from other where opd_id=".$opd_id.";";
        $result = mysqli_query($con,$sql);
        $result1 = mysqli_query($con,$sql1);
        $result2 = mysqli_query($con,$sql2);
        $result3= mysqli_query($con,$sql3);
    ?>
        <div class="container">
            <div class="row" id="print">
                <div class="">
                    <div class="card">

                        <!--                        <h2>priscription</h2>-->


                        <?php
                            while($row12 = mysqli_fetch_array($result2)) {
                            $name=$row12["name"];
                            $age=$row12["age"];
                            $sex=$row12["sex"];
                        ?>
                            <!--
echo "<label>Name:</label> $name <br>";
echo "$age <br>";
echo "$sex <br>";
echo "$follow_up <br>";
-->
                            <div class="">
                                <table class="table ">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>Name:</label>
                                                <?php echo"$name";?>
                                            </td>
                                            <td>
                                                <label>Age:</label>
                                                <?php echo"$age";?>
                                            </td>
                                            <td>
                                                <label>Sex:</label>
                                                <?php echo ucfirst($sex);?>
                                            </td>
                                            <td>
                                                <label>Date:</label>
                                                <?php
                                                    echo date('d M, Y');
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                                }
                            ?>

<!--                                <h4>Medicines:</h4>-->
                                <div class="">
                                    <table class="table ">
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
                                                        <?php echo strtoupper($row["drug"]);?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["quantity"];?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["timing"];?>
                                                    </td>
                                                    <td>
                                                        <?php echo ucfirst($row["instruction"]);?>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>


                                                    <?php
                                                        while($row = mysqli_fetch_array($result1)) {
                                                        $sr++;
                                                    ?>


                                                        <tr>
                                                            <td>
                                             <?php if($row["ointmnet1"]=="")
{
    echo "";
}
    else
    {
        echo $sr;
    }
                  ?>
                                                            </td>
                                                            <td>
                                                               <?php echo $row["ointmnet1"];?>
                                                                
                                                            </td>
                                                            <td>
                                                                <?php echo $row["quntity"];?>
                                                            </td>
                                                            <td>
                                                      <?php if($row["timing"]=="0-0-0")
{
    echo "";
}
    else
    {
        echo $row["timing"];
    }
                  ?>
                                                            </td>
                                                            <td>
                                                                <?php echo ucfirst($row["instruction"]);?>
                                                            </td>

                                                        </tr>

                                                        <?php
                                                            }
                                                        ?>

                                                            <?php
                                                                while($row = mysqli_fetch_array($result3)) {
                                                                $sr++;
                                                            ?>
                                                                      <tr>
                                                            <td>
                                                                <?php
                                                        if($row["other"]=="")
{
    echo "";
}
    else
    {
        echo $sr;
    }
                  ?>
                                                            </td>
                                                            <td>
                                                               <?php echo $row["other"];?>
                                                                
                                                            </td>
                                                            <td>
                                                                <?php echo $row["quantity"];?>
                                                            </td>
                                                            <td>
                                                       <?php if($row["timing"]=="0-0-0")
{
    echo "";
}
    else
    {
        echo $row["timing"];
    }
                  ?>
                                                            </td>
                                                            <td>
                                                                <?php echo ucfirst($row["instruction"]);?>
                                                            </td>

                                                        </tr>

                                                                <?php
                                                                    }
                                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <label>Follow up Date:</label>
                                                <?php
                                                    $formattedFollowUpDate = date("d M, Y", strtotime($follow_up));
                                                    echo"$formattedFollowUpDate";
                                                ?>
                                </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="button" class="btn btn-success btn1" onclick="printDiv()">Print</button>
            </div>
        </div>

</body>
<script>
    function printDiv() {

        if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
            var DocumentContainer = document.getElementById('print');
            var WindowObject = window.open('', 'PrintWindow', 'width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes');
            var strHtml2 = "<body><div id='print'>" + DocumentContainer.innerHTML + "</div></body>";
            WindowObject.document.writeln(strHtml2);
            WindowObject.document.close();
            WindowObject.focus();
            WindowObject.print();
            WindowObject.close();

        } else {


            var printable = document.getElementById('print');
            document.body.innerHTML = printable.innerHTML;
            //            printCoupon();
            window.print();
            location.reload();
        }
    }

</script>

</html>
