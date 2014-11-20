<?php
function wproot_delete_host_from_attachment_url( $url ) {
    $regex = '/^http(s)?:\/\/[^\/\s]+(.*)$/';
    if ( preg_match( $regex, $url, $m ) ) {
        $url = '[wproot]' . $m[2];
    }
    return $url;
}
add_filter( 'wp_get_attachment_url', 'wproot_delete_host_from_attachment_url' );

function wproot_shortcode() {
    if ( preg_match( '|^https?://[^/]+|', get_option( 'siteurl' ), $m ) ) {
        $wproot = $m[0] . "/wpweb";
    } else {
        $wproot = '';
    }
    return $wproot;
}
add_shortcode( 'wproot', 'wproot_shortcode' );

function resourcepath_delete_host_from_attachment_url( $url ) {
    $regex = '/^http(s)?:\/\/[^\/\s]+(.*)$/';
    if ( preg_match( $regex, $url, $m ) ) {
        $url = '[resourcepath]' . $m[2];
    }
    return $url;
}
add_filter( 'wp_get_attachment_url', 'resourcepath_delete_host_from_attachment_url' );

function resourcepath_shortcode() {
    if ( preg_match( '|^https?://[^/]+|', get_option( 'siteurl' ), $m ) ) {
        $resourcepath = $m[0] . "/resource";
    } else {
        $resourcepath = '';
    }
    return $resourcepath;
}
add_shortcode( 'resourcepath', 'resourcepath_shortcode' );



