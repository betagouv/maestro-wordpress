<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 9.4.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $wp_query, $woocommerce_loop;
$vars = $wp_query->query_vars;
$single_post_width = (isset($vars['single_post_width']) && $vars['single_post_width'] !== '') ? $vars['single_post_width'] : ( isset($woocommerce_loop['columns']) ? 12/$woocommerce_loop['columns'] : 4 );

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
	return;
}

$item_thumb_id = '';

$stylesArray = array(
	'light',
	'dark'
);
$general_style = ot_get_option('_uncode_general_style');

$overlay_style = $stylesArray[!array_search($general_style, $stylesArray) ];
$overlay_back_color = 'style-' . $overlay_style . '-bg';

$item_thumb_id = get_post_meta($post->ID, '_uncode_featured_media', 1);
if ( $item_thumb_id === '' || $item_thumb_id == 0 ) {
	$item_thumb_id = $product->get_image_id();
}

$block_classes = array(
	'tmb'
);

$block_classes[] = 'tmb-' . $general_style;
$block_classes[] = 'tmb-content-center';
$block_classes[] = 'tmb-no-bg';
$block_classes[] = 'tmb-woocommerce';
$block_classes[] = 'tmb-overlay-anim';
$block_classes[] = 'tmb-overlay-text-anim';
//$block_classes[] = 'tmb-text-space-reduced';
$block_classes[] = 'tmb-iso-w' . $single_post_width;
$block_classes[] = implode(' ', get_post_class());
if ( apply_filters( 'uncode_index_no_double_tap', false ) ) {
	$block_classes[] = 'tmb-no-double-tap';
}

if ( ot_get_option('_uncode_woocommerce_enhanced_atc') === 'on' ) {
	$block_classes[] = 'enhanced-atc';
}

if ( ot_get_option('_uncode_woocommerce_width_atc') === 'on' ) {
	$block_classes[] = 'auto-width-atc';
}

$media_items = array();
$block_data = array();
$tmb_data = array();
$title_classes = array('h6');
$layout = array();

$block_data['template'] = 'content-product.php';
$block_data['content'] = get_the_content();
$block_data['classes'] = $block_classes;
$block_data['tmb_data'] = $tmb_data;
$block_data['id'] = $post->ID;
$block_data['media_id'] = $item_thumb_id;
$block_data['single_title'] = $post->post_title;
$block_data['single_width'] = $single_post_width;
$block_data['single_text'] = 'under';
$block_data['single_style'] = $general_style;
$block_data['overlay_style'] = $overlay_style;
$block_data['overlay_color'] = $overlay_back_color;
$block_data['overlay_opacity'] = '20';
$block_data['text_padding'] = 'half-block-padding';
$block_data['title_classes'] = $title_classes;
$block_data['link'] = get_permalink();
$block_data['text_length'] = 300;
$block_data['product'] = true;

$categories_id = array();
$categories_link = array();
$woo_categories = get_the_terms( $post->ID, 'product_cat' );
if (isset($woo_categories) && !empty($woo_categories)) {
	foreach ( $woo_categories as $woo_cat ) {
		$woo_cat_id = $woo_cat->term_id; //category ID
		$woo_cat_name = $woo_cat->name; //category name
		$woo_cat_slug = $woo_cat->slug; //category slug
		$categories_id[] = $woo_cat->term_id;
		$categories_link[] = '<a href="' . get_term_link( $woo_cat_slug, 'product_cat' ) . '">' . $woo_cat_name . '</a>';
	}
}

$block_data['single_categories_id'] = $categories_id;
$block_data['single_categories'] = $categories_link;

if ( $item_thumb_id !== '' && $item_thumb_id != 0 ) {
	$layout['media'] = array();
} else {
	$layout['media'] = array('placeholder');
}
$layout['title'] = array();
$layout['price'] = array();

/**
 * Hook: woocommerce_before_shop_loop_item.
 *
 * @hooked woocommerce_template_loop_product_link_open - 10
 */
if ( ot_get_option('_uncode_woocommerce_hooks') !== 'on' ) {
	do_action( 'woocommerce_before_shop_loop_item' );
}

/**
 * Hook: woocommerce_before_shop_loop_item_title.
 *
 * @hooked woocommerce_show_product_loop_sale_flash - 10
 * @hooked woocommerce_template_loop_product_thumbnail - 10
 */
if ( ot_get_option('_uncode_woocommerce_hooks') !== 'on' ) {
	do_action( 'woocommerce_before_shop_loop_item_title' );
}

/**
 * Hook: woocommerce_shop_loop_item_title.
 *
 * @hooked woocommerce_template_loop_product_title - 10
 */
do_action( 'woocommerce_shop_loop_item_title' );

/**
 * Hook: woocommerce_after_shop_loop_item_title.
 *
 * @hooked woocommerce_template_loop_rating - 5
 * @hooked woocommerce_template_loop_price - 10
 */
if ( ot_get_option('_uncode_woocommerce_hooks') !== 'on' ) {
	do_action( 'woocommerce_after_shop_loop_item_title' );
}

/**
 * Hook: woocommerce_after_shop_loop_item.
 *
 * @hooked woocommerce_template_loop_product_link_close - 5
 * @hooked woocommerce_template_loop_add_to_cart - 10
 */
if ( ot_get_option('_uncode_woocommerce_hooks') !== 'on' ) {
	do_action( 'woocommerce_after_shop_loop_item' );
}

echo uncode_create_single_block($block_data, rand() , 'masonry', $layout, false, 'no', true, true);
