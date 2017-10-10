<?php get_header(); ?>

	<!-- Hero Section -->
    <header class="container-fluid header-site">
        <div class="row">
            <div class="header-text col-md-6">
                <h1>Aumenta la creatividad, compromiso e innovación de tu equipo con los lentes del lenguaje visual</h1>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat saepe quasi, vero ad, cupiditate doloremque recusandae adipisci ratione facilis corrupti.</h3>
            </div>
            <div class="header-img col-md-6 col-sm-12">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/front-page/hero-img.png"  alt="" class=" hidden-xs img-responsive"/>
            </div>
         </div>
    </header><!-- Hero Section -->

    <!-- Features Section -->
    <section class="container-fluid section-features">
        <div class="row">
            <div class="col-md-4 col-xs-4 col-sm-4 img-feature">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/front-page/features-img-1.png"  alt="Compromiso" class="hidden-xs img-responsive" />
                <h2>Activa el Compromiso</h2>
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4 img-feature">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/front-page/features-img-3.png"  alt="" class="hidden-xs img-responsive"/>
                <h2>Mejora tu Negocio</h2>
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4 img-feature">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/front-page/features-img-2.png"  alt="" class="hidden-xs img-responsive"/>
                <h2>Aumenta la Creatividad</h2>
            </div>
        </div>
    </section><!-- Features Section -->

    <!-- Services Section -->
    <section class="container-fluid section-services">
        <div>
            <h2>Conoce Nuestros Servicios</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <a href="#"><h3 class="services-text">Registro Gráfico</h3></a>
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/front-page/services-img-1.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-3 col-sm-3">
                <a href="#"><h3 class="services-text">Workshop</h3></a>
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/front-page/services-img-2.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-3 col-sm-3">
                <a href="#"><h3 class="services-text">Videos Animados</h3></a>
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/front-page/services-img-3.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-3 col-sm-3">
                <a href="#"><h3 class="services-text">Infografías</h3></a>
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/front-page/services-img-4.png" alt="" class="img-responsive">
            </div>

        </div>
    </section><!-- Services Section -->

	<!-- Portfolio Section -->
	<section class="portfolio_style container-fluid">
        <div class="row">
           <!-- Title Portfolio-->
        	<div id="portfolio" class=" gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<h2>Portafolio</h2>
            	<h3>Nuestros últimos trabajos </h3>
        	</div>
            <!-- Filter Portfolio -->
	        <div class="text-center container">
	            <button class="btn btn-portfolio filter-button" data-filter="all">Todos</button>
	            <button class="btn btn-portfolio filter-button" data-filter="registro">Registro Gráfico</button>
	            <button class="btn btn-portfolio filter-button" data-filter="videos">Videos</button>
	            <button class="btn btn-portfolio filter-button" data-filter="workshop">Workshop</button>
	            <button class="btn btn-portfolio filter-button" data-filter="infografias">Infografías</button>
	        </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter registro">
                <img src="<?php the_field('imagen_1'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter workshop">
                <img src="<?php the_field('imagen_2'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter workshop">
                <img src="<?php the_field('imagen_3'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter registro">
                <img src="<?php the_field('imagen_4'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter registro">
                <img src="<?php the_field('imagen_5'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter workshop">
                <img src="<?php the_field('imagen_6'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter registro">
                <img src="<?php the_field('imagen_7'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter workshop">
                <img src="<?php the_field('imagen_8'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter workshop">
                <img src="<?php the_field('imagen_9'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter infografias">
                <img src="<?php the_field('imagen_10'); ?>"  class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter infografias">
                <img src="<?php the_field('imagen_11'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <div class="gallery_portfolio col-lg-3 col-md-4 col-sm-6 col-xs-6 filter videos">
                <img src="<?php the_field('imagen_12'); ?>" class="img-responsive">
                <div class="gallery-overlay">
                    <div class="gallery-overlay-text">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
    	</div>
	</section><!-- Portfolio Section -->

    <!-- Tetimonial Carousel-->
    <section class="container-fluid testimonial-carousel-section">
        <div class="row">
            <h2>Lo que dicen nuestros clientes</h2>
            <div class="col-md-8 col-md-offset-2">
                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <blockquote>
                                <h3>Giovanni Magnani</h3>
                                <h5>Director de Negocios en Populus ﻿﻿﻿Group</h5>
                                <p>Es un agrado trabajar con Kris, está super dispuesta a probar cosas y apoyar las ideas que tenemos. Siempre entiende el contexto de los proyectos lo que hace fácil que salgan las cosas y llegar a buen puerto. No solo nos ha apoyado en temas de facilitación, sino también en proyectos de generación de marca ¡Es un 8!</p>
                                </blockquote>
                            <div class="profile-circle">
                                <img src="http://www.lentedekris.cl/wp-content/uploads/2017/03/avatar.jpg" class="profile-circle" width="50px" alt="">
                            </div>
                        </div>
                    <!-- Carousel items -->    
                    <div class="item">
                        <blockquote>
                            <h3>Camila Yuretic</h3>
                            <h5>Coordinadora de Marketing  y Comunicaciones en Launch Coworking</h5>
                            <p>Tener la posibilidad de trabajar con Kristine ha sido una tremenda experiencia. Encontrar en ella y en su trabajo gran nivel de profesionalismo y compromiso con sus alumnos, además de unas tremendas ganas de comunicar y aportar al conocimiento del resto, hace que para todos quienes admiramos su trabajo, la sigamos queriendo cerca de nuestros proyectos.</p>
                        </blockquote>
                        <div class="profile-circle">
                            <img src="http://www.lentedekris.cl/wp-content/uploads/2017/03/camila-yuretic.png" class="profile-circle" width="50px" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <blockquote>
                            <h3>Ismael Espinoza</h3>
                            <h5>Coordinador Investigación con Pregrado, Vicerrectoría de Investigación, Universidad Mayor.</h5>
                            <p>Lente de Kris es una excelente manera de vivenciar experiencias de emprendimiento e innovación, tanto por lo lúdico como por la excelente forma de plasmar los resultados que se logran en el taller.</p>
                        </blockquote>
                        <div class="profile-circle" style="background-color: rgba(145,169,216,.2);">
                            
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section><!-- Testimonial Carousel-->

    <!-- Client slide section-->
    <section class="hidden-sm hidden-xs container client-carousel-style">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="logo_slide" class="carousel slide">
                    <!-- Carousel indicators -->
                    <ol class="hidden-sm hidden-xs hidden-md hidden-lg carousel-indicators">
                        <li data-target="#logo_slide" data-slide-to="0" class="active"></li>
                        <li data-target="#logo_slide" data-slide-to="1"></li>
                        <li data-target="#logo_slide" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <!-- Carousel items -->
                        <div class="item active">
                            <div class="row">
                                <div class="img-responsive col-md-3 col-lg-3">
                                    <a href="<?php echo the_field('url_client_1'); ?>">
                                        <img class="" src="<?php the_field('logo_client_1'); ?>" alt="Image">
                                    </a>
                                </div>
                                <div class="img-responsive col-md-3 col-lg-3">
                                    <a href="<?php echo the_field('url_client_2'); ?>">
                                        <img src="<?php the_field('logo_client_2'); ?>" alt="Image" >
                                    </a>
                                </div>
                                <div class="img-responsive col-md-3 col-lg-3">
                                    <a href="<?php echo the_field('url_client_3'); ?>">
                                        <img src="<?php the_field('logo_client_3'); ?>" alt="Image" >
                                    </a>
                                </div>
                               <div class="img-responsive col-md-3 col-lg-3">
                                    <a href="<?php echo the_field('url_client_4'); ?>">
                                        <img src="<?php the_field('logo_client_4'); ?>" alt="Image"">
                                    </a>
                                </div>
                             </div>
                        </div> 
                        <!-- Carousel items --> 
                         <div class="item">
                            <div class="row">
                                <div class="img-responsive col-md-3 col-lg-3">
                                    <a href="<?php echo the_field('url_client_1'); ?>">
                                        <img class="" src="<?php the_field('logo_client_1'); ?>" alt="Image">
                                    </a>
                                </div>
                                <div class="img-responsive col-md-3 col-lg-3">
                                    <a href="<?php echo the_field('url_client_2'); ?>">
                                        <img src="<?php the_field('logo_client_2'); ?>" alt="Image" >
                                    </a>
                                </div>
                                <div class="img-responsive col-md-3 col-lg-3">
                                    <a href="<?php echo the_field('url_client_3'); ?>">
                                        <img src="<?php the_field('logo_client_3'); ?>" alt="Image" >
                                    </a>
                                </div>
                               <div class="img-responsive col-md-3 col-lg-3">
                                    <a href="<?php echo the_field('url_client_4'); ?>">
                                        <img src="<?php the_field('logo_client_4'); ?>" alt="Image"">
                                    </a>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Client slide section-->

<?php  get_footer(); ?>
