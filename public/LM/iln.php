<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">List of Internal Lot logs</h6>
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
                            <th>Machine</th>
                            <th>Qty In</th>
                            <th>Qty Out</th>
                            <th>Date In</th>
                            <th>Date Out</th>
                            <th>Status</th>
                            <th>Cassette no</th>
                            <th>Remarks</th>
                            <th>Processed by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/intlotlogs.php");
                        
                        $logs = IntLotLogs::GetAllLogs();
                        
                        for ($i=0; $i < count($logs); $i++) 
                        
                            {


                        ?>
                        
                        <tr>
                            <td><?php echo $logs[$i]->gettrackingno(); ?></td>
                            <td><?php echo $logs[$i]->getintlot(); ?></td>
                            <td><?php echo $logs[$i]->getstation(); ?></td>
                            <td><?php echo $logs[$i]->getmachine(); ?></td>
                            <td><?php echo $logs[$i]->getqtyin(); ?></td>
                            <td><?php echo $logs[$i]->getqtyout(); ?></td>
                            <td><?php echo $logs[$i]->getdatein(); ?></td>
                            <td><?php echo $logs[$i]->getdateout(); ?></td>
                            <td><?php echo $logs[$i]->getstatus(); ?></td>
                            <td><?php echo $logs[$i]->getcassno(); ?></td>
                            <td><?php echo $logs[$i]->getremarks(); ?></td>
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
                <h5 class="modal-title" id="trackingno"></h5>
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
                    <label>Internal Lot number: *</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="intlotno" name="intlotno"  class="form-control input-sm">
                </div>
            </div>
            <br/>

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

        alert(res.trackingno);
        document.getElementById("trackingno").innerHTML = 'Tracking no: '+res.trackingno;
        $('#ViewModal').modal('show');
        $("#ViewModal").appendTo("body");
            
        }   
        };

        xmlhttp.open("GET", '../php/getintlogsdetails.php?trackingno='+value,true);
        xmlhttp.send();

        

         
    }
</script>