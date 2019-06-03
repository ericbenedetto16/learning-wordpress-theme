<?php get_header(); ?>
    <div class="content-area">
        <main class="article">
            <section class="middle-area">
                <div class="archive">
                    <?php

                        the_archive_title( '<h1 class="archive-title">', '</h1>' );
                        the_archive_description();

                        //If there are posts
                        if( have_posts() ):
                            //While Posts, show the posts
                            while( have_posts() ): the_post();
                            
                            get_template_part( 'templates/partial/archive-preview' );
                            
                            endwhile;
                            
                        else:
                    ?>
                            <script>console.log('no posts');</script>
                            
                            <p><?php _e( "There's nothing yet to be displayed!", 'schoolroot' ); ?></p>
                    <?php 
                            endif; 
                    ?>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
