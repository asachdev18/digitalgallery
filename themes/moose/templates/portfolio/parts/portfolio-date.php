<?php
global $moose_elated_options;

//get portfolio date value
$portfolio_hide_date = "";
if(isset($moose_elated_options['portfolio_hide_date'])){
	$portfolio_hide_date = $moose_elated_options['portfolio_hide_date'];
}

if($portfolio_hide_date != "yes"){

    $portfolio_info_tag             = 'h6';
    $portfolio_info_style           = '';

    //set info tag
    if (isset($moose_elated_options['portfolio_info_tag']) && $moose_elated_options['portfolio_title_tag'] != "" ) {
    	$portfolio_info_tag = $moose_elated_options['portfolio_info_tag'];
    }

    //set style for info
    if ((isset($moose_elated_options['portfolio_info_margin_bottom']) && $moose_elated_options['portfolio_info_margin_bottom'] != '')
    || (isset($moose_elated_options['portfolio_info_color']) && !empty($moose_elated_options['portfolio_info_color']))) {

		if (isset($moose_elated_options['portfolio_info_margin_bottom']) && $moose_elated_options['portfolio_info_margin_bottom'] != '') {
			$portfolio_info_style .= 'margin-bottom:' . esc_attr($moose_elated_options['portfolio_info_margin_bottom']) . 'px;';
		}

		if (isset($moose_elated_options['portfolio_info_color']) && !empty($moose_elated_options['portfolio_info_color'])) {
			$portfolio_info_style .= 'color:'.esc_attr($moose_elated_options['portfolio_info_color']).';';
		}

    }

   ?>


	<div class="info portfolio_single_custom_date clearfix">
		<<?php echo esc_attr($portfolio_info_tag); ?> class="info_section_title" <?php moose_elated_inline_style($portfolio_info_style); ?>><?php esc_html_e('Date','moose'); ?></<?php echo esc_attr($portfolio_info_tag); ?>>
        <p><?php the_time(get_option('date_format')); ?></p>
	</div>
<?php } ?>