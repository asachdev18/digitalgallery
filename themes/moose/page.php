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
				<?php if(($moose_elated_sidebar == "default")||($moose_elated_sidebar == "")) : ?>
					<?php if (have_posts()) : 
							while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
							<?php moose_elated_pages_wp_link_pages($moose_elated_pagination_classes); ?>
							<?php
							if($moose_elated_enable_page_comments){
								comments_template('', true); 
							}
							?> 
							<?php endwhile; ?>
						<?php endif; ?>
				<?php elseif($moose_elated_sidebar == "1" || $moose_elated_sidebar == "2"): ?>		
					
					<?php if($moose_elated_sidebar == "1") : ?>	
						<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
							<div class="column1 content_left_from_sidebar">
					<?php elseif($moose_elated_sidebar == "2") : ?>	
						<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
							<div class="column1 content_left_from_sidebar">
					<?php endif; ?>
							<?php if (have_posts()) : 
								while (have_posts()) : the_post(); ?>
								<div class="column_inner">
								
								<?php the_content(); ?>
								<?php moose_elated_pages_wp_link_pages($moose_elated_pagination_classes); ?>
								<?php
								if($moose_elated_enable_page_comments){
									comments_template('', true); 
								}
								?> 
								</div>
						<?php endwhile; ?>
						<?php endif; ?>
					
									
							</div>
							<div class="column2"><?php get_sidebar();?></div>
						</div>
					<?php elseif($moose_elated_sidebar == "3" || $moose_elated_sidebar == "4"): ?>
						<?php if($moose_elated_sidebar == "3") : ?>	
							<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2 content_right_from_sidebar">
						<?php elseif($moose_elated_sidebar == "4") : ?>	
							<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2 content_right_from_sidebar">
						<?php endif; ?>
								<?php if (have_posts()) : 
									while (have_posts()) : the_post(); ?>
									<div class="column_inner">
										<?php the_content(); ?>
										<?php moose_elated_pages_wp_link_pages($moose_elated_pagination_classes); ?>
										<?php
										if($moose_elated_enable_page_comments){
											comments_template('', true); 
										}
										?> 
									</div>
							<?php endwhile; ?>
							<?php endif; ?>
						
										
								</div>
								
							</div>
					<?php endif; ?>
		    </div>
            <?php if($moose_elated_options['overlapping_content'] == 'yes') {?>
                </div></div>
            <?php } ?>
	    </div>
	<?php get_footer(); ?>