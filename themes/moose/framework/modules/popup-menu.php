<?php
	$moose_elated_options = moose_elated_return_global_options();
	extract(moose_elated_get_header_variables());
?>
<?php if($enable_popup_menu == "yes") {
	?>
	<div class="popup_menu_holder_outer">
		<div class="popup_menu_holder">
			<div class="popup_menu_holder_inner">
				<?php if (isset($moose_elated_options['popup_in_grid']) && $moose_elated_options['popup_in_grid'] == "yes") { ?>
				<div class = "container_inner">
					<?php } ?>
					
					<?php if(is_active_sidebar('fullscreen_above_menu')) { ?>
						<div class="fullscreen_above_menu_widget_holder"><?php dynamic_sidebar('fullscreen_above_menu'); ?></div>
					<?php } ?>
					<nav class="popup_menu">
						<?php
						wp_nav_menu( array( 'theme_location' => 'popup-navigation' ,
						                    'container'  => '',
						                    'container_class' => '',
						                    'menu_class' => '',
						                    'menu_id' => '',
						                    'fallback_cb' => 'top_navigation_fallback',
						                    'link_before' => '<span>',
						                    'link_after' => '</span>',
						                    'walker' => new MooseElatedType3WalkerNavMenu()
						             ));
						?>
					</nav>
					<?php if(is_active_sidebar('fullscreen_menu')) { ?>
						<div class="fullscreen_menu_widget_holder"><?php dynamic_sidebar('fullscreen_menu'); ?></div>
					<?php } ?>
					<?php if (isset($moose_elated_options['popup_in_grid']) && $moose_elated_options['popup_in_grid'] == "yes") { ?>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>