<?php

$moose_elated_icon_collections = moose_elated_return_icon_collections();
$titlePage = new MooseElatedAdminPage(
	"4",
	esc_html__( "Title", 'moose' ),
	"fa fa-list-alt"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"title",
	$titlePage
);

$panel8 = new MooseElatedPanel(
	esc_html__( "Title", 'moose' ),
	"title_panel"
);
$titlePage->addChild(
	"panel8",
	$panel8
);

$show_page_title = new MooseElatedField(
	"yesno",
	"show_page_title",
	"yes",
	esc_html__( "Enable Page Title Area", 'moose' ),
	esc_html__( "This option will enable Title Area", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_title_container"
	)
);
$panel8->addChild(
	"show_page_title",
	$show_page_title
);

$enable_title_container = new MooseElatedContainer(
	"enable_title_container",
	"show_page_title",
	"no"
);
$panel8->addChild(
	"enable_title_container",
	$enable_title_container
);

$title_type = new MooseElatedField(
	"select",
	"title_type",
	"standard_title",
	esc_html__( "Title Type", 'moose' ),
	esc_html__( "Choose title type", 'moose' ),
	array(
		"standard_title" => esc_html__( "Standard", 'moose' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumb", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#eltdf_title_standard_container" ),
		"show"       => array( "standard_title" => "#eltdf_title_standard_container" )
	)
);
$enable_title_container->addChild(
	"title_type",
	$title_type
);

$animate_title_area = new MooseElatedField(
	"select",
	"animate_title_area",
	"no",
	esc_html__( "Animations", 'moose' ),
	esc_html__( "Choose an animation for Title Area", 'moose' ),
	array(
		"no" => esc_html__( "No animation", 'moose' ),
		"text_right_left" => esc_html__( "Text right to left", 'moose' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'moose' )
	)
);
$enable_title_container->addChild(
	"animate_title_area",
	$animate_title_area
);

$page_title_vertical_aligment = new MooseElatedField(
	"select",
	"page_title_vertical_aligment",
	"header_bottom",
	esc_html__( "Vertical Alignment", 'moose' ),
	esc_html__( "Specify Title vertical alignment", 'moose' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'moose' ),
		"window_top" => esc_html__( "From Window Top", 'moose' )
	)
);
$enable_title_container->addChild(
	"page_title_vertical_aligment",
	$page_title_vertical_aligment
);

$show_page_title_text = new MooseElatedField(
	"yesno",
	"show_page_title_text",
	"yes",
	esc_html__( "Enable Page Title Text", 'moose' ),
	esc_html__( "This option will enable Title Text", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_title_text_container, #eltdf_animation_page_title_contaier"
	)
);
$enable_title_container->addChild(
	"show_page_title_text",
	$show_page_title_text
);

$enable_title_text_container = new MooseElatedContainer(
	"enable_title_text_container",
	"show_page_title_text",
	"no"
);
$enable_title_container->addChild(
	"enable_title_text_container",
	$enable_title_text_container
);

$predefined_title_sizes = new MooseElatedField(
	"select",
	"predefined_title_sizes",
	"small",
	esc_html__( "Text Size", 'moose' ),
	esc_html__( "Choose a default Title size", 'moose' ),
	array(
		"small" => esc_html__( "Small", 'moose' ),
		"medium" => esc_html__( "Medium", 'moose' ),
		"large" => esc_html__( "Large", 'moose' )
	)
);
$enable_title_text_container->addChild(
	"predefined_title_sizes",
	$predefined_title_sizes
);

