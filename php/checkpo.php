<?php
include_once("../classes/po.php");
include_once("../classes/forunits.php");
include_once("../classes/custlotno.php");
include_once("../classes/intlotno.php");

session_start();
	//$account = trim($_SESSION['account']);
$custcode = $_GET['custcode'];
$custlotno = $_GET['custlotno'];
$pono = $_GET['pono'];
$result = "";



$custlot = CustLotno::GetDetails($custlotno,$custcode);
$data = json_encode($custlot[0]);
$data2 = json_decode($data);

$po = PO::GetDetails($pono,$custcode);
$podata = json_encode($po[0]);
$podata2 = json_decode($podata);

$exist = ForUnits::checkExist($custcode);
$qty = 0;
if($exist == 'true')
{
    $forunits = new ForUnits;

    $forunits->GetDetails($custcode);
    $qty = $data2->waferqty * $forunits->getqty();
}
else
{
    $qty = $data2->waferqty;
}

$count = IntLotno::getcountbyPO($custcode,$pono);

$total = intval($count) + intval($qty);
/* echo $total;
echo $count;
echo $qty; */

if($podata2->status == 'OPEN')
{
    $avail = round($podata2->qty,2) - round($count,2);
    if($total <= $podata2->qty)
    {
        if($data2->processcat == $podata2->processcat)
        {
            if($avail <= 0)
            {
                $po = new PO;
                $po->setstatus('CLOSED');
                $po->setpono($pono);
                $po->ClosePO();
                echo 'success_PO number:<b>'.$pono.'</b> is now <b> CLOSED </b> There is no available PO quantity!';
            }
            else
            {
                echo 'success_PO number: <b>'.$pono.'</b> has <b>'.$avail.'</b> available PO quantity!';
            }
            
        }
        else
        {
            echo 'error_Purchase Order: <b>'.$podata2->pono.'</b> is available for <b>'.$podata2->processcat.'</b> Process category only!';
        }
        
    }
    else
    {
        echo 'error_Lot quantity exceeding current PO quantity! <b>Only '.$avail.' PO quantity available.</b>';
    }
}
else
{
    echo 'error_PO already closed!';
}



//echo $total,$data2->waferqty,$podata2->qty;


?>