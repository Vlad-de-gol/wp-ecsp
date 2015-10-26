<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section>
				
<div class="wrap-nav-block"></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;	
				?>	
			</div>
				<?php	
					// End the loop.
					endwhile;					
					if (is_page(9)){
				?>				
					<div class="wrap-baza">
						<div class="title-baza">БАЗА ЗНАНИЙ</div>
						<div class="container bg-baza-block">
							<div class="top-bg-baza-block">
								<?php			
									$category_id = get_cat_ID('База знаний');				 
									$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
									$args=array(
									'cat' => $category_id,
									'paged' => $paged,
									'posts_per_page' => 8
									);
									query_posts($args);								
									while (have_posts()) : the_post();
								?>	
										
									<div class="container block-output">
										<div class="row">
											<div class="col-md-2  col-sm-2 text-center">
												<?php the_post_thumbnail(); ?>
											</div>
											<div class="col-md-10 col-sm-10">
												<div class="row text-center-adpat">
													<p class="name-article"><?php echo the_title(); ?></p>
												</div>
												<div class="row">
													<p class="text-center-adpat while-article">
														<?php the_author(); ?>/
														<?php echo the_time( 'd-m-Y' ); ?>/
														<?php echo comments_number(); ?>/
														<?php echo single_cat_title(); ?>/
													</p><br/>
													<a href="<?php the_permalink(); ?>" class="link-article" >Узнать больше</a>
												</div>										
											</div>
										</div>
										
									</div>
									<?php								
										endwhile;
									?>	
									<div class="container">
										<?php if (function_exists('kama_pagenavi')) kama_pagenavi(); ?> 
									</div>	
							</div>
						</div>	
						
					</div>					
				<?php 
				}
					if (is_page(11)){				
				?>	
					
					<div class="wrap-ip">
						<?php
							$post_id = get_post( 11 );
							echo $post_id->post_content;
						?>
						<!--div class="title-baza">МОЙ IP</div>
						<div class="container mtop30">
							<div class="ip-client">
								<p class="action ptop20">Ваш IP адрес: 37.58.72.93</p>
								<p class="action">Страна: Украина</p>
							</div>
							<p class="action-plus">
								Сервис «Мой IP» предназначен для того, чтобы Вы могли легко узнать Ваш реальный внешний IP адрес и страну. Если Вас интересуют еще какая-либо дополнительная информация — пишите об этом в комментариях и мы добавим нужный функционал. Зайдите на страницу «Мой IP» после настройки прокси-сервера в браузере и Вы сможете точно определить сделали ли Вы все верно или нет. Если IP адрес и
							</p>
							<hr class="ccc-line"/>
							<p class="soc-net-text text-center">Поделиться в социальных сетях</p>
							<div class="row md-apdapt">
								<div class="col-md-1 margin-left-first">
									<a href="#">1
										<img src="http://eliteproxies.ru/moj-ip/wp-content/themes/proksi/images/soc-icon/1.png "/>
									1</a>
								</div>
								<div class="col-md-1"><a href="#">22</a></div>
								<div class="col-md-1"><a href="#">22</a></div>
								<div class="col-md-1"><a href="#">22</a></div>
								<div class="col-md-1"><a href="#">22</a></div>
								<div class="col-md-1"><a href="#">22</a></div>
								<div class="col-md-1"><a href="#">22</a></div>
								<div class="col-md-1"><a href="#">22</a></div>
								<div class="col-md-1"><a href="#">22</a></div>
							</div>
							<hr class="ccc-line"/>							
						</div-->	
						<div class="container mtop10">
							<?php echo do_shortcode( '[contact-form-7 id="212" title="Контактная форма 1"]' ); ?>
						</div>
					</div>	
				
				<?php 
				}
					if (is_page(181)){				
				?>	
					<?php
						//$post_id = get_post( 181 );
						//echo $post_id->post_content;
					?>
					<div class="wrap-faq">
						<div class="title-baza">FAQ</div>
						<div class="container mtop30">
							<div class="row mtop15">
								<div class="col-md-8">
									<div class="title-block-qwesh">
										<h4 class="title-qwesh">Сколько прокси в пакете?</h4>
										<p class="text-qwesh">
											Уже более 10 тысяч элитных и анонимных прокси. 
											База постоянно поддерживается в актуальном состоянии, 
											чистится от неработающих серверов и постоянно 
											дополняется новыми адресами.
										</p>
									</div>
									<div class="title-block-qwesh mtop15">
										<h4 class="title-qwesh">Сколько прокси в пакете?</h4>
										<p class="text-qwesh">
											Уже более 10 тысяч элитных и анонимных прокси. 
											База постоянно поддерживается в актуальном состоянии, 
											чистится от неработающих серверов и постоянно 
											дополняется новыми адресами.
										</p>
									</div>
									<div class="title-block-qwesh mtop15">
										<h4 class="title-qwesh">Сколько прокси в пакете?</h4>
										<p class="text-qwesh">
											Уже более 10 тысяч элитных и анонимных прокси. 
											База постоянно поддерживается в актуальном состоянии, 
											чистится от неработающих серверов и постоянно 
											дополняется новыми адресами.
										</p>
									</div>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-3 bg-white-opacity">
									<div class="login-page">
										<?php if (!(current_user_can('level_0'))){ ?>
											<h3 class="admin-style-plus">Логин</h3>											
											<form action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
												<ul class="spisok-list-login">
													<li>Имя пользователя</li>
													<li><input placeholder="Введите Ваш логин" type="text" name="log" class="form-control input-md mtop10 input-reg" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20" /></li>
													<li>Пароль</li>
													<li><input placeholder="Введите Ваш пароль" type="password" name="pwd" class="form-control input-md mtop10 input-reg" id="pwd" size="20" /></li>												 
													<li class="tesla-hod">
														<p class="ptop5">
														   <label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever"/><span>Запомнить меня</span></label>
														   <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
														</p>
													</li>
													<li><input type="submit" name="submit" value="Войти" class="button-wp" /></li>
												 
													
												</ul>
											</form>
											 <ul class="menu-admin">
												<li class="text-center"><a href="<?php echo get_option('home'); ?>/wp-register.php"  class="ptop10">Регистрация </a><br/></li>
												<li class="text-center"><a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword" class="ptop10">Забыли пароль?</a></li>
											</ul>
										<?php } else { ?>
												<ul class="admin_box">
													<li><a href="<?php echo get_option('home'); ?>/wp-admin/">Панель</a></li>
													<li><a href="<?php echo get_option('home'); ?>/wp-admin/post-new.php">Написать новый пост</a></li>							
													<li class="pbot15"><a href="<?php echo get_option('home'); ?>/wp-login.php?action=logout&redirect_to=<?php echo urlencode($_SERVER['REQUEST_URI']) ?>">Выйти</a></li>
												</ul>
										 
										<?php }?>
										<a href="http://eliteproxies.ru/baza-znanij/" class="link-know-baza baza-top">БАЗА ЗНАНИЙ</a>
										<p class="instraction ptop5"> 	
											Инструкции по настройке <br/>
											программного обеспечения <br/> 
											для работы со списками<br/>
											элитных и анонимных прокси <br/> 
											серверов.
										</p>
										<a href="http://eliteproxies.ru/baza-znanij/" class="link-know-baza coment-top">СВЕЖИЕ КОММЕНТАРИИ</a>
										<a class="instraction ptop5"> 	
											Прокси список с быстрой <br/> 
											скоростью | <br/> 
											EliteProxies.ru к записи Контакты<br/> 
										</a>
										<hr class="coment-line"/>
										<a class="instraction ptop5"> 	
											Рабочие прокси сервера |<br/> 
											EliteProxies.ru к записи Контакты
										</a>
										<hr class="coment-line"/>
										<a class="instraction ptop5"> 	
											EliteProxies к записи Как оплатить<br/> 
											выбранный товар?
										</a>
										<hr class="coment-line"/>
										<a class="instraction ptop5"> 	
											Admin к записи Как оплатить<br/>  
											выбранный товар?
										</a>
										<hr class="coment-line"/>
										<a class="instraction ptop5"> 	
											ferz к записи Мы открыли форум
										</a>										
									</div>
								</div>
							</div>
						</div>
						<div class="container mtop10">
							<p class="qwesh-plus">Задать вопрос</p>	
							<?php echo do_shortcode( '[contact-form-7 id="212" title="Контактная форма 1"]' ); ?>
						</div>						
					</div>					
				<?php 
				}
				if (is_page(7)){				
				?>	
					<?php
						//$post_id = get_post( 7 );
						//echo $post_id->post_content;
					?>
					<div class="wrap-faq">
						<div class="title-baza">КУПИТЬ ПРОКСИ</div>
						<div class="container mtop45">
							<div class="row mtop15">
								<div class="col-md-3">								
									<div class="first-buy">										
										<div class="bat-buy text-center">										
											<a href="http://eliteproxies.ru/tovar/test1/"><button>КУПИТЬ</button></a>
										</div>
										<div class="name-server">
											<p class="p-name-server text-center ptop15">Экстренный</p>
											<p class="p-price-server text-center ptop5">72p.</p>
											<p class="p-price-server-plus text-center ptop5">1 день</p>
										</div>
										<p class="text-server-plus">
											Sed ut perspiciatis, unde omnis iste natus error sit voluptatem 
											accusantium doloremque laudantium, totam rem aperiam eaque ipsa, 
											quae ab illo inventore veritatis et quasi architecto beatae 
										</p>
									</div>
								</div>
								<div class="col-md-3">								
									<div class="first-buy">										
										<div class="bat-buy text-center">										
											<button>КУПИТЬ</button>
										</div>
										<div class="name-server">
											<p class="p-name-server text-center ptop15">Пробный</p>
											<p class="p-price-server text-center ptop5">196p.</p>
											<p class="p-price-server-plus text-center ptop5">7 дней</p>
										</div>	
										<p class="text-server-plus">
											Sed ut perspiciatis, unde omnis iste natus error sit voluptatem 
											accusantium doloremque laudantium, totam rem aperiam eaque ipsa, 
											quae ab illo inventore veritatis et quasi architecto beatae 
										</p>
									</div>
								</div>
								<div class="col-md-3">								
									<div class="first-buy">										
										<div class="bat-buy text-center">										
											<button>КУПИТЬ</button>
										</div>
										<div class="name-server">
											<p class="p-name-server text-center ptop15">Оптимальный</p>
											<p class="p-price-server text-center ptop5">390 руб.</p>
											<p class="p-price-server-plus text-center ptop5">30 дней</p>
										</div>
										<p class="text-server-plus">
											Sed ut perspiciatis, unde omnis iste natus error sit voluptatem 
											accusantium doloremque laudantium, totam rem aperiam eaque ipsa, 
											quae ab illo inventore veritatis et quasi architecto beatae 
										</p>										
									</div>
								</div>
								<div class="col-md-3">								
									<div class="first-buy">										
										<div class="bat-buy text-center">										
											<button>КУПИТЬ</button>
										</div>
										<div class="name-server">
											<p class="p-name-server text-center ptop15">Элитный</p>
											<p class="p-price-server text-center ptop5">1080 руб.</p>
											<p class="p-price-server-plus text-center ptop5">90 дней</p>
										</div>	
										<p class="text-server-plus">
											Sed ut perspiciatis, unde omnis iste natus error sit voluptatem 
											accusantium doloremque laudantium, totam rem aperiam eaque ipsa, 
											quae ab illo inventore veritatis et quasi architecto beatae 
										</p>
									</div>
								</div>							
							</div>
						</div>			
					</div>					
				<?php 
				}
				
					
				?>
				
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	
</section>
<?php get_footer(); ?>
