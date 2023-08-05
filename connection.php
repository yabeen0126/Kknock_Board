<?php
    $servername = "localhost";
    $username = "yabeen";
    $password = "1q2w3e4r";
    $db_name = "Kknockboard";
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>