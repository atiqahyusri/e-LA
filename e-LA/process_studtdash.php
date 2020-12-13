<?php
require_once('connection_file.php');
session_start();
if(isset($_POST['studentlogin']))
{
    if(empty($_POST['studentuname']) || empty($_POST['studentpsw'])){
            header("location:login_student.php?Empty= Please Fill in the Blanks");
       }
       else
       {
        $squery="select * from student where student_name='".$_POST['studentuname']."' and student_id='".$_POST['studentpsw']."'";
        $sresult=pg_query($con,$squery);
        if(pg_fetch_assoc($sresult))
        {
            $_SESSION['Student']=$_POST['studentuname'];
            header("location:dashboard_student.php");
        }
        else
        {
            header("location:login_student.php?Invalid= Please enter correct name and password ");
        }
       }
}
else
{
    echo 'Not Working Now Guys';
}

?>