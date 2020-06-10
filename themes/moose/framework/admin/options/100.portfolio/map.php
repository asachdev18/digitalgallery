<?php

$portfolioPage = new MooseElatedAdminPage(
	"9",
	esc_html__( "Portfolio", 'moose' ),
	"fa fa-camera-retro"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"portfolioPage",
	$portfolioPage
);

//Portfolio List

$panel1 = new MooseElatedPanel(
	esc_html__( "Portfolio List", 'moose' ),
	"porfolio_list"
);
$portfolioPage->addChild(
	"panel1",
	$panel1
);

$portfolio_eltd_like = new MooseElatedField(
	"onoff",
	"portfolio_eltd_like",
	"on",
	esc_html__( "Likes", 'moose' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'moose' )
);
$panel1->addChild(
	"portfolio_eltd_like",
	$portfolio_eltd_like
);

$portfolio_disable_text_box = new MooseElatedField(
	"yesno",
	"portfolio_disable_text_box",
	"yes",
	esc_html__( "Disable Boxed Style Project Description", 'moose' ),
	esc_html__( "Disabling boxed styled project description", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_enable_portfolio_list_box_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"portfolio_disable_text_box",
	$portfolio_disable_text_box
);

$enable_portfolio_list_box_container = new MooseElatedContainer(
	"enable_portfolio_list_box_container",
	"portfolio_disable_text_box",
	"yes"
);
$panel1->addChild(
	"enable_portfolio_list_box_container",
	$enable_portfolio_list_box_container
);

$portfolio_list_box_background_color = new MooseElatedField(
	"color",
	"portfolio_list_box_background_color",
	"",
	esc_html__( "Portfolio Box Background Color", 'moose' ),
	esc_html__( "Default color is #ffffff", 'moose' )
);
$enable_portfolio_list_box_container->addChild(
	"portfolio_list_box_background_color",
	$portfolio_list_box_background_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Image Hover Overlay Color", 'moose' ),
	esc_html__( "Define icons styles on project hover. Default hover color is #279eff.", 'moose' )
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

$portfolio_shader_color = new MooseElatedField(
	"colorsimple",
	"portfolio_shader_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_shader_color",
	$portfolio_shader_color
);

$portfolio_shader_transparency = new MooseElatedField(
	"textsimple",
	"portfolio_shader_transparency",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"portfolio_shader_transparency",
	$portfolio_shader_transparency
);

// Portfolio List TEXT STYLES

$title_text_styles = new MooseElatedTitle(
	"title_text_styles",
	esc_html__( "Title Text Styles", 'moose' )
);
$panel1->addChild(
	"title_text_styles",
	$title_text_styles
);

$group7 = new MooseElatedGroup(
	esc_html__( "Title Style for Standard and Pinterest Lists", 'moose' ),
	esc_html__( "Define title styles for standard and pinterest portfolio lists.", 'moose' )
);
$panel1->addChild(
	"group7",
	$group7
);

$row1 = new MooseElatedRow();
$group7->addChild(
	"row1",
	$row1
);
$portfolio_title_standard_list_color = new MooseElatedField(
	"colorsimple",
	"portfolio_title_standard_list_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_standard_list_color",
	$portfolio_title_standard_list_color
);
$portfolio_title_standard_list_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_title_standard_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_standard_list_hover_color",
	$portfolio_title_standard_list_hover_color
);
$portfolio_title_standard_list_font_size = new MooseElatedField(
	"textsimple",
	"portfolio_title_standard_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_standard_list_font_size",
	$portfolio_title_standard_list_font_size
);
$portfolio_title_standard_list_line_height = new MooseElatedField(
	"textsimple",
	"portfolio_title_standard_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_standard_list_line_height",
	$portfolio_title_standard_list_line_height
);

$row2 = new MooseElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);
$portfolio_title_standard_list_text_transform = new MooseElatedField(
	"selectblanksimple",
	"portfolio_title_standard_list_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"portfolio_title_standard_list_text_transform",
	$portfolio_title_standard_list_text_transform
);
$portfolio_title_standard_list_font_family = new MooseElatedField(
	"fontsimple",
	"portfolio_title_standard_list_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_title_standard_list_font_family",
	$portfolio_title_standard_list_font_family
);
$portfolio_title_standard_list_font_style = new MooseElatedField(
	"selectblanksimple",
	"portfolio_title_standard_list_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"portfolio_title_standard_list_font_style",
	$portfolio_title_standard_list_font_style
);
$portfolio_title_standard_list_font_weight = new MooseElatedField(
	"selectblanksimple",
	"portfolio_title_standard_list_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"portfolio_title_standard_list_font_weight",
	$portfolio_title_standard_list_font_weight
);

$row3 = new MooseElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);
$portfolio_title_standard_list_letter_spacing = new MooseElatedField(
	"textsimple",
	"portfolio_title_standard_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"portfolio_title_standard_list_letter_spacing",
	$portfolio_title_standard_list_letter_spacing
);

$group9 = new MooseElatedGroup(
	esc_html__( "Title Style for Text on Hover Image and Text before Hover Lists", 'moose' ),
	esc_html__( "Define title styles for text on hover image and text before hover portfolio lists.", 'moose' )
);
$panel1->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);
$portfolio_title_hover_box_list_color = new MooseElatedField(
	"colorsimple",
	"portfolio_title_hover_box_list_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_color",
	$portfolio_title_hover_box_list_color
);
$portfolio_title_hover_box_list_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_title_hover_box_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_hover_color",
	$portfolio_title_hover_box_list_hover_color
);
$portfolio_title_hover_box_list_font_size = new MooseElatedField(
	"textsimple",
	"portfolio_title_hover_box_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_font_size",
	$portfolio_title_hover_box_list_font_size
);
$portfolio_title_hover_box_list_line_height = new MooseElatedField(
	"textsimple",
	"portfolio_title_hover_box_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_line_height",
	$portfolio_title_hover_box_list_line_height
);

$row2 = new MooseElatedRow( true );
$group9->addChild(
	"row2",
	$row2
);
$portfolio_title_hover_box_list_font_family = new MooseElatedField(
	"fontsimple",
	"portfolio_title_hover_box_list_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_family",
	$portfolio_title_hover_box_list_font_family
);
$portfolio_title_hover_box_list_text_transform = new MooseElatedField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"portfolio_title_hover_box_list_text_transform",
	$portfolio_title_hover_box_list_text_transform
);
$portfolio_title_hover_box_list_font_style = new MooseElatedField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_style",
	$portfolio_title_hover_box_list_font_style
);
$portfolio_title_hover_box_list_font_weight = new MooseElatedField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_weight",
	$portfolio_title_hover_box_list_font_weight
);

