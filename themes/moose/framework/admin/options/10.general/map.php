<?php
$moose_elated_icon_collections = moose_elated_return_icon_collections();

$generalPage = new MooseElatedAdminPage(
	"",
	esc_html__( "General", 'moose' ),
	"fa fa-institution"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"general",
	$generalPage
);

// Appearance

$panel1 = new MooseElatedPanel(
	esc_html__( "Design Style", 'moose' ),
	"design_style"
);
$generalPage->addChild(
	"panel1",
	$panel1
);

$google_fonts = new MooseElatedField(
	"font",
	"google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "Choose a default Google font for your site", 'moose' )
);
$panel1->addChild(
	"google_fonts",
	$google_fonts
);

$additional_google_fonts = new MooseElatedField(
	"yesno",
	"additional_google_fonts",
	"no",
	esc_html__( "Additional Google Fonts", 'moose' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_additional_google_font_container"
	)
);
$panel1->addChild(
	"additional_google_fonts",
	$additional_google_fonts
);

$additional_google_font_container = new MooseElatedContainer(
	"additional_google_font_container",
	"additional_google_fonts",
	"no"
);
$panel1->addChild(
	"additional_google_font_container",
	$additional_google_font_container
);

$additional_google_font1 = new MooseElatedField(
	"font",
	"additional_google_font1",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "Choose additional Google font for your site", 'moose' )
);
$additional_google_font_container->addChild(
	"additional_google_font1",
	$additional_google_font1
);

$additional_google_font2 = new MooseElatedField(
	"font",
	"additional_google_font2",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "Choose additional Google font for your site", 'moose' )
);
$additional_google_font_container->addChild(
	"additional_google_font2",
	$additional_google_font2
);

$additional_google_font3 = new MooseElatedField(
	"font",
	"additional_google_font3",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "Choose additional Google font for your site", 'moose' )
);
$additional_google_font_container->addChild(
	"additional_google_font3",
	$additional_google_font3
);

$additional_google_font4 = new MooseElatedField(
	"font",
	"additional_google_font4",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "Choose additional Google font for your site", 'moose' )
);
$additional_google_font_container->addChild(
	"additional_google_font4",
	$additional_google_font4
);

$additional_google_font5 = new MooseElatedField(
	"font",
	"additional_google_font5",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "Choose additional Google font for your site", 'moose' )
);
$additional_google_font_container->addChild(
	"additional_google_font5",
	$additional_google_font5
);

$selection_color = new MooseElatedField(
	"color",
	"selection_color",
	"",
	esc_html__( "Text Selection Color", 'moose' ),
	esc_html__( "Choose the color users see when selecting text", 'moose' )
);
$panel1->addChild(
	"selection_color",
	$selection_color
);

$first_color = new MooseElatedField(
	"color",
	"first_color",
	"",
	esc_html__( "First Main Color", 'moose' ),
	esc_html__( "Choose the most dominant theme color. Default color is #e6ae48.", 'moose' )
);
$panel1->addChild(
	"first_color",
	$first_color
);

$transparent_content = new MooseElatedField(
	"yesno",
	"transparent_content",
	"no",
	esc_html__( "Enable Uniform Site Background", 'moose' ),
	esc_html__( "If enabled, content background on pages will be transparent (unless set otherwise) and the background you set here will show", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_transparent_content_container"
	)
);
$panel1->addChild(
	"transparent_content",
	$transparent_content
);

$transparent_content_container = new MooseElatedContainer(
	"transparent_content_container",
	"transparent_content",
	"no"
);
$panel1->addChild(
	"transparent_content_container",
	$transparent_content_container
);

$transparent_content_background_color = new MooseElatedField(
	"color",
	"transparent_content_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose body background color. Default color is #ffffff.", 'moose' )
);
$transparent_content_container->addChild(
	"transparent_content_background_color",
	$transparent_content_background_color
);

