<?php

$eltd_pages = array();
$pages      = get_pages();
foreach ( $pages as $page ) {
	$eltd_pages[ $page->ID ] = $page->post_title;
}

$moose_elated_icon_collections = moose_elated_return_icon_collections();

//Portfolio Images

$eltdPortfolioImages = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "Portfolio Images (multiple upload)", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"portfolio_images",
	$eltdPortfolioImages
);

$eltd_portfolio_image_gallery = new MooseElatedMultipleImages(
	"eltd_portfolio-image-gallery",
	esc_html__( "Portfolio Images", 'moose' ),
	esc_html__( "Choose your portfolio images", 'moose' )
);
$eltdPortfolioImages->addChild(
	"eltd_portfolio-image-gallery",
	$eltd_portfolio_image_gallery
);

//Portfolio Images/Videos 2

$eltdPortfolioImagesVideos2 = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "Portfolio Images/Videos (single upload)", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"portfolio_images_videos2",
	$eltdPortfolioImagesVideos2
);

$eltd_portfolio_images_videos2 = new MooseElatedImagesVideosFramework(
	esc_html__( "Portfolio Images/Videos 2", 'moose' ),
	esc_html__( "ThisIsDescription", 'moose' )
);
$eltdPortfolioImagesVideos2->addChild(
	"eltd_portfolio_images_videos2",
	$eltd_portfolio_images_videos2
);

//Portfolio Additional Sidebar Items

$eltdAdditionalSidebarItems = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "Additional Portfolio Sidebar Items", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"portfolio_properties",
	$eltdAdditionalSidebarItems
);

$eltd_portfolio_properties = new MooseElatedOptionsFramework(
	esc_html__( "Portfolio Properties", 'moose' ),
	esc_html__( "ThisIsDescription", 'moose' )
);
$eltdAdditionalSidebarItems->addChild(
	"eltd_portfolio_properties",
	$eltd_portfolio_properties
);

//General

$eltdGeneral = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "General", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"portfolio_general",
	$eltdGeneral
);

$eltd_page_background_color = new MooseElatedMetaField(
	"color",
	"eltd_page_background_color",
	"",
	esc_html__( "Page Background Color", 'moose' ),
	esc_html__( "Choose the page background (body) color", 'moose' )
);
$eltdGeneral->addChild(
	"eltd_page_background_color",
	$eltd_page_background_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Content Style", 'moose' ),
	esc_html__( "Define styles for Content area", 'moose' )
);
$eltdGeneral->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_content_top_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_content-top-padding",
	"",
	esc_html__( "Content Top Padding (px)", 'moose' ),
	esc_html__( "This option control content top padding.", 'moose' )
);
$row1->addChild(
	"eltd_content-top-padding",
	$eltd_content_top_padding
);

$eltd_content_top_padding_mobile = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_content-top-padding-mobile",
	"",
	esc_html__( "Set this top padding for mobile header", 'moose' ),
	"",
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$row1->addChild(
	"eltd_content-top-padding-mobile",
	$eltd_content_top_padding_mobile
);

$eltd_show_animation = new MooseElatedMetaField(
	"selectblank",
	"eltd_show-animation",
	"",
	esc_html__( "Page Transition", 'moose' ),
	esc_html__( 'Choose a type of transition between loading pages.', 'moose' ),
	array(
		"no_animation" => esc_html__( "No Animation", 'moose' ),
		"updown" => esc_html__( "Up / Down", 'moose' ),
		"fade" => esc_html__( "Fade", 'moose' ),
		"updown_fade" => esc_html__( "Up/Down (In) / Fade (Out)", 'moose' ),
		"leftright" => esc_html__( "Left / Right", 'moose' )
	),
	array(),
	"enable_grid_elements",
	array( "yes" )
);
$eltdGeneral->addChild(
	"eltd_show-animation",
	$eltd_show_animation
);

$page_transitions_notice = new MooseElatedNotice(
	esc_html__( "Page Transition", 'moose' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'moose' ),
	esc_html__( "AJAX Page transitions are disabled due to VC Grid Elements", 'moose' ),
	"enable_grid_elements",
	"no"
);
$eltdGeneral->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$eltd_revolution_slider = new MooseElatedMetaField(
	"text",
	"eltd_revolution-slider",
	"",
	esc_html__( "Layer Slider or Elated Slider Shortcode", 'moose' ),
	esc_html__( "Copy and paste your shortcode located in Elated Slider -> Slider", 'moose' )
);
$eltdGeneral->addChild(
	"eltd_revolution-slider",
	$eltd_revolution_slider
);

$eltd_choose_portfolio_single_view = new MooseElatedMetaField(
	"selectblank",
	"eltd_choose-portfolio-single-view",
	"",
	esc_html__( "Portfolio Type", 'moose' ),
	esc_html__( 'Choose a default type for Single Project pages', 'moose' ),
	array(
		"small-images" => esc_html__( "Portfolio small images", 'moose' ),
		"small-slider" => esc_html__( "Portfolio small slider", 'moose' ),
		"big-images" => esc_html__( "Portfolio big images", 'moose' ),
		"big-slider" => esc_html__( "Portfolio big slider", 'moose' ),
		"custom" => esc_html__( "Portfolio custom", 'moose' ),
		"full-width-custom" => esc_html__( "Portfolio full width custom", 'moose' ),
		"gallery" => esc_html__( "Portfolio gallery", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                  => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"full-width-custom" => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"custom"            => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"big-slider"        => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"big-images"        => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"small-slider"      => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"small-images"      => "#eltdf_eltd_choose_number_of_portfolio_columns_container"
		),
		"show"       => array(
			"gallery" => "#eltdf_eltd_choose_number_of_portfolio_columns_container"
		)
	)
);
$eltdGeneral->addChild(
	"eltd_choose-portfolio-single-view",
	$eltd_choose_portfolio_single_view
);

$eltd_choose_number_of_portfolio_columns_container = new MooseElatedContainer(
	"eltd_choose_number_of_portfolio_columns_container",
	"eltd_choose-portfolio-single-view",
	"no",
	array( "", "1", "2", "3", "4", "5", "7" )
);
$eltdGeneral->addChild(
	"eltd_choose_number_of_portfolio_columns_container",
	$eltd_choose_number_of_portfolio_columns_container
);

$eltd_choose_number_of_portfolio_columns = new MooseElatedMetaField(
	"selectblank",
	"eltd_choose-number-of-portfolio-columns",
	"",
	esc_html__( "Number of Columns", 'moose' ),
	esc_html__( 'Choose the number of columns for Portfolio Gallery type', 'moose' ),
	array(
		"2" => esc_html__( "2 Columns", 'moose' ),
		"3" => esc_html__( "3 Columns", 'moose' ),
		"4" => esc_html__( "4 Columns", 'moose' )
	)
);
$eltd_choose_number_of_portfolio_columns_container->addChild(
	"eltd_choose-number-of-portfolio-columns",
	$eltd_choose_number_of_portfolio_columns
);

$eltd_choose_portfolio_image_size = new MooseElatedMetaField(
	"select",
	"eltd_choose-portfolio-image-size",
	"full",
	esc_html__( "Image Proportions", 'moose' ),
	esc_html__( 'Choose image proportions for Portfolio Gallery type', 'moose' ),
	array(
		"full" => esc_html__( "Original Size", 'moose' ),
		"portfolio-square" => esc_html__( "Square", 'moose' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'moose' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'moose' )
	)
);

$eltd_choose_number_of_portfolio_columns_container->addChild(
	"eltd_choose-portfolio-image-size",
	$eltd_choose_portfolio_image_size
);

$eltd_choose_portfolio_list_page = new MooseElatedMetaField(
	"selectblank",
	"eltd_choose-portfolio-list-page",
	"",
	esc_html__( '"Back To" Link', 'moose' ),
	esc_html__( 'Choose "Back To" page to link from portfolio Single Project page', 'moose' ),
	$eltd_pages
);
$eltdGeneral->addChild(
	"eltd_choose-portfolio-list-page",
	$eltd_choose_portfolio_list_page
);

$eltd_portfolio_external_link = new MooseElatedMetaField(
	"text",
	"eltd_portfolio-external-link",
	"",
	esc_html__( "Portfolio External Link", 'moose' ),
	esc_html__( "Enter URL to link from Portfolio List page", 'moose' )
);
$eltdGeneral->addChild(
	"eltd_portfolio-external-link",
	$eltd_portfolio_external_link
);

$eltd_portfolio_lightbox_link = new MooseElatedMetaField(
	"text",
	"eltd_portfolio-lightbox-link",
	"",
	esc_html__( "Portfolio Custom Lighbox Content", 'moose' ),
	esc_html__( "Enter URL to link custom image/video content inside lightbox", 'moose' )
);
$eltdGeneral->addChild(
	"eltd_portfolio-lightbox-link",
	$eltd_portfolio_lightbox_link
);

