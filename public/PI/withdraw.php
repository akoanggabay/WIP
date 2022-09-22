<h1 class="h3 mb-4 text-gray-900">Parts Withdrawal</h1>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-6">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col-lg-12">
                            <form>
            
                            <div class="form-group">
                                <label for="">Process Category: *</label>
                                <select name="processcat" class="form-control" id="processcat" name="processcat">
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
                            <br/>
                            <div class="form-group">
                                <label for="">Material Category: *</label>
                                <select name="materialcat" class="form-control" id="materialcat" name="materialcat">
                                    <option value=""></option>
                                    <?php 
                                    include_once("../classes/materialcategory.php");
                                    $MaterialCategory = materialcategory::GetAllMaterialCategory();
                                    for($i=0;$i<count($MaterialCategory);$i++){
                                    ?>
                                            <option value ='<?php echo $MaterialCategory[$i]->getcategory(); ?>' ><?php echo $MaterialCategory[$i]->getcategory(); ?></option>
                                    <?php 
                                        }
                                    ?>
                                    
                                </select>
                            </div>
                            <br/>
                            <div class="form-group">
                                <label for="">Part Number: *</label>
                                <select name="partno" class="form-control" id="partno" name="partno">
                                    <option value=""></option>
                                    
                                </select>
                            </div>
                            <br/>
                            <div class="form-group">
                                <label for="">Parts Lot number: *</label>
                                <select class="form-control" id="lotno" name="lotno">
                                    <option value=""></option>
                                    
                                </select>
                            </div>
                            <br/>
                            <div class="form-group">
                                <label for="">Quantity: *</label>
                                <input type="number" class="form-control" id="qty" name="qty">
                            </div>
                            <br/>
                            <div class="form-group">
                                <button type="button" class="btn btn-success" id="btnWithdraw" name = "btnWithdraw">Withdraw Parts</button>
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
        <div class="col-lg-6">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><h5>Parts Lot Details</h5></div>
                                <div class="panel-body"><br/>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Description:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" id="description" name="description"  class="form-control input-sm" value="" readonly><br>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Original Quantity:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="number" id="origqty" name="origqty"  class="form-control input-sm" value="" readonly><br>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Current Quantity:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="number" id="currqty" name="currqty"  class="form-control input-sm" value="" readonly><br>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Supplier:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" id="supplier" name="supplier"  class="form-control input-sm" value="" readonly><br>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Purchase Order number:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" id="pono" name="pono"  class="form-control input-sm" value="" readonly><br>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Last Transaction:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" id="lastupdatedby" name="lastupdatedby"  class="form-control input-sm" value="" readonly><br>
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

<script src="../vendor/jquery/jquery.min.js"></script>
<script>

$('#materialcat').change(function (){

    if(document.getElementById("processcat").value == "")
    {
        swal({
            title: "Please select process category!",
            text: 'Missing data',
            showConfirmButton: true,
            button: true,
            icon: "error"
        })
        $(this).val("");
        return false;
    }
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    //alert(this.readyState + ' ' + this.status);
    if (this.readyState == 4 && this.status == 200) 
    {
        $("#partno").empty();
        $("#lotno").empty();
        var result = this.responseText;
        var res = result.split("_");
        if(res.length <=1 )
        {
            swal({
                title: "No Available Part number for Process Category: "+document.getElementById("processcat").value+ " and Material Category: "+document.getElementById("materialcat").value,
                text: 'No available data',
                showConfirmButton: true,
                button: true,
                icon: "error"
            })
            
            return false;
        }
        var x1 = document.getElementById("partno");
        var option1 = document.createElement("option");
        option1.text = '';
        x1.add(option1);
        for (i = 0; i < res.length - 1; i++) 
        { 
                // alert(res[i]);
                var x = document.getElementById("partno");
                var option = document.createElement("option");
                option.text = res[i];
                x.add(option);
        }
    }
    };

    xmlhttp.open("GET", "../php/getpartno.php?processcat=" + document.getElementById("processcat").value+"&materialcat="+document.getElementById("materialcat").value, true);
    xmlhttp.send();

    
    
});

$('#processcat').change(function (){
    $("#materialcat").val("");
    $("#partno").val("");
    $("#partslotno").val("");
    $("#qty").val("");
    $("#partno").empty();
    $("#lotno").empty();
});

