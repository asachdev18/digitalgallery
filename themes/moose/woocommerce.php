<?php 
/*
Template Name: WooCommerce
*/ 
?>
<?php 
global $woocommerce;
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_id = moose_elated_get_page_id();
$shop = get_post($moose_elated_id);
$moose_elated_sidebar = moose_elated_get_sidebar_layout(false);

if(get_post_meta($moose_elated_id, "eltd_page_background_color", true) != ""){
	$moose_elated_background_color = 'background-color: '.esc_attr(get_post_meta($moose_elated_id, "eltd_page_background_color", true));
}else{
	$moose_elated_background_color = "";
}

$moose_elated_content_style = "";
if(get_post_meta($moose_elated_id, "eltd_content-top-padding", true) != ""){
	if(get_post_meta($moose_elated_id, "eltd_content-top-padding-mobile", true) == 'yes'){
		$moose_elated_content_style = "padding-top:".esc_attr(get_post_meta($moose_elated_id, "eltd_content-top-padding", true))."px !important";
	}else{
		$moose_elated_content_style = "padding-top:".esc_attr(get_post_meta($moose_elated_id, "eltd_content-top-padding", true))."px";
	}
}

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

?>
	<?php 
		get_header(); 
		$moose_elated_id = get_option('woocommerce_shop_page_id');
	?>
        <?php get_template_part( 'title' ); ?>
		<?php get_template_part('slider'); ?>

		<?php if(isset($moose_elated_options['woo_products_enable_full_width_template'])&& $moose_elated_options['woo_products_enable_full_width_template']=="yes" && !is_singular('product')){ ?>
			<div class="full_width"<?php moose_elated_inline_style($moose_elated_background_color); ?>>
		<?php } else{ ?>	
		<div class="container"<?php moose_elated_inline_style($moose_elated_background_color); ?>>
		<?php } ?>	
			
		<?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
		<?php if(isset($moose_elated_options['woo_products_enable_full_width_template'])&& $moose_elated_options['woo_products_enable_full_width_template']=="yes" && !is_singular('product')){ ?>
			<div class="full_width_inner" <?php moose_elated_inline_style($moose_elated_content_style); ?>>
		<?php } else{ ?>
			<div class="container_inner default_template_holder clearfix" <?php moose_elated_inline_style($moose_elated_content_style); ?>>
		<?php } ?>		
				<?php if(!is_singular('product')) { ?>
					<?php if(($moose_elated_sidebar == "default")||($moose_elated_sidebar == "")) : ?>
						<div class="page-decription_holder">
							<?php moose_elated_woocommerce_content_before(); ?>
						</div>
						<?php moose_elated_woocommerce_content(); ?>
					<?php elseif($moose_elated_sidebar == "1" || $moose_elated_sidebar == "2"): ?>		
					<?php global $woocommerce_loop;
			        	$woocommerce_loop['columns'] = 3;
			        ?>
					<?php if(isset($moose_elated_options['woocommerce_product_list_content_position']) && $moose_elated_options['woocommerce_product_list_content_position'] == 'content_above_product_list_and_sidebar') { ?>
						<div class="page-decription_holder">
							<?php moose_elated_woocommerce_content_before(); ?>
						</div>
					<?php }	?>
					<?php if($moose_elated_sidebar == "1") : ?>						
						<div class="two_columns_66_33 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1">
					<?php elseif($moose_elated_sidebar == "2") : ?>
						<div class="two_columns_75_25 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1 content_left_from_sidebar">
					<?php endif; ?>
								<div class="column_inner">
									<?php if(isset($moose_elated_options['woocommerce_product_list_content_position']) && $moose_elated_options['woocommerce_product_list_content_position'] == 'content_above_product_list') { ?>
											<div class="page-decription_holder">
												<?php moose_elated_woocommerce_content_before(); ?>
											</div>
									<?php }	?>
									<?php moose_elated_woocommerce_content(); ?>
								</div>
							</div>
							<div class="column2"><?php get_sidebar();?></div>
						</div>
					<?php elseif($moose_elated_sidebar == "3" || $moose_elated_sidebar == "4"): ?>
						<?php global $woocommerce_loop;
				        	$woocommerce_loop['columns'] = 3;
				        ?>
						<?php if(isset($moose_elated_options['woocommerce_product_list_content_position']) && $moose_elated_options['woocommerce_product_list_content_position'] == 'content_above_product_list_and_sidebar') { ?>
							<div class="page-decription_holder">
								<?php moose_elated_woocommerce_content_before(); ?>
							</div>
						<?php }	?>
						<?php if($moose_elated_sidebar == "3") : ?>
							<div class="two_columns_33_66 grid2 woocommerce_with_sidebar clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2">
						<?php elseif($moose_elated_sidebar == "4") : ?>
							<div class="two_columns_25_75 grid2 woocommerce_with_sidebar clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2 content_right_from_sidebar">
						<?php endif; ?>
									<div class="column_inner">
										<?php if(isset($moose_elated_options['woocommerce_product_list_content_position']) && $moose_elated_options['woocommerce_product_list_content_position'] == 'content_above_product_list') { ?>
											<div class="page-decription_holder">
												<?php moose_elated_woocommerce_content_before(); ?>
											</div>
										<?php }	?>
										<?php moose_elated_woocommerce_content(); ?>
									</div>
								</div>
							</div>
					<?php endif; ?>
                <?php } else {
						moose_elated_woocommerce_content();
                } ?>
			</div>
			<?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
				</div></div>
			<?php } ?>
		</div>
	<?php get_footer(); ?>