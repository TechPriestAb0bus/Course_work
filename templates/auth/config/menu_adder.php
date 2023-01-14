<?php
session_start();
require_once 'connect.php';
global $connect;

// Сбор переменных из формы
$type = $_POST['type'];
$name = $_POST['name'];
$coast = $_POST['coast'];
$description = $_POST['description'];


$check_name = mysqli_query($connect, "SELECT * FROM `dishes` WHERE `name` = '$name'");

if (mysqli_num_rows($check_name) > 0){
    $_SESSION['message'] = "Блюдо с таким именем уже существует!";
    header('Location: ../../../adder.php');
}
elseif (strlen($name) < 1){
    $_SESSION['message'] = 'Не введено имя!';
    header('Location: ../../../adder.php');
}
elseif (strlen($coast) < 1){
    $_SESSION['message'] = 'Не введена цена!';
    header('Location: ../../../adder.php');
}
elseif (strlen($description) < 1){
    $_SESSION['message'] = 'Не введено описание!';
    header('Location: ../../../adder.php');
}
else {
    mysqli_query($connect, "INSERT INTO `dishes` (`id`, `type`, `name`, `coast`, `description`) VALUES (NULL, '$type', '$name', '$coast', '$description')");
    $_SESSION['message'] = "Блюдо успешно создано!";
    header('location: ../../../adder.php');
}
