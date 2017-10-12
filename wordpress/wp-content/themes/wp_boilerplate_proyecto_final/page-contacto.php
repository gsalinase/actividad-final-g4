<?php get_header() ?>

    <section class="container-fluid">
        <h1>Contacto</h1>
        <?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
        <?php dynamic_sidebar( 'contact_widget' ); ?>            
    <?php endif; ?>
    </section>
		
	<div id="map" class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2"></div>

<?php get_footer() ?>


<div class="container">
    <div class="row">
        <form class="form-style col-md-12 col-sm-12 col-xs-12">
            <h4>Tu Nombre (requerido)</h4>
            <label > 
                [text* your-name] 
            </label>
            <h4>Tu Correo (requerido)</h4>
            <label> 
                [email* your-email] 
            </label>
            <h4>Asunto</h4>
            <label> 
                [text your-subject] 
            </label>
            <h4>Tu Mensaje</h4>
            <label> 
                [textarea your-message] 
            </label>

                [submit "Enviar"]
        </form>
    </div>  
</div>