$page_title_position = new MooseElatedField(
	"select",
	"page_title_position",
	"center",
	esc_html__( "Title Text Alignment", 'moose' ),
	esc_html__( "Specify Title text alignment", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$enable_title_text_container->addChild(
	"page_title_position",
	$page_title_position
);

$title_text_shadow = new MooseElatedField(
	"yesno",
	"title_text_shadow",
	"no",
	esc_html__( "Title Text Shadow", 'moose' ),
	esc_html__( "Enabling this option will give Title text a shadow", 'moose' )
);
$enable_title_text_container->addChild(
	"title_text_shadow",
	$title_text_shadow
);

$title_standard_container = new MooseElatedContainer(
	"title_standard_container",
	"title_type",
	"breadcrumbs_title"
);
$enable_title_container->addChild(
	"title_standard_container",
	$title_standard_container
);

//Title like separator with text
$title_like_separator = new MooseElatedField(
	"yesno",
	"title_like_separator",
	"no",
	esc_html__( "Separator Around Title Text", 'moose' ),
	esc_html__( "Enable separator around title", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_title_like_separator_container"
	)
);
$title_standard_container->addChild(
	"title_like_separator",
	$title_like_separator
);

$title_like_separator_container = new MooseElatedContainer(
	"title_like_separator_container",
	"title_like_separator",
	"no"
);
$title_standard_container->addChild(
	"title_like_separator_container",
	$title_like_separator_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Line Styles", 'moose' ),
	esc_html__( "Choose style for separator line", 'moose' )
);
$title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_line_color = new MooseElatedField(
	"colorsimple",
	"title_like_separator_line_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_like_separator_line_color",
	$title_like_separator_line_color
);

$title_like_separator_line_width = new MooseElatedField(
	"textsimple",
	"title_like_separator_line_width",
	"",
	esc_html__( "Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_like_separator_line_width",
	$title_like_separator_line_width
);

$title_like_separator_line_thickness = new MooseElatedField(
	"textsimple",
	"title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_like_separator_line_thickness",
	$title_like_separator_line_thickness
);

$title_like_separator_line_style = new MooseElatedField(
	"selectsimple",
	"title_like_separator_line_style",
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
	"title_like_separator_line_style",
	$title_like_separator_line_style
);

$title_like_separator_margins = new MooseElatedField(
	"text",
	"title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'moose' ),
	esc_html__( "Define left/right margins for title from separator", 'moose' )
);
$title_like_separator_container->addChild(
	"title_like_separator_margins",
	$title_like_separator_margins
);

$title_like_separator_line_dots = new MooseElatedField(
	"yesno",
	"title_like_separator_line_dots",
	"no",
	esc_html__( "Dots on The End of Lines", 'moose' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_title_like_separator_dots_container"
	)
);
$title_like_separator_container->addChild(
	"title_like_separator_line_dots",
	$title_like_separator_line_dots
);

$title_like_separator_dots_container = new MooseElatedContainer(
	"title_like_separator_dots_container",
	"title_like_separator_line_dots",
	"no"
);
$title_like_separator_container->addChild(
	"title_like_separator_dots_container",
	$title_like_separator_dots_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Dots Style", 'moose' ),
	esc_html__( "Choose style for dots", 'moose' )
);
$title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_dots_size = new MooseElatedField(
	"textsimple",
	"title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_like_separator_dots_size",
	$title_like_separator_dots_size
);

$title_like_separator_dots_color = new MooseElatedField(
	"colorsimple",
	"title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_like_separator_dots_color",
	$title_like_separator_dots_color
);

//Subtitle like separator with text
$subtitle_like_separator = new MooseElatedField(
	"yesno",
	"subtitle_like_separator",
	"no",
	esc_html__( "Separator Around Subtitle Text", 'moose' ),
	esc_html__( "Enable separator around subtitle", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_subtitle_like_separator_container"
	)
);
$title_standard_container->addChild(
	"subtitle_like_separator",
	$subtitle_like_separator
);

$subtitle_like_separator_container = new MooseElatedContainer(
	"subtitle_like_separator_container",
	"subtitle_like_separator",
	"no"
);
$title_standard_container->addChild(
	"subtitle_like_separator_container",
	$subtitle_like_separator_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Line Styles", 'moose' ),
	esc_html__( "Choose style for separator line", 'moose' )
);
$subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$subtitle_like_separator_line_color = new MooseElatedField(
	"colorsimple",
	"subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"subtitle_like_separator_line_color",
	$subtitle_like_separator_line_color
);

$subtitle_like_separator_line_width = new MooseElatedField(
	"textsimple",
	"subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"subtitle_like_separator_line_width",
	$subtitle_like_separator_line_width
);

$subtitle_like_separator_line_thickness = new MooseElatedField(
	"textsimple",
	"subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"subtitle_like_separator_line_thickness",
	$subtitle_like_separator_line_thickness
);

$subtitle_like_separator_line_style = new MooseElatedField(
	"selectsimple",
	"subtitle_like_separator_line_style",
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
	"subtitle_like_separator_line_style",
	$subtitle_like_separator_line_style
);

$subtitle_like_separator_margins = new MooseElatedField(
	"text",
	"subtitle_like_separator_margins",
	"",
	esc_html__( "Margins for Subtitle", 'moose' ),
	esc_html__( "Define left/right margins for subtitle from separator", 'moose' )
);
$subtitle_like_separator_container->addChild(
	"subtitle_like_separator_margins",
	$subtitle_like_separator_margins
);

$title_background_color = new MooseElatedField(
	"color",
	"title_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose a background color for Title Area", 'moose' )
);
$enable_title_container->addChild(
	"title_background_color",
	$title_background_color
);

$title_image = new MooseElatedField(
	"image",
	"title_image",
	"",
	esc_html__( "Background Image", 'moose' ),
	esc_html__( "Choose an Image for Title Area", 'moose' )
);
$enable_title_container->addChild(
	"title_image",
	$title_image
);

$responsive_title_image = new MooseElatedField(
	"yesno",
	"responsive_title_image",
	"no",
	esc_html__( "Background Responsive Image", 'moose' ),
	esc_html__( "Enabling this option will make Title background image responsive", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_responsive_title_image_container",
		"dependence_show_on_yes" => ""
	)
);
$enable_title_container->addChild(
	"responsive_title_image",
	$responsive_title_image
);

$responsive_title_image_container = new MooseElatedContainer(
	"responsive_title_image_container",
	"responsive_title_image",
	"yes"
);
$enable_title_container->addChild(
	"responsive_title_image_container",
	$responsive_title_image_container
);
$fixed_title_image = new MooseElatedField(
	"select",
	"fixed_title_image",
	"no",
	esc_html__( "Parallax Title Image", 'moose' ),
	esc_html__( "Enabling this option will make Title image parallax", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'moose' )
	)
);
$responsive_title_image_container->addChild(
	"fixed_title_image",
	$fixed_title_image
);
$title_height = new MooseElatedField(
	"text",
	"title_height",
	"",
	esc_html__( "Title Height (px)", 'moose' ),
	esc_html__( "Set a height for Title Area in pixels", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$responsive_title_image_container->addChild(
	"title_height",
	$title_height
);

$title_overlay_image = new MooseElatedField(
	"image",
	"title_overlay_image",
	"",
	esc_html__( "Pattern Overlay Image", 'moose' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'moose' )
);
$enable_title_container->addChild(
	"title_overlay_image",
	$title_overlay_image
);

$title_separator = new MooseElatedField(
	"yesno",
	"title_separator",
	"no",
	esc_html__( "Show Title Separator", 'moose' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_title_separator_container, #eltdf_animation_page_title_separator_container"
	)
);
$title_standard_container->addChild(
	"title_separator",
	$title_separator
);

$title_separator_container = new MooseElatedContainer(
	"title_separator_container",
	"title_separator",
	"no"
);
$title_standard_container->addChild(
	"title_separator_container",
	$title_separator_container
);

$title_separator_format = new MooseElatedField(
	"select",
	"title_separator_format",
	"normal",
	esc_html__( "Format", 'moose' ),
	esc_html__( "Choose a format (type) of separator", 'moose' ),
	array(
		"normal" => esc_html__( "Normal", 'moose' ),
		"with_icon" => esc_html__( "With Icon", 'moose' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal"           => "#eltdf_separator_with_icon_container, #eltdf_separator_custom_icon_container, #eltdf_separator_all_icons_container",
			"with_custom_icon" => "#eltdf_separator_with_icon_container",
			"with_icon"        => "#eltdf_separator_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#eltdf_separator_with_icon_container, #eltdf_separator_all_icons_container",
			"with_custom_icon" => "#eltdf_separator_custom_icon_container, #eltdf_separator_all_icons_container"
		)
	)
);

$title_separator_container->addChild(
	"title_separator_format",
	$title_separator_format
);

$separator_all_icons_container = new MooseElatedContainer(
	"separator_all_icons_container",
	"title_separator_format",
	"normal"
);
$title_separator_container->addChild(
	"separator_all_icons_container",
	$separator_all_icons_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Icon Position and Margins", 'moose' ),
	esc_html__( "Choose icon position and set left(right) margin", 'moose' )
);
$separator_all_icons_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_position = new MooseElatedField(
	"selectsimple",
	"title_separator_icon_position",
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
	"title_separator_icon_position",
	$title_separator_icon_position
);

$title_separator_icon_margins = new MooseElatedField(
	"textsimple",
	"title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'moose' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'moose' )
);
$row1->addChild(
	"title_separator_icon_margins",
	$title_separator_icon_margins
);

$separator_with_icon_container = new MooseElatedContainer(
	"separator_with_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_custom_icon" )
);
$title_separator_container->addChild(
	"separator_with_icon_container",
	$separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array = array();
$separator_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$separator_icon_collections_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$separator_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_separator_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$separator_icon_pack = new MooseElatedField(
	"select",
	"separator_icon_pack",
	"font_awesome",
	esc_html__( "Separator Icon Pack", 'moose' ),
	esc_html__( "Choose icon pack for separator", 'moose' ),
	$moose_elated_icon_collections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$separator_with_icon_container->addChild(
	"separator_icon_pack",
	$separator_icon_pack
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
		
		$separator_icon_hide_values = $icon_collections_keys;
		$separator_icon_container   = new MooseElatedContainer(
			"separator_icon_" . $collection_object->param . "_container",
			"separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$separator_icon             = new MooseElatedField(
			"select",
			"separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'moose' ),
			esc_html__( "Choose Separator Icon", 'moose' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$separator_icon_container->addChild(
			"separator_icon_" . $collection_object->param,
			$separator_icon
		);
		
		$separator_with_icon_container->addChild(
			"separator_icon_" . $collection_object->param . "_container",
			$separator_icon_container
		);
	}
	
}

$group1 = new MooseElatedGroup(
	esc_html__( "Icon Style", 'moose' ),
	esc_html__( "Choose icon style", 'moose' )
);
$separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_color = new MooseElatedField(
	"colorsimple",
	"title_separator_icon_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose a color of icon for Title separator", 'moose' )
);
$row1->addChild(
	"title_separator_icon_color",
	$title_separator_icon_color
);

$title_separator_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'moose' )
);
$row1->addChild(
	"title_separator_icon_hover_color",
	$title_separator_icon_hover_color
);

$title_separator_icon_custom_size = new MooseElatedField(
	"textsimple",
	"title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'moose' ),
	esc_html__( "Choose size of icon", 'moose' )
);
$row1->addChild(
	"title_separator_icon_custom_size",
	$title_separator_icon_custom_size
);

$title_separator_icon_type = new MooseElatedField(
	"select",
	"title_separator_icon_type",
	"normal",
	esc_html__( "Icon Type", 'moose' ),
	esc_html__( "Choose icon type", 'moose' ),
	array(
		"normal" => esc_html__( "Normal", 'moose' ),
		"circle" => esc_html__( "Circle", 'moose' ),
		"square" => esc_html__( "Square", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "normal" => "#eltdf_title_separator_types_container" ),
		"show"       => array(
			"circle" => "#eltdf_title_separator_types_container",
			"square" => "#eltdf_title_separator_types_container"
		)
	)
);
$separator_with_icon_container->addChild(
	"title_separator_icon_type",
	$title_separator_icon_type
);

$title_separator_types_container = new MooseElatedContainer(
	"title_separator_types_container",
	"title_separator_icon_type",
	"normal"
);
$separator_with_icon_container->addChild(
	"title_separator_types_container",
	$title_separator_types_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Border Style", 'moose' ),
	esc_html__( "Define border style for icon", 'moose' )
);
$title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_border_radius = new MooseElatedField(
	"textsimple",
	"title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "Enter border radius for icon", 'moose' )
);
$row1->addChild(
	"title_separator_icon_border_radius",
	$title_separator_icon_border_radius
);

$title_separator_icon_border_width = new MooseElatedField(
	"textsimple",
	"title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "Enter border width for icon", 'moose' )
);
$row1->addChild(
	"title_separator_icon_border_width",
	$title_separator_icon_border_width
);

$title_separator_icon_border_color = new MooseElatedField(
	"colorsimple",
	"title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Enter border color for icon", 'moose' )
);
$row1->addChild(
	"title_separator_icon_border_color",
	$title_separator_icon_border_color
);

$title_separator_icon_border_hover_color = new MooseElatedField(
	"colorsimple",
	"title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "Enter border color for icon", 'moose' )
);
$row1->addChild(
	"title_separator_icon_border_hover_color",
	$title_separator_icon_border_hover_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Additional Icon Style", 'moose' ),
	esc_html__( "Choose adition icon styling", 'moose' )
);
$title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_icon_shape_size = new MooseElatedField(
	"textsimple",
	"title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_separator_icon_shape_size",
	$title_separator_icon_shape_size
);

$title_separator_icon_background_color = new MooseElatedField(
	"colorsimple",
	"title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_separator_icon_background_color",
	$title_separator_icon_background_color
);

$title_separator_icon_background_hover_color = new MooseElatedField(
	"colorsimple",
	"title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_separator_icon_background_hover_color",
	$title_separator_icon_background_hover_color
);

$separator_custom_icon_container = new MooseElatedContainer(
	"separator_custom_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_icon" )
);
$title_separator_container->addChild(
	"separator_custom_icon_container",
	$separator_custom_icon_container
);

