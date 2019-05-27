<?php 
get_header(); 
    while( have_posts() ):
        get_template_part( 'templates/partial/pagination' );
        the_post();
        get_template_part( 'templates/partial/post', get_post_format() );
    endwhile;
    
get_footer(); 
?>