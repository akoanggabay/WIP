<div id="006" class="efai" hidden>
    <h3>Wafer Incoming-DP station</h3>
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
                                                        <label>With SWR: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req006" id="wswr" name="wswr">
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req006" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Condition: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req006" id="wcondition" name="wcondition">
                                                            <option value=""></option>
                                                            <option value="BW">BW</option>
                                                            <option value="MW">MW</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Wafer Type: *</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control req006" id="wtype" name="wtype">
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
                                                        <input type="text" id="wtypeothers" name="wtypeothers"  class="form-control input-sm" style="text-transform:uppercase" disabled>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Tape Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req006" id="tapetype" name="tapetype">
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
                                                        <label>Tape Used: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="tapeused" name="tapeused"  class="form-control input-sm req006" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Tape Thickness: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="tapethickness" name="tapethickness"  class="form-control input-sm req006" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required Wafer Thickness: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="requiredwaferthickness" name="requiredwaferthickness"  class="form-control input-sm req006" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Actual Wafer Thickness: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="actualwaferthickness" name="actualwaferthickness"  class="form-control input-sm req006" style="text-transform:uppercase">
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
                                                <div class="panel panel-primary">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Illustration:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div id="logo">
                                                                <img src="illus.png" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Required Wafer Orientation: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req006" id="requiredwaferorientation" name="requiredwaferorientation">
                                                                <option value=""></option>
                                                                <option value="0 deg">0 deg</option>
                                                                <option value="90 deg">90 deg</option>
                                                                <option value="180 deg">180 deg</option>
                                                                <option value="270 deg">270 deg</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Actual Wafer Orientation: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req006" id="actualwaferorientation" name="actualwaferorientation">
                                                                <option value=""></option>
                                                                <option value="0 deg">0 deg</option>
                                                                <option value="90 deg">90 deg</option>
                                                                <option value="180 deg">180 deg</option>
                                                                <option value="270 deg">270 deg</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>High Mag Inspection required: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req006" id="highmaginspectionrequired" name="highmaginspectionrequired">
                                                                <option value=""></option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Remarks: * </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <textarea class="form-control req006" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                            <input type="text" id="dwaferno006" name="dwaferno006"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails006" name="ddetails006"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty006" name="dqty006"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks006" name="dremarks006"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-danger" id="btnAddDefect006" name = "btnAddDefect006">Add Reject</button>
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
                    <table class="table table-bordered" id="tblreject006" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-outline-success" id="btnDone006" name = "btnDone006" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject006 > tbody tr').length;
        $("#initialthickness").focus();
        //checkRow(tblcount);
    }

    $('#btnDone006').click(function(event) {

        
        var val = document.getElementsByClassName("req006");
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
            document.getElementById('006').scrollIntoView();
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

        
        
        xmlhttp.open("GET", "../php/addefai006.php?data=" + JSON.stringify(data)
        +"&wtypeothers="+$("#wtypeothers.006").val()
        +"&intlotno="+document.getElementById("intlotno").value, true);
        xmlhttp.send();
        /* const wtype = document.getElementById("wtype").value === 'others' ? document.getElementById("wtypeothers").value : document.getElementById("wtype").value
        xmlhttp.open("GET", "../php/addefai006.php?intlotno=" + document.getElementById("intlotno").value 
        + "&wswr=" + document.getElementById("wswr").value
        + "&swrno=" + document.getElementById("swrno").value
        + "&wafercondition=" + document.getElementById("wcondition").value
        + "&wafertype=" + wtype
        + "&heightmeasurement=" + document.getElementById("heightmeasurement").value
        + "&warpage=" + document.getElementById("warpage").value
        + "&waferboatslotting=" + document.getElementById("waferboatslotting").value
        + "&highmaginspectionrequired=" + document.getElementById("highmaginspectionrequired").value
        + "&remarks=" + document.getElementById("remarks").value
        + "&initialthickness=" + initthick, true);
        xmlhttp.send(); */
    });
    
</script>