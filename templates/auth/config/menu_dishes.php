<?php
session_start();
require_once 'connect.php';
global $connect;

$check_dishes = mysqli_query($connect, "SELECT * FROM `dishes` WHERE `type` = 'starter' ORDER BY `id` ");
if (mysqli_num_rows($check_dishes) > 0){
    for ($i = 0; $i < mysqli_num_rows($check_dishes); $i++) {
        $dish = mysqli_fetch_assoc($check_dishes);
        $_SESSION['dish'.$i] = [
            "name" => $dish['name'],
            "coast" => $dish['coast'],
            "description" => $dish['description']
        ];
    }
    for ($i = 0; $i < mysqli_num_rows($check_dishes); $i++) {
        print $_SESSION['dish'.$i]['name'];
    }
}
