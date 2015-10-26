<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="wp-content/themes/proksi/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="wp-content/themes/proksi/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="wp-content/themes/proksi/images/favicon.png" type="image/x-icon">
</head>

<body>
	<nav class="main-site-nav">
		<div class="basket-block" id="blockBasket">
			<ul>
				<li>
					<div class="block-name-srvis">
						<p class="title-servis">Экстренный</p>
						<p class="price-servis">2 х 72 руб.</p>
					</div>
					<p class="days day-first">1 день</p>
				</li>
				<li>
					<div class="block-name-srvis">
						<p class="title-servis">Пробный</p>
						<p class="price-servis">1 х 196 руб.</p>
					</div>
					<p class="days day-second">7 дней</p>
				</li>
				<li>
					<div class="block-name-srvis">
						<p class="title-servis">Оптимальный</p>
						<p class="price-servis">3 х 390 руб.</p>
					</div>
					<p class="days day-three">30 дней</p>
				</li>
				<li>
					<div class="block-name-srvis">
						<p class="title-servis">Элитный</p>
						<p class="price-servis">1 х 1080 руб.</p>
					</div>
					<p class="days day-four">90 дней</p>
				</li>
				<li>
					<!--p class="title-servis text-center">Подытог: 2590 руб.</p-->
				</li>		
			</ul>
			<a href="index.php/cart/"><button class="first-but">В корзину</button></a>
			<a href="index.php/checkout/"><button class="second-but">К оплате</button></a>
		</div>
		<div class="input-admin shoop-admin" id="panelAadminka">
			<div class="row text-center">
				<?php echo do_shortcode( '[woocommerce_my_account]' ); ?>
			</div>
			
		</div>
		<div class="container">

			<div class="col-md-2 col-sm-12">
				<a href="http://eliteproxies.ru/index.php" class="logo"></a>
			</div>
			<div class="col-md-7 col-sm-12 menu">
				
					<p class="glyphicon glyphicon-align-justify activ-menu" id="startMenu"></p>

				<!--ul id="menu">
					<li class="hvr-underline-from-left"><a href="#">Главная</a></li>
					<li class="hvr-underline-from-left"><a href="#">Купить прокси</a></li>
					<li class="hvr-underline-from-left"><a href="#">База знаний</a></li>
					<li class="hvr-underline-from-left"><a href="#">Мой IP</a></li>
					<li class="hvr-underline-from-left"><a href="#">Статистика стран</a></li>					
				</ul-->
				<?php wp_nav_menu( array( 'header_menu1' => 'header_menu' ) ); ?>
			</div>
			<div class="col-md-2 text-center col-sm-12">
				<button class="come-in mtop15" id="startAdminka">Войти</button>
			</div>
			<div class="col-md-1 text-center col-sm-12">
				<button class="basket mtop15 mbot15" id="startBasket"></button>
			</div>
		</div>
	</nav>
	
    