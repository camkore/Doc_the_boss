<?php
include_once("db/connection.php");
if(isset($_POST['submit'])){
                              $name=$_POST['name'];
                              $age=$_POST['age'];
//                              $name=$_POST['name'];
                              $dob=$_POST['dob'];
                              $gender=$_POST['gender'];
                              $contact=$_POST['contact'];
                              $place=$_POST['place'];
                              $refer=$_POST['refer'];
                              $complaint=$_POST['complaint'];
                              $past=$_POST['past'];
                              $drug=$_POST['drug'];
                              $extra=$_POST['extra'];

 
    
$sql = "INSERT INTO patient_details(name, age, dob, gender,contact,  place,refer, complaint, past, drug,extra) VALUES ('$addOpd_ID','$addOpd_patientID','$addOpd_date','$addOpd_procedure','$addOpd_fees','$addOpd_expense','$addOpd_procedure_planned','$addOpd_comments','$addOpd_diagnosis','$addOpd_followup')"; 
if(mysqli_query($con,$sql))
{
    
           echo "<script>
             window.location = 'patients.php? information inserted successfuly';
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
             window.location = 'addPatient.php?success=0&q_message=Indirect Access';
             </script>";
             exit; 
}

?>