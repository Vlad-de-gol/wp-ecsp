<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<div class="menu-index"></div>
	<!--div class="wrap-header text-center">
		<div class="logo-img">
			<h4 class="text-center">Самые лучшие прокси у нас!</h4>
		</div>
		<header class="index-header container">    	
			<div class="slider-second">
				<ul class="slider__wrapper">
					<li class="slider__item">
						<div class="box">
							<div class="resp-block">
									
								<div class="resp-block-first">
									<div class="price-plus price-plus-color-green">
										<p class="name-servis name-servis-green">Экстренный</p>
										<p class="main-price">72<span>p.</span></p>
										<p class="small-price">72руб./день</p>
									</div>
									<p class="all-price">Все цены указаны в рублях роскийской федерции</p>
								</div>
								<div class="resp-block-second">
									<div class="but-block text-senter-adapt">
										<div class="row">
											<div class="col-md-6 text-center mtop10">
											<button class="now">Купить сейчас</button>
											</div>
											<div class="col-md-6 text-center mtop10">
											<button class="now-plus">Добавить в<br/>корзину</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="slider__item"><div class="box">
						<div class="resp-block">
									
								<div class="resp-block-first">
									<div class="price-plus price-plus-color-blue">
										<p class="name-servis name-servis-blue">Пробный</p>
										<p class="main-price">196<span>p.</span></p>
										<p class="small-price">196руб./день</p>
									</div>
									<p class="all-price">Все цены указаны в рублях роскийской федерции</p>
								</div>
								<div class="resp-block-second">
									<div class="but-block text-senter-adapt">
										<div class="row">
											<div class="col-md-6 text-center mtop10">
											<button class="now">Купить сейчас</button>
											</div>
											<div class="col-md-6 text-center mtop10">
											<button class="now-plus">Добавить в<br/>корзину</button>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div></li>
					<li class="slider__item"><div class="box" >
						<div class="resp-block">
									
								<div class="resp-block-first">
									<div class="price-plus price-plus-color-yellow">
										<p class="name-servis name-servis-yellow">Оптимальный</p>
										<p class="main-price">390<span>p.</span></p>
										<p class="small-price">390руб./день</p>
									</div>
									<p class="all-price">Все цены указаны в рублях роскийской федерции</p>
								</div>
								<div class="resp-block-second">
									<div class="but-block text-senter-adapt">
										<div class="row">
											<div class="col-md-6 text-center mtop10">
											<button class="now">Купить сейчас</button>
											</div>
											<div class="col-md-6 text-center mtop10">
											<button class="now-plus">Добавить в<br/>корзину</button>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div></li>
					<li class="slider__item"><div class="box" >
						<div class="resp-block">
									
								<div class="resp-block-first">
									<div class="price-plus price-plus-color-red">
										<p class="name-servis name-servis-red">Элитный</p>
										<p class="main-price">1080<span>p.</span></p>
										<p class="small-price">1080руб./день</p>
									</div>
									<p class="all-price">Все цены указаны в рублях роскийской федерции</p>
								</div>
								<div class="resp-block-second">
									<div class="but-block text-senter-adapt">
										<div class="row">
											<div class="col-md-6 text-center mtop10">
											<button class="now">Купить сейчас</button>
											</div>
											<div class="col-md-6 text-center mtop10">
											<button class="now-plus">Добавить в<br/>корзину</button>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div></li>
					
								
				</ul>
			</div>
		</header>
	</div-->
	
	<section class="new-header">
		<div class="container">
			<h1 class="new-best-proxi">САМЫЕ ЛУЧШИЕ ПРОКСИ У НАС!</h1>
			<div class="row">
				<div class="col-md-3">
					<div class="new-proxi-block">
						<h5 class="new-name-proxi new-first-color text-center ">Экстренный</h5>
						<p class="new-days text-center">1 день</p>
						<p class="new-class-price">72 руб.</p>
						<a href="#" class="new-go-basket new-first-basket">В корзину</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="new-proxi-block">
						<h5 class="new-name-proxi new-second-color text-center ">Пробный</h5>
						<p class="new-days text-center">7 дней</p>
						<p class="new-class-price">196 руб.</p>
						<a href="#" class="new-go-basket new-second-basket">В корзину</a>
					</div>
				</div>
				<div class="col-md-3 text-center super-proxi">
					<img src="wp-content/themes/proksi/images/korona.png" class="pic-korona"/>
					<p class="top-buy">Лидер продаж</p>
					<div class="new-proxi-block">						
						<h5 class="new-name-proxi new-three-color text-center ">Оптимальный</h5>
						<p class="new-days text-center">30 дней</p>
						<p class="new-class-price">390 руб.</p>
						<a href="#" class="new-go-basket new-three-basket">В корзину</a>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="new-proxi-block">
						<h5 class="new-name-proxi new-four-color text-center ">Элитный</h5>
						<p class="new-days text-center">90 дней</p>
						<p class="new-class-price">1080 руб.</p>
						<a href="#" class="new-go-basket new-four-basket">В корзину</a>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!--section class="our-plus">
    <h2></h2>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3 text-center">
    				<img alt="Изображение" src="wp-content/themes/proksi/images/our-plus/1.png" height="145" width="136" class="mtop45">
    				<div class="blue-block">
						<p class="title-block ptop20">Последние обновление</p>
						<p class="number ptop5">20.05.15 15:36</p>
    				</div>
    				<p class="name-articl">Обновление базы данных</p>
    				<p class="article">
    					Автоматическое обновление 
						базы данных каждые полчаса
						для удобной работы со 
						списком серверов.
    				</p>
    			</div>
    			<div class="col-md-3 text-center">
    				<img alt="Изображение" src="wp-content/themes/proksi/images/our-plus/2.png" height="145" width="136" class="mtop45">
    				<div class="blue-block">
						<p class="title-block ptop20">Доступно серверов</p>
						<p class="number ptop5">50005</p>
    				</div> 
    				<p class="name-articl">Большая база серверов</p>
    				<p class="article">
    					Более 50005 элитных прокси
						серверов. База ежедневно
						пополняется только 
						проверенными серверами.
    				</p>   				
    			</div>
    			<div class="col-md-3 text-center">
    				<img alt="Изображение" src="wp-content/themes/proksi/images/our-plus/3.png" height="145" width="136" class="mtop45">
    				<div class="blue-block">
						<p class="title-block ptop20">Анонимных серверов</p>
						<p class="number ptop5">40542</p>
    				</div>
    				<p class="name-articl">Анонимные прокси</p>
    				<p class="article">
    					Полностью скрытые Ip адреса 
						для безопасного серфинга 
						в интернете. 
    				</p>
    			</div>
    			<div class="col-md-3 text-center">
    				<img alt="Изображение" src="wp-content/themes/proksi/images/our-plus/4.png" height="145" width="136" class="mtop45">
    				<div class="blue-block">
						<p class="title-block ptop20">Последние обновление</p>
						<p class="number ptop5">1654</p>
    				</div>
    				<p class="name-articl">Полуанонимные прокси</p>
    				<p class="article">
    					Тут будет текст о полуанонимных 
						прокси. Лично я не знаю что это.
    				</p>
    			</div>
    		</div>
    	</div>
    </section-->

    <section class="block-timer">
    	<h2 class="ptop25">Специальное предложние</h2>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3"></div>    			
    			<div class="col-md-2 text-center">
    				<img alt="Изображение" src="wp-content/themes/proksi/images/w.png" height="113" width="113"  class=" mtop10">
    			</div>
    			<div class="col-md-5 text-center">
    				<p class="font-plus ptop45">Купи любую подписку и умножь количество <br/>
					используемых дней в 2 раза.</p>
    			</div>
    			<div class="col-md-2"></div>
    		</div>
    		<div class="row">
    			<div class="col-md-3"></div>
    			<div class="col-md-7 mtop25" id="timer-plus"> 
    				<p class="last">Осталось</p>
					<ul class="data-list">
						<li>Дней</li>
						<li>Часов</li>
						<li>Минут</li>
						<li>Секунд</li>
					</ul>
					<div class="clock" style="margin:2em;"></div>
					
    				
    						  
				</div>    			  			
    			<div class="col-md-2"></div>
    		</div>
			<p class="action ptop5">Акция действует до 1 января 2016 года. </p>
    	</div>
    </section>

	<section class="new-section-servis">
		<div class="container mbot15">
			<div class="row">
				<div class="col-md-3">
					<div class="block-new-servis first-block-bg">
						<p class="name-new-servis">
							Обновление базы<br/>данных
						</p>
						<p class="tech-doc">
							Автоматическое обновление базы
							данных каждые полчаса 
							для удобной работы со 
							списком серверов.
						</p>
						<p class="new-last ptop10">Последние обновление</p>
						<p class="new-last">20.05.15 15:36</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="block-new-servis second-block-bg">
						<p class="name-new-servis">
							Большая база<br/>серверов
						</p>
						<p class="tech-doc">
							Более 50005 элитных прокси серверов. 
							База ежедневно пополняется только 
							проверенными серверами.
						</p>
						<p class="new-last ptop10">Доступно серверов</p>
						<p class="new-last">50005</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="block-new-servis three-block-bg">
						<p class="name-new-servis">
							Анонимные<br/>прокси
						</p>
						<p class="tech-doc">
							Полностью скрытые Ip адреса для безопасного серфинга в интернете.
						</p>
						<p class="new-last ptop10">Анонимных серверов</p>
						<p class="new-last">40542</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="block-new-servis four-block-bg">
						<p class="name-new-servis">
							Полуанонимные<br/>прокси
						</p>
						<p class="tech-doc">
							Автоматическое обновление базы
							данных каждые полчаса 
							для удобной работы со 
							списком серверов.
						</p>
						<p class="new-last ptop10">Последние обновление</p>
						<p class="new-last">1654</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--nav>
		<div class="basket-block" id="blockBasket-plus">
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
					<p class="title-servis text-center">Подытог: 2590 руб.</p>
				</li>		
			</ul>
			<button class="first-but">В корзину</button>
			<button class="second-but">К оплате</button>
		</div>
		<div class="container">

			<div class="col-md-2 col-sm-12">
				<a href="#" class="logo"></a>
			</div>
			<div class="col-md-7 col-sm-12 menu">
				
					<p class="glyphicon glyphicon-align-justify activ-menu" id="startMenu-plus"></p>

				<!--ul id="menu-plus">
					<li><a href="#">Главная</a></li>
					<li><a href="#">Купить прокси</a></li>
					<li><a href="#">База знаний</a></li>
					<li><a href="#">Мой IP</a></li>
					<li><a href="#">Статистика стран</a></li>					
				</ul-->
				<?//php wp_nav_menu( array( 'center_menu1' => 'center_menu' ) ); ?>
			<!--/div>
			<div class="col-md-2 text-center col-sm-12">
				<button class="come-in mtop15">Войти</button>
			</div>
			<div class="col-md-1 text-center col-sm-12">
				<button class="basket mtop15 mbot15" id="startBasket-plus"></button>
			</div>
		</div>
	</nav-->

	<section class="comfortable">
		<div class="container">
			<h2 class="ptop25">Оплачивай как тебе удобно</h2>
			<div class="banks banks-plus">
				<ul>
					<li class="text-center">
						<p class="p-title">Банковской картой</p>
						<img alt="Изображение" src="wp-content/themes/proksi/images/bank/1.png" height="83" width="93">
						<div class="bank-plus bank-plus-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/1.1.png" height="32" width="47">
							<p>Visa и Electron</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/1.2.png" height="32" width="47">
							<p>MasterCard</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/1.3.png" height="32" width="47">
							<p>Maestro</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/1.5.png" height="32" width="47">
							<p>Cirrus</p>
						</div>
					</li>
					<li class="text-center">
						<p class="p-title">Электронные деньги</p>
						<img alt="Изображение" src="wp-content/themes/proksi/images/bank/2.png" height="78" width="118">
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/2.1.png" height="32" width="47">
							<p>Webmoney</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/2.2.png" height="32" width="47">
							<p>Яндекс деньги</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/2.3.png" height="32" width="47">
							<p>Skrill</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/2.4.png" height="32" width="47">
							<p>PayPal</p>
						</div>
					</li>
					<li class="text-center">
						<p class="p-title">Интренет-банкинг</p>
						<img alt="Изображение" src="wp-content/themes/proksi/images/bank/3.png" height="78" width="118">
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/3.1.png" height="32" width="47">
							<p>Промсвязьбанк</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/3.2.png" height="32" width="47">
							<p>Альфа-банк</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/3.3.png" height="32" width="47">
							<p>Masterpass</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/3.4.png" height="32" width="47">
							<p>Сбербанк</p>
						</div>
					</li>
					<li class="text-center">
						<p class="p-title">Через телефон</p>
						<img alt="Изображение" src="wp-content/themes/proksi/images/bank/4.png" height="78" width="76">
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/4.1.png" height="32" width="47">
							<p>Мегафон</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/4.2.png" height="32" width="47">
							<p>МТС</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/4.3.png" height="32" width="47">
							<p>Билайн</p>
						</div>
						<div class="bank-plus">
							<img alt="Изображение" src="wp-content/themes/proksi/images/bank/4.4.png" height="32" width="47">
							<p>Tele2</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="resp">
		<h2 class="ptop-resp resp">Отзывы наших клиентов</h2>
		<div class="wrap-slider">
		<div class="container">
			<div class="slider">
				<ul class="slider__wrapper">
					<li class="slider__item">
						<div class="box">
								<div class="resp-block">
									<div class="resp-block-first">
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/1.png" height="40" width="40" class="slider-img">
											<h5>Артем</h5>
											<h6>Маркетолог</h6>											
										</div>
										<p class="avtor-sey">
											Очень хорошие сервера. Я доволен покупкой.
										</p>
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/2.png" height="40" width="40" class="slider-img">
											<h5>Андрей С.</h5>
											<h6>Програмист</h6>											
										</div>
										<p class="avtor-sey">
											Отличный сервис по продаже прокси. Использую уже боее трех месяцев. Работает без нареканий.
										</p>
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/3.png" height="40" width="40" class="slider-img">
											<h5>Сергей</h5>
											<h6>Seo специалист</h6>											
										</div>
										<p class="avtor-sey">
											Использую списки проки сервиса EliteProxies для массовой рассылки электронных писем. Прокси действительно элитные и анонимные, а к тому-же еще и очень быстрые, что позволяет делать рассылки в разы быстрее. Сотрудничеством доволен, времени стал затрачивать приблизительно на 40% меньше на весь цикл работы. Что очень хорошо.
										</p>
									</div>
									<div class="resp-block-second">
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/4.png" height="40" width="40" class="slider-img">
											<h5>Нателья</h5>
											<h6>Seo специалист</h6>											
										</div>
										<p class="avtor-sey">
											Уже почти месяц пользуюсь базой элитных прокси с этого сайта в таких программах как Magadan Pro, KeyCollector и других для автоматического сбора низкочастотных и низко-конкурентных ключевых фраз в различных тематиках. Прокси действительно анонимные, работают очень быстро и самое главное живут долго. Сама использую и Вам рекомендую.
										</p>
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/5.png" height="40" width="40" class="slider-img">
											<h5>Петр К.</h5>
											<h6>Верстальщик</h6>											
										</div>
										<p class="avtor-sey">
											Сервис самый нормальный из все что я встречал в русском сегменте интернета. Использую уже боее 2 месяцев. Работает без нареканий.
										</p>
									</div>
								</div>
						</div>
						
					</li>
					<li class="slider__item">
						<div class="box">
							<div class="resp-block">
									<div class="resp-block-first">
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/1.png" height="40" width="40" class="slider-img">
											<h5>Артем</h5>
											<h6>Маркетолог</h6>											
										</div>
										<p class="avtor-sey">
											Очень хорошие сервера. Я доволен покупкой.
										</p>
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/2.png" height="40" width="40" class="slider-img">
											<h5>Андрей С.</h5>
											<h6>Програмист</h6>											
										</div>
										<p class="avtor-sey">
											Отличный сервис по продаже прокси. Использую уже боее трех месяцев. Работает без нареканий.
										</p>
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/3.png" height="40" width="40" class="slider-img">
											<h5>Сергей</h5>
											<h6>Seo специалист</h6>											
										</div>
										<p class="avtor-sey">
											Использую списки проки сервиса EliteProxies для массовой рассылки электронных писем. Прокси действительно элитные и анонимные, а к тому-же еще и очень быстрые, что позволяет делать рассылки в разы быстрее. Сотрудничеством доволен, времени стал затрачивать приблизительно на 40% меньше на весь цикл работы. Что очень хорошо.
										</p>
									</div>
									<div class="resp-block-second">
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/4.png" height="40" width="40" class="slider-img">
											<h5>Нателья</h5>
											<h6>Seo специалист</h6>											
										</div>
										<p class="avtor-sey">
											Уже почти месяц пользуюсь базой элитных прокси с этого сайта в таких программах как Magadan Pro, KeyCollector и других для автоматического сбора низкочастотных и низко-конкурентных ключевых фраз в различных тематиках. Прокси действительно анонимные, работают очень быстро и самое главное живут долго. Сама использую и Вам рекомендую.
										</p>
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/5.png" height="40" width="40" class="slider-img">
											<h5>Петр К.</h5>
											<h6>Верстальщик</h6>											
										</div>
										<p class="avtor-sey">
											Сервис самый нормальный из все что я встречал в русском сегменте интернета. Использую уже боее 2 месяцев. Работает без нареканий.
										</p>
									</div>
								</div>
						</div>
					</li>
					<li class="slider__item">
						<div class="box">
							<div class="resp-block">
									<div class="resp-block-first">
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/1.png" height="40" width="40" class="slider-img">
											<h5>Артем</h5>
											<h6>Маркетолог</h6>											
										</div>
										<p class="avtor-sey">
											Очень хорошие сервера. Я доволен покупкой.
										</p>
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/2.png" height="40" width="40" class="slider-img">
											<h5>Андрей С.</h5>
											<h6>Програмист</h6>											
										</div>
										<p class="avtor-sey">
											Отличный сервис по продаже прокси. Использую уже боее трех месяцев. Работает без нареканий.
										</p>
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/3.png" height="40" width="40" class="slider-img">
											<h5>Сергей</h5>
											<h6>Seo специалист</h6>											
										</div>
										<p class="avtor-sey">
											Использую списки проки сервиса EliteProxies для массовой рассылки электронных писем. Прокси действительно элитные и анонимные, а к тому-же еще и очень быстрые, что позволяет делать рассылки в разы быстрее. Сотрудничеством доволен, времени стал затрачивать приблизительно на 40% меньше на весь цикл работы. Что очень хорошо.
										</p>
									</div>
									<div class="resp-block-second">
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/4.png" height="40" width="40" class="slider-img">
											<h5>Нателья</h5>
											<h6>Seo специалист</h6>											
										</div>
										<p class="avtor-sey">
											Уже почти месяц пользуюсь базой элитных прокси с этого сайта в таких программах как Magadan Pro, KeyCollector и других для автоматического сбора низкочастотных и низко-конкурентных ключевых фраз в различных тематиках. Прокси действительно анонимные, работают очень быстро и самое главное живут долго. Сама использую и Вам рекомендую.
										</p>
										<div class="avtor">
											<img alt="Изображение" src="wp-content/themes/proksi/images/resp-slider/5.png" height="40" width="40" class="slider-img">
											<h5>Петр К.</h5>
											<h6>Верстальщик</h6>											
										</div>
										<p class="avtor-sey">
											Сервис самый нормальный из все что я встречал в русском сегменте интернета. Использую уже боее 2 месяцев. Работает без нареканий.
										</p>
									</div>
								</div>
						</div>
					</li>
						
				</ul>
			</div>
		</div>
		</div>
	</section>

    <section class="question">
    	<div class="container">
    		<h3 class="h3-question">Возникли вопросы?</h3>
    		<div class="row">
    			<div class="col-md-4">
    				<div class="block-info">
    					<p class="titile-info">FAQ</p>
    					<p class="text-info">
    						Ответы на самые популярные вопросы.
    					</p>
    					<a href="index.php/?p=181" class="link-info">Перейти</a>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="block-info">
    					<p class="titile-info">База знаний</p>
    					<p class="text-info">
    						Инструкции по настройке программного обеспечения для работы со списками элитных и анонимных прокси серверов.
    					</p>
    					<a href="index.php/baza-znanij" class="link-info">Перейти</a>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="block-info">
    					<p class="titile-info">Форум</p>
    					<p class="text-info">
    						Здесь вам постараются ответить на Ваш любой вопрос в кратчайшие сроки. Не стесняйтесь задавать вопросы.
    					</p>
    					<a href="index.php/forums/forum/%D1%84%D0%BE%D1%80%D1%83%D0%BC/" class="link-info">Перейти</a>
    				</div>
    			</div>
    		</div>
    		<div class="consultant">
    			<p class="title-cons">Записаться на консультацию</p>
    			<p class="text-info-plus ptop25">   				
    				Запишитесь на бесплатную консультацию и получите ответы на все интересующие вас вопросы. Какой пакет лучше всего подходит для Вас. Как подключить и настроить прокси, и многое другое.
    			</p>
    		</div>
    	</div>
    </section>

    <section class="option text-senter">
   
	    <div class="container">
	    	<a href="#" class="link-option">Перейти к выбору</a>
	    	<img alt="Изображение" src="wp-content/themes/proksi/images/servers.jpg"  class="img-serv">
	    	<div class="row text-center">
	    		<a href="#" class="link-option-plus">Или...</a>

	    	</div>
	    	<div class="row text-center">
	    		<img alt="Изображение" src="wp-content/themes/proksi/images/down-strela.png" height="65" width="229">
	    	</div>
		</div>
    </section>
	
	<section class="new-no-price">
		<div class="container new-super-border-top">
			
		</div>
	</section>

    <!--section class="not-buy">

    	<div class="container">
    		<p class="p-not-buy">
    			Бесплатные прокси
    		</p>
    		<div class="block-buy">
    			<p class="text-info-plus ptop25">
    				Подписавшись на рассылку вы будете  получать бесплатные прокси веместе с Информацию о Акциях и скидках. А так же узнать много полезной и трудно доступной информации совершенно бесплатно.<br/>
					Для того что бы получать рассылку введите ваше имя и e-mail и нажмите кнопку “получить”.
    			</p>
    		</div>
    		<div class="text-center">
	    		<form>
		    		<input id="name" name="name" type="text" placeholder="Имя" class="form-control input-md input-style">
		    		<input id="number" name="number" type="text" placeholder="E-mail" class="form-control input-md input-style">
		    		<button class="but-form">Подписаться</button>
		    	</form>
		    </div>
    	</div>
    </section-->
	

	
	<script>
				var glide = $('.slider').glide().data('api_glide');

			$(window).on('keyup', function (key) {
				if (key.keyCode === 13) {
					glide.jump(3, console.log('Wooo!'));
				};
			});

			$('.slider__arrows-item').on('click', function() {
				console.log(glide.current());
			});
			var glide = $('.slider-second').glide().data('api_glide');

			$(window).on('keyup', function (key) {
				if (key.keyCode === 13) {
					glide.jump(3, console.log('Wooo!'));
				};
			});

			$('.slider__arrows-item').on('click', function() {
				console.log(glide.current());
			});
	</script>
<?php get_footer(); ?>
