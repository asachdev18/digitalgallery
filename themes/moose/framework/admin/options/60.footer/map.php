<?php

$footerPage = new MooseElatedAdminPage(
	"3",
	esc_html__( "Footer", 'moose' ),
	"fa fa-sort-amount-asc"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"footer",
	$footerPage
);

$panel10 = new MooseElatedPanel(
	esc_html__( "Footer", 'moose' ),
	"footer_panel"
);
$footerPage->addChild(
	"panel10",
	$panel10
);

$uncovering_footer = new MooseElatedField(
	"yesno",
	"uncovering_footer",
	"no",
	esc_html__( "Uncovering Footer", 'moose' ),
	esc_html__( "Enabling this option will make Footer gradually appear on scroll", 'moose' )
);
$panel10->addChild(
	"uncovering_footer",
	$uncovering_footer
);

$footer_in_grid = new MooseElatedField(
	"yesno",
	"footer_in_grid",
	"yes",
	esc_html__( "Footer in Grid", 'moose' ),
	esc_html__( "Enabling this option will place Footer content in grid", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_footer_grid_background_container"
	)
);
$panel10->addChild(
	"footer_in_grid",
	$footer_in_grid
);

$footer_main_image_background = new MooseElatedField(
	"image",
	"footer_main_image_background",
	"",
	esc_html__( "Footer Background Image", 'moose' ),
	esc_html__( "Choose footer background image", 'moose' )
);
$panel10->addChild(
	"footer_main_image_background",
	$footer_main_image_background
);

$show_footer_top = new MooseElatedField(
	"yesno",
	"show_footer_top",
	"yes",
	esc_html__( "Show Footer Top", 'moose' ),
	esc_html__( "Enabling this option will show Footer Top area", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_show_footer_top_container"
	)
);
$panel10->addChild(
	"show_footer_top",
	$show_footer_top
);

$show_footer_top_container = new MooseElatedContainer(
	"show_footer_top_container",
	"show_footer_top",
	"no"
);
$panel10->addChild(
	"show_footer_top_container",
	$show_footer_top_container
);

