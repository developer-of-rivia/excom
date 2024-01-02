<?php get_header(); ?>

	<!-- modals -->
	<div class="modals">
		<div class="modal-overlay">
			<div class="modal modal--1" data-target="eatcont-popup">
				<div class="modal-close">
					
				</div>
				<!-- eatcont -->
				<section class="eatcont-section">
					<div class="container">
						<div class="eatcont">
							<div class="eatcont__wrapper">
								<div class="eatcont__top-ungles"></div>
								<div class="eatcont__bottom-ungles"></div>
								<div class="eatcont__title">
									Контракт <br>на еду
								</div>
								<div class="eatcont__img">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/eatcont-logo.png">
								</div>

								<!-- tabs head -->
								<div class="nav-tabs">
									<?php
										$query = new WP_Query([
											'post_type' => 'menu',
										]);
										$menu_count_head = 0;

										if ( $query->have_posts() ) {
											while ( $query->have_posts() ) {
												$query->the_post();
												?>
													<a href="#" data-tab="<?php the_ID(); ?>" class="nav-tab <?= $menu_count_head == 0 ? 'active' : '' ?>"><?php the_title(); ?></a>
												<?php
												$menu_count_head++;
											}
										}

										wp_reset_postdata();
									?>
								</div>
								<!-- tab content -->
								<div class="tab-content">
									<?php
										$query = new WP_Query([
											'post_type' => 'menu',
										]);

										if ( $query->have_posts() ) {
											while ( $query->have_posts() ) {
												$query->the_post();
												?>
													<div data-tab-content="<?php the_ID(); ?>" class="tab-pane <?= $menu_count == 0 ? 'active' : '' ?>">
														<div class="eatcont__menu">
															<div class="eatcont__menu-column">
																<?php
																	$menu_left_groups = CFS()->get('menu_left_groups');

																	foreach ($menu_left_groups as $left_group) {
																		?>
																		<div class="eatcont__box">
																			<div class="eatcont__box-title">
																				<?= $left_group['menu_left_groups_tiitle']; ?>
																			</div>
																			<?php
																				$menu_left_groups_dishes = $left_group['menu_left_groups_dishes'];
																				foreach($menu_left_groups_dishes as $dish){
																					?>

																					<div class="eatcont__item">
																						<div class="eatcont__item-left">
																							<div class="eatcont__item-name">
																								<?= $dish['menu_left_groups_dishes_title']; ?>
																							</div>
																							<div class="eatcont__item-ingrs">
																								<?= $dish['menu_left_groups_dishes_ingrs']; ?>
																							</div>
																						</div>
																						<div class="eatcont__item-right">
																							<div class="eatcont__item-g">
																								<?= $dish['menu_left_groups_dishes_weight']; ?>
																							</div>
																							<div class="eatcont__item-cost">
																								<?= $dish['menu_left_groups_dishes_cost']; ?>
																							</div>
																						</div>
																						<div class="eatcont__image">
																							<img src="<?= $dish['menu_left_groups_dishes_img']; ?>">
																						</div>
																					</div>

																			<?php } ?>
																		</div>
																	<?php }
																?>
															</div>
															<div class="eatcont__menu-column">
																<?php
																	$menu_right_groups = CFS()->get('menu_right_groups');

																	foreach ($menu_right_groups as $right_group) {
																		?>
																		<div class="eatcont__box">
																			<div class="eatcont__box-title">
																				<?= $right_group['menu_right_groups_tiitle']; ?>
																			</div>
																			<?php
																				$menu_right_groups_dishes = $right_group['menu_right_groups_dishes'];
																				foreach($menu_right_groups_dishes as $dish){
																					?>

																					<div class="eatcont__item">
																						<div class="eatcont__item-left">
																							<div class="eatcont__item-name">
																								<?= $dish['menu_right_groups_dishes_title']; ?>
																							</div>
																							<div class="eatcont__item-ingrs">
																								<?= $dish['menu_right_groups_dishes_ingrs']; ?>
																							</div>
																						</div>
																						<div class="eatcont__item-right">
																							<div class="eatcont__item-g">
																								<?= $dish['menu_right_groups_dishes_weight']; ?>
																							</div>
																							<div class="eatcont__item-cost">
																								<?= $dish['menu_right_groups_dishes_cost']; ?>
																							</div>
																						</div>
																						<div class="eatcont__image">
																							<img src="<?= $dish['menu_right_groups_dishes_img']; ?>">
																						</div>
																					</div>

																			<?php } ?>
																		</div>
																	<?php }
																?>
															</div>
														</div>
													</div>
												<?php
												$menu_count++;
											}
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="modal modal--2" data-target="me-popup">
				Окно 2
			</div>
		</div>
	</div>
	<!-- main -->						
	<main class="main">
		<!-- header -->
		<header class="header">
			<div class="header__left">
				<img src="<?php echo get_template_directory_uri(); ?>/app/images/header-print.png">
			</div>
			<nav class="header__nav">
				<ul class="header__menu">
					<li>
						<a href="#info">Контакты / бронь / доставка</a>
					</li>
				</ul>
			</nav>
			<nav class="header__info">
				<ul class="header__menu">
					<li>
						<a href="#">г. Новосибирск</a>
					</li>
				</ul>
			</nav>
			<div class="header__right">
				<img src="<?php echo get_template_directory_uri(); ?>/app/images/header-print.png">
			</div>
		</header>
		<div class="main__neon">
			EXCOMMUNICADO
		</div>
		<div class="main__neon2">
			
		</div>
		<!-- nav -->
		<div class="nav">
			<div class="containerr">
				<div class="nav__box">
					<div class="nav__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/images/where-nav.jpg)">
						<span class="nav__item-title">
							Контакты <br>
                            Бронь стола <br>
                            Доставка
						</span>
						<div class="nav__item-go">
							Найти
						</div>
					</div>
					<div class="nav__item nav__item_gallery" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/images/slider-img2.png)">
						<span class="nav__item-title">
							Галерея
						</span>
						<div class="nav__item-go">
							Завайбиться
						</div>
					</div>
					<div class="nav__item popup-link" data-path="eatcont-popup" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/images/menu-nav2.jpg)">
						<span class="nav__item-title">
							Меню
						</span>
						<div class="nav__item-go">
							Посмотреть
						</div>
					</div>
					<div class="nav__item nav__item_bar" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png)">
						<span class="nav__item-title">
							Наш бар
						</span>
						<div class="nav__item-go">
							Оценить
						</div>
					</div>
					<div class="nav__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/images/events-nav.jpg)">
						<span class="nav__item-title">
							Мероприятия
						</span>
						<!-- <ul class="nav__item-events">
							<li>Стендап - 9 декабря</li>
						</ul> -->
						<div class="nav__item-go">
							Хочу
						</div>
					</div>
				</div>
			</div>
			<div class="nav__print">
				<img src="<?php echo get_template_directory_uri(); ?>/app/images/bg-print.png">
			</div>
		</div>
	</main>
	<!-- info -->
	<div class="info" id="info">
		<div class="container info__container">
			<div class="info__wrapper">
				<div class="info__box">
					<div class="info__box-left">
						<div class="info__title">
							<?= CFS()->get('main_information_title', 2); ?>
						</div>
						<div class="info__text">
							<?= CFS()->get('main_information_left-text', 2); ?>
						</div>
						<div class="info__block info__block_button">
							<a href="#" class="info__button btn">
								Вся информация
							</a>
						</div>
					</div>
					<div class="info__box-right">
						<?php
							$mi_times = CFS()->get('main_information_times', 2);
							foreach ($mi_times as $mi_time){
								?>
								<div class="info__time">
									<div class="info__time-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/app/images/clock.svg">
									</div>
									<div class="info__time-content">
										<span>
											<?php echo $mi_time['main_information_times-days']; ?>
										</span>
										<p>
											<?php echo $mi_time['main_information_times-time']; ?>
										</p>
									</div>
								</div>
							<?php
							}
						?>
						<div class="info__time">
							<div class="info__time-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/app/images/mail.svg">
							</div>
							<div class="info__time-content">
								<p>
									<?= CFS()->get('main_information_post', 2); ?>
								</p>
							</div>
						</div>
						<ul class="info__social">
							<?php
								$mi_socs = CFS()->get('main_information_socials', 2);
								foreach ($mi_socs as $mi_soc){
									?>
									<li class="info__social-item">
										<a href="<?= $mi_soc['main_information_socials-link'] ?>">
											<?php
												foreach($mi_soc['main_information_socials-icon'] as $icon){
													?>
													<img src="<?php echo get_template_directory_uri(); ?>/app/images/socials/<?= $icon ?>.svg">
												<?php };
											?>
										</a>
									</li>
								<?php
								}
							?>
						</ul>
						<div class="info__number">
							<span>Сотрудничество:</span>
							<a href="tel:79132793292">
								<?= CFS()->get('main_information_phone', 2); ?>
							</a>
						</div>
					</div>
				</div>
				<div class="info__map">
					<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab8b853d6a7031253478961fc4ebcc9d7b2b80ea84c2b0d9e9dbb2f2b5d43e15e&amp;source=constructor" width="609" height="400" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- gallery -->
	<div class="gallery">
		<h2 class="gallery__title title">
			Галерея
		</h2>
		<div class="gallery__container">
			<div class="swiper gallery__swiper">
				<div class="swiper-wrapper">
					<?php
						$gallery = CFS()->get('main_gallery', 2);
						foreach ($gallery as $image){
							?>
							<div class="swiper-slide" style="background-image: url(<?php echo $image['main_gallery_img']; ?>);"></div>
						<?php
						}
					?>
				</div>
				<!-- pags -->
				<div class="swiper-pagination"></div>
				<!-- nav -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
	<!-- team -->
	<div class="team">
		<div class="team__print">
			<img src="<?php echo get_template_directory_uri(); ?>/app/images/bg-print.png">
		</div>
		<div class="container">
			<h2 class="team__title title team__title_mobile">
				<?= CFS()->get('restaurant_title', 2); ?>
			</h2>
			<div class="team__wrapper">
				<div class="team__img">
					<img src="<?= CFS()->get('restaurant_image', 2); ?>">
				</div>
				<div class="team__content">
					<h2 class="team__title title team__title_desktop">
						<?= CFS()->get('restaurant_title', 2); ?>
					</h2>
					<div class="team__text">
						<?= CFS()->get('restaurant_editor', 2); ?>
					</div>
					<a href="#" class="team__button btn">
						Залы
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- tavern -->
	<div class="tavern-wrapper">
		<div class="tavern bg"></div>
		<div class="container">
			<h2 class="tavern__title title tavern__title_tablet">
				<?= CFS()->get('bar_title', 2); ?>
			</h2>
			<div class="tavern__wrapper">
				<div class="tavern__left">
					<h2 class="tavern__title title tavern__title_desktop">
						<?= CFS()->get('bar_title', 2); ?>
					</h2>
					<div class="tavern__content">
						<div class="tavern__text">
							<?= CFS()->get('bar_editor', 2); ?>
						</div>
						<button class="tavern__button button">
							Ассортимент
						</button>
					</div>
				</div>
				<div class="tavern__right">
					<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-callage.png">
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-sections">
		<!-- last -->
		<div class="last">
			<div class="container">
				<h2 class="last__title title">
					Дополнительная информация
				</h2>
				<div class="last__box">
					<div class="last__item">
						<div class="last__item-head">
							Скидки постоянным клиентам
						</div>
						<div class="last__item-text">
							Далеко-далеко за, словесными горами в стране гласных и согласных живут рыбные тексты.
						</div>
					</div>
					<div class="last__item">
						<div class="last__item-head">
							Устроить мероприятие
						</div>
						<div class="last__item-text">
							Далеко-далеко за, словесными горами в стране гласных и согласных живут рыбные тексты.
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<footer class="footer">
			<div class="footer__container">
				<div class="footer__box">
					<div class="footer__side footer__side_left">
						<!-- times -->
						<div class="footer__block footer__times">
							<div class="footer__block-title">
								Время работы:
							</div>
							<ul class="footer-block-list">
								<?php
									$f_times = CFS()->get('footer_times', 2);
									foreach ($f_times as $f_times_item){
										?>
										<li class="footer-block-li">
											<?php echo $f_times_item['footer_times_item']; ?>
										</li>
									<?php
									}
								?>
							</ul>
						</div>
						<!-- contacts -->
						<div class="footer__block footer__contacts">
							<div class="footer__block-title">
								Контакты:
							</div>
							<ul class="footer-block-list">
								<?php
									$f_times = CFS()->get('footer_contacts', 2);
									foreach ($f_times as $f_times_item){
										?>
										<li class="footer-block-li">
											<?php echo $f_times_item['footer_contacts_item']; ?>
										</li>
									<?php
									}
								?>
							</ul>
						</div>
					</div>
					<div class="footer__center">
						<img src="<?php echo get_template_directory_uri(); ?>/app/images/footer-logo.png">
					</div>
					<div class="footer__side footer__side_right">
						<div class="footer__block">
							<div class="footer__address">
								<?php
									echo CFS()->get('footer_address', 2);
								?>
							</div>
							<ul class="footer__social">
								<?php
									$f_socs = CFS()->get('footer_socials', 2);
									foreach ($f_socs as $f_soc){
										?>
										<li class="footer__social-item">
											<a href="<?= $f_soc['footer_socials-link'] ?>">

												<?php
													foreach($f_soc['footer_socials-icon'] as $icon){
														?>
														<img src="<?php echo get_template_directory_uri(); ?>/app/images/socials/<?= $icon ?>.svg">
													<?php };
												?>
												
											</a>
										</li>
									<?php
									}
								?>
							</ul>
						</div>
						<a target="_blank" href="<?php echo CFS()->get('footer_2gis', 2); ?>" class="footer__block footer__2gis">
							<span>Оставьте отзыв на</span>
							<img src="<?php echo get_template_directory_uri(); ?>/app/images/2gis.svg">
						</a>
					</div>
					<div class="footer__print">
						<img src="<?php echo get_template_directory_uri(); ?>/app/images/bg-print.png">
					</div>
				</div>
			</div>
		</footer>
	</div>

<?php get_footer(); ?>