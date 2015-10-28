<?php
/*
Template Name: Portada
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

    <div id="content" class="">

    <div class="slider"><?php echo do_shortcode('[nivoslider id="188"]'); ?></div>

    <?php if (have_posts()) : ?>
	<?php $loop = new WP_Query( array( 'post_type' => 'ofertas', 'posts_per_page' => 2 ) ); ?>  

	<h2>&Uacute;ltimas Ofertas Equilibrium:</h2>
    
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
	<div class="entry-content">
	<?php if ( has_post_thumbnail()) : ?>
	<?php the_post_thumbnail('thumbnail'); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>
	
	
<?php endwhile; ?>
       
 <h3><a href="http://tuequilibrium.com/category/ofertas/">Ver ofertas anteriores >></a></h3>
       
       
    <?php else : ?>
        <h2 class="center">No encontrado</h2>
        <p class="center">Ups, lo que buscas no está aquí...</p>
    <?php endif; ?>
    
    </div><!-- #content -->
    
<?php get_footer(); ?>