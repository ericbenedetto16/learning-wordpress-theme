<main class="article" id="post-<?php the_ID(); ?>">
    <article class="mt-5">
        <h2><?php the_title(); ?></h2>
        <div class="meta-info">
            <p>Posted by <?php the_author_posts_link(); ?></p>
            <p>Categories <?php the_category( ', ' ); ?></p>
            <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
        </div>
        <?php the_content(); ?>
        <?php get_template_part( 'templates/partial/comments' ) ?>
    </article>
</main>