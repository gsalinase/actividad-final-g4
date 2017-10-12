 <?php get_header(); ?> 

 <section class="container-fluid">
    
        <div class="blog-section-style">
            <div class="blog-title">
                <?php
                    $pagina_blog = get_option( 'page_for_posts' );
                    $titulo = get_the_title($pagina_blog); ?>
                
                <h1><?php echo $titulo; ?></h1>

            </div> <!--Blog Title-->

        <?php 

            $args = array(
                'posts_per_page' => 15);

            $the_query = new WP_Query( $args ); ?>


        <?php if ( $the_query->have_posts() ) : ?>


        <?php while ( $the_query->have_posts()) : $the_query->the_post(); ?>

                
            <div class=" col-md-5 col-sm-5 post-style thumbnail">
                <?php the_post_thumbnail( 'entradas' ); ?>
                <?php the_title('<h3>', '</h3>'); ?>

                <hr class="line-feature-post">

                <p class="text-center">
                  Escrito por <span> <?php the_author(); ?></span>
                </p>
                <p>
                    <?php the_excerpt(); ?>
                </p>

                <a href="<?php the_permalink() ?>" type="button" class="btn btn-warning">Leer más</a>

            </div>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
     </div>
 </section> 
<?php 
function your_themes_pagination(){
    global $wp_query; 
     paginate_links();
} ?>

 <?php paginate_links(); ?>

 <?php get_footer(); ?> 

<?php else : ?>
    <p><?php esc_html_e( 'No encontramos lo que buscabas' ); ?></p>
<?php endif; ?>