$row3 = new MooseElatedRow( true );
$group9->addChild(
	"row3",
	$row3
);
$portfolio_title_hover_box_list_letter_spacing = new MooseElatedField(
	"textsimple",
	"portfolio_title_hover_box_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"portfolio_title_hover_box_list_letter_spacing",
	$portfolio_title_hover_box_list_letter_spacing
);

$group11 = new MooseElatedGroup(
	esc_html__( "Title Style for Portfolio Slider and Masonry Lists", 'moose' ),
	esc_html__( "Define title styles for slider and masonry portfolio lists.", 'moose' )
);
$panel1->addChild(
	"group11",
	$group11
);

$row1 = new MooseElatedRow();
$group11->addChild(
	"row1",
	$row1
);
$portfolio_title_list_color = new MooseElatedField(
	"colorsimple",
	"portfolio_title_list_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_list_color",
	$portfolio_title_list_color
);
$portfolio_title_list_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_title_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_list_hover_color",
	$portfolio_title_list_hover_color
);
$portfolio_title_list_font_size = new MooseElatedField(
	"textsimple",
	"portfolio_title_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_list_font_size",
	$portfolio_title_list_font_size
);
$portfolio_title_list_line_height = new MooseElatedField(
	"textsimple",
	"portfolio_title_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_list_line_height",
	$portfolio_title_list_line_height
);

$row2 = new MooseElatedRow( true );
$group11->addChild(
	"row2",
	$row2
);
$portfolio_title_list_text_transform = new MooseElatedField(
	"selectblanksimple",
	"portfolio_title_list_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"portfolio_title_list_text_transform",
	$portfolio_title_list_text_transform
);
$portfolio_title_list_font_family = new MooseElatedField(
	"fontsimple",
	"portfolio_title_list_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_title_list_font_family",
	$portfolio_title_list_font_family
);
$portfolio_title_list_font_style = new MooseElatedField(
	"selectblanksimple",
	"portfolio_title_list_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"portfolio_title_list_font_style",
	$portfolio_title_list_font_style
);
$portfolio_title_list_font_weight = new MooseElatedField(
	"selectblanksimple",
	"portfolio_title_list_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"portfolio_title_list_font_weight",
	$portfolio_title_list_font_weight
);

$row3 = new MooseElatedRow( true );
$group11->addChild(
	"row3",
	$row3
);
$portfolio_title_list_letter_spacing = new MooseElatedField(
	"textsimple",
	"portfolio_title_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"portfolio_title_list_letter_spacing",
	$portfolio_title_list_letter_spacing
);

$category_text_styles = new MooseElatedTitle(
	"category_text_styles",
	esc_html__( "Category Text Styles", 'moose' )
);
$panel1->addChild(
	"category_text_styles",
	$category_text_styles
);

$group8 = new MooseElatedGroup(
	esc_html__( "Category Style for Standard and Pinterest Lists", 'moose' ),
	esc_html__( "Define category styles for standard and pinterest portfolio lists.", 'moose' )
);
$panel1->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);
$portfolio_category_standard_list_color = new MooseElatedField(
	"colorsimple",
	"portfolio_category_standard_list_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_category_standard_list_color",
	$portfolio_category_standard_list_color
);
$portfolio_category_standard_list_font_size = new MooseElatedField(
	"textsimple",
	"portfolio_category_standard_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_category_standard_list_font_size",
	$portfolio_category_standard_list_font_size
);
$portfolio_category_standard_list_line_height = new MooseElatedField(
	"textsimple",
	"portfolio_category_standard_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_category_standard_list_line_height",
	$portfolio_category_standard_list_line_height
);
$portfolio_category_standard_list_text_transform = new MooseElatedField(
	"selectblanksimple",
	"portfolio_category_standard_list_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"portfolio_category_standard_list_text_transform",
	$portfolio_category_standard_list_text_transform
);

$row2 = new MooseElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);
$portfolio_category_standard_list_font_family = new MooseElatedField(
	"fontsimple",
	"portfolio_category_standard_list_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_category_standard_list_font_family",
	$portfolio_category_standard_list_font_family
);
$portfolio_category_standard_list_font_style = new MooseElatedField(
	"selectblanksimple",
	"portfolio_category_standard_list_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"portfolio_category_standard_list_font_style",
	$portfolio_category_standard_list_font_style
);
$portfolio_category_standard_list_font_weight = new MooseElatedField(
	"selectblanksimple",
	"portfolio_category_standard_list_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"portfolio_category_standard_list_font_weight",
	$portfolio_category_standard_list_font_weight
);
$portfolio_category_standard_list_letter_spacing = new MooseElatedField(
	"textsimple",
	"portfolio_category_standard_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_category_standard_list_letter_spacing",
	$portfolio_category_standard_list_letter_spacing
);

$group10 = new MooseElatedGroup(
	esc_html__( "Category Style for Text on Hover Image and Text before Hover Lists", 'moose' ),
	esc_html__( "Define category styles for standard and pinterest portfolio lists.", 'moose' )
);
$panel1->addChild(
	"group10",
	$group10
);

$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);
$portfolio_category_hover_box_list_color = new MooseElatedField(
	"colorsimple",
	"portfolio_category_hover_box_list_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_color",
	$portfolio_category_hover_box_list_color
);
$portfolio_category_hover_box_list_font_size = new MooseElatedField(
	"textsimple",
	"portfolio_category_hover_box_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_font_size",
	$portfolio_category_hover_box_list_font_size
);
$portfolio_category_hover_box_list_line_height = new MooseElatedField(
	"textsimple",
	"portfolio_category_hover_box_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_line_height",
	$portfolio_category_hover_box_list_line_height
);
$portfolio_category_hover_box_list_text_transform = new MooseElatedField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"portfolio_category_hover_box_list_text_transform",
	$portfolio_category_hover_box_list_text_transform
);

