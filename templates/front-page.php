<?php get_header(); ?>
<div class="main-container">
  <?php
    get_sidebar( 'left' );
  ?>
  <main class="index">
    <div class="carousel-container">
      <section class="carousel">
        <?php
        //First Loop Using Manual Query
            $featured = new WP_Query( 'post_type=post&posts_per_page=5&cat=4' );

            if( $featured->have_posts() ):
                while( $featured->have_posts() ):$featured->the_post();
                get_template_part( 'templates/partial/spotlight' );
                endwhile;
                wp_reset_postdata();
            endif;

        ?>
        <script>jQuery('.carousel_img:first').attr('style', 'display:flex');</script>
        <button class="left" onclick="plus(-1)">&#10094;</button>
        <button class="right" onclick="plus(1)">&#10095;</button>
      </section>
    </div>
    <section class="banner-container">
      <section class="social-holder">
        <a class="social-badge" href="<?php echo get_theme_mod( 'set_badgeOne_link' ); ?>" target=_blank><img class="social-badge" src="<?php echo get_theme_mod( 'set_badgeOne_img' ); ?>" alt="social badge" ></a>
        <a class="social-badge" href="<?php echo get_theme_mod( 'set_badgeTwo_link' ); ?>" target=_blank><img class="social-badge" src="<?php echo get_theme_mod( 'set_badgeTwo_img' ); ?>" alt="social badge"></a>
      </section>
      <p class="banner-text"><?php echo get_theme_mod( 'set_socialBanner_text' ); ?></p>
      <section class="social-holder">
        <a class="social-badge" href="<?php echo get_theme_mod( 'set_badgeThree_link' ); ?>" target=_blank><img class="social-badge" src="<?php echo get_theme_mod( 'set_badgeThree_img' ); ?>" alt="social badge"></a>
        <a class="social-badge" href="<?php echo get_theme_mod( 'set_badgeFour_link' ); ?>" target=_blank><img class="social-badge" src="<?php echo get_theme_mod( 'set_badgeFour_img' ); ?>" alt="social badge"></a>
      </section>
    </section>
    <section class="widget-container">
      <iframe class="googlecalendar" src="<?php echo get_theme_mod( 'set_calendar_url' ); ?>" style="border:0">
      </iframe>

      <div class="twitter-frame">
        <a class="twitter-timeline" href="<?php echo get_theme_mod( 'set_twitterUrl' ); ?>" data-height="500"></a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </section>
  </main>
  <?php
    get_sidebar( 'right' );
  ?>
</div>
<?php get_footer(); ?>