$footer_top_columns_alignment = new MooseElatedField(
	"select",
	"footer_top_columns_alignment",
	"",
	esc_html__( "Footer Top Columns Alignment", 'moose' ),
	esc_html__( "Text Alignment in Footer Columns", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$show_footer_top_container->addChild(
	"footer_top_columns_alignment",
	$footer_top_columns_alignment
);

$footer_top_columns = new MooseElatedField(
	"select",
	"footer_top_columns",
	"4",
	esc_html__( "Footer Top Columns", 'moose' ),
	esc_html__( "Choose number of columns for Footer Top area", 'moose' ),
	array(
		"1" => "1",
		"2" => "2",
		"3" => "3",
		"5" => esc_html__( "3(25%+25%+50%)", 'moose' ),
		"6" => esc_html__( "3(50%+25%+25%)", 'moose' ),
		"4" => "4"
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"1" => "#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container,#eltdf_footer_top_column4_alignment_container",
			"2" => "#eltdf_footer_top_column3_alignment_container,#eltdf_footer_top_column4_alignment_container",
			"3" => "#eltdf_footer_top_column4_alignment_container",
			"4" => "",
			"5" => "#eltdf_footer_top_column4_alignment_container",
			"6" => "#eltdf_footer_top_column4_alignment_container"
		),
		"show"       => array(
			"1" => "#eltdf_footer_top_column1_alignment_container",
			"2" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container",
			"3" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container",
			"4" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container,#eltdf_footer_top_column4_alignment_container",
			"5" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container",
			"6" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container",
		)
	)
);
$show_footer_top_container->addChild(
	"footer_top_columns",
	$footer_top_columns
);

$footer_top_column1_alignment_container = new MooseElatedContainer(
	"footer_top_column1_alignment_container",
	"footer_top_columns",
	""
);
$show_footer_top_container->addChild(
	"footer_top_column1_alignment_container",
	$footer_top_column1_alignment_container
);

$footer_top_column1_alignment = new MooseElatedField(
	"select",
	"footer_top_column1_alignment",
	"",
	esc_html__( "Footer Top First Column Alignment", 'moose' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'moose' ),
	array(
		"" => esc_html__( "Default", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	),
	array( "col_width" => 3 )
);
$footer_top_column1_alignment_container->addChild(
	"footer_top_column1_alignment",
	$footer_top_column1_alignment
);

$footer_top_column2_alignment_container = new MooseElatedContainer(
	"footer_top_column2_alignment_container",
	"footer_top_columns",
	"1"
);
$show_footer_top_container->addChild(
	"footer_top_column2_alignment_container",
	$footer_top_column2_alignment_container
);

$footer_top_column2_alignment = new MooseElatedField(
	"select",
	"footer_top_column2_alignment",
	"",
	esc_html__( "Footer Top Second Column Alignment", 'moose' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'moose' ),
	array(
		"" => esc_html__( "Default", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	),
	array( "col_width" => 3 )
);
$footer_top_column2_alignment_container->addChild(
	"footer_top_column2_alignment",
	$footer_top_column2_alignment
);

$footer_top_column3_alignment_container = new MooseElatedContainer(
	"footer_top_column3_alignment_container",
	"footer_top_columns",
	"1",
	array( "1", "2" )
);
$show_footer_top_container->addChild(
	"footer_top_column3_alignment_container",
	$footer_top_column3_alignment_container
);

$footer_top_column3_alignment = new MooseElatedField(
	"select",
	"footer_top_column3_alignment",
	"",
	esc_html__( "Footer Top Third Column Alignment", 'moose' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'moose' ),
	array(
		"" => esc_html__( "Default", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	),
	array( "col_width" => 3 )
);
$footer_top_column3_alignment_container->addChild(
	"footer_top_column3_alignment",
	$footer_top_column3_alignment
);

$footer_top_column4_alignment_container = new MooseElatedContainer(
	"footer_top_column4_alignment_container",
	"footer_top_columns",
	"1",
	array( "1", "2", "3", "5", "6" )
);
$show_footer_top_container->addChild(
	"footer_top_column4_alignment_container",
	$footer_top_column4_alignment_container
);

$footer_top_column4_alignment = new MooseElatedField(
	"select",
	"footer_top_column4_alignment",
	"",
	esc_html__( "Footer Top Fourth Column Alignment", 'moose' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'moose' ),
	array(
		"" => esc_html__( "Default", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	),
	array( "col_width" => 3 )
);
$footer_top_column4_alignment_container->addChild(
	"footer_top_column4_alignment",
	$footer_top_column4_alignment
);

$footer_border_columns = new MooseElatedField(
	"yesno",
	"footer_border_columns",
	"yes",
	esc_html__( "Border Between Columns", 'moose' ),
	esc_html__( "Disabling this option will remove border between footer columns.", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_footer_border_columns_holder"
	)
);
$show_footer_top_container->addChild(
	"footer_border_columns",
	$footer_border_columns
);

$footer_border_columns_holder = new MooseElatedContainer(
	"footer_border_columns_holder",
	"footer_border_columns",
	"no"
);
$show_footer_top_container->addChild(
	"footer_border_columns_holder",
	$footer_border_columns_holder
);

$footer_border_columns_color = new MooseElatedField(
	"color",
	"footer_border_columns_color",
	"",
	esc_html__( "Border Color Between Columns", 'moose' ),
	esc_html__( "Choose a color for border in footer columns.", 'moose' )
);
$footer_border_columns_holder->addChild(
	"footer_border_columns_color",
	$footer_border_columns_color
);

$footer_bottom_border_element = new MooseElatedField(
	"yesno",
	"footer_bottom_border_element",
	"yes",
	esc_html__( "Border Bottom on Elements", 'moose' ),
	esc_html__( "Enabling this option will add border bottom on footer elements.", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_footer_bottom_border_element_holder"
	)
);
$show_footer_top_container->addChild(
	"footer_bottom_border_element",
	$footer_bottom_border_element
);

$footer_bottom_border_element_holder = new MooseElatedContainer(
	"footer_bottom_border_element_holder",
	"footer_bottom_border_element",
	"no"
);
$show_footer_top_container->addChild(
	"footer_bottom_border_element_holder",
	$footer_bottom_border_element_holder
);

$footer_bottom_border_element_color = new MooseElatedField(
	"color",
	"footer_bottom_border_element_color",
	"",
	esc_html__( "Border Bottom Color", 'moose' ),
	esc_html__( "Choose a color for border in footer columns.", 'moose' )
);
$footer_bottom_border_element_holder->addChild(
	"footer_bottom_border_element_color",
	$footer_bottom_border_element_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Footer Top Area Style", 'moose' ),
	esc_html__( "Configure style for Footer Top area", 'moose' )
);
$show_footer_top_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$footer_top_background_color = new MooseElatedField(
	"colorsimple",
	"footer_top_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_top_background_color",
	$footer_top_background_color
);

$footer_top_border_color = new MooseElatedField(
	"colorsimple",
	"footer_top_border_color",
	"",
	esc_html__( "Top Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_top_border_color",
	$footer_top_border_color
);

$footer_top_border_width = new MooseElatedField(
	"textsimple",
	"footer_top_border_width",
	"",
	esc_html__( "Top Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_top_border_width",
	$footer_top_border_width
);

$footer_top_border_in_grid = new MooseElatedField(
	"yesnosimple",
	"footer_top_border_in_grid",
	"no",
	esc_html__( "Set Top Border In Grid", 'moose' ),
	""
);
$row1->addChild(
	"footer_top_border_in_grid",
	$footer_top_border_in_grid
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$footer_top_padding = new MooseElatedField(
	"textsimple",
	"footer_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_top_padding",
	$footer_top_padding
);

$footer_bottom_padding = new MooseElatedField(
	"textsimple",
	"footer_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_bottom_padding",
	$footer_bottom_padding
);

$footer_left_padding = new MooseElatedField(
	"textsimple",
	"footer_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_left_padding",
	$footer_left_padding
);

$footer_right_padding = new MooseElatedField(
	"textsimple",
	"footer_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_right_padding",
	$footer_right_padding
);

$footer_grid_background_container = new MooseElatedContainer(
	"footer_grid_background_container",
	"footer_in_grid",
	"no"
);
$show_footer_top_container->addChild(
	"footer_grid_background_container",
	$footer_grid_background_container
);

$footer_top_background_color_in_grid = new MooseElatedField(
	"color",
	"footer_top_background_color_in_grid",
	"",
	esc_html__( "Grid Background Color", 'moose' ),
	esc_html__( "Choose background color for grid on footer top", 'moose' )
);
$footer_grid_background_container->addChild(
	"footer_top_background_color_in_grid",
	$footer_top_background_color_in_grid
);

$footer_image_background = new MooseElatedField(
	"image",
	"footer_image_background",
	"",
	esc_html__( "Footer Top Background Image", 'moose' ),
	esc_html__( "Choose footer top background image", 'moose' )
);
$show_footer_top_container->addChild(
	"footer_image_background",
	$footer_image_background
);

$group2 = new MooseElatedGroup(
	esc_html__( "Footer Top Title Style", 'moose' ),
	esc_html__( "Configure style for Footer Top Title", 'moose' )
);
$show_footer_top_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$footer_title_color = new MooseElatedField(
	"colorsimple",
	"footer_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_title_color",
	$footer_title_color
);

$footer_title_font_size = new MooseElatedField(
	"textsimple",
	"footer_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_title_font_size",
	$footer_title_font_size
);

$footer_title_line_height = new MooseElatedField(
	"textsimple",
	"footer_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_title_line_height",
	$footer_title_line_height
);

$footer_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"footer_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"footer_title_text_transform",
	$footer_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$footer_title_font_family = new MooseElatedField(
	"fontsimple",
	"footer_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_title_font_family",
	$footer_title_font_family
);

$footer_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"footer_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"footer_title_font_style",
	$footer_title_font_style
);

$footer_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"footer_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"footer_title_font_weight",
	$footer_title_font_weight
);

$footer_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"footer_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_title_letter_spacing",
	$footer_title_letter_spacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Footer Top Text Style", 'moose' ),
	esc_html__( "Configure style for Footer Top text", 'moose' )
);
$show_footer_top_container->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);
$footer_top_text_color = new MooseElatedField(
	"colorsimple",
	"footer_top_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_top_text_color",
	$footer_top_text_color
);

$footer_top_text_font_size = new MooseElatedField(
	"textsimple",
	"footer_top_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_top_text_font_size",
	$footer_top_text_font_size
);

$footer_top_text_line_height = new MooseElatedField(
	"textsimple",
	"footer_top_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_top_text_line_height",
	$footer_top_text_line_height
);

$footer_top_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"footer_top_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"footer_top_text_text_transform",
	$footer_top_text_text_transform
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);
$footer_top_text_font_family = new MooseElatedField(
	"fontsimple",
	"footer_top_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_top_text_font_family",
	$footer_top_text_font_family
);

$footer_top_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"footer_top_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"footer_top_text_font_style",
	$footer_top_text_font_style
);

$footer_top_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"footer_top_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"footer_top_text_font_weight",
	$footer_top_text_font_weight
);

$footer_top_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"footer_top_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_top_text_letter_spacing",
	$footer_top_text_letter_spacing
);

