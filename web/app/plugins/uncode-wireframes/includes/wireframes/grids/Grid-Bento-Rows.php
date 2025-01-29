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

$data[ 'name' ]             = esc_html__( 'Grid Bento Rows', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'grids' ];
$data[ 'custom_class' ]     = 'grids';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'grids/Grid-Bento-Rows.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="0" override_padding="yes" h_padding="3" top_padding="5" bottom_padding="0" back_color="'. uncode_wf_print_color( 'color-lxmt' ) .'" overlay_alpha="50" equal_height="yes" gutter_size="2" column_width_percent="100" shift_y="0" z_index="0" uncode_shortcode_id="105581" back_color_type="uncode-palette" css=".vc_custom_1721138943341{padding-bottom: 18px !important;}"][vc_column column_width_percent="100" gutter_size="2" back_image="'. uncode_wf_print_single_image( '84889' ) .'" back_position="left center" overlay_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="10" radius="xl" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="5/12" uncode_shortcode_id="694147" mobile_height="50vh" overlay_color_type="uncode-palette"][vc_row_inner row_inner_height_percent="100" overlay_alpha="50" gutter_size="3" shift_y="0" z_index="0" limit_content="" uncode_shortcode_id="380340"][vc_column_inner column_width_percent="100" position_vertical="justify" gutter_size="4" style="dark" overlay_alpha="49" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="2/3" uncode_shortcode_id="116272"][vc_custom_heading text_color="color-rgdb" heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'fontsize-160000' ) .'" text_transform="uppercase" text_space="'. uncode_wf_print_font_space( 'fontspace-210350' ) .'" badge_style="yes" back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" radius="xl" uncode_shortcode_id="126312" back_color_type="uncode-palette" text_color_type="uncode-palette"]Tagline[/vc_custom_heading][vc_empty_space empty_h="4"][vc_custom_heading text_size="'. uncode_wf_print_font_size( 'fontsize-155944' ) .'" uncode_shortcode_id="665592"]Long headline to turn your visitors into users[/vc_custom_heading][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="bottom" align_horizontal="align_right" gutter_size="3" style="dark" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" align_mobile="align_left_mobile" mobile_width="0" width="1/3" uncode_shortcode_id="642895"][vc_icon icon="fa fa-plus2" background_style="fa-rounded" uncode_shortcode_id="440068" link="url:%23"][/vc_icon][/vc_column_inner][/vc_row_inner][/vc_column][vc_column column_width_percent="100" position_vertical="justify" gutter_size="2" style="dark" back_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" back_image="'. uncode_wf_print_single_image( '84889' ) .'" overlay_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="10" radius="xl" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="4/12" uncode_shortcode_id="474353" back_color_type="uncode-palette" overlay_color_type="uncode-palette"][vc_custom_heading text_color="color-rgdb" heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'fontsize-160000' ) .'" text_transform="uppercase" text_space="'. uncode_wf_print_font_space( 'fontspace-210350' ) .'" badge_style="yes" back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" radius="xl" uncode_shortcode_id="126312" back_color_type="uncode-palette" text_color_type="uncode-palette"]Tagline[/vc_custom_heading][vc_row_inner limit_content=""][vc_column_inner column_width_percent="100" gutter_size="2" style="dark" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/1" uncode_shortcode_id="146676"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'fontsize-445851' ) .'" text_height="'. uncode_wf_print_font_height( 'fontheight-161249' ) .'" uncode_shortcode_id="650955"]90%[/vc_custom_heading][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" uncode_shortcode_id="112982"]Medium length headline[/vc_custom_heading][/vc_column_inner][/vc_row_inner][/vc_column][vc_column column_width_percent="100" position_vertical="middle" align_horizontal="align_center" gutter_size="3" style="dark" back_image="'. uncode_wf_print_single_image( '84889' ) .'" overlay_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="10" radius="xl" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="3/12" uncode_shortcode_id="910901" mobile_height="50vh" overlay_color_type="uncode-palette"][vc_icon icon="fa fa-play" background_style="fa-rounded" size="fa-3x" icon_automatic="yes" shadow="yes" uncode_shortcode_id="891040" media_lightbox="'. uncode_wf_print_single_image( '88180' ) .'"][/vc_icon][/vc_column][/vc_row][vc_row unlock_row_content="yes" row_height_percent="0" override_padding="yes" h_padding="3" top_padding="0" bottom_padding="5" back_color="'. uncode_wf_print_color( 'color-lxmt' ) .'" overlay_alpha="50" equal_height="yes" gutter_size="2" column_width_percent="100" shift_y="0" z_index="0" uncode_shortcode_id="343562" back_color_type="uncode-palette"][vc_column column_width_percent="100" position_vertical="justify" gutter_size="2" back_color="color-gyho" overlay_alpha="50" radius="xl" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="4/12" uncode_shortcode_id="123479" back_color_type="uncode-palette"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" uncode_shortcode_id="117910"]Headline[/vc_custom_heading][vc_row_inner limit_content=""][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/1" uncode_shortcode_id="812629"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'fontsize-445851' ) .'" text_height="'. uncode_wf_print_font_height( 'fontheight-179065' ) .'" uncode_shortcode_id="328267"]129$[/vc_custom_heading][vc_custom_heading heading_semantic="h6" uncode_shortcode_id="607174"]Medium length headline[/vc_custom_heading][/vc_column_inner][/vc_row_inner][/vc_column][vc_column column_width_percent="100" gutter_size="3" style="dark" back_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="50" radius="xl" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="3/12" uncode_shortcode_id="510524" back_color_type="uncode-palette"][vc_custom_heading text_color="color-rgdb" heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'fontsize-160000' ) .'" text_transform="uppercase" text_space="'. uncode_wf_print_font_space( 'fontspace-210350' ) .'" badge_style="yes" back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" radius="xl" uncode_shortcode_id="126312" back_color_type="uncode-palette" text_color_type="uncode-palette"]Tagline[/vc_custom_heading][vc_custom_heading heading_semantic="h6" uncode_shortcode_id="108423"]Long headline to turn your visitors into users[/vc_custom_heading][vc_single_image media="'. uncode_wf_print_single_image( '83462' ) .'" media_width_percent="100" media_ratio="three-two" shape="img-round" radius="xl" uncode_shortcode_id="197623"][/vc_column][vc_column column_width_percent="100" position_vertical="justify" gutter_size="2" back_color="color-gyho" overlay_alpha="50" radius="xl" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="5/12" uncode_shortcode_id="205298" back_color_type="uncode-palette"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" uncode_shortcode_id="117910"]Headline[/vc_custom_heading][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_use_pixel="yes" media_ratio="one-one" shape="img-circle" uncode_shortcode_id="983447" media_width_pixel="80"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'fontsize-155944' ) .'" uncode_shortcode_id="115377"]“ Long headline to turn your visitors into users “[/vc_custom_heading][/vc_column][/vc_row]
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
