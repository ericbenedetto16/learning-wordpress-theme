<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="error-404 col-md-9">
                          <?php _e( 'error', 'learnwp' ); ?>
                          <p><?php _e( 'how about doing a search?', 'learnwp' ); ?></p>
                          <?php get_search_form(); ?>
                          <p>or</p>
                          <?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => __( 'Latest Posts', 'learnwp' ) , 'number' => 3 ) ); ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
