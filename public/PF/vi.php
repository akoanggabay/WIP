<h1 class="h3 mb-4 text-gray-900">Electronic Lot Traveller Card</h1>
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
                                                <label>Cassette No: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="cassno" name="cassno"  class="form-control input-sm" style="text-transform:uppercase" disabled>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Wafer no: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="waferno" name="waferno"  class="form-control input-sm" style="text-transform:uppercase" placeholder="e.g 1-25" onkeyup="this.value = this.value.replace(/[^\d,-]/g,'')" disabled>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Wafer run: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="waferrun" name="waferrun"  class="form-control input-sm" style="text-transform:uppercase" placeholder="e.g X79540" disabled>
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
                                            <button type="button" class="btn btn-info" id="btnStart" name = "btnStart" disabled>Start</button>
                                            <button type="button" class="btn btn-warning float-right" id="btnClear" name = "btnClear">Clear</button>
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
                                                        <label>Customer Lot Number:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="custlot" name="custlot"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
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
                                                        <label>Wafer/Panel/Strip No:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wno" name="wno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer/Panel/Strip Run:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wrun" name="wrun"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Initial Wafer Thickness:</label>
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
                                                        <label>Wafer/Panel/Strip Size:</label>
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
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wheel Requirement:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wr" name="wr"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Device Type:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="dtype" name="dtype"  class="form-control input-sm" value="" readonly><br>
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
<!-- ---------------------------------------------------------------------------------------LOGS -->
<div class="row"> 
    <h5>Internal Lot number Logs</h5>
    <div class="col-lg-12">
        <div class="card border-left-danger">
            <div class="card-body">
                <div class="row no-gutters table-responsive">
                <table class="table table-bordered" id="tblintlogs" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tracking no</th>
                            <th>Process</th>
                            <th>Status</th>
                            <th>Machine</th>
                            <th>Cassette no</th>
                            <th>Qty In</th>
                            <th>Qty Out</th>
                            <th>Remarks</th>
                            <th>Date In</th>
                            <th>Date Out</th>
                            <th>Processed By</th>

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
    <h5>Internal Lot number Reject Logs</h5>
    <div class="col-lg-12">
        <div class="card border-left-danger">
            <div class="card-body">
                <div class="row no-gutters table-responsive">
                <table class="table table-bordered" id="tblintrejlogs" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tracking no</th>
                            <th>Process</th>
                            <th>Machine</th>
                            <th>Wafer no</th>
                            <th>Defect details</th>
                            <th>Defect quantity</th>
                            <th>Remarks</th>
                            <th>Date Input</th>
                            <th>Rejected By</th>

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
    <h5>Internal Lot number Roughness Logs</h5>
    <div class="col-lg-12">
        <div class="card border-left-danger">
            <div class="card-body">
                <div class="row no-gutters table-responsive">
                <table class="table table-bordered" id="tblrlogs" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tracking no</th>
                            <th>Process</th>
                            <th>Roughness 1</th>
                            <th>Roughness 2</th>
                            <th>Roughness 3</th>
                            <th>Roughness 4</th>
                            <th>Roughness 5</th>
                            <th>Roughness average</th>
                            <th>Date Input</th>
                            <th>Processed By</th>

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
    <h5>Internal Lot number Thickness Logs</h5>
    <div class="col-lg-12">
        <div class="card border-left-danger">
            <div class="card-body">
                <div class="row no-gutters table-responsive">
                <table class="table table-bordered" id="tbltlogs" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tracking no</th>
                            <th>Process</th>
                            <th>Wafer no</th>
                            <th>Point 1</th>
                            <th>Point 2</th>
                            <th>Point 3</th>
                            <th>Point 4</th>
                            <th>Point 5</th>
                            <th>Point average</th>
                            <th>Total Thickness Variation</th>
                            <th>Date Input</th>
                            <th>Processed By</th>

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
<br/>
<br/>
<!-- ---------------------------------------------------------------------------------------- -->

<div class="form-group">
    <button type="button" class="btn btn-success" id="btnDone" name = "btnStat" value="done" disabled>Done</button>
    <button type="button" class="btn btn-info float-right" id="btnHold" name = "btnStat" value="hold" disabled>Hold Lot number</button>
