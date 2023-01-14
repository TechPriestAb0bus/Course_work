<?php
session_start();
if (isset($_SESSION['user'])) {
    require_once 'templates/auth/config/connect.php';
    global $connect;
    $ultimate_coast = 0;
}
else {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Вход</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The Venue template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="plugins/jquery-timepicker/jquery.timepicker.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/cart.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo">
                            <a href="#">
                                <div>Little Italy</div>
                                <div>restaurant</div>
                            </a>
                        </div>
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li><a href="index.php">Главная</a></li>
                                <li><a href="about.php">О нас</a></li>
                                <li><a href="menu.php">Меню</a></li>
                                <li><a href="contact.php">Контакты</a></li>
                                <li><a href="status.php">Статус</a></li>
                                <?php
                                session_start();
                                if (isset($_SESSION['user'])) {
                                    if ($_SESSION['user']['login'] === 'root') {
                                        echo '<li><a href="admin.php">Админ</a></li>';
                                        echo '<li><a href="templates/auth/config/logout.php">Выход</a></li>';
                                    }
                                    else {
                                        echo '<li><a href="cart.php">Корзина</a></li>';
                                        echo '<li><a href="templates/auth/config/logout.php">Выход</a></li>';
                                    }
                                }
                                else {
                                    echo '<li><a href="cart.php">Корзина</a></li>';
                                    echo "<li><a href='login.php'>Вход</a></li>";
                                }
                                ?>
                            </ul>
                        </nav>
                        <div class="reservations_phone ml-auto">Бронь: +7 999 999 9999</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hamburger -->

    <div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
        <div class="hamburger">
            <div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
                <span>menu</span>
                <div class="hamburger_container">
                    <div class="menu_hamburger">
                        <div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                        <div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
                        <div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu -->
    <div class="menu trans_800">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a href="index.php">Главная</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="menu.php">Меню</a></li>
                <li><a href="contact.php">Контакты</a></li>
                <li><a href="status.php">Статус</a></li>
                <?php
                session_start();
                if (isset($_SESSION['user'])) {
                    if ($_SESSION['user']['login'] === 'root') {
                        echo '<li><a href="admin.php">Админ</a></li>';
                        echo '<li><a href="templates/auth/config/logout.php">Выход</a></li>';
                    }
                    else {
                        echo '<li><a href="cart.php">Корзина</a></li>';
                        echo '<li><a href="templates/auth/config/logout.php">Выход</a></li>';
                    }
                }
                else {
                    echo '<li><a href="cart.php">Корзина</a></li>';
                    echo "<li><a href='login.php'>Вход</a></li>";
                }
                ?>
            </ul>
        </div>
        <div class="menu_reservations_phone ml-auto">Бронь: +7 999 999 9999</div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/home.jpg" data-speed="0.8"></div>
        <div class="parent">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                        </div>
                    </div>
                </div>


                <div class="row themenu_row">


                    <!-- Закуски -->
                    <div class="col-lg-4 themenu_column">
                        <div class="themenu_image"></div>
                        <div class="themenu_col trans_400">
                            <div class="themenu_col_title">Закуски</div>
                            <div class="dish_list">
                                <?php
                                $user_id = $_SESSION['user']['id'];
                                $check_starter_cart = mysqli_query($connect, "SELECT * FROM `cart` WHERE `type` = 'starter' AND `user_id` = '$user_id' ORDER BY `id` ");
                                if (mysqli_num_rows($check_starter_cart) > 0){
                                    $cycle = 0;
                                    for ($i = 0; $i < mysqli_num_rows($check_starter_cart); $i++) {
                                        $cart = mysqli_fetch_assoc($check_starter_cart);
                                        $_SESSION['cart'.$i] = [
                                            "goods_id" => $cart['goods_id'],
                                            "number" => $cart['number'],
                                        ];
                                        $goods_id = $_SESSION['cart'.$i]['goods_id'];
                                        $check_starter_dish = mysqli_query($connect, "SELECT * FROM `dishes` WHERE `id` = '$goods_id' ORDER BY `id` ");
                                        for ($k = 0; $k < mysqli_num_rows($check_starter_dish); $k++) {
                                            $dish = mysqli_fetch_assoc($check_starter_dish);
                                            $_SESSION['dish'.$i] = [
                                                "id" => $dish['id'],
                                                "type" => $dish['type'],
                                                "name" => $dish['name'],
                                                "coast" => $dish['coast'],
                                                "description" => $dish['description']
                                            ];
                                            $ultimate_coast += $_SESSION['dish'.$i]['coast'] * $_SESSION['cart'.$i]['number'];
                                            $cycle++;
                                        }
                                    }
                                    for ($i = 0; $i < $cycle; $i++) {
                                        $id = $_SESSION['dish'.$i]['id'];
                                        $type = $_SESSION['dish'.$i]['type'];
                                        echo '<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title" style="color: #FFFFFF">'.$_SESSION['dish'.$i]['name'].'</div>
									<div class="dish_price" style="color: #FFFFFF">₽'.$_SESSION['dish'.$i]['coast'].'*'.$_SESSION['cart'.$i]['number'].'</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
                                <input class="admin_button" style="color: #FFFFFF; background: rgba(0,0,0,0);" type="button" value="Удалить" onclick='.'location.href="templates/cart/delete.php?id='.$id.'&type='.$type.'">
                            </div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Основное блюдо -->
                    <div class="col-lg-4 themenu_column">
                        <div class="themenu_image"></div>
                        <div class="themenu_col trans_400">
                            <div class="themenu_col_title">Основное блюдо</div>
                            <div class="dish_list">
                                <?php
                                $user_id = $_SESSION['user']['id'];
                                $check_main_cart = mysqli_query($connect, "SELECT * FROM `cart` WHERE `type` = 'main' AND `user_id` = '$user_id' ORDER BY `id` ");
                                if (mysqli_num_rows($check_main_cart) > 0){
                                    $cycle = 0;
                                    for ($i = 0; $i < mysqli_num_rows($check_main_cart); $i++) {
                                        $cart = mysqli_fetch_assoc($check_main_cart);
                                        $_SESSION['cart' . $i] = [
                                            "goods_id" => $cart['goods_id'],
                                            "number" => $cart['number'],
                                        ];
                                        $goods_id = $_SESSION['cart' . $i]['goods_id'];
                                        $check_main_dish = mysqli_query($connect, "SELECT * FROM `dishes` WHERE `id` = '$goods_id' ORDER BY `id` ");
                                        for ($k = 0; $k < mysqli_num_rows($check_main_dish); $k++) {
                                            $dish = mysqli_fetch_assoc($check_main_dish);
                                            $_SESSION['dish' . $i] = [
                                                "id" => $dish['id'],
                                                "type" => $dish['type'],
                                                "name" => $dish['name'],
                                                "coast" => $dish['coast'],
                                                "description" => $dish['description']
                                            ];
                                            $ultimate_coast += $_SESSION['dish' . $i]['coast'] * $_SESSION['cart' . $i]['number'];
                                            $cycle++;
                                        }
                                    }
                                    for ($i = 0; $i < $cycle; $i++) {
                                        $id = $_SESSION['dish'.$i]['id'];
                                        $type = $_SESSION['dish'.$i]['type'];
                                        echo '<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title" style="color: #FFFFFF">'.$_SESSION['dish'.$i]['name'].'</div>
									<div class="dish_price" style="color: #FFFFFF">₽'.$_SESSION['dish'.$i]['coast'].'*'.$_SESSION['cart'.$i]['number'].'</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
                                <input class="admin_button" style="color: #FFFFFF; background: rgba(0,0,0,0);" type="button" value="Удалить" onclick='.'location.href="templates/cart/delete.php?id='.$id.'&type='.$type.'">
                            </div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Десерт -->
                    <div class="col-lg-4 themenu_column">
                        <div class="themenu_image"></div>
                        <div class="themenu_col trans_400">
                            <div class="themenu_col_title">Десерт</div>
                            <div class="dish_list">
                                <?php
                                $user_id = $_SESSION['user']['id'];
                                $check_desert_cart = mysqli_query($connect, "SELECT * FROM `cart` WHERE `type` = 'desert' AND `user_id` = '$user_id' ORDER BY `id` ");
                                if (mysqli_num_rows($check_desert_cart) > 0){
                                    $cycle = 0;
                                    for ($i = 0; $i < mysqli_num_rows($check_desert_cart); $i++) {
                                        $cart = mysqli_fetch_assoc($check_desert_cart);
                                        $_SESSION['cart'.$i] = [
                                            "goods_id" => $cart['goods_id'],
                                            "number" => $cart['number'],
                                        ];
                                        $goods_id = $_SESSION['cart'.$i]['goods_id'];
                                        $check_desert_dish = mysqli_query($connect, "SELECT * FROM `dishes` WHERE `id` = '$goods_id' ORDER BY `id` ");
                                        for ($k = 0; $k < mysqli_num_rows($check_desert_dish); $k++) {
                                            $dish = mysqli_fetch_assoc($check_desert_dish);
                                            $_SESSION['dish'.$i] = [
                                                "id" => $dish['id'],
                                                "type" => $dish['type'],
                                                "name" => $dish['name'],
                                                "coast" => $dish['coast'],
                                                "description" => $dish['description']
                                            ];
                                            $ultimate_coast += $_SESSION['dish'.$i]['coast'] * $_SESSION['cart'.$i]['number'];
                                            $cycle++;
                                        }
                                    }
                                    for ($i = 0; $i < $cycle; $i++) {
                                        $id = $_SESSION['dish'.$i]['id'];
                                        $type = $_SESSION['dish'.$i]['type'];
                                        echo '<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title" style="color: #FFFFFF">'.$_SESSION['dish'.$i]['name'].'</div>
									<div class="dish_price" style="color: #FFFFFF">₽'.$_SESSION['dish'.$i]['coast'].'*'.$_SESSION['cart'.$i]['number'].'</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
                                <input class="admin_button" style="color: #FFFFFF; background: rgba(0,0,0,0);" type="button" value="Удалить" onclick='.'location.href="templates/cart/delete.php?id='.$id.'&type='.$type.'">
                            </div>';
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="parent">
                        <form class="login_form" action="templates/auth/config/signin.php" method="post">
                            <h2 class="cart_coast">Итого: ₽<? echo $ultimate_coast ?></h2>
                        <? echo '<input class="cart_button" type="button" value="Заказать" onclick='.'location.href="templates/status/order.php?coast='.$ultimate_coast.'">' ?>
                        </form>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Footer Logo -->
            <div class="col-lg-3 footer_col">
                <div class="footer_logo">
                    <div class="footer_logo_title">Little Italy</div>
                    <div class="footer_logo_subtitle">restaurant</div>
                </div>
                <div class="copyright"></div>
                <p style="line-height: 1.2;">Copyright <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
            </div>

            <!-- Footer About -->
            <div class="col-lg-6 footer_col">
                <div class="footer_about">
                    <p>Маленькая Италия - сеть ресторанов международной кухни. Если вы хотите связаться с нами по поводу сотрудничества, воспользуйтесь одним из контактов, предложенных справа</p>
                </div>
            </div>

            <!-- Footer Contact -->
            <div class="col-lg-3 footer_col">
                <div class="footer_contact">
                    <ul>
                        <li class="d-flex flex-row align-items-start justify-content-start">
                            <div><div class="footer_contact_title">TeleG:</div></div>
                            <div class="footer_contact_text">@kleyInMoment</div>
                        </li>
                        <li class="d-flex flex-row align-items-start justify-content-start">
                            <div><div class="footer_contact_title">Phone:</div></div>
                            <div class="footer_contact_text">8 800 555 3535</div>
                        </li>
                        <li class="d-flex flex-row align-items-start justify-content-start">
                            <div><div class="footer_contact_title">Email:</div></div>
                            <div class="footer_contact_text">yourmail@anymail.com</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/jquery-timepicker/jquery.timepicker.js"></script>
<script src="js/custom.js"></script>
</body>
</html>