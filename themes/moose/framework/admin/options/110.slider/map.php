<?php

$slidersPage = new MooseElatedAdminPage(
	'_slider',
	esc_html__( 'Elated Slider', 'moose' ),
	'fa fa-arrows-h'
);
moose_elated_framework()->eltdOptions->addAdminPage(
	'slider',
	$slidersPage
);

//Elated Slider
$panel_navigation_style = new MooseElatedPanel(
	esc_html__( 'General Style', 'moose' ),
	'general_style'
);
$slidersPage->addChild(
	'general_style',
	$panel_navigation_style
);

$qs_slider_height_mobile = new MooseElatedField(
	"text",
	"qs_slider_height_mobile",
	"",
	esc_html__( "Slider Height For Mobile Devices (px)", 'moose' ),
	esc_html__( "Define slider height for mobile devices", 'moose' )
);
$panel_navigation_style->addChild(
	"qs_slider_height_mobile",
	$qs_slider_height_mobile
);

$qs_slider_preloader_background = new MooseElatedField(
	"color",
	"qs_slider_preloader_background",
	"",
	esc_html__( "Slider Preloader Background Color", 'moose' ),
	esc_html__( "Define background color for slider preloader", 'moose' )
);
$panel_navigation_style->addChild(
	"qs_slider_preloader_background",
	$qs_slider_preloader_background
);

// Navigation Control Style
$panel_navigation_style = new MooseElatedPanel(
	esc_html__( 'Navigation Bullets Style', 'moose' ),
	'panel_navigation_style'
);
$slidersPage->addChild(
	'panel_navigation_style',
	$panel_navigation_style
);

$group1 = new MooseElatedGroup(
	esc_html__( "Colors", 'moose' ),
	esc_html__( "Choose color styles for navigation bullets", 'moose' )
);
$panel_navigation_style->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$qs_navigation_control_color = new MooseElatedField(
	"colorsimple",
	"qs_navigation_control_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"qs_navigation_control_color",
	$qs_navigation_control_color
);

