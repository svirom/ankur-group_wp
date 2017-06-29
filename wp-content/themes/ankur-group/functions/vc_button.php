<?php
/*-------------------------Button More----------------------------------*/
add_shortcode( 'button_more', function( $atts, $content ) {
    $atts = shortcode_atts(
        array(
            'title' => 'title',
            ), 
        $atts, 'button_more'
    );
   
    $button = __('MORE...', 'ankur-group');
    $output = '<button>' . $button . '</button>'; 
    
    return $output;    
 
} );

add_action( 'vc_before_init', function() {
    vc_map(
        array(
            'name' => __( 'Button More', 'ankur-group' ),
            'base' => 'button_more',
            'params' => array(
                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => __( 'Title', 'ankur-group' ),
                    'param_name' => 'title',
                    'value' => __( '' ),
                    'description' => __( 'Title', 'ankur-group' ),
                ),
            )
        )
    );
} );
/*-------------------------Button More----------------------------------*/