<?php
require_once('connection_file.php');
session_start();
if(isset($_POST['login']))
{
    if(empty($_POST['uname']) || empty($_POST['psw'])){
            header("location:login_lecturer.php?Empty= Please Fill in the Blanks");
       }
       else
       {
        $query="select * from lecturer where lecturer_name='".$_POST['uname']."' and lecturer_id='".$_POST['psw']."'";
        $result=pg_query($con,$query);
        if(pg_fetch_assoc($result))
        {
            $_SESSION['User']=$_POST['uname'];
            header("location:dashboard_lecturer.php");
        }
        else
        {
            header("location:login_lecturer.php?Invalid= Please enter correct name and password ");
        }
       }
}
else
{
    echo 'Not Working Now Guys';
}

?>