$group4 = new MooseElatedGroup(
	esc_html__( "Footer Top Link Style", 'moose' ),
	esc_html__( "Configure style for Footer Top link", 'moose' )
);
$show_footer_top_container->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);
$footer_top_link_color = new MooseElatedField(
	"colorsimple",
	"footer_top_link_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_top_link_color",
	$footer_top_link_color
);

$footer_top_link_font_size = new MooseElatedField(
	"textsimple",
	"footer_top_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_top_link_font_size",
	$footer_top_link_font_size
);

$footer_top_link_line_height = new MooseElatedField(
	"textsimple",
	"footer_top_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_top_link_line_height",
	$footer_top_link_line_height
);

$footer_top_link_text_transform = new MooseElatedField(
	"selectblanksimple",
	"footer_top_link_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"footer_top_link_text_transform",
	$footer_top_link_text_transform
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);
$footer_top_link_font_family = new MooseElatedField(
	"fontsimple",
	"footer_top_link_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_top_link_font_family",
	$footer_top_link_font_family
);

$footer_top_link_font_style = new MooseElatedField(
	"selectblanksimple",
	"footer_top_link_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"footer_top_link_font_style",
	$footer_top_link_font_style
);

$footer_top_link_font_weight = new MooseElatedField(
	"selectblanksimple",
	"footer_top_link_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"footer_top_link_font_weight",
	$footer_top_link_font_weight
);

