<?php

$loop_ser = new WP_Query( array( 
    'post_type' => 'services',   
    'posts_per_page' => -1
    ) ); ?>

<div class="offer_item left-15">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_support.png" alt="Support">
    <h4><?php echo __('Services'); ?></h4>
</div>
<div class="offer_item_inner">
    <div class="breadcrumb">
        <p><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> <?php echo __('back'); ?></a><?php echo __('Services'); ?></p>
    </div>
   	<div class="tab_panels">
        <div id="support" class="slider_sup">
            <div class="slides">
                <?php while ( $loop_ser->have_posts() ) : $loop_ser->the_post(); ?>  
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