$row2 = new MooseElatedRow( true );
$group10->addChild(
	"row2",
	$row2
);
$portfolio_category_hover_box_list_font_family = new MooseElatedField(
	"fontsimple",
	"portfolio_category_hover_box_list_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_family",
	$portfolio_category_hover_box_list_font_family
);
$portfolio_category_hover_box_list_font_style = new MooseElatedField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_style",
	$portfolio_category_hover_box_list_font_style
);
$portfolio_category_hover_box_list_font_weight = new MooseElatedField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_weight",
	$portfolio_category_hover_box_list_font_weight
);
$portfolio_category_hover_box_list_letter_spacing = new MooseElatedField(
	"textsimple",
	"portfolio_category_hover_box_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_letter_spacing",
	$portfolio_category_hover_box_list_letter_spacing
);

$group12 = new MooseElatedGroup(
	esc_html__( "Category Style for Portfolio Slider and Masonry Lists", 'moose' ),
	esc_html__( "Define category styles for slider and masonry portfolio lists.", 'moose' )
);
$panel1->addChild(
	"group12",
	$group12
);

$row1 = new MooseElatedRow();
$group12->addChild(
	"row1",
	$row1
);
$portfolio_category_list_color = new MooseElatedField(
	"colorsimple",
	"portfolio_category_list_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_category_list_color",
	$portfolio_category_list_color
);
$portfolio_category_list_font_size = new MooseElatedField(
	"textsimple",
	"portfolio_category_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_category_list_font_size",
	$portfolio_category_list_font_size
);
$portfolio_category_list_line_height = new MooseElatedField(
	"textsimple",
	"portfolio_category_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_category_list_line_height",
	$portfolio_category_list_line_height
);
$portfolio_category_list_text_transform = new MooseElatedField(
	"selectblanksimple",
	"portfolio_category_list_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"portfolio_category_list_text_transform",
	$portfolio_category_list_text_transform
);

$row2 = new MooseElatedRow( true );
$group12->addChild(
	"row2",
	$row2
);
$portfolio_category_list_font_family = new MooseElatedField(
	"fontsimple",
	"portfolio_category_list_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_category_list_font_family",
	$portfolio_category_list_font_family
);
$portfolio_category_list_font_style = new MooseElatedField(
	"selectblanksimple",
	"portfolio_category_list_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"portfolio_category_list_font_style",
	$portfolio_category_list_font_style
);
$portfolio_category_list_font_weight = new MooseElatedField(
	"selectblanksimple",
	"portfolio_category_list_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"portfolio_category_list_font_weight",
	$portfolio_category_list_font_weight
);
$portfolio_category_list_letter_spacing = new MooseElatedField(
	"textsimple",
	"portfolio_category_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_category_list_letter_spacing",
	$portfolio_category_list_letter_spacing
);

// Portfolio Filter
$portfolio_filter = new MooseElatedTitle(
	"portfolio_filter",
	esc_html__( "Category Filter", 'moose' )
);
$panel1->addChild(
	"portfolio_filter",
	$portfolio_filter
);

$portfolio_filter_margin_bottom = new MooseElatedField(
	"text",
	"portfolio_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'moose' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_filter_margin_bottom",
	$portfolio_filter_margin_bottom
);

$group2 = new MooseElatedGroup(
	esc_html__( "Title", 'moose' ),
	esc_html__( "Define text styles for filter title", 'moose' )
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
$portfolio_filter_title_color = new MooseElatedField(
	"colorsimple",
	"portfolio_filter_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_filter_title_color",
	$portfolio_filter_title_color
);
$portfolio_filter_title_font_size = new MooseElatedField(
	"textsimple",
	"portfolio_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_filter_title_font_size",
	$portfolio_filter_title_font_size
);
$portfolio_filter_title_line_height = new MooseElatedField(
	"textsimple",
	"portfolio_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_filter_title_line_height",
	$portfolio_filter_title_line_height
);
$portfolio_filter_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"portfolio_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"portfolio_filter_title_text_transform",
	$portfolio_filter_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$portfolio_filter_title_font_family = new MooseElatedField(
	"fontsimple",
	"portfolio_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_filter_title_font_family",
	$portfolio_filter_title_font_family
);
$portfolio_filter_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"portfolio_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"portfolio_filter_title_font_style",
	$portfolio_filter_title_font_style
);
$portfolio_filter_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"portfolio_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"portfolio_filter_title_font_weight",
	$portfolio_filter_title_font_weight
);
$portfolio_filter_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"portfolio_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_filter_title_letter_spacing",
	$portfolio_filter_title_letter_spacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Categories", 'moose' ),
	esc_html__( "Define text styles for filter categories", 'moose' )
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
$portfolio_filter_color = new MooseElatedField(
	"colorsimple",
	"portfolio_filter_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_filter_color",
	$portfolio_filter_color
);
$portfolio_filter_hovercolor = new MooseElatedField(
	"colorsimple",
	"portfolio_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_filter_hovercolor",
	$portfolio_filter_hovercolor
);
$portfolio_filter_font_size = new MooseElatedField(
	"textsimple",
	"portfolio_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_filter_font_size",
	$portfolio_filter_font_size
);
$portfolio_filter_line_height = new MooseElatedField(
	"textsimple",
	"portfolio_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_filter_line_height",
	$portfolio_filter_line_height
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);
$portfolio_filter_font_family = new MooseElatedField(
	"fontsimple",
	"portfolio_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_filter_font_family",
	$portfolio_filter_font_family
);
$portfolio_filter_font_style = new MooseElatedField(
	"selectblanksimple",
	"portfolio_filter_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"portfolio_filter_font_style",
	$portfolio_filter_font_style
);
$portfolio_filter_font_weight = new MooseElatedField(
	"selectblanksimple",
	"portfolio_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"portfolio_filter_font_weight",
	$portfolio_filter_font_weight
);
$portfolio_filter_text_transform = new MooseElatedField(
	"selectblanksimple",
	"portfolio_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"portfolio_filter_text_transform",
	$portfolio_filter_text_transform
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);
$portfolio_filter_letter_spacing = new MooseElatedField(
	"textsimple",
	"portfolio_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"portfolio_filter_letter_spacing",
	$portfolio_filter_letter_spacing
);

//ICONS STYLE
$icons_style = new MooseElatedTitle(
	"icons_style",
	esc_html__( "Icons", 'moose' )
);
$panel1->addChild(
	"icons_style",
	$icons_style
);

$portfolio_list_icons_pack = new MooseElatedField(
	"select",
	"portfolio_list_icons_pack",
	"font-awesome",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( 'Choose font family for hover icons on portfolio', 'moose' ),
	array(
		"font-awesome" => esc_html__( "Font Awesome", 'moose' ),
		"font-elegant" => esc_html__( "Font Elegant", 'moose' ),
		"simple-line" => esc_html__( "Simple Line", 'moose' )
	)
);
$panel1->addChild(
	"portfolio_list_icons_pack",
	$portfolio_list_icons_pack
);

