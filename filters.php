<?php
    
    // add_filter( 'get_custom_logo', 'change_logo_class' );

    function change_logo_class( $html ) {

        $html = str_replace( 'custom-logo-link', 'header-logo', $html );
        $html = str_replace( 'custom-logo', '', $html );

        return $html;

    }

?>