<?php
/*
Template Name: Full Screen Sections
*/
?>
<?php
$moose_elated_id = moose_elated_get_page_id();

$moose_elated_full_screen_holder_style = "";

if(get_post_meta($moose_elated_id, "eltd_page_background_color", true) != ""){
    $moose_elated_full_screen_holder_style .= "background-color:".esc_attr(get_post_meta($moose_elated_id, "eltd_page_background_color", true)).";";
}else{
    $moose_elated_full_screen_holder_style .= "";
}

$moose_elated_header_bottom_appearance = 'regular';
if(isset($moose_elated_options['header_bottom_appearance'])){
    $moose_elated_header_bottom_appearance = $moose_elated_options['header_bottom_appearance'];
}

$moose_elated_enable_vertical_menu = false;
if(moose_elated_is_side_header()){
    $moose_elated_enable_vertical_menu = true;
}

$moose_elated_content_style = "";
if(get_post_meta($moose_elated_id, "eltd_content-top-padding", true) != ""){
    if(get_post_meta($moose_elated_id, "eltd_content-top-padding-mobile", true) == 'yes'){
        $moose_elated_content_style = "padding-top:".esc_attr(get_post_meta($moose_elated_id, "eltd_content-top-padding", true))."px !important";
    }else{
        $moose_elated_content_style = "padding-top:".esc_attr(get_post_meta($moose_elated_id, "eltd_content-top-padding", true))."px";
    }
}

$moose_elated_fs_navigation_type = "";
if(isset($moose_elated_options['fs_navigation_slider_vertical_section_type'])){
    $moose_elated_fs_navigation_type = $moose_elated_options['fs_navigation_slider_vertical_section_type'];
}

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

?>
<?php get_header(); ?>
    <div class="full_screen_preloader">
        <?php
        if($moose_elated_options['loading_animation'] == "on") {
            if($moose_elated_options['loading_image'] != "") { ?>
                <div class="ajax_loader"><div class="ajax_loader_1"><div class="ajax_loader_2"><img src="<?php echo esc_url($moose_elated_options['loading_image']) ?>" alt="<?php esc_html_e('Ajax Loading Image', 'moose') ?>" /></div></div></div>
            <?php }
            else { ?>
                <div class="ajax_loader"><div class="ajax_loader_1"><?php moose_elated_loading_spinners(); ?></div></div>
            <?php }
        }
        ?>
    </div>

    <div class="full_screen_holder"<?php moose_elated_inline_style($moose_elated_full_screen_holder_style); ?>>
        <div class="full_screen_inner" <?php moose_elated_inline_style($moose_elated_content_style); ?>>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>

        </div>
        <?php if($moose_elated_fs_navigation_type == '' || $moose_elated_fs_navigation_type == 'arrows' || $moose_elated_fs_navigation_type == 'both'){ ?>
            <div class="full_screen_navigation_holder">
                <div class="full_screen_navigation_inner">
                    <a id="up_fs_button" href="#" target="_self"><span class='arrow_carrot-up'></span></a>
                    <a id="down_fs_button" href="#" target="_self"><span class='arrow_carrot-down'></span></a>
                </div>
            </div>
        <?php } ?>
    </div>

<?php get_footer(); ?>