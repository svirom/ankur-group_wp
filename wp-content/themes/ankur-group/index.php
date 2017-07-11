<?php get_header(); ?>

<div class="container articles_page">
	<div class="container_inner">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2> 
			<?php the_post_thumbnail(array(400,200)); ?>
			<?php the_content(); ?>
		</article>
	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>
	</div>	
</div>

<?php get_footer(); ?>