$separator_custom_icon = new MooseElatedField(
	"image",
	"separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'moose' ),
	esc_html__( "Choose custom icon for separator", 'moose' )
);
$separator_custom_icon_container->addChild(
	"separator_custom_icon",
	$separator_custom_icon
);

$title_separator_type = new MooseElatedField(
	"select",
	"title_separator_type",
	"",
	esc_html__( "Type", 'moose' ),
	esc_html__( "Choose a Title separator line style", 'moose' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' )
	)
);
$title_separator_container->addChild(
	"title_separator_type",
	$title_separator_type
);

$title_separator_position = new MooseElatedField(
	"select",
	"title_separator_position",
	"",
	esc_html__( "Position", 'moose' ),
	esc_html__( "Choose a Title separator position", 'moose' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'moose' ),
		"below" => esc_html__( "Below Title", 'moose' )
	)
);
$title_separator_container->addChild(
	"title_separator_position",
	$title_separator_position
);

$title_separator_color = new MooseElatedField(
	"color",
	"title_separator_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose a color for Title separator", 'moose' )
);
$title_separator_container->addChild(
	"title_separator_color",
	$title_separator_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Size", 'moose' ),
	esc_html__( 'Define size for Title separator', 'moose' )
);
$title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_thickness = new MooseElatedField(
	"textsimple",
	"title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_separator_thickness",
	$title_separator_thickness
);