$('#partno').change(function (){

    if(document.getElementById("processcat").value == "")
    {
        swal({
            title: "Please select process category!",
            text: 'Missing data',
            showConfirmButton: true,
            button: true,
            icon: "error"
        })
        $(this).val("");
        return false;
    }

    if(document.getElementById("materialcat").value == "")
    {
        swal({
            title: "Please select material category!",
            text: 'Missing data',
            showConfirmButton: true,
            button: true,
            icon: "error"
        })
        $(this).val("");
        return false;
    }

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    //alert(this.readyState + ' ' + this.status);
    if (this.readyState == 4 && this.status == 200) 
    {
        $("#lotno").empty();
        var result = this.responseText;
        //alert(result);
        var res = result.split("_");
        if(res.length <=1 )
        {
            swal({
                title: "No Available Parts Lot number for Part number: "+document.getElementById("partno").value,
                text: 'No available data',
                showConfirmButton: true,
                button: true,
                icon: "error"
            })
            
            return false;
        }
        var x1 = document.getElementById("lotno");
        var option1 = document.createElement("option");
        option1.text = '';
        x1.add(option1);
        for (i = 0; i < res.length - 1; i++) 
        { 
                // alert(res[i]);
                var x = document.getElementById("lotno");
                var option = document.createElement("option");
                option.text = res[i];
                x.add(option);
        }
    }
    };

    xmlhttp.open("GET", "../php/getpartslotno.php?partno=" + document.getElementById("partno").value, true);
    xmlhttp.send();



});

$('#lotno').change(function (){


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    //alert(this.readyState + ' ' + this.status);
    if (this.readyState == 4 && this.status == 200) 
    {
        var result = this.responseText;
        //alert(result);
        var res = result.split("_");

        if(res[0].trim() == 'success')
        {
            //swal(res[1],"","success")
            var lotdata = JSON.parse(res[1])[0];
            //alert(lotdata)

            document.getElementById("description").value = lotdata.description;
            document.getElementById("origqty").value = lotdata.origqty;
            document.getElementById("currqty").value = lotdata.currqty;
            document.getElementById("supplier").value = lotdata.supplier;
            document.getElementById("pono").value = lotdata.pono;
            document.getElementById("lastupdatedby").value = lotdata.lastupdatedby;
            document.getElementById("lastupdate").value = lotdata.lastupdate;

        }
        else
        {
            swal({
                title: res[1],
                text: 'error.',
                showConfirmButton: true,
                button: true,
                icon: "error"
            })
        }
    }
    };

    xmlhttp.open("GET", "../php/getpartslotnodetails.php?lotno=" + document.getElementById("lotno").value, true);
    xmlhttp.send();

});

$('#btnWithdraw').click(async function(event) {

    if(document.getElementById('lotno').value == '' || document.getElementById('qty').value == '')
    {
        //alert('Kindly complete necessary details!');
        swal({
            title: "Please input required data!",
            text: 'Missing data',
            showConfirmButton: true,
            button: true,
            icon: "error"
        })
        return false;
    }

    if(parseInt(document.getElementById('qty').value) > parseInt(document.getElementById('currqty').value))
    {
        //alert('Kindly complete necessary details!');
        swal({
            title: "Insufficient parts quantity!",
            text: 'error',
            showConfirmButton: true,
            button: true,
            icon: "error"
        })
        return false;
    }

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    //alert(this.readyState + ' ' + this.status);
    if (this.readyState == 4 && this.status == 200) 
    {
        var result = this.responseText;
        //alert(result);
        var res = result.split("_");

        if(res[0].trim() == 'success')
        {
            //swal(res[1],"","success")
            
            swal({
                title: res[1],
                text: 'Success.',
                showConfirmButton: true,
                button: true,
                icon: "success"
            })
            $(".form-control").val("");
            $('#ListModal').modal('hide');

        }
        else
        {
            swal({
                title: res[1],
                text: 'error.',
                showConfirmButton: true,
                button: true,
                icon: "error"
            })
        }
    }
    };

    xmlhttp.open("GET", "../php/withdrawparts.php?lotno=" + document.getElementById("lotno").value+"&qty="+document.getElementById("qty").value, true);
    xmlhttp.send();

});

</script>