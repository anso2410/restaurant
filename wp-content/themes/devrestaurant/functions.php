<?php
add_theme_support('post-thumbnails');

add_image_size( 'chief', 550, 550 );

function theme_images($image){
    return get_template_directory_uri() . '/assets/images/' . $image;
}

add_filter('the_content','add_signature');

function add_signature($text) {

    global $post;

    if($post->post_type == 'post') $text .= '<div>

                David

            </div>';

    return $text;}