</div>

<script src="../vendor/jquery/jquery.min.js"></script>
<script>

$(document).ready(function(){

    $('#custcode').change(function (){
        $("input[type=text]").val('');
        $("#intlotno").empty();
        document.getElementById("intlotno").disabled = false;
        document.getElementById("waferno").disabled = true;
        document.getElementById("waferrun").disabled = true;
        document.getElementById("station").disabled = true;
        document.getElementById("machine").disabled = true;
        document.getElementById("cassno").disabled = true;
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
        $("#tblintlogs > tbody").empty();
        $("#tblintrejlogs > tbody").empty();
        $("#tbltlogs > tbody").empty();
        $("#tblrlogs > tbody").empty();
        $("input").attr('disabled','disabled');
        $("number").attr('disabled','disabled');
        $("#btnDone").attr('disabled','disabled');
        $("#btnHold").attr('disabled','disabled');
        $("input[type=text]").val('');
        document.getElementById("station").value ='';
        if(document.getElementById('intlotno').value == '')
        {
            return;
        }
        else
        {

            
            //$('#waferno').focus();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            //alert(this.readyState + ' ' + this.status);
            if (this.readyState == 4 && this.status == 200) 
            {
                var result = this.responseText;
                var resdata = result.split("_");
                //alert(result);
                var res = JSON.parse(result.split("_")[1])[0];
                
                document.getElementById("deviceno").value = res.deviceno;
                document.getElementById("status").value = res.status;
                document.getElementById("wqty").value = res.currqty;
                document.getElementById("datestart").value = res.datestart;
                document.getElementById("shipbackdate").value = res.shipbackdate;
                document.getElementById("wthick").value = res.waferthickness;
                document.getElementById("rthick").value = res.requiredthickness;
                document.getElementById("wsize").value = res.wafersize;
                document.getElementById("ltype").value = res.lottype;
                document.getElementById("custlot").value = res.custlot;
                document.getElementById("wno").value = res.waferno;
                document.getElementById("wrun").value = res.waferrun;
                document.getElementById("wr").value = res.wr;
                document.getElementById("dtype").value = res.devicetype;
                
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
                    var lotlogs = JSON.parse(result.split("_")[2]);
                    var rejlogs = JSON.parse(result.split("_")[5]);
                    var rlogs = JSON.parse(result.split("_")[3]);
                    var tlogs = JSON.parse(result.split("_")[4]);
                    for(var i = 0;i<lotlogs.length;i++)
                    {
                        $('#tblintlogs > tbody').append('<tr id="tr'+lotlogs[i].trackingno+'">'+
                        '<td>'+lotlogs[i].trackingno+'</td>'+
                        '<td>'+lotlogs[i].station+'</td>'+
                        '<td>'+lotlogs[i].status+'</td>'+
                        '<td>'+lotlogs[i].machine+'</td>'+
                        '<td>'+lotlogs[i].cassno+'</td>'+
                        '<td>'+lotlogs[i].qtyin+'</td>'+
                        '<td>'+lotlogs[i].qtyout+'</td>'+
                        '<td>'+lotlogs[i].remarks+'</td>'+
                        '<td>'+lotlogs[i].datein+'</td>'+
                        '<td>'+lotlogs[i].dateout+'</td>'+
                        '<td>'+lotlogs[i].lastupdatedby+'</td>'+
                        '</tr>');
                    }
                    for(var i = 0;i<rejlogs.length;i++)
                    {
                        $('#tblintrejlogs > tbody').append('<tr id="tr'+rejlogs[i].trackingno+'">'+
                        '<td>'+rejlogs[i].trackingno+'</td>'+
                        '<td>'+rejlogs[i].station+'</td>'+
                        '<td>'+rejlogs[i].machine+'</td>'+
                        '<td>'+rejlogs[i].waferno+'</td>'+
                        '<td>'+rejlogs[i].ddetails+'</td>'+
                        '<td>'+rejlogs[i].dqty+'</td>'+
                        '<td>'+rejlogs[i].remarks+'</td>'+
                        '<td>'+rejlogs[i].lastupdate+'</td>'+
                        '<td>'+rejlogs[i].lastupdatedby+'</td>'+
                        '</tr>');
                    }

                    for(var i = 0;i<rlogs.length;i++)
                    {
                        $('#tblrlogs > tbody').append('<tr id="tr'+rlogs[i].trackingno+'">'+
                        '<td>'+rlogs[i].trackingno+'</td>'+
                        '<td>'+rlogs[i].station+'</td>'+
                        '<td>'+rlogs[i].r1+'</td>'+
                        '<td>'+rlogs[i].r2+'</td>'+
                        '<td>'+rlogs[i].r3+'</td>'+
                        '<td>'+rlogs[i].r4+'</td>'+
                        '<td>'+rlogs[i].r5+'</td>'+
                        '<td>'+rlogs[i].rave+'</td>'+
                        '<td>'+rlogs[i].lastupdate+'</td>'+
                        '<td>'+rlogs[i].lastupdatedby+'</td>'+
                        '</tr>');
                    }

                    for(var i = 0;i<tlogs.length;i++)
                    {
                        $('#tbltlogs > tbody').append('<tr id="tr'+tlogs[i].trackingno+'">'+
                        '<td>'+tlogs[i].trackingno+'</td>'+
                        '<td>'+tlogs[i].station+'</td>'+
                        '<td>'+tlogs[i].waferno+'</td>'+
                        '<td>'+tlogs[i].p1+'</td>'+
                        '<td>'+tlogs[i].p2+'</td>'+
                        '<td>'+tlogs[i].p3+'</td>'+
                        '<td>'+tlogs[i].p4+'</td>'+
                        '<td>'+tlogs[i].p5+'</td>'+
                        '<td>'+tlogs[i].pave+'</td>'+
                        '<td>'+tlogs[i].ttv+'</td>'+
                        '<td>'+tlogs[i].lastupdate+'</td>'+
                        '<td>'+tlogs[i].lastupdatedby+'</td>'+
                        '</tr>');
                    }
                    document.getElementById("machine").value = '';
                    document.getElementById("machine").disabled = false;
                    document.getElementById("station").disabled = false;
                    document.getElementById("error").hidden = true;
                    document.getElementById("success").hidden = true;
                    document.getElementById("btnStart").disabled = false;
                }

                
                if(resdata[0] == 'onprosucc')
                {
                    var lotlogs = JSON.parse(result.split("_")[6]);
                    var rejlogs = JSON.parse(result.split("_")[9]);
                    var rlogs = JSON.parse(result.split("_")[7]);
                    var tlogs = JSON.parse(result.split("_")[8]);
                    for(var i = 0;i<lotlogs.length;i++)
                    {
                        $('#tblintlogs > tbody').append('<tr id="tr'+lotlogs[i].trackingno+'">'+
                        '<td>'+lotlogs[i].trackingno+'</td>'+
                        '<td>'+lotlogs[i].station+'</td>'+
                        '<td>'+lotlogs[i].status+'</td>'+
                        '<td>'+lotlogs[i].machine+'</td>'+
                        '<td>'+lotlogs[i].cassno+'</td>'+
                        '<td>'+lotlogs[i].qtyin+'</td>'+
                        '<td>'+lotlogs[i].qtyout+'</td>'+
                        '<td>'+lotlogs[i].remarks+'</td>'+
                        '<td>'+lotlogs[i].datein+'</td>'+
                        '<td>'+lotlogs[i].dateout+'</td>'+
                        '<td>'+lotlogs[i].lastupdatedby+'</td>'+
                        '</tr>');
                    }
                    for(var i = 0;i<rejlogs.length;i++)
                    {
                        $('#tblintrejlogs > tbody').append('<tr id="tr'+rejlogs[i].trackingno+'">'+
                        '<td>'+rejlogs[i].trackingno+'</td>'+
                        '<td>'+rejlogs[i].station+'</td>'+
                        '<td>'+rejlogs[i].machine+'</td>'+
                        '<td>'+rejlogs[i].waferno+'</td>'+
                        '<td>'+rejlogs[i].ddetails+'</td>'+
                        '<td>'+rejlogs[i].dqty+'</td>'+
                        '<td>'+rejlogs[i].remarks+'</td>'+
                        '<td>'+rejlogs[i].lastupdate+'</td>'+
                        '<td>'+rejlogs[i].lastupdatedby+'</td>'+
                        '</tr>');
                    }

                    for(var i = 0;i<rlogs.length;i++)
                    {
                        $('#tblrlogs > tbody').append('<tr id="tr'+rlogs[i].trackingno+'">'+
                        '<td>'+rlogs[i].trackingno+'</td>'+
                        '<td>'+rlogs[i].station+'</td>'+
                        '<td>'+rlogs[i].r1+'</td>'+
                        '<td>'+rlogs[i].r2+'</td>'+
                        '<td>'+rlogs[i].r3+'</td>'+
                        '<td>'+rlogs[i].r4+'</td>'+
                        '<td>'+rlogs[i].r5+'</td>'+
                        '<td>'+rlogs[i].rave+'</td>'+
                        '<td>'+rlogs[i].lastupdate+'</td>'+
                        '<td>'+rlogs[i].lastupdatedby+'</td>'+
                        '</tr>');
                    }

                    for(var i = 0;i<tlogs.length;i++)
                    {
                        $('#tbltlogs > tbody').append('<tr id="tr'+tlogs[i].trackingno+'">'+
                        '<td>'+tlogs[i].trackingno+'</td>'+
                        '<td>'+tlogs[i].station+'</td>'+
                        '<td>'+tlogs[i].waferno+'</td>'+
                        '<td>'+tlogs[i].p1+'</td>'+
                        '<td>'+tlogs[i].p2+'</td>'+
                        '<td>'+tlogs[i].p3+'</td>'+
                        '<td>'+tlogs[i].p4+'</td>'+
                        '<td>'+tlogs[i].p5+'</td>'+
                        '<td>'+tlogs[i].pave+'</td>'+
                        '<td>'+tlogs[i].ttv+'</td>'+
                        '<td>'+tlogs[i].lastupdate+'</td>'+
                        '<td>'+tlogs[i].lastupdatedby+'</td>'+
                        '</tr>');
                    }

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

                    document.getElementById("machine").value = '';
                    document.getElementById("machine").disabled = true;

                    document.getElementById("waferno").value = '';
                    document.getElementById("waferrun").value = '';

                    
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
        
        //hidden
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
        
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            
            var x1 = document.getElementById("station");
            var option1 = document.createElement("option");
            option1.text = '';
            x1.add(option1);
            for (i = 0; i < res.length - 1; i++) 
            { 
                    //alert(res[i]);
                    if(res[i] != '')
                    {
                        var x = document.getElementById("station");
                        var option = document.createElement("option");
                        option.text = res[i];
                        x.add(option);
                    }
                    
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
            //alert(document.getElementById("machine").options.length);
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
                document.getElementById("cassno").disabled = false;
                document.getElementById("waferno").disabled = false;
                document.getElementById("waferrun").disabled = false;
            }
            else
            {
                document.getElementById("cassno").disabled = false;
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



    $("#btnStart").click(function() {
        if(document.getElementById("inc").value == 1)
        {
            if(document.getElementById("waferno").value == '' || document.getElementById("waferrun").value == '')
            {
                document.getElementById("error").innerHTML = "Please Input Wafer no and Wafer run details!";
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                return false;
            }
            
        }
        if(document.getElementById("cassno").value == '')
        {
            document.getElementById("error").innerHTML = 'Kindly Input Cassette No!';
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            $('#cassno').focus();
            return false;
        }
        if(document.getElementById("machine").options.length > 1)
        {
            if(document.getElementById("machine").value == '')
            {
                document.getElementById("error").innerHTML = 'Kindly select machine No!';
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                $('#machine').focus();
                return false;
            }
        }
        var station = document.getElementById("station").value.split(":")[0];
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
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
                $("checkbox").attr('disabled','enabled');
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
        xmlhttp.open("GET", "../php/startinspection.php?intlotno=" + document.getElementById("intlotno").value+"&station="+station+"&waferno="+document.getElementById("waferno").value+"&waferrun="+document.getElementById("waferrun").value+"&machine="+document.getElementById("machine").value+"&processcat="+document.getElementById("processcat").value+"&inc="+document.getElementById("inc").value+"&cassno="+document.getElementById("cassno").value, true);
        xmlhttp.send();

        
    });

    $("#btnDone").click(function() {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            //alert(result);
            var res = result.split("_"); 

            if(res[0] == 'success')
            {

                swal("success!",{
                    icon: "success",
                    title: "Successful Transaction!",
                    closeOnClickOutside: false,
                });
                
                $("input[type=text]").val('');
                $("input[type=number]").val('');
                $("select").val('');
                $("input").attr('disabled','disabled');
                $("number").attr('disabled','disabled');
                $("select").attr('disabled','disabled');
                $("button").attr('disabled','disabled');
                $(".alert").attr('hidden','hidden');
                $("#tblintlogs > tbody").empty();
                $("#tblintrejlogs > tbody").empty();
                $("#tbltlogs > tbody").empty();
                $("#tblrlogs > tbody").empty();
                $('button.swal-button').prop("disabled", false);
                
                document.getElementById("btnClear").disabled = false;
                document.getElementById("processcat").disabled = false;
                document.getElementById("success").innerHTML = res[1];
                document.getElementById("error").hidden = true;
                document.getElementById("success").hidden = false;
                $('#processcat').focus();
            }

            else if(res[0] == 'error')
            {

                swal("error!",{
                    icon: "error",
                    title: res[1],
                    closeOnClickOutside: false,
                });
    
            }
            else if(res[0] == 'session')
            {
                alert("Login session timeout! Refresh your browser and try to login again!");
                location.reload();
            }
            
        }
        };

        xmlhttp.open("GET", "../php/doneinspection.php?intlotno=" + document.getElementById("intlotno").value +"&btnStat=done", true);
        xmlhttp.send();
    });

    $("#btnHold").click(function() {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            //alert(result);
            var res = result.split("_"); 

            if(res[0] == 'success')
            {

                swal("success!",{
                    icon: "success",
                    title: "Successful Transaction!",
                    closeOnClickOutside: false,
                });
                
                $("input[type=text]").val('');
                $("input[type=number]").val('');
                $("select").val('');
                $("input").attr('disabled','disabled');
                $("number").attr('disabled','disabled');
                $("select").attr('disabled','disabled');
                $("button").attr('disabled','disabled');
                $(".alert").attr('hidden','hidden');
                $("#tblintlogs > tbody").empty();
                $("#tblintrejlogs > tbody").empty();
                $("#tbltlogs > tbody").empty();
                $("#tblrlogs > tbody").empty();
                $('button.swal-button').prop("disabled", false);
                
                document.getElementById("btnClear").disabled = false;
                document.getElementById("processcat").disabled = false;
                document.getElementById("success").innerHTML = res[1];
                document.getElementById("error").hidden = true;
                document.getElementById("success").hidden = false;
                $('#processcat').focus();
            }

            else if(res[0] == 'error')
            {

                swal("error!",{
                    icon: "error",
                    title: res[1],
                    closeOnClickOutside: false,
                });

            }
            else if(res[0] == 'session')
            {
                alert("Login session timeout! Refresh your browser and try to login again!");
                location.reload();
            }
            
        }
        };

        xmlhttp.open("GET", "../php/doneinspection.php?intlotno=" + document.getElementById("intlotno").value +"&btnStat=hold", true);
        xmlhttp.send();
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
        $("#tblintlogs > tbody").empty();
        $("#tblintrejlogs > tbody").empty();
        $("#tbltlogs > tbody").empty();
        $("#tblrlogs > tbody").empty();
        
        document.getElementById("btnClear").disabled = false;
        document.getElementById("processcat").disabled = false;
        $('#processcat').focus();
    });

    /* $("#btnGenerate").click(function() {
        window.open('http://localhost/wip/public/test.php')
    }); */
});
</script>