<?php
    $host = "localhost";
    $user = "ssm971213";
    $pw = "z335577s!!";
    $db = "ssm971213";

    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    if($connect->connect_error){
        echo "Connect Failed" . $connect->connect_error;
    }
?>
