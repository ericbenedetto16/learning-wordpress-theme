<?php get_header(); ?>
    <div class="content-area">
        <main>
        <?php
            //If there are posts
            if( have_posts() ):
                //While Posts, show the posts
                while( have_posts() ): the_post();
        ?>
        <article>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'medium' ); ?>    
            <h2><?php the_title(); ?></h2>
            </a>
            <p>Posted in <?php echo(get_the_date()); ?> by <?php the_author_posts_link(); ?></p>
            <p>Categories <?php the_category( ' ' ); ?></p>
            <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
        </article>
        <?php
            endwhile;
            else:
        ?>
        <script>console.log('no posts');</script>
        <p>There's nothing yet to be displayed!</p>

        <?php endif; ?>
        </main>
    </div>
<?php get_footer(); ?>
