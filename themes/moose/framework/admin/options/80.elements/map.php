<?php

$elementsPage = new MooseElatedAdminPage(
	"6",
	esc_html__( "Elements", 'moose' ),
	"fa fa-flag-o"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"elementsPage",
	$elementsPage
);

//Accordions and Toogles

$panel29 = new MooseElatedPanel(
	esc_html__( "Accordions and  Toggles", 'moose' ),
	"accordions_toogles_panel"
);
$elementsPage->addChild(
	"panel29",
	$panel29
);

$accordion_regular_subtitle = new MooseElatedTitle(
	"accordion_regular_subtitle",
	esc_html__( "Accordion & Toggle Title", 'moose' )
);
$panel29->addChild(
	"accordion_regular_subtitle",
	$accordion_regular_subtitle
);

$group4 = new MooseElatedGroup(
	esc_html__( "Title Style", 'moose' ),
	esc_html__( "Define Accordion & Toggle Title style", 'moose' )
);
$panel29->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow( true );
$group4->addChild(
	"row1",
	$row1
);

$accordion_regular_title_color = new MooseElatedField(
	"colorsimple",
	"accordion_regular_title_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_regular_title_color",
	$accordion_regular_title_color
);

$accordion_regular_title_hover_color = new MooseElatedField(
	"colorsimple",
	"accordion_regular_title_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_regular_title_hover_color",
	$accordion_regular_title_hover_color
);

$accordion_regular_title_fontsize = new MooseElatedField(
	"textsimple",
	"accordion_regular_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_regular_title_fontsize",
	$accordion_regular_title_fontsize
);

$accordion_regular_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"accordion_regular_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"accordion_regular_title_fontweight",
	$accordion_regular_title_fontweight
);

$accordion_toogle_subtitle = new MooseElatedTitle(
	"accordion_toogle_subtitle",
	esc_html__( "Accordion & Toggle Boxed Title", 'moose' )
);
$panel29->addChild(
	"accordion_toogle_subtitle",
	$accordion_toogle_subtitle
);

$group1 = new MooseElatedGroup(
	esc_html__( "Title Style", 'moose' ),
	esc_html__( "Define Accordion & Toggle Boxed Title style", 'moose' )
);
$panel29->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow( true );
$group1->addChild(
	"row1",
	$row1
);

$accordion_toogle_title_color = new MooseElatedField(
	"colorsimple",
	"accordion_toogle_title_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toogle_title_color",
	$accordion_toogle_title_color
);

$accordion_toogle_title_hover_color = new MooseElatedField(
	"colorsimple",
	"accordion_toogle_title_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toogle_title_hover_color",
	$accordion_toogle_title_hover_color
);

$accordion_toogle_title_fontsize = new MooseElatedField(
	"textsimple",
	"accordion_toogle_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toogle_title_fontsize",
	$accordion_toogle_title_fontsize
);

$accordion_toogle_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"accordion_toogle_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"accordion_toogle_title_fontweight",
	$accordion_toogle_title_fontweight
);

$accordion_toogle_mark_subtitle = new MooseElatedTitle(
	"accordion_toogle_mark_subtitle",
	esc_html__( "Accordion & Toggle Mark", 'moose' )
);
$panel29->addChild(
	"accordion_toogle_mark_subtitle",
	$accordion_toogle_mark_subtitle
);

$group2 = new MooseElatedGroup(
	esc_html__( "Mark Style", 'moose' ),
	esc_html__( "Define mark style", 'moose' )
);
$panel29->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow( true );
$group2->addChild(
	"row1",
	$row1
);

$accordion_mark_icon_color = new MooseElatedField(
	"colorsimple",
	"accordion_mark_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_mark_icon_color",
	$accordion_mark_icon_color
);

$accordion_mark_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"accordion_mark_icon_hover_color",
	"",
	esc_html__( "Icon Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_mark_icon_hover_color",
	$accordion_mark_icon_hover_color
);

$accordion_mark_icon_fontsize = new MooseElatedField(
	"textsimple",
	"accordion_mark_icon_fontsize",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_mark_icon_fontsize",
	$accordion_mark_icon_fontsize
);

$accordion_mark_icon_fontweight = new MooseElatedField(
	"selectblanksimple",
	"accordion_mark_icon_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"accordion_mark_icon_fontweight",
	$accordion_mark_icon_fontweight
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$accordion_mark_background_color = new MooseElatedField(
	"colorsimple",
	"accordion_mark_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_mark_background_color",
	$accordion_mark_background_color
);

$accordion_mark_background_hover_color = new MooseElatedField(
	"colorsimple",
	"accordion_mark_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_mark_background_hover_color",
	$accordion_mark_background_hover_color
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$accordion_mark_border_color = new MooseElatedField(
	"colorsimple",
	"accordion_mark_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"accordion_mark_border_color",
	$accordion_mark_border_color
);

$accordion_mark_border_hover_color = new MooseElatedField(
	"colorsimple",
	"accordion_mark_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"accordion_mark_border_hover_color",
	$accordion_mark_border_hover_color
);

$accordion_mark_border_radius = new MooseElatedField(
	"textsimple",
	"accordion_mark_border_radius",
	"",
	esc_html__( "Border Radius", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"accordion_mark_border_radius",
	$accordion_mark_border_radius
);

$accordion_toggle_icon_style = new MooseElatedGroup(
	esc_html__( "Icon Style", 'moose' ),
	esc_html__( "Define icon style", 'moose' )
);
$panel29->addChild(
	"accordion_toggle_icon_style",
	$accordion_toggle_icon_style
);

$row1 = new MooseElatedRow( true );
$accordion_toggle_icon_style->addChild(
	"row1",
	$row1
);

$accordion_toggle_icon_color = new MooseElatedField(
	"colorsimple",
	"accordion_toggle_icon_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toggle_icon_color",
	$accordion_toggle_icon_color
);

$accordion_toggle_icon_color_hover = new MooseElatedField(
	"colorsimple",
	"accordion_toggle_icon_color_hover",
	"",
	esc_html__( "Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toggle_icon_color_hover",
	$accordion_toggle_icon_color_hover
);

$accordion_toggle_boxed_subtitle = new MooseElatedTitle(
	"accordion_toggle_boxed_subtitle",
	esc_html__( "Accordion & Toggle Boxed Style", 'moose' )
);
$panel29->addChild(
	"accordion_toggle_boxed_subtitle",
	$accordion_toggle_boxed_subtitle
);

$group3 = new MooseElatedGroup(
	esc_html__( "Boxed Style", 'moose' ),
	esc_html__( "Define boxed style", 'moose' )
);
$panel29->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow( true );
$group3->addChild(
	"row1",
	$row1
);

$accordion_toggle_boxed_background_color = new MooseElatedField(
	"colorsimple",
	"accordion_toggle_boxed_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_color",
	$accordion_toggle_boxed_background_color
);

$accordion_toggle_boxed_background_hover_color = new MooseElatedField(
	"colorsimple",
	"accordion_toggle_boxed_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_hover_color",
	$accordion_toggle_boxed_background_hover_color
);

$accordion_toggle_boxed_border_color = new MooseElatedField(
	"colorsimple",
	"accordion_toggle_boxed_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_color",
	$accordion_toggle_boxed_border_color
);

$accordion_toggle_boxed_border_hover_color = new MooseElatedField(
	"colorsimple",
	"accordion_toggle_boxed_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_hover_color",
	$accordion_toggle_boxed_border_hover_color
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$accordion_toggle_boxed_border_radius = new MooseElatedField(
	"textsimple",
	"accordion_toggle_boxed_border_radius",
	"",
	esc_html__( "Border Radius", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"accordion_toggle_boxed_border_radius",
	$accordion_toggle_boxed_border_radius
);

$accordion_toggle_boxed_background_pattern = new MooseElatedField(
	"yesno",
	"accordion_toggle_boxed_background_pattern",
	"no",
	esc_html__( "Boxed Style Pattern", 'moose' ),
	"Enabling this option will add pattern background to boxed style.
		",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_accordion_toggle_boxed_background_pattern_image_container"
	)
);
$panel29->addChild(
	"accordion_toggle_boxed_background_pattern",
	$accordion_toggle_boxed_background_pattern
);

$accordion_toggle_boxed_background_pattern_image_container = new MooseElatedContainer(
	"accordion_toggle_boxed_background_pattern_image_container",
	"accordion_toggle_boxed_background_pattern",
	"no"
);
$panel29->addChild(
	"accordion_toggle_boxed_background_pattern_image_container",
	$accordion_toggle_boxed_background_pattern_image_container
);

$group27 = new MooseElatedGroup(
	esc_html__( "Image", 'moose' ),
	esc_html__( "Choose pattern image for boxed style", 'moose' )
);
$accordion_toggle_boxed_background_pattern_image_container->addChild(
	"group27",
	$group27
);
$row3 = new MooseElatedRow();
$group27->addChild(
	"row3",
	$row3
);

$accordion_toggle_boxed_background_pattern_image = new MooseElatedField(
	"imagesimple",
	"accordion_toggle_boxed_background_pattern_image",
	"",
	esc_html__( "Pattern image", 'moose' ),
	""
);
$row3->addChild(
	"accordion_toggle_boxed_background_pattern_image",
	$accordion_toggle_boxed_background_pattern_image
);

$group5 = new MooseElatedGroup(
	esc_html__( "Mark Style", 'moose' ),
	esc_html__( "Define mark style", 'moose' )
);
$panel29->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow( true );
$group5->addChild(
	"row1",
	$row1
);

$accordion_boxed_mark_icon_color = new MooseElatedField(
	"colorsimple",
	"accordion_boxed_mark_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_color",
	$accordion_boxed_mark_icon_color
);

$accordion_boxed_mark_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"accordion_boxed_mark_icon_hover_color",
	"",
	esc_html__( "Icon Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_hover_color",
	$accordion_boxed_mark_icon_hover_color
);

$accordion_boxed_mark_icon_fontsize = new MooseElatedField(
	"textsimple",
	"accordion_boxed_mark_icon_fontsize",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_fontsize",
	$accordion_boxed_mark_icon_fontsize
);

$accordion_boxed_mark_icon_fontweight = new MooseElatedField(
	"selectblanksimple",
	"accordion_boxed_mark_icon_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"accordion_boxed_mark_icon_fontweight",
	$accordion_boxed_mark_icon_fontweight
);

$accordion_toggle_boxed_icon_style = new MooseElatedGroup(
	esc_html__( "Icon Style", 'moose' ),
	esc_html__( "Define icon style", 'moose' )
);
$panel29->addChild(
	"accordion_toggle_boxed_icon_style",
	$accordion_toggle_boxed_icon_style
);

$row1 = new MooseElatedRow( true );
$accordion_toggle_boxed_icon_style->addChild(
	"row1",
	$row1
);

$accordion_toggle_boxed_icon_color = new MooseElatedField(
	"colorsimple",
	"accordion_toggle_boxed_icon_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toggle_boxed_icon_color",
	$accordion_toggle_boxed_icon_color
);

$accordion_toggle_boxed_icon_color_hover = new MooseElatedField(
	"colorsimple",
	"accordion_toggle_boxed_icon_color_hover",
	"",
	esc_html__( "Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"accordion_toggle_boxed_icon_color_hover",
	$accordion_toggle_boxed_icon_color_hover
);

//Back to top

$panel1 = new MooseElatedPanel(
	"esc_html__( 'Back to Top', 'moose' ) Link Button",
	"back_to_top_panel"
);
$elementsPage->addChild(
	"panel1",
	$panel1
);

$group1 = new MooseElatedGroup(
	esc_html__( "Background", 'moose' ),
	esc_html__( 'Choose background for "Back to Top"', 'moose' )
);
$panel1->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$back_to_top_background_color = new MooseElatedField(
	"colorsimple",
	"back_to_top_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_background_color",
	$back_to_top_background_color
);

$back_to_top_background_hover_color = new MooseElatedField(
	"colorsimple",
	"back_to_top_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_background_hover_color",
	$back_to_top_background_hover_color
);

$back_to_top_background_transparency = new MooseElatedField(
	"textsimple",
	"back_to_top_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_background_transparency",
	$back_to_top_background_transparency
);

$back_to_top_background_hover_transparency = new MooseElatedField(
	"textsimple",
	"back_to_top_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_background_hover_transparency",
	$back_to_top_background_hover_transparency
);

$group2 = new MooseElatedGroup(
	esc_html__( "Border", 'moose' ),
	esc_html__( "Choose Border style for Back to Top", 'moose' )
);
$panel1->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$back_to_top_border_color = new MooseElatedField(
	"colorsimple",
	"back_to_top_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_border_color",
	$back_to_top_border_color
);

$back_to_top_border_hover_color = new MooseElatedField(
	"colorsimple",
	"back_to_top_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_border_hover_color",
	$back_to_top_border_hover_color
);

$back_to_top_border_width = new MooseElatedField(
	"textsimple",
	"back_to_top_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_border_width",
	$back_to_top_border_width
);

$back_to_top_border_radius = new MooseElatedField(
	"textsimple",
	"back_to_top_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_border_radius",
	$back_to_top_border_radius
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_border_transparency = new MooseElatedField(
	"textsimple",
	"back_to_top_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"back_to_top_border_transparency",
	$back_to_top_border_transparency
);

$back_to_top_border_hover_transparency = new MooseElatedField(
	"textsimple",
	"back_to_top_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"back_to_top_border_hover_transparency",
	$back_to_top_border_hover_transparency
);

$group3 = new MooseElatedGroup(
	esc_html__( "Button Size", 'moose' ),
	esc_html__( 'Choose Size for "Back to Top" button', 'moose' )
);
$panel1->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$back_to_top_height = new MooseElatedField(
	"textsimple",
	"back_to_top_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_height",
	$back_to_top_height
);
$back_to_top_width = new MooseElatedField(
	"textsimple",
	"back_to_top_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_width",
	$back_to_top_width
);

$group4 = new MooseElatedGroup(
	esc_html__( "Button Position", 'moose' ),
	esc_html__( 'Define button alignment and margin bottom', 'moose' )
);
$panel1->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$back_to_top_position = new MooseElatedField(
	"selectsimple",
	"back_to_top_position",
	"",
	esc_html__( "Button Alignment", 'moose' ),
	esc_html__( 'Choose alignment for "Back to Top" button', 'moose' ),
	array(
		"right" => esc_html__( "Right", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
	)
);
$row1->addChild(
	"back_to_top_position",
	$back_to_top_position
);

$back_to_top_button_margin_bottom = new MooseElatedField(
	"textsimple",
	"back_to_top_button_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "Enter bottom margin", 'moose' )
);
$row1->addChild(
	"back_to_top_button_margin_bottom",
	$back_to_top_button_margin_bottom
);

$back_to_top_type = new MooseElatedField(
	"select",
	"back_to_top_type",
	"arrow",
	esc_html__( "Button Text Type", 'moose' ),
	esc_html__( 'Choose "Back to Top" button type ', 'moose' ),
	array(
		"arrow" => esc_html__( "Arrow", 'moose' ),
		"text" => esc_html__( "Text", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"arrow" => "#eltdf_back_to_top_type_text_container",
			"text"  => "#eltdf_back_to_top_type_arrow_container"
		),
		"show"       => array(
			"arrow" => "#eltdf_back_to_top_type_arrow_container",
			"text"  => "#eltdf_back_to_top_type_text_container"
		)
	)
);
$panel1->addChild(
	"back_to_top_type",
	$back_to_top_type
);

$back_to_top_type_arrow_container = new MooseElatedContainer(
	"back_to_top_type_arrow_container",
	"back_to_top_type",
	"text"
);
$panel1->addChild(
	"back_to_top_type_arrow_container",
	$back_to_top_type_arrow_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Arrow Icon Style", 'moose' ),
	esc_html__( "Define style for arrow icon", 'moose' )
);
$back_to_top_type_arrow_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$show_back_button_icon = new MooseElatedField(
	'selectsimple',
	'show_back_button_icon',
	'',
	esc_html__( 'Choose Icon', 'moose' ),
	esc_html__( 'Choose Icon', 'moose' ),
	moose_elated_get_arrows_up_type()
);
$row1->addChild(
	'show_back_button_icon',
	$show_back_button_icon
);

$back_to_top_arrow_size = new MooseElatedField(
	"textsimple",
	"back_to_top_arrow_size",
	"14",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "Default value is 14	", 'moose' )
);
$row1->addChild(
	"back_to_top_arrow_size",
	$back_to_top_arrow_size
);

$back_to_top_arrow_color = new MooseElatedField(
	"colorsimple",
	"back_to_top_arrow_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_arrow_color",
	$back_to_top_arrow_color
);

$back_to_top_arrow_hover_color = new MooseElatedField(
	"colorsimple",
	"back_to_top_arrow_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_arrow_hover_color",
	$back_to_top_arrow_hover_color
);

$back_to_top_type_text_container = new MooseElatedContainer(
	"back_to_top_type_text_container",
	"back_to_top_type",
	"arrow"
);
$panel1->addChild(
	"back_to_top_type_text_container",
	$back_to_top_type_text_container
);

$back_to_top_text = new MooseElatedField(
	"text",
	"back_to_top_text",
	"",
	esc_html__( "Back to Top Text", 'moose' ),
	esc_html__( "Enter text for 'Back to Top' button", 'moose' )
);
$back_to_top_type_text_container->addChild(
	"back_to_top_text",
	$back_to_top_text
);

$group1 = new MooseElatedGroup(
	esc_html__( "Button Text Color", 'moose' ),
	esc_html__( "Define Color for Text Type", 'moose' )
);
$back_to_top_type_text_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$back_to_top_text_color = new MooseElatedField(
	"colorsimple",
	"back_to_top_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_text_color",
	$back_to_top_text_color
);

$back_to_top_text_hover_color = new MooseElatedField(
	"colorsimple",
	"back_to_top_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_text_hover_color",
	$back_to_top_text_hover_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Button Text Style", 'moose' ),
	esc_html__( "Define Style for Text Type", 'moose' )
);
$back_to_top_type_text_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$back_to_top_text_fontsize = new MooseElatedField(
	"textsimple",
	"back_to_top_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_text_fontsize",
	$back_to_top_text_fontsize
);

$back_to_top_text_lineheight = new MooseElatedField(
	"textsimple",
	"back_to_top_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_text_lineheight",
	$back_to_top_text_lineheight
);

$back_to_top_text_texttransform = new MooseElatedField(
	"selectblanksimple",
	"back_to_top_text_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"back_to_top_text_texttransform",
	$back_to_top_text_texttransform
);

$back_to_top_text_fontfamily = new MooseElatedField(
	"fontsimple",
	"back_to_top_text_fontfamily",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"back_to_top_text_fontfamily",
	$back_to_top_text_fontfamily
);

$row2 = new MooseElatedRow();
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_text_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"back_to_top_text_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"back_to_top_text_fontstyle",
	$back_to_top_text_fontstyle
);

$back_to_top_text_fontweight = new MooseElatedField(
	"selectblanksimple",
	"back_to_top_text_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"back_to_top_text_fontweight",
	$back_to_top_text_fontweight
);

$back_to_top_text_letterspacing = new MooseElatedField(
	"textsimple",
	"back_to_top_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"back_to_top_text_letterspacing",
	$back_to_top_text_letterspacing
);

//Buttons

$panel2 = new MooseElatedPanel(
	esc_html__( "Buttons", 'moose' ),
	"buttons_panel"
);
$elementsPage->addChild(
	"panel2",
	$panel2
);

$button_default_section = new MooseElatedTitle(
	"button_default_section",
	esc_html__( "Default Button", 'moose' )
);
$panel2->addChild(
	"button_default_section",
	$button_default_section
);

$group1 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text style", 'moose' )
);
$panel2->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$button_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"button_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_title_google_fonts",
	$button_title_google_fonts
);

$button_title_fontsize = new MooseElatedField(
	"textsimple",
	"button_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_title_fontsize",
	$button_title_fontsize
);

$button_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"button_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row1->addChild(
	"button_title_fontstyle",
	$button_title_fontstyle
);

$button_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"button_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"button_title_fontweight",
	$button_title_fontweight
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$button_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"button_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"button_title_letter_spacing",
	$button_title_letter_spacing
);

$button_title_lineheight = new MooseElatedField(
	"textsimple",
	"button_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"button_title_lineheight",
	$button_title_lineheight
);

$button_title_color = new MooseElatedField(
	"colorsimple",
	"button_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"button_title_color",
	$button_title_color
);

$button_title_hovercolor = new MooseElatedField(
	"colorsimple",
	"button_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"button_title_hovercolor",
	$button_title_hovercolor
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$button_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"button_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"button_title_texttransform",
	$button_title_texttransform
);

$group21 = new MooseElatedGroup(
	esc_html__( "Icon Style", 'moose' ),
	esc_html__( "Define icon style", 'moose' )
);
$panel2->addChild(
	"group21",
	$group21
);
$row1 = new MooseElatedRow();
$group21->addChild(
	"row1",
	$row1
);

$button_icon_size = new MooseElatedField(
	"textsimple",
	"button_icon_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_icon_size",
	$button_icon_size
);

$button_icon_color = new MooseElatedField(
	"colorsimple",
	"button_icon_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_icon_color",
	$button_icon_color
);

$button_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"button_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_icon_hover_color",
	$button_icon_hover_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Background", 'moose' ),
	esc_html__( "Define background", 'moose' )
);
$panel2->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$button_backgroundcolor = new MooseElatedField(
	"colorsimple",
	"button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_backgroundcolor",
	$button_backgroundcolor
);

$button_backgroundcolor_hover = new MooseElatedField(
	"colorsimple",
	"button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_backgroundcolor_hover",
	$button_backgroundcolor_hover
);

$group3 = new MooseElatedGroup(
	esc_html__( "Border Style", 'moose' ),
	esc_html__( "Define border style", 'moose' )
);
$panel2->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$button_border_color = new MooseElatedField(
	"colorsimple",
	"button_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_border_color",
	$button_border_color
);

$button_border_hover_color = new MooseElatedField(
	"colorsimple",
	"button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_border_hover_color",
	$button_border_hover_color
);

$button_border_width = new MooseElatedField(
	"textsimple",
	"button_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_border_width",
	$button_border_width
);

$button_border_radius = new MooseElatedField(
	"textsimple",
	"button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_border_radius",
	$button_border_radius
);

$button_padding = new MooseElatedField(
	"text",
	"button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'moose' ),
	esc_html__( "Define padding", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"button_padding",
	$button_padding
);

$button_hover_animation = new MooseElatedField(
	"selectblank",
	"button_hover_animation",
	"",
	esc_html__( "Button Hover Animation", 'moose' ),
	esc_html__( "Choose a hover animation for button", 'moose' ),
	array(
		"rotate_icon" => esc_html__( "Rotate Icon", 'moose' ),
		"rotate_text_and_icon" => esc_html__( "Rotate Text and Icon", 'moose' ),
		"fill_text_rotate_icon" => esc_html__( "Fill Text and Rotate Icon", 'moose' )
	)
);
$panel2->addChild(
	"button_hover_animation",
	$button_hover_animation
);

$button_transparent_section = new MooseElatedTitle(
	"button_transparent_section",
	esc_html__( "Transparent Button", 'moose' )
);
$panel2->addChild(
	"button_transparent_section",
	$button_transparent_section
);

$group10 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text style", 'moose' )
);
$panel2->addChild(
	"group10",
	$group10
);

$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$button_transparent_text_color = new MooseElatedField(
	"colorsimple",
	"button_transparent_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_transparent_text_color",
	$button_transparent_text_color
);

$button_transparent_text_color_hover = new MooseElatedField(
	"colorsimple",
	"button_transparent_text_color_hover",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_transparent_text_color_hover",
	$button_transparent_text_color_hover
);

$button_transparent_border_color = new MooseElatedField(
	"colorsimple",
	"button_transparent_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_transparent_border_color",
	$button_transparent_border_color
);

$button_transparent_border_hover_color = new MooseElatedField(
	"colorsimple",
	"button_transparent_border_hover_color",
	"",
	esc_html__( "Hover Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"button_transparent_border_hover_color",
	$button_transparent_border_hover_color
);

$row2 = new MooseElatedRow();
$group10->addChild(
	"row2",
	$row2
);

$button_transparent_animation_overlay = new MooseElatedField(
	"colorsimple",
	"button_transparent_animation_overlay",
	"",
	esc_html__( "Background Color for Animated Button", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"button_transparent_animation_overlay",
	$button_transparent_animation_overlay
);

$button_transparent_icon_color = new MooseElatedField(
	"colorsimple",
	"button_transparent_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"button_transparent_icon_color",
	$button_transparent_icon_color
);

$button_transparent_icon_color_hover = new MooseElatedField(
	"colorsimple",
	"button_transparent_icon_color_hover",
	"",
	esc_html__( "Hover Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"button_transparent_icon_color_hover",
	$button_transparent_icon_color_hover
);

$button_small_section = new MooseElatedTitle(
	"button_small_section",
	esc_html__( "Small Button", 'moose' )
);
$panel2->addChild(
	"button_small_section",
	$button_small_section
);

$group14 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text style", 'moose' )
);
$panel2->addChild(
	"group14",
	$group14
);
$row1 = new MooseElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$small_button_fontsize = new MooseElatedField(
	"textsimple",
	"small_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"small_button_fontsize",
	$small_button_fontsize
);

$small_button_fontweight = new MooseElatedField(
	"selectblanksimple",
	"small_button_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"small_button_fontweight",
	$small_button_fontweight
);

$small_button_lineheight = new MooseElatedField(
	"textsimple",
	"small_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"small_button_lineheight",
	$small_button_lineheight
);

$group22 = new MooseElatedGroup(
	esc_html__( "Icon Style", 'moose' ),
	esc_html__( "Define icon style", 'moose' )
);
$panel2->addChild(
	"group22",
	$group22
);
$row1 = new MooseElatedRow();
$group22->addChild(
	"row1",
	$row1
);

$small_button_icon_size = new MooseElatedField(
	"textsimple",
	"small_button_icon_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"small_button_icon_size",
	$small_button_icon_size
);

$small_button_padding = new MooseElatedField(
	"text",
	"small_button_padding",
	"",
	esc_html__( "Padding left/right (px) ", 'moose' ),
	esc_html__( "Define padding", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_padding",
	$small_button_padding
);

$small_button_border_radius = new MooseElatedField(
	"text",
	"small_button_border_radius",
	"",
	esc_html__( "Border radius (px)", 'moose' ),
	esc_html__( "Define border", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_border_radius",
	$small_button_border_radius
);

$button_large_section = new MooseElatedTitle(
	"button_large_section",
	esc_html__( "Large Button", 'moose' )
);
$panel2->addChild(
	"button_large_section",
	$button_large_section
);

$group17 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text style", 'moose' )
);
$panel2->addChild(
	"group17",
	$group17
);

$row1 = new MooseElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$large_button_fontsize = new MooseElatedField(
	"textsimple",
	"large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"large_button_fontsize",
	$large_button_fontsize
);

$large_button_fontweight = new MooseElatedField(
	"selectblanksimple",
	"large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"large_button_fontweight",
	$large_button_fontweight
);

$large_button_lineheight = new MooseElatedField(
	"textsimple",
	"large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"large_button_lineheight",
	$large_button_lineheight
);

$group23 = new MooseElatedGroup(
	esc_html__( "Icon Style", 'moose' ),
	esc_html__( "Define icon style", 'moose' )
);
$panel2->addChild(
	"group23",
	$group23
);
$row1 = new MooseElatedRow();
$group23->addChild(
	"row1",
	$row1
);

$large_button_icon_size = new MooseElatedField(
	"textsimple",
	"large_button_icon_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"large_button_icon_size",
	$large_button_icon_size
);

$large_button_padding = new MooseElatedField(
	"text",
	"large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'moose' ),
	esc_html__( "Define padding", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_padding",
	$large_button_padding
);

$large_button_border_radius = new MooseElatedField(
	"text",
	"large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "Define border", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_border_radius",
	$large_button_border_radius
);

$button_extra_large_section = new MooseElatedTitle(
	"button_extra_large_section",
	esc_html__( "Extra Large Button", 'moose' )
);
$panel2->addChild(
	"button_extra_large_section",
	$button_extra_large_section
);

$group20 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text style", 'moose' )
);
$panel2->addChild(
	"group20",
	$group20
);
$row1 = new MooseElatedRow();
$group20->addChild(
	"row1",
	$row1
);

$big_large_button_fontsize = new MooseElatedField(
	"textsimple",
	"big_large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"big_large_button_fontsize",
	$big_large_button_fontsize
);

$big_large_button_fontweight = new MooseElatedField(
	"selectblanksimple",
	"big_large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"big_large_button_fontweight",
	$big_large_button_fontweight
);

$big_large_button_lineheight = new MooseElatedField(
	"textsimple",
	"big_large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"big_large_button_lineheight",
	$big_large_button_lineheight
);

$group24 = new MooseElatedGroup(
	esc_html__( "Icon Style", 'moose' ),
	esc_html__( "Define icon style", 'moose' )
);
$panel2->addChild(
	"group24",
	$group24
);
$row1 = new MooseElatedRow();
$group24->addChild(
	"row1",
	$row1
);

$big_large_button_icon_size = new MooseElatedField(
	"textsimple",
	"big_large_button_icon_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"big_large_button_icon_size",
	$big_large_button_icon_size
);

$big_large_button_padding = new MooseElatedField(
	"text",
	"big_large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'moose' ),
	esc_html__( "Define padding", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_padding",
	$big_large_button_padding
);

$big_large_button_border_radius = new MooseElatedField(
	"text",
	"big_large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "Define padding", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_border_radius",
	$big_large_button_border_radius
);

//Blockquote

$panel3 = new MooseElatedPanel(
	esc_html__( "Blockquote", 'moose' ),
	"blockquote_panel"
);
$elementsPage->addChild(
	"panel3",
	$panel3
);

$group1 = new MooseElatedGroup(
	esc_html__( "Blockquote Style", 'moose' ),
	esc_html__( "Define Blockquote style", 'moose' )
);
$panel3->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blockquote_color = new MooseElatedField(
	"colorsimple",
	"blockquote_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blockquote_font_color",
	$blockquote_color
);

$blockquote_font_size = new MooseElatedField(
	"textsimple",
	"blockquote_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blockquote_font_size",
	$blockquote_font_size
);

$blockquote_line_height = new MooseElatedField(
	"textsimple",
	"blockquote_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blockquote_line_height",
	$blockquote_line_height
);

$blockquote_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blockquote_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"blockquote_text_transform",
	$blockquote_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$blockquote_font_family = new MooseElatedField(
	"fontsimple",
	"blockquote_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blockquote_font_family",
	$blockquote_font_family
);

$blockquote_font_style = new MooseElatedField(
	"selectblanksimple",
	"blockquote_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blockquote_font_style",
	$blockquote_font_style
);

$blockquote_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blockquote_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blockquote_font_weight",
	$blockquote_font_weight
);

$blockquote_letter_spacing = new MooseElatedField(
	"textsimple",
	"blockquote_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blockquote_letter_spacing",
	$blockquote_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$blockquote_background_color = new MooseElatedField(
	"colorsimple",
	"blockquote_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blockquote_background_color",
	$blockquote_background_color
);

$blockquote_border_color = new MooseElatedField(
	"colorsimple",
	"blockquote_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blockquote_border_color",
	$blockquote_border_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Blockquote Icon Style", 'moose' ),
	esc_html__( "Define Blockquote Icon style", 'moose' )
);
$panel3->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$blockquote_quote_icon_color = new MooseElatedField(
	"colorsimple",
	"blockquote_quote_icon_color",
	"",
	esc_html__( "Quote Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blockquote_quote_icon_color",
	$blockquote_quote_icon_color
);

$blockquote_icon_type = new MooseElatedField(
	"selectblanksimple",
	"blockquote_icon_type",
	"",
	esc_html__( "Quote Icon", 'moose' ),
	"",
	moose_elated_get_blockquote_type()
);
$row1->addChild(
	"blockquote_icon_type",
	$blockquote_icon_type
);

//Content Menu

$panel25 = new MooseElatedPanel(
	esc_html__( "Content Menu", 'moose' ),
	"content_menu_panel"
);
$elementsPage->addChild(
	"panel25",
	$panel25
);

$group1 = new MooseElatedGroup(
	esc_html__( "Menu Icons Style", 'moose' ),
	esc_html__( "Define Icons style", 'moose' )
);
$panel25->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$content_menu_icon_color = new MooseElatedField(
	"colorsimple",
	"content_menu_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"content_menu_icon_color",
	$content_menu_icon_color
);
$content_menu_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"content_menu_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"content_menu_icon_hover_color",
	$content_menu_icon_hover_color
);
$content_menu_icon_size = new MooseElatedField(
	"textsimple",
	"content_menu_icon_size",
	"",
	esc_html__( "Icon Size", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"content_menu_icon_size",
	$content_menu_icon_size
);

$group2 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define Text style", 'moose' )
);
$panel25->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$content_menu_text_color = new MooseElatedField(
	"colorsimple",
	"content_menu_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"content_menu_text_color",
	$content_menu_text_color
);
$content_menu_text_hover_color = new MooseElatedField(
	"colorsimple",
	"content_menu_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"content_menu_text_hover_color",
	$content_menu_text_hover_color
);
$content_menu_text_fontsize = new MooseElatedField(
	"textsimple",
	"content_menu_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"content_menu_text_fontsize",
	$content_menu_text_fontsize
);
$content_menu_text_lineheight = new MooseElatedField(
	"textsimple",
	"content_menu_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"content_menu_text_lineheight",
	$content_menu_text_lineheight
);
$row2 = new MooseElatedRow();
$group2->addChild(
	"row2",
	$row2
);
$content_menu_text_texttransform = new MooseElatedField(
	"selectblanksimple",
	"content_menu_text_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"content_menu_text_texttransform",
	$content_menu_text_texttransform
);
$content_menu_text_google_fonts = new MooseElatedField(
	"fontsimple",
	"content_menu_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"content_menu_text_google_fonts",
	$content_menu_text_google_fonts
);
$content_menu_text_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"content_menu_text_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"content_menu_text_fontstyle",
	$h1_fontstyle
);
$content_menu_text_fontweight = new MooseElatedField(
	"selectblanksimple",
	"content_menu_text_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"content_menu_text_fontweight",
	$content_menu_text_fontweight
);
$row3 = new MooseElatedRow();
$group2->addChild(
	"row3",
	$row3
);
$content_menu_text_letterspacing = new MooseElatedField(
	"textsimple",
	"content_menu_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"content_menu_text_letterspacing",
	$content_menu_text_letterspacing
);

//Call to action

$panel31 = new MooseElatedPanel(
	esc_html__( "Call to Action", 'moose' ),
	"call_to_action_panel"
);
$elementsPage->addChild(
	"panel31",
	$panel31
);

$call_to_action_button_section = new MooseElatedTitle(
	"call_to_action_button_section",
	esc_html__( "Button", 'moose' )
);
$panel31->addChild(
	"call_to_action_button_section",
	$call_to_action_button_section
);

$group1 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text style", 'moose' )
);
$panel31->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$cto_action_bttn_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"cto_action_bttn_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"cto_action_bttn_title_google_fonts",
	$cto_action_bttn_title_google_fonts
);

$cto_action_bttn_title_fontsize = new MooseElatedField(
	"textsimple",
	"cto_action_bttn_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"cto_action_bttn_title_fontsize",
	$cto_action_bttn_title_fontsize
);

$cto_action_bttn_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"cto_action_bttn_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row1->addChild(
	"cto_action_bttn_title_fontstyle",
	$cto_action_bttn_title_fontstyle
);

$cto_action_bttn_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"cto_action_bttn_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"cto_action_bttn_title_fontweight",
	$cto_action_bttn_title_fontweight
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$cto_action_bttn_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"cto_action_bttn_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"cto_action_bttn_title_letter_spacing",
	$cto_action_bttn_title_letter_spacing
);

