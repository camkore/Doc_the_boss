<?php
include_once("db/connection.php");
if(isset($_GET['prescriptionStr']))
{
    $prescriptionStr_val=$_GET['prescriptionStr'];
    if($prescriptionStr_val == ""){
    ?>   

          <div class="row">
                          <div class="col-md-6">
                            <label>Quantity</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="data1[0][ointment_quantity]">
                        </div>
 
                         <div class="col-md-6">
                            <label>Dose</label>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="checkbox-inline">
                        <input type='hidden' value='0' name="data1[0][ointmnet_dose]">
                        <input type='checkbox' value='1' name="data1[0][ointmnet_dose]">
                                <label> - M</label>
                            </label>
                            <label class="checkbox-inline">
                                    <input type='hidden' value='0' name="data1[0][ointmnet_dose2]">
                        <input type='checkbox' value='1' name="data1[0][ointmnet_dose2]">
                                <label> - A</label>
                            </label>
                            <label class="checkbox-inline">
                                   <input type='hidden' value='0' name="data1[0][ointmnet_dose3]">
                        <input type='checkbox' value='1' name="data1[0][ointmnet_dose3]">
                                <label> - N</label>
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>Instructions</label>
                        </div>
                        <div class="col-md-6">
                        <input type="text" class="form-control" name="data1[0][ointment_instructions]">
                        </div>               
                        </div>

    <?php    
    }else{
        
$sqlQuery="SELECT * 
FROM  ointment
WHERE ointmnet1='$prescriptionStr_val'";                      
$result = mysqli_query($con,$sqlQuery);    
$row = mysqli_fetch_array($result);
$drug_quantity=$row['quntity'];  
$drug_instructions=$row['instruction'];        
        
    ?>   

              <div class="row">
                          <div class="col-md-6">
                            <label>Quantity</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="data1[0][ointment_quantity]" value="<?php echo $drug_quantity;?>">
                        </div>
 
                         <div class="col-md-6">
                            <label>Dose</label>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="checkbox-inline">
                        <input type='hidden' value='0' name="data1[0][ointmnet_dose]">
                        <input type='checkbox' value='1' name="data1[0][ointmnet_dose]">
                                <label> - M</label>
                            </label>
                            <label class="checkbox-inline">
                                    <input type='hidden' value='0' name="data1[0][ointmnet_dose2]">
                        <input type='checkbox' value='1' name="data1[0][ointmnet_dose2]">
                                <label> - A</label>
                            </label>
                            <label class="checkbox-inline">
                                   <input type='hidden' value='0' name="data1[0][ointmnet_dose3]">
                        <input type='checkbox' value='1' name="data1[0][ointmnet_dose3]">
                                <label> - N</label>
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>Instructions</label>
                        </div>
                        <div class="col-md-6">
                        <input type="text" class="form-control" name="data1[0][ointment_instructions]" value="<?php echo $drug_instructions;?>">
                        </div>               
                        </div>

    <?php    
    }
}


?>