<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">List of Blade height logs</h6>
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
                            <th>Channel</th>
                            <th>Blade height 1</th>
                            <th>Blade height 2</th>
                            <th>Blade height 3</th>
                            <th>Blade height 4</th>
                            <th>Blade height 5</th>
                            <th>Processed date</th>
                            <th>Processed by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/bladeheight.php");
                        
                        $logs = bladeheight::GetAllLogs();
                        
                        for ($i=0; $i < count($logs); $i++) 
                        
                            {


                        ?>
                        
                        <tr>
                            <td><?php echo $logs[$i]->gettrackingno(); ?></td>
                            <td><?php echo $logs[$i]->getintlot(); ?></td>
                            <td><?php echo $logs[$i]->getch(); ?></td>
                            <td><?php echo $logs[$i]->getbh1(); ?></td>
                            <td><?php echo $logs[$i]->getbh2(); ?></td>
                            <td><?php echo $logs[$i]->getbh3(); ?></td>
                            <td><?php echo $logs[$i]->getbh4(); ?></td>
                            <td><?php echo $logs[$i]->getbh5(); ?></td>
                            <td><?php echo $logs[$i]->getlastupdate(); ?></td>
                            <td><?php echo $logs[$i]->getlastupdatedby(); ?></td>
                            <td>
                                <button class="btn btn-success btn-circle" value="<?php echo $logs[$i]->gettrackingno(); ?>" onclick="Action(value)"><i class="fas fa-edit" alt="Edit"></i></button>    
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
                    <label>Channel:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="ch" name="ch"  class="form-control input-sm req"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Blade height 1:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="bh1" name="bh1"  class="form-control input-sm req"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Blade height 2:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="bh2" name="bh2"  class="form-control input-sm req"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Blade height 3:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="bh3" name="bh3"  class="form-control input-sm req"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Blade height 4:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="bh4" name="bh4"  class="form-control input-sm req"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Blade height 5:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="bh5" name="bh5"  class="form-control input-sm req"><br>
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
        $('.form-control').css({"border-color": "#d1d3e2"})
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var result = this.responseText;
        //alert(result);
        var res = JSON.parse(result)[0];

        document.getElementById("trackingno").innerHTML = res.trackingno;
        document.getElementById("intlotno").innerHTML = '<b>'+res.intlotno;
        document.getElementById("ch").value = res.ch;
        document.getElementById("lastupdatedby").innerHTML = '<b>'+res.lastupdatedby;
        
        document.getElementById("bh1").value = res.bh1;
        document.getElementById("bh2").value = res.bh2;
        document.getElementById("bh3").value = res.bh3;
        document.getElementById("bh4").value = res.bh4;
        document.getElementById("bh5").value = res.bh5;
        $('#ViewModal').modal('show');
        $("#ViewModal").appendTo("body");
            
        }   
        };

        xmlhttp.open("GET", '../php/getbladeheightlogsdetails.php?trackingno='+value,true);
        xmlhttp.send();
         
    }

    $("#btnSave").click(function() {

        var val = document.getElementsByClassName("req");
        var data = {};
        var count = 0;
        for(var i = 0;val.length > i; i++)
        {
            data[val[i].name] = val[i].value;
            if(val[i].value == '')
            {
                val[i].style.borderColor = 'red';
                count+=1;
            }
            else
            {
                val[i].style.borderColor = '#d1d3e2';
            }
        }
        if(count > 0)
        {
            //$('#002').animate({scrollTop: '0px'}, 1000);
            swal("missing input!",{
                icon: "warning",
                title: "Please input required fields!",
                closeOnClickOutside: false,
            });
            return false;
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

        xmlhttp.open("GET", '../php/updatebladeheightlogsdetails.php?trackingno='+document.getElementById("trackingno").innerHTML
        +'&data=' + JSON.stringify(data),true);
        xmlhttp.send();

    });
</script>