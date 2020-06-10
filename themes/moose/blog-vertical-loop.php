<?php
/*
Template Name: Blog: Vertical Loop
*/
?>
<?php get_header(); ?>
<?php
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_page_id = moose_elated_get_page_id();

if(get_post_meta($moose_elated_page_id, "eltd_page_background_color", true) != ""){
    $moose_elated_background_color = 'background-color: '.esc_attr(get_post_meta($moose_elated_page_id, "eltd_page_background_color", true));
}else{
    $moose_elated_background_color = "";
}

$moose_elated_content_style = "";
if(get_post_meta($moose_elated_page_id, "eltd_content-top-padding", true) != ""){
    if(get_post_meta($moose_elated_page_id, "eltd_content-top-padding-mobile", true) == 'yes'){
        $moose_elated_content_style = "padding-top:".esc_attr(get_post_meta($moose_elated_page_id, "eltd_content-top-padding", true))."px !important";
    }else{
        $moose_elated_content_style = "padding-top:".esc_attr(get_post_meta($moose_elated_page_id, "eltd_content-top-padding", true))."px";
    }
}

if(isset($moose_elated_options['blog_vertical_loop_type_number_of_chars']) && $moose_elated_options['blog_vertical_loop_type_number_of_chars'] != "") {
    moose_elated_set_blog_word_count(esc_attr($moose_elated_options['blog_vertical_loop_type_number_of_chars']));
}

?>
    <div class="full_width blog_vertical_loop" <?php moose_elated_inline_style($moose_elated_background_color); ?>>
        <div class="full_width_inner" <?php moose_elated_inline_style($moose_elated_content_style); ?>>
            <div class="blog_holder blog_vertical_loop_type">

                    <?php get_template_part('templates/blog/blog_vertical', 'loop'); ?>

            </div>
        </div>
    </div>
<?php get_footer(); ?>