$portfolio_list_icons_size = new MooseElatedField(
	"text",
	"portfolio_list_icons_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "Enter size for icons in portfolio list. Default value is 16", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_list_icons_size",
	$portfolio_list_icons_size
);

$group4 = new MooseElatedGroup(
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose color of the icons on project hover", 'moose' )
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
$portfolio_list_icons_color = new MooseElatedField(
	"colorsimple",
	"portfolio_list_icons_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_list_icons_color",
	$portfolio_list_icons_color
);
$portfolio_list_icons_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_list_icons_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_list_icons_hover_color",
	$portfolio_list_icons_hover_color
);

$group5 = new MooseElatedGroup(
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Define icons background color styles on project hover", 'moose' )
);
$panel1->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);
$portfolio_list_icons_background_color = new MooseElatedField(
	"colorsimple",
	"portfolio_list_icons_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_list_icons_background_color",
	$portfolio_list_icons_background_color
);
$portfolio_list_icons_background_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_list_icons_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_list_icons_background_hover_color",
	$portfolio_list_icons_background_hover_color
);

$group6 = new MooseElatedGroup(
	esc_html__( "Border", 'moose' ),
	esc_html__( "Define icons border styles on project hover", 'moose' )
);
$panel1->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow( true );
$group6->addChild(
	"row1",
	$row1
);

$portfolio_list_icons_border_color = new MooseElatedField(
	"colorsimple",
	"portfolio_list_icons_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_list_icons_border_color",
	$portfolio_list_icons_border_color
);
$portfolio_list_icons_border_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_list_icons_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_list_icons_border_hover_color",
	$portfolio_list_icons_border_hover_color
);
$portfolio_list_icons_border_width = new MooseElatedField(
	"textsimple",
	"portfolio_list_icons_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_list_icons_border_width",
	$portfolio_list_icons_border_width
);
$portfolio_list_icons_border_radius = new MooseElatedField(
	"textsimple",
	"portfolio_list_icons_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_list_icons_border_radius",
	$portfolio_list_icons_border_radius
);

$portfolio_pinterest_style = new MooseElatedTitle(
	"portfolio_pinterest_style",
	esc_html__( "Pinterest", 'moose' )
);
$panel1->addChild(
	"portfolio_pinterest_style",
	$portfolio_pinterest_style
);

$group24 = new MooseElatedGroup(
	esc_html__( "Pinterest Padding", 'moose' ),
	esc_html__( "Define pinterest padding", 'moose' )
);
$panel1->addChild(
	"group24",
	$group24
);

$row1 = new MooseElatedRow( true );
$group24->addChild(
	"row1",
	$row1
);

$pinterest_padding_left = new MooseElatedField(
	"textsimple",
	"pinterest_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pinterest_padding_left",
	$pinterest_padding_left
);

$pinterest_padding_right = new MooseElatedField(
	"textsimple",
	"pinterest_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pinterest_padding_right",
	$pinterest_padding_right
);

$pinterest_padding_top = new MooseElatedField(
	"textsimple",
	"pinterest_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pinterest_padding_top",
	$pinterest_padding_top
);

$pinterest_padding_bottom = new MooseElatedField(
	"textsimple",
	"pinterest_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"pinterest_padding_bottom",
	$pinterest_padding_bottom
);

$portfolio_masonry_style = new MooseElatedTitle(
	"portfolio_masonry_style",
	esc_html__( "Masonry", 'moose' )
);
$panel1->addChild(
	"portfolio_masonry_style",
	$portfolio_masonry_style
);

$portfolio_masonry_with_padding_width = new MooseElatedField(
	"text",
	"portfolio_masonry_with_padding_width",
	"",
	esc_html__( "Space Width (px)", 'moose' ),
	esc_html__( "Enter space width for Masonry if space is enabled. Default value is 10", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_masonry_with_padding_width",
	$portfolio_masonry_with_padding_width
);

$thin_plus_only_style = new MooseElatedTitle(
	"thin_plus_only_style",
	esc_html__( "Thin Plus Only", 'moose' )
);
$panel1->addChild(
	"thin_plus_only_style",
	$thin_plus_only_style
);

$group13 = new MooseElatedGroup(
	esc_html__( "Cursor", 'moose' ),
	esc_html__( "Define styles for Cursor on Thin Plus Only hover type", 'moose' )
);
$panel1->addChild(
	"group13",
	$group13
);

$row1 = new MooseElatedRow();
$group13->addChild(
	"row1",
	$row1
);
$thin_plus_only_style_color = new MooseElatedField(
	"colorsimple",
	"thin_plus_only_style_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"thin_plus_only_style_color",
	$thin_plus_only_style_color
);
$thin_plus_only_style_size = new MooseElatedField(
	"textsimple",
	"thin_plus_only_style_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"thin_plus_only_style_size",
	$thin_plus_only_style_size
);
$thin_plus_only_style_weight = new MooseElatedField(
	"selectblanksimple",
	"thin_plus_only_style_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"thin_plus_only_style_weight",
	$thin_plus_only_style_weight
);

$animated_border_hover_style = new MooseElatedTitle(
	"animated_border_hover_style",
	esc_html__( "Animated Border", 'moose' )
);
$panel1->addChild(
	"animated_border_hover_style",
	$animated_border_hover_style
);

$group23 = new MooseElatedGroup(
	esc_html__( "Border Hover", 'moose' ),
	esc_html__( "Define styles for border on Animated Border hover type", 'moose' )
);
$panel1->addChild(
	"group23",
	$group23
);

$row1 = new MooseElatedRow();
$group23->addChild(
	"row1",
	$row1
);
$animated_border_hover_color = new MooseElatedField(
	"colorsimple",
	"animated_border_hover_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"animated_border_hover_color",
	$animated_border_hover_color
);
$animated_border_hover_width = new MooseElatedField(
	"textsimple",
	"animated_border_hover_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"animated_border_hover_width",
	$animated_border_hover_width
);

$animated_border_disable_animation = new MooseElatedField(
	"yesno",
	"animated_border_disable_animation",
	"no",
	esc_html__( "Disable Animation", 'moose' ),
	esc_html__( "Enabling this option will turn off border animation on hover", 'moose' )
);
$panel1->addChild(
	"animated_border_disable_animation",
	$animated_border_disable_animation
);

//Portfolio Single Project

$panel2 = new MooseElatedPanel(
	esc_html__( "Portfolio Single", 'moose' ),
	"porfolio_single_project"
);
$portfolioPage->addChild(
	"panel2",
	$panel2
);

$portfolio_style = new MooseElatedField(
	"select",
	"portfolio_style",
	"small-images",
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
	)
);
$panel2->addChild(
	"portfolio_style",
	$portfolio_style
);

