<?php

$contentPage = new MooseElatedAdminPage(
	'_content',
	esc_html__( 'Content', 'moose' ),
	'fa fa-align-justify'
);
moose_elated_framework()->eltdOptions->addAdminPage(
	'content',
	$contentPage
);

$panel_general = new MooseElatedPanel(
	esc_html__( 'General', 'moose' ),
	'general'
);
$contentPage->addChild(
	'panel_general',
	$panel_general
);

$background_color = new MooseElatedField(
	"color",
	"background_color",
	"",
	esc_html__( "Content Background Color", 'moose' ),
	esc_html__( "Choose the background color for page content area. Default color is #f5f5f5.", 'moose' )
);
$panel_general->addChild(
	"background_color",
	$background_color
);

$background_color_grid = new MooseElatedField(
	"color",
	"background_color_grid",
	"",
	esc_html__( "Content Background Color for Templates in Grid", 'moose' ),
	esc_html__( "Choose the background color for the page templates in grid.", 'moose' )
);
$panel_general->addChild(
	"background_color_grid",
	$background_color_grid
);

$content_top_padding = new MooseElatedField(
	"text",
	"content_top_padding",
	"0",
	esc_html__( "Content Top Padding (px)", 'moose' ),
	esc_html__( "Enter top padding for content area. If you set this value then it's important to set also Content top padding for mobile header value.", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel_general->addChild(
	"content_top_padding",
	$content_top_padding
);

$content_top_padding_default_template = new MooseElatedField(
	"text",
	"content_top_padding_default_template",
	"80",
	esc_html__( "Content Top Padding for Templates in Grid (px)", 'moose' ),
	esc_html__( "Enter top padding for content area for Templates in grid. If you set this value then it's important to set also Content top padding for mobile header value.", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel_general->addChild(
	"content_top_padding_default_template",
	$content_top_padding_default_template
);

$content_top_padding_mobile = new MooseElatedField(
	"text",
	"content_top_padding_mobile",
	"44",
	esc_html__( "Content Top Padding for Mobile Header (px)", 'moose' ),
	esc_html__( "Enter top padding for content area for Mobile Header.", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel_general->addChild(
	"content_top_padding_mobile",
	$content_top_padding_mobile
);

$overlapping_content = new MooseElatedField(
	"yesno",
	"overlapping_content",
	"no",
	esc_html__( "Enable Overlapping Content", 'moose' ),
	esc_html__( "Enabling this option will make content overlap title area or slider for set amount of pixels", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_overlapping_content_container"
	)
);
$panel_general->addChild(
	"overlapping_content",
	$overlapping_content
);

$overlapping_content_container = new MooseElatedContainer(
	"overlapping_content_container",
	"overlapping_content",
	"no"
);
$panel_general->addChild(
	"overlapping_content_container",
	$overlapping_content_container
);

$overlapping_top_content_amount = new MooseElatedField(
	"text",
	"overlapping_top_content_amount",
	"",
	esc_html__( "Overlapping top amount (px)", 'moose' ),
	esc_html__( "Enter amount of pixels you would like content to overlap title area or slider (default is 40)", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_top_content_amount",
	$overlapping_top_content_amount
);

$overlapping_bottom_content_amount = new MooseElatedField(
	"text",
	"overlapping_bottom_content_amount",
	"",
	esc_html__( "Overlapping bottom amount (px)", 'moose' ),
	esc_html__( "Enter amount of pixels you would like content to overlap footer (default is 40)", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_bottom_content_amount",
	$overlapping_bottom_content_amount
);

$overlapping_content_padding = new MooseElatedField(
	"text",
	"overlapping_content_padding",
	"",
	esc_html__( "Overlapping left/right padding (px)", 'moose' ),
	esc_html__( "This option takes effect only on Default (in grid) templates", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_content_padding",
	$overlapping_content_padding
);

$animate_overlapping_content = new MooseElatedField(
	"yesno",
	"animate_overlapping_content",
	"no",
	esc_html__( "Animate overlapping content", 'moose' ),
	esc_html__( "Enabling this option will turn on entry animation on overlapping content", 'moose' )
);
$overlapping_content_container->addChild(
	"animate_overlapping_content",
	$animate_overlapping_content
);

$frame_around_overlapping_content = new MooseElatedField(
	"yesno",
	"frame_around_overlapping_content",
	"no",
	esc_html__( "Frame around overlapping content", 'moose' ),
	esc_html__( "Enabling this option will set a frame around the overlapping content", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_frame_around_overlapping_content_container"
	)
);
$overlapping_content_container->addChild(
	"frame_around_overlapping_content",
	$frame_around_overlapping_content
);

$frame_around_overlapping_content_container = new MooseElatedContainer(
	"frame_around_overlapping_content_container",
	"frame_around_overlapping_content",
	"no"
);
$overlapping_content_container->addChild(
	"frame_around_overlapping_content_container",
	$frame_around_overlapping_content_container
);

$frame_around_overlapping_content_width = new MooseElatedField(
	"text",
	"frame_around_overlapping_content_width",
	"",
	esc_html__( "Frame width (px)", 'moose' ),
	esc_html__( "Enter the width of the frame (default is 15)", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$frame_around_overlapping_content_container->addChild(
	"frame_around_overlapping_content_width",
	$frame_around_overlapping_content_width
);

$frame_around_overlapping_content_color = new MooseElatedField(
	"color",
	"frame_around_overlapping_content_color",
	"",
	esc_html__( "Frame Color", 'moose' ),
	esc_html__( "Choose a color for frame", 'moose' )
);
$frame_around_overlapping_content_container->addChild(
	"frame_around_overlapping_content_color",
	$frame_around_overlapping_content_color
);

$frame_around_overlapping_content_pattern = new MooseElatedField(
	"image",
	"frame_around_overlapping_content_pattern",
	"",
	esc_html__( "Pattern Image", 'moose' ),
	esc_html__( "Choose an image to be used as a pattern in the frame around the overlapping content", 'moose' )
);
$frame_around_overlapping_content_container->addChild(
	"frame_around_overlapping_content_pattern",
	$frame_around_overlapping_content_pattern
);

$content_grid_position = new MooseElatedField(
	"select",
	"content_grid_position",
	"",
	esc_html__( "Position of Content in Grid", 'moose' ),
	esc_html__( "Set position of content in grid", 'moose' ),
	array(
		"default" => esc_html__( "Default", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$panel_general->addChild(
	"content_grid_position",
	$content_grid_position
);

$content_predefined_width = new MooseElatedField(
	"select",
	"content_predefined_width",
	"",
	esc_html__( "Initial Width of Content", 'moose' ),
	esc_html__( "Choose the initial width of content which is in grid (Applies to pages set to 'Default Template' and rows set to 'In Grid' )", 'moose' ),
	array(
		"" => esc_html__( "1100px - default", 'moose' ),
		"grid_1300" => esc_html__( "1300px", 'moose' ),
		"grid_1200" => esc_html__( "1200px", 'moose' ),
		"grid_1000" => esc_html__( "1000px", 'moose' ),
		"grid_800" => esc_html__( "800px", 'moose' )
	)
);
$panel_general->addChild(
	"content_predefined_width",
	$content_predefined_width
);

//Content Bottom Area

$panel_content_bottom = new MooseElatedPanel(
	esc_html__( "Content Bottom Area", 'moose' ),
	"content_bottom_area_panel"
);
$contentPage->addChild(
	"panel_content_bottom",
	$panel_content_bottom
);

$enable_content_bottom_area = new MooseElatedField(
	"yesno",
	"enable_content_bottom_area",
	"no",
	esc_html__( "Enable Content Bottom Area", 'moose' ),
	esc_html__( "This option will enable Content Bottom area on pages", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_content_bottom_area_container"
	)
);
$panel_content_bottom->addChild(
	"enable_content_bottom_area",
	$enable_content_bottom_area
);

$enable_content_bottom_area_container = new MooseElatedContainer(
	"enable_content_bottom_area_container",
	"enable_content_bottom_area",
	"no"
);
$panel_content_bottom->addChild(
	"enable_content_bottom_area_container",
	$enable_content_bottom_area_container
);

$custom_sidebars = moose_elated_get_custom_sidebars();

$content_bottom_sidebar_custom_display = new MooseElatedField(
	"selectblank",
	"content_bottom_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'moose' ),
	esc_html__( "Choose a Content Bottom sidebar to display", 'moose' ),
	$custom_sidebars
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_sidebar_custom_display",
	$content_bottom_sidebar_custom_display
);

$content_bottom_in_grid = new MooseElatedField(
	"yesno",
	"content_bottom_in_grid",
	"yes",
	esc_html__( "Display in Grid", 'moose' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'moose' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_in_grid",
	$content_bottom_in_grid
);

$content_bottom_background_color = new MooseElatedField(
	"color",
	"content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose a background color for Content Bottom area", 'moose' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_background_color",
	$content_bottom_background_color
);