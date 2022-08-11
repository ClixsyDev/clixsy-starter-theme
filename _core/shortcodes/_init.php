<?php

function currentYear( $atts ){
    return date('Y');
}
add_shortcode( 'year', 'currentYear' );

function nextYear( $atts ){
    return date('Y',strtotime('+1 year'));
}
add_shortcode( 'nextyear', 'nextYear' );
