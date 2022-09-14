<div id="011" class="efai" hidden>
    <h3>2ND OPT QA Gate station</h3>
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
                                                        <select class="form-control req011" id="wswr" name="wswr">
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req011" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Wafer Type: *</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control req011" id="wtype" name="wtype">
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
                                                        <input type="text" id="wtypeothers" name="wtypeothers"  class="form-control input-sm 011" style="text-transform:uppercase" disabled>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Sampling plan: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="samplingplan" name="samplingplan"  class="form-control input-sm req011" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Sampling size: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="samplingsize" name="samplingsize"  class="form-control input-sm req011" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Remarks: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <textarea class="form-control req011" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                            <input type="text" id="dwaferno011" name="dwaferno011"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails011" name="ddetails011"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty011" name="dqty011"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks011" name="dremarks011"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" id="btnAddDefect011" name = "btnAddDefect011">Add Reject</button>
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
                    <table class="table table-bordered" id="tblreject011" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-success" id="btnDone011" name = "btnDone011" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject011 > tbody tr').length;
        $("#dwaferno011").focus();
        //checkRow(tblcount);
    }

    $('#btnDone011').click(function(event) {

        var sdwaferno = $('input[name="sdwaferno011[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails011[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty011[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks011[]"]').map(function () {
        return this.value; }).get();

        
        var val = document.getElementsByClassName("req011");
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
            document.getElementById('011').scrollIntoView();
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

        
        
        xmlhttp.open("GET", "../php/addefai011.php?data=" + JSON.stringify(data)
        +"&intlotno="+document.getElementById("intlotno").value
        +"&wtypeothers="+$("#wtypeothers.011").val()
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks), true);
        xmlhttp.send();
    });

    $('#wtype.req011').change(function (){
       
        if($(this).val() == 'others')
        {
            
            $("#wtypeothers.011").removeAttr("disabled");
            $("#wtypeothers.011").focus();
        }
        else
        {
            $("#wtypeothers.011").val('');
            $("#wtypeothers.011").attr("disabled","disabled");
        }
        
    });

    $( "#btnAddDefect011" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty011[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
    if((parseInt(dtotal) + parseInt($('#dqty011').val())) > parseInt(document.getElementById("currqty").value))
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
    if($('#dwaferno011').val()== "" ||  $('#dqty011').val()== "" ||  $('#ddetails011').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej011').scrollIntoView();
        var rejval = document.getElementsByClassName("rej011");
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
        $('#tblreject011 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno011[]"  name="sdwaferno011[]" value="'+$('#dwaferno011').val()+'">'+$('#dwaferno011').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails011[]"  name="sddetails011[]" value="'+$('#ddetails011').val()+'">'+$('#ddetails011').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty011[]"  name="sdqty011[]" value="'+$('#dqty011').val()+'">'+$('#dqty011').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks011[]"  name="sdremarks011[]" value="'+$('#dremarks011').val()+'">'+$('#dremarks011').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno011').val("");
        $('#ddetails011').val("");
        $('#dqty011').val("");
        $('#dremarks011').val("");
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
        parseInt(dtotal) += parseInt($('#dqty011').val());
    }

    });
    
</script>