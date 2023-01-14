<?php
session_start();
require_once '../auth/config/connect.php';
global $connect;

if (isset($_SESSION['user'])) {
}
else {
    header('location: ../../login.php');
}

$_SESSION['status'] = "active";

$user_id = $_SESSION['user']['id'];

$check_status_number = mysqli_query($connect, "SELECT * FROM `status_number` WHERE `id` = '1'");
$status_number = mysqli_fetch_assoc($check_status_number);
$_SESSION['status_number'] = [
        "number" => $status_number['number'],
    ];
$status_number_show = $_SESSION['status_number']['number'];
if ($status_number_show < 10) {
    $_SESSION['status_number']['number'] = "00".$status_number_show;
}
elseif (10 < $status_number_show and $status_number_show < 100){
    $_SESSION['status_number']['number'] = "0".$status_number_show;
}
elseif (100 < $status_number_show and $status_number_show < 1000){
    $_SESSION['status_number']['number'] = $status_number_show;
}
elseif ($status_number_show === 999){
    $_SESSION['status_number']['number'] = $status_number_show;
    mysqli_query($connect,"UPDATE `status_number` SET `number` = '1' WHERE `status_number`.`id` = 1");
}

$status_number_show++;
mysqli_query($connect,"UPDATE `status_number` SET `number` = '$status_number_show' WHERE `status_number`.`id` = 1");
mysqli_query($connect, "INSERT INTO `status_order` (`user_id`, `status_number`) VALUES ('$user_id', '$status_number_show')");
header('location: ../../status.php');