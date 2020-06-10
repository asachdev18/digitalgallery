<?php

$error404Page = new MooseElatedAdminPage(
	"13",
	esc_html__("404 Error Page", 'moose'),
	"fa fa-exclamation-triangle"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"error404Page",
	$error404Page
);

//404 Page Options

$panel1 = new MooseElatedPanel(
	esc_html__("404 Page Options", 'moose'),
	"page_error_options_panel"
);
$error404Page->addChild(
	"panel1",
	$panel1
);

$title_404 = new MooseElatedField(
	"text",
	"404_title",
	"",
	esc_html__( "Title", 'moose' ),
	esc_html__( "Enter title for 404 page", 'moose' )
);
$panel1->addChild(
	"404_title",
	$title_404
);

$group1 = new MooseElatedGroup(
	esc_html__( "Title Style", 'moose' ),
	esc_html__( "Define title styles.", 'moose' )
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
$title_404_color = new MooseElatedField(
	"colorsimple",
	"404_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"404_title_color",
	$title_404_color
);

$title_404_font_size = new MooseElatedField(
	"textsimple",
	"404_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"404_title_font_size",
	$title_404_font_size
);

$title_404_line_height = new MooseElatedField(
	"textsimple",
	"404_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"404_title_line_height",
	$title_404_line_height
);

$title_404_text_transform = new MooseElatedField(
	"selectblanksimple",
	"404_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"404_title_text_transform",
	$title_404_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$title_404_font_family = new MooseElatedField(
	"fontsimple",
	"404_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"404_title_font_family",
	$title_404_font_family
);

$title_404_font_style = new MooseElatedField(
	"selectblanksimple",
	"404_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"404_title_font_style",
	$title_404_font_style
);

$title_404_font_weight = new MooseElatedField(
	"selectblanksimple",
	"404_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"404_title_font_weight",
	$title_404_font_weight
);

$title_404_letter_spacing = new MooseElatedField(
	"textsimple",
	"404_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"404_title_letter_spacing",
	$title_404_letter_spacing
);

$text_404 = new MooseElatedField(
	"text",
	"404_text",
	"",
	esc_html__( "Text", 'moose' ),
	esc_html__( "Enter text for 404 page", 'moose' )
);
$panel1->addChild(
	"404_text",
	$text_404
);

$group2 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text style", 'moose' )
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
$text_404_color = new MooseElatedField(
	"colorsimple",
	"404_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"404_text_color",
	$text_404_color
);

$text_404_font_size = new MooseElatedField(
	"textsimple",
	"404_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"404_text_font_size",
	$text_404_font_size
);

$text_404_line_height = new MooseElatedField(
	"textsimple",
	"404_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"404_title_line_height",
	$text_404_line_height
);

$text_404_text_transform = new MooseElatedField(
	"selectblanksimple",
	"404_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"404_text_text_transform",
	$text_404_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$text_404_font_family = new MooseElatedField(
	"fontsimple",
	"404_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"404_text_font_family",
	$text_404_font_family
);

$text_404_font_style = new MooseElatedField(
	"selectblanksimple",
	"404_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"404_text_font_style",
	$text_404_font_style
);

$text_404_font_weight = new MooseElatedField(
	"selectblanksimple",
	"404_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"404_text_font_weight",
	$text_404_font_weight
);

$text_404_letter_spacing = new MooseElatedField(
	"textsimple",
	"404_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"404_text_letter_spacing",
	$text_404_letter_spacing
);

$backlabel_404 = new MooseElatedField(
	"text",
	"404_backlabel",
	"",
	esc_html__( "Back to Home Button Label", 'moose' ),
	esc_html__( 'Enter label for "Back to Home" button ', 'moose' )
);
$panel1->addChild(
	"404_backlabel",
	$backlabel_404
);

