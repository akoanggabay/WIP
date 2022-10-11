<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Parts Inventory</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">Part Number List</h6>
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
                            <th>Part Number</th>
                            <th>Description</th>
                            <th>Material Category</th>
                            <th>Process Category</th>
                            <th>Supplier</th>
                            <th>Status</th>
                            <th>Available quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/partslotno.php");
                        include_once("../classes/partno.php");
                        
                        $partno = partno::GetAllPartno();
                        $stat ='';
                        
                        for ($i=0; $i < count($partno); $i++) 

                        {   
                            

                        ?>
                        
                        <tr id="tr<?php echo $partno[$i]->getcode(); ?>">
                            <td><?php echo $partno[$i]->getcode(); ?></td>
                            <td><?php echo $partno[$i]->getdescription(); ?></td>
                            <td><?php echo $partno[$i]->getmaterialcategory(); ?></td>
                            <td><?php echo $partno[$i]->getprocesscategory(); ?></td>
                            <td><?php echo $partno[$i]->getsupplier(); ?></td>
                            <td><?php echo $partno[$i]->getqty() === 0 ? "Empty" : "In stock"; ?>
                            
                        </td>
                            <td><?php echo $partno[$i]->getqty(); ?></td>
                            <td>
                                <button class="btn btn-info btn-circle" value="<?php echo $partno[$i]->getcode(); ?>" onclick="Action(value)" title="Withdraw"><i class="fas fa-eye" alt="View"></i></button>
                            </td>
    
                
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ListModal" tabindex="-1" role="dialog" aria-labelledby=""
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
                <h6 id="partno"></h6>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="ListPartsLotnoTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Parts Lot number</th>
                                    <th>Purchase Order number</th>
                                    <th>Process category</th>
                                    <th>Material category</th>
                                    <th>Supplier</th>
                                    <th>Description</th>
                                    <th>Part number</th>
                                    <th>Original quantity</th>
                                    <th>Current quantity</th>
                                    <th>Status</th>
                                    <th>Date received</th>
                                    <th>Date expiration</th>
                                    <th>Last transaction date</th>
                                    <th>Last transaction by</th>
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
        $('#ListPartsLotnoTable').DataTable().destroy();
        $("#ListPartsLotnoTable > tbody").empty();
        document.getElementById("partno").innerHTML = 'List of Lot number for Part number: <b>' + value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var result = this.responseText;
        var res = JSON.parse(result);

        //alert(result);
        if(result == '"false"')
        {
            swal({
                title: 'No available data for Part number: '+value,
                text: 'error',
                showConfirmButton: true,
                button: true,
                icon: "error"
            })
            return false;
        }
        

        for(var i = 0;i<res.length;i++)
            {
                $('#ListPartsLotnoTable > tbody').append('<tr id="tr'+res[i].lotno+'">'+
                '<td><input type="hidden">'+res[i].lotno+'</td>'+
                '<td><input type="hidden">'+res[i].pono+'</td>'+
                '<td><input type="hidden">'+res[i].processcategory+'</td>'+
                '<td><input type="hidden">'+res[i].materialcategory+'</td>'+
                '<td><input type="hidden">'+res[i].supplier+'</td>'+
                '<td><input type="hidden">'+res[i].description+'</td>'+
                '<td><input type="hidden">'+res[i].partno+'</td>'+
                '<td><input type="hidden">'+res[i].origqty+'</td>'+
                '<td><input type="hidden">'+res[i].currqty+'</td>'+
                '<td><input type="hidden">'+res[i].status+'</td>'+
                '<td><input type="hidden">'+res[i].datereceived+'</td>'+
                '<td><input type="hidden">'+res[i].dateexp+'</td>'+
                '<td><input type="hidden">'+res[i].lastupdate+'</td>'+
                '<td><input type="hidden">'+res[i].lastupdatedby+'</td>'+
                '</tr>');
            }

        $('#ListPartsLotnoTable').DataTable({
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
                'print','csv'
            ]
        });

        $('#ListModal').modal('show');
        $("#ListModal").appendTo("body");
            
        }   
        };

        xmlhttp.open("GET", '../php/getpnlotno.php?partno='+value,true);
        xmlhttp.send();
         
    }

</script>