$group3 = new MooseElatedGroup(
	esc_html__( "Portfolio Overlay Color", 'moose' ),
	esc_html__( "Define color and opacity for overlay color", 'moose' )
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

$portfolio_gallery_overlay_color = new MooseElatedField(
	"colorsimple",
	"portfolio_gallery_overlay_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_gallery_overlay_color",
	$portfolio_gallery_overlay_color
);

$portfolio_gallery_overlay_transparency = new MooseElatedField(
	"textsimple",
	"portfolio_gallery_overlay_transparency",
	"",
	esc_html__( "Transparency (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_gallery_overlay_transparency",
	$portfolio_gallery_overlay_transparency
);

$portfolio_gallery_image_hover_style = new MooseElatedField(
	"select",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	esc_html__( "Portfolio Image Hover", 'moose' ),
	esc_html__( 'Choose a default hover type for Single Project pages', 'moose' ),
	array(
		"disable" => esc_html__( "None", 'moose' ),
		"magnifier" => esc_html__( "Magnifier", 'moose' ),
		"icon" => esc_html__( "Icon", 'moose' ),
		"text" => esc_html__( "Image Title", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"disable"   => "#eltdf_portfolio_gallery_image_hover_separator_container,#eltdf_portfolio_gallery_image_hover_icon_container",
			"magnifier" => "#eltdf_portfolio_gallery_image_hover_separator_container,#eltdf_portfolio_gallery_image_hover_icon_container",
			"icon"      => "#eltdf_portfolio_gallery_image_hover_separator_container",
			"text"      => "#eltdf_portfolio_gallery_image_hover_icon_container"
		),
		"show"       => array(
			"disable"   => "",
			"magnifier" => "",
			"icon"      => "#eltdf_portfolio_gallery_image_hover_icon_container",
			"text"      => "#eltdf_portfolio_gallery_image_hover_separator_container"
		)
	)
);
$panel2->addChild(
	"portfolio_gallery_image_hover_style",
	$portfolio_gallery_image_hover_style
);

$portfolio_gallery_image_hover_separator_container = new MooseElatedContainer(
	"portfolio_gallery_image_hover_separator_container",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	array( "disable", "magnifier", "icon" )
);
$panel2->addChild(
	"portfolio_gallery_image_hover_separator_container",
	$portfolio_gallery_image_hover_separator_container
);

$portfolio_gallery_image_hover_separator = new MooseElatedField(
	"select",
	"portfolio_gallery_image_hover_separator",
	"",
	esc_html__( "Separator below image title", 'moose' ),
	esc_html__( "This option will place separator below text", 'moose' ),
	array(
		"yes" => esc_html__( "Yes", 'moose' ),
		"no" => esc_html__( "No", 'moose' )
	),
	array( "col_width" => 3 )
);
$portfolio_gallery_image_hover_separator_container->addChild(
	"portfolio_gallery_image_hover_separator",
	$portfolio_gallery_image_hover_separator
);

$portfolio_gallery_overlay_text_color = new MooseElatedField(
	"color",
	"portfolio_gallery_overlay_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "Choose a color for overlay text in Single Project pages", 'moose' )
);
$portfolio_gallery_image_hover_separator_container->addChild(
	"portfolio_gallery_overlay_text_color",
	$portfolio_gallery_overlay_text_color
);

$portfolio_gallery_image_hover_icon_container = new MooseElatedContainer(
	"portfolio_gallery_image_hover_icon_container",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	array( "disable", "magnifier", "text" )
);
$panel2->addChild(
	"portfolio_gallery_image_hover_icon_container",
	$portfolio_gallery_image_hover_icon_container
);

$group4 = new MooseElatedGroup(
	esc_html__( "Portfolio Image Hover Icon", 'moose' ),
	esc_html__( "Define style for Portfolio Image Hover Icon", 'moose' )
);
$portfolio_gallery_image_hover_icon_container->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$portfolio_gallery_icon_pack = new MooseElatedField(
	"selectsimple",
	"portfolio_gallery_icon_pack",
	"font-awesome",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( 'This is some description', 'moose' ),
	array(
		"font-awesome" => esc_html__( "Font Awesome", 'moose' ),
		"font-elegant" => esc_html__( "Font Elegant", 'moose' )
	)
);
$group4->addChild(
	"portfolio_gallery_icon_pack",
	$portfolio_gallery_icon_pack
);

$portfolio_gallery_icon_size = new MooseElatedField(
	"textsimple",
	"portfolio_gallery_icon_size",
	"",
	esc_html__( "Size", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$group4->addChild(
	"portfolio_gallery_icon_size",
	$portfolio_gallery_icon_size
);

$portfolio_gallery_icon_color = new MooseElatedField(
	"colorsimple",
	"portfolio_gallery_icon_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$group4->addChild(
	"portfolio_gallery_icon_color",
	$portfolio_gallery_icon_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Title Style", 'moose' ),
	esc_html__( "Define title styles on project.", 'moose' )
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

$portfolio_title_tag = new MooseElatedField(
	"selectsimple",
	"portfolio_title_tag",
	"h5",
	esc_html__( "Tag element", 'moose' ),
	esc_html__( 'This is some description', 'moose' ),
	array(
		"h2" => esc_html__( "h2", 'moose' ),
		"h3" => esc_html__( "h3", 'moose' ),
		"h4" => esc_html__( "h4", 'moose' ),
		"h5" => esc_html__( "h5", 'moose' )
	)
);
$row1->addChild(
	"portfolio_title_tag",
	$portfolio_title_tag
);

$portfolio_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"portfolio_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_margin_bottom",
	$portfolio_title_margin_bottom
);

$portfolio_title_color = new MooseElatedField(
	"colorsimple",
	"portfolio_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_title_color",
	$portfolio_title_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Additional Portfolio Titles", 'moose' ),
	esc_html__( "Define additional portfolio titles styles on project.", 'moose' )
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

$portfolio_info_tag = new MooseElatedField(
	"selectsimple",
	"portfolio_info_tag",
	"h6",
	esc_html__( "Tag element", 'moose' ),
	esc_html__( 'This is some description', 'moose' ),
	array(
		"h4" => esc_html__( "h4", 'moose' ),
		"h5" => esc_html__( "h5", 'moose' ),
		"h6" => esc_html__( "h6", 'moose' )
	)
);
$row1->addChild(
	"portfolio_info_tag",
	$portfolio_info_tag
);

$portfolio_info_margin_bottom = new MooseElatedField(
	"textsimple",
	"portfolio_info_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_info_margin_bottom",
	$portfolio_info_margin_bottom
);

$portfolio_info_color = new MooseElatedField(
	"colorsimple",
	"portfolio_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_info_color",
	$portfolio_info_color
);

$lightbox_single_project = new MooseElatedField(
	"yesno",
	"lightbox_single_project",
	"yes",
	esc_html__( "Lightbox for Images", 'moose' ),
	esc_html__( "Enabling this option will turn on lightbox functionality for projects with images.", 'moose' )
);
$panel2->addChild(
	"lightbox_single_project",
	$lightbox_single_project
);

$lightbox_video_single_project = new MooseElatedField(
	"yesno",
	"lightbox_video_single_project",
	"no",
	esc_html__( "Lightbox for Videos", 'moose' ),
	esc_html__( "Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects.", 'moose' )
);
$panel2->addChild(
	"lightbox_video_single_project",
	$lightbox_video_single_project
);

$portfolio_hide_categories = new MooseElatedField(
	"yesno",
	"portfolio_hide_categories",
	"no",
	esc_html__( "Hide Categories", 'moose' ),
	esc_html__( "Enabling this option will disable category meta description on Single Projects.", 'moose' )
);
$panel2->addChild(
	"portfolio_hide_categories",
	$portfolio_hide_categories
);

$portfolio_hide_date = new MooseElatedField(
	"yesno",
	"portfolio_hide_date",
	"no",
	esc_html__( "Hide Date", 'moose' ),
	esc_html__( "Enabling this option will disable date meta on Single Projects.", 'moose' )
);
$panel2->addChild(
	"portfolio_hide_date",
	$portfolio_hide_date
);

$portfolio_hide_comments = new MooseElatedField(
	"yesno",
	"portfolio_hide_comments",
	"yes",
	esc_html__( "Hide Comments", 'moose' ),
	esc_html__( "Enabling this option will turn off comments functionality.", 'moose' )
);
$panel2->addChild(
	"portfolio_hide_comments",
	$portfolio_hide_comments
);

$portfolio_text_follow = new MooseElatedField(
	"portfoliofollow",
	"portfolio_text_follow",
	"portfolio_single_follow",
	esc_html__( "Sticky Side Text ", 'moose' ),
	esc_html__( "Enabling this option will make side text sticky on Single Project pages", 'moose' )
);
$panel2->addChild(
	"portfolio_text_follow",
	$portfolio_text_follow
);

$portfolio_hide_pagination = new MooseElatedField(
	"yesno",
	"portfolio_hide_pagination",
	"no",
	esc_html__( "Hide Pagination", 'moose' ),
	esc_html__( "Enabling this option will turn off portfolio pagination functionality.", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_portfolio_hide_pagination_container",
		"dependence_show_on_yes" => ""
	)
);
$panel2->addChild(
	"portfolio_hide_pagination",
	$portfolio_hide_pagination
);

$portfolio_hide_pagination_container = new MooseElatedContainer(
	"portfolio_hide_pagination_container",
	"portfolio_hide_pagination",
	"yes"
);
$panel2->addChild(
	"portfolio_hide_pagination_container",
	$portfolio_hide_pagination_container
);

$portfolio_navigation_through_same_category = new MooseElatedField(
	"yesno",
	"portfolio_navigation_through_same_category",
	"no",
	esc_html__( "Enable Pagination Through Same Category", 'moose' ),
	esc_html__( "Enabling this option will make portfolio pagination sort through current category.", 'moose' )
);
$portfolio_hide_pagination_container->addChild(
	"portfolio_navigation_through_same_category",
	$portfolio_navigation_through_same_category
);

$portfolio_box = new MooseElatedField(
	"yesno",
	"portfolio_box",
	"yes",
	esc_html__( "Enable Box Holder", 'moose' ),
	esc_html__( "Enabling this option will place box holder on project. This option works only if Portfolio style is Big Images, Big Slider or Gallery", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_portfolio_without_box_container",
		"dependence_show_on_yes" => "#eltdf_portfolio_box_container"
	)
);
$panel2->addChild(
	"portfolio_box",
	$portfolio_box
);

$portfolio_box_container = new MooseElatedContainer(
	"portfolio_box_container",
	"portfolio_box",
	"no"
);
$panel2->addChild(
	"portfolio_box_container",
	$portfolio_box_container
);

$portfolio_box_background_color = new MooseElatedField(
	"color",
	"portfolio_box_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Default color is #ffffff", 'moose' )
);
$portfolio_box_container->addChild(
	"portfolio_box_background_color",
	$portfolio_box_background_color
);

$portfolio_box_lr_padding = new MooseElatedField(
	"text",
	"portfolio_box_lr_padding",
	"",
	esc_html__( "Padding(px)", 'moose' ),
	esc_html__( "Format: 10px 5px 10px 8px (Default value is 46px 26px 45px 26px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$portfolio_box_container->addChild(
	"portfolio_box_lr_padding",
	$portfolio_box_lr_padding
);

$portfolio_without_box_container = new MooseElatedContainer(
	"portfolio_without_box_container",
	"portfolio_box",
	"yes"
);
$panel2->addChild(
	"portfolio_without_box_container",
	$portfolio_without_box_container
);

$portfolio_box_top_padding = new MooseElatedField(
	"text",
	"portfolio_box_top_padding",
	"",
	esc_html__( "Top Padding(px)", 'moose' ),
	esc_html__( "Default value is 46", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$portfolio_without_box_container->addChild(
	"portfolio_box_top_padding",
	$portfolio_box_top_padding
);

$portfolio_columns_number = new MooseElatedField(
	"select",
	"portfolio_columns_number",
	"2",
	esc_html__( "Number of Columns", 'moose' ),
	esc_html__( 'Enter the number of columns for Portfolio Gallery type', 'moose' ),
	array(
		"2" => esc_html__( "2 columns", 'moose' ),
		"3" => esc_html__( "3 columns", 'moose' ),
		"4" => esc_html__( "4 columns", 'moose' )
	)
);
$panel2->addChild(
	"portfolio_columns_number",
	$portfolio_columns_number
);

$portfolio_single_slug = new MooseElatedField(
	"text",
	"portfolio_single_slug",
	"",
	esc_html__( "Portfolio Single Slug", 'moose' ),
	esc_html__( 'Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect) ', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"portfolio_single_slug",
	$portfolio_single_slug
);

/*Navigation*/

$portfolio_navigation_title = new MooseElatedTitle(
	"portfolio_navigation_title",
	esc_html__( "Navigation", 'moose' )
);
$panel2->addChild(
	"portfolio_navigation_title",
	$portfolio_navigation_title
);

$group19 = new MooseElatedGroup(
	esc_html__( "Navigation Button Size", 'moose' ),
	esc_html__( "Define navigation button size", 'moose' )
);
$panel2->addChild(
	"group19",
	$group19
);

$row1 = new MooseElatedRow();
$group19->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_button_width = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_button_width",
	$portfolio_single_navigation_button_width
);

$portfolio_single_navigation_button_height = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_button_height",
	$portfolio_single_navigation_button_height
);

$group20 = new MooseElatedGroup(
	esc_html__( "Navigation Button Position", 'moose' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'moose' )
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

$portfolio_single_navigation_button_position = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_button_position",
	$portfolio_single_navigation_button_position
);

$group16 = new MooseElatedGroup(
	esc_html__( "Icon Arrow Style", 'moose' ),
	esc_html__( "Define navigation arrow style", 'moose' )
);
$panel2->addChild(
	"group16",
	$group16
);

$row1 = new MooseElatedRow();
$group16->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_arrow_size = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'moose' ),
	esc_html__( "Default value is 14    ", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_arrow_size",
	$portfolio_single_navigation_arrow_size
);

$portfolio_single_navigation_arrows_type = new MooseElatedField(
	"selectblanksimple",
	"portfolio_single_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'moose' ),
	"",
	moose_elated_get_arrows_type()
);
$row1->addChild(
	"portfolio_single_navigation_arrows_type",
	$portfolio_single_navigation_arrows_type
);

$portfolio_single_navigation_arrow_color = new MooseElatedField(
	"colorsimple",
	"portfolio_single_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_arrow_color",
	$portfolio_single_navigation_arrow_color
);

$portfolio_single_navigation_arrow_transparency = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_arrow_transparency",
	$portfolio_single_navigation_arrow_transparency
);

$row2 = new MooseElatedRow( true );
$group16->addChild(
	"row2",
	$row2
);

$portfolio_single_navigation_arrow_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_single_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_single_navigation_arrow_hover_color",
	$portfolio_single_navigation_arrow_hover_color
);

$portfolio_single_navigation_arrow_hover_transparency = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_single_navigation_arrow_hover_transparency",
	$portfolio_single_navigation_arrow_hover_transparency
);

$group17 = new MooseElatedGroup(
	esc_html__( "Navigation Button Background", 'moose' ),
	esc_html__( "Define navigation button background", 'moose' )
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

$portfolio_single_navigation_background_color = new MooseElatedField(
	"colorsimple",
	"portfolio_single_navigation_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_background_color",
	$portfolio_single_navigation_background_color
);

$portfolio_single_navigation_background_transparency = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_background_transparency",
	$portfolio_single_navigation_background_transparency
);

$portfolio_single_navigation_background_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_single_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_background_hover_color",
	$portfolio_single_navigation_background_hover_color
);

$portfolio_single_navigation_background_hover_transparency = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_background_hover_transparency",
	$portfolio_single_navigation_background_hover_transparency
);

