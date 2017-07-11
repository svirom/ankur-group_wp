<?php get_header(); ?>

<div class="container articles_page">
	<div class="container_inner">
	<!-- Search Page -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink(); ?>" id="<?php the_ID(); ?>" <?php post_class(); ?>><?php the_title(); ?></a></h2> 
			<?php the_post_thumbnail(array(400,200)); ?>
			<?php the_excerpt(); ?>
		</article>
	<?php endwhile; ?>
	<?php else : ?>
		<p class="error-404"><?php echo __('There is no matches. Please try another option', 'ankur-group') ?></p>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	</div>	
</div>

<?php get_footer(); ?>