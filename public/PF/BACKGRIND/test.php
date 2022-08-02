<div id="test" class="efai">
    <h3>Incoming station</h3>
    <br/>

    <div class="row"> 
        <h5>List of Reject Details</h5>
        <div class="col-lg-12">
            <div class="card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters table-responsive">
                    <table class="table table-bordered" id="tbltest" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                
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
    <br/>
    
    <div class="form-group">
        <button type="button" class="btn btn-outline-success" id="btnDonetest" name = "btnDonetest" value="done">Done</button>
    </div>
</div>
<br/>
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

    $('#btnDonetest').click(function(event) {

    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        //alert(this.readyState + ' ' + this.status);
        if (this.readyState == 4 && this.status == 200) 
        {
            var result = this.responseText;
            var res = result.split("_");
            
            var header;
            var datarows;
            var temptd;
            
            for(var i = 0;i<Object.keys(JSON.parse(result)[0]).length;i++)
            {
                header+='<th>' +Object.keys(JSON.parse(result)[0])[i] + '</th>';
            }
            
            $('#tbltest > tbody').append(header);
            JSON.parse(result).forEach(obj => {
                temptd = ""
                Object.entries(obj).forEach(([key, value]) => {
                    temptd+="<td>"+
                    (typeof value ==='object' ? value.date : value)
                    +"</td>"
                })
                datarows+="<tr>"+temptd+"</tr>";
            });
            $('#tbltest > tbody').append(datarows);
            
        }
    };
    xmlhttp.open("GET", "../classes/efai008.php", true);
    xmlhttp.send();

    });

    
</script>