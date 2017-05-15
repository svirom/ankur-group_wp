<?php

$loop_art = new WP_Query( array( 
    'post_type' => 'post',   
    'posts_per_page' => 4
    ) ); ?>

<?php while ( $loop_art->have_posts() ) : $loop_art->the_post(); ?>  
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<?php the_post_thumbnail('full'); ?>
    	<?php the_title( '<h4>', '</h4>' ); ?>
    	<?php the_excerpt(); ?>
    	<a href="#" id="<?php the_ID(); ?>" class="ajax-post"><?php echo __('Open in popup'); ?></a> 	
    </article>
<?php endwhile; ?>
	
<?php if (  $loop_art->max_num_pages > 1 ) : ?>
	<script>
		var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
		var true_posts = '<?php echo serialize($loop_art->query_vars); ?>';
		var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
		var max_pages = '<?php echo $loop_art->max_num_pages; ?>';
	</script>
	<div id="true_loadmore" class="more_articles">
		<a href="#"><?php echo __('More Articles'); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	</div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>   