$transparent_content_background_image = new MooseElatedField(
	"image",
	"transparent_content_background_image",
	"",
	esc_html__( "Background Image", 'moose' ),
	esc_html__( "Choose an image to be displayed in background", 'moose' )
);
$transparent_content_container->addChild(
	"transparent_content_background_image",
	$transparent_content_background_image
);

$transparent_content_pattern_background_image = new MooseElatedField(
	"image",
	"transparent_content_pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'moose' ),
	esc_html__( "Choose an image to be used as background pattern", 'moose' )
);
$transparent_content_container->addChild(
	"transparent_content_pattern_background_image",
	$transparent_content_pattern_background_image
);

$boxed = new MooseElatedField(
	"yesno",
	"boxed",
	"no",
	esc_html__( "Boxed layout", 'moose' ),
	esc_html__( "Enabling this option will display site content in grid", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_boxed_container"
	)
);
$panel1->addChild(
	"boxed",
	$boxed
);

$boxed_container = new MooseElatedContainer(
	"boxed_container",
	"boxed",
	"no"
);
$panel1->addChild(
	"boxed_container",
	$boxed_container
);

$spacing_arround_content = new MooseElatedField(
	"yesno",
	"spacing_arround_content",
	"no",
	esc_html__( "Spacing around content", 'moose' ),
	esc_html__( "Enabling this option will set a spacing around the boxed content", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_spacing_arround_content_container"
	)
);
$boxed_container->addChild(
	"spacing_arround_content",
	$spacing_arround_content
);

$spacing_arround_content_container = new MooseElatedContainer(
	"spacing_arround_content_container",
	"spacing_arround_content",
	"no"
);
$boxed_container->addChild(
	"spacing_arround_content_container",
	$spacing_arround_content_container
);

