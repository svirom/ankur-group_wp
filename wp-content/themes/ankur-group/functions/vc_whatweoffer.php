<?php
/*-------------------------What We Offer shortcode----------------------------------*/
add_shortcode( 'what_we_offer', function( $atts, $content ) {
    $atts = shortcode_atts(
        array(
            'title' => 'title',
            ), 
        $atts, 'what_we_offer'
    );

    //echo print_r($atts);
    
    ob_start();
    
    include('loop/aircraft_loop.php');
    include('loop/helicopter_loop.php');
    include('loop/equipments_loop.php');
    include('loop/services_loop.php');
    include('loop/components_loop.php');

    return ob_get_clean();
     
} );

add_action( 'vc_before_init', function() {
    vc_map(
        array(
            'name' => __( 'What We Offer' ),
            'base' => 'what_we_offer',
            'params' => array(
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
/*-------------------------What We Offer shortcode----------------------------------*/