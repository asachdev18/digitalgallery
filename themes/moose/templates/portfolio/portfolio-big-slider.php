<?php
//get global variables
global $wp_query;
global $moose_elated_options;
global $wpdb;

//init variables
$portfolio_images 			= get_post_meta(get_the_ID(), "eltd_portfolio_images", true);
$lightbox_single_project 	= 'no';
$portfolio_title_tag            = 'h5';
$portfolio_title_style          = '';


//is lightbox turned on for single project?
if (isset($moose_elated_options['lightbox_single_project'])) {
	$lightbox_single_project = $moose_elated_options['lightbox_single_project'];
}

//set title tag
if (isset($moose_elated_options['portfolio_title_tag']) && $moose_elated_options['portfolio_title_tag'] !== "") {
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

//sort portfolio images by user defined input
if (is_array($portfolio_images)){
	usort($portfolio_images, "moose_elated_compare_portfolio_images");
}
?>

<div class="flexslider">
	<ul class="slides">
		<?php
        $portfolio_m_images = get_post_meta(get_the_ID(), "eltd_portfolio-image-gallery", true);
        if ($portfolio_m_images){
            $portfolio_image_gallery_array=explode(',',$portfolio_m_images);
            foreach($portfolio_image_gallery_array as $gimg_id){
                $title = get_the_title($gimg_id);
                $alt = get_post_meta($gimg_id, '_wp_attachment_image_alt', true);
                $image_src = wp_get_attachment_image_src( $gimg_id, 'full' );
                if (is_array($image_src)) $image_src = $image_src[0];
                ?>
                <li class="slide">
                    <img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($alt); ?>" />
                </li>
            <?php
            }
        }

        if (is_array($portfolio_images) && count($portfolio_images)){
			foreach($portfolio_images as $portfolio_image){
				?>

				<?php if($portfolio_image['portfolioimg'] != ""){ ?>
					<?php

					list($id, $title, $alt) = moose_elated_get_portfolio_image_meta($portfolio_image['portfolioimg']);

					?>
					<li class="slide">
						<img src="<?php echo esc_url($portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr($alt); ?>" />
					</li>
				<?php }else{ ?>

					<?php
					$portfolio_video_type = "";
					if (isset($portfolio_image['portfoliovideotype'])) $portfolio_video_type = $portfolio_image['portfoliovideotype'];
					switch ($portfolio_video_type){
						case "youtube": ?>
							<li class="slide">
								<iframe width="100%" src="//www.youtube.com/embed/<?php echo esc_attr($portfolio_image['portfoliovideoid']);  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
							</li>
							<?php	break;
						case "vimeo": ?>
							<li class="slide">
								<iframe src="//player.vimeo.com/video/<?php echo esc_attr($portfolio_image['portfoliovideoid']);  ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</li>
							<?php break;
						case "self": ?>
							<div class="video">
								<div class="mobile-video-image" style="background-image: url(<?php echo esc_url($portfolio_image['portfoliovideoimage']); ?>);"></div>
								<div class="video-wrap"  >
									<video class="video" poster="<?php echo esc_url($portfolio_image['portfoliovideoimage']); ?>" preload="auto">
										<?php if(!empty($portfolio_image['portfoliovideowebm'])) { ?> <source type="video/webm" src="<?php echo esc_url($portfolio_image['portfoliovideowebm']); ?>"> <?php } ?>
										<?php if(!empty($portfolio_image['portfoliovideomp4'])) { ?> <source type="video/mp4" src="<?php echo esc_url($portfolio_image['portfoliovideomp4']); ?>"> <?php } ?>
										<?php if(!empty($portfolio_image['portfoliovideoogv'])) { ?> <source type="video/ogg" src="<?php echo esc_url($portfolio_image['portfoliovideoogv']); ?>"> <?php } ?>
										<object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>">
											<param name="movie" value="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>" />
											<param name="flashvars" value="controls=true&file=<?php echo esc_url($portfolio_image['portfoliovideomp4']); ?>" />
											<img src="<?php echo esc_url($portfolio_image['portfoliovideoimage']); ?>" width="1920" height="800" title="<?php esc_attr_e( 'No video playback capabilities', 'moose' ); ?>" alt="<?php esc_attr_e( 'Video thumb', 'moose' ); ?>" />
										</object>
									</video>
								</div></div>
						<?php break;
					}
				}
			}
		}
		?>
	</ul>
</div>
<div class="portfolio_social_section">
	<?php

	//get portfolio share section
	get_template_part('templates/portfolio/parts/portfolio-social');

	//get portfolio print section
	get_template_part('templates/portfolio/parts/portfolio-print');

	//get portfolio like section
	get_template_part('templates/portfolio/parts/portfolio-like');

	?>
</div>
<div class="two_columns_75_25 clearfix portfolio_container">
	<div class="column1">
		<div class="column_inner">
			<div class="portfolio_single_text_holder">
				<<?php echo esc_attr($portfolio_title_tag); ?> class="portfolio_single_text_title" <?php moose_elated_inline_style($portfolio_title_style); ?>><span><?php esc_html_e("Project Description", 'moose') ?></span></<?php echo esc_attr($portfolio_title_tag); ?>>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<div class="column2">
		<div class="column_inner">
			<div class="portfolio_detail portfolio_single_follow">
			<h5 class="portfolio_detail_text_title"><?php esc_html_e("Project Details", 'moose') ?></h5>
				<?php

					//get portfolio date section
					get_template_part('templates/portfolio/parts/portfolio-date');

					//get portfolio categories section
					get_template_part('templates/portfolio/parts/portfolio-categories');

					//get portfolio tags section
					get_template_part('templates/portfolio/parts/portfolio-tags');	

					//get portfolio custom fields section
					get_template_part('templates/portfolio/parts/portfolio-custom-fields');		
					
				?>
			</div>
		</div>
	</div>
</div>