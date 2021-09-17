<?php 

if($_SESSION['usertype'] == 'Super Administrator' || $_SESSION['usertype'] == 'Administrator')
{
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WIP System</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        
        <!-- Outer Row -->
        <div class="row justify-content-center">
            
            <div class="" style="width: 50%;">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-15">
                        <!-- Nested Row within Card Body -->
                        
                        <div>
                            <div class="p-15">
                                <div id="logo" style="margin: 15px">
                                    <img src="../img/logo.png" style="display: block;margin-left: auto;margin-right: auto;margin-top: -12px;max-width: 100%;max-height: 100%;width: 80px;height: 74px;margin-top: auto;" alt="KKM">
                                </div>
                                <br/>
                                <form name="reguser" onsubmit="return validateForm()" action="../php/userreg.php" method="post">
                                    
                                    
                                    <div id="error" class="alert alert-danger alert-dismissible" role="alert" <?php if(@$_GET['Error'] == false){ echo 'hidden'; } ?>>
                                    <?php if(@$_GET['Error'] == true){ ?>
                                        <strong>Error!</strong>  <?php echo @$_GET['Error']; ?>
                                    <?php } ?>
                                    </div>
                                    
                                
                                    <div id="error2" class="alert alert-danger alert-dismissible" role="alert" hidden>
                                        <strong>Error!</strong>  
                                    </div>

                                    <div id="success2" class="alert alert-success alert-dismissible" role="alert" hidden>
                                        <strong>Success!</strong>  
                                    </div>

                                    
                                    <div id="success" class="alert alert-success alert-dismissible" role="alert" <?php if(@$_GET['Success'] == false){ echo 'hidden'; } ?>>
                                    <?php if(@$_GET['Success'] == true){ ?>
                                        <strong>Success!</strong>  <?php echo @$_GET['Success']; ?>
                                    <?php } ?>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            id="idno" name="idno"
                                            placeholder="ID number *">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control" id="fname" name="fname"
                                                placeholder="First name *">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="lname" name="lname"
                                                placeholder="Last name *">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="bday">Birth date: *</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="bday" name="bday"
                                                placeholder="Birth Date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="usertype" class="form-control" id="usertype" name="usertype">
                                            <option value="">User Type *</option>
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

                                    

                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            id="pass" name="pass" placeholder="Password *">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            id="cpass" name="cpass" placeholder=" Confirm password *">
                                    </div>
                                    <button type="submit" class="btn btn-outline-success" id="btnReg" name="btnReg">Register</button>
                                    <!-- <button class="btn btn-outline-primary float-right"><a href="index.php">Sign In</a></button> -->
                                    
                                </form>
                            </div>
                        </div>
                    
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script>
        document.getElementById("bday").defaultValue = "2000-01-01";
        function validateForm() {
            var idno = document.forms["reguser"]["idno"].value;
            var fname = document.forms["reguser"]["fname"].value;
            var lname = document.forms["reguser"]["lname"].value;
            var pass = document.forms["reguser"]["pass"].value;
            var cpass = document.forms["reguser"]["cpass"].value;
            var usertype = document.forms["reguser"]["usertype"].value;
            var bday = document.forms["reguser"]["bday"].value;
            
            if (idno == "" || fname == "" || lname == "" || pass == "" || cpass == "" || usertype == "" || bday == "") {
                document.getElementById("error2").innerHTML = '<b>Error!</b> Kindly complete details!';
                document.getElementById("error2").hidden = false;
                document.getElementById("success2").hidden = true;
                document.getElementById("error").hidden = true;
                document.getElementById("success").hidden = true;
                //alert('Kindly complete details!');
                //document.getElementById("error").hidden = true;
                return false;
            }
            else if(pass != cpass)
            {
                document.getElementById("error2").innerHTML = '<b>Error!</b> Password did not match!';
                document.getElementById("error2").hidden = false;
                document.getElementById("success2").hidden = true;
                document.getElementById("error").hidden = true;
                document.getElementById("success").hidden = true;
                /* alert('Password did not match!');
                document.getElementById("error").hidden = true; */
                return false;
            }
            
        }

        $(document).ready(function(){
            

        });

    </script>

</body>

</html>

<?php 
} 
else{
    echo strtoupper('<h1>User not authenticated to access this form!</h1>');
}
?>
