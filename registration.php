<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location: index.php');
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
    <link rel="stylesheet" href="styles/form.css">
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
            <ul>
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
        <div class="menu_reservations_phone ml-auto">Reservations: +34 586 778 8892</div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/home.jpg" data-speed="0.8"></div>
        <div class="parent">
            <form class="login_form" action="templates/auth/config/signup.php" method="post" enctype="multipart/form-data">
                <label class="login_label">Name</label>
                <input class="login_input" type="text" name="full_name" placeholder="Enter your full name">
                <label class="login_label">Login</label>
                <input class="login_input" type="text" name="login" placeholder="Enter login">
                <label class="login_label">Email</label>
                <input class="login_input" type="text" name="email" placeholder="Enter your email">
                <label class="login_label">Password</label>
                <input class="login_input" type="password" name="password" placeholder="Enter password">
                <label class="login_label">Confirm password</label>
                <input class="login_input" type="password" name="password_confirm" placeholder="Enter password">
                <button class="login_button" type="submit">Create an account</button>
                <p class="login_p">
                    У вас уже есть аккаунт? - <a class="login_a" href="login.php">Войдите!</a>
                </p>
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="error_massage">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>

            </form>
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
            </div>

            <!-- Footer About -->
            <div class="col-lg-6 footer_col">
                <div class="footer_about">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio.</p>
                </div>
            </div>

            <!-- Footer Contact -->
            <div class="col-lg-3 footer_col">
                <div class="footer_contact">
                    <ul>
                        <li class="d-flex flex-row align-items-start justify-content-start">
                            <div><div class="footer_contact_title">Address:</div></div>
                            <div class="footer_contact_text">481 Creekside Lane Avila CA 93424</div>
                        </li>
                        <li class="d-flex flex-row align-items-start justify-content-start">
                            <div><div class="footer_contact_title">Address:</div></div>
                            <div class="footer_contact_text">+53 345 7953 32453</div>
                        </li>
                        <li class="d-flex flex-row align-items-start justify-content-start">
                            <div><div class="footer_contact_title">Address:</div></div>
                            <div class="footer_contact_text">yourmail@gmail</div>
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