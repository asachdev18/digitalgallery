<?php

$woocommercePage = new MooseElatedAdminPage(
	"19",
	esc_html__( "WooCommerce", 'moose' ),
	"fa fa-shopping-cart"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"woocommerce",
	$woocommercePage
);

// General
$panel3 = new MooseElatedPanel(
	esc_html__( "General", 'moose' ),
	"general_panel"
);
$woocommercePage->addChild(
	"panel3",
	$panel3
);

$text_input_field_subtitle = new MooseElatedTitle(
	"text_input_field_subtitle",
	esc_html__( "Text Input Fields", 'moose' )
);
$panel3->addChild(
	"text_input_field_subtitle",
	$text_input_field_subtitle
);

$group1 = new MooseElatedGroup(
	esc_html__( "Text Input Fields Text Style", 'moose' ),
	esc_html__( "Define text input fields style in Cart, Checkout, My Account", 'moose' )
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

$woo_input_text_color = new MooseElatedField(
	"colorsimple",
	"woo_input_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_input_text_color",
	$woo_input_text_color
);

$woo_input_focus_text_color = new MooseElatedField(
	"colorsimple",
	"woo_input_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_input_focus_text_color",
	$woo_input_focus_text_color
);

$group16 = new MooseElatedGroup(
	esc_html__( "Text Input Fields Background", 'moose' ),
	esc_html__( "Define text input fields background", 'moose' )
);
$panel3->addChild(
	"group16",
	$group16
);

$row1 = new MooseElatedRow();
$group16->addChild(
	"row1",
	$row1
);

$woo_input_background_color = new MooseElatedField(
	"colorsimple",
	"woo_input_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_input_background_color",
	$woo_input_background_color
);

$woo_input_focus_background_color = new MooseElatedField(
	"colorsimple",
	"woo_input_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_input_focus_background_color",
	$woo_input_focus_background_color
);

$group17 = new MooseElatedGroup(
	esc_html__( "Text Input Fields Border", 'moose' ),
	esc_html__( "Define text input fields border", 'moose' )
);
$panel3->addChild(
	"group17",
	$group17
);

$row1 = new MooseElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$woo_input_border_color = new MooseElatedField(
	"colorsimple",
	"woo_input_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_input_border_color",
	$woo_input_border_color
);

$woo_input_focus_border_color = new MooseElatedField(
	"colorsimple",
	"woo_input_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_input_focus_border_color",
	$woo_input_focus_border_color
);

$woo_input_border_width = new MooseElatedField(
	"textsimple",
	"woo_input_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_input_border_width",
	$woo_input_border_width
);

//Button

$button_all_shop_pages = new MooseElatedTitle(
	"button_all_shop_pages",
	esc_html__( "Buttons", 'moose' )
);
$panel3->addChild(
	"button_all_shop_pages",
	$button_all_shop_pages
);

$group8 = new MooseElatedGroup(
	esc_html__( "Button Text Style", 'moose' ),
	esc_html__( "Define button text style for all shop pages", 'moose' )
);
$panel3->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_color = new MooseElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_color",
	$woo_products_list_add_to_cart_color
);

$woo_products_list_add_to_cart_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_font_size",
	$woo_products_list_add_to_cart_font_size
);

$woo_products_list_add_to_cart_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_line_height",
	$woo_products_list_add_to_cart_line_height
);

$woo_products_list_add_to_cart_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_products_list_add_to_cart_text_transform",
	$woo_products_list_add_to_cart_text_transform
);

$row2 = new MooseElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);

$woo_products_list_add_to_cart_font_family = new MooseElatedField(
	"fontsimple",
	"woo_products_list_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_family",
	$woo_products_list_add_to_cart_font_family
);

$woo_products_list_add_to_cart_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_style",
	$woo_products_list_add_to_cart_font_style
);

$woo_products_list_add_to_cart_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_weight",
	$woo_products_list_add_to_cart_font_weight
);

$woo_products_list_add_to_cart_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_letter_spacing",
	$woo_products_list_add_to_cart_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group8->addChild(
	"row3",
	$row3
);

$woo_products_list_add_to_cart_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_list_add_to_cart_hover_color",
	$woo_products_list_add_to_cart_hover_color
);

$woo_products_list_add_to_cart_padding = new MooseElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_padding",
	"",
	esc_html__( "Padding Left/Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_list_add_to_cart_padding",
	$woo_products_list_add_to_cart_padding
);

$row4 = new MooseElatedRow( true );
$group8->addChild(
	"row4",
	$row4
);

$group14 = new MooseElatedGroup(
	esc_html__( "Button Background", 'moose' ),
	esc_html__( "Define button background", 'moose' )
);
$panel3->addChild(
	"group14",
	$group14
);

$row1 = new MooseElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_background_color",
	$woo_products_list_add_to_cart_background_color
);

$woo_products_list_add_to_cart_background_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_background_hover_color",
	$woo_products_list_add_to_cart_background_hover_color
);

$group15 = new MooseElatedGroup(
	esc_html__( "Button Border", 'moose' ),
	esc_html__( "Define button border", 'moose' )
);
$panel3->addChild(
	"group15",
	$group15
);

$row1 = new MooseElatedRow();
$group15->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_border_color = new MooseElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_color",
	$woo_products_list_add_to_cart_border_color
);

$woo_products_list_add_to_cart_border_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_hover_color",
	$woo_products_list_add_to_cart_border_hover_color
);

$woo_products_list_add_to_cart_border_width = new MooseElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_width",
	$woo_products_list_add_to_cart_border_width
);

$woo_products_list_add_to_cart_border_radius = new MooseElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_radius",
	$woo_products_list_add_to_cart_border_radius
);

$wocommerce_messages_style_title = new MooseElatedTitle(
	"wocommerce_messages_style_title",
	esc_html__( "Message", 'moose' )
);
$panel3->addChild(
	"wocommerce_messages_style_title",
	$wocommerce_messages_style_title
);

$group9 = new MooseElatedGroup(
	esc_html__( "Message Box Style", 'moose' ),
	esc_html__( "Define message box style for all shop pages", 'moose' )
);
$panel3->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$woo_message_box_text_color = new MooseElatedField(
	"colorsimple",
	"woo_message_box_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_message_box_text_color",
	$woo_message_box_text_color
);

