<?php
    function schools_customizer( $wp_customize ) {
    
        // Twitter URL
            $wp_customize-> add_section( 'sec_twitter', array(
                'title' => 'Twitter Frame',
                'description' => 'Please, type your twitter page URL here'
            ) );
        
            $wp_customize-> add_setting( 'set_twitterUrl', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'esc_attr'
            ) );
        
            $wp_customize-> add_control( 'ctrl_twitter', array(
                'label' => 'Twitter URL',
                'description' => 'Please, type your twitter URL here',
                'section' => 'sec_twitter',
                'settings' => 'set_twitterUrl',
                'type' => 'text'
            ) );

        // Calendar Frame
            // Calendar Section
            $wp_customize-> add_section( 'sec_calendar', array(
                'title' => 'Calendar',
                'description' => 'The Calendar Section'
            ) );

            // Calendar URL
            $wp_customize-> add_setting( 'set_calendar_url', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'esc_textarea'
            ) );
        
            $wp_customize-> add_control( 'crtl_calendar_address', array(
                'label' => 'Type your calendar URL here',
                'description' => '',
                'section' => 'sec_calendar',
                'settings' => 'set_calendar_url'
            ) );

        // Footer
            // Footer Section
            $wp_customize-> add_section( 'sec_footer', array(
                'title' => 'Footer'
            ) );

            // Footer Map API Key
            $wp_customize-> add_setting( 'set_map_apikey', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'esc_attr'
            ) );
        
            $wp_customize-> add_control( 'crtl_map_apikey', array(
                'label' => 'Google Maps API Key',
                'description' => 'Get your key <a target="_blank" href="https://console.developers.google.com/flows/enableapi?apiid=maps_backend">here</a>',
                'section' => 'sec_footer',
                'settings' => 'set_map_apikey',
                'type' => 'text'
            ) );
        
            // Footer Map Address
            $wp_customize-> add_setting( 'set_map_address', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'esc_textarea'
            ) );

            $wp_customize-> add_control( 'crtl_map_address', array(
                'description' => 'Type the address to be displayed here. No Special Characters Allowed',
                'section' => 'sec_footer',
                'settings' => 'set_map_address',
                'type' => 'textarea'
            ) );

        // Social Media Badges
            // Social Media Badge Section
            $wp_customize-> add_section( 'sec_social_badges', array(
                'title' => 'Social Badges'
            ) );

            // Social Banner Text
            $wp_customize-> add_setting( 'set_socialBanner_text', array(
                'type' => 'theme_mod',
                'default' => 'Stay In The Loop With Us!',
                'sanitize_callback' => 'esc_attr'
            ) );

            $wp_customize-> add_control( 'crtl_socialBanner_text', array(
                'label' => 'Social Banner Text',
                'section' => 'sec_social_badges',
                'settings' => 'set_socialBanner_text',
                'type' => 'text'
            ) );

            // Social Link 1 
            $wp_customize-> add_setting( 'set_badgeOne_link', array(
                'type' => 'theme_mod',
                'default' => 'https://instagram.com/Instagram/',
                'sanitize_callback' => 'esc_attr'
            ) );

            $wp_customize-> add_control( 'crtl_badgeOne_link', array(
                'label' => 'Social Badge 1 Link',
                'section' => 'sec_social_badges',
                'settings' => 'set_badgeOne_link',
                'type' => 'text'
            ) );

            // Social Icon 1 
            $wp_customize-> add_setting( 'set_badgeOne_img', array(
                'type' => 'theme_mod',
                'default' => 'https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../assets/preview/2016/png/iconmonstr-instagram-11.png',
                'sanitize_callback' => 'esc_attr'
            ) );

            $wp_customize-> add_control( 'crtl_badgeOne_img', array(
                'label' => 'Social Badge 1 Image URL',
                'section' => 'sec_social_badges',
                'settings' => 'set_badgeOne_img',
                'type' => 'text'
            ) );

            // Social Link 2
            $wp_customize-> add_setting( 'set_badgeTwo_link', array(
                'type' => 'theme_mod',
                'default' => 'https://twitter.com/Twitter/',
                'sanitize_callback' => 'esc_attr'
            ) );

            $wp_customize-> add_control( 'crtl_badgeTwo_link', array(
                'label' => 'Social Badge 2 Link',
                'section' => 'sec_social_badges',
                'settings' => 'set_badgeTwo_link',
                'type' => 'text'
            ) );

            // Social Icon 2 
            $wp_customize-> add_setting( 'set_badgeTwo_img', array(
                'type' => 'theme_mod',
                'default' => 'https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../assets/preview/2012/png/iconmonstr-twitter-1.png',
                'sanitize_callback' => 'esc_attr'
            ) );

            $wp_customize-> add_control( 'crtl_badgeTwo_img', array(
                'label' => 'Social Badge 2 Image URL',
                'section' => 'sec_social_badges',
                'settings' => 'set_badgeTwo_img',
                'type' => 'text'
            ) );

            // Social Link 3
            $wp_customize-> add_setting( 'set_badgeThree_link', array(
                'type' => 'theme_mod',
                'default' => 'https://facebook.com/Facebook/',
                'sanitize_callback' => 'esc_attr'
            ) );

            $wp_customize-> add_control( 'crtl_badgeThree_link', array(
                'label' => 'Social Badge 3 Link',
                'section' => 'sec_social_badges',
                'settings' => 'set_badgeThree_link',
                'type' => 'text'
            ) );

            // Social Icon 3 
            $wp_customize-> add_setting( 'set_badgeThree_img', array(
                'type' => 'theme_mod',
                'default' => 'https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../assets/preview/2012/png/iconmonstr-facebook-1.png',
                'sanitize_callback' => 'esc_attr'
            ) );

            $wp_customize-> add_control( 'crtl_badgeThree_img', array(
                'label' => 'Social Badge 3 Image URL',
                'section' => 'sec_social_badges',
                'settings' => 'set_badgeThree_img',
                'type' => 'text'
            ) );

            // Social Link 4
            $wp_customize-> add_setting( 'set_badgeFour_link', array(
                'type' => 'theme_mod',
                'default' => 'https://vimeo.com/vimeo/',
                'sanitize_callback' => 'esc_attr'
            ) );

            $wp_customize-> add_control( 'crtl_badgeFour_link', array(
                'label' => 'Social Badge 4 Link',
                'section' => 'sec_social_badges',
                'settings' => 'set_badgeFour_link',
                'type' => 'text'
            ) );

            // Social Icon 4 
            $wp_customize-> add_setting( 'set_badgeFour_img', array(
                'type' => 'theme_mod',
                'default' => 'https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../assets/preview/2012/png/iconmonstr-vimeo-1.png',
                'sanitize_callback' => 'esc_attr'
            ) );

            $wp_customize-> add_control( 'crtl_badgeFour_img', array(
                'label' => 'Social Badge 4 Image URL',
                'section' => 'sec_social_badges',
                'settings' => 'set_badgeFour_img',
                'type' => 'text'
            ) );
    }
    
    add_action( 'customize_register', 'schools_customizer' );

?>