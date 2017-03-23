<?php
// Kill Automatice Image resizing on upload  - http://www.wpmayor.com/code/remove-image-sizes-in-wordpress/

function kill_filter_image_sizes( $sizes) {

  unset( $sizes['thumbnail']);
  unset( $sizes['medium']);
  unset( $sizes['large']);

  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'kill_filter_image_sizes');

//Force Cropping on Medium Images
if(false === get_option("medium_crop"))
	add_option("medium_crop", "1");
else
	update_option("medium_crop", "1");

//Force Cropping on LARGE Images
if(false === get_option("large_crop"))
	add_option("large_crop", "1");
else
	update_option("large_crop", "1");
?>
