<?php

$visualComposerPage = new MooseElatedAdminPage(
	'22',
	esc_html__( 'Visual Composer', 'moose' ),
	'fa fa-ellipsis-h'
);
moose_elated_framework()->eltdOptions->addAdminPage(
	'visualComposerPage',
	$visualComposerPage
);

$panel1 = new MooseElatedPanel(
	esc_html__( 'Visual Composer Grid Elements', 'moose' ),
	'vc_grid_elements'
);
$visualComposerPage->addChild(
	'panel1',
	$panel1
);

$enable_grid_elements = new MooseElatedField(
	'yesno',
	'enable_grid_elements',
	'no',
	esc_html__( 'Enable Grid Elements', 'moose' ),
	esc_html__( 'Enabling this option will allow Visual Composer Grid Elements. NOTE: Enabling Grid Elements will disable Page Transition.', 'moose' ),
	array(),
	array(
		'dependence' => 'true',
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_vc_grid_elements_style'
	)
);
$panel1->addChild(
	'enable_grid_elements',
	$enable_grid_elements
);

$panel2 = new MooseElatedPanel(
	esc_html__( 'Visual Composer Grid Elements Style', 'moose' ),
	'vc_grid_elements_style',
	'enable_grid_elements',
	'no'
);
$visualComposerPage->addChild(
	'panel2',
	$panel2
);

$group1 = new MooseElatedGroup(
	esc_html__( 'Button', 'moose' ),
	esc_html__( 'Define styles for grid button', 'moose' )
);
$panel2->addChild(
	'group1',
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$vc_grid_button_title_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_button_title_color',
	'',
	esc_html__( 'Text Color', 'moose' ),
	''
);
$row1->addChild(
	'vc_grid_button_title_color',
	$vc_grid_button_title_color
);
$vc_grid_button_title_hovercolor = new MooseElatedField(
	'colorsimple',
	'vc_grid_button_title_hovercolor',
	'',
	esc_html__( 'Hover Color', 'moose' ),
	''
);
$row1->addChild(
	'vc_grid_button_title_hovercolor',
	$vc_grid_button_title_hovercolor
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	'row2',
	$row2
);

$vc_grid_button_title_google_fonts = new MooseElatedField(
	'fontsimple',
	'vc_grid_button_title_google_fonts',
	'-1',
	esc_html__( 'Font Family', 'moose' ),
	''
);
$row2->addChild(
	'vc_grid_button_title_google_fonts',
	$vc_grid_button_title_google_fonts
);
$vc_grid_button_title_fontsize = new MooseElatedField(
	'textsimple',
	'vc_grid_button_title_fontsize',
	'',
	esc_html__( 'Font Size (px)', 'moose' ),
	''
);
$row2->addChild(
	'vc_grid_button_title_fontsize',
	$vc_grid_button_title_fontsize
);
$vc_grid_button_title_lineheight = new MooseElatedField(
	'textsimple',
	'vc_grid_button_title_lineheight',
	'',
	esc_html__( 'Line Height (px)', 'moose' ),
	''
);
$row2->addChild(
	'vc_grid_button_title_lineheight',
	$vc_grid_button_title_lineheight
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	'row3',
	$row3
);

