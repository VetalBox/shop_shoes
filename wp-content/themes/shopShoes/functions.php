<?php 

	add_action('wp_enqueue_scripts', function(){
		
		
		wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
		wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css');
		wp_enqueue_style('bootstrap-min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), null);

		wp_deregister_script( 'jquery' );
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
		wp_enqueue_script('jquery');
		wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/js.js', array('jquery'), 'null', true);
		wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), 'null', true);



		
	});
	



	
	/*add_action('after_setup_theme', 'add_menu');
	
		function add_menu(){
			register_nav_menu('top', 'Главное меню сайта');
		}*/
	
	
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');

 ?>