<?php
    $servername = "localhost";
    $username = "habin";
    $password = "qwert1234";
    $db_name = "Kknockboard";
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>
