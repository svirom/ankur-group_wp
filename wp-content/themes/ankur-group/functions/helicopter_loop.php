<?php

$loop_hel = new WP_Query( array( 
    'post_type' => 'helicopter',   
    'posts_per_page' => -1
    ) ); ?>

<div class="offer_item left-5">
    <img src="<?php echo get_template_directory_uri(); ?>/img/icon_helicopters.png" alt="Helicopters">
    <h4>Helicopters</h4>
    <p>Mauris pretium elementum maur Donec placeraterat at dignissim blanditaugue purus eleifend.</p>
</div>
<div class="offer_item_inner">
    <div class="breadcrumb">
        <p><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> back</a>Helicopters</p>
    </div>
    <div class="tab_list">
        <ul>
            <li class="active"><a href="#hel_selling">Selling</a></li>
            <li><a href="#hel_sale_form">Contact us to purchase/sell helicopter</a></li>
        </ul>    
    </div>
    <div class="tab_panels">
        <div id="hel_selling" class="slider_hel">
            <div class="slides">
                <?php while ( $loop_hel->have_posts() ) : $loop_hel->the_post(); ?>  
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
      	<div id="hel_sale_form" class="sale_form">
            <form id="helicopter_form" action="/" method="post">
                <label for="hel_sale_select">You want to:</label>
                <select id="hel_sale_select" name="sel" class="required">
                    <option value="0"></option>
                    <option value="buy_hel">Buy helicopter</option>
                    <option value="sell_hel">Sell helicopter</option>
                </select>
                <label for="hel_model">Type here the model:</label>
                <input type="text" name="model" placeholder="Model" id="hel_model">
                <label for="hel_email">Type here your email:</label>
                <input type="email" name="email" placeholder="Email" id="hel_email" class="required">
                <label for="hel_message">Type here your message (name, contacts etc.):</label>
                <textarea name="message" placeholder="Message" id="hel_message" class="required"></textarea>
                <input type="submit" value="SEND">
            </form>
        </div>
    </div>
</div>