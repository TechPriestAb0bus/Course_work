<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['login'] === "root"){

    } else {
        header('location: index.php');
    }

}
else {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin panel</title>
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
                                <li><a href="menu_admin.php">Меню</a></li>
                                <li><a href="adder.php">Добавление блюд</a></li>
                                <li><a href="#">Выбор блюда дня</a></li>
                                <li><a href="templates/auth/config/logout.php">Выход</a></li>
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
                <li><a href="menu_admin.php">Меню</a></li>
                <li><a href="adder.php">Добавление блюд</a></li>
                <li><a href="#">Выбор блюда дня</a></li>
                <li><a href="templates/auth/config/logout.php">Выход</a></li>
            </ul>
        </div>
        <div class="menu_reservations_phone ml-auto">Reservations: +34 586 778 8892</div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/home.jpg" data-speed="0.8"></div>
        <div class="parent">
            <h1 style="color: #FFFFFF">Добро пожаловать в Панель Администратора!</h1>
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
                <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p style="line-height: 1.2;">Copyright <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                </div>
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