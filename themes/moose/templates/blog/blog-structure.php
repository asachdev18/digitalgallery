<?php
	$moose_elated_wp_query      = moose_elated_return_global_wp_query();
	$moose_elated_options       = moose_elated_return_global_options();
	$moose_elated_template_name = moose_elated_return_template_name();
	$moose_elated_id            = moose_elated_get_page_id();
	
	
	
	$moose_elated_category = get_post_meta($moose_elated_id, "eltd_choose-blog-category", true);
	$moose_elated_post_number = esc_attr(get_post_meta($moose_elated_id, "eltd_show-posts-per-page", true));

	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = 1; }

	if(!is_archive()) {
		$moose_elated_blog_query = new WP_Query('post_type=post&paged=' . $paged . '&cat=' . $moose_elated_category . '&posts_per_page=' . $moose_elated_post_number);
	}else{
		$moose_elated_blog_query = $moose_elated_wp_query;
	}

	if(isset($moose_elated_options['blog_page_range']) && $moose_elated_options['blog_page_range'] != ""){
		$moose_elated_blog_page_range = esc_attr($moose_elated_options['blog_page_range']);
	} else{
		$moose_elated_blog_page_range = $moose_elated_blog_query->max_num_pages;
	}
	
	$moose_elated_blog_style = "1";
	if(isset($moose_elated_options['blog_style'])){
		$moose_elated_blog_style = $moose_elated_options['blog_style'];
	}

	$moose_elated_filter = "no";
	if($moose_elated_template_name == "blog-masonry-gallery-full-width.php" || $moose_elated_template_name == "blog-masonry-gallery.php" || $moose_elated_blog_style==14 || $moose_elated_blog_style== 15) {
		if(isset($moose_elated_options['blog_masonry_gallery_filter'])){
			$moose_elated_filter = $moose_elated_options['blog_masonry_gallery_filter'];
		}
	}
	else {
		if(isset($moose_elated_options['blog_masonry_filter'])){
			$moose_elated_filter = $moose_elated_options['blog_masonry_filter'];
		}
	}
	
	
	$moose_elated_blog_masonry_type = "blog_masonry_standard";
	if(isset($moose_elated_options['blog_masonry_choose_type'])){
		$moose_elated_blog_masonry_type = $moose_elated_options['blog_masonry_choose_type'];
	} 

	$moose_elated_blog_list = "";
	if($moose_elated_template_name != "") {
		if($moose_elated_template_name == "blog-masonry.php"){
			$moose_elated_blog_list = "blog_masonry";
			$moose_elated_blog_list_class = "masonry";
		}elseif($moose_elated_template_name == "blog-split-column.php"){
			$moose_elated_blog_list = "blog_split_column";
			$moose_elated_blog_list_class = "blog_split_column";
		}elseif($moose_elated_template_name == "blog-masonry-full-width.php"){
			$moose_elated_blog_list = "blog_masonry";
			$moose_elated_blog_list_class = "masonry_full_width";
		}elseif($moose_elated_template_name == "blog-standard.php"){
            $moose_elated_blog_list = "blog_standard";
            $moose_elated_blog_list_class = "blog_standard_type";
        }elseif($moose_elated_template_name == "blog-standard-whole-post.php"){
			$moose_elated_blog_list = "blog_standard_whole_post";
			$moose_elated_blog_list_class = "blog_standard_type";
		}elseif($moose_elated_template_name == "blog-masonry-gallery.php"){
            $moose_elated_blog_list = "blog_masonry_gallery";
            $moose_elated_blog_list_class = "blog_masonry_gallery";// Check
        }elseif($moose_elated_template_name == "blog-masonry-gallery-full-width.php"){
            $moose_elated_blog_list = "blog_masonry_gallery";
            $moose_elated_blog_list_class = "blog_masonry_gallery masonry_gallery_full_width";// Check
        }else{
			$moose_elated_blog_list = "blog_standard";
			$moose_elated_blog_list_class = "blog_standard_type";
		}
	} else{
		if($moose_elated_blog_style=="1"){
			$moose_elated_blog_list = "blog_standard";
			$moose_elated_blog_list_class = "blog_standard_type";
		}elseif($moose_elated_blog_style=="2"){
			$moose_elated_blog_list = "blog_split_column";
			$moose_elated_blog_list_class = "blog_split_column";
        }elseif($moose_elated_blog_style=="3"){
			$moose_elated_blog_list = "blog_masonry";
			$moose_elated_blog_list_class = "masonry";
        }elseif($moose_elated_blog_style=="4"){
			$moose_elated_blog_list = "blog_masonry";
			$moose_elated_blog_list_class = "masonry_full_width";
        }elseif($moose_elated_blog_style=="9"){
			$moose_elated_blog_list = "blog_standard_whole_post";
			$moose_elated_blog_list_class = "blog_standard_type";
		}elseif($moose_elated_blog_style=="14"){
			$moose_elated_blog_list = "blog_masonry_gallery";
			$moose_elated_blog_list_class = "blog_masonry_gallery";
		}elseif($moose_elated_blog_style=="15"){
			$moose_elated_blog_list = "blog_masonry_gallery";
			$moose_elated_blog_list_class = "blog_masonry_gallery masonry_gallery_full_width";
		}else {
			$moose_elated_blog_list = "blog_standard";
			$moose_elated_blog_list_class = "blog_standard_type";
		}
	}

    $moose_elated_pagination_masonry = "pagination";
    if(isset($moose_elated_options['pagination_masonry'])){
       $moose_elated_pagination_masonry = $moose_elated_options['pagination_masonry'];
		if($moose_elated_blog_list == "blog_masonry") {
			$moose_elated_blog_list_class .= " masonry_" . $moose_elated_pagination_masonry;
		}
    }
	
	$moose_elated_pagination_masonry_gallery = "pagination";
    if(isset($moose_elated_options['pagination_masonry_gallery'])){
       $moose_elated_pagination_masonry_gallery = $moose_elated_options['pagination_masonry_gallery'];
	   $moose_elated_blog_list_class .= " masonry_" . $moose_elated_pagination_masonry_gallery;
    }
