<?php
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_sidebar = moose_elated_get_sidebar_layout(false);
$moose_elated_id      = moose_elated_get_page_id();

$moose_elated_enable_page_comments = false;
if(get_post_meta($moose_elated_id, "eltd_enable-page-comments", true) == 'yes') {
    $moose_elated_enable_page_comments = true;
}

if(get_post_meta($moose_elated_id, "eltd_page_background_color", true) != ""){
    $moose_elated_background_color = 'background-color: '.esc_attr(get_post_meta($moose_elated_id, "eltd_page_background_color", true));
}else{
    $moose_elated_background_color = "";
}

$moose_elated_content_style = "";
if(get_post_meta($moose_elated_id, "eltd_content-top-padding", true) != ""){
    if(get_post_meta($moose_elated_id, "eltd_content-top-padding-mobile", true) == 'yes'){
        $moose_elated_content_style = "padding-top:".esc_attr(get_post_meta($moose_elated_id, "eltd_content-top-padding", true))."px !important";
    }else{
        $moose_elated_content_style = "padding-top:".esc_attr(get_post_meta($moose_elated_id, "eltd_content-top-padding", true))."px";
    }
}

$moose_elated_pagination_classes = '';
if( isset($moose_elated_options['pagination_type']) && $moose_elated_options['pagination_type'] == 'standard' ) {
    if( isset($moose_elated_options['pagination_standard_position']) && $moose_elated_options['pagination_standard_position'] !== '' ) {
        $moose_elated_pagination_classes .= "standard_".esc_attr($moose_elated_options['pagination_standard_position']);
    }
}
elseif ( isset($moose_elated_options['pagination_type']) && $moose_elated_options['pagination_type'] == 'arrows_on_sides' ) {
    $moose_elated_pagination_classes .= "arrows_on_sides";
}

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

?>
        <?php get_header(); ?>
        <?php get_template_part( 'title' ); ?>
        <?php get_template_part('slider'); ?>

        <div class="container"<?php moose_elated_inline_style($moose_elated_background_color); ?>>
        <?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
            <div class="overlapping_content"><div class="overlapping_content_inner">
        <?php } ?>

                <div class="container_inner default_template_holder clearfix" <?php moose_elated_inline_style($moose_elated_content_style); ?>>

            <?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
                </div></div>
            <?php } ?>
        </div>

<div class="spacer"></div>

