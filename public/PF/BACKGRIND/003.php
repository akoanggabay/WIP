<div id="003" class="efai" hidden>
    <h3>Backgrind station</h3>
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
                                                        <select class="form-control req003" id="faicat" name="faicat">
                                                            <option value=""></option>
                                                            <option value="N/A" hidden>N/A</option>
                                                            <option value="Set-up">Set-up</option>
                                                            <option value="PSC">PSC</option>
                                                            <option value="Monitoring">Monitoring</option>
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
                                                        <select class="form-control req003" id="machine" name="machine">
                                                        <option value=""></option>
                                                        <?php 
                                                        include_once("../classes/machine.php");
                                                        $Machine = Machine::GetMachineStation('BACKGRIND','003');
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
                                                        <select class="form-control req003 su psc mon" id="wswr" name="wswr">
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
                                                        <label>SWR no: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req003 su psc mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Wafer Size: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req003 su" id="wsize" name="wsize">
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
                                                        <label>Program/Recipe no: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="recipeno" name="recipeno"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required Final Thickness (with BG tape): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wtaperequiredfinalthickness" name="wtaperequiredfinalthickness"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Initial Thickness (with BG Tape): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wtapeinitialthickness" name="wtapeinitialthickness"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Slotting on Cassette? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req003 su psc mon" id="slottingoncassette" name="slottingoncassette">
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
                                                        <label>Process mode: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req003 su psc" id="processmode" name="processmode">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Auto">Auto</option>
                                                            <option value="Manual">Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <h4 style="text-align:center;">Backgrind section</h4>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>BG Tape type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req003 su psc" id="bgtapetype" name="bgtapetype">
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
                                                        <label>BG Tape used: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bgtapeused" name="bgtapeused"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>BG Tape Thickness: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bgtapethickness" name="bgtapethickness"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>BG Tape Staged (from Taping to BG in hours < 14 hours): * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bgtapestaged" name="bgtapestaged"  class="form-control input-sm req003" readonly>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>DI Water Temp (Reqt : 25 +/- 3 deg C): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="diwatertemp" name="diwatertemp"  class="form-control input-sm req003 su psc">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Grinding wheel: * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="grindingwheelz1" name="grindingwheelz1"  class="form-control input-sm req003 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="grindingwheelz2" name="grindingwheelz2"  class="form-control input-sm req003 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Grinding wheel usable tooth (1000 um min): *</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="grindingwheelusabletoothz1" name="grindingwheelusabletoothz1"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="grindingwheelusabletoothz2" name="grindingwheelusabletoothz2"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
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
                                                <h4 style="text-align:center;">Backgrind Parameters</h4>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Air Cut (µm-microns): *</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="aircutz1" name="aircutz1"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="aircutz2" name="aircutz2"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Spindle RPM: *</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="spindlerpmz1" name="spindlerpmz1"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="spindlerpmz2" name="spindlerpmz2"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Feed rate (P1) (µm/sec): *</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedratep1z1" name="feedratep1z1"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedratep1z2" name="feedratep1z2"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Feed rate (P2) (µm/sec): *</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedratep2z1" name="feedratep2z1"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedratep2z2" name="feedratep2z2"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Feed rate (P3) (µm/sec): *</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedratep3z1" name="feedratep3z1"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedratep3z2" name="feedratep3z2"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Chuck Table Speed (P1) (rpm): *</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="chucktableseedp1z1" name="chucktableseedp1z1"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="chucktableseedp1z2" name="chucktableseedp1z2"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Chuck Table Speed (P2) (rpm): *</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="chucktableseedp2z1" name="chucktableseedp2z1"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="chucktableseedp2z2" name="chucktableseedp2z2"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Chuck Table Speed (P3) (rpm): *</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="chucktableseedp3z1" name="chucktableseedp3z1"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="chucktableseedp3z2" name="chucktableseedp3z2"  class="form-control input-sm req003 su psc" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Set up wafer: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req003 su" id="setupwafer" name="setupwafer">
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
                                                        <label>1st Wafer Inspection result: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req003 su" id="firstwaferinspection" name="firstwaferinspection">
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
                                                        <label>1st Wafer No. Inspected: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="firstwaferno" name="firstwaferno"  class="form-control input-sm req003 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>No. of Wafers Inspected (Wafer Nos.): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="noofwafersinspected" name="noofwafersinspected"  class="form-control input-sm req003 su psc mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Technician Employee (passcode): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="mptechemp" name="mptechemp"  class="form-control input-sm req003 su psc">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Quality Control Employee (passcode): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="mpqcemp" name="mpqcemp"  class="form-control input-sm req003 su psc">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Remarks: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <textarea class="form-control req003" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                <div class="col-lg-4" id="rej003">
                    <h4>Add Reject logs</h4>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Wafer no: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dwaferno003" name="dwaferno003"  class="form-control input-sm rej003">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails003" name="ddetails003"  class="form-control input-sm rej003">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty003" name="dqty003"  class="form-control input-sm rej003">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks003" name="dremarks003"  class="form-control input-sm rej003">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" id="btnAddDefect003" name = "btnAddDefect003">Add Reject</button>
                    </div>
                </div>
                <div class="col-lg-4" id="bgonlythick">
                    <h5>Final Thickness ( μm/Micron )</h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="card border-left-danger">
                                    <div class="card-body">
                                        <div class="row no-gutters">
                                            <div class="col-lg-12">
                                                <div id = "tsuccess" class="alert alert-success alert-dismissible" role="alert" hidden>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div id = "terror" class="alert alert-danger alert-dismissible" role="alert" hidden>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Dummy Wafer Set-up: *</label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <select class="form-control req003" id="dummywafersetup" name="dummywafersetup">
                                                                    <option value=""></option>
                                                                    <option value="N/A">N/A</option>
                                                                    <option value="with BG Tape">with BG Tape</option>
                                                                    <option value="without BG Tape">without BG Tape</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Wafer no: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="twaferno" name="twaferno"  class="form-control input-sm bgthick">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Point 1: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="tpoint1" name="tpoint1"  class="form-control input-sm bgthick">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Point 2: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="tpoint2" name="tpoint2"  class="form-control input-sm bgthick">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Point 3: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="tpoint3" name="tpoint3"  class="form-control input-sm bgthick">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Point 4: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="tpoint4" name="tpoint4"  class="form-control input-sm bgthick">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Point 5: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="tpoint5" name="tpoint5"  class="form-control input-sm bgthick">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Point average : </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="pave" name="pave"  class="form-control input-sm" value = "" readonly>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Total Thickness Variation : </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="ttv" name="ttv"  class="form-control input-sm" value = "" readonly>
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-info" id="btnAddThick" name = "btnAddThick">Add Final Thickness</button>
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
                <div class="col-lg-4" id="bgonlyrough">
                    <h5>Roughness( μm/Micron )</h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="card border-left-danger">
                                    <div class="card-body">
                                        <div class="row no-gutters">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div id = "rsuccess" class="alert alert-success alert-dismissible" role="alert" hidden>
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div id = "rerror" class="alert alert-danger alert-dismissible" role="alert" hidden>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Roughness 1: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="rpoint1" name="rpoint1"  class="form-control input-sm rough">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Roughness 2: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="rpoint2" name="rpoint2"  class="form-control input-sm rough">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Roughness 3: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="rpoint3" name="rpoint3"  class="form-control input-sm rough">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Roughness 4: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="rpoint4" name="rpoint4"  class="form-control input-sm rough">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Roughness 5: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="rpoint5" name="rpoint5"  class="form-control input-sm rough">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Roughness average: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="rave" name="rave"  class="form-control input-sm" value = "" readonly>
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
    </div>
    <br/>
    <div class="row" id="bgonlylist"> 
    <h5>List of Final Thickness</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblthickness" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Wafer number</th>
                                <th>Point 1</th>
                                <th>Point 2</th>
                                <th>Point 3</th>
                                <th>Point 4</th>
                                <th>Point 5</th>
                                <th>Point average</th>
                                <th>TTV</th>
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
    </br><br/>
    <div class="row"> 
        <h5>List of Reject Details</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblreject003" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-success" id="btnDone003" name = "btnDone003" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
    var tblcount2 = 0;
    //var tblcount = 0;
    //alert(tblcount)
    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject003 > tbody tr').length;
        //checkRow(tblcount);
    }

    function removeRowThick(row){
        
        $("#trthick"+row).remove();
        tblcount2 = $('#tblthickness > tbody tr').length;
        //checkRow(tblcount);
    }
    
    function countDecimals(value) {
        var char_array = value.toString().split(""); // split every single char
        var not_decimal = char_array.lastIndexOf(".");
        return (not_decimal<0)?0:(char_array.length - not_decimal) - 1;
    }

    function Thickness(){
        
        if(document.getElementById("twaferno").value == '' || document.getElementById("tpoint1").value == '' || document.getElementById("tpoint2").value == '' || document.getElementById("tpoint3").value == '' || document.getElementById("tpoint4").value == '' || document.getElementById("tpoint5").value == '')
        {
            return false;
        }
        
        return true;


    }

    function Roughness(){

        if(document.getElementById("rpoint1").value != '' || document.getElementById("rpoint2").value != '' || document.getElementById("rpoint3").value != '' || document.getElementById("rpoint4").value != '' || document.getElementById("rpoint5").value != '')
        {
            if(document.getElementById("rpoint1").value == '' || document.getElementById("rpoint2").value == '' || document.getElementById("rpoint3").value == '' || document.getElementById("rpoint4").value == '' || document.getElementById("rpoint5").value == '' )
            {
                return false;
            }
        }
        return true;

    }
    
    $('#btnDone003').click(function(event) {

        var sdwaferno = $('input[name="sdwaferno003[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails003[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty003[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks003[]"]').map(function () {
        return this.value; }).get();

        var stwaferno = $('input[name="stwaferno[]"]').map(function () {
        return this.value; }).get();

        var stpoint1 = $('input[name="stpoint1[]"]').map(function () {
        return this.value; }).get();

        var stpoint2 = $('input[name="stpoint2[]"]').map(function () {
        return this.value; }).get();

        var stpoint3 = $('input[name="stpoint3[]"]').map(function () {
        return this.value; }).get();

        var stpoint4 = $('input[name="stpoint4[]"]').map(function () {
        return this.value; }).get();

        var stpoint5 = $('input[name="stpoint5[]"]').map(function () {
        return this.value; }).get();

        var spave = $('input[name="spave[]"]').map(function () {
        return this.value; }).get();

        var sttv = $('input[name="sttv[]"]').map(function () {
        return this.value; }).get();

        $(".form-control").css({"border-color": "#d1d3e2"});

        var val = document.getElementsByClassName("req003");
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
            document.getElementById('003').scrollIntoView();
            swal("missing input!",{
                icon: "warning",
                title: "Please input required fields!",
                closeOnClickOutside: false,
            });
            return false;
        }

        //buy off checking

        if($("#faicat.req003").val() == 'Set-up')
        {
            if(($("#mptechemp.req003").val()).toUpperCase() == 'N/A')
            {
                swal("not allowed!",{
                    icon: "warning",
                    title: "Technician Employee passcode is required for Set-up!",
                    closeOnClickOutside: false,
                });
                return false;
            }

            if(($("#mpqcemp.req003").val()).toUpperCase() == 'N/A')
            {
                swal("not allowed!",{
                    icon: "warning",
                    title: "Quality Control Employee passcode is required for Set-up!",
                    closeOnClickOutside: false,
                });
                return false;
            }
        }

        //end buy off checking

        //final thickness checking

        var bgthick = document.getElementsByClassName("bgthick");
        if(parseInt($('#wqty').val()) > 1)
        {
            if(tblcount2 < 2)
            {
                for(var i = 0;bgthick.length > i; i++)
                {
                    if(bgthick[i].value == '')
                    {
                        bgthick[i].style.borderColor = 'red';
                        count+=1;
                    }
                    else
                    {
                        bgthick[i].style.borderColor = '#d1d3e2';
                    }
                }
                document.getElementById('bgonlythick').scrollIntoView();
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Final Thickness!",
                    closeOnClickOutside: false,
                });
                return false;
            }
        }

        if(parseInt($('#wqty').val()) < 2)
        {
            if(tblcount2 < 1)
            {
                for(var i = 0;bgthick.length > i; i++)
                {
                    if(bgthick[i].value == '')
                    {
                        bgthick[i].style.borderColor = 'red';
                        count+=1;
                    }
                    else
                    {
                        bgthick[i].style.borderColor = '#d1d3e2';
                    }
                }
                document.getElementById('bgonlythick').scrollIntoView();
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Final Thickness!",
                    closeOnClickOutside: false,
                });
                return false;
            }
        }

        //end final thickness checking

        //Roughness checking

        if(($("#faicat.req003").val() == 'Set-up' || $("#faicat.req003").val() == 'Customer requirement') && (document.getElementById("rave").value == ''))
        {
            document.getElementById('bgonlyrough').scrollIntoView();
            var roughval = document.getElementsByClassName("rough");
            for(var i = 0;roughval.length > i; i++)
            {
                if(roughval[i].value == '')
                {
                    roughval[i].style.borderColor = 'red';
                }
                else
                {
                    roughval[i].style.borderColor = '#d1d3e2';
                }
            }
            swal("missing input!",{
                icon: "warning",
                title: "Please complete Roughness details!",
                closeOnClickOutside: false,
            });
            return false;
        }

        if(Roughness() == false)
        {
            //alert('Please complete Roughness details!');
            document.getElementById('bgonlyrough').scrollIntoView();
            var roughval = document.getElementsByClassName("rough");
            for(var i = 0;roughval.length > i; i++)
            {
                if(roughval[i].value == '')
                {
                    roughval[i].style.borderColor = 'red';
                }
                else
                {
                    roughval[i].style.borderColor = '#d1d3e2';
                }
            }
            swal("missing input!",{
                icon: "warning",
                title: "Please complete Roughness details!",
                closeOnClickOutside: false,
            });
            return false;
        }

        if(document.getElementById("rpoint1").value != '' || document.getElementById("rpoint2").value != '' || document.getElementById("rpoint3").value != '' || document.getElementById("rpoint4").value != '' || document.getElementById("rpoint5").value != '')
        {
            if(countDecimals(document.getElementById("rpoint1").value) != 5 || countDecimals(document.getElementById("rpoint2").value) != 5 || countDecimals(document.getElementById("rpoint3").value) != 5 || countDecimals(document.getElementById("rpoint4").value) != 5 || countDecimals(document.getElementById("rpoint5").value) != 5)
            {
                //alert('You have input Roughness with more or less than 5 decimal');
                swal("missing input!",{
                    icon: "warning",
                    title: "You have input Roughness with more or less than 5 decimal",
                    closeOnClickOutside: false,
                });
                return false;
            }
        }

        if(parseFloat(document.getElementById("rave").value) > 0.3)
        {
            swal("reached limit!",{
                icon: "warning",
                title: "Roughness measurement average is more than 0.3 microns!",
                closeOnClickOutside: false,
            });
            return false;
        }
        // end roughness checking
        
        //console.log(data)

        //$(this).attr("disabled","disabled");
        
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
        xmlhttp.open("GET", "../php/addefai003.php?data=" + JSON.stringify(data) 
        + "&intlotno="+document.getElementById("intlotno").value 
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks)
        + "&stwaferno="+JSON.stringify(stwaferno) 
        + "&stpoint1="+ JSON.stringify(stpoint1) 
        + "&stpoint2="+ JSON.stringify(stpoint2) 
        + "&stpoint3="+ JSON.stringify(stpoint3) 
        + "&stpoint4="+ JSON.stringify(stpoint4) 
        + "&stpoint5="+ JSON.stringify(stpoint5) 
        + "&spave="+ JSON.stringify(spave) 
        + "&sttv="+ JSON.stringify(sttv) 
        + "&rpoint1="+ document.getElementById("rpoint1").value 
        + "&rpoint2="+ document.getElementById("rpoint2").value 
        + "&rpoint3="+ document.getElementById("rpoint3").value 
        + "&rpoint4="+ document.getElementById("rpoint4").value 
        + "&rpoint5="+ document.getElementById("rpoint5").value 
        + "&rave="+ document.getElementById("rave").value, true);
        xmlhttp.send();
    });

    $("#rpoint1,#rpoint2,#rpoint3,#rpoint4,#rpoint5").keyup(function(event) { 
        document.getElementById("rave").value = 0;
        var rpoint1 = document.getElementById("rpoint1").value;
        var rpoint2 = document.getElementById("rpoint2").value;
        var rpoint3 = document.getElementById("rpoint3").value;
        var rpoint4 = document.getElementById("rpoint4").value;
        var rpoint5 = document.getElementById("rpoint5").value;

        //alert(parseFloat(rpoint1) + parseFloat(rpoint2) + parseFloat(rpoint3));

        var total;
        total = (parseFloat(rpoint1) + parseFloat(rpoint2) + parseFloat(rpoint3) + parseFloat(rpoint4) + parseFloat(rpoint5));
        if(Roughness() == true)
        {
            document.getElementById("rave").value = parseFloat(total / 5).toFixed(5);
            //document.getElementById("rsuccess").innerHTML = "<b>Success!<b/> Roughness Average has been automatically calculated!";
            /* document.getElementById("rerror").hidden = true;
            document.getElementById("rsuccess").hidden = true; */
        }
        else
        {
            /* document.getElementById("rerror").innerHTML = "Please complete necessary details!";
            document.getElementById("rerror").hidden = false;
            document.getElementById("rsuccess").hidden = true; */
            return false;
        }
        
    });

    $("#tpoint1,#tpoint2,#tpoint3,#tpoint4,#tpoint5,#twaferno").keyup(function(event) { 
        document.getElementById("pave").value = 0;
        var tpoint1 = document.getElementById("tpoint1").value;
        var tpoint2 = document.getElementById("tpoint2").value;
        var tpoint3 = document.getElementById("tpoint3").value;
        var tpoint4 = document.getElementById("tpoint4").value;
        var tpoint5 = document.getElementById("tpoint5").value;
        //alert(parseFloat(rpoint1) + parseFloat(rpoint2) + parseFloat(rpoint3));
        var total;
        //alert(tpoint1.toString().split(".").length);
        if(Thickness() == true)
        {
            //document.getElementById("tsuccess").innerHTML = "<b>Success!<b/> Total Thickness Variation has been automatically calculated!";
        
            total = (parseFloat(tpoint1) + parseFloat(tpoint2) + parseFloat(tpoint3) + parseFloat(tpoint4) + parseFloat(tpoint5));
            /* document.getElementById("terror").hidden = true;
            document.getElementById("tsuccess").hidden = true; */
            var high = Math.max(tpoint1,tpoint2,tpoint3,tpoint4,tpoint5);
            var low = Math.min(tpoint1,tpoint2,tpoint3,tpoint4,tpoint5);
            document.getElementById("pave").value = parseFloat(total / 5).toFixed(1);
            document.getElementById("ttv").value = parseFloat(high - low).toFixed(1);
        }
        else
        {
            /* document.getElementById("terror").innerHTML = "Please complete necessary details!";
            document.getElementById("terror").hidden = false;
            document.getElementById("tsuccess").hidden = true; */
            return false;
        }
        
    });

    $( "#btnAddThick" ).click(function() {

    //alert(countDecimals(document.getElementById("tpoint1").value))
    
    /* if(parseInt($('#wqty').val()) > 1)
    {
        if(tblcount2 > 1)
        {
            swal("error!",{
            icon: "error",
            title: "Final Thickness input reached its maximum limit!",
            closeOnClickOutside: false,
            });
            return false;
        }
        
    } */
    
    /* if(parseInt($('#wqty').val())  <= 1 )
    {
        //alert(tblcount)
        if(tblcount2 > 0)
        {
            swal("error!",{
            icon: "error",
            title: "Final Thickness input reached its maximum limit!",
            closeOnClickOutside: false,
            });
            return false;
        }
        
    } */
    
    if(Thickness() == false)
    {
        //alert('Please complete Final thickness details!');
        swal("missing input!",{
            icon: "warning",
            title: "Please complete Final thickness details!",
            closeOnClickOutside: false,
        });
        return false;
    }
    
    if(document.getElementById("ttv").value == '')
    {
        swal("missing input!",{
            icon: "warning",
            title: "Please complete Final thickness details!",
            closeOnClickOutside: false,
        });
        return false;
    }
    
    if(parseFloat(document.getElementById("ttv").value) > 12.7)
    {
        swal("reached limit!",{
            icon: "warning",
            title: "Total Thickness variation is more than 12.7 microns!",
            closeOnClickOutside: false,
        });
        return false;
    }
    
    if(countDecimals(document.getElementById("tpoint1").value) != 1 || countDecimals(document.getElementById("tpoint2").value) != 1 || countDecimals(document.getElementById("tpoint3").value) != 1 || countDecimals(document.getElementById("tpoint4").value) != 1 || countDecimals(document.getElementById("tpoint5").value) != 1)
    {
        //alert('You have input Thickness with more or less than 1 decimal');
        swal("missing input!",{
            icon: "warning",
            title: "You have input Thickness with 1 decimal",
            closeOnClickOutside: false,
        });
        return false;
    }
    else
    {
        $('#tblthickness > tbody').append('<tr id="trthick'+tblcount2+'">'+
                                    '<td><input type="hidden" id = "stwaferno[]"  name="stwaferno[]" value="'+$('#twaferno').val()+'">'+$('#twaferno').val()+'</td>'+
                                    '<td><input type="hidden" id = "stpoint1[]"  name="stpoint1[]" value="'+$('#tpoint1').val()+'">'+$('#tpoint1').val()+'</td>'+
                                    '<td><input type="hidden" id = "stpoint2[]"  name="stpoint2[]" value="'+$('#tpoint2').val()+'">'+$('#tpoint2').val()+'</td>'+
                                    '<td><input type="hidden" id = "stpoint3[]"  name="stpoint3[]" value="'+$('#tpoint3').val()+'">'+$('#tpoint3').val()+'</td>'+
                                    '<td><input type="hidden" id = "stpoint4[]"  name="stpoint4[]" value="'+$('#tpoint4').val()+'">'+$('#tpoint4').val()+'</td>'+
                                    '<td><input type="hidden" id = "stpoint5[]"  name="stpoint5[]" value="'+$('#tpoint5').val()+'">'+$('#tpoint5').val()+'</td>'+
                                    '<td><input type="hidden" id = "spave[]"  name="spave[]" value="'+$('#pave').val()+'">'+$('#pave').val()+'</td>'+
                                    '<td><input type="hidden" id = "sttv[]"  name="sttv[]" value="'+$('#ttv').val()+'">'+$('#ttv').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRowThick('+tblcount2+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount2++;
        $('#twaferno').val("");
        $('#tpoint1').val("");
        $('#tpoint2').val("");
        $('#tpoint3').val("");
        $('#tpoint4').val("");
        $('#tpoint5').val("");
        $('#pave').val("");
        $('#ttv').val("");
        $('#twaferno').focus();
        //checkRow(tblcount);
        
        /* document.getElementById("tsuccess").innerHTML = "Final Thickness details successfully added!";
        document.getElementById("terror").hidden = true;
        document.getElementById("tsuccess").hidden = false; */
        swal("success!",{
            icon: "success",
            title: "Final Thickness details successfully added!",
            closeOnClickOutside: false,
        });
        $(".bgthick").css({"border-color": "#d1d3e2"});
        
    }

    });


    $( "#btnAddDefect003" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty003[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
    if((parseInt(dtotal) + parseInt($('#dqty003').val())) > parseInt(document.getElementById("wqty").value))
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
    if($('#dwaferno003').val()== "" ||  $('#dqty003').val()== "" ||  $('#ddetails003').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej003').scrollIntoView();
        var rejval = document.getElementsByClassName("rej003");
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
        $('#tblreject003 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno003[]"  name="sdwaferno003[]" value="'+$('#dwaferno003').val()+'">'+$('#dwaferno003').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails003[]"  name="sddetails003[]" value="'+$('#ddetails003').val()+'">'+$('#ddetails003').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty003[]"  name="sdqty003[]" value="'+$('#dqty003').val()+'">'+$('#dqty003').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks003[]"  name="sdremarks003[]" value="'+$('#dremarks003').val()+'">'+$('#dremarks003').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno003').val("");
        $('#ddetails003').val("");
        $('#dqty003').val("");
        $('#dremarks003').val("");
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
        parseInt(dtotal) += parseInt($('#dqty003').val());
    }

    });

    $('#faicat.req003').change(function (){
        
        //console.log($(this).val())
        $('.form-control').css({"border-color": "#d1d3e2"})

        if($(this).val() == 'PSC')
        {
            $(".req003.su,.mon").attr("disabled",true);
            $(".req003.psc").attr("disabled",false);
            $("input.req003.su[type=text]").val("N/A");
            $("input.req003.su[type=password]").val("N/A");
            $("select.req003.su").val("N/A");
            $("input.req003.psc[type=text]").val("");
            $("input.req003.psc[type=password]").val("");
            $("select.req003.psc").val("");
        }

        else if($(this).val() == 'Monitoring')
        {
            $(".req003.su,.psc").attr("disabled",true);
            $(".req003.mon").attr("disabled",false);
            $("input.req003.su[type=text]").val("N/A");
            $("input.req003.su[type=password]").val("N/A");
            $("select.req003.su").val("N/A");
            $("input.req003.mon[type=text]").val("");
            $("input.req003.mon[type=password]").val("");
            $("select.req003.mon").val("");
        }
        else
        {   
            $(".req003.su").attr("disabled",false);
            $("input.req003.su[type=text]").val("");
            $("input.req003.su[type=password]").val("");
            $("select.req003.su").val("");
        }

        

    });
    
</script>