$cto_action_bttn_title_lineheight = new MooseElatedField(
	"textsimple",
	"cto_action_bttn_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"cto_action_bttn_title_lineheight",
	$cto_action_bttn_title_lineheight
);

$cto_action_bttn_title_color = new MooseElatedField(
	"colorsimple",
	"cto_action_bttn_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"cto_action_bttn_title_color",
	$cto_action_bttn_title_color
);

$cto_action_bttn_title_hovercolor = new MooseElatedField(
	"colorsimple",
	"cto_action_bttn_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"cto_action_bttn_title_hovercolor",
	$cto_action_bttn_title_hovercolor
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$cto_action_bttn_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"cto_action_bttn_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"cto_action_bttn_title_texttransform",
	$cto_action_bttn_title_texttransform
);

$group2 = new MooseElatedGroup(
	esc_html__( "Background", 'moose' ),
	esc_html__( "Define background", 'moose' )
);
$panel31->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$cto_action_bttn_backgroundcolor = new MooseElatedField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor",
	$cto_action_bttn_backgroundcolor
);

$cto_action_bttn_backgroundcolor_hover = new MooseElatedField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor_hover",
	$cto_action_bttn_backgroundcolor_hover
);

$group3 = new MooseElatedGroup(
	esc_html__( "Border Style", 'moose' ),
	esc_html__( "Define border style", 'moose' )
);
$panel31->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$cto_action_bttn_border_color = new MooseElatedField(
	"colorsimple",
	"cto_action_bttn_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"cto_action_bttn_border_color",
	$cto_action_bttn_border_color
);

$cto_action_bttn_border_hover_color = new MooseElatedField(
	"colorsimple",
	"cto_action_bttn_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"cto_action_bttn_border_hover_color",
	$cto_action_bttn_border_hover_color
);

$cto_action_bttn_border_width = new MooseElatedField(
	"textsimple",
	"cto_action_bttn_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"cto_action_bttn_border_width",
	$cto_action_bttn_border_width
);

$cto_action_bttn_border_radius = new MooseElatedField(
	"textsimple",
	"cto_action_bttn_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"cto_action_bttn_border_radius",
	$cto_action_bttn_border_radius
);

$cto_action_bttn_padding = new MooseElatedField(
	"text",
	"cto_action_bttn_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'moose' ),
	esc_html__( "Define padding", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel31->addChild(
	"cto_action_bttn_padding",
	$cto_action_bttn_padding
);

//Counters

$panel4 = new MooseElatedPanel(
	esc_html__( "Counters", 'moose' ),
	"counters_panel"
);
$elementsPage->addChild(
	"panel4",
	$panel4
);

$group1 = new MooseElatedGroup(
	esc_html__( "Counters Style", 'moose' ),
	esc_html__( "Define styles for Counters", 'moose' )
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

$counter_color = new MooseElatedField(
	"colorsimple",
	"counter_color",
	"",
	esc_html__( "Numeral Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counter_color",
	$counter_color
);

$counter_text_color = new MooseElatedField(
	"colorsimple",
	"counter_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counter_text_color",
	$counter_text_color
);

$counter_separator_color = new MooseElatedField(
	"colorsimple",
	"counter_separator_color",
	"",
	esc_html__( "Separator Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counter_separator_color",
	$counter_separator_color
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$counters_font_family = new MooseElatedField(
	"fontsimple",
	"counters_font_family",
	"-1",
	esc_html__( "Numeral Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"counters_font_family",
	$counters_font_family
);

$counters_font_size = new MooseElatedField(
	"textsimple",
	"counters_font_size",
	"",
	esc_html__( "Numeral Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"counters_font_size",
	$counters_font_size
);

$counters_fontweight = new MooseElatedField(
	"selectblanksimple",
	"counters_fontweight",
	"",
	esc_html__( "Numeral Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"counters_fontweight",
	$counters_fontweight
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$counters_text_font_size = new MooseElatedField(
	"textsimple",
	"counters_text_font_size",
	"",
	esc_html__( "Text Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"counters_text_font_size",
	$counters_text_font_size
);

$counters_text_fontweight = new MooseElatedField(
	"selectblanksimple",
	"counters_text_fontweight",
	"",
	esc_html__( "Text Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"counters_text_fontweight",
	$counters_text_fontweight
);

$counters_text_texttransform = new MooseElatedField(
	"selectblanksimple",
	"counters_text_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"counters_text_texttransform",
	$counters_text_texttransform
);

$counters_text_letterspacing = new MooseElatedField(
	"textsimple",
	"counters_text_letterspacing",
	"",
	esc_html__( "Text Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"counters_text_letterspacing",
	$counters_text_letterspacing
);

$group2 = new MooseElatedGroup(
	esc_html__( "Counters Title", 'moose' ),
	esc_html__( "Define Counter title style", 'moose' )
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

$counters_title_color = new MooseElatedField(
	"colorsimple",
	"counters_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counters_title_color",
	$counters_title_color
);

$counters_title_font_size = new MooseElatedField(
	"textsimple",
	"counters_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counters_title_font_size",
	$counters_title_font_size
);

$counters_title_line_height = new MooseElatedField(
	"textsimple",
	"counters_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counters_title_line_height",
	$counters_title_line_height
);

$counters_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"counters_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"counters_title_text_transform",
	$counters_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$counters_title_font_family = new MooseElatedField(
	"fontsimple",
	"counters_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"counters_title_font_family",
	$counters_title_font_family
);

$counters_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"counters_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"counters_title_font_style",
	$counters_title_font_style
);

$counters_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"counters_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"counters_title_font_weight",
	$counters_title_font_weight
);

$counters_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"counters_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"counters_title_letter_spacing",
	$counters_title_letter_spacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Counters Padding", 'moose' ),
	esc_html__( "Define padding for Counters", 'moose' )
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

$counters_padding_top = new MooseElatedField(
	"textsimple",
	"counters_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counters_padding_top",
	$counters_padding_top
);

$counters_padding_right = new MooseElatedField(
	"textsimple",
	"counters_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counters_padding_right",
	$counters_padding_right
);

$counters_padding_bottom = new MooseElatedField(
	"textsimple",
	"counters_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counters_padding_bottom",
	$counters_padding_bottom
);

$counters_padding_left = new MooseElatedField(
	"textsimple",
	"counters_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"counters_padding_left",
	$counters_padding_left
);

//Counters

$panel28 = new MooseElatedPanel(
	esc_html__( "Countdown", 'moose' ),
	"countdown_panel"
);
$elementsPage->addChild(
	"panel28",
	$panel28
);

$group1 = new MooseElatedGroup(
	esc_html__( "Countdown Amount", 'moose' ),
	esc_html__( "Define countdown amount style", 'moose' )
);
$panel28->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$countdown_amount_color = new MooseElatedField(
	"colorsimple",
	"countdown_amount_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_amount_color",
	$countdown_amount_color
);

$countdown_amount_font_size = new MooseElatedField(
	"textsimple",
	"countdown_amount_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_amount_font_size",
	$countdown_amount_font_size
);

$countdown_amount_line_height = new MooseElatedField(
	"textsimple",
	"countdown_amount_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_amount_line_height",
	$countdown_amount_line_height
);

$countdown_amount_text_transform = new MooseElatedField(
	"selectblanksimple",
	"countdown_amount_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"countdown_amount_text_transform",
	$countdown_amount_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$countdown_amount_font_family = new MooseElatedField(
	"fontsimple",
	"countdown_amount_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"countdown_amount_font_family",
	$countdown_amount_font_family
);

$countdown_amount_font_style = new MooseElatedField(
	"selectblanksimple",
	"countdown_amount_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"countdown_amount_font_style",
	$countdown_amount_font_style
);

$countdown_amount_font_weight = new MooseElatedField(
	"selectblanksimple",
	"countdown_amount_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"countdown_amount_font_weight",
	$countdown_amount_font_weight
);

$countdown_amount_letter_spacing = new MooseElatedField(
	"textsimple",
	"countdown_amount_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"countdown_amount_letter_spacing",
	$countdown_amount_letter_spacing
);

$group2 = new MooseElatedGroup(
	esc_html__( "Countdown Label", 'moose' ),
	esc_html__( "Define Countdown period style", 'moose' )
);
$panel28->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$countdown_label_color = new MooseElatedField(
	"colorsimple",
	"countdown_label_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_label_color",
	$countdown_label_color
);

$countdown_label_font_size = new MooseElatedField(
	"textsimple",
	"countdown_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_label_font_size",
	$countdown_label_font_size
);

$countdown_label_line_height = new MooseElatedField(
	"textsimple",
	"countdown_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_label_line_height",
	$countdown_label_line_height
);

$countdown_label_text_transform = new MooseElatedField(
	"selectblanksimple",
	"countdown_label_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"countdown_label_text_transform",
	$countdown_label_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$countdown_label_font_family = new MooseElatedField(
	"fontsimple",
	"countdown_label_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"countdown_label_font_family",
	$countdown_label_font_family
);

$countdown_label_font_style = new MooseElatedField(
	"selectblanksimple",
	"countdown_label_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"countdown_label_font_style",
	$countdown_label_font_style
);

$countdown_label_font_weight = new MooseElatedField(
	"selectblanksimple",
	"countdown_label_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"countdown_label_font_weight",
	$countdown_label_font_weight
);

$countdown_label_letter_spacing = new MooseElatedField(
	"textsimple",
	"countdown_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"countdown_label_letter_spacing",
	$countdown_label_letter_spacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Countdown Separator", 'moose' ),
	esc_html__( 'Define styles for separator in countdown shortcode', 'moose' )
);
$panel28->addChild(
	"group3",
	$group3
);
$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$countdown_separator_color = new MooseElatedField(
	"colorsimple",
	"countdown_separator_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_separator_color",
	$countdown_separator_color
);

$countdown_separator_transparency = new MooseElatedField(
	"textsimple",
	"countdown_separator_transparency",
	"",
	esc_html__( "Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_separator_transparency",
	$countdown_separator_transparency
);

$countdown_separator_thickness = new MooseElatedField(
	"textsimple",
	"countdown_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_separator_thickness",
	$countdown_separator_thickness
);

$countdown_separator_width = new MooseElatedField(
	"textsimple",
	"countdown_separator_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"countdown_separator_width",
	$countdown_separator_width
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$countdown_separator_topmargin = new MooseElatedField(
	"textsimple",
	"countdown_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"countdown_separator_topmargin",
	$countdown_separator_topmargin
);

$countdown_separator_bottommargin = new MooseElatedField(
	"textsimple",
	"countdown_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"countdown_separator_bottommargin",
	$countdown_separator_bottommargin
);

//Expandable Section

$panel5 = new MooseElatedPanel(
	esc_html__( "Expandable Section", 'moose' ),
	"expandable_section_panel"
);
$elementsPage->addChild(
	"panel5",
	$panel5
);

$group1 = new MooseElatedGroup(
	esc_html__( "Title Style", 'moose' ),
	esc_html__( "Define Expandable Section title style", 'moose' )
);
$panel5->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$expandable_label_color = new MooseElatedField(
	"colorsimple",
	"expandable_label_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"expandable_label_color",
	$expandable_label_color
);

$expandable_label_font_size = new MooseElatedField(
	"textsimple",
	"expandable_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"expandable_label_font_size",
	$expandable_label_font_size
);

$expandable_label_text_transform = new MooseElatedField(
	"selectblanksimple",
	"expandable_label_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"expandable_label_text_transform",
	$expandable_label_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$expandable_label_font_family = new MooseElatedField(
	"fontsimple",
	"expandable_label_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"expandable_label_font_family",
	$expandable_label_font_family
);

$expandable_label_font_weight = new MooseElatedField(
	"selectblanksimple",
	"expandable_label_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"expandable_label_font_weight",
	$expandable_label_font_weight
);

$expandable_label_letter_spacing = new MooseElatedField(
	"textsimple",
	"expandable_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"expandable_label_letter_spacing",
	$expandable_label_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$expandable_background_color = new MooseElatedField(
	"colorsimple",
	"expandable_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"expandable_background_color",
	$expandable_background_color
);

$expandable_label_hover_color = new MooseElatedField(
	"colorsimple",
	"expandable_label_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"expandable_label_hover_color",
	$expandable_label_hover_color
);

//Full Screen Sections

$panel51 = new MooseElatedPanel(
	esc_html__( "Full Screen Sections", 'moose' ),
	"expandable_section_panel"
);
$elementsPage->addChild(
	"panel51",
	$panel51
);
$full_screen_sections_on_small_screens = new MooseElatedField(
	"yesno",
	"full_screen_sections_on_small_screens",
	"no",
	esc_html__( "Enable Full Screen Sections on Small Screens", 'moose' ),
	esc_html__( "Enabling this option will turn on Full Screen Sections on small screens", 'moose' )
);
$panel51->addChild(
	"full_screen_sections_on_small_screens",
	$full_screen_sections_on_small_screens
);

//Highlight

$panel17 = new MooseElatedPanel(
	esc_html__( "Highlight", 'moose' ),
	"highlight_panel"
);
$elementsPage->addChild(
	"panel17",
	$panel17
);
$highlight_color = new MooseElatedField(
	"color",
	"highlight_color",
	"",
	esc_html__( "Highlight Color", 'moose' ),
	esc_html__( "Set color for Highlight", 'moose' )
);
$panel17->addChild(
	"highlight_color",
	$highlight_color
);

//Horizontal Progress Bars

$panel6 = new MooseElatedPanel(
	esc_html__( "Horizontal Progress Bars", 'moose' ),
	"horizontal_progress_bars_panel"
);
$elementsPage->addChild(
	"panel6",
	$panel6
);

$group1 = new MooseElatedGroup(
	esc_html__( "Progress Bar Title Style", 'moose' ),
	esc_html__( "Define styles for Horizontal Progress Bars title", 'moose' )
);
$panel6->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_font_size = new MooseElatedField(
	"textsimple",
	"progress_bar_horizontal_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_horizontal_font_size",
	$progress_bar_horizontal_font_size
);

$progress_bar_horizontal_color = new MooseElatedField(
	"colorsimple",
	"progress_bar_horizontal_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_horizontal_color",
	$progress_bar_horizontal_color
);

$progress_bar_horizontal_line_height = new MooseElatedField(
	"textsimple",
	"progress_bar_horizontal_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_horizontal_line_height",
	$progress_bar_horizontal_line_height
);

$progress_bar_horizontal_font_family = new MooseElatedField(
	"fontsimple",
	"progress_bar_horizontal_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_horizontal_font_family",
	$progress_bar_horizontal_font_family
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_font_style = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"progress_bar_horizontal_font_style",
	$progress_bar_horizontal_font_style
);

$progress_bar_horizontal_font_weight = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"progress_bar_horizontal_font_weight",
	$progress_bar_horizontal_font_weight
);

$progress_bar_horizontal_letter_spacing = new MooseElatedField(
	"textsimple",
	"progress_bar_horizontal_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"progress_bar_horizontal_letter_spacing",
	$progress_bar_horizontal_letter_spacing
);

$progress_bar_horizontal_text_transform = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"progress_bar_horizontal_text_transform",
	$progress_bar_horizontal_text_transform
);

$group2 = new MooseElatedGroup(
	esc_html__( "Progress Bar Percentage Style", 'moose' ),
	esc_html__( "Define styles for Horizontal Progress Bars percentage", 'moose' )
);
$panel6->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_percentage_font_size = new MooseElatedField(
	"textsimple",
	"progress_bar_horizontal_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_size",
	$progress_bar_horizontal_percentage_font_size
);

$progress_bar_horizontal_percentage_color = new MooseElatedField(
	"colorsimple",
	"progress_bar_horizontal_percentage_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_color",
	$progress_bar_horizontal_percentage_color
);

$progress_bar_horizontal_percentage_line_height = new MooseElatedField(
	"textsimple",
	"progress_bar_horizontal_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_line_height",
	$progress_bar_horizontal_percentage_line_height
);

$progress_bar_horizontal_percentage_font_family = new MooseElatedField(
	"fontsimple",
	"progress_bar_horizontal_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_family",
	$progress_bar_horizontal_percentage_font_family
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_percentage_font_style = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_style",
	$progress_bar_horizontal_percentage_font_style
);

$progress_bar_horizontal_percentage_font_weight = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_weight",
	$progress_bar_horizontal_percentage_font_weight
);

$progress_bar_horizontal_percentage_letter_spacing = new MooseElatedField(
	"textsimple",
	"progress_bar_horizontal_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_letter_spacing",
	$progress_bar_horizontal_percentage_letter_spacing
);

$progress_bar_horizontal_percentage_text_transform = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"progress_bar_horizontal_percentage_text_transform",
	$progress_bar_horizontal_percentage_text_transform
);
//Vertical Progress Bars

$panel73 = new MooseElatedPanel(
	esc_html__( "Vertical Progress Bars", 'moose' ),
	"vertical_progress_bars_panel"
);
$elementsPage->addChild(
	"panel73",
	$panel73
);

$group1 = new MooseElatedGroup(
	esc_html__( "Progress Bar Title Style", 'moose' ),
	esc_html__( "Define styles for Vertical Progress Bars title", 'moose' )
);
$panel73->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_font_size = new MooseElatedField(
	"textsimple",
	"progress_bar_vertical_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_vertical_font_size",
	$progress_bar_vertical_font_size
);

$progress_bar_vertical_color = new MooseElatedField(
	"colorsimple",
	"progress_bar_vertical_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_vertical_color",
	$progress_bar_vertical_color
);

$progress_bar_vertical_line_height = new MooseElatedField(
	"textsimple",
	"progress_bar_vertical_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_vertical_line_height",
	$progress_bar_vertical_line_height
);

$progress_bar_vertical_font_family = new MooseElatedField(
	"fontsimple",
	"progress_bar_vertical_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_vertical_font_family",
	$progress_bar_vertical_font_family
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_font_style = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_vertical_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"progress_bar_vertical_font_style",
	$progress_bar_vertical_font_style
);

$progress_bar_vertical_font_weight = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_vertical_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"progress_bar_vertical_font_weight",
	$progress_bar_vertical_font_weight
);

$progress_bar_vertical_letter_spacing = new MooseElatedField(
	"textsimple",
	"progress_bar_vertical_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"progress_bar_vertical_letter_spacing",
	$progress_bar_vertical_letter_spacing
);

$progress_bar_vertical_text_transform = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_vertical_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"progress_bar_vertical_text_transform",
	$progress_bar_vertical_text_transform
);

$group2 = new MooseElatedGroup(
	esc_html__( "Progress Bar Percentage Style", 'moose' ),
	esc_html__( "Define styles for Vertical Progress Bars percentage", 'moose' )
);
$panel73->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_percentage_font_size = new MooseElatedField(
	"textsimple",
	"progress_bar_vertical_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_size",
	$progress_bar_vertical_percentage_font_size
);

$progress_bar_vertical_percentage_color = new MooseElatedField(
	"colorsimple",
	"progress_bar_vertical_percentage_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_color",
	$progress_bar_vertical_percentage_color
);

$progress_bar_vertical_percentage_line_height = new MooseElatedField(
	"textsimple",
	"progress_bar_vertical_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_line_height",
	$progress_bar_vertical_percentage_line_height
);

$progress_bar_vertical_percentage_font_family = new MooseElatedField(
	"fontsimple",
	"progress_bar_vertical_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_family",
	$progress_bar_vertical_percentage_font_family
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_percentage_font_style = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_style",
	$progress_bar_vertical_percentage_font_style
);

$progress_bar_vertical_percentage_font_weight = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_weight",
	$progress_bar_vertical_percentage_font_weight
);

$progress_bar_vertical_percentage_letter_spacing = new MooseElatedField(
	"textsimple",
	"progress_bar_vertical_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_letter_spacing",
	$progress_bar_vertical_percentage_letter_spacing
);

$progress_bar_vertical_percentage_text_transform = new MooseElatedField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"progress_bar_vertical_percentage_text_transform",
	$progress_bar_vertical_percentage_text_transform
);

//Vertical Split Slider
$vss_panel = new MooseElatedPanel(
	esc_html__( "Vertical Split Slider", 'moose' ),
	"vss_panel"
);
$elementsPage->addChild(
	"vss_panel",
	$vss_panel
);

$group1 = new MooseElatedGroup(
	esc_html__( "Navigation Style", 'moose' ),
	esc_html__( "Define style for navigation bullets", 'moose' )
);
$vss_panel->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$vss_navigation_inactive_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_inactive_color",
	"",
	esc_html__( "Navigation Color", 'moose' ),
	esc_html__( "Define color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_inactive_color",
	$vss_navigation_inactive_color
);

$vss_navigation_inactive_border_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_inactive_border_color",
	"",
	esc_html__( "Navigation Border Color", 'moose' ),
	esc_html__( "Define border color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_inactive_border_color",
	$vss_navigation_inactive_border_color
);

$vss_navigation_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_color",
	"",
	esc_html__( "Navigation Active Color", 'moose' ),
	esc_html__( "Define active color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_color",
	$vss_navigation_color
);

$vss_navigation_border_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_border_color",
	"",
	esc_html__( "Navigation Active Border Color", 'moose' ),
	esc_html__( "Define active border color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_border_color",
	$vss_navigation_border_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Navigation Light Style", 'moose' ),
	esc_html__( "Define style for light navigation bullets", 'moose' )
);
$vss_panel->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$vss_navigation_light_inactive_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_light_inactive_color",
	"",
	esc_html__( "Navigation Color", 'moose' ),
	esc_html__( "Define color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_light_inactive_color",
	$vss_navigation_light_inactive_color
);

$vss_navigation_light_inactive_border_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_light_inactive_border_color",
	"",
	esc_html__( "Navigation Border Color", 'moose' ),
	esc_html__( "Define border color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_light_inactive_border_color",
	$vss_navigation_light_inactive_border_color
);

$vss_navigation_light_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_light_color",
	"",
	esc_html__( "Navigation Active Color", 'moose' ),
	esc_html__( "Define active color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_light_color",
	$vss_navigation_light_color
);

$vss_navigation_light_border_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_light_border_color",
	"",
	esc_html__( "Navigation Active Border Color", 'moose' ),
	esc_html__( "Define active border color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_light_border_color",
	$vss_navigation_light_border_color
);

$group3 = new MooseElatedGroup(
	esc_html__( "Navigation Dark Style", 'moose' ),
	esc_html__( "Define style for dark navigation bullets", 'moose' )
);
$vss_panel->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$vss_navigation_dark_inactive_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_dark_inactive_color",
	"",
	esc_html__( "Navigation Color", 'moose' ),
	esc_html__( "Define color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_dark_inactive_color",
	$vss_navigation_dark_inactive_color
);

$vss_navigation_dark_inactive_border_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_dark_inactive_border_color",
	"",
	esc_html__( "Navigation Border Color", 'moose' ),
	esc_html__( "Define border color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_dark_inactive_border_color",
	$vss_navigation_dark_inactive_border_color
);

$vss_navigation_dark_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_dark_color",
	"",
	esc_html__( "Navigation Active Color", 'moose' ),
	esc_html__( "Define active color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_dark_color",
	$vss_navigation_dark_color
);

$vss_navigation_dark_border_color = new MooseElatedField(
	"colorsimple",
	"vss_navigation_dark_border_color",
	"",
	esc_html__( "Navigation Active Border Color", 'moose' ),
	esc_html__( "Define active border color for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_dark_border_color",
	$vss_navigation_dark_border_color
);

$group4 = new MooseElatedGroup(
	esc_html__( "Navigation Size", 'moose' ),
	esc_html__( "Define size for navigation dots", 'moose' )
);
$vss_panel->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$vss_navigation_size = new MooseElatedField(
	"textsimple",
	"vss_navigation_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "Define size for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_size",
	$vss_navigation_size
);

$vss_navigation_active_size = new MooseElatedField(
	"textsimple",
	"vss_navigation_active_size",
	"",
	esc_html__( "Active Size (px)", 'moose' ),
	esc_html__( "Define active size for navigation dots", 'moose' )
);
$row1->addChild(
	"vss_navigation_active_size",
	$vss_navigation_active_size
);

$vss_navigation_spacing_from_edge = new MooseElatedField(
	"text",
	"vss_navigation_spacing_from_edge",
	"",
	esc_html__( "Navigation Position (px)", 'moose' ),
	esc_html__( "Define position of navigation from right/left edge of slider", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$vss_panel->addChild(
	"vss_navigation_spacing_from_edge",
	$vss_navigation_spacing_from_edge
);

$vss_left_panel_size = new MooseElatedField(
	"text",
	"vss_left_panel_size",
	"",
	esc_html__( "Left Slide Panel size (%)", 'moose' ),
	esc_html__( "Define size for left slide panel. Note that sum of left and right slide panel should be 100.", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$vss_panel->addChild(
	"vss_left_panel_size",
	$vss_left_panel_size
);

$vss_right_panel_size = new MooseElatedField(
	"text",
	"vss_right_panel_size",
	"",
	esc_html__( "Right Slide Panel size (%)", 'moose' ),
	esc_html__( "Define size for right slide panel. Note that sum of left and right slide panel should be 100.", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$vss_panel->addChild(
	"vss_right_panel_size",
	$vss_right_panel_size
);

//Icon

$panel19 = new MooseElatedPanel(
	esc_html__( "Icons", 'moose' ),
	"icons_panel"
);
$elementsPage->addChild(
	"panel19",
	$panel19
);

$group1 = new MooseElatedGroup(
	esc_html__( "Normal Icons", 'moose' ),
	esc_html__( "Define Normal Icons style", 'moose' )
);
$panel19->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_color_normal = new MooseElatedField(
	"colorsimple",
	"icon_color_normal",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_color_normal",
	$icon_color_normal
);

$icon_hover_color_normal = new MooseElatedField(
	"colorsimple",
	"icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_hover_color_normal",
	$icon_hover_color_normal
);

$group2 = new MooseElatedGroup(
	esc_html__( "Icons Circle/Square", 'moose' ),
	esc_html__( "Define circle/square Icons style", 'moose' )
);
$panel19->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_color = new MooseElatedField(
	"colorsimple",
	"icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_color",
	$icon_color
);

$icon_hover_color = new MooseElatedField(
	"colorsimple",
	"icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_hover_color",
	$icon_hover_color
);

$icon_background_color = new MooseElatedField(
	"colorsimple",
	"icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_background_color",
	$icon_background_color
);

$icon_hover_background_color = new MooseElatedField(
	"colorsimple",
	"icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_hover_background_color",
	$icon_hover_background_color
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_border_width = new MooseElatedField(
	"textsimple",
	"icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"icon_border_width",
	$icon_border_width
);

$icon_border_color = new MooseElatedField(
	"colorsimple",
	"icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"icon_border_color",
	$icon_border_color
);

$icon_hover_border_color = new MooseElatedField(
	"colorsimple",
	"icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"icon_hover_border_color",
	$icon_hover_border_color
);

$icon_box_shadows = new MooseElatedField(
	'yesno',
	'icon_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'moose' ),
	esc_html__( 'Enabling this option will show icon shadow', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_icon_box_shadows_container'
	)
);
$panel19->addChild(
	'icon_box_shadows',
	$icon_box_shadows
);

$icon_box_shadows_container = new MooseElatedContainer(
	'icon_box_shadows_container',
	'icon_box_shadows',
	'no'
);
$panel19->addChild(
	'icon_box_shadows_container',
	$icon_box_shadows_container
);

$group3 = new MooseElatedGroup(
	esc_html__( 'Icon Shadows', 'moose' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'moose' )
);
$icon_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new MooseElatedRow();
$group3->addChild(
	'row3',
	$row3
);

$icon_box_shadow_horizontal_shadow = new MooseElatedField(
	'textsimple',
	'icon_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'moose' )
);
$row3->addChild(
	'icon_box_shadow_horizontal_shadow',
	$icon_box_shadow_horizontal_shadow
);

$icon_box_shadow_vertical_shadow = new MooseElatedField(
	'textsimple',
	'icon_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'moose' )
);
$row3->addChild(
	'icon_box_shadow_vertical_shadow',
	$icon_box_shadow_vertical_shadow
);

$icon_box_shadow_blur_distance = new MooseElatedField(
	'textsimple',
	'icon_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'moose' )
);
$row3->addChild(
	'icon_box_shadow_blur_distance',
	$icon_box_shadow_blur_distance
);

$icon_box_shadow_shadow_size = new MooseElatedField(
	'textsimple',
	'icon_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'moose' )
);
$row3->addChild(
	'icon_box_shadow_shadow_size',
	$icon_box_shadow_shadow_size
);

$row4 = new MooseElatedRow( true );
$group3->addChild(
	'row4',
	$row4
);

$icon_box_shadow_shadow_color = new MooseElatedField(
	'colorsimple',
	'icon_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'moose' )
);
$row4->addChild(
	'icon_box_shadow_shadow_color',
	$icon_box_shadow_shadow_color
);

$panel21 = new MooseElatedPanel(
	esc_html__( "Icon With Text", 'moose' ),
	"icon_with_text_panel"
);
$elementsPage->addChild(
	"panel21",
	$panel21
);

$group1 = new MooseElatedGroup(
	esc_html__( "Normal Icons", 'moose' ),
	esc_html__( "Define Normal Icons style", 'moose' )
);
$panel21->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color_normal = new MooseElatedField(
	"colorsimple",
	"icon_with_text_icon_color_normal",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_with_text_icon_color_normal",
	$icon_with_text_icon_color_normal
);

$icon_with_text_icon_hover_color_normal = new MooseElatedField(
	"colorsimple",
	"icon_with_text_icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color_normal",
	$icon_with_text_icon_hover_color_normal
);

$group2 = new MooseElatedGroup(
	esc_html__( "Icons Circle/Square", 'moose' ),
	esc_html__( "Define circle/square Icons style", 'moose' )
);
$panel21->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color = new MooseElatedField(
	"colorsimple",
	"icon_with_text_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_with_text_icon_color",
	$icon_with_text_icon_color
);

$icon_with_text_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"icon_with_text_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color",
	$icon_with_text_icon_hover_color
);

$icon_with_text_icon_background_color = new MooseElatedField(
	"colorsimple",
	"icon_with_text_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_with_text_icon_background_color",
	$icon_with_text_icon_background_color
);

$icon_with_text_icon_hover_background_color = new MooseElatedField(
	"colorsimple",
	"icon_with_text_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"icon_with_text_icon_hover_background_color",
	$icon_with_text_icon_hover_background_color
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_with_text_icon_border_width = new MooseElatedField(
	"textsimple",
	"icon_with_text_icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"icon_with_text_icon_border_width",
	$icon_with_text_icon_border_width
);

$icon_with_text_icon_border_color = new MooseElatedField(
	"colorsimple",
	"icon_with_text_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"icon_with_text_icon_border_color",
	$icon_with_text_icon_border_color
);

$icon_with_text_icon_hover_border_color = new MooseElatedField(
	"colorsimple",
	"icon_with_text_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"icon_with_text_icon_hover_border_color",
	$icon_with_text_icon_hover_border_color
);

$icon_with_text_box_shadows = new MooseElatedField(
	'yesno',
	'icon_with_text_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'moose' ),
	esc_html__( 'Enabling this option will show icon shadow', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_icon_with_text_box_shadows_container'
	)
);
$panel21->addChild(
	'icon_with_text_box_shadows',
	$icon_with_text_box_shadows
);

$icon_with_text_box_shadows_container = new MooseElatedContainer(
	'icon_with_text_box_shadows_container',
	'icon_with_text_box_shadows',
	'no'
);
$panel21->addChild(
	'icon_with_text_box_shadows_container',
	$icon_with_text_box_shadows_container
);

$group3 = new MooseElatedGroup(
	esc_html__( 'Icon Shadows', 'moose' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'moose' )
);
$icon_with_text_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new MooseElatedRow();
$group3->addChild(
	'row3',
	$row3
);

$icon_with_text_box_shadow_horizontal_shadow = new MooseElatedField(
	'textsimple',
	'icon_with_text_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'moose' )
);
$row3->addChild(
	'icon_with_text_box_shadow_horizontal_shadow',
	$icon_with_text_box_shadow_horizontal_shadow
);

$icon_with_text_box_shadow_vertical_shadow = new MooseElatedField(
	'textsimple',
	'icon_with_text_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'moose' )
);
$row3->addChild(
	'icon_with_text_box_shadow_vertical_shadow',
	$icon_with_text_box_shadow_vertical_shadow
);

$icon_with_text_box_shadow_blur_distance = new MooseElatedField(
	'textsimple',
	'icon_with_text_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'moose' )
);
$row3->addChild(
	'icon_with_text_box_shadow_blur_distance',
	$icon_with_text_box_shadow_blur_distance
);

$icon_with_text_box_shadow_shadow_size = new MooseElatedField(
	'textsimple',
	'icon_with_text_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'moose' )
);
$row3->addChild(
	'icon_with_text_box_shadow_shadow_size',
	$icon_with_text_box_shadow_shadow_size
);

$row4 = new MooseElatedRow( true );
$group3->addChild(
	'row4',
	$row4
);

$icon_with_text_box_shadow_shadow_color = new MooseElatedField(
	'colorsimple',
	'icon_with_text_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'moose' )
);
$row4->addChild(
	'icon_with_text_box_shadow_shadow_color',
	$icon_with_text_box_shadow_shadow_color
);

//Input Fields

$panel7 = new MooseElatedPanel(
	esc_html__( "Input Fields", 'moose' ),
	"input_fields_panel"
);
$elementsPage->addChild(
	"panel7",
	$panel7
);

$group1 = new MooseElatedGroup(
	esc_html__( "Input Fields Style", 'moose' ),
	esc_html__( "Define styles for Input Fields", 'moose' )
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

$input_background_color = new MooseElatedField(
	"colorsimple",
	"input_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"input_background_color",
	$input_background_color
);

$input_focus_background_color = new MooseElatedField(
	"colorsimple",
	"input_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"input_focus_background_color",
	$input_focus_background_color
);

$input_border_color = new MooseElatedField(
	"colorsimple",
	"input_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"input_border_color",
	$input_border_color
);

$input_focus_border_color = new MooseElatedField(
	"colorsimple",
	"input_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"input_focus_border_color",
	$input_focus_border_color
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$input_text_color = new MooseElatedField(
	"colorsimple",
	"input_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"input_text_color",
	$input_text_color
);

$input_focus_text_color = new MooseElatedField(
	"colorsimple",
	"input_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"input_focus_text_color",
	$input_focus_text_color
);

//Interactive Banners

$panel71 = new MooseElatedPanel(
	esc_html__( "Interactive Banners", 'moose' ),
	"interactive_banners_panel"
);
$elementsPage->addChild(
	"panel71",
	$panel71
);

$group1 = new MooseElatedGroup(
	esc_html__( "Interactive Banners Style", 'moose' ),
	esc_html__( "Define styles for Interactive Banners", 'moose' )
);
$panel71->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$interactive_banners_background_color = new MooseElatedField(
	"colorsimple",
	"interactive_banners_background_color",
	"",
	esc_html__( "Image Overlay Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_background_color",
	$interactive_banners_background_color
);

$interactive_banners_background_transparency = new MooseElatedField(
	"textsimple",
	"interactive_banners_background_transparency",
	"",
	esc_html__( "Image Overlay Color Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_background_transparency",
	$interactive_banners_background_transparency
);

$interactive_banners_hover_background_color = new MooseElatedField(
	"colorsimple",
	"interactive_banners_hover_background_color",
	"",
	esc_html__( "Image Overlay Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_hover_background_color",
	$interactive_banners_hover_background_color
);

$interactive_banners_hover_background_transparency = new MooseElatedField(
	"textsimple",
	"interactive_banners_hover_background_transparency",
	"",
	esc_html__( "Image Overlay Hover Color Transparency", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_hover_background_transparency",
	$interactive_banners_hover_background_transparency
);

$group2 = new MooseElatedGroup(
	esc_html__( "Interactive Banners Padding", 'moose' ),
	esc_html__( "Define interactive banners padding", 'moose' )
);
$panel71->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow( true );
$group2->addChild(
	"row1",
	$row1
);

$interactive_banners_padding_left = new MooseElatedField(
	"textsimple",
	"interactive_banners_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_padding_left",
	$interactive_banners_padding_left
);

$interactive_banners_padding_right = new MooseElatedField(
	"textsimple",
	"interactive_banners_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_padding_right",
	$interactive_banners_padding_right
);

$interactive_banners_padding_top = new MooseElatedField(
	"textsimple",
	"interactive_banners_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_padding_top",
	$interactive_banners_padding_top
);

$interactive_banners_padding_bottom = new MooseElatedField(
	"textsimple",
	"interactive_banners_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_padding_bottom",
	$interactive_banners_padding_bottom
);

$group3 = new MooseElatedGroup(
	esc_html__( "Interactive Banners Title", 'moose' ),
	esc_html__( "Define interactive banners title style", 'moose' )
);
$panel71->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$interactive_banners_title_color = new MooseElatedField(
	"colorsimple",
	"interactive_banners_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_title_color",
	$interactive_banners_title_color
);

$interactive_banners_title_font_size = new MooseElatedField(
	"textsimple",
	"interactive_banners_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_title_font_size",
	$interactive_banners_title_font_size
);

$interactive_banners_title_line_height = new MooseElatedField(
	"textsimple",
	"interactive_banners_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"interactive_banners_title_line_height",
	$interactive_banners_title_line_height
);

$interactive_banners_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"interactive_banners_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"interactive_banners_title_text_transform",
	$interactive_banners_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$interactive_banners_title_font_family = new MooseElatedField(
	"fontsimple",
	"interactive_banners_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"interactive_banners_title_font_family",
	$interactive_banners_title_font_family
);

$interactive_banners_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"interactive_banners_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"interactive_banners_title_font_style",
	$interactive_banners_title_font_style
);

$interactive_banners_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"interactive_banners_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"interactive_banners_title_font_weight",
	$interactive_banners_title_font_weight
);

$interactive_banners_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"interactive_banners_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"interactive_banners_title_letter_spacing",
	$interactive_banners_title_letter_spacing
);

//Lists

$panel72 = new MooseElatedPanel(
	esc_html__( "Lists", 'moose' ),
	"lists"
);
$elementsPage->addChild(
	"panel72",
	$panel72
);

$group1 = new MooseElatedGroup(
	esc_html__( "Unordered List Style", 'moose' ),
	esc_html__( "Define styles for Unordered Lists", 'moose' )
);
$panel72->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$list_item_color = new MooseElatedField(
	"colorsimple",
	"list_item_color",
	"",
	esc_html__( "List Bullet Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"list_item_color",
	$list_item_color
);
$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$list_color = new MooseElatedField(
	"colorsimple",
	"list_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"list_color",
	$list_color
);

$list_fontsize = new MooseElatedField(
	"textsimple",
	"list_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"list_fontsize",
	$list_fontsize
);

$list_lineheight = new MooseElatedField(
	"textsimple",
	"list_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"list_lineheight",
	$list_lineheight
);

$list_texttransform = new MooseElatedField(
	"selectblanksimple",
	"list_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"list_texttransform",
	$list_texttransform
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);
$list_google_fonts = new MooseElatedField(
	"fontsimple",
	"list_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"list_google_fonts",
	$list_google_fonts
);

$list_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"list_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"list_fontstyle",
	$list_fontstyle
);

$list_fontweight = new MooseElatedField(
	"selectblanksimple",
	"list_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"list_fontweight",
	$list_fontweight
);

$list_letter_spacing = new MooseElatedField(
	"textsimple",
	"list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"list_letter_spacing",
	$list_letter_spacing
);
$row4 = new MooseElatedRow( true );
$group1->addChild(
	"row4",
	$row4
);
$list_bottom_margin = new MooseElatedField(
	"textsimple",
	"list_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"list_bottom_margin",
	$list_bottom_margin
);

$group2 = new MooseElatedGroup(
	esc_html__( "Ordered List Style", 'moose' ),
	esc_html__( "Define styles for Ordered lists", 'moose' )
);
$panel72->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$list_ordered_item_color = new MooseElatedField(
	"colorsimple",
	"list_ordered_item_color",
	"",
	esc_html__( "List Number Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"list_ordered_item_color",
	$list_ordered_item_color
);
$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$list_ordered_color = new MooseElatedField(
	"colorsimple",
	"list_ordered_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"list_ordered_color",
	$list_ordered_color
);

$list_ordered_fontsize = new MooseElatedField(
	"textsimple",
	"list_ordered_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"list_ordered_fontsize",
	$list_ordered_fontsize
);

$list_ordered_lineheight = new MooseElatedField(
	"textsimple",
	"list_ordered_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"list_ordered_lineheight",
	$list_ordered_lineheight
);

$list_ordered_texttransform = new MooseElatedField(
	"selectblanksimple",
	"list_ordered_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"list_ordered_texttransform",
	$list_ordered_texttransform
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);
$list_ordered_google_fonts = new MooseElatedField(
	"fontsimple",
	"list_ordered_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"list_ordered_google_fonts",
	$list_ordered_google_fonts
);

$list_ordered_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"list_ordered_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"list_ordered_fontstyle",
	$list_ordered_fontstyle
);

$list_ordered_fontweight = new MooseElatedField(
	"selectblanksimple",
	"list_ordered_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"list_ordered_fontweight",
	$list_ordered_fontweight
);

$list_ordered_letter_spacing = new MooseElatedField(
	"textsimple",
	"list_ordered_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"list_ordered_letter_spacing",
	$list_ordered_letter_spacing
);
$row4 = new MooseElatedRow( true );
$group2->addChild(
	"row4",
	$row4
);
$list_ordered_bottom_margin = new MooseElatedField(
	"textsimple",
	"list_ordered_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"list_ordered_bottom_margin",
	$list_ordered_bottom_margin
);

//Masonry Gallery
$panel30 = new MooseElatedPanel(
	esc_html__( 'Masonry Gallery', 'moose' ),
	'masonry_gallery_panel'
);
$elementsPage->addChild(
	'panel30',
	$panel30
);

$masonry_gallery_space = new MooseElatedField(
	"text",
	"masonry_gallery_space",
	"",
	esc_html__( "Space between Items (px)", 'moose' ),
	esc_html__( "Define a space between items in the Masonry Gallery", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel30->addChild(
	"masonry_gallery_space",
	$masonry_gallery_space
);

//Square Big
$masonry_gallery_square_big_title = new MooseElatedTitle(
	'masonry_gallery_square_big_title',
	esc_html__( 'Square Big', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_title',
	$masonry_gallery_square_big_title
);

$masonry_gallery_square_big_title_group = new MooseElatedGroup(
	esc_html__( 'Title Style', 'moose' ),
	esc_html__( 'Define Square Big Title Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_title_group',
	$masonry_gallery_square_big_title_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_title_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_title_color',
	'',
	esc_html__( 'Title Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_color',
	$masonry_gallery_square_big_title_color
);

$masonry_gallery_square_big_title_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_font_size',
	$masonry_gallery_square_big_title_font_size
);

$masonry_gallery_square_big_title_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_line_height',
	$masonry_gallery_square_big_title_line_height
);

$masonry_gallery_square_big_title_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_square_big_title_text_transform',
	$masonry_gallery_square_big_title_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_square_big_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_big_title_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_square_big_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_big_title_font_family',
	$masonry_gallery_square_big_title_font_family
);

$masonry_gallery_square_big_title_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_title_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_square_big_title_font_style',
	$masonry_gallery_square_big_title_font_style
);

$masonry_gallery_square_big_title_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_square_big_title_font_weight',
	$masonry_gallery_square_big_title_font_weight
);

$masonry_gallery_square_big_title_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_big_title_letter_spacing',
	$masonry_gallery_square_big_title_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_square_big_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_square_big_title_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_big_title_margin_bottom',
	$masonry_gallery_square_big_title_margin_bottom
);

$masonry_gallery_square_big_subtitle_group = new MooseElatedGroup(
	esc_html__( 'Subtitle Style', 'moose' ),
	esc_html__( 'Define Square Big Subtitle Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_subtitle_group',
	$masonry_gallery_square_big_subtitle_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_subtitle_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_subtitle_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_subtitle_color',
	'',
	esc_html__( 'Subtitle Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_subtitle_color',
	$masonry_gallery_square_big_subtitle_color
);

$masonry_gallery_square_big_subtitle_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_subtitle_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_subtitle_font_size',
	$masonry_gallery_square_big_subtitle_font_size
);

$masonry_gallery_square_big_subtitle_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_subtitle_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_subtitle_line_height',
	$masonry_gallery_square_big_subtitle_line_height
);

$masonry_gallery_square_big_subtitle_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_subtitle_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_square_big_subtitle_text_transform',
	$masonry_gallery_square_big_subtitle_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_square_big_subtitle_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_big_subtitle_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_square_big_subtitle_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_big_subtitle_font_family',
	$masonry_gallery_square_big_subtitle_font_family
);

$masonry_gallery_square_big_subtitle_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_subtitle_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_square_big_subtitle_font_style',
	$masonry_gallery_square_big_subtitle_font_style
);

$masonry_gallery_square_big_subtitle_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_subtitle_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_square_big_subtitle_font_weight',
	$masonry_gallery_square_big_subtitle_font_weight
);

$masonry_gallery_square_big_subtitle_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_subtitle_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_big_subtitle_letter_spacing',
	$masonry_gallery_square_big_subtitle_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_square_big_subtitle_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_square_big_subtitle_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_subtitle_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_big_subtitle_margin_bottom',
	$masonry_gallery_square_big_subtitle_margin_bottom
);

$masonry_gallery_square_big_text_group = new MooseElatedGroup(
	esc_html__( 'Text Style', 'moose' ),
	esc_html__( 'Define Square Big Text Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_text_group',
	$masonry_gallery_square_big_text_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_text_color',
	'',
	esc_html__( 'Text Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_color',
	$masonry_gallery_square_big_text_color
);

$masonry_gallery_square_big_text_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_font_size',
	$masonry_gallery_square_big_text_font_size
);

$masonry_gallery_square_big_text_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_line_height',
	$masonry_gallery_square_big_text_line_height
);

$masonry_gallery_square_big_text_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_square_big_text_text_transform',
	$masonry_gallery_square_big_text_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_square_big_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_big_text_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_square_big_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_big_text_font_family',
	$masonry_gallery_square_big_text_font_family
);

$masonry_gallery_square_big_text_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_text_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_square_big_text_font_style',
	$masonry_gallery_square_big_text_font_style
);

$masonry_gallery_square_big_text_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_square_big_text_font_weight',
	$masonry_gallery_square_big_text_font_weight
);

$masonry_gallery_square_big_text_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_big_text_letter_spacing',
	$masonry_gallery_square_big_text_letter_spacing
);

$masonry_gallery_square_big_button_group = new MooseElatedGroup(
	esc_html__( 'Button Style', 'moose' ),
	esc_html__( 'Define Square Big Button Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_button_group',
	$masonry_gallery_square_big_button_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_button_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_square_big_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_button_font_family',
	$masonry_gallery_square_big_button_font_family
);

$masonry_gallery_square_big_button_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_button_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row1->addChild(
	'masonry_gallery_square_big_button_font_style',
	$masonry_gallery_square_big_button_font_style
);

$masonry_gallery_square_big_button_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	'masonry_gallery_square_big_button_font_weight',
	$masonry_gallery_square_big_button_font_weight
);

$masonry_gallery_square_big_button_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_big_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_square_big_button_text_transform',
	$masonry_gallery_square_big_button_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_square_big_button_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_big_button_font_size',
	$masonry_gallery_square_big_button_font_size
);

$masonry_gallery_square_big_button_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_big_button_line_height',
	$masonry_gallery_square_big_button_line_height
);

$masonry_gallery_square_big_button_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_big_button_letter_spacing',
	$masonry_gallery_square_big_button_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_square_big_button_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_button_text_color',
	'',
	esc_html__( 'Text Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_text_color',
	$masonry_gallery_square_big_button_text_color
);

$masonry_gallery_square_big_button_hover_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_hover_text_color',
	$masonry_gallery_square_big_button_hover_text_color
);

$masonry_gallery_square_big_button_background_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_button_background_color',
	'',
	esc_html__( 'Background Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_background_color',
	$masonry_gallery_square_big_button_background_color
);

$masonry_gallery_square_big_button_hover_background_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_hover_background_color',
	$masonry_gallery_square_big_button_hover_background_color
);

$row4 = new MooseElatedRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_square_big_button_border_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_button_border_color',
	'',
	esc_html__( 'Border Color', 'moose' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_border_color',
	$masonry_gallery_square_big_button_border_color
);

$masonry_gallery_square_big_button_hover_border_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'moose' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_hover_border_color',
	$masonry_gallery_square_big_button_hover_border_color
);

$masonry_gallery_square_big_button_border_width = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'moose' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_border_width',
	$masonry_gallery_square_big_button_border_width
);

$masonry_gallery_square_big_button_border_radius = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'moose' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_border_radius',
	$masonry_gallery_square_big_button_border_radius
);

$row5 = new MooseElatedRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_square_big_button_padding_left = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'moose' )
);
$row5->addChild(
	'masonry_gallery_square_big_button_padding_left',
	$masonry_gallery_square_big_button_padding_left
);

$masonry_gallery_square_big_button_padding_right = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'moose' )
);
$row5->addChild(
	'masonry_gallery_square_big_button_padding_right',
	$masonry_gallery_square_big_button_padding_right
);

$masonry_gallery_square_big_button_margin_top = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'moose' )
);
$row5->addChild(
	'masonry_gallery_square_big_button_margin_top',
	$masonry_gallery_square_big_button_margin_top
);

