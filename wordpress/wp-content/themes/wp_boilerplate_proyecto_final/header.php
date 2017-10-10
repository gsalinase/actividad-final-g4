<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<title><?php bloginfo( 'the_title' ); ?></title>
	<?php wp_head() ?>
</head>
<body>
	<!-- NavBar-->
	<nav class="navbar navbar-style">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="" href="<?php echo get_option("siteurl"); ?>">
            <?php 
            	if ( function_exists( 'the_custom_logo' ) ) {
    					   the_custom_logo();
				      }	   
            ?> 
          </a>
          <button type="button" class="text-center navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
    	<!-- Dinamic WP menu-->
        <div>

			<?php if ( has_nav_menu( 'header-menu' ) ) {
				
				wp_nav_menu( array(

		          'theme_location' => 'header-menu',
		          'container_class' => 'collapse navbar-collapse',
		          'container_id' => 'bs-example-navbar-collapse-1',
		          'menu_class' => 'nav navbar-nav navbar-right'

			    ) );

				
			} ?>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!-- Navbar -->
