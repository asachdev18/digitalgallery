<?php get_header(); ?>
<?php
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_sidebar = moose_elated_get_sidebar_layout();
?>

	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>

	<div class="container">
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
<?php get_footer(); ?>