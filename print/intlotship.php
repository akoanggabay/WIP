<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Printing - KKM Lot</title>

  </head>
  <body>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
</style>
<style type="text/css">
body{
  margin-left: 15px;
  margin-top: 20px;
}
#footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  margin: 30px;
  text-align: left;
}
#label{
    -webkit-print-color-adjust: exact;
    font-family: verdana;
  }

  * {
    font-family: verdana;
    font-size: 10px;
  }

  .barcodeRef{
    position: absolute;
    top: 80px;
    left: 80px;
  }

 /*  .barcodeParts{
    position: absolute;
    bottom: 100px;
    left: 70px;
  } */

  .barcodeLot{
    position: absolute;
    top: 150px;
    left: 80px;
  }

  .barcodeQty{
    position: absolute;
    top: 185px;
    left: 80px;
  }

  .barcodeRemarks{
    position: absolute;
    top: 225px;
    left: 80px;
  }

  .barcodeRef2{
    position: absolute;
    top: 72px;
    left: 73px;
  }

  .barcodeParts2{
    position: absolute;
    top: 107px;
    left: 73px;
  }

  .barcodeLot2{
    position: absolute;
    top: 143px;
    left: 73px;
  }

  .barcodeQty2{
    position: absolute;
    top: 178px;
    left: 73px;
  }

  .barcodeRemarks2{
    position: absolute;
    top: 215px;
    left: 73px;
  }

  table{
    width:764px;
    border:1px solid #000;
    
  }

  hr{
    margin-top:20px;
    border:1px dashed #555;
  }

  th{
    background-color: #fff;
    color:#000;
    font-weight:normal;
  }

  td{
    border:1px solid #000;
    padding: 2px;
  }

  .noborder td{
    border:0px solid #000;
  }

  .qrcode{
    position: absolute;top:35px;left: 315px;
   
    }
  .qrcode2{position: absolute;top:35px;left: 695px;z-index: 999;}
  h3{
    font-weight:normal;
  }
</style>
<?php 

include_once("../classes/custlotno.php");
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/customer.php");
include_once("../classes/thickness.php");
include_once("../classes/roughness.php");
include_once("../classes/reject.php");

$data = IntLotno::GetDetails($_GET['intlotno']);
$intlotdata = json_encode($data[0]);
$intlotdata2 = json_decode($intlotdata);

$data2 = IntLotLogs::GetAllIntLogsDone($_GET['intlotno']);
$intlotlogs = json_encode($data2);
$intlotlogs2 = json_decode($intlotlogs);

$data3 = Thickness::GetAllThicknessLogs($_GET['intlotno']);
$thicklogs = json_encode($data3);
$thicklogs2 = json_decode($thicklogs);

$data4 = Roughness::GetAllRoughnessLogs($_GET['intlotno']);
$roughlogs = json_encode($data4);
$roughlogs2 = json_decode($roughlogs);

$data5 = Reject::GetAllIntRejLogs($_GET['intlotno']);
$rejectlogs = json_encode($data5);
$rejectlogs2 = json_decode($rejectlogs);

$cust = new Customer;

