<?php

add_action( 'after_setup_theme', 'register_main_menu' );
function register_main_menu() {
  register_nav_menu( 'primary', 'Primary Menu' );
  register_nav_menu( 'Show-bar', 'Show Menu' );
}