$title_separator_width = new MooseElatedField(
	"textsimple",
	"title_separator_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_separator_width",
	$title_separator_width
);

$group2 = new MooseElatedGroup(
	esc_html__( "Margin", 'moose' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'moose' )
);
$title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_topmargin = new MooseElatedField(
	"textsimple",
	"title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_separator_topmargin",
	$title_separator_topmargin
);

$title_separator_bottommargin = new MooseElatedField(
	"textsimple",
	"title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"title_separator_bottommargin",
	$title_separator_bottommargin
);

$border_top_title_area = new MooseElatedField(
	"yesno",
	"border_top_title_area",
	"no",
	esc_html__( "Top Border", 'moose' ),
	esc_html__( "Enabling this option will display top border on Title Area", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_border_top_title_area_container"
	)
);
$enable_title_container->addChild(
	"border_top_title_area",
	$border_top_title_area
);

$border_top_title_area_container = new MooseElatedContainer(
	"border_top_title_area_container",
	"border_top_title_area",
	"no"
);
$enable_title_container->addChild(
	"border_top_title_area_container",
	$border_top_title_area_container
);

$enable_title_border_grid = new MooseElatedField(
	"yesno",
	"enable_title_border_grid",
	"no",
	esc_html__( "Enable Border in Grid", 'moose' ),
	esc_html__( "This option will show title top border in grid", 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => ''
	)
);
$border_top_title_area_container->addChild(
	"enable_title_border_grid",
	$enable_title_border_grid
);