$cust->CustomerDetails($intlotdata2->custcode);
?>
<input type="text" id ="brm" value="<?php echo $intlotdata2->brm; ?>" hidden>
</head>
<body>
  <table>
    <tr class="noborder">
        <td colspan="2" style="text-align:left;width:33%"><div class="barcodeParts"></div></td>
        <td colspan="2" style="text-align:left;font-size:18px;font-weight:bolder;"><?php echo 'LOT TRAVELLER CARD'; ?></td>
        <td colspan="2"style="text-align:right;"><img src="../img/image002.png" style="width: 100px;height: 96px;" alt=""></td>
    </tr>
  </table>
  <table>
    <tr>
      <td colspan="6" style="text-align:center;font-size:12px;">Lot Number Details</td>
    </tr>
    <tr>
      <td style="font-weight:bold;">Customer Code : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->custcode; ?></td>
      <td style="font-weight:bold;">Wafer/Panel Size(inch/mm) : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->wafersize; ?></td>
      
    </tr>
    <tr>
      <td style="font-weight:bold;">Customer Name : </td>
      <td style="text-align:center;"><?php echo $cust->getcustname(); ?></td>
      <td style="font-weight:bold;">Lot type : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->lottype; ?></td>
      
    </tr>
    <tr>
      <td style="font-weight:bold;">Device No : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->deviceno; ?></td>
      <td style="font-weight:bold;">Wafer/Panel Thickness(mils/um) : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->waferthickness; ?></td>
      
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Internal Lot No : </td>
      <td style="text-align:center;"><?php echo $_GET['intlotno']; ?></td>
      <td style="font-weight:bold;">PO No : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->pono; ?></td>
      
    </tr>

    <tr>
      
      <td style="font-weight:bold;">Required Thickness(mils/um) : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->requiredthickness; ?></td>
      <td style="font-weight:bold;">Start Date : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->datestart; ?></td>
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Customer Lot No : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->custlot; ?></td>
      <td style="font-weight:bold;">Ship Back Date : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->shipbackdate;; ?></td>
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Wafer/Panel Qty : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->waferqty; ?></td>
      <td style="font-weight:bold;">Lot Qty : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->qty;; ?></td>
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Wafer/Panel no : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->waferno; ?></td>
      <td style="font-weight:bold;">Wafer/Panel run : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->waferrun; ?></td>
      
    </tr>
    <tr>
      <td style="font-weight:bold;">Device type : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->devicetype; ?></td>
      <td style="font-weight:bold;">Z2 Wheel requirement : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->wr; ?></td>
    </tr>
  </table>
  <br/><br/>

  <table>
  <tr>
      <td colspan="10" style="text-align:center;font-size:12px;">Lot Number Logs</td>
    </tr>
  <tr rowspan = "3">
      <th>Process</th>
      <th>Machine No</th>
      <th>Cassette no</th>
      <th>Qty In</th>
      <th>Qty Out</th>
      <th>Date In</th>
      <th>Date Out</th>
      <th>Processed By</th>
    </tr>
    <?php
    for($i=0; $i < count($intlotlogs2); $i++)
    {
    ?>
        
    
    <tr style="font-size:12px;">
        <td style="text-align:center;"><?php echo $intlotlogs2[$i]->station; ?></td>
        <td style="text-align:center;"><?php echo $intlotlogs2[$i]->machine; ?></td>
        <td style="text-align:center;"><?php echo $intlotlogs2[$i]->cassno; ?></td>
        <td style="text-align:center;"><?php echo $intlotlogs2[$i]->qtyin; ?></td>
        <td style="text-align:center;"><?php echo $intlotlogs2[$i]->qtyout;?></td>
        <td style="text-align:center;"><?php echo $intlotlogs2[$i]->datein; ?></td>
        <td style="text-align:center;"><?php echo $intlotlogs2[$i]->dateout; ?></td>
        <td style="text-align:center;"><?php echo $intlotlogs2[$i]->lastupdatedby; ?></td>
    </tr>
    <?php } ?>
  </table>
  
  <?php 
  if($intlotdata2->processcat == 'BACKGRIND')
  {

  ?>
  <h3>Backgrind Response Measurement</h3>
  <div style="width:100%;">
    <input type="checkbox" id ="Set-up" value="Set-up"  disabled> <span style="margin-right: 140px">Set-up</span>
    <input type="checkbox" id ="Monitoring" value="Monitoring"  disabled> <span style="margin-right: 140px">Monitoring</span>
    <input type="checkbox" id ="PSC" value="PSC"  disabled> <span style="margin-right: 140px">PSC</span>
    <input type="checkbox" id ="Customer requirement" value="Customer requirement"  disabled> <span>Customer requirement</span>
 </div>
 
<?php } ?>
 <table>
  <tr>
      <td colspan="8" style="text-align:center;font-size:12px;">Reject Logs</td>
    </tr>
  <tr rowspan = "3">
      <th>Process</th>
      <th>Machine ID</th>
      <th>Wafer/Panel no</th>
      <th>Defect details</th>
      <th>Defect quantity</th>
      <th>Remarks</th>
      <th>Date Input</th>
      <th>Rejected By</th>
    </tr>
    <?php
    for($i=0; $i < count($rejectlogs2); $i++)
    {
    ?>
        
    
    <tr style="font-size:12px;">
        <td style="text-align:center;"><?php echo $rejectlogs2[$i]->station; ?></td>
        <td style="text-align:center;"><?php echo $rejectlogs2[$i]->machine; ?></td>
        <td style="text-align:center;"><?php echo $rejectlogs2[$i]->waferno; ?></td>
        <td style="text-align:center;"><?php echo $rejectlogs2[$i]->ddetails;?></td>
        <td style="text-align:center;"><?php echo $rejectlogs2[$i]->dqty; ?></td>
        <td style="text-align:center;"><?php echo $rejectlogs2[$i]->remarks; ?></td>
        <td style="text-align:center;"><?php echo $rejectlogs2[$i]->lastupdate; ?></td>
        <td style="text-align:center;"><?php echo $rejectlogs2[$i]->lastupdatedby; ?></td>

    </tr>
    <?php } ?>
  </table>
  
  <?php 
  if($intlotdata2->processcat == 'BACKGRIND')
  {

  ?>
  <table>
  <tr>
      <td colspan="10" style="text-align:center;font-size:12px;">Final Thickness</td>
    </tr>
  <tr rowspan = "3">
      <th>Process</th>
      <th>Wafer no</th>
      <th>Point 1</th>
      <th>Point 2</th>
      <th>Point 3</th>
      <th>Point 4</th>
      <th>Point 5</th>
      <th>Point average</th>
      <th>TTV</th>
    </tr>
    <?php
    for($i=0; $i < count($thicklogs2); $i++)
    {
    ?>
        
    
    <tr style="font-size:12px;">
        <td style="text-align:center;"><?php echo $thicklogs2[$i]->station; ?></td>
        <td style="text-align:center;"><?php echo $thicklogs2[$i]->waferno; ?></td>
        <td style="text-align:center;"><?php echo $thicklogs2[$i]->p1; ?></td>
        <td style="text-align:center;"><?php echo $thicklogs2[$i]->p2; ?></td>
        <td style="text-align:center;"><?php echo $thicklogs2[$i]->p3;?></td>
        <td style="text-align:center;"><?php echo $thicklogs2[$i]->p4; ?></td>
        <td style="text-align:center;"><?php echo $thicklogs2[$i]->p5; ?></td>
        <td style="text-align:center;"><?php echo $thicklogs2[$i]->pave; ?></td>
        <td style="text-align:center;"><?php echo $thicklogs2[$i]->ttv; ?></td>
    </tr>
    <?php } ?>
    
    
  </table>

  <?php } ?>
  <br/>
  <?php 
  if($intlotdata2->processcat == 'BACKGRIND')
  {

  ?>
  <table>
  <tr>
      <td colspan="7" style="text-align:center;font-size:12px;">Roughness</td>
    </tr>
  <tr rowspan = "3">
      <th>Process</th>
      <th>Point 1</th>
      <th>Point 2</th>
      <th>Point 3</th>
      <th>Point 4</th>
      <th>Point 5</th>
      <th>Point average</th>
    </tr>
    <?php
    for($i=0; $i < count($roughlogs2); $i++)
    {
    ?>
        
    
    <tr style="font-size:12px;">
        <td style="text-align:center;"><?php echo $roughlogs2[$i]->station; ?></td>
        <td style="text-align:center;"><?php echo $roughlogs2[$i]->r1; ?></td>
        <td style="text-align:center;"><?php echo $roughlogs2[$i]->r2; ?></td>
        <td style="text-align:center;"><?php echo $roughlogs2[$i]->r3; ?></td>
        <td style="text-align:center;"><?php echo $roughlogs2[$i]->r4; ?></td>
        <td style="text-align:center;"><?php echo $roughlogs2[$i]->r5; ?></td>
        <td style="text-align:center;"><?php echo $roughlogs2[$i]->rave; ?></td>

    </tr>
    <?php } ?>
  </table>
  <?php } ?>

  <div id="footer">
    Form No: K0001-0034-01<br/>
    Form Rev: 02
  </div>
  
  <!-- <div style="break-after: page;"></div>
    Test page 2 -->
  <?php $partcode = 'testbarcode'; ?>
  <script src="../js/print/jquery.js"></script>
  <script src="../js/print/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/print/jquery-qrcode-0.14.0.js"></script>
 
  <script src="../js/print/jquery-barcode.js"></script>
  <script type="text/javascript">

 /*  */

   
    $('.barcodeParts').barcode('<?php echo $intlotdata2->custlot; ?>',"code128",{
      barWidth:1,barHeight:25,marginHRI: 1,
      fontSize:8,output:"css",posX:0,posY:10});
    </script>
  </body>

<script>
  $("#setup,#monitoring,#psc,#cr").prop('checked', false);
  value = document.getElementById("brm").value;
  //alert(value);
  document.getElementById(value).checked = true;
  document.getElementById(value).disabled = false;
</script>
<script type="text/javascript" >
    
    window.print();
    setTimeout(function(){ window.close(); }, 300);
    
</script>