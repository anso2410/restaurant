<?php
add_theme_support('post-thumbnails');

add_image_size( 'chief', 500, 500 );

function theme_images($image){
    return get_template_directory_uri() . '/assets/images/' . $image;
}