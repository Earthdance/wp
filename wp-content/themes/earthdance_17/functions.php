<?php

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page("Site Header");
  acf_add_options_page("Site Footer");

  // acf_add_options_page(array(
	// 	'page_title' 	=> 'Earthdance Settings',
	// 	'menu_title'	=> 'Earthdance',
	// 	'menu_slug' 	=> 'earthdance-settings',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> false
	// ));
  //
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'earthdance-settings',
	// ));
  //
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'earthdance-settings',
	// ));

}

?>
