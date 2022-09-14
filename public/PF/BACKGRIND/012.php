<div id="012" class="efai" hidden>
    <h3>Packing station</h3>
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
                                                        <select class="form-control req012" id="wswr" name="wswr">
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req012" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Is wafer run no. tally with the corresponding lotno? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req012" id="tally" name="tally">
                                                            <option value=""></option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Is wafer qty/lot qty out tally with qty reflected on attached lot details? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req012" id="qtyouttally" name="qtyouttally">
                                                            <option value=""></option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Is packing lot details attached to the lot? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req012" id="detailsattached" name="detailsattached">
                                                            <option value=""></option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Canister Used *</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control req012" id="canisterused" name="canisterused">
                                                            <option value=""></option>
                                                            <option value="Customer">Customer</option>
                                                            <option value="KKM">KKM</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Canister No: </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" id="canisternoused" name="canisternoused"  class="form-control input-sm 012 req012" style="text-transform:uppercase" disabled>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Is lot properly vacuum sealed inside MBB? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req012" id="properlyvacuum" name="properlyvacuum">
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
                                                        <textarea class="form-control req012" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                            <input type="text" id="dwaferno012" name="dwaferno012"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails012" name="ddetails012"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty012" name="dqty012"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks012" name="dremarks012"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" id="btnAddDefect012" name = "btnAddDefect012">Add Reject</button>
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
                    <table class="table table-bordered" id="tblreject012" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-success" id="btnDone012" name = "btnDone012" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
    $('#btnDone012').click(function(event) {

        var sdwaferno = $('input[name="sdwaferno012[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails012[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty012[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks012[]"]').map(function () {
        return this.value; }).get();

        var val = document.getElementsByClassName("req012");
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
            document.getElementById('012').scrollIntoView();
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
        xmlhttp.open("GET", "../php/addefai012.php?data=" + JSON.stringify(data)
        +"&intlotno="+document.getElementById("intlotno").value
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks), true);
        xmlhttp.send();
    });

    $( "#btnAddDefect012" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty012[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
    if((parseInt(dtotal) + parseInt($('#dqty012').val())) > parseInt(document.getElementById("wqty").value))
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
    if($('#dwaferno012').val()== "" ||  $('#dqty012').val()== "" ||  $('#ddetails012').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej012').scrollIntoView();
        var rejval = document.getElementsByClassName("rej012");
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
        $('#tblreject012 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno012[]"  name="sdwaferno012[]" value="'+$('#dwaferno012').val()+'">'+$('#dwaferno012').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails012[]"  name="sddetails012[]" value="'+$('#ddetails012').val()+'">'+$('#ddetails012').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty012[]"  name="sdqty012[]" value="'+$('#dqty012').val()+'">'+$('#dqty012').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks012[]"  name="sdremarks012[]" value="'+$('#dremarks012').val()+'">'+$('#dremarks012').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno012').val("");
        $('#ddetails012').val("");
        $('#dqty012').val("");
        $('#dremarks012').val("");
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
        parseInt(dtotal) += parseInt($('#dqty012').val());
    }

    });

    $('#canisterused.req012').change(function (){
        
        if($(this).val() == 'KKM')
        {
            $("#canisternoused.012").val('');
            $("#canisternoused.012").removeAttr("disabled");
            $("#canisternoused.012").focus();
        }
        else
        {
            $("#canisternoused.012").val('N/A');
            $("#canisternoused.012").attr("disabled","disabled");
        }
    
    });
    
</script>