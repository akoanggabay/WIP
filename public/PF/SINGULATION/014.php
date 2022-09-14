<div id="014" class="efai" hidden>
    <h3>Strip/Panel Mount station</h3>
    <br/>
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
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Machine No: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req014" id="machine" name="machine">
                                                        <option value=""></option>
                                                        <?php 
                                                        include_once("../classes/machine.php");
                                                        $Machine = Machine::GetMachineStation('SINGULATION','014');
                                                        for($i=0;$i<count($Machine);$i++){
                                                        ?>
                                                                <option value ='<?php echo $Machine[$i]->getmachineid(); ?>' ><?php echo $Machine[$i]->getmachineid(); ?></option>
                                                        <?php 
                                                            }
                                                        ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>FAI Category: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req014" id="faicat" name="faicat">
                                                            <option value=""></option>
                                                            <option value="Set-up">Set-up</option>
                                                            <option value="Monitoring">Monitoring</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Package Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req014" id="packagetype" name="packagetype">
                                                            <option value=""></option>
                                                            <option value="Strip">Strip</option>
                                                            <option value="Panel">Panel</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>With SWR: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req014" id="wswr" name="wswr">
                                                            <option value=""></option>
                                                            <option value="Yes">YES</option>
                                                            <option value="No">NO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>SWR no: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Package Thickness (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="packagethickness" name="packagethickness"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Package Size (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="packagesize" name="packagesize"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Strip Nos./Panel Nos. : *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="stripno" name="stripno"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Array Size: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="arraysize" name="arraysize"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required: Package Thickness (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="requiredpackagethickness" name="requiredpackagethickness"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Actual: Package Thickness (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="actualpackagethickness" name="actualpackagethickness"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required: Strip/Panel Mounting Orientation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req014" id="requiredmountingorientation" name="requiredmountingorientation">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Live Bug">Live Bug</option>
                                                            <option value="Dead Bug">Dead Bug</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Actual: Strip/Panel Mounting Orientation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req014" id="actualmountingorientation" name="actualmountingorientation">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Live Bug">Live Bug</option>
                                                            <option value="Dead Bug">Dead Bug</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Process mode: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req014" id="processmode" name="processmode">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Semi-Auto">Semi-Auto</option>
                                                            <option value="Manual">Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Table Vacuum Pressure (-60kPa min): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="tablevacuumpressure" name="tablevacuumpressure"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Ring Frame Size Set-up: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req014" id="ringframesizesetup" name="ringframesizesetup">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Table Size Set-up: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req014" id="tablesizesetup" name="tablesizesetup">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
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
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div>
                            <div class="card border-left-danger">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Cutter Blade Position Set-up:  *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req014" id="cutterbladepositionsetup" name="cutterbladepositionsetup">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="6">6</option>
                                                                <option value="8">8</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Change in Cutter blade?  *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req014" id="changeincutterblade" name="changeincutterblade">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Blade Count (300 cuts max): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="bladecount" name="bladecount"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Is Chuck Plate Clean? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req014" id="chuckplateclean" name="chuckplateclean">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape Change? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req014" id="dicingtapechange" name="dicingtapechange">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape Type? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req014" id="dicingtapetype" name="dicingtapetype">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="UV">UV</option>
                                                                <option value="Non-UV">Non-UV</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape Used: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="dicingtapeused" name="dicingtapeused"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape Lot no.: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="dicingtapelotno" name="dicingtapelotno"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape Expiration: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="date" id="dicingtapeexp" name="dicingtapeexp"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Technician Employee (passcode): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="techemp" name="techemp"  class="form-control input-sm req014" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Quality Control Employee (passcode): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="qcemp" name="qcemp"  class="form-control input-sm req014">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Remarks: * </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <textarea class="form-control req014" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
                                                        </div>
                                                    </div>
                                                    <br/>
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
    <div class="card border-left-danger">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Add Reject logs</h4>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Wafer no: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dwaferno014" name="dwaferno014"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails014" name="ddetails014"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty014" name="dqty014"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks014" name="dremarks014"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" id="btnAddDefect014" name = "btnAddDefect014">Add Reject</button>
                    </div>
                </div>

                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>
    </div>

    <br/>
    <div class="row"> 
        <h5>List of Reject Details</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblreject014" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Wafer number</th>
                                <th>Defect call-out</th>
                                <th>Quantity</th>
                                <th>Remarks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="form-group">
        <button type="button" class="btn btn-success" id="btnDone014" name = "btnDone014" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject014 > tbody tr').length;
        $("#dwaferno014").focus();
        //checkRow(tblcount);
    }

    $('#btnDone014').click(function(event) {
        
        var sdwaferno = $('input[name="sdwaferno014[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails014[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty014[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks014[]"]').map(function () {
        return this.value; }).get();

        
        var val = document.getElementsByClassName("req014");
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
            document.getElementById('014').scrollIntoView();
            swal("missing input!",{
                icon: "warning",
                title: "Please input required fields!",
                closeOnClickOutside: false,
            });
            return false;
        }
       

        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            //alert(this.readyState + ' ' + this.status);
            if (this.readyState == 4 && this.status == 200) 
            {
                var result = this.responseText;
                var res = result.split("_");
                alert(result)

                if(res[0].trim() == 'success')
                {
                    swal("success!",{
                        icon: "success",
                        title: res[1],
                        closeOnClickOutside: false,
                    });
                    $("#btnReset").click()
                    $('button.swal-button').click(function(event){$("#intlotno").focus();});
                }
                else
                {
                    swal("error!",{
                        icon: "error",
                        title: res[1],
                        closeOnClickOutside: false,
                    });
                    $('button.swal-button').click(function(event){$("#intlotno").focus();});
                }
            }
        };

        
        
        xmlhttp.open("GET", "../php/addefai014.php?data=" + JSON.stringify(data)
        +"&intlotno="+document.getElementById("intlotno").value
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks), true);
        xmlhttp.send();
    });

    $( "#btnAddDefect014" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty014[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));

    //var qty = document.getElementById("processcat").value === 'BACKGRIND' ? parseInt(document.getElementById("wqty").value) : parseInt(document.getElementById("lqty").value)
    if((parseInt(dtotal) + parseInt($('#dqty014').val())) > parseInt(document.getElementById("currqty").value))
    {
        /* document.getElementById("derror").innerHTML = 'Reject quantity exceeding Internal Lot number current quantity!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        swal("error!",{
            icon: "error",
            title: "Reject quantity exceeding Internal Lot number current quantity!",
            closeOnClickOutside: false,
        });
        return false;
    }
    if($('#dwaferno014').val()== "" ||  $('#dqty014').val()== "" ||  $('#ddetails014').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej014').scrollIntoView();
        var rejval = document.getElementsByClassName("rej014");
        for(var i = 0;rejval.length > i; i++)
        {
            if(rejval[i].value == '')
            {
                rejval[i].style.borderColor = 'red';
            }
            else
            {
                rejval[i].style.borderColor = '#d1d3e2';
            }
        }
        swal("missing input!",{
            icon: "warning",
            title: "Please complete reject details!",
            closeOnClickOutside: false,
        });
        return false;
    }
    else
    {
        $('#tblreject014 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno014[]"  name="sdwaferno014[]" value="'+$('#dwaferno014').val()+'">'+$('#dwaferno014').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails014[]"  name="sddetails014[]" value="'+$('#ddetails014').val()+'">'+$('#ddetails014').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty014[]"  name="sdqty014[]" value="'+$('#dqty014').val()+'">'+$('#dqty014').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks014[]"  name="sdremarks014[]" value="'+$('#dremarks014').val()+'">'+$('#dremarks014').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno014').val("");
        $('#ddetails014').val("");
        $('#dqty014').val("");
        $('#dremarks014').val("");
        //checkRow(tblcount);
        
        /* document.getElementById("dsuccess").innerHTML = "Reject details successfully added!";
        document.getElementById("derror").hidden = true;
        document.getElementById("dsuccess").hidden = false; */
        swal("success!",{
            icon: "success",
            title: "Reject details successfully added!",
            closeOnClickOutside: false,
        });
        dtotal = sdqty.reduce(function(a, b) { return a + b; }, 0);
        parseInt(dtotal) += parseInt($('#dqty014').val());
    }

    });
    
</script>