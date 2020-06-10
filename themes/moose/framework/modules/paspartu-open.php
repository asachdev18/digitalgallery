<?php
$moose_elated_icon_collections = moose_elated_return_icon_collections();
$moose_elated_options = moose_elated_return_global_options();
extract(moose_elated_get_header_variables());
?>
<?php
if(isset($moose_elated_options['paspartu']) && $moose_elated_options['paspartu'] == 'yes') { ?>


<div class="paspartu_outer <?php echo esc_attr($paspartu_additional_classes); ?>">
	<?php if(moose_elated_is_side_header() && isset($moose_elated_options['vertical_menu_inside_paspartu']) && $moose_elated_options['vertical_menu_inside_paspartu'] == 'no') { ?>
	<div class="paspartu_middle_inner">
<?php }?>
	
	<?php if((isset($moose_elated_options['paspartu_on_top']) && $moose_elated_options['paspartu_on_top'] == 'yes' && isset($moose_elated_options['paspartu_on_top_fixed']) && $moose_elated_options['paspartu_on_top_fixed'] == 'yes') ||
	         (moose_elated_is_side_header() && isset($moose_elated_options['vertical_menu_inside_paspartu']) && $moose_elated_options['vertical_menu_inside_paspartu'] == 'yes')){ ?>
		<div class="paspartu_top"></div>
	<?php }?>
	<div class="paspartu_left"></div>
	<div class="paspartu_right"></div>
	<div class="paspartu_inner">
	<?php
}
?>