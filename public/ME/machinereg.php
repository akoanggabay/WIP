<h1 class="h3 mb-4 text-gray-900">Machine Registration</h1>
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
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Process Category: *</label><br/>
                                        <select class="form-control" id="processcat" name="processcat">
                                            <option selected></option>
                                            <?php 
                                            include_once("../classes/processcat.php");
                                            $SelectProcess = ProcessCat::GetAllProcessType();
                                            for($i=0;$i<count($SelectProcess);$i++){
                                            ?>
                                                    <option value ='<?php echo $SelectProcess[$i]->getprocess(); ?>' ><?php echo $SelectProcess[$i]->getprocess(); ?></option>
                                            <?php 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Process: *</label><br/>
                                        <select class="form-control" id="station" name="station">
                                            <option selected></option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Machine type: *</label><br/>
                                        <select class="form-control" id="type" name="type">
                                            <option selected></option>
                                            <?php 
                                            include_once("../classes/machinetype.php");
                                            $SelectType = MachineType::GetAllMachineType();
                                            for($i=0;$i<count($SelectType);$i++){
                                            ?>
                                                    <option value ='<?php echo $SelectType[$i]->gettype(); ?>' ><?php echo $SelectType[$i]->gettype(); ?></option>
                                            <?php 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Machine ID: *</label><br/>
                                        <input class="form-control" type="text" name="machineid" id="machineid" placeholder="">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <button type="button" class="btn btn-success" id="btnReg">Register Machine</button>
                                        <button type="button" class="btn btn-warning float-right" id="btnCancel">Cancel</button>
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
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
    $("#btnReg").click(function() {
      
    if(document.getElementById('processcat').value == '' || document.getElementById("station").value == '' || document.getElementById("type").value == '' || document.getElementById("machineid").value == '')
    {
        document.getElementById("error").innerHTML = 'Kindly complete necessary details!';
        document.getElementById("error").hidden = false;
        document.getElementById("success").hidden = true;
        return false;
    }
    else
    {
        /* $('#LoadingModal').modal('show');
        $('#LoadingModal').appendTo("body"); */
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                var res = result.split("_");
                    //alert(result);
                    if(res[0] == 'success')
                    {
                        document.getElementById("success").innerHTML = res[1];
                        document.getElementById("success").hidden = false;
                        document.getElementById("error").hidden = true;
                        $("input[type=text]").val('');
                        $("select").val('');
                        ("#station").focus();
                    }
                    else if(res[0] == 'error')
                    {
                        document.getElementById("error").innerHTML = res[1];
                        document.getElementById("error").hidden = false;
                        document.getElementById("success").hidden = true;
                    }
                    else if(res[0] == 'session')
                    {
                        alert('Login session timeout!');
                        location.reload();
                    }
                    else
                    {
                        alert('Cannot connect to Database!');
                    }
                }   
                };

        xmlhttp.open("GET", '../php/addmachine.php?processcat='+document.getElementById('processcat').value+'&station='+document.getElementById('station').value.split(":")[0]+'&type='+document.getElementById('type').value+'&machineid='+document.getElementById('machineid').value,true);
        xmlhttp.send();
        /* $('#LoadingModal').modal('hide'); */
    }
        
        
    });

    /* $('#processcat').change(function (){
        
        if(document.getElementById('processcat').value == '')
        {
            return;
        }
        else
        {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            //alert(result);
            if(result == 'false')
            {
                document.getElementById("subprocesscat").value = res.subprocesscat;
                alert('No available Sub process!');
            }
            else
            {
                var res = JSON.parse(result)[0];
                document.getElementById("subprocesscat").value = res.subprocesscat;
            }
        }
        };

        xmlhttp.open("GET", "../php/getsubprocess.php?processcat=" + document.getElementById("processcat").value, true);
        xmlhttp.send();

        }
    }); */

    $('#processcat').change(function (){
        $("input[type=text]").val('');
        
        if(document.getElementById('processcat').value == '')
        {
            return;
        }
        else
        {
        $("#station").empty();
        $("#station").focus();
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
            
            var x1 = document.getElementById("station");
            var option1 = document.createElement("option");
            option1.text = '';
            x1.add(option1);
            for (i = 0; i < res.length - 1; i++) 
            { 
                    // alert(res[i]);
                    var x = document.getElementById("station");
                    var option = document.createElement("option");
                    option.text = res[i];
                    x.add(option);
            }
        }
        };

        xmlhttp.open("GET", "../php/getstationroute.php?processcat=" + document.getElementById("processcat").value, true);
        xmlhttp.send();

        }
    });

    $("#btnCancel").click(function() {
        $("input[type=text]").val('');
        $("input[type=number]").val('');
        $("select").val('');
    });
</script>