$eltd_portfolio_type_masonry_style = new MooseElatedMetaField(
	"select",
	"eltd_portfolio_type_masonry_style",
	"",
	esc_html__( "Dimensions for Masonry", 'moose' ),
	esc_html__( 'Choose image layout when it appears in Masonry type portfolio lists', 'moose' ),
	array(
		"default" => esc_html__( "Default", 'moose' ),
		"large_width" => esc_html__( "Large width", 'moose' ),
		"large_height" => esc_html__( "Large height", 'moose' ),
		"large_width_height" => esc_html__( "Large width/height", 'moose' )
	)
);
$eltdGeneral->addChild(
	"eltd_portfolio_type_masonry_style",
	$eltd_portfolio_type_masonry_style
);

$eltd_portfolio_masonry_parallax = new MooseElatedMetaField(
	"select",
	"eltd_portfolio_masonry_parallax",
	"no",
	esc_html__( "Set Masonry Item in Parallax", 'moose' ),
	"",
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltdGeneral->addChild(
	"eltd_portfolio_masonry_parallax",
	$eltd_portfolio_masonry_parallax
);

$eltd_portfolio_disable_comments = new MooseElatedMetaField(
	"selectblank",
	"eltd_portfolio-hide-comments",
	"",
	esc_html__( "Disable Comments", 'moose' ),
	"",
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltdGeneral->addChild(
	"eltd_portfolio-hide-comments",
	$eltd_portfolio_disable_comments
);

$eltd_image_hover_container = new MooseElatedGroup(
	esc_html__( "Image Hover Style", 'moose' ),
	esc_html__( "Define style for hover color", 'moose' )
);
$eltdGeneral->addChild(
	"eltd_image_hover_container",
	$eltd_image_hover_container
);

$row11 = new MooseElatedRow();
$eltd_image_hover_container->addChild(
	"row11",
	$row11
);

$eltd_portfolio_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_portfolio-hover-color",
	"",
	esc_html__( "Portfolio Hover Color", 'moose' ),
	""
);
$row11->addChild(
	"eltd_portfolio-hover-color",
	$eltd_portfolio_hover_color
);

$eltd_portfolio_hover_color_opacity = new MooseElatedMetaField(
	"textsimple",
	"eltd_portfolio-hover-color-opacity",
	"",
	esc_html__( "Portfolio Hover Color Opacity", 'moose' ),
	""
);
$row11->addChild(
	"eltd_portfolio-hover-color-opacity",
	$eltd_portfolio_hover_color_opacity
);

// Header

$eltdHeader = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "Header", 'moose' ),
	"vertical_area",
	array( "yes" )
);
moose_elated_meta_boxes()->addMetaBox(
	"porfolio_header",
	$eltdHeader
);

$eltd_header_style = new MooseElatedMetaField(
	"selectblank",
	"eltd_header-style",
	"",
	esc_html__( "Header Skin", 'moose' ),
	esc_html__( "Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style", 'moose' ),
	array(
		"light" => esc_html__( "Light", 'moose' ),
		"dark" => esc_html__( "Dark", 'moose' )
	)
);
$eltdHeader->addChild(
	"eltd_header-style",
	$eltd_header_style
);

