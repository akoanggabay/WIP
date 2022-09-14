<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Reports</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">Internal Lot number Logs</h6>
        </div>
        
        <div id = "success" class="alert alert-success alert-dismissible" role="alert" hidden>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div id = "error" class="alert alert-danger alert-dismissible" role="alert" hidden>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <br/>
        <div class="form-group">
            <div class="row col-lg">
                <div class="col-sm-2">
                    <label for="bday">Start date: *</label>
                </div>
                <div class="col-sm-3">
                    <input type="datetime-local" class="form-control" id="start" name="start"
                        placeholder="">
                </div>
                <div class="col-sm-2">
                    <label for="bday">End date: *</label>
                </div>
                <div class="col-sm-3">
                    <input type="datetime-local" class="form-control" id="end" name="end"
                        placeholder="">
                </div>
            </div>
            
        </div>

        <div class="form-group">
            <div class="col-sm-4">
                <button class="btn btn-success" id="btnGen" name="btnGen">Generate Reports</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="IntLotLogs" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tracking no</th>
                            <th>Customer</th>
                            <th>Internal lot number</th>
                            <th>Customer lot number</th>
                            <th>Thickness requirements</th>
                            <th>Wafer quantity</th>
                            <th>Lot quantity</th>
                            <th>Yield</th>
                            <th>Lot category</th>
                            <th>Device no</th>
                            <th>Status</th>
                            <th>Station</th>
                            <th>Cassette no</th>
                            <th>Machine</th>
                            <th>Qty in</th>
                            <th>Qty out</th>
                            <th>Date in</th>
                            <th>Shift</th>
                            <th>Date out</th>
                            <th>Shift</th>
                            <th>Processed by</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="../vendor/jquery/jquery.min.js"></script>

<script>
    $("#btnGen").click(function() {
        
        $('#IntLotLogs').DataTable().destroy();
        $("#IntLotLogs > tbody").empty();
        //alert(new Date(document.getElementById("start").value).toString().split("GMT")[0])
        if(document.getElementById("start").value == '' || document.getElementById("end").value == '')
        {
            document.getElementById("error").innerHTML = 'Kindly select <b>Start date</b> and <b>End date</b>!';
            document.getElementById("error").hidden = false;
            document.getElementById("success").hidden = true;
            return false;
        }
        var start = new Date(document.getElementById("start").value).toString().split("GMT")[0];
        var end = new Date(document.getElementById("end").value).toString().split("GMT")[0]
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            console.log(result)
            var res = JSON.parse(result);
            
            
            if(result == '"false"')
            {
                document.getElementById("error").innerHTML = 'No available data for Start date: <b>'+start+'</b> and End date: <b>'+end;
                document.getElementById("error").hidden = false;
                document.getElementById("success").hidden = true;
                return false
            }
            document.getElementById("success").innerHTML = '<b>Success!</b> Reports has been generated for Start date: <b>'+start+'</b> and End date: <b>'+end;
            document.getElementById("success").hidden = false;
            document.getElementById("error").hidden = true;
            for(var i = 0;i<res.length;i++)
            {
                console.log(res[i].dateout + " " + res[i].dateoutshift)
                $('#IntLotLogs > tbody').append('<tr id="tr'+res[i].trackingno+'">'+
                '<td><input type="hidden">'+res[i].trackingno+'</td>'+
                '<td><input type="hidden">'+res[i].custcode+'</td>'+
                '<td><input type="hidden">'+res[i].intlot+'</td>'+
                '<td><input type="hidden">'+res[i].custlot+'</td>'+
                '<td><input type="hidden">'+res[i].requiredthickness+'</td>'+
                '<td><input type="hidden">'+res[i].waferqty+'</td>'+
                '<td><input type="hidden">'+res[i].qty+'</td>'+
                '<td><input type="hidden">'+(res[i].yield).toFixed(2)+'</td>'+
                '<td><input type="hidden">'+res[i].lottype+'</td>'+
                '<td><input type="hidden">'+res[i].deviceno+'</td>'+
                '<td><input type="hidden">'+res[i].status+'</td>'+
                '<td><input type="hidden">'+res[i].station+'</td>'+
                '<td><input type="hidden">'+res[i].cassno+'</td>'+
                '<td><input type="hidden">'+res[i].machine+'</td>'+
                '<td><input type="hidden">'+res[i].qtyin+'</td>'+
                '<td><input type="hidden">'+res[i].qtyout+'</td>'+
                '<td><input type="hidden">'+res[i].datein+'</td>'+
                '<td><input type="hidden">'+res[i].dateinshift+'</td>'+
                '<td><input type="hidden">'+res[i].dateout+'</td>'+
                '<td><input type="hidden">'+res[i].dateoutshift+'</td>'+
                '<td><input type="hidden">'+res[i].lastupdatedby+'</td>'+
                '</tr>');
            }

            $('#IntLotLogs').DataTable({
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
                ],
                "order": [[ 2, "desc" ],[ 10, "desc" ]]
            });
            }
        };
        xhttp.open("GET", "../php/getintlogsreports.php?start="+document.getElementById("start").value+"&end="+document.getElementById("end").value,true);
        xhttp.send();
    });
</script>