$woo_message_box_font_size = new MooseElatedField(
	"textsimple",
	"woo_message_box_font_size",
	"",
	esc_html__( "Font Size", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_message_box_font_size",
	$woo_message_box_font_size
);

$woo_message_box_background_color = new MooseElatedField(
	"colorsimple",
	"woo_message_box_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_message_box_background_color",
	$woo_message_box_background_color
);

$woo_message_box_border_color = new MooseElatedField(
	"colorsimple",
	"woo_message_box_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_message_box_border_color",
	$woo_message_box_border_color
);

//Product list styles

$panel1 = new MooseElatedPanel(
	esc_html__( "Product List", 'moose' ),
	"product_list_panel"
);
$woocommercePage->addChild(
	"panel1",
	$panel1
);

//Define position of content on product list page

$woocommerce_product_list_content_position = new MooseElatedField(
	"select",
	"woocommerce_product_list_content_position",
	"content_above_product_list",
	esc_html__( "Content Position", 'moose' ),
	esc_html__( "Choose content position for product list when sidebar is enabled.", 'moose' ),
	array(
		"content_above_product_list" => esc_html__( "Content Above Product List", 'moose' ),
		"content_above_product_list_and_sidebar" => esc_html__( "Content Above Product List and Sidebar", 'moose' )
	)
);

$panel1->addChild(
	"woocommerce_product_list_content_position",
	$woocommerce_product_list_content_position
);

//Use full-width template

$woo_products_enable_full_width_template = new MooseElatedField(
	"yesno",
	"woo_products_enable_full_width_template",
	"no",
	esc_html__( "Enable Full Width Template", 'moose' ),
	esc_html__( "Enabling this option will enable full width template for shop page", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_full_width_template_container"
	)
);
$panel1->addChild(
	"woo_products_enable_full_width_template",
	$woo_products_enable_full_width_template
);

$enable_full_width_template_container = new MooseElatedContainer(
	"enable_full_width_template_container",
	"woo_products_enable_full_width_template",
	"no"
);
$panel1->addChild(
	"enable_full_width_template_container",
	$enable_full_width_template_container
);

$woo_full_width_margin_left = new MooseElatedField(
	"text",
	"woo_full_width_margin_left",
	"",
	esc_html__( "Full Width Template Left Margin", 'moose' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$enable_full_width_template_container->addChild(
	"woo_full_width_margin_left",
	$woo_full_width_margin_left
);

$woo_full_width_margin_right = new MooseElatedField(
	"text",
	"woo_full_width_margin_right",
	"",
	esc_html__( "Full Width Template Right Margin", 'moose' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$enable_full_width_template_container->addChild(
	"woo_full_width_margin_right",
	$woo_full_width_margin_right
);

//Use full-width template

$woo_products_disable_space_between_products = new MooseElatedField(
	"yesno",
	"woo_products_disable_space_between_products",
	"no",
	esc_html__( "Disable Space Between Products", 'moose' ),
	esc_html__( "Enabling this option will disable space between products", 'moose' )
);
$panel1->addChild(
	"woo_products_disable_space_between_products",
	$woo_products_disable_space_between_products
);

//Product per page

$woo_products_per_page = new MooseElatedField(
	"text",
	"woo_products_per_page",
	"",
	esc_html__( "Number Of Product Per Page", 'moose' ),
	esc_html__( "Set number of products on shop page.", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_per_page",
	$woo_products_per_page
);

$woo_products_list_margin_top = new MooseElatedField(
	"text",
	"woo_products_list_margin_top",
	"",
	esc_html__( "Product List Margin Top ", 'moose' ),
	esc_html__( "Set margin top for product list.", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_list_margin_top",
	$woo_products_list_margin_top
);

//Products list type

$woo_products_enable_item_borders = new MooseElatedField(
	"yesno",
	"woo_products_enable_item_borders",
	"no",
	esc_html__( "Enable Borders Around Item", 'moose' ),
	esc_html__( "Enable this option and choose to display borders around item's box or image", 'moose' )
);
$panel1->addChild(
	"woo_products_enable_item_borders",
	$woo_products_enable_item_borders
);

$woo_products_item_borders_container = new MooseElatedContainer(
	"woo_products_item_borders_container",
	"woo_products_enable_item_borders",
	"no"
);
$panel1->addChild(
	"woo_products_item_borders_container",
	$woo_products_item_borders_container
);

$woo_products_item_borders_style = new MooseElatedField(
	"select",
	"woo_products_item_borders_style",
	"around_item",
	esc_html__( "Display Borders Around", 'moose' ),
	esc_html__( "Choose to display borders around the item's box or image", 'moose' ),
	array(
		"around_item" => esc_html__( "Item Box", 'moose' ),
		"around_image" => esc_html__( "Image", 'moose' )
	
	)
);
$panel1->addChild(
	"woo_products_item_borders_style",
	$woo_products_item_borders_style
);

$woo_products_item_borders_width = new MooseElatedField(
	"text",
	"woo_products_item_borders_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "Please insert width for the item borders", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_item_borders_width",
	$woo_products_item_borders_width
);

$woo_products_item_borders_color = new MooseElatedField(
	"color",
	"woo_products_item_borders_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose a color for the item borders", 'moose' )
);
$panel1->addChild(
	"woo_products_item_borders_color",
	$woo_products_item_borders_color
);

$woo_products_item_borders_hover_color = new MooseElatedField(
	"color",
	"woo_products_item_borders_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "Choose a color for the item borders", 'moose' )
);
$panel1->addChild(
	"woo_products_item_borders_hover_color",
	$woo_products_item_borders_hover_color
);

$woo_products_enable_lighbox_icon = new MooseElatedField(
	"yesno",
	"woo_products_enable_lighbox_icon",
	"yes",
	esc_html__( "Enable Lightbox Icon", 'moose' ),
	esc_html__( "Enabling this option will show lighbox icon on product list", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_woo_products_item_lightbox_icon_container"
	)
);
$panel1->addChild(
	"woo_products_enable_lighbox_icon",
	$woo_products_enable_lighbox_icon
);

$woo_products_item_lightbox_icon_container = new MooseElatedContainer(
	"woo_products_item_lightbox_icon_container",
	"woo_products_enable_lighbox_icon",
	"no"
);
$panel1->addChild(
	"woo_products_item_lightbox_icon_container",
	$woo_products_item_lightbox_icon_container
);

$woo_products_lightbox_icon_color = new MooseElatedField(
	"color",
	"woo_products_lightbox_icon_color",
	"",
	esc_html__( "Lightbox Icon Color", 'moose' ),
	esc_html__( "Define color for lightbox icon", 'moose' )
);
$woo_products_item_lightbox_icon_container->addChild(
	"woo_products_lightbox_icon_color",
	$woo_products_lightbox_icon_color
);

$woo_products_hover_list_type = new MooseElatedField(
	"select",
	"woo_products_hover_list_type",
	"type1",
	esc_html__( "Product Hover Style", 'moose' ),
	esc_html__( "Choose hover style for products in products list", 'moose' ),
	array(
		"hover_type1" => esc_html__( "Add to cart button", 'moose' ),
		"hover_type2" => esc_html__( "Add to cart icon", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"hover_type2" => "#eltdf_woo_products_enable_button_icons_container"
		),
		"show"       => array(
			"hover_type1" => "#eltdf_woo_products_enable_button_icons_container"
		)
	)
);
$panel1->addChild(
	"woo_products_hover_list_type",
	$woo_products_hover_list_type
);

$woo_products_enable_button_icons_container = new MooseElatedContainer(
	"woo_products_enable_button_icons_container",
	"woo_products_hover_list_type",
	""
);
$panel1->addChild(
	"woo_products_enable_button_icons_container",
	$woo_products_enable_button_icons_container
);

$woo_products_enable_button_icons = new MooseElatedField(
	"yesno",
	"woo_products_enable_button_icons",
	"no",
	esc_html__( "Enable Icons in Add to Cart Button", 'moose' ),
	esc_html__( "Enabling this option will display icons in Add to Cart button", 'moose' )
);
$woo_products_enable_button_icons_container->addChild(
	"woo_products_enable_button_icons",
	$woo_products_enable_button_icons
);

$woo_products_list_number = new MooseElatedField(
	"select",
	"woo_products_list_number",
	"columns-3",
	esc_html__( "Product List and Related Products Columns Number", 'moose' ),
	esc_html__( "Choose number of columns for product listing and related products on single product", 'moose' ),
	array(
		"columns-3" => esc_html__( "3 Columns (2 with sidebar)", 'moose' ),
		"columns-4" => esc_html__( "4 Columns (3 with sidebar)", 'moose' )
	)
);

$panel1->addChild(
	"woo_products_list_number",
	$woo_products_list_number
);

//Product box
$woo_products_item_info_box_background_color = new MooseElatedField(
	"color",
	"woo_products_item_info_box_background_color",
	"",
	esc_html__( "Product Info Background Color", 'moose' ),
	esc_html__( "Define background color for product info box", 'moose' )
);
$panel1->addChild(
	"woo_products_item_info_box_background_color",
	$woo_products_item_info_box_background_color
);

$woo_products_item_info_box_padding = new MooseElatedField(
	"text",
	"woo_products_item_info_box_padding",
	"",
	esc_html__( "Product Info Box Padding", 'moose' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_item_info_box_padding",
	$woo_products_item_info_box_padding
);

$woo_products_item_shader_color = new MooseElatedField(
	"color",
	"woo_products_item_shader_color",
	"",
	esc_html__( "Shader Background Color", 'moose' ),
	esc_html__( "Choose a background color for the shader of hovered item", 'moose' )
);
$panel1->addChild(
	"woo_products_item_shader_color",
	$woo_products_item_shader_color
);

$woo_products_item_shader_opacity = new MooseElatedField(
	"text",
	"woo_products_item_shader_opacity",
	"",
	esc_html__( "Shader Background Opacity", 'moose' ),
	esc_html__( "Choose a transparency for the shader background color (0 = fully transparent, 1 = opaque)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_item_shader_opacity",
	$woo_products_item_shader_opacity
);

//Product category
$woo_products_category_hide_category = new MooseElatedField(
	"yesno",
	"woo_products_category_hide_category",
	"no",
	esc_html__( "Hide Product Category", 'moose' ),
	esc_html__( "Enabling this option will hide product category.", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_woo_products_hide_category_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_category_hide_category",
	$woo_products_category_hide_category
);

$woo_products_hide_category_container = new MooseElatedContainer(
	"woo_products_hide_category_container",
	"woo_products_category_hide_category",
	"yes"
);
$panel1->addChild(
	"woo_products_hide_category_container",
	$woo_products_hide_category_container
);

$group2 = new MooseElatedGroup(
	esc_html__( "Product Category Text Style", 'moose' ),
	esc_html__( "Define product category text style", 'moose' )
);
$woo_products_hide_category_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$woo_products_category_color = new MooseElatedField(
	"colorsimple",
	"woo_products_category_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_category_color",
	$woo_products_category_color
);

$woo_products_category_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_category_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_category_font_size",
	$woo_products_category_font_size
);

$woo_products_category_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_category_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_category_line_height",
	$woo_products_category_line_height
);

$woo_products_category_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_products_category_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_products_category_text_transform",
	$woo_products_category_text_transform
);

$row2 = new MooseElatedRow();
$group2->addChild(
	"row2",
	$row2
);

$woo_products_category_font_family = new MooseElatedField(
	"fontsimple",
	"woo_products_category_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_category_font_family",
	$woo_products_category_font_family
);

$woo_products_category_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_products_category_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_products_category_font_style",
	$woo_products_category_font_style
);

$woo_products_category_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_products_category_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_products_category_font_weight",
	$woo_products_category_font_weight
);

$woo_products_category_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_products_category_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_category_letter_spacing",
	$woo_products_category_letter_spacing
);

$woo_products_title_separator_hide_title_separator = new MooseElatedField(
	"yesno",
	"woo_products_title_separator_hide_title_separator",
	"no",
	esc_html__( "Hide Separator in Product Title ", 'moose' ),
	esc_html__( "Enabling this option will hide product title separator", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_woo_products_hide_title_separator_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_title_separator_hide_title_separator",
	$woo_products_title_separator_hide_title_separator
);

$woo_products_hide_title_separator_container = new MooseElatedContainer(
	"woo_products_hide_title_separator_container",
	"woo_products_title_separator_hide_title_separator",
	"yes"
);
$panel1->addChild(
	"woo_products_hide_title_separator_container",
	$woo_products_hide_title_separator_container
);

$group10 = new MooseElatedGroup(
	esc_html__( "Separator Styles", 'moose' ),
	esc_html__( "Define style for product title separator ", 'moose' )
);
$woo_products_hide_title_separator_container->addChild(
	"group10",
	$group10
);

$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$woo_products_title_separator_color = new MooseElatedField(
	"colorsimple",
	"woo_products_title_separator_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_title_separator_color",
	$woo_products_title_separator_color
);

$woo_products_title_separator_style = new MooseElatedField(
	"selectsimple",
	"woo_products_title_separator_style",
	"solid",
	esc_html__( "Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' )
	)
);
$row1->addChild(
	"woo_products_title_separator_style",
	$woo_products_title_separator_style
);

$woo_products_title_separator_margin_top = new MooseElatedField(
	"textsimple",
	"woo_products_title_separator_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_title_separator_margin_top",
	$woo_products_title_separator_margin_top
);

$woo_products_title_separator_margin_bottom = new MooseElatedField(
	"textsimple",
	"woo_products_title_separator_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_title_separator_margin_bottom",
	$woo_products_title_separator_margin_bottom
);

//Product title

$group3 = new MooseElatedGroup(
	esc_html__( "Product Title", 'moose' ),
	esc_html__( "Define product title text style", 'moose' )
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

$woo_products_title_color = new MooseElatedField(
	"colorsimple",
	"woo_products_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_title_color",
	$woo_products_title_color
);

$woo_products_title_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_title_font_size",
	$woo_products_title_font_size
);

$woo_products_title_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_title_line_height",
	$woo_products_title_line_height
);

$woo_products_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_products_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_products_title_text_transform",
	$woo_products_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$woo_products_title_font_family = new MooseElatedField(
	"fontsimple",
	"woo_products_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_title_font_family",
	$woo_products_title_font_family
);

$woo_products_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_products_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_products_title_font_style",
	$woo_products_title_font_style
);

$woo_products_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_products_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_products_title_font_weight",
	$woo_products_title_font_weight
);

$woo_products_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_products_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_title_letter_spacing",
	$woo_products_title_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$woo_products_title_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_title_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_title_hover_color",
	$woo_products_title_hover_color
);

$woo_products_title_line_margin_bottom = new MooseElatedField(
	"textsimple",
	"woo_products_title_line_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_title_line_margin_bottom",
	$woo_products_title_line_margin_bottom
);

//Product price

$group4 = new MooseElatedGroup(
	esc_html__( "Product Price", 'moose' ),
	esc_html__( "Define product price text style", 'moose' )
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

$woo_products_price_color = new MooseElatedField(
	"colorsimple",
	"woo_products_price_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_price_color",
	$woo_products_price_color
);

$woo_products_price_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_price_font_size",
	$woo_products_price_font_size
);

$woo_products_price_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_price_line_height",
	$woo_products_price_line_height
);

$woo_products_price_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_products_price_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_products_price_text_transform",
	$woo_products_price_text_transform
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$woo_products_price_font_family = new MooseElatedField(
	"fontsimple",
	"woo_products_price_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_price_font_family",
	$woo_products_price_font_family
);

$woo_products_price_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_products_price_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_products_price_font_style",
	$woo_products_price_font_style
);

$woo_products_price_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_products_price_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_products_price_font_weight",
	$woo_products_price_font_weight
);

$woo_products_price_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_products_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_price_letter_spacing",
	$woo_products_price_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$woo_products_price_old_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_price_old_font_size",
	"",
	esc_html__( "Old Price Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_price_old_font_size",
	$woo_products_price_old_font_size
);

$woo_products_price_old_color = new MooseElatedField(
	"colorsimple",
	"woo_products_price_old_color",
	"",
	esc_html__( "Old Price Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_price_old_color",
	$woo_products_price_old_color
);

//Product sale

$group5 = new MooseElatedGroup(
	esc_html__( "Product Sale", 'moose' ),
	esc_html__( "Define product sale text style", 'moose' )
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

$woo_products_sale_color = new MooseElatedField(
	"colorsimple",
	"woo_products_sale_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sale_color",
	$woo_products_sale_color
);

$woo_products_sale_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_sale_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sale_font_size",
	$woo_products_sale_font_size
);

$woo_products_sale_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_sale_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sale_line_height",
	$woo_products_sale_line_height
);

