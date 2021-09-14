<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Hold Lot number</h6>
        </div>
        <div id = "success" class="alert alert-success alert-dismissible" role="alert" hidden>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div id = "error" class="alert alert-danger alert-dismissible" role="alert" hidden>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <br/>
        <div class="card-body">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Internal Lot number</th>
                            <th>Customer Lot number</th>
                            <th>PO number</th>
                            <th>Wafer current quantity</th>
                            <th>Current station</th>
                            <th>Start time</th>
                            <th>Wafer size</th>
                            <th>Hold By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classes/po.php");
                        include_once("../classes/intlotno.php");

                        
                        $intlotno = IntLotno::GetAllHoldLot();
                        
                        for ($i=0; $i < count($intlotno); $i++) 
                        
                            {

                        ?>
                        
                        <tr id="tr<?php echo $intlotno[$i]->getintlotno(); ?>">
                            <td><?php echo $intlotno[$i]->getintlotno(); ?></td>
                            <td><?php echo $intlotno[$i]->getcustlotno(); ?></td>
                            <td><?php echo $intlotno[$i]->getpono(); ?></td>
                            <td><?php echo $intlotno[$i]->getcurrqty(); ?></td>
                            <td><?php echo $intlotno[$i]->getstation(); ?></td>
                            <td><?php echo $intlotno[$i]->getstarttime(); ?></td>
                            <td><?php echo $intlotno[$i]->getwafersize(); ?></td>
                            <td><?php echo $intlotno[$i]->getlastupdatedby(); ?></td>
                            <td><button type="button" class="btn btn-outline-info" value = "<?php echo $intlotno[$i]->getintlotno(); ?>" onclick="Action(value)">RELEASE</button></td>
    
                
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function Action(value)
    {
        //alert(value);
        if(!confirm("Would you like to release Internal Lot number: " + value + "?"))
        {
            return false;
        }
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            var res = result.split("_");
            alert(result);
                if(res[0] == 'success')
                {
                    document.getElementById("success").innerHTML = res[1];
                    document.getElementById("success").hidden = false;
                    document.getElementById("error").hidden = true;
                    $("#tr"+value).remove();
                }
                else if(res[0] == 'error')
                {
                    document.getElementById("error").innerHTML = res[1];
                    document.getElementById("error").hidden = false;
                    document.getElementById("success").hidden = true;
                    return false;
                }
                else if(res[0] == 'session')
                {
                    alert("Login session timeout!")
                    location.reload();
                    return false;
                }
            
            }
        };
        xhttp.open("GET", "../php/releaselot.php?intlotno="+value,true);
        xhttp.send();
    }
</script>