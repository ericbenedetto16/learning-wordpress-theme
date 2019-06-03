<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail( array( 275, 275 ) ); ?>
    <div class="meta-info">
        <p>Posted in <?php echo(get_the_date()); ?> by <?php the_author_posts_link(); ?></p>
        <p>Categories <?php the_category( ' ' ); ?></p>
        <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    </div>
    <p><?php the_content(); ?></p>
    <?php get_template_part( 'templates/partial/comments' ) ?>
</article>