<?php get_header() ?>

<section class="container content-blog">
    <div class="row">
		<?php custom_breadcrumbs(); ?><!-- Fin Breadcrumb -->
			<?php if ( have_posts() ) { ?>
				<?php while ( have_posts() ) { ?>
				
    	<div class="col-md-9" >
				<h1><?php the_title() ?></h1>
				<?php the_post(); ?>
				<?php get_the_post_thumbnail(); ?>
				

				<?php the_content() ?>		

			<?php } ?>
		<?php } else { ?>
	<!-- Content -->
		<?php } wp_reset_query(); ?>
    	</div>
		
	
       	<div class="col-md-3" >
       		<?php get_sidebar() ?>
       	</div>
    </div>


</section>

<?php get_footer();
