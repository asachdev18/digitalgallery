<?php
if(!class_exists('MooseElatedWoocommerceDropdownCart')) {
	class MooseElatedWoocommerceDropdownCart extends WP_Widget {

		public function __construct() {
			parent::__construct(
				'eltd_woocommerce_dropdown_cart', // Base ID
				esc_html__('Moos Woocommerce Dropdown Cart', 'moose'), // Name
				array('description' => esc_html__('Elated Woocommerce Dropdown Cart', 'moose'),) // Args
			);
		}

		public function widget($args, $instance) {
			global $post;
			extract($args);

			global $woocommerce;
			global $moose_elated_options;

			$cart_style = 'with_icon';

			if (isset($moose_elated_options['woo_drop_cart_type'])) {
				if ($moose_elated_options['woo_drop_cart_type'] == 'with_icon') {
					$cart_style = 'with_icon';
				} elseif ($moose_elated_options['woo_drop_cart_type'] == 'with_icon_label') {
					$cart_style = 'with_icon_label';
				} else {
					$cart_style = 'button_with_text';
				}
			}
			?>
			<div class="shopping_cart_outer">
				<div class="shopping_cart_inner">
					<div class="shopping_cart_header">
						<?php if ($cart_style == "with_icon") { ?>
							<a class="header_cart" href="<?php echo esc_url(wc_get_cart_url()); ?>">
								<i class="icon_cart_alt"></i>
								<span
									class="header_cart_span"><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span>
							</a>
						<?php }
						if ($cart_style == "with_icon_label") { ?>
							<a class="header_cart" href="<?php echo esc_url(wc_get_cart_url()); ?>">
								<span class="cart_icon_number_holder">
									<i class="icon-bag icons"></i>
								</span>
								<span class="cart_label"><?php esc_html_e('Cart', 'moose') ?><span
										class="number">(<?php echo esc_html($woocommerce->cart->cart_contents_count); ?>
										)</span></span>
							</a>
						<?php } ?>
						<?php if ($cart_style == "button_with_text") { ?>
							<a class="header_cart" href="<?php echo esc_url(wc_get_cart_url()); ?>">
								<span class="cart_label"><?php esc_html_e('Cart', 'moose') ?></span>
								<span
									class="header_cart_span"><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span>
							</a>
						<?php } ?>
						<div class="shopping_cart_dropdown">
							<div class="shopping_cart_dropdown_inner1">
								<?php
								$cart_is_empty = sizeof($woocommerce->cart->get_cart()) <= 0;
								$list_class = array('cart_list', 'product_list_widget');
								?>
								<ul class="clearfix">

									<?php if (!$cart_is_empty) : ?>

										<?php foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item) :

											$_product = $cart_item['data'];

											// Only display if allowed
											if (!$_product->exists() || $cart_item['quantity'] == 0) {
												continue;
											}

											// Get price
											$product_price = get_option('woocommerce_tax_display_cart') == 'excl' ? wc_get_price_excluding_tax($_product) : wc_get_price_including_tax($_product);
											?>


											<li>
												<div class="item_image_holder">
													<a href="<?php echo esc_url(get_permalink($cart_item['product_id'])); ?>">
														<?php echo wp_kses($_product->get_image(), array(
															'img' => array(
																'src' => true,
																'width' => true,
																'height' => true,
																'class' => true,
																'alt' => true,
																'title' => true,
																'id' => true
															)
														)); ?>
													</a>
												</div>
												<div class="item_info_holder">
													<div class="item_left">
														<a href="<?php echo esc_url(get_permalink($cart_item['product_id'])); ?>">
															<?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product); ?>
														</a>
														<span class="quantity">
														<?php echo esc_html($cart_item['quantity']); ?> x
															<?php echo apply_filters('woocommerce_cart_item_price_html', wc_price($product_price), $cart_item, $cart_item_key); ?>
													</span>
													</div>
													<div class="item_right">
														<?php echo apply_filters('woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s">&times;</a>', esc_url(wc_get_cart_remove_url($cart_item_key)), esc_html__('Remove this item', 'moose')), $cart_item_key); ?>
													</div>
												</div>
											</li>

										<?php endforeach; ?>
										<div class="cart_bottom">
											<div class="subtotal_holder">
												<span class="total"><?php esc_html_e('Total', 'moose'); ?>:</span>
												<span class="total_amount">
												<?php echo wp_kses($woocommerce->cart->get_cart_subtotal(), array(
													'span' => array(
														'class' => true,
														'id' => true
													)
												)); ?>
											</span>
											</div>
											<div class="btns_holder">
												<a href="<?php echo esc_url(wc_get_cart_url()); ?>"
												   class="qbutton transparent rotate_icon animate_button qbutton_with_icon icon_right view-cart">
												<span class="text_holder">
													<span><?php esc_html_e('View your cart', 'moose'); ?></span>
												</span>
													<span class="icon_holder">
													<span><i class="arrow_carrot-2right"></i></span>
													<span class="hidden_icon"><i class="arrow_carrot-2right"></i></span>					
												</span>
												</a>
												<a href="<?php echo esc_url(wc_get_checkout_url()); ?>"
												   class="qbutton transparent rotate_icon animate_button qbutton_with_icon icon_right checkout">
												<span class="text_holder">
													<?php esc_html_e('Checkout', 'moose'); ?>
												</span>
													<span class="icon_holder">
													<span><i class="icon_check"></i></span>
													<span class="hidden_icon"><i class="icon_check"></i></span>					
												</span>
												</a>
											</div>
										</div>
									<?php else : ?>
										<li class="empty_cart"><?php esc_html_e('No products in cart.', 'moose'); ?></li>
										<li class="back_to_shop">
											<a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
											   class="qbutton transparent rotate_icon animate_button qbutton_with_icon icon_right checkout">
												<span
													class="text_holder"><?php esc_html_e('Go shopping now', 'moose'); ?></span>
												<span class="icon_holder">
												<span><i class="arrow_carrot-2right"></i></span>
												<span class="hidden_icon"><i class="arrow_carrot-2right"></i></span>					
											</span>
											</a>
										</li>

									<?php endif; ?>

								</ul>
							</div>
							<?php if (sizeof($woocommerce->cart->get_cart()) <= 0) : ?>

							<?php endif; ?>


							<?php if (sizeof($woocommerce->cart->get_cart()) <= 0) : ?>

							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		}


		public function update($new_instance, $old_instance) {
			$instance = array();

			return $instance;
		}

	}
}
?>
<?php

