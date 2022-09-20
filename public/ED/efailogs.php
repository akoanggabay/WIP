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
                    <label for="processcat">Process Category: *</label>
                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="processcat" name="processcat">
                        <option value=""></option>
                        <?php 
                        include_once("../classes/processcat.php");
                        $ProcessType = ProcessCat::GetAllProcessType();
                        for($i=0;$i<count($ProcessType);$i++){
                        ?>
                                <option value ='<?php echo $ProcessType[$i]->getprocess(); ?>' ><?php echo $ProcessType[$i]->getprocess(); ?></option>
                        <?php 
                            }
                        ?>
                    </select>
                </div>
            </div>
            <br/>
            <div class="row col-lg">
                <div class="col-sm-2">
                    <label for="station">Station: *</label>
                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="station" name="station">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <br/>
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
                <button class="btn btn-success" type="button" id="btnGen" name="btnGen">Generate Reports</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tblefailogs" width="100%" cellspacing="1">
                    <thead>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    $('#btnGen').click(function(event) {
        
        if(document.getElementById("station").value == '' || document.getElementById("start").value == '' || document.getElementById("end").value == '' || document.getElementById("processcat").value == '')
        {
            swal("missing input!",{
                icon: "warning",
                title: "There is a missing input!",
                closeOnClickOutside: false,
            });
            return false;
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = async function() {
            //alert(this.readyState + ' ' + this.status);
            if (this.readyState == 4 && this.status == 200) 
            {
                var result = this.responseText;
                //console.log(result)
                if(result == '"false"')
                {
                    swal("no data!",{
                        icon: "warning",
                        title: "No Available data!",
                        closeOnClickOutside: false,
                    });
                    return false;
                }
                var res = result.split("_");

                if ($.fn.DataTable.isDataTable( '#tblefailogs' ) ) {
                    $('#tblefailogs').DataTable().destroy();
                }
                
                $("#tblefailogs > tbody").empty();
                $("#tblefailogs > thead").empty();
                var header = "";
                var datarows = "";
                var temptd = "";
                
                for(var i = 0;i<Object.keys(JSON.parse(result)[0]).length;i++)
                {
                    header+='<th>' +Object.keys(JSON.parse(result)[0])[i] + '</th>';
                }

                /* Object.keys(JSON.parse(result)[0]).forEach(thead => {
                    header+='<th>' +thead + '</th>';
                }) */
                
                JSON.parse(result).forEach(obj => {
                    temptd = ""
                    Object.entries(obj).forEach(([key, value]) => {
                        temptd+="<td>"+
                        (typeof value ==='object' ? value.date : value)
                        +"</td>"
                    })
                    datarows+="<tr>"+temptd+"</tr>";
                });
                
                $('#tblefailogs > thead').append("<tr>"+header+"</tr>");
                $('#tblefailogs > tbody').append(datarows);
    
                $('#tblefailogs').DataTable({
                    dom: 'Bfrtip',
                    "pageLength": 25,
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
                                
                                }
                            }
                        },
                        'print'
                    ],
                    "order": [[ 0, "desc" ]]
                });
                
                
            }
        };
    xmlhttp.open("GET", "../php/getefailogsreports.php?start="+document.getElementById("start").value+"&end="+document.getElementById("end").value+"&station="+document.getElementById("station").value,true);
    xmlhttp.send();

    });

    $('#processcat').change(function (){
       
        $("#station").empty();
        if(document.getElementById('processcat').value == '')
        {
            return;
        }
        
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            
            var x1 = document.getElementById("station");
            var option1 = document.createElement("option");
            option1.text = '';
            x1.add(option1);
            for (i = 0; i < res.length - 1; i++) 
            { 
                    //alert(res[i]);
                    if(res[i] != '')
                    {
                        var x = document.getElementById("station");
                        var option = document.createElement("option");
                        option.text = res[i];
                        x.add(option);
                    }
                    
            }
        }
        };

        xmlhttp.open("GET", "../php/getstationroute.php?processcat=" + document.getElementById("processcat").value, true);
        xmlhttp.send();

   });

    
    
</script>