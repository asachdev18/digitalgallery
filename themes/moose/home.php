<?php get_header(); ?>
<?php
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_page_id = moose_elated_get_page_id();
$moose_elated_sidebar = moose_elated_get_sidebar_layout();

if(get_post_meta($moose_elated_page_id, "eltd_page_background_color", true) != ""){
	$moose_elated_background_color = 'background-color: '.esc_attr(get_post_meta($moose_elated_page_id, "eltd_page_background_color", true));
}else{
	$moose_elated_background_color = "";
}

?>

	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>

<?php if(isset($moose_elated_options['blog_style']) && ($moose_elated_options['blog_style'] == 4 || $moose_elated_options['blog_style'] == 13 || $moose_elated_options['blog_style'] == 15)){
		$moose_elated_blog_style_class = '';
		 if($moose_elated_options['blog_style'] == 4){
			$moose_elated_blog_style_class = ' blog_masonry_full_width_template';
		}elseif($moose_elated_options['blog_style'] == 15){
			$moose_elated_blog_style_class = ' blog_masonry_gallery_full_width_template';
		}?>
	<div class="full_width <?php echo esc_attr($moose_elated_blog_style_class)?> ">
		<div class="full_width_inner">

			<?php
			get_template_part('templates/blog/blog-structure', 'loop');
			?>

		</div>
	</div>

	<?php } else { ?>

	<div class="container"<?php moose_elated_inline_style($moose_elated_background_color); ?>>
		<?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
		<div class="container_inner default_template_holder clearfix">
			<?php if(($moose_elated_sidebar == "default")||($moose_elated_sidebar == "")) : ?>
				<?php
					get_template_part('templates/blog/blog', 'structure');
				?>
			<?php elseif($moose_elated_sidebar == "1" || $moose_elated_sidebar == "2"): ?>
				<div class="<?php if($moose_elated_sidebar == "1"):?>two_columns_66_33<?php elseif($moose_elated_sidebar == "2") : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
					<div class="column1 content_left_from_sidebar">
						<div class="column_inner">
							<?php
								get_template_part('templates/blog/blog', 'structure');
							?>
						</div>
					</div>
					<div class="column2">
						<?php get_sidebar(); ?>
					</div>
				</div>
		<?php elseif($moose_elated_sidebar == "3" || $moose_elated_sidebar == "4"): ?>
				<div class="<?php if($moose_elated_sidebar == "3"):?>two_columns_33_66<?php elseif($moose_elated_sidebar == "4") : ?>two_columns_25_75<?php endif; ?> background_color_sidebar grid2 clearfix">
					<div class="column1">
					<?php get_sidebar(); ?>
					</div>
					<div class="column2 content_right_from_sidebar">
						<div class="column_inner">
							<?php
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

	<?php } ?>
<?php get_footer(); ?>