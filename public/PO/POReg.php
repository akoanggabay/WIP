<h1 class="h3 mb-4 text-gray-900">Purchase Order Registration</h1>
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
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Customer:</label><br/>
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
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Purchase Order Number:</label><br/>
                                        <input class="form-control" type="text" name="pono" id="pono" placeholder="Purchase Order Number">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Qty:</label><br/>
                                        <input class="form-control" type="number" name="poqty" id="poqty">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Process Category:</label><br/>
                                        <select class="form-control" id="processcat" name="processcat">
                                            <option selected></option>
                                            <option value="backgrind">Backgrind</option>
                                            <option value="saw">Saw</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Sub Category:</label><br/>
                                        <input class="form-control" type="text" name="subprocesscat" id="subprocesscat" placeholder="Sub Process Category" value="Test" readonly>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-outline-success" id="btnReg">Add Purchase Order</button>
                                        <button type="button" class="btn btn-outline-warning float-right" id="btnCancel">Cancel</button>
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
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    $("#btnReg").click(function() {
      
    if(document.getElementById('pono').value == '' || document.getElementById("custcode").value == '')
    {
        alert('Kindly complete details!');
    }
    else
    {
        /* $('#LoadingModal').modal('show');
        $('#LoadingModal').appendTo("body"); */
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                var res = result.split("_");
                    //alert(result);
                    if(res[0] == 'success')
                    {
                        document.getElementById("success").innerHTML = res[1];
                        document.getElementById("success").hidden = false;
                        document.getElementById("error").hidden = true;
                        $("input[type=text]").val('');
                        $("input[type=number]").val('');
                        $("select").val('');
                    }
                    else
                    {
                        document.getElementById("error").innerHTML = res[1];
                        document.getElementById("error").hidden = false;
                        document.getElementById("success").hidden = true;
                    }
                }   
                };

        xmlhttp.open("GET", '../php/addpo.php?pono='+document.getElementById('pono').value+'&custcode='+document.getElementById('custcode').value+'&qty='+document.getElementById('poqty').value+'&processcat='+document.getElementById('processcat').value+'&subprocesscat='+document.getElementById('subprocesscat').value,true);
        xmlhttp.send();
        /* $('#LoadingModal').modal('hide'); */
    }
        
        
    });

    $("#btnCancel").click(function() {
        $("input[type=text]").val('');
        $("input[type=number]").val('');
        $("select").val('');
    });
</script>