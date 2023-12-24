<?php

	/* Enqueue scripts and styles */
	add_action( 'wp_enqueue_scripts', 'kotiapusi_scripts' );
	function kotiapusi_scripts() {
		// wp_enqueue_style( 'kotiapusi-style', get_stylesheet_uri(), array(), _S_VERSION );
		// style css
		wp_enqueue_style('style', get_stylesheet_uri() );
		// gallery css
		wp_enqueue_style('gallerycss', get_template_directory_uri() . '/app/css/lightgallery/lightgallery.min.css');
		// swiper css
		wp_enqueue_style('swipercss', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
		// main css
		wp_enqueue_style('main', get_template_directory_uri() . '/app/css/app.min.css?123');
		// swiper js
		wp_enqueue_script( 'swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js');
		// gallery
		wp_enqueue_script( 'galleryjs', get_template_directory_uri() . '/app/js/lightgallery.min.js');
		// main js
		wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/app/js/app.min.js');
	}



	/* Menu cpt */
	add_action('init', 'my_custom_init__menu');
	function my_custom_init__menu(){
		register_post_type('menu', array(
			'labels'             => array(
				'name'               => 'Меню',
				'singular_name'      => 'Меню',
				'add_new'            => 'Добавить новое',
				'add_new_item'       => 'Добавить новое меню',
				'edit_item'          => 'Изменить меню',
				'new_item'           => 'Новое меню',
				'not_found'          => 'Меню не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Меню'
			),
			'public'             => false,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => false,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'menu_icon'          => 'dashicons-list-view', 
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => ['title', 'editor', 'thumbnail'],
		) );
	}




	// add support of custom-logo
	add_theme_support('custom-logo');
	add_filter( 'get_custom_logo', 'change_logo_class' );
	function change_logo_class( $html ) {
		$html = str_replace( 'custom-logo-link', 'w-48 xl:w-40 lg:w-32', $html );
		$html = str_replace( 'custom-logo', 'w-full', $html );
		return $html;
	}



	// remove comments page from wpmenu
	add_action( 'admin_menu', 'remove_menus' );
	function remove_menus(){
		// remove_menu_page( 'plugins.php' ); // Плагины
		// remove_menu_page( 'options-general.php' ); // Настройки


		remove_menu_page( 'themes.php' ); // Внешний вид
		remove_menu_page( 'edit-comments.php' ); // Комментарии
		remove_menu_page( 'edit.php' ); // Записи
		remove_menu_page( 'index.php' ); // Консоль
		remove_menu_page( 'upload.php' ); // Медиафайлы
		remove_menu_page( 'tools.php' ); // Инструменты
		remove_menu_page( 'users.php' ); // Пользователи
	}



	// убрать верхнюю полосу Wordpress
	add_filter( 'show_admin_bar', '__return_false' );



	/**
	 * Удаление полей из редактора постов
	 */
	// Удаление эдитора
	add_action( 'init', 'my_remove_post_excerpt_feature' );
	function my_remove_post_excerpt_feature() {
		remove_post_type_support('page', 'editor');
		remove_post_type_support('menu', 'editor');
	}
	// удаление метабоксов
	add_action( 'add_meta_boxes' , 'remove_page_excerpt_field', 99 );
	function remove_page_excerpt_field() {
		remove_meta_box( 'commentsdiv' , 'page' , 'normal' );
		remove_meta_box( 'postcustom' , 'page' , 'normal' );
		remove_meta_box( 'authordiv' , 'page' , 'normal' );
		remove_meta_box( 'slugdiv' , 'page' , 'normal' );
		remove_meta_box( 'commentstatusdiv' , 'page' , 'normal' );
	}


	
	/**
	 * AIO migrations folders exclude
	*/
	add_filter( 'ai1wm_exclude_themes_from_export',
		function ( $exclude_filters ) {
			$exclude_filters[] = 'clients-kotiapusi/node_modules';
			return $exclude_filters;
		} 
	);
	add_filter('wpcf7_autop_or_not', '__return_false');


?>