<h1 class="h3 mb-4 text-gray-900">Parts Lot number Inquiry</h1>
<div class="row">
    <div class="col-lg-6">
        <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="card border-left-danger">
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Parts Lot number: *</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="partslotno" name="partslotno"  class="form-control input-sm">
                                            </div>
                                        </div>
                                        <br/>
                                        
                                        <div class="form-group">
                                            <button type="button" class="btn btn-success" id="btnView" name = "btnView" onkeypress="if (event.keyCode == 13)  return false;">View Details</button>
                                            <button type="button" class="btn btn-warning float-right" id="btnClear" name = "btnClear">Clear details</button>
                                        </div>

                                        
                                    </div>
                                    
                                    <!-- <div class="col-lg-6">
                                        Purchase Order Details:
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading"><h5>Parts Lot Details</h5></div>
                                                <div class="panel-body">
                                                    <br/>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Purchase Number:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="pono" name="pono"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Process Category:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="processcategory" name="processcategory"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Material Category:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="materialcategory" name="materialcategory"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Supplier:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="supplier" name="supplier"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Description:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="description" name="description"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Part number:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="partno" name="partno"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Original quantity:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="origqty" name="origqty"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Current quantity:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="currqty" name="currqty"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Status:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="status" name="status"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Date received:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="datereceived" name="datereceived"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Date expired:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="dateexp" name="dateexp"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Last processed date:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="lastupdate" name="lastupdate"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label>Last processed by:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" id="lastupdatedby" name="lastupdatedby"  class="form-control input-sm" value="" readonly><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/>

<div class="row"> 
    <h5>Parts Lot number Logs</h5>
    <div class="col-lg-12">
        <div class="card border-left-danger">
            <div class="card-body">
                <div class="row no-gutters table-responsive">
                <table class="table table-bordered"  id="tblpartslogs" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tracking no</th>
                            <th>Quantity</th>
                            <th>Date Processed</th>
                            <th>Processed By</th>
                            <th>Remarks</th>

                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
</br><br/>

<script src="../vendor/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $('#partslotno').focus();
    $("#btnClear").click(function() {
        document.getElementById("partslotno").disabled = false;
        $("input[type=text]").val('');
        $('#partslotno').focus();
        $('#tblpartslogs').DataTable().destroy();
        $("#tblpartslogs > tbody").empty();
    });
    $("#btnView").click(function() {
        $('#tblpartslogs').DataTable().destroy();
        //window.open('http://localhost/wip/public/test.php');
        if(document.getElementById("partslotno").value == '')
        {
            swal("missing input!",{
                icon: "warning",
                title: "Please input Parts Lot number!",
                closeOnClickOutside: false,
            });
            return false;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            //alert(result);
            if(res[0] == '"false"')
            {
                $("#tblpartslogs > tbody").empty();
                $('#partslotno').focus();
                $("input[type=text]").val('');
                swal("No Data Available!",{
                    icon: "error",
                    title: 'No Data available for Internal Lot number: '+document.getElementById("partslotno").value,
                    closeOnClickOutside: false,
                });
            }
            else
            {
                document.getElementById("partslotno").disabled = true;
                $("#tblpartslogs > tbody").empty();
                $('#partslotno').focus();
                
                var lotno = JSON.parse(res[0])[0];
                var lotlogs = JSON.parse(res[1]);

                document.getElementById("pono").value = lotno.pono;
                document.getElementById("processcategory").value = lotno.processcategory;
                document.getElementById("materialcategory").value = lotno.materialcategory;
                document.getElementById("supplier").value = lotno.supplier;
                document.getElementById("description").value = lotno.description;
                document.getElementById("partno").value = lotno.partno;
                document.getElementById("origqty").value = lotno.origqty;
                document.getElementById("currqty").value = lotno.currqty;
                document.getElementById("status").value = lotno.status;
                document.getElementById("datereceived").value = lotno.datereceived;
                document.getElementById("dateexp").value = lotno.dateexp;
                document.getElementById("lastupdate").value = lotno.lastupdate;
                document.getElementById("lastupdatedby").value = lotno.lastupdatedby;
                
                for(var i = 0;i<lotlogs.length;i++)
                {
                    $('#tblpartslogs > tbody').append('<tr id="tr'+lotlogs[i].trackingno+'">'+
                    '<td>'+lotlogs[i].trackingno+'</td>'+
                    '<td>'+lotlogs[i].qty+'</td>'+
                    '<td>'+lotlogs[i].lastupdate+'</td>'+
                    '<td>'+lotlogs[i].lastupdatedby+'</td>'+
                    '<td>'+lotlogs[i].remarks+'</td>'+
                    '</tr>');
                }

                $('#tblpartslogs').DataTable({
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
            }
            
        }
        };
        xmlhttp.open("GET", "../php/viewpln.php?partslotno=" + document.getElementById("partslotno").value, true);
        xmlhttp.send();
    });

});
</script>