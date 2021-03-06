<?php
function true_load_posts(){
	$args = unserialize(stripslashes($_POST['query']));
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	$q = new WP_Query($args);
	if( $q->have_posts() ):
		while($q->have_posts()): $q->the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    			<?php the_post_thumbnail(array(400,200)); ?>
    			<?php the_title( '<h4>', '</h4>' ); ?>
    			<?php the_excerpt(); ?>
    			<a href="<?php the_permalink(); ?>" id="<?php the_ID(); ?>" class="window-post" target="_blank"><?php echo __('Open in new window', 'ankur-group'); ?></a> 	 	
    		</article>
			<?php
		endwhile;
	endif;
	wp_reset_postdata();
	die();
}
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');