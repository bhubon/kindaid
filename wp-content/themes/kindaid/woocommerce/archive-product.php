<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action('woocommerce_shop_loop_header');

if (woocommerce_product_loop()) {

	?>
	<div class="tp-shop-top mb-50">
		<div class="row">
			<div class="col-lg-12">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-5">
						<div class="tp-shop-result">
							<?php woocommerce_result_count(); ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-7">
						<div class="tp-shop-sort-select d-flex justify-content-md-end">
							<?php woocommerce_catalog_ordering(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tp-shop-main">
		<div class="row">
			<div class="col-lg-3">
				<div class="tp-shop-sidebar mr-30">
					<?php dynamic_sidebar('product_sidebar'); ?>
					<!-- search -->
					<div class="tp-shop-widget-search pb-50">
						<form action="#">
							<div class="tp-shop-widget-search-input">
								<input type="text" placeholder="Search model" />
								<button type="submit">
									<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M7.64993 14.2999C11.3226 14.2999 14.2999 11.3226 14.2999 7.64993C14.2999 3.97727 11.3226 1 7.64993 1C3.97727 1 1 3.97727 1 7.64993C1 11.3226 3.97727 14.2999 7.64993 14.2999Z"
											stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M15.0001 15L13.6001 13.6" stroke="currentColor" stroke-width="1.5"
											stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</button>
							</div>
						</form>
					</div>
					<!-- filter -->
					<div class="tp-shop-widget mb-50">
						<h3 class="tp-shop-widget-title no-border">Price Filter</h3>
						<div class="tp-shop-widget-content">
							<div class="tp-shop-widget-filter">
								<div id="slider-range-offcanvas" class="mb-10"></div>
								<div class="tp-shop-widget-filter-info d-flex align-items-center justify-content-between">
									<span class="input-range">
										<input type="text" id="amount-offcanvas" readonly />
									</span>
									<button class="tp-shop-widget-filter-btn" type="button">
										Filter
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- categories -->
					<div class="tp-shop-widget mb-50">
						<h3 class="tp-shop-widget-title">Categories</h3>
						<div class="tp-shop-widget-content">
							<div class="tp-shop-widget-categories">
								<ul>
									<li>
										<a href="#">Leather <span>10</span></a>
									</li>
									<li>
										<a href="#">Classic Watch <span>18</span></a>
									</li>
									<li>
										<a href="#">Leather Man Wacth <span>22</span></a>
									</li>
									<li>
										<a href="#">Trending Watch <span>17</span></a>
									</li>
									<li>
										<a href="#">Google <span>22</span></a>
									</li>
									<li>
										<a href="#">Woman Wacth <span>14</span></a>
									</li>
									<li>
										<a href="#">Tables <span>19</span></a>
									</li>
									<li>
										<a href="#">Electronics <span>29</span></a>
									</li>
									<li>
										<a href="#">Phones <span>05</span></a>
									</li>
									<li>
										<a href="#">Grocery <span>14</span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- product rating -->
					<div class="tp-shop-widget mb-50">
						<h3 class="tp-shop-widget-title">Top Rated Products</h3>
						<div class="tp-shop-widget-content">
							<div class="tp-shop-widget-product">
								<div class="tp-shop-widget-product-item d-flex align-items-center">
									<div class="tp-shop-widget-product-thumb">
										<a href="shop-details.html">
											<img src="assets/img/product/shop/sm/shop-sm-1.jpg" alt="" />
										</a>
									</div>
									<div class="tp-shop-widget-product-content">
										<div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
											<div class="tp-shop-widget-product-rating">
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
											</div>
											<div class="tp-shop-widget-product-rating-number">
												<span>(4.2)</span>
											</div>
										</div>
										<h4 class="tp-shop-widget-product-title">
											<a href="shop-details.html">Smart watches wood...</a>
										</h4>
										<div class="tp-shop-widget-product-price-wrapper">
											<span class="tp-shop-widget-product-price">$150.00</span>
										</div>
									</div>
								</div>
								<div class="tp-shop-widget-product-item d-flex align-items-center">
									<div class="tp-shop-widget-product-thumb">
										<a href="shop-details.html">
											<img src="assets/img/product/shop/sm/shop-sm-2.jpg" alt="" />
										</a>
									</div>
									<div class="tp-shop-widget-product-content">
										<div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
											<div class="tp-shop-widget-product-rating">
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
											</div>
											<div class="tp-shop-widget-product-rating-number">
												<span>(4.5)</span>
											</div>
										</div>
										<h4 class="tp-shop-widget-product-title">
											<a href="shop-details.html">Decoration for panda.</a>
										</h4>
										<div class="tp-shop-widget-product-price-wrapper">
											<span class="tp-shop-widget-product-price">$120.00</span>
										</div>
									</div>
								</div>
								<div class="tp-shop-widget-product-item d-flex align-items-center">
									<div class="tp-shop-widget-product-thumb">
										<a href="shop-details.html">
											<img src="assets/img/product/shop/sm/shop-sm-3.jpg" alt="" />
										</a>
									</div>
									<div class="tp-shop-widget-product-content">
										<div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
											<div class="tp-shop-widget-product-rating">
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
											</div>
											<div class="tp-shop-widget-product-rating-number">
												<span>(3.5)</span>
											</div>
										</div>
										<h4 class="tp-shop-widget-product-title">
											<a href="shop-details.html">Trending Watch for Man</a>
										</h4>
										<div class="tp-shop-widget-product-price-wrapper">
											<span class="tp-shop-widget-product-price">$99.00</span>
										</div>
									</div>
								</div>
								<div class="tp-shop-widget-product-item d-flex align-items-center">
									<div class="tp-shop-widget-product-thumb">
										<a href="shop-details.html">
											<img src="assets/img/product/shop/sm/shop-sm-4.jpg" alt="" />
										</a>
									</div>
									<div class="tp-shop-widget-product-content">
										<div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
											<div class="tp-shop-widget-product-rating">
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
												<span>
													<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
															fill="currentColor" />
													</svg>
												</span>
											</div>
											<div class="tp-shop-widget-product-rating-number">
												<span>(4.8)</span>
											</div>
										</div>
										<h4 class="tp-shop-widget-product-title">
											<a href="shop-details.html">Minimal Backpack.</a>
										</h4>
										<div class="tp-shop-widget-product-price-wrapper">
											<span class="tp-shop-widget-product-price">$165.00</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="tp-shop-main-wrapper">
					<?php
					/**
					 * Hook: woocommerce_before_shop_loop.
					 *
					 * @hooked woocommerce_output_all_notices - 10
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action('woocommerce_before_shop_loop');

					woocommerce_product_loop_start();

					if (wc_get_loop_prop('total')) {
						while (have_posts()) {
							the_post();

							/**
							 * Hook: woocommerce_shop_loop.
							 */
							do_action('woocommerce_shop_loop');

							wc_get_template_part('content', 'product');
						}
					}

					woocommerce_product_loop_end();

					/**
					 * Hook: woocommerce_after_shop_loop.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action('woocommerce_after_shop_loop');

					} else {
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action('woocommerce_no_products_found');
					}
					?>
			</div>
			
		</div>
	</div>
</div>
<?php



/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer('shop');
