<?php
#This function registers the style.css file for use on our site.  We implemented an array for dependencies uploading order and dynamic version regenator.

function themewes_register_styles(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('themewes-style', get_template_directory_uri() . '/style.css', array('themewes-bootstrap'), $version, 'all');
    wp_enqueue_style('themewes-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');    
    wp_enqueue_style('themewes-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');    

}

#When wordpress runs wp_enqueue hook also execute register function

add_action('wp_enqueue_scripts','themewes_register_styles');

?>

