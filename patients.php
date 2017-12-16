<html>
<head>
<title>Patients</title>
     
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    
</head>
<body style="background:#e2e1e0">
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
//$con = mysqli_connect('localhost','root','','astha_clinic');
//if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
//}
//mysqli_select_db($con,"astha_clinic");
    include_once("db/connection.php");
$sql="select * from patient_details;";
$result = mysqli_query($con,$sql);
$sr = 0;
?>
<div class="container" id="container" style="margin-top:5%">
      
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
<th>Sr. No.</th><th>Name</th><th>Contact</th><th>Date of birth</th><th>Sex</th><th>Place</th><th>Referal</th><th>Diagnosis</th>
<th>Details</th></tr></thead>
     <tbody>
<?php
while($row = mysqli_fetch_array($result)) {
$sr++;
   $id=$row["id"];
?>
   
    <tr>
     <td><?php echo $sr;?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["contact"];?></td>
    <td><?php echo $row["dob"];?></td>
    <td><?php echo $row["sex"];?></td>
    <td><?php echo $row["place"];?></td>
     <td><?php echo $row["referal"];?></td>
     <td><?php echo $row["diagnosis"];?></td>
   <?php echo"<td> <a href='patientDetails.php?row_id=".$id."'>select</a></td>"; ?>

    </tr>
<?php
}
?>
    </tbody>
    </table>
<div class="col-md-12">
                            <button type="button" class="btn btn-success btn1" onclick="printDiv()">Print</button>
                        </div>
</div>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
   <script src="js/dhtmlxcalendar.js"></script>

    <script>
        var myCalendar;

        function doOnLoad1() {
            myCalendar = new dhtmlXCalendarObject(["addOpd_date"]);
            myCalendar.setDateFormat("%d-%m-%Y");
            $("#addOpd_date").keyup(function () {
                myCalendar.show();
            });
            $("#s_birth_date").focusout(function () {
                myCalendar.hide();
            });
        }
    </script>

    <script>
        var myCalendar;

        function doOnLoad2() {
            myCalendar = new dhtmlXCalendarObject(["addOpd_followup"]);
            myCalendar.setDateFormat("%d-%m-%Y");
            $("#addOpd_followup").keyup(function () {
                myCalendar.show();
            });
            $("#s_birth_date").focusout(function () {
                myCalendar.hide();
            });
        }
    </script>
    
    <script>
        var i=0;
    $("#appendPrescription_div").click(function () {
         i++;
  $("#addPrescription_div").append('<div id="addPrescription_card"><div class="row"><div class="col-md-6"><label>Drug</label></div><div class="col-md-6"><input type="text" class="form-control" name="data['+i+'][addOpd_drug]"></div><div class="col-md-6"><label>Quantity</label></div><div class="col-md-6"><input type="text" class="form-control" name="data['+i+'][addOpd_quantity]"></div><div class="col-md-6"><label>Dose</label></div><div class="col-md-6"><label class="checkbox-inline"><input type="hidden" value="0" name="data['+i+'][addOpd_dose1]"><input type="checkbox" value="1" name="data['+i+'][addOpd_dose1]"><label> - M</label></label><label class="checkbox-inline"><input type="hidden" value="0" name="data['+i+'][addOpd_dose2]"><input type="checkbox" value="1" name="data['+i+'][addOpd_dose2]"><label> - A</label></label><label class="checkbox-inline"><input type="hidden" value="0" name="data['+i+'][addOpd_dose3]"><input type="checkbox" value="1" name="data['+i+'][addOpd_dose3]"><label> - N</label></label></div><div class="col-md-6"><label>Instructions</label></div><div class="col-md-6"><input type="text" class="form-control" name="data['+i+'][addOpd_instructions]"></div>');
});
    
    </script>
        <script>
   function printDiv() {

       if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
             var DocumentContainer = document.getElementById('container');
             var WindowObject =window.open
                 ('','PrintWindow','width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes');
             var strHtml2="<body><link href='css/teacher_attendance.css' rel='stylesheet'><div id='div_print3'>"+DocumentContainer.innerHTML+"</div></body>";
             WindowObject.document.writeln(strHtml2);
             WindowObject.document.close();
             WindowObject.focus();
             WindowObject.print();
             WindowObject.close();

       }
        else {

       
            var printable = document.getElementById('container');
            document.body.innerHTML = printable.innerHTML;
//            printCoupon();
            window.print();
            location.reload();
        }
    }</script>

    
    
</body>
</html>    