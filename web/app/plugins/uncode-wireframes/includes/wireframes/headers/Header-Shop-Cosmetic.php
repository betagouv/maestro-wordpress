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

$data[ 'name' ]             = esc_html__( 'Header Shop Cosmetic', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'headers' ];
$data[ 'custom_class' ]     = 'headers';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'headers/Header-Shop-Cosmetic.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = true;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="100" override_padding="yes" h_padding="0" top_padding="0" bottom_padding="0" back_color="accent" overlay_alpha="50" equal_height="yes" gutter_size="0" column_width_percent="100" shift_y="0" z_index="0" inverted_device_order="yes" uncode_shortcode_id="328598" back_color_type="uncode-palette" el_class="header-row"][vc_column column_width_percent="100" position_vertical="bottom" gutter_size="3" override_padding="yes" column_padding="5" style="dark" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" align_mobile="align_center_mobile" mobile_width="0" css_animation="alpha-anim" animation_speed="1000" width="1/2" uncode_shortcode_id="933134"][vc_custom_heading text_size="'. uncode_wf_print_font_size( 'h4' ) .'" text_height="'. uncode_wf_print_font_height( 'fontheight-357766' ) .'" css_animation="curtain" animation_speed="1000" uncode_shortcode_id="122270"]Headline[/vc_custom_heading][vc_custom_heading text_size="'. uncode_wf_print_font_size( 'fontsize-445851' ) .'" css_animation="curtain" animation_speed="1000" interval_animation="100" uncode_shortcode_id="787886"]Medium length headline[/vc_custom_heading][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'h5' ) .'" text_height="'. uncode_wf_print_font_height( 'fontheight-357766' ) .'" uncode_shortcode_id="416405"]Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more.[/vc_custom_heading][/vc_column][vc_column column_width_percent="100" gutter_size="3" back_image="'. uncode_wf_print_single_image( '80471' ) .'" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/2" uncode_shortcode_id="157560" mobile_height="400"][/vc_column][/vc_row]
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