?>
<?php

	if(($moose_elated_blog_list == "blog_masonry" || $moose_elated_blog_list == "blog_masonry_gallery") && $moose_elated_filter == "yes") {
		get_template_part('templates/blog/masonry', 'filter');

	}

	$moose_elated_blog_masonry_columns = 'three_columns';
	if (isset($moose_elated_options['blog_masonry_columns']) && $moose_elated_options['blog_masonry_columns'] !== '') {
		$moose_elated_blog_masonry_columns = $moose_elated_options['blog_masonry_columns'];
	}

	$moose_elated_blog_masonry_full_width_columns = 'five_columns';
	if (isset($moose_elated_options['blog_masonry_full_width_columns']) && $moose_elated_options['blog_masonry_full_width_columns'] !== '') {
		$moose_elated_blog_masonry_full_width_columns = $moose_elated_options['blog_masonry_full_width_columns'];
	}
	
	$blog_masonry_gallery_column = 'two_columns';
	if (isset($moose_elated_options['blog_masonry_gallery_columns']) && $moose_elated_options['blog_masonry_gallery_columns'] !== '') {
		$blog_masonry_gallery_column = $moose_elated_options['blog_masonry_gallery_columns'];
	}

	$blog_masonry_gallery_full_width_columns = 'three_columns';
	if (isset($moose_elated_options['blog_masonry_gallery_full_width_columns']) && $moose_elated_options['blog_masonry_gallery_full_width_columns'] !== '') {
		$blog_masonry_gallery_full_width_columns = $moose_elated_options['blog_masonry_gallery_full_width_columns'];
	}
	
	if($moose_elated_template_name == "blog-masonry.php" || $moose_elated_blog_style == 3 ){
		$moose_elated_blog_list_class .= " " .$moose_elated_blog_masonry_columns;
	}
	
	if($moose_elated_template_name == "blog-masonry-full-width.php" || $moose_elated_blog_style == 4){
		$moose_elated_blog_list_class .= " " .$moose_elated_blog_masonry_full_width_columns;
	}

	if($moose_elated_template_name == "blog-masonry-gallery.php" || $moose_elated_blog_style == 14 ){
		$moose_elated_blog_list_class .= " " .$blog_masonry_gallery_column;
	}
	
	if($moose_elated_template_name == "blog-masonry-gallery-full-width.php" || $moose_elated_blog_style == 15){
		$moose_elated_blog_list_class .= " " .$blog_masonry_gallery_full_width_columns;
	}

	
	$moose_elated_icon_left_html =  "<i class='pagination_arrow arrow_carrot-left'></i>";
	if (isset($moose_elated_options['pagination_arrows_type']) && $moose_elated_options['pagination_arrows_type'] != '') {
		$icon_navigation_class = $moose_elated_options['pagination_arrows_type'];
		$direction_nav_classes = moose_elated_horizontal_slider_icon_classes($icon_navigation_class);
		$moose_elated_icon_left_html = '<span class="pagination_arrow ' . $direction_nav_classes['left_icon_class']. '"></span>';
	}
	
	$moose_elated_icon_left_html .= '<span class="pagination_label">';
	if (isset($moose_elated_options['blog_pagination_previous_label']) && $moose_elated_options['blog_pagination_previous_label'] != '') {
		$moose_elated_icon_left_html.= $moose_elated_options['blog_pagination_previous_label'];
	}
	else{
		$moose_elated_icon_left_html .= esc_html__('Previous', 'moose');
	}
	$moose_elated_icon_left_html .= '</span>';


	$moose_elated_icon_right_html = '<span class="pagination_label">';
	if (isset($moose_elated_options['blog_pagination_next_label']) && $moose_elated_options['blog_pagination_next_label'] != '') {
		$moose_elated_icon_right_html .= $moose_elated_options['blog_pagination_next_label'];
	}
	else {
		$moose_elated_icon_right_html .= esc_html__('Next', 'moose');
	}
	$moose_elated_icon_right_html .= '</span>';

	if (isset($moose_elated_options['pagination_arrows_type']) && $moose_elated_options['pagination_arrows_type'] != '') {
		$icon_navigation_class = $moose_elated_options['pagination_arrows_type'];
		$direction_nav_classes = moose_elated_horizontal_slider_icon_classes($icon_navigation_class);
		$moose_elated_icon_right_html .= '<span class="pagination_arrow ' . $direction_nav_classes['right_icon_class']. '"></span>';
	}
	else{
		$moose_elated_icon_right_html .=  "<i class='pagination_arrow arrow_carrot-right'></i>";
	}

	?>

	<div class="blog_holder <?php echo esc_attr($moose_elated_blog_list_class); ?>">
		
	<?php if($moose_elated_blog_list == "blog_masonry" || $moose_elated_blog_list == "blog_masonry_gallery" ) { ?>
		<div class="blog_holder_grid_sizer"></div>
		<div class="blog_holder_grid_gutter"></div>
	<?php } ?>
	<?php if($moose_elated_blog_query->have_posts()) : while ( $moose_elated_blog_query->have_posts() ) : $moose_elated_blog_query->the_post(); ?>
		<?php
			get_template_part('templates/blog/'.$moose_elated_blog_list, 'loop');
		?>
	<?php endwhile; ?>
	<?php if($moose_elated_blog_list != "blog_masonry" && $moose_elated_blog_list != "blog_masonry_gallery") {
		if ($moose_elated_options['blog_pagination_type'] == 'standard'){
				moose_elated_pagination($moose_elated_blog_query->max_num_pages, $moose_elated_blog_page_range, $paged);
			}
		elseif ($moose_elated_options['blog_pagination_type'] == 'prev_and_next'){?>
			<div class="pagination_prev_and_next_only">
				<ul>
					<li class='prev'><?php echo wp_kses_post(get_previous_posts_link($moose_elated_icon_left_html, $moose_elated_blog_query->max_num_pages)); ?></li>
					<li class='next'><?php echo wp_kses_post(get_next_posts_link($moose_elated_icon_right_html, $moose_elated_blog_query->max_num_pages)); ?></li>
				</ul>
			</div>
		<?php } ?>
	<?php } ?>
	<?php else: //If no posts are present ?>
	<div class="entry">
			<p><?php esc_html_e('No posts were found.', 'moose'); ?></p>
	</div>
	<?php endif; ?>
