<?php
/*
Template Name: Contacto
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

    <div id="content" class="">
	<h2><?php the_title(); ?></h2>
    
    <?php if (have_posts()) : ?>
       
        <?php while (have_posts()) : the_post(); ?>
               
            <div class="post" id="post-<?php the_ID(); ?>">
                                                        
                <div class="entry">
                    <?php the_content(); ?>
                </div>   
                   
            </div>  
            
        <?php endwhile; ?>
        
       
    <?php else : ?>
    
        <h2 class="center">No encontrado</h2>
        <p class="center">Ups, lo que buscas no está aquí...</p>
        <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        
    <?php endif; ?>
    </div>
    
<?php get_footer(); ?>