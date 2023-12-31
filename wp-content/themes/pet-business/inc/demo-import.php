<?php
/**
 * Demo Import.
 *
 * This is the template that includes all the other files for core featured of Theme Palace
 *
 * @package Theme Palace
 * @subpackage Pet Business
 * @since Pet Business 1.0.0
 */
function pet_business_ctdi_plugin_page_setup( $default_settings ) {
    $default_settings['menu_title']  = esc_html__( 'Theme Palace Demo Import' , 'pet-business' );

    return $default_settings;
}
add_filter( 'cp-ctdi/plugin_page_setup', 'pet_business_ctdi_plugin_page_setup' );

function pet_business_intro_text( $default_text ) {
    $default_text .= sprintf( '<p class="about-description">%1$s <a href="%2$s">%3$s</a></p>', esc_html__( 'Demo content files for Pet Business Theme.', 'pet-business' ),
    esc_url( 'https://themepalace.com/instructions/themes/pet-business' ), esc_html__( 'Click here for Demo File download', 'pet-business' ) );

    return $default_text;
}
add_filter( 'cp-ctdi/plugin_intro_text', 'pet_business_intro_text' );