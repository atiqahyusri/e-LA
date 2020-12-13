<?php
    session_start();
    include('login_layout.php');
    #echo 'dashboard' .$_SESSION['User'];

?>

<!DOCTYPE html>
<html lang="en">
<div >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css'  href="cssfile/new_styledash.css">
</head>
<body>
<div>
    <iframe class='center' width="1300" height="2150" src="https://app.powerbi.com/reportEmbed?reportId=adadfcc4-33ac-44d7-91b5-0c91e8dd738d&autoAuth=true&ctid=1f551aeb-7ea1-472c-9ac0-09de9bf33051&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWVhc3QtYXNpYS1yZWRpcmVjdC5hbmFseXNpcy53aW5kb3dzLm5ldC8ifQ%3D%3D" 
    frameborder="0" allowFullScreen="false"></iframe>
</div>
</body>
</html>