$border_top_title_area_width = new MooseElatedField(
	"text",
	"border_top_title_area_width",
	"",
	esc_html__( "Top Border Width (px)", 'moose' ),
	esc_html__( "Choose a width for Title Area top border Note: If width has not been set, border top will not be displayed", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$border_top_title_area_container->addChild(
	"border_top_title_area_width",
	$border_top_title_area_width
);
$border_top_title_area_color = new MooseElatedField(
	"color",
	"border_top_title_area_color",
	"",
	esc_html__( "Top Border Color", 'moose' ),
	esc_html__( "Choose a color for Title Area top border", 'moose' )
);
$border_top_title_area_container->addChild(
	"border_top_title_area_color",
	$border_top_title_area_color
);

$border_bottom_title_area = new MooseElatedField(
	"yesno",
	"border_bottom_title_area",
	"yes",
	esc_html__( "Bottom Border", 'moose' ),
	esc_html__( "Enabling this option will display bottom border on Title Area", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_border_bottom_title_area_container"
	)
);
$enable_title_container->addChild(
	"border_bottom_title_area",
	$border_bottom_title_area
);

$border_bottom_title_area_container = new MooseElatedContainer(
	"border_bottom_title_area_container",
	"border_bottom_title_area",
	"no"
);
$enable_title_container->addChild(
	"border_bottom_title_area_container",
	$border_bottom_title_area_container
);

$enable_title_border_grid = new MooseElatedField(
	"yesno",
	"enable_title_border_grid",
	"no",
	esc_html__( "Enable Border in Grid", 'moose' ),
	esc_html__( "This option will show title bottom border in grid", 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => ''
	)
);
$border_bottom_title_area_container->addChild(
	"enable_title_border_grid",
	$enable_title_border_grid
);

$border_bottom_title_area_width = new MooseElatedField(
	"text",
	"border_bottom_title_area_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'moose' ),
	esc_html__( "Choose a width for Title Area bottom border Note: If width has not been set, border bottom will not be displayed", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_width",
	$border_bottom_title_area_width
);
$border_bottom_title_area_color = new MooseElatedField(
	"color",
	"border_bottom_title_area_color",
	"",
	esc_html__( "Bottom Border Color", 'moose' ),
	esc_html__( "Choose a color for Title Area bottom border", 'moose' )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_color",
	$border_bottom_title_area_color
);

$enable_breadcrumbs = new MooseElatedField(
	"yesno",
	"enable_breadcrumbs",
	"yes",
	esc_html__( "Enable Breadcrumbs", 'moose' ),
	esc_html__( "This option will display Breadcrumbs in Title Area", 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_animation_page_title_breadcrumbs_container'
	)
);
$enable_title_container->addChild(
	"enable_breadcrumbs",
	$enable_breadcrumbs
);

$title_graphics = new MooseElatedField(
	"image",
	"title_graphics",
	"",
	esc_html__( "Graphics", 'moose' ),
	esc_html__( "Choose graphics", 'moose' )
);
$title_standard_container->addChild(
	"title_graphics",
	$title_graphics
);

$group1 = new MooseElatedGroup(
	esc_html__( "Title Area Content Style", 'moose' ),
	esc_html__( 'Define style for Title Area Content', 'moose' )
);
$enable_title_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_content_background_color = new MooseElatedField(
	"colorsimple",
	"title_content_background_color",
	"",
	esc_html__( "Title Content Background Color", 'moose' ),
	esc_html__( "Background color for title content", 'moose' )
);
$row1->addChild(
	"title_content_background_color",
	$title_content_background_color
);

$title_content_background_opacity = new MooseElatedField(
	"textsimple",
	"title_content_background_opacity",
	"",
	esc_html__( "Title Content Background Opacity", 'moose' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'moose' )
);
$row1->addChild(
	"title_content_background_opacity",
	$title_content_background_opacity
);

$title_content_in_grid = new MooseElatedField(
	"yesno",
	"title_content_in_grid",
	"yes",
	esc_html__( "Title Area Content In Grid", 'moose' ),
	esc_html__( "This option will show title area content in grid", 'moose' )
);
$enable_title_container->addChild(
	"title_content_in_grid",
	$title_content_in_grid
);

$title_content_shadows = new MooseElatedField(
	'yesno',
	'title_content_shadows',
	'no',
	esc_html__( 'Show Title Content Area Shadows', 'moose' ),
	esc_html__( 'Enabling this option will show shadows on title content area', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_title_content_shadows_container'
	)
);
$enable_title_container->addChild(
	'title_content_shadows',
	$title_content_shadows
);

$title_content_shadows_container = new MooseElatedContainer(
	'title_content_shadows_container',
	'title_content_shadows',
	'no'
);
$enable_title_container->addChild(
	'title_content_shadows_container',
	$title_content_shadows_container
);

$group7 = new MooseElatedGroup(
	esc_html__( 'Title Content Area Shadows', 'moose' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'moose' )
);
$title_content_shadows_container->addChild(
	'group7',
	$group7
);

$row1 = new MooseElatedRow();
$group7->addChild(
	'row1',
	$row1
);

$title_content_shadow_horizontal_shadow = new MooseElatedField(
	'textsimple',
	'title_content_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'moose' )
);
$row1->addChild(
	'title_content_shadow_horizontal_shadow',
	$title_content_shadow_horizontal_shadow
);

$title_content_shadow_vertical_shadow = new MooseElatedField(
	'textsimple',
	'title_content_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'moose' )
);
$row1->addChild(
	'title_content_shadow_vertical_shadow',
	$title_content_shadow_vertical_shadow
);

$title_content_shadow_blur_distance = new MooseElatedField(
	'textsimple',
	'title_content_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'moose' )
);
$row1->addChild(
	'title_content_shadow_blur_distance',
	$title_content_shadow_blur_distance
);

$title_content_shadow_shadow_size = new MooseElatedField(
	'textsimple',
	'title_content_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'moose' )
);
$row1->addChild(
	'title_content_shadow_shadow_size',
	$title_content_shadow_shadow_size
);

$row2 = new MooseElatedRow( true );
$group7->addChild(
	'row2',
	$row2
);

$title_content_shadow_shadow_color = new MooseElatedField(
	'colorsimple',
	'title_content_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'moose' )
);
$row2->addChild(
	'title_content_shadow_shadow_color',
	$title_content_shadow_shadow_color
);

$group6 = new MooseElatedGroup(
	esc_html__( "Title Area Content Padding", 'moose' ),
	esc_html__( "Define padding for title area content", 'moose' )
);
$enable_title_container->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$title_content_span_top_padding = new MooseElatedField(
	"textsimple",
	"title_content_span_top_padding",
	"",
	esc_html__( "Top Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"title_content_span_top_padding",
	$title_content_span_top_padding
);

$title_content_span_right_padding = new MooseElatedField(
	"textsimple",
	"title_content_span_right_padding",
	"",
	esc_html__( "Right Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"title_content_span_right_padding",
	$title_content_span_right_padding
);

$title_content_span_bottom_padding = new MooseElatedField(
	"textsimple",
	"title_content_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"title_content_span_bottom_padding",
	$title_content_span_bottom_padding
);

$title_content_span_left_padding = new MooseElatedField(
	"textsimple",
	"title_content_span_left_padding",
	"",
	esc_html__( "Left Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"title_content_span_left_padding",
	$title_content_span_left_padding
);

$group2 = new MooseElatedGroup(
	esc_html__( "Title Style", 'moose' ),
	esc_html__( 'Define style for Title', 'moose' )
);
$enable_title_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$title_span_background_color = new MooseElatedField(
	"colorsimple",
	"title_span_background_color",
	"",
	esc_html__( "Title Background Color", 'moose' ),
	esc_html__( "Background color for title", 'moose' )
);
$row1->addChild(
	"title_span_background_color",
	$title_span_background_color
);

$title_span_background_opacity = new MooseElatedField(
	"textsimple",
	"title_span_background_opacity",
	"",
	esc_html__( "Title Background Opacity", 'moose' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'moose' )
);
$row1->addChild(
	"title_span_background_opacity",
	$title_span_background_opacity
);

$group3 = new MooseElatedGroup(
	esc_html__( "Title Padding", 'moose' ),
	esc_html__( 'Define padding for Title', 'moose' )
);
$enable_title_container->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$title_span_top_padding = new MooseElatedField(
	"textsimple",
	"title_span_top_padding",
	"",
	esc_html__( "Top Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"title_span_top_padding",
	$title_span_top_padding
);

$title_span_right_padding = new MooseElatedField(
	"textsimple",
	"title_span_right_padding",
	"",
	esc_html__( "Right Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"title_span_right_padding",
	$title_span_right_padding
);

$title_span_bottom_padding = new MooseElatedField(
	"textsimple",
	"title_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"title_span_bottom_padding",
	$title_span_bottom_padding
);

$title_span_left_padding = new MooseElatedField(
	"textsimple",
	"title_span_left_padding",
	"",
	esc_html__( "Left Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"title_span_left_padding",
	$title_span_left_padding
);

$subtitle_position = new MooseElatedField(
	"select",
	"subtitle_position",
	"below_title",
	esc_html__( "Subtitle Position", 'moose' ),
	esc_html__( "Choose a Subtitle position", 'moose' ),
	array(
		"below_title" => esc_html__( "Below Title", 'moose' ),
		"above_title" => esc_html__( "Above Title", 'moose' ),
		"next_to_title" => esc_html__( "Next to Title", 'moose' )
	)
);
$enable_title_container->addChild(
	"subtitle_position",
	$subtitle_position
);

$subtitle_text_size = new MooseElatedField(
	"select",
	"subtitle_text_size",
	"medium_subtitle",
	esc_html__( "Subtitle Text Size", 'moose' ),
	esc_html__( "Size for subtitle text", 'moose' ),
	array(
		'small_subtitle' => esc_html__( 'Small', 'moose' ),
		'medium_subtitle' => esc_html__( 'Medium', 'moose' ),
		'large_subtitle' => esc_html__( 'Large', 'moose' )
	)
);
$enable_title_container->addChild(
	"subtitle_text_size",
	$subtitle_text_size
);

$group4 = new MooseElatedGroup(
	esc_html__( "Subtitle Style", 'moose' ),
	esc_html__( 'Define style for subtitle', 'moose' )
);
$enable_title_container->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$subtitle_span_background_color = new MooseElatedField(
	"colorsimple",
	"subtitle_span_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'moose' ),
	esc_html__( "Background color for subtitle", 'moose' )
);
$row1->addChild(
	"subtitle_span_background_color",
	$subtitle_span_background_color
);

$subtitle_span_background_opacity = new MooseElatedField(
	"textsimple",
	"subtitle_span_background_opacity",
	"",
	esc_html__( "Subtitle Background Opacity", 'moose' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'moose' )
);
$row1->addChild(
	"subtitle_span_background_opacity",
	$subtitle_span_background_opacity
);

$group5 = new MooseElatedGroup(
	esc_html__( "Subtitle Padding", 'moose' ),
	esc_html__( 'Define padding for subtitle', 'moose' )
);
$enable_title_container->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$subtitle_span_top_padding = new MooseElatedField(
	"textsimple",
	"subtitle_span_top_padding",
	"",
	esc_html__( "Top Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"subtitle_span_top_padding",
	$subtitle_span_top_padding
);

$subtitle_span_right_padding = new MooseElatedField(
	"textsimple",
	"subtitle_span_right_padding",
	"",
	esc_html__( "Right Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"subtitle_span_right_padding",
	$subtitle_span_right_padding
);

$subtitle_span_bottom_padding = new MooseElatedField(
	"textsimple",
	"subtitle_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"subtitle_span_bottom_padding",
	$subtitle_span_bottom_padding
);

$subtitle_span_left_padding = new MooseElatedField(
	"textsimple",
	"subtitle_span_left_padding",
	"",
	esc_html__( "Left Padding", 'moose' ),
	esc_html__( "This is some description.", 'moose' )
);
$row1->addChild(
	"subtitle_span_left_padding",
	$subtitle_span_left_padding
);

$panel9 = new MooseElatedPanel(
	esc_html__( 'Title Animations', 'moose' ),
	'title_animations'
);
$titlePage->addChild(
	'panel9',
	$panel9
);

//Whole title content animation
$page_title_whole_content_animations = new MooseElatedField(
	'yesno',
	'page_title_whole_content_animations',
	'no',
	esc_html__( 'Enable Whole Title Content Animation', 'moose' ),
	esc_html__( 'This option will enable whole title content animation', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_whole_content_animations_container'
	)
);
$panel9->addChild(
	'page_title_whole_content_animations',
	$page_title_whole_content_animations
);

$page_title_whole_content_animations_container = new MooseElatedContainer(
	'page_title_whole_content_animations_container',
	'page_title_whole_content_animations',
	'no'
);
$panel9->addChild(
	'page_title_whole_content_animations_container',
	$page_title_whole_content_animations_container
);

$page_title_whole_content_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_start',
	$page_title_whole_content_animations_data_start
);

$row1 = new MooseElatedRow();
$page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_whole_content_data_start = new MooseElatedField(
	'textsimple',
	'page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_title_whole_content_data_start',
	$page_title_whole_content_data_start
);

$page_title_whole_content_start_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_title_whole_content_start_custom_style',
	$page_title_whole_content_start_custom_style
);

$page_title_whole_content_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_end',
	$page_title_whole_content_animations_data_end
);

$row2 = new MooseElatedRow();
$page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_whole_content_data_end = new MooseElatedField(
	'textsimple',
	'page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_title_whole_content_data_end',
	$page_title_whole_content_data_end
);

$page_title_whole_content_end_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_title_whole_content_end_custom_style',
	$page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_title_contaier = new MooseElatedContainerNoStyle(
	'animation_page_title_contaier',
	'show_page_title_text',
	'no'
);
$panel9->addChild(
	'animation_page_title_contaier',
	$animation_page_title_contaier
);

$page_title_animations = new MooseElatedField(
	'yesno',
	'page_title_animations',
	'no',
	esc_html__( 'Enable Page Title Animations', 'moose' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_animations_container'
	)
);
$animation_page_title_contaier->addChild(
	'page_title_animations',
	$page_title_animations
);

$page_title_animations_container = new MooseElatedContainer(
	'page_title_animations_container',
	'page_title_animations',
	'no'
);
$animation_page_title_contaier->addChild(
	'page_title_animations_container',
	$page_title_animations_container
);

$page_title_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_start',
	$page_title_animations_data_start
);

$row1 = new MooseElatedRow();
$page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_data_start = new MooseElatedField(
	'textsimple',
	'page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_title_data_start',
	$page_title_data_start
);

$page_title_start_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_title_start_custom_style',
	$page_title_start_custom_style
);

$page_title_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_end',
	$page_title_animations_data_end
);

$row2 = new MooseElatedRow();
$page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_data_end = new MooseElatedField(
	'textsimple',
	'page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_title_data_end',
	$page_title_data_end
);

$page_title_end_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_title_end_custom_style',
	$page_title_end_custom_style
);

//Title Separator Animations
$animation_page_title_separator_container = new MooseElatedContainerNoStyle(
	'animation_page_title_separator_container',
	'title_separator',
	'no'
);
$panel9->addChild(
	'animation_page_title_separator_container',
	$animation_page_title_separator_container
);

$page_title_separator_animations = new MooseElatedField(
	'yesno',
	'page_title_separator_animations',
	'no',
	esc_html__( 'Enable Page Separator Title Animations', 'moose' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_separator_animations_container'
	)
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations',
	$page_title_separator_animations
);

$page_title_separator_animations_container = new MooseElatedContainer(
	'page_title_separator_animations_container',
	'page_title_separator_animations',
	'no'
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations_container',
	$page_title_separator_animations_container
);

$page_title_separator_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_start',
	$page_title_separator_animations_data_start
);

$row1 = new MooseElatedRow();
$page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_separator_data_start = new MooseElatedField(
	'textsimple',
	'page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_title_separator_data_start',
	$page_title_separator_data_start
);

$page_title_separator_start_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_title_separator_start_custom_style',
	$page_title_separator_start_custom_style
);

$page_title_separator_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_end',
	$page_title_separator_animations_data_end
);

$row2 = new MooseElatedRow();
$page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_separator_data_end = new MooseElatedField(
	'textsimple',
	'page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_title_separator_data_end',
	$page_title_separator_data_end
);

$page_title_separator_end_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_title_separator_end_custom_style',
	$page_title_separator_end_custom_style
);

