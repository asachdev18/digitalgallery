<?php get_header(); ?>
<?php
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_query = moose_elated_return_global_wp_query();
$moose_elated_sidebar = moose_elated_get_sidebar_layout();

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }


	if(isset($moose_elated_options['blog_page_range']) && $moose_elated_options['blog_page_range'] != ""){
		$moose_elated_blog_page_range = esc_attr($moose_elated_options['blog_page_range']);
	} else{
		$moose_elated_blog_page_range = $moose_elated_query->max_num_pages;
	}
?>
	<?php get_template_part( 'title' ); ?>
	
	<div class="container">
	<?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
		<div class="overlapping_content"><div class="overlapping_content_inner">
	<?php } ?>
	<div class="container_inner default_template_holder clearfix">
		<?php if(($moose_elated_sidebar == "default")||($moose_elated_sidebar == "")) : ?>
			<div class="blog_holder blog_standard_type">
				<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
						<?php 
							get_template_part('templates/blog/blog_search', 'loop');
						?>
				<?php endwhile; ?>
				<?php if($moose_elated_options['pagination'] != "0") : ?>
					<?php moose_elated_pagination($moose_elated_query->max_num_pages, $moose_elated_blog_page_range, $paged); ?>
				<?php endif; ?>
				<?php else: //If no posts are present ?>
						<div class="entry">                        
							<p><?php esc_html_e('No posts were found.', 'moose'); ?></p>
						</div>
				<?php endif; ?>
			</div>	
		<?php elseif($moose_elated_sidebar == "1" || $moose_elated_sidebar == "2"): ?>
			<div class="<?php if($moose_elated_sidebar == "1"):?>two_columns_66_33<?php elseif($moose_elated_sidebar == "2") : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
				<div class="column1 content_left_from_sidebar">
					<div class="column_inner">
						<div class="blog_holder blog_standard_type">
							<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
									<?php 
										get_template_part('templates/blog/blog_search', 'loop');
									?>
							<?php endwhile; ?>
							<?php if($moose_elated_options['pagination'] != "0") : ?>
								<?php moose_elated_pagination($moose_elated_query->max_num_pages, $moose_elated_blog_page_range, $paged); ?>
							<?php endif; ?>
							<?php else: //If no posts are present ?>
								<div class="entry">                        
									<p><?php esc_html_e('No posts were found.', 'moose'); ?></p>
								</div>
							<?php endif; ?>
						</div>	
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
						<div class="blog_holder blog_standard_type">
							<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
								<?php 
									get_template_part('templates/blog/blog_search', 'loop');
								?>
							<?php endwhile; ?>
							<?php if($moose_elated_options['pagination'] != "0") : ?>
								<?php moose_elated_pagination($moose_elated_query->max_num_pages, $moose_elated_blog_page_range, $paged); ?>
							<?php endif; ?>
							<?php else: //If no posts are present ?>
								<div class="entry">                        
									<p><?php esc_html_e('No posts were found.', 'moose'); ?></p>
								</div>
							<?php endif; ?>
						</div>	
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