<?php
session_start();
require_once '../auth/config/connect.php';
global $connect;

$goods_id = $_GET['id'];
$user_id = $_SESSION['user']['id'];
$type = $_GET['type'];

$check_food = mysqli_query($connect, "SELECT * FROM `cart` WHERE `user_id` = '$user_id' AND `goods_id` = '$goods_id'");
if (mysqli_num_rows($check_food) > 0) {
    $food = mysqli_fetch_assoc($check_food);

    $_SESSION['food'] = [
        "number" => $food['number']
        ];
    echo $user_id;
    echo $goods_id;
    mysqli_query($connect, "DELETE FROM `cart` WHERE `cart`.`user_id` = '$user_id' AND `goods_id` = '$goods_id'");
}

header('Location: ../../cart.php');
