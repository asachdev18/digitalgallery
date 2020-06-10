<?php
/*
Template Name: Blog Masonry Gallery Full Width
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

if(isset($moose_elated_options['blog_masonry_gallery_number_of_chars'])&& $moose_elated_options['blog_masonry_gallery_number_of_chars'] != "") {
	moose_elated_set_blog_word_count(esc_attr($moose_elated_options['blog_masonry_gallery_number_of_chars']));
}
$moose_elated_category_filter = "no";
if(isset($moose_elated_options['blog_masonry_gallery_filter'])){
	$moose_elated_category_filter = $moose_elated_options['blog_masonry_gallery_filter'];
}
$moose_elated_container_inner_class = "";
if($moose_elated_category_filter == "yes"){
	$moose_elated_container_inner_class = " full_page_container_inner";
}
?>
	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>

	<div class="full_width" <?php moose_elated_inline_style($moose_elated_background_color); ?>>
		<div class="full_width_inner clearfix <?php echo esc_attr($moose_elated_container_inner_class); ?>" <?php moose_elated_inline_style($moose_elated_content_style); ?>>
			<?php
				the_content();
				get_template_part('templates/blog/blog', 'structure');
			?>
		</div>
	</div>
<?php get_footer(); ?>