<?php
$moose_elated_page_id = moose_elated_get_page_id();
$moose_elated_slider_shortcode = get_post_meta($moose_elated_page_id, "eltd_revolution-slider", true);
if (!empty($moose_elated_slider_shortcode)) { ?>
	<div class="eltd_slider">
		<div class="eltd_slider_inner">
			<?php echo do_shortcode(wp_kses_post($moose_elated_slider_shortcode)); // XSS OK ?>
		</div>
	</div>
<?php } ?>