$eltd_header_style_on_scroll = new MooseElatedMetaField(
	"selectblank",
	"eltd_header-style-on-scroll",
	"",
	esc_html__( "Enable Header Style on Scroll", 'moose' ),
	esc_html__( "Enabling this option, header will change style on scroll (depending on row settings) to make header elements (logo, main menu, side menu button) in that style", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltdHeader->addChild(
	"eltd_header-style-on-scroll",
	$eltd_header_style_on_scroll
);

$eltd_header_color_per_page = new MooseElatedMetaField(
	"color",
	"eltd_header_color_per_page",
	"",
	esc_html__( "Initial Header Background Color", 'moose' ),
	esc_html__( "Choose a background color for header area", 'moose' )
);
$eltdHeader->addChild(
	"eltd_header_color_per_page",
	$eltd_header_color_per_page
);

$eltd_header_color_transparency_per_page = new MooseElatedMetaField(
	"text",
	"eltd_header_color_transparency_per_page",
	"",
	esc_html__( "Initial Header Transparency", 'moose' ),
	esc_html__( "Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdHeader->addChild(
	"eltd_header_color_transparency_per_page",
	$eltd_header_color_transparency_per_page
);

$eltd_header_bottom_border_color = new MooseElatedMetaField(
	"color",
	"eltd_header_bottom_border_color",
	"",
	esc_html__( "Initial Header Bottom Border Color", 'moose' ),
	esc_html__( "Choose a bottom border color for header area", 'moose' )
);
$eltdHeader->addChild(
	"eltd_header_bottom_border_color",
	$eltd_header_bottom_border_color
);

$eltd_page_scroll_amount_for_sticky = new MooseElatedMetaField(
	"text",
	"eltd_page_scroll_amount_for_sticky",
	"",
	esc_html__( "Scroll amount for sticky header appearance (px)", 'moose' ),
	esc_html__( "Define scroll amount for sticky header appearance", 'moose' ),
	array(),
	array( "col_width" => 3 ),
	"header_bottom_appearance",
	array( "regular", "fixed", "fixed_hiding" )
);
$eltdHeader->addChild(
	"eltd_page_scroll_amount_for_sticky",
	$eltd_page_scroll_amount_for_sticky
);

$eltd_page_hide_initial_sticky = new MooseElatedMetaField(
	"selectblank",
	"eltd_page_hide_initial_sticky",
	"",
	esc_html__( "Hide Sticky Header Initially", 'moose' ),
	esc_html__( "Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltdHeader->addChild(
	"eltd_page_hide_initial_sticky",
	$eltd_page_hide_initial_sticky
);

// Side Menu Area

$eltdLeftMenuArea = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "Side Menu Area", 'moose' ),
	"vertical_area",
	array( "no" )
);
moose_elated_meta_boxes()->addMetaBox(
	"porfolio_left_menu",
	$eltdLeftMenuArea
);

$eltd_page_vertical_area_transparency = new MooseElatedMetaField(
	"selectblank",
	"eltd_page_vertical_area_transparency",
	"",
	esc_html__( "Enable transparent side menu area", 'moose' ),
	esc_html__( "Enabling this option will make Left Menu background transparent ", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltdLeftMenuArea->addChild(
	"eltd_page_vertical_area_transparency",
	$eltd_page_vertical_area_transparency
);

$eltd_page_vertical_area_background = new MooseElatedMetaField(
	"color",
	"eltd_page_vertical_area_background",
	"",
	esc_html__( "Side Menu Area Background Color", 'moose' ),
	esc_html__( "Choose a color for Left Menu background", 'moose' )
);
$eltdLeftMenuArea->addChild(
	"eltd_page_vertical_area_background",
	$eltd_page_vertical_area_background
);

$eltd_page_vertical_area_background_opacity = new MooseElatedMetaField(
	"text",
	"eltd_page_vertical_area_background_opacity",
	"",
	esc_html__( "Side Menu Area Background Opacity", 'moose' ),
	esc_html__( "Choose a opacity for the Side Menu Area Background (0 = fully transparent, 1 = opaque)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdLeftMenuArea->addChild(
	"eltd_page_vertical_area_background_opacity",
	$eltd_page_vertical_area_background_opacity
);

$eltd_page_vertical_area_transparency_over_slider = new MooseElatedMetaField(
	"selectblank",
	"eltd_page_vertical_area_transparency_over_slider",
	"",
	esc_html__( "Transparency Setting Takes Effect Only on Elated Slider", 'moose' ),
	esc_html__( "Enabling this option will ensure that the transparency set in the 'Side Menu Area Background Opacity' takes effect only when the side menu area is over the Elated Slider", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltdLeftMenuArea->addChild(
	"eltd_page_vertical_area_transparency_over_slider",
	$eltd_page_vertical_area_transparency_over_slider
);

$eltd_page_vertical_area_background_image = new MooseElatedMetaField(
	"image",
	"eltd_page_vertical_area_background_image",
	"",
	esc_html__( "Side Menu Area Background Image", 'moose' ),
	esc_html__( "Choose an image for Left Menu background", 'moose' )
);
$eltdLeftMenuArea->addChild(
	"eltd_page_vertical_area_background_image",
	$eltd_page_vertical_area_background_image
);

$eltd_page_disable_vertical_area_background_image = new MooseElatedMetaField(
	"selectblank",
	"eltd_page_disable_vertical_area_background_image",
	"",
	esc_html__( "Disable Side Menu Area Background Image", 'moose' ),
	esc_html__( "Enabling this option will hide background image in Side Menu", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltdLeftMenuArea->addChild(
	"eltd_page_disable_vertical_area_background_image",
	$eltd_page_disable_vertical_area_background_image
);

// Title

$eltdTitle = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "Title", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"porfolio_title",
	$eltdTitle
);

$eltd_show_page_title = new MooseElatedMetaField(
	"selectblank",
	"eltd_show-page-title",
	"",
	esc_html__( "Show Title Area", 'moose' ),
	esc_html__( "Disabling this option will turn off page title area", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_page_title_area_container, #eltdf-meta-box-portfolio_title_animations"
		),
		"show"       => array(
			""    => "#eltdf_eltd_page_title_area_container, #eltdf-meta-box-portfolio_title_animations",
			"yes" => "#eltdf_eltd_page_title_area_container, #eltdf-meta-box-portfolio_title_animations"
		)
	)
);
$eltdTitle->addChild(
	"eltd_show-page-title",
	$eltd_show_page_title
);

$eltd_page_title_area_container = new MooseElatedContainer(
	"eltd_page_title_area_container",
	"eltd_show-page-title",
	"no"
);
$eltdTitle->addChild(
	"eltd_page_title_area_container",
	$eltd_page_title_area_container
);

$eltd_page_title_type = new MooseElatedMetaField(
	"selectblank",
	"eltd_page_title_type",
	"",
	esc_html__( "Title Type", 'moose' ),
	esc_html__( "Choose title type for this page.", 'moose' ),
	array(
		"standard_title" => esc_html__( "Standard", 'moose' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumbs", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#eltdf_eltd_title_standard_container" ),
		"show"       => array(
			"standard_title" => "#eltdf_eltd_title_standard_container",
			""               => "#eltdf_eltd_title_standard_container"
		)
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_page_title_type",
	$eltd_page_title_type
);

$eltd_animate_page_title = new MooseElatedMetaField(
	"selectblank",
	"eltd_animate_page_title",
	"",
	esc_html__( "Animations", 'moose' ),
	esc_html__( "Choose an animation for Title Area", 'moose' ),
	array(
		"no" => esc_html__( "No animation", 'moose' ),
		"text_right_left" => esc_html__( "Text right to left", 'moose' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'moose' )
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_animate_page_title",
	$eltd_animate_page_title
);

$eltd_page_page_title_vertical_aligment = new MooseElatedMetaField(
	"selectblank",
	"eltd_page_page_title_vertical_aligment",
	"",
	esc_html__( "Vertical Alignment", 'moose' ),
	esc_html__( "Specify Title vertical alignment", 'moose' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'moose' ),
		"window_top" => esc_html__( "From Window Top", 'moose' )
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_page_page_title_vertical_aligment",
	$eltd_page_page_title_vertical_aligment
);

$eltd_show_page_title_text = new MooseElatedMetaField(
	"selectblank",
	"eltd_show_page_title_text",
	"",
	esc_html__( "Show Title Text", 'moose' ),
	esc_html__( "Disabling this option will turn off page title text", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_title_text_container, #eltdf_animation_page_page_title_container"
		),
		"show"       => array(
			""    => "#eltdf_eltd_title_text_container, #eltdf_animation_page_page_title_container",
			"yes" => "#eltdf_eltd_title_text_container, #eltdf_animation_page_page_title_container"
		)
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_show_page_title_text",
	$eltd_show_page_title_text
);

$eltd_title_text_container = new MooseElatedContainer(
	"eltd_title_text_container",
	"eltd_show_page_title_text",
	"no"
);
$eltd_page_title_area_container->addChild(
	"eltd_title_text_container",
	$eltd_title_text_container
);

$eltd_page_title_position = new MooseElatedMetaField(
	"selectblank",
	"eltd_page_title_position",
	"",
	esc_html__( "Title Text Alignment", 'moose' ),
	esc_html__( "Specify Title text alignment", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$eltd_title_text_container->addChild(
	"eltd_page_title_position",
	$eltd_page_title_position
);

$group1 = new MooseElatedGroup(
	esc_html__( "Title Text Style", 'moose' ),
	esc_html__( "Define styles for text in Title Area", 'moose' )
);
$eltd_title_text_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_page_title_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_page-title-color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "ThisIsDescription", 'moose' )
);
$row1->addChild(
	"eltd_page-title-color",
	$eltd_page_title_color
);

$eltd_title_text_shadow = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_title_text_shadow",
	"",
	esc_html__( "Text Shadow", 'moose' ),
	esc_html__( "ThisIsDescription", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "yes", 'moose' )
	)
);
$row1->addChild(
	"eltd_title_text_shadow",
	$eltd_title_text_shadow
);

$eltd_title_standard_container = new MooseElatedContainer(
	"eltd_title_standard_container",
	"eltd_page_title_type",
	"breadcrumbs_title"
);
$eltd_page_title_area_container->addChild(
	"eltd_title_standard_container",
	$eltd_title_standard_container
);

$eltd_title_like_separator = new MooseElatedMetaField(
	"selectblank",
	"eltd_title_like_separator",
	"",
	esc_html__( "Show Separator Around Title Text", 'moose' ),
	esc_html__( "Choose if you want title to look like separator with text", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_title_like_separator_container",
			""   => "#eltdf_eltd_title_like_separator_container"
		),
		"show"       => array(
			"yes" => "#eltdf_eltd_title_like_separator_container"
		)
	)
);
$eltd_title_standard_container->addChild(
	"eltd_title_like_separator",
	$eltd_title_like_separator
);

$eltd_title_like_separator_container = new MooseElatedContainer(
	"eltd_title_like_separator_container",
	"eltd_title_like_separator",
	"",
	array( '', 'no' )
);
$eltd_title_standard_container->addChild(
	"eltd_title_like_separator_container",
	$eltd_title_like_separator_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Line Styles", 'moose' ),
	esc_html__( "Choose style for separator line", 'moose' )
);
$eltd_title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_like_separator_line_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_like_separator_line_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_like_separator_line_color",
	$eltd_title_like_separator_line_color
);

$eltd_title_like_separator_line_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_like_separator_line_width",
	"",
	esc_html__( "Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_like_separator_line_width",
	$eltd_title_like_separator_line_width
);

$eltd_title_like_separator_line_thickness = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_like_separator_line_thickness",
	$eltd_title_like_separator_line_thickness
);

$eltd_title_like_separator_line_style = new MooseElatedMetaField(
	"selectsimple",
	"eltd_title_like_separator_line_style",
	"",
	esc_html__( "Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' )
	)
);
$row1->addChild(
	"eltd_title_like_separator_line_style",
	$eltd_title_like_separator_line_style
);

$eltd_title_like_separator_margins = new MooseElatedMetaField(
	"text",
	"eltd_title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'moose' ),
	esc_html__( "Define left/right margins for title from separator", 'moose' )
);
$eltd_title_like_separator_container->addChild(
	"eltd_title_like_separator_margins",
	$eltd_title_like_separator_margins
);

$eltd_title_like_separator_line_dots = new MooseElatedMetaField(
	"selectblank",
	"eltd_title_like_separator_line_dots",
	"",
	esc_html__( "Dots on The End of Lines", 'moose' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "no" => "#eltdf_eltd_title_like_separator_dots_container" ),
		"show"       => array(
			"yes" => "#eltdf_eltd_title_like_separator_dots_container",
			""    => "#eltdf_eltd_title_like_separator_dots_container"
		)
	)
);
$eltd_title_like_separator_container->addChild(
	"eltd_title_like_separator_line_dots",
	$eltd_title_like_separator_line_dots
);

$eltd_title_like_separator_dots_container = new MooseElatedContainer(
	"eltd_title_like_separator_dots_container",
	"eltd_title_like_separator_line_dots",
	"no"
);
$eltd_title_like_separator_container->addChild(
	"eltd_title_like_separator_dots_container",
	$eltd_title_like_separator_dots_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Dots Style", 'moose' ),
	esc_html__( "Choose style for dots", 'moose' )
);
$eltd_title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_like_separator_dots_size = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_like_separator_dots_size",
	$eltd_title_like_separator_dots_size
);

$eltd_title_like_separator_dots_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_like_separator_dots_color",
	$eltd_title_like_separator_dots_color
);

//Subtitle like separator with text
$eltd_subtitle_like_separator = new MooseElatedMetaField(
	"selectblank",
	"eltd_subtitle_like_separator",
	"",
	esc_html__( "Show Separator Around Subtitle Text", 'moose' ),
	esc_html__( "Choose if you want title to look like separator with text", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_subtitle_like_separator_container",
			""   => "#eltdf_eltd_subtitle_like_separator_container"
		),
		"show"       => array(
			"yes" => "#eltdf_eltd_subtitle_like_separator_container"
		)
	)
);
$eltd_title_standard_container->addChild(
	"eltd_subtitle_like_separator",
	$eltd_subtitle_like_separator
);

$eltd_subtitle_like_separator_container = new MooseElatedContainer(
	"eltd_subtitle_like_separator_container",
	"eltd_subtitle_like_separator",
	"",
	array( '', 'no' )
);
$eltd_title_standard_container->addChild(
	"eltd_subtitle_like_separator_container",
	$eltd_subtitle_like_separator_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Line Styles", 'moose' ),
	esc_html__( "Choose style for separator line", 'moose' )
);
$eltd_subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_subtitle_like_separator_line_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_subtitle_like_separator_line_color",
	$eltd_subtitle_like_separator_line_color
);

