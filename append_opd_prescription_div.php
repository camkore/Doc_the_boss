<?php

if(isset($_GET['appendPrescDrug']))
{
$appendCount=$_GET['appendCount'];
?>

<div id="addPrescription_card">
                    <div class="row" id="drug_searchBoxDiv">
                        <div class="col-md-6">
                            <label>Drug</label>
                        </div>
                        <div class="col-md-6">
                            
<input type="text"  class="form-control " name="data[<?php echo $appendCount;?>][addOpd_drug]" id="opdPrescriptionVal_<?php echo $appendCount;?>" onfocusout="showOpdPrescription('opdPrescriptionVal_<?php echo $appendCount;?>','showOpddescription_<?php echo $appendCount;?>');" onkeyup="ajaxInputSearch('opdPrescriptionVal_<?php echo $appendCount;?>','opdTopicalAjaxDesc_<?php echo $appendCount;?>');">
<div class="search_list_div" id="opdTopicalAjaxDesc_<?php echo $appendCount;?>"></div> 
                            
                        </div>
                    </div>

                    <div id="showOpddescription_<?php echo $appendCount;?>">
                       <div class="row">
                        <div class="col-md-6">
                            <label>Quantity</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="data[<?php echo $appendCount;?>][addOpd_quantity]">
                        </div>

                        <div class="col-md-6">
                            <label>Dose</label>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="checkbox-inline">
                        <input type='hidden' value='0' name="data[<?php echo $appendCount;?>][addOpd_dose1]">
                        <input type='checkbox' value='1' name="data[<?php echo $appendCount;?>][addOpd_dose1]">
                                <label> - M</label>
                            </label>
                            <label class="checkbox-inline">
                                    <input type='hidden' value='0' name="data[<?php echo $appendCount;?>][addOpd_dose2]">
                        <input type='checkbox' value='1' name="data[<?php echo $appendCount;?>][addOpd_dose2]">
                                <label> - A</label>
                            </label>
                            <label class="checkbox-inline">
                                   <input type='hidden' value='0' name="data[<?php echo $appendCount;?>][addOpd_dose3]">
                        <input type='checkbox' value='1' name="data[<?php echo $appendCount;?>][addOpd_dose3]">
                                <label> - N</label>
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>Instructions</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="data[<?php echo $appendCount;?>][addOpd_instructions]">
                        </div>
                           
                    </div>
                    </div>
                    
    </div>

<?php
    
}else if(isset($_GET['appendPrescTopical']))
{
    $appendCount=$_GET['appendCount'];
    
?>

        <div id="addPrescription_card">
                    <div class="row" id="drug_searchBoxDiv2">
                        <div class="col-md-6">
                            <label>Topical</label>
                        </div>
                        <div class="col-md-6">
               
<input type="text"  class="form-control " name="data1[<?php echo $appendCount;?>][addOpd_ointment]" id="opdPrescriptionVal2_<?php echo $appendCount;?>" onfocusout="showOpdPrescription1('opdPrescriptionVal2_<?php echo $appendCount;?>','showOpddescription1_<?php echo $appendCount;?>');" onkeyup="ajaxInputSearch1('opdPrescriptionVal2_<?php echo $appendCount;?>','opdTopicalAjaxDesc1_<?php echo $appendCount;?>');">
<div class="search_list_div" id="opdTopicalAjaxDesc1_<?php echo $appendCount;?>"></div>                            
                            
                        </div>
                        </div>
                        
                         <div id="showOpddescription1_<?php echo $appendCount;?>">
                         <div class="row">
                          <div class="col-md-6">
                            <label>Quantity</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="data1[<?php echo $appendCount;?>][ointment_quantity]">
                        </div>
 
                         <div class="col-md-6">
                            <label>Dose</label>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="checkbox-inline">
                        <input type='hidden' value='0' name="data1[<?php echo $appendCount;?>][ointmnet_dose]">
                        <input type='checkbox' value='1' name="data1[<?php echo $appendCount;?>][ointmnet_dose]">
                                <label> - M</label>
                            </label>
                            <label class="checkbox-inline">
                                    <input type='hidden' value='0' name="data1[<?php echo $appendCount;?>][ointmnet_dose2]">
                        <input type='checkbox' value='1' name="data1[<?php echo $appendCount;?>][ointmnet_dose2]">
                                <label> - A</label>
                            </label>
                            <label class="checkbox-inline">
                                   <input type='hidden' value='0' name="data1[<?php echo $appendCount;?>][ointmnet_dose3]">
                        <input type='checkbox' value='1' name="data1[<?php echo $appendCount;?>][ointmnet_dose3]">
                                <label> - N</label>
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>Instructions</label>
                        </div>
                        <div class="col-md-6">
                <input type="text" class="form-control" name="data1[<?php echo $appendCount;?>][ointment_instructions]">
                        </div>               
                        </div>
                        </div>
                        
                    </div>

<?php
    
}else if(isset($_GET['appendPrescOther']))
{
    $appendCount=$_GET['appendCount'];
    
?>
                   <div id="addPrescription_card">
                    <div class="row" id="drug_searchBoxDiv3">
                        <div class="col-md-6">
                            <label>Other</label>
                        </div>
                        <div class="col-md-6">
                            
<input type="text"  class="form-control " name="data2[<?php echo $appendCount;?>][other_item]" id="opdPrescriptionVal3_<?php echo $appendCount;?>" onfocusout="showOpdPrescription2('opdPrescriptionVal3_<?php echo $appendCount;?>','showOpddescription2_<?php echo $appendCount;?>');" onkeyup="ajaxInputSearch2('opdPrescriptionVal3_<?php echo $appendCount;?>','opdTopicalAjaxDesc2_<?php echo $appendCount;?>');">
<div class="search_list_div" id="opdTopicalAjaxDesc2_<?php echo $appendCount;?>"></div>
                            
                        </div>
                        
                        </div>
                        
                         <div id="showOpddescription2_<?php echo $appendCount;?>">
                         <div class="row">
                          <div class="col-md-6">
                            <label>Quantity</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="data2[<?php echo $appendCount;?>][other_quantity]">
                        </div>
 
                         <div class="col-md-6">
                            <label>Dose</label>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="checkbox-inline">
                        <input type='hidden' value='0' name="data2[<?php echo $appendCount;?>][other_dose]">
                        <input type='checkbox' value='1' name="data2[<?php echo $appendCount;?>][other_dose]">
                                <label> - M</label>
                            </label>
                            <label class="checkbox-inline">
                                    <input type='hidden' value='0' name="data2[<?php echo $appendCount;?>][other_dose]">
                        <input type='checkbox' value='1' name="data2[<?php echo $appendCount;?>][other_dose2]">
                                <label> - A</label>
                            </label>
                            <label class="checkbox-inline">
                                   <input type='hidden' value='0' name="data2[<?php echo $appendCount;?>][other_dose]">
                        <input type='checkbox' value='1' name="data2[<?php echo $appendCount;?>][other_dose3]">
                                <label> - N</label>
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label>Instructions</label>
                        </div>
                        <div class="col-md-6">
                <input type="text" class="form-control" name="data2[<?php echo $appendCount;?>][other_instructions]">
                        </div>
                        </div>
                             
                        </div>
                        
                    </div>

<?php
    
}

    
?>