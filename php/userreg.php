<?php
include_once("../classes/user.php");
session_start();


$idno = $_POST['idno'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass = $_POST['pass'];
$bday = $_POST['bday'];
$usertype = $_POST['usertype'];

var_dump($_POST);

$exist = User::checkExist($idno);

if(isset($_POST['btnReg']))
{
    if($exist == 'true')
    {
        header("location:../public/main.php?form=RG&path=register&Error=".$_POST['idno']." already registered!");
    }
    else
    {
        $user = new User();
        $user->setidno($idno);
        $user->setfname($fname);
        $user->setlname($lname);
        $user->setpassword($pass);
        $user->setbirthday($bday);
        $user->setusertype($usertype);
        $success = $user->UserReg();

        if($success == true)
        {
            header("location:../public/main.php?form=RG&path=register&Success=$idno is successfully registered!");
        }
        else
        {
            //echo "error_Can't Connect to Database!";
            header("location:../public/main.php?form=RG&path=register&Error=Can't Connect to Database!");
        }

    }
}
?>