$qs_navigation_control_transparency = new MooseElatedField(
	"textsimple",
	"qs_navigation_control_transparency",
	"",
	esc_html__( "Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"qs_navigation_control_transparency",
	$qs_navigation_control_transparency
);

$qs_navigation_control_active_color = new MooseElatedField(
	"colorsimple",
	"qs_navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"qs_navigation_control_active_color",
	$qs_navigation_control_active_color
);

$qs_navigation_control_active_transparency = new MooseElatedField(
	"textsimple",
	"qs_navigation_control_active_transparency",
	"",
	esc_html__( "Active Transparency(0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"qs_navigation_control_active_transparency",
	$qs_navigation_control_active_transparency
);

$group2 = new MooseElatedGroup(
	esc_html__( "Size", 'moose' ),
	esc_html__( "Define size for navigation bullets controls (w=h in px)", 'moose' )
);
$panel_navigation_style->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$qs_navigation_control_size = new MooseElatedField(
	"textsimple",
	"qs_navigation_control_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"qs_navigation_control_size",
	$qs_navigation_control_size
);

$qs_navigation_control_active_size = new MooseElatedField(
	"textsimple",
	"qs_navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"qs_navigation_control_active_size",
	$qs_navigation_control_active_size
);

$group3 = new MooseElatedGroup(
	esc_html__( "Border Style", 'moose' ),
	esc_html__( "Define border style for navigation bullets", 'moose' )
);
$panel_navigation_style->addChild(
	"group3",
	$group3
);

// Custom cursor navigation style

$panel_custom_cursor = new MooseElatedPanel(
	esc_html__( 'Custom cursor navigation style', 'moose' ),
	'panel_custom_cursor'
);
$slidersPage->addChild(
	'panel_navigation_bullet_style',
	$panel_custom_cursor
);

$qs_enable_navigation_custom_cursor = new MooseElatedField(
	"yesno",
	"qs_enable_navigation_custom_cursor",
	"no",
	esc_html__( "Enable Custom Cursor for Navigation", 'moose' ),
	esc_html__( "Enabling this option will display custom cursors for slider navigation", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_qs_enable_navigation_custom_cursor_container"
	)
);
$panel_custom_cursor->addChild(
	"qs_enable_navigation_custom_cursor",
	$qs_enable_navigation_custom_cursor
);

$qs_enable_navigation_custom_cursor_container = new MooseElatedContainer(
	"qs_enable_navigation_custom_cursor_container",
	"qs_enable_navigation_custom_cursor",
	"no"
);
$panel_custom_cursor->addChild(
	"qs_enable_navigation_custom_cursor_container",
	$qs_enable_navigation_custom_cursor_container
);

$cursor_image_left_right_area_size = new MooseElatedField(
	"text",
	"cursor_image_left_right_area_size",
	"",
	esc_html__( "Clickable Left/Right Area Size (%)", 'moose' ),
	esc_html__( "Define size of clickable left/right slider area in relation to slider width (default value is 8%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_right_area_size",
	$cursor_image_left_right_area_size
);

$cursor_image_left_normal = new MooseElatedField(
	"image",
	"cursor_image_left_normal",
	"",
	esc_html__( "Cursor Image 'Left' - Normal", 'moose' ),
	esc_html__( "Choose a default cursor 'Left' image to display ", 'moose' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_normal",
	$cursor_image_left_normal
);

$cursor_image_right_normal = new MooseElatedField(
	"image",
	"cursor_image_right_normal",
	"",
	esc_html__( "Cursor Image 'Right' - Normal", 'moose' ),
	esc_html__( "Choose a default cursor 'Right' image to display ", 'moose' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_normal",
	$cursor_image_right_normal
);

$cursor_image_left_light = new MooseElatedField(
	"image",
	"cursor_image_left_light",
	"",
	esc_html__( "Cursor Image 'Left' - Light", 'moose' ),
	esc_html__( "Choose a cursor 'Left' light image to display ", 'moose' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_light",
	$cursor_image_left_light
);

$cursor_image_right_light = new MooseElatedField(
	"image",
	"cursor_image_right_light",
	"",
	esc_html__( "Cursor Image 'Right' - Light", 'moose' ),
	esc_html__( "Choose a cursor 'Right' light image to display ", 'moose' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_light",
	$cursor_image_right_light
);

$cursor_image_left_dark = new MooseElatedField(
	"image",
	"cursor_image_left_dark",
	"",
	esc_html__( "Cursor Image 'Left' - Dark", 'moose' ),
	esc_html__( "Choose a cursor 'Left' dark image to display ", 'moose' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_dark",
	$cursor_image_left_dark
);

$cursor_image_right_dark = new MooseElatedField(
	"image",
	"cursor_image_right_dark",
	"",
	esc_html__( "Cursor Image 'Right' - Dark", 'moose' ),
	esc_html__( "Choose a cursor 'Right' dark image to display ", 'moose' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_dark",
	$cursor_image_right_dark
);

$qs_enable_navigation_custom_cursor_grab = new MooseElatedField(
	"yesno",
	"qs_enable_navigation_custom_cursor_grab",
	"no",
	esc_html__( "Enable Custom Cursor for 'Grab' Arrow", 'moose' ),
	esc_html__( "Enabling this option will display custom cursor for slider 'Grab' arrow", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_qs_enable_navigation_custom_cursor_grab_container"
	)
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab",
	$qs_enable_navigation_custom_cursor_grab
);

$qs_enable_navigation_custom_cursor_grab_container = new MooseElatedContainer(
	"qs_enable_navigation_custom_cursor_grab_container",
	"qs_enable_navigation_custom_cursor_grab",
	"no"
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab_container",
	$qs_enable_navigation_custom_cursor_grab_container
);

$cursor_image_grab_normal = new MooseElatedField(
	"image",
	"cursor_image_grab_normal",
	"",
	esc_html__( "Cursor Image 'Grab' - Normal", 'moose' ),
	esc_html__( "Choose a default cursor 'Grab' image to display", 'moose' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_normal",
	$cursor_image_grab_normal
);

$cursor_image_grab_light = new MooseElatedField(
	"image",
	"cursor_image_grab_light",
	"",
	esc_html__( "Cursor Image 'Grab' - Light", 'moose' ),
	esc_html__( "Choose a cursor 'Grab' light image to display", 'moose' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_light",
	$cursor_image_grab_light
);

$cursor_image_grab_dark = new MooseElatedField(
	"image",
	"cursor_image_grab_dark",
	"",
	esc_html__( "Cursor Image 'Grab' - Dark", 'moose' ),
	esc_html__( "Choose a cursor 'Grab' dark image to display", 'moose' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_dark",
	$cursor_image_grab_dark
);
