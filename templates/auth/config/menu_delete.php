<?php
session_start();
require_once 'connect.php';
global $connect;
    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `dishes` WHERE `dishes`.`id` = '$id'");

header('Location: ../../../menu_admin.php');
?>