<h1 class="h3 mb-4 text-gray-900">Visual Inspection</h1>
<div class="row">
    <div class="col-lg-6">
        <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="card border-left-danger">
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id = "success" class="alert alert-success alert-dismissible" role="alert" hidden>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div id = "error" class="alert alert-danger alert-dismissible" role="alert" hidden>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>

                                        <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Process Category: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="processcat" name="processcat">
                                                <option value=""></option>
                                                <?php 
                                                include_once("../classes/processcat.php");
                                                $ProcessType = ProcessCat::GetAllProcessType();
                                                for($i=0;$i<count($ProcessType);$i++){
                                                ?>
                                                        <option value ='<?php echo $ProcessType[$i]->getprocess(); ?>' ><?php echo $ProcessType[$i]->getprocess(); ?></option>
                                                <?php 
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Customer: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="custcode" name="custcode" disabled>
                                                    <option selected></option>
                                                    <?php 
                                                    include_once("../classes/customer.php");
                                                    $SelectCustomer = Customer::GetAllCustomer();
                                                    for($i=0;$i<count($SelectCustomer);$i++){
                                                    ?>
                                                            <option value ='<?php echo $SelectCustomer[$i]->getcustcode(); ?>' ><?php echo $SelectCustomer[$i]->getcustname(); ?></option>
                                                    <?php 
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Internal Lot no: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="intlotno" name="intlotno" disabled>
                                                    <option selected></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Process: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="station" name="station" disabled>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Wafer no: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="waferno" name="waferno"  class="form-control input-sm" disabled>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Wafer run: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="waferrun" name="waferrun"  class="form-control input-sm" disabled>
                                            </div>
                                        </div>
                                        <br/>
                                        
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Machine: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="machine" name="machine" disabled>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row" hidden>
                                            <div class="col-md-5">
                                                <label>BG: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="number" id="bg" name="bg" value=0 class="form-control input-sm" disabled>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row" hidden>
                                            <div class="col-md-5">
                                                <label>INC: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="number" id="inc" name="inc" value=0 class="form-control input-sm" disabled>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline-info" id="btnStart" name = "btnStart" disabled>Start Inspection</button>
                                            <button type="button" class="btn btn-outline-warning float-right" id="btnClear" name = "btnClear">Clear</button>
                                        </div>
                                        </form>
                                    </div>
                                    
                                    <!-- <div class="col-lg-6">
                                        Purchase Order Details:
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="card border-left-danger">
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading"><h5>Internal Lot Details</h5></div>
                                            <div class="panel-body">
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Device No:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="deviceno" name="deviceno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Status:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="status" name="status"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Current quantity:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wqty" name="wqty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Date Start:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="datestart" name="datestart"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Ship Back Date:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="shipbackdate" name="shipbackdate"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Thickness:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wthick" name="wthick"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required Thickness:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="rthick" name="rthick"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Size:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wsize" name="wsize"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Lot Type:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="ltype" name="ltype"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<br/>
<br/>
<div class="row"> 
    <div class="col-lg-4">
        <h5>Reject Details</h5>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <div id = "dsuccess" class="alert alert-success alert-dismissible" role="alert" hidden>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div id = "derror" class="alert alert-danger alert-dismissible" role="alert" hidden>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Wafer no: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" id="dwaferno" name="dwaferno"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Defect call-out: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" id="ddetails" name="ddetails"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Defect quantity: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="dqty" name="dqty"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Remarks: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" id="dremarks" name="dremarks"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-outline-danger" id="btnAddDefect" name = "btnAddDefect" disabled>Add Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <h5>Final Thickness ( μm/Micron )</h5>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <div id = "tsuccess" class="alert alert-success alert-dismissible" role="alert" hidden>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div id = "terror" class="alert alert-danger alert-dismissible" role="alert" hidden>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Wafer no: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text" id="twaferno" name="twaferno"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Point 1: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="tpoint1" name="tpoint1"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Point 2: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="tpoint2" name="tpoint2"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Point 3: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="tpoint3" name="tpoint3"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Point 4: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="tpoint4" name="tpoint4"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Point 5: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="tpoint5" name="tpoint5"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Point average : </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="pave" name="pave"  class="form-control input-sm" value = "" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Total Thickness Variation : </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="ttv" name="ttv"  class="form-control input-sm" value = "" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-outline-info" id="btnAddThick" name = "btnAddThick" disabled>Add Final Thickness</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <h5>Roughness( μm/Micron )</h5>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div id = "rsuccess" class="alert alert-success alert-dismissible" role="alert" hidden>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div id = "rerror" class="alert alert-danger alert-dismissible" role="alert" hidden>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Roughness 1: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="rpoint1" name="rpoint1"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Roughness 2: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="rpoint2" name="rpoint2"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Roughness 3: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="rpoint3" name="rpoint3"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Roughness 4: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="rpoint4" name="rpoint4"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Roughness 5: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="rpoint5" name="rpoint5"  class="form-control input-sm" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Roughness average: </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="number" id="rave" name="rave"  class="form-control input-sm" value = "" disabled>
                                                </div>
                                            </div>
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br/><br/>

<div class="row"> 
    <h5>List of Final Thickness</h5>
    <div class="col-lg-12">
        <div class="card border-left-danger">
            <div class="card-body">
                <div class="row no-gutters">
                <table class="table table-bordered" id="tblthickness" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Wafer number</th>
                            <th>Point 1</th>
                            <th>Point 2</th>
                            <th>Point 3</th>
                            <th>Point 4</th>
                            <th>Point 5</th>
                            <th>Point average</th>
                            <th>TTV</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
</br><br/>
<div class="row"> 
    <h5>List of Reject Details</h5>
    <div class="col-lg-12">
        <div class="card border-left-danger">
            <div class="card-body">
                <div class="row no-gutters">
                <table class="table table-bordered" id="tblreject" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Wafer number</th>
                            <th>Defect call-out</th>
                            <th>Quantity</th>
                            <th>Remarks</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
</br><br/>
<div class="form-group">
    <button type="button" class="btn btn-outline-success" id="btnDone" name = "btnStat" value="done" disabled>Done Inspection</button>
    <button type="button" class="btn btn-outline-info float-right" id="btnHold" name = "btnStat" value="hold" disabled>Hold Lot number</button>
</div>

<script src="../vendor/jquery/jquery.min.js"></script>
<script>
var tblcount = 0;
var tblcount2 = 0;
function removeRow(row){
    
    $("#tr"+row).remove();
    tblcount = $('#tblreject > tbody tr').length;
    checkRow(tblcount);
}

function removeRow2(row){
    
    $("#tr"+row).remove();
    tblcount = $('#tblthickness > tbody tr').length;
    checkRow(tblcount);
}

function checkRow(row){

}




$(document).ready(function(){

function Thickness(){

    if(document.getElementById("bg").value == 1)
    {
        if(document.getElementById("twaferno").value == '' || document.getElementById("tpoint1").value == '' || document.getElementById("tpoint2").value == '' || document.getElementById("tpoint3").value == '' || document.getElementById("tpoint4").value == '' || document.getElementById("tpoint5").value == '')
        {
            return false;
        }
    }
    return true;
}

function Roughness(){

    if(document.getElementById("rpoint1").value != '' || document.getElementById("rpoint2").value != '' || document.getElementById("rpoint3").value != '' || document.getElementById("rpoint4").value != '' || document.getElementById("rpoint5").value != '')
    {
        if(document.getElementById("rpoint1").value == '' || document.getElementById("rpoint2").value == '' || document.getElementById("rpoint3").value == '' || document.getElementById("rpoint4").value == '' || document.getElementById("rpoint5").value == '')
        {
            return false;
        }
    }
    return true;

}

function RoughnessAve(){
    //alert(document.getElementById("rpoint1").value);
    
}

    $('#custcode').change(function (){
        $("input[type=text]").val('');
        $("#intlotno").empty();
        document.getElementById("intlotno").disabled = false;
        document.getElementById("waferno").disabled = true;
        document.getElementById("waferrun").disabled = true;
        document.getElementById("station").disabled = true;
        document.getElementById("machine").disabled = true;
        document.getElementById("station").value = '';
        document.getElementById("machine").value = '';
        if(document.getElementById('custcode').value == '')
        {
            return;
        }
        else
        {
        document.getElementById("intlotno").disabled = false;
        document.getElementById("error").hidden = true;
        document.getElementById("success").hidden = true;
        $('#intlotno').focus();
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            if(res.length <=1 )
            {
                document.getElementById("error").innerHTML = 'No available Internal Lot number for Process Category: <b>' + document.getElementById("processcat").value + '</b> and Customer: <b>' + $('#custcode :selected').text();
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                return false;
            }
            
            var x1 = document.getElementById("intlotno");
            var option1 = document.createElement("option");
            option1.text = '';
            x1.add(option1);
            for (i = 0; i < res.length - 1; i++) 
            { 
                    // alert(res[i]);
                    var x = document.getElementById("intlotno");
                    var option = document.createElement("option");
                    option.text = res[i];
                    x.add(option);
            }
        }
        };

        xmlhttp.open("GET", "../php/getintlotno.php?custcode=" + document.getElementById("custcode").value+"&processcat="+document.getElementById("processcat").value, true);
        xmlhttp.send();

        }
    });

    $('#intlotno').change(function () {
        $("input").attr('disabled','disabled');
        $("number").attr('disabled','disabled');
        $("#ddetails").attr('disabled','disabled');
        $("#btnDone").attr('disabled','disabled');
        $("#btnHold").attr('disabled','disabled');
        $("input[type=text]").val('');
        if(document.getElementById('intlotno').value == '')
        {
            return;
        }
        else
        {

            document.getElementById("station").disabled = false;
            //$('#waferno').focus();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            //alert(this.readyState + ' ' + this.status);
            if (this.readyState == 4 && this.status == 200) 
            {
                var result = this.responseText;
                var resdata = result.split("_");
                var res = JSON.parse(result.split("_")[1])[0];
                alert(result);
                document.getElementById("deviceno").value = res.deviceno;
                document.getElementById("status").value = res.status;
                document.getElementById("wqty").value = res.currqty;
                document.getElementById("datestart").value = res.datestart;
                document.getElementById("shipbackdate").value = res.shipbackdate;
                document.getElementById("wthick").value = res.waferthickness;
                document.getElementById("rthick").value = res.requiredthickness;
                document.getElementById("wsize").value = res.wafersize;
                document.getElementById("ltype").value = res.lottype;
                //alert(resdata[5]);
                if(resdata[0] == 'error')
                {
                    document.getElementById("error").innerHTML = resdata[2];
                    document.getElementById("error").hidden = false;
                    document.getElementById("success").hidden = true;
                    document.getElementById("btnStart").disabled = true;
                    document.getElementById("waferno").disabled = true;
                    document.getElementById("waferrun").disabled = true;
                    document.getElementById("station").disabled = true;
                    document.getElementById("processcat").disabled = true;
                    document.getElementById("custcode").disabled = true;
                    document.getElementById("intlotno").disabled = true;
                }

                if(resdata[0] == 'success')
                {
                    document.getElementById("error").hidden = true;
                    document.getElementById("success").hidden = true;
                    document.getElementById("btnStart").disabled = false;
                }

                
                if(resdata[0] == 'onprosucc')
                {

                    document.getElementById("success").innerHTML = resdata[2];
                    document.getElementById("error").hidden = true;
                    document.getElementById("success").hidden = false;
                    document.getElementById("btnStart").disabled = true;
                    document.getElementById("waferno").disabled = true;
                    document.getElementById("waferrun").disabled = true;
                    document.getElementById("station").disabled = true;
                    document.getElementById("processcat").disabled = true;
                    document.getElementById("custcode").disabled = true;
                    document.getElementById("intlotno").disabled = true;

                    document.getElementById("waferno").value = '';
                    document.getElementById("waferrun").value = '';

                    document.getElementById("derror").hidden = true;
                    document.getElementById("dsuccess").hidden = true;
                    document.getElementById("rerror").hidden = true;
                    document.getElementById("rsuccess").hidden = true;
                    document.getElementById("terror").hidden = true;
                    document.getElementById("tsuccess").hidden = true;
                    
                    document.getElementById("dwaferno").disabled = false;
                    document.getElementById("ddetails").disabled = false;
                    document.getElementById("dqty").disabled = false;
                    document.getElementById("dremarks").disabled = false;
                    document.getElementById("btnAddDefect").disabled = false;

                    document.getElementById("rpoint1").disabled = false;
                    document.getElementById("rpoint2").disabled = false;
                    document.getElementById("rpoint3").disabled = false;
                    document.getElementById("rpoint4").disabled = false;
                    document.getElementById("rpoint5").disabled = false;
                    if(resdata[5] == 1)
                    {
                        document.getElementById("twaferno").disabled = false;
                        document.getElementById("tpoint1").disabled = false;
                        document.getElementById("tpoint2").disabled = false;
                        document.getElementById("tpoint4").disabled = false;
                        document.getElementById("tpoint5").disabled = false;
                        document.getElementById("tpoint3").disabled = false;
                        document.getElementById("btnAddThick").disabled = false;
                        document.getElementById("bg").value = 1;
                        
                    }
                    document.getElementById("btnDone").disabled = false;
                    document.getElementById("btnHold").disabled = false;
                }
                
            }
            };
            xmlhttp.open("GET", "../php/getintlotnodetails.php?intlotno=" + document.getElementById("intlotno").value, true);
            xmlhttp.send();
        }
        

    });

    $('#processcat').change(function (){
        document.getElementById("bg").value = 0;
        document.getElementById("inc").value = 0;
        $("input[type=text]").val('');
        $("input[type=number]").val('');
        $("input").attr('disabled','disabled');
        $("number").attr('disabled','disabled');
        $("#tblreject > tbody").empty();
        $("#tblthickness > tbody").empty();
        document.getElementById("custcode").value ='';
        //disabled
        document.getElementById("station").disabled = true;
        document.getElementById("intlotno").disabled = true;
        document.getElementById("machine").disabled = true;
        document.getElementById("waferno").disabled = true;
        document.getElementById("waferrun").disabled = true;
        document.getElementById("btnDone").disabled = true;
        document.getElementById("btnHold").disabled = true;
        document.getElementById("btnStart").disabled = true;
        document.getElementById("ddetails").disabled = true;
        document.getElementById("btnAddDefect").disabled = true;
        //hidden
        document.getElementById("derror").hidden = true;
        document.getElementById("dsuccess").hidden = true;
        document.getElementById("terror").hidden = true;
        document.getElementById("tsuccess").hidden = true;
        document.getElementById("rerror").hidden = true;
        document.getElementById("rsuccess").hidden = true;
        document.getElementById("error").hidden = true;
        document.getElementById("success").hidden = true;
        $("#intlotno").empty();
        $("#station").empty();
        $("#machine").empty();
        if(document.getElementById('processcat').value == '')
        {
            return;
        }
        else
        {
        document.getElementById("custcode").disabled = false;
        $('#custcode').focus();
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
            
            var x1 = document.getElementById("station");
            var option1 = document.createElement("option");
            option1.text = '';
            x1.add(option1);
            for (i = 0; i < res.length - 1; i++) 
            { 
                    // alert(res[i]);
                    var x = document.getElementById("station");
                    var option = document.createElement("option");
                    option.text = res[i];
                    x.add(option);
            }
        }
        };

        xmlhttp.open("GET", "../php/getstationroute.php?processcat=" + document.getElementById("processcat").value, true);
        xmlhttp.send();

        }
    });

    $('#station').change(function (){
        document.getElementById("machine").disabled = true;
        $("#machine").empty();
        if(document.getElementById('station').value == '')
        {
            return;
        }
        else
        {
        var station = document.getElementById("station").value.split(":")[0];
        //alert(station)
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
            
            var x1 = document.getElementById("machine");
            var option1 = document.createElement("option");
            option1.text = '';
            x1.add(option1);
            if((res.length - 1) == 0)
            {
                return false;
            }
            //alert('number: '+res.length)
            document.getElementById("machine").disabled = false;
            $('#machine').focus();
            for (i = 0; i < res.length - 1; i++) 
            { 
                    // alert(res[i]);
                    var x = document.getElementById("machine");
                    var option = document.createElement("option");
                    option.text = res[i];
                    x.add(option);
            }
        }
        };

        xmlhttp.open("GET", "../php/getmachine.php?processcat=" + document.getElementById("processcat").value+"&station="+station, true);
        xmlhttp.send();

        var xmlhttp2 = new XMLHttpRequest();
        xmlhttp2.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
            document.getElementById("inc").value = result;
            if(result == 1)
            {
                document.getElementById("waferno").disabled = false;
                document.getElementById("waferrun").disabled = false;
            }
            else
            {
                document.getElementById("waferno").disabled = true;
                document.getElementById("waferrun").disabled = true;

                document.getElementById("waferno").value = '';
                document.getElementById("waferrun").value = '';
            }
            
        }
        };

        xmlhttp2.open("GET", "../php/getinc.php?processcat=" + document.getElementById("processcat").value+"&station="+station, true);
        xmlhttp2.send();

        }
    });

    $( "#btnAddDefect" ).click(function() {

        //alert(tblcount)

        
        var sdqty = $('input[name="sdqty[]"]').map(function () {
        return this.value; }).get();
        var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
        //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
        if((parseInt(dtotal) + parseInt($('#dqty').val())) > parseInt(document.getElementById("wqty").value))
        {
            document.getElementById("derror").innerHTML = 'Reject quantity exceeding Internal Lot number current quantity!';
            document.getElementById("derror").hidden = false;
            document.getElementById("dsuccess").hidden = true;
            return false;
        }
        if($('#dwaferno').val()== "" ||  $('#dqty').val()== "" ||  $('#ddetails').val()== "")
        {
            document.getElementById("derror").innerHTML = 'Please complete necessary details!';
            document.getElementById("derror").hidden = false;
            document.getElementById("dsuccess").hidden = true;
            return false;
        }
        else
        {
            $('#tblreject > tbody').append('<tr id="tr'+tblcount+'">'+
                                        '<td><input type="hidden" id = "sdwaferno[]"  name="sdwaferno[]" value="'+$('#dwaferno').val()+'">'+$('#dwaferno').val()+'</td>'+
                                        '<td><input type="hidden" id = "sddetails[]"  name="sddetails[]" value="'+$('#ddetails').val()+'">'+$('#ddetails').val()+'</td>'+
                                        '<td><input type="hidden" id = "sdqty[]"  name="sdqty[]" value="'+$('#dqty').val()+'">'+$('#dqty').val()+'</td>'+
                                        '<td><input type="hidden" id = "sdremarks[]"  name="sdremarks[]" value="'+$('#dremarks').val()+'">'+$('#dremarks').val()+'</td>'+
                                        '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                        '</tr>');

            tblcount++;
            $('#dwaferno').val("");
            $('#ddetails').val("");
            $('#dqty').val("");
            $('#dremarks').val("");
            //checkRow(tblcount);
            
            document.getElementById("dsuccess").innerHTML = "Reject details successfully added!";
            document.getElementById("derror").hidden = true;
            document.getElementById("dsuccess").hidden = false;
            dtotal = sdqty.reduce(function(a, b) { return a + b; }, 0);
            parseInt(dtotal) += parseInt($('#dqty').val());
        }

    });

    $( "#btnAddThick" ).click(function() {

        
        
        if(Thickness() == false)
        {
            alert('Please complete Final thickness details!');
            document.getElementById("terror").innerHTML = "Please complete necessary details!";
            document.getElementById("terror").hidden = false;
            document.getElementById("tsuccess").hidden = true;
            return false;
        }
        else
        {
            $('#tblthickness > tbody').append('<tr id="tr'+tblcount2+'">'+
                                        '<td><input type="hidden" id = "stwaferno[]"  name="stwaferno[]" value="'+$('#twaferno').val()+'">'+$('#twaferno').val()+'</td>'+
                                        '<td><input type="hidden" id = "stpoint1[]"  name="stpoint1[]" value="'+$('#tpoint1').val()+'">'+$('#tpoint1').val()+'</td>'+
                                        '<td><input type="hidden" id = "stpoint2[]"  name="stpoint2[]" value="'+$('#tpoint2').val()+'">'+$('#tpoint2').val()+'</td>'+
                                        '<td><input type="hidden" id = "stpoint3[]"  name="stpoint3[]" value="'+$('#tpoint3').val()+'">'+$('#tpoint3').val()+'</td>'+
                                        '<td><input type="hidden" id = "stpoint4[]"  name="stpoint4[]" value="'+$('#tpoint4').val()+'">'+$('#tpoint4').val()+'</td>'+
                                        '<td><input type="hidden" id = "stpoint5[]"  name="stpoint5[]" value="'+$('#tpoint5').val()+'">'+$('#tpoint5').val()+'</td>'+
                                        '<td><input type="hidden" id = "spave[]"  name="spave[]" value="'+$('#pave').val()+'">'+$('#pave').val()+'</td>'+
                                        '<td><input type="hidden" id = "sttv[]"  name="sttv[]" value="'+$('#ttv').val()+'">'+$('#ttv').val()+'</td>'+
                                        '<td><button type="button" onclick="removeRow2('+tblcount2+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                        '</tr>');

            tblcount2++;
            $('#twaferno').val("");
            $('#tpoint1').val("");
            $('#tpoint2').val("");
            $('#tpoint3').val("");
            $('#tpoint4').val("");
            $('#tpoint5').val("");
            $('#pave').val("");
            $('#ttv').val("");
            $('#twaferno').focus();
            //checkRow(tblcount);
            
            document.getElementById("tsuccess").innerHTML = "Final Thickness details successfully added!";
            document.getElementById("terror").hidden = true;
            document.getElementById("tsuccess").hidden = false;
        }

    });

    $("#btnStart").click(function() {
        /* if(document.getElementById("inc").value == 1)
        {
            if(document.getElementById("waferno").value == '' || document.getElementById("waferrun").value == '')
            {
                document.getElementById("error").innerHTML = "Please Input Wafer no and Wafer run details!";
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                return false;
            }
            
        } */
        var station = document.getElementById("station").value.split(":")[0];
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            alert(result);
            if(document.getElementById("waferno").value == '' && document.getElementById("inc").value == 1)
            {
                document.getElementById("error").innerHTML = 'Kindly input Wafer number!';
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                return false;
            }

            if(document.getElementById("waferrun").value == '' && document.getElementById("inc").value == 1)
            {
                document.getElementById("error").innerHTML = 'Kindly input Wafer run!';
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                return false;
            }
            if(document.getElementById("station").value == '')
            {
                document.getElementById("error").innerHTML = 'Kindly select station!';
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                return false;
            }
            if(res[0] == 'success')
            {
                document.getElementById("success").innerHTML = res[1];
                document.getElementById("success").hidden = false;
                document.getElementById("error").hidden = true;
                document.getElementById("btnDone").disabled = false;
                document.getElementById("btnHold").disabled = false;
                $("input").attr('disabled','disabled');
                $("number").attr('disabled','disabled');
                $("select").attr('disabled','disabled');
                document.getElementById("btnStart").disabled = true;
            }
            else if(res[0] == 'error')
            {
                document.getElementById("error").innerHTML = res[1];
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                return false;
            }
            else if(res[0] == 'session')
            {
                alert("Login session timeout! Refresh your browser and try to login again!");
                location.reload();
                return false;
            }
            document.getElementById("bg").value = 0;
            document.getElementById("inc").value = 0;
            document.getElementById("derror").hidden = true;
            document.getElementById("dsuccess").hidden = true;
            document.getElementById("rerror").hidden = true;
            document.getElementById("rsuccess").hidden = true;
            document.getElementById("terror").hidden = true;
            document.getElementById("tsuccess").hidden = true;
            
            document.getElementById("dwaferno").disabled = false;
            document.getElementById("ddetails").disabled = false;
            document.getElementById("dqty").disabled = false;
            document.getElementById("dremarks").disabled = false;
            document.getElementById("btnAddDefect").disabled = false;

            document.getElementById("rpoint1").disabled = false;
            document.getElementById("rpoint2").disabled = false;
            document.getElementById("rpoint3").disabled = false;
            document.getElementById("rpoint4").disabled = false;
            document.getElementById("rpoint5").disabled = false;
            if(res[2] == 1)
            {
                document.getElementById("twaferno").disabled = false;
                document.getElementById("tpoint1").disabled = false;
                document.getElementById("tpoint2").disabled = false;
                document.getElementById("tpoint4").disabled = false;
                document.getElementById("tpoint5").disabled = false;
                document.getElementById("tpoint3").disabled = false;
                document.getElementById("btnAddThick").disabled = false;
                document.getElementById("bg").value = 1;
                
            }
            
        }
        };
        xmlhttp.open("GET", "../php/startinspection.php?intlotno=" + document.getElementById("intlotno").value+"&station="+station+"&waferno="+document.getElementById("waferno").value+"&waferrun="+document.getElementById("waferrun").value+"&machine="+document.getElementById("machine").value+"&processcat="+document.getElementById("processcat").value, true);
        xmlhttp.send();

        
    });

    $("#btnDone").click(function() {
        //alert(document.getElementById("rpoint3").value)
        var sdwaferno = $('input[name="sdwaferno[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks[]"]').map(function () {
        return this.value; }).get();

        var stwaferno = $('input[name="stwaferno[]"]').map(function () {
        return this.value; }).get();

        var stpoint1 = $('input[name="stpoint1[]"]').map(function () {
        return this.value; }).get();

        var stpoint2 = $('input[name="stpoint2[]"]').map(function () {
        return this.value; }).get();

        var stpoint3 = $('input[name="stpoint3[]"]').map(function () {
        return this.value; }).get();

        var stpoint4 = $('input[name="stpoint4[]"]').map(function () {
        return this.value; }).get();

        var stpoint5 = $('input[name="stpoint5[]"]').map(function () {
        return this.value; }).get();

        var spave = $('input[name="spave[]"]').map(function () {
        return this.value; }).get();

        var sttv = $('input[name="sttv[]"]').map(function () {
        return this.value; }).get();
        
        //alert(JSON.stringify(stwaferno))
        if(tblcount2 <= 0 && document.getElementById("bg").value == 1)
        {
            alert('Please Input Final thickness details!');
            document.getElementById("terror").innerHTML = "Please Input Final thickness details!";
            document.getElementById("terror").hidden = false;
            document.getElementById("tsuccess").hidden = true;
            return false;
        }

        if(Roughness() == false)
        {
            alert('Please complete Roughness details!');
            document.getElementById("rerror").innerHTML = "Please complete necessary details!";
            document.getElementById("rerror").hidden = false;
            document.getElementById("rsuccess").hidden = true;
            return false;
        }

        if(tblcount > 0 )
        {
            var remarks ='';

            remarks = prompt("Reject found. Kindly input Remarks/Summary:");
            if(remarks === null)
            {
                return false;
            }
        }
        else
        {
            remarks ='';
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            //alert(result);
            var res = result.split("_"); 

            if(res[0] == 'success')
            {
                $("input[type=text]").val('');
                $("input[type=number]").val('');
                $("select").val('');
                $("input").attr('disabled','disabled');
                $("number").attr('disabled','disabled');
                $("select").attr('disabled','disabled');
                $("button").attr('disabled','disabled');
                $(".alert").attr('hidden','hidden');
                $("#tblreject > tbody").empty();
                $("#tblthickness > tbody").empty();
                document.getElementById("btnClear").disabled = false;
                document.getElementById("processcat").disabled = false;

                document.getElementById("success").innerHTML = res[1];
                document.getElementById("error").hidden = true;
                document.getElementById("success").hidden = false;
                $('#processcat').focus();
            }

            else if(res[0] == 'error')
            {
                $("input[type=text]").val('');
                $("input[type=number]").val('');
                $("select").val('');
                $("input").attr('disabled','disabled');
                $("number").attr('disabled','disabled');
                $("select").attr('disabled','disabled');
                $("button").attr('disabled','disabled');
                $(".alert").attr('hidden','hidden');
                $("#tblreject > tbody").empty();
                $("#tblthickness > tbody").empty();
                document.getElementById("btnClear").disabled = false;
                document.getElementById("processcat").disabled = false;
                $('#processcat').focus();
                document.getElementById("error").innerHTML = res[1];
                document.getElementById("success").hidden = true;
                document.getElementById("error").hidden = false;
            }
            else if(res[0] == 'session')
            {
                alert("Login session timeout! Refresh your browser and try to login again!");
                location.reload();
            }
            
        }
        };

        xmlhttp.open("GET", "../php/doneinspection.php?intlotno=" + document.getElementById("intlotno").value +"&sdwaferno="+JSON.stringify(sdwaferno)+"&sddetails="+JSON.stringify(sddetails)+"&sdqty="+JSON.stringify(sdqty)+"&sdremarks="+JSON.stringify(sdremarks)+"&stwaferno="+JSON.stringify(stwaferno)+"&stpoint1="+ JSON.stringify(stpoint1)+"&stpoint2="+ JSON.stringify(stpoint2)+"&stpoint3="+ JSON.stringify(stpoint3)+"&stpoint4="+ JSON.stringify(stpoint4)+"&stpoint5="+ JSON.stringify(stpoint5)+"&spave="+ JSON.stringify(spave)+"&sttv="+ JSON.stringify(sttv)+"&rpoint1="+ document.getElementById("rpoint1").value+"&rpoint2="+ document.getElementById("rpoint2").value+"&rpoint3="+ document.getElementById("rpoint3").value+"&rpoint4="+ document.getElementById("rpoint4").value+"&rpoint5="+ document.getElementById("rpoint5").value+"&rave="+ document.getElementById("rave").value+"&btnStat=done"+"&remarks="+remarks, true);
        xmlhttp.send();
    });

    $("#btnHold").click(function() {
        //alert(document.getElementById("rpoint3").value)
        var sdwaferno = $('input[name="sdwaferno[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks[]"]').map(function () {
        return this.value; }).get();

        var stwaferno = $('input[name="stwaferno[]"]').map(function () {
        return this.value; }).get();

        var stpoint1 = $('input[name="stpoint1[]"]').map(function () {
        return this.value; }).get();

        var stpoint2 = $('input[name="stpoint2[]"]').map(function () {
        return this.value; }).get();

        var stpoint3 = $('input[name="stpoint3[]"]').map(function () {
        return this.value; }).get();

        var stpoint4 = $('input[name="stpoint4[]"]').map(function () {
        return this.value; }).get();

        var stpoint5 = $('input[name="stpoint5[]"]').map(function () {
        return this.value; }).get();

        var spave = $('input[name="spave[]"]').map(function () {
        return this.value; }).get();

        var sttv = $('input[name="sttv[]"]').map(function () {
        return this.value; }).get();

        var remarks ='';

            remarks = prompt("Lot number: "+ document.getElementById("intlotno").value + " for HOLD. Kindly input Remarks/Summary:");
            if(remarks === null)
            {
                return false;
            }
        
        //alert(document.getElementsByName("btnStat"));
        if(Thickness() == false)
        {
            alert('Please complete Final thickness details!');
            document.getElementById("terror").innerHTML = "Please complete necessary details!";
            document.getElementById("terror").hidden = false;
            document.getElementById("tsuccess").hidden = true;
            return false;
        }

        if(Roughness() == false)
        {
            alert('Please complete Roughness details!');
            document.getElementById("rerror").innerHTML = "Please complete necessary details!";
            document.getElementById("rerror").hidden = false;
            document.getElementById("rsuccess").hidden = true;
            return false;
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            //alert(result);
            var res = result.split("_"); 

            if(res[0] == 'success')
            {
                $("input[type=text]").val('');
                $("input[type=number]").val('');
                $("select").val('');
                $("input").attr('disabled','disabled');
                $("number").attr('disabled','disabled');
                $("select").attr('disabled','disabled');
                $("button").attr('disabled','disabled');
                $(".alert").attr('hidden','hidden');
                $("#tblreject > tbody").empty();
                $("#tblthickness > tbody").empty();
                document.getElementById("btnClear").disabled = false;
                document.getElementById("processcat").disabled = false;

                document.getElementById("success").innerHTML = res[1];
                document.getElementById("error").hidden = true;
                document.getElementById("success").hidden = false;
                $('#processcat').focus();
            }

            else if(res[0] == 'error')
            {
                document.getElementById("error").innerHTML = res[1];
                document.getElementById("success").hidden = true;
                document.getElementById("error").hidden = false;
            }
            else if(res[0] == 'session')
            {
                alert("Login session timeout! Refresh your browser and try to login again!");
                location.reload();
            }
            
        }
        };

        xmlhttp.open("GET", "../php/doneinspection.php?intlotno=" + document.getElementById("intlotno").value +"&sdwaferno="+JSON.stringify(sdwaferno)+"&sddetails="+JSON.stringify(sddetails)+"&sdqty="+JSON.stringify(sdqty)+"&sdremarks="+JSON.stringify(sdremarks)+"&stwaferno="+JSON.stringify(stwaferno)+"&stpoint1="+ JSON.stringify(stpoint1)+"&stpoint2="+ JSON.stringify(stpoint2)+"&stpoint3="+ JSON.stringify(stpoint3)+"&stpoint4="+ JSON.stringify(stpoint4)+"&stpoint5="+ JSON.stringify(stpoint5)+"&spave="+ JSON.stringify(spave)+"&sttv="+ JSON.stringify(sttv)+"&rpoint1="+ document.getElementById("rpoint1").value+"&rpoint2="+ document.getElementById("rpoint2").value+"&rpoint3="+ document.getElementById("rpoint3").value+"&rpoint4="+ document.getElementById("rpoint4").value+"&rpoint5="+ document.getElementById("rpoint5").value+"&rave="+ document.getElementById("rave").value+"&btnStat=hold"+"&remarks="+remarks, true);
        xmlhttp.send();
    });

    $("#rpoint1,#rpoint2,#rpoint3,#rpoint4,#rpoint5").keyup(function(event) { 
        document.getElementById("rave").value = 0;
        var rpoint1 = document.getElementById("rpoint1").value;
        var rpoint2 = document.getElementById("rpoint2").value;
        var rpoint3 = document.getElementById("rpoint3").value;
        var rpoint4 = document.getElementById("rpoint4").value;
        var rpoint5 = document.getElementById("rpoint5").value;

        //alert(parseFloat(rpoint1) + parseFloat(rpoint2) + parseFloat(rpoint3));

        var total;

        total = (parseFloat(rpoint1) + parseFloat(rpoint2) + parseFloat(rpoint3) + parseFloat(rpoint4) + parseFloat(rpoint5));
        if(Roughness() == true)
        {
            document.getElementById("rave").value = parseFloat(total / 5).toFixed(5);
            //document.getElementById("rsuccess").innerHTML = "<b>Success!<b/> Roughness Average has been automatically calculated!";
            document.getElementById("rerror").hidden = true;
            document.getElementById("rsuccess").hidden = true;
        }
        else
        {
            document.getElementById("rerror").innerHTML = "Please complete necessary details!";
            document.getElementById("rerror").hidden = false;
            document.getElementById("rsuccess").hidden = true;
            return false;
        }
        
    });

    $("#tpoint1,#tpoint2,#tpoint3,#tpoint4,#tpoint5,#twaferno").keyup(function(event) { 
        document.getElementById("pave").value = 0;
        var tpoint1 = document.getElementById("tpoint1").value;
        var tpoint2 = document.getElementById("tpoint2").value;
        var tpoint3 = document.getElementById("tpoint3").value;
        var tpoint4 = document.getElementById("tpoint4").value;
        var tpoint5 = document.getElementById("tpoint5").value;

        //alert(parseFloat(rpoint1) + parseFloat(rpoint2) + parseFloat(rpoint3));
        var total;
        
        total = (parseFloat(tpoint1) + parseFloat(tpoint2) + parseFloat(tpoint3) + parseFloat(tpoint4) + parseFloat(tpoint5));
        if(Thickness() == true)
        {
            //document.getElementById("tsuccess").innerHTML = "<b>Success!<b/> Total Thickness Variation has been automatically calculated!";
            document.getElementById("terror").hidden = true;
            document.getElementById("tsuccess").hidden = true;
            var high = Math.max(tpoint1,tpoint2,tpoint3,tpoint4,tpoint5);
            var low = Math.min(tpoint1,tpoint2,tpoint3,tpoint4,tpoint5);
            document.getElementById("pave").value = parseFloat(total / 5).toFixed(2);
            document.getElementById("ttv").value = parseFloat(high - low).toFixed(2);
        }
        else
        {
            document.getElementById("terror").innerHTML = "Please complete necessary details!";
            document.getElementById("terror").hidden = false;
            document.getElementById("tsuccess").hidden = true;
            return false;
        }
        
    });

    $("#btnClear").click(function() {
        
        $("input[type=text]").val('');
        $("input[type=number]").val('');
        $("select").val('');
        $("input").attr('disabled','disabled');
        $("number").attr('disabled','disabled');
        $("select").attr('disabled','disabled');
        $("button").attr('disabled','disabled');
        $(".alert").attr('hidden','hidden');
        $("#tblreject > tbody").empty();
        $("#tblthickness > tbody").empty();
        document.getElementById("btnClear").disabled = false;
        document.getElementById("processcat").disabled = false;
        $('#processcat').focus();
    });

    /* $("#btnGenerate").click(function() {
        window.open('http://localhost/wip/public/test.php')
    }); */
});
</script>