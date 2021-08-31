<h1 class="h3 mb-4 text-gray-900">Customer Lot number</h1>
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

                                    <form action="../php/importfile.php" method="post" onsubmit="return validateForm()" name="import" id="import" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <label class="text-gray-900" for="">Select File(csv file):</label><br/>
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
  var file = att.split("\\").pop();
  alert(file);
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

    
        
  
}
</script>