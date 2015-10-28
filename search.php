<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div class="content">
	<h2>Informaci&oacute;n que contiene la palabra "<?php the_search_query() ?>"</h2>
	
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="entry">

				<ul>
				<li>
				
				<a class="alignright" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<h4><?php the_title(); ?></h4>
				<?php the_excerpt(); ?>
				</a>
				
				
				<a class="alignleft" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
				</li>
				
				</ul>

			</div>

		<?php endwhile; ?>

	<?php else : ?>
		Ups!... No se encontraron coincidencias para "<?php the_search_query() ?>". 
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>