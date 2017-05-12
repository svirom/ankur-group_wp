<?php
/*-------------------------Documents----------------------------------*/
add_shortcode( 'documents_images', function( $atts, $content ) {
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
    $template_directory = get_template_directory_uri();
    // echo print_r($result); 
    $output .= '<div class="slider_docs"><div class="slides">';
    for( $i = 0; $i < $result; $i++ ) {
        $images = wp_get_attachment_image_src( $image_ids[$i], 'full' );
        $output .= '<div class="slider_item"><img src="'. $images[0] .'" alt="" /></div>';   
    }
    $output .= '</div><div class="prev"><img src="'.$template_directory.'/img/arrow_left.png" alt="Arrow"></div>
            <div class="next"><img src="'.$template_directory.'/img/arrow_right.png" alt="Arrow"></div></div>';
    return $output;    
 
} );

add_action( 'vc_before_init', function() {
    vc_map(
        array(
            'name' => __( 'Documents Images' ),
            'base' => 'documents_images',
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
/*-------------------------Documents----------------------------------*/