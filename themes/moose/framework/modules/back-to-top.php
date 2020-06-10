<?php
$moose_elated_icon_collections = moose_elated_return_icon_collections();
$moose_elated_options = moose_elated_return_global_options();
extract(moose_elated_get_header_variables());
?>

<?php if($moose_elated_options['show_back_button'] == "yes") { ?>
	<a id='back_to_top' class="<?php echo esc_attr($eltd_back_to_top_button_styles);?>" href='#'>
			<span class="eltd_icon_stack">
				<?php if(isset($moose_elated_options['show_back_button_icon']) && $moose_elated_options['show_back_button_icon']!== '') { ?>
					<span <?php moose_elated_class_attribute($moose_elated_options['show_back_button_icon'])?>></span>
				<?php } else {
					$moose_elated_icon_collections->getBackToTopIcon('font_elegant');
				} ?>
			</span>
	</a>
<?php } ?>