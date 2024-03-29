<?php
session_start();
if(!isset($_SESSION['idno']))
{
    header("location:../index.php");
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
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
    <!-- <link href="../vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="../vendor/datatables/datatables.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="../js/Buttons-2.0.1/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../js/Buttons-2.0.1/buttons.dataTables.css"> -->

    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="logo">
                    <i><img src="../img/logo.png" style="display: block;margin-left: auto;margin-right: auto;margin-top: -12px;max-width: 100%;max-height: 100%;width: 50px;height: 47px;margin-top: auto;" alt="KKM" /></i>
                </div>
                <div class="sidebar-brand-text mx-1">KKM Works<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                Forms
            </div>
            <?php 
                if(@$_SESSION['usertype'] != 'Operator' && @$_SESSION['usertype'] != 'Guest') 
                {
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#POcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-inbox"></i>
                    <span>Purchase Order</span>
                </a>
                <div id="POcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Purchase Order Forms:</h6>
                        <a class="collapse-item" href="?form=PO&path=POReg">PO Registration</a>
                        <!-- <a class="collapse-item" href="?form=PO&path=POView">Reports</a> -->
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <?php } ?>

            <?php 
                if(@$_SESSION['usertype'] != 'Operator' && @$_SESSION['usertype'] != 'Guest') 
                {
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#LNcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-box-open"></i>
                    <span>Lot number</span>
                </a>
                <div id="LNcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Lot number Forms:</h6>
                        <a class="collapse-item" href="?form=LN&path=intlot">Internal Lot Number</a>
                        <a class="collapse-item" href="?form=LN&path=custupload">Customer Lot Number</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <?php } ?>

            <?php 
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#PIcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-microchip"></i>
                    <span>Parts Inventory</span>
                </a>
                <div id="PIcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Parts Inventory:</h6>
                        <?php 
                            if(@$_SESSION['usertype'] != 'Operator')
                            {
                        ?>
                        <a class="collapse-item" href="?form=PI&path=partsupload">Parts Upload</a>
                        <?php 
                            } 
                        ?>
                        <a class="collapse-item" href="?form=PI&path=withdraw">Parts Withdrawal</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            

            <?php 
                if(@$_SESSION['usertype'] != 'Operator' && @$_SESSION['usertype'] != 'Guest') 
                {
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#MEcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Machine</span>
                </a>
                <div id="MEcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Machine:</h6>
                        <a class="collapse-item" href="?form=ME&path=machinereg">Machine Registration</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <?php } ?>
            
            <?php 
                if(@$_SESSION['usertype'] != 'Guest') 
                {
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#PFcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-retweet"></i>
                    <span>Process Flow</span>
                </a>
                <div id="PFcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Process Flow Forms:</h6>
                        <a class="collapse-item" href="?form=PF&path=vi">eLTC</a>
                        <a class="collapse-item" href="?form=PF&path=efai">eFAI</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <?php } ?>

            <?php 
                if(@$_SESSION['usertype'] != 'Operator' && @$_SESSION['usertype'] != 'Guest') 
                {
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#RLcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Release Lot Number</span>
                </a>
                <div id="RLcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Release Lot Number:</h6>
                        <a class="collapse-item" href="?form=RL&path=releaselot">Release Lot Number</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <?php } ?>


            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#IQcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-search"></i>
                    <span>Inquiries</span>
                </a>
                <div id="IQcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Inquiries:</h6>
                        <a class="collapse-item" href="?form=IQ&path=iqintlot">Internal Lot Number</a>
                        <a class="collapse-item" href="?form=IQ&path=iqpartslot">Parts Lot Number</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#EDcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-download"></i>
                    <span>Export Data and Reports</span>
                </a>
                <div id="EDcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data and Reports:</h6>
                        <?php 
                            if(@$_SESSION['usertype'] != 'Operator') 
                            {
                        ?>
                        <a class="collapse-item" href="?form=ED&path=po">PO Number</a>
                        <a class="collapse-item" href="?form=ED&path=ilnlogs">Internal Lot Number Logs</a>
                        <a class="collapse-item" href="?form=ED&path=partsreport">Parts Inventory</a>
                        <a class="collapse-item" href="?form=ED&path=partslog">Parts Logs</a>
                        <a class="collapse-item" href="?form=ED&path=custlotlogs">File Upload Logs(ILN)</a>
                        <a class="collapse-item" href="?form=ED&path=partslotlogs">File Upload Logs(Parts)</a>
                        <?php } ?>
                        <a class="collapse-item" href="?form=ED&path=efailogsoperator" hidden>eFAI Logs(Operator)</a>
                        <a class="collapse-item" href="?form=ED&path=efailogs">eFAI Logs</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            

            <?php 
                if(@$_SESSION['usertype'] != 'Guest') 
                {
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#PCcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-truck-loading"></i>
                    <span>Packing</span>
                </a>
                <div id="PCcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Packing:</h6>
                        <a class="collapse-item" href="?form=PC&path=packing">Packing</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <?php } ?>
            
            <?php 
                if(@$_SESSION['usertype'] == 'Super Administrator' || @$_SESSION['usertype'] == 'Administrator' || @$_SESSION['usertype'] == 'Process Engineer') 
                {
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#RGcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User Maintenance</span>
                </a>
                <div id="RGcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User:</h6>
                        <a class="collapse-item" href="?form=RG&path=register">Add User</a>
                        <a class="collapse-item" href="?form=RG&path=edituser">Edit User</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#LMcollapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Logs Maintenance</span>
                </a>
                <div id="LMcollapsePages" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List of Logs:</h6>
                        <!-- <a class="collapse-item" href="?form=LM&path=iln">Internal Lot Logs</a> -->
                        <a class="collapse-item" href="?form=LM&path=bladeheight">Blade height</a>
                        <a class="collapse-item" href="?form=LM&path=bumpheight">Bump height</a>
                        <a class="collapse-item" href="?form=LM&path=indexsize">Index size</a>
                        <a class="collapse-item" href="?form=LM&path=initialthickness">Initial thickness</a>
                        <a class="collapse-item" href="?form=LM&path=inkdotheight">Ink dot height</a>
                        <a class="collapse-item" href="?form=LM&path=thick">Thickness Logs</a>
                        <a class="collapse-item" href="?form=LM&path=rej">Reject Logs</a>
                        <a class="collapse-item" href="?form=LM&path=ringcut">Ring cut Logs</a>
                        <a class="collapse-item" href="?form=LM&path=rough">Roughness Logs</a>
                        <a class="collapse-item" href="?form=LM&path=warpage">Warpage</a>
                        <a class="collapse-item" href="?form=LM&path=washparameter">Wash parameter</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <?php } ?>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['fname']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <?php if(@$_GET['form']) {include_once("./".@$_GET['form']."/".@$_GET['path'].".php");} ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; WIP System 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" type="submit" name="logout" href="../php/logout.php?logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script> -->
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript" src="../js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="../js/jszip.min.js"></script>
    <script type="text/javascript" src="../js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="../js/pdfmake.min.js"></script>
    <script type="text/javascript" src="../js/buttons.print.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables.js"></script>

    <script>
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        if(<?php echo $_SESSION['alert']; ?> == 1)
        {
            swal("notification!",{
                icon: "warning",
                title: "Your certification will expire in <?php echo $_SESSION['numberofdays']; ?> days!",
                closeOnClickOutside: false,
            });
        }

        <?php $_SESSION['alert'] = 0; ?>
    </script>

</body>

</html>