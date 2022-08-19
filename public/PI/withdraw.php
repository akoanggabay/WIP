<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Parts Inventory</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">Part Number List</h6>
        </div>
        
        <div id = "success" class="alert alert-success alert-dismissible" role="alert" hidden>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div id = "error" class="alert alert-danger alert-dismissible" role="alert" hidden>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Part Number</th>
                            <th>Description</th>
                            <th>Material Category</th>
                            <th>Process Category</th>
                            <th>Supplier</th>
                            <th>Status</th>
                            <th>Available quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/partslotno.php");
                        include_once("../classes/partno.php");
                        
                        $partno = partno::GetAllPartno();
                        $stat ='';
                        
                        for ($i=0; $i < count($partno); $i++) 

                        {   
                            

                        ?>
                        
                        <tr id="tr<?php echo $partno[$i]->getcode(); ?>">
                            <td><?php echo $partno[$i]->getcode(); ?></td>
                            <td><?php echo $partno[$i]->getdescription(); ?></td>
                            <td><?php echo $partno[$i]->getmaterialcategory(); ?></td>
                            <td><?php echo $partno[$i]->getprocesscategory(); ?></td>
                            <td><?php echo $partno[$i]->getsupplier(); ?></td>
                            <td><?php echo $partno[$i]->getqty() === 0 ? "Empty" : "In stock"; ?>
                            
                        </td>
                            <td><?php echo $partno[$i]->getqty(); ?></td>
                            <td>
                                <button class="btn btn-info btn-circle" value="<?php echo $partno[$i]->getcode(); ?>" onclick="Action(value)" title="Withdraw"><i class="fas fa-cogs" alt="Withdraw"></i></button>
                            </td>
    
                
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ListModal" tabindex="-1" role="dialog" aria-labelledby=""
    aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 90%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id=""></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="card-header py-3">
                <h6 id="partno"></h6>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card border-left-danger">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
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
                                        </div>
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
                                                    </div><br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Last Transaction date:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="lastupdate" name="lastupdate"  class="form-control input-sm" value="" readonly><br>
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
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="../vendor/jquery/jquery.min.js"></script>

<script>
    function Action(value)
    {
        $(".form-control").val("");
        document.getElementById("partno").innerHTML = 'List of Parts Lot number for Part number: <b>' + value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            $("#lotno").empty();
            var result = this.responseText;
            //alert(result);
            var res = result.split("_");
            if(res.length <=1 )
            {
                swal({
                    title: "No Available Parts Lot number for Part number: "+value,
                    text: 'No available data',
                    showConfirmButton: true,
                    button: true,
                    icon: "error"
                })
                
                return false;
            }
            $('#ListModal').modal('show');
            $("#ListModal").appendTo("body");
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

        xmlhttp.open("GET", "../php/getpartslotno.php?partno=" + value, true);
        xmlhttp.send();
    }

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