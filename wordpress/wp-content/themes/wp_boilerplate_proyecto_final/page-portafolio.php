<?php get_header() ?>
	<section class="container">
		<h1><?php echo('Portafolio')?></h1>
		<div class="row">
			<?php 
			    query_posts(array( 
			        'post_type' => 'portfolio_post_type',
			        'showposts' => 12,
			        'orderby'	=> 'title',
			        'category_name' => 'portafolio' 
			    ) );  
			?>
			<?php while (have_posts()) : the_post(); ?>

			<div class="thumbnail col-md-6">
				<?php the_post_thumbnail('entradas'); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
				</div>
			</div>
	
			
		</div>
        <?php endwhile;?>
    </section>        
		
		
	        

		

<?php get_footer(); ?>