$masonry_gallery_square_big_icon_group = new MooseElatedGroup(
	esc_html__( 'Icon Style', 'moose' ),
	esc_html__( 'Define Square Big Icon Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_icon_group',
	$masonry_gallery_square_big_icon_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_icon_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_icon_color',
	'',
	esc_html__( 'Icon Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_color',
	$masonry_gallery_square_big_icon_color
);

$masonry_gallery_square_big_icon_hover_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_hover_color',
	$masonry_gallery_square_big_icon_hover_color
);

$masonry_gallery_square_big_icon_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_size',
	$masonry_gallery_square_big_icon_size
);

$masonry_gallery_square_big_icon_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_margin_bottom',
	$masonry_gallery_square_big_icon_margin_bottom
);

$masonry_gallery_square_big_overlay_group = new MooseElatedGroup(
	esc_html__( 'Overlay Style', 'moose' ),
	esc_html__( 'Define Square Big Overlay Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_overlay_group',
	$masonry_gallery_square_big_overlay_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_overlay_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_overlay_color',
	'',
	esc_html__( 'Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_color',
	$masonry_gallery_square_big_overlay_color
);

$masonry_gallery_square_big_overlay_transparency = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_transparency',
	$masonry_gallery_square_big_overlay_transparency
);

$masonry_gallery_square_big_overlay_hover_group = new MooseElatedGroup(
	esc_html__( 'Overlay Hover Style', 'moose' ),
	esc_html__( 'Define Square Big Overlay Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_overlay_hover_group',
	$masonry_gallery_square_big_overlay_hover_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_overlay_hover_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_overlay_color_hover = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_overlay_color_hover',
	'',
	esc_html__( 'Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_color_hover',
	$masonry_gallery_square_big_overlay_color_hover
);

$masonry_gallery_square_big_overlay_transparency_hover = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_overlay_transparency_hover',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_transparency_hover',
	$masonry_gallery_square_big_overlay_transparency_hover
);

$masonry_gallery_square_big_spacing_group = new MooseElatedGroup(
	esc_html__( 'Text Alignment', 'moose' ),
	esc_html__( 'Define Text Alignment', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_spacing_group',
	$masonry_gallery_square_big_spacing_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_text_align = new MooseElatedField(
	"selectsimple",
	"masonry_gallery_square_big_text_align",
	"center",
	esc_html__( "Text Alignment", 'moose' ),
	esc_html__( "Choose text position", 'moose' ),
	array(
		"center" => esc_html__( "Center", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);

$row1->addChild(
	"masonry_gallery_square_big_text_align",
	$masonry_gallery_square_big_text_align
);

$masonry_gallery_square_big_padding_group = new MooseElatedGroup(
	esc_html__( 'Content Padding', 'moose' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_big_padding_group',
	$masonry_gallery_square_big_padding_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_padding_left = new MooseElatedField(
	"textsimple",
	"masonry_gallery_square_big_padding_left",
	"",
	esc_html__( "Padding Left", 'moose' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_big_padding_left",
	$masonry_gallery_square_big_padding_left
);

$masonry_gallery_square_big_padding_right = new MooseElatedField(
	"textsimple",
	"masonry_gallery_square_big_padding_right",
	"",
	esc_html__( "Padding Right", 'moose' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_big_padding_right",
	$masonry_gallery_square_big_padding_right
);

$masonry_gallery_square_big_separator_group = new MooseElatedGroup(
	esc_html__( 'Subtitle Separator Style', 'moose' ),
	esc_html__( 'Define style for separator in subtitle', 'moose' )
);
$panel30->addChild(
	"masonry_gallery_square_big_separator_group",
	$masonry_gallery_square_big_separator_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_big_separator_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_separator_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_big_separator_color',
	'',
	esc_html__( 'Color', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row1->addChild(
	"masonry_gallery_square_big_separator_color",
	$masonry_gallery_square_big_separator_color
);

$masonry_gallery_square_big_separator_width = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_big_separator_width',
	'',
	esc_html__( 'Width (px)', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row1->addChild(
	"masonry_gallery_square_big_separator_width",
	$masonry_gallery_square_big_separator_width
);

//Square Small
$masonry_gallery_square_small_title = new MooseElatedTitle(
	'masonry_gallery_square_small_title',
	esc_html__( 'Square Small', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_title',
	$masonry_gallery_square_small_title
);

$masonry_gallery_square_small_title_group = new MooseElatedGroup(
	esc_html__( 'Title Style', 'moose' ),
	esc_html__( 'Define Square Small Title Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_title_group',
	$masonry_gallery_square_small_title_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_small_title_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_title_color',
	'',
	esc_html__( 'Title Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_color',
	$masonry_gallery_square_small_title_color
);

$masonry_gallery_square_small_title_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_font_size',
	$masonry_gallery_square_small_title_font_size
);

$masonry_gallery_square_small_title_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_line_height',
	$masonry_gallery_square_small_title_line_height
);

$masonry_gallery_square_small_title_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_square_small_title_text_transform',
	$masonry_gallery_square_small_title_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_square_small_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_small_title_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_square_small_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_small_title_font_family',
	$masonry_gallery_square_small_title_font_family
);

$masonry_gallery_square_small_title_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_title_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_square_small_title_font_style',
	$masonry_gallery_square_small_title_font_style
);

$masonry_gallery_square_small_title_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_square_small_title_font_weight',
	$masonry_gallery_square_small_title_font_weight
);

$masonry_gallery_square_small_title_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_small_title_letter_spacing',
	$masonry_gallery_square_small_title_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_square_small_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_square_small_title_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_small_title_margin_bottom',
	$masonry_gallery_square_small_title_margin_bottom
);

$masonry_gallery_square_small_subtitle_group = new MooseElatedGroup(
	esc_html__( 'Subtitle Style', 'moose' ),
	esc_html__( 'Define Square Small Subtitle Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_subtitle_group',
	$masonry_gallery_square_small_subtitle_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_subtitle_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_small_subtitle_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_subtitle_color',
	'',
	esc_html__( 'Subtitle Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_subtitle_color',
	$masonry_gallery_square_small_subtitle_color
);

$masonry_gallery_square_small_subtitle_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_subtitle_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_subtitle_font_size',
	$masonry_gallery_square_small_subtitle_font_size
);

$masonry_gallery_square_small_subtitle_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_subtitle_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_subtitle_line_height',
	$masonry_gallery_square_small_subtitle_line_height
);

$masonry_gallery_square_small_subtitle_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_subtitle_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_square_small_subtitle_text_transform',
	$masonry_gallery_square_small_subtitle_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_square_small_subtitle_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_small_subtitle_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_square_small_subtitle_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_small_subtitle_font_family',
	$masonry_gallery_square_small_subtitle_font_family
);

$masonry_gallery_square_small_subtitle_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_subtitle_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_square_small_subtitle_font_style',
	$masonry_gallery_square_small_subtitle_font_style
);

$masonry_gallery_square_small_subtitle_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_subtitle_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_square_small_subtitle_font_weight',
	$masonry_gallery_square_small_subtitle_font_weight
);

$masonry_gallery_square_small_subtitle_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_subtitle_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_small_subtitle_letter_spacing',
	$masonry_gallery_square_small_subtitle_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_square_small_subtitle_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_square_small_subtitle_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_subtitle_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_small_subtitle_margin_bottom',
	$masonry_gallery_square_small_subtitle_margin_bottom
);

$masonry_gallery_square_small_text_group = new MooseElatedGroup(
	esc_html__( 'Text Style', 'moose' ),
	esc_html__( 'Define Square Small Text Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_text_group',
	$masonry_gallery_square_small_text_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_small_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_text_color',
	'',
	esc_html__( 'Text Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_color',
	$masonry_gallery_square_small_text_color
);

$masonry_gallery_square_small_text_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_font_size',
	$masonry_gallery_square_small_text_font_size
);

$masonry_gallery_square_small_text_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_line_height',
	$masonry_gallery_square_small_text_line_height
);

$masonry_gallery_square_small_text_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_square_small_text_text_transform',
	$masonry_gallery_square_small_text_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_square_small_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_small_text_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_square_small_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_small_text_font_family',
	$masonry_gallery_square_small_text_font_family
);

$masonry_gallery_square_small_text_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_text_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_square_small_text_font_style',
	$masonry_gallery_square_small_text_font_style
);

$masonry_gallery_square_small_text_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_square_small_text_font_weight',
	$masonry_gallery_square_small_text_font_weight
);

$masonry_gallery_square_small_text_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_small_text_letter_spacing',
	$masonry_gallery_square_small_text_letter_spacing
);

$masonry_gallery_square_small_button_group = new MooseElatedGroup(
	esc_html__( 'Button Style', 'moose' ),
	esc_html__( 'Define Square Small Button Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_button_group',
	$masonry_gallery_square_small_button_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_button_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_square_small_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_button_font_family',
	$masonry_gallery_square_small_button_font_family
);

$masonry_gallery_square_small_button_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_button_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row1->addChild(
	'masonry_gallery_square_small_button_font_style',
	$masonry_gallery_square_small_button_font_style
);

$masonry_gallery_square_small_button_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	'masonry_gallery_square_small_button_font_weight',
	$masonry_gallery_square_small_button_font_weight
);

$masonry_gallery_square_small_button_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_square_small_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_square_small_button_text_transform',
	$masonry_gallery_square_small_button_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_square_small_button_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_small_button_font_size',
	$masonry_gallery_square_small_button_font_size
);

$masonry_gallery_square_small_button_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_small_button_line_height',
	$masonry_gallery_square_small_button_line_height
);

$masonry_gallery_square_small_button_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_square_small_button_letter_spacing',
	$masonry_gallery_square_small_button_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_square_small_button_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_button_text_color',
	'',
	esc_html__( 'Text Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_text_color',
	$masonry_gallery_square_small_button_text_color
);

$masonry_gallery_square_small_button_hover_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_hover_text_color',
	$masonry_gallery_square_small_button_hover_text_color
);

$masonry_gallery_square_small_button_background_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_button_background_color',
	'',
	esc_html__( 'Background Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_background_color',
	$masonry_gallery_square_small_button_background_color
);

$masonry_gallery_square_small_button_hover_background_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_hover_background_color',
	$masonry_gallery_square_small_button_hover_background_color
);

$row4 = new MooseElatedRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_square_small_button_border_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_button_border_color',
	'',
	esc_html__( 'Border Color', 'moose' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_border_color',
	$masonry_gallery_square_small_button_border_color
);

$masonry_gallery_square_small_button_hover_border_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'moose' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_hover_border_color',
	$masonry_gallery_square_small_button_hover_border_color
);

$masonry_gallery_square_small_button_border_width = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'moose' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_border_width',
	$masonry_gallery_square_small_button_border_width
);

$masonry_gallery_square_small_button_border_radius = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'moose' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_border_radius',
	$masonry_gallery_square_small_button_border_radius
);

$row5 = new MooseElatedRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_square_small_button_padding_left = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'moose' )
);
$row5->addChild(
	'masonry_gallery_square_small_button_padding_left',
	$masonry_gallery_square_small_button_padding_left
);

$masonry_gallery_square_small_button_padding_right = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'moose' )
);
$row5->addChild(
	'masonry_gallery_square_small_button_padding_right',
	$masonry_gallery_square_small_button_padding_right
);

$masonry_gallery_square_small_button_margin_top = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'moose' )
);
$row5->addChild(
	'masonry_gallery_square_small_button_margin_top',
	$masonry_gallery_square_small_button_margin_top
);

$masonry_gallery_square_small_icon_group = new MooseElatedGroup(
	esc_html__( 'Icon Style', 'moose' ),
	esc_html__( 'Define Square Small Icon Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_icon_group',
	$masonry_gallery_square_small_icon_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_icon_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_icon_color',
	'',
	esc_html__( 'Icon Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_color',
	$masonry_gallery_square_small_icon_color
);

$masonry_gallery_square_small_icon_hover_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_hover_color',
	$masonry_gallery_square_small_icon_hover_color
);

$masonry_gallery_square_small_icon_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_size',
	$masonry_gallery_square_small_icon_size
);

$masonry_gallery_square_small_icon_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_margin_bottom',
	$masonry_gallery_square_small_icon_margin_bottom
);

$masonry_gallery_square_small_overlay_group = new MooseElatedGroup(
	esc_html__( 'Overlay Style', 'moose' ),
	esc_html__( 'Define Square Small Overlay Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_overlay_group',
	$masonry_gallery_square_small_overlay_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_overlay_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_overlay_color',
	'',
	esc_html__( 'Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_color',
	$masonry_gallery_square_small_overlay_color
);

$masonry_gallery_square_small_overlay_transparency = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_transparency',
	$masonry_gallery_square_small_overlay_transparency
);

$masonry_gallery_square_small_overlay_hover_group = new MooseElatedGroup(
	esc_html__( 'Overlay Hover Style', 'moose' ),
	esc_html__( 'Define Square Big Overlay Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_overlay_hover_group',
	$masonry_gallery_square_small_overlay_hover_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_overlay_hover_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_overlay_color_hover = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_overlay_color_hover',
	'',
	esc_html__( 'Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_color_hover',
	$masonry_gallery_square_small_overlay_color_hover
);

$masonry_gallery_square_small_overlay_transparency_hover = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_overlay_transparency_hover',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_transparency_hover',
	$masonry_gallery_square_small_overlay_transparency_hover
);

$masonry_gallery_square_small_spacing_group = new MooseElatedGroup(
	esc_html__( 'Text Alignment', 'moose' ),
	esc_html__( 'Define Text Alignment', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_spacing_group',
	$masonry_gallery_square_small_spacing_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_text_align = new MooseElatedField(
	"selectsimple",
	"masonry_gallery_square_small_text_align",
	"center",
	esc_html__( "Text Alignment", 'moose' ),
	esc_html__( "Choose text position", 'moose' ),
	array(
		"center" => esc_html__( "Center", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);

$row1->addChild(
	"masonry_gallery_square_small_text_align",
	$masonry_gallery_square_small_text_align
);

$masonry_gallery_square_small_padding_group = new MooseElatedGroup(
	esc_html__( 'Content Padding', 'moose' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_square_small_padding_group',
	$masonry_gallery_square_small_padding_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_padding_left = new MooseElatedField(
	"textsimple",
	"masonry_gallery_square_small_padding_left",
	"",
	esc_html__( "Padding Left", 'moose' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_small_padding_left",
	$masonry_gallery_square_small_padding_left
);

$masonry_gallery_square_small_padding_right = new MooseElatedField(
	"textsimple",
	"masonry_gallery_square_small_padding_right",
	"",
	esc_html__( "Padding Right", 'moose' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_small_padding_right",
	$masonry_gallery_square_small_padding_right
);

$masonry_gallery_square_small_separator_group = new MooseElatedGroup(
	esc_html__( 'Subtitle Separator Style', 'moose' ),
	esc_html__( 'Define style for separator in subtitle', 'moose' )
);
$panel30->addChild(
	"masonry_gallery_square_small_separator_group",
	$masonry_gallery_square_small_separator_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_square_small_separator_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_small_separator_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_square_small_separator_color',
	'',
	esc_html__( 'Color', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row1->addChild(
	"masonry_gallery_square_small_separator_color",
	$masonry_gallery_square_small_separator_color
);

$masonry_gallery_square_small_separator_width = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_small_separator_width',
	'',
	esc_html__( 'Width (px)', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row1->addChild(
	"masonry_gallery_square_small_separator_width",
	$masonry_gallery_square_small_separator_width
);

//Rectangle Portrait
$masonry_gallery_rectangle_portrait_title = new MooseElatedTitle(
	'masonry_gallery_rectangle_portrait_title',
	esc_html__( 'Rectangle Portrait', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_title',
	$masonry_gallery_rectangle_portrait_title
);

$masonry_gallery_rectangle_portrait_title_group = new MooseElatedGroup(
	esc_html__( 'Title Style', 'moose' ),
	esc_html__( 'Define Rectangle Portrait Title Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_title_group',
	$masonry_gallery_rectangle_portrait_title_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_portrait_title_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_title_color',
	'',
	esc_html__( 'Title Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_color',
	$masonry_gallery_rectangle_portrait_title_color
);

$masonry_gallery_rectangle_portrait_title_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_font_size',
	$masonry_gallery_rectangle_portrait_title_font_size
);

$masonry_gallery_rectangle_portrait_title_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_line_height',
	$masonry_gallery_rectangle_portrait_title_line_height
);

$masonry_gallery_rectangle_portrait_title_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_text_transform',
	$masonry_gallery_rectangle_portrait_title_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_rectangle_portrait_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_portrait_title_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_font_family',
	$masonry_gallery_rectangle_portrait_title_font_family
);

$masonry_gallery_rectangle_portrait_title_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_title_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_font_style',
	$masonry_gallery_rectangle_portrait_title_font_style
);

$masonry_gallery_rectangle_portrait_title_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_font_weight',
	$masonry_gallery_rectangle_portrait_title_font_weight
);

$masonry_gallery_rectangle_portrait_title_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_letter_spacing',
	$masonry_gallery_rectangle_portrait_title_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_rectangle_portrait_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_rectangle_portrait_title_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_title_margin_bottom',
	$masonry_gallery_rectangle_portrait_title_margin_bottom
);

$masonry_gallery_rectangle_portrait_subtitle_group = new MooseElatedGroup(
	esc_html__( 'Subtitle Style', 'moose' ),
	esc_html__( 'Define Rectangle Portrait Subtitle Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_group',
	$masonry_gallery_rectangle_portrait_subtitle_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_subtitle_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_portrait_subtitle_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_subtitle_color',
	'',
	esc_html__( 'Subtitle Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_color',
	$masonry_gallery_rectangle_portrait_subtitle_color
);

$masonry_gallery_rectangle_portrait_subtitle_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_subtitle_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_font_size',
	$masonry_gallery_rectangle_portrait_subtitle_font_size
);

$masonry_gallery_rectangle_portrait_subtitle_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_subtitle_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_line_height',
	$masonry_gallery_rectangle_portrait_subtitle_line_height
);

$masonry_gallery_rectangle_portrait_subtitle_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_subtitle_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_text_transform',
	$masonry_gallery_rectangle_portrait_subtitle_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_rectangle_portrait_subtitle_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_portrait_subtitle_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_subtitle_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_font_family',
	$masonry_gallery_rectangle_portrait_subtitle_font_family
);

$masonry_gallery_rectangle_portrait_subtitle_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_subtitle_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_font_style',
	$masonry_gallery_rectangle_portrait_subtitle_font_style
);

$masonry_gallery_rectangle_portrait_subtitle_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_subtitle_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_font_weight',
	$masonry_gallery_rectangle_portrait_subtitle_font_weight
);

$masonry_gallery_rectangle_portrait_subtitle_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_subtitle_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_letter_spacing',
	$masonry_gallery_rectangle_portrait_subtitle_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_rectangle_portrait_subtitle_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_rectangle_portrait_subtitle_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_subtitle_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_subtitle_margin_bottom',
	$masonry_gallery_rectangle_portrait_subtitle_margin_bottom
);

$masonry_gallery_rectangle_portrait_text_group = new MooseElatedGroup(
	esc_html__( 'Text Style', 'moose' ),
	esc_html__( 'Define Rectangle Portrait Text Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_text_group',
	$masonry_gallery_rectangle_portrait_text_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_portrait_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_text_color',
	'',
	esc_html__( 'Text Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_color',
	$masonry_gallery_rectangle_portrait_text_color
);

$masonry_gallery_rectangle_portrait_text_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_font_size',
	$masonry_gallery_rectangle_portrait_text_font_size
);

$masonry_gallery_rectangle_portrait_text_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_line_height',
	$masonry_gallery_rectangle_portrait_text_line_height
);

$masonry_gallery_rectangle_portrait_text_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_text_transform',
	$masonry_gallery_rectangle_portrait_text_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_rectangle_portrait_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_portrait_text_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_font_family',
	$masonry_gallery_rectangle_portrait_text_font_family
);

$masonry_gallery_rectangle_portrait_text_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_text_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_font_style',
	$masonry_gallery_rectangle_portrait_text_font_style
);

$masonry_gallery_rectangle_portrait_text_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_font_weight',
	$masonry_gallery_rectangle_portrait_text_font_weight
);

$masonry_gallery_rectangle_portrait_text_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_letter_spacing',
	$masonry_gallery_rectangle_portrait_text_letter_spacing
);

$masonry_gallery_rectangle_portrait_button_group = new MooseElatedGroup(
	esc_html__( 'Button Style', 'moose' ),
	esc_html__( 'Define Rectangle Portrait Button Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_button_group',
	$masonry_gallery_rectangle_portrait_button_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_button_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_font_family',
	$masonry_gallery_rectangle_portrait_button_font_family
);

$masonry_gallery_rectangle_portrait_button_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_button_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_font_style',
	$masonry_gallery_rectangle_portrait_button_font_style
);

$masonry_gallery_rectangle_portrait_button_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_font_weight',
	$masonry_gallery_rectangle_portrait_button_font_weight
);

$masonry_gallery_rectangle_portrait_button_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_text_transform',
	$masonry_gallery_rectangle_portrait_button_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_rectangle_portrait_button_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_button_font_size',
	$masonry_gallery_rectangle_portrait_button_font_size
);

