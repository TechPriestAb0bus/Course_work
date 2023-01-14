<?php
session_start();
require_once 'templates/auth/config/connect.php';
global $connect;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>The Menu</title>
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
<link rel="stylesheet" type="text/css" href="styles/menu.css">
<link rel="stylesheet" type="text/css" href="styles/menu_responsive.css">
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
						<div class="reservations_phone ml-auto">Reservations: +34 586 778 8892</div>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/menu.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">Little Italy</div>
							<div class="home_title"><h1>Меню</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- The Menu -->

	<div class="themenu">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
                        <div class="section_subtitle page_subtitle">O mangi la minestra o salti dalla finestra!</div>
                        <div class="section_title"><h1>Немного о наших блюдах</h1></div>
					</div>
				</div>
			</div>
			<div class="row themenu_text_row">
				<div class="col-lg-6">
					<div class="themenu_text">
                        <p>Итальянская кухня предстает пред нами во всем своем многообразии. Интересен факт, что в разных районах страны традиции и рецепты приготовления блюд отличаются друг от друга.Северный район всегда славился скотоводством и основные продукты, которые употребляли жители в пищу — масло, молоко, мясо (причем мясо обычно подается целыми кусками, а рубленное используется для приготовления соуса).</p>
                    </div>
				</div>
				<div class="col-lg-6">
					<div class="themenu_text">
						<p>Sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti. Vivamus luctus diam eu neque rutrum, vitae aliquet dolor venenatis. Nulla consequat fringilla.</p>
					</div>
				</div>
			</div>
			<div class="row themenu_row">
				
				<!-- Starters -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_image"><img src="images/starters.jpg" alt=""></div>
					<div class="themenu_col trans_400">
						<div class="themenu_col_title">Закуски</div>
						<div class="dish_list">
                            <?php
                            $check_starters = mysqli_query($connect, "SELECT * FROM `dishes` WHERE `type` = 'starter' ORDER BY `id` ");
                            if (mysqli_num_rows($check_starters) > 0){
                                for ($i = 0; $i < mysqli_num_rows($check_starters); $i++) {
                                    $dish = mysqli_fetch_assoc($check_starters);
                                    $_SESSION['dish'.$i] = [
                                        "id" => $dish['id'],
                                        "name" => $dish['name'],
                                        "coast" => $dish['coast'],
                                        "description" => $dish['description']
                                    ];
                                }
                                for ($i = 0; $i < mysqli_num_rows($check_starters); $i++) {
                                    $id = $_SESSION['dish'.$i]['id'];
                                    echo '<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">'.$_SESSION['dish'.$i]['name'].'</div>
									<div class="dish_price">₽'.$_SESSION['dish'.$i]['coast'].'</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>'.$_SESSION['dish'.$i]['description'].'</li>
									</ul>
								</div>
                                <input class="admin_button" type="button" value="Удалить" onclick='.'location.href="templates/auth/config/menu_delete.php?id='.$id.'"'.'>
                            </div>';
                                }
                            }
                            ?>

						</div>
					</div>
				</div>

				<!-- Main -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_image"><img src="images/main.jpg" alt=""></div>
					<div class="themenu_col trans_400">
						<div class="themenu_col_title">Main</div>
						<div class="dish_list">

							<!-- Dish -->
                            <?php
                            $check_main_dish = mysqli_query($connect, "SELECT * FROM `dishes` WHERE `type` = 'main' ORDER BY `id` ");
                            if (mysqli_num_rows($check_main_dish) > 0){
                                for ($i = 0; $i < mysqli_num_rows($check_main_dish); $i++) {
                                    $dish = mysqli_fetch_assoc($check_main_dish);
                                    $_SESSION['dish'.$i] = [
                                        "id" => $dish['id'],
                                        "name" => $dish['name'],
                                        "coast" => $dish['coast'],
                                        "description" => $dish['description']
                                    ];
                                }
                                for ($i = 0; $i < mysqli_num_rows($check_main_dish); $i++) {
                                    $id = $_SESSION['dish'.$i]['id'];
                                    echo '<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">'.$_SESSION['dish'.$i]['name'].'</div>
									<div class="dish_price">₽'.$_SESSION['dish'.$i]['coast'].'</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>'.$_SESSION['dish'.$i]['description'].'</li>
									</ul>
								</div>
                                <input class="admin_button" type="button" value="Удалить" onclick='.'location.href="templates/auth/config/menu_delete.php?id='.$id.'"'.'>
                            </div>';
                                }
                            }
                            ?>
						</div>
					</div>
				</div>

				<!-- Deserts -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_image"><img src="images/deserts.jpg" alt=""></div>
					<div class="themenu_col trans_400">
						<div class="themenu_col_title">Deserts</div>
						<div class="dish_list">

							<!-- Dish -->
                            <?php
                            $check_deserts = mysqli_query($connect, "SELECT * FROM `dishes` WHERE `type` = 'desert' ORDER BY `id` ");
                            if (mysqli_num_rows($check_deserts) > 0){
                                for ($i = 0; $i < mysqli_num_rows($check_deserts); $i++) {
                                    $dish = mysqli_fetch_assoc($check_deserts);
                                    $_SESSION['dish'.$i] = [
                                        "id" => $dish['id'],
                                        "name" => $dish['name'],
                                        "coast" => $dish['coast'],
                                        "description" => $dish['description']
                                    ];
                                }
                                for ($i = 0; $i < mysqli_num_rows($check_deserts); $i++) {
                                    $id = $_SESSION['dish'.$i]['id'];
                                    echo '<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">'.$_SESSION['dish'.$i]['name'].'</div>
									<div class="dish_price">₽'.$_SESSION['dish'.$i]['coast'].'</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>'.$_SESSION['dish'.$i]['description'].'</li>
									</ul>
								</div>
                                <input class="admin_button" type="button" value="Удалить" onclick='.'location.href="templates/auth/config/menu_delete.php?id='.$id.'"'.'>
                            </div>';
                                }
                            }
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Signature Dishes -->

	<div class="sig">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle page_subtitle">Something new</div>
						<div class="section_title"><h1>Our Signature Dishes</h1></div>
					</div>
				</div>
			</div>
			<div class="row sig_row">
				<div class="col">
					
					<!-- Signature Dish -->
					<div class="sig_dish">
						<div class="row row-eq-height">
							<div class="col-lg-6 sig_col d-flex flex-column align-items-start justify-content-center">
								<div class="sig_content">
									<div class="rating_r sig_rating rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
									<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
										<div class="sig_name">Pork Tenderloin marinated in Green Pepper</div>
										<div class="sig_price ml-auto">$20</div>
									</div>
									<div class="sig_content_list">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li>Pork</li>
											<li>Tenderloin</li>
											<li>Green Pepper</li>
											<li>Veggies</li>
										</ul>
									</div>
									<div class="button sig_button trans_200"><a href="#">Order Now</a></div>
								</div>
							</div>
							<div class="col-lg-6 sig_col">
								<div class="sig_image"><img src="images/sig_1.jpg" alt=""></div>
							</div>
						</div>
					</div>

					<!-- Signature Dish -->
					<div class="sig_dish">
						<div class="row row-eq-height">
							<div class="col-lg-6 sig_col d-flex flex-column align-items-start justify-content-center">
								<div class="sig_content">
									<div class="rating_r sig_rating rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
									<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
										<div class="sig_name">Beef Tartar with forest mushroms</div>
										<div class="sig_price ml-auto">$23</div>
									</div>
									<div class="sig_content_list">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li>Pork</li>
											<li>Tenderloin</li>
											<li>Green Pepper</li>
											<li>Veggies</li>
										</ul>
									</div>
									<div class="button sig_button trans_200"><a href="#">Order Now</a></div>
								</div>
							</div>
							<div class="col-lg-6 sig_col">
								<div class="sig_image"><img src="images/sig_2.jpg" alt=""></div>
							</div>
						</div>
					</div>

					<!-- Signature Dish -->
					<div class="sig_dish">
						<div class="row row-eq-height">
							<div class="col-lg-6 sig_col d-flex flex-column align-items-start justify-content-center">
								<div class="sig_content">
									<div class="rating_r sig_rating rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
									<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
										<div class="sig_name">Beef Steak with sauted vegetables</div>
										<div class="sig_price ml-auto">$20</div>
									</div>
									<div class="sig_content_list">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li>Pork</li>
											<li>Tenderloin</li>
											<li>Green Pepper</li>
											<li>Veggies</li>
										</ul>
									</div>
									<div class="button sig_button trans_200"><a href="#">Order Now</a></div>
								</div>
							</div>
							<div class="col-lg-6 sig_col">
								<div class="sig_image"><img src="images/sig_3.jpg" alt=""></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Reservations -->

	<div class="reservations text-center">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/reservations.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="reservations_content d-flex flex-column align-items-center justify-content-center">
						<div class="res_stars page_subtitle">5 Stars</div>
						<div class="res_title">Make a Reservation</div>
						<div class="res_form_container">
							<form action="#" id="res_form" class="res_form">
								<div class="d-flex flex-sm-row flex-column align-items-center justify-content-start">
									<input type="text" id="datepicker" class="res_input" required="required">
									<input type="text" class="res_input timepicker" required="required">
									<select class="res_select">
										<option disabled="" selected="">2 person</option>
										<option>3 person</option>
										<option>4 person</option>
										<option>5 person</option>
										<option>6 person</option>
									</select>
								</div>
								<button class="res_button">Make a Reservation</button>
							</form>
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
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p style="line-height: 1.2;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
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
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/jquery-timepicker/jquery.timepicker.js"></script>
<script src="js/menu.js"></script>
</body>
</html>