<?php get_header(); ?>

    <div class="content">
    <?php if (have_posts()) : ?>
       
        <?php while (have_posts()) : the_post(); ?>
               
            <div class="post">
                                                        
                <div class="entry">
                    <?php the_content(); ?>
                </div>   
                   
            </div>  
            
        <?php endwhile; ?>
        
    <?php else : ?>
    
        <h2 class="center">Ups!...</h2>
        <p class="center">La p&aacute;gina que buscas ha cambiado de sitio o ya no existe. Por favor sigue navegando en nuestro sitio para encontrar la informaci&oacute;n que deseas.</p>
        <p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.gif" alt=""> </p>
    <?php endif; ?>
        
    </div>
    
    
    
    <div id="header">
        <div class="logo"><h1><a href="<?php bloginfo('url'); ?>/">
        <span><?php bloginfo('name'); ?></span></a></h1>
        <span class="descripcion-sitio"><?php bloginfo('description'); ?></span>
        <div class="frase">
	        <p>Videre res ut sunt cum ego absunt <br>
			To see things as they are when I’m not there <br>
			Ver las cosas como son cuando yo no estoy ahí</p>
        </div>
        <div class="menu_principal"><?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?></div>
        </div>
        </div>
    
<?php get_footer(); ?>