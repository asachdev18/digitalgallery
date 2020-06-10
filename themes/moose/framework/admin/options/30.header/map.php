<?php
$moose_elated_icon_collections = moose_elated_return_icon_collections();

$headerandfooterPage = new MooseElatedAdminPage(
	"2",
	esc_html__( "Header", 'moose' ),
	"fa fa-header"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"headerandfooter",
	$headerandfooterPage
);

// Header Position

$panel6 = new MooseElatedPanel(
	esc_html__( "Header Type", 'moose' ),
	"header_type_panel"
);
$headerandfooterPage->addChild(
	"panel6",
	$panel6
);
$header_type = new MooseElatedField(
	"select",
	"header_type",
	"top",
	esc_html__( "Choose Header Type", 'moose' ),
	esc_html__( "Select the type of header you would like to use", 'moose' ),
	array(
		"top" => esc_html__( "Top", 'moose' ),
		"side" => esc_html__( "Side", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"top"  => "#eltdf_vertical_areas_panel",
			"side" => "#eltdf_header_panel,#eltdf_top_menu_panel,#eltdf_header_top_panel,#eltdf_enable_side_area_panel,#eltdf_enable_popup_menu_panel"
		),
		"show"       => array(
			"top"  => "#eltdf_header_panel,#eltdf_top_menu_panel,#eltdf_header_top_panel,#eltdf_enable_side_area_panel,#eltdf_enable_popup_menu_panel",
			"side" => "#eltdf_vertical_areas_panel"
		)
	)
);
$panel6->addChild(
	"header_type",
	$header_type
);

// Header

$panel5 = new MooseElatedPanel(
	esc_html__( "Header", 'moose' ),
	"header_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel5",
	$panel5
);

$header_in_grid = new MooseElatedField(
	"yesno",
	"header_in_grid",
	"yes",
	esc_html__( "Header in Grid", 'moose' ),
	esc_html__( "Enabling this option will display header content in grid", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_header_padding_container",
		"dependence_show_on_yes" => "#eltdf_header_in_grid_container"
	)
);
$panel5->addChild(
	"header_in_grid",
	$header_in_grid
);

$header_bottom_appearance = new MooseElatedField(
	"select",
	"header_bottom_appearance",
	"fixed",
	esc_html__( "Header Type", 'moose' ),
	esc_html__( "Choose the header layout & behavior", 'moose' ),
	array(
		"regular" => esc_html__( "Regular", 'moose' ),
		"fixed" => esc_html__( "Fixed", 'moose' ),
		"fixed fixed_minimal" => esc_html__( "Fixed Minimal", 'moose' ),
		"fixed_hiding" => esc_html__( "Fixed Advanced", 'moose' ),
		"fixed_top_header" => esc_html__( "Fixed Header Top", 'moose' ),
		"stick" => esc_html__( "Sticky", 'moose' ),
		"stick menu_bottom" => esc_html__( "Sticky Expanded", 'moose' ),
		"stick_with_left_right_menu" => esc_html__( "Sticky Divided", 'moose' ),
		"stick compound" => esc_html__( "Sticky Compound", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"regular"                    => "#eltdf_search_left_sidearea_right_container,#eltdf_menu_vertical_position_for_sticky_container,#eltdf_menu_background_color_container,#eltdf_scroll_amount_for_sticky_container,#eltdf_header_height_scroll,#eltdf_header_height_sticky,#eltdf_header_height_scroll_hidden,#eltdf_header_background_color_scroll,#eltdf_header_grid_background_color_scroll,#eltdf_header_background_color_sticky,#eltdf_header_grid_background_color_sticky,#eltdf_header_background_transparency_scroll,#eltdf_header_grid_background_transparency_scroll,#eltdf_header_background_transparency_sticky,#eltdf_header_grid_background_transparency_sticky,#eltdf_scroll_amount_for_fixed_hiding_container,#eltdf_menu_items_position_container",
			"fixed"                      => "#eltdf_search_left_sidearea_right_container,#eltdf_menu_vertical_position_for_sticky_container,#eltdf_menu_background_color_container,#eltdf_scroll_amount_for_sticky_container,#eltdf_header_height_sticky,#eltdf_header_height_scroll_hidden,#eltdf_header_background_color_sticky,#eltdf_header_grid_background_color_sticky,#eltdf_header_background_transparency_sticky,#eltdf_header_grid_background_transparency_sticky,#eltdf_scroll_amount_for_fixed_hiding_container,#eltdf_menu_items_position_container",
			"fixed_hiding"               => "#eltdf_menu_vertical_position_for_sticky_container,#eltdf_scroll_amount_for_sticky_container,#eltdf_menu_position_container,#eltdf_header_height_scroll,#eltdf_header_height_sticky,#eltdf_header_background_color_sticky,#eltdf_header_grid_background_color_sticky,#eltdf_header_background_transparency_sticky,#eltdf_header_grid_background_transparency_sticky,#eltdf_menu_items_position_container",
			"stick menu_bottom"          => "#eltdf_search_left_sidearea_right_container,#eltdf_menu_vertical_position_for_sticky_container,#eltdf_menu_position_container,#eltdf_header_height_scroll,#eltdf_header_height_scroll_hidden,#eltdf_header_background_transparency_scroll,#eltdf_header_grid_background_transparency_scroll,#eltdf_header_background_color_scroll,#eltdf_header_grid_background_color_scroll,#eltdf_scroll_amount_for_fixed_hiding_container,#eltdf_menu_items_position_container",
			"stick_with_left_right_menu" => "#eltdf_search_left_sidearea_right_container,#eltdf_menu_background_color_container,#eltdf_menu_position_container,#eltdf_header_height_scroll,#eltdf_header_height_scroll_hidden,#eltdf_header_background_transparency_scroll,#eltdf_header_grid_background_transparency_scroll,#eltdf_header_background_color_scroll,#eltdf_scroll_amount_for_fixed_hiding_container",
			"stick"                      => "#eltdf_search_left_sidearea_right_container,#eltdf_menu_vertical_position_for_sticky_container,#eltdf_menu_background_color_container,#eltdf_header_height_scroll,#eltdf_header_height_scroll_hidden,#eltdf_header_background_color_scroll,#eltdf_header_grid_background_color_scroll,#eltdf_header_background_transparency_scroll,#eltdf_header_grid_background_transparency_scroll,#eltdf_scroll_amount_for_fixed_hiding_container,#eltdf_menu_items_position_container",
			"fixed_top_header"           => "#eltdf_search_left_sidearea_right_container,#eltdf_menu_vertical_position_for_sticky_container,#eltdf_menu_vertical_position_for_sticky_container,#eltdf_header_height_container,#eltdf_disable_text_shadow_for_sticky_container,#eltdf_menu_background_color_container,#eltdf_menu_position_container,#eltdf_header_top_area_scroll_container,#eltdf_scroll_amount_for_sticky_container,#eltdf_header_height_scroll,#eltdf_header_height_sticky,#eltdf_header_height_scroll_hidden,#eltdf_header_background_color_scroll,#eltdf_header_grid_background_color_scroll,#eltdf_header_background_color_sticky,#eltdf_header_grid_background_color_sticky,#eltdf_header_background_transparency_scroll,#eltdf_header_grid_background_transparency_scroll,#eltdf_header_background_transparency_sticky,#eltdf_header_grid_background_transparency_sticky,#eltdf_scroll_amount_for_fixed_hiding_container,#eltdf_menu_items_position_container,#enable_border_for_sticky_container",
			"fixed fixed_minimal"        => "#eltdf_search_left_sidearea_right_container,#eltdf_menu_vertical_position_for_sticky_container,#eltdf_menu_position_container,#eltdf_menu_background_color_container,#eltdf_scroll_amount_for_sticky_container,#eltdf_header_height_sticky,#eltdf_header_height_scroll_hidden,#eltdf_header_background_color_sticky,#eltdf_header_grid_background_color_sticky,#eltdf_header_background_transparency_sticky,#eltdf_header_grid_background_transparency_sticky,#eltdf_scroll_amount_for_fixed_hiding_container,#eltdf_menu_items_position_container",
			"stick compound"             => "#eltdf_search_left_sidearea_right_container,#eltdf_menu_vertical_position_for_sticky_container,#eltdf_menu_background_color_container,#eltdf_menu_position_container,#eltdf_header_height_scroll,#eltdf_header_height_scroll_hidden,#eltdf_header_background_color_scroll,#eltdf_header_grid_background_color_scroll,#eltdf_header_background_transparency_scroll,#eltdf_header_grid_background_transparency_scroll,#eltdf_scroll_amount_for_fixed_hiding_container,#eltdf_menu_items_position_container",
		),
		"show"       => array(
			"regular"                    => "#eltdf_header_height_container,#eltdf_menu_position_container,#eltdf_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"fixed"                      => "#eltdf_header_height_container,#eltdf_menu_position_container,#eltdf_header_height_scroll,#eltdf_header_background_color_scroll,#eltdf_header_grid_background_color_scroll,#eltdf_header_background_transparency_scroll,#eltdf_header_grid_background_transparency_scroll,#eltdf_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick"                      => "#eltdf_header_height_container,#eltdf_scroll_amount_for_sticky_container,#eltdf_menu_position_container,#eltdf_header_height_sticky,#eltdf_header_background_color_sticky,#eltdf_header_grid_background_color_sticky,#eltdf_header_background_transparency_sticky,#eltdf_header_grid_background_transparency_sticky,#eltdf_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick menu_bottom"          => "#eltdf_header_height_container,#eltdf_menu_background_color_container,#eltdf_scroll_amount_for_sticky_container,#eltdf_header_height_sticky,#eltdf_header_background_color_sticky,#eltdf_header_grid_background_color_sticky,#eltdf_header_background_transparency_sticky,#eltdf_header_grid_background_transparency_sticky,#eltdf_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick_with_left_right_menu" => "#eltdf_menu_vertical_position_for_sticky_container,#eltdf_header_height_container,#eltdf_scroll_amount_for_sticky_container,#eltdf_header_height_sticky,#eltdf_header_background_color_sticky,#eltdf_header_grid_background_color_sticky,#eltdf_header_background_transparency_sticky,#eltdf_header_grid_background_transparency_sticky,#eltdf_menu_items_position_container,#eltdf_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"fixed_hiding"               => "#eltdf_search_left_sidearea_right_container,#eltdf_header_height_container,#eltdf_menu_background_color_container,#eltdf_header_height_scroll_hidden,#eltdf_header_background_color_scroll,#eltdf_header_grid_background_color_scroll,#eltdf_header_background_transparency_scroll,#eltdf_header_grid_background_transparency_scroll,#eltdf_scroll_amount_for_fixed_hiding_container,#eltdf_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"fixed_top_header"           => "",
			"fixed fixed_minimal"        => "#eltdf_header_height_container,#eltdf_header_height_scroll,#eltdf_header_background_color_scroll,#eltdf_header_grid_background_color_scroll,#eltdf_header_background_transparency_scroll,#eltdf_header_grid_background_transparency_scroll,#eltdf_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick compound"             => "#eltdf_header_height_container,#eltdf_scroll_amount_for_sticky_container,#eltdf_header_height_sticky,#eltdf_header_background_color_sticky,#eltdf_header_grid_background_color_sticky,#eltdf_header_background_transparency_sticky,#eltdf_header_grid_background_transparency_sticky,#eltdf_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container"
		)
	)
);

$panel5->addChild(
	"header_bottom_appearance",
	$header_bottom_appearance
);

$search_left_sidearea_right_container = new MooseElatedContainer(
	"search_left_sidearea_right_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick compound"
	)
);
$panel5->addChild(
	"search_left_sidearea_right_container",
	$search_left_sidearea_right_container
);

$search_left_sidearea_right = new MooseElatedField(
	"yesno",
	"search_left_sidearea_right",
	"no",
	esc_html__( "Place Search and Side Area Icons to Separate Sides of Header ", 'moose' ),
	esc_html__( "Enabling this option will set search icon to left side of header and side area icon to right side of header", 'moose' )
);
$search_left_sidearea_right_container->addChild(
	"search_left_sidearea_right",
	$search_left_sidearea_right
);

$scroll_amount_for_sticky_container = new MooseElatedContainer(
	"scroll_amount_for_sticky_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$panel5->addChild(
	"scroll_amount_for_sticky_container",
	$scroll_amount_for_sticky_container
);

$scroll_amount_for_sticky = new MooseElatedField(
	"text",
	"scroll_amount_for_sticky",
	"",
	esc_html__( "Scroll Amount for Sticky (px)", 'moose' ),
	esc_html__( "Enter scroll amount (in pixels) for Sticky Menu to appear", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$scroll_amount_for_sticky_container->addChild(
	"scroll_amount_for_sticky",
	$scroll_amount_for_sticky
);

$hide_initial_sticky = new MooseElatedField(
	"yesno",
	"hide_initial_sticky",
	"no",
	esc_html__( "Hide Header Initially", 'moose' ),
	esc_html__( "Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page", 'moose' )
);
$scroll_amount_for_sticky_container->addChild(
	"hide_initial_sticky",
	$hide_initial_sticky
);

$menu_items_position_container = new MooseElatedContainer(
	"menu_items_position_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick",
		"stick menu_bottom",
		"stick compound"
	)
);
$panel5->addChild(
	"menu_items_position_container",
	$menu_items_position_container
);

$menu_items_position = new MooseElatedField(
	"select",
	"menu_items_position",
	"",
	esc_html__( "Menu Items Position", 'moose' ),
	esc_html__( "Choose whether you would like the menu items to start from center of screen and extend outwards, or from the edges of the grid and extend inward", 'moose' ),
	array(
		"from_center" => esc_html__( "From Center", 'moose' ),
		"from_edges" => esc_html__( "From Edges of Grid", 'moose' )
	)
);
$menu_items_position_container->addChild(
	"menu_items_position",
	$menu_items_position
);

$widgets_position = new MooseElatedField(
	"yesno",
	"widgets_position",
	"no",
	esc_html__( "Position Widgets on Edges of Grid", 'moose' ),
	esc_html__( "Enabling this option will position header bottom widgets to the left/right edges of the grid", 'moose' )
);
$menu_items_position_container->addChild(
	"widgets_position",
	$widgets_position
);

$menu_vertical_position_for_sticky_container = new MooseElatedContainer(
	"menu_vertical_position_for_sticky_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick menu_bottom",
		"stick compound",
		"stick"
	)
);
$panel5->addChild(
	"menu_vertical_position_for_sticky_container",
	$menu_vertical_position_for_sticky_container
);

$menu_vertical_position_for_sticky = new MooseElatedField(
	"select",
	"menu_vertical_position_for_sticky",
	"",
	esc_html__( "Menu Vertical Alignment", 'moose' ),
	esc_html__( "Choose the vertical alignment for the menu in the Sticky Divided header", 'moose' ),
	array(
		"default" => esc_html__( "Default", 'moose' ),
		"bottom" => esc_html__( "Bottom", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"default" => "#eltdf_menu_bottom_position_container"
		),
		"show"       => array(
			"bottom" => "#eltdf_menu_bottom_position_container"
		)
	)
);
$menu_vertical_position_for_sticky_container->addChild(
	"menu_vertical_position_for_sticky",
	$menu_vertical_position_for_sticky
);

$menu_bottom_position_container = new MooseElatedContainer(
	"menu_bottom_position_container",
	"menu_vertical_position_for_sticky",
	"",
	array( "default" )
);
$panel5->addChild(
	"menu_bottom_position_container",
	$menu_bottom_position_container
);

