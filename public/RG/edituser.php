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
                            <th>Edit</th>
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
                                <button class="btn btn-warning btn-circle"><i class="fas fa-edit" alt="Edit"></i></button>
                                <button class="btn btn-danger btn-circle"><i class="fas fa-trash" alt="Delete"></i></button>
                            </td>
                
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="POModal" tabindex="-1" role="dialog" aria-labelledby=""
    aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 90%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id=""></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="card-header py-3">
                <h6 id="po"></h6>
            </div>
            <div class="modal-body">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="ListPOTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Internal Lot number</th>
                                    <th>Customer Lot number</th>
                                    <th>PO number</th>
                                    <th>Original Wafer quantity</th>
                                    <th>Current Wafer quantity</th>
                                    <th>Wafer size</th>
                                    <th>Status</th>
                                    <th>Start time</th>
                                    <th>Current station</th>
                                    <th>Last date processed</th>
                                    <th>Last processed by</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="../vendor/jquery/jquery.min.js"></script>

<script>
    function Action(value)
    {
        //alert(value);
        $('#ListPOTable').DataTable().destroy();
        $("#ListPOTable > tbody").empty();
        document.getElementById("po").innerHTML = 'List of Internal Lot number for PO number: <b>' + value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var result = this.responseText;
        var res = JSON.parse(result);

        //alert(result);
        if(result == '"false"')
        {
            document.getElementById("error").innerHTML = 'No available data for PO number: <b>'+value+'</b>';
            document.getElementById("error").hidden = false;
            return false
        }
        document.getElementById("error").hidden = true;

        for(var i = 0;i<res.length;i++)
            {
                $('#ListPOTable > tbody').append('<tr id="tr'+res[i].intlot+'">'+
                '<td><input type="hidden">'+res[i].custcode+'</td>'+
                '<td><input type="hidden">'+res[i].intlot+'</td>'+
                '<td><input type="hidden">'+res[i].custlot+'</td>'+
                '<td><input type="hidden">'+res[i].pono+'</td>'+
                '<td><input type="hidden">'+res[i].origqty+'</td>'+
                '<td><input type="hidden">'+res[i].currqty+'</td>'+
                '<td><input type="hidden">'+res[i].wafersize+'</td>'+
                '<td><input type="hidden">'+res[i].status+'</td>'+
                '<td><input type="hidden">'+res[i].starttime+'</td>'+
                '<td><input type="hidden">'+res[i].station+'</td>'+
                '<td><input type="hidden">'+res[i].lastupdate+'</td>'+
                '<td><input type="hidden">'+res[i].lastupdatedby+'</td>'+
                '</tr>');
            }

        $('#ListPOTable').DataTable({
            dom: 'Bfrtip',
            lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10 rows', '25 rows', '50 rows', 'Show all' ]
            ],
            buttons: [
                'pageLength',
                {
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        }
                    }
                },
                'print'
            ]
        });

        $('#POModal').modal('show');
        $("#POModal").appendTo("body");
            
        }   
        };

        xmlhttp.open("GET", '../php/getpointlot.php?pono='+value,true);
        xmlhttp.send();

        

         
    }
</script>