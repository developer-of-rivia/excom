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