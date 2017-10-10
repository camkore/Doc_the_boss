<?php
include_once("db/connection.php");
if(isset($_POST['add_newOpd_Submit']))
{
      $addOpd_ID =test_input($_POST['addOpd_ID']);
      $addOpd_patientID =test_input($_POST['addOpd_patientID']);
      $addOpd_date =test_input($_POST['addOpd_date']);
       $addOpd_fees =test_input($_POST['addOpd_fees']);
    $addOpd_procedure_planned =test_input($_POST['addOpd_procedure_planned']);
      $addOpd_expense =test_input($_POST['addOpd_expense']);
      $addOpd_followup =test_input($_POST['addOpd_followup']);
      $addOpd_diagnosis =test_input($_POST['addOpd_diagnosis']);
      $addOpd_comments =test_input($_POST['addOpd_comments']);
      $addOpd_procedure =test_input($_POST['addOpd_procedure']);
    
    
     $addOpd_date = date("Y-m-d",strtotime("$addOpd_date"));
     $addOpd_followup = date("Y-m-d",strtotime("$addOpd_followup"));
    
$other1 =test_input($_POST['other1']);
      $other2 =test_input($_POST['other2']);
      $other3  =test_input($_POST['other3']);
      $other_quantity =test_input($_POST['quantity']);
      $other_instuction =test_input($_POST['other_instruction']);
    $other_instuction2 =test_input($_POST['other_instruction2']);
    $other_instuction3 =test_input($_POST['other_instruction3']);
    
    
    
foreach($_POST['data'] as $data) {
$addOpd_drug=$data['addOpd_drug'];
$addOpd_quantity=$data['addOpd_quantity'];
$addOpd_instructions=$data['addOpd_instructions'];
    
    $addOpd_dose1=$data['addOpd_dose1'];
    $addOpd_dose2=$data['addOpd_dose2'];
    $addOpd_dose3=$data['addOpd_dose3'];
    
    $addOpd_dose="$addOpd_dose1-$addOpd_dose2-$addOpd_dose3";
//    echo "<br/>$addOpd_drug<br>$addOpd_quantity<br/>";
     mysqli_query ($con,"set character_set_results='utf8'"); 
    $sql1="INSERT INTO prescription(opd_id, drug, quantity, timing, instruction,prescription_date) VALUES ('$addOpd_ID','$addOpd_drug','$addOpd_quantity','$addOpd_dose','$addOpd_instructions','$addOpd_date')";
    mysqli_query($con,$sql1);
}
    
    foreach($_POST['data1'] as $data1) {
        $addOpd_ointment1=$data1['addOpd_ointment1'];
        $addOpd_ointment2=$data1['addOpd_ointment2'];
        $addOpd_ointment3=$data1['addOpd_ointment3'];
$ointment_quantity=$data1['ointment_quantity'];
$ointment_instructions=$data1['ointment_instructions'];
    
    $ointmnet_dose1=$data1['ointmnet_dose'];
    $ointmnet_dose2=$data1['ointmnet_dose2'];
    $ointmnet_dose3=$data1['ointmnet_dose3'];
    
    $ointmnet_dose="$ointmnet_dose1-$ointmnet_dose2-$ointmnet_dose3";

     mysqli_query ($con,"set character_set_results='utf8'"); 
    $sql12="INSERT INTO ointment(opd_id, ointmnet1, ointment2, ointment3,quntity, timing, instruction,ointment_date) VALUES ('$addOpd_ID','$addOpd_ointment1','$addOpd_ointment2','$addOpd_ointment3','$ointment_quantity','$ointmnet_dose','$ointment_instructions','$addOpd_date')";
    mysqli_query($con,$sql12);
}
     $sql22="INSERT INTO other(opd_id, other1, other2, other3, quantity, instruction,	instruction2,instruction3, other_date) VALUES ('$addOpd_ID','$other1','$other2','$other3','$other_quantity','$other_instuction','$other_instuction2','$other_instuction3','$addOpd_date')";
    mysqli_query($con,$sql22);
    
$sql = "INSERT INTO opd(id, patient_id, date, proc,fees,  expenses,proc_pl, comments, diagnosis, follow_up) VALUES ('$addOpd_ID','$addOpd_patientID','$addOpd_date','$addOpd_procedure','$addOpd_fees','$addOpd_expense','$addOpd_procedure_planned','$addOpd_comments','$addOpd_diagnosis','$addOpd_followup')"; 
if(mysqli_query($con,$sql))
{
    setcookie('opd_id', $addOpd_ID, time() + 3600, "/");
setcookie('id', $addOpd_patientID, time() + 3600, "/");
    setcookie('follow_up', $addOpd_followup, time() + 3600, "/");
           echo "<script>
             window.location = 'priscription_print.php?OPD information inserted successfuly';
             </script>";
             exit; 
}else{
               echo "<script>
             window.location = 'patients.php?success=0&q_message=Error in adding OPD.';
             </script>";
             exit; 
}
    

    
}else{
       echo "<script>
             window.location = 'index.html?success=0&q_message=Indirect Access';
             </script>";
             exit; 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>