//Subtitle Animations
$page_subtitle_animations = new MooseElatedField(
	'yesno',
	'page_subtitle_animations',
	'no',
	esc_html__( 'Enable Page Subtitle Animations', 'moose' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_subtitle_animations_container'
	)
);
$panel9->addChild(
	'page_subtitle_animations',
	$page_subtitle_animations
);

$page_subtitle_animations_container = new MooseElatedContainer(
	'page_subtitle_animations_container',
	'page_subtitle_animations',
	'no'
);
$panel9->addChild(
	'page_subtitle_animations_container',
	$page_subtitle_animations_container
);

$page_subtitle_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_start',
	$page_subtitle_animations_data_start
);

$row1 = new MooseElatedRow();
$page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_subtitle_data_start = new MooseElatedField(
	'textsimple',
	'page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_subtitle_data_start',
	$page_subtitle_data_start
);

$page_subtitle_start_custom_style = new MooseElatedField(
	'textareasimple',
	'page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_subtitle_start_custom_style',
	$page_subtitle_start_custom_style
);

$page_subtitle_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_end',
	$page_subtitle_animations_data_end
);

$row2 = new MooseElatedRow();
$page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_subtitle_data_end = new MooseElatedField(
	'textsimple',
	'page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_subtitle_data_end',
	$page_subtitle_data_end
);

