<?php

add_theme_support( 'post-thumbnails');

function max_title_length( $title ) {
    $max = 60;
    if( strlen( $title ) > $max ) {
        return substr( $title, 0, $max ). " &hellip;";
    } 
    else {
        return $title;
    }
}

// Campos customizaveis
function custom_title($wp_customize){
    $wp_customize->add_section('modalities-section', array(
        'title' => 'Modalidades'
    ));

    $wp_customize->add_setting('modalities-title-1', array(
        'default' => 'Example headline text!'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'modalities-title-control-1', array(
        'label' => 'Primeiro bloco',
        'section' => 'modalities-section',
        'settings' => 'modalities-title-1',
    )));
    $wp_customize->add_setting('modalities-text-1', array(
        'default' => 'Example headline text!'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'modalities-text-control-1', array(
        'section' => 'modalities-section',
        'settings' => 'modalities-text-1',
        'type' => 'textarea',
    )));


}

add_action( 'customize_register', 'custom_title' );
