<footer class="main-footer" style="height:250px">
  <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'footer_menu' ) ); ?>
  <section class="float-right h-100 d-flex pr-2">
            <?php
            // API Key: AIzaSyAWpPc5av59zvdmAiLqTuJySHSwaJ6qGc4
            $key = get_theme_mod( 'set_map_apikey' );
            $address = urlencode( get_theme_mod( 'set_map_address' ) );

            ?>
            <iframe
                class="my-auto"
                height="225"
                style="border:0;width:100%"
                src="https://www.google.com/maps/embed/v1/place?q=<?php echo $address ?>&key=<?php echo $key ?>&zoom=15" allowfullscreen>
            </iframe>
            </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>
