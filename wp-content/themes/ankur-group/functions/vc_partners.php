<?php
/*-------------------------Partners Images----------------------------------*/
add_shortcode( 'partners_images', function( $atts, $content ) {
    $atts = shortcode_atts(
        array(
            'image' => $image,
            'title' => 'title',
            ), 
        $atts, 'partners_images'
    );
    //echo print_r($atts); 

    $image_ids = explode(',',$atts['image']);
    $result = count($image_ids);
    // echo print_r($result); 
    $output .= '<div><h4>' .$atts['title'].'</h4><div class="img">';
    for( $i = 0; $i < $result; $i++ ) {
        $images = wp_get_attachment_image_src( $image_ids[$i], 'full' );
        $output .= '<img src="'. $images[0] .'" alt="" />';   
    }
    $output .= '</div></div>';
    return $output;    
 
} );

add_action( 'vc_before_init', function() {
    vc_map(
        array(
            'name' => __( 'Partners Images' ),
            'base' => 'partners_images',
            'params' => array(
                array(
                    'type' => 'attach_images',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Image' ),
                    'param_name' => 'image',
                    'value' => __( '' ),
                    'description' => __( 'Image' ),
                ),
                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Title' ),
                    'param_name' => 'title',
                    'value' => __( '' ),
                    'description' => __( 'Title' ),
                ),
            )
        )
    );
} );
/*-------------------------Partners Images----------------------------------*/