<?php
/*-------------------------Articles shortcode----------------------------------*/
add_shortcode( 'articles', function( $atts, $content ) {
    $atts = shortcode_atts(
        array(
            'title' => 'title',
            ), 
        $atts, 'articles'
    );

    //echo print_r($atts);
    
    ob_start();
    
    include('loop/articles_loop.php');

    return ob_get_clean();
     
} );

add_action( 'vc_before_init', function() {
    vc_map(
        array(
            'name' => __( 'Articles', 'ankur-group' ),
            'base' => 'articles',
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
/*-------------------------Articles shortcode----------------------------------*/