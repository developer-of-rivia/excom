<?php get_header(); ?>
	<main>
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
					<div class="nav__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/images/slider-img2.png)">
						<span class="nav__item-title">
							Галерея
						</span>
						<div class="nav__item-go">
							Завайбиться
						</div>
					</div>
					<div class="nav__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/images/menu-nav2.jpg)">
						<span class="nav__item-title">
							Меню
						</span>
						<div class="nav__item-go">
							Посмотреть
						</div>
					</div>
					<div class="nav__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png)">
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
						<ul class="nav__item-events">
							<li>Стендап - 9 декабря</li>
						</ul>
						<div class="nav__item-go">
							Хочу
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- info -->
	<!-- info -->
	<!-- info -->
	<div class="info" id="info">
		<div class="container">
			<div class="info__wrapper">
				<div class="info__box">
					<div class="info__title">
						Информация о ресторане
					</div>
					<?php
						$info = CFS()->get('main_information', 2);
						foreach ($info as $info_item){
							?>
							<div class="info__block">
								<div class="info__block-head">
									<div class="info__block-icon">
										<img src="<?php echo $info_item['info_icon']; ?>">
									</div>
									<div class="info__block-title">
										<?php echo $info_item['info_title']; ?>
									</div>
								</div>
								<div class="info__block-text">
									<?php echo $info_item['info_value']; ?>
								</div>
							</div>
						<?php }
					?>
					<div class="info__block info__block_button">
                        <a href="#" class="info__button btn">
                            Вся информация
                        </a>
                    </div>
				</div>
				<div class="info__map">
					<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab8b853d6a7031253478961fc4ebcc9d7b2b80ea84c2b0d9e9dbb2f2b5d43e15e&amp;source=constructor" width="609" height="400" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- eatcont -->
	<svg style="width: 0; height: 0px;">
		<filter id='roughpaper'>
			<feTurbulence type="fractalNoise" baseFrequency='0.04' result='noise' numOctaves="5" />
	
			<feDiffuseLighting in='noise' lighting-color='#ead5b5' surfaceScale='2'>
				<feDistantLight azimuth='45' elevation='80' />
			</feDiffuseLighting>
		</filter>
	</svg>
	<section class="eatcont-section">
		<div class="container">
			<div class="eatcont">
				<div class="eatcont__texture"></div>
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
													<div class="eatcont__box">
														<div class="eatcont__box-title">
															Остывшие:
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
													</div>
													<div class="eatcont__box">
														<div class="eatcont__box-title">
															Ещё тёплые:
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
													</div>
												</div>
												<div class="eatcont__menu-column">
													<div class="eatcont__box">
														<div class="eatcont__box-title">
															Рёбра:
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
													</div>
													<div class="eatcont__box">
														<div class="eatcont__box-title">
															Жажда крови:
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
														<div class="eatcont__item">
															<div class="eatcont__item-left">
																<div class="eatcont__item-name">
																	Ростбиф El Classico
																</div>
																<div class="eatcont__item-ingrs">
																	(мраморная говядина премиус, вяленые томаты, маринованный лук, хлеб гриль)
																</div>
															</div>
															<div class="eatcont__item-right">
																<div class="eatcont__item-g">
																	160 гр.
																</div>
																<div class="eatcont__item-cost">
																	600 р.
																</div>
															</div>
															<div class="eatcont__image">
																<img src="<?php echo get_template_directory_uri(); ?>/app/images/item-preview.jpg">
															</div>
														</div>
													</div>
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
	<!-- gallery -->
	<div class="gallery">
		<h2 class="gallery__title title">
			Галерея
		</h2>
		<div class="swiper gallery__swiper">
			<div class="swiper-wrapper">
				<?php
					$gallery = CFS()->get('main_gallery', 2);
					foreach ($gallery as $image){
						?>
						<div class="swiper-slide">
							<img src="<?php echo $image['main_gallery_img']; ?>">
						</div>
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
	<!-- team -->
	<div class="team">
		<div class="team__print">
			<img src="<?php echo get_template_directory_uri(); ?>/app/images/bg-print.png">
		</div>
		<div class="container">
			<h2 class="team__title title team__title_mobile">
				РЕСТОРАН. НАШ КОЛЛЕКТИВ
			</h2>
			<div class="team__wrapper">
				<div class="team__content">
					<h2 class="team__title title team__title_desktop">
						РЕСТОРАН. НАШ КОЛЛЕКТИВ
					</h2>
					<div class="team__text">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
						</p>
					</div>
					<a href="#" class="team__button btn">
						Залы
					</a>
				</div>
				<div class="team__img">
					<img src="<?php echo get_template_directory_uri(); ?>/app/images/team-img.jpg">
				</div>
			</div>
		</div>
	</div>
	<!-- tavern -->
	<div class="tavern-wrapper">
		<div class="tavern bg"></div>
		<div class="container">
			<h2 class="tavern__title title tavern__title_tablet">
				НАША ТАВЕРНА
			</h2>
			<div class="tavern__wrapper">
				<div class="tavern__left">
					<h2 class="tavern__title title tavern__title_desktop">
						НАША ТАВЕРНА
					</h2>
					<div class="tavern__content">
						<div class="tavern__text">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
								Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							</p>
							<p>
								*Асортимент бара регулярно меняется. Проверяйте меню чтобы всегда быть в курсе наших новых позиций.
							</p>
						</div>
						<button class="tavern__button button">
							Ассортимент
						</button>
					</div>
				</div>
				<div class="tavern__imgs">
					<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png" class="tavern__img">
					<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img2.png" class="tavern__img">
					<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img2.png" class="tavern__img">
					<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img2.png" class="tavern__img">
				</div>
			</div>
		</div>
	</div>
	<!-- bg -->
	<div class="wrap">
		<div class="bg">
			<div class="hacker"></div>
		</div>
	</div>



<?php get_footer(); ?>