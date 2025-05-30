<?php

global $uncode_vc_block;
$uncode_vc_block = true;

$id = $inside_column = '';

extract(shortcode_atts(array(
	'id' => '',
	'inside_column' => '',
) , $atts));

$id = apply_filters( 'wpml_object_id', $id, 'post', true );
$the_content = get_post_field('post_content', $id);

if (function_exists('vc_modules_manager')) {
	vc_modules_manager()->get_module( 'vc-custom-css' )->output_custom_css_to_page($id);
}

if ( !function_exists('vc_is_page_editable') || !vc_is_page_editable() ) {
	if ($inside_column === 'yes') {
		$the_content = str_replace('vc_row ', 'vc_row_inner ', $the_content);
		$the_content = str_replace('vc_row]', 'vc_row_inner]', $the_content);
	} else {
		$the_content = $the_content;
	}
} else {
	$the_content = preg_replace('/\[vc_row(.*?)\]>(.*?)\[\/vc_row\]/', '$2', $the_content);
}

echo uncode_remove_p_tag($the_content);
$uncode_vc_block = false;
