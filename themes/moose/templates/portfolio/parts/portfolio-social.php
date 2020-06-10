<?php
global $moose_elated_options;
?>

<?php if(isset($moose_elated_options['enable_social_share'])  && $moose_elated_options['enable_social_share'] == "yes") { ?>
	<div class="portfolio_social_holder">
		<?php echo do_shortcode('[no_social_share]'); // XSS OK ?>
	</div> <!-- close div.portfolio_social_holder -->
<?php } ?>