$masonry_gallery_rectangle_portrait_button_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_button_line_height',
	$masonry_gallery_rectangle_portrait_button_line_height
);

$masonry_gallery_rectangle_portrait_button_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_button_letter_spacing',
	$masonry_gallery_rectangle_portrait_button_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_rectangle_portrait_button_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_text_color',
	'',
	esc_html__( 'Text Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_text_color',
	$masonry_gallery_rectangle_portrait_button_text_color
);

$masonry_gallery_rectangle_portrait_button_hover_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_hover_text_color',
	$masonry_gallery_rectangle_portrait_button_hover_text_color
);

$masonry_gallery_rectangle_portrait_button_background_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_background_color',
	'',
	esc_html__( 'Background Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_background_color',
	$masonry_gallery_rectangle_portrait_button_background_color
);

$masonry_gallery_rectangle_portrait_button_hover_background_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_hover_background_color',
	$masonry_gallery_rectangle_portrait_button_hover_background_color
);

$row4 = new MooseElatedRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_rectangle_portrait_button_border_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_border_color',
	'',
	esc_html__( 'Border Color', 'moose' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_border_color',
	$masonry_gallery_rectangle_portrait_button_border_color
);

$masonry_gallery_rectangle_portrait_button_hover_border_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'moose' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_hover_border_color',
	$masonry_gallery_rectangle_portrait_button_hover_border_color
);

$masonry_gallery_rectangle_portrait_button_border_width = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'moose' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_border_width',
	$masonry_gallery_rectangle_portrait_button_border_width
);

$masonry_gallery_rectangle_portrait_button_border_radius = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'moose' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_border_radius',
	$masonry_gallery_rectangle_portrait_button_border_radius
);

$row5 = new MooseElatedRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_rectangle_portrait_button_padding_left = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'moose' )
);
$row5->addChild(
	'masonry_gallery_rectangle_portrait_button_padding_left',
	$masonry_gallery_rectangle_portrait_button_padding_left
);

$masonry_gallery_rectangle_portrait_button_padding_right = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'moose' )
);
$row5->addChild(
	'masonry_gallery_rectangle_portrait_button_padding_right',
	$masonry_gallery_rectangle_portrait_button_padding_right
);

$masonry_gallery_rectangle_portrait_button_margin_top = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'moose' )
);
$row5->addChild(
	'masonry_gallery_rectangle_portrait_button_margin_top',
	$masonry_gallery_rectangle_portrait_button_margin_top
);

$masonry_gallery_rectangle_portrait_icon_group = new MooseElatedGroup(
	esc_html__( 'Icon Style', 'moose' ),
	esc_html__( 'Define Rectangle Portrait Icon Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_icon_group',
	$masonry_gallery_rectangle_portrait_icon_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_icon_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_icon_color',
	'',
	esc_html__( 'Icon Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_color',
	$masonry_gallery_rectangle_portrait_icon_color
);

$masonry_gallery_rectangle_portrait_icon_hover_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_hover_color',
	$masonry_gallery_rectangle_portrait_icon_hover_color
);

$masonry_gallery_rectangle_portrait_icon_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_size',
	$masonry_gallery_rectangle_portrait_icon_size
);

$masonry_gallery_rectangle_portrait_icon_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_margin_bottom',
	$masonry_gallery_rectangle_portrait_icon_margin_bottom
);

$masonry_gallery_rectangle_portrait_overlay_group = new MooseElatedGroup(
	esc_html__( 'Overlay Style', 'moose' ),
	esc_html__( 'Define Rectangle Portrait Overlay Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_overlay_group',
	$masonry_gallery_rectangle_portrait_overlay_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_overlay_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_overlay_color',
	'',
	esc_html__( 'Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_color',
	$masonry_gallery_rectangle_portrait_overlay_color
);

$masonry_gallery_rectangle_portrait_overlay_transparency = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_transparency',
	$masonry_gallery_rectangle_portrait_overlay_transparency
);

$masonry_gallery_rectangle_portrait_overlay_hover_group = new MooseElatedGroup(
	esc_html__( 'Overlay Hover Style', 'moose' ),
	esc_html__( 'Define Square Big Overlay Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_overlay_hover_group',
	$masonry_gallery_rectangle_portrait_overlay_hover_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_overlay_hover_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_overlay_color_hover = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_overlay_color_hover',
	'',
	esc_html__( 'Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_color_hover',
	$masonry_gallery_rectangle_portrait_overlay_color_hover
);

$masonry_gallery_square_rectangle_portrait_transparency_hover = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_rectangle_portrait_transparency_hover',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_rectangle_portrait_transparency_hover',
	$masonry_gallery_square_rectangle_portrait_transparency_hover
);

$masonry_gallery_rectangle_portrait_spacing_group = new MooseElatedGroup(
	esc_html__( 'Text Alignment', 'moose' ),
	esc_html__( 'Define Text Alignment', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_spacing_group',
	$masonry_gallery_rectangle_portrait_spacing_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_text_align = new MooseElatedField(
	"selectsimple",
	"masonry_gallery_rectangle_portrait_text_align",
	"center",
	esc_html__( "Text Alignment", 'moose' ),
	esc_html__( "Choose text position", 'moose' ),
	array(
		"center" => esc_html__( "Center", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);

$row1->addChild(
	"masonry_gallery_rectangle_portrait_text_align",
	$masonry_gallery_rectangle_portrait_text_align
);

$masonry_gallery_rectangle_portrait_padding_group = new MooseElatedGroup(
	esc_html__( 'Content Padding', 'moose' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_padding_group',
	$masonry_gallery_rectangle_portrait_padding_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_padding_left = new MooseElatedField(
	"textsimple",
	"masonry_gallery_rectangle_portrait_padding_left",
	"",
	esc_html__( "Padding Left", 'moose' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_portrait_padding_left",
	$masonry_gallery_rectangle_portrait_padding_left
);

$masonry_gallery_rectangle_portrait_padding_right = new MooseElatedField(
	"textsimple",
	"masonry_gallery_rectangle_portrait_padding_right",
	"",
	esc_html__( "Padding Right", 'moose' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_portrait_padding_right",
	$masonry_gallery_rectangle_portrait_padding_right
);

$masonry_gallery_rectangle_portrait_separator_group = new MooseElatedGroup(
	esc_html__( 'Subtitle Separator Style', 'moose' ),
	esc_html__( 'Define style for separator in subtitle', 'moose' )
);
$panel30->addChild(
	"masonry_gallery_rectangle_portrait_separator_group",
	$masonry_gallery_rectangle_portrait_separator_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_portrait_separator_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_portrait_separator_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_separator_color',
	'',
	esc_html__( 'Color', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row1->addChild(
	"masonry_gallery_rectangle_portrait_separator_color",
	$masonry_gallery_rectangle_portrait_separator_color
);

$masonry_gallery_rectangle_portrait_separator_width = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_separator_width',
	'',
	esc_html__( 'Width (px)', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row1->addChild(
	"masonry_gallery_rectangle_portrait_separator_width",
	$masonry_gallery_rectangle_portrait_separator_width
);

//Rectangle Landscape
$masonry_gallery_rectangle_landscape_title = new MooseElatedTitle(
	'masonry_gallery_rectangle_landscape_title',
	esc_html__( 'Rectangle Landscape', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_title',
	$masonry_gallery_rectangle_landscape_title
);

$masonry_gallery_rectangle_landscape_title_group = new MooseElatedGroup(
	esc_html__( 'Title Style', 'moose' ),
	esc_html__( 'Define Rectangle Landscape Title Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_title_group',
	$masonry_gallery_rectangle_landscape_title_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_landscape_title_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_title_color',
	'',
	esc_html__( 'Title Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_color',
	$masonry_gallery_rectangle_landscape_title_color
);

$masonry_gallery_rectangle_landscape_title_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_font_size',
	$masonry_gallery_rectangle_landscape_title_font_size
);

$masonry_gallery_rectangle_landscape_title_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_line_height',
	$masonry_gallery_rectangle_landscape_title_line_height
);

$masonry_gallery_rectangle_landscape_title_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_text_transform',
	$masonry_gallery_rectangle_landscape_title_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_rectangle_landscape_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_landscape_title_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_font_family',
	$masonry_gallery_rectangle_landscape_title_font_family
);

$masonry_gallery_rectangle_landscape_title_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_title_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_font_style',
	$masonry_gallery_rectangle_landscape_title_font_style
);

$masonry_gallery_rectangle_landscape_title_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_font_weight',
	$masonry_gallery_rectangle_landscape_title_font_weight
);

$masonry_gallery_rectangle_landscape_title_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_letter_spacing',
	$masonry_gallery_rectangle_landscape_title_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_rectangle_landscape_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_rectangle_landscape_title_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_title_margin_bottom',
	$masonry_gallery_rectangle_landscape_title_margin_bottom
);

$masonry_gallery_rectangle_landscape_subtitle_group = new MooseElatedGroup(
	esc_html__( 'Subtitle Style', 'moose' ),
	esc_html__( 'Define Rectangle Landscape Subtitle Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_group',
	$masonry_gallery_rectangle_landscape_subtitle_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_subtitle_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_landscape_subtitle_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_subtitle_color',
	'',
	esc_html__( 'Subtitle Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_color',
	$masonry_gallery_rectangle_landscape_subtitle_color
);

$masonry_gallery_rectangle_landscape_subtitle_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_subtitle_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_font_size',
	$masonry_gallery_rectangle_landscape_subtitle_font_size
);

$masonry_gallery_rectangle_landscape_subtitle_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_subtitle_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_line_height',
	$masonry_gallery_rectangle_landscape_subtitle_line_height
);

$masonry_gallery_rectangle_landscape_subtitle_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_subtitle_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_text_transform',
	$masonry_gallery_rectangle_landscape_subtitle_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_rectangle_landscape_subtitle_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_landscape_subtitle_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_subtitle_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_font_family',
	$masonry_gallery_rectangle_landscape_subtitle_font_family
);

$masonry_gallery_rectangle_landscape_subtitle_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_subtitle_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_font_style',
	$masonry_gallery_rectangle_landscape_subtitle_font_style
);

$masonry_gallery_rectangle_landscape_subtitle_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_subtitle_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_font_weight',
	$masonry_gallery_rectangle_landscape_subtitle_font_weight
);

$masonry_gallery_rectangle_landscape_subtitle_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_subtitle_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_letter_spacing',
	$masonry_gallery_rectangle_landscape_subtitle_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_rectangle_landscape_subtitle_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_rectangle_landscape_subtitle_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_subtitle_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_subtitle_margin_bottom',
	$masonry_gallery_rectangle_landscape_subtitle_margin_bottom
);

$masonry_gallery_rectangle_landscape_text_group = new MooseElatedGroup(
	esc_html__( 'Text Style', 'moose' ),
	esc_html__( 'Define Rectangle Landscape Text Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_text_group',
	$masonry_gallery_rectangle_landscape_text_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_landscape_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_text_color',
	'',
	esc_html__( 'Text Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_color',
	$masonry_gallery_rectangle_landscape_text_color
);

$masonry_gallery_rectangle_landscape_text_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_font_size',
	$masonry_gallery_rectangle_landscape_text_font_size
);

$masonry_gallery_rectangle_landscape_text_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_line_height',
	$masonry_gallery_rectangle_landscape_text_line_height
);

$masonry_gallery_rectangle_landscape_text_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_text_transform',
	$masonry_gallery_rectangle_landscape_text_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_rectangle_landscape_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_landscape_text_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_font_family',
	$masonry_gallery_rectangle_landscape_text_font_family
);

$masonry_gallery_rectangle_landscape_text_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_text_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_font_style',
	$masonry_gallery_rectangle_landscape_text_font_style
);

$masonry_gallery_rectangle_landscape_text_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_font_weight',
	$masonry_gallery_rectangle_landscape_text_font_weight
);

$masonry_gallery_rectangle_landscape_text_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_letter_spacing',
	$masonry_gallery_rectangle_landscape_text_letter_spacing
);

$masonry_gallery_rectangle_landscape_button_group = new MooseElatedGroup(
	esc_html__( 'Button Style', 'moose' ),
	esc_html__( 'Define Rectangle Landscape Button Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_button_group',
	$masonry_gallery_rectangle_landscape_button_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_button_font_family = new MooseElatedField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_font_family',
	$masonry_gallery_rectangle_landscape_button_font_family
);

$masonry_gallery_rectangle_landscape_button_font_style = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_button_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_font_style',
	$masonry_gallery_rectangle_landscape_button_font_style
);

$masonry_gallery_rectangle_landscape_button_font_weight = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_font_weight',
	$masonry_gallery_rectangle_landscape_button_font_weight
);

$masonry_gallery_rectangle_landscape_button_text_transform = new MooseElatedField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'moose' ),
	'',
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_text_transform',
	$masonry_gallery_rectangle_landscape_button_text_transform
);

$row2 = new MooseElatedRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_rectangle_landscape_button_font_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_button_font_size',
	$masonry_gallery_rectangle_landscape_button_font_size
);

$masonry_gallery_rectangle_landscape_button_line_height = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_button_line_height',
	$masonry_gallery_rectangle_landscape_button_line_height
);

$masonry_gallery_rectangle_landscape_button_letter_spacing = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'moose' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_button_letter_spacing',
	$masonry_gallery_rectangle_landscape_button_letter_spacing
);

$row3 = new MooseElatedRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_rectangle_landscape_button_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_text_color',
	'',
	esc_html__( 'Text Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_text_color',
	$masonry_gallery_rectangle_landscape_button_text_color
);

$masonry_gallery_rectangle_landscape_button_hover_text_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_hover_text_color',
	$masonry_gallery_rectangle_landscape_button_hover_text_color
);

$masonry_gallery_rectangle_landscape_button_background_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_background_color',
	'',
	esc_html__( 'Background Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_background_color',
	$masonry_gallery_rectangle_landscape_button_background_color
);

$masonry_gallery_rectangle_landscape_button_hover_background_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'moose' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_hover_background_color',
	$masonry_gallery_rectangle_landscape_button_hover_background_color
);

$row4 = new MooseElatedRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_rectangle_landscape_button_border_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_border_color',
	'',
	esc_html__( 'Border Color', 'moose' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_border_color',
	$masonry_gallery_rectangle_landscape_button_border_color
);

$masonry_gallery_rectangle_landscape_button_hover_border_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'moose' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_hover_border_color',
	$masonry_gallery_rectangle_landscape_button_hover_border_color
);

$masonry_gallery_rectangle_landscape_button_border_width = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'moose' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_border_width',
	$masonry_gallery_rectangle_landscape_button_border_width
);

$masonry_gallery_rectangle_landscape_button_border_radius = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'moose' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_border_radius',
	$masonry_gallery_rectangle_landscape_button_border_radius
);

$row5 = new MooseElatedRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_rectangle_landscape_button_padding_left = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'moose' )
);
$row5->addChild(
	'masonry_gallery_rectangle_landscape_button_padding_left',
	$masonry_gallery_rectangle_landscape_button_padding_left
);

$masonry_gallery_rectangle_landscape_button_padding_right = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'moose' )
);
$row5->addChild(
	'masonry_gallery_rectangle_landscape_button_padding_right',
	$masonry_gallery_rectangle_landscape_button_padding_right
);

$masonry_gallery_rectangle_landscape_button_margin_top = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'moose' )
);
$row5->addChild(
	'masonry_gallery_rectangle_landscape_button_margin_top',
	$masonry_gallery_rectangle_landscape_button_margin_top
);

$masonry_gallery_rectangle_landscape_icon_group = new MooseElatedGroup(
	esc_html__( 'Icon Style', 'moose' ),
	esc_html__( 'Define Rectangle Landscape Icon Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_icon_group',
	$masonry_gallery_rectangle_landscape_icon_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_icon_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_icon_color',
	'',
	esc_html__( 'Icon Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_color',
	$masonry_gallery_rectangle_landscape_icon_color
);

$masonry_gallery_rectangle_landscape_icon_hover_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_hover_color',
	$masonry_gallery_rectangle_landscape_icon_hover_color
);

$masonry_gallery_rectangle_landscape_icon_size = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_size',
	$masonry_gallery_rectangle_landscape_icon_size
);

$masonry_gallery_rectangle_landscape_icon_margin_bottom = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_margin_bottom',
	$masonry_gallery_rectangle_landscape_icon_margin_bottom
);