$footer_top_link_letter_spacing = new MooseElatedField(
	"textsimple",
	"footer_top_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_top_link_letter_spacing",
	$footer_top_link_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);
$footer_top_link_hover_color = new MooseElatedField(
	"colorsimple",
	"footer_top_link_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"footer_top_link_hover_color",
	$footer_top_link_hover_color
);

$footer_text = new MooseElatedField(
	"yesno",
	"footer_text",
	"yes",
	esc_html__( "Show Footer Bottom", 'moose' ),
	esc_html__( "Enabling this option will show Footer Bottom area", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_footer_text_container"
	)
);
$panel10->addChild(
	"footer_text",
	$footer_text
);

$footer_text_container = new MooseElatedContainer(
	"footer_text_container",
	"footer_text",
	"no"
);
$panel10->addChild(
	"footer_text_container",
	$footer_text_container
);

$footer_bottom_columns = new MooseElatedField(
	"select",
	"footer_bottom_columns",
	"3",
	esc_html__( "Footer Bottom Columns", 'moose' ),
	esc_html__( "Choose number of columns for Footer Bottom area", 'moose' ),
	array(
		"1" => "1",
		"2" => "2",
		"3" => "3"
	)
);
$footer_text_container->addChild(
	"footer_bottom_columns",
	$footer_bottom_columns
);