$eltd_subtitle_like_separator_line_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_subtitle_like_separator_line_width",
	$eltd_subtitle_like_separator_line_width
);

$eltd_subtitle_like_separator_line_thickness = new MooseElatedMetaField(
	"textsimple",
	"eltd_subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_subtitle_like_separator_line_thickness",
	$eltd_subtitle_like_separator_line_thickness
);

$eltd_subtitle_like_separator_line_style = new MooseElatedMetaField(
	"selectsimple",
	"eltd_subtitle_like_separator_line_style",
	"",
	esc_html__( "Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' )
	)
);
$row1->addChild(
	"eltd_subtitle_like_separator_line_style",
	$eltd_subtitle_like_separator_line_style
);

$eltd_subtitle_like_separator_margins = new MooseElatedMetaField(
	"text",
	"eltd_subtitle_like_separator_margins",
	"",
	esc_html__( "Margins for Subitle", 'moose' ),
	esc_html__( "Define left/right margins for subtitle from separator", 'moose' )
);
$eltd_subtitle_like_separator_container->addChild(
	"eltd_subtitle_like_separator_margins",
	$eltd_subtitle_like_separator_margins
);

$eltd_page_title_background_color = new MooseElatedMetaField(
	"color",
	"eltd_page-title-background-color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for Title Area", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"eltd_page-title-background-color",
	$eltd_page_title_background_color
);

$eltd_show_page_title_image = new MooseElatedMetaField(
	"yesno",
	"eltd_show-page-title-image",
	"no",
	esc_html__( "Don't Show Background Image", 'moose' ),
	esc_html__( "Enable this option to hide background image in Title Area", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_eltd_background_image_container",
		"dependence_show_on_yes" => ""
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_show-page-title-image",
	$eltd_show_page_title_image
);

$eltd_background_image_container = new MooseElatedContainer(
	"eltd_background_image_container",
	"eltd_show-page-title-image",
	"yes"
);
$eltd_page_title_area_container->addChild(
	"eltd_background_image_container",
	$eltd_background_image_container
);

$eltd_title_image = new MooseElatedMetaField(
	"image",
	"eltd_title-image",
	"",
	esc_html__( "Background Image", 'moose' ),
	esc_html__( "Choose a background image for Title Area", 'moose' )
);
$eltd_background_image_container->addChild(
	"eltd_title-image",
	$eltd_title_image
);

$eltd_title_overlay_image = new MooseElatedMetaField(
	"image",
	"eltd_title-overlay-image",
	"",
	esc_html__( "Pattern Overlay Image", 'moose' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'moose' )
);
$eltd_background_image_container->addChild(
	"eltd_title-overlay-image",
	$eltd_title_overlay_image
);

$eltd_responsive_title_image = new MooseElatedMetaField(
	"selectblank",
	"eltd_responsive-title-image",
	"",
	esc_html__( "Responsive Background Image", 'moose' ),
	esc_html__( "Do you want to make Title background image responsive?", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"yes" => "#eltdf_eltd_responsive_title_image_container, #eltdf_eltd_title-height"
		),
		"show"       => array(
			""   => "#eltdf_eltd_responsive_title_image_container, #eltdf_eltd_title-height",
			"no" => "#eltdf_eltd_responsive_title_image_container, #eltdf_eltd_title-height"
		)
	)
);
$eltd_background_image_container->addChild(
	"eltd_responsive-title-image",
	$eltd_responsive_title_image
);

$eltd_responsive_title_image_container = new MooseElatedContainer(
	"eltd_responsive_title_image_container",
	"eltd_responsive-title-image",
	"yes"
);
$eltd_background_image_container->addChild(
	"eltd_responsive_title_image_container",
	$eltd_responsive_title_image_container
);

$eltd_fixed_title_image = new MooseElatedMetaField(
	"selectblank",
	"eltd_fixed-title-image",
	"",
	esc_html__( "Parallax Background Image", 'moose' ),
	esc_html__( "Do you want background image to have parallax effect?", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'moose' )
	)
);
$eltd_responsive_title_image_container->addChild(
	"eltd_fixed-title-image",
	$eltd_fixed_title_image
);