$group18 = new MooseElatedGroup(
	esc_html__( "Navigation Button Border", 'moose' ),
	esc_html__( "Define border style", 'moose' )
);
$panel2->addChild(
	"group18",
	$group18
);

$row1 = new MooseElatedRow();
$group18->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_border_width = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'moose' ),
	""
);
$row1->addChild(
	"portfolio_single_navigation_border_width",
	$portfolio_single_navigation_border_width
);

$portfolio_single_navigation_border_radius = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_border_radius",
	$portfolio_single_navigation_border_radius
);

$portfolio_single_navigation_border_color = new MooseElatedField(
	"colorsimple",
	"portfolio_single_navigation_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_border_color",
	$portfolio_single_navigation_border_color
);

$portfolio_single_navigation_border_transparency = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_border_transparency",
	$portfolio_single_navigation_border_transparency
);

$row2 = new MooseElatedRow( true );
$group18->addChild(
	"row2",
	$row2
);

$portfolio_single_navigation_border_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_single_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_single_navigation_border_hover_color",
	$portfolio_single_navigation_border_hover_color
);

$portfolio_single_navigation_border_hover_transparency = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"portfolio_single_navigation_border_hover_transparency",
	$portfolio_single_navigation_border_hover_transparency
);

$portfolio_single_navigation_show_button_shadow = new MooseElatedField(
	"yesno",
	"portfolio_single_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'moose' ),
	esc_html__( "Enabling this options will show button shadow", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_portfolio_single_navigation_button_shadow_container"
	)
);
$panel2->addChild(
	"portfolio_single_navigation_show_button_shadow",
	$portfolio_single_navigation_show_button_shadow
);

