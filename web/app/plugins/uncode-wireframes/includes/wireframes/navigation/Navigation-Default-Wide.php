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

$data[ 'name' ]             = esc_html__( 'Navigation Default Wide', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'navigation' ];
$data[ 'custom_class' ]     = 'navigation';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'navigation/Navigation-Default-Wide.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = true;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="0" back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" overlay_alpha="50" gutter_size="3" column_width_use_pixel="yes" border_color="color-gyho" border_style="solid" shift_y="0" z_index="0" uncode_shortcode_id="126106" css=".vc_custom_1642155174045{border-top-width: 1px !important;padding-top: 9px !important;padding-bottom: 9px !important;}" border_color_type="uncode-palette" back_color_type="uncode-palette" column_width_pixel="1800"][vc_column column_width_percent="100" gutter_size="3"  overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/1" uncode_shortcode_id="174501"][uncode_navigation hide_label="yes" hide_thumbnails="yes" stacked_layout="yes" title_custom_typo="yes" title_size="h5" title_weight="500" title_responsive="yes" title_mobile_visibility="yes" parent_custom_typo="yes" parent_size="h5" parent_weight="500" parent_responsive="yes" el_id="index-1" prev_icon="fa fa-arrow-left2" next_icon="fa fa-arrow-right2" parent_label="Back to Main"][/vc_column][/vc_row]
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
