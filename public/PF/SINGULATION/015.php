<div id="015" class="efai" hidden>
    <h3>Strip/Panel Singulation station</h3>
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
                                                        <select class="form-control req015" id="faicat" name="faicat">
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
                                                        <select class="form-control req015" id="machine" name="machine">
                                                        <option value=""></option>
                                                        <?php 
                                                        include_once("../classes/machine.php");
                                                        $Machine = Machine::GetMachineStation('SINGULATION','015');
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
                                                        <label>Package Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su mon" id="packagetype" name="packagetype">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Strip">Strip</option>
                                                            <option value="Panel">Panel</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>With SWR: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su mon" id="wswr" name="wswr">
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
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req015 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Package Thickness (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="packagethickness" name="packagethickness"  class="form-control input-sm req015 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Package Size (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="packagesize" name="packagesize"  class="form-control input-sm req015 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Strip Nos./Panel Nos. : *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="stripno" name="stripno"  class="form-control input-sm req015 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Array Size: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="arraysize" name="arraysize"  class="form-control input-sm req015 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required: Package Thickness (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="requiredpackagethickness" name="requiredpackagethickness"  class="form-control input-sm req015 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Actual: Package Thickness (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="actualpackagethickness" name="actualpackagethickness"  class="form-control input-sm req015 su mon" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Required: Strip/Panel Package Orientation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su mon" id="requiredpackageorientation" name="requiredpackageorientation">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Live Bug">Live Bug</option>
                                                            <option value="Dead Bug">Dead Bug</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Actual: Strip/Panel Package Orientation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su mon" id="actualpackageorientation" name="actualpackageorientation">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Live Bug">Live Bug</option>
                                                            <option value="Dead Bug">Dead Bug</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <h6><b>Parameter Set-up</b></h6><br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Process mode: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su" id="processmode" name="processmode">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Auto">Auto</option>
                                                            <option value="Manual">Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Cut mode: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su" id="cutmode" name="cutmode">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="A-Normal">A-Normal</option>
                                                            <option value="AS-Sub-Index">AS-Sub-Index</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Cut method: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su" id="cutmethod" name="cutmethod">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Z1">Z1</option>
                                                            <option value="Z2">Z2</option>
                                                            <option value="Dual">Dual</option>
                                                            <option value="Step">Step</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Type of blade: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su" id="typeofblade" name="typeofblade">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Hub">Hub</option>
                                                            <option value="Hubless">Hubless</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Is cleaning of flange done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su" id="cleaningflangedone" name="cleaningflangedone">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Flange Size(if Hubless): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="flangesizez1" name="flangesizez1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="flangesizez2" name="flangesizez2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Blade description: * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladedescz1" name="bladedescz1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladedescz2" name="bladedescz2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Blade Lot no.: * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladelotnoz1" name="bladelotnoz1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladelotnoz2" name="bladelotnoz2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Cutting Channel Sequence: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su" id="cuttingchannelsequence" name="cuttingchannelsequence">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="12">12</option>
                                                            <option value="21">21</option>
                                                            <option value="1234">1234</option>
                                                            <option value="2143">2143</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <h6><b>CHANNEL THETA Rotation(0 deg,90deg,180 deg & 270deg)</b></h6><br/>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>CH 1: * </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="ch1" name="ch1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>CH 2: * </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="ch2" name="ch2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label>CH 3: * </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="ch3" name="ch3"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>CH 4: * </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="ch4" name="ch4"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Index size (mm): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>CH1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="indexsizech1" name="indexsizech1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>CH2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="indexsizech2" name="indexsizech2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Blade height (mm): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladeheightz1" name="bladeheightz1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladeheightz2" name="bladeheightz2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Blade exposure (mm): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladeexposurez1" name="bladeexposurez1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladeexposurez2" name="bladeexposurez2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Blade Cut length (m): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladecutlengthz1" name="bladecutlengthz1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladecutlengthz2" name="bladecutlengthz2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Spindle Rev (RPM): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="spindlerevz1" name="spindlerevz1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="spindlerevz2" name="spindlerevz2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Feed Speed (mm/sec): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedspeedz1" name="feedspeedz1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedspeedz2" name="feedspeedz2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <h6><b>Cutting Flow Rate (li/min)</b></h6><br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Blade Cooler (max): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladecoolerz1" name="bladecoolerz1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladecoolerz2" name="bladecoolerz2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Shower (max): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="showerz1" name="showerz1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="showerz2" name="showerz2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Spray (max): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="sprayz1" name="sprayz1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="sprayz2" name="sprayz2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Dicing Tape Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req015 su" id="dicingtapetype" name="dicingtapetype">
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
                                                        <label>Dicing Tape Used: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="dicingtapeused" name="dicingtapeused"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Dicing Tape Thickness (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="dicingtapethickness" name="dicingtapethickness"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck table vacuum (w/ Wafer)(Kpa)(Accept =/> -65Kpa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="chucktablevacuumwith" name="chucktablevacuumwith"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Chuck table vacuum (w/o Wafer)(Kpa)(Accept < -10Kpa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="chucktablevacuumwithout" name="chucktablevacuumwithout"  class="form-control input-sm req015 su" style="text-transform:uppercase">
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
                        <div>
                            <div class="card border-left-danger">
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Surfactant: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="surfactant" name="surfactant">
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
                                                            <label>Stroke Rate (%) Applicable to Iwaki: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="strokerate" name="strokerate"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Stroke Length (%) Applicable to Iwaki: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="strokelength" name="strokelength"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <h6><b>Machine Preparation</b></h6><br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Is Purging done?  *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="purgingdone" name="purgingdone">
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
                                                            <label>Blade condition checking for any deformation/damaged?  *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="bladeconditionchecking" name="bladeconditionchecking">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="Pass">Pass</option>
                                                                <option value="Fail">Fail</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Is cleaning of BBD Sensor done?  *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="cleaningbbdsensor" name="cleaningbbdsensor">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Reading Installed (%) - Close: * </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Z1: </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" id="readingz1close" name="readingz1close"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Z2: </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" id="readingz2close" name="readingz2close"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Reading Uninstalled (%) - Open: * </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Z1: </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" id="readingz1open" name="readingz1open"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Z2: </label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" id="readingz2open" name="readingz2open"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Is cleaning of Wheel Mount done?  *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="cleaningwheelmountdone" name="cleaningwheelmountdone">
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
                                                            <label>Is Blade Set up done?  *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="bladesetupdone" name="bladesetupdone">
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
                                                            <label>Is Cleaning of Chuck table done?  *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="cleaningchucktabledone" name="cleaningchucktabledone">
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
                                                            <label>Is Cleaning of NCS Sensor done?  *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="cleaningncssensordone" name="cleaningncssensordone">
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
                                                            <label>Reading NCS1(V): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="readingncs1" name="readingncs1"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Reading NCS2(V): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="readingncs2" name="readingncs2"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Is Cleaning of Spinner Table done? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="cleaningspinnertabledone" name="cleaningspinnertabledone">
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
                                                            <label>Atomizing Clean Air Pressure (Mpa): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="atomizingcleanairpressure" name="atomizingcleanairpressure"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Spinner Table Vacuum (w/ Wafer) (Accept = / > -65 Kpa): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="spinnertablewith" name="spinnertablewith"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Spinner Table Vacuum (w/o Wafer) (Accept < -10Kpa): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="spinnertablewithout" name="spinnertablewithout"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <h6><b>CO2 Bubbler</b></h6><br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>DI Water Temperature (°C): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="diwatertemp" name="diwatertemp"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>DI Water Pressure (MPa): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="diwaterpressure" name="diwaterpressure"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>DI Water Resistivity (mega Ohm): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="diwaterresistivity" name="diwaterresistivity"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <h6><b>Validation</b></h6><br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Cut check: Cut centered on Cutline *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="cutcenteredoncutline" name="cutcenteredoncutline">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="DONE">DONE</option>
                                                                <option value="NOT DONE">NOT DONE</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Hairline and Cut Position Adjust *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="hairlinecutpositionadjust" name="hairlinecutpositionadjust">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="DONE">DONE</option>
                                                                <option value="NOT DONE">NOT DONE</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Is 100% Index checked (Both CH) prior cutting? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="priorcutting" name="priorcutting">
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
                                                            <label>Is 100% Index checked (Both CH) during cutting? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="duringcutting" name="duringcutting">
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
                                                            <label>Is Package dimension recorded in SPC? *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="packagedimensionrecordedspc" name="packagedimensionrecordedspc">
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
                                                            <label>Visual Inspection on 1st Strip/Panel: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-control req015 su" id="vifirstpanel" name="vifirstpanel">
                                                                <option value=""></option>
                                                                <option value="N/A">N/A</option>
                                                                <option value="Pass">Pass</option>
                                                                <option value="Fail">Fail</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Strip/Panel No. Inspected: *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="panelnoinspected" name="panelnoinspected"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Technician Employee (passcode): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="techemp" name="techemp"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Quality Control Employee (passcode): *</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="password" id="qcemp" name="qcemp"  class="form-control input-sm req015 su">
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Remarks: * </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <textarea class="form-control req015" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                            <input type="text" id="dwaferno015" name="dwaferno015"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails015" name="ddetails015"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty015" name="dqty015"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks015" name="dremarks015"  class="form-control input-sm">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" id="btnAddDefect015" name = "btnAddDefect015">Add Reject</button>
                    </div>
                </div>

                <div class="col-lg-4 saw">
                    <h5>Index Size (mm) "For Multi Die"</h5>
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
                                                                <label>Channel: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="isch015" name="isch015"  class="form-control input-sm is015">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Index Size 1: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="is1015" name="is1015"  class="form-control input-sm is015">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Index Size 2: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="is2015" name="is2015"  class="form-control input-sm is015">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Index Size 3: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="is3015" name="is3015"  class="form-control input-sm is015">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Index Size 4: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="is4015" name="is4015"  class="form-control input-sm is015">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-info" id="btnAddis015" name = "btnAddis015">Add Index Size</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br/><br/>
                </div>
                <div class="col-lg-4 saw ring">
                    <h5>Wash/Dry Parameter</h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="card border-left-danger">
                                    <div class="card-body">
                                        <div class="row no-gutters">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <h5>Dry Parameter</h5>
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Time: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="dryparamtime" name="dryparamtime"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                            </div>
                                                        </div><br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>RPM: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="dryparamrpm" name="dryparamrpm"  class="form-control input-sm req015 su" style="text-transform:uppercase">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br/><br/>
                                                    <h5>Wash Parameter</h5>
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Time(secs): </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="wptime015" name="wptime015"  class="form-control input-sm wp015">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>RPM: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="wprpm015" name="wprpm015"  class="form-control input-sm wp015">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                    
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-info" id="btnAddWP015" name = "btnAddWP015">Add Wash Parameter</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br/><br/>
                </div>

            </div>
        </div>
    </div><br/>
    <div class="row"> <br/>
        <h5>Index Size</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblis015" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Channel</th>
                                <th>Index Size 1</th>
                                <th>Index Size 2</th>
                                <th>Index Size 3</th>
                                <th>Index Size 4</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div><br/><br/>
    </div>
    <div class="row"><br/>
        <h5>Wash parameter</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblwp015" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Time(secs)</th>
                                <th>RPM</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div><br/><br/>
    </div>

    <br/>
    <div class="row"> 
        <h5>List of Reject Details</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblreject015" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-success" id="btnDone015" name = "btnDone015" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject015 > tbody tr').length;
        $("#dwaferno015").focus();
        //checkRow(tblcount);
    }

    function removeis015Row(row){
        
        $("#tris015"+row).remove();
        iscount = $('#tblis015 > tbody tr').length;
        //checkRow(tblcount);
    }

    function removeWP015Row(row){
        
        $("#trwp015"+row).remove();
        wpcount = $('#tblwp015 > tbody tr').length;
        //checkRow(tblcount);
    }

    $('#btnDone015').click(function(event) {
        
        var sdwaferno = $('input[name="sdwaferno015[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails015[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty015[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks015[]"]').map(function () {
        return this.value; }).get();
        
        // ---------------------------------------------------------------
        var sisch = $('input[name="sisch015[]"]').map(function () {
        return this.value; }).get();

        var sis1 = $('input[name="sis1015[]"]').map(function () {
        return this.value; }).get();

        var sis2 = $('input[name="sis2015[]"]').map(function () {
        return this.value; }).get();

        var sis3 = $('input[name="sis3015[]"]').map(function () {
        return this.value; }).get();

        var sis4 = $('input[name="sis4015[]"]').map(function () {
        return this.value; }).get();

        //------------------------------------------------------------------

        var swptime = $('input[name="swptime015[]"]').map(function () {
        return this.value; }).get();

        var swprpm = $('input[name="swprpm015[]"]').map(function () {
        return this.value; }).get();

        
        var val = document.getElementsByClassName("req015");
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
            document.getElementById('015').scrollIntoView();
            swal("missing input!",{
                icon: "warning",
                title: "Please input required fields!",
                closeOnClickOutside: false,
            });
            return false;
        }
       
        if($("#faicat.req015").val() == 'Set-up')
        {
            if(($("#techemp.req015").val()).toUpperCase() == 'N/A')
            {
                swal("not allowed!",{
                    icon: "warning",
                    title: "Technician Employee passcode is required for Set-up!",
                    closeOnClickOutside: false,
                });
                return false;
            }

            if(($("#qcemp.req015").val()).toUpperCase() == 'N/A')
            {
                swal("not allowed!",{
                    icon: "warning",
                    title: "Quality Control Employee passcode is required for Set-up!",
                    closeOnClickOutside: false,
                });
                return false;
            }
        }

        if($("#faicat.req915").val() == 'Set-up')
        {
            if(wpcount < 4)
            {
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Wash parameter!",
                    closeOnClickOutside: false,
                });
                return false;
            }

            if(iscount < 2)
            {
                swal("missing input!",{
                    icon: "warning",
                    title: "Please input Index size!",
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

        
        
        xmlhttp.open("GET", "../php/addefai015.php?data=" + JSON.stringify(data)
        +"&intlotno="+document.getElementById("intlotno").value
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks)
        + "&sisch="+ JSON.stringify(sisch) 
        + "&sis1="+ JSON.stringify(sis1) 
        + "&sis2="+ JSON.stringify(sis2) 
        + "&sis3="+ JSON.stringify(sis3)
        + "&sis4="+ JSON.stringify(sis4) 
        + "&swptime="+ JSON.stringify(swptime) 
        + "&swprpm="+ JSON.stringify(swprpm), true);
        xmlhttp.send();
    });

    $( "#btnAddDefect015" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty015[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));

    //var qty = document.getElementById("processcat").value === 'BACKGRIND' ? parseInt(document.getElementById("wqty").value) : parseInt(document.getElementById("lqty").value)
    if((parseInt(dtotal) + parseInt($('#dqty015').val())) > parseInt(document.getElementById("currqty").value))
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
    if($('#dwaferno015').val()== "" ||  $('#dqty015').val()== "" ||  $('#ddetails015').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej015').scrollIntoView();
        var rejval = document.getElementsByClassName("rej015");
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
        $('#tblreject015 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno015[]"  name="sdwaferno015[]" value="'+$('#dwaferno015').val()+'">'+$('#dwaferno015').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails015[]"  name="sddetails015[]" value="'+$('#ddetails015').val()+'">'+$('#ddetails015').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty015[]"  name="sdqty015[]" value="'+$('#dqty015').val()+'">'+$('#dqty015').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks015[]"  name="sdremarks015[]" value="'+$('#dremarks015').val()+'">'+$('#dremarks015').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno015').val("");
        $('#ddetails015').val("");
        $('#dqty015').val("");
        $('#dremarks015').val("");
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
        parseInt(dtotal) += parseInt($('#dqty015').val());
    }

    });

    $( "#btnAddWP015" ).click(function() {

    //alert(countDecimals(document.getElementById("tpoint1").value))

    var val = document.getElementsByClassName("wp015");
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
        swal("missing input!",{
            icon: "warning",
            title: "Wash parameter missing input!",
            closeOnClickOutside: false,
        });
        return false;
    }

    else
    {
        $('#tblwp015 > tbody').append('<tr id="trwp015'+wpcount+'">'+
                                    '<td><input type="hidden" id = "swptime015[]"  name="swptime015[]" value="'+$('#wptime015').val()+'">'+$('#wptime015').val()+'</td>'+
                                    '<td><input type="hidden" id = "swprpm015[]"  name="swprpm015[]" value="'+$('#wprpm015').val()+'">'+$('#wprpm015').val()+'</td>'+
                                    '<td><button type="button" onclick="removeWP015Row('+wpcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        wpcount++;
        swal("success!",{
            icon: "success",
            title: "Wash parameter details successfully added!",
            closeOnClickOutside: false,
        });
        $(".wp015").css({"border-color": "#d1d3e2"});
        $(".wp015").val("");
        
    }

    });

    $( "#btnAddis015" ).click(function() {

    //alert(countDecimals(document.getElementById("tpoint1").value))

    var val = document.getElementsByClassName("is015");
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
        swal("missing input!",{
            icon: "warning",
            title: "Please input required fields!",
            closeOnClickOutside: false,
        });
        return false;
    }

    else
    {
        $('#tblis015 > tbody').append('<tr id="tris015'+iscount+'">'+
                                    '<td><input type="hidden" id = "sisch015[]"  name="sisch015[]" value="'+$('#isch015').val()+'">'+$('#isch015').val()+'</td>'+
                                    '<td><input type="hidden" id = "sis1015[]"  name="sis1015[]" value="'+$('#is1015').val()+'">'+$('#is1015').val()+'</td>'+
                                    '<td><input type="hidden" id = "sis2015[]"  name="sis2015[]" value="'+$('#is2015').val()+'">'+$('#is2015').val()+'</td>'+
                                    '<td><input type="hidden" id = "sis3015[]"  name="sis3015[]" value="'+$('#is3015').val()+'">'+$('#is3015').val()+'</td>'+
                                    '<td><input type="hidden" id = "sis4015[]"  name="sis4015[]" value="'+$('#is4015').val()+'">'+$('#is4015').val()+'</td>'+
                                    '<td><button type="button" onclick="removeis015Row('+iscount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        iscount++;
        swal("success!",{
            icon: "success",
            title: "Index Size details successfully added!",
            closeOnClickOutside: false,
        });
        $(".is015").css({"border-color": "#d1d3e2"});
        $(".is015").val("");
        
    }

    });

    $('#surfactant.req015').change(function (){
        
        if($(this).val() == 'N/A')
        {
            $("#strokerate.req015").val('N/A');
            $("#strokelength.req015").val('N/A');
            $("#strokerate.req015").attr("disabled","disabled");
            $("#strokelength.req015").attr("disabled","disabled");
        }
        else
        {
            $("#strokelength.req015").val('');
            $("#strokerate.req015").val('');
            $("#strokelength.req015").removeAttr("disabled");
            $("#strokerate.req015").removeAttr("disabled");
        }
        
    });

    $('#faicat.req015').change(function (){
        
        //console.log($(this).val())
        $('.form-control').css({"border-color": "#d1d3e2"})

        if($(this).val() == 'Monitoring')
        {
            $(".req015.su").attr("disabled",true);
            $(".req015.mon").attr("disabled",false);
            $("input.req015.su[type=text]").val("N/A");
            $("input.req015.su[type=password]").val("N/A");
            $("select.req015.su").val("N/A");
            $("input.req015.mon[type=text]").val("");
            $("input.req015.mon[type=password]").val("");
            $("select.req015.mon").val("");
        }
        else
        {   
            $(".req015.su").attr("disabled",false);
            $("input.req015.su[type=text]").val("");
            $("input.req015.su[type=password]").val("");
            $("select.req015.su").val("");
        }

        

    });
    
</script>