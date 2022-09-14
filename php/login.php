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
        sleep(1);
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
            $_SESSION['numberofdays']=$user->getnumberofdays();

            if(intval($user->getnumberofdays()) <= 14 && intval($user->getnumberofdays()) >= 0)
            {
                if($user->getalert() == 0)
                {
                    $user->UpdateUserAlert($_POST['idno'],1);
                    $_SESSION['alert'] = 1;

                    $mail = "Operator certification will expire in ".$user->getnumberofdays()." days\n\nID number: ".$_POST['idno']."\nFull name: ".$user->getfname()." " .$user->getlname();

                    //$to = 'ldiaz@kkmworks.com';
                    $to = 'dalpuerto@suhay.com.ph,ldiaz@kkmworks.com';
                    $subject = "Operator certification alert";
                    $txt = $mail;
                    $headers = "From: MES Alert <wip.kkmworks@gmail.com>". "\r\n" .
                    'Reply-To: wip.kkmworks@gmail.com';
                    mail($to,$subject,$txt,$headers);
                }
                
            }
            else
            {
                $user->UpdateUserAlert($_POST['idno'],0);
                $_SESSION['alert'] = 0;
            }
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
