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

$data[ 'name' ]             = esc_html__( 'Content Customer Reviews', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'contents' ];
$data[ 'custom_class' ]     = 'contents';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'contents/Content-Customer-Reviews.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="0" override_padding="yes" h_padding="2" top_padding="5" bottom_padding="5" overlay_alpha="50" gutter_size="4" column_width_use_pixel="yes" shift_y="0" z_index="0" uncode_shortcode_id="106716" column_width_pixel="1500"][vc_column column_width_percent="100" gutter_size="4" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" css_animation="alpha-anim" animation_speed="1400" width="1/3" uncode_shortcode_id="107760"][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="3" shift_y="0" z_index="0" limit_content="" uncode_shortcode_id="166959"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="2" mobile_width="7" width="1/4" uncode_shortcode_id="241177"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_use_pixel="yes" media_ratio="one-one" alignment="center" shape="img-circle" uncode_shortcode_id="211737" media_width_pixel="100"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="6" align_mobile="align_center_mobile" mobile_width="7" width="3/4" uncode_shortcode_id="182865"][vc_empty_space empty_h="0" medium_visibility="yes" mobile_visibility="yes"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" heading_display="inline" uncode_shortcode_id="127839"]Henrik Larsgaard[/vc_custom_heading][uncode_star_rating rate="4" text_size="'. uncode_wf_print_font_size( 'h5' ) .'" display="inline-block" text_color="accent" uncode_shortcode_id="123032" text_color_type="uncode-palette"][vc_column_text text_lead="yes" uncode_shortcode_id="447054"]“ Exceptional commitment to the practice of yoga. The studio focus on personal development truly stands out. Highly recommended! ”[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="3" shift_y="0" z_index="0" limit_content="" uncode_shortcode_id="463336"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="2" mobile_width="7" width="1/4" uncode_shortcode_id="936763"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_use_pixel="yes" media_ratio="one-one" alignment="center" shape="img-circle" uncode_shortcode_id="111430" media_width_pixel="100"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="6" align_mobile="align_center_mobile" mobile_width="7" width="3/4" uncode_shortcode_id="154888"][vc_empty_space empty_h="0" medium_visibility="yes" mobile_visibility="yes"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" heading_display="inline" uncode_shortcode_id="651458"]Hilda Petersen[/vc_custom_heading][uncode_star_rating rate="3.5" text_size="'. uncode_wf_print_font_size( 'h5' ) .'" display="inline-block" text_color="accent" uncode_shortcode_id="198475" text_color_type="uncode-palette"][vc_column_text text_lead="yes" uncode_shortcode_id="162356"]“ Impressive commitment to holistic health. The yoga center strikes a perfect balance between challenging workouts. ”[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column column_width_percent="100" gutter_size="4" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" css_animation="alpha-anim" animation_speed="1400" width="1/3" uncode_shortcode_id="144499"][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="3" shift_y="0" z_index="0" limit_content="" uncode_shortcode_id="166959"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="2" mobile_width="7" width="1/4" uncode_shortcode_id="111694"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_use_pixel="yes" media_ratio="one-one" alignment="center" shape="img-circle" uncode_shortcode_id="142045" media_width_pixel="100"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="6" align_mobile="align_center_mobile" mobile_width="7" width="3/4" uncode_shortcode_id="126482"][vc_empty_space empty_h="0" medium_visibility="yes" mobile_visibility="yes"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" heading_display="inline" uncode_shortcode_id="273659"]Lovisa Bergstrom[/vc_custom_heading][uncode_star_rating rate="5" text_size="'. uncode_wf_print_font_size( 'h5' ) .'" display="inline-block" text_color="accent" uncode_shortcode_id="121398" text_color_type="uncode-palette"][vc_column_text text_lead="yes" uncode_shortcode_id="207057"]“ The instructors radiate positivity, making each session a holistic journey. Grateful for the positive impact on my mental well-being. ”[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="3" shift_y="0" z_index="0" limit_content="" uncode_shortcode_id="166959"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="2" mobile_width="7" width="1/4" uncode_shortcode_id="103399"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_use_pixel="yes" media_ratio="one-one" alignment="center" shape="img-circle" uncode_shortcode_id="137071" media_width_pixel="100"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="6" align_mobile="align_center_mobile" mobile_width="7" width="3/4" uncode_shortcode_id="929275"][vc_empty_space empty_h="0" medium_visibility="yes" mobile_visibility="yes"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" heading_display="inline" uncode_shortcode_id="100783"]Bjorn Johansson[/vc_custom_heading][uncode_star_rating rate="4.5" text_size="'. uncode_wf_print_font_size( 'h5' ) .'" display="inline-block" text_color="accent" uncode_shortcode_id="110597" text_color_type="uncode-palette"][vc_column_text text_lead="yes" uncode_shortcode_id="722886"]“ An oasis of tranquility in the midst of world. Attending classes here has been a game-changer for my stress. ”[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column column_width_percent="100" gutter_size="4" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" css_animation="alpha-anim" animation_speed="1400" width="1/3" uncode_shortcode_id="424325"][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="3" shift_y="0" z_index="0" limit_content="" uncode_shortcode_id="166959"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="2" mobile_width="7" width="1/4" uncode_shortcode_id="645581"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_use_pixel="yes" media_ratio="one-one" alignment="center" shape="img-circle" uncode_shortcode_id="123109" media_width_pixel="100"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="6" align_mobile="align_center_mobile" mobile_width="7" width="3/4" uncode_shortcode_id="101155"][vc_empty_space empty_h="0" medium_visibility="yes" mobile_visibility="yes"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" heading_display="inline" uncode_shortcode_id="969727"]Torben Svensson[/vc_custom_heading][uncode_star_rating rate="4.5" text_size="'. uncode_wf_print_font_size( 'h5' ) .'" display="inline-block" text_color="accent" uncode_shortcode_id="250547" text_color_type="uncode-palette"][vc_column_text text_lead="yes" uncode_shortcode_id="643944"]“ Outstanding yoga center! The diverse classes cater to all levels, and the supportive community fosters a sense of belonging. ”[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="3" shift_y="0" z_index="0" limit_content="" uncode_shortcode_id="166959"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="2" mobile_width="7" width="1/4" uncode_shortcode_id="160688"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_use_pixel="yes" media_ratio="one-one" alignment="center" shape="img-circle" uncode_shortcode_id="165349" media_width_pixel="100"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="6" align_mobile="align_center_mobile" mobile_width="7" width="3/4" uncode_shortcode_id="958441"][vc_empty_space empty_h="0" medium_visibility="yes" mobile_visibility="yes"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h4' ) .'" heading_display="inline" uncode_shortcode_id="146390"]Matilda Mikkelsen[/vc_custom_heading][uncode_star_rating rate="4" text_size="'. uncode_wf_print_font_size( 'h5' ) .'" display="inline-block" text_color="accent" uncode_shortcode_id="206909" text_color_type="uncode-palette"][vc_column_text text_lead="yes" uncode_shortcode_id="140953"]“ Unparalleled dedication to the art of yoga. The center emphasis on individual growth shines through. Raccomanded! ”[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
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
