<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/uncode-my-account-form-register.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 7.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' );
$form_title_classes  = implode( ' ', $form_classes[ 'title' ] );
$form_button_classes = implode( ' ', $form_classes[ 'button' ] );
?>

<h2 class="<?php echo esc_attr( $form_title_classes ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>

<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

	<?php do_action( 'woocommerce_register_form_start' ); ?>

	<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e( 'Required', 'woocommerce' ); ?></span></label>
			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" placeholder="<?php echo esc_attr( uncode_woocommerce_get_form_field_placeholder( 'username' ) ); ?>" required aria-required="true" /><?php // @codingStandardsIgnoreLine ?>
		</p>

	<?php endif; ?>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e( 'Required', 'woocommerce' ); ?></span></label>
		<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" placeholder="<?php echo esc_attr( uncode_woocommerce_get_form_field_placeholder( 'email' ) ); ?>" required aria-required="true" /><?php // @codingStandardsIgnoreLine ?>
	</p>

	<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required" aria-hidden="true">*</span><span class="screen-reader-text"><?php esc_html_e( 'Required', 'woocommerce' ); ?></span></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" placeholder="<?php echo esc_attr( uncode_woocommerce_get_form_field_placeholder( 'password' ) ); ?>" required aria-required="true" />
		</p>

	<?php else : ?>

		<p><?php esc_html_e( 'A link to set a new password will be sent to your email address.', 'woocommerce' ); ?></p>

	<?php endif; ?>

	<?php do_action( 'woocommerce_register_form' ); ?>

	<p class="woocommerce-form-row form-row">
		<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
		<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit btn <?php echo esc_attr( $form_button_classes ); ?><?php echo esc_attr( uncode_wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . uncode_wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" style="<?php echo esc_attr( $button_adjust_value ? 'margin-top:' . $button_adjust_value . 'px' : '' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
	</p>

	<?php do_action( 'woocommerce_register_form_end' ); ?>

</form>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
