<h1 class="h3 mb-4 text-gray-900">Internal Lot Number</h1>
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
                                                <label>Customer:</label>
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
                                                <label>Customer Lot no:</label>
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
                                                <label>Purchase Order No:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="pono" name="pono">
                                                    <option selected></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline-success" id="btnGenerate" name = "btnGenerate">Generate ILN</button>
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
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#custcode').change(function (){
        $("input[type=text]").val('');
        $("#custlotno").empty();
        $("#pono").empty();
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
            alert(result);
            
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
        if(document.getElementById('custlotno').value == '')
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
                var res = JSON.parse(result)[0];
                //alert(res.deviceno);
                document.getElementById("deviceno").value = res.deviceno;
                document.getElementById("qty").value = res.qty;
                document.getElementById("wqty").value = res.waferqty;
                document.getElementById("datestart").value = res.datestart;
                document.getElementById("shipbackdate").value = res.shipbackdate;
                document.getElementById("wthick").value = res.waferthickness;
                document.getElementById("rthick").value = res.requiredthickness;
                document.getElementById("pcat").value = res.processcat;
                document.getElementById("ltype").value = res.lottype;
                
            }
            };
            xmlhttp.open("GET", "../php/getcustlotnodetails.php?custlotno=" + document.getElementById("custlotno").value, true);
            xmlhttp.send();
        }
        

    });

    $("#btnGenerate").click(function() {
        window.open('http://localhost/wip/public/test.php')
    });
});
</script>