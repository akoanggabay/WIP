<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Reports</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Purchase Order Reports</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>PO Number</th>
                            <th>Customer Code</th>
                            <th>Quantity</th>
                            <th>Process Category</th>
                            <th>Sub Process Category</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/po.php");  
                        $po = PO::GetAllPO();
                        $stat ='';
                        for ($i=0; $i < count($po); $i++) 
                            {
                                
                            if($po[$i]->getstatus() == 'OPEN') 
                            {
                                $stat = 'success';
                            }
                            else
                            {
                                $stat = 'secondary';
                            }
                        ?>
                        
                        <tr>
                            <td><?php echo $po[$i]->getid(); ?></td>
                            <td><?php echo $po[$i]->getpono(); ?></td>
                            <td><?php echo $po[$i]->getcustcode(); ?></td>
                            <td><?php echo $po[$i]->getqty(); ?></td>
                            <td><?php echo $po[$i]->getprocesscat(); ?></td>
                            <td><?php echo $po[$i]->getsubprocesscat(); ?></td>
                            <td><button type="button" class="btn btn-outline-<?php echo $stat; ?>"><?php echo $po[$i]->getstatus(); ?></button></td>
    
                
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>