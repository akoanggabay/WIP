<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Reports</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-800">Parts Lot number Logs</h6>
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
                <table class="table table-bordered" id="PartLotLogs" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tracking no</th>
                            <th>Part no</th>
                            <th>Parts Lot no</th>
                            <th>Quantity</th>
                            <th>Processed date</th>
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
        
        $('#PartLotLogs').DataTable().destroy();
        $("#PartLotLogs > tbody").empty();
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
            //console.log(result)
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
                $('#PartLotLogs > tbody').append('<tr id="tr'+res[i].trackingno+'">'+
                '<td><input type="hidden">'+res[i].trackingno+'</td>'+
                '<td><input type="hidden">'+res[i].partno+'</td>'+
                '<td><input type="hidden">'+res[i].partslotno+'</td>'+
                '<td><input type="hidden">'+res[i].qty+'</td>'+
                '<td><input type="hidden">'+res[i].lastupdate+'</td>'+
                '<td><input type="hidden">'+res[i].lastupdatedby+'</td>'+
                '</tr>');
            }

            $('#PartLotLogs').DataTable({
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
                "order": [ 2, "desc" ]
            });
            }
        };
        xhttp.open("GET", "../php/getpartlogsreport.php?start="+document.getElementById("start").value+"&end="+document.getElementById("end").value,true);
        xhttp.send();
    });
</script>