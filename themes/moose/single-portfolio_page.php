<?php

//init variables
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_page_id = moose_elated_get_page_id();
$moose_elated_portfolio_template = 'small-images';

//is portfolio template set for current portfolio?
if(get_post_meta($moose_elated_page_id, "eltd_choose-portfolio-single-view", true) != "") {
	$moose_elated_portfolio_template = get_post_meta($moose_elated_page_id, "eltd_choose-portfolio-single-view", true);
} elseif($moose_elated_options['portfolio_style'] !== '') {
	//get default portfolio template if set in theme's options
	$moose_elated_portfolio_template = $moose_elated_options['portfolio_style'];
}
?>

<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'title' ); ?>
			<?php get_template_part('slider'); ?>

			<?php

			//is current portfolio template full width?
			if($moose_elated_portfolio_template !== 'full-width-custom') {
				//load general portfolio structure which will load proper template
				get_template_part('templates/portfolio/portfolio-structure');
			} else {
				//load custom full width template that doesn't have anything in common with other
				get_template_part('templates/portfolio/portfolio', $moose_elated_portfolio_template);
			}
			?>
		<?php endwhile; ?>
	<?php endif; ?>	
<?php get_footer(); ?>	