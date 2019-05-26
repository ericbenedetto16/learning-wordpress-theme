<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="archive col-md-9">
                            <?php

                                the_archive_title( '<h1 class="archive-title">', '</h1>' );
                                the_archive_description();

                                //If there are posts
                                if( have_posts() ):
                                    //While Posts, show the posts
                                    while( have_posts() ): the_post();
                                    
                                    get_template_part( 'templates/partial/post', get_post_format() );
                                    
                                    endwhile;
                                 
                                    // get_template_part( 'templates/partial/pagination' );

                                else:
                            ?>
                                    <script>console.log('no posts');</script>
                                    
                                    <p><?php _e( "There's nothing yet to be displayed!", 'schoolroot' ); ?></p>
                            <?php 
                                 endif; 
                            ?>
                        </div>
                        <aside class="sidebar col-md-3 h-100">
                        </aside>
                    </div>
                </div>
            </section>
            <section class="map">
                <div class="container-fluid">
                    <div class="row">Map</div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
