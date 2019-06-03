<?php 
get_header(); 
    while( have_posts() ):
        the_post();
        get_template_part( 'templates/partial/post', get_post_format() );
    endwhile;
get_footer(); 
?>