<?php 
include_once("../classes/user.php");
session_start();

$user = new User;

$idno = $_GET['idno'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$bday = $_GET['bday'];
$newpass = $_GET['newpass'];
$usertype = $_GET['usertype'];

$user->setfname($fname);
$user->setlname($lname);
$user->setbirthday($bday);
$user->setusertype($usertype);
$user->setpassword($newpass);



if($_SESSION['idno'])
{
    $success = $user->UpdateUser($idno);
    if($success == true)
    {
        echo 'success_Successfully Updated!';
    }
    else
    {
        echo 'error_Failed to update user details!';
    }

    //echo $success;
}
else
{
    echo 'session_login session timeout!';
}

?>