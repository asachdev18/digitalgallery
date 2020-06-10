<?php
$moose_elated_options = moose_elated_return_global_options();
extract(moose_elated_get_header_variables());
?>

<?php if($loading_animation){ ?>
	<div class="ajax_loader">
		<div class="ajax_loader_1">
			<?php if($loading_image != "") { ?>
				<div class="ajax_loader_2">
					<img src="<?php echo esc_url($loading_image); ?>" alt="<?php esc_html_e('Ajax Loading Image', 'moose') ?>" />
				</div>
			<?php } else {
				moose_elated_loading_spinners();
			} ?>
		</div>
	</div>
<?php } ?>