<div id="001" class="efai" hidden>
    <h3>Incoming station</h3>
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
                                                        <select class="form-control req001" id="wswr" name="wswr">
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req001" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Condition: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req001" id="wcondition" name="wcondition">
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
                                                        <select class="form-control req001" id="wtype" name="wtype">
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
                                                        <input type="text" id="wtypeothers" name="wtypeothers"  class="form-control input-sm 001" style="text-transform:uppercase" disabled>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Height measurement: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="heightmeasurement" name="heightmeasurement"  class="form-control input-sm req001" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Warpage: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="warpage" name="warpage"  class="form-control input-sm req001" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Boat Slotting: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req001" id="waferboatslotting" name="waferboatslotting">
                                                            <option value=""></option>
                                                            <option value="ok">Ok</option>
                                                            <option value="notok">Not ok</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>High Mag Inspection required: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req001" id="highmaginspectionrequired" name="highmaginspectionrequired">
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
                                                        <textarea class="form-control req001" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                                                        <label>Initial Thickness: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="initialthickness" name="initialthickness"  class="form-control input-sm" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-outline-primary float-right" id="btnAddinitialthickness" name = "btnAddinitialthickness">Add</button>
                                                </div>
                                                <br/>
                                                <div class="row"> 
                                                    <div class="col-lg-12">
                                                        <div class="card-body">
                                                            <div class="row no-gutters table-responsive">
                                                            <table class="table table-bordered" id="tblinitialthickness" width="100%" cellspacing="0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Initial Thickness</th>
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
                            <input type="text" id="dwaferno001" name="dwaferno001"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails001" name="ddetails001"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty001" name="dqty001"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks001" name="dremarks001"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-danger" id="btnAddDefect001" name = "btnAddDefect001">Add Reject</button>
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
                    <table class="table table-bordered" id="tblreject001" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-outline-success" id="btnDone001" name = "btnDone001" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject > tbody tr').length;
        $("#initialthickness").focus();
        //checkRow(tblcount);
    }
    $('#btnAddinitialthickness').click(function(event) {
       
        if($('#initialthickness').val()== "")
        {
            swal("missing input!",{
                icon: "warning",
                title: "Please input Initial Thickness!",
                closeOnClickOutside: false,
            });
            $('button.swal-button').click(function(event){$("#initialthickness").focus();});
            return false;
        }

        if(parseInt($('#wqty').val()) > 1)
        {
            if(tblcount > 1)
            {
                swal("error!",{
                icon: "error",
                title: "Initial Thickness input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#initialthickness").focus();});
                return false;
            }
            
        }

        if(parseInt($('#wqty').val())  <= 1 )
        {
            alert(tblcount)
            if(tblcount > 0)
            {
                swal("error!",{
                icon: "error",
                title: "Initial Thickness input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#initialthickness").focus();});
                return false;
            }
            
        }
        
        $('#tblinitialthickness > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sinitialthickness[]"  name="sinitialthickness[]" value="'+$('#initialthickness').val()+'">'+$('#initialthickness').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#initialthickness').val("");
        $("#initialthickness").focus();
        //checkRow(tblcount);
            
    });

    $('#btnDone001').click(function(event) {

        

        var sinitialthickness = $('input[name="sinitialthickness[]"]').map(function () {
        return this.value; }).get();

        
        var val = document.getElementsByClassName("req001");
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
            document.getElementById('001').scrollIntoView();
            swal("missing input!",{
                icon: "warning",
                title: "Please input required fields!",
                closeOnClickOutside: false,
            });
            return false;
        }

        if(tblcount == 0)
        {
            document.getElementById("initialthickness").style.borderColor = 'red';
            document.getElementById('001').scrollIntoView();
            swal("missing input!",{
                icon: "warning",
                title: "Please input Initial Thickness!",
                closeOnClickOutside: false,
            });
            $('button.swal-button').click(function(event){$("#initialthickness").focus();});
            return false;
        }
        if(parseInt($('#wqty').val()) > 1)
        {
            if(tblcount < 2)
            {
                document.getElementById("initialthickness").style.borderColor = 'red';
                document.getElementById('001').scrollIntoView();
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Initial Thickness!",
                    closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#initialthickness").focus();});
                return false;
            }
        }

        document.getElementById("initialthickness").style.borderColor = '#d1d3e2';

        const initthick = sinitialthickness.length > 1 ? sinitialthickness.join(",") : sinitialthickness.join("");

        data["initialthickness"] = initthick;

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

        
        
        xmlhttp.open("GET", "../php/addefai001.php?data=" + JSON.stringify(data)
        +"&wtypeothers="+$("#wtypeothers.001").val()
        +"&intlotno="+document.getElementById("intlotno").value, true);
        xmlhttp.send();
        /* const wtype = document.getElementById("wtype").value === 'others' ? document.getElementById("wtypeothers").value : document.getElementById("wtype").value
        xmlhttp.open("GET", "../php/addefai001.php?intlotno=" + document.getElementById("intlotno").value 
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

    $('#wtype.req001').change(function (){
        
        if($(this).val() == 'others')
        {
            
            $("#wtypeothers.001").removeAttr("disabled");
            $("#wtypeothers.001").focus();
        }
        else
        {
            $("#wtypeothers.001").val('');
            $("#wtypeothers.001").attr("disabled","disabled");
        }
        
    });
    
</script>