<?php
/**
 * Load BASIC Function.
 *
 * @package Gray_Portfolio
 */

/**
 * Header Image
 */

function rt_portfolio_header_image() {

    $header_image = get_header_image();
    $header_image = ! empty( $header_image ) ? get_header_image() : get_template_directory_uri() . '/assets/img/default-img.jpg';
    if ( is_singular() ) :
        $header_image = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : $header_image;
    endif;

    return $header_image;

}