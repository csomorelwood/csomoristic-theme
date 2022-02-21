<?php
/*
** Register scripts and styles
*/
function addCsomoristicScriptsOnInit () {
	if (!is_admin()) {

		$lastModifiedJS = filemtime( get_template_directory() . '/dist/index.js' );
    wp_deregister_script('app-bundle');
		wp_register_script('app-bundle', get_template_directory_uri().'/dist/index.js', false, $lastModifiedJS, true);
		wp_enqueue_script('app-bundle');
	}
}
add_action('init', 'addCsomoristicScriptsOnInit');

function addCsomoristicStylesOnInit () {
  if(!is_admin()){
    wp_dequeue_style( 'global-styles' );
    
		if (file_exists( get_stylesheet_directory() . '/dist/index.css' )){
			$lastModifiedCSS = filemtime( get_template_directory() . '/dist/index.css' );
			wp_register_style( 'app', get_template_directory_uri() . '/dist/index.css', false, $lastModifiedCSS );
  		wp_enqueue_style( 'app' );
		}

  }
}
add_action('init', 'addCsomoristicStylesOnInit');

// WP 5.9 default szarok kigyomlálása
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );

// Activate post thumbnails
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}


/*
** Helper functions
*/
show_admin_bar(false);
// Extended var_dump
function full_dump($dump, $is_die=false) {
	echo '<pre>';
	var_dump($dump);
	echo '</pre>';
	if ($is_die) {
			die();
	}
}

// ACF image draw function
function drawImage($file, $class='') {
	return '<img width="'.$file['width'].'" height="'.$file['height'].'" src="'.$file['url'].'" alt="'. ($file['alt'] ? $file['alt'] : $file['url']) .'"class="'.$class.'">';
};


?>