if(!function_exists('moose_elated_woocommerce_header_add_to_cart_fragment')) {

	function moose_elated_woocommerce_header_add_to_cart_fragment($fragments) {
		global $woocommerce;
		global $moose_elated_options;

		$cart_style = 'with_icon';

		if (isset($moose_elated_options['woo_drop_cart_type'])) {
			if ($moose_elated_options['woo_drop_cart_type'] == 'with_icon') {
				$cart_style = 'with_icon';
			} elseif ($moose_elated_options['woo_drop_cart_type'] == 'with_icon_label') {
				$cart_style = 'with_icon_label';
			} else {
				$cart_style = 'button_with_text';
			}
		}
		ob_start();
		?>
		<div class="shopping_cart_header">
			<?php if ($cart_style == "with_icon") { ?>
				<a class="header_cart" href="<?php echo esc_url(wc_get_cart_url()); ?>">
					<i class="icon_cart_alt"></i>
					<span
						class="header_cart_span"><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span>
				</a>
			<?php }
			if ($cart_style == "with_icon_label") { ?>
				<a class="header_cart" href="<?php echo esc_url(wc_get_cart_url()); ?>">
				<span class="cart_icon_number_holder">
					<i class="icon-bag icons"></i>
				</span>
					<span class="cart_label"><?php esc_html_e('Cart', 'moose') ?><span
							class="number">(<?php echo esc_html($woocommerce->cart->cart_contents_count); ?>
							)</span></span>
				</a>
			<?php } ?>
			<?php if ($cart_style == "button_with_text") { ?>
				<a class="header_cart with_button" href="<?php echo esc_url(wc_get_cart_url()); ?>">
					<span class="cart_label"><?php esc_html_e('Cart', 'moose') ?></span>
					<span
						class="header_cart_span "><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span>
				</a>
			<?php } ?>
			<div class="shopping_cart_dropdown">
				<div class="shopping_cart_dropdown_inner1">
					<?php
					$cart_is_empty = sizeof($woocommerce->cart->get_cart()) <= 0;
					//$list_class = array( 'cart_list', 'product_list_widget' );
					?>
					<ul class="clearfix">

						<?php if (!$cart_is_empty) : ?>

							<?php foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item) :

								$_product = $cart_item['data'];

								// Only display if allowed
								if (!$_product->exists() || $cart_item['quantity'] == 0) {
									continue;
								}

								// Get price
								$product_price = get_option('woocommerce_tax_display_cart') == 'excl' ? wc_get_price_excluding_tax($_product) : wc_get_price_including_tax($_product);
								?>

								<li>
									<div class="item_image_holder">
										<?php echo wp_kses($_product->get_image(), array(
											'img' => array(
												'src' => true,
												'width' => true,
												'height' => true,
												'class' => true,
												'alt' => true,
												'title' => true,
												'id' => true
											)
										)); ?>
									</div>
									<div class="item_info_holder">
										<div class="item_left">
											<a href="<?php echo esc_url(get_permalink($cart_item['product_id'])); ?>">
												<?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product); ?>
											</a>
											<span class="quantity">
												<?php echo esc_html($cart_item['quantity']); ?> x
												<?php echo apply_filters('woocommerce_cart_item_price_html', wc_price($product_price), $cart_item, $cart_item_key); ?>
											</span>

										</div>
										<div class="item_right">
											<?php echo apply_filters('woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s">&times;</a>', esc_url(wc_get_cart_remove_url($cart_item_key)), esc_html__('Remove this item', 'moose')), $cart_item_key); ?>

										</div>
									</div>
								</li>

							<?php endforeach; ?>
							<div class="cart_bottom">
								<div class="subtotal_holder">
									<span class="total"><?php esc_html_e('Total', 'moose'); ?>:</span>
									<span class="total_amount">
										<?php echo wp_kses($woocommerce->cart->get_cart_subtotal(), array(
											'span' => array(
												'class' => true,
												'id' => true
											)
										)); ?>
									</span>
								</div>
								<div class="btns_holder">
									<a href="<?php echo esc_url(wc_get_cart_url()); ?>"
									   class="qbutton transparent rotate_icon animate_button qbutton_with_icon icon_right view-cart">
										<span class="text_holder">
											<span><?php esc_html_e('View your cart', 'moose'); ?></span>
										</span>
										<span class="icon_holder">
											<span><i class="arrow_carrot-2right"></i></span>
											<span class="hidden_icon"><i class="arrow_carrot-2right"></i></span>					
										</span>
									</a>
									<a href="<?php echo esc_url(wc_get_checkout_url()); ?>"
									   class="qbutton transparent rotate_icon animate_button qbutton_with_icon icon_right checkout">
										<span class="text_holder">
											<?php esc_html_e('Checkout', 'moose'); ?>
										</span>
										<span class="icon_holder">
											<span><i class="icon_check"></i></span>
											<span class="hidden_icon"><i class="icon_check"></i></span>					
										</span>
									</a>
								</div>
							</div>
						<?php else : ?>
							<li class="empty_cart"><?php esc_html_e('No products in cart.', 'moose'); ?></li>
							<li class="back_to_shop">
								<a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
								   class="qbutton transparent rotate_icon animate_button qbutton_with_icon icon_right checkout">
									<span class="text_holder"><?php esc_html_e('Go shopping now', 'moose'); ?></span>
									<span class="icon_holder">
									<span><i class="arrow_carrot-2right"></i></span>
									<span class="hidden_icon"><i class="arrow_carrot-2right"></i></span>					
								</span>
								</a>
							</li>

						<?php endif; ?>

					</ul>
				</div>
				<?php if (sizeof($woocommerce->cart->get_cart()) <= 0) : ?>

				<?php endif; ?>


				<?php if (sizeof($woocommerce->cart->get_cart()) <= 0) : ?>

				<?php endif; ?>
			</div>
		</div>

		<?php
		$fragments['div.shopping_cart_header'] = ob_get_clean();
		return $fragments;
	}

	add_filter('woocommerce_add_to_cart_fragments', 'moose_elated_woocommerce_header_add_to_cart_fragment');
}