$woo_products_sale_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_products_sale_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_products_sale_text_transform",
	$woo_products_sale_text_transform
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$woo_products_sale_font_family = new MooseElatedField(
	"fontsimple",
	"woo_products_sale_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_sale_font_family",
	$woo_products_sale_font_family
);

$woo_products_sale_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_products_sale_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_products_sale_font_style",
	$woo_products_sale_font_style
);

$woo_products_sale_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_products_sale_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_products_sale_font_weight",
	$woo_products_sale_font_weight
);

$woo_products_sale_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_products_sale_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_sale_letter_spacing",
	$woo_products_sale_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$woo_products_sale_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_sale_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_sale_background_color",
	$woo_products_sale_background_color
);

$woo_products_sale_border_radius = new MooseElatedField(
	"textsimple",
	"woo_products_sale_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_sale_border_radius",
	$woo_products_sale_border_radius
);

$woo_products_sale_top_position = new MooseElatedField(
	"textsimple",
	"woo_products_sale_top_position",
	"",
	esc_html__( "Top Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_sale_top_position",
	$woo_products_sale_top_position
);

$woo_products_sale_left_position = new MooseElatedField(
	"textsimple",
	"woo_products_sale_left_position",
	"",
	esc_html__( "Left Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_sale_left_position",
	$woo_products_sale_left_position
);

$row4 = new MooseElatedRow( true );
$group5->addChild(
	"row4",
	$row4
);

$woo_products_sale_right_position = new MooseElatedField(
	"textsimple",
	"woo_products_sale_right_position",
	"",
	esc_html__( "Right Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"woo_products_sale_right_position",
	$woo_products_sale_right_position
);

$woo_products_sale_width = new MooseElatedField(
	"textsimple",
	"woo_products_sale_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"woo_products_sale_width",
	$woo_products_sale_width
);

$woo_products_sale_height = new MooseElatedField(
	"textsimple",
	"woo_products_sale_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"woo_products_sale_height",
	$woo_products_sale_height
);

//Product out of stock

$group6 = new MooseElatedGroup(
	esc_html__( 'Product "Out Of Stock"', 'moose' ),
	esc_html__( "Define 'Out Of Stock' text style", 'moose' )
);
$panel1->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$woo_products_out_of_stock_color = new MooseElatedField(
	"colorsimple",
	"woo_products_out_of_stock_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_out_of_stock_color",
	$woo_products_out_of_stock_color
);

$woo_products_out_of_stock_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_out_of_stock_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_out_of_stock_font_size",
	$woo_products_out_of_stock_font_size
);

$woo_products_out_of_stock_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_out_of_stock_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_out_of_stock_line_height",
	$woo_products_out_of_stock_line_height
);

$woo_products_out_of_stock_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_products_out_of_stock_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_products_out_of_stock_text_transform",
	$woo_products_out_of_stock_text_transform
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$woo_products_out_of_stock_font_family = new MooseElatedField(
	"fontsimple",
	"woo_products_out_of_stock_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_out_of_stock_font_family",
	$woo_products_out_of_stock_font_family
);

$woo_products_out_of_stock_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_products_out_of_stock_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_products_out_of_stock_font_style",
	$woo_products_out_of_stock_font_style
);

$woo_products_out_of_stock_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_products_out_of_stock_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_products_out_of_stock_font_weight",
	$woo_products_out_of_stock_font_weight
);

$woo_products_out_of_stock_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_products_out_of_stock_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_out_of_stock_letter_spacing",
	$woo_products_out_of_stock_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$woo_products_out_of_stock_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_out_of_stock_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_out_of_stock_background_color",
	$woo_products_out_of_stock_background_color
);

$woo_products_out_of_stock_border_radius = new MooseElatedField(
	"textsimple",
	"woo_products_out_of_stock_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_out_of_stock_border_radius",
	$woo_products_out_of_stock_border_radius
);

$woo_products_out_of_stock_top_position = new MooseElatedField(
	"textsimple",
	"woo_products_out_of_stock_top_position",
	"",
	esc_html__( "Top Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_out_of_stock_top_position",
	$woo_products_out_of_stock_top_position
);

$woo_products_out_of_stock_left_position = new MooseElatedField(
	"textsimple",
	"woo_products_out_of_stock_left_position",
	"",
	esc_html__( "Left Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_out_of_stock_left_position",
	$woo_products_out_of_stock_left_position
);

$row4 = new MooseElatedRow( true );
$group6->addChild(
	"row4",
	$row4
);

$woo_products_out_of_stock_right_position = new MooseElatedField(
	"textsimple",
	"woo_products_out_of_stock_right_position",
	"",
	esc_html__( "Right Position (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"woo_products_out_of_stock_right_position",
	$woo_products_out_of_stock_right_position
);

$woo_products_out_of_stock_width = new MooseElatedField(
	"textsimple",
	"woo_products_out_of_stock_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"woo_products_out_of_stock_width",
	$woo_products_out_of_stock_width
);

$woo_products_out_of_stock_height = new MooseElatedField(
	"textsimple",
	"woo_products_out_of_stock_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"woo_products_out_of_stock_height",
	$woo_products_out_of_stock_height
);

//Pricing Filter

$group9 = new MooseElatedGroup(
	esc_html__( "Price Filter Colors", 'moose' ),
	esc_html__( "Define colors in price filter", 'moose' )
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

$woo_products_price_filter_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_price_filter_background_color",
	"",
	esc_html__( "In Price Range", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_price_filter_background_color",
	$woo_products_price_filter_background_color
);

$woo_products_price_filter_background_active_color = new MooseElatedField(
	"colorsimple",
	"woo_products_price_filter_background_active_color",
	"",
	esc_html__( "Out Price Range", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_price_filter_background_active_color",
	$woo_products_price_filter_background_active_color
);

$woo_products_price_filter_arrows_color = new MooseElatedField(
	"colorsimple",
	"woo_products_price_filter_arrows_color",
	"",
	esc_html__( "Handles", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_price_filter_arrows_color",
	$woo_products_price_filter_arrows_color
);

$group7 = new MooseElatedGroup(
	esc_html__( '"Number of Results" Text Style', 'moose' ) ,
	esc_html__( "Define style for text showing the number of results in product list", 'moose' )
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

$woo_products_sorting_result_color = new MooseElatedField(
	"colorsimple",
	"woo_products_sorting_result_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sorting_result_color",
	$woo_products_sorting_result_color
);

$woo_products_sorting_result_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_sorting_result_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sorting_result_font_size",
	$woo_products_sorting_result_font_size
);

$woo_products_sorting_result_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_sorting_result_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sorting_result_line_height",
	$woo_products_sorting_result_line_height
);

$woo_products_sorting_result_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_products_sorting_result_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_products_sorting_result_text_transform",
	$woo_products_sorting_result_text_transform
);

$row2 = new MooseElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$woo_products_sorting_result_font_family = new MooseElatedField(
	"fontsimple",
	"woo_products_sorting_result_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_sorting_result_font_family",
	$woo_products_sorting_result_font_family
);

$woo_products_sorting_result_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_products_sorting_result_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_products_sorting_result_font_style",
	$woo_products_sorting_result_font_style
);

$woo_products_sorting_result_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_products_sorting_result_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_products_sorting_result_font_weight",
	$woo_products_sorting_result_font_weight
);

$woo_products_sorting_result_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_products_sorting_result_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_sorting_result_letter_spacing",
	$woo_products_sorting_result_letter_spacing
);

//Products add to cart button

$products_add_to_cart_subtitle = new MooseElatedTitle(
	"products_add_to_cart_subtitle",
	esc_html__( '"Add to cart" button', 'moose' )
);
$panel1->addChild(
	"products_add_to_cart_subtitle",
	$products_add_to_cart_subtitle
);

$group14 = new MooseElatedGroup(
	esc_html__( "Button Text Style", 'moose' ),
	esc_html__( "Define Add To Cart button text style", 'moose' )
);
$panel1->addChild(
	"group14",
	$group14
);

$row1 = new MooseElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_color = new MooseElatedField(
	"colorsimple",
	"woo_products_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_color",
	$woo_products_add_to_cart_color
);

$woo_products_add_to_cart_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_hover_color",
	$woo_products_add_to_cart_hover_color
);

$woo_products_add_to_cart_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_font_size",
	$woo_products_add_to_cart_font_size
);

$woo_products_add_to_cart_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_line_height",
	$woo_products_add_to_cart_line_height
);

$row2 = new MooseElatedRow( true );
$group14->addChild(
	"row2",
	$row2
);

$woo_products_add_to_cart_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_products_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"woo_products_add_to_cart_text_transform",
	$woo_products_add_to_cart_text_transform
);

$woo_products_add_to_cart_font_family = new MooseElatedField(
	"fontsimple",
	"woo_products_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_add_to_cart_font_family",
	$woo_products_add_to_cart_font_family
);

$woo_products_add_to_cart_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_products_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_products_add_to_cart_font_style",
	$woo_products_add_to_cart_font_style
);

$woo_products_add_to_cart_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_products_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_products_add_to_cart_font_weight",
	$woo_products_add_to_cart_font_weight
);

$row3 = new MooseElatedRow( true );
$group14->addChild(
	"row3",
	$row3
);

$woo_products_add_to_cart_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_products_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_add_to_cart_letter_spacing",
	$woo_products_add_to_cart_letter_spacing
);

$group27 = new MooseElatedGroup(
	esc_html__( 'Button Background', 'moose' ),
	esc_html__( 'Define "Add To Cart" Button Background', 'moose' )
);
$panel1->addChild(
	"group27",
	$group27
);

$row1 = new MooseElatedRow();
$group27->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_background_color",
	$woo_products_add_to_cart_background_color
);

$woo_products_add_to_cart_background_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_background_hover_color",
	$woo_products_add_to_cart_background_hover_color
);

/* To delete */
$woo_products_add_to_cart_margin_top = new MooseElatedField(
	"textsimple",
	"woo_products_add_to_cart_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_add_to_cart_margin_top",
	$woo_products_add_to_cart_margin_top
);

$woo_products_add_to_cart_padding_left = new MooseElatedField(
	"textsimple",
	"woo_products_add_to_cart_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_add_to_cart_padding_left",
	$woo_products_add_to_cart_padding_left
);

$woo_products_add_to_cart_padding_right = new MooseElatedField(
	"textsimple",
	"woo_products_add_to_cart_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_add_to_cart_padding_right",
	$woo_products_add_to_cart_padding_right
);

$add_to_cart_button_hover_animation = new MooseElatedField(
	"selectblank",
	"add_to_cart_button_hover_animation",
	"",
	esc_html__( "Button Hover Animation", 'moose' ),
	esc_html__( "Choose a hover animation for button", 'moose' ),
	array(
		"fill_from_top" => esc_html__( "Fill From Top", 'moose' ),
		"fill_from_left" => esc_html__( "Fill From Left", 'moose' ),
		"fill_from_bottom" => esc_html__( "Fill From Bottom", 'moose' ),
	)
);
$panel1->addChild(
	"add_to_cart_button_hover_animation",
	$add_to_cart_button_hover_animation
);

