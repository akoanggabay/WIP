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
body {
  margin-top: 10px;
  margin-left: 15px;
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
</style>
<?php 

include_once("../classes/custlotno.php");
include_once("../classes/intlotno.php");
include_once("../classes/customer.php");
include_once("../classes/wi.php");

$data = IntLotno::GetDetails($_GET['intlotno']);
$intlotdata = json_encode($data[0]);
$intlotdata2 = json_decode($intlotdata);

$data2 = WI::GetAllWI($_GET['intlotno']);
$intlotWI = json_encode($data2);
$intlotWI2 = json_decode($intlotWI);
$cust = new Customer;

$cust->CustomerDetails($intlotdata2->custcode);
?>

</head>
<body>
  <table>
    <tr class="noborder">
        <td colspan="2" style="text-align:left;width:33%"><div class="barcodeParts"></div></td>
        <td colspan="2" style="text-align:left;font-size:18px;font-weight:bolder;"><?php echo 'LOT TRAVELLER CARD'; ?></td>
        <td colspan="2"style="text-align:right;"><img src="../img/image002.png" style="width: 100px;height: 96px;" alt=""></td>
    </tr>
  </table>
  <table style="">
    <tr>
      <td colspan="6" style="text-align:center;font-size:18px;font-weight:bolder;">Lot Number Details</td>
    </tr>
    <tr>
      <td style="font-weight:bold;">Customer Code : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->custcode; ?></td>
      <td style="font-weight:bold;">Wafer Size(inch/mm) : </td>
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
      <td style="font-weight:bold;">Wafer Thickness(mils/um) : </td>
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
      <td style="font-weight:bold;">Wafer Qty : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->waferqty; ?></td>
      <td style="font-weight:bold;">Lot Qty : </td>
      <td style="text-align:center;"><?php echo $intlotdata2->qty;; ?></td>
      
      
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
      <td colspan="3" style="text-align:center;font-size:18px;font-weight:bolder;">Process Flow</td>
    </tr>
  <tr rowspan = "3">
      <th>Process</th>
      <th>Special Instruction</th>
      <th>Condition</th>
    </tr>

    <?php
    for($i=0; $i < count($intlotWI2); $i++)
    {
    ?>
    <tr style="font-size:12px;">
        <td style="text-align:center;"><?php echo @$intlotWI2[$i]->station; ?></td>
        <td style="text-align:center;"><?php echo @$intlotWI2[$i]->instruction; ?></td>
        <td style="text-align:center;"><?php echo @$intlotWI2[$i]->condition; ?></td>
      </tr>

    <?php } ?>
  </table>

  <!-- <div style="break-after: page;"></div>
    Test page 2 -->
  <?php $partcode = 'testbarcode'; ?>
  <script src="../js/print/jquery.js"></script>
  <script src="../js/print/jquery-3.2.1.slim.min.js"></script>
  <script src="../js/print/jquery-qrcode-0.14.0.js"></script>
 
  <script src="../js/print/jquery-barcode.js"></script>
  <script type="text/javascript">

 /*  */

   
    $('.barcodeParts').barcode('<?php echo $_GET['intlotno']; ?>',"code128",{
      barWidth:1,barHeight:25,marginHRI: 1,
      fontSize:8,output:"css",posX:0,posY:10});
    </script>
  </body>

<script type="text/javascript" > 
    window.print();
    setTimeout(function(){ window.close(); }, 300);
    
</script>