<?php

$loop_air = new WP_Query( array( 
    'post_type' => 'aircraft',   
    'posts_per_page' => -1
    ) ); ?>

<div class="offer_item">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_aircraft.png" alt="Aircraft">
    <h4><?php echo __('Aircraft', 'ankur-group'); ?></h4>
</div>
<div class="offer_item_inner">
    <div class="breadcrumb">
        <p><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> <?php echo __('back', 'ankur-group'); ?></a><?php echo __('Aircraft', 'ankur-group'); ?></p>
    </div>
    <div class="tab_list">
        <ul>
        	<li class="active"><a href="#air_selling"><?php echo __('Selling', 'ankur-group'); ?></a></li>
            <li><a href="#air_sale_form"><?php echo __('Contact us to purchase/sell aircraft', 'ankur-group'); ?></a></li>
        </ul>
    </div>
    <div class="tab_panels">
    	<div id="air_selling" class="slider_air">
        	<div class="slides">
        		<?php while ( $loop_air->have_posts() ) : $loop_air->the_post(); ?>     
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
    	<div id="air_sale_form" class="sale_form">
        	<form id="aircraft_form" action="/" method="post">
            	<label for="air_sale_select"><?php echo __('You want to:', 'ankur-group'); ?></label>
            	<select id="air_sale_select" name="sel" class="required">
                	<option value="0"></option>
                	<option value="buy_air"><?php echo __('Buy aircraft', 'ankur-group'); ?></option>
                	<option value="sell_air"><?php echo __('Sell aircraft', 'ankur-group'); ?></option>
            	</select>
            	<label for="air_model"><?php echo __('Type here the model:', 'ankur-group'); ?></label>
            	<input type="text" name="model" placeholder="<?php echo __('Model', 'ankur-group'); ?>" id="air_model">
            	<label for="air_email"><?php echo __('Type here your email:', 'ankur-group'); ?></label>
            	<input type="email" name="email" placeholder="<?php echo __('Email', 'ankur-group'); ?>" id="air_email" class="required">
            	<label for="air_message"><?php echo __('Type here your message (name, contacts etc.):', 'ankur-group'); ?></label>
            	<textarea name="message" placeholder="<?php echo __('Message', 'ankur-group'); ?>" id="air_message" class="required"></textarea>
            	<input type="submit" value="<?php echo __('SEND', 'ankur-group'); ?>">
        	</form>
    	</div>
	</div>
</div>