$masonry_gallery_rectangle_landscape_overlay_group = new MooseElatedGroup(
	esc_html__( 'Overlay Style', 'moose' ),
	esc_html__( 'Define Rectangle Landscape Overlay Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_overlay_group',
	$masonry_gallery_rectangle_landscape_overlay_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_overlay_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_overlay_color',
	'',
	esc_html__( 'Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_color',
	$masonry_gallery_rectangle_landscape_overlay_color
);

$masonry_gallery_rectangle_landscape_overlay_transparency = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_transparency',
	$masonry_gallery_rectangle_landscape_overlay_transparency
);

$masonry_gallery_rectangle_landscape_overlay_hover_group = new MooseElatedGroup(
	esc_html__( 'Overlay Hover Style', 'moose' ),
	esc_html__( 'Define Square Big Overlay Style', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_overlay_hover_group',
	$masonry_gallery_rectangle_landscape_overlay_hover_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_overlay_hover_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_overlay_color_hover = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_overlay_color_hover',
	'',
	esc_html__( 'Color', 'moose' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_color_hover',
	$masonry_gallery_rectangle_landscape_overlay_color_hover
);

$masonry_gallery_square_rectangle_landscape_transparency_hover = new MooseElatedField(
	'textsimple',
	'masonry_gallery_square_rectangle_landscape_transparency_hover',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' )
);
$row1->addChild(
	'masonry_gallery_square_rectangle_landscape_transparency_hover',
	$masonry_gallery_square_rectangle_landscape_transparency_hover
);

$masonry_gallery_rectangle_landscape_spacing_group = new MooseElatedGroup(
	esc_html__( 'Text Alignment', 'moose' ),
	esc_html__( 'Define Text Alignment', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_spacing_group',
	$masonry_gallery_rectangle_landscape_spacing_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_text_align = new MooseElatedField(
	"selectsimple",
	"masonry_gallery_rectangle_landscape_text_align",
	"center",
	esc_html__( "Text Alignment", 'moose' ),
	esc_html__( "Choose text position", 'moose' ),
	array(
		"center" => esc_html__( "Center", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);

$row1->addChild(
	"masonry_gallery_rectangle_landscape_text_align",
	$masonry_gallery_rectangle_landscape_text_align
);

$masonry_gallery_rectangle_landscape_padding_group = new MooseElatedGroup(
	esc_html__( 'Content Padding', 'moose' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'moose' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_padding_group',
	$masonry_gallery_rectangle_landscape_padding_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_padding_left = new MooseElatedField(
	"textsimple",
	"masonry_gallery_rectangle_landscape_padding_left",
	"",
	esc_html__( "Padding Left", 'moose' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px (or 5%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_landscape_padding_left",
	$masonry_gallery_rectangle_landscape_padding_left
);

$masonry_gallery_rectangle_landscape_padding_right = new MooseElatedField(
	"textsimple",
	"masonry_gallery_rectangle_landscape_padding_right",
	"",
	esc_html__( "Padding Right", 'moose' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_landscape_padding_right",
	$masonry_gallery_rectangle_landscape_padding_right
);

$masonry_gallery_rectangle_landscape_separator_group = new MooseElatedGroup(
	esc_html__( 'Subtitle Separator Style', 'moose' ),
	esc_html__( 'Define style for separator in subtitle', 'moose' )
);
$panel30->addChild(
	"masonry_gallery_rectangle_landscape_separator_group",
	$masonry_gallery_rectangle_landscape_separator_group
);

$row1 = new MooseElatedRow();
$masonry_gallery_rectangle_landscape_separator_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_landscape_separator_color = new MooseElatedField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_separator_color',
	'',
	esc_html__( 'Color', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row1->addChild(
	"masonry_gallery_rectangle_landscape_separator_color",
	$masonry_gallery_rectangle_landscape_separator_color
);

$masonry_gallery_rectangle_landscape_separator_width = new MooseElatedField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_separator_width',
	'',
	esc_html__( 'Width (px)', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row1->addChild(
	"masonry_gallery_rectangle_landscape_separator_width",
	$masonry_gallery_rectangle_landscape_separator_width
);

//Message Boxes

$panel8 = new MooseElatedPanel(
	esc_html__( "Message Boxes", 'moose' ),
	"message_boxes_panel"
);
$elementsPage->addChild(
	"panel8",
	$panel8
);

$group1 = new MooseElatedGroup(
	esc_html__( "Message Box Style", 'moose' ),
	esc_html__( "Define Message Box Style", 'moose' )
);
$panel8->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$message_title_color = new MooseElatedField(
	"colorsimple",
	"message_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"message_title_color",
	$message_title_color
);

$message_backgroundcolor = new MooseElatedField(
	"colorsimple",
	"message_backgroundcolor",
	"",
	esc_html__( "Background color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"message_backgroundcolor",
	$message_backgroundcolor
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$message_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"message_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"message_title_google_fonts",
	$message_title_google_fonts
);

$message_title_fontsize = new MooseElatedField(
	"textsimple",
	"message_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"message_title_fontsize",
	$message_title_fontsize
);

$message_title_lineheight = new MooseElatedField(
	"textsimple",
	"message_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"message_title_lineheight",
	$message_title_lineheight
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$message_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"message_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"message_title_fontstyle",
	$message_title_fontstyle
);

$message_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"message_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"message_title_fontweight",
	$message_title_fontweight
);

$group2 = new MooseElatedGroup(
	esc_html__( "Message Box Icon Style", 'moose' ),
	esc_html__( "Define styles for Message Box icons", 'moose' )
);
$panel8->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$message_icon_color = new MooseElatedField(
	"colorsimple",
	"message_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"message_icon_color",
	$message_icon_color
);

$message_icon_fontsize = new MooseElatedField(
	"textsimple",
	"message_icon_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"message_icon_fontsize",
	$message_icon_fontsize
);

$group3 = new MooseElatedGroup(
	esc_html__( "Message Box Padding", 'moose' ),
	esc_html__( "Define message box padding", 'moose' )
);
$panel8->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow( true );
$group3->addChild(
	"row1",
	$row1
);

$message_padding_left = new MooseElatedField(
	"textsimple",
	"message_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"message_padding_left",
	$message_padding_left
);

$message_padding_right = new MooseElatedField(
	"textsimple",
	"message_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"message_padding_right",
	$message_padding_right
);

$message_padding_top = new MooseElatedField(
	"textsimple",
	"message_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"message_padding_top",
	$message_padding_top
);

$message_padding_bottom = new MooseElatedField(
	"textsimple",
	"message_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"message_padding_bottom",
	$message_padding_bottom
);

//Pagination

$panel10 = new MooseElatedPanel(
	esc_html__( "Pagination", 'moose' ),
	"pagination_panel"
);
$elementsPage->addChild(
	"panel10",
	$panel10
);

$pagination_type = new MooseElatedField(
	"select",
	"pagination_type",
	"",
	esc_html__( "Type", 'moose' ),
	esc_html__( "Choose pagination style", 'moose' ),
	array(
		"standard" => esc_html__( "Standard", 'moose' ),
		"arrows_on_sides" => esc_html__( "Arrows on Sides", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"standard"        => "",
			"arrows_on_sides" => "#eltdf_pagination_standard_position_container"
		),
		"show"       => array(
			"standard"        => "#eltdf_pagination_standard_position_container",
			"arrows_on_sides" => ""
		)
	)
);
$panel10->addChild(
	"pagination_type",
	$pagination_type
);

$pagination_standard_position_container = new MooseElatedContainer(
	"pagination_standard_position_container",
	"pagination_type",
	"arrows_on_sides"
);
$panel10->addChild(
	"pagination_standard_position_container",
	$pagination_standard_position_container
);

$pagination_standard_position = new MooseElatedField(
	"select",
	"pagination_standard_position",
	"",
	esc_html__( "Position", 'moose' ),
	esc_html__( "Choose position of pagination", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$pagination_standard_position_container->addChild(
	"pagination_standard_position",
	$pagination_standard_position
);

$group3 = new MooseElatedGroup(
	esc_html__( "Navigation Style", 'moose' ),
	esc_html__( "Define Navigation styles", 'moose' )
);
$panel10->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$pagination_button_width = new MooseElatedField(
	"textsimple",
	"pagination_button_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pagination_button_width",
	$pagination_button_width
);

$pagination_button_height = new MooseElatedField(
	"textsimple",
	"pagination_button_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pagination_button_height",
	$pagination_button_height
);

$pagination_space_between_buttons = new MooseElatedField(
	"textsimple",
	"pagination_space_between_buttons",
	"",
	esc_html__( "Space between buttons (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pagination_space_between_buttons",
	$pagination_space_between_buttons
);

$pagination_button_background_color = new MooseElatedField(
	"colorsimple",
	"pagination_button_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pagination_button_background_color",
	$pagination_button_background_color
);

$row2 = new MooseElatedRow();
$group3->addChild(
	"row2",
	$row2
);

$pagination_button_background_hover_color = new MooseElatedField(
	"colorsimple",
	"pagination_button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pagination_button_background_hover_color",
	$pagination_button_background_hover_color
);

$pagination_button_background_active_color = new MooseElatedField(
	"colorsimple",
	"pagination_button_background_active_color",
	"",
	esc_html__( "Background Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pagination_button_background_active_color",
	$pagination_button_background_active_color
);

$pagination_button_border_color = new MooseElatedField(
	"colorsimple",
	"pagination_button_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pagination_button_border_color",
	$pagination_button_border_color
);

$pagination_button_border_hover_color = new MooseElatedField(
	"colorsimple",
	"pagination_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pagination_button_border_hover_color",
	$pagination_button_border_hover_color
);

$row3 = new MooseElatedRow();
$group3->addChild(
	"row3",
	$row3
);

$pagination_button_border_active_color = new MooseElatedField(
	"colorsimple",
	"pagination_button_border_active_color",
	"",
	esc_html__( "Border Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pagination_button_border_active_color",
	$pagination_button_border_active_color
);

$pagination_button_border_radius = new MooseElatedField(
	"textsimple",
	"pagination_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pagination_button_border_radius",
	$pagination_button_border_radius
);

$pagination_button_border_width = new MooseElatedField(
	"textsimple",
	"pagination_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pagination_button_border_width",
	$pagination_button_border_width
);

$group1 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text styles (this style will also be applied to Only Previous and Next type)", 'moose' )
);
$panel10->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$pagination_color = new MooseElatedField(
	"colorsimple",
	"pagination_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pagination_color",
	$pagination_color
);

$pagination_hover_color = new MooseElatedField(
	"colorsimple",
	"pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pagination_hover_color",
	$pagination_hover_color
);

$pagination_active_color = new MooseElatedField(
	"colorsimple",
	"pagination_active_color",
	"",
	esc_html__( "Active Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pagination_active_color",
	$pagination_active_color
);

$pagination_font_size = new MooseElatedField(
	"textsimple",
	"pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pagination_font_size",
	$pagination_font_size
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pagination_font_weight = new MooseElatedField(
	"selectblanksimple",
	"pagination_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"pagination_font_weight",
	$pagination_font_weight
);

$pagination_font_family = new MooseElatedField(
	"fontsimple",
	"pagination_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pagination_font_family",
	$pagination_font_family
);

$pagination_font_style = new MooseElatedField(
	"selectblanksimple",
	"pagination_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"pagination_font_style",
	$pagination_font_style
);

$pagination_letter_spacing = new MooseElatedField(
	"textsimple",
	"pagination_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pagination_letter_spacing",
	$pagination_letter_spacing
);

$group4 = new MooseElatedGroup(
	esc_html__( "Icon Arrow Style", 'moose' ),
	esc_html__( "Define arrow styles (this style will also be applied to Only Previous and Next type)", 'moose' )
);
$panel10->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$pagination_arrow_size = new MooseElatedField(
	"textsimple",
	"pagination_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pagination_arrow_size",
	$pagination_arrow_size
);

$pagination_arrows_type = new MooseElatedField(
	"selectblanksimple",
	"pagination_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'moose' ),
	"",
	moose_elated_get_arrows_type()
);
$row1->addChild(
	"pagination_arrows_type",
	$pagination_arrows_type
);

$pagination_double_arrows_type = new MooseElatedField(
	"selectblanksimple",
	"pagination_double_arrows_type",
	"",
	esc_html__( "First/Last Arrow Icon", 'moose' ),
	"",
	moose_elated_get_double_arrows_type()
);
$row1->addChild(
	"pagination_double_arrows_type",
	$pagination_double_arrows_type
);

$portfolio_pagination_section = new MooseElatedTitle(
	"portfolio_pagination_section",
	esc_html__( "Portfolio Pagination", 'moose' )
);
$panel10->addChild(
	"portfolio_pagination_section",
	$portfolio_pagination_section
);

$group2 = new MooseElatedGroup(
	esc_html__( "Portfolio Pagination Style", 'moose' ),
	esc_html__( "Define Pagination styles for portfolio single", 'moose' )
);
$panel10->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$portfolio_pagination_color = new MooseElatedField(
	"colorsimple",
	"portfolio_pagination_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_pagination_color",
	$portfolio_pagination_color
);

$portfolio_pagination_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_pagination_hover_color",
	$portfolio_pagination_hover_color
);

$portfolio_pagination_font_size = new MooseElatedField(
	"textsimple",
	"portfolio_pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_pagination_font_size",
	$portfolio_pagination_font_size
);

//Parallax Settings

$panel_parallax = new MooseElatedPanel(
	esc_html__( "Parallax", 'moose' ),
	"parallax_settings_panel"
);
$elementsPage->addChild(
	"panel_parallax",
	$panel_parallax
);

$parallax_onoff = new MooseElatedField(
	"onoff",
	"parallax_onoff",
	"off",
	esc_html__( "Parallax on touch devices", 'moose' ),
	esc_html__( "Enabling this option will allow parallax on touch devices", 'moose' )
);
$panel_parallax->addChild(
	"parallax_onoff",
	$parallax_onoff
);

$parallax_minheight = new MooseElatedField(
	"text",
	"parallax_minheight",
	"400",
	esc_html__( "Parallax Min Height (px)", 'moose' ),
	esc_html__( "Set a minimum height for parallax images on small displays (phones, tablets, etc.)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel_parallax->addChild(
	"parallax_minheight",
	$parallax_minheight
);

//Pie Charts

$panel11 = new MooseElatedPanel(
	esc_html__( "Pie Charts", 'moose' ),
	"pie_charts_panel"
);
$elementsPage->addChild(
	"panel11",
	$panel11
);

$pie_charts_margin_below_chart = new MooseElatedField(
	"text",
	"pie_charts_margin_below_chart",
	"",
	esc_html__( "Margin Below Chart (px)", 'moose' ),
	esc_html__( "Set margin below pie chart", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel11->addChild(
	"pie_charts_margin_below_chart",
	$pie_charts_margin_below_chart
);

$group1 = new MooseElatedGroup(
	esc_html__( "Pie Chart Percent Style", 'moose' ),
	esc_html__( "Define text style for Pie Charts percent number", 'moose' )
);
$panel11->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$pie_charts_fontsize = new MooseElatedField(
	"textsimple",
	"pie_charts_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pie_charts_fontsize",
	$pie_charts_fontsize
);

$pie_charts_fontweight = new MooseElatedField(
	"selectblanksimple",
	"pie_charts_fontweight",
	"",
	esc_html__( "Text Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"pie_charts_fontweight",
	$pie_charts_fontweight
);

//Pricing table

$panel12 = new MooseElatedPanel(
	esc_html__( "Pricing Table", 'moose' ),
	"pricing_table_panel"
);
$elementsPage->addChild(
	"panel12",
	$panel12
);

$group1 = new MooseElatedGroup(
	esc_html__( "Pricing Tables Style", 'moose' ),
	esc_html__( "Define Pricing tables style", 'moose' )
);
$panel12->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$pricing_table_title_background_color = new MooseElatedField(
	"colorsimple",
	"pricing_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_table_title_background_color",
	$pricing_table_title_background_color
);

$pricing_table_title_separator_color = new MooseElatedField(
	"colorsimple",
	"pricing_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_table_title_separator_color",
	$pricing_table_title_separator_color
);

$pricing_table_title_separator_thickness = new MooseElatedField(
	"textsimple",
	"pricing_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_table_title_separator_thickness",
	$pricing_table_title_separator_thickness
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pricing_table_title_top_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_title_top_padding",
	"",
	esc_html__( "Title Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_table_title_top_padding",
	$pricing_table_title_top_padding
);

$pricing_table_title_bottom_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_title_bottom_padding",
	"",
	esc_html__( "Title Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_table_title_bottom_padding",
	$pricing_table_title_bottom_padding
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$pricing_table_price_background_color = new MooseElatedField(
	"colorsimple",
	"pricing_table_price_background_color",
	"",
	esc_html__( "Price Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pricing_table_price_background_color",
	$pricing_table_price_background_color
);

$pricing_table_price_separator_color = new MooseElatedField(
	"colorsimple",
	"pricing_table_price_separator_color",
	"",
	esc_html__( "Price Separator Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pricing_table_price_separator_color",
	$pricing_table_price_separator_color
);

$pricing_table_price_separator_thickness = new MooseElatedField(
	"textsimple",
	"pricing_table_price_separator_thickness",
	"",
	esc_html__( "Price Separator Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pricing_table_price_separator_thickness",
	$pricing_table_price_separator_thickness
);

$row4 = new MooseElatedRow( true );
$group1->addChild(
	"row4",
	$row4
);

$pricing_table_price_top_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_price_top_padding",
	"",
	esc_html__( "Price Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"pricing_table_price_top_padding",
	$pricing_table_price_top_padding
);

$pricing_table_price_bottom_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_price_bottom_padding",
	"",
	esc_html__( "Price Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"pricing_table_price_bottom_padding",
	$pricing_table_price_bottom_padding
);

$row5 = new MooseElatedRow( true );
$group1->addChild(
	"row5",
	$row5
);

$pricing_table_background_color = new MooseElatedField(
	"colorsimple",
	"pricing_table_background_color",
	"",
	esc_html__( "Content Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row5->addChild(
	"pricing_table_background_color",
	$pricing_table_background_color
);

$pricing_table_separator_color = new MooseElatedField(
	"colorsimple",
	"pricing_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row5->addChild(
	"pricing_table_separator_color",
	$pricing_table_separator_color
);

$pricing_table_separator_thickness = new MooseElatedField(
	"textsimple",
	"pricing_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row5->addChild(
	"pricing_table_separator_thickness",
	$pricing_table_separator_thickness
);

$row6 = new MooseElatedRow( true );
$group1->addChild(
	"row6",
	$row6
);

$pricing_table_content_top_margin = new MooseElatedField(
	"textsimple",
	"pricing_table_content_top_margin",
	"",
	esc_html__( "Content Top Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row6->addChild(
	"pricing_table_content_top_margin",
	$pricing_table_content_top_margin
);

$pricing_table_content_bottom_margin = new MooseElatedField(
	"textsimple",
	"pricing_table_content_bottom_margin",
	"",
	esc_html__( "Content Bottom Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row6->addChild(
	"pricing_table_content_bottom_margin",
	$pricing_table_content_bottom_margin
);

$row7 = new MooseElatedRow( true );
$group1->addChild(
	"row7",
	$row7
);

$pricing_table_button_holder_background_color = new MooseElatedField(
	"colorsimple",
	"pricing_table_button_holder_background_color",
	"",
	esc_html__( "Button Holder Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row7->addChild(
	"pricing_table_button_holder_background_color",
	$pricing_table_button_holder_background_color
);

$pricing_table_button_top_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_button_top_padding",
	"",
	esc_html__( "Button Holder Padding Top(px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row7->addChild(
	"pricing_table_button_top_padding",
	$pricing_table_button_top_padding
);

$pricing_table_button_bottom_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_button_bottom_padding",
	"",
	esc_html__( "Button Holder Padding Bottom(px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row7->addChild(
	"pricing_table_button_bottom_padding",
	$pricing_table_button_bottom_padding
);

$group2 = new MooseElatedGroup(
	esc_html__( "Pricing Tables Active Text", 'moose' ),
	esc_html__( "DefinePricing tables active text style.", 'moose' )
);
$panel12->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$pricing_tables_active_text_color = new MooseElatedField(
	"colorsimple",
	"pricing_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_active_text_color",
	$pricing_tables_active_text_color
);

$pricing_tables_active_text_font_size = new MooseElatedField(
	"textsimple",
	"pricing_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_active_text_font_size",
	$pricing_tables_active_text_font_size
);

$pricing_tables_active_text_line_height = new MooseElatedField(
	"textsimple",
	"pricing_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_active_text_line_height",
	$pricing_tables_active_text_line_height
);

$pricing_tables_active_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"pricing_tables_active_text_text_transform",
	$pricing_tables_active_text_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$pricing_tables_active_text_font_family = new MooseElatedField(
	"fontsimple",
	"pricing_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_active_text_font_family",
	$pricing_tables_active_text_font_family
);

$pricing_tables_active_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"pricing_tables_active_text_font_style",
	$pricing_tables_active_text_font_style
);

$pricing_tables_active_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"pricing_tables_active_text_font_weight",
	$pricing_tables_active_text_font_weight
);

$pricing_tables_active_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"pricing_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_active_text_letter_spacing",
	$pricing_tables_active_text_letter_spacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Pricing Tables Title", 'moose' ),
	esc_html__( "Define Pricing tables title style", 'moose' )
);
$panel12->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$pricing_tables_title_color = new MooseElatedField(
	"colorsimple",
	"pricing_tables_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_title_color",
	$pricing_tables_title_color
);

$pricing_tables_title_font_size = new MooseElatedField(
	"textsimple",
	"pricing_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_title_font_size",
	$pricing_tables_title_font_size
);

$pricing_tables_title_line_height = new MooseElatedField(
	"textsimple",
	"pricing_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_title_line_height",
	$pricing_tables_title_line_height
);

$pricing_tables_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"pricing_tables_title_text_transform",
	$pricing_tables_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$pricing_tables_title_font_family = new MooseElatedField(
	"fontsimple",
	"pricing_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_title_font_family",
	$pricing_tables_title_font_family
);

$pricing_tables_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"pricing_tables_title_font_style",
	$pricing_tables_title_font_style
);

$pricing_tables_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"pricing_tables_title_font_weight",
	$pricing_tables_title_font_weight
);

$pricing_tables_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"pricing_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_title_letter_spacing",
	$pricing_tables_title_letter_spacing
);

$group4 = new MooseElatedGroup(
	esc_html__( "Pricing Tables Period", 'moose' ),
	esc_html__( "DefinePricing tables period style", 'moose' )
);
$panel12->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$pricing_tables_period_color = new MooseElatedField(
	"colorsimple",
	"pricing_tables_period_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_period_color",
	$pricing_tables_period_color
);

$pricing_tables_period_font_size = new MooseElatedField(
	"textsimple",
	"pricing_tables_period_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_period_font_size",
	$pricing_tables_period_font_size
);

$pricing_tables_period_line_height = new MooseElatedField(
	"textsimple",
	"pricing_tables_period_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_period_line_height",
	$pricing_tables_period_line_height
);

$pricing_tables_period_text_transform = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_period_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"pricing_tables_period_text_transform",
	$pricing_tables_period_text_transform
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$pricing_tables_period_font_family = new MooseElatedField(
	"fontsimple",
	"pricing_tables_period_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_period_font_family",
	$pricing_tables_period_font_family
);

$pricing_tables_period_font_style = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_period_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"pricing_tables_period_font_style",
	$pricing_tables_period_font_style
);

$pricing_tables_period_font_weight = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_period_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"pricing_tables_period_font_weight",
	$pricing_tables_period_font_weight
);

$pricing_tables_period_letter_spacing = new MooseElatedField(
	"textsimple",
	"pricing_tables_period_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_period_letter_spacing",
	$pricing_tables_period_letter_spacing
);

$group5 = new MooseElatedGroup(
	esc_html__( "Pricing Tables Price", 'moose' ),
	esc_html__( "Define Pricing Tables price style", 'moose' )
);
$panel12->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$pricing_tables_price_color = new MooseElatedField(
	"colorsimple",
	"pricing_tables_price_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_price_color",
	$pricing_tables_price_color
);

$pricing_tables_price_font_size = new MooseElatedField(
	"textsimple",
	"pricing_tables_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_price_font_size",
	$pricing_tables_price_font_size
);

$pricing_tables_price_line_height = new MooseElatedField(
	"textsimple",
	"pricing_tables_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_price_line_height",
	$pricing_tables_price_line_height
);

$pricing_tables_price_text_transform = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_price_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"pricing_tables_price_text_transform",
	$pricing_tables_price_text_transform
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$pricing_tables_price_font_family = new MooseElatedField(
	"fontsimple",
	"pricing_tables_price_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_price_font_family",
	$pricing_tables_price_font_family
);

$pricing_tables_price_font_style = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_price_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"pricing_tables_price_font_style",
	$pricing_tables_price_font_style
);

$pricing_tables_price_font_weight = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_price_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"pricing_tables_price_font_weight",
	$pricing_tables_price_font_weight
);

$pricing_tables_price_letter_spacing = new MooseElatedField(
	"textsimple",
	"pricing_tables_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_price_letter_spacing",
	$pricing_tables_price_letter_spacing
);

$group6 = new MooseElatedGroup(
	esc_html__( "Pricing Tables Currency", 'moose' ),
	esc_html__( "Define Pricing tables currency style.", 'moose' )
);
$panel12->addChild(
	"group6",
	$group6
);
$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$pricing_tables_currency_color = new MooseElatedField(
	"colorsimple",
	"pricing_tables_currency_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_currency_color",
	$pricing_tables_currency_color
);

$pricing_tables_currency_font_size = new MooseElatedField(
	"textsimple",
	"pricing_tables_currency_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_currency_font_size",
	$pricing_tables_currency_font_size
);

$pricing_tables_currency_line_height = new MooseElatedField(
	"textsimple",
	"pricing_tables_currency_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_currency_line_height",
	$pricing_tables_currency_line_height
);

$pricing_tables_currency_text_transform = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_currency_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"pricing_tables_currency_text_transform",
	$pricing_tables_currency_text_transform
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$pricing_tables_currency_font_family = new MooseElatedField(
	"fontsimple",
	"pricing_tables_currency_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_currency_font_family",
	$pricing_tables_currency_font_family
);

$pricing_tables_currency_font_style = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_currency_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"pricing_tables_currency_font_style",
	$pricing_tables_currency_font_style
);

$pricing_tables_currency_font_weight = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_currency_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"pricing_tables_currency_font_weight",
	$pricing_tables_currency_font_weight
);

$pricing_tables_currency_letter_spacing = new MooseElatedField(
	"textsimple",
	"pricing_tables_currency_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_currency_letter_spacing",
	$pricing_tables_currency_letter_spacing
);

$group7 = new MooseElatedGroup(
	esc_html__( "Pricing Tables Button", 'moose' ),
	esc_html__( "Define Pricing Tables button style.", 'moose' )
);
$panel12->addChild(
	"group7",
	$group7
);

$row1 = new MooseElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$pricing_tables_button_color = new MooseElatedField(
	"colorsimple",
	"pricing_tables_button_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_button_color",
	$pricing_tables_button_color
);

$pricing_tables_button_font_size = new MooseElatedField(
	"textsimple",
	"pricing_tables_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_button_font_size",
	$pricing_tables_button_font_size
);

$pricing_tables_button_line_height = new MooseElatedField(
	"textsimple",
	"pricing_tables_button_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_button_line_height",
	$pricing_tables_button_line_height
);

$pricing_tables_button_text_transform = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_button_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"pricing_tables_button_text_transform",
	$pricing_tables_button_text_transform
);

$row2 = new MooseElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$pricing_tables_button_font_family = new MooseElatedField(
	"fontsimple",
	"pricing_tables_button_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_button_font_family",
	$pricing_tables_button_font_family
);

$pricing_tables_button_font_style = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_button_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"pricing_tables_button_font_style",
	$pricing_tables_button_font_style
);

$pricing_tables_button_font_weight = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_button_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"pricing_tables_button_font_weight",
	$pricing_tables_button_font_weight
);

$pricing_tables_button_letter_spacing = new MooseElatedField(
	"textsimple",
	"pricing_tables_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_button_letter_spacing",
	$pricing_tables_button_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);
$pricing_tables_button_hovercolor = new MooseElatedField(
	"colorsimple",
	"pricing_tables_button_hovercolor",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pricing_tables_button_hovercolor",
	$pricing_tables_button_hovercolor
);

$pricing_tables_button_backgroundcolor = new MooseElatedField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor",
	$pricing_tables_button_backgroundcolor
);

$pricing_tables_button_backgroundcolor_hover = new MooseElatedField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor_hover",
	$pricing_tables_button_backgroundcolor_hover
);

$row4 = new MooseElatedRow( true );
$group7->addChild(
	"row4",
	$row4
);

$pricing_tables_button_border_width = new MooseElatedField(
	"textsimple",
	"pricing_tables_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"pricing_tables_button_border_width",
	$pricing_tables_button_border_width
);

$pricing_tables_button_border_radius = new MooseElatedField(
	"textsimple",
	"pricing_tables_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"pricing_tables_button_border_radius",
	$pricing_tables_button_border_radius
);

$pricing_tables_button_border_color = new MooseElatedField(
	"colorsimple",
	"pricing_tables_button_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"pricing_tables_button_border_color",
	$pricing_tables_button_border_color
);

$pricing_tables_button_border_hover_color = new MooseElatedField(
	"colorsimple",
	"pricing_tables_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"pricing_tables_button_border_hover_color",
	$pricing_tables_button_border_hover_color
);

$group9 = new MooseElatedGroup(
	esc_html__( "Pricing Tables Button Padding", 'moose' ),
	esc_html__( "Define Pricing Tables button padding (Takes effect only when pricing table button is set to size normal)", 'moose' )
);
$panel12->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow( true );
$group9->addChild(
	"row1",
	$row1
);

$pricing_table_button_left_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_button_left_padding",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_table_button_left_padding",
	$pricing_table_button_left_padding
);

$pricing_table_button_right_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_button_right_padding",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_table_button_right_padding",
	$pricing_table_button_right_padding
);

$group8 = new MooseElatedGroup(
	esc_html__( "Pricing Tables Content", 'moose' ),
	esc_html__( "Define Pricing Tables content style", 'moose' )
);
$panel12->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$pricing_tables_content_color = new MooseElatedField(
	"colorsimple",
	"pricing_tables_content_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_content_color",
	$pricing_tables_content_color
);

$pricing_tables_content_font_size = new MooseElatedField(
	"textsimple",
	"pricing_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_content_font_size",
	$pricing_tables_content_font_size
);

$pricing_tables_content_line_height = new MooseElatedField(
	"textsimple",
	"pricing_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pricing_tables_content_line_height",
	$pricing_tables_content_line_height
);

$pricing_tables_content_text_transform = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"pricing_tables_content_text_transform",
	$pricing_tables_content_text_transform
);

$row2 = new MooseElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);

$pricing_tables_content_font_family = new MooseElatedField(
	"fontsimple",
	"pricing_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_content_font_family",
	$pricing_tables_content_font_family
);

$pricing_tables_content_font_style = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"pricing_tables_content_font_style",
	$pricing_tables_content_font_style
);

$pricing_tables_content_font_weight = new MooseElatedField(
	"selectblanksimple",
	"pricing_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"pricing_tables_content_font_weight",
	$pricing_tables_content_font_weight
);

$pricing_tables_content_letter_spacing = new MooseElatedField(
	"textsimple",
	"pricing_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"pricing_tables_content_letter_spacing",
	$pricing_tables_content_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group8->addChild(
	"row3",
	$row3
);

$pricing_table_content_top_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_content_top_padding",
	"",
	esc_html__( "Content Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pricing_table_content_top_padding",
	$pricing_table_content_top_padding
);

$pricing_table_content_bottom_padding = new MooseElatedField(
	"textsimple",
	"pricing_table_content_bottom_padding",
	"",
	esc_html__( "Content Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"pricing_table_content_bottom_padding",
	$pricing_table_content_bottom_padding
);

//Service table

$panel22 = new MooseElatedPanel(
	esc_html__( "Service Table", 'moose' ),
	"service_table_panel"
);
$elementsPage->addChild(
	"panel22",
	$panel22
);

$group1 = new MooseElatedGroup(
	esc_html__( "Service Tables Style", 'moose' ),
	esc_html__( "Define Service tables style", 'moose' )
);
$panel22->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$service_table_title_background_color = new MooseElatedField(
	"colorsimple",
	"service_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_table_title_background_color",
	$service_table_title_background_color
);

$service_table_title_separator_color = new MooseElatedField(
	"colorsimple",
	"service_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_table_title_separator_color",
	$service_table_title_separator_color
);

$service_table_title_separator_thickness = new MooseElatedField(
	"textsimple",
	"service_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_table_title_separator_thickness",
	$service_table_title_separator_thickness
);

$row2 = new MooseElatedRow();
$group1->addChild(
	"row2",
	$row2
);

$service_table_title_padding_top = new MooseElatedField(
	"textsimple",
	"service_table_title_padding_top",
	"",
	esc_html__( "Title Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"service_table_title_padding_top",
	$service_table_title_padding_top
);

$service_table_title_padding_bottom = new MooseElatedField(
	"textsimple",
	"service_table_title_padding_bottom",
	"",
	esc_html__( "Title Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"service_table_title_padding_bottom",
	$service_table_title_padding_bottom
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$service_table_separator_color = new MooseElatedField(
	"colorsimple",
	"service_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"service_table_separator_color",
	$service_table_separator_color
);

$service_table_separator_thickness = new MooseElatedField(
	"textsimple",
	"service_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"service_table_separator_thickness",
	$service_table_separator_thickness
);

$service_table_separator_opacity = new MooseElatedField(
	"textsimple",
	"service_table_separator_opacity",
	"",
	esc_html__( "Content Separator Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"service_table_separator_opacity",
	$service_table_separator_opacity
);

$row4 = new MooseElatedRow();
$group1->addChild(
	"row4",
	$row4
);

$service_table_background_color = new MooseElatedField(
	"colorsimple",
	"service_table_background_color",
	"",
	esc_html__( "Content Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"service_table_background_color",
	$service_table_background_color
);

$service_table_content_padding_top = new MooseElatedField(
	"textsimple",
	"service_table_content_padding_top",
	"",
	esc_html__( "Content Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"service_table_content_padding_top",
	$service_table_content_padding_top
);

$service_table_content_padding_bottom = new MooseElatedField(
	"textsimple",
	"service_table_content_padding_bottom",
	"",
	esc_html__( "Content Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"service_table_content_padding_bottom",
	$service_table_content_padding_bottom
);

$group2 = new MooseElatedGroup(
	esc_html__( "Service Tables Active Text", 'moose' ),
	esc_html__( "DefineService tables active text style.", 'moose' )
);
$panel22->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$service_tables_active_text_color = new MooseElatedField(
	"colorsimple",
	"service_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_tables_active_text_color",
	$service_tables_active_text_color
);

$service_tables_active_text_font_size = new MooseElatedField(
	"textsimple",
	"service_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_tables_active_text_font_size",
	$service_tables_active_text_font_size
);

$service_tables_active_text_line_height = new MooseElatedField(
	"textsimple",
	"service_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_tables_active_text_line_height",
	$service_tables_active_text_line_height
);

$service_tables_active_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"service_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"service_tables_active_text_text_transform",
	$service_tables_active_text_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$service_tables_active_text_font_family = new MooseElatedField(
	"fontsimple",
	"service_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"service_tables_active_text_font_family",
	$service_tables_active_text_font_family
);

$service_tables_active_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"service_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"service_tables_active_text_font_style",
	$service_tables_active_text_font_style
);

$service_tables_active_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"service_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"service_tables_active_text_font_weight",
	$service_tables_active_text_font_weight
);

$service_tables_active_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"service_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"service_tables_active_text_letter_spacing",
	$service_tables_active_text_letter_spacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Service Tables Title", 'moose' ),
	esc_html__( "Define Service tables title style", 'moose' )
);
$panel22->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$service_tables_title_color = new MooseElatedField(
	"colorsimple",
	"service_tables_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_tables_title_color",
	$service_tables_title_color
);

$service_tables_title_font_size = new MooseElatedField(
	"textsimple",
	"service_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_tables_title_font_size",
	$service_tables_title_font_size
);

$service_tables_title_line_height = new MooseElatedField(
	"textsimple",
	"service_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_tables_title_line_height",
	$service_tables_title_line_height
);

$service_tables_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"service_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"service_tables_title_text_transform",
	$service_tables_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$service_tables_title_font_family = new MooseElatedField(
	"fontsimple",
	"service_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"service_tables_title_font_family",
	$service_tables_title_font_family
);

$service_tables_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"service_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"service_tables_title_font_style",
	$service_tables_title_font_style
);

$service_tables_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"service_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"service_tables_title_font_weight",
	$service_tables_title_font_weight
);

$service_tables_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"service_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"service_tables_title_letter_spacing",
	$service_tables_title_letter_spacing
);

$group4 = new MooseElatedGroup(
	esc_html__( "Service Tables Content", 'moose' ),
	esc_html__( "Define Service tables content style", 'moose' )
);
$panel22->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$service_tables_content_color = new MooseElatedField(
	"colorsimple",
	"service_tables_content_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_tables_content_color",
	$service_tables_content_color
);

$service_tables_content_font_size = new MooseElatedField(
	"textsimple",
	"service_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_tables_content_font_size",
	$service_tables_content_font_size
);

$service_tables_content_line_height = new MooseElatedField(
	"textsimple",
	"service_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"service_tables_content_line_height",
	$service_tables_content_line_height
);

$service_tables_content_text_transform = new MooseElatedField(
	"selectblanksimple",
	"service_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"service_tables_content_text_transform",
	$service_tables_content_text_transform
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$service_tables_content_font_family = new MooseElatedField(
	"fontsimple",
	"service_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"service_tables_content_font_family",
	$service_tables_content_font_family
);

$service_tables_content_font_style = new MooseElatedField(
	"selectblanksimple",
	"service_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"service_tables_content_font_style",
	$service_tables_content_font_style
);

$service_tables_content_font_weight = new MooseElatedField(
	"selectblanksimple",
	"service_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"service_tables_content_font_weight",
	$service_tables_content_font_weight
);

$service_tables_content_letter_spacing = new MooseElatedField(
	"textsimple",
	"service_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"service_tables_content_letter_spacing",
	$service_tables_content_letter_spacing
);

//Separators

$panel13 = new MooseElatedPanel(
	esc_html__( "Separators", 'moose' ),
	"separators_panel"
);
$elementsPage->addChild(
	"panel13",
	$panel13
);

$group1 = new MooseElatedGroup(
	esc_html__( "Normal", 'moose' ),
	esc_html__( 'Define styles for separator of type "Normal"', 'moose' )
);
$panel13->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$separator_color = new MooseElatedField(
	"colorsimple",
	"separator_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"separator_color",
	$separator_color
);

$separator_thickness = new MooseElatedField(
	"textsimple",
	"separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"separator_thickness",
	$separator_thickness
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separator_topmargin = new MooseElatedField(
	"textsimple",
	"separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"separator_topmargin",
	$separator_topmargin
);

$separator_bottommargin = new MooseElatedField(
	"textsimple",
	"separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"separator_bottommargin",
	$separator_bottommargin
);

$separator_type = new MooseElatedField(
	"selectblanksimple",
	"separator_type",
	"",
	esc_html__( "Separator type", 'moose' ),
	"",
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' )
	)
);
$row2->addChild(
	"separator_type",
	$separator_type
);

$group2 = new MooseElatedGroup(
	esc_html__( "Small", 'moose' ),
	esc_html__( 'Define styles for separator of type "Small"', 'moose' )
);
$panel13->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$separator_small_color = new MooseElatedField(
	"colorsimple",
	"separator_small_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"separator_small_color",
	$separator_small_color
);

$separator_small_thickness = new MooseElatedField(
	"textsimple",
	"separator_small_thickness",
	"",
	esc_html__( "Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"separator_small_thickness",
	$separator_small_thickness
);

$separator_small_width = new MooseElatedField(
	"textsimple",
	"separator_small_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"separator_small_width",
	$separator_small_width
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$separator_small_topmargin = new MooseElatedField(
	"textsimple",
	"separator_small_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"separator_small_topmargin",
	$separator_small_topmargin
);

$separator_small_bottommargin = new MooseElatedField(
	"textsimple",
	"separator_small_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"separator_small_bottommargin",
	$separator_small_bottommargin
);

$separator_small_type = new MooseElatedField(
	"selectsimple",
	"separator_small_type",
	"",
	esc_html__( "Separator type", 'moose' ),
	"",
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' )
	)
);
$row2->addChild(
	"separator_small_type",
	$separator_small_type
);

//Separators with text

$panel23 = new MooseElatedPanel(
	esc_html__( "Separators with Text", 'moose' ),
	"separators_with_text_panel"
);
$elementsPage->addChild(
	"panel23",
	$panel23
);

$group1 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( 'Define text styles for separator with text', 'moose' )
);
$panel23->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$separators_with_text_text_color = new MooseElatedField(
	"colorsimple",
	"separators_with_text_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"separators_with_text_text_color",
	$separators_with_text_text_color
);

$separators_with_text_text_hover_color = new MooseElatedField(
	"colorsimple",
	"separators_with_text_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"separators_with_text_text_hover_color",
	$separators_with_text_text_hover_color
);

$separators_with_text_text_fontsize = new MooseElatedField(
	"textsimple",
	"separators_with_text_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"separators_with_text_text_fontsize",
	$separators_with_text_text_fontsize
);

$separators_with_text_text_lineheight = new MooseElatedField(
	"textsimple",
	"separators_with_text_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"separators_with_text_text_lineheight",
	$separators_with_text_text_lineheight
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separators_with_text_text_texttransform = new MooseElatedField(
	"selectblanksimple",
	"separators_with_text_text_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"separators_with_text_text_texttransform",
	$separators_with_text_text_texttransform
);

$separators_with_text_text_google_fonts = new MooseElatedField(
	"fontsimple",
	"separators_with_text_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"separators_with_text_text_google_fonts",
	$separators_with_text_text_google_fonts
);

$separators_with_text_text_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"separators_with_text_text_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"separators_with_text_text_fontstyle",
	$separators_with_text_text_fontstyle
);

$separators_with_text_text_fontweight = new MooseElatedField(
	"selectblanksimple",
	"separators_with_text_text_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"separators_with_text_text_fontweight",
	$separators_with_text_text_fontweight
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$separators_with_text_text_letterspacing = new MooseElatedField(
	"textsimple",
	"separators_with_text_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"separators_with_text_text_letterspacing",
	$separators_with_text_text_letterspacing
);

$panel24 = new MooseElatedPanel(
	esc_html__( "Single Image", 'moose' ),
	"single_image_panel"
);
$elementsPage->addChild(
	"panel24",
	$panel24
);

$group1 = new MooseElatedGroup(
	esc_html__( "Hover Style", 'moose' ),
	esc_html__( "Define hover style", 'moose' )
);
$panel24->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$single_image_hover_color = new MooseElatedField(
	"colorsimple",
	"single_image_hover_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_image_hover_color",
	$single_image_hover_color
);

$single_image_hover_transparency = new MooseElatedField(
	"textsimple",
	"single_image_hover_transparency",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_image_hover_transparency",
	$single_image_hover_transparency
);

//Slider Navigation Interface

$panel9 = new MooseElatedPanel(
	esc_html__( "Slider Navigation Interface", 'moose' ),
	"navigation_panel"
);
$elementsPage->addChild(
	"panel9",
	$panel9
);

$navigation_slider_horizontal_section = new MooseElatedTitle(
	"navigation_slider_horizontal_section",
	esc_html__( "Elated Slider", 'moose' )
);
$panel9->addChild(
	"navigation_slider_horizontal_section",
	$navigation_slider_horizontal_section
);

$group1 = new MooseElatedGroup(
	esc_html__( "Navigation Button Size", 'moose' ),
	esc_html__( "Define navigation button size", 'moose' )
);
$panel9->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$navigation_button_width = new MooseElatedField(
	"textsimple",
	"navigation_button_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_button_width",
	$navigation_button_width
);

$navigation_button_height = new MooseElatedField(
	"textsimple",
	"navigation_button_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_button_height",
	$navigation_button_height
);

$group9 = new MooseElatedGroup(
	esc_html__( "Navigation Button Position", 'moose' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'moose' )
);
$panel9->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_position = new MooseElatedField(
	"textsimple",
	"navigation_button_position",
	"",
	esc_html__( "Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_button_position",
	$navigation_button_position
);

$group2 = new MooseElatedGroup(
	esc_html__( "Icon Arrow Style", 'moose' ),
	esc_html__( "Define arrow navigation style", 'moose' )
);
$panel9->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$navigation_arrow_size = new MooseElatedField(
	"textsimple",
	"navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'moose' ),
	esc_html__( "Default value is 14    ", 'moose' )
);
$row1->addChild(
	"navigation_arrow_size",
	$navigation_arrow_size
);

$navigation_arrows_type = new MooseElatedField(
	"selectblanksimple",
	"navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'moose' ),
	"",
	moose_elated_get_arrows_type()
);
$row1->addChild(
	"navigation_arrows_type",
	$navigation_arrows_type
);

$navigation_arrow_color = new MooseElatedField(
	"colorsimple",
	"navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_arrow_color",
	$navigation_arrow_color
);

$navigation_arrow_transparency = new MooseElatedField(
	"textsimple",
	"navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_arrow_transparency",
	$navigation_arrow_transparency
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$navigation_arrow_hover_color = new MooseElatedField(
	"colorsimple",
	"navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"navigation_arrow_hover_color",
	$navigation_arrow_hover_color
);

$navigation_arrow_hover_transparency = new MooseElatedField(
	"textsimple",
	"navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"navigation_arrow_hover_transparency",
	$navigation_arrow_hover_transparency
);

$navigation_number_group = new MooseElatedGroup(
	esc_html__( 'Navigation Numbers Style', 'moose' ),
	esc_html__( 'Define navigation numbers style', 'moose' )
);
$panel9->addChild(
	'navigation_number_group',
	$navigation_number_group
);

$row1 = new MooseElatedRow();
$navigation_number_group->addChild(
	'row1',
	$row1
);

$navigation_number_font_size = new MooseElatedField(
	'textsimple',
	'navigation_number_font_size',
	'',
	esc_html__( 'Font Size (px)', 'moose' ),
	''
);
$row1->addChild(
	'navigation_number_font_size',
	$navigation_number_font_size
);

$navigation_number_letter_spacing = new MooseElatedField(
	'textsimple',
	'navigation_number_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'moose' ),
	''
);
$row1->addChild(
	'navigation_number_letter_spacing',
	$navigation_number_letter_spacing
);

$navigation_number_line_height = new MooseElatedField(
	'textsimple',
	'navigation_number_line_height',
	'',
	esc_html__( 'Line Height', 'moose' ),
	''
);
$row1->addChild(
	'navigation_number_line_height',
	$navigation_number_line_height
);

$navigation_number_font_font_family = new MooseElatedField(
	'fontsimple',
	'navigation_number_font_font_family',
	'-1',
	esc_html__( 'Font Family', 'moose' ),
	''
);
$row1->addChild(
	'navigation_number_font_font_family',
	$navigation_number_font_font_family
);

$row2 = new MooseElatedRow( true );
$navigation_number_group->addChild(
	'row2',
	$row2
);

$navigation_number_font_style = new MooseElatedField(
	'selectsimple',
	'navigation_number_font_style',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row2->addChild(
	'navigation_number_font_style',
	$navigation_number_font_style
);

$navigation_number_font_weight = new MooseElatedField(
	'selectsimple',
	'navigation_number_font_weight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	'navigation_number_font_weight',
	$navigation_number_font_weight
);

$row3 = new MooseElatedRow( true );
$navigation_number_group->addChild(
	'row3',
	$row3
);

$navigation_number_color = new MooseElatedField(
	'colorsimple',
	'navigation_number_color',
	'',
	esc_html__( 'Color', 'moose' ),
	''
);
$row3->addChild(
	'navigation_number_color',
	$navigation_number_color
);

$navigation_number_hover_color = new MooseElatedField(
	'colorsimple',
	'navigation_number_hover_color',
	'',
	esc_html__( 'Hover Color', 'moose' ),
	''
);
$row3->addChild(
	'navigation_number_hover_color',
	$navigation_number_hover_color
);

$navigation_number_transparency = new MooseElatedField(
	'textsimple',
	'navigation_number_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' ),
	''
);
$row3->addChild(
	'navigation_number_transparency',
	$navigation_number_transparency
);

$navigation_number_hover_transparency = new MooseElatedField(
	'textsimple',
	'navigation_number_hover_transparency',
	'',
	esc_html__( 'Hover Transparency (0=full - 1=opaque)', 'moose' ),
	''
);
$row3->addChild(
	'navigation_number_hover_transparency',
	$navigation_number_hover_transparency
);

$group3 = new MooseElatedGroup(
	esc_html__( "Navigation Button Background", 'moose' ),
	esc_html__( "Define navigation button background", 'moose' )
);
$panel9->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$navigation_background_color = new MooseElatedField(
	"colorsimple",
	"navigation_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_background_color",
	$navigation_background_color
);

$navigation_background_transparency = new MooseElatedField(
	"textsimple",
	"navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_background_transparency",
	$navigation_background_transparency
);

$navigation_background_hover_color = new MooseElatedField(
	"colorsimple",
	"navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_background_hover_color",
	$navigation_background_hover_color
);

$navigation_background_hover_transparency = new MooseElatedField(
	"textsimple",
	"navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_background_hover_transparency",
	$navigation_background_hover_transparency
);

$group4 = new MooseElatedGroup(
	esc_html__( "Navigation Button Border", 'moose' ),
	esc_html__( "Define border style", 'moose' )
);
$panel9->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$navigation_border_width = new MooseElatedField(
	"textsimple",
	"navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'moose' ),
	""
);
$row1->addChild(
	"navigation_border_width",
	$navigation_border_width
);

$navigation_border_radius = new MooseElatedField(
	"textsimple",
	"navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_border_radius",
	$navigation_border_radius
);

$navigation_border_color = new MooseElatedField(
	"colorsimple",
	"navigation_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_border_color",
	$navigation_border_color
);

$navigation_border_transparency = new MooseElatedField(
	"textsimple",
	"navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_border_transparency",
	$navigation_border_transparency
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$navigation_border_hover_color = new MooseElatedField(
	"colorsimple",
	"navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"navigation_border_hover_color",
	$navigation_border_hover_color
);

$navigation_border_hover_transparency = new MooseElatedField(
	"textsimple",
	"navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"navigation_border_hover_transparency",
	$navigation_border_hover_transparency
);

$navigation_show_button_shadow = new MooseElatedField(
	"yesno",
	"navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'moose' ),
	esc_html__( "Enabling this options will show button shadow", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"navigation_show_button_shadow",
	$navigation_show_button_shadow
);

$navigation_button_shadow_container = new MooseElatedContainer(
	"navigation_button_shadow_container",
	"navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"navigation_button_shadow_container",
	$navigation_button_shadow_container
);

$group9 = new MooseElatedGroup(
	esc_html__( "Button Shadow", 'moose' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'moose' )
);
$navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_shadow_color = new MooseElatedField(
	"colorsimple",
	"navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose color for  box shadow", 'moose' )
);
$row1->addChild(
	"navigation_button_shadow_color",
	$navigation_button_shadow_color
);

$row2 = new MooseElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$navigation_button_h_shadow = new MooseElatedField(
	"textsimple",
	"navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'moose' ),
	""
);
$row2->addChild(
	"navigation_button_h_shadow",
	$navigation_button_h_shadow
);

$navigation_button_v_shadow = new MooseElatedField(
	"textsimple",
	"navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'moose' ),
	""
);
$row2->addChild(
	"navigation_button_v_shadow",
	$navigation_button_v_shadow
);

$navigation_button_blur = new MooseElatedField(
	"textsimple",
	"navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'moose' ),
	""
);
$row2->addChild(
	"navigation_button_blur",
	$navigation_button_blur
);

$navigation_button_spread = new MooseElatedField(
	"textsimple",
	"navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'moose' ),
	""
);
$row2->addChild(
	"navigation_button_spread",
	$navigation_button_spread
);

$navigation_carousels_slider = new MooseElatedTitle(
	"navigation_carousels_slider",
	esc_html__( "Carousel Sliders", 'moose' )
);
$panel9->addChild(
	"navigation_carousels_slider",
	$navigation_carousels_slider
);

$group16 = new MooseElatedGroup(
	esc_html__( "Navigation Button Size", 'moose' ),
	esc_html__( "Define navigation button size", 'moose' )
);
$panel9->addChild(
	"group16",
	$group16
);

$row1 = new MooseElatedRow();
$group16->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_width = new MooseElatedField(
	"textsimple",
	"carousel_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_button_width",
	$carousel_navigation_button_width
);

$carousel_navigation_button_height = new MooseElatedField(
	"textsimple",
	"carousel_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_button_height",
	$carousel_navigation_button_height
);

$group17 = new MooseElatedGroup(
	esc_html__( "Navigation Button Position", 'moose' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'moose' )
);
$panel9->addChild(
	"group17",
	$group17
);

$row1 = new MooseElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_position = new MooseElatedField(
	"textsimple",
	"carousel_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_button_position",
	$carousel_navigation_button_position
);

$group18 = new MooseElatedGroup(
	esc_html__( "Icon Arrow Style", 'moose' ),
	esc_html__( "Define arrow navigation style", 'moose' )
);
$panel9->addChild(
	"group18",
	$group18
);
$row1 = new MooseElatedRow();
$group18->addChild(
	"row1",
	$row1
);

$carousel_navigation_arrow_size = new MooseElatedField(
	"textsimple",
	"carousel_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'moose' ),
	esc_html__( "Default value is 14    ", 'moose' )
);
$row1->addChild(
	"carousel_navigation_arrow_size",
	$carousel_navigation_arrow_size
);

$carousel_navigation_arrows_type = new MooseElatedField(
	"selectblanksimple",
	"carousel_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'moose' ),
	"",
	moose_elated_get_arrows_type()
);
$row1->addChild(
	"carousel_navigation_arrows_type",
	$carousel_navigation_arrows_type
);

$carousel_navigation_arrow_color = new MooseElatedField(
	"colorsimple",
	"carousel_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_arrow_color",
	$carousel_navigation_arrow_color
);

$carousel_navigation_arrow_transparency = new MooseElatedField(
	"textsimple",
	"carousel_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_arrow_transparency",
	$carousel_navigation_arrow_transparency
);

$row2 = new MooseElatedRow( true );
$group18->addChild(
	"row2",
	$row2
);

$carousel_navigation_arrow_hover_color = new MooseElatedField(
	"colorsimple",
	"carousel_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_color",
	$carousel_navigation_arrow_hover_color
);

$carousel_navigation_arrow_hover_transparency = new MooseElatedField(
	"textsimple",
	"carousel_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_transparency",
	$carousel_navigation_arrow_hover_transparency
);

$group19 = new MooseElatedGroup(
	esc_html__( "Navigation Button Background", 'moose' ),
	esc_html__( "Define navigation button background", 'moose' )
);
$panel9->addChild(
	"group19",
	$group19
);

$row1 = new MooseElatedRow();
$group19->addChild(
	"row1",
	$row1
);

$carousel_navigation_background_color = new MooseElatedField(
	"colorsimple",
	"carousel_navigation_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_background_color",
	$carousel_navigation_background_color
);

$carousel_navigation_background_transparency = new MooseElatedField(
	"textsimple",
	"carousel_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_background_transparency",
	$carousel_navigation_background_transparency
);

$carousel_navigation_background_hover_color = new MooseElatedField(
	"colorsimple",
	"carousel_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_background_hover_color",
	$carousel_navigation_background_hover_color
);

$carousel_navigation_background_hover_transparency = new MooseElatedField(
	"textsimple",
	"carousel_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_background_hover_transparency",
	$carousel_navigation_background_hover_transparency
);

$group10 = new MooseElatedGroup(
	esc_html__( "Navigation Button Border", 'moose' ),
	esc_html__( "Define border style", 'moose' )
);
$panel9->addChild(
	"group10",
	$group10
);

$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$carousel_navigation_border_width = new MooseElatedField(
	"textsimple",
	"carousel_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'moose' ),
	""
);
$row1->addChild(
	"carousel_navigation_border_width",
	$carousel_navigation_border_width
);

$carousel_navigation_border_radius = new MooseElatedField(
	"textsimple",
	"carousel_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_border_radius",
	$carousel_navigation_border_radius
);

$carousel_navigation_border_color = new MooseElatedField(
	"colorsimple",
	"carousel_navigation_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_border_color",
	$carousel_navigation_border_color
);

$carousel_navigation_border_transparency = new MooseElatedField(
	"textsimple",
	"carousel_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"carousel_navigation_border_transparency",
	$carousel_navigation_border_transparency
);

$row2 = new MooseElatedRow( true );
$group10->addChild(
	"row2",
	$row2
);

$carousel_navigation_border_hover_color = new MooseElatedField(
	"colorsimple",
	"carousel_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"carousel_navigation_border_hover_color",
	$carousel_navigation_border_hover_color
);

$carousel_navigation_border_hover_transparency = new MooseElatedField(
	"textsimple",
	"carousel_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"carousel_navigation_border_hover_transparency",
	$carousel_navigation_border_hover_transparency
);

$carousel_navigation_show_button_shadow = new MooseElatedField(
	"yesno",
	"carousel_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'moose' ),
	esc_html__( "Enabling this options will show button shadow", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_carousel_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"carousel_navigation_show_button_shadow",
	$carousel_navigation_show_button_shadow
);

$carousel_navigation_button_shadow_container = new MooseElatedContainer(
	"carousel_navigation_button_shadow_container",
	"carousel_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"carousel_navigation_button_shadow_container",
	$carousel_navigation_button_shadow_container
);

$group9 = new MooseElatedGroup(
	esc_html__( "Button Shadow", 'moose' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'moose' )
);
$carousel_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_shadow_color = new MooseElatedField(
	"colorsimple",
	"carousel_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose color for  box shadow", 'moose' )
);
$row1->addChild(
	"carousel_navigation_button_shadow_color",
	$carousel_navigation_button_shadow_color
);

$row2 = new MooseElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$carousel_navigation_button_h_shadow = new MooseElatedField(
	"textsimple",
	"carousel_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'moose' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_h_shadow",
	$carousel_navigation_button_h_shadow
);

$carousel_navigation_button_v_shadow = new MooseElatedField(
	"textsimple",
	"carousel_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'moose' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_v_shadow",
	$carousel_navigation_button_v_shadow
);

$carousel_navigation_button_blur = new MooseElatedField(
	"textsimple",
	"carousel_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'moose' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_blur",
	$carousel_navigation_button_blur
);

$carousel_navigation_button_spread = new MooseElatedField(
	"textsimple",
	"carousel_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'moose' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_spread",
	$carousel_navigation_button_spread
);

$navigation_single_sliders_slider = new MooseElatedTitle(
	"navigation_single_sliders_slider",
	esc_html__( "Flex Sliders", 'moose' )
);
$panel9->addChild(
	"navigation_single_sliders_slider",
	$navigation_single_sliders_slider
);

$group11 = new MooseElatedGroup(
	esc_html__( "Navigation Button Size", 'moose' ),
	esc_html__( "Define navigation button size", 'moose' )
);
$panel9->addChild(
	"group11",
	$group11
);
$row1 = new MooseElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_width = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_button_width",
	$single_slider_navigation_button_width
);

$single_slider_navigation_button_height = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_button_height",
	$single_slider_navigation_button_height
);

$group12 = new MooseElatedGroup(
	esc_html__( "Navigation Button Position", 'moose' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'moose' )
);
$panel9->addChild(
	"group12",
	$group12
);

$row1 = new MooseElatedRow();
$group12->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_position = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_button_position",
	$single_slider_navigation_button_position
);

$group13 = new MooseElatedGroup(
	esc_html__( "Icon Arrow Style", 'moose' ),
	esc_html__( "Define arrow navigation style", 'moose' )
);
$panel9->addChild(
	"group13",
	$group13
);
$row1 = new MooseElatedRow();
$group13->addChild(
	"row1",
	$row1
);

$single_slider_navigation_arrow_size = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'moose' ),
	esc_html__( "Default value is 14    ", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_arrow_size",
	$single_slider_navigation_arrow_size
);

$single_slider_navigation_arrows_type = new MooseElatedField(
	"selectblanksimple",
	"single_slider_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'moose' ),
	"",
	moose_elated_get_arrows_type()
);
$row1->addChild(
	"single_slider_navigation_arrows_type",
	$single_slider_navigation_arrows_type
);

$single_slider_navigation_arrow_color = new MooseElatedField(
	"colorsimple",
	"single_slider_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_arrow_color",
	$single_slider_navigation_arrow_color
);

$single_slider_navigation_arrow_transparency = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_arrow_transparency",
	$single_slider_navigation_arrow_transparency
);

$row2 = new MooseElatedRow( true );
$group13->addChild(
	"row2",
	$row2
);

$single_slider_navigation_arrow_hover_color = new MooseElatedField(
	"colorsimple",
	"single_slider_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_color",
	$single_slider_navigation_arrow_hover_color
);

$single_slider_navigation_arrow_hover_transparency = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_transparency",
	$single_slider_navigation_arrow_hover_transparency
);

$group14 = new MooseElatedGroup(
	esc_html__( "Navigation Button Background", 'moose' ),
	esc_html__( "Define navigation button background", 'moose' )
);
$panel9->addChild(
	"group14",
	$group14
);

$row1 = new MooseElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$single_slider_navigation_background_color = new MooseElatedField(
	"colorsimple",
	"single_slider_navigation_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_background_color",
	$single_slider_navigation_background_color
);

$single_slider_navigation_background_transparency = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_background_transparency",
	$single_slider_navigation_background_transparency
);

$single_slider_navigation_background_hover_color = new MooseElatedField(
	"colorsimple",
	"single_slider_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_color",
	$single_slider_navigation_background_hover_color
);

$single_slider_navigation_background_hover_transparency = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_transparency",
	$single_slider_navigation_background_hover_transparency
);

$group15 = new MooseElatedGroup(
	esc_html__( "Navigation Button Border", 'moose' ),
	esc_html__( "Define border style", 'moose' )
);
$panel9->addChild(
	"group15",
	$group15
);

$row1 = new MooseElatedRow();
$group15->addChild(
	"row1",
	$row1
);

$single_slider_navigation_border_width = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'moose' ),
	""
);
$row1->addChild(
	"single_slider_navigation_border_width",
	$single_slider_navigation_border_width
);

$single_slider_navigation_border_radius = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_border_radius",
	$single_slider_navigation_border_radius
);

$single_slider_navigation_border_color = new MooseElatedField(
	"colorsimple",
	"single_slider_navigation_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_border_color",
	$single_slider_navigation_border_color
);

$single_slider_navigation_border_transparency = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_border_transparency",
	$single_slider_navigation_border_transparency
);

$row2 = new MooseElatedRow( true );
$group15->addChild(
	"row2",
	$row2
);

$single_slider_navigation_border_hover_color = new MooseElatedField(
	"colorsimple",
	"single_slider_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_color",
	$single_slider_navigation_border_hover_color
);

$single_slider_navigation_border_hover_transparency = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_transparency",
	$single_slider_navigation_border_hover_transparency
);

$single_slider_navigation_show_button_shadow = new MooseElatedField(
	"yesno",
	"single_slider_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'moose' ),
	esc_html__( "Enabling this options will show button shadow", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_single_slider_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"single_slider_navigation_show_button_shadow",
	$single_slider_navigation_show_button_shadow
);

$single_slider_navigation_button_shadow_container = new MooseElatedContainer(
	"single_slider_navigation_button_shadow_container",
	"single_slider_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"single_slider_navigation_button_shadow_container",
	$single_slider_navigation_button_shadow_container
);

$group9 = new MooseElatedGroup(
	esc_html__( "Button Shadow", 'moose' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'moose' )
);
$single_slider_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_shadow_color = new MooseElatedField(
	"colorsimple",
	"single_slider_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose color for  box shadow", 'moose' )
);
$row1->addChild(
	"single_slider_navigation_button_shadow_color",
	$single_slider_navigation_button_shadow_color
);

$row2 = new MooseElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$single_slider_navigation_button_h_shadow = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'moose' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_h_shadow",
	$single_slider_navigation_button_h_shadow
);

$single_slider_navigation_button_v_shadow = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'moose' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_v_shadow",
	$single_slider_navigation_button_v_shadow
);

$single_slider_navigation_button_blur = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'moose' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_blur",
	$single_slider_navigation_button_blur
);

$single_slider_navigation_button_spread = new MooseElatedField(
	"textsimple",
	"single_slider_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'moose' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_spread",
	$single_slider_navigation_button_spread
);

$slider_circle_navigation = new MooseElatedTitle(
	"slider_circle_navigation",
	esc_html__( "Bullet Navigation", 'moose' )
);
$panel9->addChild(
	"slider_circle_navigation",
	$slider_circle_navigation
);

$group8 = new MooseElatedGroup(
	esc_html__( "Navigation Controls", 'moose' ),
	esc_html__( "Define navigation controls style", 'moose' )
);
$panel9->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$navigation_control_color = new MooseElatedField(
	"colorsimple",
	"navigation_control_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_control_color",
	$navigation_control_color
);

$navigation_control_active_color = new MooseElatedField(
	"colorsimple",
	"navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_control_active_color",
	$navigation_control_active_color
);

$navigation_control_size = new MooseElatedField(
	"textsimple",
	"navigation_control_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_control_size",
	$navigation_control_size
);

$navigation_control_active_size = new MooseElatedField(
	"textsimple",
	"navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"navigation_control_active_size",
	$navigation_control_active_size
);

$row2 = new MooseElatedRow();
$group8->addChild(
	"row2",
	$row2
);

$navigation_control_border_color = new MooseElatedField(
	"colorsimple",
	"navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"navigation_control_border_color",
	$navigation_control_border_color
);

$navigation_control_active_border_color = new MooseElatedField(
	"colorsimple",
	"navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"navigation_control_active_border_color",
	$navigation_control_active_border_color
);

$navigation_control_border_radius = new MooseElatedField(
	"textsimple",
	"navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"navigation_control_border_radius",
	$navigation_control_border_radius
);

$navigation_slider_vertical_section = new MooseElatedTitle(
	"navigation_slider_vertical_section",
	esc_html__( "Vertical Sliders (Full Screen Section Template)", 'moose' )
);
$panel9->addChild(
	"navigation_slider_vertical_section",
	$navigation_slider_vertical_section
);

$fs_navigation_slider_vertical_section_type = new MooseElatedField(
	'select',
	'fs_navigation_slider_vertical_section_type',
	'arrows',
	esc_html__( 'Navigation Type', 'moose' ),
	esc_html__( 'Choose type of Navigation for Vertical Sliders', 'moose' ),
	array(
		'arrows' => esc_html__( 'Arrows', 'moose' ),
		'bullets' => esc_html__( 'Bullets', 'moose' ),
		'both' => esc_html__( 'Both', 'moose' )
	)
);
$panel9->addChild(
	'fs_navigation_slider_vertical_section_type',
	$fs_navigation_slider_vertical_section_type
);

$group6 = new MooseElatedGroup(
	esc_html__( "Arrow Navigation Button Size", 'moose' ),
	esc_html__( "Define arrow navigation button size", 'moose' )
);
$panel9->addChild(
	"group6",
	$group6
);
$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$fs_navigation_button_width = new MooseElatedField(
	"textsimple",
	"fs_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_button_width",
	$fs_navigation_button_width
);

$fs_navigation_button_height = new MooseElatedField(
	"textsimple",
	"fs_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_button_height",
	$fs_navigation_button_height
);

$group5 = new MooseElatedGroup(
	esc_html__( "Arrow Icon Style", 'moose' ),
	esc_html__( "Define icon arrow style", 'moose' )
);
$panel9->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$fs_navigation_arrow_size = new MooseElatedField(
	"textsimple",
	"fs_navigation_arrow_size",
	"",
	esc_html__( "Icon Arrow Size (px)", 'moose' ),
	esc_html__( "Define size for arrow navigation icons", 'moose' )
);
$row1->addChild(
	"fs_navigation_arrow_size",
	$fs_navigation_arrow_size
);

$fs_navigation_arrow_color = new MooseElatedField(
	"colorsimple",
	"fs_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_arrow_color",
	$fs_navigation_arrow_color
);

$fs_navigation_arrow_hover_color = new MooseElatedField(
	"colorsimple",
	"fs_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_arrow_hover_color",
	$fs_navigation_arrow_hover_color
);

$group7 = new MooseElatedGroup(
	esc_html__( "Arrow Navigation Button Background", 'moose' ),
	esc_html__( "Define arrow navigation button background", 'moose' )
);
$panel9->addChild(
	"group7",
	$group7
);

$row1 = new MooseElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$fs_navigation_background_color = new MooseElatedField(
	"colorsimple",
	"fs_navigation_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_background_color",
	$fs_navigation_background_color
);

$fs_navigation_background_transparency = new MooseElatedField(
	"textsimple",
	"fs_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_background_transparency",
	$fs_navigation_background_transparency
);

$fs_navigation_background_hover_color = new MooseElatedField(
	"colorsimple",
	"fs_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_background_hover_color",
	$fs_navigation_background_hover_color
);

$fs_navigation_background_hover_transparency = new MooseElatedField(
	"textsimple",
	"fs_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_background_hover_transparency",
	$fs_navigation_background_hover_transparency
);

$group20 = new MooseElatedGroup(
	esc_html__( "Bullets Navigation", 'moose' ),
	esc_html__( "Define bullets navigation style", 'moose' )
);
$panel9->addChild(
	"group20",
	$group20
);

$row1 = new MooseElatedRow();
$group20->addChild(
	"row1",
	$row1
);

$fs_navigation_control_color = new MooseElatedField(
	"colorsimple",
	"fs_navigation_control_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_control_color",
	$fs_navigation_control_color
);

$fs_navigation_control_active_color = new MooseElatedField(
	"colorsimple",
	"fs_navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_control_active_color",
	$fs_navigation_control_active_color
);

$fs_navigation_control_size = new MooseElatedField(
	"textsimple",
	"fs_navigation_control_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_control_size",
	$fs_navigation_control_size
);

$fs_navigation_control_active_size = new MooseElatedField(
	"textsimple",
	"fs_navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"fs_navigation_control_active_size",
	$fs_navigation_control_active_size
);

$row2 = new MooseElatedRow();
$group20->addChild(
	"row2",
	$row2
);

$fs_navigation_control_border_color = new MooseElatedField(
	"colorsimple",
	"fs_navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"fs_navigation_control_border_color",
	$fs_navigation_control_border_color
);

$fs_navigation_control_active_border_color = new MooseElatedField(
	"colorsimple",
	"fs_navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"fs_navigation_control_active_border_color",
	$fs_navigation_control_active_border_color
);

$fs_navigation_control_border_radius = new MooseElatedField(
	"textsimple",
	"fs_navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"fs_navigation_control_border_radius",
	$fs_navigation_control_border_radius
);

//Social Icon

$panel14 = new MooseElatedPanel(
	esc_html__( "Social Icon", 'moose' ),
	"social_icon_panel"
);
$elementsPage->addChild(
	"panel14",
	$panel14
);

$group1 = new MooseElatedGroup(
	esc_html__( "Normal Icons", 'moose' ),
	esc_html__( "Define Normal Social Icons style", 'moose' )
);
$panel14->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$social_color = new MooseElatedField(
	"colorsimple",
	"social_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_color",
	$social_color
);

$social_hover_color = new MooseElatedField(
	"colorsimple",
	"social_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_hover_color",
	$social_hover_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Social Circle/Square Icon", 'moose' ),
	esc_html__( "Define Social circle/square Icons style", 'moose' )
);
$panel14->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$social_icon_color = new MooseElatedField(
	"colorsimple",
	"social_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_icon_color",
	$social_icon_color
);

$social_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"social_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_icon_hover_color",
	$social_icon_hover_color
);

$social_icon_background_color = new MooseElatedField(
	"colorsimple",
	"social_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_icon_background_color",
	$social_icon_background_color
);

$social_icon_hover_background_color = new MooseElatedField(
	"colorsimple",
	"social_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_icon_hover_background_color",
	$social_icon_hover_background_color
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$social_icon_border_color = new MooseElatedField(
	"colorsimple",
	"social_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"social_icon_border_color",
	$social_icon_border_color
);

$social_icon_hover_border_color = new MooseElatedField(
	"colorsimple",
	"social_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"social_icon_hover_border_color",
	$social_icon_hover_border_color
);

// Social Share List Icon

$panel26 = new MooseElatedPanel(
	esc_html__( "Social Share List", 'moose' ),
	"social_share_list_icon_panel"
);
$elementsPage->addChild(
	"panel26",
	$panel26
);

$group1 = new MooseElatedGroup(
	esc_html__( "Icons", 'moose' ),
	esc_html__( "Define Social Icons style for Social Share List", 'moose' )
);
$panel26->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$social_share_list_icon_size = new MooseElatedField(
	"textsimple",
	"social_share_list_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_share_list_icon_size",
	$social_share_list_icon_size
);

$social_share_list_icon_margin_right = new MooseElatedField(
	"textsimple",
	"social_share_list_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_share_list_icon_margin_right",
	$social_share_list_icon_margin_right
);

$social_share_list_icon_color = new MooseElatedField(
	"colorsimple",
	"social_share_list_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_share_list_icon_color",
	$social_share_list_icon_color
);

$social_share_list_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"social_share_list_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"social_share_list_icon_hover_color",
	$social_share_list_icon_hover_color
);

$social_share_list_icons_type = new MooseElatedField(
	'select',
	'social_share_list_icons_type',
	'circle',
	esc_html__( 'Icons Type', 'moose' ),
	esc_html__( 'Choose type of social share list icons', 'moose' ),
	array(
		'circle' => esc_html__( 'Circle', 'moose' ),
		'normal' => esc_html__( 'Normal', 'moose' )
	)
);
$panel26->addChild(
	'social_share_list_icons_type',
	$social_share_list_icons_type
);

//Tabs Panel

$panel15 = new MooseElatedPanel(
	esc_html__( "Tabs", 'moose' ),
	"tabs_panel"
);
$elementsPage->addChild(
	"panel15",
	$panel15
);

$tabs_navigation_subtitle = new MooseElatedTitle(
	"tabs_navigation_subtitle",
	esc_html__( "Tabs Navigation (with Text)", 'moose' )
);
$panel15->addChild(
	"tabs_navigation_subtitle",
	$tabs_navigation_subtitle
);

$group1 = new MooseElatedGroup(
	esc_html__( "Tabs Navigation Text Style", 'moose' ),
	esc_html__( "Define Tabs text style", 'moose' )
);
$panel15->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$tab_text_color = new MooseElatedField(
	"colorsimple",
	"tab_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_text_color",
	$tab_text_color
);

$tab_active_text_color = new MooseElatedField(
	"colorsimple",
	"tab_active_text_color",
	"",
	esc_html__( "Text Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_active_text_color",
	$tab_active_text_color
);

$tab_text_size = new MooseElatedField(
	"textsimple",
	"tab_text_size",
	"",
	esc_html__( "Text Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_text_size",
	$tab_text_size
);

$tab_nav_font_family = new MooseElatedField(
	"fontsimple",
	"tab_nav_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_nav_font_family",
	$tab_nav_font_family
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tab_text_transform = new MooseElatedField(
	"selectblanksimple",
	"tab_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"tab_text_transform",
	$tab_text_transform
);

$tab_letter_spacing = new MooseElatedField(
	"textsimple",
	"tab_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"tab_letter_spacing",
	$tab_letter_spacing
);

$tab_font_weight = new MooseElatedField(
	"selectblanksimple",
	"tab_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"tab_font_weight",
	$tab_font_weight
);

$tab_font_style = new MooseElatedField(
	"selectblanksimple",
	"tab_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"tab_font_style",
	$tab_font_style
);

$tabs_navigation_icon_subtitle = new MooseElatedTitle(
	"tabs_navigation_icon_subtitle",
	esc_html__( "Tabs Navigation (with Icon)", 'moose' )
);
$panel15->addChild(
	"tabs_navigation_icon_subtitle",
	$tabs_navigation_icon_subtitle
);

$group2 = new MooseElatedGroup(
	esc_html__( "Tabs Navigation Icon Style", 'moose' ),
	esc_html__( "Define icon style", 'moose' )
);
$panel15->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$tabs_icon_size = new MooseElatedField(
	"textsimple",
	"tabs_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_icon_size",
	$tabs_icon_size
);

$tab_icon_color = new MooseElatedField(
	"colorsimple",
	"tab_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_icon_color",
	$tab_icon_color
);

$tab_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"tab_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_icon_hover_color",
	$tab_icon_hover_color
);

$group_icon_nav_size = new MooseElatedGroup(
	esc_html__( "Tabs Navigation Size", 'moose' ),
	esc_html__( "Define tab size style", 'moose' )
);
$panel15->addChild(
	"group_icon_nav_size",
	$group_icon_nav_size
);

$row1 = new MooseElatedRow( true );
$group_icon_nav_size->addChild(
	"row1",
	$row1
);

$tabs_with_icon_height = new MooseElatedField(
	"textsimple",
	"tabs_with_icon_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_with_icon_height",
	$tabs_with_icon_height
);

$tabs_with_icon_padding_left = new MooseElatedField(
	"textsimple",
	"tabs_with_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_with_icon_padding_left",
	$tabs_with_icon_padding_left
);

$tabs_with_icon_padding_right = new MooseElatedField(
	"textsimple",
	"tabs_with_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_with_icon_padding_right",
	$tabs_with_icon_padding_right
);

$tabs_navigation_icon_and_text_subtitle = new MooseElatedTitle(
	"tabs_navigation_icon_and_text_subtitle",
	esc_html__( "Tabs Navigation (with Icons and Text)", 'moose' )
);
$panel15->addChild(
	"tabs_navigation_icon_and_text_subtitle",
	$tabs_navigation_icon_and_text_subtitle
);

$group_icon_text_nav = new MooseElatedGroup(
	esc_html__( "Tabs Navigation Text Style", 'moose' ),
	esc_html__( "Define Tabs text style (with Icons and Text)", 'moose' )
);
$panel15->addChild(
	"group_icon_text_nav",
	$group_icon_text_nav
);

$row1 = new MooseElatedRow();
$group_icon_text_nav->addChild(
	"row1",
	$row1
);

$tab_icon_and_text_text_color = new MooseElatedField(
	"colorsimple",
	"tab_icon_and_text_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_icon_and_text_text_color",
	$tab_icon_and_text_text_color
);

$tab_icon_and_text_active_text_color = new MooseElatedField(
	"colorsimple",
	"tab_icon_and_text_active_text_color",
	"",
	esc_html__( "Text Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_icon_and_text_active_text_color",
	$tab_icon_and_text_active_text_color
);

$tab_icon_and_text_text_size = new MooseElatedField(
	"textsimple",
	"tab_icon_and_text_text_size",
	"",
	esc_html__( "Text Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_icon_and_text_text_size",
	$tab_icon_and_text_text_size
);

$tab_icon_and_text_nav_font_family = new MooseElatedField(
	"fontsimple",
	"tab_icon_and_text_nav_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_icon_and_text_nav_font_family",
	$tab_icon_and_text_nav_font_family
);

$row2 = new MooseElatedRow( true );
$group_icon_text_nav->addChild(
	"row2",
	$row2
);

$tab_icon_and_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"tab_icon_and_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"tab_icon_and_text_text_transform",
	$tab_icon_and_text_text_transform
);

$tab_icon_and_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"tab_icon_and_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"tab_icon_and_text_letter_spacing",
	$tab_icon_and_text_letter_spacing
);

$tab_icon_and_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"tab_icon_and_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"tab_icon_and_text_font_weight",
	$tab_icon_and_text_font_weight
);

$tab_icon_and_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"tab_icon_and_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"tab_icon_and_text_font_style",
	$tab_icon_and_text_font_style
);

$group20 = new MooseElatedGroup(
	esc_html__( "Tabs Navigation Icon Style", 'moose' ),
	esc_html__( "Define icon style (with Icons and Text)", 'moose' )
);
$panel15->addChild(
	"group20",
	$group20
);

$row1 = new MooseElatedRow();
$group20->addChild(
	"row1",
	$row1
);

$tab_icon_and_text_icon_size = new MooseElatedField(
	"textsimple",
	"tab_icon_and_text_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_icon_and_text_icon_size",
	$tab_icon_and_text_icon_size
);

$tab_icon_and_text_icon_color = new MooseElatedField(
	"colorsimple",
	"tab_icon_and_text_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_icon_and_text_icon_color",
	$tab_icon_and_text_icon_color
);

$tab_icon_and_text_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"tab_icon_and_text_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_icon_and_text_icon_hover_color",
	$tab_icon_and_text_icon_hover_color
);

