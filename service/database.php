<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tokobaju";

    $db = mysqli_connect($hostname, $username, $password, $database);

    if($db->connect_error){
        echo "Koneksi Gagal: ";
        die("eror");
    }
?>