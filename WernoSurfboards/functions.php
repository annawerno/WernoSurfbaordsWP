<?php 

function werno_surfboards_files() {
  wp_enqueue_style('werno_surfboards_files', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'werno_surfboards_files');


?>