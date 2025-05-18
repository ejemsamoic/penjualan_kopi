<?php
include "service/database.php";
session_start();

if(isset($_SESSION['is_login'])){
    header("Location: atmin.php");
} else{
    header("Location: login.php");
}
?>
