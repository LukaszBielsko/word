<?php

function load_files(){
  wp_enqueue_style('style.css', get_stylesheet_uri());
}


add_action(
  'wp_enqueue_scripts', 'load_files'
);

?>
