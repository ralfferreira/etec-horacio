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

?>

