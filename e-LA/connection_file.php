<?php 

    $host="localhost";
    $user="postgres";
    $password="1234567890";
    $db="database12102020";

    $con = pg_connect("host=localhost port=5432 dbname=database12102020 user=postgres password=1234567890");

    if(!$con){
        die('check connection'.pgpg_last_error($con));
    }


?>