$group4 = new MooseElatedGroup(
	esc_html__( "Tabs Navigation Size", 'moose' ),
	esc_html__( "Define tab size style", 'moose' )
);
$panel15->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow( true );
$group4->addChild(
	"row1",
	$row1
);

$tabs_with_icon_text_height = new MooseElatedField(
	"textsimple",
	"tabs_with_icon_text_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_with_icon_text_height",
	$tabs_with_icon_text_height
);

$tabs_with_icon_text_padding_left = new MooseElatedField(
	"textsimple",
	"tabs_with_icon_text_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_with_icon_text_padding_left",
	$tabs_with_icon_text_padding_left
);

$tabs_with_icon_text_padding_right = new MooseElatedField(
	"textsimple",
	"tabs_with_icon_text_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_with_icon_text_padding_right",
	$tabs_with_icon_text_padding_right
);

$horizontal_tabs_border_arround_element_no_space = new MooseElatedTitle(
	"horizontal_tabs_border_arround_element_no_space",
	esc_html__( "Horizontal Tabs", 'moose' )
);
$panel15->addChild(
	"horizontal_tabs_border_arround_element_no_space",
	$horizontal_tabs_border_arround_element_no_space
);

$group5 = new MooseElatedGroup(
	esc_html__( "Tab Styles", 'moose' ),
	esc_html__( "Define tab style", 'moose' )
);
$panel15->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow( true );
$group5->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_background_color = new MooseElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color",
	$tab_bae_hor_no_marg_background_color
);

