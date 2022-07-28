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
                                                        <select class="form-control req002" id="wswr" name="wswr">
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req002" style="text-transform:uppercase">
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
                                                        <input type="date" id="bgtapeexpdate" name="bgtapeexpdate"  class="form-control input-sm req002">
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
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Blade Temperature: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="bladetemp" name="bladetemp"  class="form-control input-sm req002" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Blade count: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="bladecount" name="bladecount"  class="form-control input-sm req002" style="text-transform:uppercase">
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
                                                        <input type="number" id="firstwaferno" name="firstwaferno"  class="form-control input-sm req002" style="text-transform:uppercase">
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
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Lamp Hour Usage: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="mplamphourusage" name="mplamphourusage"  class="form-control input-sm req002">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Technician Employee: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="mptechemp" name="mptechemp"  class="form-control input-sm req002">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Quality Control Employee: *</label>
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
                <div class="col-lg-4">
                    <h4>Add Reject logs</h4>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Wafer no: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dwaferno" name="dwaferno"  class="form-control input-sm" disabled>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails" name="ddetails"  class="form-control input-sm" disabled>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty" name="dqty"  class="form-control input-sm" disabled>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks" name="dremarks"  class="form-control input-sm" disabled>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-danger" id="btnAddDefect" name = "btnAddDefect">Add Reject</button>
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
                    <table class="table table-bordered" id="tblreject" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-outline-success" id="btnDone002" name = "btnDone002" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
    $('#btnDone002').click(function(event) {

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
        xmlhttp.open("GET", "../php/addefai002.php?data=" + JSON.stringify(data)
        +"&wtypeothers="+$("#wtypeothers.002").val()
        +"&intlotno="+document.getElementById("intlotno").value, true);
        xmlhttp.send();
       /*  const wtype = document.getElementById("wtype").value === 'others' ? document.getElementById("wtypeothers").value : document.getElementById("wtype").value
        xmlhttp.open("GET", "../php/addefai002.php?intlotno=" + document.getElementById("intlotno").value 
        + "&machine=" + document.getElementById("machine").value
        + "&faicat=" + document.getElementById("faicat").value
        + "&wswr=" + document.getElementById("wswr").value
        + "&swrno=" + document.getElementById("swrno").value
        + "&wafercondition=" + document.getElementById("wcondition").value
        + "&wafertype=" + wtype
        + "&waferboatslotting=" + document.getElementById("waferboatslotting").value
        + "&chucktabletype=" + document.getElementById("chucktabletype").value
        + "&chucktablecleaning=" + document.getElementById("chucktablecleaning").value
        + "&processmode=" + document.getElementById("processmode").value
        + "&changetape=" + document.getElementById("changetape").value
        + "&bgtapetype=" + document.getElementById("bgtapetype").value
        + "&bgtapeused=" + document.getElementById("bgtapeused").value
        + "&bgtapelotno=" + document.getElementById("bgtapelotno").value
        + "&bgtapeexpdate=" + document.getElementById("bgtapeexpdate").value
        + "&notchtype=" + document.getElementById("notchtype").value
        + "&changeblade=" + document.getElementById("changeblade").value
        + "&bladetemp=" + document.getElementById("bladetemp").value
        + "&bladecount=" + document.getElementById("bladecount").value
        + "&setupwafer=" + document.getElementById("setupwafer").value
        + "&firstwaferinspection=" + document.getElementById("firstwaferinspection").value
        + "&firstwaferno=" + document.getElementById("firstwaferno").value
        + "&mpchucktablecleaning=" + document.getElementById("mpchucktablecleaning").value
        + "&mpbgtapeinstallation=" + document.getElementById("mpbgtapeinstallation").value
        + "&mpbgtaperollercleaning=" + document.getElementById("mpbgtaperollercleaning").value
        + "&mpbladeposition=" + document.getElementById("mpbladeposition").value
        + "&mplamphourusage=" + document.getElementById("mplamphourusage").value
        + "&mptechemp=" + document.getElementById("mptechemp").value
        + "&mpqcemp=" + document.getElementById("mpqcemp").value
        + "&remarks=" + document.getElementById("remarks").value, true);
        xmlhttp.send();  */
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
    
    
</script>