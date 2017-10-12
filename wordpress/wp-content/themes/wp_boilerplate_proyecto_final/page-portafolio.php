<?php get_header() ?>
	<section class="container section-portfolio">
		<h1><?php echo('Portafolio')?></h1>
		
			<?php 
			    query_posts(array( 
			        'post_type' => 'portfolio_post_type',
			        'showposts' => 12,
			        'orderby'	=> 'title',
			        'category_name' => 'portafolio' 
			    ) );  
			?>
			<?php while (have_posts()) : the_post(); ?>

			<div class="thumbnail col-md-5 col-sm-12 col-xs-12 portfolio-style">
				<?php the_post_thumbnail('slideshow'); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
				</div>
			</div>
			
        <?php endwhile;?>
    </section>        
		
		
	        

		

<?php get_footer(); ?>