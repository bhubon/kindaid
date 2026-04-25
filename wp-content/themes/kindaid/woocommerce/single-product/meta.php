<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if (!defined('ABSPATH')) {
	exit;
}

global $product;

$product_id = get_the_ID();
$product_cat = get_the_terms($product_id, 'product_cat');
$product_tag = get_the_terms($product_id, 'product_tag');
?>

<div class="tp-product-details-query mb-40">
	<?php do_action('woocommerce_product_meta_start'); ?>

	<?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type(ProductType::VARIABLE))): ?>
		<div class="tp-product-details-query-item d-flex align-items-center">
			<span><?php esc_html_e('SKU:', 'kindaid'); ?> </span>
			<p><?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'woocommerce'); ?></p>
		</div>
	<?php endif; ?>
	
	<?php if (!empty($product_cat) && !is_wp_error($product_cat)): ?>
		<div class="tp-product-details-query-item d-flex align-items-center">
			<span><?php echo esc_html__('Category: ', 'kindaid'); ?></span>

			<?php
			$html = '';
			foreach ($product_cat as $cat) {
				$html .= '<p">' . esc_html($cat->name) . '</p>, ';
			}
			echo rtrim($html, ', ');
			?>
		</div>
	<?php endif; ?>

	<?php if (!empty($product_tag) && !is_wp_error($product_tag)): ?>
		<div class="tp-product-details-query-item d-flex align-items-center">
			<span><?php echo esc_html__('Tag: ', 'kindaid'); ?></span>
			<?php
			$html = '';
			foreach ($product_tag as $tag) {
				$html .= '<p">' . esc_html($tag->name) . '</p>, ';
			}
			echo rtrim($html, ', ');
			?>
		</div>
	<?php endif; ?>
	<?php do_action('woocommerce_product_meta_end'); ?>
</div>