<?php
/*
Template Name: Blog Masonry
*/
?>
<?php get_header(); ?>
<?php
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_page_id = moose_elated_get_page_id();
$moose_elated_sidebar = moose_elated_get_sidebar_layout(false);

$moose_elated_content_position = "content_above_blog_list";
if(isset($moose_elated_options['blog_masonry_content_position'])){
	$moose_elated_content_position = $moose_elated_options['blog_masonry_content_position'];
}

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

if(isset($moose_elated_options['blog_masonry_number_of_chars'])&& $moose_elated_options['blog_masonry_number_of_chars'] != "") {
	moose_elated_set_blog_word_count(esc_attr($moose_elated_options['blog_masonry_number_of_chars']));
}

$moose_elated_category_filter = "no";
if(isset($moose_elated_options['blog_masonry_filter'])){
	$moose_elated_category_filter = $moose_elated_options['blog_masonry_filter'];
}

?>

	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>

	<div class="container" <?php moose_elated_inline_style($moose_elated_background_color); ?>>
		<?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
		<div class="container_inner default_template_holder clearfix" <?php moose_elated_inline_style($moose_elated_content_style); ?>>
			<?php if(($moose_elated_sidebar == "default")||($moose_elated_sidebar == "")) : ?>
				<?php
					the_content();
					get_template_part('templates/blog/blog', 'structure');
				?>
			<?php elseif($moose_elated_sidebar == "1" || $moose_elated_sidebar == "2"): ?>
				<?php
					if($moose_elated_content_position != "content_above_blog_list"){
						the_content();
					}
				?>
				<div class="<?php if($moose_elated_sidebar == "1"):?>two_columns_66_33<?php elseif($moose_elated_sidebar == "2") : ?>two_columns_75_25<?php endif; ?> clearfix grid2 background_color_sidebar">
					<div class="column1 content_left_from_sidebar">
						<div class="column_inner">
							<?php
							if($moose_elated_content_position == "content_above_blog_list"){
								the_content();
							}
							get_template_part('templates/blog/blog', 'structure');
							?>
						</div>
					</div>
					<div class="column2">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php elseif($moose_elated_sidebar == "3" || $moose_elated_sidebar == "4"): ?>
				<?php
					if($moose_elated_content_position != "content_above_blog_list"){
						the_content();
					}
				?>
				<div class="<?php if($moose_elated_sidebar == "3"):?>two_columns_33_66<?php elseif($moose_elated_sidebar == "4") : ?>two_columns_25_75<?php endif; ?> grid2 clearfix background_color_sidebar">
					<div class="column1">
						<?php get_sidebar(); ?>
					</div>
					<div class="column2 content_right_from_sidebar">
						<div class="column_inner">
							<?php
								if($moose_elated_content_position == "content_above_blog_list"){
									the_content();
								}
								get_template_part('templates/blog/blog', 'structure');
							?>
						</div>
					</div>
				</div>
				<?php endif; ?>
		</div>
		<?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
			</div></div>
		<?php } ?>
	</div>
<?php get_footer(); ?>