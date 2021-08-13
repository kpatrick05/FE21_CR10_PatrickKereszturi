<?php

    $hostName = "127.0.0.1";
    $userName = "root";
    $password = "";
    $dbName=  "fswd13_cr10_patrickkereszuri_biglibrary";

    $connect= mysqli_connect($hostName,$userName,$password,$dbName);

    if(mysqli_connect_error()) {
        die("Connection failed");
    } 
?> 