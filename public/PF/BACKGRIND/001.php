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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req001" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Size: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req001" id="wsize" name="wsize">
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
                                                        <select class="form-control req001" id="wcondition" name="wcondition">
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
                                                        <select class="form-control req001" id="wtype" name="wtype">
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
                                                        <input type="text" id="wtypeothers" name="wtypeothers"  class="form-control input-sm 001" style="text-transform:uppercase" disabled>
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
                                                            <option value="N/A">N/A</option>
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
                                                            <option value="N/A">N/A</option>
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
    </div>
    <br/>
    <div class="card border-left-danger">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4" id="rej001">
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <h4>Add Reject logs</h4>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Wafer no: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="dwaferno001" name="dwaferno001"  class="form-control input-sm rej001">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Defect call-out: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="ddetails001" name="ddetails001"  class="form-control input-sm rej001">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Defect quantity: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="number" id="dqty001" name="dqty001"  class="form-control input-sm rej001">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Remarks: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="dremarks001" name="dremarks001"  class="form-control input-sm rej001">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <button type="button" class="btn btn-danger" id="btnAddDefect001" name = "btnAddDefect001">Add Reject</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="col-lg-4" id="it">
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <h4>Add Initial Thickness</h4>
                            <p>(µm - microns)</p>
                            <br/>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="initialthicknesscheck">
                                <label class="form-check-label" for="initialthicknesscheck">
                                    N/A:
                                </label>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Wafer no: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="initialthicknesswaferno" name="initialthicknesswaferno"  class="form-control input-sm it">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 1: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="initialthicknessp1" name="initialthicknessp1"  class="form-control input-sm it">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 2: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="initialthicknessp2" name="initialthicknessp2"  class="form-control input-sm it">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 3: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="initialthicknessp3" name="initialthicknessp3"  class="form-control input-sm it">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 4: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="initialthicknessp4" name="initialthicknessp4"  class="form-control input-sm it">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 5: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="initialthicknessp5" name="initialthicknessp5"  class="form-control input-sm it">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <button type="button" class="btn btn-info it" id="btnAddInitialThickness" name = "btnAddInitialThickness">Add InitialThickness</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="col-lg-4" id="idh">
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <h4>Add Ink Dot Height</h4>
                            <p>(µm - microns)</p>
                            <p>25um max for Wafer Thickness ≥ 11 mils (279.4um)</p>
                            <p>15um max for Wafer Thickness < 11 mils (279.4um)</p>
                            <br/>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="inkdotheightcheck">
                                <label class="form-check-label" for="inkdotheightcheck">
                                    N/A:
                                </label>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Wafer no: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="inkdotheightwaferno" name="inkdotheightwaferno"  class="form-control input-sm idh">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 1: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="inkdotheightp1" name="inkdotheightp1"  class="form-control input-sm idh">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 2: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="inkdotheightp2" name="inkdotheightp2"  class="form-control input-sm idh">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 3: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="inkdotheightp3" name="inkdotheightp3"  class="form-control input-sm idh">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 4: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="inkdotheightp4" name="inkdotheightp4"  class="form-control input-sm idh">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 5: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="inkdotheightp5" name="inkdotheightp5"  class="form-control input-sm idh">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <button type="button" class="btn btn-info idh" id="btnAddInkDotHeight" name = "btnAddInkDotHeight">Add Ink Dot Height</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="col-lg-4" id="bph">
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <h4>Add Bump Height</h4>
                            <p>(µm - microns)</p>
                            <p>140μm max</p>
                            <br/>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="bumpheightcheck">
                                <label class="form-check-label" for="bumpheightcheck">
                                    N/A:
                                </label>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Wafer no: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="bumpheightwaferno" name="bumpheightwaferno"  class="form-control input-sm bph">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 1: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="bumpheightp1" name="bumpheightp1"  class="form-control input-sm bph">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 2: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="bumpheightp2" name="bumpheightp2"  class="form-control input-sm bph">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 3: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="bumpheightp3" name="bumpheightp3"  class="form-control input-sm bph">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 4: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="bumpheightp4" name="bumpheightp4"  class="form-control input-sm bph">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 5: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="bumpheightp5" name="bumpheightp5"  class="form-control input-sm bph">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <button type="button" class="btn btn-info bph" id="btnAddBumpHeight" name = "btnAddBumpHeight">Add Bump Height</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="col-lg-4" id="wrp">
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <h4>Add Warpage (µm - microns)</h4>
                            <p>4"(100mm) wafer: 60μm max</p>
                            <p>5"(125mm) wafer: 80μm max</p>
                            <p>6"(150mm) wafer: 100μm max</p>
                            <p>8"(200mm) wafer: 190μm max</p>
                            <br/>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="warpagecheck">
                                <label class="form-check-label" for="warpagecheck">
                                    N/A:
                                </label>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Wafer no: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="warpagewaferno" name="warpagewaferno"  class="form-control input-sm wrp">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 1: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="warpagep1" name="warpagep1"  class="form-control input-sm wrp">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 2: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="warpagep2" name="warpagep2"  class="form-control input-sm wrp">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 3: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="warpagep3" name="warpagep3"  class="form-control input-sm wrp">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 4: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="warpagep4" name="warpagep4"  class="form-control input-sm wrp">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>Point 5: </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="warpagep5" name="warpagep5"  class="form-control input-sm wrp">
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <button type="button" class="btn btn-info wrp" id="btnAddWarpage" name = "btnAddWarpage">Add Warpage</button>
                            </div>
                        </div>
                    </div>
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
    <div class="row"> 
        <h5>List of Initial Thickness</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblinitialthickness" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>Wafer no</th>
                            <th>Point 1</th>
                            <th>Point 2</th>
                            <th>Point 3</th>
                            <th>Point 4</th>
                            <th>Point 5</th>
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
    <div class="row"> 
        <h5>List of Ink Dot Height</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblinkdotheight" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>Wafer no</th>
                            <th>Point 1</th>
                            <th>Point 2</th>
                            <th>Point 3</th>
                            <th>Point 4</th>
                            <th>Point 5</th>
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
    <div class="row"> 
        <h5>List of Bump Height</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblbumpheight" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>Wafer no</th>
                            <th>Point 1</th>
                            <th>Point 2</th>
                            <th>Point 3</th>
                            <th>Point 4</th>
                            <th>Point 5</th>
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
    <div class="row"> 
        <h5>List of Warpage</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblwarpage" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>Wafer no</th>
                            <th>Point 1</th>
                            <th>Point 2</th>
                            <th>Point 3</th>
                            <th>Point 4</th>
                            <th>Point 5</th>
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
        <button type="button" class="btn btn-success" id="btnDone001" name = "btnDone001" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject001 > tbody tr').length;
        //checkRow(thickcount);
    }

    function removeInitialThickRow(row){
        
        $("#trit"+row).remove();
        initialthickcount = $('#tblinitialthickness > tbody tr').length;
        //$("#initialthicknesswaferno").focus();
        //checkRow(thickcount);
    }

    function removeInkDotHeightRow(row){
        
        $("#tridh"+row).remove();
        inkdotheightcount = $('#tblinkdotheight > tbody tr').length;
        //$("#initialthicknesswaferno").focus();
        //checkRow(thickcount);
    }

    function removeBumpHeightRow(row){
        
        $("#trbph"+row).remove();
        bumpheightcount = $('#tblbumpheight > tbody tr').length;
        //$("#initialthicknesswaferno").focus();
        //checkRow(thickcount);
    }

    function removeWarpageRow(row){
        
        $("#trwrp"+row).remove();
        warpagecount = $('#tblwarpage> tbody tr').length;
        //$("#initialthicknesswaferno").focus();
        //checkRow(thickcount);
    }

    //Add Initial Thickness

    $('#btnAddInitialThickness').click(function(event) {
       
        if($('#initialthicknesswaferno').val()== "" || $('#initialthicknessp1').val()== "" || $('#initialthicknessp2').val()== "" || $('#initialthicknessp3').val()== "" || $('#initialthicknessp4').val()== "" || $('#initialthicknessp5').val()== "")
        {
            document.getElementById('it').scrollIntoView();
            var rejval = document.getElementsByClassName("it");
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
                title: "Please complete Initial Thickness details!",
                closeOnClickOutside: false,
            });
            $('button.swal-button').click(function(event){$("#initialthicknesswaferno").focus();});
            return false;
        }

        if(parseInt($('#wqty').val()) > 1)
        {
            if(initialthickcount > 1)
            {
                swal("error!",{
                icon: "error",
                title: "Initial Thickness input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#initialthicknesswaferno").focus();});
                return false;
            }
            
        }

        if(parseInt($('#wqty').val())  <= 1 )
        {
            //alert(thickcount)
            if(initialthickcount > 0)
            {
                swal("error!",{
                icon: "error",
                title: "Initial Thickness input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#initialthicknesswaferno").focus();});
                return false;
            }
            
        }
        $('#tblinitialthickness > tbody').append('<tr id="trit'+initialthickcount+'">'+
                                    '<td><input type="hidden" id = "sinitialthicknesswaferno[]"  name="sinitialthicknesswaferno[]" value="'+$('#initialthicknesswaferno').val()+'">'+$('#initialthicknesswaferno').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinitialthicknessp1[]"  name="sinitialthicknessp1[]" value="'+$('#initialthicknessp1').val()+'">'+$('#initialthicknessp1').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinitialthicknessp2[]"  name="sinitialthicknessp2[]" value="'+$('#initialthicknessp2').val()+'">'+$('#initialthicknessp2').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinitialthicknessp3[]"  name="sinitialthicknessp3[]" value="'+$('#initialthicknessp3').val()+'">'+$('#initialthicknessp3').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinitialthicknessp4[]"  name="sinitialthicknessp4[]" value="'+$('#initialthicknessp4').val()+'">'+$('#initialthicknessp4').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinitialthicknessp5[]"  name="sinitialthicknessp5[]" value="'+$('#initialthicknessp5').val()+'">'+$('#initialthicknessp5').val()+'</td>'+
                                    '<td><button type="button" onclick="removeInitialThickRow('+initialthickcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        initialthickcount++;
        $('#initialthicknesswaferno').val("");
        $('#initialthicknessp1').val("");
        $('#initialthicknessp2').val("");
        $('#initialthicknessp3').val("");
        $('#initialthicknessp4').val("");
        $('#initialthicknessp5').val("");
        $("#initialthicknesswaferno").focus();
        //checkRow(thickcount);
        $(".it").css({"border-color": "#d1d3e2"});
        swal("success!",{
            icon: "success",
            title: "Initial Thickness details successfully added!",
            closeOnClickOutside: false,
        });
            
    });

    //Add Ink dot height

    $('#btnAddInkDotHeight').click(function(event) {
       
        if($('#inkdotheightwaferno').val()== "" || $('#inkdotheightp1').val()== "" || $('#inkdotheightp2').val()== "" || $('#inkdotheightp3').val()== "" || $('#inkdotheightp4').val()== "" || $('#inkdotheightp5').val()== "")
        {
            document.getElementById('idh').scrollIntoView();
            var rejval = document.getElementsByClassName("idh");
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
                title: "Please complete Ink Dot Height details!",
                closeOnClickOutside: false,
            });
            $('button.swal-button').click(function(event){$("#inkdotheightwaferno").focus();});
            return false;
        }

        if(parseInt($('#wqty').val()) > 1)
        {
            if(inkdotheightcount > 1)
            {
                swal("error!",{
                icon: "error",
                title: "Ink Dot Height input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#inkdotheightwaferno").focus();});
                return false;
            }
            
        }

        if(parseInt($('#wqty').val())  <= 1 )
        {
            //alert(thickcount)
            if(inkdotheightcount > 0)
            {
                swal("error!",{
                icon: "error",
                title: "Ink Dot Height input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#inkdotheightwaferno").focus();});
                return false;
            }
            
        }
        $('#tblinkdotheight > tbody').append('<tr id="tridh'+inkdotheightcount+'">'+
                                    '<td><input type="hidden" id = "sinkdotheightwaferno[]"  name="sinkdotheightwaferno[]" value="'+$('#inkdotheightwaferno').val()+'">'+$('#inkdotheightwaferno').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinkdotheightp1[]"  name="sinkdotheightp1[]" value="'+$('#inkdotheightp1').val()+'">'+$('#inkdotheightp1').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinkdotheightp2[]"  name="sinkdotheightp2[]" value="'+$('#inkdotheightp2').val()+'">'+$('#inkdotheightp2').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinkdotheightp3[]"  name="sinkdotheightp3[]" value="'+$('#inkdotheightp3').val()+'">'+$('#inkdotheightp3').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinkdotheightp4[]"  name="sinkdotheightp4[]" value="'+$('#inkdotheightp4').val()+'">'+$('#inkdotheightp4').val()+'</td>'+
                                    '<td><input type="hidden" id = "sinkdotheightp5[]"  name="sinkdotheightp5[]" value="'+$('#inkdotheightp5').val()+'">'+$('#inkdotheightp5').val()+'</td>'+
                                    '<td><button type="button" onclick="removeInkDotHeightRow('+inkdotheightcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        inkdotheightcount++;
        $('#inkdotheightwaferno').val("");
        $('#inkdotheightp1').val("");
        $('#inkdotheightp2').val("");
        $('#inkdotheightp3').val("");
        $('#inkdotheightp4').val("");
        $('#inkdotheightp5').val("");
        $("#inkdotheightwaferno").focus();
        //checkRow(thickcount);
        $(".idh").css({"border-color": "#d1d3e2"});
        swal("success!",{
            icon: "success",
            title: "Ink Dot Height details successfully added!",
            closeOnClickOutside: false,
        });
            
    });

    // Add Bump Height

    $('#btnAddBumpHeight').click(function(event) {
       
        if($('#bumpheightwaferno').val()== "" || $('#bumpheightp1').val()== "" || $('#bumpheightp2').val()== "" || $('#bumpheightp3').val()== "" || $('#bumpheightp4').val()== "" || $('#bumpheightp5').val()== "")
        {
            document.getElementById('bph').scrollIntoView();
            var rejval = document.getElementsByClassName("bph");
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
                title: "Please complete Bump Height details!",
                closeOnClickOutside: false,
            });
            $('button.swal-button').click(function(event){$("#bumpheightwaferno").focus();});
            return false;
        }

        if(parseInt($('#wqty').val()) > 1)
        {
            if(bumpheightcount > 1)
            {
                swal("error!",{
                icon: "error",
                title: "Bump Height input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#bumpheightwaferno").focus();});
                return false;
            }
            
        }

        if(parseInt($('#wqty').val())  <= 1 )
        {
            //alert(thickcount)
            if(bumpheightcount > 0)
            {
                swal("error!",{
                icon: "error",
                title: "Bump Height input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#bumpheightwaferno").focus();});
                return false;
            }
            
        }
        $('#tblbumpheight > tbody').append('<tr id="trbph'+bumpheightcount+'">'+
                                    '<td><input type="hidden" id = "sbumpheightwaferno[]"  name="sbumpheightwaferno[]" value="'+$('#bumpheightwaferno').val()+'">'+$('#bumpheightwaferno').val()+'</td>'+
                                    '<td><input type="hidden" id = "sbumpheightp1[]"  name="sbumpheightp1[]" value="'+$('#bumpheightp1').val()+'">'+$('#bumpheightp1').val()+'</td>'+
                                    '<td><input type="hidden" id = "sbumpheightp2[]"  name="sbumpheightp2[]" value="'+$('#bumpheightp2').val()+'">'+$('#bumpheightp2').val()+'</td>'+
                                    '<td><input type="hidden" id = "sbumpheightp3[]"  name="sbumpheightp3[]" value="'+$('#bumpheightp3').val()+'">'+$('#bumpheightp3').val()+'</td>'+
                                    '<td><input type="hidden" id = "sbumpheightp4[]"  name="sbumpheightp4[]" value="'+$('#bumpheightp4').val()+'">'+$('#bumpheightp4').val()+'</td>'+
                                    '<td><input type="hidden" id = "sbumpheightp5[]"  name="sbumpheightp5[]" value="'+$('#bumpheightp5').val()+'">'+$('#bumpheightp5').val()+'</td>'+
                                    '<td><button type="button" onclick="removeBumpHeightRow('+bumpheightcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        bumpheightcount++;
        $('#bumpheightwaferno').val("");
        $('#bumpheightp1').val("");
        $('#bumpheightp2').val("");
        $('#bumpheightp3').val("");
        $('#bumpheightp4').val("");
        $('#bumpheightp5').val("");
        $("#bumpheightwaferno").focus();
        //checkRow(thickcount);
        $(".bph").css({"border-color": "#d1d3e2"});
        swal("success!",{
            icon: "success",
            title: "Bump Height details successfully added!",
            closeOnClickOutside: false,
        });
            
    });

    // Add Warpage

    $('#btnAddWarpage').click(function(event) {
       
        if($('#warpagewaferno').val()== "" || $('#warpagep1').val()== "" || $('#warpagep2').val()== "" || $('#warpagep3').val()== "" || $('#warpagep4').val()== "" || $('#warpagep5').val()== "")
        {
            document.getElementById('wrp').scrollIntoView();
            var rejval = document.getElementsByClassName("wrp");
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
                title: "Please complete Warpage details!",
                closeOnClickOutside: false,
            });
            $('button.swal-button').click(function(event){$("#warpagewaferno").focus();});
            return false;
        }

        if(parseInt($('#wqty').val()) > 1)
        {
            if(warpagecount > 1)
            {
                swal("error!",{
                icon: "error",
                title: "Warpage input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#warpagewaferno").focus();});
                return false;
            }
            
        }

        if(parseInt($('#wqty').val())  <= 1 )
        {
            //alert(thickcount)
            if(warpagecount > 0)
            {
                swal("error!",{
                icon: "error",
                title: "Warpage input reached its maximum limit!",
                closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#warpagewaferno").focus();});
                return false;
            }
            
        }
        $('#tblwarpage > tbody').append('<tr id="trwrp'+warpagecount+'">'+
                                    '<td><input type="hidden" id = "swarpagewaferno[]"  name="swarpagewaferno[]" value="'+$('#warpagewaferno').val()+'">'+$('#warpagewaferno').val()+'</td>'+
                                    '<td><input type="hidden" id = "swarpagep1[]"  name="swarpagep1[]" value="'+$('#warpagep1').val()+'">'+$('#warpagep1').val()+'</td>'+
                                    '<td><input type="hidden" id = "swarpagep2[]"  name="swarpagep2[]" value="'+$('#warpagep2').val()+'">'+$('#warpagep2').val()+'</td>'+
                                    '<td><input type="hidden" id = "swarpagep3[]"  name="swarpagep3[]" value="'+$('#warpagep3').val()+'">'+$('#warpagep3').val()+'</td>'+
                                    '<td><input type="hidden" id = "swarpagep4[]"  name="swarpagep4[]" value="'+$('#warpagep4').val()+'">'+$('#warpagep4').val()+'</td>'+
                                    '<td><input type="hidden" id = "swarpagep5[]"  name="swarpagep5[]" value="'+$('#warpagep5').val()+'">'+$('#warpagep5').val()+'</td>'+
                                    '<td><button type="button" onclick="removeWarpageRow('+warpagecount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        warpagecount++;
        $('#warpagewaferno').val("");
        $('#warpagep1').val("");
        $('#warpagep2').val("");
        $('#warpagep3').val("");
        $('#warpagep4').val("");
        $('#warpagep5').val("");
        $("#warpagewaferno").focus();
        //checkRow(thickcount);
        $(".wrp").css({"border-color": "#d1d3e2"});
        swal("success!",{
            icon: "success",
            title: "Warpage details successfully added!",
            closeOnClickOutside: false,
        });
            
    });

    $('#btnDone001').click(function(event) {

        //Reject

        var sdwaferno = $('input[name="sdwaferno001[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails001[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty001[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks001[]"]').map(function () {
        return this.value; }).get();

        var sinitialthickness = $('input[name="sinitialthickness[]"]').map(function () {
        return this.value; }).get();

        //Initial thickness

        var sinitialthicknesswaferno = $('input[name="sinitialthicknesswaferno[]"]').map(function () {
        return this.value; }).get();

        var sinitialthicknessp1 = $('input[name="sinitialthicknessp1[]"]').map(function () {
        return this.value; }).get();

        var sinitialthicknessp2 = $('input[name="sinitialthicknessp2[]"]').map(function () {
        return this.value; }).get();

        var sinitialthicknessp3 = $('input[name="sinitialthicknessp3[]"]').map(function () {
        return this.value; }).get();

        var sinitialthicknessp4 = $('input[name="sinitialthicknessp4[]"]').map(function () {
        return this.value; }).get();

        var sinitialthicknessp5 = $('input[name="sinitialthicknessp5[]"]').map(function () {
        return this.value; }).get();

        //Ink Dot Height

        var sinkdotheightwaferno = $('input[name="sinkdotheightwaferno[]"]').map(function () {
        return this.value; }).get();

        var sinkdotheightp1 = $('input[name="sinkdotheightp1[]"]').map(function () {
        return this.value; }).get();

        var sinkdotheightp2 = $('input[name="sinkdotheightp2[]"]').map(function () {
        return this.value; }).get();

        var sinkdotheightp3 = $('input[name="sinkdotheightp3[]"]').map(function () {
        return this.value; }).get();

        var sinkdotheightp4 = $('input[name="sinkdotheightp4[]"]').map(function () {
        return this.value; }).get();

        var sinkdotheightp5 = $('input[name="sinkdotheightp5[]"]').map(function () {
        return this.value; }).get();

        //Bump Height

        var sbumpheightwaferno = $('input[name="sbumpheightwaferno[]"]').map(function () {
        return this.value; }).get();

        var sbumpheightp1 = $('input[name="sbumpheightp1[]"]').map(function () {
        return this.value; }).get();

        var sbumpheightp2 = $('input[name="sbumpheightp2[]"]').map(function () {
        return this.value; }).get();

        var sbumpheightp3 = $('input[name="sbumpheightp3[]"]').map(function () {
        return this.value; }).get();

        var sbumpheightp4 = $('input[name="sbumpheightp4[]"]').map(function () {
        return this.value; }).get();

        var sbumpheightp5 = $('input[name="sbumpheightp5[]"]').map(function () {
        return this.value; }).get();

        //Warpage

        var swarpagewaferno = $('input[name="swarpagewaferno[]"]').map(function () {
        return this.value; }).get();

        var swarpagep1 = $('input[name="swarpagep1[]"]').map(function () {
        return this.value; }).get();

        var swarpagep2 = $('input[name="swarpagep2[]"]').map(function () {
        return this.value; }).get();

        var swarpagep3 = $('input[name="swarpagep3[]"]').map(function () {
        return this.value; }).get();

        var swarpagep4 = $('input[name="swarpagep4[]"]').map(function () {
        return this.value; }).get();

        var swarpagep5 = $('input[name="swarpagep5[]"]').map(function () {
        return this.value; }).get();

        //
        
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

        //Check Initial Thickness
        if($("#initialthicknesscheck").is(":not(:checked)"))
        {
            if(initialthickcount == 0)
            {
                $(".it").css({"border-color": "#FF0000"});
                document.getElementById('it').scrollIntoView();
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Initial Thickness!",
                    closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#initialthicknesswaferno").focus();});
                return false;
            }
            if(parseInt($('#wqty').val()) > 1)
            {
                if(initialthickcount < 2)
                {
                    $(".it").css({"border-color": "#FF0000"});
                    document.getElementById('it').scrollIntoView();
                    swal("missing input!",{
                        icon: "warning",
                        title: "Please input Initial Thickness!",
                        closeOnClickOutside: false,
                    });
                    $('button.swal-button').click(function(event){$("#initialthicknesswaferno").focus();});
                    return false;
                }
            }
        }
        
        // Check Ink Dot Height

        if($("#inkdotheightcheck").is(":not(:checked)"))
        {
            if(inkdotheightcount == 0)
            {
                $(".idh").css({"border-color": "#FF0000"});
                document.getElementById('idh').scrollIntoView();
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Ink Dot Height!",
                    closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#inkdotheightwaferno").focus();});
                return false;
            }
            if(parseInt($('#wqty').val()) > 1)
            {
                if(inkdotheightcount < 2)
                {
                    $(".idh").css({"border-color": "#FF0000"});
                    document.getElementById('idh').scrollIntoView();
                    swal("missing input!",{
                        icon: "warning",
                        title: "Please input Ink Dot Height!",
                        closeOnClickOutside: false,
                    });
                    $('button.swal-button').click(function(event){$("#inkdotheightwaferno").focus();});
                    return false;
                }
            }
        }

        // Check Bump Height
        
        if($("#bumpheightcheck").is(":not(:checked)"))
        {
            if(bumpheightcount == 0)
            {
                $(".bph").css({"border-color": "#FF0000"});
                document.getElementById('bph').scrollIntoView();
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Bump Height!",
                    closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#bumpheightwaferno").focus();});
                return false;
            }
            if(parseInt($('#wqty').val()) > 1)
            {
                if(bumpheightcount < 2)
                {
                    $(".bph").css({"border-color": "#FF0000"});
                    document.getElementById('bph').scrollIntoView();
                    swal("missing input!",{
                        icon: "warning",
                        title: "Please input Bump Height!",
                        closeOnClickOutside: false,
                    });
                    $('button.swal-button').click(function(event){$("#bumpheightwaferno").focus();});
                    return false;
                }
            }
        }

        // Check Warpage

        if($("#warpagecheck").is(":not(:checked)"))
        {
            if(warpagecount == 0)
            {
                $(".wrp").css({"border-color": "#FF0000"});
                document.getElementById('wrp').scrollIntoView();
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Warpage!",
                    closeOnClickOutside: false,
                });
                $('button.swal-button').click(function(event){$("#warpagewaferno").focus();});
                return false;
            }
            if(parseInt($('#wqty').val()) > 1 && $("#warpagecheck").is(":not(:checked)"))
            {
                if(warpagecount < 2)
                {
                    $(".wrp").css({"border-color": "#FF0000"});
                    document.getElementById('wrp').scrollIntoView();
                    swal("missing input!",{
                        icon: "warning",
                        title: "Please input Warpage!",
                        closeOnClickOutside: false,
                    });
                    $('button.swal-button').click(function(event){$("#warpagewaferno").focus();});
                    return false;
                }
            }
        }

        //

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

        
        
        xmlhttp.open("GET", "../php/addefai001.php?data=" + JSON.stringify(data)
        +"&wtypeothers="+$("#wtypeothers.001").val()
        +"&intlotno="+document.getElementById("intlotno").value
        + "&sinitialthicknesswaferno="+JSON.stringify(sinitialthicknesswaferno) 
        + "&sinitialthicknessp1="+JSON.stringify(sinitialthicknessp1)
        + "&sinitialthicknessp2="+JSON.stringify(sinitialthicknessp2)
        + "&sinitialthicknessp3="+JSON.stringify(sinitialthicknessp3)
        + "&sinitialthicknessp4="+JSON.stringify(sinitialthicknessp4)
        + "&sinitialthicknessp5="+JSON.stringify(sinitialthicknessp5) 
        + "&sinkdotheightwaferno="+JSON.stringify(sinkdotheightwaferno) 
        + "&sinkdotheightp1="+JSON.stringify(sinkdotheightp1)
        + "&sinkdotheightp2="+JSON.stringify(sinkdotheightp2)
        + "&sinkdotheightp3="+JSON.stringify(sinkdotheightp3)
        + "&sinkdotheightp4="+JSON.stringify(sinkdotheightp4)
        + "&sinkdotheightp5="+JSON.stringify(sinkdotheightp5)
        + "&sbumpheightwaferno="+JSON.stringify(sbumpheightwaferno) 
        + "&sbumpheightp1="+JSON.stringify(sbumpheightp1)
        + "&sbumpheightp2="+JSON.stringify(sbumpheightp2)
        + "&sbumpheightp3="+JSON.stringify(sbumpheightp3)
        + "&sbumpheightp4="+JSON.stringify(sbumpheightp4)
        + "&sbumpheightp5="+JSON.stringify(sbumpheightp5)
        + "&swarpagewaferno="+JSON.stringify(swarpagewaferno) 
        + "&swarpagep1="+JSON.stringify(swarpagep1)
        + "&swarpagep2="+JSON.stringify(swarpagep2)
        + "&swarpagep3="+JSON.stringify(swarpagep3)
        + "&swarpagep4="+JSON.stringify(swarpagep4)
        + "&swarpagep5="+JSON.stringify(swarpagep5)
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks), true);
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

    $( "#btnAddDefect001" ).click(function() {

    //alert(thickcount)


    var sdqty = $('input[name="sdqty001[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
    if((parseInt(dtotal) + parseInt($('#dqty001').val())) > parseInt(document.getElementById("wqty").value))
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
    if($('#dwaferno001').val()== "" ||  $('#dqty001').val()== "" ||  $('#ddetails001').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej001').scrollIntoView();
        var rejval = document.getElementsByClassName("rej001");
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
        $('#tblreject001 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno001[]"  name="sdwaferno001[]" value="'+$('#dwaferno001').val()+'">'+$('#dwaferno001').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails001[]"  name="sddetails001[]" value="'+$('#ddetails001').val()+'">'+$('#ddetails001').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty001[]"  name="sdqty001[]" value="'+$('#dqty001').val()+'">'+$('#dqty001').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks001[]"  name="sdremarks001[]" value="'+$('#dremarks001').val()+'">'+$('#dremarks001').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno001').val("");
        $('#ddetails001').val("");
        $('#dqty001').val("");
        $('#dremarks001').val("");
        //checkRow(thickcount);
        
        /* document.getElementById("dsuccess").innerHTML = "Reject details successfully added!";
        document.getElementById("derror").hidden = true;
        document.getElementById("dsuccess").hidden = false; */
        swal("success!",{
            icon: "success",
            title: "Reject details successfully added!",
            closeOnClickOutside: false,
        });
        dtotal = sdqty.reduce(function(a, b) { return a + b; }, 0);
        parseInt(dtotal) += parseInt($('#dqty001').val());
    }

    });

    $('#initialthicknesscheck').click(function() {
        if($("#initialthicknesscheck").is(":checked"))
        {
            $(".it").attr("disabled","disabled");
            $(".it").css({"border-color": "#d1d3e2"});
        }
        else if($("#initialthicknesscheck").is(":not(:checked)")){
            $(".it").removeAttr("disabled");
        }
    });

    $('#inkdotheightcheck').click(function() {
        if($("#inkdotheightcheck").is(":checked"))
        {
            $(".idh").attr("disabled","disabled");
            $(".idh").css({"border-color": "#d1d3e2"});
        }
        else if($("#inkdotheightcheck").is(":not(:checked)")){
            $(".idh").removeAttr("disabled");
        }
    });

    $('#bumpheightcheck').click(function() {
        if($("#bumpheightcheck").is(":checked"))
        {
            $(".bph").attr("disabled","disabled");
            $(".bph").css({"border-color": "#d1d3e2"});
        }
        else if($("#bumpheightcheck").is(":not(:checked)")){
            $(".bph").removeAttr("disabled");
        }
    });

    $('#warpagecheck').click(function() {
        if($("#warpagecheck").is(":checked"))
        {
            $(".wrp").attr("disabled","disabled");
            $(".wrp").css({"border-color": "#d1d3e2"});
        }
        else if($("#warpagecheck").is(":not(:checked)")){
            $(".wrp").removeAttr("disabled");
        }
    });

    
</script>