<?php
session_start();
if(isset($_SESSION['idno']))
{
    header("location:public/main.php");
}
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
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="card-body p-15 col-md-6">
                <?php if(@$_GET['Error'] == true){ ?>
                    <div id="" class="alert alert-danger alert-dismissible" role="alert">
                    <strong>Error!</strong>  <?php echo $_GET['Error']; ?>
                    </div>
                <?php } ?>

                <?php if(@$_GET['Success'] == true){ ?>
                    <div id="" class="alert alert-success alert-dismissible" role="alert">
                    <strong>Success!</strong>  <?php echo $_GET['Success']; ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    
                    <div class="card-body p-0">
                        
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-7 d-none d-lg-block" style="background-image: url(img/loginbg.jpg); background-repeat: no-repeat;"></div>
                            <div class="col-lg-5" style="margin-right: 0px;">
                                <div class="" style="padding-right: 25px;padding-left: 25px;">
                                    <div id="logo" style="margin: 15px">
                                        <img src="img/logo.png" style="display: block;margin-left: auto;margin-right: auto;margin-top: -12px;max-width: 100%;max-height: 100%;width: 80px;height: 74px;margin-top: auto;" alt="KKM">
                                    </div>
                                    <br/>
                                    <form name="loguser" onsubmit="return validateForm()" action="./php/login.php" method="post">
                                        <div class="form-group">
                                            <!-- <input type="text" class="form-control form-control-user" id="idno" name="idno" aria-describedby="" placeholder="ID Number *" onkeyup="this.value = this.value.replace(/[''#&*<>;]/g, '')"> -->
                                            <input type="text" class="form-control form-control-user" id="idno" name="idno" aria-describedby="" placeholder="ID Number *">
                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password *" onkeyup="this.value = this.value.replace(/[''#&*<>;]/g, '')"> -->
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password *">
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success" id="btnSignin" name="btnSignin">Login</button>
                                            <!-- <a href="register.php" style="margin-bottom: 15px;" class="btn btn-primary float-right">
                                                Register
                                            </a> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script>
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        async function validateForm() {
            var idno = document.forms["loguser"]["idno"].value;
            var pass = document.forms["loguser"]["pass"].value;
        
            if (idno == "" || pass == "" ) {
                alert('Kindly complete details!')
                return false;
            }
        }

        $("#btnSignin").click(function(event) {
            swal({
                icon: "info",
                title: 'Loading...',
                text: 'Your transaction request is on process.',
                showCancelButton: false,
                showConfirmButton: false,
                button: false
                
            })
        });

    /* $("#btnLog").click(function() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            alert(this.readyState + ' '+ this.status);
        };
        
                
    }); */

    </script>

     <!-- Bootstrap core JavaScript-->
    
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
    

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables.js"></script>

</body>

</html>