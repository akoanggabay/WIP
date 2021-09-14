<h1 class="h3 mb-4 text-gray-900">Packing</h1>
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

                                        
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Internal Lot number: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="intlotno" name="intlotno"  class="form-control input-sm">
                                            </div>
                                        </div>
                                        <br/>
                                        
                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline-success" id="btnView" name = "btnView" onkeypress="if (event.keyCode == 13)  return false;">Generate ELTC</button>
                                            <button type="button" class="btn btn-outline-warning float-right" id="btnClear" name = "btnClear">Clear details</button>
                                        </div>
                                        
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
                                                        <label>Customer Lot no:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="custlotno" name="custlotno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Status:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="status" name="status"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Device no:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="deviceno" name="deviceno"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer original quantity:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="oqty" name=oqty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer current quantity:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="cqty" name="cqty"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Date start:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="datestart" name="datestart"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Ship back date:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="shipbackdate" name="shipbackdate"  class="form-control input-sm" value="" readonly><br>
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
                                                        <label>Wafer thickness:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wthick" name="wthick"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required thickness:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="rthick" name="rthick"  class="form-control input-sm" value="" readonly><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Process category:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="pcat" name="pcat"  class="form-control input-sm" value="" readonly><br>
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
<br/><br/>