$vc_grid_button_title_fontstyle = new MooseElatedField(
	'selectblanksimple',
	'vc_grid_button_title_fontstyle',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row3->addChild(
	'vc_grid_button_title_fontstyle',
	$vc_grid_button_title_fontstyle
);
$vc_grid_button_title_fontweight = new MooseElatedField(
	'selectblanksimple',
	'vc_grid_button_title_fontweight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	'vc_grid_button_title_fontweight',
	$vc_grid_button_title_fontweight
);
$vc_grid_button_title_letter_spacing = new MooseElatedField(
	'textsimple',
	'vc_grid_button_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'moose' ),
	''
);
$row3->addChild(
	'vc_grid_button_title_letter_spacing',
	$vc_grid_button_title_letter_spacing
);

$row4 = new MooseElatedRow( true );
$group1->addChild(
	'row4',
	$row4
);

$vc_grid_button_backgroundcolor = new MooseElatedField(
	'colorsimple',
	'vc_grid_button_backgroundcolor',
	'',
	esc_html__( 'Background Color', 'moose' ),
	''
);
$row4->addChild(
	'vc_grid_button_backgroundcolor',
	$vc_grid_button_backgroundcolor
);
$vc_grid_button_backgroundcolor_hover = new MooseElatedField(
	'colorsimple',
	'vc_grid_button_backgroundcolor_hover',
	'',
	esc_html__( 'Hover Background Color', 'moose' ),
	''
);
$row4->addChild(
	'vc_grid_button_backgroundcolor_hover',
	$vc_grid_button_backgroundcolor_hover
);
$vc_grid_button_border_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_button_border_color',
	'',
	esc_html__( 'Border Color', 'moose' ),
	''
);
$row4->addChild(
	'vc_grid_button_border_color',
	$vc_grid_button_border_color
);
$vc_grid_button_border_hover_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_button_border_hover_color',
	'',
	esc_html__( 'Border Hover color', 'moose' ),
	''
);
$row4->addChild(
	'vc_grid_button_border_hover_color',
	$vc_grid_button_border_hover_color
);

$row5 = new MooseElatedRow( true );
$group1->addChild(
	'row5',
	$row5
);

$vc_grid_button_border_width = new MooseElatedField(
	'textsimple',
	'vc_grid_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row5->addChild(
	'vc_grid_button_border_width',
	$vc_grid_button_border_width
);
$vc_grid_button_border_radius = new MooseElatedField(
	'textsimple',
	'vc_grid_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row5->addChild(
	'vc_grid_button_border_radius',
	$vc_grid_button_border_radius
);

$group2 = new MooseElatedGroup(
	esc_html__( 'Load More Button', 'moose' ),
	esc_html__( 'Define styles for grid load more button', 'moose' )
);
$panel2->addChild(
	'group2',
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$vc_grid_load_more_button_title_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_load_more_button_title_color',
	'',
	esc_html__( 'Text Color', 'moose' ),
	''
);
$row1->addChild(
	'vc_grid_load_more_button_title_color',
	$vc_grid_load_more_button_title_color
);
$vc_grid_load_more_button_title_hovercolor = new MooseElatedField(
	'colorsimple',
	'vc_grid_load_more_button_title_hovercolor',
	'',
	esc_html__( 'Hover Color', 'moose' ),
	''
);
$row1->addChild(
	'vc_grid_load_more_button_title_hovercolor',
	$vc_grid_load_more_button_title_hovercolor
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	'row2',
	$row2
);

$vc_grid_load_more_button_title_google_fonts = new MooseElatedField(
	'fontsimple',
	'vc_grid_load_more_button_title_google_fonts',
	'-1',
	esc_html__( 'Font Family', 'moose' ),
	''
);
$row2->addChild(
	'vc_grid_load_more_button_title_google_fonts',
	$vc_grid_load_more_button_title_google_fonts
);
$vc_grid_load_more_button_title_fontsize = new MooseElatedField(
	'textsimple',
	'vc_grid_load_more_button_title_fontsize',
	'',
	esc_html__( 'Font Size (px)', 'moose' ),
	''
);
$row2->addChild(
	'vc_grid_load_more_button_title_fontsize',
	$vc_grid_load_more_button_title_fontsize
);
$vc_grid_load_more_button_title_lineheight = new MooseElatedField(
	'textsimple',
	'vc_grid_load_more_button_title_lineheight',
	'',
	esc_html__( 'Line Height (px)', 'moose' ),
	''
);
$row2->addChild(
	'vc_grid_load_more_button_title_lineheight',
	$vc_grid_load_more_button_title_lineheight
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	'row3',
	$row3
);

