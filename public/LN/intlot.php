<h1 class="h3 mb-4 text-gray-900">Generation of Internal Lot Number</h1>
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
                                                <label>Customer: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="custcode" name="custcode">
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
                                                <label>Customer Lot no: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="custlotno" name="custlotno">
                                                    <option selected></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Wafer size: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="number" id="wafersize" name="wafersize"  class="form-control input-sm">
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Z2 Wheel requirement: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="wr" name="wr">
                                                    <option selected></option>
                                                    <?php 
                                                    include_once("../classes/wr.php");
                                                    $SelectWR = WR::GetAllWR();
                                                    for($i=0;$i<count($SelectWR);$i++){
                                                    ?>
                                                            <option value ='<?php echo $SelectWR[$i]->getwr(); ?>' ><?php echo $SelectWR[$i]->getwr(); ?></option>
                                                    <?php 
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Device type: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="devicetype" name="devicetype">
                                                    <option selected></option>
                                                    <?php 
                                                    include_once("../classes/devicetype.php");
                                                    $SelectDeviceType = DeviceType::GetAllDeviceType();
                                                    for($i=0;$i<count($SelectDeviceType);$i++){
                                                    ?>
                                                            <option value ='<?php echo $SelectDeviceType[$i]->gettype(); ?>' ><?php echo $SelectDeviceType[$i]->gettype(); ?></option>
                                                    <?php 
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Purchase Order No: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="pono" name="pono">
                                                    <option selected></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <h5 style="align:center;">Work Instruction</h5>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Process: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="station" name="station">
                                                    <option selected></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Instruction: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea class="form-control" name="instruction" id="instruction" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Condition: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea class="form-control" name="condition" id="condition" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline-success" id="btnAddWI" name = "btnAddWI" >Add Work Instruction</button>
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
                                            <div class="panel-heading"><h5>Customer Lot Details</h5></div>
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
                                                        <label>Lot Quantity:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="qty" name="qty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Quantity:</label>
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
                                                        <label>Process Category:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="pcat" name="pcat"  class="form-control input-sm" value="" readonly><br>
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
<div class="row"> 
    <h5>List of Work Instruction</h5>
    <div class="col-lg-12">
        <div class="card border-left-danger">
            <div class="card-body">
                <div class="row no-gutters">
                <table class="table table-bordered" id="tblwi" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>PROCESS</th>
                            <th>SPECIAL INSTRUCTION</th>
                            <th>DESCRIPTION</th>
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
    <button type="button" class="btn btn-outline-success" id="btnGenerate" name = "btnGenerate" disabled>Generate ILN</button>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
var tblcount = 0;
function removeRow(row){
    
    $("#tr"+row).remove();
    tblcount = $('#tblwi > tbody tr').length;
    checkRow(tblcount);
}

function checkRow(row){
    if(row > 0)
    {
        document.getElementById("btnGenerate").disabled = false;
    }
    else
    {
        document.getElementById("btnGenerate").disabled = true;
    }
}

$(document).ready(function(){
    $('#custcode').change(function (){
        $("input[type=text]").val('');
        $("input[type=number]").val('');
        $("#custlotno").empty();
        $("#pono").empty();
        document.getElementById("btnGenerate").disabled = true;
        document.getElementById("success").hidden = true;
        document.getElementById("error").hidden = true;
        if(document.getElementById('custcode').value == '')
        {
            return;
        }
        else
        {
        $('#custlotno').focus();
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
            
            var x1 = document.getElementById("custlotno");
            var option1 = document.createElement("option");
            option1.text = '';
            x1.add(option1);
            for (i = 0; i < res.length - 1; i++) 
            { 
                    // alert(res[i]);
                    var x = document.getElementById("custlotno");
                    var option = document.createElement("option");
                    option.text = res[i];
                    x.add(option);
            }
        }
        };

        xmlhttp.open("GET", "../php/getcustlotno.php?custcode=" + document.getElementById("custcode").value, true);
        xmlhttp.send();

        }
    });

    $('#custlotno').change(function () {
        $("#pono").empty();
        $("#station").empty();
        if(document.getElementById('custlotno').value == '')
        {
            return;
        }
        else
        {
           
            $('#wafersize').focus();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            //alert(this.readyState + ' ' + this.status);
            if (this.readyState == 4 && this.status == 200) 
            {
                var result = this.responseText;
                //alert(result);
                var res = result.split('`');
                var resstation = res[1].split("_");
                var rescust = JSON.parse(res[0])[0];
                //alert(res.deviceno);
                document.getElementById("deviceno").value = rescust.deviceno;
                document.getElementById("qty").value = rescust.qty;
                document.getElementById("wqty").value = rescust.waferqty;
                document.getElementById("datestart").value = rescust.datestart;
                document.getElementById("shipbackdate").value = rescust.shipbackdate;
                document.getElementById("wthick").value = rescust.waferthickness;
                document.getElementById("rthick").value = rescust.requiredthickness;
                document.getElementById("pcat").value = rescust.processcat;
                document.getElementById("ltype").value = rescust.lottype;

                if(resstation.length > 1)
                {
                    var x1 = document.getElementById("station");
                    var option1 = document.createElement("option");
                    option1.text = '';
                    x1.add(option1);
                    for (i = 0; i < resstation.length - 1; i++) 
                    { 
                            // alert(res[i]);
                            var x = document.getElementById("station");
                            var option = document.createElement("option");
                            option.text = resstation[i];
                            x.add(option);
                    }
                }
                else
                {
                    document.getElementById("error").innerHTML = '<b>Error!</b> No available Process for <b> ' + $( "#custlotno option:selected" ).text();
                    document.getElementById("error").hidden = false;
                    document.getElementById("success").hidden = true;
                    document.getElementById("btnGenerate").disabled = true;
                }
                
            }
            };
            xmlhttp.open("GET", "../php/getcustlotnodetails.php?custlotno=" + document.getElementById("custlotno").value+"&custcode="+document.getElementById("custcode").value, true);
            xmlhttp.send();

            var xmlhttp2 = new XMLHttpRequest();
            xmlhttp2.onreadystatechange = function() {
            //alert(this.readyState + ' ' + this.status);
            if (this.readyState == 4 && this.status == 200) 
            {
                var result = this.responseText;
                var res = result.split("_");
                //alert(result);
                //alert(res.length)
                if(res.length > 1)
                {
                    var x1 = document.getElementById("pono");
                    var option1 = document.createElement("option");
                    option1.text = '';
                    x1.add(option1);
                    for (i = 0; i < res.length - 1; i++) 
                    { 
                            // alert(res[i]);
                            var x = document.getElementById("pono");
                            var option = document.createElement("option");
                            option.text = res[i];
                            x.add(option);
                    }
                }
                else
                {
                    document.getElementById("error").innerHTML = '<b>Error!</b> No available PO number for <b> ' + $( "#custcode option:selected" ).text();
                    document.getElementById("error").hidden = false;
                    document.getElementById("success").hidden = true;
                    document.getElementById("btnGenerate").disabled = true;
                }
                
                    
            }
            };
            xmlhttp2.open("GET", "../php/getcustpo.php?custcode=" + document.getElementById("custcode").value, true);
            xmlhttp2.send();
        }
        

    });

    $('#pono').change(function (){
        if(document.getElementById('pono').value == '')
        {
            return;
        }
        else
        {
        $('#pono').focus();
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
            if(res[0] == 'success')
            {
                document.getElementById("success").innerHTML = res[1];
                document.getElementById("success").hidden = false;
                document.getElementById("error").hidden = true;
                document.getElementById("btnGenerate").disabled = true;
                if(tblcount > 0)
                {
                    document.getElementById("btnGenerate").disabled = false;
                }
                
            }
            else
            {
                document.getElementById("error").innerHTML = res[1];
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                document.getElementById("btnGenerate").disabled = true;
            }
            
        }
        };

        xmlhttp.open("GET", "../php/checkpo.php?custcode=" + document.getElementById("custcode").value+"&pono="+document.getElementById("pono").value+"&custlotno="+document.getElementById("custlotno").value, true);
        xmlhttp.send();

        }
    });

    $("#btnGenerate").click(function() {
        //window.open('http://localhost/wip/print/test.php');
        if(document.getElementById("wafersize").value == '')
        {
            document.getElementById("error").innerHTML = 'Please enter Wafer size!';
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            return false;
        }
        if(tblcount  <=0 )
        {
            document.getElementById("error").innerHTML = 'Please Input Work Instruction!';
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            return false;
        }

        if(document.getElementById("devicetype").value == '')
        {
            document.getElementById("error").innerHTML = 'Please select Device type!';
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            return false;
        }

        if(document.getElementById("wr").value == '')
        {
            document.getElementById("error").innerHTML = 'Please select Wheel requirement!';
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            return false;
        }

        var sstation = $('input[name="sstation[]"]').map(function () {
        return this.value; }).get();

        var sinstruction = $('input[name="sinstruction[]"]').map(function () {
        return this.value; }).get();

        var scondition = $('input[name="scondition[]"]').map(function () {
        return this.value; }).get();


        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
            if(res[0] == 'success')
            {
                window.open('http://10.168.5.15/wip/print/intlot.php?intlotno='+res[2]);
                document.getElementById("success").innerHTML = res[1];
                document.getElementById("success").hidden = false;
                document.getElementById("error").hidden = true;
                document.getElementById("btnGenerate").disabled = true;
                document.getElementById("custcode").value = '';
                document.getElementById("wafersize").value = '';
                document.getElementById("devicetype").value = '';
                tblcount = 0;
                $("input[type=text]").val('');
                $("#custlotno").empty();
                $("#pono").empty();
                $("#tblwi > tbody").empty();
            }
            else
            {
                document.getElementById("error").innerHTML = res[1];
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                document.getElementById("btnGenerate").disabled = true;
            }
            
        }
        };
        xmlhttp.open("GET", "../php/generateiln.php?custcode=" + document.getElementById("custcode").value+"&pono="+document.getElementById("pono").value+"&custlotno="+document.getElementById("custlotno").value+"&wafersize="+document.getElementById("wafersize").value+"&sstation="+JSON.stringify(sstation)+"&sinstruction="+JSON.stringify(sinstruction)+"&scondition="+JSON.stringify(scondition)+"&devicetype="+document.getElementById("devicetype").value+"&wr="+document.getElementById("wr").value, true);
        xmlhttp.send();
    });


    $("#btnAddWI").click(function() {
        //alert(document.getElementById("instruction").value)

        if($('#station').val()== "")
        {
            document.getElementById("error").innerHTML = 'Please complete Work Instruction details!';
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            return false;
        }
        else
        {
            $('#tblwi > tbody').append('<tr id="tr'+tblcount+'">'+
                                        '<td><input type="hidden" id = "sstation[]"  name="sstation[]" value="'+$('#station').val()+'">'+$('#station').val()+'</td>'+
                                        '<td><input type="hidden" id = "sinstruction[]"  name="sinstruction[]" value="'+$('#instruction').val()+'">'+$('#instruction').val()+'</td>'+
                                        '<td><input type="hidden" id = "scondition[]"  name="scondition[]" value="'+$('#condition').val()+'">'+$('#condition').val()+'</td>'+
                                        '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                        '</tr>');

            tblcount++;
            $('#station').val("");
            $('#instruction').val("");
            $('#condition').val("");
    
            checkRow(tblcount);
            
        }
    });
});
</script>