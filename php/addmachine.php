<?php
include_once("../classes/machine.php");
session_start();

$processcat = $_GET['processcat'];
$station = $_GET['station'];
$type = $_GET['type'];
$machineid = $_GET['machineid'];


$exist = Machine::checkExist($machineid,$processcat);

if($_SESSION['idno'])
{
    if($exist == 'true')
    {
        echo 'error_<b>Error!</b> '.$machineid.' already exist on our Database!';
    }
    else
    {
        $machine = new Machine();
        $machine->setmachineid($machineid);
        $machine->setprocesscat($processcat);
        $machine->setstation($station);
        $machine->setmachinetype($type);
        $machine->setstatus('RUNNING');
        $machine->setlastupdatedby($_SESSION['idno']);
        $success = $machine->addMachine();

        if($success == true)
        {
            echo 'success_<b>Success!</b> '.$machineid.' successfully added!';
        }
        else
        {
            echo "error_Can't Connect to Database!";
        }

    }
}
else
{
    echo 'session_Login session timeout!';
}

?>