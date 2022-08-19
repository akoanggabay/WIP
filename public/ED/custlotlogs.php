<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Reports</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Customer Lot Number Logs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tracking no</th>
                            <th>Filename</th>
                            <th>Customer name/Part no</th>
                            <th>Customer/Parts Lot number</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Date Upload</th>
                            <th>Uploaded By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/filelotlogs.php");  
                        $CustLogs = FileLotLogs::GetAllFileLogs();
                        $stat ='';
                        for ($i=0; $i < count($CustLogs); $i++) 
                            {
                                
                            if($CustLogs[$i]->getstatus() == 'SUCCESS') 
                            {
                                $stat = 'success';
                            }
                            else
                            {
                                $stat = 'danger';
                            }
                        ?>
                        
                        <tr>
                            <td><?php echo $CustLogs[$i]->getid(); ?></td>
                            <td><?php echo $CustLogs[$i]->getfilename(); ?></td>
                            <td><?php echo $CustLogs[$i]->getcustcode(); ?></td>
                            <td><?php echo $CustLogs[$i]->getcustlotno(); ?></td>
                            <td><button type="button" class="btn btn-outline-<?php echo $stat; ?>"><?php echo $CustLogs[$i]->getstatus(); ?></button></td>
                            <td><?php echo $CustLogs[$i]->getremarks(); ?></td>
                            <td><?php echo $CustLogs[$i]->getlastupdate()->format('F j, Y, g:i:s a'); ?></td>
                            <td><?php echo $CustLogs[$i]->getlastupdatedby(); ?></td>
                            
    
                
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>