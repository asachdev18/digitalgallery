<?php
$moose_elated_options = moose_elated_return_global_options();
extract(moose_elated_get_header_variables());
?>

<?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && moose_elated_is_top_header()) { ?>
	<section class="side_menu right">
		<?php if(isset($moose_elated_options['side_area_title']) && $moose_elated_options['side_area_title'] != "") { ?>
			<div class="side_menu_title">
				<h5><?php echo esc_html($moose_elated_options['side_area_title']) ?></h5>
			</div>
		<?php } ?>
		<div class="close_side_menu_holder">
			<div class="close_side_menu_holder_inner">
				<a href="#" target="_self" class="close_side_menu">
					<span>
                    <i class="line"></i>
					</span>
				</a>
			</div>
		</div>
		<?php if(is_active_sidebar('sidearea')) {
			dynamic_sidebar('sidearea');
		} ?>
	</section>
<?php } ?>