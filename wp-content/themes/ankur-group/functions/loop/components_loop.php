<?php

$loop_com = new WP_Query( array( 
    'post_type' => 'components',   
    'posts_per_page' => -1
    ) ); ?>

<div class="offer_item left-10">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_production.png" alt="Component production">
    <h4><?php echo __('Component production', 'ankur-group'); ?></h4>
</div>
<div class="offer_item_inner">
    <div class="breadcrumb">
        <p><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> <?php echo __('back', 'ankur-group'); ?></a><?php echo __('Component production', 'ankur-group'); ?></p>
    </div>
    <div class="tab_panels">
        <div id="production" class="slider_prod">
        	<div class="slides">
            	<?php while ( $loop_com->have_posts() ) : $loop_com->the_post(); ?>  
				<div id="post-<?php the_ID(); ?>" <?php post_class('slider_item'); ?>>
                    <a href="#" id="<?php the_ID(); ?>" class="ajax-post sell">
    			        <?php the_title( '<h4>', '</h4>' ); ?>
    			        <?php the_post_thumbnail('full'); ?>
    			        <?php the_excerpt(); ?> 
                    </a>	
    			</div>
				<?php endwhile; ?>                
        	</div> 
        	<div class='prev'><img src='<?php echo get_template_directory_uri(); ?>/img/arrow_left.png' alt='Arrow'></div>
        	<div class='next'><img src='<?php echo get_template_directory_uri(); ?>/img/arrow_right.png' alt='Arrow'></div> 
    	</div>
	</div>
</div>