$tab_bae_hor_no_marg_background_color_hover = new MooseElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color_hover",
	"",
	esc_html__( "Background Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color_hover",
	$tab_bae_hor_no_marg_background_color_hover
);

$tab_bae_hor_no_marg_border_color = new MooseElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_border_color",
	$tab_bae_hor_no_marg_border_color
);

$tab_bae_hor_no_marg_border_hover_color = new MooseElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_border_hover_color",
	"",
	esc_html__( "Border Active/Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_border_hover_color",
	$tab_bae_hor_no_marg_border_hover_color
);

$group6 = new MooseElatedGroup(
	esc_html__( "Text Styles", 'moose' ),
	esc_html__( "Define text styles", 'moose' )
);
$panel15->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow( true );
$group6->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_text_color = new MooseElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_text_color",
	$tab_bae_hor_no_marg_text_color
);

$tab_bae_hor_no_marg_active_text_color = new MooseElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_active_text_color",
	$tab_bae_hor_no_marg_active_text_color
);

$vertical_tabs_border_arround_element = new MooseElatedTitle(
	"vertical_tabs_border_arround_element",
	esc_html__( "Vertical Tabs", 'moose' )
);
$panel15->addChild(
	"vertical_tabs_border_arround_element",
	$vertical_tabs_border_arround_element
);

$group11 = new MooseElatedGroup(
	esc_html__( "Tab Styles", 'moose' ),
	esc_html__( "Define tab style", 'moose' )
);
$panel15->addChild(
	"group11",
	$group11
);

$row1 = new MooseElatedRow( true );
$group11->addChild(
	"row1",
	$row1
);

$ver_tab_bae_background_color = new MooseElatedField(
	"colorsimple",
	"ver_tab_bae_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"ver_tab_bae_background_color",
	$ver_tab_bae_background_color
);

$ver_tab_bae_background_color_hover = new MooseElatedField(
	"colorsimple",
	"ver_tab_bae_background_color_hover",
	"",
	esc_html__( "Background Active/HoverColor", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"ver_tab_bae_background_color_hover",
	$ver_tab_bae_background_color_hover
);

$ver_tab_bae_border_color = new MooseElatedField(
	"colorsimple",
	"ver_tab_bae_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"ver_tab_bae_border_color",
	$ver_tab_bae_border_color
);

$ver_tab_bae_border_color_hover = new MooseElatedField(
	"colorsimple",
	"ver_tab_bae_border_color_hover",
	"",
	esc_html__( "Border Active/Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"ver_tab_bae_border_color_hover",
	$ver_tab_bae_border_color_hover
);

$group12 = new MooseElatedGroup(
	esc_html__( "Text Styles", 'moose' ),
	esc_html__( "Define text style", 'moose' )
);
$panel15->addChild(
	"group12",
	$group12
);

$row1 = new MooseElatedRow( true );
$group12->addChild(
	"row1",
	$row1
);

$ver_tab_bae_text_color = new MooseElatedField(
	"colorsimple",
	"ver_tab_bae_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"ver_tab_bae_text_color",
	$ver_tab_bae_text_color
);

$ver_tab_bae_active_text_color = new MooseElatedField(
	"colorsimple",
	"ver_tab_bae_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"ver_tab_bae_active_text_color",
	$ver_tab_bae_active_text_color
);

$tabs_content_horizontal_subtitle = new MooseElatedTitle(
	"tabs_content_horizontal_subtitle",
	esc_html__( "Horizontal Tabs Content", 'moose' )
);
$panel15->addChild(
	"tabs_content_horizontal_subtitle",
	$tabs_content_horizontal_subtitle
);

$group15 = new MooseElatedGroup(
	esc_html__( "Tabs Content Styles", 'moose' ),
	esc_html__( "Define tab content style", 'moose' )
);
$panel15->addChild(
	"group15",
	$group15
);

$row1 = new MooseElatedRow( true );
$group15->addChild(
	"row1",
	$row1
);

$tabs_content_text_size = new MooseElatedField(
	"textsimple",
	"tabs_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'moose' ),
	esc_html__( "Enter size for text in tab containers", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_content_text_size",
	$tabs_content_text_size
);

$tabs_content_background_color = new MooseElatedField(
	"colorsimple",
	"tabs_content_background_color",
	"",
	esc_html__( "Tab Content Background Color", 'moose' ),
	esc_html__( "Choose color for tab background", 'moose' )
);
$row1->addChild(
	"tabs_content_background_color",
	$tabs_content_background_color
);

$tabs_content_border_color = new MooseElatedField(
	"colorsimple",
	"tabs_content_border_color",
	"",
	esc_html__( "Tab Content Border Color", 'moose' ),
	esc_html__( "Choose color for tab background", 'moose' )
);
$row1->addChild(
	"tabs_content_border_color",
	$tabs_content_border_color
);

$group16 = new MooseElatedGroup(
	esc_html__( "Content Padding", 'moose' ),
	esc_html__( "Define tab content padding", 'moose' )
);
$panel15->addChild(
	"group16",
	$group16
);

$row1 = new MooseElatedRow( true );
$group16->addChild(
	"row1",
	$row1
);

$tabs_content_padding_left = new MooseElatedField(
	"textsimple",
	"tabs_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_content_padding_left",
	$tabs_content_padding_left
);

$tabs_content_padding_right = new MooseElatedField(
	"textsimple",
	"tabs_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_content_padding_right",
	$tabs_content_padding_right
);

$tabs_content_padding_top = new MooseElatedField(
	"textsimple",
	"tabs_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_content_padding_top",
	$tabs_content_padding_top
);

$tabs_content_padding_bottom = new MooseElatedField(
	"textsimple",
	"tabs_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_content_padding_bottom",
	$tabs_content_padding_bottom
);

$tabs_vertical_content_subtitle = new MooseElatedTitle(
	"tabs_vertical_content_subtitle",
	esc_html__( "Vertical Tabs Content", 'moose' )
);
$panel15->addChild(
	"tabs_vertical_content_subtitle",
	$tabs_vertical_content_subtitle
);

$group17 = new MooseElatedGroup(
	esc_html__( "Tabs Content Styles", 'moose' ),
	esc_html__( "Define tab content style", 'moose' )
);
$panel15->addChild(
	"group17",
	$group17
);

$row1 = new MooseElatedRow( true );
$group17->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_text_size = new MooseElatedField(
	"textsimple",
	"tabs_vertical_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'moose' ),
	esc_html__( "Enter size for text in tab containers", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_vertical_content_text_size",
	$tabs_vertical_content_text_size
);

$tabs_vertical_content_background_color = new MooseElatedField(
	"colorsimple",
	"tabs_vertical_content_background_color",
	"",
	esc_html__( "Tab Content Background Color", 'moose' ),
	esc_html__( "Choose color for tab background", 'moose' )
);
$row1->addChild(
	"tabs_vertical_content_background_color",
	$tabs_vertical_content_background_color
);

$tabs_vertical_content_border_color = new MooseElatedField(
	"colorsimple",
	"tabs_vertical_content_border_color",
	"",
	esc_html__( "Tab Content Border Color", 'moose' ),
	esc_html__( "Choose color for tab background", 'moose' )
);
$row1->addChild(
	"tabs_vertical_content_border_color",
	$tabs_vertical_content_border_color
);

$group18 = new MooseElatedGroup(
	esc_html__( "Content Padding", 'moose' ),
	esc_html__( "Define tab content padding", 'moose' )
);
$panel15->addChild(
	"group18",
	$group18
);

$row1 = new MooseElatedRow( true );
$group18->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_padding_left = new MooseElatedField(
	"textsimple",
	"tabs_vertical_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_vertical_content_padding_left",
	$tabs_vertical_content_padding_left
);

$tabs_vertical_content_padding_right = new MooseElatedField(
	"textsimple",
	"tabs_vertical_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_vertical_content_padding_right",
	$tabs_vertical_content_padding_right
);

$tabs_vertical_content_padding_top = new MooseElatedField(
	"textsimple",
	"tabs_vertical_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_vertical_content_padding_top",
	$tabs_vertical_content_padding_top
);

$tabs_vertical_content_padding_bottom = new MooseElatedField(
	"textsimple",
	"tabs_vertical_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tabs_vertical_content_padding_bottom",
	$tabs_vertical_content_padding_bottom
);

//Tags

$panel18 = new MooseElatedPanel(
	esc_html__( "Tags", 'moose' ),
	"tags_panel"
);
$elementsPage->addChild(
	"panel18",
	$panel18
);

$group1 = new MooseElatedGroup(
	esc_html__( "Tags Style", 'moose' ),
	esc_html__( "Define Tags style", 'moose' )
);
$panel18->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$tags_color = new MooseElatedField(
	"colorsimple",
	"tags_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tags_color",
	$tags_color
);

$tags_font_size = new MooseElatedField(
	"textsimple",
	"tags_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tags_font_size",
	$tags_font_size
);

$tags_line_height = new MooseElatedField(
	"textsimple",
	"tags_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"tags_line_height",
	$tags_line_height
);

$tags_text_transform = new MooseElatedField(
	"selectblanksimple",
	"tags_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"tags_text_transform",
	$tags_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tags_font_family = new MooseElatedField(
	"fontsimple",
	"tags_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"tags_font_family",
	$tags_font_family
);

$tags_font_style = new MooseElatedField(
	"selectblanksimple",
	"tags_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"tags_font_style",
	$tags_font_style
);

$tags_font_weight = new MooseElatedField(
	"selectblanksimple",
	"tags_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"tags_font_weight",
	$tags_font_weight
);

$tags_letter_spacing = new MooseElatedField(
	"textsimple",
	"tags_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"tags_letter_spacing",
	$tags_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$tags_hover_color = new MooseElatedField(
	"colorsimple",
	"tags_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"tags_hover_color",
	$tags_hover_color
);

$tags_background_color = new MooseElatedField(
	"colorsimple",
	"tags_background_color",
	"",
	esc_html__( "Background color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"tags_background_color",
	$tags_background_color
);

$tags_background_hover_color = new MooseElatedField(
	"colorsimple",
	"tags_background_hover_color",
	"",
	esc_html__( "Hover background color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"tags_background_hover_color",
	$tags_background_hover_color
);

$tags_border_radius = new MooseElatedField(
	"textsimple",
	"tags_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"tags_border_radius",
	$tags_border_radius
);

$row4 = new MooseElatedRow( true );
$group1->addChild(
	"row4",
	$row4
);

$tags_border_color = new MooseElatedField(
	"colorsimple",
	"tags_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"tags_border_color",
	$tags_border_color
);

$tags_border_hover_color = new MooseElatedField(
	"colorsimple",
	"tags_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"tags_border_hover_color",
	$tags_border_hover_color
);

$tags_border_width = new MooseElatedField(
	"textsimple",
	"tags_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"tags_border_width",
	$tags_border_width
);

//Team

$panel20 = new MooseElatedPanel(
	esc_html__( "Team", 'moose' ),
	"team_panel"
);
$elementsPage->addChild(
	"panel20",
	$panel20
);

$group1 = new MooseElatedGroup(
	esc_html__( "Team Image Hover Overlay", 'moose' ),
	esc_html__( "Choose team image hover overlay", 'moose' )
);
$panel20->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$team_hover_color = new MooseElatedField(
	"colorsimple",
	"team_hover_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_hover_color",
	$team_hover_color
);

$team_hover_color_opacity = new MooseElatedField(
	"textsimple",
	"team_hover_color_opacity",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_hover_color_opacity",
	$team_hover_color_opacity
);

$team_hover_border_width = new MooseElatedField(
	"textsimple",
	"team_hover_border_width",
	"",
	esc_html__( "Border Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_hover_border_width",
	$team_hover_border_width
);

$team_hover_border_color = new MooseElatedField(
	"colorsimple",
	"team_hover_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_hover_border_color",
	$team_hover_border_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Team Member Name", 'moose' ),
	esc_html__( "Define styles for team member name", 'moose' )
);
$panel20->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$team_color = new MooseElatedField(
	"colorsimple",
	"team_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_color",
	$team_color
);

$team_font_size = new MooseElatedField(
	"textsimple",
	"team_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_font_size",
	$team_font_size
);

$team_line_height = new MooseElatedField(
	"textsimple",
	"team_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_line_height",
	$team_line_height
);

$team_text_transform = new MooseElatedField(
	"selectblanksimple",
	"team_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"team_text_transform",
	$team_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$team_font_family = new MooseElatedField(
	"fontsimple",
	"team_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_font_family",
	$team_font_family
);

$team_font_style = new MooseElatedField(
	"selectblanksimple",
	"team_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"team_font_style",
	$team_font_style
);

$team_font_weight = new MooseElatedField(
	"selectblanksimple",
	"team_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"team_font_weight",
	$team_font_weight
);

$team_letter_spacing = new MooseElatedField(
	"textsimple",
	"team_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_letter_spacing",
	$team_letter_spacing
);

$group5 = new MooseElatedGroup(
	esc_html__( "Team Member Position", 'moose' ),
	esc_html__( "Define styles for team member position", 'moose' )
);
$panel20->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$team_position_color = new MooseElatedField(
	"colorsimple",
	"team_position_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_position_color",
	$team_position_color
);

$team_position_font_size = new MooseElatedField(
	"textsimple",
	"team_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_position_font_size",
	$team_position_font_size
);

$team_position_line_height = new MooseElatedField(
	"textsimple",
	"team_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_position_line_height",
	$team_position_line_height
);

$team_position_text_transform = new MooseElatedField(
	"selectblanksimple",
	"team_position_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"team_position_text_transform",
	$team_position_text_transform
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$team_position_font_family = new MooseElatedField(
	"fontsimple",
	"team_position_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_position_font_family",
	$team_position_font_family
);

$team_position_font_style = new MooseElatedField(
	"selectblanksimple",
	"team_position_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"team_position_font_style",
	$team_position_font_style
);

$team_position_font_weight = new MooseElatedField(
	"selectblanksimple",
	"team_position_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"team_position_font_weight",
	$team_position_font_weight
);

$team_position_letter_spacing = new MooseElatedField(
	"textsimple",
	"team_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_position_letter_spacing",
	$team_position_letter_spacing
);

$group6 = new MooseElatedGroup(
	esc_html__( "Team Member Description", 'moose' ),
	esc_html__( "Define styles for team member description", 'moose' )
);
$panel20->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$team_description_color = new MooseElatedField(
	"colorsimple",
	"team_description_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_description_color",
	$team_description_color
);

$team_description_font_size = new MooseElatedField(
	"textsimple",
	"team_description_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_description_font_size",
	$team_description_font_size
);

$team_description_line_height = new MooseElatedField(
	"textsimple",
	"team_description_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_description_line_height",
	$team_description_line_height
);

$team_description_text_transform = new MooseElatedField(
	"selectblanksimple",
	"team_description_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"team_description_text_transform",
	$team_description_text_transform
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$team_description_font_family = new MooseElatedField(
	"fontsimple",
	"team_description_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_description_font_family",
	$team_description_font_family
);

$team_description_font_style = new MooseElatedField(
	"selectblanksimple",
	"team_description_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"team_description_font_style",
	$team_description_font_style
);

$team_description_font_weight = new MooseElatedField(
	"selectblanksimple",
	"team_description_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"team_description_font_weight",
	$team_description_font_weight
);

$team_description_letter_spacing = new MooseElatedField(
	"textsimple",
	"team_description_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_description_letter_spacing",
	$team_description_letter_spacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Social Icons", 'moose' ),
	esc_html__( "Define Social Icons style", 'moose' )
);
$panel20->addChild(
	"group3",
	$group3
);
$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$team_icon_color = new MooseElatedField(
	"colorsimple",
	"team_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_icon_color",
	$team_icon_color
);

$team_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"team_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_icon_hover_color",
	$team_icon_hover_color
);

$team_icon_background_color = new MooseElatedField(
	"colorsimple",
	"team_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_icon_background_color",
	$team_icon_background_color
);

$team_icon_hover_background_color = new MooseElatedField(
	"colorsimple",
	"team_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_icon_hover_background_color",
	$team_icon_hover_background_color
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$team_icon_border_color = new MooseElatedField(
	"colorsimple",
	"team_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_icon_border_color",
	$team_icon_border_color
);

$team_icon_hover_border_color = new MooseElatedField(
	"colorsimple",
	"team_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_icon_hover_border_color",
	$team_icon_hover_border_color
);

$team_icon_size = new MooseElatedField(
	"textsimple",
	"team_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_icon_size",
	$team_icon_size
);

$team_icon_shape_size = new MooseElatedField(
	"textsimple",
	"team_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_icon_shape_size",
	$team_icon_shape_size
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$team_icon_space = new MooseElatedField(
	"textsimple",
	"team_icon_space",
	"",
	esc_html__( "Space between Icons (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"team_icon_space",
	$team_icon_space
);

$main_info_below_image_subtitle = new MooseElatedTitle(
	"main_info_below_image_subtitle",
	esc_html__( "Main Info Below Image - Type", 'moose' )
);
$panel20->addChild(
	"main_info_below_image_subtitle",
	$main_info_below_image_subtitle
);

$group4 = new MooseElatedGroup(
	esc_html__( "Share Icon", 'moose' ),
	esc_html__( "Define Share Icon style. This applies only if Between Image and Info is selected for Social Style", 'moose' )
);
$panel20->addChild(
	"group4",
	$group4
);
$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$team_share_icon_color = new MooseElatedField(
	"colorsimple",
	"team_share_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_share_icon_color",
	$team_share_icon_color
);

$team_share_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"team_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_share_icon_hover_color",
	$team_share_icon_hover_color
);

$team_share_icon_background_color = new MooseElatedField(
	"colorsimple",
	"team_share_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_share_icon_background_color",
	$team_share_icon_background_color
);

$team_share_icon_hover_background_color = new MooseElatedField(
	"colorsimple",
	"team_share_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"team_share_icon_hover_background_color",
	$team_share_icon_hover_background_color
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$team_share_icon_border_color = new MooseElatedField(
	"colorsimple",
	"team_share_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_share_icon_border_color",
	$team_share_icon_border_color
);

$team_share_icon_hover_border_color = new MooseElatedField(
	"colorsimple",
	"team_share_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_share_icon_hover_border_color",
	$team_share_icon_hover_border_color
);

$team_share_icon_size = new MooseElatedField(
	"textsimple",
	"team_share_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_share_icon_size",
	$team_share_icon_size
);

$team_share_icon_shape_size = new MooseElatedField(
	"textsimple",
	"team_share_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"team_share_icon_shape_size",
	$team_share_icon_shape_size
);

//Testimonials

$panel16 = new MooseElatedPanel(
	esc_html__( "Testimonials", 'moose' ),
	"testimonials_panel"
);
$elementsPage->addChild(
	"panel16",
	$panel16
);

$group4 = new MooseElatedGroup(
	esc_html__( "Testimonials Title", 'moose' ),
	esc_html__( "Define Testimonials title style", 'moose' )
);
$panel16->addChild(
	"group4",
	$group4
);
$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$testimonials_title_color = new MooseElatedField(
	"colorsimple",
	"testimonials_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_title_color",
	$testimonials_title_color
);

$testimonials_title_font_size = new MooseElatedField(
	"textsimple",
	"testimonials_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_title_font_size",
	$testimonials_title_font_size
);

$testimonials_title_line_height = new MooseElatedField(
	"textsimple",
	"testimonials_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_title_line_height",
	$testimonials_title_line_height
);

$testimonials_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"testimonials_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"testimonials_title_text_transform",
	$testimonials_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$testimonials_title_font_family = new MooseElatedField(
	"fontsimple",
	"testimonials_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_title_font_family",
	$testimonials_title_font_family
);

$testimonials_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"testimonials_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"testimonials_title_font_style",
	$testimonials_title_font_style
);

$testimonials_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"testimonials_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"testimonials_title_font_weight",
	$testimonials_title_font_weight
);

$testimonials_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"testimonials_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_title_letter_spacing",
	$testimonials_title_letter_spacing
);

$group1 = new MooseElatedGroup(
	esc_html__( "Testimonials Text", 'moose' ),
	esc_html__( "Define Testimonials text style", 'moose' )
);
$panel16->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$testimonials_text_color = new MooseElatedField(
	"colorsimple",
	"testimonials_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_text_color",
	$testimonials_text_color
);

$testimonials_text_font_size = new MooseElatedField(
	"textsimple",
	"testimonials_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_text_font_size",
	$testimonials_text_font_size
);

$testimonials_text_line_height = new MooseElatedField(
	"textsimple",
	"testimonials_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_text_line_height",
	$testimonials_text_line_height
);

$testimonials_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"testimonials_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"testimonials_text_text_transform",
	$testimonials_text_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$testimonials_text_font_family = new MooseElatedField(
	"fontsimple",
	"testimonials_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_text_font_family",
	$testimonials_text_font_family
);

$testimonials_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"testimonials_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"testimonials_text_font_style",
	$testimonials_text_font_style
);

$testimonials_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"testimonials_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"testimonials_text_font_weight",
	$testimonials_text_font_weight
);

$testimonials_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"testimonials_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_text_letter_spacing",
	$testimonials_text_letter_spacing
);

$group2 = new MooseElatedGroup(
	esc_html__( "Testimonials Author Style", 'moose' ),
	esc_html__( "Define Testimonials author style", 'moose' )
);
$panel16->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$testimonials_author_color = new MooseElatedField(
	"colorsimple",
	"testimonials_author_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_author_color",
	$testimonials_author_color
);

$testimonials_author_font_size = new MooseElatedField(
	"textsimple",
	"testimonials_author_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_author_font_size",
	$testimonials_author_font_size
);

$testimonials_author_line_height = new MooseElatedField(
	"textsimple",
	"testimonials_author_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_author_line_height",
	$testimonials_author_line_height
);

$testimonials_author_text_transform = new MooseElatedField(
	"selectblanksimple",
	"testimonials_author_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"testimonials_author_text_transform",
	$testimonials_author_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$testimonials_author_font_family = new MooseElatedField(
	"fontsimple",
	"testimonials_author_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_author_font_family",
	$testimonials_author_font_family
);

$testimonials_author_font_style = new MooseElatedField(
	"selectblanksimple",
	"testimonials_author_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"testimonials_author_font_style",
	$testimonials_author_font_style
);

$testimonials_author_font_weight = new MooseElatedField(
	"selectblanksimple",
	"testimonials_author_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"testimonials_author_font_weight",
	$testimonials_author_font_weight
);

$testimonials_author_letter_spacing = new MooseElatedField(
	"textsimple",
	"testimonials_author_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_author_letter_spacing",
	$testimonials_author_letter_spacing
);

$group6 = new MooseElatedGroup(
	esc_html__( "Testimonials Job Position Style", 'moose' ),
	esc_html__( "Define testimonials job position author style", 'moose' )
);
$panel16->addChild(
	"group6",
	$group6
);
$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$testimonials_author_job_position_color = new MooseElatedField(
	"colorsimple",
	"testimonials_author_job_position_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_author_job_position_color",
	$testimonials_author_job_position_color
);

$testimonials_author_job_position_font_size = new MooseElatedField(
	"textsimple",
	"testimonials_author_job_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_author_job_position_font_size",
	$testimonials_author_job_position_font_size
);

$testimonials_author_job_position_line_height = new MooseElatedField(
	"textsimple",
	"testimonials_author_job_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_author_job_position_line_height",
	$testimonials_author_job_position_line_height
);

$testimonials_author_job_position_text_transform = new MooseElatedField(
	"selectblanksimple",
	"testimonials_author_job_position_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"testimonials_author_job_position_text_transform",
	$testimonials_author_job_position_text_transform
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$testimonials_author_job_position_font_family = new MooseElatedField(
	"fontsimple",
	"testimonials_author_job_position_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_author_job_position_font_family",
	$testimonials_author_job_position_font_family
);

$testimonials_author_job_position_font_style = new MooseElatedField(
	"selectblanksimple",
	"testimonials_author_job_position_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"testimonials_author_job_position_font_style",
	$testimonials_author_job_position_font_style
);

$testimonials_author_job_position_font_weight = new MooseElatedField(
	"selectblanksimple",
	"testimonials_author_job_position_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"testimonials_author_job_position_font_weight",
	$testimonials_author_job_position_font_weight
);

$testimonials_author_job_position_letter_spacing = new MooseElatedField(
	"textsimple",
	"testimonials_author_job_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_author_job_position_letter_spacing",
	$testimonials_author_job_position_letter_spacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Testimonials Navigation", 'moose' ),
	esc_html__( "Define Testimonials navigation style", 'moose' )
);
$panel16->addChild(
	"group3",
	$group3
);
$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$testimonials_navigation_width = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_navigation_width",
	$testimonials_navigation_width
);

$testimonials_navigation_height = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_navigation_height",
	$testimonials_navigation_height
);

$testimonials_navigation_active_width = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_active_width",
	"",
	esc_html__( "Active Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_navigation_active_width",
	$testimonials_navigation_active_width
);

$testimonials_navigation_active_height = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_active_height",
	"",
	esc_html__( "Active Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_navigation_active_height",
	$testimonials_navigation_active_height
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$testimonials_navigation_color = new MooseElatedField(
	"colorsimple",
	"testimonials_navigation_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_navigation_color",
	$testimonials_navigation_color
);

$testimonials_navigation_color_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_color_transparency",
	"",
	esc_html__( "Color Transparency", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_navigation_color_transparency",
	$testimonials_navigation_color_transparency
);

$testimonials_navigation_active_color = new MooseElatedField(
	"colorsimple",
	"testimonials_navigation_active_color",
	"",
	esc_html__( "Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_navigation_active_color",
	$testimonials_navigation_active_color
);

$testimonials_navigation_active_color_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_active_color_transparency",
	"",
	esc_html__( "Active Color Transparency", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_navigation_active_color_transparency",
	$testimonials_navigation_active_color_transparency
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$testimonials_navigation_border_radius = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_border_radius",
	"",
	esc_html__( "Border radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"testimonials_navigation_border_radius",
	$testimonials_navigation_border_radius
);

$testimonials_navigation_border_width = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"testimonials_navigation_border_width",
	$testimonials_navigation_border_width
);

$testimonials_navigation_border_color = new MooseElatedField(
	"colorsimple",
	"testimonials_navigation_border_color",
	"",
	esc_html__( "Border color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"testimonials_navigation_border_color",
	$testimonials_navigation_border_color
);

$testimonials_navigation_border_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_border_transparency",
	"",
	esc_html__( "Border Color Transparency", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"testimonials_navigation_border_transparency",
	$testimonials_navigation_border_transparency
);

$row4 = new MooseElatedRow();
$group3->addChild(
	"row4",
	$row4
);

$testimonials_navigation_active_border_color = new MooseElatedField(
	"colorsimple",
	"testimonials_navigation_active_border_color",
	"",
	esc_html__( "Active Border color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"testimonials_navigation_active_border_color",
	$testimonials_navigation_active_border_color
);

$testimonials_navigation_active_border_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_navigation_active_border_transparency",
	"",
	esc_html__( "Active Border Color Transparency", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"testimonials_navigation_active_border_transparency",
	$testimonials_navigation_active_border_transparency
);

$group_testimonials_image = new MooseElatedGroup(
	esc_html__( "Testimonials Image Style", 'moose' ),
	esc_html__( "Define Testimonials Image Style", 'moose' )
);
$panel16->addChild(
	"group_testimonials_image",
	$group_testimonials_image
);

$row1 = new MooseElatedRow( true );
$group_testimonials_image->addChild(
	"row1",
	$row1
);

$testimonials_image_border_radius = new MooseElatedField(
	"textsimple",
	"testimonials_image_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_image_border_radius",
	$testimonials_image_border_radius
);

$group5 = new MooseElatedGroup(
	esc_html__( "Testimonials Arrows Style", 'moose' ),
	esc_html__( "Define Testimonials Arrows Style", 'moose' )
);
$panel16->addChild(
	"group5",
	$group5
);
$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$testimonials_arrows_button_width = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_button_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_arrows_button_width",
	$testimonials_arrows_button_width
);

$testimonials_arrows_button_height = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_button_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_arrows_button_height",
	$testimonials_arrows_button_height
);

$testimonials_arrows_type = new MooseElatedField(
	"selectblanksimple",
	"testimonials_arrows_type",
	"",
	esc_html__( "Arrow Type", 'moose' ),
	"",
	moose_elated_get_arrows_type()
);
$row1->addChild(
	"testimonials_arrows_type",
	$testimonials_arrows_type
);

$testimonials_arrows_color = new MooseElatedField(
	"colorsimple",
	"testimonials_arrows_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"testimonials_arrows_color",
	$testimonials_arrows_color
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$testimonials_arrows_color_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_color_transparency",
	"",
	esc_html__( "Background Transparency (0=full - 1=opaque)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_arrows_color_transparency",
	$testimonials_arrows_color_transparency
);

$testimonials_arrows_active_color = new MooseElatedField(
	"colorsimple",
	"testimonials_arrows_active_color",
	"",
	esc_html__( "Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_arrows_active_color",
	$testimonials_arrows_active_color
);

$testimonials_arrows_active_color_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_active_color_transparency",
	"",
	esc_html__( "Background Hover Transparency (0=full - 1=opaque)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_arrows_active_color_transparency",
	$testimonials_arrows_active_color_transparency
);

$testimonials_arrows_border_radius = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"testimonials_arrows_border_radius",
	$testimonials_arrows_border_radius
);

$row3 = new MooseElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$testimonials_arrows_border_width = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"testimonials_arrows_border_width",
	$testimonials_arrows_border_width
);

$testimonials_arrows_border_color = new MooseElatedField(
	"colorsimple",
	"testimonials_arrows_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"testimonials_arrows_border_color",
	$testimonials_arrows_border_color
);

$testimonials_arrows_border_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_border_transparency",
	"",
	esc_html__( "Border Transparency (0=full - 1=opaque)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"testimonials_arrows_border_transparency",
	$testimonials_arrows_border_transparency
);

$testimonials_arrows_border_hover_color = new MooseElatedField(
	"colorsimple",
	"testimonials_arrows_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"testimonials_arrows_border_hover_color",
	$testimonials_arrows_border_hover_color
);

$row4 = new MooseElatedRow( true );
$group5->addChild(
	"row4",
	$row4
);

$testimonials_arrows_border_hover_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0=full - 1=opaque)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"testimonials_arrows_border_hover_transparency",
	$testimonials_arrows_border_hover_transparency
);

$testimonials_arrows_icon_color = new MooseElatedField(
	"colorsimple",
	"testimonials_arrows_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"testimonials_arrows_icon_color",
	$testimonials_arrows_icon_color
);

$testimonials_arrows_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_transparency",
	"",
	esc_html__( "Icon Transparency (0=full - 1=opaque)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"testimonials_arrows_transparency",
	$testimonials_arrows_transparency
);

$testimonials_arrows_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"testimonials_arrows_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"testimonials_arrows_icon_hover_color",
	$testimonials_arrows_icon_hover_color
);

$row5 = new MooseElatedRow( true );
$group5->addChild(
	"row5",
	$row5
);

$testimonials_arrows_hover_transparency = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_hover_transparency",
	"",
	esc_html__( "Icon Hover Transparency (0=full - 1=opaque)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row5->addChild(
	"testimonials_arrows_hover_transparency",
	$testimonials_arrows_hover_transparency
);

$testimonials_arrows_size = new MooseElatedField(
	"textsimple",
	"testimonials_arrows_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row5->addChild(
	"testimonials_arrows_size",
	$testimonials_arrows_size
);

//Widgets
$panel_widgets = new MooseElatedPanel(
	esc_html__( "Widgets", 'moose' ),
	"widget_style"
);
$elementsPage->addChild(
	"panel_widgets",
	$panel_widgets
);

$sidebar_background_color = new MooseElatedField(
	"color",
	"sidebar_background_color",
	"",
	esc_html__( "Sidebar Background Color", 'moose' ),
	esc_html__( "Choose background color for sidebar", 'moose' )
);
$panel_widgets->addChild(
	"sidebar_background_color",
	$sidebar_background_color
);

$group6 = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define padding for sidebar", 'moose' )
);
$panel_widgets->addChild(
	"group6",
	$group6
);
$row1 = new MooseElatedRow( true );
$group6->addChild(
	"row1",
	$row1
);
$sidebar_padding_top = new MooseElatedField(
	"textsimple",
	"sidebar_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_padding_top",
	$sidebar_padding_top
);
$sidebar_padding_right = new MooseElatedField(
	"textsimple",
	"sidebar_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_padding_right",
	$sidebar_padding_right
);
$sidebar_padding_bottom = new MooseElatedField(
	"textsimple",
	"sidebar_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_padding_bottom",
	$sidebar_padding_bottom
);
$sidebar_padding_left = new MooseElatedField(
	"textsimple",
	"sidebar_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_padding_left",
	$sidebar_padding_left
);

$sidebar_shadow_enable = new MooseElatedField(
	'yesno',
	'sidebar_enable_box_shadow',
	'no',
	esc_html__( 'Enable Shadow For Sidebar', 'moose' ),
	'',
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_sidebar_shadow_container'
	)
);
$panel_widgets->addChild(
	'sidebar_enable_box_shadow',
	$sidebar_shadow_enable
);

$sidebar_shadow_container = new MooseElatedContainer(
	'sidebar_shadow_container',
	'sidebar_enable_box_shadow',
	'no'
);
$panel_widgets->addChild(
	'sidebar_shadow_container',
	$sidebar_shadow_container
);

$sidebar_shadow_horizontal_offset = new MooseElatedField(
	'text',
	'sidebar_shadow_horizontal_offset',
	'',
	esc_html__( 'Horizontal Offset(px)', 'moose' ),
	esc_html__( 'Use positive numbers for right offset and negative numbers for left offset', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_horizontal_offset',
	$sidebar_shadow_horizontal_offset
);

$sidebar_shadow_vertical_offset = new MooseElatedField(
	'text',
	'sidebar_shadow_vertical_offset',
	'',
	esc_html__( 'Vertical Offset(px)', 'moose' ),
	esc_html__( 'Use positive numbers for bottom offset and negative numbers for top offset', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_vertical_offset',
	$sidebar_shadow_vertical_offset
);

$sidebar_shadow_blur = new MooseElatedField(
	'text',
	'sidebar_shadow_blur',
	'',
	esc_html__( 'Blur(px)', 'moose' ),
	esc_html__( 'Define amount of shadow blur in pixels', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_blur',
	$sidebar_shadow_blur
);

$sidebar_shadow_spread = new MooseElatedField(
	'text',
	'sidebar_shadow_spread',
	'',
	esc_html__( 'Spread(px)', 'moose' ),
	esc_html__( 'Define amount of shadow spread in pixels', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_spread',
	$sidebar_shadow_spread
);

$sidebar_shadow_color = new MooseElatedField(
	'color',
	'sidebar_shadow_color',
	'',
	esc_html__( 'Color', 'moose' ),
	esc_html__( 'Choose color of shadow', 'moose' )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_color',
	$sidebar_shadow_color
);

$sidebar_alignment = new MooseElatedField(
	"select",
	"sidebar_alignment",
	"",
	esc_html__( "Text Alignment", 'moose' ),
	esc_html__( "Choose text aligment", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$panel_widgets->addChild(
	"sidebar_alignment",
	$sidebar_alignment
);

$widget_style = new MooseElatedTitle(
	"widget_style",
	esc_html__( "Widget Style", 'moose' )
);
$panel_widgets->addChild(
	"widget_style",
	$widget_style
);

$widget_background_color = new MooseElatedField(
	"color",
	"widget_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose color for widget background", 'moose' )
);
$panel_widgets->addChild(
	"widget_background_color",
	$widget_background_color
);

$widget_border_color = new MooseElatedField(
	"color",
	"widget_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose a border color around widget", 'moose' )
);
$panel_widgets->addChild(
	"widget_border_color",
	$widget_border_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define padding for widget", 'moose' )
);
$panel_widgets->addChild(
	"group1",
	$group1
);
$row1 = new MooseElatedRow( true );
$group1->addChild(
	"row1",
	$row1
);
$widget_padding_top = new MooseElatedField(
	"textsimple",
	"widget_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_padding_top",
	$widget_padding_top
);
$widget_padding_right = new MooseElatedField(
	"textsimple",
	"widget_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_padding_right",
	$widget_padding_right
);
$widget_padding_bottom = new MooseElatedField(
	"textsimple",
	"widget_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_padding_bottom",
	$widget_padding_bottom
);
$widget_padding_left = new MooseElatedField(
	"textsimple",
	"widget_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_padding_left",
	$widget_padding_left
);

$sidebar_widget_enable_box_shadow = new MooseElatedField(
	'yesno',
	'sidebar_widget_enable_box_shadow',
	'no',
	esc_html__( 'Enable Shadow For Widgets', 'moose' ),
	'',
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_sidebar_widget_shadow_container'
	)
);
$panel_widgets->addChild(
	'sidebar_widget_enable_box_shadow',
	$sidebar_widget_enable_box_shadow
);

$sidebar_widget_shadow_container = new MooseElatedContainer(
	'sidebar_widget_shadow_container',
	'sidebar_widget_enable_box_shadow',
	'no'
);
$panel_widgets->addChild(
	'sidebar_widget_shadow_container',
	$sidebar_widget_shadow_container
);

$sidebar_widget_shadow_horizontal_offset = new MooseElatedField(
	'text',
	'sidebar_widget_shadow_horizontal_offset',
	'',
	esc_html__( 'Horizontal Offset(px)', 'moose' ),
	esc_html__( 'Use positive numbers for right offset and negative numbers for left offset', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_horizontal_offset',
	$sidebar_widget_shadow_horizontal_offset
);

$sidebar_widget_shadow_vertical_offset = new MooseElatedField(
	'text',
	'sidebar_widget_shadow_vertical_offset',
	'',
	esc_html__( 'Vertical Offset(px)', 'moose' ),
	esc_html__( 'Use positive numbers for bottom offset and negative numbers for top offset', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_vertical_offset',
	$sidebar_widget_shadow_vertical_offset
);

$sidebar_widget_shadow_blur = new MooseElatedField(
	'text',
	'sidebar_widget_shadow_blur',
	'',
	esc_html__( 'Blur(px)', 'moose' ),
	esc_html__( 'Define amount of shadow blur in pixels', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_blur',
	$sidebar_widget_shadow_blur
);

$sidebar_widget_shadow_spread = new MooseElatedField(
	'text',
	'sidebar_widget_shadow_spread',
	'',
	esc_html__( 'Spread(px)', 'moose' ),
	esc_html__( 'Define amount of shadow spread in pixels', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_spread',
	$sidebar_widget_shadow_spread
);

$sidebar_widget_shadow_color = new MooseElatedField(
	'color',
	'sidebar_widget_shadow_color',
	'',
	esc_html__( 'Color', 'moose' ),
	esc_html__( 'Choose color of shadow', 'moose' )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_color',
	$sidebar_widget_shadow_color
);

$widget_title = new MooseElatedTitle(
	"widget_title",
	esc_html__( "Widget Title", 'moose' )
);
$panel_widgets->addChild(
	"widget_title",
	$widget_title
);

$group2 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define styles for widgets title", 'moose' )
);
$panel_widgets->addChild(
	"group2",
	$group2
);
$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$sidebar_title_color = new MooseElatedField(
	"colorsimple",
	"sidebar_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_color",
	$sidebar_title_color
);

$sidebar_title_font_size = new MooseElatedField(
	"textsimple",
	"sidebar_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_font_size",
	$sidebar_title_font_size
);

$sidebar_title_line_height = new MooseElatedField(
	"textsimple",
	"sidebar_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_line_height",
	$sidebar_title_line_height
);

$sidebar_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"sidebar_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"sidebar_title_text_transform",
	$sidebar_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$sidebar_title_font_family = new MooseElatedField(
	"fontsimple",
	"sidebar_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_title_font_family",
	$sidebar_title_font_family
);

$sidebar_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"sidebar_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"sidebar_title_font_style",
	$sidebar_title_font_style
);

$sidebar_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"sidebar_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"sidebar_title_font_weight",
	$sidebar_title_font_weight
);

$sidebar_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"sidebar_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_title_letter_spacing",
	$sidebar_title_letter_spacing
);

$sidebar_title_aligment = new MooseElatedField(
	"select",
	"sidebar_title_aligment",
	"",
	esc_html__( "Title Text Alignment", 'moose' ),
	esc_html__( "Choose text alignment for widget title", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$panel_widgets->addChild(
	"sidebar_title_aligment",
	$sidebar_title_aligment
);

$sidebar_title_background = new MooseElatedField(
	"color",
	"sidebar_title_background",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose color for background", 'moose' )
);
$panel_widgets->addChild(
	"sidebar_title_background",
	$sidebar_title_background
);

$sidebar_title_border_color = new MooseElatedField(
	"color",
	"sidebar_title_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose color for border", 'moose' )
);
$panel_widgets->addChild(
	"sidebar_title_border_color",
	$sidebar_title_border_color
);

$group8 = new MooseElatedGroup(
	esc_html__( "Padding for Title", 'moose' ),
	esc_html__( "Define padding for title", 'moose' )
);
$panel_widgets->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$sidebar_title_padding_top = new MooseElatedField(
	"textsimple",
	"sidebar_title_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_padding_top",
	$sidebar_title_padding_top
);

$sidebar_title_padding_right = new MooseElatedField(
	"textsimple",
	"sidebar_title_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_padding_right",
	$sidebar_title_padding_right
);

$sidebar_title_padding_bottom = new MooseElatedField(
	"textsimple",
	"sidebar_title_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_padding_bottom",
	$sidebar_title_padding_bottom
);

$sidebar_title_padding_left = new MooseElatedField(
	"textsimple",
	"sidebar_title_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_padding_left",
	$sidebar_title_padding_left
);

$group4 = new MooseElatedGroup(
	esc_html__( "Separator", 'moose' ),
	esc_html__( "Define styles for title separator", 'moose' )
);
$panel_widgets->addChild(
	"group4",
	$group4
);
$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);
$sidebar_title_border_bottom_color = new MooseElatedField(
	"colorsimple",
	"sidebar_title_border_bottom_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_border_bottom_color",
	$sidebar_title_border_bottom_color
);

$sidebar_title_border_bottom_width = new MooseElatedField(
	"textsimple",
	"sidebar_title_border_bottom_width",
	"",
	esc_html__( "Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_border_bottom_width",
	$sidebar_title_border_bottom_width
);

$sidebar_title_border_bottom_padding_bottom = new MooseElatedField(
	"textsimple",
	"sidebar_title_border_bottom_padding_bottom",
	"",
	esc_html__( "Top Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_border_bottom_padding_bottom",
	$sidebar_title_border_bottom_padding_bottom
);

$sidebar_title_border_bottom_margin_bottom = new MooseElatedField(
	"textsimple",
	"sidebar_title_border_bottom_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_title_border_bottom_margin_bottom",
	$sidebar_title_border_bottom_margin_bottom
);

$row2 = new MooseElatedRow();
$group4->addChild(
	"row2",
	$row2
);

$sidebar_title_border_bottom_length = new MooseElatedField(
	"textsimple",
	"sidebar_title_border_bottom_length",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_title_border_bottom_length",
	$sidebar_title_border_bottom_length
);

$sidebar_title_enable_icons = new MooseElatedField(
	"yesno",
	"sidebar_title_enable_icons",
	"yes",
	esc_html__( "Enable Icons by Title", 'moose' ),
	esc_html__( "Enabling this option will show default icons by widget title", 'moose' )
);
$panel_widgets->addChild(
	"sidebar_title_enable_icons",
	$sidebar_title_enable_icons
);

$widget_text = new MooseElatedTitle(
	"widget_text",
	esc_html__( "Widget Text", 'moose' )
);
$panel_widgets->addChild(
	"widget_text",
	$widget_text
);

$group7 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define styles for widgets text", 'moose' )
);
$panel_widgets->addChild(
	"group7",
	$group7
);
$row1 = new MooseElatedRow();
$group7->addChild(
	"row1",
	$row1
);
$sidebar_text_color = new MooseElatedField(
	"colorsimple",
	"sidebar_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_text_color",
	$sidebar_text_color
);

$sidebar_text_font_size = new MooseElatedField(
	"textsimple",
	"sidebar_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_text_font_size",
	$sidebar_text_font_size
);

$sidebar_text_line_height = new MooseElatedField(
	"textsimple",
	"sidebar_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_text_line_height",
	$sidebar_text_line_height
);

$sidebar_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"sidebar_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"sidebar_text_text_transform",
	$sidebar_text_text_transform
);

$row2 = new MooseElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);
$sidebar_text_font_family = new MooseElatedField(
	"fontsimple",
	"sidebar_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_text_font_family",
	$sidebar_text_font_family
);

$sidebar_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"sidebar_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"sidebar_text_font_style",
	$sidebar_text_font_style
);

$sidebar_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"sidebar_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"sidebar_text_font_weight",
	$sidebar_text_font_weight
);

$sidebar_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"sidebar_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_text_letter_spacing",
	$sidebar_text_letter_spacing
);

$widget_link = new MooseElatedTitle(
	"widget_link",
	esc_html__( "Widget Link", 'moose' )
);
$panel_widgets->addChild(
	"widget_link",
	$widget_link
);

$group3 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define styles for widget links", 'moose' )
);
$panel_widgets->addChild(
	"group3",
	$group3
);
$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);
$sidebar_link_color = new MooseElatedField(
	"colorsimple",
	"sidebar_link_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_link_color",
	$sidebar_link_color
);

$sidebar_link_hover_color = new MooseElatedField(
	"colorsimple",
	"sidebar_link_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_link_hover_color",
	$sidebar_link_hover_color
);

$sidebar_link_font_size = new MooseElatedField(
	"textsimple",
	"sidebar_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_link_font_size",
	$sidebar_link_font_size
);

$sidebar_link_line_height = new MooseElatedField(
	"textsimple",
	"sidebar_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_link_line_height",
	$sidebar_link_line_height
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$sidebar_link_text_transform = new MooseElatedField(
	"selectblanksimple",
	"sidebar_link_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"sidebar_link_text_transform",
	$sidebar_link_text_transform
);

$sidebar_link_font_family = new MooseElatedField(
	"fontsimple",
	"sidebar_link_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_link_font_family",
	$sidebar_link_font_family
);

$sidebar_link_font_style = new MooseElatedField(
	"selectblanksimple",
	"sidebar_link_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"sidebar_link_font_style",
	$sidebar_link_font_style
);

$sidebar_link_font_weight = new MooseElatedField(
	"selectblanksimple",
	"sidebar_link_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"sidebar_link_font_weight",
	$sidebar_link_font_weight
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);
$sidebar_link_letter_spacing = new MooseElatedField(
	"textsimple",
	"sidebar_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"sidebar_link_letter_spacing",
	$sidebar_link_letter_spacing
);

$group9 = new MooseElatedGroup(
	esc_html__( "Separator Style", 'moose' ),
	esc_html__( "Choose style for separator between links", 'moose' )
);
$panel_widgets->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$sidebar_link_separator_color = new MooseElatedField(
	"colorsimple",
	"sidebar_link_separator_color",
	"",
	esc_html__( "Separator between links color", 'moose' ),
	esc_html__( "Choose color for separator between color", 'moose' )
);
$row1->addChild(
	"sidebar_link_separator_color",
	$sidebar_link_separator_color
);

$sidebar_link_separator_type = new MooseElatedField(
	"selectblanksimple",
	"sidebar_link_separator_type",
	"",
	esc_html__( "Separator between links style", 'moose' ),
	esc_html__( "Choose style for separator", 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' )
	)
);
$row1->addChild(
	"sidebar_link_separator_type",
	$sidebar_link_separator_type
);

$widget_elements = new MooseElatedTitle(
	"widget_elements",
	esc_html__( "Widget Elements", 'moose' )
);
$panel_widgets->addChild(
	"widget_elements",
	$widget_elements
);

$group5 = new MooseElatedGroup(
	esc_html__( "Search", 'moose' ),
	esc_html__( "Define styles for search in widget", 'moose' )
);
$panel_widgets->addChild(
	"group5",
	$group5
);
$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$sidebar_search_height = new MooseElatedField(
	"textsimple",
	"sidebar_search_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_search_height",
	$sidebar_search_height
);

$sidebar_search_border_color = new MooseElatedField(
	"colorsimple",
	"sidebar_search_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_search_border_color",
	$sidebar_search_border_color
);

$sidebar_search_loupe_color = new MooseElatedField(
	"colorsimple",
	"sidebar_search_loupe_color",
	"",
	esc_html__( "Magnifier Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_search_loupe_color",
	$sidebar_search_loupe_color
);

$sidebar_search_loupe_background_color = new MooseElatedField(
	"colorsimple",
	"sidebar_search_loupe_background_color",
	"",
	esc_html__( "Magnifier Area Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_search_loupe_background_color",
	$sidebar_search_loupe_background_color
);

$row2 = new MooseElatedRow();
$group5->addChild(
	"row2",
	$row2
);
$sidebar_search_text_color = new MooseElatedField(
	"colorsimple",
	"sidebar_search_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_search_text_color",
	$sidebar_search_text_color
);

$sidebar_search_focus_text_color = new MooseElatedField(
	"colorsimple",
	"sidebar_search_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_search_focus_text_color",
	$sidebar_search_focus_text_color
);

$sidebar_search_text_font_size = new MooseElatedField(
	"textsimple",
	"sidebar_search_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_search_text_font_size",
	$sidebar_search_text_font_size
);

$sidebar_search_text_line_height = new MooseElatedField(
	"textsimple",
	"sidebar_search_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_search_text_line_height",
	$sidebar_search_text_line_height
);

$row3 = new MooseElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$sidebar_search_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"sidebar_search_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"sidebar_search_text_text_transform",
	$sidebar_search_text_text_transform
);

$sidebar_search_text_font_family = new MooseElatedField(
	"fontsimple",
	"sidebar_search_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"sidebar_search_text_font_family",
	$sidebar_search_text_font_family
);

$sidebar_search_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"sidebar_search_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"sidebar_search_text_font_style",
	$sidebar_search_text_font_style
);

$sidebar_search_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"sidebar_search_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"sidebar_search_text_font_weight",
	$sidebar_search_text_font_weight
);

$row4 = new MooseElatedRow( true );
$group5->addChild(
	"row4",
	$row4
);

$sidebar_search_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"sidebar_search_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"sidebar_search_text_letter_spacing",
	$sidebar_search_text_letter_spacing
);

$sidebar_search_border_around = new MooseElatedField(
	"selectsimple",
	"sidebar_search_border_around",
	"",
	esc_html__( "Border Around", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"around_everything" => esc_html__( "Around Everything", 'moose' ),
		"around_search_text" => esc_html__( "Around Search Text", 'moose' )
	)
);
$row4->addChild(
	"sidebar_search_border_around",
	$sidebar_search_border_around
);

$widget_blog_list = new MooseElatedTitle(
	"widget_blog_list",
	esc_html__( "Widget - Elated Blog", 'moose' )
);
$panel_widgets->addChild(
	"widget_blog_list",
	$widget_blog_list
);

$group10 = new MooseElatedGroup(
	esc_html__( "Blog List Title", 'moose' ),
	esc_html__( "Define Blog List title style", 'moose' )
);
$panel_widgets->addChild(
	"group10",
	$group10
);
$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_color = new MooseElatedField(
	"colorsimple",
	"widget_blog_list_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_title_color",
	$widget_blog_list_title_color
);

$widget_blog_list_title_hover_color = new MooseElatedField(
	"colorsimple",
	"widget_blog_list_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_title_hover_color",
	$widget_blog_list_title_hover_color
);

$widget_blog_list_title_font_size = new MooseElatedField(
	"textsimple",
	"widget_blog_list_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_title_font_size",
	$widget_blog_list_title_font_size
);

$widget_blog_list_title_line_height = new MooseElatedField(
	"textsimple",
	"widget_blog_list_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_title_line_height",
	$widget_blog_list_title_line_height
);

$row2 = new MooseElatedRow( true );
$group10->addChild(
	"row2",
	$row2
);

$widget_blog_list_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"widget_blog_list_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"widget_blog_list_title_text_transform",
	$widget_blog_list_title_text_transform
);

