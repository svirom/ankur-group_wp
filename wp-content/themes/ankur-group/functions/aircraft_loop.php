<?php

$loop_air = new WP_Query( array( 
    'post_type' => 'aircraft',   
    'posts_per_page' => -1
    ) ); ?>

<div class="offer_item">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_aircraft.png" alt="Aircraft">
    <h4>Aircraft</h4>
    <p>Mauris pretium elementum maur Donec placeraterat at dignissim blanditaugue purus eleifend.</p>
</div>
<div class="offer_item_inner">
    <div class="breadcrumb">
        <p><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> back</a>Aircraft</p>
    </div>
    <div class="tab_list">
        <ul>
        	<li class="active"><a href="#air_selling">Selling</a></li>
            <li><a href="#air_sale_form">Contact us to purchase/sell aircraft</a></li>
        </ul>
    </div>
    <div class="tab_panels">
    	<div id="air_selling" class="slider_air">
        	<div class="slides">
        		<?php while ( $loop_air->have_posts() ) : $loop_air->the_post(); ?>  
				<div id="post-<?php the_ID(); ?>" <?php post_class('slider_item'); ?>>
    			 <?php the_title( '<h4>', '</h4>' ); ?>
    			 <?php the_post_thumbnail('full'); ?>
    			 <?php the_excerpt(); ?> 	
    			</div>
				<?php endwhile; ?> 
        	</div>
        	<div class='prev'><img src='<?php echo get_template_directory_uri(); ?>/img/arrow_left.png' alt='Arrow'></div>
        	<div class='next'><img src='<?php echo get_template_directory_uri(); ?>/img/arrow_right.png' alt='Arrow'></div>
   		</div>
    	<div id="air_sale_form" class="sale_form">
        	<form id="aircraft_form" action="/" method="post">
            	<label for="air_sale_select">You want to:</label>
            	<select id="air_sale_select" name="sel" class="required">
                	<option value="0"></option>
                	<option value="buy_air">Buy aircraft</option>
                	<option value="sell_air">Sell aircraft</option>
            	</select>
            	<label for="air_model">Type here the model:</label>
            	<input type="text" name="model" placeholder="Model" id="air_model">
            	<label for="air_email">Type here your email:</label>
            	<input type="email" name="email" placeholder="Email" id="air_email" class="required">
            	<label for="air_message">Type here your message (name, contacts etc.):</label>
            	<textarea name="message" placeholder="Message" id="air_message" class="required"></textarea>
            	<input type="submit" value="SEND">
        	</form>
    	</div>
	</div>
</div>