$group28 = new MooseElatedGroup(
	esc_html__( 'Button Border', 'moose' ),
	esc_html__( 'Define "Add To Cart" border', 'moose' )
);
$panel1->addChild(
	"group28",
	$group28
);

$row1 = new MooseElatedRow();
$group28->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_border_color = new MooseElatedField(
	"colorsimple",
	"woo_products_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_color",
	$woo_products_add_to_cart_border_color
);

$woo_products_add_to_cart_border_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_hover_color",
	$woo_products_add_to_cart_border_hover_color
);

$woo_products_add_to_cart_border_width = new MooseElatedField(
	"textsimple",
	"woo_products_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_width",
	$woo_products_add_to_cart_border_width
);

$woo_products_add_to_cart_border_radius = new MooseElatedField(
	"textsimple",
	"woo_products_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_radius",
	$woo_products_add_to_cart_border_radius
);
/* To delete end */

//Sorting Product List

$product_sorting = new MooseElatedTitle(
	"product_sorting",
	esc_html__( "Product Sorting Select Box", 'moose' )
);
$panel1->addChild(
	"product_sorting",
	$product_sorting
);

$group8 = new MooseElatedGroup(
	esc_html__( "Select Box Text Style", 'moose' ),
	esc_html__( "Define product sorting text style", 'moose' )
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

$woo_products_sorting_color = new MooseElatedField(
	"colorsimple",
	"woo_products_sorting_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sorting_color",
	$woo_products_sorting_color
);

$woo_products_sorting_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_sorting_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sorting_hover_color",
	$woo_products_sorting_hover_color
);

// Sorting Background

$group12 = new MooseElatedGroup(
	esc_html__( "Select Box Background", 'moose' ),
	esc_html__( "Define product sorting select box background", 'moose' )
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

$woo_products_sorting_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_sorting_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sorting_background_color",
	$woo_products_sorting_background_color
);

$woo_products_sorting_dropdown_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_sorting_dropdown_background_color",
	"",
	esc_html__( "Dropdown Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sorting_dropdown_background_color",
	$woo_products_sorting_dropdown_background_color
);

// Sorting Border Style

$group13 = new MooseElatedGroup(
	esc_html__( "Select Box Border", 'moose' ),
	esc_html__( "Define product sorting select box border", 'moose' )
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

$woo_products_sorting_border_color = new MooseElatedField(
	"colorsimple",
	"woo_products_sorting_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sorting_border_color",
	$woo_products_sorting_border_color
);

$woo_products_sorting_border_width = new MooseElatedField(
	"textsimple",
	"woo_products_sorting_border_width",
	"",
	esc_html__( "Box Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_sorting_border_width",
	$woo_products_sorting_border_width
);

//Show Number of Results text

//Product single styles

$panel2 = new MooseElatedPanel(
	esc_html__( "Product Single", 'moose' ),
	"product_single_panel"
);
$woocommercePage->addChild(
	"panel2",
	$panel2
);

//Product single title

$product_text_style = new MooseElatedTitle(
	"product_text_style",
	esc_html__( "Product Text Style", 'moose' )
);
$panel2->addChild(
	"product_text_style",
	$product_text_style
);

$group1 = new MooseElatedGroup(
	esc_html__( "Product Single Title", 'moose' ),
	esc_html__( "Define Product Single Title Style", 'moose' )
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

$woo_product_single_title_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_title_color",
	$woo_product_single_title_color
);

$woo_product_single_title_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_title_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_title_hover_color",
	$woo_product_single_title_hover_color
);

$woo_product_single_title_font_size = new MooseElatedField(
	"textsimple",
	"woo_product_single_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_title_font_size",
	$woo_product_single_title_font_size
);

$woo_product_single_title_line_height = new MooseElatedField(
	"textsimple",
	"woo_product_single_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_title_line_height",
	$woo_product_single_title_line_height
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$woo_product_single_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"woo_product_single_title_text_transform",
	$woo_product_single_title_text_transform
);

$woo_product_single_title_font_family = new MooseElatedField(
	"fontsimple",
	"woo_product_single_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_title_font_family",
	$woo_product_single_title_font_family
);

$woo_product_single_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_product_single_title_font_style",
	$woo_product_single_title_font_style
);

$woo_product_single_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_product_single_title_font_weight",
	$woo_product_single_title_font_weight
);

$row3 = new MooseElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$woo_product_single_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_product_single_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_product_single_title_letter_spacing",
	$woo_product_single_title_letter_spacing
);
//Product single title separator

$woo_single_product_title_separator = new MooseElatedField(
	"yesno",
	"woo_single_product_title_separator",
	"no",
	esc_html__( "Display Separator After Title", 'moose' ),
	esc_html__( "Enabling this option will display separator after product title", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_woo_single_product_title_separator_container"
	)
);
$panel2->addChild(
	"woo_single_product_title_separator",
	$woo_single_product_title_separator
);

$woo_single_product_title_separator_container = new MooseElatedContainer(
	"woo_single_product_title_separator_container",
	"woo_single_product_title_separator",
	"no"
);
$panel2->addChild(
	"woo_single_product_title_separator_container",
	$woo_single_product_title_separator_container
);

$group29 = new MooseElatedGroup(
	esc_html__( "Title Separator Styles", 'moose' ),
	esc_html__( "Define style for title separator", 'moose' )
);
$woo_single_product_title_separator_container->addChild(
	"group29",
	$group29
);
$row1 = new MooseElatedRow();
$group29->addChild(
	"row1",
	$row1
);

$woo_single_product_title_separator_color = new MooseElatedField(
	"colorsimple",
	"woo_single_product_title_separator_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_single_product_title_separator_color",
	$woo_single_product_title_separator_color
);

$woo_single_product_title_separator_style = new MooseElatedField(
	"selectsimple",
	"woo_single_product_title_separator_style",
	"solid",
	esc_html__( "Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' )
	)
);
$row1->addChild(
	"woo_single_product_title_separator_style",
	$woo_single_product_title_separator_style
);

$woo_single_product_title_separator_margin_top = new MooseElatedField(
	"textsimple",
	"woo_single_product_title_separator_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_single_product_title_separator_margin_top",
	$woo_single_product_title_separator_margin_top
);

$woo_single_product_title_separator_margin_bottom = new MooseElatedField(
	"textsimple",
	"woo_single_product_title_separator_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_single_product_title_separator_margin_bottom",
	$woo_single_product_title_separator_margin_bottom
);

//Product single meta title

$group2 = new MooseElatedGroup(
	esc_html__( "Product Single Meta Title", 'moose' ),
	esc_html__( "Define Product Single Meta Title Style", 'moose' )
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

$woo_product_single_meta_title_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_meta_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_meta_title_color",
	$woo_product_single_meta_title_color
);

$woo_product_single_meta_title_font_size = new MooseElatedField(
	"textsimple",
	"woo_product_single_meta_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_meta_title_font_size",
	$woo_product_single_meta_title_font_size
);

$woo_product_single_meta_title_line_height = new MooseElatedField(
	"textsimple",
	"woo_product_single_meta_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_meta_title_line_height",
	$woo_product_single_meta_title_line_height
);

$woo_product_single_meta_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_meta_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_product_single_meta_title_text_transform",
	$woo_product_single_meta_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$woo_product_single_meta_title_font_family = new MooseElatedField(
	"fontsimple",
	"woo_product_single_meta_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_meta_title_font_family",
	$woo_product_single_meta_title_font_family
);

$woo_product_single_meta_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_meta_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_product_single_meta_title_font_style",
	$woo_product_single_meta_title_font_style
);

$woo_product_single_meta_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_meta_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_product_single_meta_title_font_weight",
	$woo_product_single_meta_title_font_weight
);

$woo_product_single_meta_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_product_single_meta_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_meta_title_letter_spacing",
	$woo_product_single_meta_title_letter_spacing
);

//Product single meta title

$group3 = new MooseElatedGroup(
	esc_html__( "Product Single Meta Info", 'moose' ),
	esc_html__( "Define Product Single Meta Info Style", 'moose' )
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

$woo_product_single_meta_info_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_meta_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_meta_info_color",
	$woo_product_single_meta_info_color
);

$woo_product_single_meta_info_font_size = new MooseElatedField(
	"textsimple",
	"woo_product_single_meta_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_meta_info_font_size",
	$woo_product_single_meta_info_font_size
);

$woo_product_single_meta_info_line_height = new MooseElatedField(
	"textsimple",
	"woo_product_single_meta_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_meta_info_line_height",
	$woo_product_single_meta_info_line_height
);

$woo_product_single_meta_info_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_meta_info_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_product_single_meta_info_text_transform",
	$woo_product_single_meta_info_text_transform
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$woo_product_single_meta_info_font_family = new MooseElatedField(
	"fontsimple",
	"woo_product_single_meta_info_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_meta_info_font_family",
	$woo_product_single_meta_info_font_family
);

$woo_product_single_meta_info_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_meta_info_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_product_single_meta_info_font_style",
	$woo_product_single_meta_info_font_style
);

$woo_product_single_meta_info_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_meta_info_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_product_single_meta_info_font_weight",
	$woo_product_single_meta_info_font_weight
);

$woo_product_single_meta_info_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_product_single_meta_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_meta_info_letter_spacing",
	$woo_product_single_meta_info_letter_spacing
);

//Product single price

$group4 = new MooseElatedGroup(
	esc_html__( "Product Single Price", 'moose' ),
	esc_html__( "Define Product Single Price Style", 'moose' )
);
$panel2->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$woo_product_single_price_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_price_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_price_color",
	$woo_product_single_price_color
);

$woo_product_single_price_font_size = new MooseElatedField(
	"textsimple",
	"woo_product_single_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_price_font_size",
	$woo_product_single_price_font_size
);

$woo_product_single_price_line_height = new MooseElatedField(
	"textsimple",
	"woo_product_single_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_price_line_height",
	$woo_product_single_price_line_height
);

$woo_product_single_price_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_price_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_product_single_price_text_transform",
	$woo_product_single_price_text_transform
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$woo_product_single_price_font_family = new MooseElatedField(
	"fontsimple",
	"woo_product_single_price_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_price_font_family",
	$woo_product_single_price_font_family
);

$woo_product_single_price_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_price_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_product_single_price_font_style",
	$woo_product_single_price_font_style
);

$woo_product_single_price_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_price_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_product_single_price_font_weight",
	$woo_product_single_price_font_weight
);

$woo_product_single_price_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_product_single_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_price_letter_spacing",
	$woo_product_single_price_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$woo_product_single_price_old_font_size = new MooseElatedField(
	"textsimple",
	"woo_product_single_price_old_font_size",
	"",
	esc_html__( "Old Price Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_product_single_price_old_font_size",
	$woo_product_single_price_old_font_size
);

$woo_product_single_price_old_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_price_old_color",
	"",
	esc_html__( "Old Price Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_product_single_price_old_color",
	$woo_product_single_price_old_color
);

$woo_product_single_show_social_share = new MooseElatedField(
	"yesno",
	"woo_product_single_show_social_share",
	"no",
	esc_html__( "Show Share", 'moose' ),
	esc_html__( "Enabling this option will show share on Single Product", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_woo_product_single_share_options_container"
	)
);
$panel2->addChild(
	"woo_product_single_show_social_share",
	$woo_product_single_show_social_share
);

$woo_product_single_share_options_container = new MooseElatedContainer(
	"woo_product_single_share_options_container",
	"woo_product_single_show_social_share",
	"no"
);
$panel2->addChild(
	"woo_product_single_share_options_container",
	$woo_product_single_share_options_container
);

$woo_product_single_select_share_option = new MooseElatedField(
	"select",
	"woo_product_single_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'moose' ),
	esc_html__( "Choose Social Share Style for Single Product", 'moose' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'moose' ),
		"list" => esc_html__( "Social Share List", 'moose' )
	)
);
$woo_product_single_share_options_container->addChild(
	"woo_product_single_select_share_option",
	$woo_product_single_select_share_option
);