$eltd_title_height = new MooseElatedMetaField(
	"text",
	"eltd_title-height",
	"",
	esc_html__( "Title Height (px)", 'moose' ),
	esc_html__( "Set a height for Title Area in pixels", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltd_page_title_area_container->addChild(
	"eltd_title-height",
	$eltd_title_height
);

$eltd_border_top_title_area = new MooseElatedMetaField(
	"selectblank",
	"eltd_border_top_title_area",
	"",
	esc_html__( "Top Border", 'moose' ),
	esc_html__( "Enabling this option will display top border on Title Area", 'moose' ),
	array(
		"yes" => esc_html__( "Yes", 'moose' ),
		"no" => esc_html__( "No", 'moose' )
	),
	array(
		"dependence" => true,
		"show"       => array(
			"yes" => "#eltdf_eltd_border_top_title_area_container"
		),
		"hide"       => array(
			""   => "#eltdf_eltd_border_top_title_area_container",
			"no" => "#eltdf_eltd_border_top_title_area_container"
		)
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_border_top_title_area",
	$eltd_border_top_title_area
);

$eltd_border_top_title_area_container = new MooseElatedContainer(
	"eltd_border_top_title_area_container",
	"eltd_border_top_title_area",
	'',
	array( '', 'no' )
);
$eltd_page_title_area_container->addChild(
	"eltd_border_top_title_area_container",
	$eltd_border_top_title_area_container
);

$eltd_enable_title_border_top_grid = new MooseElatedMetaField(
	"yesno",
	"eltd_enable_title_border_top_grid",
	"no",
	esc_html__( "Enable Border in Grid", 'moose' ),
	esc_html__( "This option will show title top border in grid", 'moose' )
);
$eltd_border_top_title_area_container->addChild(
	"eltd_enable_title_border_top_grid",
	$eltd_enable_title_border_top_grid
);
$eltd_border_top_title_area_width = new MooseElatedMetaField(
	"text",
	"eltd_border_top_title_area_width",
	"",
	esc_html__( "Top Border Width (px)", 'moose' ),
	esc_html__( "Choose a width for Title Area top border Note: If width has not been set, border top will not be displayed", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltd_border_top_title_area_container->addChild(
	"eltd_border_top_title_area_width",
	$eltd_border_top_title_area_width
);
$eltd_border_top_title_area_color = new MooseElatedMetaField(
	"color",
	"eltd_border_top_title_area_color",
	"",
	esc_html__( "Top Border Color", 'moose' ),
	esc_html__( "Choose a color for Title Area top border", 'moose' )
);
$eltd_border_top_title_area_container->addChild(
	"eltd_border_top_title_area_color",
	$eltd_border_top_title_area_color
);

$eltd_border_bottom_title_area = new MooseElatedMetaField(
	"selectblank",
	"eltd_border_bottom_title_area",
	"",
	esc_html__( "Bottom Border", 'moose' ),
	esc_html__( "Enabling this option will display bottom border on Title Area", 'moose' ),
	array(
		"yes" => esc_html__( "Yes", 'moose' ),
		"no" => esc_html__( "No", 'moose' )
	),
	array(
		"dependence" => true,
		"show"       => array(
			"yes" => "#eltdf_eltd_border_bottom_title_area_container"
		),
		"hide"       => array(
			""   => "#eltdf_eltd_border_bottom_title_area_container",
			"no" => "#eltdf_eltd_border_bottom_title_area_container"
		)
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_border_bottom_title_area",
	$eltd_border_bottom_title_area
);

$eltd_border_bottom_title_area_container = new MooseElatedContainer(
	"eltd_border_bottom_title_area_container",
	"eltd_border_bottom_title_area",
	'',
	array( '', 'no' )
);
$eltd_page_title_area_container->addChild(
	"eltd_border_bottom_title_area_container",
	$eltd_border_bottom_title_area_container
);

$eltd_enable_title_border_bottom_grid = new MooseElatedMetaField(
	"yesno",
	"eltd_enable_title_border_bottom_grid",
	"no",
	esc_html__( "Enable Border in Grid", 'moose' ),
	esc_html__( "This option will show title bottom border in grid", 'moose' )
);
$eltd_border_bottom_title_area_container->addChild(
	"eltd_enable_title_border_bottom_grid",
	$eltd_enable_title_border_bottom_grid
);
$eltd_border_bottom_title_area_width = new MooseElatedMetaField(
	"text",
	"eltd_border_bottom_title_area_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'moose' ),
	esc_html__( "Choose a width for Title Area bottom border Note: If width has not been set, border bottom will not be displayed", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltd_border_bottom_title_area_container->addChild(
	"eltd_border_bottom_title_area_width",
	$eltd_border_bottom_title_area_width
);
$eltd_border_bottom_title_area_color = new MooseElatedMetaField(
	"color",
	"eltd_border_bottom_title_area_color",
	"",
	esc_html__( "Bottom Border Color", 'moose' ),
	esc_html__( "Choose a color for Title Area bottom border", 'moose' )
);
$eltd_border_bottom_title_area_container->addChild(
	"eltd_border_bottom_title_area_color",
	$eltd_border_bottom_title_area_color
);

//Separator

$eltd_title_separator = new MooseElatedMetaField(
	"selectblank",
	"eltd_title_separator",
	"",
	esc_html__( "Show Title Separator", 'moose' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#eltdf_eltd_title_separator_container",
			"no" => "#eltdf_eltd_title_separator_container"
		),
		"show"       => array(
			"yes" => "#eltdf_eltd_title_separator_container"
		)
	)
);
$eltd_title_standard_container->addChild(
	"eltd_title_separator",
	$eltd_title_separator
);

$eltd_title_separator_container = new MooseElatedContainer(
	"eltd_title_separator_container",
	"eltd_title_separator",
	"",
	array( '', 'no' )
);
$eltd_title_standard_container->addChild(
	"eltd_title_separator_container",
	$eltd_title_separator_container
);

$eltd_title_separator_format = new MooseElatedMetaField(
	"select",
	"eltd_title_separator_format",
	"",
	esc_html__( "Format", 'moose' ),
	esc_html__( "Choose a format (type) of separator", 'moose' ),
	array(
		""                 => "",
		"normal" => esc_html__( "Normal", 'moose' ),
		"with_icon" => esc_html__( "With Icon", 'moose' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                 => "#eltdf_eltd_separator_with_icon_container, #eltdf_eltd_separator_with_custom_icon_container",
			"normal"           => "#eltdf_eltd_separator_with_icon_container, #eltdf_eltd_separator_with_custom_icon_container",
			"with_custom_icon" => "#eltdf_eltd_separator_with_icon_container",
			"with_icon"        => "#eltdf_eltd_separator_with_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#eltdf_eltd_separator_with_icon_container",
			"with_custom_icon" => "#eltdf_eltd_separator_with_custom_icon_container"
		)
	)
);

$eltd_title_separator_container->addChild(
	"eltd_title_separator_format",
	$eltd_title_separator_format
);

$eltd_separator_with_icon_container = new MooseElatedContainer(
	"eltd_separator_with_icon_container",
	"eltd_title_separator_format",
	"normal",
	array( "normal", "with_custom_icon", "" )
);
$eltd_title_separator_container->addChild(
	"eltd_separator_with_icon_container",
	$eltd_separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array     = array();
$separator_icon_pack_show_array     = array();
$separator_icon_pack_hide_array[""] = "";

//do we have some collection added in collections array?
if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$separator_icon_collections_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$separator_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_eltd_separator_icon_' . $dep_collection_object->param . '_container';
		$separator_icon_pack_hide_array[""]                    .= '#eltdf_eltd_separator_icon_' . $dep_collection_object->param . '_container,';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_eltd_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
		
	}
	
	$separator_icon_pack_hide_array[""] = rtrim(
		$separator_icon_pack_hide_array[""],
		','
	);
	
}

$eltd_separator_icon_pack = new MooseElatedMetaField(
	"selectblank",
	"eltd_separator_icon_pack",
	"",
	esc_html__( "Separator Icon Pack", 'moose' ),
	esc_html__( "Choose icon pack for separator", 'moose' ),
	$moose_elated_icon_collections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$eltd_separator_with_icon_container->addChild(
	"eltd_separator_icon_pack",
	$eltd_separator_icon_pack
);

if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	//foreach icon collection we need to generate separate container that will have dependency set
	//it will have one field inside with icons dropdown
	foreach ($moose_elated_icon_collections->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
		$icon_collections_keys = $moose_elated_icon_collections->getIconCollectionsKeys();
		
		//unset current one, because it doesn't have to be included in dependency that hides icon container
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$separator_icon_hide_values    = $icon_collections_keys;
		$separator_icon_hide_values[]  = "";
		$eltd_separator_icon_container = new MooseElatedContainer(
			"eltd_separator_icon_" . $collection_object->param . "_container",
			"eltd_separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$eltd_separator_icon           = new MooseElatedMetaField(
			"select",
			"eltd_separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'moose' ),
			esc_html__( "Choose Separator Icon", 'moose' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$eltd_separator_icon_container->addChild(
			"eltd_separator_icon_" . $collection_object->param,
			$eltd_separator_icon
		);
		
		$eltd_separator_with_icon_container->addChild(
			"eltd_separator_icon_" . $collection_object->param . "_container",
			$eltd_separator_icon_container
		);
	}
	
}

$group1 = new MooseElatedGroup(
	esc_html__( "Icon Style", 'moose' ),
	esc_html__( "Choose icon style", 'moose' )
);
$eltd_separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_separator_icon_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose a color of icon for Title separator", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_color",
	$eltd_title_separator_icon_color
);

$eltd_title_separator_icon_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_hover_color",
	$eltd_title_separator_icon_hover_color
);

$eltd_title_separator_icon_custom_size = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'moose' ),
	esc_html__( "Choose size of icon", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_custom_size",
	$eltd_title_separator_icon_custom_size
);

$group2 = new MooseElatedGroup(
	esc_html__( "Icon Position and Margin", 'moose' ),
	esc_html__( "Choose icon position and left(right) margin", 'moose' )
);
$eltd_separator_with_icon_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$eltd_title_separator_icon_position = new MooseElatedMetaField(
	"selectsimple",
	"eltd_title_separator_icon_position",
	"",
	esc_html__( "Icon Position", 'moose' ),
	esc_html__( "Choose a position for an icon", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$row1->addChild(
	"eltd_title_separator_icon_position",
	$eltd_title_separator_icon_position
);

$eltd_title_separator_icon_margins = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'moose' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_margins",
	$eltd_title_separator_icon_margins
);

$eltd_title_separator_icon_type = new MooseElatedMetaField(
	"selectblank",
	"eltd_title_separator_icon_type",
	"",
	esc_html__( "Icon Type", 'moose' ),
	esc_html__( "Choose icon type", 'moose' ),
	array(
		"normal" => esc_html__( "Normal", 'moose' ),
		"circle" => esc_html__( "Circle", 'moose' ),
		"square" => esc_html__( "Square", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal" => "#eltdf_eltd_title_separator_types_container",
			""       => "#eltdf_eltd_title_separator_types_container"
		),
		"show"       => array(
			"circle" => "#eltdf_eltd_title_separator_types_container",
			"square" => "#eltdf_eltd_title_separator_types_container"
		)
	)
);
$eltd_separator_with_icon_container->addChild(
	"eltd_title_separator_icon_type",
	$eltd_title_separator_icon_type
);

$eltd_title_separator_types_container = new MooseElatedContainer(
	"eltd_title_separator_types_container",
	"eltd_title_separator_icon_type",
	"",
	array( "", "normal" )
);
$eltd_separator_with_icon_container->addChild(
	"eltd_title_separator_types_container",
	$eltd_title_separator_types_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Border Style", 'moose' ),
	esc_html__( "Define border style for icon", 'moose' )
);
$eltd_title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_separator_icon_border_radius = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "Enter border radius for icon", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_border_radius",
	$eltd_title_separator_icon_border_radius
);

$eltd_title_separator_icon_border_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "Enter border width for icon", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_border_width",
	$eltd_title_separator_icon_border_width
);

$eltd_title_separator_icon_border_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Enter border color for icon", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_border_color",
	$eltd_title_separator_icon_border_color
);

$eltd_title_separator_icon_border_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "Enter border color for icon", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_border_hover_color",
	$eltd_title_separator_icon_border_hover_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Additional Icon Style", 'moose' ),
	esc_html__( "Choose adition icon styling", 'moose' )
);
$eltd_title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$eltd_title_separator_icon_shape_size = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_shape_size",
	$eltd_title_separator_icon_shape_size
);

$eltd_title_separator_icon_background_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_background_color",
	$eltd_title_separator_icon_background_color
);

$eltd_title_separator_icon_background_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_icon_background_hover_color",
	$eltd_title_separator_icon_background_hover_color
);

$eltd_separator_with_custom_icon_container = new MooseElatedContainer(
	"eltd_separator_with_custom_icon_container",
	"eltd_title_separator_format",
	"normal",
	array( "normal", "with_icon", "" )
);
$eltd_title_separator_container->addChild(
	"eltd_separator_with_custom_icon_container",
	$eltd_separator_with_custom_icon_container
);

$eltd_separator_custom_icon = new MooseElatedMetaField(
	"image",
	"eltd_separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'moose' ),
	esc_html__( "Choose custom icon for separator", 'moose' )
);
$eltd_separator_with_custom_icon_container->addChild(
	"eltd_separator_custom_icon",
	$eltd_separator_custom_icon
);

