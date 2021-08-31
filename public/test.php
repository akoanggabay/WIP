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
    background-color: #000;
    color:#fff;
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
$account = 'G2';
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
      <td style="text-align:center;"><?php echo 'Customer Code'; ?></td>
      <td style="font-weight:bold;">Wafer Size(inch/mm) : </td>
      <td style="text-align:center;"><?php echo 'Wafer Size'; ?></td>
      
    </tr>
    <tr>
      <td style="font-weight:bold;">Customer Name : </td>
      <td style="text-align:center;"><?php echo 'Customer Name'; ?></td>
      <td style="font-weight:bold;">BD No./Rev : </td>
      <td style="text-align:center;"><?php echo 'BD No'; ?></td>
      
    </tr>
    <tr>
      <td style="font-weight:bold;">Device No : </td>
      <td style="text-align:center;"><?php echo 'Device NoDevice NoDevice No'; ?></td>
      <td style="font-weight:bold;">Lot type : </td>
      <td style="text-align:center;"><?php echo 'Engineering Lot'; ?></td>
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Internal Lot No : </td>
      <td style="text-align:center;"><?php echo 'Internal Lot no'; ?></td>
      <td style="font-weight:bold;">Wafer Thickness(mils/um) : </td>
      <td style="text-align:center;"><?php echo 'Wafer Thickness'; ?></td>
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Wafer Run No : </td>
      <td style="text-align:center;"><?php echo 'Wafer Run No'; ?></td>
      <td style="font-weight:bold;">Required Thickness(mils/um) : </td>
      <td style="text-align:center;"><?php echo 'Required Thickness'; ?></td>
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Customer Lot No : </td>
      <td style="text-align:center;"><?php echo 'Customer Lot no'; ?></td>
      <td style="font-weight:bold;">PO No : </td>
      <td style="text-align:center;"><?php echo 'Purchase Order Number'; ?></td>
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Wafer No : </td>
      <td style="text-align:center;"><?php echo 'Wafer No'; ?></td>
      <td style="font-weight:bold;">Ship To Code : </td>
      <td style="text-align:center;"><?php echo 'Ship to Code'; ?></td>
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Wafer Qty : </td>
      <td style="text-align:center;"><?php echo 'Wafer Qty'; ?></td>
      <td style="font-weight:bold;">Start Date : </td>
      <td style="text-align:center;"><?php echo 'Start Date'; ?></td>
      
    </tr>

    <tr>
      <td style="font-weight:bold;">Lot Qty : </td>
      <td style="text-align:center;"><?php echo 'Lot Qty'; ?></td>
      <td style="font-weight:bold;">Ship Back Date : </td>
      <td style="text-align:center;"><?php echo 'Ship Back Date'; ?></td>
      
    </tr>
     
  </table>
  <table>
  <tr>
      <td colspan="7" style="text-align:center;font-size:18px;font-weight:bolder;">Lot Number Logs</td>
    </tr>
  <tr rowspan = "3">
      <th>Process</th>
      <th>Machine No</th>
      <th>Qty In</th>
      <th>Qty Out</th>
      <th>Date In</th>
      <th>Date Out</th>
      <th>Processed By</th>
    </tr>
    <tr style="font-size:12px;">
        <td style="text-align:center;"><?php echo strtoupper('INCOMING'); ?></td>
        <td style="text-align:center;"><?php echo 'MC0001'; ?></td>
        <td style="text-align:center;"><?php echo '16'; ?></td>
        <td style="text-align:center;"><?php echo '14'; ?></td>
        <td style="text-align:center;"><?php echo 'June 10, 2021 17:17';?></td>
        <td style="text-align:center;"><?php echo 'June 10, 2021 18:55';?></td>
        <td style="text-align:center;"><?php echo strtoupper('Duane'); ?></td>
      </tr>
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

   
    $('.barcodeParts').barcode('<?php echo $partcode; ?>',"code128",{
      barWidth:1,barHeight:25,marginHRI: 1,
      fontSize:8,output:"css",posX:0,posY:10});
    </script>
  </body>

<script type="text/javascript" > 
    window.print();
    setTimeout(function(){ window.close(); }, 300);
    
</script>