//Product single tabs/accordions

$woo_products_info_style = new MooseElatedField(
	"select",
	"woo_products_info_style",
	"accordions",
	esc_html__( "Product Info Display Style", 'moose' ),
	esc_html__( "Choose to display product info with accordions right from product image or with vertical tabs below product image", 'moose' ),
	array(
		"accordions" => esc_html__( "Accordions", 'moose' ),
		"vertical_tabs" => esc_html__( "Vertical Tabs", 'moose' )
	
	)
);

$panel2->addChild(
	"woo_products_info_style",
	$woo_products_info_style
);

//Product single accordions

$group10 = new MooseElatedGroup(
	esc_html__( "Product Single Accordions", 'moose' ),
	esc_html__( "Define Product Single Accordions Style", 'moose' )
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

$woo_product_single_tabs_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_tabs_color",
	"",
	esc_html__( "Header Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_tabs_color",
	$woo_product_single_tabs_color
);

$woo_product_single_tabs_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_tabs_hover_color",
	"",
	esc_html__( "Header Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_tabs_hover_color",
	$woo_product_single_tabs_hover_color
);

$woo_product_single_tabs_border_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_tabs_border_color",
	"",
	esc_html__( "Header Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_tabs_border_color",
	$woo_product_single_tabs_border_color
);

$woo_product_single_tabs_border_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_tabs_border_hover_color",
	"",
	esc_html__( "Header Hover Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_tabs_border_hover_color",
	$woo_product_single_tabs_border_hover_color
);

$row2 = new MooseElatedRow();
$group10->addChild(
	"row2",
	$row2
);

$woo_product_single_tabs_text_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_tabs_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_tabs_text_color",
	$woo_product_single_tabs_text_color
);

$woo_product_single_tabs_text_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_tabs_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_tabs_text_hover_color",
	$woo_product_single_tabs_text_hover_color
);

$woo_product_single_tabs_font_size = new MooseElatedField(
	"textsimple",
	"woo_product_single_tabs_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_tabs_font_size",
	$woo_product_single_tabs_font_size
);

$woo_product_single_tabs_line_height = new MooseElatedField(
	"textsimple",
	"woo_product_single_tabs_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_tabs_line_height",
	$woo_product_single_tabs_line_height
);

$row3 = new MooseElatedRow( true );
$group10->addChild(
	"row3",
	$row3
);

$woo_product_single_tabs_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_tabs_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"woo_product_single_tabs_text_transform",
	$woo_product_single_tabs_text_transform
);

$woo_product_single_tabs_font_family = new MooseElatedField(
	"fontsimple",
	"woo_product_single_tabs_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_product_single_tabs_font_family",
	$woo_product_single_tabs_font_family
);

$woo_product_single_tabs_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_tabs_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"woo_product_single_tabs_font_style",
	$woo_product_single_tabs_font_style
);

$woo_product_single_tabs_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_tabs_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"woo_product_single_tabs_font_weight",
	$woo_product_single_tabs_font_weight
);

$row4 = new MooseElatedRow( true );
$group10->addChild(
	"row4",
	$row4
);

$woo_product_single_tabs_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_product_single_tabs_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"woo_product_single_tabs_letter_spacing",
	$woo_product_single_tabs_letter_spacing
);

//Product single tabs

$group11 = new MooseElatedGroup(
	esc_html__( "Product Single Tabs", 'moose' ),
	esc_html__( "Define Product Single Tabs Style", 'moose' )
);
$panel2->addChild(
	"group11",
	$group11
);

$row1 = new MooseElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$woo_product_single_vertical_tabs_text_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_vertical_tabs_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_text_color",
	$woo_product_single_vertical_tabs_text_color
);

$woo_product_single_vertical_tabs_text_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_vertical_tabs_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_text_hover_color",
	$woo_product_single_vertical_tabs_text_hover_color
);

$woo_product_single_vertical_tabs_border_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_vertical_tabs_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_border_color",
	$woo_product_single_vertical_tabs_border_color
);

$woo_product_single_vertical_tabs_border_width = new MooseElatedField(
	"textsimple",
	"woo_product_single_vertical_tabs_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_border_width",
	$woo_product_single_vertical_tabs_border_width
);

$row2 = new MooseElatedRow();
$group11->addChild(
	"row2",
	$row2
);

$woo_product_single_vertical_tabs_font_size = new MooseElatedField(
	"textsimple",
	"woo_product_single_vertical_tabs_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_font_size",
	$woo_product_single_vertical_tabs_font_size
);

$woo_product_single_vertical_tabs_line_height = new MooseElatedField(
	"textsimple",
	"woo_product_single_vertical_tabs_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_line_height",
	$woo_product_single_vertical_tabs_line_height
);

$woo_product_single_vertical_tabs_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"woo_product_single_vertical_tabs_text_transform",
	$woo_product_single_vertical_tabs_text_transform
);

$woo_product_single_vertical_tabs_font_family = new MooseElatedField(
	"fontsimple",
	"woo_product_single_vertical_tabs_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_font_family",
	$woo_product_single_vertical_tabs_font_family
);

$row3 = new MooseElatedRow( true );
$group11->addChild(
	"row3",
	$row3
);

$woo_product_single_vertical_tabs_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row3->addChild(
	"woo_product_single_vertical_tabs_font_style",
	$woo_product_single_vertical_tabs_font_style
);

$woo_product_single_vertical_tabs_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"woo_product_single_vertical_tabs_font_weight",
	$woo_product_single_vertical_tabs_font_weight
);

$woo_product_single_vertical_tabs_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_product_single_vertical_tabs_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_product_single_vertical_tabs_letter_spacing",
	$woo_product_single_vertical_tabs_letter_spacing
);

//Related Products Title

$group5 = new MooseElatedGroup(
	esc_html__( "Related Products Title", 'moose' ),
	esc_html__( "Define Related Products Title Style", 'moose' )
);
$panel2->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$woo_product_single_related_color = new MooseElatedField(
	"colorsimple",
	"woo_product_single_related_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_related_color",
	$woo_product_single_related_color
);

$woo_product_single_related_font_size = new MooseElatedField(
	"textsimple",
	"woo_product_single_related_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_related_font_size",
	$woo_product_single_related_font_size
);

$woo_product_single_related_line_height = new MooseElatedField(
	"textsimple",
	"woo_product_single_related_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_product_single_related_line_height",
	$woo_product_single_related_line_height
);

$woo_product_single_related_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_related_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"woo_product_single_related_text_transform",
	$woo_product_single_related_text_transform
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$woo_product_single_related_font_family = new MooseElatedField(
	"fontsimple",
	"woo_product_single_related_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_related_font_family",
	$woo_product_single_related_font_family
);

$woo_product_single_related_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_related_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_product_single_related_font_style",
	$woo_product_single_related_font_style
);

$woo_product_single_related_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_product_single_related_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_product_single_related_font_weight",
	$woo_product_single_related_font_weight
);

$woo_product_single_related_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_product_single_related_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_product_single_related_letter_spacing",
	$woo_product_single_related_letter_spacing
);

//Add to cart button

$add_to_cart_subtitle = new MooseElatedTitle(
	"add_to_cart_subtitle",
	esc_html__( '"Add to cart" button', 'moose' )
);
$panel2->addChild(
	"add_to_cart_subtitle",
	$add_to_cart_subtitle
);

$group6 = new MooseElatedGroup(
	esc_html__( 'Button Text Style', 'moose' ),
	esc_html__( 'Define "Add To Cart" button text style', 'moose' )
);
$panel2->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$woo_products_single_add_to_cart_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_color",
	$woo_products_single_add_to_cart_color
);

$woo_products_single_add_to_cart_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_hover_color",
	$woo_products_single_add_to_cart_hover_color
);

$woo_products_single_add_to_cart_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_font_size",
	$woo_products_single_add_to_cart_font_size
);

$woo_products_single_add_to_cart_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_line_height",
	$woo_products_single_add_to_cart_line_height
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$woo_products_single_add_to_cart_text_transform = new MooseElatedField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"woo_products_single_add_to_cart_text_transform",
	$woo_products_single_add_to_cart_text_transform
);

$woo_products_single_add_to_cart_font_family = new MooseElatedField(
	"fontsimple",
	"woo_products_single_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_family",
	$woo_products_single_add_to_cart_font_family
);

$woo_products_single_add_to_cart_font_style = new MooseElatedField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_style",
	$woo_products_single_add_to_cart_font_style
);

$woo_products_single_add_to_cart_font_weight = new MooseElatedField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_weight",
	$woo_products_single_add_to_cart_font_weight
);

$row3 = new MooseElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$woo_products_single_add_to_cart_letter_spacing = new MooseElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_letter_spacing",
	$woo_products_single_add_to_cart_letter_spacing
);

$woo_products_single_add_to_cart_margin_left = new MooseElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_margin_left",
	"",
	esc_html__( "Margin left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_margin_left",
	$woo_products_single_add_to_cart_margin_left
);

$woo_products_single_add_to_cart_padding_left = new MooseElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_padding_left",
	"",
	esc_html__( "Padding left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_padding_left",
	$woo_products_single_add_to_cart_padding_left
);

$woo_products_single_add_to_cart_padding_right = new MooseElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_padding_right",
	"",
	esc_html__( "Padding right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_padding_right",
	$woo_products_single_add_to_cart_padding_right
);

$group18 = new MooseElatedGroup(
	esc_html__( 'Button Background', 'moose' ),
	esc_html__( 'Define "Add To Cart" Button Background', 'moose' )
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

$woo_products_single_add_to_cart_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_background_color",
	$woo_products_single_add_to_cart_background_color
);

$woo_products_single_add_to_cart_background_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_background_hover_color",
	$woo_products_single_add_to_cart_background_hover_color
);

$group19 = new MooseElatedGroup(
	esc_html__( 'Button Border', 'moose' ),
	esc_html__( 'Define "Add To Cart" border', 'moose' )
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

$woo_products_single_add_to_cart_border_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_color",
	$woo_products_single_add_to_cart_border_color
);

$woo_products_single_add_to_cart_border_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_hover_color",
	$woo_products_single_add_to_cart_border_hover_color
);

$woo_products_single_add_to_cart_border_width = new MooseElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_width",
	$woo_products_single_add_to_cart_border_width
);

$woo_products_single_add_to_cart_border_radius = new MooseElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_radius",
	$woo_products_single_add_to_cart_border_radius
);

//Quantity buttons

$quantity_subtitle = new MooseElatedTitle(
	"quantity_subtitle",
	esc_html__( 'Quantity Buttons', 'moose' )
);
$panel2->addChild(
	"quantity_subtitle",
	$quantity_subtitle
);

