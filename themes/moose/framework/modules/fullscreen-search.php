<?php
$moose_elated_icon_collections = moose_elated_return_icon_collections();
$moose_elated_options = moose_elated_return_global_options();
extract(moose_elated_get_header_variables());
?>
<?php if($enable_fullscreen_search=="yes"){ ?>
	<div class="fullscreen_search_holder <?php echo esc_attr($fullscreen_search_animation); echo esc_attr($fullscreen_search_in_header_top);?>">
		<div class="close_container">
			<?php if($header_in_grid){ ?>
			<div class="container">
				<div class="container_inner clearfix" >
					<?php } ?>
					<div class="search_close_holder">
						<div class="side_menu_button">
							<a class="fullscreen_search_close" href="javascript:void(0)">
								<?php if(isset($moose_elated_options['header_icon_pack'])) { $moose_elated_icon_collections->getSearchClose($moose_elated_options['header_icon_pack']); } ?>
							</a>
							<?php if($header_bottom_appearance!="fixed fixed_minimal"){?>
								<?php if($enable_popup_menu == "yes"){ ?>
									<a href="javascript:void(0)" class="popup_menu <?php echo esc_attr($header_button_size.' '.$popup_menu_animation_style); ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
								<?php } ?>
								<?php if($enable_side_area == "yes" && $enable_popup_menu == 'no'){ ?>
									<a href="javascript:void(0)" class="side_menu_button_link custom_lines <?php echo esc_attr($header_button_size); ?>"><span class="custom_lines_inner"><i class="line">&nbsp;</i></span></a>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
					<?php if($header_in_grid){ ?>
				</div>
			</div>
		<?php } ?>
		</div>
		<div class="fullscreen_search_table">
			<div class="fullscreen_search_cell">
				<div class="fullscreen_search_inner">
					<form role="search" action="<?php echo esc_url(home_url('/')); ?>" class="fullscreen_search_form" method="get">
						<div class="form_holder">
							<span class="search_label"><?php esc_html_e('Search:', 'moose'); ?></span>
							<div class="field_holder">
								<input type="text"  name="s" class="search_field" autocomplete="off" />
								<div class="line"></div>
							</div>
							<input type="submit" class="search_submit" value="&#x55;" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } ?>