$vc_grid_load_more_button_title_fontstyle = new MooseElatedField(
	'selectblanksimple',
	'vc_grid_load_more_button_title_fontstyle',
	'',
	esc_html__( 'Font Style', 'moose' ),
	'',
	moose_elated_get_font_style_array()
);
$row3->addChild(
	'vc_grid_load_more_button_title_fontstyle',
	$vc_grid_load_more_button_title_fontstyle
);
$vc_grid_load_more_button_title_fontweight = new MooseElatedField(
	'selectblanksimple',
	'vc_grid_load_more_button_title_fontweight',
	'',
	esc_html__( 'Font Weight', 'moose' ),
	'',
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	'vc_grid_load_more_button_title_fontweight',
	$vc_grid_load_more_button_title_fontweight
);
$vc_grid_load_more_button_title_letter_spacing = new MooseElatedField(
	'textsimple',
	'vc_grid_load_more_button_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'moose' ),
	''
);
$row3->addChild(
	'vc_grid_load_more_button_title_letter_spacing',
	$vc_grid_load_more_button_title_letter_spacing
);

$row4 = new MooseElatedRow( true );
$group2->addChild(
	'row4',
	$row4
);

$vc_grid_load_more_button_backgroundcolor = new MooseElatedField(
	'colorsimple',
	'vc_grid_load_more_button_backgroundcolor',
	'',
	esc_html__( 'Background Color', 'moose' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_backgroundcolor',
	$vc_grid_load_more_button_backgroundcolor
);
$vc_grid_load_more_button_backgroundcolor_hover = new MooseElatedField(
	'colorsimple',
	'vc_grid_load_more_button_backgroundcolor_hover',
	'',
	esc_html__( 'Hover Background Color', 'moose' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_backgroundcolor_hover',
	$vc_grid_load_more_button_backgroundcolor_hover
);
$vc_grid_load_more_button_border_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_load_more_button_border_color',
	'',
	esc_html__( 'Border Color', 'moose' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_border_color',
	$vc_grid_load_more_button_border_color
);
$vc_grid_load_more_button_border_hover_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_load_more_button_border_hover_color',
	'',
	esc_html__( 'Border Hover color', 'moose' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_border_hover_color',
	$vc_grid_load_more_button_border_hover_color
);

$row5 = new MooseElatedRow( true );
$group2->addChild(
	'row5',
	$row5
);

$vc_grid_load_more_button_border_width = new MooseElatedField(
	'textsimple',
	'vc_grid_load_more_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row5->addChild(
	'vc_grid_load_more_button_border_width',
	$vc_grid_load_more_button_border_width
);
$vc_grid_load_more_button_border_radius = new MooseElatedField(
	'textsimple',
	'vc_grid_load_more_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'moose' ),
	esc_html__( 'This is some description', 'moose' )
);
$row5->addChild(
	'vc_grid_load_more_button_border_radius',
	$vc_grid_load_more_button_border_radius
);

$group3 = new MooseElatedGroup(
	esc_html__( 'Pagination', 'moose' ),
	esc_html__( 'Define styles for grid pagination', 'moose' )
);
$panel2->addChild(
	'group3',
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	'row1',
	$row1
);

$vc_grid_pagination_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_pagination_color',
	'',
	esc_html__( 'Color', 'moose' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_color',
	$vc_grid_pagination_color
);
$vc_grid_pagination_hover_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_pagination_hover_color',
	'',
	esc_html__( 'Hover Color', 'moose' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_hover_color',
	$vc_grid_pagination_hover_color
);
$vc_grid_pagination_background_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_pagination_background_color',
	'',
	esc_html__( 'Background Color', 'moose' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_background_color',
	$vc_grid_pagination_background_color
);
$vc_grid_pagination_background_hover_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_pagination_background_hover_color',
	'',
	esc_html__( 'Background Hover Color', 'moose' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_background_hover_color',
	$vc_grid_pagination_background_hover_color
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	'row2',
	$row2
);

$vc_grid_pagination_border_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_pagination_border_color',
	'',
	esc_html__( 'Border Color', 'moose' ),
	''
);
$row2->addChild(
	'vc_grid_pagination_border_color',
	$vc_grid_pagination_border_color
);
$vc_grid_pagination_border_hover_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_pagination_border_hover_color',
	'',
	esc_html__( 'Border Hover Color', 'moose' ),
	''
);
$row2->addChild(
	'vc_grid_pagination_border_hover_color',
	$vc_grid_pagination_border_hover_color
);

