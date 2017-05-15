<?php get_header(); ?>

<div class="container single_article">
	<div class="container_inner">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2> 
			<?php the_post_thumbnail('full'); ?>
			<?php the_content(); ?>
		</article>
	<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>