<?php
include_once("../classes/partslotno.php");
include_once("../classes/partno.php");
include_once("../classes/filepartslogs.php");
session_start();







if(!$_SESSION['idno'])
{
    echo "error_Login session timeout!";
    return false;
}


    $upload = new partslotno;
    //$filename=$_FILES["uploadfile"]["tmp_name"];
    $part = new partno;
    $file = $_FILES["uploadfile"]["tmp_name"];
    $filename = $_FILES["uploadfile"]["name"];
    $processcat = $_POST["processcat"];
    $materialcat = $_POST["materialcat"];
    $datereceived = $_POST["datereceived"];
    $dateexp = $_POST["dateexp"];
    $partno = $_POST["partno"];
    
    $logs = new FilePartsLogs;
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
        if($csv[0] == '' || $csv[1] == '' || $csv[2] == '')
        {
            $error += 1;
        }
        else
        {
            try {
                $exist = $upload->checkExist(trim(preg_replace('/[\t|\s{,}]/', '', $csv[0])));
                if($exist == 'false')
                {
                    $part->PartNoDetails($partno);
                    $upload->setlotno(trim(preg_replace('/[\t|\s{,}]/', '', $csv[0])));
                    $upload->setpono(trim($csv[1]));
                    $upload->setprocesscategory($processcat);
                    $upload->setmaterialcategory($materialcat);
                    $upload->setsupplier($part->getsupplier());
                    $upload->setdescription($part->getdescription());
                    $upload->setpartno($partno);
                    $upload->setdatereceived($datereceived);
                    $upload->setorigqty(trim($csv[2]));
                    $upload->setcurrqty(trim($csv[2]));
                    $upload->setstatus('INSTOCK');
                    $upload->setdatereceived($datereceived);
                    $upload->setdateexp($dateexp);
                    $upload->setlastupdate(date("Y-m-d h:i:s"));
                    $upload->setlastupdatedby($_SESSION['idno']);
                    $upload->setactive(1);
                    $uploaded = $upload->AddPartsLotno();
                    
                    if($uploaded == true)
                    {
                        $logs->setfilename($filename);
                        $logs->setpartno(trim($partno));
                        $logs->setpartslotno(trim($csv[0]));
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
                        $logs->setpartno(trim($partno));
                        $logs->setpartslotno(trim($csv[0]));
                        $logs->setstatus('FAILED');
                        $logs->setremarks('File format error');
                        $logs->setlastupdatedby($_SESSION['idno']);
                        $logs->AddFilelotlogs();
                        $error +=1 ;
                        $faillot .= trim($csv[0]).',';
                    }
                    
                }
                else
                {
                    $logs->setfilename($filename);
                    $logs->setpartno(trim($partno));
                    $logs->setpartslotno(trim($csv[0]));
                    $logs->setstatus('FAILED');
                    $logs->setremarks('Parts Lot Number already exist');
                    $logs->setlastupdatedby($_SESSION['idno']);
                    $logs->AddFilelotlogs();
                    $error +=1 ;
                    $faillot .= trim($csv[1]).',';
                }
                
            } catch (\Throwable $th) {
                $logs->setfilename($filename);
                $logs->setpartno(trim($partno));
                $logs->setpartslotno(trim($csv[0]));
                $logs->setstatus('FAILED');
                $logs->setremarks('File format error');
                $logs->setlastupdatedby($_SESSION['idno']);
                $logs->AddFilelotlogs();
                $error +=1 ;
                $faillot .= trim($csv[0]).',';
            }
            
        }
        
        
    }
    
    
echo "success_$filename is successfully uploaded!";





?>		 