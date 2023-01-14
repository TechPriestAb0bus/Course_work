<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['dish']);
    unset($_SESSION['cart']);
    unset($_SESSION['message']);
    unset($_SESSION['status']);
    header('location: ../../../index.php');
