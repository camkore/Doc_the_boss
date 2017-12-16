<!DOCTYPE html>
<html>

<head>
    <title>New OPD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/add_newOpd.css">
    <link rel="stylesheet" type="text/css" href="js/dhtmlxcalendar.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>


    <style>
        .search_list_div {
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .search_list_div ul {
            list-style: none;
            font-size: 16px;
            padding-left: 8px;
        }

        .search_list {
            padding: 4px;
        }

        .search_list:hover {
            cursor: pointer;
            background-color: #0097CF;
        }
    </style>

</head>

<body>
    <?php
include_once("db/connection.php");
$sql = "SELECT MAX(id) as opd_Nextid from opd"; 
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$opd_nextID=$row['opd_Nextid'] + 1;    
$opd_patientID=$_GET['id'];  
?>
        <div class="container">
            <input action="action" type="button" value="Back" onclick="history.go(-1);" />
            <div id="addOpd_card">
                <h1 class="opd_heading">OPD</h1>
                <form action="add_newOpd_submit.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control hidden" name="addOpd_ID" value="<?php echo $opd_nextID;?>" id="addOpd_ID" required>
                            <input type="text" class="form-control hidden" name="addOpd_patientID" value="<?php echo $opd_patientID;?>" id="addOpd_patientID" required>
                        </div>

                        <div class="col-md-4">
                            <label>Date:</label>
                            <input type="text" class="form-control" name="addOpd_date" id="addOpd_date" onfocus="doOnLoad1();" required>
                        </div>

                        <div class="col-md-6">
                            <label>Diagnosis:</label>
                            <input type="text" class="form-control" name="addOpd_diagnosis" required>
                        </div>

                        <div class="col-md-6">
                            <label>Procedure:</label>
                            <input type="text" class="form-control" name="addOpd_procedure">
                        </div>

                        <div class="col-md-6">
                            <label>Fees:</label>
                            <input type="text" class="form-control" name="addOpd_fees">
                        </div>

                        <div class="col-md-6">
                            <label>Expesne:</label>
                            <input type="text" class="form-control" name="addOpd_expense">
                        </div>

                        <div class="col-md-6">
                            <label>Procedure Planned:</label>
                            <input type="text" class="form-control" name="addOpd_procedure_planned">
                        </div>

                        <div class="col-md-6">
                            <label>Comments:</label>
                            <input type="text" class="form-control" name="addOpd_comments">
                        </div>

                        <div class="col-md-4">
                            <label>Follow Up:</label>
                            <input type="text" class="form-control" name="addOpd_followup" id="addOpd_followup" onfocus="doOnLoad2();" required>
                        </div>

                    </div>


                    <div id="addPrescription_div">
                        <div id="addPrescription_card">
                            <div class="row" id="drug_searchBoxDiv">
                                <div class="col-md-6">
                                    <label>Drug</label>
                                </div>
                                <div class="col-md-6">

                                    <input type="text" class="form-control " name="data[0][addOpd_drug]" id="opdPrescriptionVal" onfocusout="showOpdPrescription('opdPrescriptionVal','showOpddescription');" onkeyup="ajaxInputSearch('opdPrescriptionVal','opdTopicalAjaxDesc');">
                                    <div class="search_list_div" id="opdTopicalAjaxDesc"></div>

                                </div>
                            </div>

                            <div id="showOpddescription">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Quantity</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="data[0][addOpd_quantity]">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Dose</label>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="checkbox-inline">
                        <input type='hidden' value='0' name="data[0][addOpd_dose1]">
                        <input type='checkbox' value='1' name="data[0][addOpd_dose1]">
                                <label> - M</label>
                                        </label>
                                        <label class="checkbox-inline">
                                    <input type='hidden' value='0' name="data[0][addOpd_dose2]">
                        <input type='checkbox' value='1' name="data[0][addOpd_dose2]">
                                <label> - A</label>
                                        </label>
                                        <label class="checkbox-inline">
                                   <input type='hidden' value='0' name="data[0][addOpd_dose3]">
                        <input type='checkbox' value='1' name="data[0][addOpd_dose3]">
                                <label> - N</label>
                                        </label>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Instructions</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="data[0][addOpd_instructions]">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
  <div class="row">

                        <div class="col-md-6">
                            <input type="button" class="btn btn-primary add_btn" id="appendPrescription_div" value="Add Prescription">
                        </div>
                    </div>

                    <div id="appendointment_div">
                        <div id="addPrescription_card">
                            <div class="row" id="drug_searchBoxDiv2">
                                <div class="col-md-6">
                                    <label>Topical</label>
                                </div>
                                <div class="col-md-6">

                                    <input type="text" class="form-control " name="data1[0][addOpd_ointment]" id="opdPrescriptionVal2" onfocusout="showOpdPrescription1('opdPrescriptionVal2','showOpddescription1');" onkeyup="ajaxInputSearch1('opdPrescriptionVal2','opdTopicalAjaxDesc1');">
                                    <div class="search_list_div" id="opdTopicalAjaxDesc1"></div>

                                </div>
                            </div>

                            <div id="showOpddescription1">
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
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <input type="button" class="btn btn-primary add_btn" id="appendPrescription_div1" value="Add topicals">
                        </div>
                    </div>
   <div id="appendother_div">
                        <div id="addPrescription_card">
                            <div class="row" id="drug_searchBoxDiv3">
                                <div class="col-md-6">
                                    <label>Other</label>
                                </div>
                                <div class="col-md-6">

                                    <input type="text" class="form-control " name="data2[0][other_item]" id="opdPrescriptionVal3" onfocusout="showOpdPrescription2('opdPrescriptionVal3','showOpddescription2');" onkeyup="ajaxInputSearch2('opdPrescriptionVal3','opdTopicalAjaxDesc2');">
                                    <div class="search_list_div" id="opdTopicalAjaxDesc2"></div>

                                </div>

                            </div>

                            <div id="showOpddescription2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Quantity</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="data2[0][other_quantity]">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Dose</label>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="checkbox-inline">
                        <input type='hidden' value='0' name="data2[0][other_dose]">
                        <input type='checkbox' value='1' name="data2[0][other_dose]">
                                <label> - M</label>
 </label>
                                        <label class="checkbox-inline">
                                    <input type='hidden' value='0' name="data2[0][other_dose2]">
                        <input type='checkbox' value='1' name="data2[0][other_dose2]">
                                <label> - A</label>
                                        </label>
                                        <label class="checkbox-inline">

                                   <input type='hidden' value='0' name="data2[0][other_dose3]">
                        <input type='checkbox' value='1' name="data2[0][other_dose3]">
                                <label> - N</label>
                                        </label>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Instructions</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="data2[0][other_instructions]">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <input type="button" class="btn btn-primary add_btn" id="appendPrescription_div2" value="Add Other">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success pull-right" name="add_newOpd_Submit" value="Submit">
                        </div>
                    </div>
</form>

            </div>
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--  Calender js-->
        <script src="js/dhtmlxcalendar.js"></script>


        <script>
            var myCalendar;

            function doOnLoad1() {
                myCalendar = new dhtmlXCalendarObject(["addOpd_date"]);
                myCalendar.setDateFormat("%d-%m-%Y");
                $("#addOpd_date").keyup(function() {
                    myCalendar.show();
                });
                $("#s_birth_date").focusout(function() {
                    myCalendar.hide();
                });
            }
        </script>

        <script>
            var myCalendar;

            function doOnLoad2() {
                myCalendar = new dhtmlXCalendarObject(["addOpd_followup"]);
                myCalendar.setDateFormat("%d-%m-%Y");
                $("#addOpd_followup").keyup(function() {
                    myCalendar.show();
                });
                $("#s_birth_date").focusout(function() {
                    myCalendar.hide();
                });
            }
        </script>

        <script>
            var i = 0;
            $("#appendPrescription_div").click(function() {
                i++;
                $("#addPrescription_div").append('<div id="addPrescription_card"><div class="row"><div class="col-md-6"><label>Drug</label></div><div class="col-md-6"><input type="text" class="form-control" name="data[' + i + '][addOpd_drug]"></div><div class="col-md-6"><label>Quantity</label></div><div class="col-md-6"><input type="text" class="form-control" name="data[' + i + '][addOpd_quantity]"></div><div class="col-md-6"><label>Dose</label></div><div class="col-md-6"><label class="checkbox-inline"><input type="hidden" value="0" name="data[' + i + '][addOpd_dose1]"><input type="checkbox" value="1" name="data[' + i + '][addOpd_dose1]"><label> - M</label></label><label class="checkbox-inline"><input type="hidden" value="0" name="data[' + i + '][addOpd_dose2]"><input type="checkbox" value="1" name="data[' + i + '][addOpd_dose2]"><label> - A</label></label><label class="checkbox-inline"><input type="hidden" value="0" name="data[' + i + '][addOpd_dose3]"><input type="checkbox" value="1" name="data[' + i + '][addOpd_dose3]"><label> - N</label></label></div><div class="col-md-6"><label>Instructions</label></div><div class="col-md-6"><input type="text" class="form-control" name="data[' + i + '][addOpd_instructions]"></div>');
            });

            //$("#addPrescription_div").append('<div id="addPrescription_card"><div class="row" id="drug_searchBoxDiv"><div class="col-md-6"><label>Drug</label></div><div class="col-md-6"><input type="text"  class="form-control " name="data['+i+'][addOpd_drug]" id="opdPrescriptionVal" onfocusout="showOpdPrescription('opdPrescriptionVal','showOpddescription');" onkeyup="ajaxInputSearch('opdPrescriptionVal','opdTopicalAjaxDesc');"><div class="search_list_div" id="opdTopicalAjaxDesc"></div></div></div><div id="showOpddescription"></div></div>');
            //});

            var j = 0;
            $("#appendPrescription_div1").click(function() {
                j++;
                $("#appendointment_div").append('<div id="addPrescription_card"><div class="row"><div class="col-md-6"><label>Topical</label></div><div class="col-md-6"><input type="text" class="form-control" name="data1[' + j + '][addOpd_ointment]"></div><div class="col-md-6"><label>Quantity</label></div><div class="col-md-6"><input type="text" class="form-control" name="data1[' + j + '][ointment_quantity]"></div><div class="col-md-6"><label>Dose</label></div><div class="col-md-6"><label class="checkbox-inline"><input type="hidden" value="0" name="data1[' + j + '][ointmnet_dose]"><input type="checkbox" value="1" name="data1[' + j + '][ointmnet_dose]"><label> - M</label></label><label class="checkbox-inline"><input type="hidden" value="0" name="data1[' + j + '][ointmnet_dose2]"><input type="checkbox" value="1" name="data1[' + j + '][ointmnet_dose2]"><label> - A</label></label><label class="checkbox-inline"><input type="hidden" value="0" name="data1[' + j + '][ointmnet_dose3]"><input type="checkbox" value="1" name="data1[' + j + '][ointmnet_dose3]"><label> - N</label></label></div><div class="col-md-6"><label>Instructions</label></div><div class="col-md-6"><input type="text" class="form-control" name="data1[' + j + '][ointment_instructions]"></div>');
            });
            var k = 0;
            $("#appendPrescription_div2").click(function() {
                k++;
                $("#appendother_div").append('<div id="addPrescription_card"><div class="row"><div class="col-md-6"><label>Other</label></div><div class="col-md-6"><input type="text" class="form-control" name="data2[' + k + '][other_item]"></div><div class="col-md-6"><label>Quantity</label></div><div class="col-md-6"><input type="text" class="form-control" name="data2[' + k + '][other_quantity]"></div><div class="col-md-6"><label>Dose</label></div><div class="col-md-6"><label class="checkbox-inline"><input type="hidden" value="0" name="data2[' + k + '][other_dose]"><input type="checkbox" value="1" name="data2[' + k + '][other_dose]"><label> - M</label></label><label class="checkbox-inline"><input type="hidden" value="0" name="data2[' + k + '][other_dose2]"><input type="checkbox" value="1" name="data2[' + k + '][other_dose2]"><label> - A</label></label><label class="checkbox-inline"><input type="hidden" value="0" name="data2[' + k + '][other_dose3]"><input type="checkbox" value="1" name="data2[' + k + '][other_dose3]"><label> - N</label></label></div><div class="col-md-6"><label>Instructions</label></div><div class="col-md-6"><input type="text" class="form-control" name="data2[' + k + '][other_instructions]"></div>');
            });
        </script>



        <script>
            function showOpdPrescription(str1, str2) {
                var str = document.getElementById(str1).value;

                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(str2).innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "fetch_opd_prescription_data.php?prescriptionStr=" + str, true);
                xmlhttp.send();

            }
        </script>


        <script>
            function showOpdPrescription1(str1, str2) {
                var str = document.getElementById(str1).value;

                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(str2).innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "fetch_opd_prescription_data1.php?prescriptionStr=" + str, true);
                xmlhttp.send();

            }
        </script>


        <script>
            function showOpdPrescription2(str1, str2) {
                var str = document.getElementById(str1).value;

                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(str2).innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "fetch_opd_prescription_data2.php?prescriptionStr=" + str, true);
                xmlhttp.send();

            }
        </script>



        <script>
            function ajaxInputSearch(str1, str2) {
                var str = document.getElementById(str1).value;

                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(str2).style.display = "block";
                        document.getElementById(str2).innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "fetch_opd_prescription.php?key=" + str + "&key2=" + str1 + "&key3=" + str2, true);
                xmlhttp.send();

            }
        </script>

        <script>
            function ajaxInputSearch1(str1, str2) {
                var str = document.getElementById(str1).value;

                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(str2).style.display = "block";
                        document.getElementById(str2).innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "fetch_opd_prescription1.php?key=" + str + "&key2=" + str1 + "&key3=" + str2, true);
                xmlhttp.send();
            }
        </script>


        <script>
            function ajaxInputSearch2(str1, str2) {
                var str = document.getElementById(str1).value;

                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(str2).style.display = "block";
                        document.getElementById(str2).innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "fetch_opd_prescription2.php?key=" + str + "&key2=" + str1 + "&key3=" + str2, true);
                xmlhttp.send();
            }
        </script>

        <script>
            function append_text(str1, str2, str3) {
                document.getElementById(str1).value = str2;
                document.getElementById(str3).style.display = "none";
            }
        </script>


</body>

</html>