$woo_products_single_quantity_button_space = new MooseElatedField(
	"yesno",
	"woo_products_single_quantity_button_space",
	"no",
	esc_html__( "Disable Space Between Buttons", 'moose' ),
	esc_html__( "Enabling this option will disable space between quantity buttons", 'moose' )
);
$panel2->addChild(
	"woo_products_single_quantity_button_space",
	$woo_products_single_quantity_button_space
);

$group27 = new MooseElatedGroup(
	esc_html__( 'Buttons Width', 'moose' ),
	esc_html__( 'Define width for buttons', 'moose' )
);
$panel2->addChild(
	"group27",
	$group27
);

$row1 = new MooseElatedRow();
$group27->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_width = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_width",
	$woo_products_single_quantity_width
);

$group20 = new MooseElatedGroup(
	esc_html__( 'Buttons Text Style', 'moose' ),
	esc_html__( 'Define Quantity buttons text style', 'moose' )
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

$woo_products_single_quantity_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_color",
	$woo_products_single_quantity_color
);

$woo_products_single_quantity_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_hover_color",
	"",
	esc_html__( "Hover Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_hover_color",
	$woo_products_single_quantity_hover_color
);

$woo_products_single_quantity_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_font_size",
	$woo_products_single_quantity_font_size
);

$woo_products_single_quantity_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_line_height",
	$woo_products_single_quantity_line_height
);

$group21 = new MooseElatedGroup(
	esc_html__( 'Buttons Background', 'moose' ),
	esc_html__( 'Define Quantity buttons background', 'moose' )
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

$woo_products_single_quantity_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_background_color",
	$woo_products_single_quantity_background_color
);

$woo_products_single_quantity_background_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_background_hover_color",
	$woo_products_single_quantity_background_hover_color
);

$group22 = new MooseElatedGroup(
	esc_html__( 'Buttons Border', 'moose' ),
	esc_html__( 'Define Quantity buttons border', 'moose' )
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

$woo_products_single_quantity_border_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_border_color",
	$woo_products_single_quantity_border_color
);

$woo_products_single_quantity_border_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_border_hover_color",
	$woo_products_single_quantity_border_hover_color
);

$woo_products_single_quantity_border_width = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_border_width",
	$woo_products_single_quantity_border_width
);

$woo_products_single_quantity_border_radius = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_border_radius",
	"",
	esc_html__( "Border radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_border_radius",
	$woo_products_single_quantity_border_radius
);

//Quantity input field

$quantity_input_subtitle = new MooseElatedTitle(
	"quantity_input_subtitle",
	esc_html__( 'Quantity Input Field', 'moose' )
);
$panel2->addChild(
	"quantity_input_subtitle",
	$quantity_input_subtitle
);

$group26 = new MooseElatedGroup(
	esc_html__( 'Input Field Width', 'moose' ),
	esc_html__( 'Define width for input field', 'moose' )
);
$panel2->addChild(
	"group26",
	$group26
);

$row1 = new MooseElatedRow();
$group26->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_width = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_input_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_width",
	$woo_products_single_quantity_input_width
);

$group23 = new MooseElatedGroup(
	esc_html__( 'Input Text Style', 'moose' ),
	esc_html__( 'Define Quantity Input Field text style', 'moose' )
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

$woo_products_single_quantity_input_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_color",
	$woo_products_single_quantity_input_color
);

$woo_products_single_quantity_input_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_hover_color",
	"",
	esc_html__( "Focus Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_hover_color",
	$woo_products_single_quantity_input_hover_color
);

$woo_products_single_quantity_input_font_size = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_input_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_font_size",
	$woo_products_single_quantity_input_font_size
);

$woo_products_single_quantity_input_line_height = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_input_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_line_height",
	$woo_products_single_quantity_input_line_height
);

$group24 = new MooseElatedGroup(
	esc_html__( 'Input Background', 'moose' ),
	esc_html__( 'Define Quantity Input Field background', 'moose' )
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

$woo_products_single_quantity_input_background_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_background_color",
	$woo_products_single_quantity_input_background_color
);

$woo_products_single_quantity_input_background_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_background_hover_color",
	"",
	esc_html__( "Focus Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_background_hover_color",
	$woo_products_single_quantity_input_background_hover_color
);

$group25 = new MooseElatedGroup(
	esc_html__( 'Input Border', 'moose' ),
	esc_html__( 'Define Quantity Input Field border', 'moose' )
);
$panel2->addChild(
	"group25",
	$group25
);

$row1 = new MooseElatedRow();
$group25->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_border_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_color",
	$woo_products_single_quantity_input_border_color
);

$woo_products_single_quantity_input_border_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_border_hover_color",
	"",
	esc_html__( "Border Focus Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_hover_color",
	$woo_products_single_quantity_input_border_hover_color
);

$woo_products_single_quantity_input_border_width = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_input_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_width",
	$woo_products_single_quantity_input_border_width
);

$woo_products_single_quantity_input_border_radius = new MooseElatedField(
	"textsimple",
	"woo_products_single_quantity_input_border_radius",
	"",
	esc_html__( "Border radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_radius",
	$woo_products_single_quantity_input_border_radius
);

$group_outline_focus_color = new MooseElatedGroup(
	esc_html__( 'Input Focus Outline Color', 'moose' ),
	esc_html__( 'Define Quantity Input Field outline color on focus', 'moose' )
);
$panel2->addChild(
	"group_outline_focus_color",
	$group_outline_focus_color
);

$row1 = new MooseElatedRow();
$group_outline_focus_color->addChild(
	"row1",
	$row1
);

$woo_products_single_quan_input_outline_hover_color = new MooseElatedField(
	"colorsimple",
	"woo_products_single_quan_input_outline_hover_color",
	"",
	esc_html__( "Outline Focus Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"woo_products_single_quan_input_outline_hover_color",
	$woo_products_single_quan_input_outline_hover_color
);

//Product single styles

$panel4 = new MooseElatedPanel(
	esc_html__( "Header & Sidebar Widget", 'moose' ),
	"product_widget"
);
$woocommercePage->addChild(
	"panel4",
	$panel4
);

$group1 = new MooseElatedGroup(
	esc_html__( "Product Title", 'moose' ),
	esc_html__( "Define styles for product title in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'moose' )
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
$sidebar_product_title_color = new MooseElatedField(
	"colorsimple",
	"sidebar_product_title_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_title_color",
	$sidebar_product_title_color
);

$sidebar_product_title_font_size = new MooseElatedField(
	"textsimple",
	"sidebar_product_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_title_font_size",
	$sidebar_product_title_font_size
);

$sidebar_product_title_line_height = new MooseElatedField(
	"textsimple",
	"sidebar_product_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_title_line_height",
	$sidebar_product_title_line_height
);

$sidebar_product_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"sidebar_product_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"sidebar_product_title_text_transform",
	$sidebar_product_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$sidebar_product_title_font_family = new MooseElatedField(
	"fontsimple",
	"sidebar_product_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_product_title_font_family",
	$sidebar_product_title_font_family
);

$sidebar_product_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"sidebar_product_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"sidebar_product_title_font_style",
	$sidebar_product_title_font_style
);

$sidebar_product_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"sidebar_product_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"sidebar_product_title_font_weight",
	$sidebar_product_title_font_weight
);

$sidebar_product_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"sidebar_product_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_product_title_letter_spacing",
	$sidebar_product_title_letter_spacing
);

$row3 = new MooseElatedRow();
$group1->addChild(
	"row3",
	$row3
);
$sidebar_product_title_hover_color = new MooseElatedField(
	"colorsimple",
	"sidebar_product_title_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"sidebar_product_title_hover_color",
	$sidebar_product_title_hover_color
);

$sidebar_product_separator = new MooseElatedField(
	'yesno',
	'sidebar_product_separator',
	'yes',
	esc_html__( 'Separator under product', 'moose' ),
	'',
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_sidebar_product_separator_container"
	)
);
$panel4->addChild(
	'sidebar_product_separator',
	$sidebar_product_separator
);

$sidebar_product_separator_container = new MooseElatedContainer(
	'sidebar_product_separator_container',
	'sidebar_product_separator',
	'no'
);
$panel4->addChild(
	'sidebar_product_separator_container',
	$sidebar_product_separator_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Product Separator Style", 'moose' ),
	esc_html__( "Define styles for product separator in widget.", 'moose' )
);
$sidebar_product_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$sidebar_product_separator_width = new MooseElatedField(
	"textsimple",
	"sidebar_product_separator_width",
	"",
	esc_html__( "Width (px)", 'moose' )
);
$row1->addChild(
	"sidebar_product_separator_width",
	$sidebar_product_separator_width
);

