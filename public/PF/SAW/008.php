<div id="008" class="efai" hidden>
    <h3>SAW station</h3>
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
                                                <h4>Wafer Details</h4>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Saw Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008" id="sawtype" name="sawtype">
                                                            <option value=""></option>
                                                            <option value="Saw">Saw</option>
                                                            <option value="Saw-Ring Cut">Saw-Ring Cut</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Machine No: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="machine" name="machine">
                                                        <option value=""></option>
                                                        <?php 
                                                        include_once("../classes/machine.php");
                                                        $Machine = Machine::GetMachineStation('SAW','008');
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
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>FAI Category: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="faicat" name="faicat">
                                                            <option value=""></option>
                                                            <option value="Set-up">Set-up</option>
                                                            <option value="Monitoring">Monitoring</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>With SWR: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw" id="wswr" name="wswr">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>SWR no: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="swrno" name="swrno"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-3">
                                                        <label>Wafer Type: *</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control req008 saw ring" id="wtype" name="wtype">
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
                                                        <input type="text" id="wtypeothers" name="wtypeothers"  class="form-control input-sm 008" style="text-transform:uppercase" disabled>
                                                    </div>
                                                </div>
                                                <br/>
                                                
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Required: Wafer Thickness (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="requiredwaferthickness" name="requiredwaferthickness"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>Actual: Wafer Thickness (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="actualwaferthickness" name="actualwaferthickness"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>Street width (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="streetwidth" name="streetwidth"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>ACTUAL: Die Size (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="actualdiesize" name="actualdiesize"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
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
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Required: Wafer Orientation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="requiredwaferorientation" name="requiredwaferorientation">
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
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Actual: Wafer Orientation: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="actualwaferorientation" name="actualwaferorientation">
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
                                                <h4 class="saw ring">Parameter Set-up</h4>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Process mode: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="processmode" name="processmode">
                                                            <option value=""></option>
                                                            <option value="Auto">Auto</option>
                                                            <option value="Manual">Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Cut mode: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="cutmode" name="cutmode">
                                                            <option value=""></option>
                                                            <option value="N/A"></option>
                                                            <option value="A-NORMAL">A-NORMAL</option>
                                                            <option value="AS-Sub-Index">AS-Sub-Index</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row ring">
                                                    <div class="col-md-5">
                                                        <label>Cutting position: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 ring" id="cuttingposition" name="cuttingposition">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="NEAR">NEAR</option>
                                                            <option value="FAR">FAR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Cut method: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="cutmethod" name="cutmethod">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Z1">Z1</option>
                                                            <option value="Z2">Z2</option>
                                                            <option value="Dual">Dual</option>
                                                            <option value="Step">Step</option>
                                                            <option class="saw" value="4-CHANNEL">4-CHANNEL</option>
                                                            <option class="saw" value="ALTERNATE CUT">ALTERNATE CUT</option>
                                                            <option class="saw" value="DUAL PASS(Z1)">DUAL PASS(Z1)</option>
                                                            <option class="saw" value="DUAL PASS(Z2)">DUAL PASS(Z2)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row ring">
                                                    <div class="col-md-5">
                                                        <label>Chopper Speed (mm/s): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="chopperseed" name="chopperseed"  class="form-control input-sm req008 ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>Cutting CHANNEL Sequence: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw" id="cuttingchannelseq" name="cuttingchannelseq">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="12">12</option>
                                                            <option value="21">21</option>
                                                            <option value="123">123</option>
                                                            <option value="2143">2143</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                
                                                <div class="row saw">
                                                    <h6><b>CHANNEL THETA Rotation(0 deg,90deg,180 deg & 270deg)</b></h6><br/>
                                                    <div class="col-md-3">
                                                        <label>CH 1: * </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="ch1" name="ch1"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>CH 2: * </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="ch2" name="ch2"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-3">
                                                        <label>CH 3: * </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="ch3" name="ch3"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>CH 4: * </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="ch4" name="ch4"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Type of Blade: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="bladetype" name="bladetype">
                                                            <option value=""></option>
                                                            <option value="HUBLESS">HUBLESS</option>
                                                            <option value="HUB">HUB</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Flang Size(if Hubless): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="flangsizez1" name="flangsizez1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="flangsizez2" name="flangsizez2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Blade Part no Used: * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladepartnousedz1" name="bladepartnousedz1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladepartnousedz2" name="bladepartnousedz2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Blade Lot No.: * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladelotnoz1" name="bladelotnoz1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladelotnoz2" name="bladelotnoz2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row ring">
                                                    <div class="col-md-5">
                                                        <label>Blade Height (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="bladeheight" name="bladeheight"  class="form-control input-sm req008 ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-4">
                                                        <label>Blade Height (mm): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladeheightz1" name="bladeheightz1"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladeheightz2" name="bladeheightz2"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Blade Exposure (mm): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladeexposurez1" name="bladeexposurez1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladeexposurez2" name="bladeexposurez2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Blade Cut length (m): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladecutlengthz1" name="bladecutlengthz1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladecutlengthz2" name="bladecutlengthz2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Spindle Rev (RPM): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="spindlerevz1" name="spindlerevz1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="spindlerevz2" name="spindlerevz2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row ring">
                                                    <div class="col-md-5">
                                                        <label>Feed speed (o/s): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="feedspeed" name="feedspeed"  class="form-control input-sm req008 ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-4">
                                                        <label>Feed speed (mm/sec): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedspeedz1" name="feedspeedz1"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="feedspeedz2" name="feedspeedz2"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row ring">
                                                    <div class="col-md-5">
                                                        <label>Cut Width (mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="cutwidth" name="cutwidth"  class="form-control input-sm req008 ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row ring">
                                                    <div class="col-md-5">
                                                        <label>Size Data Selection: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 ring" id="sizedataselection" name="sizedataselection">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Align Result">Align Result</option>
                                                            <option value="Specified Data">Specified Data</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row ring">
                                                    <div class="col-md-5">
                                                        <label>Specified Data: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="specificdata" name="specificdata"  class="form-control input-sm req008 ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <p class="saw ring">Cutting Flow Rate (li/min)</p><br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Blade Cooler (max): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladecoolerz1" name="bladecoolerz1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="bladecoolerz2" name="bladecoolerz2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Shower (max): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="showerz1" name="showerz1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="showerz2" name="showerz2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Spray (max): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="sprayz1" name="sprayz1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="sprayz2" name="sprayz2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
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
                                                <h4 class="saw ring" style="text-align:center;">Lot Information</h4>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Dicing Tape Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="dicingtapetype" name="dicingtapetype">
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
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Dicing Tape used: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="dicingtapeused" name="dicingtapeused"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Dicing Tape Thickness(mm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="dicingtapethickness" name="dicingtapethickness"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>UV Curing Time: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="uvcuringtime" name="uvcuringtime"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <h4 class="saw ring">Vacuum Gauges</h4><br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Chuck table Work (w/ Wafer) (Accept =/> -65Kpa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="chucktableworkwith" name="chucktableworkwith"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Chuck table Work (w/o Wafer) (Accept < -10Kpa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="chucktableworkwithout" name="chucktableworkwithout"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Surfactant: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="surfactant" name="surfactant">
                                                            <option value=""></option>
                                                            <option value="ON">ON</option>
                                                            <option value="OFF">OFF</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Surfactant Injector Type: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="surfactantinjectiontype" name="surfactantinjectiontype">
                                                            <option value=""></option>
                                                            <option value="Stayclean Injector">Stayclean Injector</option>
                                                            <option value="Iwaki pump">Iwaki pump</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Stroke Rate (%) (applicable for Iwaki pump only): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="strokerate" name="stokerate"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Stroke Length (%) (applicable for Iwaki pump only): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="strokelength" name="strokelength"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Stayclean Concentration (ppm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="staycleanconcentration" name="staycleanconcentration"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Atomizing Clean Air pressure: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="atomcleanairpressure" name="atomcleanairpressure"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Spinner Table Work(w/ Wafer) (Accept = / > -65 Kpa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="spinnertableworkwith" name="spinnertableworkwith"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Spinner Table Work(w/o Wafer) (Accept < -10Kpa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="spinnertableworkwithout" name="spinnertableworkwithout"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <h4 class="saw ring">Machine preparation</h4><br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Is Purging done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="purgingdone" name="purgingdone">
                                                            <option value=""></option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Is Cleaning of BBD Sensor done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="cleaningbbdsensordone" name="cleaningbbdsensordone">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Reading Close (%): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="readingz1close" name="readingz1close"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="readingz2close" name="readingz2close"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Reading Open (%): * </label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z1: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="readingz1open" name="readingz1open"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>Z2: </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" id="readingz2open" name="readingz2open"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Is Cleaning of NCS Sensor done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="cleaningncssensordone" name="cleaningncssensordone">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Reading NCS1(V): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="readingncs1" name="readingncs1"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Reading NCS2(V): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="readingncs2" name="readingncs2"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Is Cleaning of Wheel mount done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="cleaningwheelmountdone" name="cleaningwheelmountdone">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Is sensor calibration done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="sensorcalibrationdone" name="sensorcalibrationdone">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-4">
                                                        <label>Dry Parameter: * </label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Time: </label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" id="dryparamtime" name="dryparamtime"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>RPM: </label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" id="dryparamrpm" name="dryparamrpm"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <h4 class="saw ring">CO2 Bubbler</h4><br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>DI Water Temperature (??C): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="diwatertemp" name="diwatertemp"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>DI Water Pressure (Mpa): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="diwaterpressure" name="diwaterpressure"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>DI Water Resistivity (mega Ohm): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="number" id="diwaterresistivity" name="diwaterresistivity"  class="form-control input-sm req008 saw ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <h4 class="saw ring">Validation</h4><br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Is Cleaning of cutting Table done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="cleaningcuttingtabledone" name="cleaningcuttingtabledone">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Is Cleaning of Spinner Table done? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="cleaningspinnertabledone" name="cleaningspinnertabledone">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>Kerf Check on Wafers: First Cut Line: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw" id="firstcutline" name="firstcutline">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="DONE">DONE</option>
                                                            <option value="NOT DONE">NOT DONE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>Hair Line & Cut Position Adjust: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw" id="hairline" name="hairline">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="DONE">DONE</option>
                                                            <option value="NOT DONE">NOT DONE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>Is 100% Index Checked (Both Ch) Prior Cutting? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw" id="priorcutting" name="priorcutting">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>Is 100% Index Checked (Both Ch) During Cutting? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw" id="duringcutting" name="duringcutting">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-4">
                                                        <label>Backside Chip-out as per LTC or Customer reqt (in mm) (1 unit per X & Y cut line): * </label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>X: </label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" id="backsidechipoutx" name="backsidechipoutx"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Y: </label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" id="backsidechipouty" name="backsidechipouty"  class="form-control input-sm req008 saw" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw">
                                                    <div class="col-md-5">
                                                        <label>Is Kerfwidth Monitoring Recorded in SPC? *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw" id="kerfwidthmonitoring" name="kerfwidthmonitoring">
                                                            <option value=""></option>
                                                            <option value="N/A">N/A</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row ring">
                                                    <div class="col-md-5">
                                                        <label>Set-up wafer done: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="setupwaferdone" name="setupwaferdone"  class="form-control input-sm req008 ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Visual Inspection on 1st Wafer: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <select class="form-control req008 saw ring" id="vifirstwafer" name="vifirstwafer">
                                                            <option value=""></option>
                                                            <option value="Pass">Pass</option>
                                                            <option value="Fail">Fail</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row ring">
                                                    <div class="col-md-5">
                                                        <label>Wafer No. Inspected: *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="text" id="wafernoinspected" name="wafernoinspected"  class="form-control input-sm req008 ring" style="text-transform:uppercase">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Technician Employee (passcode): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="mptechemp" name="mptechemp"  class="form-control input-sm req008 saw ring">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Quality Control Employee (passcode): *</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="password" id="mpqcemp" name="mpqcemp"  class="form-control input-sm req008 saw ring">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="row saw ring">
                                                    <div class="col-md-5">
                                                        <label>Remarks: * </label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <textarea class="form-control req008 saw ring" name="remarks" id="remarks" rows="3" onkeyup="this.value = this.value.replace(/[''#&*<>]/g, '')"></textarea>
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
                <div class="col-lg-4" id="rej008">
                    <h4>Add Reject logs</h4>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Wafer no: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dwaferno008" name="dwaferno008"  class="form-control input-sm rej008">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect call-out: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="ddetails008" name="ddetails008"  class="form-control input-sm rej008">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Defect quantity: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="number" id="dqty008" name="dqty008"  class="form-control input-sm rej008">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-5">
                            <label>Remarks: </label>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="dremarks008" name="dremarks008"  class="form-control input-sm rej008">
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-danger" id="btnAddDefect008" name = "btnAddDefect008">Add Reject</button>
                    </div>
                </div>
                <div class="col-lg-4 saw">
                    <h5>Blade Height (mm) "For  Multi Die/Alternate Cut/Dual Pass/4-Channel</h5>
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
                                                                <label>Channel: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="bhch" name="bhch"  class="form-control input-sm bh">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Blade Height 1: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="bh1" name="bh1"  class="form-control input-sm bh">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Blade Height 2: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="bh2" name="bh2"  class="form-control input-sm bh">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Blade Height 3: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="bh3" name="bh3"  class="form-control input-sm bh">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Blade Height 4: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="bh4" name="bh4"  class="form-control input-sm bh">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Blade Height 5: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="bh5" name="bh5"  class="form-control input-sm bh">
                                                            </div>
                                                        </div>
                                                        <br/>
                                            
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-outline-info" id="btnAddBH" name = "btnAddBH">Add Blade Height</button>
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
                <div class="col-lg-4 saw">
                    <h5>Index Size (mm) "For Multi Die / Alternate Cut /Dual Pass / 4-CHANNEL"</h5>
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
                                                                <input type="number" id="ihch" name="ihch"  class="form-control input-sm ih">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Index Height 1: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="ih1" name="ih1"  class="form-control input-sm ih">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Index Height 2: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="ih2" name="ih2"  class="form-control input-sm ih">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Index Height 3: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="ih3" name="ih3"  class="form-control input-sm ih">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Index Height 4: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="ih4" name="ih4"  class="form-control input-sm ih">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Index Height 5: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="ih5" name="ih5"  class="form-control input-sm ih">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-outline-info" id="btnAddIH" name = "btnAddIH">Add Index Height</button>
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
                    <h5>Wash Parameter</h5>
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
                                                                <label>Time(secs): </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="wptime" name="wptime"  class="form-control input-sm wp">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>RPM: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="wprpm" name="wprpm"  class="form-control input-sm wp">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                    
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-outline-info" id="btnAddWP" name = "btnAddWP">Add Wash Parameter</button>
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
                <div class="col-lg-4 ring">
                    <h5>Ring Cut Diameter Measurement(187.4 minimum)</h5>
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
                                                                <label>Wafer no: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="text" id="rcwaferno" name="rcwaferno"  class="form-control input-sm rc">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <label>Measurement: </label>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <input type="number" id="rcmeasurement" name="rcmeasurement"  class="form-control input-sm rc">
                                                            </div>
                                                        </div>
                                                        <br/>
                                                    
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-outline-info" id="btnAddRC" name = "btnAddRC">Add Ring Cut Diameter</button>
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
    </div>
    <br/>
    <div class="row saw"> 
    <h5>Blade Height</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblbh" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Channel</th>
                                <th>Blade Height 1</th>
                                <th>Blade Height 2</th>
                                <th>Blade Height 3</th>
                                <th>Blade Height 4</th>
                                <th>Blade Height 5</th>
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
    <div class="row saw"> 
        <h5>Index Height</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblih" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Channel</th>
                                <th>Index Height 1</th>
                                <th>Index Height 2</th>
                                <th>Index Height 3</th>
                                <th>Index Height 4</th>
                                <th>Index Height 5</th>
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
    <div class="row saw ring"> 
        <h5>Wash parameter</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblwp" width="100%" cellspacing="0">
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
    <div class="row ring"> 
        <h5>Ring-cut Diameter</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblrc" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Wafer no</th>
                                <th>Measurement</th>
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
    <div class="row"> 
        <h5>List of Reject Details</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tblreject008" width="100%" cellspacing="0">
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
        <button type="button" class="btn btn-outline-success" id="btnDone008" name = "btnDone008" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
    //var tblcount = 0;
    //alert(tblcount)
    function removeRow(row){
        
        $("#tr"+row).remove();
        tblcount = $('#tblreject008 > tbody tr').length;
        //checkRow(tblcount);
    }

    function removeBHRow(row){
        
        $("#tr"+row).remove();
        bhcount = $('#tblbh > tbody tr').length;
        //checkRow(tblcount);
    }

    function removeIHRow(row){
        
        $("#tr"+row).remove();
        ihcount = $('#tblih > tbody tr').length;
        //checkRow(tblcount);
    }

    function removeWPRow(row){
        
        $("#tr"+row).remove();
        wpcount = $('#tblwp > tbody tr').length;
        //checkRow(tblcount);
    }

    function removeRCRow(row){
        
        $("#tr"+row).remove();
        rccount = $('#tblrc > tbody tr').length;
        //checkRow(tblcount);
    }
    
    
    
    $('#btnDone008').click(function(event) {

        var sdwaferno = $('input[name="sdwaferno008[]"]').map(function () {
        return this.value; }).get();

        var sddetails = $('input[name="sddetails008[]"]').map(function () {
        return this.value; }).get();

        var sdqty = $('input[name="sdqty008[]"]').map(function () {
        return this.value; }).get();

        var sdremarks = $('input[name="sdremarks008[]"]').map(function () {
        return this.value; }).get();

        //------------------------------------------------------------------

        var sbhch = $('input[name="sbhch[]"]').map(function () {
        return this.value; }).get();

        var sbh1 = $('input[name="sbh1[]"]').map(function () {
        return this.value; }).get();

        var sbh2 = $('input[name="sbh3[]"]').map(function () {
        return this.value; }).get();

        var sbh3 = $('input[name="sbh3[]"]').map(function () {
        return this.value; }).get();

        var sbh4 = $('input[name="sbh4[]"]').map(function () {
        return this.value; }).get();

        var sbh5 = $('input[name="sbh5[]"]').map(function () {
        return this.value; }).get();

        //------------------------------------------------------------------

        var sihch = $('input[name="sihch[]"]').map(function () {
        return this.value; }).get();

        var sih1 = $('input[name="sih1[]"]').map(function () {
        return this.value; }).get();

        var sih2 = $('input[name="sih3[]"]').map(function () {
        return this.value; }).get();

        var sih3 = $('input[name="sih3[]"]').map(function () {
        return this.value; }).get();

        var sih4 = $('input[name="sih4[]"]').map(function () {
        return this.value; }).get();

        var sih5 = $('input[name="sih5[]"]').map(function () {
        return this.value; }).get();

        //------------------------------------------------------------------

        var swptime = $('input[name="swptime[]"]').map(function () {
        return this.value; }).get();

        var srpmtime = $('input[name="srpmtime[]"]').map(function () {
        return this.value; }).get();


        $(".form-control").css({"border-color": "#d1d3e2"});

        var val = document.getElementsByClassName("req008");
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
            document.getElementById('008').scrollIntoView();
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
                
            }
        };
        xmlhttp.open("GET", "../php/addefai008.php?data=" + JSON.stringify(data) 
        + "&intlotno="+document.getElementById("intlotno").value 
        + "&sdwaferno="+JSON.stringify(sdwaferno) 
        + "&sddetails="+ JSON.stringify(sddetails) 
        + "&sdqty="+ JSON.stringify(sdqty) 
        + "&sdremarks="+ JSON.stringify(sdremarks) 
        + "&sbhch="+ JSON.stringify(sbhch) 
        + "&sbh1="+ JSON.stringify(sbh1) 
        + "&sbh2="+ JSON.stringify(sbh2) 
        + "&sbh3="+ JSON.stringify(sbh3)
        + "&sbh4="+ JSON.stringify(sbh4) 
        + "&sbh5="+ JSON.stringify(sbh5)
        + "&sihch="+ JSON.stringify(sihch) 
        + "&sih1="+ JSON.stringify(sih1) 
        + "&sih2="+ JSON.stringify(sih2) 
        + "&sih3="+ JSON.stringify(sih3)
        + "&sih4="+ JSON.stringify(sih4) 
        + "&sih5="+ JSON.stringify(sih5)
        + "&swptime="+ JSON.stringify(swptime) 
        + "&srpmtime="+ JSON.stringify(srpmtime), true);
        xmlhttp.send();
    });

    $( "#btnAddBH" ).click(function() {

    //alert(countDecimals(document.getElementById("tpoint1").value))

        var val = document.getElementsByClassName("bh");
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
            $('#tblbh > tbody').append('<tr id="tr'+bhcount+'">'+
                                        '<td><input type="hidden" id = "sbhch[]"  name="sbhch[]" value="'+$('#bhch').val()+'">'+$('#bhch').val()+'</td>'+
                                        '<td><input type="hidden" id = "sbh1[]"  name="sbh1[]" value="'+$('#bh1').val()+'">'+$('#bh1').val()+'</td>'+
                                        '<td><input type="hidden" id = "sbh2[]"  name="sbh2[]" value="'+$('#bh2').val()+'">'+$('#bh2').val()+'</td>'+
                                        '<td><input type="hidden" id = "sbh3[]"  name="sbh3[]" value="'+$('#bh3').val()+'">'+$('#bh3').val()+'</td>'+
                                        '<td><input type="hidden" id = "sbh4[]"  name="sbh4[]" value="'+$('#bh4').val()+'">'+$('#bh4').val()+'</td>'+
                                        '<td><input type="hidden" id = "sbh5[]"  name="sbh5[]" value="'+$('#bh5').val()+'">'+$('#bh5').val()+'</td>'+
                                        '<td><button type="button" onclick="removeBHRow('+bhcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                        '</tr>');

            bhcount++;
            swal("success!",{
                icon: "success",
                title: "Blade Height details successfully added!",
                closeOnClickOutside: false,
            });
            $(".bh").css({"border-color": "#d1d3e2"});
            $(".bh").val("");
            
        }

    });

    $( "#btnAddIH" ).click(function() {

    //alert(countDecimals(document.getElementById("tpoint1").value))

    var val = document.getElementsByClassName("ih");
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
        $('#tblih > tbody').append('<tr id="tr'+ihcount+'">'+
                                    '<td><input type="hidden" id = "sihch[]"  name="sihch[]" value="'+$('#ihch').val()+'">'+$('#ihch').val()+'</td>'+
                                    '<td><input type="hidden" id = "sih1[]"  name="sih1[]" value="'+$('#ih1').val()+'">'+$('#ih1').val()+'</td>'+
                                    '<td><input type="hidden" id = "sih2[]"  name="sih2[]" value="'+$('#ih2').val()+'">'+$('#ih2').val()+'</td>'+
                                    '<td><input type="hidden" id = "sih3[]"  name="sih3[]" value="'+$('#ih3').val()+'">'+$('#ih3').val()+'</td>'+
                                    '<td><input type="hidden" id = "sih4[]"  name="sih4[]" value="'+$('#ih4').val()+'">'+$('#ih4').val()+'</td>'+
                                    '<td><input type="hidden" id = "sih5[]"  name="sih5[]" value="'+$('#ih5').val()+'">'+$('#ih5').val()+'</td>'+
                                    '<td><button type="button" onclick="removeIHRow('+ihcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        ihcount++;
        swal("success!",{
            icon: "success",
            title: "Index Height details successfully added!",
            closeOnClickOutside: false,
        });
        $(".ih").css({"border-color": "#d1d3e2"});
        $(".ih").val("");
        
    }

    });

    $( "#btnAddWP" ).click(function() {

//alert(countDecimals(document.getElementById("tpoint1").value))

    var val = document.getElementsByClassName("wp");
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
        $('#tblwp > tbody').append('<tr id="tr'+wpcount+'">'+
                                    '<td><input type="hidden" id = "swptime[]"  name="swptime[]" value="'+$('#wptime').val()+'">'+$('#wptime').val()+'</td>'+
                                    '<td><input type="hidden" id = "swprpm[]"  name="swprpm[]" value="'+$('#wprpm').val()+'">'+$('#wprpm').val()+'</td>'+
                                    '<td><button type="button" onclick="removeWPRow('+wpcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        wpcount++;
        swal("success!",{
            icon: "success",
            title: "Wash parameter details successfully added!",
            closeOnClickOutside: false,
        });
        $(".wp").css({"border-color": "#d1d3e2"});
        $(".wp").val("");
        
    }

    });

    $( "#btnAddRC" ).click(function() {

//alert(countDecimals(document.getElementById("tpoint1").value))

    var val = document.getElementsByClassName("rc");
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
        $('#tblrc > tbody').append('<tr id="tr'+rccount+'">'+
                                    '<td><input type="hidden" id = "srcwaferno[]"  name="srcwaferno[]" value="'+$('#rcwaferno').val()+'">'+$('#rcwaferno').val()+'</td>'+
                                    '<td><input type="hidden" id = "srcmeasurement[]"  name="srcmeasurement[]" value="'+$('#rcmeasurement').val()+'">'+$('#rcmeasurement').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRCRow('+rccount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        rccount++;
        swal("success!",{
            icon: "success",
            title: "Ring-cut Diameter details successfully added!",
            closeOnClickOutside: false,
        });
        $(".rc").css({"border-color": "#d1d3e2"});
        $(".rc").val("");
        
    }

    });


    $( "#btnAddDefect008" ).click(function() {

    //alert(tblcount)


    var sdqty = $('input[name="sdqty[]"]').map(function () {
    return this.value; }).get();
    var dtotal = sdqty.reduce(function(a, b) { return parseInt(a) + parseInt(b); }, 0);
    //alert((parseInt(dtotal) + parseInt($('#dqty').val())));
    if((parseInt(dtotal) + parseInt($('#dqty008').val())) > parseInt(document.getElementById("wqty").value))
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
    if($('#dwaferno008').val()== "" ||  $('#dqty008').val()== "" ||  $('#ddetails008').val()== "")
    {
        //alert("test")
        /* document.getElementById("derror").innerHTML = 'Please complete necessary details!';
        document.getElementById("derror").hidden = false;
        document.getElementById("dsuccess").hidden = true; */
        document.getElementById('rej008').scrollIntoView();
        var rejval = document.getElementsByClassName("rej008");
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
        $('#tblreject008 > tbody').append('<tr id="tr'+tblcount+'">'+
                                    '<td><input type="hidden" id = "sdwaferno008[]"  name="sdwaferno008[]" value="'+$('#dwaferno008').val()+'">'+$('#dwaferno008').val()+'</td>'+
                                    '<td><input type="hidden" id = "sddetails008[]"  name="sddetails008[]" value="'+$('#ddetails008').val()+'">'+$('#ddetails008').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdqty008[]"  name="sdqty008[]" value="'+$('#dqty008').val()+'">'+$('#dqty008').val()+'</td>'+
                                    '<td><input type="hidden" id = "sdremarks008[]"  name="sdremarks008[]" value="'+$('#dremarks008').val()+'">'+$('#dremarks008').val()+'</td>'+
                                    '<td><button type="button" onclick="removeRow('+tblcount+')" type="button" class="btn btn-danger btn-sm">Remove</button></td>'+
                                    '</tr>');

        tblcount++;
        $('#dwaferno008').val("");
        $('#ddetails008').val("");
        $('#dqty008').val("");
        $('#dremarks008').val("");
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
        parseInt(dtotal) += parseInt($('#dqty008').val());
    }

    });
    $('.saw,.ring').hide();
    $('#sawtype.req008').change(function (){
        
        //console.log($(this).val())
        $('.form-control').css({"border-color": "#d1d3e2"})
        $('input[name*="wtypeothers"]').attr("disabled",true);
        if($(this).val() == 'Saw')
        {
            
            $(".ring").attr("disabled",true);
            
            $("input.ring[type=text]").val("N/A");
            $("input.ring[type=password]").val("N/A");
            $("input.ring[type=date]").val("1900-01-01");
            $("select.ring").val("N/A");
            $("input.ring[type=number]").val(0);
            $(".saw").attr("disabled",false);
            $(".ring").hide();
            $(".saw").show();
            $(".saw").val("");
        }
        else if($(this).val() == 'Saw-Ring Cut')
        {
            $(".saw").attr("disabled",true);
            
            $("input.saw[type=text]").val("N/A");
            $("input.saw[type=password]").val("N/A");
            $("input.saw[type=date]").val("1900-01-01");
            $("select.saw").val("N/A");
            $("input.saw[type=number]").val(0);
            $(".ring").attr("disabled",false);
            $(".saw").hide();
            $(".ring").show();
            $(".ring").val("");
        }
        else
        {
            $('.saw,.ring').hide();
        }

    });

    $('#wtype.req008').change(function (){
        
        if($(this).val() == 'others')
        {
            
            $("#wtypeothers.008").removeAttr("disabled");
            $("#wtypeothers.008").focus();
        }
        else
        {
            $("#wtypeothers.008").val('');
            $("#wtypeothers.008").attr("disabled","disabled");
        }
        
    });
    
</script>