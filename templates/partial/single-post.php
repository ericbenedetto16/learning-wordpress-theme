<main class="article" id="post-<?php the_ID(); ?>">
    <header class="pt-2">
        <h1><?php the_title(); ?></h1>
        <!-- <?php the_post_thumbnail( array( '500', '500' ) ); ?> -->
        <div class="meta-info">
            <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
            <p>Categories: <?php the_category( ', ' ); ?></p>
            <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
        </div>
    </header>

    <div class="content">
        <?php the_content(); ?>
    </div>

    <?php get_template_part( 'templates/partial/comments' ) ?>
</main>