<div id="007" class="efai" hidden>
    <h3>Mount station</h3>
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
                                                        <label>Mount Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req007" id="mounttype" name="mounttype">
                                                            <option value=""></option>
                                                            <option value="Mount">Mount</option>
                                                            <option value="Vacuum Mount">Vacuum Mount</option>
                                                            <option value="Manual Mount">Manual Mount</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Machine No: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req007 mount vacuum manual" id="machine" name="machine">
                                                        <option value=""></option>
                                                        <?php 
                                                        include_once("../classes/machine.php");
                                                        $Machine = Machine::GetMachineStation('SAW','007');
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
                                                        <select class="form-control req007 mount vacuum manual" id="faicat" name="faicat">
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
                                                        <select class="form-control req007 mount vacuum" id="wswr" name="wswr">
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req007 mount vacuum" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>Wafer Type: *</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control req007 mount vacuum manual" id="wtype" name="wtype">
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
                                                        <input type="text" id="wtypeothers" name="wtypeothers"  class="form-control input-sm 007" style="text-transform:uppercase" disabled>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required: Wafer Thickess (in microns): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="requiredwaferthickness" name="requiredwaferthickness"  class="form-control input-sm req007 mount vacuum" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Actual: Wafer Thickess (in microns): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="actualwaferthickness" name="actualwaferthickness"  class="form-control input-sm req007 mount" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
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
                                                        <label>Required: Wafer Orientation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req007 mount vacuum manual" id="requiredwaferorientation" name="requiredwaferorientation">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
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
                                                        <label>Actual: Wafer Orientation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req007 mount vacuum manual" id="actualwaferorientation" name="actualwaferorientation">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
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
                                                        <label>Process mode: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req007 mount vacuum" id="processmode" name="processmode">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Auto">Auto</option>
                                                            <option value="Manual">Manual</option>
                                                            <option value="Semi-auto">Semi-auto</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck Table Change? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req007 mount vacuum" id="chucktablechange" name="chucktablechange">
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
                                                        <label>Chuck Plate Clean? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req007 mount vacuum manual" id="chuckplateclean" name="chuckplateclean">
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
                                                        <label>Chuck Table Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req007 mount vacuum manual" id="chucktabletype" name="chucktabletype">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Contact">Contact</option>
                                                            <option value="Non-Contact">Non-Contact</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck Table Temperature(<b>in ℃</b>): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="chucktabletemp" name="chucktabletemp"  class="form-control input-sm req007 mount vacuum manual" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck Table size *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req007 mount vacuum manual" id="chucktablesize" name="chucktablesize">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="4 inch">4 inch</option>
                                                            <option value="5 inch">5 inch</option>
                                                            <option value="6 inch">6 inch</option>
                                                            <option value="8 inch">8 inch</option>
                                                            <option value="12 inch">12 inch</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Roller pressure(3-5 bar or 0.3to 0.5 Mpa or 3.06-5.09 kg/cm2) *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="rollerpressure" name="rollerpressure"  class="form-control input-sm req007 manual" style="text-transform:uppercase">
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
                                                            <label>Dicing Tape Change? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req007 mount vacuum manual" id="dicingtapechange" name="dicingtapechange">
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
                                                            <label>Dicing Tape Type? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req007 mount vacuum manual" id="dicingtapetype" name="dicingtapetype">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="UV">UV</option>
                                                                <option value="Non-UV">Non-UV</option>
                                                                <option value="2-in-1 UV">2-in-1 UV</option>
                                                                <option value="2-in-1 Non-UV">2-in-1 Non-UV</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape size *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req007 mount vacuum manual" id="dicingtapesize" name="dicingtapesize">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="6 inch">6 inch</option>
                                                                <option value="8 inch">8 inch</option>
                                                                <option value="12 inch">12 inch</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape Installation: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req007 mount vacuum manual" id="dicingtapeinstallation" name="dicingtapeinstallation">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="Ok">Ok</option>
                                                                <option value="Not Ok">Not Ok</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape used: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="dicingtapeused" name="dicingtapeused"  class="form-control input-sm req007 mount vacuum manual" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape Expiration: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="date" id="dicingtapeexp" name="dicingtapeexp"  class="form-control input-sm req007 mount vacuum manual" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Dicing Tape Lot no.: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="dicingtapelotno" name="dicingtapelotno"  class="form-control input-sm req007 mount vacuum manual" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Blade Change? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req007 mount vacuum" id="bladechange" name="bladechange">
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
                                                            <label>Blade Count <span id="007bladecount"></span>: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="number" id="bladecount" name="bladecount"  class="form-control input-sm req007 mount vacuum" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Blade Position(inch) *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req007 mount vacuum" id="bladeposition" name="bladeposition">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="6 inch">6 inch</option>
                                                                <option value="8 inch">8 inch</option>
                                                                <option value="12 inch">12 inch</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Is ring frame used clean? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req007 mount vacuum" id="ringframeclean" name="ringframeclean">
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
                                                            <label>Is lot requiring pre-heat process? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req007 mount" id="lotpreheatprocess" name="lotpreheatprocess">
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
                                                            <label>Required: Table Temperature(<b>in ℃</b>): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="number" id="tabletemprequired" name="tabletemprequired"  class="form-control input-sm req007 mount" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Actual: Table Temperature(<b>in ℃</b>): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="number" id="tabletempactual" name="tabletempactual"  class="form-control input-sm req007 mount" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Pre-heating time(optional): </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="number" id="preheatingtime" name="preheatingtime"  class="form-control input-sm" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Main Air Pressure/Bars/0.5 kPa (min): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="number" id="mainairpressure" name="mainairpressure"  class="form-control input-sm req007 vacuum" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Set-up Wafer result: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req007 vacuum manual" id="setupwafer" name="setupwafer">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="Ok">Ok</option>
                                                                <option value="Not Ok">Not Ok</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Technician Employee: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="techemp" name="techemp"  class="form-control input-sm req007 mount vacuum manual">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Quality Control Employee: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="qcemp" name="qcemp"  class="form-control input-sm req007 mount vacuum manual">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Remarks: * </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <textarea class="form-control req007 mount vacuum manual" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                            <input type="text" id="dwaferno007" name="dwaferno007"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails007" name="ddetails007"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty007" name="dqty007"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks007" name="dremarks007"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-danger" id="btnAddDefect007" name = "btnAddDefect007">Add Reject</button>
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
                    <table class="table table-bordered" id="tblreject007" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-outline-success" id="btnDone007" name = "btnDone007" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject007 > tbody tr').length;
        $("#dwaferno007").focus();
        //checkRow(tblcount);
    }

    $('#btnDone007').click(function(event) {

        var sdwaferno = $('input[name="sdwaferno007[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails007[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty007[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks007[]"]').map(function () {
        return this.value; }).get();

        
        var val = document.getElementsByClassName("req007");
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
            document.getElementById('007').scrollIntoView();
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

        
        
        xmlhttp.open("GET", "../php/addefai007.php?data=" + JSON.stringify(data)
        + "&wtypeothers="+$("#wtypeothers.007").val()
        + "&preheatingtime="+$("#preheatingtime").val()
        + "&intlotno="+document.getElementById("intlotno").value
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks), true);
        xmlhttp.send();
    });

    $('#wtype.req007').change(function (){
        
        if($(this).val() == 'others')
        {
            
            $("#wtypeothers.007").removeAttr("disabled");
            $("#wtypeothers.007").focus();
        }
        else
        {
            $("#wtypeothers.007").val('');
            $("#wtypeothers.007").attr("disabled","disabled");
        }
        
    });

    $('#mounttype.req007').change(function (){
        
        //console.log($(this).val())
        $('.form-control').css({"border-color": "#d1d3e2"})
        $('input[name*="wtypeothers"]').attr("disabled",true);
        if($(this).val() == 'Manual Mount')
        {
            
            $(".mount,.vacuum").attr("disabled",true);
            
            $("input.mount[type=text],input.vacuum[type=text]").val("N/A");
            $("input.mount[type=password],input.vacuum[type=password]").val("N/A");
            $("input.mount[type=date],input.vacuum[type=date]").val("1900-01-01");
            $("select.mount,select.vacuum").val("N/A");
            $("input.mount[type=number],input.vacuum[type=number]").val(0);
            $(".manual").attr("disabled",false);
            $(".manual").val("");
        }
        else if($(this).val() == 'Vacuum Mount')
        {
            $(".mount,.manual").attr("disabled",true);
            
            $("input.mount[type=text],input.manual[type=text]").val("N/A");
            $("input.mount[type=password],input.manual[type=password]").val("N/A");
            $("input.mount[type=date],input.manual[type=date]").val("1900-01-01");
            $("select.mount,select.manual").val("N/A");
            $("input.mount[type=number],input.manual[type=number]").val(0);
            $(".vacuum").attr("disabled",false);
            $(".vacuum").val("");
        }
        else if($(this).val() == 'Mount')
        {
            $(".vacuum,.manual").attr("disabled",true);
            
            $("input.vacuum[type=text],input.manual[type=text]").val("N/A");
            $("input.vacuum[type=password],input.manual[type=password]").val("N/A");
            $("input.vacuum[type=date],input.manual[type=date]").val("1900-01-01");
            $("select.vacuum,select.manual").val("N/A");
            $("input.vacuum[type=number],input.manual[type=number]").val(0);
            $(".mount").attr("disabled",false);
            $(".mount").val("");
        }

    });

    $( "#btnAddDefect007" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty007[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
    if((parseInt(dtotal) + parseInt($('#dqty007').val())) > parseInt(document.getElementById("currqty").value))
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
    if($('#dwaferno007').val()== "" ||  $('#dqty007').val()== "" ||  $('#ddetails007').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej007').scrollIntoView();
        var rejval = document.getElementsByClassName("rej007");
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
        $('#tblreject007 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno007[]"  name="sdwaferno007[]" value="'+$('#dwaferno007').val()+'">'+$('#dwaferno007').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails007[]"  name="sddetails007[]" value="'+$('#ddetails007').val()+'">'+$('#ddetails007').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty007[]"  name="sdqty007[]" value="'+$('#dqty007').val()+'">'+$('#dqty007').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks007[]"  name="sdremarks007[]" value="'+$('#dremarks007').val()+'">'+$('#dremarks007').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno007').val("");
        $('#ddetails007').val("");
        $('#dqty007').val("");
        $('#dremarks007').val("");
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
        parseInt(dtotal) += parseInt($('#dqty007').val());
    }

    });
    
</script>