$sidebar_product_separator_color = new MooseElatedField(
	"colorsimple",
	"sidebar_product_separator_color",
	"",
	esc_html__( "Color", 'moose' )
);
$row1->addChild(
	"sidebar_product_separator_color",
	$sidebar_product_separator_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Product Price", 'moose' ),
	esc_html__( "Define product price text style in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'moose' )
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

$sidebar_product_price_color = new MooseElatedField(
	"colorsimple",
	"sidebar_product_price_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_price_color",
	$sidebar_product_price_color
);

$sidebar_product_price_font_size = new MooseElatedField(
	"textsimple",
	"sidebar_product_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_price_font_size",
	$sidebar_product_price_font_size
);

$sidebar_product_price_line_height = new MooseElatedField(
	"textsimple",
	"sidebar_product_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_price_line_height",
	$sidebar_product_price_line_height
);

$sidebar_product_price_text_transform = new MooseElatedField(
	"selectblanksimple",
	"sidebar_product_price_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"sidebar_product_price_text_transform",
	$sidebar_product_price_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$sidebar_product_price_font_family = new MooseElatedField(
	"fontsimple",
	"sidebar_product_price_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_product_price_font_family",
	$sidebar_product_price_font_family
);

$sidebar_product_price_font_style = new MooseElatedField(
	"selectblanksimple",
	"sidebar_product_price_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"sidebar_product_price_font_style",
	$sidebar_product_price_font_style
);

$sidebar_product_price_font_weight = new MooseElatedField(
	"selectblanksimple",
	"sidebar_product_price_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"sidebar_product_price_font_weight",
	$sidebar_product_price_font_weight
);

$sidebar_product_price_letter_spacing = new MooseElatedField(
	"textsimple",
	"sidebar_product_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"sidebar_product_price_letter_spacing",
	$sidebar_product_price_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$sidebar_product_price_old_color = new MooseElatedField(
	"colorsimple",
	"sidebar_product_price_old_color",
	"",
	esc_html__( "Old Price Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"sidebar_product_price_old_color",
	$sidebar_product_price_old_color
);

$group3 = new MooseElatedGroup(
	esc_html__( "Icon Spacing", 'moose' ),
	esc_html__( "Define padding and margin for widget icon", 'moose' )
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

$sidebar_product_icon_padding_left = new MooseElatedField(
	"textsimple",
	"sidebar_product_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_icon_padding_left",
	$sidebar_product_icon_padding_left
);

$sidebar_product_icon_padding_right = new MooseElatedField(
	"textsimple",
	"sidebar_product_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_icon_padding_right",
	$sidebar_product_icon_padding_right
);

$sidebar_product_icon_margin_left = new MooseElatedField(
	"textsimple",
	"sidebar_product_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_icon_margin_left",
	$sidebar_product_icon_margin_left
);

$sidebar_product_icon_margin_right = new MooseElatedField(
	"textsimple",
	"sidebar_product_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"sidebar_product_icon_margin_right",
	$sidebar_product_icon_margin_right
);

//WooCommerce Dropdown Cart
$woo_drop_cart_type = new MooseElatedField(
	"select",
	"woo_drop_cart_type",
	"with_icon",
	esc_html__( "WooCommerce Dropdown Cart Widget Style", 'moose' ),
	esc_html__( "Choose style for woocommerce dropdown cart widget in header", 'moose' ),
	array(
		"with_icon" => esc_html__( "With Icon", 'moose' ),
		"with_icon_label" => esc_html__( "With Icon and Label", 'moose' ),
		"button_with_text" => esc_html__( "Button with Text", 'moose' )
	)
);
$panel4->addChild(
	"woo_drop_cart_type",
	$woo_drop_cart_type
);

$cart_styles_title = new MooseElatedTitle(
	"cart_styles_title",
	esc_html__( "Cart Menu Item Style", 'moose' )
);
$panel4->addChild(
	"cart_styles_title",
	$cart_styles_title
);

$group4 = new MooseElatedGroup(
	esc_html__( "Cart Text Style", 'moose' ),
	esc_html__( "Define cart text style in header", 'moose' )
);
$panel4->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$header_cart_text_color = new MooseElatedField(
	"colorsimple",
	"header_cart_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_text_color",
	$header_cart_text_color
);

$header_cart_text_hover_color = new MooseElatedField(
	"colorsimple",
	"header_cart_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_text_hover_color",
	$header_cart_text_hover_color
);

$header_cart_text_font_size = new MooseElatedField(
	"textsimple",
	"header_cart_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_text_font_size",
	$header_cart_text_font_size
);

$header_cart_text_line_height = new MooseElatedField(
	"textsimple",
	"header_cart_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_text_line_height",
	$header_cart_text_line_height
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$header_cart_text_text_transform = new MooseElatedField(
	"selectblanksimple",
	"header_cart_text_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"header_cart_text_text_transform",
	$header_cart_text_text_transform
);

$header_cart_text_font_family = new MooseElatedField(
	"fontsimple",
	"header_cart_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"header_cart_text_font_family",
	$header_cart_text_font_family
);

$header_cart_text_font_style = new MooseElatedField(
	"selectblanksimple",
	"header_cart_text_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"header_cart_text_font_style",
	$header_cart_text_font_style
);

$header_cart_text_font_weight = new MooseElatedField(
	"selectblanksimple",
	"header_cart_text_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"header_cart_text_font_weight",
	$header_cart_text_font_weight
);

$row3 = new MooseElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$header_cart_text_letter_spacing = new MooseElatedField(
	"textsimple",
	"header_cart_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"header_cart_text_letter_spacing",
	$header_cart_text_letter_spacing
);

$group5 = new MooseElatedGroup(
	esc_html__( "Cart Icon Style", 'moose' ),
	esc_html__( "Define cart icon style in header.", 'moose' )
);
$panel4->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$header_cart_icon_color = new MooseElatedField(
	"colorsimple",
	"header_cart_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_icon_color",
	$header_cart_icon_color
);

$header_cart_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"header_cart_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_icon_hover_color",
	$header_cart_icon_hover_color
);

$header_cart_icon_size = new MooseElatedField(
	"textsimple",
	"header_cart_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_icon_size",
	$header_cart_icon_size
);

$group6 = new MooseElatedGroup(
	esc_html__( "Count Number Style", 'moose' ),
	esc_html__( "Define count number style in header.", 'moose' )
);
$panel4->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$header_cart_icon_count_color = new MooseElatedField(
	"colorsimple",
	"header_cart_icon_count_color",
	"",
	esc_html__( "Count Number Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_icon_count_color",
	$header_cart_icon_count_color
);

$header_cart_icon_count_hover_color = new MooseElatedField(
	"colorsimple",
	"header_cart_icon_count_hover_color",
	"",
	esc_html__( "Count Number Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_icon_count_hover_color",
	$header_cart_icon_count_hover_color
);

$header_cart_icon_count_back_color = new MooseElatedField(
	"colorsimple",
	"header_cart_icon_count_back_color",
	"",
	esc_html__( "Count Number Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_icon_count_back_color",
	$header_cart_icon_count_back_color
);

$header_cart_icon_count_back_hover_color = new MooseElatedField(
	"colorsimple",
	"header_cart_icon_count_back_hover_color",
	"",
	esc_html__( "Count Number Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_icon_count_back_hover_color",
	$header_cart_icon_count_back_hover_color
);

$row2 = new MooseElatedRow();
$group6->addChild(
	"row2",
	$row2
);

$header_cart_icon_count_size = new MooseElatedField(
	"textsimple",
	"header_cart_icon_count_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"header_cart_icon_count_size",
	$header_cart_icon_count_size
);

$group_count_number_sticky = new MooseElatedGroup(
	esc_html__( "Cart Style for Sticky Menu", 'moose' ),
	esc_html__( "Define cart style for sticky menu.", 'moose' )
);
$panel4->addChild(
	"group_count_number_sticky",
	$group_count_number_sticky
);

$row1 = new MooseElatedRow();
$group_count_number_sticky->addChild(
	"row1",
	$row1
);

$header_sticky_cart_icon_count_color = new MooseElatedField(
	"colorsimple",
	"header_sticky_cart_icon_count_color",
	"",
	esc_html__( "Count Number Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_color",
	$header_sticky_cart_icon_count_color
);

$header_sticky_cart_icon_count_hover_color = new MooseElatedField(
	"colorsimple",
	"header_sticky_cart_icon_count_hover_color",
	"",
	esc_html__( "Count Number Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_hover_color",
	$header_sticky_cart_icon_count_hover_color
);

$header_sticky_cart_icon_count_back_color = new MooseElatedField(
	"colorsimple",
	"header_sticky_cart_icon_count_back_color",
	"",
	esc_html__( "Count Number Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_back_color",
	$header_sticky_cart_icon_count_back_color
);

$header_sticky_cart_icon_count_back_hover_color = new MooseElatedField(
	"colorsimple",
	"header_sticky_cart_icon_count_back_hover_color",
	"",
	esc_html__( "Count Number Hover Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_sticky_cart_icon_count_back_hover_color",
	$header_sticky_cart_icon_count_back_hover_color
);

$row2 = new MooseElatedRow();
$group_count_number_sticky->addChild(
	"row2",
	$row2
);

$header_sticky_cart_icon_color = new MooseElatedField(
	"colorsimple",
	"header_sticky_cart_icon_color",
	"",
	esc_html__( "Cart Icon Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"header_sticky_cart_icon_color",
	$header_sticky_cart_icon_color
);

$header_sticky_cart_icon_hover_color = new MooseElatedField(
	"colorsimple",
	"header_sticky_cart_icon_hover_color",
	"",
	esc_html__( "Cart Icon Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"header_sticky_cart_icon_hover_color",
	$header_sticky_cart_icon_hover_color
);

$group7 = new MooseElatedGroup(
	esc_html__( "Button with Text Style", 'moose' ),
	esc_html__( "Define button with text style in header.", 'moose' )
);
$panel4->addChild(
	"group7",
	$group7
);

$row1 = new MooseElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$header_cart_button_background_color = new MooseElatedField(
	"colorsimple",
	"header_cart_button_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_button_background_color",
	$header_cart_button_background_color
);

$header_cart_button_background_hover_color = new MooseElatedField(
	"colorsimple",
	"header_cart_button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_button_background_hover_color",
	$header_cart_button_background_hover_color
);

$ww_dropdown_styles_title = new MooseElatedTitle(
	"ww_dropdown_styles_title",
	esc_html__( "Dropdown Item Style", 'moose' )
);
$panel4->addChild(
	"ww_dropdown_styles_title",
	$ww_dropdown_styles_title
);

$header_cart_drop_down_position = new MooseElatedField(
	"selectblank",
	"header_cart_drop_down_position",
	"",
	esc_html__( "Dropdown Position", 'moose' ),
	esc_html__( "Choose position of dropdown", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$panel4->addChild(
	"header_cart_drop_down_position",
	$header_cart_drop_down_position
);

$group_drop_down_back_color = new MooseElatedGroup(
	esc_html__( "Dropdown Styles", 'moose' ),
	esc_html__( "Define dropdown box style", 'moose' )
);
$panel4->addChild(
	"group_drop_down_back_color",
	$group_drop_down_back_color
);

$row1 = new MooseElatedRow();
$group_drop_down_back_color->addChild(
	"row1",
	$row1
);

$header_cart_drop_down_back_color = new MooseElatedField(
	"colorsimple",
	"header_cart_drop_down_back_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_drop_down_back_color",
	$header_cart_drop_down_back_color
);

$header_cart_drop_down_border_color = new MooseElatedField(
	"colorsimple",
	"header_cart_drop_down_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"header_cart_drop_down_border_color",
	$header_cart_drop_down_border_color
);

$group8 = new MooseElatedGroup(
	esc_html__( "Product Name & Price Style", 'moose' ),
	esc_html__( "Define style for product name and price", 'moose' )
);
$panel4->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$drop_down_product_name_color = new MooseElatedField(
	"colorsimple",
	"drop_down_product_name_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_name_color",
	$drop_down_product_name_color
);

$drop_down_product_name_hover_color = new MooseElatedField(
	"colorsimple",
	"drop_down_product_name_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_name_hover_color",
	$drop_down_product_name_hover_color
);

$drop_down_product_name_font_size = new MooseElatedField(
	"textsimple",
	"drop_down_product_name_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_name_font_size",
	$drop_down_product_name_font_size
);

$drop_down_product_name_line_height = new MooseElatedField(
	"textsimple",
	"drop_down_product_name_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_name_line_height",
	$drop_down_product_name_line_height
);

$row2 = new MooseElatedRow();
$group8->addChild(
	"row2",
	$row2
);

$drop_down_product_name_text_transform = new MooseElatedField(
	"selectblanksimple",
	"drop_down_product_name_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"drop_down_product_name_text_transform",
	$drop_down_product_name_text_transform
);

$drop_down_product_name_font_family = new MooseElatedField(
	"fontsimple",
	"drop_down_product_name_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"drop_down_product_name_font_family",
	$drop_down_product_name_font_family
);

$drop_down_product_name_font_style = new MooseElatedField(
	"selectblanksimple",
	"drop_down_product_name_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"drop_down_product_name_font_style",
	$drop_down_product_name_font_style
);

$drop_down_product_name_font_weight = new MooseElatedField(
	"selectblanksimple",
	"drop_down_product_name_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"drop_down_product_name_font_weight",
	$drop_down_product_name_font_weight
);

$row3 = new MooseElatedRow();
$group8->addChild(
	"row3",
	$row3
);

$drop_down_product_name_letter_spacing = new MooseElatedField(
	"textsimple",
	"drop_down_product_name_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"drop_down_product_name_letter_spacing",
	$drop_down_product_name_letter_spacing
);

$group9 = new MooseElatedGroup(
	esc_html__( "Product Quantity Style", 'moose' ),
	esc_html__( "Define style for product quantity", 'moose' )
);
$panel4->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$drop_down_product_quantity_color = new MooseElatedField(
	"colorsimple",
	"drop_down_product_quantity_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_quantity_color",
	$drop_down_product_quantity_color
);

$drop_down_product_quantity_font_size = new MooseElatedField(
	"textsimple",
	"drop_down_product_quantity_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_quantity_font_size",
	$drop_down_product_quantity_font_size
);

$drop_down_product_quantity_line_height = new MooseElatedField(
	"textsimple",
	"drop_down_product_quantity_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_quantity_line_height",
	$drop_down_product_quantity_line_height
);

$drop_down_product_quantity_text_transform = new MooseElatedField(
	"selectblanksimple",
	"drop_down_product_quantity_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"drop_down_product_quantity_text_transform",
	$drop_down_product_quantity_text_transform
);

$row2 = new MooseElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$drop_down_product_quantity_font_family = new MooseElatedField(
	"fontsimple",
	"drop_down_product_quantity_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"drop_down_product_quantity_font_family",
	$drop_down_product_quantity_font_family
);

$drop_down_product_quantity_font_style = new MooseElatedField(
	"selectblanksimple",
	"drop_down_product_quantity_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"drop_down_product_quantity_font_style",
	$drop_down_product_quantity_font_style
);

$drop_down_product_quantity_font_weight = new MooseElatedField(
	"selectblanksimple",
	"drop_down_product_quantity_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"drop_down_product_quantity_font_weight",
	$drop_down_product_quantity_font_weight
);

$drop_down_product_quantity_letter_spacing = new MooseElatedField(
	"textsimple",
	"drop_down_product_quantity_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"drop_down_product_quantity_letter_spacing",
	$drop_down_product_quantity_letter_spacing
);

$group10 = new MooseElatedGroup(
	esc_html__( "Product Total Style", 'moose' ),
	esc_html__( "Define style for product total", 'moose' )
);
$panel4->addChild(
	"group10",
	$group10
);

$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$drop_down_product_total_color = new MooseElatedField(
	"colorsimple",
	"drop_down_product_total_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_total_color",
	$drop_down_product_total_color
);

$drop_down_product_total_font_size = new MooseElatedField(
	"textsimple",
	"drop_down_product_total_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_total_font_size",
	$drop_down_product_total_font_size
);

$drop_down_product_total_line_height = new MooseElatedField(
	"textsimple",
	"drop_down_product_total_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_product_total_line_height",
	$drop_down_product_total_line_height
);

$drop_down_product_total_text_transform = new MooseElatedField(
	"selectblanksimple",
	"drop_down_product_total_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"drop_down_product_total_text_transform",
	$drop_down_product_total_text_transform
);

$row2 = new MooseElatedRow();
$group10->addChild(
	"row2",
	$row2
);

$drop_down_product_total_font_family = new MooseElatedField(
	"fontsimple",
	"drop_down_product_total_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"drop_down_product_total_font_family",
	$drop_down_product_total_font_family
);

$drop_down_product_total_font_style = new MooseElatedField(
	"selectblanksimple",
	"drop_down_product_total_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"drop_down_product_total_font_style",
	$drop_down_product_total_font_style
);

$drop_down_product_total_font_weight = new MooseElatedField(
	"selectblanksimple",
	"drop_down_product_total_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"drop_down_product_total_font_weight",
	$drop_down_product_total_font_weight
);

$drop_down_product_total_letter_spacing = new MooseElatedField(
	"textsimple",
	"drop_down_product_total_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"drop_down_product_total_letter_spacing",
	$drop_down_product_total_letter_spacing
);

$group_drop_cart_buttons = new MooseElatedGroup(
	esc_html__( "Dropdown Cart Buttons", 'moose' ),
	esc_html__( "Define style for dropdown cart buttons", 'moose' )
);
$panel4->addChild(
	"group_drop_cart_buttons",
	$group_drop_cart_buttons
);

$row1 = new MooseElatedRow();
$group_drop_cart_buttons->addChild(
	"row1",
	$row1
);

$drop_down_cart_button_color = new MooseElatedField(
	"colorsimple",
	"drop_down_cart_button_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_cart_button_color",
	$drop_down_cart_button_color
);

$drop_down_cart_button_color_hover = new MooseElatedField(
	"colorsimple",
	"drop_down_cart_button_color_hover",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_cart_button_color_hover",
	$drop_down_cart_button_color_hover
);

$drop_down_cart_button_line_height = new MooseElatedField(
	"textsimple",
	"drop_down_cart_button_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_cart_button_line_height",
	$drop_down_cart_button_line_height
);

$row2 = new MooseElatedRow();
$group_drop_cart_buttons->addChild(
	"row2",
	$row2
);

$drop_down_cart_button_text_transform = new MooseElatedField(
	"selectblanksimple",
	"drop_down_cart_button_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"drop_down_cart_button_text_transform",
	$drop_down_cart_button_text_transform
);

$drop_down_cart_button_font_family = new MooseElatedField(
	"fontsimple",
	"drop_down_cart_button_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"drop_down_cart_button_font_family",
	$drop_down_cart_button_font_family
);

$drop_down_cart_button_font_style = new MooseElatedField(
	"selectblanksimple",
	"drop_down_cart_button_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"drop_down_cart_button_font_style",
	$drop_down_cart_button_font_style
);

$drop_down_cart_button_font_weight = new MooseElatedField(
	"selectblanksimple",
	"drop_down_cart_button_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"drop_down_cart_button_font_weight",
	$drop_down_cart_button_font_weight
);

$row3 = new MooseElatedRow();
$group_drop_cart_buttons->addChild(
	"row3",
	$row3
);

$drop_down_cart_button_background_color = new MooseElatedField(
	"colorsimple",
	"drop_down_cart_button_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"drop_down_cart_button_background_color",
	$drop_down_cart_button_background_color
);

$drop_down_cart_button_background_color_hover = new MooseElatedField(
	"colorsimple",
	"drop_down_cart_button_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"drop_down_cart_button_background_color_hover",
	$drop_down_cart_button_background_color_hover
);

$group_drop_cart_remove_button = new MooseElatedGroup(
	esc_html__( "Remove Button Style", 'moose' ),
	esc_html__( "Define style for remove button", 'moose' )
);
$panel4->addChild(
	"group_drop_cart_remove_button",
	$group_drop_cart_remove_button
);

$row1 = new MooseElatedRow();
$group_drop_cart_remove_button->addChild(
	"row1",
	$row1
);

$drop_down_remove_button_color = new MooseElatedField(
	"colorsimple",
	"drop_down_remove_button_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_remove_button_color",
	$drop_down_remove_button_color
);

$drop_down_remove_button_color_hover = new MooseElatedField(
	"colorsimple",
	"drop_down_remove_button_color_hover",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_remove_button_color_hover",
	$drop_down_remove_button_color_hover
);

$drop_down_remove_button_back_color = new MooseElatedField(
	"colorsimple",
	"drop_down_remove_button_back_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_remove_button_back_color",
	$drop_down_remove_button_back_color
);

$drop_down_remove_button_back_color_hover = new MooseElatedField(
	"colorsimple",
	"drop_down_remove_button_back_color_hover",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"drop_down_remove_button_back_color_hover",
	$drop_down_remove_button_back_color_hover
);

//Footer widget

$panel5 = new MooseElatedPanel(
	esc_html__( "Footer Widget", 'moose' ),
	"footer_product_widget"
);
$woocommercePage->addChild(
	"panel5",
	$panel5
);

$group1 = new MooseElatedGroup(
	esc_html__( "Product Title", 'moose' ),
	esc_html__( "Define styles for product title in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'moose' )
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

$footer_wdgt_product_title_color = new MooseElatedField(
	"colorsimple",
	"footer_wdgt_product_title_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_wdgt_product_title_color",
	$footer_wdgt_product_title_color
);

$footer_wdgt_product_title_font_size = new MooseElatedField(
	"textsimple",
	"footer_wdgt_product_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_wdgt_product_title_font_size",
	$footer_wdgt_product_title_font_size
);

$footer_wdgt_product_title_line_height = new MooseElatedField(
	"textsimple",
	"footer_wdgt_product_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_wdgt_product_title_line_height",
	$footer_wdgt_product_title_line_height
);

$footer_wdgt_product_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"footer_wdgt_product_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"footer_wdgt_product_title_text_transform",
	$footer_wdgt_product_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$footer_wdgt_product_title_font_family = new MooseElatedField(
	"fontsimple",
	"footer_wdgt_product_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_wdgt_product_title_font_family",
	$footer_wdgt_product_title_font_family
);

$footer_wdgt_product_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"footer_wdgt_product_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"footer_wdgt_product_title_font_style",
	$footer_wdgt_product_title_font_style
);

$footer_wdgt_product_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"footer_wdgt_product_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"footer_wdgt_product_title_font_weight",
	$footer_wdgt_product_title_font_weight
);

$footer_wdgt_product_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"footer_wdgt_product_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_wdgt_product_title_letter_spacing",
	$footer_wdgt_product_title_letter_spacing
);

$row3 = new MooseElatedRow();
$group1->addChild(
	"row3",
	$row3
);
$footer_wdgt_product_title_hover_color = new MooseElatedField(
	"colorsimple",
	"footer_wdgt_product_title_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"footer_wdgt_product_title_hover_color",
	$footer_wdgt_product_title_hover_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Product Price", 'moose' ),
	esc_html__( "Define product price text style in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'moose' )
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

$footer_wdgt_product_price_color = new MooseElatedField(
	"colorsimple",
	"footer_wdgt_product_price_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_wdgt_product_price_color",
	$footer_wdgt_product_price_color
);

$footer_wdgt_product_price_font_size = new MooseElatedField(
	"textsimple",
	"footer_wdgt_product_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_wdgt_product_price_font_size",
	$footer_wdgt_product_price_font_size
);

$footer_wdgt_product_price_line_height = new MooseElatedField(
	"textsimple",
	"footer_wdgt_product_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"footer_wdgt_product_price_line_height",
	$footer_wdgt_product_price_line_height
);

$footer_wdgt_product_price_text_transform = new MooseElatedField(
	"selectblanksimple",
	"footer_wdgt_product_price_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"footer_wdgt_product_price_text_transform",
	$footer_wdgt_product_price_text_transform
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$footer_wdgt_product_price_font_family = new MooseElatedField(
	"fontsimple",
	"footer_wdgt_product_price_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_wdgt_product_price_font_family",
	$footer_wdgt_product_price_font_family
);

$footer_wdgt_product_price_font_style = new MooseElatedField(
	"selectblanksimple",
	"footer_wdgt_product_price_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"footer_wdgt_product_price_font_style",
	$footer_wdgt_product_price_font_style
);

$footer_wdgt_product_price_font_weight = new MooseElatedField(
	"selectblanksimple",
	"footer_wdgt_product_price_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"footer_wdgt_product_price_font_weight",
	$footer_wdgt_product_price_font_weight
);

$footer_wdgt_product_price_letter_spacing = new MooseElatedField(
	"textsimple",
	"footer_wdgt_product_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"footer_wdgt_product_price_letter_spacing",
	$footer_wdgt_product_price_letter_spacing
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$footer_wdgt_product_price_old_color = new MooseElatedField(
	"colorsimple",
	"footer_wdgt_product_price_old_color",
	"",
	esc_html__( "Old Price Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"footer_wdgt_product_price_old_color",
	$footer_wdgt_product_price_old_color
);