$portfolio_single_navigation_button_shadow_container = new MooseElatedContainer(
	"portfolio_single_navigation_button_shadow_container",
	"portfolio_single_navigation_show_button_shadow",
	"no"
);
$panel2->addChild(
	"portfolio_single_navigation_button_shadow_container",
	$portfolio_single_navigation_button_shadow_container
);

$group21 = new MooseElatedGroup(
	esc_html__( "Button Shadow", 'moose' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'moose' )
);
$portfolio_single_navigation_button_shadow_container->addChild(
	"group21",
	$group21
);

$row1 = new MooseElatedRow();
$group21->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_button_shadow_color = new MooseElatedField(
	"colorsimple",
	"portfolio_single_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose color for  box shadow", 'moose' )
);
$row1->addChild(
	"portfolio_single_navigation_button_shadow_color",
	$portfolio_single_navigation_button_shadow_color
);

$row2 = new MooseElatedRow();
$group21->addChild(
	"row2",
	$row2
);

$portfolio_single_navigation_button_h_shadow = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'moose' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_h_shadow",
	$portfolio_single_navigation_button_h_shadow
);

$portfolio_single_navigation_button_v_shadow = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'moose' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_v_shadow",
	$portfolio_single_navigation_button_v_shadow
);

$portfolio_single_navigation_button_blur = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'moose' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_blur",
	$portfolio_single_navigation_button_blur
);

