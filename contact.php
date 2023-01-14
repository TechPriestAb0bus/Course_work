<!DOCTYPE html>
<html lang="en">
<head>
<title>Контакты</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Venue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="plugins/jquery-timepicker/jquery.timepicker.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
		<div class="menu_reservations_phone ml-auto">Бронь: +7 999 999 9999</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">Little Italy</div>
							<div class="home_title"><h1>Контакты</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact_title">Контактная информация</div>
					<div class="contact_text">
						<p>Если у вас появились какие-то вопросы по поводу обслуживания, у вас есть какие-либо жалобы и предложения, пожалуйста, свяжитесь с нами!</p>
					</div>
					<div class="contact_logo_container">
						<div class="contact_logo_title">Little Italy</div>
						<div class="contact_logo_subtitle">restaurant</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact_list_container d-flex flex-column align-items-lg-center justify-content-start">
						<div class="contact_list_content">
							<ul class="contact_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Адрес</div></div>
									<div>Ленина 4</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Телефон</div></div>
									<div>8 800 555 3535</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>yourmail@yourmail.com</div>
								</li>
							</ul>
							<div class="contact_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row google_map_row">
				<div class="col">
					
					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->
						
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map"></div>
								</div>
							</div>
						</div>

					</div>

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
                    <div class="copyright">

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
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/jquery-timepicker/jquery.timepicker.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>