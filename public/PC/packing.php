<h1 class="h3 mb-4 text-gray-900">Packing</h1>
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
                                                <input type="text" id="intlotno" name="intlotno"  class="form-control input-sm" disabled>
                                            </div>
                                        </div>
                                        <br/>
                                        
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success" id="btnCheck" name = "btnCheck"  onkeypress="if (event.keyCode == 13)  return false;" >Pack Internal Lot number</button>
                                            <button type="button" class="btn btn-warning float-right" id="btnClear" name = "btnClear">Clear details</button>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-info" id="btnPrint" name = "btnPrint" onkeypress="if (event.keyCode == 13)  return false;" disabled >Print E-LTC</button>
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
                                                        <label>Wafer original quantity:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="oqty" name="oqty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer current quantity:</label>
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
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
    document.getElementById("intlotno").disabled = false;
    $("#intlotno").focus();
    $("#btnCheck").click(function() {
    
    if(document.getElementById("intlotno").value == '')
    {
        document.getElementById("error").innerHTML = 'Please enter Internal Lot number!';
        document.getElementById("error").hidden = false;
        document.getElementById("success").hidden = true;
        return false
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    //alert(this.readyState + ' ' + this.status);
    if (this.readyState == 4 && this.status == 200) 
    {
        var result = this.responseText;
        var res = result.split("_");
       
        //alert(res[0]);

        if(res[0] == 'notexist')
        {
            document.getElementById("error").innerHTML = res[1];
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            document.getElementById("btnPrint").disabled = true;
            document.getElementById("intlotno").disabled = false;
            return false;
        }
        var resdata = JSON.parse(res[2]);
        document.getElementById("custlotno").value = resdata.custlot;
        document.getElementById("status").value = resdata.status;
        document.getElementById("deviceno").value = resdata.deviceno;
        document.getElementById("oqty").value = resdata.waferqty;
        document.getElementById("cqty").value = resdata.currqty;
        document.getElementById("datestart").value = resdata.datestart;
        document.getElementById("shipbackdate").value = resdata.shipbackdate;
        document.getElementById("wsize").value = resdata.wafersize;
        document.getElementById("wthick").value = resdata.waferthickness;
        document.getElementById("rthick").value = resdata.requiredthickness;
        document.getElementById("pcat").value = resdata.processcat;
        document.getElementById("ltype").value = resdata.lottype;
        
        if(res[0] == 'success')
        {
            window.open('http://10.168.5.15/wip/print/intlotship.php?intlotno='+document.getElementById("intlotno").value);
            document.getElementById("success").innerHTML = res[1];
            document.getElementById("success").hidden = false;
            document.getElementById("error").hidden = true;
            document.getElementById("btnPrint").disabled = false;
            document.getElementById("intlotno").disabled = true;
            
        }
        else if(res[0] == 'error')
        {
            document.getElementById("error").innerHTML = res[1];
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            document.getElementById("btnPrint").disabled = true;
            document.getElementById("intlotno").disabled = false;
            return false
        }
        else if(res[0] == 'session')
        {
            alert('Login session timeout!')
            location.reload();
        }
        else if(res[0] == 'shipped')
        {
            document.getElementById("success").innerHTML = res[1];
            document.getElementById("success").hidden = false;
            document.getElementById("error").hidden = true;
            document.getElementById("btnPrint").disabled = false;
            document.getElementById("intlotno").disabled = true;
        }
        else
        {
            alert('Cannot connect to Database!');
        }
        
    }
    };
    xmlhttp.open("GET", "../php/shiplot.php?intlotno=" + document.getElementById("intlotno").value, true);
    xmlhttp.send();


    });

    $("#btnClear").click(function() {
        $("input[type=text]").val('');
        $(".alert").attr('hidden','hidden');
        document.getElementById("btnPrint").disabled = true;
        document.getElementById("btnClear").disabled = false;
        document.getElementById("btnCheck").disabled = false;
        document.getElementById("intlotno").disabled = false;
        $('#intlotno').focus();
    });

    $("#btnPrint").click(function() {
        window.open('http://10.168.5.15/wip/print/intlotship.php?intlotno='+document.getElementById("intlotno").value);
    });
</script>