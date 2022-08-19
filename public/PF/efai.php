<div class="row">
    <h1 class="h3 mb-4 text-gray-900 col-lg-6">Electronic First Article Inspection</h1>
    <div class="col-lg-6 ">
    <button type="button" class="btn btn-primary float-right" id="btnSave" hidden>Save</button>
    </div>
</div>
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
                                        <div id = "success" class="alert alert-success alert-dismissible" role="alert" hidden>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div id = "error" class="alert alert-danger alert-dismissible" role="alert" hidden>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>

                                        <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Internal Lot number: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="intlotno" name="intlotno"  class="form-control input-sm" style="text-transform:uppercase" onkeypress="if (event.keyCode == 13)  return false;">
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <!-- <button type="button" class="btn btn-primary me-1 mb-1 inputform" id="btnIssue">Issue</button> -->
                                            <button type="reset"
                                                class="btn btn-secondary" id="btnReset">Reset</button>
                                        </div>
                                        <!-- <div class="form-group">
                                            <button type="button" class="btn btn-outline-info" id="btnStart" name = "btnStart" disabled>Start</button>
                                            <button type="button" class="btn btn-outline-warning float-right" id="btnClear" name = "btnClear">Clear</button>
                                        </div> -->
                                        </form>
                                    </div>
                                    
                                    <!-- <div class="col-lg-6">
                                        Purchase Order Details:
                                    </div> -->
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
                                            <div class="panel-heading"><h5>Internal Lot Details</h5></div>
                                            <div class="panel-body">
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Process Category:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="processcat" name="processcat"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Customer Lot Number:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="custlot" name="custlot"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Device No:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="deviceno" name="deviceno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Run no:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="waferrunno" name="waferrunno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer No:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="waferno" name="waferno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer qty:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wqty" name="wqty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Lot qty:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="lqty" name="lqty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Current qty:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="currqty" name="currqty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer size:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wsize" name="wsize"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Lot type:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="ltype" name="ltype"  class="form-control input-sm" value="" readonly><br>
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
<br/>
<div id="efai">
    <?php include_once "BACKGRIND/001.php";?>
    <?php include_once "BACKGRIND/002.php";?>
    <?php include_once "BACKGRIND/003.php";?>
    <?php include_once "BACKGRIND/004.php";?>
    <?php include_once "BACKGRIND/005.php";?>
    <?php include_once "BACKGRIND/012.php";?>
    <?php include_once "SAW/006.php";?>
    <?php include_once "SAW/007.php";?>
    <?php include_once "SAW/008.php";?>
    <?php include_once "SAW/009.php";?>
    <?php include_once "SAW/010.php";?>
    <?php include_once "SAW/011.php";?>
    <?php include_once "SINGULATION/013.php";?>
    <?php include_once "SINGULATION/014.php";?>
    <?php include_once "SINGULATION/015.php";?>
    <?php include_once "SINGULATION/016.php";?>
    <?php include_once "SINGULATION/017.php";?>
    <?php include_once "SINGULATION/019.php";?>
    <?php include_once "SINGULATION/020.php";?>
    <?php include_once "BACKGRIND/test.php";?>
</div>
<br/>


<script src="../vendor/jquery/jquery.min.js"></script>


<script>
    var tblcount = 0;
    var iscount = 0;
    var bhcount = 0;
    var wpcount = 0;
    var rccount = 0;
    $('#intlotno').focus();
    
    $('input[type=text').keyup(function(event) {
        this.value = this.value.replace(/[''#&*<>]/g, '')
    });
    
    $('#btnReset').click(function(event) {
        $(".form-control").val("");
        $("#tblreject > tbody").empty();
        $("#tblbh > tbody").empty();
        $("#tblis > tbody").empty();
        $("#tblwp > tbody").empty();
        $("#tblis015 > tbody").empty();
        $("#tblwp015 > tbody").empty();
        $("#tblrc > tbody").empty();
        $(".efai").attr('hidden',true);
        document.getElementById("intlotno").disabled = false;
        $("#intlotno").focus();
        tblcount = 0;
        bhcount = 0;
        iscount = 0;
        wpcount = 0;
        rccount = 0;
    });

    $('#intlotno').keyup(async function(event) { 
        
        var keycode = (event.keyCode ? event.keyCode : event.which);
        var exist = false;

        if (keycode == '13') {
            
            if(document.getElementById("intlotno").value == '')
            {
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Internal Lot number!",
                    closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#intlotno").focus();});
                return false;
            }

            var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                //alert(this.readyState + ' ' + this.status);
                if (this.readyState == 4 && this.status == 200) 
                {
                    var result = this.responseText;
                    var res = result.split("_");

                    if(res[0].trim() == 'error')
                    {
                        swal(res[1],"","error");
                        $('button.swal-button').click(function(event){$("#intlotno").focus();});
                        return false;
                    }

                    
                    var resdata = JSON.parse(res[1]);
                    $("#btnReset").click();
                    $(".form-control").attr("disabled",false);
                    $('input[name*="wtypeothers"]').attr("disabled",true);
                    swal({
                        title: 'Success!\n ILN: '+ resdata[0].intlot + ' is for '+ resdata[0].nstation + ' station!',
                        text: '',
                        showCancelButton: false,
                        showConfirmButton: true,
                        button: true,
                        icon: "success"
                    })
                    document.getElementById("intlotno").value = resdata[0].intlot
                    document.getElementById("custlot").value = resdata[0].custlot;
                    document.getElementById("deviceno").value = resdata[0].deviceno;
                    document.getElementById("waferrunno").value = resdata[0].waferrun;
                    document.getElementById("waferno").value = resdata[0].waferno;
                    document.getElementById("wqty").value = resdata[0].waferqty;
                    document.getElementById("currqty").value = resdata[0].currqty;
                    document.getElementById("lqty").value = resdata[0].qty;
                    document.getElementById("wsize").value = resdata[0].wafersize;
                    document.getElementById("ltype").value = resdata[0].lottype;
                    document.getElementById("processcat").value = resdata[0].processcat;
                    
                    document.getElementById(resdata[0].nstation.split(":")[0]).hidden = false;
                }
            };
            xmlhttp.open("GET", "../php/getintlotnodetails.php?intlotno=" + document.getElementById("intlotno").value, true);
            xmlhttp.send();
        }
    });

</script>