$portfolio_single_navigation_button_spread = new MooseElatedField(
	"textsimple",
	"portfolio_single_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'moose' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_spread",
	$portfolio_single_navigation_button_spread
);

$portfolio_back_to_button_choice = new MooseElatedField(
	"select",
	"portfolio_back_to_button_choice",
	"icon",
	esc_html__( "Back to Button Type", 'moose' ),
	esc_html__( "Choose Back to button type", 'moose' ),
	array(
		"icon" => esc_html__( "Icon", 'moose' ),
		"custom_icon" => esc_html__( "Custom Icon", 'moose' )
	),
	array(
		"dependence" => true,
		"show"       => array(
			"icon"        => "#eltdf_portfolio_back_to_button_icon_container",
			"custom_icon" => "#eltdf_portfolio_back_to_button_custom_container"
		),
		"hide"       => array(
			"custom_icon" => "#eltdf_portfolio_back_to_button_icon_container",
			"icon"        => "#eltdf_portfolio_back_to_button_custom_container"
		)
	)
);

$panel2->addChild(
	"portfolio_back_to_button_choice",
	$portfolio_back_to_button_choice
);

$portfolio_back_to_button_icon_container = new MooseElatedContainer(
	"portfolio_back_to_button_icon_container",
	"portfolio_back_to_button_choice",
	"custom_icon"
);
$panel2->addChild(
	"portfolio_back_to_button_icon_container",
	$portfolio_back_to_button_icon_container
);

$group22 = new MooseElatedGroup(
	esc_html__( "Icon and Style", 'moose' ),
	esc_html__( "Choose icon and style for it", 'moose' )
);
$portfolio_back_to_button_icon_container->addChild(
	"group22",
	$group22
);

$row1 = new MooseElatedRow();
$group22->addChild(
	"row1",
	$row1
);

$portfolio_back_to_button_icon_color = new MooseElatedField(
	"colorsimple",
	"portfolio_back_to_button_icon_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_back_to_button_icon_color",
	$portfolio_back_to_button_icon_color
);

$portfolio_back_to_button_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"portfolio_back_to_button_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_back_to_button_icon_hover_color",
	$portfolio_back_to_button_icon_hover_color
);

$portfolio_back_to_button_icon = new MooseElatedField(
	"selectsimple",
	"portfolio_back_to_button_icon",
	"",
	esc_html__( "Icon", 'moose' ),
	esc_html__( "Choose icon for Back to button", 'moose' ),
	array(
		"fa fa-th" => esc_html__( "fa-th grid", 'moose' ),
		"icon_grid-3x3" => esc_html__( "icon_grid 3x3", 'moose' ),
		"ion-grid" => esc_html__( "ion-grid", 'moose' ),
		"icon-grid" => esc_html__( "icon-grid", 'moose' )
	)
);
$row1->addChild(
	"portfolio_back_to_button_icon",
	$portfolio_back_to_button_icon
);

$portfolio_back_to_button_icon_size = new MooseElatedField(
	"textsimple",
	"portfolio_back_to_button_icon_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"portfolio_back_to_button_icon_size",
	$portfolio_back_to_button_icon_size
);

$portfolio_back_to_button_custom_container = new MooseElatedContainer(
	"portfolio_back_to_button_custom_container",
	"portfolio_back_to_button_choice",
	"icon"
);
$panel2->addChild(
	"portfolio_back_to_button_custom_container",
	$portfolio_back_to_button_custom_container
);

$portfolio_back_to_button_custom_icon = new MooseElatedField(
	"image",
	"portfolio_back_to_button_custom_icon",
	"",
	esc_html__( "Custom Icon", 'moose' ),
	esc_html__( "Choose custom icon for Back to button", 'moose' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_icon",
	$portfolio_back_to_button_custom_icon
);

$portfolio_back_to_button_custom_hover_icon = new MooseElatedField(
	"image",
	"portfolio_back_to_button_custom_hover_icon",
	"",
	esc_html__( "Custom Hover Icon", 'moose' ),
	esc_html__( "Choose custom hover icon for Back to button", 'moose' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_hover_icon",
	$portfolio_back_to_button_custom_hover_icon
);

$portfolio_back_to_button_custom_icon_retina_x15 = new MooseElatedField(
	"image",
	"portfolio_back_to_button_custom_icon_retina_x15",
	"",
	esc_html__( "Custom Icon for Retina x1.5", 'moose' ),
	esc_html__( "Choose custom icon for Back to button for retina x1.5 (note that you must have Custom Icon first)", 'moose' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_icon_retina_x15",
	$portfolio_back_to_button_custom_icon_retina_x15
);

$portfolio_back_to_button_custom_hover_icon_retina_x15 = new MooseElatedField(
	"image",
	"portfolio_back_to_button_custom_hover_icon_retina_x15",
	"",
	esc_html__( "Custom Hover Icon for Retina x1.5", 'moose' ),
	esc_html__( "Choose custom hover icon for Back to button for retina x1.5 (note that you must have Custom Icon first)", 'moose' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_hover_icon_retina_x15",
	$portfolio_back_to_button_custom_hover_icon_retina_x15
);

$portfolio_back_to_button_custom_icon_retina_x2 = new MooseElatedField(
	"image",
	"portfolio_back_to_button_custom_icon_retina_x2",
	"",
	esc_html__( "Custom Icon for Retina x2", 'moose' ),
	esc_html__( "Choose custom icon for Back to button for retina x2 (note that you must have Custom Icon first)", 'moose' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_icon_retina_x2",
	$portfolio_back_to_button_custom_icon_retina_x2
);

$portfolio_back_to_button_custom_hover_icon_retina_x2 = new MooseElatedField(
	"image",
	"portfolio_back_to_button_custom_hover_icon_retina_x2",
	"",
	esc_html__( "Custom Hover Icon for Retina x2", 'moose' ),
	esc_html__( "Choose custom hover icon for Back to button for retina x2 (note that you must have Custom Icon first)", 'moose' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_hover_icon_retina_x2",
	$portfolio_back_to_button_custom_hover_icon_retina_x2
);