$eltd_title_separator_type = new MooseElatedMetaField(
	"select",
	"eltd_title_separator_type",
	"",
	esc_html__( "Type", 'moose' ),
	esc_html__( "Choose a Title separator line style", 'moose' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' )
	)
);
$eltd_title_separator_container->addChild(
	"eltd_title_separator_type",
	$eltd_title_separator_type
);

$eltd_title_separator_position = new MooseElatedMetaField(
	"select",
	"eltd_title_separator_position",
	"",
	esc_html__( "Position", 'moose' ),
	esc_html__( "Choose a Title separator position", 'moose' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'moose' ),
		"below" => esc_html__( "Below Title", 'moose' )
	)
);
$eltd_title_separator_container->addChild(
	"eltd_title_separator_position",
	$eltd_title_separator_position
);

$eltd_title_separator_color = new MooseElatedMetaField(
	"color",
	"eltd_title_separator_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose a color for Title separator", 'moose' )
);
$eltd_title_separator_container->addChild(
	"eltd_title_separator_color",
	$eltd_title_separator_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Size", 'moose' ),
	esc_html__( 'Define size for Title separator', 'moose' )
);
$eltd_title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_separator_thickness = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_thickness",
	$eltd_title_separator_thickness
);

$eltd_title_separator_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_separator_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_width",
	$eltd_title_separator_width
);

$group2 = new MooseElatedGroup(
	esc_html__( "Margin", 'moose' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'moose' )
);
$eltd_title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$eltd_title_separator_topmargin = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_topmargin",
	$eltd_title_separator_topmargin
);

$eltd_title_separator_bottommargin = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_title_separator_bottommargin",
	$eltd_title_separator_bottommargin
);

$eltd_title_graphics = new MooseElatedMetaField(
	"image",
	"eltd_title-graphics",
	"",
	esc_html__( "Title Graphics", 'moose' ),
	esc_html__( "Choose a graphic for Title Area, appearing above title", 'moose' )
);
$eltd_title_standard_container->addChild(
	"eltd_title-graphics",
	$eltd_title_graphics
);

$eltd_enable_breadcrumbs = new MooseElatedMetaField(
	"selectblank",
	"eltd_enable_breadcrumbs",
	"",
	esc_html__( "Enable Breadcrumbs", 'moose' ),
	esc_html__( "Do you want to display breadcrumbs in title area?", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#eltdf_animation_page_page_title_breadcrumbs_container",
			"no" => "#eltdf_animation_page_page_title_breadcrumbs_container"
		),
		"show"       => array(
			"yes" => "#eltdf_animation_page_page_title_breadcrumbs_container"
		)
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_enable_breadcrumbs",
	$eltd_enable_breadcrumbs
);

$eltd_page_breadcrumbs_color = new MooseElatedMetaField(
	"color",
	"eltd_page_breadcrumbs_color",
	"",
	esc_html__( "Breadcrumbs Color", 'moose' ),
	esc_html__( "Choose a color for breadcrumbs text ", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"eltd_page_breadcrumbs_color",
	$eltd_page_breadcrumbs_color
);

$eltd_page_subtitle = new MooseElatedMetaField(
	"text",
	"eltd_page_subtitle",
	"",
	esc_html__( "Subtitle Text", 'moose' ),
	esc_html__( "Enter your subtitle text", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"eltd_page_subtitle",
	$eltd_page_subtitle
);

$eltd_page_subtitle_position = new MooseElatedMetaField(
	"selectblank",
	"eltd_page_subtitle_position",
	"",
	esc_html__( "Subtitle Position", 'moose' ),
	esc_html__( "Choose a Subtitle position", 'moose' ),
	array(
		"below_title" => esc_html__( "Below Title", 'moose' ),
		"above_title" => esc_html__( "Above Title", 'moose' )
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_page_subtitle_position",
	$eltd_page_subtitle_position
);

$eltd_page_subtitle_color = new MooseElatedMetaField(
	"color",
	"eltd_page_subtitle_color",
	"",
	esc_html__( "Subtitle Text Color", 'moose' ),
	esc_html__( "Choose a color for subtitle text", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"eltd_page_subtitle_color",
	$eltd_page_subtitle_color
);

$eltd_page_subtitle_text_size = new MooseElatedMetaField(
	"selectblank",
	"eltd_page_subtitle_text_size",
	"",
	esc_html__( "Subtitle Text Size", 'moose' ),
	esc_html__( "Size for subtitle text", 'moose' ),
	array(
		'small_subtitle' => esc_html__( 'Small', 'moose' ),
		'medium_subtitle' => esc_html__( 'Medium', 'moose' ),
		'large_subtitle' => esc_html__( 'Large', 'moose' )
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_page_subtitle_text_size",
	$eltd_page_subtitle_text_size
);

$eltd_title_content_style = new MooseElatedGroup(
	esc_html__( "Title Content Style", 'moose' ),
	esc_html__( "Define style for title area content", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"eltd_title_content_style",
	$eltd_title_content_style
);

$row1 = new MooseElatedRow();
$eltd_title_content_style->addChild(
	"row1",
	$row1
);

$eltd_title_area_content_background_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_area_content_background_color",
	"",
	esc_html__( "Title Area Content Background Color", 'moose' ),
	esc_html__( "Choose a background color for Title Area Content", 'moose' )
);
$row1->addChild(
	"eltd_title_area_content_background_color",
	$eltd_title_area_content_background_color
);

$eltd_title_area_content_opacity = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_area_content_opacity",
	"",
	esc_html__( "Title Area Content Background Color Opacity", 'moose' ),
	esc_html__( "Choose a transparency for the content area background color (0 = fully transparent, 1 = opaque)", 'moose' )
);
$row1->addChild(
	"eltd_title_area_content_opacity",
	$eltd_title_area_content_opacity
);

$eltd_title_content_in_grid = new MooseElatedMetaField(
	"yesno",
	"eltd_title_content_in_grid",
	"",
	esc_html__( "Title Area Content In Grid", 'moose' ),
	esc_html__( "This option will show title area content in grid", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"eltd_title_content_in_grid",
	$eltd_title_content_in_grid
);

$eltd_title_content_shadow = new MooseElatedMetaField(
	"yesno",
	"moose_elated_title_content_shadow",
	"",
	esc_html__( "Show Title Content Area Shadows", 'moose' ),
	esc_html__( "Enabling this option will show shadows on title content area", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"moose_elated_title_content_shadow",
	$eltd_title_content_shadow
);

$title_area_padding_group = new MooseElatedGroup(
	esc_html__( "Title Area Content Padding", 'moose' ),
	esc_html__( "Define padding for title area content", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"title_area_padding_group",
	$title_area_padding_group
);

$row1 = new MooseElatedRow();
$title_area_padding_group->addChild(
	"row1",
	$row1
);

$eltd_title_content_top_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_content_top_padding",
	"",
	esc_html__( "Top Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_title_content_top_padding",
	$eltd_title_content_top_padding
);

$eltd_title_content_right_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_content_right_padding",
	"",
	esc_html__( "Right Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_title_content_right_padding",
	$eltd_title_content_right_padding
);

$eltd_title_content_bottom_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_content_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_title_content_bottom_padding",
	$eltd_title_content_bottom_padding
);

$eltd_title_content_left_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_content_left_padding",
	"",
	esc_html__( "Left Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_title_content_left_padding",
	$eltd_title_content_left_padding
);

$eltd_title_style = new MooseElatedGroup(
	esc_html__( "Title Style", 'moose' ),
	esc_html__( "Define style for title", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"eltd_title_style",
	$eltd_title_style
);

$row1 = new MooseElatedRow();
$eltd_title_style->addChild(
	"row1",
	$row1
);

$eltd_title_background_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_title_background_color",
	"",
	esc_html__( "Title Background Color", 'moose' ),
	esc_html__( "Choose a background color for Title", 'moose' )
);
$row1->addChild(
	"eltd_title_background_color",
	$eltd_title_background_color
);

$eltd_title_opacity = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_opacity",
	"",
	esc_html__( "Title Background Color Opacity", 'moose' ),
	esc_html__( "Choose a transparency for the title background color (0 = fully transparent, 1 = opaque)", 'moose' )
);
$row1->addChild(
	"eltd_title_opacity",
	$eltd_title_opacity
);

$title_padding_group = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define padding for title (When using separator around title, only right margin is counted for left/right margin)", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"title_padding_group",
	$title_padding_group
);

$row1 = new MooseElatedRow( true );
$title_padding_group->addChild(
	"row1",
	$row1
);

$eltd_title_top_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_title_top_padding",
	$eltd_title_top_padding
);

$eltd_title_right_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_title_right_padding",
	$eltd_title_right_padding
);

$eltd_title_bottom_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_title_bottom_padding",
	$eltd_title_bottom_padding
);

$eltd_title_left_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_title_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_title_left_padding",
	$eltd_title_left_padding
);

