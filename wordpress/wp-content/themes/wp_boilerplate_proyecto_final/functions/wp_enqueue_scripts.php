<?php 
	
	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */

		wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.2.1', true);
		wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);
		wp_register_script( 'bootstrap_js' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jQuery3'), null, true	);
		wp_register_script('flexslider', get_parent_theme_file_uri('/assets/js/lib/jquery.flexslider.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('easing', get_parent_theme_file_uri('/assets/js/lib/jquery.easing.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/functions.js'), array('jQuery_migrate'), $theme_data->get( 'Version' ), true);
		wp_register_script( 'google_maps' , 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAC2jVT8_D0Z-4fody3TgS4GfDyQ8fuSJ4&callback=initMap', null, null, true);

		
		
		/* Enqueue Scripts */
		wp_enqueue_script('bootstrap_js');
		wp_enqueue_script('easing');
		wp_enqueue_script('flexslider');
		wp_enqueue_script('mainJS');
		wp_enqueue_script('google_maps');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );

	/* Add Async & defer for Google Maps */

	function add_async_defer($tag, $handle){
		if('maps' !== $handle)
			return $tag;
		return str_replace('src','async="async" defer="defer" src', $tag);
	}
	add_filter('script_loader_tag', 'add_async_defer', 10, 2);	
?>