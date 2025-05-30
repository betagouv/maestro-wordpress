<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 9.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

$post_type = uncode_get_current_post_type();

$dynamic_button = isset ( $vc_shortcode ) ? ' dynamic-button' : '';

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart<?php echo esc_attr( $dynamic_button ); if ( ( function_exists('vc_is_page_editable') && vc_is_page_editable() ) || $post_type == 'uncodeblock' ) { echo ' woocommerce'; } ?>" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo uncode_switch_stock_string( $variations_attr ); // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php esc_html_e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
	<?php else : ?>
		<table class="variations" cellspacing="0">
			<tbody>
				<?php foreach ( $attributes as $attribute_name => $options ) : ?>
					<tr>
						<?php // BEGIN UNCODE EDIT ?>
						<?php
						$swatches = uncode_wc_get_attribute_swatches( $product->get_id(), $attribute_name, $options, $available_variations );
						$has_swatches = is_array( $swatches ) && count( $swatches ) > 0 ? true : false;
						?>

						<td class="label <?php echo esc_attr( $has_swatches ? 'label--has-swatches' : '' ); ?>"><label for="<?php echo sanitize_title( $attribute_name ); ?>"><?php echo wc_attribute_label( $attribute_name ); ?></label><span class="value">
							<?php
							if ( $has_swatches ) {
								uncode_wc_print_swatches( $product, $swatches, $attribute_name, $options, $available_variations );
							}

							$variation_attribute_args = array( 'options' => $options, 'attribute' => $attribute_name, 'product' => $product );

							$default_selected = $product->get_variation_default_attribute( $attribute_name );
							$selected         = uncode_wc_get_default_selected_attribute( $attribute_name, $default_selected );
							if ( $selected ) {
								$variation_attribute_args['selected'] = $selected;
							}
							wc_dropdown_variation_attribute_options( $variation_attribute_args );
							echo end( $attribute_keys ) === $attribute_name ? apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) : '';
							?></span>
						</td>
						<?php // END UNCODE EDIT ?>
					</tr>
		        <?php endforeach;?>
			</tbody>
		</table>
		<div class="reset_variations_alert screen-reader-text" role="alert" aria-live="polite" aria-relevant="all"></div>

		<div class="single_variation_wrap">
			<?php
				/**
				 * woocommerce_before_single_variation Hook.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * woocommerce_single_variation hook. Used to output the cart button and placeholder for variation data.
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * woocommerce_after_single_variation Hook.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
