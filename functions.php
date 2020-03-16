<?php

function register_my_menus() {
  register_nav_menus([
      'primary' => 'Primary',
      'top' => 'Top',
  ]);
}

add_action( 'init', 'register_my_menus' );

//function get

if (!function_exists('get_field')) {
	function get_field($key, $single = true) {
		return get_post_meta(get_the_ID(), $key, $single);
	}
}