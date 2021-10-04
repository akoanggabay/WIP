<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">List of Reject logs</h6>
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
                            <th>Wafer no</th>
                            <th>Station</th>
                            <th>Machine</th>
                            <th>Defect details</th>
                            <th>Defect quantity</th>
                            <th>Remarks</th>
                            <th>Reject date</th>
                            <th>Rejected by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/reject.php");
                        
                        $logs = Reject::GetAllLogs();
                        
                        for ($i=0; $i < count($logs); $i++) 
                        
                            {


                        ?>
                        
                        <tr>
                            <td><?php echo $logs[$i]->gettrackingno(); ?></td>
                            <td><?php echo $logs[$i]->getintlotno(); ?></td>
                            <td><?php echo $logs[$i]->getwaferno(); ?></td>
                            <td><?php echo $logs[$i]->getstation(); ?></td>
                            <td><?php echo $logs[$i]->getmachine(); ?></td>
                            <td><?php echo $logs[$i]->getddetails(); ?></td>
                            <td><?php echo $logs[$i]->getdqty(); ?></td>
                            <td><?php echo $logs[$i]->getremarks(); ?></td>
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
                    <label>Machine: </label>
                </div>
                <div class="col-md-7">
                    <p id="machine"></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Rejected by: </label>
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
                    <label>Defect details:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="ddetails" name="ddetails"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Defect quantity:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="dqty" name="dqty"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Remarks:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="remarks" name="remarks"  class="form-control input-sm"><br>
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
        document.getElementById("machine").innerHTML = '<b>'+res.machine;
        document.getElementById("lastupdatedby").innerHTML = '<b>'+res.lastupdatedby;
        document.getElementById("waferno").value = res.waferno;
        document.getElementById("ddetails").value = res.ddetails;
        document.getElementById("dqty").value = res.dqty;
        document.getElementById("remarks").value = res.remarks;
        $('#ViewModal').modal('show');
        $("#ViewModal").appendTo("body");
            
        }   
        };

        xmlhttp.open("GET", '../php/getrejlogsdetails.php?trackingno='+value,true);
        xmlhttp.send();
         
    }

    $("#btnSave").click(function() {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var result = this.responseText;
        var res = result.split("_");

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

        xmlhttp.open("GET", '../php/updaterejlogsdetails.php?trackingno='+document.getElementById("trackingno").innerHTML+'&waferno='+document.getElementById("waferno").value+'&ddetails='+document.getElementById("ddetails").value+'&dqty='+document.getElementById("dqty").value+'&remarks='+document.getElementById("remarks").value,true);
        xmlhttp.send();

    });
</script>