$eltd_subtitle_style = new MooseElatedGroup(
	esc_html__( "Subtitle Style", 'moose' ),
	esc_html__( "Define style for subtitle (When using separator around subtitle, only right margin is counted for left/right margin)", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"eltd_subtitle_style",
	$eltd_subtitle_style
);

$row1 = new MooseElatedRow();
$eltd_subtitle_style->addChild(
	"row1",
	$row1
);

$eltd_subtitle_background_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_subtitle_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'moose' ),
	esc_html__( "Choose a background color for Subtitle", 'moose' )
);
$row1->addChild(
	"eltd_subtitle_background_color",
	$eltd_subtitle_background_color
);

$eltd_subtitle_opacity = new MooseElatedMetaField(
	"textsimple",
	"eltd_subtitle_opacity",
	"",
	esc_html__( "Subtitle Background Color Opacity", 'moose' ),
	esc_html__( "Choose a transparency for the subtitle background color (0 = fully transparent, 1 = opaque)", 'moose' )
);
$row1->addChild(
	"eltd_subtitle_opacity",
	$eltd_subtitle_opacity
);

$subtitle_padding_group = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define padding for subtitle", 'moose' )
);
$eltd_page_title_area_container->addChild(
	"subtitle_padding_group",
	$subtitle_padding_group
);
$row1 = new MooseElatedRow( true );
$subtitle_padding_group->addChild(
	"row1",
	$row1
);

$eltd_subtitle_top_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_subtitle_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_subtitle_top_padding",
	$eltd_subtitle_top_padding
);

$eltd_subtitle_right_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_subtitle_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_subtitle_right_padding",
	$eltd_subtitle_right_padding
);

$eltd_subtitle_bottom_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_subtitle_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_subtitle_bottom_padding",
	$eltd_subtitle_bottom_padding
);

$eltd_subtitle_left_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_subtitle_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"eltd_subtitle_left_padding",
	$eltd_subtitle_left_padding
);

//Portfolio Title Animations
$eltdTitleAnimations = new MooseElatedMetaBox(
	'portfolio_page',
	esc_html__( 'Title Animations', 'moose' ),
	'eltd_show-page-title',
	array( 'no' )
);
moose_elated_meta_boxes()->addMetaBox(
	'portfolio_title_animations',
	$eltdTitleAnimations
);

//Whole title content animation
$page_page_title_whole_content_animations = new MooseElatedMetaField(
	'selectblank',
	'page_page_title_whole_content_animations',
	'',
	esc_html__( 'Enable Whole Title Content Animation', 'moose' ),
	esc_html__( 'This option will enable whole title content animation', 'moose' ),
	array(
		'no' => esc_html__( 'No', 'moose' ),
		'yes' => esc_html__( 'Yes', 'moose' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_whole_content_animations_container',
			'no' => '#eltdf_page_page_title_whole_content_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_whole_content_animations_container'
		)
	)
);
$eltdTitleAnimations->addChild(
	'page_page_title_whole_content_animations',
	$page_page_title_whole_content_animations
);

$page_page_title_whole_content_animations_container = new MooseElatedContainer(
	'page_page_title_whole_content_animations_container',
	'page_page_title_whole_content_animations',
	'',
	array( '', 'no' )
);
$eltdTitleAnimations->addChild(
	'page_page_title_whole_content_animations_container',
	$page_page_title_whole_content_animations_container
);

$page_page_title_whole_content_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_start',
	$page_page_title_whole_content_animations_data_start
);

$row1 = new MooseElatedRow();
$page_page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_whole_content_data_start = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_page_title_whole_content_data_start',
	$page_page_title_whole_content_data_start
);

$page_page_title_whole_content_start_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_page_title_whole_content_start_custom_style',
	$page_page_title_whole_content_start_custom_style
);

$page_page_title_whole_content_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_end',
	$page_page_title_whole_content_animations_data_end
);

$row2 = new MooseElatedRow();
$page_page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_whole_content_data_end = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_page_title_whole_content_data_end',
	$page_page_title_whole_content_data_end
);

$page_page_title_whole_content_end_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_page_title_whole_content_end_custom_style',
	$page_page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_page_title_container = new MooseElatedContainerNoStyle(
	'animation_page_page_title_container',
	'eltd_show_page_title_text',
	'no'
);
$eltdTitleAnimations->addChild(
	'animation_page_page_title_container',
	$animation_page_page_title_container
);

$page_page_title_animations = new MooseElatedMetaField(
	'selectblank',
	'page_page_title_animations',
	'',
	esc_html__( 'Enable Page Title Animations', 'moose' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'moose' ),
	array(
		'no' => esc_html__( 'No', 'moose' ),
		'yes' => esc_html__( 'Yes', 'moose' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_animations_container',
			'no' => '#eltdf_page_page_title_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_animations_container'
		)
	)
);

$animation_page_page_title_container->addChild(
	'page_page_title_animations',
	$page_page_title_animations
);

$page_page_title_animations_container = new MooseElatedContainer(
	'page_page_title_animations_container',
	'page_page_title_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_container->addChild(
	'page_page_title_animations_container',
	$page_page_title_animations_container
);

$page_page_title_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_start',
	$page_page_title_animations_data_start
);

$row1 = new MooseElatedRow();
$page_page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_data_start = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_page_title_data_start',
	$page_page_title_data_start
);

$page_page_title_start_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_page_title_start_custom_style',
	$page_page_title_start_custom_style
);

$page_page_title_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_end',
	$page_page_title_animations_data_end
);

$row2 = new MooseElatedRow();
$page_page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_data_end = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_page_title_data_end',
	$page_page_title_data_end
);

$page_page_title_end_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_page_title_end_custom_style',
	$page_page_title_end_custom_style
);

//Title Separator Animations
$page_page_title_separator_animations = new MooseElatedMetaField(
	'selectblank',
	'page_page_title_separator_animations',
	'',
	esc_html__( 'Enable Page Separator Title Animations', 'moose' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'moose' ),
	array(
		'no' => esc_html__( 'No', 'moose' ),
		'yes' => esc_html__( 'Yes', 'moose' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_separator_animations_container',
			'no' => '#eltdf_page_page_title_separator_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_separator_animations_container'
		)
	)
);
$eltdTitleAnimations->addChild(
	'page_page_title_separator_animations',
	$page_page_title_separator_animations
);

$page_page_title_separator_animations_container = new MooseElatedContainer(
	'page_page_title_separator_animations_container',
	'page_page_title_separator_animations',
	'',
	array( 'no', '' )
);
$eltdTitleAnimations->addChild(
	'page_page_title_separator_animations_container',
	$page_page_title_separator_animations_container
);

$page_page_title_separator_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_start',
	$page_page_title_separator_animations_data_start
);

$row1 = new MooseElatedRow();
$page_page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_separator_data_start = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_page_title_separator_data_start',
	$page_page_title_separator_data_start
);

$page_page_title_separator_start_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_page_title_separator_start_custom_style',
	$page_page_title_separator_start_custom_style
);

$page_page_title_separator_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_end',
	$page_page_title_separator_animations_data_end
);

$row2 = new MooseElatedRow();
$page_page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_separator_data_end = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_page_title_separator_data_end',
	$page_page_title_separator_data_end
);

$page_page_title_separator_end_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_page_title_separator_end_custom_style',
	$page_page_title_separator_end_custom_style
);

//Subtitle Animations
$page_page_subtitle_animations = new MooseElatedMetaField(
	'selectblank',
	'page_page_subtitle_animations',
	'',
	esc_html__( 'Enable Page Subtitle Animations', 'moose' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'moose' ),
	array(
		'no' => esc_html__( 'No', 'moose' ),
		'yes' => esc_html__( 'Yes', 'moose' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_subtitle_animations_container',
			'no' => '#eltdf_page_page_subtitle_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_subtitle_animations_container'
		)
	)
);
$eltdTitleAnimations->addChild(
	'page_page_subtitle_animations',
	$page_page_subtitle_animations
);

$page_page_subtitle_animations_container = new MooseElatedContainer(
	'page_page_subtitle_animations_container',
	'page_page_subtitle_animations',
	'',
	array( '', 'no' )
);
$eltdTitleAnimations->addChild(
	'page_page_subtitle_animations_container',
	$page_page_subtitle_animations_container
);

$page_page_subtitle_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_start',
	$page_page_subtitle_animations_data_start
);

$row1 = new MooseElatedRow();
$page_page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_subtitle_data_start = new MooseElatedMetaField(
	'textsimple',
	'page_page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_page_subtitle_data_start',
	$page_page_subtitle_data_start
);

$page_page_subtitle_start_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_page_subtitle_start_custom_style',
	$page_page_subtitle_start_custom_style
);

$page_page_subtitle_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_end',
	$page_page_subtitle_animations_data_end
);

