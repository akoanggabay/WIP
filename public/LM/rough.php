<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">List of Roughness logs</h6>
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
                            <th>Tracking no</th>
                            <th>Internal Lot</th>
                            <th>Station</th>
                            <th>Roughness 1</th>
                            <th>Roughness 2</th>
                            <th>Roughness 3</th>
                            <th>Roughness 4</th>
                            <th>Roughness 5</th>
                            <th>Roughness ave</th>
                            <th>Processed date</th>
                            <th>Processed by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/roughness.php");
                        
                        $logs = Roughness::GetAllLogs();
                        
                        for ($i=0; $i < count($logs); $i++) 
                        
                            {


                        ?>
                        
                        <tr>
                            <td><?php echo $logs[$i]->gettrackingno(); ?></td>
                            <td><?php echo $logs[$i]->getintlotno(); ?></td>
                            <td><?php echo $logs[$i]->getstation(); ?></td>
                            <td><?php echo $logs[$i]->getr1(); ?></td>
                            <td><?php echo $logs[$i]->getr2(); ?></td>
                            <td><?php echo $logs[$i]->getr3(); ?></td>
                            <td><?php echo $logs[$i]->getr4(); ?></td>
                            <td><?php echo $logs[$i]->getr5(); ?></td>
                            <td><?php echo $logs[$i]->getrave(); ?></td>
                            <td><?php echo $logs[$i]->getlastupdate(); ?></td>
                            <td><?php echo $logs[$i]->getlastupdatedby(); ?></td>
                            <td>
                                <button class="btn btn-success btn-circle" value="<?php echo $logs[$i]->gettrackingno(); ?>" onclick="Action(value)"><i class="fas fa-edit" alt="Edit"></i></button>Edit    
                            </td>
                
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ViewModal" tabindex="-1" role="dialog" aria-labelledby=""
    aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 30%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Tracking no: <b><span id="trackingno"></span></b></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="card-header py-3">
                <h6 id="Tracking no"></h6>
            </div>
            <div class="modal-body">
            <div id = "rsuccess" class="alert alert-success alert-dismissible" role="alert" hidden>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div id = "rerror" class="alert alert-danger alert-dismissible" role="alert" hidden>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Internal Lot number: </label>
                </div>
                <div class="col-md-7">
                    <p id="intlotno"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Process: </label>
                </div>
                <div class="col-md-7">
                    <p id="station"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Processed by: </label>
                </div>
                <div class="col-md-7">
                    <p id="lastupdatedby"></p>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-5">
                    <label>Roughness 1:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="r1" name="r1"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Roughness 2:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="r2" name="r2"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Roughness 3:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="r3" name="r3"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Roughness 4:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="r4" name="r4"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Roughness 5:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="r5" name="r5"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Roughness average:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="rave" name="rave"  class="form-control input-sm" disabled><br>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" id="btnSave">Save</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="../vendor/jquery/jquery.min.js"></script>

<script>
    function Action(value)
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var result = this.responseText;
        var res = JSON.parse(result)[0];

        //alert(result);
        document.getElementById("trackingno").innerHTML = res.trackingno;
        document.getElementById("intlotno").innerHTML = '<b>'+res.intlotno;
        document.getElementById("station").innerHTML = '<b>'+res.station;
        document.getElementById("lastupdatedby").innerHTML = '<b>'+res.lastupdatedby;
        document.getElementById("r1").value = res.r1;
        document.getElementById("r2").value = res.r2;
        document.getElementById("r3").value = res.r3;
        document.getElementById("r4").value = res.r4;
        document.getElementById("r5").value = res.r5;
        document.getElementById("rave").value = res.rave;
        $('#ViewModal').modal('show');
        $("#ViewModal").appendTo("body");
            
        }   
        };

        xmlhttp.open("GET", '../php/getroughlogsdetails.php?trackingno='+value,true);
        xmlhttp.send();
         
    }

    $("#btnSave").click(function() {


        if(document.getElementById("r1").value != '' || document.getElementById("r2").value != '' || document.getElementById("r3").value != '' || document.getElementById("r4").value != '' || document.getElementById("r5").value != '')
        {
            if(countDecimals(document.getElementById("r1").value) != 5 || countDecimals(document.getElementById("r2").value) != 5 || countDecimals(document.getElementById("r3").value) != 5 || countDecimals(document.getElementById("r4").value) != 5 || countDecimals(document.getElementById("r5").value) != 5)
            {
                //alert('You have input Roughness with more or less than 5 decimal');
                document.getElementById("rerror").innerHTML = "You have input Thickness with more or less than 5 decimal!";
                document.getElementById("rerror").hidden = false;
                document.getElementById("rsuccess").hidden = true;
                return false;
            }
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var result = this.responseText;
        var res = result.split("_");
        //alert(result)
        if(res[0] == 'success')
        {
            alert(res[1]);
            location.reload();
        }
        else if(res[0] == 'error')
        {
            alert(res[1]);
        }
        else if(res[0] == 'session')
        {
            alert(res[1]);
            location.reload();
        }
        else
        {
            alert('Cannot connect to Database!')
        }
        
            
        }   
        };

        xmlhttp.open("GET", '../php/updateroughlogsdetails.php?trackingno='+document.getElementById("trackingno").innerHTML+'&r1='+document.getElementById("r1").value+'&r2='+document.getElementById("r2").value+'&r3='+document.getElementById("r3").value+'&r4='+document.getElementById("r4").value+'&r5='+document.getElementById("r5").value+'&rave='+document.getElementById("rave").value,true);
        xmlhttp.send();

    });

    function countDecimals(value) {
        var char_array = value.toString().split(""); // split every single char
        var not_decimal = char_array.lastIndexOf(".");
        return (not_decimal<0)?0:(char_array.length - not_decimal) - 1;
    }

    function Roughness(){

        if(document.getElementById("r1").value != '' || document.getElementById("r2").value != '' || document.getElementById("r3").value != '' || document.getElementById("r4").value != '' || document.getElementById("r5").value != '')
        {
            if(document.getElementById("r1").value == '' || document.getElementById("r2").value == '' || document.getElementById("r3").value == '' || document.getElementById("r4").value == '' || document.getElementById("r5").value == '' )
            {
                return false;
            }
        }
        return true;

    }

    $("#r1,#r2,#r3,#r4,#r5").keyup(function(event) { 
        document.getElementById("rave").value = 0;
        var rpoint1 = document.getElementById("r1").value;
        var rpoint2 = document.getElementById("r2").value;
        var rpoint3 = document.getElementById("r3").value;
        var rpoint4 = document.getElementById("r4").value;
        var rpoint5 = document.getElementById("r5").value;

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
</script>