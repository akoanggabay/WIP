<?php
include_once("../classes/custlotno.php");
include_once("../classes/filelotlogs.php");
session_start();

if(isset($_POST["btnUpload"])){

$upload = new CustLotno;
//$filename=$_FILES["uploadfile"]["tmp_name"];

$file = $_FILES["uploadfile"]["tmp_name"];
$filename = $_FILES["uploadfile"]["name"];
$custcode = $_POST["custcode"];
$startdate = $_POST["startdate"];
$shipbackdate = $_POST["shipbackdate"];
$processcat = $_POST["processcat"];
$lottype = $_POST["lottype"];

$logs = new FileLotLogs;
$csvData = file_get_contents($file);
$data = explode(PHP_EOL, $csvData);
//echo count($data);
$error = 0;
$success = 0;
$succlot = '';
$faillot='';
for($i=1;$i < (count($data)); $i++)
{
    $csv = explode(",",trim($data[$i]));
    if($csv[0] == '' || $csv[1] == '' || $csv[2] == '' || $csv[3] == '' || $csv[4] == '' || $csv[5] == '')
    {
        $error += 1;
    }
    else
    {
        try {
            $exist = $upload->checkExist(trim($csv[0]),$custcode);
            if($exist == 'false')
            {
                $upload->setcustcode(trim($custcode));
                $upload->setcustlotno(trim($csv[0]));
                $upload->setdeviceno(trim($csv[1]));
                $upload->setqty(trim($csv[2]));
                $upload->setwaferqty(trim($csv[3]));
                $upload->setdatestart($startdate);
                $upload->setshipbackdate($shipbackdate);
                $upload->setwaferthickness(trim($csv[4]));
                $upload->setrequiredthickness(trim($csv[5]));
                $upload->setprocesscat(trim($processcat));
                $upload->setlottype(trim($lottype));
                $upload->setuploadby($_SESSION['idno']);
                $upload->setstatus('UPLOAD');
                $uploaded = $upload->AddCustlotno();

                $logs->setfilename($filename);
                $logs->setcustcode(trim($custcode));
                $logs->setcustlotno(trim($csv[0]));
                $logs->setstatus('SUCCESS');
                $logs->setremarks('');
                $logs->setlastupdatedby($_SESSION['idno']);
                $logs->AddFilelotlogs();
                //echo $uploaded;
                $succlot .= trim($csv[1]).',';
                $success += 1;
            }
            else
            {
                $logs->setfilename($filename);
                $logs->setcustcode(trim($custcode));
                $logs->setcustlotno(trim($csv[0]));
                $logs->setstatus('FAILED');
                $logs->setremarks('Customer Lot Number already exist');
                $logs->setlastupdatedby($_SESSION['idno']);
                $logs->AddFilelotlogs();
                $error +=1 ;
                $faillot .= trim($csv[1]).',';
            }
            
        } catch (\Throwable $th) {
            $logs->setfilename($filename);
                $logs->setcustcode(trim($custcode));
                $logs->setcustlotno(trim($csv[0]));
                $logs->setstatus('FAILED');
                $logs->setremarks('File format error');
                $logs->setlastupdatedby($_SESSION['idno']);
                $logs->AddFilelotlogs();
            $error +=1 ;
            $faillot .= trim($csv[0]).',';
        }
        
    }
    
    
}


header("location:../public/main.php?form=LN&path=custupload&Success=$filename is successfully uploaded!");

}	 
?>		 