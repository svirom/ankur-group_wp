<?php

$loop_hel = new WP_Query( array( 
    'post_type' => 'helicopter',   
    'posts_per_page' => -1
    ) ); ?>

<div class="offer_item left-5">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_helicopters.png" alt="Helicopters">
    <h4><?php echo __('Helicopters', 'ankur-group'); ?></h4>
</div>
<div class="offer_item_inner">
    <div class="breadcrumb">
        <p><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> <?php echo __('back', 'ankur-group'); ?></a><?php echo __('Helicopters', 'ankur-group'); ?></p>
    </div>
    <div class="tab_list">
        <ul>
            <li class="active"><a href="#hel_selling"><?php echo __('Selling', 'ankur-group'); ?></a></li>
            <li><a href="#hel_sale_form"><?php echo __('Contact us to purchase/sell helicopter', 'ankur-group'); ?></a></li>
        </ul>    
    </div>
    <div class="tab_panels">
        <div id="hel_selling" class="slider_hel">
            <div class="slides">
                <?php while ( $loop_hel->have_posts() ) : $loop_hel->the_post(); ?>  
				<div id="post-<?php the_ID(); ?>" <?php post_class('slider_item'); ?>>
                    <a href="#" id="<?php the_ID(); ?>" class="ajax-post sell">
    			        <?php the_title( '<h4>', '</h4>' ); ?>
    			        <?php the_post_thumbnail(array(400,200)); ?>
    			        <?php the_excerpt(); ?>
                    </a> 	
    			</div>
				<?php endwhile; ?>            
            </div>
            <div class='prev'><img src='<?php echo get_template_directory_uri(); ?>/img/arrow_left.png' alt='Arrow'></div>
        	<div class='next'><img src='<?php echo get_template_directory_uri(); ?>/img/arrow_right.png' alt='Arrow'></div>  
        </div>
      	<div id="hel_sale_form" class="sale_form">
            <form id="helicopter_form" action="/" method="post">
                <label for="hel_sale_select"><?php echo __('You want to:', 'ankur-group'); ?></label>
                <select id="hel_sale_select" name="sel" class="required">
                    <option value="0"></option>
                    <option value="buy_hel"><?php echo __('Buy helicopter', 'ankur-group'); ?></option>
                    <option value="sell_hel"><?php echo __('Sell helicopter', 'ankur-group'); ?></option>
                </select>
                <label for="hel_model"><?php echo __('Type here the model:', 'ankur-group'); ?></label>
                <input type="text" name="model" placeholder="<?php echo __('Model', 'ankur-group'); ?>" id="hel_model">
                <label for="hel_email"><?php echo __('Type here your email:', 'ankur-group'); ?></label>
                <input type="email" name="email" placeholder="<?php echo __('Email', 'ankur-group'); ?>" id="hel_email" class="required">
                <label for="hel_message"><?php echo __('Type here your message (name, contacts etc.):', 'ankur-group'); ?></label>
                <textarea name="message" placeholder="<?php echo __('Message', 'ankur-group'); ?>" id="hel_message" class="required"></textarea>
                <input type="submit" value="<?php echo __('SEND', 'ankur-group'); ?>">
            </form>
        </div>
    </div>
</div>