<?php
	$moose_elated_icon_collections = moose_elated_return_icon_collections();
	$moose_elated_options = moose_elated_return_global_options();
	extract(moose_elated_get_header_variables());
?>
<?php if(moose_elated_is_side_header()) { ?>
	<aside class="vertical_menu_area<?php echo esc_attr($vertical_area_scroll); ?> <?php echo esc_attr($header_style); ?>">
		<div class="vertical_menu_area_inner">
			<div class="scroll_area">
				<?php if(isset($moose_elated_options['vertical_area_type']) && ($moose_elated_options['vertical_area_type'] == 'hidden' || $moose_elated_options['vertical_area_type'] == 'hidden_with_icons')) { ?>
					<a href="#" class="vertical_menu_hidden_button">
						<span class="vertical_menu_hidden_button_line"></span>
					</a>
				<?php } ?>
				<div class="vertical_area_background <?php if($vertical_area_background_image != ""){ echo "preload_background";  } ?>" <?php echo 'style="'.esc_attr($bkg_image).esc_attr($page_vertical_area_background_transparency_style).esc_attr($page_vertical_area_background_style).'"'; ?>></div>
				
				
				<?php if (!(isset($moose_elated_options['show_logo']) && $moose_elated_options['show_logo'] == "no")){ ?>
					<div class="vertical_logo_wrapper">
						<?php
						if (isset($moose_elated_options['logo_image']) && $moose_elated_options['logo_image'] != ""){ $logo_image = $moose_elated_options['logo_image'];}else{ $logo_image =  get_template_directory_uri().'/img/logo.png'; };
						if (isset($moose_elated_options['logo_image_light']) && $moose_elated_options['logo_image_light'] != ""){ $logo_image_light = $moose_elated_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
						if (isset($moose_elated_options['logo_image_dark']) && $moose_elated_options['logo_image_dark'] != ""){ $logo_image_dark = $moose_elated_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };
						
						?>
						<div class="eltd_logo_vertical" style="height: <?php echo esc_attr(intval($moose_elated_options['logo_height'])/2); ?>px;">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img class="normal" src="<?php echo esc_url($logo_image); ?>" alt="<?php esc_attr_e( 'Logo', 'moose' ); ?>"/>
								<img class="light" src="<?php echo esc_url($logo_image_light); ?>" alt="<?php esc_attr_e( 'Logo', 'moose' ); ?>"/>
								<img class="dark" src="<?php echo esc_url($logo_image_dark); ?>" alt="<?php esc_attr_e( 'Logo', 'moose' ); ?>"/>
							</a>
						</div>
					
					</div>
				<?php } ?>
				
				<nav class="vertical_menu dropdown_animation vertical_menu_<?php echo esc_attr($vertical_menu_style); ?> <?php echo esc_attr($vertical_area_menu_items_arrow); ?>">
					<?php
					
					wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
					                    'container'  => '',
					                    'container_class' => '',
					                    'menu_class' => '',
					                    'menu_id' => '',
					                    'fallback_cb' => 'top_navigation_fallback',
					                    'link_before' => '<span>',
					                    'link_after' => '</span>',
					                    'walker' => new MooseElatedType1WalkerNavMenu()
					             ));
					?>
				</nav>
				
				<div class="vertical_menu_area_icons_holder">
					
					
					
					<?php if(isset($moose_elated_options['enable_vertical_menu_cart']) && $moose_elated_options['enable_vertical_menu_cart'] == 'yes') { ?>
						<div class="vertical_menu_cart">
							<?php the_widget('MooseElatedWoocommerceDropdownCart'); ?>
						</div>
					<?php } ?>
					
					<?php if(isset($moose_elated_options['enable_search']) && $moose_elated_options['enable_search'] == 'yes') { ?>
						<div class="vertical_menu_search">
							<a class="fullscreen_search  <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
								<?php if(isset($moose_elated_options['search_icon_pack'])){
									$moose_elated_icon_collections->getSearchIcon($moose_elated_options['search_icon_pack']);
								} ?>
								<?php if(isset($moose_elated_options['enable_search_icon_text']) && $moose_elated_options['enable_search_icon_text'] == 'yes'){?>
									<span class="search_icon_text">
											<?php esc_html_e('Search', 'moose'); ?>
										</span>
								<?php } ?>
							</a>
						</div>
					<?php } ?>
				
				
				
				</div>
				
				<div class="vertical_menu_area_widget_holder">
					<?php if(is_active_sidebar('vertical_menu_area')) {
						dynamic_sidebar('vertical_menu_area');
					} ?>
				</div>
			</div>
		</div>
	</aside>
	<?php if((isset($moose_elated_options['vertical_area_type']) && ($moose_elated_options['vertical_area_type'] == 'hidden' || $moose_elated_options['vertical_area_type'] == 'hidden_with_icons')) &&
	         (isset($moose_elated_options['vertical_logo_bottom']) && $moose_elated_options['vertical_logo_bottom'] !== '')) { ?>
		<div class="vertical_menu_area_bottom_logo">
			<div class="vertical_menu_area_bottom_logo_inner">
				<a href="javascript: void(0)">
					<img src="<?php echo esc_url($moose_elated_options['vertical_logo_bottom']); ?>" alt="<?php esc_attr_e( 'vertical_menu_area_bottom_logo', 'moose' ); ?>"/>
				</a>
			</div>
		</div>
	<?php } ?>

<?php } ?>