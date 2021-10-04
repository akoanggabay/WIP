<h1 class="h3 mb-4 text-gray-900">Internal Lot number Inquiry</h1>
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

                                        
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Internal Lot number: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="intlotno" name="intlotno"  class="form-control input-sm">
                                            </div>
                                        </div>
                                        <br/>
                                        
                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline-success" id="btnView" name = "btnView" onkeypress="if (event.keyCode == 13)  return false;">View Details</button>
                                            <button type="button" class="btn btn-outline-warning float-right" id="btnClear" name = "btnClear">Clear details</button>
                                        </div>

                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline-info" id="btnPrint" name = "btnPrint" onkeypress="if (event.keyCode == 13)  return false;" disabled>Re-print</button>
                                        </div>
                                        
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
                                                        <label>Customer Lot no:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="custlotno" name="custlotno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Current station:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="cstation" name="cstation"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Next station:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="nstation" name="nstation"  class="form-control input-sm" value="" readonly><br>
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
                                                        <label>Device no:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="deviceno" name="deviceno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Original quantity:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="oqty" name=oqty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Current quantity:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="cqty" name="cqty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Date start:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="datestart" name="datestart"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Ship back date:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="shipbackdate" name="shipbackdate"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer size:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wsize" name="wsize"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer thickness:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wthick" name="wthick"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer no:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wno" name="wno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer run:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wrun" name="wrun"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required thickness:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="rthick" name="rthick"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Process category:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="pcat" name="pcat"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Lot type:</label>
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
<br/><br/>

<div class="row"> 
    <h5>Internal Lot number Logs</h5>
    <div class="col-lg-12">
        <div class="card border-left-danger">
            <div class="card-body">
                <div class="row no-gutters">
                <table class="table table-bordered"  id="tblintlogs" width="100%" cellspacing="0">
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
                <div class="row no-gutters">
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
                <div class="row no-gutters">
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
                <div class="row no-gutters">
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
</br><br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $('#intlotno').focus();
    $("#btnClear").click(function() {
        document.getElementById("intlotno").disabled = false;
        $("input[type=text]").val('');
        $("#tblintlogs > tbody").empty();
        $("#tblintrejlogs > tbody").empty();
        $("#tblrlogs > tbody").empty();
        $("#tbltlogs > tbody").empty();
        document.getElementById("btnPrint").disabled = true;
        
        document.getElementById("success").hidden = true;
        document.getElementById("error").hidden = true;
        $('#intlotno').focus();
    });
    $("#btnView").click(function() {
        
        //window.open('http://localhost/wip/public/test.php');
        if(document.getElementById("intlotno").value == '')
        {
            document.getElementById("error").innerHTML = 'Please input Internal Lot number!';
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            return false;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
            if(res[0] == '"false"')
            {
                
                $("#tblintlogs > tbody").empty();
                $("#tblintrejlogs > tbody").empty();
                $("#tblrlogs > tbody").empty();
                $("#tbltlogs > tbody").empty();
                $('#intlotno').focus();
                document.getElementById("error").innerHTML = 'No Data available for Internal Lot number: <b>'+document.getElementById("intlotno").value;
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                $("input[type=text]").val('');
            }
            else
            {
                document.getElementById("intlotno").disabled = true;
                document.getElementById("btnPrint").disabled = false;
                $("#tblintlogs > tbody").empty();
                $("#tblintrejlogs > tbody").empty();
                $("#tblrlogs > tbody").empty();
                $("#tbltlogs > tbody").empty();
                $('#intlotno').focus();
                document.getElementById("success").hidden = true;
                document.getElementById("error").hidden = true;
                document.getElementById("success").innerHTML = 'Internal Lot number: <b>'+document.getElementById("intlotno").value;
                document.getElementById("error").hidden = false;
                document.getElementById("error").hidden = true;
                var lotno = JSON.parse(res[0])[0];
                var lotlogs = JSON.parse(res[1]);
                var rlogs = JSON.parse(res[2]);
                var tlogs = JSON.parse(res[3]);
                var rejlogs = JSON.parse(res[4]);
                //alert(result);
                document.getElementById("nstation").value = lotno.nstation;
                document.getElementById("cstation").value = lotno.cstation;
                document.getElementById("custlotno").value = lotno.custlot;
                document.getElementById("deviceno").value = lotno.deviceno;
                document.getElementById("status").value = lotno.status;
                document.getElementById("oqty").value = lotno.waferqty;
                document.getElementById("cqty").value = lotno.currqty;
                document.getElementById("datestart").value = lotno.datestart;
                document.getElementById("shipbackdate").value = lotno.shipbackdate;
                document.getElementById("wthick").value = lotno.waferthickness;
                document.getElementById("wsize").value = lotno.wafersize;
                document.getElementById("wno").value = lotno.waferno;
                document.getElementById("wrun").value = lotno.waferrun;
                document.getElementById("rthick").value = lotno.requiredthickness;
                document.getElementById("pcat").value = lotno.processcat;
                document.getElementById("ltype").value = lotno.lottype;

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
            }
            /* if(res[0] == 'success')
            {
                
            }
            else
            {
                document.getElementById("error").innerHTML = res[1];
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                document.getElementById("btnGenerate").disabled = true;
            } */
            
        }
        };
        xmlhttp.open("GET", "../php/viewiln.php?intlotno=" + document.getElementById("intlotno").value, true);
        xmlhttp.send();
    });

    $("#btnPrint").click(function() {
        window.open('http://10.168.5.15/wip/print/intlot.php?intlotno='+document.getElementById("intlotno").value);
    });
});
</script>