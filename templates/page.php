<?php get_header(); ?>
    <div class="content-area">
        <main class="article mt-3">
            <section class="middle-area">
                <div class="container-fluid">
                    <div>
                        <?php
                            //If there are posts
                            if( have_posts() ):
                                //While Posts, show the posts
                                while( have_posts() ): the_post();
                        ?>

                            <h2><?php the_title(); ?></h2>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                            
                        <?php
                            endwhile;
                            else:
                        ?>
                        <script>console.log('no posts');</script>
                        <p>There's nothing yet to be displayed!</p>

                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>