<?php
include_once("../classes/po.php");
include_once("../classes/custlotno.php");
include_once("../classes/intlotno.php");
include_once("../classes/intlotlogs.php");
include_once("../classes/wi.php");

session_start();
	//$account = trim($_SESSION['account']);
$custcode = $_GET['custcode'];
$custlotno = $_GET['custlotno'];
$pono = $_GET['pono'];
$wafersize = $_GET['wafersize'];
$devicetype = $_GET['devicetype'];
$wr = $_GET['wr'];
$result = "";
$qty = "";
//echo $wafersize;
$custlot = CustLotno::GetDetails($custlotno,$custcode);
$data = json_encode($custlot[0]);
$data2 = json_decode($data);

$po = PO::GetDetails($pono,$custcode);
$podata = json_encode($po[0]);
$podata2 = json_decode($podata);

$sstation = json_decode($_GET['sstation']);
$sinstruction = json_decode($_GET['sinstruction']);
$scondition = json_decode($_GET['scondition']);

$count = IntLotno::getcountbyPO($custcode,$pono);

$total = intval($count) + intval($data2->waferqty);

if($data2->processcat == 'BACKGRIND')
{
    $qty = $data2->waferqty;
}
else
{
    $qty = $data2->qty;
}
if($podata2->status == 'OPEN')
{
    $avail = intval($podata2->qty) - intval($count);
    if($data2->status == 'UPLOAD')
    {
        if($total <= $podata2->qty)
        {
            $intlot = new IntLotno;
            
            $prefix = IntLotNo::IntLotNo(date("Y"));

            $intlotno = date("Y").sprintf("%02d",date("W")).'-'.$prefix;
            //echo $intlotno;
            $intlot->setcustcode($custcode);
            $intlot->setintlotno($intlotno);
            $intlot->setcustlotno($custlotno);
            $intlot->setpono($pono);
            $intlot->setorigqty($qty);
            $intlot->setcurrqty($qty);
            $intlot->setstatus('DONE');
            $intlot->setstation('REG');
            $intlot->setwafersize($wafersize);
            $intlot->setdevicetype($devicetype);
            $intlot->setwr($wr);
            $intlot->setlastupdatedby($_SESSION['idno']);

            $success = $intlot->AddIntLotno();
            //echo $success;

            if($success == true)
            {
                $wi = new WI;
                for($x=0;$x<count($sstation);$x++){

                    $wi->setintlotno($intlotno);
                    $wi->setstation($sstation[$x]);
                    $wi->setinstruction($sinstruction[$x]);
                    $wi->setcondition($scondition[$x]);
                    $wi->setlastupdatedby($_SESSION['idno']);

                    $wi->AddWI();

                }

                $intlotlogs = new IntLotLogs;
                
                $intlotlogs->setcustcode($custcode);
                $intlotlogs->setintlot($intlotno);
                $intlotlogs->setstation('REG');
                $intlotlogs->setmachine('');
                $intlotlogs->setqtyin($qty);
                $intlotlogs->setdatein(date("Y-m-d h:i:sa"));
                $intlotlogs->setlastupdatedby($_SESSION['idno']);
                $intlotlogs->setstatus('DONE');
                $intlotlogs->setwaferno('');
                $intlotlogs->setwaferrun('');

                $intlotlogs->AddIntLotLogs();

                $clot = new CustLotno;

                $clot->setstatus('LINKED');
                $clot->setcustcode($custcode);
                $clot->setcustlotno($custlotno);

                $clot->updateStatus();

                if(intval($avail) == intval($data2->waferqty))
                {
                    $ponodata = new PO;

                    $ponodata->setstatus('CLOSED');
                    $ponodata->setpono($pono);

                    $ponodata->ClosePO();
                }

                echo 'success_Internal Lot number: <b>'.$intlotno.'</b> has been generated!_'.$intlotno;
            }
            else
            {
                echo "error_Can't Connect to Database!";
            }
    
            
        }
        else
        {
            echo 'error_Lot quantity exceeding current PO quantity! <b>Only '.$avail.' Wafer quantity available.</b>';
        }
    }
    else
    {
        echo 'error_Cannot generate Internal Lot number. <b>'.$custlotno.' is already linked to another Internal Lot number!</b>';
    }
    
}
else
{
    echo 'error_PO already closed!';
}



//echo $total,$data2->waferqty,$podata2->qty;


?>