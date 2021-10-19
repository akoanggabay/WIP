<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Reports</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Purchase Order Reports</h6>
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
                            <th>Id</th>
                            <th>PO Number</th>
                            <th>Customer</th>
                            <th>PO Quantity</th>
                            <th>Tagged Lot number</th>
                            <th>Shipped Lot number</th>
                            <th>Process Category</th>
                            <th>Sub Process Category</th>
                            <th>Remarks</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/po.php");
                        include_once("../classes/intlotno.php");
                        include_once("../classes/customer.php");
                        
                        $po = PO::GetAllPO();
                        $stat ='';
                        $progcolor ='';
                        $progcolorshipped ='';
                        $cust = new Customer;
                        for ($i=0; $i < count($po); $i++) 
                        
                            {
                            $countpo = IntLotno::getcountbyPO($po[$i]->getcustcode(),$po[$i]->getpono());
                            $countposhipped = IntLotno::getcountbyPOShipped($po[$i]->getcustcode(),$po[$i]->getpono());
                            $progress = (intval($countpo) / intval($po[$i]->getqty())) * 100 ;
                            $progressshipped = (intval($countposhipped) / intval($po[$i]->getqty())) * 100 ;

                            $cust->CustomerDetails($po[$i]->getcustcode());
                            /* if(empty($countpo) || $countpo == '' || $countpo == 0)
                            {
                                $countpo = 0;
                            } */
                            if($po[$i]->getstatus() == 'OPEN') 
                            {
                                $stat = 'success';
                            }
                            else
                            {
                                $stat = 'secondary';
                            }

                            if($progress <= 25)
                            {
                                $progcolor = 'danger';
                            }
                            else if($progress > 25 && $progress <= 50)
                            {
                                $progcolor = 'warning';
                            }
                            else if($progress > 51 && $progress <= 75)
                            {
                                $progcolor = 'info';
                            }
                            else if($progress > 76)
                            {
                                $progcolor = 'success';
                            }

                            if($progressshipped <= 25)
                            {
                                $progcolorshipped = 'danger';
                            }
                            else if($progressshipped > 25 && $progressshipped <= 50)
                            {
                                $progcolorshipped = 'warning';
                            }
                            else if($progressshipped > 51 && $progressshipped <= 75)
                            {
                                $progcolorshipped = 'info';
                            }
                            else if($progressshipped > 76)
                            {
                                $progcolorshipped = 'success';
                            }


                        ?>
                        
                        <tr>
                            <td><?php echo $po[$i]->getid(); ?></td>
                            <td><?php echo $po[$i]->getpono(); ?></td>
                            <td><?php echo $cust->getcustname(); ?></td>
                            <td><?php echo $po[$i]->getqty(); ?></td>
                            <td>
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $progress; ?>%</div>
                                </div>
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-<?php echo $progcolor; ?>" role="progressbar"
                                        style="width: <?php echo $progress; ?>%" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $progressshipped; ?>%</div>
                                </div>
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-<?php echo $progcolorshipped; ?>" role="progressbar"
                                        style="width: <?php echo $progressshipped; ?>%" aria-valuenow="<?php echo $progressshipped; ?>" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td><?php echo $po[$i]->getprocesscat(); ?></td>
                            <td><?php echo $po[$i]->getsubprocesscat(); ?></td>
                            <td><?php echo $po[$i]->getremarks(); ?></td>
                            <td>
                                <button type="button" class="btn btn-outline-<?php echo $stat; ?>"  value="<?php echo $po[$i]->getpono(); ?>" onclick="Action(value)"><?php echo $po[$i]->getstatus(); ?></button>
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
                <h5 class="modal-title" id="">List of Internal Lot number</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
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
                {
                    extend: 'pdfHtml5',
                    text: 'Save as PDF'
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