</div>
<?php if($moose_elated_blog_list == "blog_masonry") {
    if($moose_elated_pagination_masonry == "load_more") {
		if (get_next_posts_link(null, $moose_elated_blog_query->max_num_pages)) { ?>
			<div class="blog_load_more_button_holder">
				<div class="blog_load_more_button"><span data-rel="<?php echo esc_attr($moose_elated_blog_query->max_num_pages); ?>"><?php echo wp_kses_post(get_next_posts_link(esc_html__('Show more', 'moose'), $moose_elated_blog_query->max_num_pages)); ?></span></div>
			</div>
		<?php } ?>
	 <?php } elseif($moose_elated_pagination_masonry == "infinite_scroll") { ?>
		<div class="blog_infinite_scroll_button"><span data-rel="<?php echo esc_attr($moose_elated_blog_query->max_num_pages); ?>"><?php echo wp_kses_post(get_next_posts_link(esc_html__('Show more', 'moose'), $moose_elated_blog_query->max_num_pages)); ?></span></div>
    <?php }else { ?>
        <?php if($moose_elated_options['blog_pagination_type'] == 'standard' && $moose_elated_options['pagination'] != "0") {
				moose_elated_pagination($moose_elated_blog_query->max_num_pages, $moose_elated_blog_page_range, $paged);
            }
        	elseif ($moose_elated_options['blog_pagination_type'] == 'prev_and_next'){ ?>
				<div class="pagination_prev_and_next_only">
					<ul>
						<li class='prev'><?php echo wp_kses_post(get_previous_posts_link($moose_elated_icon_left_html, $moose_elated_blog_query->max_num_pages)); ?></li>
						<li class='next'><?php echo wp_kses_post(get_next_posts_link($moose_elated_icon_right_html, $moose_elated_blog_query->max_num_pages)); ?></li>
					</ul>
				</div>
		<?php } ?>
    <?php } ?>
<?php } ?>
<?php if($moose_elated_blog_list == "blog_masonry_gallery") {
    if($moose_elated_pagination_masonry_gallery == "load_more") {
		if (get_next_posts_link(null, $moose_elated_blog_query->max_num_pages)) { ?>
			<div class="blog_load_more_button_holder">
				<div class="blog_load_more_button"><span data-rel="<?php echo esc_attr($moose_elated_blog_query->max_num_pages); ?>"><?php echo wp_kses_post(get_next_posts_link(esc_html__('Show more', 'moose'), $moose_elated_blog_query->max_num_pages)); ?></span></div>
			</div>
		<?php } ?>
	 <?php } elseif($moose_elated_pagination_masonry_gallery == "infinite_scroll") { ?>
		<div class="blog_infinite_scroll_button"><span data-rel="<?php echo esc_attr($moose_elated_blog_query->max_num_pages); ?>"><?php echo wp_kses_post(get_next_posts_link(esc_html__('Show more', 'moose'), $moose_elated_blog_query->max_num_pages)); ?></span></div>
    <?php }else { ?>
        <?php if($moose_elated_options['blog_pagination_type'] == 'standard' && $moose_elated_options['pagination'] != "0") {
				moose_elated_pagination($moose_elated_blog_query->max_num_pages, $moose_elated_blog_page_range, $paged);
            }
        	elseif ($moose_elated_options['blog_pagination_type'] == 'prev_and_next'){ ?>
				<div class="pagination_prev_and_next_only">
					<ul>
						<li class='prev'><?php echo wp_kses_post(get_previous_posts_link($moose_elated_icon_left_html, $moose_elated_blog_query->max_num_pages)); ?></li>
						<li class='next'><?php echo wp_kses_post(get_next_posts_link($moose_elated_icon_right_html, $moose_elated_blog_query->max_num_pages)); ?></li>
					</ul>
				</div>
		<?php } ?>
    <?php } ?>
<?php } ?>
<?php wp_reset_postdata(); ?>