$row2 = new MooseElatedRow();
$page_page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_subtitle_data_end = new MooseElatedMetaField(
	'textsimple',
	'page_page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_page_subtitle_data_end',
	$page_page_subtitle_data_end
);

$page_page_subtitle_end_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_page_subtitle_end_custom_style',
	$page_page_subtitle_end_custom_style
);

//Graphic Animations
$page_page_title_graphic_animations = new MooseElatedMetaField(
	'selectblank',
	'page_page_title_graphic_animations',
	'',
	esc_html__( 'Enable Page Title Graphic Animations', 'moose' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'moose' ),
	array(
		'no' => esc_html__( 'No', 'moose' ),
		'yes' => esc_html__( 'Yes', 'moose' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_graphic_animations_container',
			'no' => '#eltdf_page_page_title_graphic_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_graphic_animations_container'
		)
	)
);
$eltdTitleAnimations->addChild(
	'page_page_title_graphic_animations',
	$page_page_title_graphic_animations
);

$page_page_title_graphic_animations_container = new MooseElatedContainer(
	'page_page_title_graphic_animations_container',
	'page_page_title_graphic_animations',
	'',
	array( '', 'no' )
);
$eltdTitleAnimations->addChild(
	'page_page_title_graphic_animations_container',
	$page_page_title_graphic_animations_container
);

$page_page_title_graphic_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_start',
	$page_page_title_graphic_animations_data_start
);

$row1 = new MooseElatedRow();
$page_page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_graphic_data_start = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_page_title_graphic_data_start',
	$page_page_title_graphic_data_start
);

$page_page_title_graphic_start_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_page_title_graphic_start_custom_style',
	$page_page_title_graphic_start_custom_style
);

$page_page_title_graphic_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_end',
	$page_page_title_graphic_animations_data_end
);

$row2 = new MooseElatedRow();
$page_page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_graphic_data_end = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_page_title_graphic_data_end',
	$page_page_title_graphic_data_end
);

$page_page_title_graphic_end_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_page_title_graphic_end_custom_style',
	$page_page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_page_title_breadcrumbs_container = new MooseElatedContainerNoStyle(
	'animation_page_page_title_breadcrumbs_container',
	'eltd_enable_breadcrumbs',
	'no'
);
$eltdTitleAnimations->addChild(
	'animation_page_page_title_breadcrumbs_container',
	$animation_page_page_title_breadcrumbs_container
);

$page_page_title_breadcrumbs_animations = new MooseElatedMetaField(
	'selectblank',
	'page_page_title_breadcrumbs_animations',
	'',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'moose' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'moose' ),
	array(
		'no' => esc_html__( 'No', 'moose' ),
		'yes' => esc_html__( 'Yes', 'moose' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_breadcrumbs_animations_container',
			'no' => '#eltdf_page_page_title_breadcrumbs_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_breadcrumbs_animations_container'
		)
	)
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations',
	$page_page_title_breadcrumbs_animations
);

$page_page_title_breadcrumbs_animations_container = new MooseElatedContainer(
	'page_page_title_breadcrumbs_animations_container',
	'page_page_title_breadcrumbs_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations_container',
	$page_page_title_breadcrumbs_animations_container
);

$page_page_title_breadcrumbs_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_start',
	$page_page_title_breadcrumbs_animations_data_start
);

$row1 = new MooseElatedRow();
$page_page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_breadcrumbs_data_start = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_data_start',
	$page_page_title_breadcrumbs_data_start
);

$page_page_title_breadcrumbs_start_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_start_custom_style',
	$page_page_title_breadcrumbs_start_custom_style
);

$page_page_title_breadcrumbs_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_end',
	$page_page_title_breadcrumbs_animations_data_end
);

$row2 = new MooseElatedRow();
$page_page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_breadcrumbs_data_end = new MooseElatedMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_data_end',
	$page_page_title_breadcrumbs_data_end
);

$page_page_title_breadcrumbs_end_custom_style = new MooseElatedMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_end_custom_style',
	$page_page_title_breadcrumbs_end_custom_style
);

// Content Bottom

$eltdContentBottom = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "Content Bottom", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"portfolio_content_bottom_page",
	$eltdContentBottom
);

$eltd_enable_content_bottom_area = new MooseElatedMetaField(
	"selectblank",
	"eltd_enable_content_bottom_area",
	"",
	esc_html__( "Show Content Bottom Area", 'moose' ),
	esc_html__( "Do you want to show content bottom area?", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_enable_content_bottom_area_container",
			""   => "#eltdf_eltd_enable_content_bottom_area_container"
		),
		"show"       => array(
			"yes" => "#eltdf_eltd_enable_content_bottom_area_container"
		)
	)
);
$eltdContentBottom->addChild(
	"eltd_enable_content_bottom_area",
	$eltd_enable_content_bottom_area
);

$eltd_enable_content_bottom_area_container = new MooseElatedContainer(
	"eltd_enable_content_bottom_area_container",
	"eltd_enable_content_bottom_area",
	"no",
	array( "", "no" )
);
$eltdContentBottom->addChild(
	"eltd_enable_content_bottom_area_container",
	$eltd_enable_content_bottom_area_container
);

$eltd_content_bottom_background_color = new MooseElatedMetaField(
	"color",
	"eltd_content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose a color for content bottom area", 'moose' )
);
$eltd_enable_content_bottom_area_container->addChild(
	"eltd_content_bottom_background_color",
	$eltd_content_bottom_background_color
);

$eltd_choose_content_bottom_sidebar = new MooseElatedMetaField(
	"selectblank",
	"eltd_choose_content_bottom_sidebar",
	"",
	esc_html__( "Custom Widget", 'moose' ),
	esc_html__( "Choose Custom Widget area to display", 'moose' ),
	$eltd_custom_sidebars
);
$eltd_enable_content_bottom_area_container->addChild(
	"eltd_choose_content_bottom_sidebar",
	$eltd_choose_content_bottom_sidebar
);

$eltd_content_bottom_sidebar_in_grid = new MooseElatedMetaField(
	"selectblank",
	"eltd_content_bottom_sidebar_in_grid",
	"",
	esc_html__( "Display in Grid", 'moose' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltd_enable_content_bottom_area_container->addChild(
	"eltd_content_bottom_sidebar_in_grid",
	$eltd_content_bottom_sidebar_in_grid
);

// Side Bar Area

$eltdSideBar = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "Sidebar", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"portfolio_side_bar",
	$eltdSideBar
);

$eltd_show_sidebar = new MooseElatedMetaField(
	"selectblank",
	"eltd_portfolio_show_sidebar",
	"default",
	esc_html__( "Layout", 'moose' ),
	esc_html__( "Choose the sidebar layout", 'moose' ),
	array(
		"default" => esc_html__( "Default", 'moose' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'moose' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'moose' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'moose' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'moose' ),
	)
);
$eltdSideBar->addChild(
	"eltd_portfolio_show_sidebar",
	$eltd_show_sidebar
);

$eltd_choose_sidebar = new MooseElatedMetaField(
	"selectblank",
	"eltd_choose-sidebar",
	"default",
	esc_html__( "Choose Widget Area in Sidebar", 'moose' ),
	esc_html__( "Choose Custom Widget area to display in Sidebar", 'moose' ),
	$eltd_custom_sidebars
);
$eltdSideBar->addChild(
	"eltd_choose-sidebar",
	$eltd_choose_sidebar
);

// Footer

$eltdFooter = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "Footer", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"portfolio_footer",
	$eltdFooter
);

$eltd_footer_disable = new MooseElatedMetaField(
	"yesno",
	"eltd_footer-disable",
	"no",
	esc_html__( "Disable Footer for this Page", 'moose' ),
	esc_html__( "Enabling this option will hide footer on your page", 'moose' )
);
$eltdFooter->addChild(
	"eltd_footer-disable",
	$eltd_footer_disable
);

// SEO

$eltdSeo = new MooseElatedMetaBox(
	"portfolio_page",
	esc_html__( "SEO", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"portfolio_seo",
	$eltdSeo
);

$seo_title = new MooseElatedMetaField(
	"text",
	"eltd_seo_title",
	"",
	esc_html__( "SEO Title", 'moose' ),
	esc_html__( "Enter custom Title for this page", 'moose' )
);
$eltdSeo->addChild(
	"eltd_seo_title",
	$seo_title
);

$seo_keywords = new MooseElatedMetaField(
	"text",
	"eltd_seo_keywords",
	"",
	esc_html__( "SEO Keywords", 'moose' ),
	esc_html__( "Enter the list of keywords separated by commas", 'moose' )
);
$eltdSeo->addChild(
	"eltd_seo_keywords",
	$seo_keywords
);

$seo_description = new MooseElatedMetaField(
	"textarea",
	"eltd_seo_description",
	"",
	esc_html__( "SEO Description", 'moose' ),
	esc_html__( "Enter meta description for this page", 'moose' )
);
$eltdSeo->addChild(
	"eltd_seo_description",
	$seo_description
);