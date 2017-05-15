<?php get_header(); ?>

<div class="container articles_page">
	<div class="container_inner">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><?php the_title(); ?></h2> 
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	</div>	
</div>

<?php get_footer(); ?>