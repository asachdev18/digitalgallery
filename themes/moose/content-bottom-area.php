<?php
$moose_elated_options                           = moose_elated_return_global_options();
$moose_elated_page_id							= moose_elated_get_page_id();
$moose_elated_content_bottom_area 				= "yes";
$moose_elated_content_bottom_area_sidebar 		= "";
$moose_elated_content_bottom_area_in_grid 		= true;
$moose_elated_content_bottom_background_color 	= '';

//is content bottom area enabled for current page?
if(get_post_meta($moose_elated_page_id, "eltd_enable_content_bottom_area", true) != ""){
	$moose_elated_content_bottom_area = get_post_meta($moose_elated_page_id, "eltd_enable_content_bottom_area", true);
} elseif(isset($moose_elated_options['enable_content_bottom_area'])) {
	//content bottom area is turned on in theme options
	$moose_elated_content_bottom_area = $moose_elated_options['enable_content_bottom_area'];
}

//is content bottom area enabled?
if($moose_elated_content_bottom_area == 'yes') {
	//is sidebar chosen for content bottom area for current page?
	if(get_post_meta($moose_elated_page_id, 'eltd_choose_content_bottom_sidebar', true) != ""){
		$moose_elated_content_bottom_area_sidebar = get_post_meta($moose_elated_page_id, 'eltd_choose_content_bottom_sidebar', true);
	} elseif(isset($moose_elated_options['content_bottom_sidebar_custom_display'])) {
		//sidebar is chosen for content bottom area in theme options
		$moose_elated_content_bottom_area_sidebar = $moose_elated_options['content_bottom_sidebar_custom_display'];
	}

	//take content bottom area in grid option for current page if set or from theme options otherwise
	if(get_post_meta($moose_elated_page_id, 'eltd_content_bottom_sidebar_in_grid', true) != ""){
		$moose_elated_content_bottom_area_in_grid = get_post_meta($moose_elated_page_id, 'eltd_content_bottom_sidebar_in_grid', true);
	} elseif(isset($moose_elated_options['content_bottom_in_grid'])) {
		$moose_elated_content_bottom_area_in_grid = $moose_elated_options['content_bottom_in_grid'];
	}

	//is background color for content bottom area set for current page
	if(get_post_meta($moose_elated_page_id, "eltd_content_bottom_background_color", true) != ""){
		$moose_elated_content_bottom_background_color = 'background-color: '.esc_attr(get_post_meta($moose_elated_page_id, "eltd_content_bottom_background_color", true));
	}
}
?>
<?php if(($moose_elated_content_bottom_area == "yes") && (is_active_sidebar($moose_elated_content_bottom_area_sidebar))) { ?>

	<div class="content_bottom" <?php moose_elated_inline_style($moose_elated_content_bottom_background_color); ?>>
		<?php if($moose_elated_content_bottom_area_in_grid == 'yes'){ ?>
		<div class="container">
			<div class="container_inner clearfix">
		<?php } ?>
				<?php dynamic_sidebar($moose_elated_content_bottom_area_sidebar); ?>
		<?php if($moose_elated_content_bottom_area_in_grid == 'yes'){ ?>
			</div>
		</div>
	<?php } ?>
	</div>
<?php } ?>