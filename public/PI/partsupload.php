<h1 class="h3 mb-4 text-gray-900">Upload Parts Lot no</h1>
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

                                    <?php if(@$_GET['Success'] == true){ ?>
                                        <div id="" class="alert alert-success alert-dismissible" role="alert">
                                        <strong>Success!</strong>  <?php echo $_GET['Success']; ?>
                                        </div>
                                    <?php } ?>

                                    <form>
                                    
                                    <div class="form-group">
                                        <label for="">Process Category: *</label>
                                        <select class="form-control" id="processcat" name="processcat">
                                            <option value=""></option>
                                            <?php 
                                            include_once("../classes/processcat.php");
                                            $ProcessType = ProcessCat::GetAllProcessType();
                                            for($i=0;$i<count($ProcessType);$i++){
                                            ?>
                                                    <option value ='<?php echo $ProcessType[$i]->getprocess(); ?>' ><?php echo $ProcessType[$i]->getprocess(); ?></option>
                                            <?php 
                                                }
                                            ?>
                                            
                                        </select>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label for="">Material Category: *</label>
                                        <select class="form-control" id="materialcat" name="materialcat">
                                            <option value=""></option>
                                            <?php 
                                            include_once("../classes/materialcategory.php");
                                            $MaterialCategory = materialcategory::GetAllMaterialCategory();
                                            for($i=0;$i<count($MaterialCategory);$i++){
                                            ?>
                                                    <option value ='<?php echo $MaterialCategory[$i]->getcategory(); ?>' ><?php echo $MaterialCategory[$i]->getcategory(); ?></option>
                                            <?php 
                                                }
                                            ?>
                                            
                                        </select>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label for="">Part Number: *</label>
                                        <select  class="form-control" id="partno" name="partno">
                                            <option value=""></option>
                                            
                                        </select>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label for="">Date Received: *</label>
                                        <input type="date" class="form-control" id="datereceived" name="datereceived">
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label for="">Expiration Date: *</label>
                                        <input type="date" class="form-control" id="dateexp" name="dateexp">
                                    </div>
                                    <br/>
                                    
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Select File(CSV file) *:</label><br/>
                                        <input class="form-control" type="file" name="uploadfile" id="uploadfile" accept=".csv" />
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-outline-success" id="btnUpload" name = "btnUpload">Upload File</button>
                                    </div>
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
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

$('#materialcat').change(function (){

    if(document.getElementById("processcat").value == "")
    {
        swal({
            title: "Please select process category!",
            text: 'Missing data',
            showConfirmButton: true,
            button: true,
            icon: "error"
        })
        $(this).val("");
        return false;
    }
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    //alert(this.readyState + ' ' + this.status);
    if (this.readyState == 4 && this.status == 200) 
    {
        $("#partno").empty();
        var result = this.responseText;
        var res = result.split("_");
        if(res.length <=1 )
        {
            swal({
                title: "No Available Part number for Process Category: "+document.getElementById("processcat").value+ " and Material Category: "+document.getElementById("materialcat").value,
                text: 'No available data',
                showConfirmButton: true,
                button: true,
                icon: "error"
            })
            
            return false;
        }
        var x1 = document.getElementById("partno");
        var option1 = document.createElement("option");
        option1.text = '';
        x1.add(option1);
        for (i = 0; i < res.length - 1; i++) 
        { 
                // alert(res[i]);
                var x = document.getElementById("partno");
                var option = document.createElement("option");
                option.text = res[i];
                x.add(option);
        }
    }
    };

    xmlhttp.open("GET", "../php/getpartno.php?processcat=" + document.getElementById("processcat").value+"&materialcat="+document.getElementById("materialcat").value, true);
    xmlhttp.send();

    
    
});

$('#btnUpload').click(async function(event) {

    if(document.getElementById('processcat').value == '' || document.getElementById('materialcat').value == '' || document.getElementById('partno').value == '' || document.getElementById('datereceived').value == '' || document.getElementById('dateexp').value == '' || document.getElementById('uploadfile').value == '')
    {
        //alert('Kindly complete necessary details!');
        swal({
            title: "Please input required data!",
            text: 'Missing data',
            showConfirmButton: true,
            button: true,
            icon: "error"
        })
        return false;
    }
    var att = document.getElementById("uploadfile").value;
    var file = att.split("\\").pop();
  
    var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,/~`-.=";
    var checkForSpecialChar = function(string){
    for(i = 0; i < specialChars.length;i++){
    if(string.indexOf(specialChars[i]) > -1){
        return true
        }
    }
    return false;
    }

    if(file.split(".").pop() == 'csv' || file.split(".").pop() == 'CSV')
    {
        if(checkForSpecialChar(file.split('.')[0])){
        swal({
            title: "Filename is not valid. Kindly check and remove special characters.",
            text: 'error',
            showConfirmButton: true,
            button: true,
            icon: "error"
        })
        return false;
        }
    }
    else
    {
        swal({
            title: "Selected File is not CSV format!",
            text: 'error',
            showConfirmButton: true,
            button: true,
            icon: "error"
        })
        return false;
    }

    var fd = new FormData();
    
    /* var files = $('#imageprev')[0].files[0]; */
    fd.append('uploadfile',document.getElementById('uploadfile').files[0])
    fd.append('processcat',document.getElementById('processcat').value)
    fd.append('materialcat',document.getElementById('materialcat').value)
    fd.append('partno',document.getElementById('partno').value)
    fd.append('datereceived',document.getElementById('datereceived').value)
    fd.append('dateexp',document.getElementById('dateexp').value)

    swal({
        icon: "info",
        title: 'Loading...',
        text: 'Your transaction request is on process.',
        showCancelButton: false,
        showConfirmButton: false,
        button: false
        
    })
    await sleep(1000)
    
    $.ajax({
        url: '../php/partsupload.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(result) {
            //alert(result)
            var res = result.split("_");
            
            if(res[0].trim() == 'success')
            {
                //swal(res[1],"","success")
                $(".form-control").val("");
                swal({
                    title: res[1],
                    text: 'successful transaction.',
                    showConfirmButton: true,
                    button: true,
                    icon: "success"
                })
            }
            else
            {
                //swal(res[1],"","error")
                swal({
                    title: res[1],
                    text: 'error',
                    showConfirmButton: true,
                    button: true,
                    icon: "error"
                })
            }
        }
    });
});
</script>