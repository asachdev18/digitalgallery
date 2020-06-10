<?php if(moose_elated_is_cpt_installed()){ ?>
	<div>
		<?php echo do_shortcode('[no_social_share]'); // XSS OK ?>
	</div>
<?php } ?>