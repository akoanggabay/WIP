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
                                                        <label>FAI Category: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req009" id="faicat" name="faicat">
                                                            <option value=""></option>
                                                            <option value="N/A" hidden>N/A</option>
                                                            <option value="Set-up">Set-up</option>
                                                            <option value="Monitoring">Monitoring</option>
                                                            <option value="PSC" hidden>PSC</option>
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
                                                        <label>With SWR: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req009 su mon" id="wswr" name="wswr">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req009 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Size: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req009 su" id="wsize" name="wsize">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="8">8</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Loader Plate Clean? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req009 su mon" id="loaderplateclean" name="loaderplateclean">
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
                                                        <input type="text" id="uvirradtime" name="uvirradtime"  class="form-control input-sm req009 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Is there a busted lamp? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req009 su mon" id="bustedlamp" name="bustedlamp">
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
                                                        <label>Lamp Hour Usage: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="lamphourusage" name="lamphourusage"  class="form-control input-sm req009 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required UV Dosage: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="requireduvdosage" name="requireduvdosage"  class="form-control input-sm req009 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Actual UV Dosage: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="actualuvdosage" name="actualuvdosage"  class="form-control input-sm req009 su" style="text-transform:uppercase">
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
                                                            <input type="text" id="wafernouvcuring" name="wafernouvcuring"  class="form-control input-sm req009 su mon" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Reason in performing UV curing: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req009 su mon" id="reasonuvcuring" name="reasonuvcuring">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="Detected with bubbles after mount">Detected with bubbles after mount</option>
                                                                <option value="Lot requirement">Lot requirement</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Technician Employee (passcode): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="techemp" name="techemp"  class="form-control input-sm req009 su">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Quality Control Employee (passcode): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="qcemp" name="qcemp"  class="form-control input-sm req009 su">
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
                        <button type="button" class="btn btn-danger" id="btnAddDefect009" name = "btnAddDefect009">Add Reject</button>
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
        <button type="button" class="btn btn-success" id="btnDone009" name = "btnDone009" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject009 > tbody tr').length;
        $("#dwaferno009").focus();
        //checkRow(tblcount);
    }

    $('#btnDone009').click(function(event) {

        var sdwaferno = $('input[name="sdwaferno009[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails009[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty009[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks009[]"]').map(function () {
        return this.value; }).get();

        
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

        if($("#faicat.req009").val() == 'Set-up')
        {
            if(($("#techemp.req009").val()).toUpperCase() == 'N/A')
            {
                swal("not allowed!",{
                    icon: "warning",
                    title: "Technician Employee passcode is required for Set-up!",
                    closeOnClickOutside: false,
                });
                return false;
            }

            if(($("#qcemp.req009").val()).toUpperCase() == 'N/A')
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

        
        
        xmlhttp.open("GET", "../php/addefai009.php?data=" + JSON.stringify(data)
        + "&intlotno="+document.getElementById("intlotno").value
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks), true);
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

    $( "#btnAddDefect009" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty009[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
    if((parseInt(dtotal) + parseInt($('#dqty009').val())) > parseInt(document.getElementById("currqty").value))
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
    if($('#dwaferno009').val()== "" ||  $('#dqty009').val()== "" ||  $('#ddetails009').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej009').scrollIntoView();
        var rejval = document.getElementsByClassName("rej009");
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
        $('#tblreject009 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno009[]"  name="sdwaferno009[]" value="'+$('#dwaferno009').val()+'">'+$('#dwaferno009').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails009[]"  name="sddetails009[]" value="'+$('#ddetails009').val()+'">'+$('#ddetails009').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty009[]"  name="sdqty009[]" value="'+$('#dqty009').val()+'">'+$('#dqty009').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks009[]"  name="sdremarks009[]" value="'+$('#dremarks009').val()+'">'+$('#dremarks009').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno009').val("");
        $('#ddetails009').val("");
        $('#dqty009').val("");
        $('#dremarks009').val("");
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
        parseInt(dtotal) += parseInt($('#dqty009').val());
    }

    });

    $('#faicat.req009').change(function (){
        
        //console.log($(this).val())
        $('.form-control').css({"border-color": "#d1d3e2"})

        if($(this).val() == 'Monitoring')
        {
            $(".req009.su").attr("disabled",true);
            $(".req009.mon").attr("disabled",false);
            $("input.req009.su[type=text]").val("N/A");
            $("input.req009.su[type=password]").val("N/A");
            $("select.req009.su").val("N/A");
            $("input.req009.mon[type=text]").val("");
            $("input.req009.mon[type=password]").val("");
            $("select.req009.mon").val("");
        }
        else
        {   
            $(".req009.su").attr("disabled",false);
            $("input.req009.su[type=text]").val("");
            $("input.req009.su[type=password]").val("");
            $("select.req009.su").val("");
        }

        

    });

    
</script>