$menu_bottom_position = new MooseElatedField(
	"text",
	"menu_bottom_position",
	"",
	esc_html__( "Menu Bottom Offset (px)", 'moose' ),
	esc_html__( "Enter the amount of pixels you would like to move the menu from bottom of header", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$menu_bottom_position_container->addChild(
	"menu_bottom_position",
	$menu_bottom_position
);

$scroll_amount_for_fixed_hiding_container = new MooseElatedContainer(
	"scroll_amount_for_fixed_hiding_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick compound"
	)
);
$panel5->addChild(
	"scroll_amount_for_fixed_hiding_container",
	$scroll_amount_for_fixed_hiding_container
);
$scroll_amount_for_fixed_hiding = new MooseElatedField(
	"text",
	"scroll_amount_for_fixed_hiding",
	"",
	esc_html__( "Scroll Amount (px)", 'moose' ),
	esc_html__( "Enter scroll amount (in pixels) for menu to hide", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$scroll_amount_for_fixed_hiding_container->addChild(
	"scroll_amount_for_fixed_hiding",
	$scroll_amount_for_fixed_hiding
);

$menu_position_container = new MooseElatedContainer(
	"menu_position_container",
	"header_bottom_appearance",
	"",
	array(
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_hiding",
		"fixed_top_header",
		"stick compound"
	)
);
$panel5->addChild(
	"menu_position_container",
	$menu_position_container
);

$menu_position = new MooseElatedField(
	"select",
	"menu_position",
	"",
	esc_html__( "Menu Position", 'moose' ),
	esc_html__( "Choose a menu position (default is right alignment)", 'moose' ),
	array(
		"-1" => esc_html__( "Right", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"left" => esc_html__( "Left", 'moose' )
	)
);
$menu_position_container->addChild(
	"menu_position",
	$menu_position
);

$center_logo_image = new MooseElatedField(
	"yesno",
	"center_logo_image",
	"no",
	esc_html__( "Center Logo", 'moose' ),
	esc_html__( "Enabling this option will center logo and position it above menu", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_center_logo_image_container"
	)
);
$menu_position_container->addChild(
	"center_logo_image",
	$center_logo_image
);

$center_logo_image_container = new MooseElatedContainer(
	"center_logo_image_container",
	"center_logo_image",
	"no"
);
$menu_position_container->addChild(
	"center_logo_image_container",
	$center_logo_image_container
);

$search_left_sidearea_right_regular = new MooseElatedField(
	"yesno",
	"search_left_sidearea_right_regular",
	"no",
	esc_html__( "Place Search and Side Area Icons to Separate Sides of Header ", 'moose' ),
	esc_html__( "Enabling this option will set search icon to left side of header and side area icon to right side of header", 'moose' )
);
$center_logo_image_container->addChild(
	"search_left_sidearea_right_regular",
	$search_left_sidearea_right_regular
);

$enable_border_top_bottom_menu = new MooseElatedField(
	"yesno",
	"enable_border_top_bottom_menu",
	"no",
	esc_html__( "Enable Top/Bottom Border in Menu", 'moose' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_menu_border_container"
	)
);
$center_logo_image_container->addChild(
	"enable_border_top_bottom_menu",
	$enable_border_top_bottom_menu
);

$menu_border_container = new MooseElatedContainer(
	"menu_border_container",
	"enable_border_top_bottom_menu",
	"no"
);
$center_logo_image_container->addChild(
	"menu_border_container",
	$menu_border_container
);

$color_border_top_bottom_menu = new MooseElatedField(
	"color",
	"color_border_top_bottom_menu",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose a color for the top/bottom border in menu.", 'moose' )
);
$menu_border_container->addChild(
	"color_border_top_bottom_menu",
	$color_border_top_bottom_menu
);

$disable_text_shadow_for_sticky_container = new MooseElatedContainer(
	"disable_text_shadow_for_sticky_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$panel5->addChild(
	"disable_text_shadow_for_sticky_container",
	$disable_text_shadow_for_sticky_container
);

$disable_text_shadow_for_sticky = new MooseElatedField(
	"yesno",
	"disable_text_shadow_for_sticky",
	"yes",
	esc_html__( "Disable Shadow For Scrolled Header", 'moose' ),
	esc_html__( "Enabling this option will display text shadow for scrolled/sticky header", 'moose' )
);
$disable_text_shadow_for_sticky_container->addChild(
	"disable_text_shadow_for_sticky",
	$disable_text_shadow_for_sticky
);

$enable_border_for_sticky_container = new MooseElatedContainer(
	"enable_border_for_sticky_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$panel5->addChild(
	"enable_border_for_sticky_container",
	$enable_border_for_sticky_container
);

$enable_border_for_sticky = new MooseElatedField(
	"yesno",
	"enable_border_for_sticky",
	"no",
	esc_html__( "Enable Border For Scrolled Header", 'moose' ),
	esc_html__( "Enabling this option will display border for scrolled/sticky header", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_border_bottom_color_for_sticky_container"
	)
);
$enable_border_for_sticky_container->addChild(
	"enable_border_for_sticky",
	$enable_border_for_sticky
);

$enable_border_bottom_color_for_sticky_container = new MooseElatedContainer(
	"enable_border_bottom_color_for_sticky_container",
	"enable_border_for_sticky",
	"no"
);
$panel5->addChild(
	"enable_border_color_for_sticky_container",
	$enable_border_bottom_color_for_sticky_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Border Style", 'moose' ),
	esc_html__( "Choose style for border for scrolled/sticky header", 'moose' )
);
$enable_border_bottom_color_for_sticky_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$border_bottom_color_for_sticky = new MooseElatedField(
	"colorsimple",
	"border_bottom_color_for_sticky",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"border_bottom_color_for_sticky",
	$border_bottom_color_for_sticky
);

$border_bottom_width_for_sticky = new MooseElatedField(
	"textsimple",
	"border_bottom_width_for_sticky",
	"",
	esc_html__( "Border Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"border_bottom_width_for_sticky",
	$border_bottom_width_for_sticky
);

$header_height_container = new MooseElatedContainerNoStyle(
	"header_height_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$panel5->addChild(
	"header_height_container",
	$header_height_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Header Height", 'moose' ),
	esc_html__( "Enter header height in pixels", 'moose' )
);
$header_height_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$header_height = new MooseElatedField(
	"textsimple",
	"header_height",
	"",
	esc_html__( "Initial (px)", 'moose' ),
	esc_html__( "Initial header (px)", 'moose' )
);
$row1->addChild(
	"header_height",
	$header_height
);

$header_height_scroll = new MooseElatedField(
	"textsimple",
	"header_height_scroll",
	"",
	esc_html__( "After Scroll (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_hiding",
		"fixed_top_header",
		"stick compound"
	)
);
$row1->addChild(
	"header_height_scroll",
	$header_height_scroll
);

$header_height_sticky = new MooseElatedField(
	"textsimple",
	"header_height_sticky",
	"",
	esc_html__( "After Scroll (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_height_sticky",
	$header_height_sticky
);

$header_height_scroll_hidden = new MooseElatedField(
	"textsimple",
	"header_height_scroll_hidden",
	"",
	esc_html__( "After Scroll (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick compound"
	)
);
$row1->addChild(
	"header_height_scroll_hidden",
	$header_height_scroll_hidden
);

$header_padding_container = new MooseElatedContainer(
	"header_padding_container",
	"header_in_grid",
	"yes"
);
$panel5->addChild(
	"header_padding_container",
	$header_padding_container
);

$header_left_padding = new MooseElatedField(
	"text",
	"header_left_padding",
	"",
	esc_html__( "Header Left Padding", 'moose' ),
	esc_html__( "Set left padding for header bottom appearance in px or % (default value is 45px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_padding_container->addChild(
	"header_left_padding",
	$header_left_padding
);

$header_right_padding = new MooseElatedField(
	"text",
	"header_right_padding",
	"",
	esc_html__( "Header Right Padding", 'moose' ),
	esc_html__( "Set right padding for header bottom appearance in px or % (default value is 45px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_padding_container->addChild(
	"header_right_padding",
	$header_right_padding
);

$header_style = new MooseElatedField(
	"select",
	"header_style",
	"",
	esc_html__( "Header Skin", 'moose' ),
	esc_html__( "Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style", 'moose' ),
	array(
		"-1"    => "",
		"light" => esc_html__( "Light", 'moose' ),
		"dark" => esc_html__( "Dark", 'moose' )
	)
);
$panel5->addChild(
	"header_style",
	$header_style
);

$enable_header_style_on_scroll = new MooseElatedField(
	"yesno",
	"enable_header_style_on_scroll",
	"no",
	esc_html__( "Enable Header Style on Scroll", 'moose' ),
	esc_html__( "Enabling this option, header will change style depending on row settings for dark/light style", 'moose' )
);
$panel5->addChild(
	"enable_header_style_on_scroll",
	$enable_header_style_on_scroll
);

$group2 = new MooseElatedGroup(
	esc_html__( "Header Background Color", 'moose' ),
	esc_html__( "Choose a background color for header area", 'moose' )
);
$panel5->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$header_background_color = new MooseElatedField(
	"colorsimple",
	"header_background_color",
	"",
	esc_html__( "Initial", 'moose' ),
	""
);
$row1->addChild(
	"header_background_color",
	$header_background_color
);

$header_background_color_scroll = new MooseElatedField(
	"colorsimple",
	"header_background_color_scroll",
	"",
	esc_html__( "After Scroll", 'moose' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"stick compound"
	)
);
$row1->addChild(
	"header_background_color_scroll",
	$header_background_color_scroll
);

$header_background_color_sticky = new MooseElatedField(
	"colorsimple",
	"header_background_color_sticky",
	"",
	esc_html__( "After Scroll", 'moose' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_background_color_sticky",
	$header_background_color_sticky
);

$group3 = new MooseElatedGroup(
	esc_html__( "Header Transparency", 'moose' ),
	esc_html__( "Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)", 'moose' )
);
$panel5->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$header_background_transparency_initial = new MooseElatedField(
	"textsimple",
	"header_background_transparency_initial",
	"",
	esc_html__( "Initial", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_background_transparency_initial",
	$header_background_transparency_initial
);

$header_background_transparency_scroll = new MooseElatedField(
	"textsimple",
	"header_background_transparency_scroll",
	"",
	esc_html__( "After Scroll", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"stick compound"
	)
);
$row1->addChild(
	"header_background_transparency_scroll",
	$header_background_transparency_scroll
);

$header_background_transparency_sticky = new MooseElatedField(
	"textsimple",
	"header_background_transparency_sticky",
	"",
	esc_html__( "After Scroll", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_background_transparency_sticky",
	$header_background_transparency_sticky
);

$group4 = new MooseElatedGroup(
	esc_html__( "Header Background Pattern", 'moose' ),
	esc_html__( "Choose a pattern for the header background", 'moose' )
);
$panel5->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$header_pattern_image_initial = new MooseElatedField(
	"imagesimple",
	"header_pattern_image_initial",
	"",
	esc_html__( "Initial", 'moose' ),
	""
);
$row1->addChild(
	"header_pattern_image_initial",
	$header_pattern_image_initial
);

$header_pattern_image_scroll = new MooseElatedField(
	"imagesimple",
	"header_pattern_image_scroll",
	"",
	esc_html__( "After Scroll", 'moose' ),
	""
);
$row1->addChild(
	"header_pattern_image_scroll",
	$header_pattern_image_scroll
);

$header_in_grid_container = new MooseElatedContainerNoStyle(
	'header_in_grid_container',
	'header_in_grid',
	'no'
);
$panel5->addChild(
	'header_in_grid_container',
	$header_in_grid_container
);

$group6 = new MooseElatedGroup(
	esc_html__( 'Header Grid Content Background Color', 'moose' ),
	esc_html__( 'Choose a background color for header grid content area', 'moose' )
);
$header_in_grid_container->addChild(
	'group6',
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	'row1',
	$row1
);

$header_grid_background_color = new MooseElatedField(
	"colorsimple",
	"header_grid_background_color",
	"",
	esc_html__( "Initial", 'moose' ),
	""
);
$row1->addChild(
	"header_grid_background_color",
	$header_grid_background_color
);

$header_grid_background_color_scroll = new MooseElatedField(
	"colorsimple",
	"header_grid_background_color_scroll",
	"",
	esc_html__( "After Scroll", 'moose' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"stick compound"
	)
);
$row1->addChild(
	"header_grid_background_color_scroll",
	$header_grid_background_color_scroll
);

$header_grid_background_color_sticky = new MooseElatedField(
	"colorsimple",
	"header_grid_background_color_sticky",
	"",
	esc_html__( "After Scroll", 'moose' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_grid_background_color_sticky",
	$header_grid_background_color_sticky
);

$group7 = new MooseElatedGroup(
	esc_html__( 'Header Grid Content Transparency', 'moose' ),
	esc_html__( 'Choose a transparency for the header background color (0 = fully transparent, 1 = opaque', 'moose' )
);
$header_in_grid_container->addChild(
	'group7',
	$group7
);

$row2 = new MooseElatedRow();
$group7->addChild(
	"row2",
	$row2
);

$header_grid_background_transparency_initial = new MooseElatedField(
	"textsimple",
	"header_grid_background_transparency_initial",
	"",
	esc_html__( "Initial", 'moose' ),
	""
);
$row2->addChild(
	"header_grid_background_transparency_initial",
	$header_grid_background_transparency_initial
);

$header_grid_background_transparency_scroll = new MooseElatedField(
	"textsimple",
	"header_grid_background_transparency_scroll",
	"",
	esc_html__( "After Scroll", 'moose' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"stick compound"
	)
);
$row2->addChild(
	"header_grid_background_transparency_scroll",
	$header_grid_background_transparency_scroll
);

$header_grid_background_transparency_sticky = new MooseElatedField(
	"textsimple",
	"header_grid_background_transparency_sticky",
	"",
	esc_html__( "After Scroll", 'moose' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row2->addChild(
	"header_grid_background_transparency_sticky",
	$header_grid_background_transparency_sticky
);

$group8 = new MooseElatedGroup(
	esc_html__( 'Header in Grid Padding', 'moose' ),
	esc_html__( 'Left and right padding for header in grid', 'moose' )
);
$header_in_grid_container->addChild(
	'group8',
	$group8
);

$row3 = new MooseElatedRow();
$group8->addChild(
	'row3',
	$row3
);

$header_in_grid_padding_left = new MooseElatedField(
	'textsimple',
	'header_in_grid_padding_left',
	'',
	esc_html__( 'Left (px)', 'moose' ),
	''
);
$row3->addChild(
	'header_in_grid_padding_left',
	$header_in_grid_padding_left
);

$header_in_grid_padding_right = new MooseElatedField(
	'textsimple',
	'header_in_grid_padding_right',
	'',
	esc_html__( 'Right (px)', 'moose' ),
	''
);
$row3->addChild(
	'header_in_grid_padding_right',
	$header_in_grid_padding_right
);

$enable_header_top_border = new MooseElatedField(
	"yesno",
	"enable_header_top_border",
	"no",
	esc_html__( "Enable Header Top Border", 'moose' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_header_top_border_container"
	)
);
$panel5->addChild(
	"enable_header_top_border",
	$enable_header_top_border
);

$header_top_border_container = new MooseElatedContainer(
	"header_top_border_container",
	"enable_header_top_border",
	"no"
);
$panel5->addChild(
	"header_top_border_container",
	$header_top_border_container
);

$header_top_border_width = new MooseElatedField(
	"text",
	"header_top_border_width",
	"",
	esc_html__( "Header Top Border Width (px)", 'moose' ),
	esc_html__( "Choose a width for the header top border. Note: If width has not been set, border top will not be displayed", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_border_container->addChild(
	"header_top_border_width",
	$header_top_border_width
);

$header_top_border_color = new MooseElatedField(
	"color",
	"header_top_border_color",
	"",
	esc_html__( "Header Top Border Color", 'moose' ),
	esc_html__( "Choose a color for the header top border. ", 'moose' )
);
$header_top_border_container->addChild(
	"header_top_border_color",
	$header_top_border_color
);

$header_top_border_transparency = new MooseElatedField(
	"text",
	"header_top_border_transparency",
	"",
	esc_html__( "Header Top Border Transparency", 'moose' ),
	esc_html__( "Choose a transparency for the header border color (0 = fully transparent, 1 = opaque). Note: Works only if Header top Border Color is filled", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_border_container->addChild(
	"header_top_border_transparency",
	$header_top_border_transparency
);

$enable_header_bottom_border = new MooseElatedField(
	"yesno",
	"enable_header_bottom_border",
	"yes",
	esc_html__( "Enable Header Bottom Border", 'moose' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_header_bottom_border_container"
	)
);
$panel5->addChild(
	"enable_header_bottom_border",
	$enable_header_bottom_border
);

$header_bottom_border_container = new MooseElatedContainer(
	"header_bottom_border_container",
	"enable_header_bottom_border",
	"no"
);
$panel5->addChild(
	"header_bottom_border_container",
	$header_bottom_border_container
);

$header_bottom_border_width = new MooseElatedField(
	"text",
	"header_bottom_border_width",
	"",
	esc_html__( "Header Bottom Border Width (px)", 'moose' ),
	esc_html__( "Choose a width for the header bottom  border. Note: If width has not been set, border bottom will not be displayed", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_bottom_border_container->addChild(
	"header_bottom_border_width",
	$header_bottom_border_width
);

$header_bottom_border_color = new MooseElatedField(
	"color",
	"header_bottom_border_color",
	"",
	esc_html__( "Header Bottom Border Color", 'moose' ),
	esc_html__( "Choose a color for the header bottom border.", 'moose' )
);
$header_bottom_border_container->addChild(
	"header_bottom_border_color",
	$header_bottom_border_color
);

$header_botom_border_transparency = new MooseElatedField(
	"text",
	"header_botom_border_transparency",
	"",
	esc_html__( "Header Bottom Border Transparency", 'moose' ),
	esc_html__( "Choose a transparency for the header border color (0 = fully transparent, 1 = opaque). Note: Works only if Header Bottom Border Color is filled", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_bottom_border_container->addChild(
	"header_botom_border_transparency",
	$header_botom_border_transparency
);

$header_botom_border_in_grid = new MooseElatedField(
	"yesno",
	"header_botom_border_in_grid",
	"no",
	esc_html__( "Enable Header Bottom Border in Grid", 'moose' ),
	esc_html__( "Enabling this option will set header border bottom width in grid", 'moose' )
);
$header_bottom_border_container->addChild(
	"header_botom_border_in_grid",
	$header_botom_border_in_grid
);

// Menu

$panel4 = new MooseElatedPanel(
	esc_html__( "Top Menu", 'moose' ),
	"top_menu_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel4",
	$panel4
);

$menu_background_color_container = new MooseElatedContainer(
	"menu_background_color_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"stick",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick compound"
	)
);
$panel4->addChild(
	"menu_background_color_container",
	$menu_background_color_container
);

$menu_background_color = new MooseElatedField(
	"color",
	"menu_background_color",
	"",
	esc_html__( "Background Color of 1st Level Menu", 'moose' ),
	esc_html__( "Choose a color for the menu background (works only for Fixed Advanced and Sticky Expanded header types)", 'moose' )
);
$menu_background_color_container->addChild(
	"menu_background_color",
	$menu_background_color
);

$enable_menu_top_bottom_border = new MooseElatedField(
	"yesno",
	"enable_menu_top_bottom_border",
	"no",
	esc_html__( "Enable Top/Bottom Borders in 1st Level Menu", 'moose' ),
	esc_html__( "Enabling this option will display top and bottom borders around 1st level menu (works only for Fixed Advanced and Sticky Expanded header types)", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_menu_top_bottom_border_container"
	)
);
$menu_background_color_container->addChild(
	"enable_menu_top_bottom_border",
	$enable_menu_top_bottom_border
);
$menu_top_bottom_border_container = new MooseElatedContainer(
	"menu_top_bottom_border_container",
	"enable_menu_top_bottom_border",
	"no"
);
$menu_background_color_container->addChild(
	"menu_top_bottom_border_container",
	$menu_top_bottom_border_container
);
$color_menu_top_bottom_border = new MooseElatedField(
	"color",
	"color_menu_top_bottom_border",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose a color for the top/bottom border in 1st level menu.", 'moose' )
);
$menu_top_bottom_border_container->addChild(
	"color_menu_top_bottom_border",
	$color_menu_top_bottom_border
);

$enable_menu_wide_background = new MooseElatedField(
	"yesno",
	"enable_menu_wide_background",
	"no",
	esc_html__( "Enable wide background in 1st Level Menu", 'moose' ),
	esc_html__( "Enabling this option will show wide background or borders in 1st level menu (works only for Fixed Advanced and Sticky Expanded header types)", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => ""
	)
);
$menu_background_color_container->addChild(
	"enable_menu_wide_background",
	$enable_menu_wide_background
);

$menu_item_icon_position = new MooseElatedField(
	"select",
	"menu_item_icon_position",
	"left",
	esc_html__( "Icon Position in 1st Level Menu", 'moose' ),
	esc_html__( "Choose position of icon selected in Appearance->Menu->Menu Structure", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"top" => esc_html__( "Top", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"left" => "#eltdf_menu_item_icon_position_container"
		),
		"show"       => array(
			"top" => "#eltdf_menu_item_icon_position_container"
		)
	)
);
$panel4->addChild(
	"menu_item_icon_position",
	$menu_item_icon_position
);
$menu_item_icon_position_container = new MooseElatedContainer(
	"menu_item_icon_position_container",
	"menu_item_icon_position",
	"left"
);
$panel4->addChild(
	"menu_item_icon_position_container",
	$menu_item_icon_position_container
);

$menu_item_icon_size = new MooseElatedField(
	"text",
	"menu_item_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "Enter icon size in pixels", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$menu_item_icon_position_container->addChild(
	"menu_item_icon_size",
	$menu_item_icon_size
);

$menu_item_style = new MooseElatedField(
	"select",
	"menu_item_style",
	"small_item",
	esc_html__( "Item Height in 1st Level Menu", 'moose' ),
	esc_html__( "Choose menu item height", 'moose' ),
	array(
		"small_item" => esc_html__( "Small", 'moose' ),
		"large_item" => esc_html__( "Big", 'moose' )
	)
);
$panel4->addChild(
	"menu_item_style",
	$menu_item_style
);

$menu_item_hover_animation = new MooseElatedField(
	"select",
	"menu_item_hover_animation",
	"",
	esc_html__( "Hover Animation in 1st Level Menu", 'moose' ),
	esc_html__( "Choose hover animation for items in 1st level", 'moose' ),
	array(
		"default" => esc_html__( "Default", 'moose' ),
		"roll" => esc_html__( "Spinning", 'moose' ),
		"line_under" => esc_html__( "Underline Lift", 'moose' ),
		"line_spread" => esc_html__( "Underline Stretch", 'moose' )
	)
);
$panel4->addChild(
	"menu_item_hover_animation",
	$menu_item_hover_animation
);

$enable_manu_item_border = new MooseElatedField(
	"yesno",
	"enable_manu_item_border",
	"no",
	esc_html__( "Enable 1st Level Menu Item Borders", 'moose' ),
	esc_html__( "Enabling this option will display border around menu items", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_menu_item_border_container"
	)
);
$panel4->addChild(
	"enable_manu_item_border",
	$enable_manu_item_border
);

$menu_item_border_container = new MooseElatedContainer(
	"menu_item_border_container",
	"enable_manu_item_border",
	"no"
);
$panel4->addChild(
	"menu_item_border_container",
	$menu_item_border_container
);

$menu_item_border_style = new MooseElatedField(
	"select",
	"menu_item_border_style",
	"",
	esc_html__( "Menu Item Border", 'moose' ),
	esc_html__( "Visible only if border width and one of the border color fields are filled.", 'moose' ),
	array(
		"all_borders" => esc_html__( "All Borders", 'moose' ),
		"top_bottom_borders" => esc_html__( "Top/Bottom Borders", 'moose' ),
		"right_border" => esc_html__( "Right Border", 'moose' ),
		"bottom_border" => esc_html__( "Bottom Border", 'moose' ),
		"bottom_border_double" => esc_html__( "Bottom Double Borders", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"bottom_border_double" => "#eltdf_menu_item_border_width_container"
		),
		"show"       => array(
			"all_borders"        => "#eltdf_menu_item_border_width_container",
			"top_bottom_borders" => "#eltdf_menu_item_border_width_container",
			"right_border"       => "#eltdf_menu_item_border_width_container",
			"bottom_border"      => "#eltdf_menu_item_border_width_container"
		)
	)
);
$menu_item_border_container->addChild(
	"menu_item_border_style",
	$menu_item_border_style
);

$menu_item_border_width_container = new MooseElatedContainer(
	"menu_item_border_width_container",
	"menu_item_border_style",
	"bottom_border_double"
);
$menu_item_border_container->addChild(
	"menu_item_border_width_container",
	$menu_item_border_width_container
);
$menu_item_border_width = new MooseElatedField(
	"text",
	"menu_item_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "Enter border width (in pixels) ", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$menu_item_border_width_container->addChild(
	"menu_item_border_width",
	$menu_item_border_width
);

$menu_item_border_radius = new MooseElatedField(
	"text",
	"menu_item_border_radius",
	"",
	esc_html__( "Border Radius", 'moose' ),
	esc_html__( "Enter border radius (px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$menu_item_border_width_container->addChild(
	"menu_item_border_radius",
	$menu_item_border_radius
);

$menu_item_border_style_style = new MooseElatedField(
	"select",
	"menu_item_border_style_style",
	"solid",
	esc_html__( "Border Style", 'moose' ),
	esc_html__( "Choose border style", 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' )
	)
);
$menu_item_border_width_container->addChild(
	"menu_item_border_style_style",
	$menu_item_border_style_style
);
$group1 = new MooseElatedGroup(
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose a color for border", 'moose' )
);
$menu_item_border_container->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$menu_item_border_color = new MooseElatedField(
	"colorsimple",
	"menu_item_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose border color", 'moose' )
);
$row1->addChild(
	"menu_item_border_color",
	$menu_item_border_color
);
$menu_item_hover_border_color = new MooseElatedField(
	"colorsimple",
	"menu_item_hover_border_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "Choose border color on menu item hover", 'moose' )
);
$row1->addChild(
	"menu_item_hover_border_color",
	$menu_item_hover_border_color
);
$menu_item_active_border_color = new MooseElatedField(
	"colorsimple",
	"menu_item_active_border_color",
	"",
	esc_html__( "Border Active Color", 'moose' ),
	esc_html__( "Choose border color on active menu item", 'moose' )
);
$row1->addChild(
	"menu_item_active_border_color",
	$menu_item_active_border_color
);

$enable_menu_item_separators = new MooseElatedField(
	"yesno",
	"enable_menu_item_separators",
	"no",
	esc_html__( "Enable 1st Level Menu Item Separators", 'moose' ),
	esc_html__( "Enabling this option will display separators between menu items", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_menu_item_separators_container"
	)
);
$panel4->addChild(
	"enable_menu_item_separators",
	$enable_menu_item_separators
);
$menu_item_separators_container = new MooseElatedContainer(
	"menu_item_separators_container",
	"enable_menu_item_separators",
	"no"
);
$panel4->addChild(
	"menu_item_separators_container",
	$menu_item_separators_container
);
$group1 = new MooseElatedGroup(
	esc_html__( "Menu Item Separators Style", 'moose' ),
	""
);
$menu_item_separators_container->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$menu_item_separators_color = new MooseElatedField(
	"colorsimple",
	"menu_item_separators_color",
	"",
	esc_html__( "Separators Color", 'moose' ),
	esc_html__( "Enter separators color", 'moose' )
);
$row1->addChild(
	"menu_item_separators_color",
	$menu_item_separators_color
);

$enable_menu_item_text_decoration = new MooseElatedField(
	"yesno",
	"enable_menu_item_text_decoration",
	"no",
	esc_html__( "Enable 1st Level Menu Item Text Decoration", 'moose' ),
	esc_html__( "Enable this option and choose a text decoration for menu items in first level", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_menu_item_text_decoration_container"
	)
);
$panel4->addChild(
	"enable_menu_item_text_decoration",
	$enable_menu_item_text_decoration
);

$menu_item_text_decoration_container = new MooseElatedContainer(
	"menu_item_text_decoration_container",
	"enable_menu_item_text_decoration",
	"no"
);
$panel4->addChild(
	"menu_item_text_decoration_container",
	$menu_item_text_decoration_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Menu Item Text Decoration", 'moose' ),
	""
);
$menu_item_text_decoration_container->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$menu_item_text_decoration_style = new MooseElatedField(
	"selectsimple",
	"menu_item_text_decoration_style",
	"none",
	esc_html__( "Hover Item Text Decoration", 'moose' ),
	esc_html__( "Choose text decoration type for hover menu items", 'moose' ),
	array(
		"none" => esc_html__( "None", 'moose' ),
		"underline" => esc_html__( "Underline", 'moose' ),
		"line-through" => esc_html__( "Line-through", 'moose' ),
		"overline" => esc_html__( "Overline", 'moose' )
	)
);
$row1->addChild(
	"menu_item_text_decoration_style",
	$menu_item_text_decoration_style
);

$menu_item_active_text_decoration_style = new MooseElatedField(
	"selectsimple",
	"menu_item_active_text_decoration_style",
	"none",
	esc_html__( "Active Item Text Decoration", 'moose' ),
	esc_html__( "Choose text decoration type for active menu items", 'moose' ),
	array(
		"none" => esc_html__( "None", 'moose' ),
		"underline" => esc_html__( "Underline", 'moose' ),
		"line-through" => esc_html__( "Line-through", 'moose' ),
		"overline" => esc_html__( "Overline", 'moose' )
	)
);
$row1->addChild(
	"menu_item_active_text_decoration_style",
	$menu_item_active_text_decoration_style
);

$group1 = new MooseElatedGroup(
	esc_html__( "Main Dropdown Menu", 'moose' ),
	esc_html__( "Choose a color and transparency for the main menu background (0 = fully transparent, 1 = opaque)", 'moose' )
);
$panel4->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$dropdown_background_color = new MooseElatedField(
	"colorsimple",
	"dropdown_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"dropdown_background_color",
	$dropdown_background_color
);

$dropdown_background_transparency = new MooseElatedField(
	"textsimple",
	"dropdown_background_transparency",
	"",
	esc_html__( "Transparency", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"dropdown_background_transparency",
	$dropdown_background_transparency
);

$dropdown_separator_color = new MooseElatedField(
	"colorsimple",
	"dropdown_separator_color",
	"",
	esc_html__( "Item Bottom Separator Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"dropdown_separator_color",
	$dropdown_separator_color
);

$dropdown_vertical_separator_color = new MooseElatedField(
	"colorsimple",
	"dropdown_vertical_separator_color",
	"",
	esc_html__( "Item Vertical Separator Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"dropdown_vertical_separator_color",
	$dropdown_vertical_separator_color
);

$row2 = new MooseElatedRow();
$group1->addChild(
	"row2",
	$row2
);

$enable_dropdown_separator_full_width = new MooseElatedField(
	"yesnosimple",
	"enable_dropdown_separator_full_width",
	"no",
	esc_html__( "Item Separator Full Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"enable_dropdown_separator_full_width",
	$enable_dropdown_separator_full_width
);

$group2 = new MooseElatedGroup(
	esc_html__( "Main Dropdown Menu Padding", 'moose' ),
	esc_html__( "Choose a top/bottom padding for dropdown menu", 'moose' )
);
$panel4->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$dropdown_top_padding = new MooseElatedField(
	"textsimple",
	"dropdown_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"dropdown_top_padding",
	$dropdown_top_padding
);

$dropdown_bottom_padding = new MooseElatedField(
	"textsimple",
	"dropdown_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"dropdown_bottom_padding",
	$dropdown_bottom_padding
);

$menu_dropdown_appearance = new MooseElatedField(
	"select",
	"menu_dropdown_appearance",
	"default",
	esc_html__( "Main Dropdown Menu Appearance", 'moose' ),
	esc_html__( "Choose appearance for dropdown menu", 'moose' ),
	array(
		"default" => esc_html__( "Default", 'moose' ),
		"slide_from_bottom" => esc_html__( "Slide From Bottom", 'moose' ),
		"slide_from_top" => esc_html__( "Slide From Top", 'moose' ),
		"animate_height" => esc_html__( "Animate Height", 'moose' ),
		"slide_from_left" => esc_html__( "Slide From Left", 'moose' )
	)
);
$panel4->addChild(
	"menu_dropdown_appearance",
	$menu_dropdown_appearance
);

$dropdown_top_position = new MooseElatedField(
	"text",
	"dropdown_top_position",
	"",
	esc_html__( "Dropdown position", 'moose' ),
	esc_html__( "Enter value in percentage of entire header height", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel4->addChild(
	"dropdown_top_position",
	$dropdown_top_position
);

$enable_dropdown_menu_item_icon = new MooseElatedField(
	"yesno",
	"enable_dropdown_menu_item_icon",
	"no",
	esc_html__( "Enable Arrow Icon for Dropdown Menu", 'moose' ),
	esc_html__( "Enabling this option will display an arrow icon for 1st level menu items which have a dropdown menu", 'moose' )
);
$panel4->addChild(
	"enable_dropdown_menu_item_icon",
	$enable_dropdown_menu_item_icon
);

$enable_dropdown_top_separator = new MooseElatedField(
	"yesno",
	"enable_dropdown_top_separator",
	"no",
	esc_html__( "Enable Dropdown Top Separator", 'moose' ),
	esc_html__( "Enabling this option will display top separator for second level in dropdown menu", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_disable_dropdown_top_separator_container"
	)
);
$panel4->addChild(
	"enable_dropdown_top_separator",
	$enable_dropdown_top_separator
);

$disable_dropdown_top_separator_container = new MooseElatedContainer(
	"disable_dropdown_top_separator_container",
	"enable_dropdown_top_separator",
	"no"
);
$panel4->addChild(
	"disable_dropdown_top_separator_container",
	$disable_dropdown_top_separator_container
);

$dropdown_top_separator_color = new MooseElatedField(
	"color",
	"dropdown_top_separator_color",
	"",
	esc_html__( "Dropdown Top Separator Color", 'moose' ),
	esc_html__( "Choose color for top separator", 'moose' )
);
$disable_dropdown_top_separator_container->addChild(
	"dropdown_top_separator_color",
	$dropdown_top_separator_color
);

$dropdown_border_around = new MooseElatedField(
	"yesno",
	"dropdown_border_around",
	"no",
	esc_html__( "Enable Dropdown Menu Border", 'moose' ),
	esc_html__( "Enabling this option will display border around dropdown menu", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_dropdown_border_around_container"
	)
);
$panel4->addChild(
	"dropdown_border_around",
	$dropdown_border_around
);

$dropdown_border_around_container = new MooseElatedContainer(
	"dropdown_border_around_container",
	"dropdown_border_around",
	"no"
);
$panel4->addChild(
	"dropdown_border_around_container",
	$dropdown_border_around_container
);

$dropdown_border_around_color = new MooseElatedField(
	"color",
	"dropdown_border_around_color",
	"",
	esc_html__( "Dropdown Border Color", 'moose' ),
	esc_html__( "Choose a color for border around dropdown menu", 'moose' )
);
$dropdown_border_around_container->addChild(
	"dropdown_border_around_color",
	$dropdown_border_around_color
);

$enable_wide_manu_background = new MooseElatedField(
	"yesno",
	"enable_wide_manu_background",
	"no",
	esc_html__( "Enable Full Width Background for Wide Dropdown Type", 'moose' ),
	esc_html__( "Enabling this option will show full width background  for wide dropdown type", 'moose' ),
	array()
);
$panel4->addChild(
	"enable_wide_manu_background",
	$enable_wide_manu_background
);

$wide_image_background = new MooseElatedField(
	"image",
	"wide_image_background",
	"",
	esc_html__( "Set Background Image for Wide Dropdown Type", 'moose' ),
	"",
	array()
);
$panel4->addChild(
	"wide_image_background",
	$wide_image_background
);

$group3 = new MooseElatedGroup(
	esc_html__( "Wide Dropdown Menu Padding", 'moose' ),
	esc_html__( "Choose a top/bottom padding for dropdown wide menu", 'moose' )
);
$panel4->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$wide_dropdown_top_padding = new MooseElatedField(
	"textsimple",
	"wide_dropdown_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"wide_dropdown_top_padding",
	$wide_dropdown_top_padding
);

$wide_dropdown_bottom_padding = new MooseElatedField(
	"textsimple",
	"wide_dropdown_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"wide_dropdown_bottom_padding",
	$wide_dropdown_bottom_padding
);

$panel3 = new MooseElatedPanel(
	esc_html__( "Elated Search", 'moose' ),
	"enable_search_panel",
	"header_type",
	"",
	array()
);
$headerandfooterPage->addChild(
	"panel3",
	$panel3
);

$enable_search = new MooseElatedField(
	"yesno",
	"enable_search",
	"no",
	esc_html__( "Enable Elated Search Bar", 'moose' ),
	"This option enables Elated Search functionality (search icon will appear next to main navigation)
        ",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_search_container"
	)
);
$panel3->addChild(
	"enable_search",
	$enable_search
);

$enable_search_container = new MooseElatedContainer(
	"enable_search_container",
	"enable_search",
	"no"
);
$panel3->addChild(
	"enable_search_container",
	$enable_search_container
);

$search_type = new MooseElatedField(
	"select",
	"search_type",
	"search_slides_from_header_bottom",
	esc_html__( "Elated Search Type", 'moose' ),
	esc_html__( "Choose a type of Elated search bar (Note: Slide From Header Bottom search type doesn't work with transparent header or when placed in Header Top)", 'moose' ),
	array(
		"search_slides_from_header_bottom" => esc_html__( "Slide From Header Bottom", 'moose' ),
		"search_covers_header" => esc_html__( "Search Covers Header", 'moose' ),
		"fullscreen_search" => esc_html__( "Fullscreen Search", 'moose' ),
		"search_slides_from_window_top" => esc_html__( "Slide from Window Top", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"search_covers_header"             => "#eltdf_search_height_container,#eltdf_search_animation_container",
			"fullscreen_search"                => "#eltdf_search_height_container,#eltdf_search_cover_header_container",
			"search_slides_from_header_bottom" => "#eltdf_search_animation_container,#eltdf_search_cover_header_container",
			"search_slides_from_window_top"    => "#eltdf_search_animation_container,#eltdf_search_cover_header_container,#eltdf_search_height_container"
		),
		"show"       => array(
			"search_slides_from_header_bottom" => "#eltdf_search_height_container",
			"fullscreen_search"                => "#eltdf_search_animation_container",
			"search_covers_header"             => "#eltdf_search_cover_header_container",
			"search_slides_from_window_top"    => ""
		)
	)
);
$enable_search_container->addChild(
	"search_type",
	$search_type
);

$search_height_container = new MooseElatedContainer(
	"search_height_container",
	"search_type",
	"",
	array(
		"search_covers_header",
		"fullscreen_search",
		"search_slides_from_window_top"
	)
);
$enable_search_container->addChild(
	"search_height_container",
	$search_height_container
);

$search_height = new MooseElatedField(
	"text",
	"search_height",
	"",
	esc_html__( "Search bar height", 'moose' ),
	esc_html__( "Set search bar height (in pixels)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$search_height_container->addChild(
	"search_height",
	$search_height
);

$search_animation_container = new MooseElatedContainer(
	"search_animation_container",
	"search_type",
	"",
	array(
		"search_covers_header",
		"search_slides_from_header_bottom",
		"search_slides_from_window_top"
	)
);
$enable_search_container->addChild(
	"search_animation_container",
	$search_animation_container
);

$search_animation = new MooseElatedField(
	"select",
	"search_animation",
	"fade",
	esc_html__( "Fullscreen Search Overlay Animation", 'moose' ),
	esc_html__( "Choose animation for fullscreen search overlay", 'moose' ),
	array(
		"fade" => esc_html__( "Fade", 'moose' ),
		"from_circle" => esc_html__( "Circle appear", 'moose' )
	)
);
$search_animation_container->addChild(
	"search_animation",
	$search_animation
);

$search_cover_header_container = new MooseElatedContainer(
	"search_cover_header_container",
	"search_type",
	"",
	array(
		"fullscreen_search",
		"search_slides_from_header_bottom",
		"search_slides_from_window_top"
	)
);
$enable_search_container->addChild(
	"search_cover_header_container",
	$search_cover_header_container
);

$search_cover_only_bottom_yesno = new MooseElatedField(
	"yesno",
	"search_cover_only_bottom_yesno",
	"no",
	esc_html__( "Cover Only Header Bottom", 'moose' ),
	esc_html__( "Enable this option to make search cover only header bottom", 'moose' )
);
$search_cover_header_container->addChild(
	"search_cover_only_bottom_yesno",
	$search_cover_only_bottom_yesno
);

$search_icon_pack = new MooseElatedField(
	"select",
	"search_icon_pack",
	"font_awesome",
	esc_html__( "Search Icon Pack", 'moose' ),
	"Choose
			icon pack for search icon",
	$moose_elated_icon_collections->getIconCollectionsExclude( 'linea_icons' )
);
$enable_search_container->addChild(
	"search_icon_pack",
	$search_icon_pack
);

$search_icon_in_header_top = new MooseElatedField(
	"yesno",
	"search_icon_in_header_top",
	"no",
	esc_html__( "Search in Header Top", 'moose' ),
	esc_html__( "Enable this option to put search in Header Top", 'moose' )
);
$enable_search_container->addChild(
	"search_icon_in_header_top",
	$search_icon_in_header_top
);

$initial_header_icon_title = new MooseElatedTitle(
	"initial_header_icon_title",
	esc_html__( "Initial Search Icon in Header", 'moose' )
);
$enable_search_container->addChild(
	"initial_header_icon_title",
	$initial_header_icon_title
);

$group7 = new MooseElatedGroup(
	esc_html__( "Initial Search Icon", 'moose' ),
	esc_html__( "Define size for Search icon in Header", 'moose' )
);
$enable_search_container->addChild(
	"group7",
	$group7
);
$row1 = new MooseElatedRow();
$group7->addChild(
	"row1",
	$row1
);
$header_search_icon_size = new MooseElatedField(
	"textsimple",
	"header_search_icon_size",
	"",
	esc_html__( "Icon Size", 'moose' ),
	esc_html__( "Set size for icon (ix pixels)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"header_search_icon_size",
	$header_search_icon_size
);

$group8 = new MooseElatedGroup(
	esc_html__( "Icon Background Style", 'moose' ),
	esc_html__( "Define background style for icon", 'moose' )
);
$enable_search_container->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$search_icon_background_color = new MooseElatedField(
	"colorsimple",
	"search_icon_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose a background color for Elated search icon", 'moose' )
);
$row1->addChild(
	"search_icon_background_color",
	$search_icon_background_color
);

$search_icon_background_hover_color = new MooseElatedField(
	"colorsimple",
	"search_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "Choose a background hover color for Elated search icon", 'moose' )
);
$row1->addChild(
	"search_icon_background_hover_color",
	$search_icon_background_hover_color
);

$search_icon_background_full_height = new MooseElatedField(
	"yesnosimple",
	"search_icon_background_full_height",
	"no",
	esc_html__( "Icon Background Full Height", 'moose' ),
	esc_html__( "Enabling this option will make seacrh icon background to go full height", 'moose' )
);
$row1->addChild(
	"search_icon_background_full_height",
	$search_icon_background_full_height
);

$enable_search_icon_text = new MooseElatedField(
	"yesno",
	"enable_search_icon_text",
	"no",
	esc_html__( "Enable Search Icon Text", 'moose' ),
	esc_html__( "Enable this option to show 'Search' text next to search icon in header", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_search_icon_text_container"
	)
);
$enable_search_container->addChild(
	"enable_search_icon_text",
	$enable_search_icon_text
);

$enable_search_icon_text_container = new MooseElatedContainer(
	"enable_search_icon_text_container",
	"enable_search_icon_text",
	"no"
);
$enable_search_container->addChild(
	"enable_search_icon_text_container",
	$enable_search_icon_text_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Search Icon Text", 'moose' ),
	esc_html__( "Define Style for Search Icon Text", 'moose' )
);
$enable_search_icon_text_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$search_icon_text_color = new MooseElatedField(
	"colorsimple",
	"search_icon_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_icon_text_color",
	$search_icon_text_color
);
$search_icon_text_color_hover = new MooseElatedField(
	"colorsimple",
	"search_icon_text_color_hover",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_icon_text_color_hover",
	$search_icon_text_color_hover
);
$search_icon_text_fontsize = new MooseElatedField(
	"textsimple",
	"search_icon_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_icon_text_fontsize",
	$search_icon_text_fontsize
);
$search_icon_text_lineheight = new MooseElatedField(
	"textsimple",
	"search_icon_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_icon_text_lineheight",
	$search_icon_text_lineheight
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$search_icon_text_texttransform = new MooseElatedField(
	"selectblanksimple",
	"search_icon_text_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"search_icon_text_texttransform",
	$search_icon_text_texttransform
);
$search_icon_text_google_fonts = new MooseElatedField(
	esc_html__( "Fontsimple", 'moose' ),
	"search_icon_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"search_icon_text_google_fonts",
	$search_icon_text_google_fonts
);
$search_icon_text_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"search_icon_text_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"search_icon_text_fontstyle",
	$search_icon_text_fontstyle
);
$search_icon_text_fontweight = new MooseElatedField(
	"selectblanksimple",
	"search_icon_text_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"search_icon_text_fontweight",
	$search_icon_text_fontweight
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$search_icon_text_letterspacing = new MooseElatedField(
	"textsimple",
	"search_icon_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"search_icon_text_letterspacing",
	$search_icon_text_letterspacing
);

$group6 = new MooseElatedGroup(
	esc_html__( "Icon Spacing", 'moose' ),
	esc_html__( "Define padding and margins for Search icon", 'moose' )
);
$enable_search_container->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$search_padding_left = new MooseElatedField(
	"textsimple",
	"search_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_padding_left",
	$search_padding_left
);

$search_padding_right = new MooseElatedField(
	"textsimple",
	"search_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_padding_right",
	$search_padding_right
);

$search_margin_left = new MooseElatedField(
	"textsimple",
	"search_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_margin_left",
	$search_margin_left
);

$search_margin_right = new MooseElatedField(
	"textsimple",
	"search_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_margin_right",
	$search_margin_right
);

$search_form_title = new MooseElatedTitle(
	"search_form_title",
	esc_html__( "Elated Search Bar", 'moose' )
);
$enable_search_container->addChild(
	"search_form_title",
	$search_form_title
);

$search_background_color = new MooseElatedField(
	"color",
	"search_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose a background color for Elated search bar", 'moose' )
);
$enable_search_container->addChild(
	"search_background_color",
	$search_background_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Search Input Text", 'moose' ),
	esc_html__( "Define Style for Search text", 'moose' )
);
$enable_search_container->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$search_text_color = new MooseElatedField(
	"colorsimple",
	"search_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_text_color",
	$search_text_color
);
$search_text_disabled_color = new MooseElatedField(
	"colorsimple",
	"search_text_disabled_color",
	"",
	esc_html__( "Disabled Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_text_disabled_color",
	$search_text_disabled_color
);
$search_text_fontsize = new MooseElatedField(
	"textsimple",
	"search_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_text_fontsize",
	$search_text_fontsize
);
$search_text_texttransform = new MooseElatedField(
	"selectblanksimple",
	"search_text_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"search_text_texttransform",
	$search_text_texttransform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$search_text_google_fonts = new MooseElatedField(
	"fontsimple",
	"search_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"search_text_google_fonts",
	$search_text_google_fonts
);
$search_text_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"search_text_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"search_text_fontstyle",
	$search_text_fontstyle
);
$search_text_fontweight = new MooseElatedField(
	"selectblanksimple",
	"search_text_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"search_text_fontweight",
	$search_text_fontweight
);
$search_text_letterspacing = new MooseElatedField(
	"textsimple",
	"search_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"search_text_letterspacing",
	$search_text_letterspacing
);

$group5 = new MooseElatedGroup(
	esc_html__( "Search Label Text", 'moose' ),
	esc_html__( "Define Style for Search label text", 'moose' )
);
$enable_search_container->addChild(
	"group5",
	$group5
);
$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);
$search_label_text_color = new MooseElatedField(
	"colorsimple",
	"search_label_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_label_text_color",
	$search_label_text_color
);
$search_label_text_fontsize = new MooseElatedField(
	"textsimple",
	"search_label_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"search_label_text_fontsize",
	$search_label_text_fontsize
);
$search_label_text_texttransform = new MooseElatedField(
	"selectblanksimple",
	"search_label_text_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"search_label_text_texttransform",
	$search_label_text_texttransform
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);
$search_label_text_google_fonts = new MooseElatedField(
	"fontsimple",
	"search_label_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"search_label_text_google_fonts",
	$search_label_text_google_fonts
);
$search_label_text_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"search_label_text_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"search_label_text_fontstyle",
	$search_label_text_fontstyle
);
$search_label_text_fontweight = new MooseElatedField(
	"selectblanksimple",
	"search_label_text_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"search_label_text_fontweight",
	$search_label_text_fontweight
);
$search_label_text_letterspacing = new MooseElatedField(
	"textsimple",
	"search_label_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"search_label_text_letterspacing",
	$search_label_text_letterspacing
);

$group2 = new MooseElatedGroup(
	esc_html__( "Search Icon", 'moose' ),
	esc_html__( "Define Style for Search icon", 'moose' )
);
$enable_search_container->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$search_icon_color = new MooseElatedField(
	"colorsimple",
	"search_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for Elated search bar", 'moose' )
);
$row1->addChild(
	"search_icon_color",
	$search_icon_color
);
$search_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"search_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose icon hover color for Elated search bar", 'moose' )
);
$row1->addChild(
	"search_icon_hover_color",
	$search_icon_hover_color
);
$search_icon_disabled_color = new MooseElatedField(
	"colorsimple",
	"search_icon_disabled_color",
	"",
	esc_html__( "Icon Disabled Color", 'moose' ),
	esc_html__( "Choose icon disabled color for Elated search bar", 'moose' )
);
$row1->addChild(
	"search_icon_disabled_color",
	$search_icon_disabled_color
);
$search_icon_size = new MooseElatedField(
	"textsimple",
	"search_icon_size",
	"",
	esc_html__( "Icon Size", 'moose' ),
	esc_html__( "Set size for icon (ix pixels)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"search_icon_size",
	$search_icon_size
);

$group4 = new MooseElatedGroup(
	esc_html__( "Search Close", 'moose' ),
	esc_html__( "Define style for Search close icon", 'moose' )
);
$enable_search_container->addChild(
	"group4",
	$group4
);
$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);
$search_close_color = new MooseElatedField(
	"colorsimple",
	"search_close_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose color for search close icon", 'moose' )
);
$row1->addChild(
	"search_close_color",
	$search_close_color
);
$search_close_hover_color = new MooseElatedField(
	"colorsimple",
	"search_close_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose hover color for search close icon", 'moose' )
);
$row1->addChild(
	"search_close_hover_color",
	$search_close_hover_color
);
$search_close_size = new MooseElatedField(
	"textsimple",
	"search_close_size",
	"",
	esc_html__( "Icon Size", 'moose' ),
	esc_html__( "Choose size for search close icon", 'moose' )
);
$row1->addChild(
	"search_close_size",
	$search_close_size
);

$group3 = new MooseElatedGroup(
	esc_html__( "Search Bottom Border", 'moose' ),
	esc_html__( "Define style for Search text input bottom border (for Fullscreen search type)", 'moose' )
);
$enable_search_container->addChild(
	"group3",
	$group3
);
$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);
$search_border_color = new MooseElatedField(
	"colorsimple",
	"search_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose border color for search text input", 'moose' )
);
$row1->addChild(
	"search_border_color",
	$search_border_color
);
$search_border_focus_color = new MooseElatedField(
	"colorsimple",
	"search_border_focus_color",
	"",
	esc_html__( "Border Focus Color", 'moose' ),
	esc_html__( "Choose focus color for search text input", 'moose' )
);
$row1->addChild(
	"search_border_focus_color",
	$search_border_focus_color
);

$panel11 = new MooseElatedPanel(
	esc_html__( "Side Area", 'moose' ),
	"enable_side_area_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel11",
	$panel11
);

$enable_side_area = new MooseElatedField(
	"yesno",
	"enable_side_area",
	"yes",
	esc_html__( "Enable Side Area", 'moose' ),
	esc_html__( "This option enables a side area to be opened from main menu navigation", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_side_area_container"
	)
);
$panel11->addChild(
	"enable_side_area",
	$enable_side_area
);

$enable_side_area_container = new MooseElatedContainer(
	"enable_side_area_container",
	"enable_side_area",
	"no"
);
$panel11->addChild(
	"enable_side_area_container",
	$enable_side_area_container
);

$side_area_type = new MooseElatedField(
	"select",
	"side_area_type",
	"side_menu_slide_from_right",
	esc_html__( "Side Area Type", 'moose' ),
	esc_html__( "Choose a type of Side Area", 'moose' ),
	array(
		"side_menu_slide_from_right" => esc_html__( "Slide from Right Over Content", 'moose' ),
		"side_menu_slide_with_content" => esc_html__( "Slide from Right With Content", 'moose' ),
		"side_area_uncovered_from_content" => esc_html__( "Side Area Uncovered from Content", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"side_menu_slide_from_right"       => "#eltdf_side_area_slide_with_content_container",
			"side_menu_slide_with_content"     => "#eltdf_side_area_width_container",
			"side_area_uncovered_from_content" => "#eltdf_side_area_width_container,#eltdf_side_area_slide_with_content_container"
		),
		"show"       => array(
			"side_menu_slide_from_right"       => "#eltdf_side_area_width_container",
			"side_menu_slide_with_content"     => "#eltdf_side_area_slide_with_content_container",
			"side_area_uncovered_from_content" => ""
		)
	)
);

$enable_side_area_container->addChild(
	"side_area_type",
	$side_area_type
);

$side_area_width_container = new MooseElatedContainer(
	"side_area_width_container",
	"side_area_type",
	"",
	array(
		"side_menu_slide_with_content",
		"side_area_uncovered_from_content"
	)
);
$enable_side_area_container->addChild(
	"side_area_width_container",
	$side_area_width_container
);

$side_area_width = new MooseElatedField(
	"text",
	"side_area_width",
	"",
	esc_html__( "Side Area Width", 'moose' ),
	esc_html__( "Enter a width for Side Area (in percentages, enter more than 30)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$side_area_width_container->addChild(
	"side_area_width",
	$side_area_width
);

$side_area_content_overlay_color = new MooseElatedField(
	"color",
	"side_area_content_overlay_color",
	"",
	esc_html__( "Content Overlay Background Color", 'moose' ),
	esc_html__( "Choose a background color for a content overlay", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$side_area_width_container->addChild(
	"side_area_content_overlay_color",
	$side_area_content_overlay_color
);

$side_area_content_overlay_opacity = new MooseElatedField(
	"text",
	"side_area_content_overlay_opacity",
	"",
	esc_html__( "Content Overlay Background Transparency", 'moose' ),
	esc_html__( "Choose a transparency for the content overlay background color (0 = fully transparent, 1 = opaque)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$side_area_width_container->addChild(
	"side_area_content_overlay_opacity",
	$side_area_content_overlay_opacity
);

$side_area_slide_with_content_container = new MooseElatedContainer(
	"side_area_slide_with_content_container",
	"side_area_type",
	"",
	array(
		"side_menu_slide_from_right",
		"side_area_uncovered_from_content"
	)
);
$enable_side_area_container->addChild(
	"side_area_slide_with_content_container",
	$side_area_slide_with_content_container
);

$side_area_slide_with_content_width = new MooseElatedField(
	"select",
	"side_area_slide_with_content_width",
	"width_470",
	esc_html__( "Side Area Width", 'moose' ),
	esc_html__( "Choose width for Side Area", 'moose' ),
	array(
		"width_270" => esc_html__( "270px", 'moose' ),
		"width_370" => esc_html__( "370px", 'moose' ),
		"width_470" => esc_html__( "470px", 'moose' )
	)
);
$side_area_slide_with_content_container->addChild(
	"side_area_slide_with_content_width",
	$side_area_slide_with_content_width
);

$group6 = new MooseElatedGroup(
	esc_html__( "Side Area Icon Spacing", 'moose' ),
	esc_html__( "Define padding and margin for side area icon", 'moose' )
);
$enable_side_area_container->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$side_area_icon_padding_left = new MooseElatedField(
	"textsimple",
	"side_area_icon_padding_left",
	"",
	esc_html__( "Padding Left/Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_icon_padding_left",
	$side_area_icon_padding_left
);

$side_area_icon_padding_right = new MooseElatedField(
	"textsimple",
	"side_area_icon_padding_right",
	"",
	esc_html__( "Padding Top/Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_icon_padding_right",
	$side_area_icon_padding_right
);

$side_area_icon_margin_left = new MooseElatedField(
	"textsimple",
	"side_area_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_icon_margin_left",
	$side_area_icon_margin_left
);

$side_area_icon_margin_right = new MooseElatedField(
	"textsimple",
	"side_area_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_icon_margin_right",
	$side_area_icon_margin_right
);

$side_area_icon_border_yesno = new MooseElatedField(
	"yesno",
	"side_area_icon_border_yesno",
	"no",
	esc_html__( "Icon Border", 'moose' ),
	esc_html__( "Enable border around icon", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_side_area_icon_border_container"
	)
);
$enable_side_area_container->addChild(
	"side_area_icon_border_yesno",
	$side_area_icon_border_yesno
);

$side_area_icon_border_container = new MooseElatedContainer(
	"side_area_icon_border_container",
	"side_area_icon_border_yesno",
	"no"
);
$enable_side_area_container->addChild(
	"side_area_icon_border_container",
	$side_area_icon_border_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Border Style", 'moose' ),
	esc_html__( "Define styling for border around icon", 'moose' )
);
$side_area_icon_border_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$side_area_icon_border_color = new MooseElatedField(
	"colorsimple",
	"side_area_icon_border_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_icon_border_color",
	$side_area_icon_border_color
);

$side_area_icon_border_hover_color = new MooseElatedField(
	"colorsimple",
	"side_area_icon_border_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_icon_border_hover_color",
	$side_area_icon_border_hover_color
);

$row2 = new MooseElatedRow();
$group1->addChild(
	"row2",
	$row2
);

$side_area_icon_border_width = new MooseElatedField(
	"textsimple",
	"side_area_icon_border_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"side_area_icon_border_width",
	$side_area_icon_border_width
);

$side_area_icon_border_radius = new MooseElatedField(
	"textsimple",
	"side_area_icon_border_radius",
	"",
	esc_html__( "Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"side_area_icon_border_radius",
	$side_area_icon_border_radius
);

$side_area_icon_border_style = new MooseElatedField(
	"selectsimple",
	"side_area_icon_border_style",
	"",
	esc_html__( "Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' )
	)
);
$row2->addChild(
	"side_area_icon_border_style",
	$side_area_icon_border_style
);

$side_area_aligment = new MooseElatedField(
	"selectblank",
	"side_area_aligment",
	"",
	esc_html__( "Text Aligment", 'moose' ),
	esc_html__( "Choose text aligment for side area", 'moose' ),
	array(
		"center" => esc_html__( "Center", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	
	)
);

$enable_side_area_container->addChild(
	"side_area_aligment",
	$side_area_aligment
);

$side_area_title = new MooseElatedField(
	"text",
	"side_area_title",
	"",
	esc_html__( "Side Area Title", 'moose' ),
	esc_html__( "Enter a title to appear in Side Area", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$enable_side_area_container->addChild(
	"side_area_title",
	$side_area_title
);

$side_area_background_color = new MooseElatedField(
	"color",
	"side_area_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose a background color for Side Area", 'moose' )
);
$enable_side_area_container->addChild(
	"side_area_background_color",
	$side_area_background_color
);

$group5 = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define padding for Side Area", 'moose' )
);
$enable_side_area_container->addChild(
	"group5",
	$group5
);
$row1 = new MooseElatedRow( true );
$group5->addChild(
	"row1",
	$row1
);
$side_area_padding_top = new MooseElatedField(
	"textsimple",
	"side_area_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_padding_top",
	$side_area_padding_top
);
$side_area_padding_right = new MooseElatedField(
	"textsimple",
	"side_area_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_padding_right",
	$side_area_padding_right
);
$side_area_padding_bottom = new MooseElatedField(
	"textsimple",
	"side_area_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_padding_bottom",
	$side_area_padding_bottom
);
$side_area_padding_left = new MooseElatedField(
	"textsimple",
	"side_area_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_padding_left",
	$side_area_padding_left
);

$side_area_close_icon = new MooseElatedField(
	"select",
	"side_area_close_icon",
	"light",
	esc_html__( "Close Icon Style", 'moose' ),
	esc_html__( "Choose a type of close icon", 'moose' ),
	array(
		"light" => esc_html__( "Light", 'moose' ),
		"dark" => esc_html__( "Dark", 'moose' )
	)
);

$enable_side_area_container->addChild(
	"side_area_close_icon",
	$side_area_close_icon
);

$group1 = new MooseElatedGroup(
	esc_html__( "Title", 'moose' ),
	esc_html__( "Define Style for Side Area title", 'moose' )
);
$enable_side_area_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$side_area_title_color = new MooseElatedField(
	"colorsimple",
	"side_area_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_title_color",
	$side_area_title_color
);
$side_area_title_fontsize = new MooseElatedField(
	"textsimple",
	"side_area_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_title_fontsize",
	$side_area_title_fontsize
);
$side_area_title_lineheight = new MooseElatedField(
	"textsimple",
	"side_area_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_title_lineheight",
	$side_area_title_lineheight
);
$side_area_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"side_area_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"side_area_title_texttransform",
	$side_area_title_texttransform
);
$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$side_area_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"side_area_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"side_area_title_google_fonts",
	$side_area_title_google_fonts
);
$side_area_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"side_area_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"side_area_title_fontstyle",
	$side_area_title_fontstyle
);
$side_area_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"side_area_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"side_area_title_fontweight",
	$side_area_title_fontweight
);
$side_area_title_letterspacing = new MooseElatedField(
	"textsimple",
	"side_area_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"side_area_title_letterspacing",
	$side_area_title_letterspacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Text", 'moose' ),
	esc_html__( "Define Style for Side Area text", 'moose' )
);
$enable_side_area_container->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);
$side_area_text_color = new MooseElatedField(
	"colorsimple",
	"side_area_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_text_color",
	$side_area_text_color
);
$side_area_text_fontsize = new MooseElatedField(
	"textsimple",
	"side_area_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_text_fontsize",
	$side_area_text_fontsize
);
$side_area_text_lineheight = new MooseElatedField(
	"textsimple",
	"side_area_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"side_area_text_lineheight",
	$side_area_text_lineheight
);
$side_area_text_texttransform = new MooseElatedField(
	"selectblanksimple",
	"side_area_text_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"side_area_text_texttransform",
	$side_area_text_texttransform
);
$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);
$side_area_text_google_fonts = new MooseElatedField(
	"fontsimple",
	"side_area_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"side_area_text_google_fonts",
	$side_area_text_google_fonts
);
$side_area_text_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"side_area_text_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"side_area_text_fontstyle",
	$side_area_text_fontstyle
);
$side_area_text_fontweight = new MooseElatedField(
	"selectblanksimple",
	"side_area_text_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"side_area_text_fontweight",
	$side_area_text_fontweight
);
$side_area_text_letterspacing = new MooseElatedField(
	"textsimple",
	"side_area_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"side_area_text_letterspacing",
	$side_area_text_letterspacing
);

$group2 = new MooseElatedGroup(
	esc_html__( "Link Style", 'moose' ),
	esc_html__( "Define styles for side area widget links", 'moose' )
);
$enable_side_area_container->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$sidearea_link_color = new MooseElatedField(
	"colorsimple",
	"sidearea_link_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidearea_link_color",
	$sidearea_link_color
);

$sidearea_link_font_size = new MooseElatedField(
	"textsimple",
	"sidearea_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidearea_link_font_size",
	$sidearea_link_font_size
);

$sidearea_link_line_height = new MooseElatedField(
	"textsimple",
	"sidearea_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidearea_link_line_height",
	$sidearea_link_line_height
);

$sidearea_link_text_transform = new MooseElatedField(
	"selectblanksimple",
	"sidearea_link_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"sidearea_link_text_transform",
	$sidearea_link_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$sidearea_link_font_family = new MooseElatedField(
	"fontsimple",
	"sidearea_link_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidearea_link_font_family",
	$sidearea_link_font_family
);

$sidearea_link_font_style = new MooseElatedField(
	"selectblanksimple",
	"sidearea_link_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"sidearea_link_font_style",
	$sidearea_link_font_style
);

$sidearea_link_font_weight = new MooseElatedField(
	"selectblanksimple",
	"sidearea_link_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"sidearea_link_font_weight",
	$sidearea_link_font_weight
);

$sidearea_link_letter_spacing = new MooseElatedField(
	"textsimple",
	"sidearea_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidearea_link_letter_spacing",
	$sidearea_link_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);
$sidearea_link_hover_color = new MooseElatedField(
	"colorsimple",
	"sidearea_link_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"sidearea_link_hover_color",
	$sidearea_link_hover_color
);

$side_area_enable_bottom_border = new MooseElatedField(
	"yesno",
	"side_area_enable_bottom_border",
	"no",
	esc_html__( "Border Bottom on Elements", 'moose' ),
	esc_html__( "Enable border bottom on elements in side area", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_side_area_bottom_border_container"
	)
);
$enable_side_area_container->addChild(
	"side_area_enable_bottom_border",
	$side_area_enable_bottom_border
);

$side_area_bottom_border_container = new MooseElatedContainer(
	"side_area_bottom_border_container",
	"side_area_enable_bottom_border",
	"no"
);
$enable_side_area_container->addChild(
	"side_area_bottom_border_container",
	$side_area_bottom_border_container
);

$side_area_bottom_border_color = new MooseElatedField(
	"color",
	"side_area_bottom_border_color",
	"",
	esc_html__( "Choose Color for Border Bottom", 'moose' ),
	esc_html__( "Choose color for border bottom on elements in sidearea", 'moose' )
);
$side_area_bottom_border_container->addChild(
	"side_area_bottom_border_color",
	$side_area_bottom_border_color
);

// Fullscreen Menu

$panel12 = new MooseElatedPanel(
	esc_html__( "Fullscreen Menu", 'moose' ),
	"enable_popup_menu_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel12",
	$panel12
);

$enable_popup_menu = new MooseElatedField(
	"yesno",
	"enable_popup_menu",
	"no",
	esc_html__( "Enable Fullscreen Menu", 'moose' ),
	esc_html__( "This option enables a fullscreen menu to be opened from main menu navigation", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_popup_menu_container"
	)
);
$panel12->addChild(
	"enable_popup_menu",
	$enable_popup_menu
);

$enable_popup_menu_container = new MooseElatedContainer(
	"enable_popup_menu_container",
	"enable_popup_menu",
	"no"
);
$panel12->addChild(
	"enable_popup_menu_container",
	$enable_popup_menu_container
);

$popup_menu_animation_style = new MooseElatedField(
	"select",
	"popup_menu_animation_style",
	"appear_from_bottom",
	esc_html__( "Fullscreen Menu Overlay Animation", 'moose' ),
	esc_html__( "Choose animation type for fullscreen menu overlay", 'moose' ),
	array(
		'fade_push_text_right' => esc_html__( 'Fade Push Text Right', 'moose' ),
		'fade_push_text_top' => esc_html__( 'Fade Push Text Top', 'moose' ),
		'fade_text_scaledown' => esc_html__( 'Fade Text Scaledown', 'moose' )
	)
);
$enable_popup_menu_container->addChild(
	"popup_menu_animation_style",
	$popup_menu_animation_style
);

$logo_image_popup = new MooseElatedField(
	"image",
	"logo_image_popup",
	"",
	esc_html__( "Logo in Fullscreen Menu Overlay", 'moose' ),
	esc_html__( "Place logo in top left corner of fullscreen menu overlay", 'moose' )
);
$enable_popup_menu_container->addChild(
	"logo_image_popup",
	$logo_image_popup
);

$popup_in_grid = new MooseElatedField(
	"yesno",
	"popup_in_grid",
	"no",
	esc_html__( "Fullscreen Menu in Grid", 'moose' ),
	esc_html__( "Enabling this option will put fullscreen menu content in grid", 'moose' )
);
$enable_popup_menu_container->addChild(
	"popup_in_grid",
	$popup_in_grid
);

$popup_alignment = new MooseElatedField(
	"selectblank",
	"popup_alignment",
	"",
	esc_html__( "Fullscreen Menu Alignment", 'moose' ),
	esc_html__( "Choose alignment for fullscreen menu content", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$enable_popup_menu_container->addChild(
	"popup_alignment",
	$popup_alignment
);

$group4 = new MooseElatedGroup(
	esc_html__( "Background", 'moose' ),
	esc_html__( "Select a background color and transparency for Fullscreen Menu (0 = fully transparent, 1 = opaque)", 'moose' )
);
$enable_popup_menu_container->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow( true );
$group4->addChild(
	"row1",
	$row1
);

$popup_menu_background_color = new MooseElatedField(
	"colorsimple",
	"popup_menu_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_background_color",
	$popup_menu_background_color
);
$popup_menu_background_transparency = new MooseElatedField(
	"textsimple",
	"popup_menu_background_transparency",
	"",
	esc_html__( "Transparency (values:0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_background_transparency",
	$popup_menu_background_transparency
);

$background_image_popup = new MooseElatedField(
	"image",
	"background_image_popup",
	"",
	esc_html__( "Background Image", 'moose' ),
	esc_html__( "Choose a background image for Fullscreen Menu background", 'moose' )
);
$enable_popup_menu_container->addChild(
	"background_image_popup",
	$background_image_popup
);

$pattern_image_popup = new MooseElatedField(
	"image",
	"pattern_image_popup",
	"",
	esc_html__( "Pattern Background Image", 'moose' ),
	esc_html__( "Choose a pattern image for Fullscreen Menu background", 'moose' )
);
$enable_popup_menu_container->addChild(
	"pattern_image_popup",
	$pattern_image_popup
);

$group1 = new MooseElatedGroup(
	"1st Level Style",
	esc_html__( "Define styles for 1st level in Fullscreen Menu", 'moose' )
);
$enable_popup_menu_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$popup_menu_color = new MooseElatedField(
	"colorsimple",
	"popup_menu_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_color",
	$popup_menu_color
);
$popup_menu_hover_color = new MooseElatedField(
	"colorsimple",
	"popup_menu_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_hover_color",
	$popup_menu_hover_color
);
$popup_menu_active_color = new MooseElatedField(
	"colorsimple",
	"popup_menu_active_color",
	"",
	esc_html__( "Active Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_active_color",
	$popup_menu_active_color
);

$row4 = new MooseElatedRow();
$group1->addChild(
	"row4",
	$row4
);
$popup_menu_hover_background_color = new MooseElatedField(
	"colorsimple",
	"popup_menu_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"popup_menu_hover_background_color",
	$popup_menu_hover_background_color
);
$popup_menu_active_background_color = new MooseElatedField(
	"colorsimple",
	"popup_menu_active_background_color",
	"",
	esc_html__( "Background Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"popup_menu_active_background_color",
	$popup_menu_active_background_color
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$popup_menu_google_fonts = new MooseElatedField(
	"fontsimple",
	"popup_menu_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"popup_menu_google_fonts",
	$popup_menu_google_fonts
);
$popup_menu_fontsize = new MooseElatedField(
	"textsimple",
	"popup_menu_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"popup_menu_fontsize",
	$popup_menu_fontsize
);
$popup_menu_lineheight = new MooseElatedField(
	"textsimple",
	"popup_menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"popup_menu_lineheight",
	$popup_menu_lineheight
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$popup_menu_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"popup_menu_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"popup_menu_fontstyle",
	$popup_menu_fontstyle
);
$popup_menu_fontweight = new MooseElatedField(
	"selectblanksimple",
	"popup_menu_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"popup_menu_fontweight",
	$popup_menu_fontweight
);
$popup_menu_letterspacing = new MooseElatedField(
	"textsimple",
	"popup_menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"popup_menu_letterspacing",
	$popup_menu_letterspacing
);
$popup_menu_texttransform = new MooseElatedField(
	"selectblanksimple",
	"popup_menu_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"popup_menu_texttransform",
	$popup_menu_texttransform
);

$group2 = new MooseElatedGroup(
	"2nd Level Style",
	esc_html__( "Define styles for 2nd level in Fullscreen Menu", 'moose' )
);
$enable_popup_menu_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$popup_menu_color_2nd = new MooseElatedField(
	"colorsimple",
	"popup_menu_color_2nd",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_color_2nd",
	$popup_menu_color_2nd
);
$popup_menu_hover_color_2nd = new MooseElatedField(
	"colorsimple",
	"popup_menu_hover_color_2nd",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_hover_color_2nd",
	$popup_menu_hover_color_2nd
);
$popup_menu_hover_background_color_2nd = new MooseElatedField(
	"colorsimple",
	"popup_menu_hover_background_color_2nd",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_hover_background_color_2nd",
	$popup_menu_hover_background_color_2nd
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$popup_menu_google_fonts_2nd = new MooseElatedField(
	"fontsimple",
	"popup_menu_google_fonts_2nd",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"popup_menu_google_fonts_2nd",
	$popup_menu_google_fonts_2nd
);
$popup_menu_fontsize_2nd = new MooseElatedField(
	"textsimple",
	"popup_menu_fontsize_2nd",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"popup_menu_fontsize_2nd",
	$popup_menu_fontsize_2nd
);
$popup_menu_lineheight_2nd = new MooseElatedField(
	"textsimple",
	"popup_menu_lineheight_2nd",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"popup_menu_lineheight_2nd",
	$popup_menu_lineheight_2nd
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$popup_menu_fontstyle_2nd = new MooseElatedField(
	"selectblanksimple",
	"popup_menu_fontstyle_2nd",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"popup_menu_fontstyle_2nd",
	$popup_menu_fontstyle_2nd
);
$popup_menu_fontweight_2nd = new MooseElatedField(
	"selectblanksimple",
	"popup_menu_fontweight_2nd",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"popup_menu_fontweight_2nd",
	$popup_menu_fontweight_2nd
);
$popup_menu_letterspacing_2nd = new MooseElatedField(
	"textsimple",
	"popup_menu_letterspacing_2nd",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"popup_menu_letterspacing_2nd",
	$popup_menu_letterspacing_2nd
);
$popup_menu_texttransform_2nd = new MooseElatedField(
	"selectblanksimple",
	"popup_menu_texttransform_2nd",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"popup_menu_texttransform_2nd",
	$popup_menu_texttransform_2nd
);

$group3 = new MooseElatedGroup(
	"3rd Level Style",
	esc_html__( "Define styles for 3rd level in Fullscreen Menu", 'moose' )
);
$enable_popup_menu_container->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$popup_menu_3rd_color = new MooseElatedField(
	"colorsimple",
	"popup_menu_3rd_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_3rd_color",
	$popup_menu_3rd_color
);
$popup_menu_3rd_hover_color = new MooseElatedField(
	"colorsimple",
	"popup_menu_3rd_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_3rd_hover_color",
	$popup_menu_3rd_hover_color
);
$popup_menu_3rd_hover_background_color = new MooseElatedField(
	"colorsimple",
	"popup_menu_3rd_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_3rd_hover_background_color",
	$popup_menu_3rd_hover_background_color
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$popup_menu_3rd_google_fonts = new MooseElatedField(
	"fontsimple",
	"popup_menu_3rd_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"popup_menu_3rd_google_fonts",
	$popup_menu_3rd_google_fonts
);
$popup_menu_3rd_fontsize = new MooseElatedField(
	"textsimple",
	"popup_menu_3rd_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"popup_menu_3rd_fontsize",
	$popup_menu_3rd_fontsize
);
$popup_menu_3rd_lineheight = new MooseElatedField(
	"textsimple",
	"popup_menu_3rd_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$popup_menu_3rd_lineheight = new MooseElatedField(
	"textsimple",
	"popup_menu_3rd_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"popup_menu_3rd_lineheight",
	$popup_menu_3rd_lineheight
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$popup_menu_3rd_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"popup_menu_3rd_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"popup_menu_3rd_fontstyle",
	$popup_menu_3rd_fontstyle
);
$popup_menu_3rd_fontweight = new MooseElatedField(
	"selectblanksimple",
	"popup_menu_3rd_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"popup_menu_3rd_fontweight",
	$popup_menu_3rd_fontweight
);
$popup_menu_3rd_letterspacing = new MooseElatedField(
	"textsimple",
	"popup_menu_3rd_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"popup_menu_3rd_letterspacing",
	$popup_menu_3rd_letterspacing
);
$popup_menu_3rd_texttransform = new MooseElatedField(
	"selectblanksimple",
	"popup_menu_3rd_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"popup_menu_3rd_texttransform",
	$popup_menu_3rd_texttransform
);

$group5 = new MooseElatedGroup(
	esc_html__( "Full Screen Menu Icon Spacing", 'moose' ),
	esc_html__( "Define padding and margin for full screen menu icon", 'moose' )
);
$enable_popup_menu_container->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$popup_menu_icon_padding_left = new MooseElatedField(
	"textsimple",
	"popup_menu_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_icon_padding_left",
	$popup_menu_icon_padding_left
);

$popup_menu_icon_padding_right = new MooseElatedField(
	"textsimple",
	"popup_menu_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_icon_padding_right",
	$popup_menu_icon_padding_right
);

$popup_menu_icon_margin_left = new MooseElatedField(
	"textsimple",
	"popup_menu_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_icon_margin_left",
	$popup_menu_icon_margin_left
);

$popup_menu_icon_margin_right = new MooseElatedField(
	"textsimple",
	"popup_menu_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"popup_menu_icon_margin_right",
	$popup_menu_icon_margin_right
);

$panel2 = new MooseElatedPanel(
	esc_html__( "Header Top", 'moose' ),
	"header_top_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel2",
	$panel2
);

$header_top_area = new MooseElatedField(
	"yesno",
	"header_top_area",
	"no",
	esc_html__( "Show Header Top Area", 'moose' ),
	"Enabling this option will show Header Top area (this setting applies to Header Left and Header Right widgets)
    ",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_header_top_area_container"
	)
);
$panel2->addChild(
	"header_top_area",
	$header_top_area
);

$header_top_area_container = new MooseElatedContainer(
	"header_top_area_container",
	"header_top_area",
	"no"
);
$panel2->addChild(
	"header_top_area_container",
	$header_top_area_container
);

$header_top_area_scroll_container = new MooseElatedContainer(
	"header_top_area_scroll_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$header_top_area_container->addChild(
	"header_top_area_scroll_container",
	$header_top_area_scroll_container
);

$header_top_area_scroll = new MooseElatedField(
	"yesno",
	"header_top_area_scroll",
	"no",
	esc_html__( "Hide on Scroll", 'moose' ),
	esc_html__( "Enabling this option will hide Header Top on scroll (if fixed header types are chosen)", 'moose' )
);
$header_top_area_scroll_container->addChild(
	"header_top_area_scroll",
	$header_top_area_scroll
);

$header_top_height = new MooseElatedField(
	"text",
	"header_top_height",
	"",
	esc_html__( "Header Top Height", 'moose' ),
	esc_html__( "Enter height for header top", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"header_top_height",
	$header_top_height
);

$header_top_has_background_pattern = new MooseElatedField(
	"yesno",
	"header_top_has_background_pattern",
	"no",
	esc_html__( "Background Pattern Image", 'moose' ),
	"Enabling this option will display background pattern image in header top area.
		",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_header_top_background_pattern_image_container"
	)
);
$header_top_area_container->addChild(
	"header_top_has_background_pattern",
	$header_top_has_background_pattern
);

$header_top_background_pattern_image_container = new MooseElatedContainer(
	"header_top_background_pattern_image_container",
	"header_top_has_background_pattern",
	"no"
);
$header_top_area_container->addChild(
	"header_top_background_pattern_image_container",
	$header_top_background_pattern_image_container
);

$group10 = new MooseElatedGroup(
	esc_html__( "Image", 'moose' ),
	esc_html__( "Choose pattern image for header top background", 'moose' )
);
$header_top_background_pattern_image_container->addChild(
	"group10",
	$group10
);
$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$header_top_background_pattern_image = new MooseElatedField(
	"imagesimple",
	"header_top_background_pattern_image",
	"",
	esc_html__( "Pattern Image", 'moose' ),
	""
);
$row1->addChild(
	"header_top_background_pattern_image",
	$header_top_background_pattern_image
);

$header_top_background_color = new MooseElatedField(
	"color",
	"header_top_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose a background color for Header Top area", 'moose' )
);
$header_top_area_container->addChild(
	"header_top_background_color",
	$header_top_background_color
);

$header_top_transparency = new MooseElatedField(
	"text",
	"header_top_transparency",
	"",
	esc_html__( "Header Top Transparency", 'moose' ),
	esc_html__( "Choose a transparency for the Header Top background color (0 = fully transparent, 1 = opaque)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"header_top_transparency",
	$header_top_transparency
);

$top_header_border_color = new MooseElatedField(
	"color",
	"top_header_border_color",
	"",
	esc_html__( "Border Bottom Color", 'moose' ),
	esc_html__( "Set a color for the bottom border of the Header Top Area.", 'moose' )
);
$header_top_area_container->addChild(
	"top_header_border_color",
	$top_header_border_color
);

$top_header_border_weight = new MooseElatedField(
	"text",
	"top_header_border_weight",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "Set a border width for the bottom border of the Header Top Area.", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"top_header_border_weight",
	$top_header_border_weight
);

$top_header_widget_divider_color = new MooseElatedField(
	"color",
	"top_header_widget_divider_color",
	"",
	esc_html__( "Widget Divider Color", 'moose' ),
	esc_html__( "Set color for widget dividers.", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"top_header_widget_divider_color",
	$top_header_widget_divider_color
);

$group_header_top_menu = new MooseElatedGroup(
	esc_html__( "Menu Item Text Decoration", 'moose' ),
	""
);
$header_top_area_container->addChild(
	"group_header_top_menu",
	$group_header_top_menu
);

$row1 = new MooseElatedRow();
$group_header_top_menu->addChild(
	"row1",
	$row1
);

$header_top_menu_item_text_decoration_style = new MooseElatedField(
	"selectsimple",
	"header_top_menu_item_text_decoration_style",
	"none",
	esc_html__( "Hover Item Text Decoration", 'moose' ),
	esc_html__( "Choose text decoration type for hover menu items", 'moose' ),
	array(
		"none" => esc_html__( "None", 'moose' ),
		"underline" => esc_html__( "Underline", 'moose' ),
		"line-through" => esc_html__( "Line-through", 'moose' ),
		"overline" => esc_html__( "Overline", 'moose' )
	)
);
$row1->addChild(
	"header_top_menu_item_text_decoration_style",
	$header_top_menu_item_text_decoration_style
);

$header_top_menu_active_text_decoration_style = new MooseElatedField(
	"selectsimple",
	"header_top_menu_active_text_decoration_style",
	"none",
	esc_html__( "Active Item Text Decoration", 'moose' ),
	esc_html__( "Choose text decoration type for active menu items", 'moose' ),
	array(
		"none" => esc_html__( "None", 'moose' ),
		"underline" => esc_html__( "Underline", 'moose' ),
		"line-through" => esc_html__( "Line-through", 'moose' ),
		"overline" => esc_html__( "Overline", 'moose' )
	)
);
$row1->addChild(
	"header_top_menu_active_text_decoration_style",
	$header_top_menu_active_text_decoration_style
);

$widget_elements_header_top = new MooseElatedTitle(
	"widget_elements_header_top",
	esc_html__( "Widget Elements", 'moose' )
);
$header_top_area_container->addChild(
	"widget_elements_header_top",
	$widget_elements_header_top
);

$group9 = new MooseElatedGroup(
	esc_html__( "Search", 'moose' ),
	esc_html__( "Define styles for search in widget", 'moose' )
);
$header_top_area_container->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$header_top_search_height = new MooseElatedField(
	"textsimple",
	"header_top_search_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_top_search_height",
	$header_top_search_height
);

$header_top_search_border_color = new MooseElatedField(
	"colorsimple",
	"header_top_search_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_top_search_border_color",
	$header_top_search_border_color
);

$header_top_search_loupe_color = new MooseElatedField(
	"colorsimple",
	"header_top_search_loupe_color",
	"",
	esc_html__( "Magnifier Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_top_search_loupe_color",
	$header_top_search_loupe_color
);

$header_top_search_loupe_background_color = new MooseElatedField(
	"colorsimple",
	"header_top_search_loupe_background_color",
	"",
	esc_html__( "Magnifier Area Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_top_search_loupe_background_color",
	$header_top_search_loupe_background_color
);

$row2 = new MooseElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$header_top_search_text_color = new MooseElatedField(
	"colorsimple",
	"header_top_search_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"header_top_search_text_color",
	$header_top_search_text_color
);

$header_top_search_focus_text_color = new MooseElatedField(
	"colorsimple",
	"header_top_search_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"header_top_search_focus_text_color",
	$header_top_search_focus_text_color
);

$header_top_search_text_font_size = new MooseElatedField(
	"textsimple",
	"header_top_search_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"header_top_search_text_font_size",
	$header_top_search_text_font_size
);

$header_top_search_text_line_height = new MooseElatedField(
	"textsimple",
	"header_top_search_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"header_top_search_text_line_height",
	$header_top_search_text_line_height
);

$row3 = new MooseElatedRow( true );
$group9->addChild(
	"row3",
	$row3
);

$header_top_search_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"header_top_search_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"header_top_search_text_text_transform",
	$header_top_search_text_text_transform
);

$header_top_search_text_font_family = new MooseElatedField(
	"fontsimple",
	"header_top_search_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"header_top_search_text_font_family",
	$header_top_search_text_font_family
);

$header_top_search_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"header_top_search_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"header_top_search_text_font_style",
	$header_top_search_text_font_style
);

$header_top_search_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"header_top_search_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"header_top_search_text_font_weight",
	$header_top_search_text_font_weight
);

$row4 = new MooseElatedRow( true );
$group9->addChild(
	"row4",
	$row4
);

$header_top_search_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"header_top_search_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"header_top_search_text_letter_spacing",
	$header_top_search_text_letter_spacing
);

$header_top_search_border_around = new MooseElatedField(
	"selectsimple",
	"header_top_search_border_around",
	"",
	esc_html__( "Border Around", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"around_everything" => esc_html__( "Around Everything", 'moose' ),
		"around_search_text" => esc_html__( "Around Search Text", 'moose' )
	)
);
$row4->addChild(
	"header_top_search_border_around",
	$header_top_search_border_around
);

$row5 = new MooseElatedRow( true );
$group9->addChild(
	"row5",
	$row5
);

$header_top_search_width = new MooseElatedField(
	"textsimple",
	"header_top_search_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row5->addChild(
	"header_top_search_text_font_size",
	$header_top_search_width
);

$header_top_search_margin_left = new MooseElatedField(
	"textsimple",
	"header_top_search_margin_left",
	"",
	esc_html__( "Left Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row5->addChild(
	"header_top_search_margin_left",
	$header_top_search_margin_left
);

$header_top_search_margin_right = new MooseElatedField(
	"textsimple",
	"header_top_search_margin_right",
	"",
	esc_html__( "Right Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row5->addChild(
	"header_top_search_margin_right",
	$header_top_search_margin_right
);

$panel7 = new MooseElatedPanel(
	esc_html__( "Side Menu Area", 'moose' ),
	"vertical_areas_panel",
	"header_type",
	"",
	array( "top" )
);
$headerandfooterPage->addChild(
	"panel7",
	$panel7
);

$vertical_area_type = new MooseElatedField(
	"select",
	"vertical_area_type",
	"left",
	esc_html__( "Side Menu Area Type", 'moose' ),
	esc_html__( "Specify menu type", 'moose' ),
	array(
		"" => esc_html__( "Always Opened (Default)", 'moose' ),
		"hidden" => esc_html__( "Initially Hidden", 'moose' ),
		"hidden_with_icons" => esc_html__( "Initially Hidden With Visible Icons", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                  => "#eltdf_vertical_area_hidden_button_color_container",
			"hidden"            => "",
			"hidden_with_icons" => "#eltdf_enable_vertical_menu_item_left_border_container"
		),
		"show"       => array(
			""                  => "#eltdf_enable_vertical_menu_item_left_border_container",
			"hidden"            => "#eltdf_vertical_area_hidden_button_color_container, #eltdf_enable_vertical_menu_item_left_border_container",
			"hidden_with_icons" => "#eltdf_vertical_area_hidden_button_color_container"
		)
	)
);
$panel7->addChild(
	"vertical_area_type",
	$vertical_area_type
);

$vertical_area_hidden_button_color_container = new MooseElatedContainer(
	"vertical_area_hidden_button_color_container",
	"vertical_area_type",
	""
);
$panel7->addChild(
	"vertical_area_hidden_button_color_container",
	$vertical_area_hidden_button_color_container
);

$vertical_area_hidden_button_color = new MooseElatedField(
	"color",
	"vertical_area_hidden_button_color",
	"",
	esc_html__( "Button Color", 'moose' ),
	esc_html__( "Choose a color for button that opens/closes Hidden Side Menu Area", 'moose' )
);
$vertical_area_hidden_button_color_container->addChild(
	"vertical_area_hidden_button_color",
	$vertical_area_hidden_button_color
);

$vertical_area_width = new MooseElatedField(
	"select",
	"vertical_area_width",
	"width_290",
	esc_html__( "Side Menu Area Width", 'moose' ),
	esc_html__( "Choose width for side menu area.", 'moose' ),
	array(
		"width_290" => esc_html__( "290px", 'moose' ),
		"width_350" => esc_html__( "350px", 'moose' ),
		"width_400" => esc_html__( "400px", 'moose' )
	)
);
$panel7->addChild(
	"vertical_area_width",
	$vertical_area_width
);

$vertical_area_position = new MooseElatedField(
	"select",
	"vertical_area_position",
	"left",
	esc_html__( "Side Menu Area Position", 'moose' ),
	esc_html__( "Choose side menu position relative to browser screen", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$panel7->addChild(
	"vertical_area_position",
	$vertical_area_position
);

$vertical_area_dropdown_showing = new MooseElatedField(
	"select",
	"vertical_area_dropdown_showing",
	"hover",
	esc_html__( "Submenu Opening Behaviour", 'moose' ),
	esc_html__( "Specify 2nd and 3rd level menu opening style", 'moose' ),
	array(
		"hover" => esc_html__( "On Hover", 'moose' ),
		"click" => esc_html__( "On Click", 'moose' ),
		"side" => esc_html__( "Slide In", 'moose' ),
		"to_content" => esc_html__( "Float", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"hover"      => "#eltdf_vertical_area_dropdown_background_container, #eltdf_vertical_menu_dd_separator_container",
			"click"      => "#eltdf_vertical_area_dropdown_background_container, #eltdf_vertical_menu_dd_separator_container",
			"side"       => "#eltdf_vertical_area_transparency_container, #eltdf_vertical_area_background_container, #eltdf_vertical_area_dropdown_background_container, #eltdf_vertical_menu_dd_separator_container",
			"to_content" => ""
		),
		"show"       => array(
			"hover"      => "#eltdf_vertical_area_transparency_container, #eltdf_vertical_area_background_container",
			"click"      => "#eltdf_vertical_area_transparency_container, #eltdf_vertical_area_background_container",
			"side"       => "",
			"to_content" => "#eltdf_vertical_area_transparency_container, #eltdf_vertical_area_background_container, #eltdf_vertical_area_dropdown_background_container, #eltdf_vertical_menu_dd_separator_container"
		)
	)
);
$panel7->addChild(
	"vertical_area_dropdown_showing",
	$vertical_area_dropdown_showing
);

$vertical_area_background = new MooseElatedField(
	"color",
	"vertical_area_background",
	"",
	esc_html__( "Side Menu Area Background Color", 'moose' ),
	esc_html__( "Choose a color for Side Menu Area background", 'moose' )
);
$panel7->addChild(
	"vertical_area_background",
	$vertical_area_background
);

$vertical_area_transparency_container = new MooseElatedContainer(
	"vertical_area_transparency_container",
	"vertical_area_dropdown_showing",
	"side"
);
$panel7->addChild(
	"vertical_area_transparency_container",
	$vertical_area_transparency_container
);

$vertical_area_background_transparency = new MooseElatedField(
	"text",
	"vertical_area_background_transparency",
	"",
	esc_html__( "Side Menu Area Background Opacity", 'moose' ),
	esc_html__( "Choose a opacity for the Side Menu Area Background (0 = fully transparent, 1 = opaque)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$vertical_area_transparency_container->addChild(
	"vertical_area_background_transparency",
	$vertical_area_background_transparency
);

$vertical_area_background_container = new MooseElatedContainer(
	"vertical_area_background_container",
	"vertical_area_dropdown_showing",
	"side"
);
$vertical_area_transparency_container->addChild(
	"vertical_area_background_container",
	$vertical_area_background_container
);

$vertical_area_background_image = new MooseElatedField(
	"image",
	"vertical_area_background_image",
	"",
	esc_html__( "Side Menu Area Background Image", 'moose' ),
	esc_html__( "Choose an image for Side Menu background", 'moose' )
);
$vertical_area_background_container->addChild(
	"vertical_area_background_image",
	$vertical_area_background_image
);

$vertical_area_transparency_over_slider = new MooseElatedField(
	"yesno",
	"vertical_area_transparency_over_slider",
	"no",
	esc_html__( "Transparency Setting Takes Effect Only on Elated Slider", 'moose' ),
	esc_html__( "Enabling this option will ensure that the transparency set in the 'Side Menu Area Background Opacity' takes effect only when the side menu area is over the Elated Slider", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => ""
	)
);
$vertical_area_transparency_container->addChild(
	"vertical_area_transparency_over_slider",
	$vertical_area_transparency_over_slider
);

$vertical_area_transparency = new MooseElatedField(
	"yesno",
	"vertical_area_transparency",
	"no",
	esc_html__( "Enable Fully Transparent Side Menu Area Over Elated Slider", 'moose' ),
	esc_html__( "Enabling this option will make Side Menu Area background over Elated Slider fully transparent", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_vertical_area_transparency_fonts_container"
	)
);
$vertical_area_transparency_container->addChild(
	"vertical_area_transparency",
	$vertical_area_transparency
);

$vertical_area_transparency_fonts_container = new MooseElatedContainer(
	"vertical_area_transparency_fonts_container",
	"vertical_area_transparency",
	"no"
);
$vertical_area_transparency_container->addChild(
	"vertical_area_transparency_fonts_container",
	$vertical_area_transparency_fonts_container
);

$group1 = new MooseElatedGroup(
	"1st Level Transparent Menu Style",
	esc_html__( "Define styles for 1st level in Transparent Side Menu", 'moose' )
);
$vertical_area_transparency_fonts_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_transparent_menu_color = new MooseElatedField(
	"colorsimple",
	"vertical_transparent_menu_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_transparent_menu_color",
	$vertical_transparent_menu_color
);
$vertical_transparent_menu_hovercolor = new MooseElatedField(
	"colorsimple",
	"vertical_transparent_menu_hovercolor",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_transparent_menu_hovercolor",
	$vertical_transparent_menu_hovercolor
);
$vertical_transparent_menu_activecolor = new MooseElatedField(
	"colorsimple",
	"vertical_transparent_menu_activecolor",
	"",
	esc_html__( "Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_transparent_menu_activecolor",
	$vertical_transparent_menu_activecolor
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$vertical_transparent_menu_google_fonts = new MooseElatedField(
	"fontsimple",
	"vertical_transparent_menu_google_fonts",
	"-1",
	esc_html__( "Font family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_transparent_menu_google_fonts",
	$vertical_transparent_menu_google_fonts
);
$vertical_transparent_menu_fontsize = new MooseElatedField(
	"textsimple",
	"vertical_transparent_menu_fontsize",
	"",
	esc_html__( "Font size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_transparent_menu_fontsize",
	$vertical_transparent_menu_fontsize
);
$vertical_transparent_menu_lineheight = new MooseElatedField(
	"textsimple",
	"vertical_transparent_menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_transparent_menu_lineheight",
	$vertical_transparent_menu_lineheight
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$vertical_transparent_menu_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"vertical_transparent_menu_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"vertical_transparent_menu_fontstyle",
	$vertical_transparent_menu_fontstyle
);
$vertical_transparent_menu_fontweight = new MooseElatedField(
	"selectblanksimple",
	"vertical_transparent_menu_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"vertical_transparent_menu_fontweight",
	$vertical_transparent_menu_fontweight
);
$vertical_transparent_menu_letterspacing = new MooseElatedField(
	"textsimple",
	"vertical_transparent_menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"vertical_transparent_menu_letterspacing",
	$vertical_transparent_menu_letterspacing
);
$vertical_transparent_menu_texttransform = new MooseElatedField(
	"selectblanksimple",
	"vertical_transparent_menu_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"vertical_transparent_menu_texttransform",
	$vertical_transparent_menu_texttransform
);

$group2 = new MooseElatedGroup(
	"2nd Level Transparent Menu Style",
	esc_html__( "Define styles for 2nd level in Transparent Side Menu", 'moose' )
);
$vertical_area_transparency_fonts_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$vertical_transparent_dropdown_color = new MooseElatedField(
	"colorsimple",
	"vertical_transparent_dropdown_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_transparent_dropdown_color",
	$vertical_transparent_dropdown_color
);
$vertical_transparent_dropdown_hovercolor = new MooseElatedField(
	"colorsimple",
	"vertical_transparent_dropdown_hovercolor",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_transparent_dropdown_hovercolor",
	$vertical_transparent_dropdown_hovercolor
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$vertical_transparent_dropdown_google_fonts = new MooseElatedField(
	"fontsimple",
	"vertical_transparent_dropdown_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_transparent_dropdown_google_fonts",
	$vertical_transparent_dropdown_google_fonts
);
$vertical_transparent_dropdown_fontsize = new MooseElatedField(
	"textsimple",
	"vertical_transparent_dropdown_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_transparent_dropdown_fontsize",
	$vertical_transparent_dropdown_fontsize
);
$vertical_transparent_dropdown_lineheight = new MooseElatedField(
	"textsimple",
	"vertical_transparent_dropdown_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_transparent_dropdown_lineheight",
	$vertical_transparent_dropdown_lineheight
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$vertical_transparent_dropdown_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"vertical_transparent_dropdown_fontstyle",
	$vertical_transparent_dropdown_fontstyle
);
$vertical_transparent_dropdown_fontweight = new MooseElatedField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"vertical_transparent_dropdown_fontweight",
	$vertical_transparent_dropdown_fontweight
);
$vertical_transparent_dropdown_letterspacing = new MooseElatedField(
	"textsimple",
	"vertical_transparent_dropdown_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"vertical_transparent_dropdown_letterspacing",
	$vertical_transparent_dropdown_letterspacing
);
$vertical_transparent_dropdown_texttransform = new MooseElatedField(
	"selectblanksimple",
	"vertical_transparent_dropdown_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"vertical_transparent_dropdown_texttransform",
	$vertical_transparent_dropdown_texttransform
);

$group3 = new MooseElatedGroup(
	"3rd Level Transparent Menu Style",
	esc_html__( "Define styles for 3rd level in Transparent Side Menu", 'moose' )
);
$vertical_area_transparency_fonts_container->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$vertical_transparent_dropdown_color_thirdlvl = new MooseElatedField(
	"colorsimple",
	"vertical_transparent_dropdown_color_thirdlvl",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_transparent_dropdown_color_thirdlvl",
	$vertical_transparent_dropdown_color_thirdlvl
);
$vertical_transparent_dropdown_hovercolor_thirdlvl = new MooseElatedField(
	"colorsimple",
	"vertical_transparent_dropdown_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_transparent_dropdown_hovercolor_thirdlvl",
	$vertical_transparent_dropdown_hovercolor_thirdlvl
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$vertical_transparent_dropdown_google_fonts_thirdlvl = new MooseElatedField(
	"fontsimple",
	"vertical_transparent_dropdown_google_fonts_thirdlvl",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_transparent_dropdown_google_fonts_thirdlvl",
	$vertical_transparent_dropdown_google_fonts_thirdlvl
);
$vertical_transparent_dropdown_fontsize_thirdlvl = new MooseElatedField(
	"textsimple",
	"vertical_transparent_dropdown_fontsize_thirdlvl",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_transparent_dropdown_fontsize_thirdlvl",
	$vertical_transparent_dropdown_fontsize_thirdlvl
);
$vertical_transparent_dropdown_lineheight_thirdlvl = new MooseElatedField(
	"textsimple",
	"vertical_transparent_dropdown_lineheight_thirdlvl",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_transparent_dropdown_lineheight_thirdlvl",
	$vertical_transparent_dropdown_lineheight_thirdlvl
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$vertical_transparent_dropdown_fontstyle_thirdlvl = new MooseElatedField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontstyle_thirdlvl",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"vertical_transparent_dropdown_fontstyle_thirdlvl",
	$vertical_transparent_dropdown_fontstyle_thirdlvl
);
$vertical_transparent_dropdown_fontweight_thirdlvl = new MooseElatedField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontweight_thirdlvl",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"vertical_transparent_dropdown_fontweight_thirdlvl",
	$vertical_transparent_dropdown_fontweight_thirdlvl
);
$vertical_transparent_dropdown_letterspacing_thirdlvl = new MooseElatedField(
	"textsimple",
	"vertical_transparent_dropdown_letterspacing_thirdlvl",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"vertical_transparent_dropdown_letterspacing_thirdlvl",
	$vertical_transparent_dropdown_letterspacing_thirdlvl
);
$vertical_transparent_dropdown_texttransform_thirdlvl = new MooseElatedField(
	"selectblanksimple",
	"vertical_transparent_dropdown_texttransform_thirdlvl",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"vertical_transparent_dropdown_texttransform_thirdlvl",
	$vertical_transparent_dropdown_texttransform_thirdlvl
);

$vertical_area_dropdown_background_container = new MooseElatedContainer(
	"vertical_area_dropdown_background_container",
	"vertical_area_dropdown_showing",
	"side",
	array( "side", "hover", "click" )
);
$panel7->addChild(
	"vertical_area_dropdown_background_container",
	$vertical_area_dropdown_background_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Dropdown Menu Background", 'moose' ),
	esc_html__( "Choose Background for dropdown menu", 'moose' )
);
$vertical_area_dropdown_background_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_area_dropdown_menu_bckg_color = new MooseElatedField(
	"colorsimple",
	"vertical_area_dropdown_menu_bckg_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_area_dropdown_menu_bckg_color",
	$vertical_area_dropdown_menu_bckg_color
);

$vertical_area_dropdown_menu_bckg_opacity = new MooseElatedField(
	"textsimple",
	"vertical_area_dropdown_menu_bckg_opacity",
	"",
	esc_html__( "Opacity (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_area_dropdown_menu_bckg_opacity",
	$vertical_area_dropdown_menu_bckg_opacity
);

$vertical_area_menu_items_arrow = new MooseElatedField(
	"yesno",
	"vertical_area_menu_items_arrow",
	"no",
	"2nd level menu arrow shape",
	esc_html__( "Enabling this option will display arrow shape on 2nd level menu", 'moose' )
);
$vertical_area_dropdown_background_container->addChild(
	"vertical_area_menu_items_arrow",
	$vertical_area_menu_items_arrow
);

$vertical_area_padding = new MooseElatedField(
	"text",
	"vertical_area_padding",
	"",
	esc_html__( "Side Menu Area Padding", 'moose' ),
	esc_html__( "Set padding for Side Menu Area in pixels (default value is 20px 40px 20px 40px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_area_padding",
	$vertical_area_padding
);

$vertical_area_navigation_top_margin = new MooseElatedField(
	"text",
	"vertical_area_navigation_top_margin",
	"",
	esc_html__( "Navigation Top Margin", 'moose' ),
	esc_html__( "Set the space between logo and navigation in pixels (default value is 40px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_area_navigation_top_margin",
	$vertical_area_navigation_top_margin
);

$vertical_area_text_color = new MooseElatedField(
	"color",
	"vertical_area_text_color",
	"",
	esc_html__( "Side Menu Area Text Color (for Widgets)", 'moose' ),
	esc_html__( "Choose a text color for widgets in Side Menu", 'moose' )
);
$panel7->addChild(
	"vertical_area_text_color",
	$vertical_area_text_color
);

$vertical_area_alignment = new MooseElatedField(
	"selectblank",
	"vertical_area_alignment",
	"",
	esc_html__( "Side Menu Area Aligment", 'moose' ),
	esc_html__( "Specify alignment for logo, menu and widgets.", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$panel7->addChild(
	"vertical_area_alignment",
	$vertical_area_alignment
);

$vertical_area_right_border_color = new MooseElatedField(
	"color",
	"vertical_area_right_border_color",
	"",
	esc_html__( "Side Menu Area Right Border Color", 'moose' ),
	esc_html__( "Choose a color for right border of side menu area", 'moose' )
);
$panel7->addChild(
	"vertical_area_right_border_color",
	$vertical_area_right_border_color
);

$vertical_menu_submenu_sign = new MooseElatedField(
	"yesno",
	"vertical_menu_submenu_sign",
	"yes",
	esc_html__( "Enable Plus Sign", 'moose' ),
	esc_html__( "Enable dropdown plus sign", 'moose' )
);
$panel7->addChild(
	"vertical_menu_submenu_sign",
	$vertical_menu_submenu_sign
);

$vertical_menu_first_level = new MooseElatedTitle(
	"vertical_menu_first_level",
	esc_html__( "First Level Menu", 'moose' )
);
$panel7->addChild(
	"vertical_menu_first_level",
	$vertical_menu_first_level
);

$vertical_area_menu_items_padding = new MooseElatedField(
	"text",
	"vertical_area_menu_items_padding",
	"",
	esc_html__( "Menu Items Top/Bottom Padding", 'moose' ),
	esc_html__( "Enter padding for top and bottom of menu items in menu first level (px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_area_menu_items_padding",
	$vertical_area_menu_items_padding
);

$full_width_vertical_menu_items = new MooseElatedField(
	"yesno",
	"full_width_vertical_menu_items",
	"no",
	esc_html__( "Full Width Menu Items", 'moose' ),
	esc_html__( "Enabling this option will set menu item area to full width of vertical menu", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_vertical_menu_separators_width_container",
		"dependence_show_on_yes" => "#eltdf_vertical_menu_top_bottom_separators_container"
	)
);
$panel7->addChild(
	"full_width_vertical_menu_items",
	$full_width_vertical_menu_items
);

$enable_vertical_menu_separators = new MooseElatedField(
	"yesno",
	"enable_vertical_menu_separators",
	"no",
	esc_html__( "Enable Menu Item Separators", 'moose' ),
	esc_html__( "Enabling this option will display menu item separators", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_vertical_menu_separators_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_separators",
	$enable_vertical_menu_separators
);

$vertical_menu_separators_container = new MooseElatedContainer(
	"vertical_menu_separators_container",
	"enable_vertical_menu_separators",
	"no"
);
$panel7->addChild(
	"vertical_menu_separators_container",
	$vertical_menu_separators_container
);

$vertical_menu_separators_width_container = new MooseElatedContainer(
	"vertical_menu_separators_width_container",
	"full_width_vertical_menu_items",
	"yes"
);
$vertical_menu_separators_container->addChild(
	"vertical_menu_separators_width_container",
	$vertical_menu_separators_width_container
);

$vertical_menu_separators_width = new MooseElatedField(
	"text",
	"vertical_menu_separators_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "Enter width for the separators", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$vertical_menu_separators_width_container->addChild(
	"vertical_menu_separators_width",
	$vertical_menu_separators_width
);

$vertical_menu_separators_color = new MooseElatedField(
	"color",
	"vertical_menu_separators_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose a color for the menu item separators.", 'moose' )
);
$vertical_menu_separators_container->addChild(
	"vertical_menu_separators_color",
	$vertical_menu_separators_color
);

$vertical_menu_top_bottom_separators_container = new MooseElatedContainer(
	"vertical_menu_top_bottom_separators_container",
	"enable_vertical_menu_separators",
	"no"
);
$vertical_menu_separators_container->addChild(
	"vertical_menu_top_bottom_separators_container",
	$vertical_menu_top_bottom_separators_container
);

$enable_vertical_menutop_bottom_separators = new MooseElatedField(
	"yesno",
	"enable_vertical_menutop_bottom_separators",
	"no",
	esc_html__( "Enable Menu Top and Bottom Separators", 'moose' ),
	esc_html__( "Enabling this option will display separators at top and bottom of menu also", 'moose' )
);
$vertical_menu_top_bottom_separators_container->addChild(
	"enable_vertical_menutop_bottom_separators",
	$enable_vertical_menutop_bottom_separators
);

$enable_vertical_menu_items_background = new MooseElatedField(
	"yesno",
	"enable_vertical_menu_items_background",
	"no",
	esc_html__( "Enable Background for 1st Level Menu Items", 'moose' ),
	esc_html__( "Enable this option and choose background color for items in first level menu", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_vertical_menu_items_background_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_items_background",
	$enable_vertical_menu_items_background
);

$vertical_menu_items_background_container = new MooseElatedContainer(
	"vertical_menu_items_background_container",
	"enable_vertical_menu_items_background",
	"no"
);
$panel7->addChild(
	"vertical_menu_items_background_container",
	$vertical_menu_items_background_container
);

$vertical_menu_items_background_color = new MooseElatedField(
	"color",
	"vertical_menu_items_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose a background color for the menu items", 'moose' )
);
$vertical_menu_items_background_container->addChild(
	"vertical_menu_items_background_color",
	$vertical_menu_items_background_color
);

$vertical_menu_items_hover_background_color = new MooseElatedField(
	"color",
	"vertical_menu_items_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'moose' ),
	esc_html__( "Choose a background color for the hover menu items", 'moose' )
);
$vertical_menu_items_background_container->addChild(
	"vertical_menu_items_hover_background_color",
	$vertical_menu_items_hover_background_color
);

$vertical_menu_items_active_background_color = new MooseElatedField(
	"color",
	"vertical_menu_items_active_background_color",
	"",
	esc_html__( "Active Background Color", 'moose' ),
	esc_html__( "Choose a background color for the active menu items", 'moose' )
);
$vertical_menu_items_background_container->addChild(
	"vertical_menu_items_active_background_color",
	$vertical_menu_items_active_background_color
);

$enable_vertical_menu_item_left_border_container = new MooseElatedContainer(
	"enable_vertical_menu_item_left_border_container",
	"vertical_area_type",
	"hidden_with_icons"
);
$panel7->addChild(
	"enable_vertical_menu_item_left_border_container",
	$enable_vertical_menu_item_left_border_container
);

$enable_vertical_menu_item_left_border = new MooseElatedField(
	"yesno",
	"enable_vertical_menu_item_left_border",
	"no",
	esc_html__( "Enable Left Border for 1st Level Menu Items", 'moose' ),
	esc_html__( "Enabling this option will display left border in first level menu items", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_vertical_menu_item_left_border_container"
	)
);
$enable_vertical_menu_item_left_border_container->addChild(
	"enable_vertical_menu_item_left_border",
	$enable_vertical_menu_item_left_border
);

$vertical_menu_item_left_border_container = new MooseElatedContainer(
	"vertical_menu_item_left_border_container",
	"enable_vertical_menu_item_left_border",
	"no"
);
$panel7->addChild(
	"vertical_menu_item_left_border_container",
	$vertical_menu_item_left_border_container
);

$vertical_menu_item_left_border_width = new MooseElatedField(
	"text",
	"vertical_menu_item_left_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "Enter width for the menu item border", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_width",
	$vertical_menu_item_left_border_width
);

$vertical_menu_item_left_border_color = new MooseElatedField(
	"color",
	"vertical_menu_item_left_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose a color for the menu item border", 'moose' )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_color",
	$vertical_menu_item_left_border_color
);

$vertical_menu_item_left_border_hover_color = new MooseElatedField(
	"color",
	"vertical_menu_item_left_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "Choose a hover color for the menu item border", 'moose' )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_hover_color",
	$vertical_menu_item_left_border_hover_color
);

$vertical_menu_item_left_border_active_color = new MooseElatedField(
	"color",
	"vertical_menu_item_left_border_active_color",
	"",
	esc_html__( "Border Active Color", 'moose' ),
	esc_html__( "Choose a color for the active menu item border", 'moose' )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_active_color",
	$vertical_menu_item_left_border_active_color
);

$enable_vertical_menu_item_text_decoration = new MooseElatedField(
	"yesno",
	"enable_vertical_menu_item_text_decoration",
	"no",
	esc_html__( "Enable 1st Level Menu Item Text Decoration", 'moose' ),
	esc_html__( "Enable this option and choose a text decoration for menu items in first level", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_vertical_menu_item_text_decoration_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_item_text_decoration",
	$enable_vertical_menu_item_text_decoration
);

$vertical_menu_item_text_decoration_container = new MooseElatedContainer(
	"vertical_menu_item_text_decoration_container",
	"enable_vertical_menu_item_text_decoration",
	"no"
);
$panel7->addChild(
	"vertical_menu_item_text_decoration_container",
	$vertical_menu_item_text_decoration_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Menu Item Text Decoration", 'moose' ),
	""
);
$vertical_menu_item_text_decoration_container->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_menu_item_text_decoration_style = new MooseElatedField(
	"selectsimple",
	"vertical_menu_item_text_decoration_style",
	"none",
	esc_html__( "Hover Item Text Decoration", 'moose' ),
	esc_html__( "Choose text decoration type for hover menu items", 'moose' ),
	array(
		"none" => esc_html__( "None", 'moose' ),
		"underline" => esc_html__( "Underline", 'moose' ),
		"line-through" => esc_html__( "Line-through", 'moose' ),
		"overline" => esc_html__( "Overline", 'moose' )
	)
);
$row1->addChild(
	"vertical_menu_item_text_decoration_style",
	$vertical_menu_item_text_decoration_style
);

$vertical_menu_item_active_text_decoration_style = new MooseElatedField(
	"selectsimple",
	"vertical_menu_item_active_text_decoration_style",
	"none",
	esc_html__( "Active Item Text Decoration", 'moose' ),
	esc_html__( "Choose text decoration type for active menu items", 'moose' ),
	array(
		"none" => esc_html__( "None", 'moose' ),
		"underline" => esc_html__( "Underline", 'moose' ),
		"line-through" => esc_html__( "Line-through", 'moose' ),
		"overline" => esc_html__( "Overline", 'moose' )
	)
);
$row1->addChild(
	"vertical_menu_item_active_text_decoration_style",
	$vertical_menu_item_active_text_decoration_style
);

$enable_vertical_menu_item_border = new MooseElatedField(
	"yesno",
	"enable_vertical_menu_item_border",
	"no",
	esc_html__( "Enable Hover Borders for 1st Level Menu Items", 'moose' ),
	esc_html__( "Enabling this option will show borders on hover around item text in first level menu. In order to work, you need to set border width and color.", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_vertical_menu_item_border_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_item_border",
	$enable_vertical_menu_item_border
);

$vertical_menu_item_border_container = new MooseElatedContainer(
	"vertical_menu_item_border_container",
	"enable_vertical_menu_item_border",
	"no"
);
$panel7->addChild(
	"vertical_menu_item_border_container",
	$vertical_menu_item_border_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Hover Border Style", 'moose' ),
	""
);
$vertical_menu_item_border_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_menu_item_border_width = new MooseElatedField(
	"textsimple",
	"vertical_menu_item_border_width",
	"",
	esc_html__( "Border Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_menu_item_border_width",
	$vertical_menu_item_border_width
);

$vertical_menu_item_border_hover = new MooseElatedField(
	"colorsimple",
	"vertical_menu_item_border_hover",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_menu_item_border_hover",
	$vertical_menu_item_border_hover
);

$vertical_menu_item_border_active = new MooseElatedField(
	"colorsimple",
	"vertical_menu_item_border_active",
	"",
	esc_html__( "Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_menu_item_border_active",
	$vertical_menu_item_border_active
);

$vertical_menu_dropdown = new MooseElatedTitle(
	"vertical_menu_dropdown",
	esc_html__( "Second Level Menu", 'moose' )
);
$panel7->addChild(
	"vertical_menu_dropdown",
	$vertical_menu_dropdown
);

$vertical_menu_dropdown_top_padding = new MooseElatedField(
	"text",
	"vertical_menu_dropdown_top_padding",
	"",
	esc_html__( "Dropdown Top Padding", 'moose' ),
	esc_html__( "Enter top padding for dropdown (in pixels)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_menu_dropdown_top_padding",
	$vertical_menu_dropdown_top_padding
);

$vertical_menu_dropdown_bottom_padding = new MooseElatedField(
	"text",
	"vertical_menu_dropdown_bottom_padding",
	"",
	esc_html__( "Dropdown Bottom Padding", 'moose' ),
	esc_html__( "Enter bottom padding for dropdown (in pixels)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_menu_dropdown_bottom_padding",
	$vertical_menu_dropdown_bottom_padding
);

$vertical_menu_dd_item_padding_top_bttm = new MooseElatedField(
	"text",
	"vertical_menu_dd_item_padding_top_bttm",
	"",
	esc_html__( "Dropdown Menu Items Top/Bottom Padding", 'moose' ),
	esc_html__( "Enter padding for top and bottom of menu items in submenu dropdown (px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_menu_dd_item_padding_top_bttm",
	$vertical_menu_dd_item_padding_top_bttm
);

$vertical_menu_dropdown_plus_color = new MooseElatedField(
	"color",
	"vertical_menu_dropdown_plus_color",
	"",
	esc_html__( "Dropdown 'Plus' Icon Color", 'moose' ),
	esc_html__( "Choose a color for dropdown 'plus' icon", 'moose' )
);
$panel7->addChild(
	"vertical_menu_dropdown_plus_color",
	$vertical_menu_dropdown_plus_color
);

$vertical_menu_dd_separator_container = new MooseElatedContainer(
	"vertical_menu_dd_separator_container",
	"vertical_area_dropdown_showing",
	"hover",
	array( "hover", "side", "click" )
);
$panel7->addChild(
	"vertical_menu_dd_separator_container",
	$vertical_menu_dd_separator_container
);

$vertical_dropdown_separators_yesno = new MooseElatedField(
	"yesno",
	"vertical_dropdown_separators_yesno",
	"no",
	esc_html__( "Enable Dropdown Menu Item Separators", 'moose' ),
	esc_html__( "Enabling this option will display dropdown menu item separators", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_vertical_dropdown_separators_container"
	)
);
$vertical_menu_dd_separator_container->addChild(
	"vertical_dropdown_separators_yesno",
	$vertical_dropdown_separators_yesno
);

$vertical_dropdown_separators_container = new MooseElatedContainer(
	"vertical_dropdown_separators_container",
	"vertical_dropdown_separators_yesno",
	"no"
);
$vertical_menu_dd_separator_container->addChild(
	"vertical_dropdown_separators_container",
	$vertical_dropdown_separators_container
);

$vertical_dropdown_separators_color = new MooseElatedField(
	"color",
	"vertical_dropdown_separators_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose a color for the menu item separators.", 'moose' )
);
$vertical_dropdown_separators_container->addChild(
	"vertical_dropdown_separators_color",
	$vertical_dropdown_separators_color
);

$enable_vertical_top_bottom_dropdown_separators = new MooseElatedField(
	"yesno",
	"enable_vertical_top_bottom_dropdown_separators",
	"no",
	esc_html__( "Enable Menu Top and Bottom Separators", 'moose' ),
	esc_html__( "Enabling this option will display separators at top and bottom of menu also", 'moose' )
);
$vertical_dropdown_separators_container->addChild(
	"enable_vertical_top_bottom_dropdown_separators",
	$enable_vertical_top_bottom_dropdown_separators
);

$vertical_menu_text_icons = new MooseElatedTitle(
	"vertical_menu_text_icons",
	esc_html__( "Menu Text and Icons", 'moose' )
);
$panel7->addChild(
	"vertical_menu_text_icons",
	$vertical_menu_text_icons
);

$group1 = new MooseElatedGroup(
	"1st Level Menu Style",
	esc_html__( "Define styles for 1st level in Side Menu", 'moose' )
);
$panel7->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_menu_color = new MooseElatedField(
	"colorsimple",
	"vertical_menu_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_menu_color",
	$vertical_menu_color
);
$vertical_menu_hovercolor = new MooseElatedField(
	"colorsimple",
	"vertical_menu_hovercolor",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_menu_hovercolor",
	$vertical_menu_hovercolor
);
$vertical_menu_activecolor = new MooseElatedField(
	"colorsimple",
	"vertical_menu_activecolor",
	"",
	esc_html__( "Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_menu_activecolor",
	$vertical_menu_activecolor
);

$row4 = new MooseElatedRow();
$group1->addChild(
	"row4",
	$row4
);

$vertical_menu_icon_color = new MooseElatedField(
	"colorsimple",
	"vertical_menu_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"vertical_menu_icon_color",
	$vertical_menu_icon_color
);
$vertical_menu_icon_hovercolor = new MooseElatedField(
	"colorsimple",
	"vertical_menu_icon_hovercolor",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"vertical_menu_icon_hovercolor",
	$vertical_menu_icon_hovercolor
);
$vertical_menu_icon_activecolor = new MooseElatedField(
	"colorsimple",
	"vertical_menu_icon_activecolor",
	"",
	esc_html__( "Icon Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"vertical_menu_icon_activecolor",
	$vertical_menu_icon_activecolor
);
$vertical_menu_icon_margin = new MooseElatedField(
	"textsimple",
	"vertical_menu_icon_margin",
	"",
	esc_html__( "Space between text and icon (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"vertical_menu_icon_margin",
	$vertical_menu_icon_margin
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$vertical_menu_google_fonts = new MooseElatedField(
	"fontsimple",
	"vertical_menu_google_fonts",
	"-1",
	esc_html__( "Font family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_menu_google_fonts",
	$vertical_menu_google_fonts
);
$vertical_menu_fontsize = new MooseElatedField(
	"textsimple",
	"vertical_menu_fontsize",
	"",
	esc_html__( "Font size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_menu_fontsize",
	$vertical_menu_fontsize
);
$vertical_menu_icon_fontsize = new MooseElatedField(
	"textsimple",
	"vertical_menu_icon_fontsize",
	"",
	esc_html__( "Icon font size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_menu_icon_fontsize",
	$vertical_menu_icon_fontsize
);
$vertical_menu_lineheight = new MooseElatedField(
	"textsimple",
	"vertical_menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_menu_lineheight",
	$vertical_menu_lineheight
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$vertical_menu_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"vertical_menu_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"vertical_menu_fontstyle",
	$vertical_menu_fontstyle
);
$vertical_menu_fontweight = new MooseElatedField(
	"selectblanksimple",
	"vertical_menu_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"vertical_menu_fontweight",
	$vertical_menu_fontweight
);
$vertical_menu_letterspacing = new MooseElatedField(
	"textsimple",
	"vertical_menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"vertical_menu_letterspacing",
	$vertical_menu_letterspacing
);
$vertical_menu_texttransform = new MooseElatedField(
	"selectblanksimple",
	"vertical_menu_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"vertical_menu_texttransform",
	$vertical_menu_texttransform
);

$group2 = new MooseElatedGroup(
	"2nd Level Menu Style",
	esc_html__( "Define styles for 2nd level in Side Menu", 'moose' )
);
$panel7->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$vertical_dropdown_color = new MooseElatedField(
	"colorsimple",
	"vertical_dropdown_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_dropdown_color",
	$vertical_dropdown_color
);
$vertical_dropdown_hovercolor = new MooseElatedField(
	"colorsimple",
	"vertical_dropdown_hovercolor",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_dropdown_hovercolor",
	$vertical_dropdown_hovercolor
);

$row4 = new MooseElatedRow();
$group2->addChild(
	"row4",
	$row4
);
$vertical_dropdown_icon_color = new MooseElatedField(
	"colorsimple",
	"vertical_dropdown_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"vertical_dropdown_icon_color",
	$vertical_dropdown_icon_color
);
$vertical_dropdown_icon_hovercolor = new MooseElatedField(
	"colorsimple",
	"vertical_dropdown_icon_hovercolor",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"vertical_dropdown_icon_hovercolor",
	$vertical_dropdown_icon_hovercolor
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$vertical_dropdown_google_fonts = new MooseElatedField(
	"fontsimple",
	"vertical_dropdown_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_dropdown_google_fonts",
	$vertical_dropdown_google_fonts
);
$vertical_dropdown_fontsize = new MooseElatedField(
	"textsimple",
	"vertical_dropdown_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_dropdown_fontsize",
	$vertical_dropdown_fontsize
);
$vertical_dropdown_icon_fontsize = new MooseElatedField(
	"textsimple",
	"vertical_dropdown_icon_fontsize",
	"",
	esc_html__( "Icon font size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_dropdown_icon_fontsize",
	$vertical_dropdown_icon_fontsize
);
$vertical_dropdown_lineheight = new MooseElatedField(
	"textsimple",
	"vertical_dropdown_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_dropdown_lineheight",
	$vertical_dropdown_lineheight
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$vertical_dropdown_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"vertical_dropdown_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"vertical_dropdown_fontstyle",
	$vertical_dropdown_fontstyle
);
$vertical_dropdown_fontweight = new MooseElatedField(
	"selectblanksimple",
	"vertical_dropdown_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"vertical_dropdown_fontweight",
	$vertical_dropdown_fontweight
);
$vertical_dropdown_letterspacing = new MooseElatedField(
	"textsimple",
	"vertical_dropdown_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"vertical_dropdown_letterspacing",
	$vertical_dropdown_letterspacing
);
$vertical_dropdown_texttransform = new MooseElatedField(
	"selectblanksimple",
	"vertical_dropdown_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"vertical_dropdown_texttransform",
	$vertical_dropdown_texttransform
);

$group3 = new MooseElatedGroup(
	"3rd Level Menu Style",
	esc_html__( "Define styles for 3rd level in Side Menu", 'moose' )
);
$panel7->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$vertical_dropdown_color_thirdlvl = new MooseElatedField(
	"colorsimple",
	"vertical_dropdown_color_thirdlvl",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_dropdown_color_thirdlvl",
	$vertical_dropdown_color_thirdlvl
);
$vertical_dropdown_hovercolor_thirdlvl = new MooseElatedField(
	"colorsimple",
	"vertical_dropdown_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vertical_dropdown_hovercolor_thirdlvl",
	$vertical_dropdown_hovercolor_thirdlvl
);

$row4 = new MooseElatedRow();
$group3->addChild(
	"row4",
	$row4
);
$vertical_dropdown_icon_color_thirdlvl = new MooseElatedField(
	"colorsimple",
	"vertical_dropdown_icon_color_thirdlvl",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"vertical_dropdown_icon_color_thirdlvl",
	$vertical_dropdown_icon_color_thirdlvl
);
$vertical_dropdown_icon_hovercolor_thirdlvl = new MooseElatedField(
	"colorsimple",
	"vertical_dropdown_icon_hovercolor_thirdlvl",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"vertical_dropdown_icon_hovercolor_thirdlvl",
	$vertical_dropdown_icon_hovercolor_thirdlvl
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$vertical_dropdown_google_fonts_thirdlvl = new MooseElatedField(
	"fontsimple",
	"vertical_dropdown_google_fonts_thirdlvl",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_dropdown_google_fonts_thirdlvl",
	$vertical_dropdown_google_fonts_thirdlvl
);
$vertical_dropdown_fontsize_thirdlvl = new MooseElatedField(
	"textsimple",
	"vertical_dropdown_fontsize_thirdlvl",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_dropdown_fontsize_thirdlvl",
	$vertical_dropdown_fontsize_thirdlvl
);
$vertical_dropdown_icon_fontsize_thirdlvl = new MooseElatedField(
	"textsimple",
	"vertical_dropdown_icon_fontsize_thirdlvl",
	"",
	esc_html__( "Icon font size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_dropdown_icon_fontsize_thirdlvl",
	$vertical_dropdown_icon_fontsize_thirdlvl
);
$vertical_dropdown_lineheight_thirdlvl = new MooseElatedField(
	"textsimple",
	"vertical_dropdown_lineheight_thirdlvl",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vertical_dropdown_lineheight_thirdlvl",
	$vertical_dropdown_lineheight_thirdlvl
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$vertical_dropdown_fontstyle_thirdlvl = new MooseElatedField(
	"selectblanksimple",
	"vertical_dropdown_fontstyle_thirdlvl",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"vertical_dropdown_fontstyle_thirdlvl",
	$vertical_dropdown_fontstyle_thirdlvl
);
$vertical_dropdown_fontweight_thirdlvl = new MooseElatedField(
	"selectblanksimple",
	"vertical_dropdown_fontweight_thirdlvl",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"vertical_dropdown_fontweight_thirdlvl",
	$vertical_dropdown_fontweight_thirdlvl
);
$vertical_dropdown_letterspacing_thirdlvl = new MooseElatedField(
	"textsimple",
	"vertical_dropdown_letterspacing_thirdlvl",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"vertical_dropdown_letterspacing_thirdlvl",
	$vertical_dropdown_letterspacing_thirdlvl
);
$vertical_dropdown_texttransform_thirdlvl = new MooseElatedField(
	"selectblanksimple",
	"vertical_dropdown_texttransform_thirdlvl",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"vertical_dropdown_texttransform_thirdlvl",
	$vertical_dropdown_texttransform_thirdlvl
);

$vertical_menu_cart = new MooseElatedTitle(
	"vertical_menu_cart",
	esc_html__( "Woocommerce Cart Icon", 'moose' )
);
$panel7->addChild(
	"vertical_menu_cart",
	$vertical_menu_cart
);

$enable_vertical_menu_cart = new MooseElatedField(
	"yesno",
	"enable_vertical_menu_cart",
	"no",
	esc_html__( "Enable Cart Icon", 'moose' ),
	esc_html__( "This option will show Cart Icon in Vertical Menu", 'moose' ),
	array(),
	array()
);
$panel7->addChild(
	"enable_vertical_menu_cart",
	$enable_vertical_menu_cart
);

//Mobile menu	

$panel8 = new MooseElatedPanel(
	esc_html__( "Mobile Header", 'moose' ),
	"mobile_menu_panel"
);
$headerandfooterPage->addChild(
	"panel8",
	$panel8
);

$header_height_mobile = new MooseElatedField(
	"text",
	"header_height_mobile",
	"",
	esc_html__( "Mobile Header Height", 'moose' ),
	esc_html__( "Enter height for mobile header in pixels", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel8->addChild(
	"header_height_mobile",
	$header_height_mobile
);

$mobile_separator_color = new MooseElatedField(
	"color",
	"mobile_separator_color",
	"",
	esc_html__( "Mobile Menu Item Separator Color", 'moose' ),
	esc_html__( "Choose color for mobile menu horizontal separators", 'moose' )
);
$panel8->addChild(
	"mobile_separator_color",
	$mobile_separator_color
);

$mobile_background_color = new MooseElatedField(
	"color",
	"mobile_background_color",
	"",
	esc_html__( "Mobile Header & Menu Background Color", 'moose' ),
	esc_html__( "Choose color for mobile header&menu background", 'moose' )
);
$panel8->addChild(
	"mobile_background_color",
	$mobile_background_color
);

$logo_mobile_header_height = new MooseElatedField(
	"text",
	"logo_mobile_header_height",
	"",
	esc_html__( "Logo Height For Mobile Header (px)", 'moose' ),
	esc_html__( "Define logo height for screen size smaller than 1000px", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel8->addChild(
	"logo_mobile_header_height",
	$logo_mobile_header_height
);

$logo_mobile_height = new MooseElatedField(
	"text",
	"logo_mobile_height",
	"",
	esc_html__( "Logo Height For Mobile Devices (px)", 'moose' ),
	esc_html__( "Define logo height for screen size smaller than 480px", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel8->addChild(
	"logo_mobile_height",
	$logo_mobile_height
);

// Header Button Icons
$panel9 = new MooseElatedPanel(
	esc_html__( "Header Button Icons", 'moose' ),
	"header_buttons_panel"
);
$headerandfooterPage->addChild(
	"panel9",
	$panel9
);

$header_icon_pack = new MooseElatedField(
	'select',
	'header_icon_pack',
	'font_awesome',
	esc_html__( 'Header Icons Icon Pack', 'moose' ),
	'Choose
	 Icon Pack',
	$moose_elated_icon_collections->getIconCollectionsExclude( array( 'linea_icons', 'simple_line_icons' ) )
);
$panel9->addChild(
	'header_icon_pack',
	$header_icon_pack
);

$group1 = new MooseElatedGroup(
	esc_html__( "Header Icons Style", 'moose' ),
	esc_html__( "Define styles for header icons (Search Icon, Fullscreen Menu Icon and Side Area Icon)", 'moose' )
);
$panel9->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow( true );
$group1->addChild(
	"row1",
	$row1
);

$header_buttons_color = new MooseElatedField(
	"colorsimple",
	"header_buttons_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose a color for Header icons", 'moose' )
);
$row1->addChild(
	"header_buttons_color",
	$header_buttons_color
);

$header_buttons_hover_color = new MooseElatedField(
	"colorsimple",
	"header_buttons_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "Choose a hover color for Header icons", 'moose' )
);
$row1->addChild(
	"header_buttons_hover_color",
	$header_buttons_hover_color
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$header_light_icons_color = new MooseElatedField(
	"colorsimple",
	"header_light_icons_color",
	"",
	esc_html__( "Light Menu Icon Color", 'moose' ),
	esc_html__( "Choose a color for Header Light icons", 'moose' )
);
$row2->addChild(
	"header_light_icons_color",
	$header_light_icons_color
);

$header_light_hover_icons_color = new MooseElatedField(
	"colorsimple",
	"header_light_hover_icons_color",
	"",
	esc_html__( "Light Menu Icon Hover Color", 'moose' ),
	esc_html__( "Choose a hover color for Header Light icons", 'moose' )
);
$row2->addChild(
	"header_light_hover_icons_color",
	$header_light_hover_icons_color
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$header_dark_icons_color = new MooseElatedField(
	"colorsimple",
	"header_dark_icons_color",
	"",
	esc_html__( "Dark Menu Icon Color", 'moose' ),
	esc_html__( "Choose a color for Header Light icons", 'moose' )
);
$row3->addChild(
	"header_dark_icons_color",
	$header_dark_icons_color
);

$header_dark_hover_icons_color = new MooseElatedField(
	"colorsimple",
	"header_dark_hover_icons_color",
	"",
	esc_html__( "Dark Menu Icon Hover Color", 'moose' ),
	esc_html__( "Choose a hover color for Header Light icons", 'moose' )
);
$row3->addChild(
	"header_dark_hover_icons_color",
	$header_dark_hover_icons_color
);

$header_buttons_font_size = new MooseElatedField(
	"text",
	"header_buttons_font_size",
	"",
	esc_html__( "Search Icon Size", 'moose' ),
	esc_html__( "Choose a size for Search icons (px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel9->addChild(
	"header_buttons_font_size",
	$header_buttons_font_size
);

$header_buttons_size = new MooseElatedField(
	"select",
	"header_buttons_size",
	"normal",
	esc_html__( "Side Menu Icon / Fullscreen Menu Icon Size", 'moose' ),
	esc_html__( "Choose predefined size for Side Area / Fullscreen Menu icons", 'moose' ),
	array(
		"normal" => esc_html__( "Normal", 'moose' ),
		"medium" => esc_html__( "Medium", 'moose' ),
		"large" => esc_html__( "Large", 'moose' )
	)
);
$panel9->addChild(
	"header_buttons_size",
	$header_buttons_size
);

$group3 = new MooseElatedGroup(
	esc_html__( "Mobile Header Icons Color", 'moose' ),
	esc_html__( "Choose color for mobile header icons (search icon, fullscreen menu icon and side area icon)", 'moose' )
);
$panel9->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow( true );
$group3->addChild(
	"row1",
	$row1
);

$mobile_button_color = new MooseElatedField(
	"colorsimple",
	"mobile_button_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose a color for mobile menu icon", 'moose' )
);
$row1->addChild(
	"mobile_button_color",
	$mobile_button_color
);

$mobile_button_color_hover = new MooseElatedField(
	"colorsimple",
	"mobile_button_color_hover",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose a hover color for mobile menu icon", 'moose' )
);
$row1->addChild(
	"mobile_button_color_hover",
	$mobile_button_color_hover
);

$group2 = new MooseElatedGroup(
	esc_html__( "Fullscreen Menu Icon Background", 'moose' ),
	esc_html__( "Define background for fullscreen menu icon in header", 'moose' )
);
$panel9->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow( true );
$group2->addChild(
	"row1",
	$row1
);

$header_buttons_fullscreen_button_background = new MooseElatedField(
	"colorsimple",
	"header_buttons_fullscreen_button_background",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose a background color for Fullscreen Menu icon", 'moose' )
);
$row1->addChild(
	"header_buttons_fullscreen_button_background",
	$header_buttons_fullscreen_button_background
);

$header_buttons_fullscreen_button_background_hover = new MooseElatedField(
	"colorsimple",
	"header_buttons_fullscreen_button_background_hover",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "Choose a background hover color for Fullscreen Menu icon", 'moose' )
);
$row1->addChild(
	"header_buttons_fullscreen_button_background_hover",
	$header_buttons_fullscreen_button_background_hover
);
// WPML Language Selector
if ( moose_elated_is_wpml_installed() ) {
	
	$panel_lang_selector = new MooseElatedPanel(
		esc_html__( "Language Selector", 'moose' ),
		"lang_selector_panel"
	);
	$headerandfooterPage->addChild(
		"panel_lang_selector",
		$panel_lang_selector
	);
	
	$wpml_first_level_background_color = new MooseElatedField(
		"color",
		"wpml_first_level_background_color",
		"",
		esc_html__( "Background Color for First Level", 'moose' ),
		esc_html__( "Choose a background color for first level element", 'moose' )
	);
	$panel_lang_selector->addChild(
		"wpml_first_level_background_color",
		$wpml_first_level_background_color
	);
	
	// First Level Menu 
	
	$group1 = new MooseElatedGroup(
		"1st Level Menu Style",
		esc_html__( "Define styles for first menu level ", 'moose' )
	);
	$panel_lang_selector->addChild(
		"group1",
		$group1
	);
	
	$row1 = new MooseElatedRow();
	$group1->addChild(
		"row1",
		$row1
	);
	
	$wpml_first_level_menu_color = new MooseElatedField(
		"colorsimple",
		"wpml_first_level_menu_color",
		"",
		esc_html__( "Text Color", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row1->addChild(
		"wpml_first_level_menu_color",
		$wpml_first_level_menu_color
	);
	
	$wpml_first_level_menu_color_hover = new MooseElatedField(
		"colorsimple",
		"wpml_first_level_menu_color_hover",
		"",
		esc_html__( "Hover Color", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row1->addChild(
		"wpml_first_level_menu_color_hover",
		$wpml_first_level_menu_color_hover
	);
	
	$wpml_first_level_menu_google_fonts = new MooseElatedField(
		"fontsimple",
		"wpml_first_level_menu_google_fonts",
		"-1",
		esc_html__( "Font Family", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row1->addChild(
		"wpml_first_level_menu_google_fonts",
		$wpml_first_level_menu_google_fonts
	);
	
	$wpml_first_level_menu_fontsize = new MooseElatedField(
		"textsimple",
		"wpml_first_level_menu_fontsize",
		"",
		esc_html__( "Font Size (px)", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row1->addChild(
		"wpml_first_level_menu_fontsize",
		$wpml_first_level_menu_fontsize
	);
	
	$row2 = new MooseElatedRow( true );
	$group1->addChild(
		"row2",
		$row2
	);
	
	$wpml_first_level_menu_texttransform = new MooseElatedField(
		"selectblanksimple",
		"wpml_first_level_menu_texttransform",
		"",
		esc_html__( "Text Transform", 'moose' ),
		esc_html__( "This is some description", 'moose' ),
		moose_elated_get_text_transform_array()
	);
	$row2->addChild(
		"wpml_first_level_menu_texttransform",
		$wpml_first_level_menu_texttransform
	);
	
	$wpml_first_level_menu_fontstyle = new MooseElatedField(
		"selectblanksimple",
		"wpml_first_level_menu_fontstyle",
		"",
		esc_html__( "Font Style", 'moose' ),
		esc_html__( "This is some description", 'moose' ),
		moose_elated_get_font_style_array()
	);
	$row2->addChild(
		"wpml_first_level_menu_fontstyle",
		$wpml_first_level_menu_fontstyle
	);
	
	$wpml_first_level_menu_fontweight = new MooseElatedField(
		"selectblanksimple",
		"wpml_first_level_menu_fontweight",
		"",
		esc_html__( "Font Weight", 'moose' ),
		esc_html__( "This is some description", 'moose' ),
		moose_elated_get_font_weight_array()
	);
	$row2->addChild(
		"wpml_first_level_menu_fontweight",
		$wpml_first_level_menu_fontweight
	);
	
	$wpml_first_level_menu_letterspacing = new MooseElatedField(
		"textsimple",
		"wpml_first_level_menu_letterspacing",
		"",
		esc_html__( "Letter Spacing (px)", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row2->addChild(
		"wpml_first_level_menu_letterspacing",
		$wpml_first_level_menu_letterspacing
	);
	
	$group2 = new MooseElatedGroup(
		"2nd Level Menu Style",
		esc_html__( "Define styles for second menu level ", 'moose' )
	);
	$panel_lang_selector->addChild(
		"group2",
		$group2
	);
	
	$row1 = new MooseElatedRow();
	$group2->addChild(
		"row1",
		$row1
	);
	
	$wpml_second_level_menu_color = new MooseElatedField(
		"colorsimple",
		"wpml_second_level_menu_color",
		"",
		esc_html__( "Text Color", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row1->addChild(
		"wpml_second_level_menu_color",
		$wpml_second_level_menu_color
	);
	
	$wpml_second_level_menu_color_hover = new MooseElatedField(
		"colorsimple",
		"wpml_second_level_menu_color_hover",
		"",
		esc_html__( "Hover Color", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row1->addChild(
		"wpml_second_level_menu_color_hover",
		$wpml_second_level_menu_color_hover
	);
	
	$wpml_second_level_menu_google_fonts = new MooseElatedField(
		"fontsimple",
		"wpml_second_level_menu_google_fonts",
		"-1",
		esc_html__( "Font Family", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row1->addChild(
		"wpml_second_level_menu_google_fonts",
		$wpml_second_level_menu_google_fonts
	);
	
	$wpml_second_level_menu_fontsize = new MooseElatedField(
		"textsimple",
		"wpml_second_level_menu_fontsize",
		"",
		esc_html__( "Font Size (px)", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row1->addChild(
		"wpml_second_level_menu_fontsize",
		$wpml_second_level_menu_fontsize
	);
	
	$row2 = new MooseElatedRow( true );
	$group2->addChild(
		"row2",
		$row2
	);
	$wpml_second_level_menu_texttransform = new MooseElatedField(
		"selectblanksimple",
		"wpml_second_level_menu_texttransform",
		"",
		esc_html__( "Text Transform", 'moose' ),
		esc_html__( "This is some description", 'moose' ),
		moose_elated_get_text_transform_array()
	);
	$row2->addChild(
		"wpml_second_level_menu_texttransform",
		$wpml_second_level_menu_texttransform
	);
	
	$wpml_second_level_menu_fontstyle = new MooseElatedField(
		"selectblanksimple",
		"wpml_second_level_menu_fontstyle",
		"",
		esc_html__( "Font Style", 'moose' ),
		esc_html__( "This is some description", 'moose' ),
		moose_elated_get_font_style_array()
	);
	$row2->addChild(
		"wpml_second_level_menu_fontstyle",
		$wpml_second_level_menu_fontstyle
	);
	
	$wpml_second_level_menu_fontweight = new MooseElatedField(
		"selectblanksimple",
		"wpml_second_level_menu_fontweight",
		"",
		esc_html__( "Font Weight", 'moose' ),
		esc_html__( "This is some description", 'moose' ),
		moose_elated_get_font_weight_array()
	);
	$row2->addChild(
		"wpml_second_level_menu_fontweight",
		$wpml_second_level_menu_fontweight
	);
	
	$wpml_second_level_menu_letterspacing = new MooseElatedField(
		"textsimple",
		"wpml_second_level_menu_letterspacing",
		"",
		esc_html__( "Letter Spacing (px)", 'moose' ),
		esc_html__( "This is some description", 'moose' )
	);
	$row2->addChild(
		"wpml_second_level_menu_letterspacing",
		$wpml_second_level_menu_letterspacing
	);
	
	$lang_items_padding = new MooseElatedField(
		'text',
		'header_bottom_lang_items_padding',
		'',
		esc_html__( 'Left / Right Spacing Between Languages in List (px)', 'moose' ),
		esc_html__( 'Set spacing between languages when horizontal language switcher is added to main menu', 'moose' ),
		array(),
		array( "col_width" => 3 )
	);
	$panel_lang_selector->addChild(
		'header_bottom_lang_items_padding',
		$lang_items_padding
	);
	
}	
	
