<?php

global $moose_elated_options;

$portfolio_title_tag            = 'h5';
$portfolio_title_style          = '';

//set title tag
if (isset($moose_elated_options['portfolio_title_tag'])  && $moose_elated_options['portfolio_title_tag'] !== "" ) {
$portfolio_title_tag = $moose_elated_options['portfolio_title_tag'];
}

//set style for title
if ((isset($moose_elated_options['portfolio_title_margin_bottom']) && $moose_elated_options['portfolio_title_margin_bottom'] != '')
	|| (isset($moose_elated_options['portfolio_title_color']) && !empty($moose_elated_options['portfolio_title_color']))){

	if (isset($moose_elated_options['portfolio_title_margin_bottom']) && $moose_elated_options['portfolio_title_margin_bottom'] != '') {
		$portfolio_title_style .= 'margin-bottom:'.esc_attr($moose_elated_options['portfolio_title_margin_bottom']).'px;';
	}

	if (isset($moose_elated_options['portfolio_title_color']) && !empty($moose_elated_options['portfolio_title_color'])) {
		$portfolio_title_style .= 'color:'.esc_attr($moose_elated_options['portfolio_title_color']).';';
	}

}

?>
<<?php echo esc_attr($portfolio_title_tag); ?> class="portfolio_single_text_title" <?php moose_elated_inline_style($portfolio_title_style); ?>><span><?php esc_html_e("Project Description", 'moose') ?></span></<?php echo esc_attr($portfolio_title_tag); ?>>
<div class="info portfolio_single_content">
	<?php the_content(); ?>
</div> <!-- close div.portfolio_content -->