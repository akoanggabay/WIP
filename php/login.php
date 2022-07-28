<?php 

session_start();
include_once("../classes/user.php");

if(isset($_POST['btnSignin']))
{
    if(empty($_POST['idno']) || empty($_POST['password']))
    {
    	header("location:../index.php?Error=Please Fill in the blanks");
    }
    else
    {
    	 $check = User::checkUser($_POST['idno'],$_POST['password']);
    	if($check=='true')
    	{
    		$user = new User();
    		$user->UserData($_POST['idno']);
            
            $_SESSION['idno']=$_POST['idno'];
            $_SESSION['birthday']=$user->getbirthday();
            $_SESSION['fname']=$user->getfname();
            $_SESSION['lname']=$user->getlname();
            $_SESSION['usertype']=$user->getusertype();
            header("location:../public/main.php");
            
    	}
        else if($check=='false1')
        {
            header("location:../index.php?Error=User doesn't exist!");
        }
        else if($check=='false2')
        {
            header("location:../index.php?Error=User ID has been disabled!");
        }
    	else if($check=='false')
    	{
    		header("location:../index.php?Error=User and password did not Match!");
    	}
    }
}
?>