$group5 = new MooseElatedGroup(
	esc_html__( 'Filter', 'moose' ),
	esc_html__( 'Define styles for grid filter', 'moose' )
);
$panel2->addChild(
	'group5',
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	'row1',
	$row1
);

$vc_grid_portfolio_filter_color = new MooseElatedField(
	"colorsimple",
	"vc_grid_portfolio_filter_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_color",
	$vc_grid_portfolio_filter_color
);
$vc_grid_portfolio_filter_hovercolor = new MooseElatedField(
	"colorsimple",
	"vc_grid_portfolio_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_hovercolor",
	$vc_grid_portfolio_filter_hovercolor
);
$vc_grid_portfolio_filter_font_size = new MooseElatedField(
	"textsimple",
	"vc_grid_portfolio_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_font_size",
	$vc_grid_portfolio_filter_font_size
);
$vc_grid_portfolio_filter_line_height = new MooseElatedField(
	"textsimple",
	"vc_grid_portfolio_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_line_height",
	$vc_grid_portfolio_filter_line_height
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	'row2',
	$row2
);

$vc_grid_portfolio_filter_text_transform = new MooseElatedField(
	"selectblanksimple",
	"vc_grid_portfolio_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"vc_grid_portfolio_filter_text_transform",
	$vc_grid_portfolio_filter_text_transform
);
$vc_grid_portfolio_filter_font_family = new MooseElatedField(
	"fontsimple",
	"vc_grid_portfolio_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"vc_grid_portfolio_filter_font_family",
	$vc_grid_portfolio_filter_font_family
);
$vc_grid_portfolio_filter_font_style = new MooseElatedField(
	"selectblanksimple",
	"vc_grid_portfolio_filter_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"vc_grid_portfolio_filter_font_style",
	$vc_grid_portfolio_filter_font_style
);
$vc_grid_portfolio_filter_font_weight = new MooseElatedField(
	"selectblanksimple",
	"vc_grid_portfolio_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"vc_grid_portfolio_filter_font_weight",
	$vc_grid_portfolio_filter_font_weight
);

$row3 = new MooseElatedRow( true );
$group5->addChild(
	'row3',
	$row3
);

$vc_grid_portfolio_filter_letter_spacing = new MooseElatedField(
	"textsimple",
	"vc_grid_portfolio_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"vc_grid_portfolio_filter_letter_spacing",
	$vc_grid_portfolio_filter_letter_spacing
);
$vc_grid_portfolio_filter_margin_bottom = new MooseElatedField(
	"textsimple",
	"vc_grid_portfolio_filter_margin_bottom",
	"",
	esc_html__( "Filter Bottom Margin (px)", 'moose' ),
	""
);
$row3->addChild(
	"vc_grid_portfolio_filter_margin_bottom",
	$vc_grid_portfolio_filter_margin_bottom
);

$group4 = new MooseElatedGroup(
	esc_html__( 'Arrows', 'moose' ),
	esc_html__( 'Define styles for grid arrows', 'moose' )
);
$panel2->addChild(
	'group4',
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	'row1',
	$row1
);

$vc_grid_arrows_color = new MooseElatedField(
	'colorsimple',
	'vc_grid_arrows_color',
	'',
	esc_html__( 'Color', 'moose' ),
	''
);
$row1->addChild(
	'vc_grid_arrows_color',
	$vc_grid_arrows_color
);