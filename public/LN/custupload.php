<h1 class="h3 mb-4 text-gray-900">Registration of Customer Lot number</h1>
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

                                    <form action="../php/importfile.php" method="post" onsubmit="return validateForm()" name="import" id="import" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <select class="form-control" id="custcode" name="custcode">
                                            <option value="">Customer Code *</option>
                                            <?php 
                                            include_once("../classes/customer.php");
                                            $SelectCustomer = Customer::GetAllCustomer();
                                            for($i=0;$i<count($SelectCustomer);$i++){
                                            ?>
                                                    <option value ='<?php echo $SelectCustomer[$i]->getcustcode(); ?>' ><?php echo $SelectCustomer[$i]->getcustname(); ?></option>
                                            <?php 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Start date: *</label>
                                        <input type="date" class="form-control" id="startdate" name="startdate">
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label for="">Ship back date: *</label>
                                        <input type="date" class="form-control" id="shipbackdate" name="shipbackdate">
                                    </div>
                                    <br/>

                                    <div class="form-group">
                                        <select name="lottype" class="form-control" id="lottype" name="lottype">
                                            <option value="">Lot Classification *</option>
                                            <?php 
                                            include_once("../classes/lotclassification.php");
                                            $LotType = LotClassification::GetAllLotType();
                                            for($i=0;$i<count($LotType);$i++){
                                            ?>
                                                    <option value ='<?php echo $LotType[$i]->getlottype(); ?>' ><?php echo $LotType[$i]->getlottype(); ?></option>
                                            <?php 
                                                }
                                            ?>
                                            
                                        </select>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <select name="processcat" class="form-control" id="processcat" name="processcat">
                                            <option value="">Process Category *</option>
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

                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Select File(csv file) *:</label><br/>
                                        <input class="form-control" type="file" name="uploadfile" id="uploadfile" accept=".csv" />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-success" id="btnUpload" name = "btnUpload">Upload File</button>
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
    function validateForm() {
  var att = document.forms["import"]["uploadfile"].value;
  var custcode = document.forms["import"]["custcode"].value;
  var startdate = document.forms["import"]["startdate"].value;
  var shipbackdate = document.forms["import"]["shipbackdate"].value;
  var processcat = document.forms["import"]["processcat"].value;
  var att = document.forms["import"]["uploadfile"].value;
  var file = att.split("\\").pop();
  //alert(file);
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
        alert("Filename is not valid. Kindly check and remove special characters.");
        return false;
        }
    }
    else
    {
        alert('Selected File is not csv format!');
        return false;
    }

    if(custcode == '' || startdate == '' || shipbackdate == '' || lottype == '' || processcat == '')
    {
        alert('Kindly complete necessary details!');
        return false;
    }
        
  
}
</script>