<div class="container">

	<div class="row">

		<div class="<?php if ( is_active_sidebar( 'rightbar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?>">

			<div class="content">
			
    <div class="vc_row wpb_row section grid_section" style=" padding-top:50px; padding-bottom:45px; text-align:left;">
        <div class=" section_inner clearfix">
            <div class="section_inner_margin clearfix">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="projects_holder_outer v3 portfolio_with_space portfolio_standard ">
                                <div class="filter_outer filter_portfolio center_align">
                                    <div class="filter_holder without_separator">
                                         <ul>   
                                            <li class="filter active" data-filter="all"><span>Show All</span></li>                             
        	      <?php 
		          $unique_categories = array();
		          $FlexEvents = new WP_Query(array(
		            "posts_per_page" => -1,
		            "post_type" => array("Mobile Apps"),
		            "orderby" => "title",
		            "order" => "ASC",
		              )
		            );
		          while ($FlexEvents -> have_posts()) {
		            $FlexEvents -> the_post(); 
                        $unique_categories[] = get_field("theme_category");
                    };

                    $unique_categories = array_unique($unique_categories);

                    foreach ($unique_categories as $unique_category) {
                    ?>
                                <li class="filter active" data-filter="<?php echo $unique_category; ?>"><span><?php echo $unique_category; ?></span></li>
                    <?php } wp_reset_query();?>
                                    </ul>
                                </div>
                            </div>
                        <div class="portfolio_main_holder projects_holder slide_from_top  clearfix v3 standard hideItems" style="">                            
                  <?php 
                  
                  $FlexEvents = new WP_Query(array(
                    "posts_per_page" => -1,
                    "post_type" => array("Mobile Apps"),
                    "orderby" => "title",
                    "order" => "ASC",
                      )
                    );
                  while ($FlexEvents -> have_posts()) {
                    $FlexEvents -> the_post();   

                    $attachment_id = get_field("theme_image");
                    $thumb_size = "grid-thumbnail";
                    $full_size = "full";
                    $thumb_image = wp_get_attachment_image_src( $attachment_id, $thumb_size );
                    $full_image = wp_get_attachment_image_src( $attachment_id, $full_size );                    
                    ?>
                    <article class="mix  without_box_shadow portfolio_category_85 portfolio_category_101  mix_all show <?php echo get_field("theme_category"); ?>" data-category="<?php echo get_field("theme_category"); ?>" style="display: inline-block; opacity: 1; visibility: visible;">
                    <?php if( get_field('theme_ribbon_label') ) { ?>
                        <div class="row_badge">
                            <span class="badge_icon"></span>
                            <span class="badge_text"><?php echo get_field("theme_ribbon_label"); ?></span>
                            <span class="row_badge_triangle"></span>
                        </div>
                    <?php } ?>    
                        <div class="item_holder thin_plus_only">
                            <div class="text_holder">
                                <div class="text_holder_outer">
                                    <div class="text_holder_inner">
                                        <span class="thin_plus_only_icon">+</span>
                                    </div>
                                </div>
                            </div>
                            <a class="portfolio_link_class" title="<?php the_title(); ?>" href="<?php echo $full_image[0]; ?>" data-rel="prettyPhoto"></a>
                            <div class="portfolio_shader"></div>
                            <div class="image_holder" style="background-image:url('<?php echo $thumb_image[0]; ?>'); background-position: center top;">
                                <span class="image">
                                    <img width="550" height="550" src="<?php echo $thumb_image[0]; ?>" class="attachment-eltd-moose-portfolio-square size-eltd-moose-portfolio-square wp-post-image" alt="m" srcset="<?php echo $thumb_image[0]; ?> 550w" sizes="(max-width: 550px) 100vw, 550px">
                                </span>
                            </div>
                        </div>
                        <div class="portfolio_description  text_align_center">
                            <h4 class="portfolio_title">
                                <a href="#" target="_self"><?php the_title(); ?></a>
                            </h4>
                            <span class="project_category"><?php echo get_field("theme_category"); ?></span>
                            <a data-fancybox data-animation-duration="500" data-src="#<?php echo 'modal-'.get_the_ID() ?>" href="javascript:;" class="qbutton  small transparent qbutton_with_icon icon_right rotate_icon animate_button">
                                <span class="text_holder"><span class="a_overlay" style=""></span><span>Theme Details</span><span style="" class="hidden_text">theme details</span></span>
                                <span class="icon_holder" style=""><span style="">
                                    <i class="eltd_icon_simple_line_icon icon-check button_icon" style=""></i></span>
                                        <span style="" class="hidden_icon"><i class="eltd_icon_simple_line_icon icon-check button_icon" style=" "></i></span>                                    
                                </span>
                            </a>
                            <a href="<?php echo get_field("theme_link"); ?>" target="_blank" class="qbutton  small qbutton_with_icon icon_right rotate_icon animate_button" style="">
                                <span class="text_holder"><span class="a_overlay" style=""></span>
                                <span>Browse</span>
                                <span style="" class="hidden_text">Browse</span></span>
                                <span class="icon_holder" style="">
                                    <span style="">
                                        <i class="eltd_icon_simple_line_icon icon-eye button_icon" style=""></i></span>
                                        <span style="" class="hidden_icon"><i class="eltd_icon_simple_line_icon icon-eye button_icon" style=""></i></span>
                                    </span>
                                </a>                                                       
                        </div>
                        <div class="hidden_details" style="display: none;">
                            <div id="<?php echo 'modal-'.get_the_id(); ?>" class="eltd_tabs horizontal tab_with_text_and_icon left with_borders border_arround_element disable_margin" style="visibility: visible;">
                                <ul class="tabs-nav">
                                    <li class="active">
                                        <a href="#tab-graphic-<?php echo get_the_id(); ?>">
                                            <span class="icon_frame">
                                                <i class="menu_icon icon-picture fa"></i>
                                            </span>
                                            <span class="tab_text_after_icon">Graphic Requirements</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#tab-web-feat-<?php echo get_the_id(); ?>">
                                            <span class="icon_frame">
                                                <i class="menu_icon icon-layers fa"></i>
                                            </span>
                                            <span class="tab_text_after_icon">Website Features</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#tab-reg-feat-<?php echo get_the_id(); ?>">
                                            <span class="icon_frame">
                                                <i class="menu_icon icon-settings fa"></i>
                                            </span>
                                            <span class="tab_text_after_icon">Registration Features</span>
                                        </a>
                                    </li>
                                </ul>

                            <div class="tabs-container">
                                <div id="tab-graphic-<?php echo get_the_id(); ?>" class="tab-content" style="display: block;">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <?php echo get_field("graphic_requirements"); ?>
                                        </div> 
                                    </div> 
                                </div> 
                                <div id="tab-web-feat-<?php echo get_the_id(); ?>" class="tab-content" style="display: none;">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <?php echo get_field("website_features"); ?>
                                        </div> 
                                    </div> 
                                </div> 
                                <div id="tab-reg-feat-<?php echo get_the_id(); ?>" class="tab-content" style="display: none;">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <?php echo get_field("registration_features"); ?>
                                        </div> 
                                    </div> 
                                </div>
                            </div>
                            <p class="pop-up-btn-holder">
                                <a href="<?php echo get_field("theme_link"); ?>" target="_blank" class="qbutton  small qbutton_with_icon icon_right rotate_icon animate_button" style="text-align: center; margin: auto;">
                                    <span class="text_holder"><span class="a_overlay" style=""></span>
                                    <span>Browse Theme</span>
                                    <span style="" class="hidden_text">Browse</span></span>
                                    <span class="icon_holder" style="">
                                        <span style="">
                                            <i class="eltd_icon_simple_line_icon icon-eye button_icon" style="font-size: 12px; "></i></span>
                                            <span style="" class="hidden_icon"><i class="eltd_icon_simple_line_icon icon-eye button_icon" style="font-size: 12px; "></i></span>
                                        </span>
                                </a>
                            </p>                             
                        </div>
                    </div>
                </article>

                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

			
			 <?php //endwhile;?>

			 <?php //endif; ?>
			

			</div>

		</div>

		<?php //get_sidebar(); ?>

	</div>

</div>

<?php get_footer(); ?>