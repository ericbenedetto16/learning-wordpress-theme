<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container-fluid">
                    <div class="">
                        <?php
                            //If there are posts
                            if( have_posts() ):
                                //While Posts, show the posts
                                while( have_posts() ): the_post();
                        ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <p>Posted in <?php echo(get_the_date()); ?>by <?php the_author_posts_link(); ?></p>
                            <p>Categories <?php the_category( ' ' ); ?></p>
                            <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
                            <p><?php the_content(); ?></p>
                        </article>
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