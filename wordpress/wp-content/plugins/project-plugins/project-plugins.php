<?php
/**
* Plugin Name: ShortText
* Plugin URI: https://www.test.com/
* Description: This is the very first plugin I ever created. With this plugins you will be make shortcut for you text.
* Version: 1.0
* Author: Tanvirul Islam
* Author URI: http://tmsclick.com/
**/
//ShortText functions
function shortText(){
    $text = " The New Jersey Institute of Technology (NJIT) is a public research university (Carnegie, R1) in Newark, New Jersey. Located within 30 minutes of Manhattan by rapid transit, NJIT is New Jersey's Science & Technology University.[b][15] Among other initiatives, it operates the Enterprise Development Center (EDC), one of the largest tech-oriented business incubators in the country.";
    return $text;
}

add_shortcode('about_njit', 'shortText');

//function dh_modify_read_more_link() {
//
//    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
//
//}
//
//add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );
//
//?>

