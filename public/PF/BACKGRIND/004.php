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
                                                        <label>Machine No: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto manual" id="machine" name="machine">
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
                                                        <label>FAI Category: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto manual" id="faicat" name="faicat">
                                                            <option value=""></option>
                                                            <option value="setup">Set-up</option>
                                                            <option value="psc">PSC</option>
                                                            <option value="monitoring">Monitoring</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>With SWR: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto manual" id="wswr" name="wswr">
                                                            <option value=""></option>
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req004 auto manual" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Slotting: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req004 auto" id="slotting auto" name="slotting">
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
                                                        <select class="form-control req004 auto manual" id="chucktablecleaning" name="chucktablecleaning">
                                                            <option value=""></option>
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
                                                        <label>BG Tape Staged (from Taping time-out): * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="bgtapestaging" name="bgtapestaging"  class="form-control input-sm req004 auto manual">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Table Temp: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="tabletemp" name="tabletemp"  class="form-control input-sm req004 auto manual">
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
                                                        <select class="form-control req004 auto" id="changedetapetape" name="changedetapetape">
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
                                                        <input type="date" id="detapingtapeexpdate" name="detapingtapeexpdate"  class="form-control input-sm req004 auto">
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
                                                        <select class="form-control req004 auto" id="notchtype" name="notchtype">
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
                                                        <select class="form-control req004 auto" id="setupwafer" name="setupwafer">
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
                                                        <select class="form-control req004 auto" id="firstwaferinspection" name="firstwaferinspection">
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
                                                        <input type="number" id="firstwaferno" name="firstwaferno"  class="form-control input-sm req004 auto" style="text-transform:uppercase" value=0>
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
                                                        <select class="form-control req004 auto" id="detapingtaperoller" name="detapingtaperoller">
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
                                                        <label>Tape winding pressure: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="tapewindingpressure" name="tapewindingpressure"  class="form-control input-sm req004 auto" value=0>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Tape Delivery pressure: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="tapedeliverypressure" name="tapedeliverypressure"  class="form-control input-sm req004 auto" value=0>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Lamp Hour Usage: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="lamphourusage" name="lamphourusage"  class="form-control input-sm req004 auto">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Technician Employee: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="techemp" name="techemp"  class="form-control input-sm req004 auto">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Quality Control Employee: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="qcemp" name="qcemp"  class="form-control input-sm req004 auto">
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
                        <button type="button" class="btn btn-outline-danger" id="btnAddDefect004" name = "btnAddDefect">Add Reject</button>
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
        <button type="button" class="btn btn-outline-success" id="btnDone004" name = "btnDone004" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
    $('#btnDone004').click(function(event) {

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
            }
        };
        xmlhttp.open("GET", "../php/addefai004.php?data=" + JSON.stringify(data)+"&intlotno="+document.getElementById("intlotno").value, true);
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
    
</script>