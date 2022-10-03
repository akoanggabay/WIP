<div id="004" class="efai" hidden>
    <h3>De-Taping station</h3>
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
                                                        <label>Process mode: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004" id="processmode" name="processmode">
                                                            <option value=""></option>
                                                            <option value="Auto">Auto</option>
                                                            <option value="Manual">Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>FAI Category: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004" id="faicat" name="faicat">
                                                            <option value=""></option>
                                                            <option value="N/A" hidden>N/A</option>
                                                            <option value="Set-up">Set-up</option>
                                                            <option value="PSC">PSC</option>
                                                            <option value="Monitoring">Monitoring</option>
                                                            <option value="Customer requirement" hidden>Customer requirement</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Machine No: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004" id="machine" name="machine">
                                                        <option value=""></option>
                                                        <?php 
                                                        include_once("../classes/machine.php");
                                                        $Machine = Machine::GetMachineStation('BACKGRIND','004');
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
                                                        <label>With SWR: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto manual autopsc automon" id="wswr" name="wswr">
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
                                                        <label>SWR no: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req004 auto manual autopsc automon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Size: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto manual autopsc automon" id="wsize" name="wsize">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Slotting: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto autopsc automon" id="slotting" name="slotting">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Ok">Ok</option>
                                                            <option value="Not Ok">Not Ok</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck table cleaning done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto manual autopsc automon" id="chucktablecleaning" name="chucktablecleaning">
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
                                                        <label>BG Tape type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto manual" id="bgtapetype" name="bgtapetype">
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
                                                        <label>BG Tape used: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bgtapeused" name="bgtapeused"  class="form-control input-sm req004 auto manual" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>BG Tape Staged (from Taping time-out < 16 hours): * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bgtapestaging" name="bgtapestaging"  class="form-control input-sm req004" readonly>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Table Temperature (50-70deg.C): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="tabletemp" name="tabletemp"  class="form-control input-sm req004 auto manual autopsc automon manualpsc manualmon">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck Table Vacuum Pressure w/ Wafer ( -70 kPa to -90 kPa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="chucktablevacuumpressure" name="chucktablevacuumpressure"  class="form-control input-sm req004 manual">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>UV Light: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto" id="uvlight" name="uvlight">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="On">On</option>
                                                            <option value="Off">Off</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>UV Irradiation done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 manual" id="uvirrad" name="uvirrad">
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
                                                        <label>Change detape tape? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto autopsc automon" id="changedetapetape" name="changedetapetape">
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
                                                        <label>De-taping Tape used: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="detapingtapeused" name="detapingtapeused"  class="form-control input-sm req004 auto">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>De-taping Tape lot no: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="detapingtapelotno" name="detapingtapelotno"  class="form-control input-sm req004 auto">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>De-taping Tape expiration date: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="detapingtapeexpdate" name="detapingtapeexpdate"  class="form-control input-sm req004 auto autopsc automon">
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
                        <div class="card border-left-danger">
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Notch Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto su" id="notchtype" name="notchtype">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="V">V</option>
                                                            <option value="Long flat">Long flat</option>
                                                            <option value="Short flat">Short flat</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Set up wafer: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto manual" id="setupwafer" name="setupwafer">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Ok">Ok</option>
                                                            <option value="Not Ok">Not Ok</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>1st Wafer Inspection result: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto su" id="firstwaferinspection" name="firstwaferinspection">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Ok">Ok</option>
                                                            <option value="Not Ok">Not Ok</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>1st Wafer No. Inspected: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="firstwaferno" name="firstwaferno"  class="form-control input-sm req004 auto su" style="text-transform:uppercase" value=0>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>No. of Wafers Inspected (Wafer Nos.): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="noofwafersinspected" name="noofwafersinspected"  class="form-control input-sm req004 auto autopsc automon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <h4 style="text-align:center;">Machine Preparation</h4>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>De-Taping Tape roller: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto autopsc" id="detapingtaperoller" name="detapingtaperoller">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Ok">Ok</option>
                                                            <option value="Not Ok">Not Ok</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>De-Taping Tape installation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto" id="detapingtapeinstallation" name="detapingtapeinstallation">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Ok">Ok</option>
                                                            <option value="Not Ok">Not Ok</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Tape winding pressure (0.18 - 0.25 MPa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="tapewindingpressure" name="tapewindingpressure"  class="form-control input-sm req004 auto autopsc" value=0>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Tape Delivery pressure (0.10 - 0.15 MPa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="tapedeliverypressure" name="tapedeliverypressure"  class="form-control input-sm req004 auto autopsc" value=0>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Lamp Hour Usage (2000 hours max): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="lamphourusage" name="lamphourusage"  class="form-control input-sm req004 auto autopsc">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck Plate Base Height w/ respect to the detaper table guide ( =/> 5 mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="chuckplatebaseheight" name="chuckplatebaseheight"  class="form-control input-sm req004 manual">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Technician Employee (passcode): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="techemp" name="techemp"  class="form-control input-sm req004 auto manual autopsc manualpsc manualmon">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Quality Control Employee (passcode): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="qcemp" name="qcemp"  class="form-control input-sm req004 auto manual manualpsc manualmon">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Remarks: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <textarea class="form-control req004" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                            <input type="text" id="dwaferno004" name="dwaferno004"  class="form-control input-sm" disabled>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails004" name="ddetails004"  class="form-control input-sm" disabled>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty004" name="dqty004"  class="form-control input-sm" disabled>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks004" name="dremarks004"  class="form-control input-sm" disabled>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" id="btnAddDefect004" name = "btnAddDefect">Add Reject</button>
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
                    <table class="table table-bordered" id="tblreject004" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-success" id="btnDone004" name = "btnDone004" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    $(document).ready(function(){
        
    });
    
    $('#btnDone004').click(function(event) {

        var sdwaferno = $('input[name="sdwaferno004[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails004[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty004[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks004[]"]').map(function () {
        return this.value; }).get();

        var val = document.getElementsByClassName("req004");
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
            document.getElementById('004').scrollIntoView();
            swal("missing input!",{
                icon: "warning",
                title: "Please input required fields!",
                closeOnClickOutside: false,
            });
            return false;
        }
        //console.log(data)

        if($("#faicat.req004").val() == 'Set-up')
        {
            if(($("#techemp.req004").val()).toUpperCase() == 'N/A')
            {
                swal("not allowed!",{
                    icon: "warning",
                    title: "Technician Employee passcode is required for Set-up!",
                    closeOnClickOutside: false,
                });
                return false;
            }

            if(($("#qcemp.req004").val()).toUpperCase() == 'N/A')
            {
                swal("not allowed!",{
                    icon: "warning",
                    title: "Quality Control Employee passcode is required for Set-up!",
                    closeOnClickOutside: false,
                });
                return false;
            }
        }
        
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            //alert(this.readyState + ' ' + this.status);
            if (this.readyState == 4 && this.status == 200) 
            {
                var result = this.responseText;
                var res = result.split("_");
                //alert(result)

                if(res[0].trim() == 'success')
                {
                    swal("success!",{
                        icon: "success",
                        title: res[1],
                        closeOnClickOutside: false,
                    });
                    $('#btnReset').click()
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
        xmlhttp.open("GET", "../php/addefai004.php?data=" + JSON.stringify(data)
        +"&intlotno="+document.getElementById("intlotno").value
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks), true);
        xmlhttp.send();
    });

    $('#processmode.req004').change(function (){
        
        //console.log($(this).val())
        $('.form-control').css({"border-color": "#d1d3e2"})
        if($(this).val() == 'Manual')
        {
            
            $(".auto").attr("disabled",true);
            $(".manual").attr("disabled",false);
            $("input.auto[type=text]").val("N/A");
            $("input.auto[type=password]").val("N/A");
            $("input.auto[type=date]").val("1900-01-01");
            $("select.auto").val("N/A");
            $("input.auto[type=number]").val(0);
            $(".manual").val("");
        }
        else
        {
            $(".manual").attr("disabled",true);
            $(".auto").attr("disabled",false);
            $("input.manual[type=text]").val("N/A");
            $("select.manual").val("N/A");
            $("input.manual[type=number]").val(0);
            $(".auto").val("");
        }

    });

    $( "#btnAddDefect004" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty004[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
    if((parseInt(dtotal) + parseInt($('#dqty004').val())) > parseInt(document.getElementById("wqty").value))
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
    if($('#dwaferno004').val()== "" ||  $('#dqty004').val()== "" ||  $('#ddetails004').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej004').scrollIntoView();
        var rejval = document.getElementsByClassName("rej004");
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
        $('#tblreject004 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno004[]"  name="sdwaferno004[]" value="'+$('#dwaferno004').val()+'">'+$('#dwaferno004').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails004[]"  name="sddetails004[]" value="'+$('#ddetails004').val()+'">'+$('#ddetails004').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty004[]"  name="sdqty004[]" value="'+$('#dqty004').val()+'">'+$('#dqty004').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks004[]"  name="sdremarks004[]" value="'+$('#dremarks004').val()+'">'+$('#dremarks004').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno004').val("");
        $('#ddetails004').val("");
        $('#dqty004').val("");
        $('#dremarks004').val("");
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
        parseInt(dtotal) += parseInt($('#dqty004').val());
    }

    });

    $('#faicat.req004').change(function (){
        
        //console.log($(this).val())
        $('.form-control').css({"border-color": "#d1d3e2"})
        if($("#processmode.req004").val() == "")
        {
            swal("missing input!",{
                icon: "warning",
                title: "Kindly select process mode!",
                closeOnClickOutside: false,
            });
            $(this).val("");
            return false
        }

        if($("#processmode.req004").val() == "Auto")
        {
            if($(this).val() == 'PSC')
            {
                
                $("input.auto[type=text]").val("N/A");
                $("input.auto[type=password]").val("N/A");
                $("select.auto").val("N/A");
                $(".auto").attr("disabled",true);
                $(".auto.autopsc").attr("disabled",false);
                $("input.auto.autopsc[type=text]").val("");
                $("input.auto.autopsc[type=password]").val("");
                $("select.auto.autopsc").val("");
            }

            else if($(this).val() == 'Monitoring')
            {
                
                $("input.auto[type=text]").val("N/A");
                $("input.auto[type=password]").val("N/A");
                $("select.auto").val("N/A");
                $(".auto").attr("disabled",true);
                $(".auto.automon").attr("disabled",false);
                $("input.auto.automon[type=text]").val("");
                $("input.auto.automon[type=password]").val("");
                $("select.auto.automon").val("");
            }
            else
            {
                $(".auto").attr("disabled",false);
                $("input.auto[type=text]").val("");
                $("input.auto[type=password]").val("");
                $("select.auto").val("");
            }
        }
        else if($("#processmode.req004").val() == "Manual")
        {
            if($(this).val() == 'PSC')
            {
                
                $("input.manual[type=text]").val("N/A");
                $("input.manual[type=password]").val("N/A");
                $("select.manual").val("N/A");
                $(".manual").attr("disabled",true);
                $(".manual.manualpsc").attr("disabled",false);
                $("input.manual.manualpsc[type=text]").val("");
                $("input.manual.manualpsc[type=password]").val("");
                $("select.manual.manualpsc").val("");
            }

            else if($(this).val() == 'Monitoring')
            {
                
                $("input.manual[type=text]").val("N/A");
                $("input.manual[type=password]").val("N/A");
                $("select.manual").val("N/A");
                $(".manual").attr("disabled",true);
                $(".manual.manualmon").attr("disabled",false);
                $("input.manual.manualmon[type=text]").val("");
                $("input.manual.manualmon[type=password]").val("");
                $("select.manual.manualmon").val("");
            }
            else
            {
                $(".manual").attr("disabled",false);
                $("input.manual[type=text]").val("");
                $("input.manual[type=password]").val("");
                $("select.manual").val("");
            }
        }
        

    });
    
</script>