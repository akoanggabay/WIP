<div id="009" class="efai" hidden>
    <h3>UV Irradiation station</h3>
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
                                                        <select class="form-control req009" id="machine" name="machine">
                                                        <option value=""></option>
                                                        <?php 
                                                        include_once("../classes/machine.php");
                                                        $Machine = Machine::GetMachineStation('SAW','009');
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
                                                        <select class="form-control req009" id="faicat" name="faicat">
                                                            <option value=""></option>
                                                            <option value="Set-up">Set-up</option>
                                                            <option value="Monitoring">Monitoring</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>With SWR: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req009" id="wswr" name="wswr">
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req009" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Loader Plate Clean? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req009" id="loaderplateclean" name="loaderplateclean">
                                                            <option value=""></option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>UV Irradiation Time(<b>in seconds</b>): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="uvirradtime" name="uvirradtime"  class="form-control input-sm req009" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Is there a busted lamp? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req009" id="bustedlamp" name="bustedlamp">
                                                            <option value=""></option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Lamp Hour Usage: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="lamphourusage" name="lamphourusage"  class="form-control input-sm req009" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required UV Dosage: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="requireduvdosage" name="requireduvdosage"  class="form-control input-sm req009" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Actual UV Dosage: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="actualuvdosage" name="actualuvdosage"  class="form-control input-sm req009" style="text-transform:uppercase">
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
                                                            <label>Wafer no. undergone UV curing: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="wafernouvcuring" name="wafernouvcuring"  class="form-control input-sm req009" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Reason in performing UV curing: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req009" id="reasonuvcuring" name="reasonuvcuring">
                                                                <option value=""></option>
                                                                <option value="Detected with bubbles after mount">Detected with bubbles after mount</option>
                                                                <option value="Lot requirement">Lot requirement</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Technician Employee: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="techemp" name="techemp"  class="form-control input-sm req009">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Quality Control Employee: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="qcemp" name="qcemp"  class="form-control input-sm req009">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Remarks: * </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <textarea class="form-control req009" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                            <input type="text" id="dwaferno009" name="dwaferno009"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails009" name="ddetails009"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty009" name="dqty009"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks009" name="dremarks009"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-danger" id="btnAddDefect009" name = "btnAddDefect009">Add Reject</button>
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
                    <table class="table table-bordered" id="tblreject009" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-outline-success" id="btnDone009" name = "btnDone009" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject009 > tbody tr').length;
        $("#initialthickness").focus();
        //checkRow(tblcount);
    }

    $('#btnDone009').click(function(event) {

        
        var val = document.getElementsByClassName("req009");
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
            document.getElementById('009').scrollIntoView();
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

        
        
        xmlhttp.open("GET", "../php/addefai009.php?data=" + JSON.stringify(data)
        +"&intlotno="+document.getElementById("intlotno").value, true);
        xmlhttp.send();
    });

    $('#wtype.req009').change(function (){
        
        if($(this).val() == 'others')
        {
            
            $("#wtypeothers.009").removeAttr("disabled");
            $("#wtypeothers.009").focus();
        }
        else
        {
            $("#wtypeothers.009").val('');
            $("#wtypeothers.009").attr("disabled","disabled");
        }
        
    });
    
</script>