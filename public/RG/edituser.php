<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">List of Users</h6>
        </div>
        
        <div id = "success" class="alert alert-success alert-dismissible" role="alert" hidden>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div id = "error" class="alert alert-danger alert-dismissible" role="alert" hidden>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id number</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Birthday</th>
                            <th>User type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/user.php");
                        
                        $user = User::GetAllUser();
                        
                        for ($i=0; $i < count($user); $i++) 
                        
                            {


                        ?>
                        
                        <tr>
                            <td><?php echo $user[$i]->getidno(); ?></td>
                            <td><?php echo $user[$i]->getfname(); ?></td>
                            <td><?php echo $user[$i]->getlname(); ?></td>
                            <td><?php echo $user[$i]->getbirthday(); ?></td>
                            <td><?php echo $user[$i]->getusertype(); ?></td>
                            <td><?php echo $user[$i]->getactive(); ?></td>
                            <td>
                                <button class="btn btn-success btn-circle" value="<?php echo $user[$i]->getidno(); ?>" onclick="Action(value)"><i class="fas fa-edit" alt="Edit"></i></button>
                                <!-- <button class="btn btn-danger btn-circle"><i class="fas fa-trash" alt="Delete"></i></button> -->
                            </td>
                
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ViewModal" tabindex="-1" role="dialog" aria-labelledby=""
    aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 30%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Id number: <b><span id="idno"></span></b></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="card-header py-3">
                <h6 id="Tracking no"></h6>
            </div>
            <div class="modal-body">
            <div id = "rsuccess" class="alert alert-success alert-dismissible" role="alert" hidden>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div id = "rerror" class="alert alert-danger alert-dismissible" role="alert" hidden>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Date registered: </label>
                </div>
                <div class="col-md-7">
                    <p id="dateregistered"></p>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-5">
                    <label>First name:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="fname" name="fname"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Last name:</label>
                </div>
                <div class="col-md-7">
                    <input type="text" id="lname" name="lname"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Birthday:</label>
                </div>
                <div class="col-md-7">
                    <input type="date" id="bday" name="bday"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>User type:</label>
                </div>
                <div class="col-md-7">
                    <select name="usertype" class="form-control" id="usertype" name="usertype">
                        <option value=""></option>
                        <?php 
                        include_once("../classes/usertype.php");
                        $SelectUserType = UserType::GetAllUserType();
                        for($i=0;$i<count($SelectUserType);$i++){
                        ?>
                                <option value ='<?php echo $SelectUserType[$i]->getusertype(); ?>' ><?php echo $SelectUserType[$i]->getusertype(); ?></option>
                        <?php 
                            }
                        ?>
                        
                    </select>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-5">
                    <label>New password:</label>
                </div>
                <div class="col-md-7">
                    <input type="password" id="newpass" name="newpass"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Confirm password:</label>
                </div>
                <div class="col-md-7">
                    <input type="password" id="conpass" name="conpass"  class="form-control input-sm"><br>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" id="btnSave">Save</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="../vendor/jquery/jquery.min.js"></script>

<script>
    function Action(value)
    {
        document.getElementById("rsuccess").hidden = true;
        document.getElementById("rerror").hidden = true;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var result = this.responseText;
        var res = JSON.parse(result)[0];

        //alert(result);
        document.getElementById("idno").innerHTML = res.idno;
        document.getElementById("dateregistered").innerHTML = '<b>'+res.dateregistered;
        document.getElementById("fname").value = res.fname;
        document.getElementById("lname").value = res.lname;
        document.getElementById("bday").defaultValue = res.birthday;
        document.getElementById("usertype").value = res.usertype;
        $('#ViewModal').modal('show');
        $("#ViewModal").appendTo("body");
            
        }   
        };

        xmlhttp.open("GET", '../php/getuserdetails.php?idno='+value,true);
        xmlhttp.send();
         
    }

    $("#btnSave").click(function() {

        if(document.getElementById("fname").value == '' || document.getElementById("lname").value == '' || document.getElementById("bday").value == '' || document.getElementById("usertype").value == '')
        {
            document.getElementById("rerror").innerHTML = "Please complete necessary details!";
            document.getElementById("rerror").hidden = false;
            document.getElementById("rsuccess").hidden = true;
            return false;
        }

        if(document.getElementById("newpass").value != '' || document.getElementById("conpass").value != '')
        {
            if(document.getElementById("newpass").value == '' || document.getElementById("conpass").value == '')
            {
                document.getElementById("rerror").innerHTML = "Please set new password or confirm password!";
                document.getElementById("rerror").hidden = false;
                document.getElementById("rsuccess").hidden = true;
                return false;
            }

            if(document.getElementById("newpass").value != document.getElementById("conpass").value)
            {
                document.getElementById("rerror").innerHTML = "Passwords did not match!";
                document.getElementById("rerror").hidden = false;
                document.getElementById("rsuccess").hidden = true;
                return false;
            }
            
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var result = this.responseText;
        var res = result.split("_");
        //alert(result)
        if(res[0] == 'success')
        {
            alert(res[1]);
            location.reload();
        }
        else if(res[0] == 'error')
        {
            alert(res[1]);
        }
        else if(res[0] == 'session')
        {
            alert(res[1]);
            location.reload();
        }
        else
        {
            alert('Cannot connect to Database!')
        }

            
        }   
        };

        xmlhttp.open("GET", '../php/updateuserdetails.php?idno='+document.getElementById("idno").innerHTML+'&fname='+document.getElementById("fname").value+'&lname='+document.getElementById("lname").value+'&bday='+document.getElementById("bday").value+'&usertype='+document.getElementById("usertype").value+'&newpass='+document.getElementById("newpass").value+'&conpass='+document.getElementById("conpass").value,true);
        xmlhttp.send();

    });
</script>