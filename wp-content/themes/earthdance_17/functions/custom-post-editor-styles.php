<?php
// This theme styles the visual editor
// http://www.carriedils.com/add-editor-style/

add_action( 'init', 'add_editor_styles' );

function add_editor_styles()
{
  add_editor_style( get_stylesheet_uri() );
}


// Apply styles to the visual editor
	add_filter('mce_css', 'mcekit_editor_style');
	function mcekit_editor_style($url) {
    if ( !empty($url) )
      $url .= ',';
      $url .= get_stylesheet_uri();
    return $url;
	}


  function remove_bold_tinymce_button( $buttons ){
    $remove = 'formatselect';

    if ( ( $key = array_search( $remove, $buttons ) ) !== false )
    unset( $buttons[$key] );

    return $buttons;
  }

  add_filter( 'mce_buttons_2', 'remove_bold_tinymce_button' );


	// Add "Styles" drop-down
	add_filter( 'mce_buttons', 'mce_editor_buttons' );
	function mce_editor_buttons( $buttons ) {
	    array_unshift( $buttons, 'styleselect', 'removeformat' );
	    return $buttons;
	}


	// Add styles/classes to the "Styles" drop-down
	add_filter( 'tiny_mce_before_init', 'mce_before_init' );
	function mce_before_init( $settings ) {
    $style_formats = array(
      array(
        'title' => 'Large heading',
        'block' => 'h2',
        'classes' => 'cpe__heading'
      ),
      array(
        'title' => 'Small heading',
        'block' => 'h3',
        'classes' => 'cpe__title'
      )
    );
    $settings['style_formats'] = json_encode( $style_formats );
    return $settings;
	}

function theme_add_editor_styles()
{
  $styleUrl = get_bloginfo('template_url').'/style.css';
  add_editor_style( $styleUrl );
}
add_action( 'init', 'theme_add_editor_styles' );
