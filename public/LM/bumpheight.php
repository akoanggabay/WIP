<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">List of Bump height logs</h6>
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
                            <th>Internal Lot no</th>
                            <th>Wafer no</th>
                            <th>Point 1</th>
                            <th>Point 2</th>
                            <th>Point 3</th>
                            <th>Point 4</th>
                            <th>Point 5</th>
                            <th>Processed date</th>
                            <th>Processed by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/bumpheight.php");
                        
                        $logs = BumpHeight::GetAllLogs();
                        
                        for ($i=0; $i < count($logs); $i++) 
                        
                            {


                        ?>
                        
                        <tr>
                            <td><?php echo $logs[$i]->gettrackingno(); ?></td>
                            <td><?php echo $logs[$i]->getintlotno(); ?></td>
                            <td><?php echo $logs[$i]->getwaferno(); ?></td>
                            <td><?php echo $logs[$i]->getp1(); ?></td>
                            <td><?php echo $logs[$i]->getp2(); ?></td>
                            <td><?php echo $logs[$i]->getp3(); ?></td>
                            <td><?php echo $logs[$i]->getp4(); ?></td>
                            <td><?php echo $logs[$i]->getp5(); ?></td>
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
                    <label>Processed by: </label>
                </div>
                <div class="col-md-7">
                    <p id="lastupdatedby"></p>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-5">
                    <label>Wafer no:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="waferno" name="waferno"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Point 1:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="p1" name="p1"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Point 2:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="p2" name="p2"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Point 3:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="p3" name="p3"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Point 4:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="p4" name="p4"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Point 5:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="p5" name="p5"  class="form-control input-sm"><br>
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
        alert(result);
        var res = JSON.parse(result)[0];

        document.getElementById("trackingno").innerHTML = res.trackingno;
        document.getElementById("intlotno").innerHTML = '<b>'+res.intlotno;
        document.getElementById("waferno").value = res.waferno;
        document.getElementById("lastupdatedby").innerHTML = '<b>'+res.lastupdatedby;
        document.getElementById("p1").value = res.p1;
        document.getElementById("p2").value = res.p2;
        document.getElementById("p3").value = res.p3;
        document.getElementById("p4").value = res.p4;
        document.getElementById("p5").value = res.p5;
        $('#ViewModal').modal('show');
        $("#ViewModal").appendTo("body");
            
        }   
        };

        xmlhttp.open("GET", '../php/getbumpheightlogsdetails.php?trackingno='+value,true);
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
</script>