$group5 = new MooseElatedGroup(
	esc_html__( "Footer Bottom Area Style", 'moose' ),
	esc_html__( "Configure style for Footer Bottom area", 'moose' )
);
$footer_text_container->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);
$footer_bottom_height = new MooseElatedField(
	"textsimple",
	"footer_bottom_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_bottom_height",
	$footer_bottom_height
);
$footer_bottom_background_color = new MooseElatedField(
	"colorsimple",
	"footer_bottom_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_bottom_background_color",
	$footer_bottom_background_color
);

$footer_bottom_border_in_grid = new MooseElatedField(
	"yesnosimple",
	"footer_bottom_border_in_grid",
	"no",
	esc_html__( "Set Top Border In Grid", 'moose' ),
	""
);
$row1->addChild(
	"footer_bottom_border_in_grid",
	$footer_bottom_border_in_grid
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$footer_bottom_border_color = new MooseElatedField(
	"colorsimple",
	"footer_bottom_border_color",
	"",
	esc_html__( "Top Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_bottom_border_color",
	$footer_bottom_border_color
);
$footer_bottom_border_width = new MooseElatedField(
	"textsimple",
	"footer_bottom_border_width",
	"",
	esc_html__( "Top Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_bottom_border_width",
	$footer_bottom_border_width
);
$footer_bottom_border_bottom_color = new MooseElatedField(
	"colorsimple",
	"footer_bottom_border_bottom_color",
	"",
	esc_html__( "Bottom Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_bottom_border_bottom_color",
	$footer_bottom_border_bottom_color
);
$footer_bottom_border_bottom_width = new MooseElatedField(
	"textsimple",
	"footer_bottom_border_bottom_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_bottom_border_bottom_width",
	$footer_bottom_border_bottom_width
);

$row3 = new MooseElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$footer_bottom_top_padding = new MooseElatedField(
	"textsimple",
	"footer_bottom_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"footer_bottom_top_padding",
	$footer_bottom_top_padding
);
$footer_bottom_bottom_padding = new MooseElatedField(
	"textsimple",
	"footer_bottom_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"footer_bottom_bottom_padding",
	$footer_bottom_bottom_padding
);
$footer_bottom_left_padding = new MooseElatedField(
	"textsimple",
	"footer_bottom_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"footer_bottom_left_padding",
	$footer_bottom_left_padding
);
$footer_bottom_right_padding = new MooseElatedField(
	"textsimple",
	"footer_bottom_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"footer_bottom_right_padding",
	$footer_bottom_right_padding
);

$footer_bottom_image_background = new MooseElatedField(
	"image",
	"footer_bottom_image_background",
	"",
	esc_html__( "Footer Bottom Background Image", 'moose' ),
	esc_html__( "Choose footer bottom background image", 'moose' )
);
$footer_text_container->addChild(
	"footer_bottom_image_background",
	$footer_bottom_image_background
);

$group6 = new MooseElatedGroup(
	esc_html__( "Footer Bottom Text Style", 'moose' ),
	esc_html__( "Configure style for Footer Bottom text", 'moose' )
);
$footer_text_container->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$footer_bottom_text_color = new MooseElatedField(
	"colorsimple",
	"footer_bottom_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_bottom_text_color",
	$footer_bottom_text_color
);

$footer_bottom_text_font_size = new MooseElatedField(
	"textsimple",
	"footer_bottom_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_bottom_text_font_size",
	$footer_bottom_text_font_size
);

$footer_bottom_text_line_height = new MooseElatedField(
	"textsimple",
	"footer_bottom_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_bottom_text_line_height",
	$footer_bottom_text_line_height
);

$footer_bottom_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"footer_bottom_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"footer_bottom_text_text_transform",
	$footer_bottom_text_text_transform
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$footer_bottom_text_font_family = new MooseElatedField(
	"fontsimple",
	"footer_bottom_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_bottom_text_font_family",
	$footer_bottom_text_font_family
);

$footer_bottom_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"footer_bottom_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"footer_bottom_text_font_style",
	$footer_bottom_text_font_style
);

$footer_bottom_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"footer_bottom_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"footer_bottom_text_font_weight",
	$footer_bottom_text_font_weight
);

$footer_bottom_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"footer_bottom_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_bottom_text_letter_spacing",
	$footer_bottom_text_letter_spacing
);

$group7 = new MooseElatedGroup(
	esc_html__( "Footer Bottom Link Style", 'moose' ),
	esc_html__( "Configure style for Footer Bottom link", 'moose' )
);
$footer_text_container->addChild(
	"group7",
	$group7
);

$row1 = new MooseElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$footer_bottom_link_color = new MooseElatedField(
	"colorsimple",
	"footer_bottom_link_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_bottom_link_color",
	$footer_bottom_link_color
);

$footer_bottom_link_font_size = new MooseElatedField(
	"textsimple",
	"footer_bottom_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_bottom_link_font_size",
	$footer_bottom_link_font_size
);

$footer_bottom_link_line_height = new MooseElatedField(
	"textsimple",
	"footer_bottom_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_bottom_link_line_height",
	$footer_bottom_link_line_height
);

$footer_bottom_link_text_transform = new MooseElatedField(
	"selectblanksimple",
	"footer_bottom_link_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"footer_bottom_link_text_transform",
	$footer_bottom_link_text_transform
);

$row2 = new MooseElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$footer_bottom_link_font_family = new MooseElatedField(
	"fontsimple",
	"footer_bottom_link_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_bottom_link_font_family",
	$footer_bottom_link_font_family
);

$footer_bottom_link_font_style = new MooseElatedField(
	"selectblanksimple",
	"footer_bottom_link_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"footer_bottom_link_font_style",
	$footer_bottom_link_font_style
);

$footer_bottom_link_font_weight = new MooseElatedField(
	"selectblanksimple",
	"footer_bottom_link_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"footer_bottom_link_font_weight",
	$footer_bottom_link_font_weight
);

$footer_bottom_link_letter_spacing = new MooseElatedField(
	"textsimple",
	"footer_bottom_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_bottom_link_letter_spacing",
	$footer_bottom_link_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);

$footer_bottom_link_hover_color = new MooseElatedField(
	"colorsimple",
	"footer_bottom_link_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"footer_bottom_link_hover_color",
	$footer_bottom_link_hover_color
);

$footer_bottom_menu_separator = new MooseElatedField(
	"yesno",
	"footer_bottom_menu_separator",
	"no",
	esc_html__( "Enable Separator Between Menu Items", 'moose' ),
	esc_html__( "Enable this option to show separator between menu items in footer bottom", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_footer_bottom_menu_separator_container"
	)
);
$footer_text_container->addChild(
	"footer_bottom_menu_separator",
	$footer_bottom_menu_separator
);

$footer_bottom_menu_separator_container = new MooseElatedContainer(
	"footer_bottom_menu_separator_container",
	"footer_bottom_menu_separator",
	"no"
);
$footer_text_container->addChild(
	"footer_bottom_menu_separator_container",
	$footer_bottom_menu_separator_container
);

$footer_bottom_menu_separator_color = new MooseElatedField(
	"color",
	"footer_bottom_menu_separator_color",
	"",
	esc_html__( "Separator Color", 'moose' ),
	esc_html__( "Choose color for separator between menu items", 'moose' )
);
$footer_bottom_menu_separator_container->addChild(
	"footer_bottom_menu_separator_color",
	$footer_bottom_menu_separator_color
);