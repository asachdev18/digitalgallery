<?php

$moose_elated_options = moose_elated_return_global_options();
$moose_elated_page_id = moose_elated_get_page_id();
$moose_elated_sidebar = moose_elated_get_sidebar_layout(false);

$moose_elated_blog_single_show_comments = "";
if (isset($moose_elated_options['blog_single_show_comments'])) {
	$moose_elated_blog_single_show_comments = $moose_elated_options['blog_single_show_comments'];
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


$moose_elated_gallery_position = "above_post_content";
if(get_post_meta(get_the_ID(), "gallery_position", true) !== ""){
	$moose_elated_gallery_position = get_post_meta(get_the_ID(), "gallery_position", true);
}

?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
		<?php get_template_part( 'title' ); ?>
		<?php get_template_part('slider'); ?>

		<div class="container"<?php moose_elated_inline_style($moose_elated_background_color); ?>>
		<?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
			<div class="container_inner default_template_holder" <?php moose_elated_inline_style($moose_elated_content_style); ?>>

			<?php if(($moose_elated_sidebar == "default")||($moose_elated_sidebar == "")) : ?>
				<div class="blog_holder blog_single blog_standard_type">
				<?php
					get_template_part('templates/blog/blog_single', 'loop');
				?>
				<?php
					if($moose_elated_blog_single_show_comments == "yes"){
						comments_template('', true);
					}else{
						echo "<br/><br/>";
					}
				?>

			<?php elseif($moose_elated_sidebar == "1" || $moose_elated_sidebar == "2"): ?>
				<?php if($moose_elated_gallery_position == "above_post_content_and_sidebar"){
					get_template_part('templates/blog/parts/post-format-gallery-slider');
				}?>	
				<?php if($moose_elated_sidebar == "1") : ?>
					<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
					<div class="column1 content_left_from_sidebar">
				<?php elseif($moose_elated_sidebar == "2") : ?>
					<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
						<div class="column1 content_left_from_sidebar">
				<?php endif; ?>

							<div class="column_inner">
								<div class="blog_holder blog_single blog_standard_type">
									<?php
										get_template_part('templates/blog/blog_single', 'loop');
									?>
								</div>

								<?php
									if($moose_elated_blog_single_show_comments == "yes"){
										comments_template('', true);
									}else{
										echo "<br/><br/>";
									}
								?>
							</div>
						</div>
						<div class="column2">
							<?php get_sidebar(); ?>
						</div>
					</div>
				<?php elseif($moose_elated_sidebar == "3" || $moose_elated_sidebar == "4"): ?>
					<?php if($moose_elated_gallery_position == "above_post_content_and_sidebar"){
						get_template_part('templates/blog/parts/post-format-gallery-slider');
					}?>	
					<?php if($moose_elated_sidebar == "3") : ?>
						<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
						<div class="column1">
							<?php get_sidebar(); ?>
						</div>
						<div class="column2 content_right_from_sidebar">
					<?php elseif($moose_elated_sidebar == "4") : ?>
						<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
							<div class="column1">
								<?php get_sidebar(); ?>
							</div>
							<div class="column2 content_right_from_sidebar">
					<?php endif; ?>

								<div class="column_inner">
									<div class="blog_holder blog_single blog_standard_type">
										<?php
											get_template_part('templates/blog/blog_single', 'loop');
										?>
									</div>
									<?php
										if($moose_elated_blog_single_show_comments == "yes"){
											comments_template('', true);
										}else{
											echo "<br/><br/>";
										}
									?>
								</div>
							</div>

						</div>
				<?php endif; ?>
			</div>
		</div>
		<?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
			</div></div>
		<?php } ?>
	</div>
<?php endwhile; ?>
<?php endif; ?>	


<?php get_footer(); ?>	