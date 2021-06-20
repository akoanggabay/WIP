<?php
include_once("../classes/upload.php");
include_once("../classes/filelotlogs.php");
session_start();

if(isset($_POST["btnUpload"])){

$upload = new Upload;
//$filename=$_FILES["uploadfile"]["tmp_name"];

$file = $_FILES["uploadfile"]["tmp_name"];
$filename = $_FILES["uploadfile"]["name"];

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
    
    if($csv[0] == '' || $csv[1] == '' || $csv[2] == '' || $csv[3] == '' || $csv[4] == '' || $csv[5] == '' || $csv[6] == '' || $csv[7] == '' || $csv[8] == '' || $csv[9] == '')
    {
        $error += 1;
    }
    else
    {
        try {
            $exist = $upload->checkExist(trim($csv[0]),($csv[1]));
            if($exist == 'false')
            {
                $upload->setcustcode(trim($csv[0]));
                $upload->setcustlotno(trim($csv[1]));
                $upload->setdeviceno(trim($csv[2]));
                $upload->setqty(trim($csv[3]));
                $upload->setwaferqty(trim($csv[4]));
                $upload->setdatestart(trim($csv[5]));
                $upload->setshipbackdate(trim($csv[6]));
                $upload->setwaferthickness(trim($csv[7]));
                $upload->setrequiredthickness(trim($csv[8]));
                $upload->setprocesscat(trim($csv[9]));
                $upload->setlottype(trim($csv[10]));
                $upload->setuploadby('Duane');
                $upload->setstatus('UPLOAD');
                $uploaded = $upload->AddCustlotno();

                $logs->setfilename($filename);
                $logs->setcustcode(trim($csv[0]));
                $logs->setcustlotno(trim($csv[1]));
                $logs->setstatus('SUCCESS');
                $logs->setremarks('');
                $logs->setlastupdatedby('Duane');
                $logs->AddFilelotlogs();
                //echo $uploaded;
                $succlot .= trim($csv[1]).',';
                $success += 1;
            }
            else
            {
                $logs->setfilename($filename);
                $logs->setcustcode(trim($csv[0]));
                $logs->setcustlotno(trim($csv[1]));
                $logs->setstatus('FAILED');
                $logs->setremarks('Customer Lot Number already exist');
                $logs->setlastupdatedby('Duane');
                $logs->AddFilelotlogs();
                $error +=1 ;
                $faillot .= trim($csv[1]).',';
            }
            
        } catch (\Throwable $th) {
            $logs->setfilename($filename);
                $logs->setcustcode(trim($csv[0]));
                $logs->setcustlotno(trim($csv[1]));
                $logs->setstatus('FAILED');
                $logs->setremarks('File format error');
                $logs->setlastupdatedby('Duane');
                $logs->AddFilelotlogs();
            $error +=1 ;
            $faillot .= trim($csv[1]).',';
        }
        
    }
    
    
}

echo $succlot.' '.$faillot;
}	 
?>		 