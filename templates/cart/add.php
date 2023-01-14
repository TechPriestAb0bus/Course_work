<?php
session_start();
require_once '../auth/config/connect.php';
global $connect;

if (isset($_SESSION['user'])) {
} else {
    header('location: ../../login.php');
}

$goods_id = $_GET['id'];
$user_id = $_SESSION['user']['id'];
$type = $_GET['type'];

$check_food = mysqli_query($connect, "SELECT * FROM `cart` WHERE `user_id` = '$user_id' AND `goods_id` = '$goods_id'");
if (mysqli_num_rows($check_food) > 0) {
    $food = mysqli_fetch_assoc($check_food);

    $_SESSION['food'] = [
        "number" => $food['number']
        ];

    $new_number = $_SESSION['food']['number'] + 1;
    mysqli_query($connect, "UPDATE `cart` SET `number` = '$new_number' WHERE `cart`.`user_id` = '$user_id' AND `goods_id` = '$goods_id'");
}
else {
    mysqli_query($connect, "INSERT INTO `cart` (`id`, `user_id`, `goods_id`, `number`, `type`) VALUES (NULL, '$user_id', '$goods_id', '1', '$type')");
}
header('Location: ../../cart.php');
