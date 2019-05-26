<!--Load testimonial posts into sidebar-->
<aside class="sidebar left">

  <?php
    if( is_active_sidebar( 'sidebar-1' ) ) {
        dynamic_sidebar( 'sidebar-1' );
    }
  ?>
</aside>
