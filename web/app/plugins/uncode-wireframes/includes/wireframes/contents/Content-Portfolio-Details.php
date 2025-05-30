<?php
/**
 * name             - Wireframe title
 * cat_name         - Comma separated list for multiple categories (cat display name)
 * custom_class     - Space separated list for multiple categories (cat ID)
 * dependency       - Array of dependencies
 * is_content_block - (optional) Best in a content block
 *
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$wireframe_categories = UNCDWF_Dynamic::get_wireframe_categories();
$data                 = array();

// Wireframe properties

$data[ 'name' ]             = esc_html__( 'Content Portfolio Details', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'contents' ];
$data[ 'custom_class' ]     = 'contents';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'contents/Content-Portfolio-Details.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="0" override_padding="yes" h_padding="2" top_padding="5" bottom_padding="5" overlay_alpha="50" gutter_size="4" column_width_percent="100" shift_y="0" z_index="0" uncode_shortcode_id="195970"][vc_column width="6/12"][vc_custom_heading text_size="'. uncode_wf_print_font_size( 'fontsize-155944' ) .'" text_height="'. uncode_wf_print_font_height( 'fontheight-357766' ) .'" uncode_shortcode_id="392681"]Long headline to turn your visitors[/vc_custom_heading][/vc_column][vc_column column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/12" uncode_shortcode_id="213614"][/vc_column][vc_column column_width_percent="100" gutter_size="3"  overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="5/12" uncode_shortcode_id="323034"][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="3" shift_y="0" z_index="0" limit_content="" uncode_shortcode_id="177259"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="4" mobile_width="4" width="1/2" uncode_shortcode_id="561496"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" uncode_shortcode_id="636747" subheading="Item listed one"]Short headline[/vc_custom_heading][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="4" mobile_width="4" width="1/2" uncode_shortcode_id="439899"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" uncode_shortcode_id="322363" subheading="Item listed one"]Short headline[/vc_custom_heading][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="3" shift_y="0" z_index="0" limit_content="" uncode_shortcode_id="114429"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="4" mobile_width="4" width="1/2" uncode_shortcode_id="186807"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" uncode_shortcode_id="301234" subheading="Item listed one<br />
Item listed two<br />
Item listed three" text_color_type="uncode-palette" text_color_solid="#ff0000"]Short headline[/vc_custom_heading][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="4" mobile_width="4" width="1/2" uncode_shortcode_id="122902"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" uncode_shortcode_id="121250" subheading="Item listed one<br />
Item listed two<br />
Item listed three" text_color_type="uncode-palette" text_color_solid="#ff0000"]Short headline[/vc_custom_heading][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
';

// Check if this wireframe is for a content block
if ( $data[ 'is_content_block' ] && ! $is_content_block ) {
	$data[ 'custom_class' ] .= ' for-content-blocks';
}

// Check if this wireframe requires a plugin
foreach ( $data[ 'dependency' ]  as $dependency ) {
	if ( ! UNCDWF_Dynamic::has_dependency( $dependency ) ) {
		$data[ 'custom_class' ] .= ' has-dependency needs-' . $dependency;
	}
}

vc_add_default_templates( $data );