$spacing_amount = new MooseElatedField(
	"text",
	"spacing_amount",
	"",
	esc_html__( "Spacing amount (px)", 'moose' ),
	esc_html__( "Enter the amount for the spacing around boxed content (default is 25)", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$spacing_arround_content_container->addChild(
	"spacing_amount",
	$spacing_amount
);

$footer_in_content = new MooseElatedField(
	"yesno",
	"footer_in_content",
	"no",
	esc_html__( "Include footer in content area", 'moose' ),
	esc_html__( "Enabling this option will include the footer in the content area, so the set spacing will wrap around the footer area as well. Otherwise the spacing will separate the footer and content.", 'moose' )
);
$spacing_arround_content_container->addChild(
	"footer_in_content",
	$footer_in_content
);

$frame_around_content = new MooseElatedField(
	"yesno",
	"frame_around_content",
	"no",
	esc_html__( "Frame around content", 'moose' ),
	esc_html__( "Enabling this option will set a frame around the content", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_frame_around_content_container"
	)
);
$spacing_arround_content_container->addChild(
	"frame_around_content",
	$frame_around_content
);

$frame_around_content_container = new MooseElatedContainer(
	"frame_around_content_container",
	"frame_around_content",
	"no"
);
$spacing_arround_content_container->addChild(
	"frame_around_content_container",
	$frame_around_content_container
);

$frame_around_content_width = new MooseElatedField(
	"text",
	"frame_around_content_width",
	"",
	esc_html__( "Frame width (px)", 'moose' ),
	esc_html__( "Enter the width of the frame (default is 15)", 'moose' ),
	array(),
	array( "col_width" => 1 )
);
$frame_around_content_container->addChild(
	"frame_around_content_width",
	$frame_around_content_width
);

$frame_around_content_color = new MooseElatedField(
	"color",
	"frame_around_content_color",
	"",
	esc_html__( "Frame Color", 'moose' ),
	esc_html__( "Choose a color for frame", 'moose' )
);
$frame_around_content_container->addChild(
	"frame_around_content_color",
	$frame_around_content_color
);

$frame_around_content_pattern = new MooseElatedField(
	"image",
	"frame_around_content_pattern",
	"",
	esc_html__( "Pattern Image", 'moose' ),
	esc_html__( "Choose an image to be used as a pattern in the frame around the content", 'moose' )
);
$frame_around_content_container->addChild(
	"frame_around_content_pattern",
	$frame_around_content_pattern
);

$background_color_box = new MooseElatedField(
	"color",
	"background_color_box",
	"",
	esc_html__( "Page Background Color", 'moose' ),
	esc_html__( "Choose the page background (body) color. Default color is #f5f5f5.", 'moose' )
);
$boxed_container->addChild(
	"background_color_box",
	$background_color_box
);

$background_image = new MooseElatedField(
	"image",
	"background_image",
	"",
	esc_html__( "Background Image", 'moose' ),
	esc_html__( "Choose an image to be displayed in background", 'moose' )
);
$boxed_container->addChild(
	"background_image",
	$background_image
);

$pattern_background_image = new MooseElatedField(
	"image",
	"pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'moose' ),
	esc_html__( "Choose an image to be used as background pattern", 'moose' )
);
$boxed_container->addChild(
	"pattern_background_image",
	$pattern_background_image
);

$background_image_attachment = new MooseElatedField(
	"select",
	"background_image_attachment",
	"fixed",
	esc_html__( "Background Attachment", 'moose' ),
	esc_html__( "Choose background attachment behavior", 'moose' ),
	array(
		"fixed" => esc_html__( "Fixed", 'moose' ),
		"scroll" => esc_html__( "Scroll", 'moose' )
	)
);
$boxed_container->addChild(
	"background_image_attachment",
	$background_image_attachment
);

$boxed_padding_general = new MooseElatedField(
	"text",
	"boxed_padding_general",
	"",
	esc_html__( "Left/Right Padding on Content (%)", 'moose' ),
	esc_html__( "Insert left(right) padding that will apply generaly", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$boxed_container->addChild(
	"boxed_padding_general",
	$boxed_padding_general
);

$boxed_padding_on_header = new MooseElatedField(
	"yesno",
	"boxed_padding_on_header",
	"no",
	esc_html__( "Left/Right Padding Affects Header", 'moose' ),
	esc_html__( "By enabling this option the left/right padding will affect header", 'moose' )
);
$boxed_container->addChild(
	"boxed_padding_on_header",
	$boxed_padding_on_header
);

$boxed_padding_on_header_footer = new MooseElatedField(
	"yesno",
	"boxed_padding_on_header_footer",
	"no",
	esc_html__( "Left/Right Padding Affects Header and Footer", 'moose' ),
	esc_html__( "By enabling this option the left/right padding will affect header and footer also", 'moose' )
);
$boxed_container->addChild(
	"boxed_padding_on_header_footer",
	$boxed_padding_on_header_footer
);

$boxed_padding_on_title_content = new MooseElatedField(
	"yesno",
	"boxed_padding_on_title_content",
	"no",
	esc_html__( "Left/Right Padding Affects Title Content", 'moose' ),
	esc_html__( "By enabling this option the left/right padding will affect title content", 'moose' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_content",
	$boxed_padding_on_title_content
);

$boxed_padding_on_title_container = new MooseElatedField(
	"yesno",
	"boxed_padding_on_title_container",
	"no",
	esc_html__( "Left/Right Padding Affects Title Container", 'moose' ),
	esc_html__( "By enabling this option the left/right padding will affect title container (including title image)", 'moose' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_container",
	$boxed_padding_on_title_container
);

$paspartu = new MooseElatedField(
	"yesno",
	"paspartu",
	"no",
	esc_html__( "Passepartout", 'moose' ),
	esc_html__( "Enabling this option will display passepartout around site content", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_paspartu_container"
	)
);
$panel1->addChild(
	"paspartu",
	$paspartu
);

$paspartu_container = new MooseElatedContainer(
	"paspartu_container",
	"paspartu",
	"no"
);
$panel1->addChild(
	"paspartu_container",
	$paspartu_container
);

$paspartu_color = new MooseElatedField(
	"color",
	"paspartu_color",
	"",
	esc_html__( "Passepartout Color", 'moose' ),
	esc_html__( "Choose passepartout color, default value is #ffffff", 'moose' )
);
$paspartu_container->addChild(
	"paspartu_color",
	$paspartu_color
);

$paspartu_width = new MooseElatedField(
	"text",
	"paspartu_width",
	"",
	esc_html__( "Passepartout Size (%)", 'moose' ),
	esc_html__( "Enter size amount for passepartout, default value is 2% (the percent is in relation to site width)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$paspartu_container->addChild(
	"paspartu_width",
	$paspartu_width
);

$paspartu_border_on_edges = new MooseElatedField(
	"yesno",
	"paspartu_border_on_edges",
	"no",
	esc_html__( "Border on passepartout edges", 'moose' ),
	esc_html__( "Enabling this option will display 1px border on passepartout, only if top and bottom passepartouts are fixed", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_paspartu_border_on_edges_container"
	)
);
$paspartu_container->addChild(
	"paspartu_border_on_edges",
	$paspartu_border_on_edges
);

$paspartu_border_on_edges_container = new MooseElatedContainer(
	"paspartu_border_on_edges_container",
	"paspartu_border_on_edges",
	"no"
);
$paspartu_container->addChild(
	"paspartu_border_on_edges_container",
	$paspartu_border_on_edges_container
);

$paspartu_border_on_edges_color = new MooseElatedField(
	"color",
	"paspartu_border_on_edges_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose border color, default value is #e6e6e6", 'moose' )
);
$paspartu_border_on_edges_container->addChild(
	"paspartu_border_on_edges_color",
	$paspartu_border_on_edges_color
);

$paspartu_header_alignment = new MooseElatedField(
	"yesno",
	"paspartu_header_alignment",
	"no",
	esc_html__( "Align Header With Passepartout", 'moose' ),
	esc_html__( "Enabling this option will align header content with passepartout borders", 'moose' )
);
$paspartu_container->addChild(
	"paspartu_header_alignment",
	$paspartu_header_alignment
);

$paspartu_below_tittle = new MooseElatedField(
	"yesno",
	"paspartu_below_tittle",
	"no",
	esc_html__( "Passepartout Below Title", 'moose' ),
	esc_html__( "Enabling this option will place passepartout below title", 'moose' )
);
$paspartu_container->addChild(
	"paspartu_below_tittle",
	$paspartu_below_tittle
);

$paspartu_header_inside = new MooseElatedField(
	"yesno",
	"paspartu_header_inside",
	"no",
	esc_html__( "Set Header Inside Passepartout", 'moose' ),
	esc_html__( "Enabling this option will set the whole header between the left and right border of passepartout", 'moose' )
);
$paspartu_container->addChild(
	"paspartu_header_inside",
	$paspartu_header_inside
);

$vertical_menu_inside_paspartu = new MooseElatedField(
	"yesno",
	"vertical_menu_inside_paspartu",
	"yes",
	esc_html__( "Vertical Menu Inside Passepartout", 'moose' ),
	""
);
$paspartu_container->addChild(
	"vertical_menu_inside_paspartu",
	$vertical_menu_inside_paspartu
);

$paspartu_footer_alignment = new MooseElatedField(
	"yesno",
	"paspartu_footer_alignment",
	"no",
	esc_html__( "Align Footer With Passepartout", 'moose' ),
	esc_html__( "Enabling this option will align footer content with passepartout borders", 'moose' )
);
$paspartu_container->addChild(
	"paspartu_footer_alignment",
	$paspartu_footer_alignment
);

$paspartu_on_top = new MooseElatedField(
	"yesno",
	"paspartu_on_top",
	"yes",
	esc_html__( "Top Passepartout", 'moose' ),
	esc_html__( "Disabling this option will disable top part of passepartout", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_paspartu_on_top_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_top",
	$paspartu_on_top
);

$paspartu_on_top_fixed_container = new MooseElatedContainer(
	"paspartu_on_top_fixed_container",
	"paspartu_on_top",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_top_fixed_container",
	$paspartu_on_top_fixed_container
);

$paspartu_on_top_fixed = new MooseElatedField(
	"yesno",
	"paspartu_on_top_fixed",
	"no",
	esc_html__( "Fix Top Passepartout", 'moose' ),
	esc_html__( "Enabling this option will fix top part of passepartout to the top of the screen", 'moose' )
);
$paspartu_on_top_fixed_container->addChild(
	"paspartu_on_top_fixed",
	$paspartu_on_top_fixed
);

$paspartu_on_bottom_slider_container = new MooseElatedContainer(
	"paspartu_on_bottom_slider_container",
	"",
	""
);
$paspartu_container->addChild(
	"paspartu_on_bottom_slider_container",
	$paspartu_on_bottom_slider_container
);

$paspartu_on_bottom_slider = new MooseElatedField(
	"yesno",
	"paspartu_on_bottom_slider",
	"no",
	esc_html__( "Show Bottom Passepartout on Elated Slider", 'moose' ),
	esc_html__( "Enabling this option will show bottom passepartout on Elated Slider", 'moose' )
);
$paspartu_on_bottom_slider_container->addChild(
	"paspartu_on_bottom_slider",
	$paspartu_on_bottom_slider
);

$paspartu_on_bottom = new MooseElatedField(
	"yesno",
	"paspartu_on_bottom",
	"yes",
	esc_html__( "Bottom Passepartout", 'moose' ),
	esc_html__( "Disabling this option will disable bottom part of passepartout", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_paspartu_on_bottom_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_bottom",
	$paspartu_on_bottom
);

$paspartu_on_bottom_fixed_container = new MooseElatedContainer(
	"paspartu_on_bottom_fixed_container",
	"paspartu_on_bottom",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_bottom_fixed_container",
	$paspartu_on_bottom_fixed_container
);

$paspartu_on_bottom_fixed = new MooseElatedField(
	"yesno",
	"paspartu_on_bottom_fixed",
	"no",
	esc_html__( "Fix Bottom Passepartout", 'moose' ),
	esc_html__( "Enabling this option will fix bottom part of passepartout to the bottom of the screen", 'moose' )
);
$paspartu_on_bottom_fixed_container->addChild(
	"paspartu_on_bottom_fixed",
	$paspartu_on_bottom_fixed
);

$paspartu_portfolio_full_width = new MooseElatedField(
	"yesno",
	"paspartu_portfolio_full_width",
	"no",
	esc_html__( "Full Width Portfolio List in Passepartout", 'moose' ),
	esc_html__( "Enabling this option will set portfolio lists within the passepartout to full width of content; otherwise there is a small padding between portfolio and passepartout", 'moose' )
);
$paspartu_container->addChild(
	"paspartu_portfolio_full_width",
	$paspartu_portfolio_full_width
);

$preload_pattern_image = new MooseElatedField(
	"image",
	"preload_pattern_image",
	MOOSE_ELATED_ROOT . "/img/preload_pattern.png",
	esc_html__( "Preload Pattern Image", 'moose' ),
	esc_html__( "Choose preload pattern image to be displayed until images are loaded ", 'moose' )
);
$panel1->addChild(
	"preload_pattern_image",
	$preload_pattern_image
);

$element_appear_amount = new MooseElatedField(
	"text",
	"element_appear_amount",
	"",
	esc_html__( "Element Appearance (px)", 'moose' ),
	esc_html__( "For animated elements, set distance (related to browser bottom) to start the animation", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"element_appear_amount",
	$element_appear_amount
);

// Behavior

$panel4 = new MooseElatedPanel(
	esc_html__( "Settings", 'moose' ),
	"settings"
);
$generalPage->addChild(
	"panel4",
	$panel4
);

$page_transitions = new MooseElatedField(
	"select",
	"page_transitions",
	"0",
	esc_html__( "Page Transition", 'moose' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'moose' ),
	array(
		0 => esc_html__("No animation", 'moose' ),
		1 => esc_html__("Up/Down", 'moose' ),
		2 => esc_html__("Fade", 'moose' ),
		3 => esc_html__("Up/Down (In) / Fade (Out)", 'moose' ),
		4 => esc_html__("Left/Right", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"0" => "#eltdf_ajax_animate_header_container",
			"1" => "",
			"2" => "",
			"3" => "",
			"4" => ""
		),
		"show"       => array(
			"0" => "",
			"1" => "#eltdf_ajax_animate_header_container",
			"2" => "#eltdf_ajax_animate_header_container",
			"3" => "#eltdf_ajax_animate_header_container",
			"4" => "#eltdf_ajax_animate_header_container"
		)
	),
	"enable_grid_elements",
	array( "yes" )
);
$panel4->addChild(
	"page_transitions",
	$page_transitions
);

$page_transitions_notice = new MooseElatedNotice(
	esc_html__( "Page Transition", 'moose' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'moose' ),
	esc_html__( "Page transition is disabled because VC Grid is Enabled", 'moose' ),
	"enable_grid_elements",
	"no"
);
$panel4->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$ajax_animate_header_container = new MooseElatedContainer(
	"ajax_animate_header_container",
	"page_transitions",
	"0"
);
$panel4->addChild(
	"ajax_animate_header_container",
	$ajax_animate_header_container
);

$ajax_animate_header = new MooseElatedField(
	"yesno",
	"ajax_animate_header",
	"no",
	esc_html__( "Animate Header", 'moose' ),
	esc_html__( "Enabling this option will include the header area in the Ajax Page Transition Animations", 'moose' )
);
$ajax_animate_header_container->addChild(
	"ajax_animate_header",
	$ajax_animate_header
);

$loading_animation = new MooseElatedField(
	"onoff",
	"loading_animation",
	"off",
	esc_html__( "Loading Animation", 'moose' ),
	esc_html__( "Enabling this option will display animation while page loads", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_loading_animation_container"
	)
);
$panel4->addChild(
	"loading_animation",
	$loading_animation
);

$loading_animation_container = new MooseElatedContainer(
	"loading_animation_container",
	"loading_animation",
	"off"
);
$panel4->addChild(
	"loading_animation_container",
	$loading_animation_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Loading Animation Graphic", 'moose' ),
	esc_html__( "Choose type and color of preload graphic animation", 'moose' )
);
$loading_animation_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$loading_animation_spinner = new MooseElatedField(
	"selectsimple",
	"loading_animation_spinner",
	"pulse",
	esc_html__( "Spinner", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"pulse" => esc_html__( "Pulse", 'moose' ),
		"double_pulse" => esc_html__( "Double Pulse", 'moose' ),
		"cube" => esc_html__( "Cube", 'moose' ),
		"rotating_cubes" => esc_html__( "Rotating Cubes", 'moose' ),
		"stripes" => esc_html__( "Stripes", 'moose' ),
		"wave" => esc_html__( "Wave", 'moose' ),
		"two_rotating_circles" => esc_html__( "2 Rotating Circles", 'moose' ),
		"five_rotating_circles" => esc_html__( "5 Rotating Circles", 'moose' ),
		"atom" => esc_html__( "Atom", 'moose' ),
		"clock" => esc_html__( "Clock", 'moose' ),
		"mitosis" => esc_html__( "Mitosis", 'moose' ),
		"lines" => esc_html__( "Lines", 'moose' ),
		"fussion" => esc_html__( "Fussion", 'moose' ),
		"wave_circles" => esc_html__( "Wave Circles", 'moose' ),
		"pulse_circles" => esc_html__( "Pulse Circles", 'moose' )
	)
);
$row1->addChild(
	"loading_animation_spinner",
	$loading_animation_spinner
);

$spinner_color = new MooseElatedField(
	"colorsimple",
	"spinner_color",
	"",
	esc_html__( "Spinner Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"spinner_color",
	$spinner_color
);

$loading_image = new MooseElatedField(
	"image",
	"loading_image",
	"",
	esc_html__( "Loading Image", 'moose' ),
	esc_html__( 'Upload custom image to be displayed while page loads (Note: Page Transition must not be set to "No Animation")', 'moose' )
);
$loading_animation_container->addChild(
	"loading_image",
	$loading_image
);

$smooth_scroll = new MooseElatedField(
	"yesno",
	"smooth_scroll",
	"yes",
	esc_html__( "Smooth Scroll", 'moose' ),
	esc_html__( "Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)", 'moose' )
);
$panel4->addChild(
	"smooth_scroll",
	$smooth_scroll
);

$elements_animation_on_touch = new MooseElatedField(
	"yesno",
	"elements_animation_on_touch",
	"no",
	esc_html__( "Elements Animation on Mobile/Touch Devices", 'moose' ),
	esc_html__( "Enabling this option will allow elements (shortcodes) to animate on mobile / touch devices", 'moose' )
);
$panel4->addChild(
	"elements_animation_on_touch",
	$elements_animation_on_touch
);

$ios_format_detection = new MooseElatedField(
	"yesno",
	"ios_format_detection",
	"no",
	esc_html__( "Format Detection in Safari on iOS", 'moose' ),
	esc_html__( "This option disables automatic detection of possible phone numbers in a webpage in Safari on iOS.", 'moose' )
);
$panel4->addChild(
	"ios_format_detection",
	$ios_format_detection
);

$show_back_button = new MooseElatedField(
	"yesno",
	"show_back_button",
	"yes",
	esc_html__( "Show 'Back To Top Button'", 'moose' ),
	esc_html__( "Enabling this option will display a Back to Top button on every page", 'moose' )
);
$panel4->addChild(
	"show_back_button",
	$show_back_button
);

$responsiveness = new MooseElatedField(
	"yesno",
	"responsiveness",
	"yes",
	esc_html__( "Responsiveness", 'moose' ),
	esc_html__( "Enabling this option will make all pages responsive", 'moose' )
);
$panel4->addChild(
	"responsiveness",
	$responsiveness
);

$favicon_image = new MooseElatedField(
	"image",
	"favicon_image",
	MOOSE_ELATED_ROOT . "/img/favicon.ico",
	esc_html__( "Favicon Image", 'moose' ),
	esc_html__( "Choose a favicon image to be displayed", 'moose' )
);
$panel4->addChild(
	"favicon_image",
	$favicon_image
);

$internal_no_ajax_links = new MooseElatedField(
	"textarea",
	"internal_no_ajax_links",
	"",
	esc_html__( "List of Internal URLs Loaded Without AJAX (Separated With Comma)", 'moose' ),
	esc_html__( "To disable AJAX transitions on certain pages, enter their full URLs here (for example: http://www.mydomain.com/forum/)", 'moose' )
);
$panel4->addChild(
	"internal_no_ajax_links",
	$internal_no_ajax_links
);

// Custom Code

$panel3 = new MooseElatedPanel(
	esc_html__( "Custom Code", 'moose' ),
	"custom_code"
);
$generalPage->addChild(
	"panel3",
	$panel3
);

$custom_css = new MooseElatedField(
	"textarea",
	"custom_css",
	"",
	esc_html__( "Custom CSS", 'moose' ),
	esc_html__( "Enter your custom CSS here", 'moose' )
);
$panel3->addChild(
	"custom_css",
	$custom_css
);

$custom_svg_css = new MooseElatedField(
	"textarea",
	"custom_svg_css",
	"",
	esc_html__( "Custom SVG CSS", 'moose' ),
	esc_html__( "Enter your SVG CSS here", 'moose' )
);
$panel3->addChild(
	"custom_svg_css",
	$custom_svg_css
);

$custom_js = new MooseElatedField(
	"textarea",
	"custom_js",
	"",
	esc_html__( "Custom JS", 'moose' ),
	esc_html__( 'Enter your custom Javascript here (jQuery selector is "$j" because of the conflict mode)', 'moose' )
);
$panel3->addChild(
	"custom_js",
	$custom_js
);

// SEO

$panel2 = new MooseElatedPanel(
	esc_html__( "SEO", 'moose' ),
	"seo"
);
$generalPage->addChild(
	"panel2",
	$panel2
);

$disable_eltd_seo = new MooseElatedField(
	"yesno",
	"disable_eltd_seo",
	"no",
	esc_html__( "Disable SEO", 'moose' ),
	esc_html__( "Enabling this option will turn off SEO", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_disable_eltd_seo_container",
		"dependence_show_on_yes" => ""
	)
);
$panel2->addChild(
	"disable_eltd_seo",
	$disable_eltd_seo
);

$disable_eltd_seo_container = new MooseElatedContainer(
	"disable_eltd_seo_container",
	"disable_eltd_seo",
	"yes"
);
$panel2->addChild(
	"disable_eltd_seo_container",
	$disable_eltd_seo_container
);

$meta_keywords = new MooseElatedField(
	"textarea",
	"meta_keywords",
	"",
	esc_html__( "Meta Keywords", 'moose' ),
	esc_html__( "Add relevant keywords separated with commas to improve SEO", 'moose' )
);
$disable_eltd_seo_container->addChild(
	"meta_keywords",
	$meta_keywords
);

$meta_description = new MooseElatedField(
	"textarea",
	"meta_description",
	"",
	esc_html__( "Meta Description", 'moose' ),
	esc_html__( "Enter a short description of the website for SEO", 'moose' )
);
$disable_eltd_seo_container->addChild(
	"meta_description",
	$meta_description
);

//Maintenance Mode

$eltd_pages = array();
$pages      = get_posts(
	array(
		'post_type'  => 'page',
		'meta_key'   => '_wp_page_template',
		'meta_value' => 'landing_page.php'
	)
);
foreach ( $pages as $page ) {
	$eltd_pages[ $page->ID ] = $page->post_title;
}

$panel_maintenance = new MooseElatedPanel(
	esc_html__( "Maintenance Mode", 'moose' ),
	"maintenance_panel"
);
$generalPage->addChild(
	"panel_maintenance",
	$panel_maintenance
);

$maintenance_mode = new MooseElatedField(
	"yesno",
	"moose_elated_maintenance_mode",
	"no",
	esc_html__( "Maintenance Mode", 'moose' ),
	esc_html__( "Turn on this option if you want to enable maintenance mode on your site", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_maintenance_container"
	)
);
$panel_maintenance->addChild(
	"moose_elated_maintenance_mode",
	$maintenance_mode
);

$maintenance_container = new MooseElatedContainer(
	"maintenance_container",
	"moose_elated_maintenance_mode",
	"no"
);
$panel_maintenance->addChild(
	"maintenance_container",
	$maintenance_container
);

$maintenance_page = new MooseElatedField(
	"selectblank",
	"eltd_maintenance_page",
	"",
	esc_html__( 'Maintenance Page', 'moose' ),
	esc_html__( 'Choose maintenance page to display when user visits your site', 'moose' ),
	$eltd_pages
);
$maintenance_container->addChild(
	"eltd_maintenance_page",
	$maintenance_page
);

// Google Maps API key

$panel6 = new MooseElatedPanel(
	esc_html__( "Google Maps API key", 'moose' ),
	"google_maps_api_key"
);
$generalPage->addChild(
	"panel6",
	$panel6
);

$google_maps_api_key = new MooseElatedField(
	"text",
	"google_maps_api_key",
	"",
	esc_html__( "Google Maps API key", 'moose' ),
	esc_html__( "Enter your Google Maps API key", 'moose' )
);
$panel6->addChild(
	"google_maps_api_key",
	$google_maps_api_key
);