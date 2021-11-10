<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">List of Thickness logs</h6>
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
                            <th>Thickness 1</th>
                            <th>Thickness 2</th>
                            <th>Thickness 3</th>
                            <th>Thickness 4</th>
                            <th>Thickness 5</th>
                            <th>Thickness ave</th>
                            <th>TTV</th>
                            <th>Processed date</th>
                            <th>Processed by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/thickness.php");
                        
                        $logs = Thickness::GetAllLogs();
                        
                        for ($i=0; $i < count($logs); $i++) 
                        
                            {


                        ?>
                        
                        <tr>
                            <td><?php echo $logs[$i]->gettrackingno(); ?></td>
                            <td><?php echo $logs[$i]->getintlotno(); ?></td>
                            <td><?php echo $logs[$i]->getwaferno(); ?></td>
                            <td><?php echo $logs[$i]->getstation(); ?></td>
                            <td><?php echo $logs[$i]->getp1(); ?></td>
                            <td><?php echo $logs[$i]->getp2(); ?></td>
                            <td><?php echo $logs[$i]->getp3(); ?></td>
                            <td><?php echo $logs[$i]->getp4(); ?></td>
                            <td><?php echo $logs[$i]->getp5(); ?></td>
                            <td><?php echo $logs[$i]->getpave(); ?></td>
                            <td><?php echo $logs[$i]->getttv(); ?></td>
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
            <div id = "tsuccess" class="alert alert-success alert-dismissible" role="alert" hidden>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div id = "terror" class="alert alert-danger alert-dismissible" role="alert" hidden>
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
                    <label>Wafer no:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="waferno" name="waferno"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Thickness 1:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="p1" name="p1"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Thickness 2:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="p2" name="p2"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Thickness 3:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="p3" name="p3"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Thickness 4:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="p4" name="p4"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Thickness 5:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="p5" name="p5"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Thickness average:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="pave" name="pave"  class="form-control input-sm" disabled><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Total Thickness Variation:</label>
                </div>
                <div class="col-md-7">
                    <input type="number" id="ttv" name="ttv"  class="form-control input-sm" disabled><br>
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
        document.getElementById("waferno").value = res.waferno;
        document.getElementById("p1").value = res.p1;
        document.getElementById("p2").value = res.p2;
        document.getElementById("p3").value = res.p3;
        document.getElementById("p4").value = res.p4;
        document.getElementById("p5").value = res.p5;
        document.getElementById("pave").value = res.pave;
        document.getElementById("ttv").value = res.ttv;
        $('#ViewModal').modal('show');
        $("#ViewModal").appendTo("body");
            
        }   
        };

        xmlhttp.open("GET", '../php/getthicklogsdetails.php?trackingno='+value,true);
        xmlhttp.send();
         
    }

    $("#btnSave").click(function() {


        if(Thickness() == false)
        {
            alert('Please complete Final thickness details!');
            document.getElementById("terror").innerHTML = "Please complete necessary details!";
            document.getElementById("terror").hidden = false;
            document.getElementById("tsuccess").hidden = true;
            return false;
        }
        if(document.getElementById("ttv").value == '')
        {
            alert('Please complete Final thickness details!');
            document.getElementById("terror").innerHTML = "Please complete necessary details!";
            document.getElementById("terror").hidden = false;
            document.getElementById("tsuccess").hidden = true;
            return false;
        }
        if(countDecimals(document.getElementById("p1").value) != 1 || countDecimals(document.getElementById("p2").value) != 1 || countDecimals(document.getElementById("p3").value) != 1 || countDecimals(document.getElementById("p4").value) != 1 || countDecimals(document.getElementById("p5").value) != 1)
        {
            //alert('You have input Thickness with more or less than 1 decimal');
            document.getElementById("terror").innerHTML = "You have input Thickness with more or less than 1 decimal!";
            document.getElementById("terror").hidden = false;
            document.getElementById("tsuccess").hidden = true;
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

        xmlhttp.open("GET", '../php/updatethicklogsdetails.php?trackingno='+document.getElementById("trackingno").innerHTML+'&p1='+document.getElementById("p1").value+'&p2='+document.getElementById("p2").value+'&p3='+document.getElementById("p3").value+'&p4='+document.getElementById("p4").value+'&p5='+document.getElementById("p5").value+'&pave='+document.getElementById("pave").value+'&waferno='+document.getElementById("waferno").value+'&ttv='+document.getElementById("ttv").value,true);
        xmlhttp.send();

    });

    function countDecimals(value) {
        var char_array = value.toString().split(""); // split every single char
        var not_decimal = char_array.lastIndexOf(".");
        return (not_decimal<0)?0:(char_array.length - not_decimal) - 1;
    }

    function Thickness(){
        if(document.getElementById("waferno").value == '' || document.getElementById("p1").value == '' || document.getElementById("p2").value == '' || document.getElementById("p3").value == '' || document.getElementById("p4").value == '' || document.getElementById("p5").value == '')
        {
            return false;
        }
        return true;
    }

    $("#p1,#p2,#p3,#p4,#p5").keyup(function(event) { 
        document.getElementById("pave").value = 0;
        var tpoint1 = document.getElementById("p1").value;
        var tpoint2 = document.getElementById("p2").value;
        var tpoint3 = document.getElementById("p3").value;
        var tpoint4 = document.getElementById("p4").value;
        var tpoint5 = document.getElementById("p5").value;
        
        //alert(parseFloat(rpoint1) + parseFloat(rpoint2) + parseFloat(rpoint3));
        var total;
        //alert(tpoint1.toString().split(".").length);
        
        if(Thickness() == true)
        {
            //document.getElementById("tsuccess").innerHTML = "<b>Success!<b/> Total Thickness Variation has been automatically calculated!";
        
            total = (parseFloat(tpoint1) + parseFloat(tpoint2) + parseFloat(tpoint3) + parseFloat(tpoint4) + parseFloat(tpoint5));
            document.getElementById("terror").hidden = true;
            document.getElementById("tsuccess").hidden = true;
            var high = Math.max(tpoint1,tpoint2,tpoint3,tpoint4,tpoint5);
            var low = Math.min(tpoint1,tpoint2,tpoint3,tpoint4,tpoint5);
            document.getElementById("pave").value = parseFloat(total / 5).toFixed(1);
            document.getElementById("ttv").value = parseFloat(high - low).toFixed(1);
        }
        else
        {
            document.getElementById("terror").innerHTML = "Please complete necessary details!";
            document.getElementById("terror").hidden = false;
            document.getElementById("tsuccess").hidden = true;
            return false;
        }
        
    });
</script>