$widget_blog_list_title_font_family = new MooseElatedField(
	"fontsimple",
	"widget_blog_list_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"widget_blog_list_title_font_family",
	$widget_blog_list_title_font_family
);

$widget_blog_list_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"widget_blog_list_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"widget_blog_list_title_font_style",
	$widget_blog_list_title_font_style
);

$widget_blog_list_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"widget_blog_list_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"widget_blog_list_title_font_weight",
	$widget_blog_list_title_font_weight
);

$row3 = new MooseElatedRow( true );
$group10->addChild(
	"row3",
	$row3
);

$widget_blog_list_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"widget_blog_list_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"widget_blog_list_title_letter_spacing",
	$widget_blog_list_title_letter_spacing
);

$group11 = new MooseElatedGroup(
	esc_html__( "Blog List Post Info", 'moose' ),
	esc_html__( "Define blog list post info style", 'moose' )
);
$panel_widgets->addChild(
	"group11",
	$group11
);
$row1 = new MooseElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$widget_blog_list_post_info_color = new MooseElatedField(
	"colorsimple",
	"widget_blog_list_post_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_post_info_color",
	$widget_blog_list_post_info_color
);

$widget_blog_list_post_info_link_color = new MooseElatedField(
	"colorsimple",
	"widget_blog_list_post_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_color",
	$widget_blog_list_post_info_link_color
);

$widget_blog_list_post_info_link_hover_color = new MooseElatedField(
	"colorsimple",
	"widget_blog_list_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_hover_color",
	$widget_blog_list_post_info_link_hover_color
);

$widget_blog_list_post_info_font_size = new MooseElatedField(
	"textsimple",
	"widget_blog_list_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_post_info_font_size",
	$widget_blog_list_post_info_font_size
);

$row2 = new MooseElatedRow( true );
$group11->addChild(
	"row2",
	$row2
);

$widget_blog_list_post_info_line_height = new MooseElatedField(
	"textsimple",
	"widget_blog_list_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"widget_blog_list_post_info_line_height",
	$widget_blog_list_post_info_line_height
);

$widget_blog_list_post_info_text_transform = new MooseElatedField(
	"selectblanksimple",
	"widget_blog_list_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"widget_blog_list_post_info_text_transform",
	$widget_blog_list_post_info_text_transform
);

$widget_blog_list_post_info_font_family = new MooseElatedField(
	"fontsimple",
	"widget_blog_list_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"widget_blog_list_post_info_font_family",
	$widget_blog_list_post_info_font_family
);

$widget_blog_list_post_info_font_style = new MooseElatedField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"widget_blog_list_post_info_font_style",
	$widget_blog_list_post_info_font_style
);

$row3 = new MooseElatedRow( true );
$group11->addChild(
	"row3",
	$row3
);

$widget_blog_list_post_info_font_weight = new MooseElatedField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"widget_blog_list_post_info_font_weight",
	$widget_blog_list_post_info_font_weight
);

$widget_blog_list_post_info_letter_spacing = new MooseElatedField(
	"textsimple",
	"widget_blog_list_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"widget_blog_list_post_info_letter_spacing",
	$widget_blog_list_post_info_letter_spacing
);

$group12 = new MooseElatedGroup(
	esc_html__( "Blog List Date Style", 'moose' ),
	esc_html__( "Define blog list date style", 'moose' )
);
$panel_widgets->addChild(
	"group12",
	$group12
);
$row1 = new MooseElatedRow();
$group12->addChild(
	"row1",
	$row1
);

$widget_blog_list_date_color = new MooseElatedField(
	"colorsimple",
	"widget_blog_list_date_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_date_color",
	$widget_blog_list_date_color
);

$widget_blog_list_date_font_size = new MooseElatedField(
	"textsimple",
	"widget_blog_list_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_date_font_size",
	$widget_blog_list_date_font_size
);

$widget_blog_list_date_line_height = new MooseElatedField(
	"textsimple",
	"widget_blog_list_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_date_line_height",
	$widget_blog_list_date_line_height
);

$widget_blog_list_date_text_transform = new MooseElatedField(
	"selectblanksimple",
	"widget_blog_list_date_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"widget_blog_list_date_text_transform",
	$widget_blog_list_date_text_transform
);

$row2 = new MooseElatedRow( true );
$group12->addChild(
	"row2",
	$row2
);

$widget_blog_list_date_font_family = new MooseElatedField(
	"fontsimple",
	"widget_blog_list_date_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"widget_blog_list_date_font_family",
	$widget_blog_list_date_font_family
);

$widget_blog_list_date_font_style = new MooseElatedField(
	"selectblanksimple",
	"widget_blog_list_date_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"widget_blog_list_date_font_style",
	$widget_blog_list_date_font_style
);

$widget_blog_list_date_font_weight = new MooseElatedField(
	"selectblanksimple",
	"widget_blog_list_date_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"widget_blog_list_date_font_weight",
	$widget_blog_list_date_font_weight
);

$widget_blog_list_date_letter_spacing = new MooseElatedField(
	"textsimple",
	"widget_blog_list_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"widget_blog_list_date_letter_spacing",
	$widget_blog_list_date_letter_spacing
);

$group31 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing", 'moose' ),
	esc_html__( "Define blog list spacing", 'moose' )
);
$panel_widgets->addChild(
	"group31",
	$group31
);

$row1 = new MooseElatedRow( true );
$group31->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_margin_bttm = new MooseElatedField(
	"textsimple",
	"widget_blog_list_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_title_margin_bttm",
	$widget_blog_list_title_margin_bttm
);

$widget_blog_list_post_info_margin_bttm = new MooseElatedField(
	"textsimple",
	"widget_blog_list_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_post_info_margin_bttm",
	$widget_blog_list_post_info_margin_bttm
);

$widget_blog_list_read_more_margin_top = new MooseElatedField(
	"textsimple",
	"widget_blog_list_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"widget_blog_list_read_more_margin_top",
	$widget_blog_list_read_more_margin_top
);

//Widget - Latest Posts Slider
$latest_posts_title = new MooseElatedTitle(
	'latest_posts_title',
	esc_html__( 'Widget - Elated Latest Posts Slider', 'moose' )
);
$panel_widgets->addChild(
	'latest_posts_title',
	$latest_posts_title
);

$group_title_style = new MooseElatedGroup(
	esc_html__( "Title style", 'moose' ),
	esc_html__( "Latest Post Slider title style", 'moose' )
);
$panel_widgets->addChild(
	"group_title_style",
	$group_title_style
);

$row1 = new MooseElatedRow();
$group_title_style->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_title_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_title_color",
	"",
	esc_html__( "Title Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_title_color",
	$menu_latest_post_widget_title_color
);

$menu_latest_post_widget_title_hover_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_title_hover_color",
	$menu_latest_post_widget_title_hover_color
);

$menu_latest_post_widget_title_font_size = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_title_font_size",
	$menu_latest_post_widget_title_font_size
);

$menu_latest_post_widget_title_line_height = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_title_line_height",
	$menu_latest_post_widget_title_line_height
);

$row2 = new MooseElatedRow();
$group_title_style->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"menu_latest_post_widget_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"menu_latest_post_widget_title_text_transform",
	$menu_latest_post_widget_title_text_transform
);

$menu_latest_post_widget_title_font_family = new MooseElatedField(
	"fontsimple",
	"menu_latest_post_widget_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"menu_latest_post_widget_title_font_family",
	$menu_latest_post_widget_title_font_family
);

$menu_latest_post_widget_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"menu_latest_post_widget_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"menu_latest_post_widget_title_font_style",
	$menu_latest_post_widget_title_font_style
);

$menu_latest_post_widget_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"menu_latest_post_widget_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"menu_latest_post_widget_title_font_weight",
	$menu_latest_post_widget_title_font_weight
);

$row3 = new MooseElatedRow();
$group_title_style->addChild(
	"row3",
	$row3
);

$menu_latest_post_widget_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"menu_latest_post_widget_title_letter_spacing",
	$menu_latest_post_widget_title_letter_spacing
);

$group_post_info_style = new MooseElatedGroup(
	esc_html__( "Post Info style", 'moose' ),
	esc_html__( "Latest Post Slider post info style", 'moose' )
);
$panel_widgets->addChild(
	"group_post_info_style",
	$group_post_info_style
);

$row1 = new MooseElatedRow();
$group_post_info_style->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_post_info_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_post_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_color",
	$menu_latest_post_widget_post_info_color
);

$menu_latest_post_widget_post_info_link_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_post_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_link_color",
	$menu_latest_post_widget_post_info_link_color
);

$menu_latest_post_widget_post_info_link_hover_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_link_hover_color",
	$menu_latest_post_widget_post_info_link_hover_color
);

$menu_latest_post_widget_post_info_font_size = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_font_size",
	$menu_latest_post_widget_post_info_font_size
);

$row2 = new MooseElatedRow();
$group_post_info_style->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_post_info_line_height = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_line_height",
	$menu_latest_post_widget_post_info_line_height
);

$menu_latest_post_widget_post_info_text_transform = new MooseElatedField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"menu_latest_post_widget_post_info_text_transform",
	$menu_latest_post_widget_post_info_text_transform
);

$menu_latest_post_widget_post_info_font_family = new MooseElatedField(
	"fontsimple",
	"menu_latest_post_widget_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_font_family",
	$menu_latest_post_widget_post_info_font_family
);

$menu_latest_post_widget_post_info_font_style = new MooseElatedField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"menu_latest_post_widget_post_info_font_style",
	$menu_latest_post_widget_post_info_font_style
);

$row3 = new MooseElatedRow();
$group_post_info_style->addChild(
	"row3",
	$row3
);

$menu_latest_post_widget_post_info_font_weight = new MooseElatedField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"menu_latest_post_widget_post_info_font_weight",
	$menu_latest_post_widget_post_info_font_weight
);

$menu_latest_post_widget_post_info_letter_spacing = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"menu_latest_post_widget_post_info_letter_spacing",
	$menu_latest_post_widget_post_info_letter_spacing
);

$group_spacing = new MooseElatedGroup(
	esc_html__( "Spacing", 'moose' ),
	esc_html__( "Define spacing for Latest Post Slider widget", 'moose' )
);
$panel_widgets->addChild(
	"group_spacing",
	$group_spacing
);

$row1 = new MooseElatedRow();
$group_spacing->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_thumb_margin_bttm = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_thumb_margin_bttm",
	"",
	esc_html__( "Margin Under Image (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_thumb_margin_bttm",
	$menu_latest_post_widget_thumb_margin_bttm
);

$menu_latest_post_widget_title_margin_bttm = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_title_margin_bttm",
	$menu_latest_post_widget_title_margin_bttm
);

$group_navigation_arrow_size = new MooseElatedGroup(
	esc_html__( "Navigation Arrow Button Size", 'moose' ),
	esc_html__( "Define arrow size", 'moose' )
);
$panel_widgets->addChild(
	"group_navigation_arrow_size",
	$group_navigation_arrow_size
);

$row1 = new MooseElatedRow();
$group_navigation_arrow_size->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_arrow_width = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_arrow_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_width",
	$menu_latest_post_widget_arrow_width
);

$menu_latest_post_widget_arrow_height = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_arrow_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_height",
	$menu_latest_post_widget_arrow_height
);

$menu_latest_post_widget_arrow_size = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_size",
	$menu_latest_post_widget_arrow_size
);

$group_navigation_arrow_color = new MooseElatedGroup(
	esc_html__( "Navigation Arrow Color", 'moose' ),
	esc_html__( "Define coloring for navigation arrows", 'moose' )
);
$panel_widgets->addChild(
	"group_navigation_arrow_color",
	$group_navigation_arrow_color
);

$row1 = new MooseElatedRow();
$group_navigation_arrow_color->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_arrow_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_arrow_color",
	"",
	esc_html__( "Arrow Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_color",
	$menu_latest_post_widget_arrow_color
);

$menu_latest_post_widget_arrow_transparency = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_transparency",
	$menu_latest_post_widget_arrow_transparency
);

$menu_latest_post_widget_arrow_hover_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_hover_color",
	$menu_latest_post_widget_arrow_hover_color
);

$menu_latest_post_widget_arrow_hover_transparency = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_hover_transparency",
	$menu_latest_post_widget_arrow_hover_transparency
);

$group_navigation_btn_bg = new MooseElatedGroup(
	esc_html__( "Navigation Button Background", 'moose' ),
	esc_html__( "Define navigation button background", 'moose' )
);
$panel_widgets->addChild(
	"group_navigation_btn_bg",
	$group_navigation_btn_bg
);

$row1 = new MooseElatedRow();
$group_navigation_btn_bg->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_background_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_background_color",
	$menu_latest_post_widget_background_color
);

$menu_latest_post_widget_background_transparency = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_background_transparency",
	$menu_latest_post_widget_background_transparency
);

$menu_latest_post_widget_background_hover_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_background_hover_color",
	$menu_latest_post_widget_background_hover_color
);

$menu_latest_post_widget_background_hover_transparency = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_background_hover_transparency",
	$menu_latest_post_widget_background_hover_transparency
);

$group_navigation_btn_border = new MooseElatedGroup(
	esc_html__( "Navigation Button Border", 'moose' ),
	esc_html__( "Define border style", 'moose' )
);
$panel_widgets->addChild(
	"group_navigation_btn_border",
	$group_navigation_btn_border
);

$row1 = new MooseElatedRow();
$group_navigation_btn_border->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_border_width = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_border_width",
	"",
	esc_html__( "Border width (px)", 'moose' ),
	""
);
$row1->addChild(
	"menu_latest_post_widget_border_width",
	$menu_latest_post_widget_border_width
);

$menu_latest_post_widget_border_radius = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_border_radius",
	$menu_latest_post_widget_border_radius
);

$menu_latest_post_widget_border_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_border_color",
	$menu_latest_post_widget_border_color
);

$menu_latest_post_widget_border_transparency = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"menu_latest_post_widget_border_transparency",
	$menu_latest_post_widget_border_transparency
);

$row2 = new MooseElatedRow();
$group_navigation_btn_border->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_border_hover_color = new MooseElatedField(
	"colorsimple",
	"menu_latest_post_widget_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"menu_latest_post_widget_border_hover_color",
	$menu_latest_post_widget_border_hover_color
);

$menu_latest_post_widget_border_hover_transparency = new MooseElatedField(
	"textsimple",
	"menu_latest_post_widget_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"menu_latest_post_widget_border_hover_transparency",
	$menu_latest_post_widget_border_hover_transparency
);

$menu_latest_post_widget_position = new MooseElatedField(
	"text",
	"menu_latest_post_widget_position",
	"",
	esc_html__( "Navigation Buttons Position from Middle (px)", 'moose' ),
	esc_html__( "Move navigation arrows down(positive value), or up (negative value) from the middle", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel_widgets->addChild(
	"menu_latest_post_widget_position",
	$menu_latest_post_widget_position
);