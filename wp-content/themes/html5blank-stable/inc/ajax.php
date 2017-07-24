<?php

    /*
        @package sunset theme

        ========================
            AjAX FUNCTIONS
        ========================
    */
add_action( 'wp_ajax_nopriv_loadbtn', 'loadbtn' );
add_action( 'wp_ajax_loadbtn', 'loadbtn' );

function loadbtn() {
    // load more posts
    $paged = $_POST["page"] +1;
    
    $the_query = new WP_Query( array(
        'post_type' => 'post',
        'order' => 'DESC',
        'paged' => $paged
    ));
    
                if( $the_query -> have_posts()):
                    while( $the_query -> have_posts() ): $the_query -> the_post();
                        get_template_part('postloopcontent', get_post_format() );
                    endwhile;
                endif;
                
                wp_reset_postdata();

    die();
}









