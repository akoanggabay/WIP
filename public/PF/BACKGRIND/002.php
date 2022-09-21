<div id="002" class="efai" hidden>
    <h3>Taping station</h3>
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
                                                        <select class="form-control req002" id="machine" name="machine">
                                                        <option value=""></option>
                                                        <?php 
                                                        include_once("../classes/machine.php");
                                                        $Machine = Machine::GetMachineStation('BACKGRIND','002');
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
                                                        <select class="form-control req002" id="faicat" name="faicat">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Set-up">Set-up</option>
                                                            <option value="PSC">PSC</option>
                                                            <option value="Monitoring">Monitoring</option>
                                                            <option value="Customer requirement">Customer requirement</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>With SWR: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="wswr" name="wswr">
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req002" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Size: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="wsize" name="wsize">
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
                                                        <label>Wafer Condition: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="wcondition" name="wcondition">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="virgin">Virgin</option>
                                                            <option value="pre-grinded">Pre-grinded</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Wafer Type: *</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control req002" id="wtype" name="wtype">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="inked">Inked</option>
                                                            <option value="bumped">Bumped</option>
                                                            <option value="standard">Standard</option>
                                                            <option value="glass">Glass</option>
                                                            <option value="others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Others: </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" id="wtypeothers" name="wtypeothers"  class="form-control input-sm 002" style="text-transform:uppercase" disabled>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Boat Slotting: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="waferboatslotting" name="waferboatslotting">
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
                                                        <label>Chuck table type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="chucktabletype" name="chucktabletype">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Standard">Standard</option>
                                                            <option value="Overcut">Overcut</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck table cleaning done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="chucktablecleaning" name="chucktablecleaning">
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
                                                        <label>Process mode: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="processmode" name="processmode">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Auto">Auto</option>
                                                            <option value="Manual">Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Change tape? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="changetape" name="changetape">
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
                                                        <select class="form-control req002" id="bgtapetype" name="bgtapetype">
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
                                                        <input type="text" id="bgtapeused" name="bgtapeused"  class="form-control input-sm req002" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>BG Tape Lot number: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bgtapelotno" name="bgtapelotno"  class="form-control input-sm req002" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>BG Tape expiration date: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bgtapeexpdate" name="bgtapeexpdate"  class="form-control input-sm req002">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Notch type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="notchtype" name="notchtype">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="V">V</option>
                                                            <option value="Long Flat">Long Flat</option>
                                                            <option value="Short Flat">Short Flat</option>
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
                        <div class="card border-left-danger">
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Change blade? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="changeblade" name="changeblade">
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
                                                        <label>Blade Temperature (140 ± 20 °C): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bladetemp" name="bladetemp"  class="form-control input-sm req002" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Blade count (350 cuts max): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bladecount" name="bladecount"  class="form-control input-sm req002" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Set up wafer: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="setupwafer" name="setupwafer">
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
                                                        <select class="form-control req002" id="firstwaferinspection" name="firstwaferinspection">
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
                                                        <input type="text" id="firstwaferno" name="firstwaferno"  class="form-control input-sm req002" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>No. of Wafers Inspected (Wafer Nos.): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="noofwafersinspected" name="noofwafersinspected"  class="form-control input-sm req002" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <h4 style="text-align:center;">Machine Preparation</h4>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck table cleaning done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="mpchucktablecleaning" name="mpchucktablecleaning">
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
                                                        <label>BG Tape installation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="mpbgtapeinstallation" name="mpbgtapeinstallation">
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
                                                        <label>BG Tape roller cleaning done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="mpbgtaperollercleaning" name="mpbgtaperollercleaning">
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
                                                        <label>Blade Position: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req002" id="mpbladeposition" name="mpbladeposition">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Lamp Hour Usage (2000 hours max): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="mplamphourusage" name="mplamphourusage"  class="form-control input-sm req002">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Technician Employee (passcode): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="mptechemp" name="mptechemp"  class="form-control input-sm req002">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Quality Control Employee (passcode): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="mpqcemp" name="mpqcemp"  class="form-control input-sm req002">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Remarks: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <textarea class="form-control req002" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                <div class="col-lg-4" id="rej002">
                    <h4>Add Reject logs</h4>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Wafer no: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dwaferno002" name="dwaferno002"  class="form-control input-sm rej002">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails002" name="ddetails002"  class="form-control input-sm rej002">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty002" name="dqty002"  class="form-control input-sm rej002">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks002" name="dremarks002"  class="form-control input-sm rej002">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" id="btnAddDefect002" name = "btnAddDefect002">Add Reject</button>
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
                    <table class="table table-bordered" id="tblreject002" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-success" id="btnDone002" name = "btnDone002" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
    $('#btnDone002').click(function(event) {
        
        var sdwaferno = $('input[name="sdwaferno002[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails002[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty002[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks002[]"]').map(function () {
        return this.value; }).get();

        var val = document.getElementsByClassName("req002");
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
            document.getElementById('002').scrollIntoView();
            swal("missing input!",{
                icon: "warning",
                title: "Please input required fields!",
                closeOnClickOutside: false,
            });
            return false;
        }
        //console.log(data)

        if($("#faicat.req002").val() == 'Set-up')
        {
            if(($("#mptechemp.req002").val()).toUpperCase() == 'N/A')
            {
                swal("not allowed!",{
                    icon: "warning",
                    title: "Technician Employee passcode is required for Set-up!",
                    closeOnClickOutside: false,
                });
                return false;
            }

            if(($("#mpqcemp.req002").val()).toUpperCase() == 'N/A')
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
        xmlhttp.open("GET", "../php/addefai002.php?data=" + JSON.stringify(data)
        +"&wtypeothers="+$("#wtypeothers.002").val()
        +"&intlotno="+document.getElementById("intlotno").value
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks), true);
        xmlhttp.send();
    });

    $('#wtype.req002').change(function (){
        
        if($(this).val() == 'others')
        {
            
            $("#wtypeothers.002").removeAttr("disabled");
            $("#wtypeothers.002").focus();
        }
        else
        {
            $("#wtypeothers.002").val('');
            $("#wtypeothers.002").attr("disabled","disabled");
        }
        
    });

    $( "#btnAddDefect002" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty002[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
    if((parseInt(dtotal) + parseInt($('#dqty002').val())) > parseInt(document.getElementById("wqty").value))
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
    if($('#dwaferno002').val()== "" ||  $('#dqty002').val()== "" ||  $('#ddetails002').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej002').scrollIntoView();
        var rejval = document.getElementsByClassName("rej002");
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
        $('#tblreject002 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno002[]"  name="sdwaferno002[]" value="'+$('#dwaferno002').val()+'">'+$('#dwaferno002').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails002[]"  name="sddetails002[]" value="'+$('#ddetails002').val()+'">'+$('#ddetails002').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty002[]"  name="sdqty002[]" value="'+$('#dqty002').val()+'">'+$('#dqty002').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks002[]"  name="sdremarks002[]" value="'+$('#dremarks002').val()+'">'+$('#dremarks002').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno002').val("");
        $('#ddetails002').val("");
        $('#dqty002').val("");
        $('#dremarks002').val("");
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
        parseInt(dtotal) += parseInt($('#dqty002').val());
    }

    });
    
    
</script>