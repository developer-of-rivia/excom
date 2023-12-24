<?php get_header(); ?>

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
	<div class="info" id="info">
		<div class="container">
			<div class="info__wrapper">
				<div class="info__box">
					<div class="info__box-left">
						<div class="info__title">
							Контакты ресторана
						</div>
						<div class="info__text">
							<p>
								ул. Красный проспект 326/3
							</p>
							<p>
								Завтраки: пн-пт с 10:00 до 12:00, сб-вс с <br>
								11:00 до 13:00
							</p>
							<p>
								Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты.
							</p>
						</div>
						<div class="info__block info__block_button">
							<a href="#" class="info__button btn">
								Вся информация
							</a>
						</div>
					</div>
					<div class="info__box-right">
						<div class="info__time">
							<div class="info__time-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/app/images/clock-icon.png">
							</div>
							<div class="info__time-content">
								<span>пн, вт, ср, чт</span>
								<p>с 10:00 до 00:00</p>
							</div>
						</div>
						<div class="info__time">
							<div class="info__time-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/app/images/clock-icon.png">
							</div>
							<div class="info__time-content">
								<span>пн, вт, ср, чт</span>
								<p>с 10:00 до 00:00</p>
							</div>
						</div>
						<div class="info__time">
							<div class="info__time-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/app/images/clock-icon.png">
							</div>
							<div class="info__time-content">
								<span>пн, вт, ср, чт</span>
								<p>с 10:00 до 00:00</p>
							</div>
						</div>
						<div class="info__time">
							<div class="info__time-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/app/images/mail-icon.png">
							</div>
							<div class="info__time-content">
								<p>info@dedbynokol.com</p>
							</div>
						</div>
						<div class="info__number">
							<span>Сотрудничество:</span> <br>
							+7 913 279-32-92 (Николай)
						</div>
						<div class="info__socials">
							◘
						</div>
						.info__box
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
				<!-- <div class="tavern__right">
					<div class="tavern__imgs">
						<div class="swiper mySwiper2">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png">
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img2.png">
								</div>
							</div>
						</div>
						<div thumbsSlider="" class="swiper mySwiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png" />
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png" />
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png" />
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img1.png" />
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-img2.png" />
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<div class="tavern__right">
					<img src="<?php echo get_template_directory_uri(); ?>/app/images/tavern-callage.png">
				</div>
			</div>
		</div>
	</div>



	
				




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
<?php get_footer(); ?>