$page_subtitle_end_custom_style = new MooseElatedField(
	'textareasimple',
	'page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_subtitle_end_custom_style',
	$page_subtitle_end_custom_style
);

//Graphic Animations
$page_title_graphic_animations = new MooseElatedField(
	'yesno',
	'page_title_graphic_animations',
	'no',
	esc_html__( 'Enable Page Title Graphic Animations', 'moose' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_graphic_animations_container'
	)
);
$panel9->addChild(
	'page_title_graphic_animations',
	$page_title_graphic_animations
);

$page_title_graphic_animations_container = new MooseElatedContainer(
	'page_title_graphic_animations_container',
	'page_title_graphic_animations',
	'no'
);
$panel9->addChild(
	'page_title_graphic_animations_container',
	$page_title_graphic_animations_container
);

$page_title_graphic_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_title_graphic_animations_container->addChild(
	'page_title_graphic_animations_data_start',
	$page_title_graphic_animations_data_start
);

$row1 = new MooseElatedRow();
$page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_graphic_data_start = new MooseElatedField(
	'textsimple',
	'page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_title_graphic_data_start',
	$page_title_graphic_data_start
);

$page_title_graphic_start_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_title_graphic_start_custom_style',
	$page_title_graphic_start_custom_style
);

$page_title_graphic_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_title_graphic_animations_container->addChild(
	'$page_title_graphic_animations_data_end',
	$page_title_graphic_animations_data_end
);

