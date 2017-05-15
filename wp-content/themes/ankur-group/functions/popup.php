<?php 

/* Ajax Post */
add_action( 'wp_ajax_theme_post_example', 'theme_post_example_init' );
add_action( 'wp_ajax_nopriv_theme_post_example', 'theme_post_example_init' );

function theme_post_example_init() {

/* Made Query */
//$args = array( 'p' => $_POST['id'] );
$args = array( 'p' => $_POST['id'],'post_type' => array( 'post', 'aircraft') );
$theme_post_query = new WP_Query( $args );
while( $theme_post_query->have_posts() ) : $theme_post_query->the_post();
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_post_thumbnail('full'); ?>
    	<?php the_title( '<h4>', '</h4>' ); ?>
		<div class="entry-content"><?php the_content(); ?></div><!-- end .entry-content -->
	</div>
<?php
endwhile;
exit;
}

?>