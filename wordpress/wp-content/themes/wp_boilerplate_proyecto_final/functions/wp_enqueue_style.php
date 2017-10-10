<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Neucha|Pontano+Sans' );
		wp_register_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array('reset'), $theme_data->get( 'Version' ), 'screen' );
		wp_register_style( 'bootstrap_theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');


		/* Enqueue Scripts */
		wp_enqueue_style( 'google_fonts' );
		wp_enqueue_style( 'bootstrap_css' );
		wp_enqueue_style( 'bootstrap_theme' );
		wp_enqueue_style('mainStyle');

	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>