$row2 = new MooseElatedRow();
$page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_graphic_data_end = new MooseElatedField(
	'textsimple',
	'page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_title_graphic_data_end',
	$page_title_graphic_data_end
);

$page_title_graphic_end_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_title_graphic_end_custom_style',
	$page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_title_breadcrumbs_container = new MooseElatedContainerNoStyle(
	'animation_page_title_breadcrumbs_container',
	'enable_breadcrumbs',
	'no'
);
$panel9->addChild(
	'animation_page_title_breadcrumbs_container',
	$animation_page_title_breadcrumbs_container
);

$page_title_breadcrumbs_animations = new MooseElatedField(
	'yesno',
	'page_title_breadcrumbs_animations',
	'no',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'moose' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_breadcrumbs_animations_container'
	)
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations',
	$page_title_breadcrumbs_animations
);

$page_title_breadcrumbs_animations_container = new MooseElatedContainer(
	'page_title_breadcrumbs_animations_container',
	'page_title_breadcrumbs_animations',
	'no'
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations_container',
	$page_title_breadcrumbs_animations_container
);

$page_title_breadcrumbs_animations_data_start = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'moose' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'moose' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_start',
	$page_title_breadcrumbs_animations_data_start
);

$row1 = new MooseElatedRow();
$page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_breadcrumbs_data_start = new MooseElatedField(
	'textsimple',
	'page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row1->addChild(
	'page_title_breadcrumbs_data_start',
	$page_title_breadcrumbs_data_start
);

$page_title_breadcrumbs_start_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row1->addChild(
	'page_title_breadcrumbs_start_custom_style',
	$page_title_breadcrumbs_start_custom_style
);

$page_title_breadcrumbs_animations_data_end = new MooseElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'moose' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'moose' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_end',
	$page_title_breadcrumbs_animations_data_end
);

$row2 = new MooseElatedRow();
$page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_breadcrumbs_data_end = new MooseElatedField(
	'textsimple',
	'page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'moose' )
);
$row2->addChild(
	'page_title_breadcrumbs_data_end',
	$page_title_breadcrumbs_data_end
);

$page_title_breadcrumbs_end_custom_style = new MooseElatedField(
	'textareasimple',
	'page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'moose' )
);
$row2->addChild(
	'page_title_breadcrumbs_end_custom_style',
	$page_title_breadcrumbs_end_custom_style
);