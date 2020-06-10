<?php
$moose_elated_icon_collections = moose_elated_return_icon_collections();

/*** Removing shortcodes ***/

vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");
vc_remove_element("vc_gmaps");
vc_remove_element("vc_cta");
vc_remove_element("vc_round_chart");
vc_remove_element("vc_line_chart");
vc_remove_element("vc_tta_accordion");
vc_remove_element("vc_tta_tour");
vc_remove_element("vc_tta_tabs");
vc_remove_element("vc_section");

/***Remove Grid Elements if disabled ***/

if (!moose_elated_vc_grid_elements_enabled() && version_compare(moose_elated_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_element('vc_basic_grid');
	vc_remove_element('vc_media_grid');
	vc_remove_element('vc_masonry_grid');
	vc_remove_element('vc_masonry_media_grid');
	vc_remove_element('vc_icon');
	vc_remove_element('vc_button2');
	vc_remove_element("vc_custom_heading");
	vc_remove_element("vc_btn");
}


/*** Remove unused parameters ***/

if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_single_image', 'title');
	vc_remove_param('vc_gallery', 'title');
	vc_remove_param('vc_column_text', 'css_animation');
	vc_remove_param('vc_row', 'video_bg');
	vc_remove_param('vc_row', 'video_bg_url');
	vc_remove_param('vc_row', 'video_bg_parallax');
	vc_remove_param('vc_row', 'full_height');
	vc_remove_param('vc_row', 'content_placement');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param( "vc_row", "css" );
	vc_remove_param( "vc_row_inner", "css" );
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_tabs', 'title');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'title_align');
	vc_remove_param('vc_accordion', 'title');
	vc_remove_param('vc_row', 'gap');
        vc_remove_param('vc_row', 'columns_placement');
        vc_remove_param('vc_row', 'equal_height');
        vc_remove_param('vc_row_inner', 'gap');
        vc_remove_param('vc_row_inner', 'columns_placement');
        vc_remove_param('vc_row_inner', 'equal_height');
        vc_remove_param('vc_row_inner', 'content_placement');
	vc_remove_param('vc_row', 'parallax_speed_bg');
	vc_remove_param('vc_row', 'parallax_speed_video');
	vc_remove_param('vc_row', 'css_animation');
        vc_remove_param('vc_text_separator', 'add_icon');
        vc_remove_param('vc_text_separator', 'vc_icon');
        vc_remove_param('vc_text_separator', 'i_icon_material');
        vc_remove_param('vc_text_separator', 'i_icon_monosocial');
        vc_remove_param('vc_text_separator', 'i_type');
        vc_remove_param('vc_text_separator', 'i_icon_fontawesome');
        vc_remove_param('vc_text_separator', 'i_icon_openiconic');
        vc_remove_param('vc_text_separator', 'i_icon_typicons');
        vc_remove_param('vc_text_separator', 'i_icon_entypo');
        vc_remove_param('vc_text_separator', 'i_icon_linecons');
        vc_remove_param('vc_text_separator', 'i_color');
        vc_remove_param('vc_text_separator', 'i_custom_color');
        vc_remove_param('vc_text_separator', 'i_background_color');
        vc_remove_param('vc_text_separator', 'i_background_style');
        vc_remove_param('vc_text_separator', 'i_custom_background_color');
        vc_remove_param('vc_text_separator', 'i_size');
        vc_remove_param('vc_text_separator', 'i_css_animation');

	vc_remove_param('vc_row_inner', 'disable_element');
    vc_remove_param('vc_row', 'disable_element');

    //remove vc parallax functionality
    vc_remove_param('vc_row', 'parallax');
    vc_remove_param('vc_row', 'parallax_image');

	if(version_compare(moose_elated_get_vc_version(), '4.4.2') >= 0) {
		vc_remove_param('vc_accordion', 'disable_keyboard');
		vc_remove_param('vc_separator', 'align');
		vc_remove_param('vc_separator', 'border_width');
		vc_remove_param('vc_text_separator', 'align');
		vc_remove_param('vc_text_separator', 'border_width');
	}

	if(version_compare(moose_elated_get_vc_version(), '4.7.4') >= 0) {
		add_action( 'init', 'moose_elated_remove_vc_image_zoom',11);
		function moose_elated_remove_vc_image_zoom() {
			//Remove zoom from click action on single image
			$param = WPBMap::getParam( 'vc_single_image', 'onclick' );
			unset($param['value']['Zoom']);
			vc_update_shortcode_param( 'vc_single_image', $param );
		}
		vc_remove_param('vc_text_separator', 'css');
		vc_remove_param('vc_separator', 'css');
	}
}


/*** Remove unused parameters from grid elements ***/

if (function_exists('vc_remove_param') && moose_elated_vc_grid_elements_enabled() && version_compare(moose_elated_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_param('vc_basic_grid', 'button_style');
	vc_remove_param('vc_basic_grid', 'button_color');
	vc_remove_param('vc_basic_grid', 'button_size');
	vc_remove_param('vc_basic_grid', 'filter_color');
	vc_remove_param('vc_basic_grid', 'filter_style');
	vc_remove_param('vc_media_grid', 'button_style');
	vc_remove_param('vc_media_grid', 'button_color');
	vc_remove_param('vc_media_grid', 'button_size');
	vc_remove_param('vc_media_grid', 'filter_color');
	vc_remove_param('vc_media_grid', 'filter_style');
	vc_remove_param('vc_masonry_grid', 'button_style');
	vc_remove_param('vc_masonry_grid', 'button_color');
	vc_remove_param('vc_masonry_grid', 'button_size');
	vc_remove_param('vc_masonry_grid', 'filter_color');
	vc_remove_param('vc_masonry_grid', 'filter_style');
	vc_remove_param('vc_masonry_media_grid', 'button_style');
	vc_remove_param('vc_masonry_media_grid', 'button_color');
	vc_remove_param('vc_masonry_media_grid', 'button_size');
	vc_remove_param('vc_masonry_media_grid', 'filter_color');
	vc_remove_param('vc_masonry_media_grid', 'filter_style');
	vc_remove_param('vc_basic_grid', 'paging_color');
	vc_remove_param('vc_basic_grid', 'arrows_color');
	vc_remove_param('vc_media_grid', 'paging_color');
	vc_remove_param('vc_media_grid', 'arrows_color');
	vc_remove_param('vc_masonry_grid', 'paging_color');
	vc_remove_param('vc_masonry_grid', 'arrows_color');
	vc_remove_param('vc_masonry_media_grid', 'paging_color');
	vc_remove_param('vc_masonry_media_grid', 'arrows_color');
}


/*** Remove frontend editor ***/

if(function_exists('vc_disable_frontend')){
	vc_disable_frontend();
}

$animations = array(
	esc_html__("No animations", 'moose' ) => "",
	esc_html__("Elements Shows From Left Side", 'moose' ) => "element_from_left",
	esc_html__("Elements Shows From Right Side", 'moose' ) => "element_from_right",
	esc_html__("Elements Shows From Top Side", 'moose' ) => "element_from_top",
	esc_html__("Elements Shows From Bottom Side", 'moose' ) => "element_from_bottom",
	esc_html__("Elements Shows From Fade", 'moose' ) => "element_from_fade"
);
$font_weight_array = array(
	esc_html__( "Default", 'moose' ) => "",
	esc_html__( "Thin 100", 'moose' ) => "100",
	esc_html__( "Extra-Light 200", 'moose' ) => "200",
	esc_html__( "Light 300", 'moose' ) => "300",
	esc_html__( "Regular 400", 'moose' ) => "400",
	esc_html__( "Medium 500", 'moose' ) => "500",
	esc_html__( "Semi-Bold 600", 'moose' ) => "600",
	esc_html__( "Bold 700", 'moose' ) => "700",
	esc_html__( "Extra-Bold 800", 'moose' ) => "800",
	esc_html__( "Ultra-Bold 900", 'moose' ) => "900"
);
$social_icons_array = array(
	"" => "",
	esc_html__( "ADN", 'moose' ) => "fa-adn",
	esc_html__( "Android", 'moose' ) => "fa-android",
	esc_html__( "Apple", 'moose' ) => "fa-apple",
	esc_html__( "Bitbucket", 'moose' ) => "fa-bitbucket",
	esc_html__( "Bitbucket-Sign", 'moose' ) => "fa-bitbucket-sign",
	esc_html__( "Bitcoin", 'moose' ) => "fa-bitcoin",
	esc_html__( "BTC", 'moose' ) => "fa-btc",
	esc_html__( "CSS3", 'moose' ) => "fa-css3",
	esc_html__( "Dribbble", 'moose' ) => "fa-dribbble",
	esc_html__( "Dropbox", 'moose' ) => "fa-dropbox",
	esc_html__( "Facebook", 'moose' ) => "fa-facebook",
	esc_html__( "Facebook-Sign", 'moose' ) => "fa-facebook-sign",
	esc_html__( "Flickr", 'moose' ) => "fa-flickr",
	esc_html__( "Foursquare", 'moose' ) => "fa-foursquare",
	esc_html__( "GitHub", 'moose' ) => "fa-github",
	esc_html__( "GitHub-Alt", 'moose' ) => "fa-github-alt",
	esc_html__( "GitHub-Sign", 'moose' ) => "fa-github-sign",
	esc_html__( "Gittip", 'moose' ) => "fa-gittip",
	esc_html__( "Google Plus", 'moose' ) => "fa-google-plus",
	esc_html__( "Google Plus-Sign", 'moose' ) => "fa-google-plus-sign",
	esc_html__( "HTML5", 'moose' ) => "fa-html5",
	esc_html__( "Instagram", 'moose' ) => "fa-instagram",
	esc_html__( "LinkedIn", 'moose' ) => "fa-linkedin",
	esc_html__( "LinkedIn-Sign", 'moose' ) => "fa-linkedin-sign",
	esc_html__( "Linux", 'moose' ) => "fa-linux",
	esc_html__( "MaxCDN", 'moose' ) => "fa-maxcdn",
	esc_html__( "Paypal", 'moose' ) => "fa-paypal",
	esc_html__( "Pinterest", 'moose' ) => "fa-pinterest",
	esc_html__( "Pinterest-Sign", 'moose' ) => "fa-pinterest-sign",
	esc_html__( "Renren", 'moose' ) => "fa-renren",
	esc_html__( "Skype", 'moose' ) => "fa-skype",
	esc_html__( "StackExchange", 'moose' ) => "fa-stackexchange",
	esc_html__( "Trello", 'moose' ) => "fa-trello",
	esc_html__( "Tumblr", 'moose' ) => "fa-tumblr",
	esc_html__( "Tumblr-Sign", 'moose' ) => "fa-tumblr-sign",
	esc_html__( "Twitter", 'moose' ) => "fa-twitter",
	esc_html__( "Twitter-Sign", 'moose' ) => "fa-twitter-sign",
	esc_html__( "VK", 'moose' ) => "fa-vk",
	esc_html__( "Weibo", 'moose' ) => "fa-weibo",
	esc_html__( "Windows", 'moose' ) => "fa-windows",
	esc_html__( "Xing", 'moose' ) => "fa-xing",
	esc_html__( "Xing-Sign", 'moose' ) => "fa-xing-sign",
	esc_html__( "YouTube", 'moose' ) => "fa-youtube",
	esc_html__( "YouTube Play", 'moose' ) => "fa-youtube-play",
	esc_html__( "YouTube-Sign", 'moose' ) => "fa-youtube-sign"
);

/*** Accordion ***/

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Transparent Background", 'moose' ),
	"param_name" => "background_transparency",
	"value" => array(
		esc_html__( "No", 'moose' ) => "no",
		esc_html__( "Yes", 'moose' ) => "yes"
	),
	"save_always" => true
));

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Style", 'moose' ),
	"param_name" => "style",
	"value" => array(
		esc_html__( "Accordion", 'moose' ) => "accordion",
		esc_html__( "Toggle", 'moose' ) => "toggle",
        esc_html__( "Boxed Accordion", 'moose' ) => "boxed_accordion",
        esc_html__( "Boxed Toggle", 'moose' ) => "boxed_toggle"
	),
	"save_always" => true
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Accordion Title Border Radius", 'moose' ),
	"param_name" => "accordion_section_border_radius",
	"value" => "",
	"dependency" => Array('element' => "style", 'value' => array('boxed_accordion', 'boxed_toggle'))
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Accordion Mark Border Radius", 'moose' ),
	"param_name" => "accordion_border_radius",
	"value" => "",
	"dependency" => Array('element' => "style", 'value' => array('accordion', 'toggle'))
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Accordion Title Height", 'moose' ),
	"param_name" => "accordion_section_height",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Type", 'moose' ),
    "param_name" => "accordion_type",
    "value" => array(
		esc_html__( "Standard Accordion", 'moose' ) => "standard_accordion",
		esc_html__( "With Icon", 'moose' ) => "accordion_icon"
	),
	"save_always" => true
));

vc_add_param("vc_accordion_tab", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Icon Pack", 'moose' ),
    "param_name" => $moose_elated_icon_collections->iconPackParamName,
    "value" => $moose_elated_icon_collections->getIconCollectionsVC(),
	"dependency" => Array('element' => "accordion_type", 'value' => array('accordion_icon'))
));

foreach ($moose_elated_icon_collections->iconCollections as $collection_key => $collection ) {
    vc_add_param("vc_accordion_tab", array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Icon", 'moose' ),
        "param_name" => $collection->param,
        "value" => $collection->getIconsArray(),
        "dependency" => Array('element' => $moose_elated_icon_collections->iconPackParamName, 'value' => array($collection_key))
    ));
}
vc_add_param("vc_accordion_tab", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Icon size(px)", 'moose' ),
	"param_name" => "icon_custom_size",
	"value" => "",
	"dependency" => Array('element' => "accordion_type", 'value' => array('accordion_icon'))
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Icon Color", 'moose' ),
	"param_name" => "icon_color",
	"value" => "",
	"dependency" => Array('element' => "accordion_type", 'value' => array('accordion_icon'))
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Icon Hover Color", 'moose' ),
	"param_name" => "hover_icon_color",
	"value" => "",
	"dependency" => Array('element' => "accordion_type", 'value' => array('accordion_icon'))
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Color", 'moose' ),
	"param_name" => "title_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Hover Color", 'moose' ),
	"param_name" => "title_hover_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Mark Icon Color", 'moose' ),
	"param_name" => "mark_icon_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Mark Icon Hover Color", 'moose' ),
	"param_name" => "mark_icon_color_hover",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Background Color", 'moose' ),
	"param_name" => "background_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions with background transparency set to No", 'moose' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Background Hover Color", 'moose' ),
	"param_name" => "background_hover_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions with background transparency set to No", 'moose' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Border Color", 'moose' ),
	"param_name" => "border_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'moose' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Border Hover Color", 'moose' ),
	"param_name" => "border_hover_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'moose' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Title Tag", 'moose' ),
    "param_name" => "title_tag",
    "value" => array(
        ""   => "",
		"p"  => "p",
        esc_html__( "h2", 'moose' ) => "h2",
        esc_html__( "h3", 'moose' ) => "h3",
        esc_html__( "h4", 'moose' ) => "h4",	
        esc_html__( "h5", 'moose' ) => "h5",
        esc_html__( "h6", 'moose' ) => "h6",
    )
));


/*** Tabs ***/

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Style", 'moose' ),
	"param_name" => "style",
	"value" => array(
		esc_html__( "Horizontal Center", 'moose' ) => "horizontal",
		esc_html__( "Horizontal Center With Icons", 'moose' ) => "horizontal_with_icons",
		esc_html__( "Horizontal Center With Text And Icons", 'moose' ) => "horizontal_with_text_and_icons",
		esc_html__( "Horizontal Left", 'moose' ) => "horizontal_left",
		esc_html__( "Horizontal Left With Icons", 'moose' ) => "horizontal_left_with_icons",
		esc_html__( "Horizontal Left With Text And Icons", 'moose' ) => "horizontal_left_with_text_and_icons",
		esc_html__( "Horizontal Right", 'moose' ) => "horizontal_right",
		esc_html__( "Horizontal Right With Icons", 'moose' ) => "horizontal_right_with_icons",
		esc_html__( "Horizontal Right With Text And Icons", 'moose' ) => "horizontal_right_with_text_and_icons",
		esc_html__( "Vertical Left", 'moose' ) => "vertical_left",
		esc_html__( "Vertical Left With Icons", 'moose' ) => "vertical_left_with_icons",
        esc_html__( "Vertical Left With Text and Icons", 'moose' ) => "vertical_left_with_text_and_icons",
		esc_html__( "Vertical Right", 'moose' ) => "vertical_right",
        esc_html__( "Vertical Right With Icons", 'moose' ) => "vertical_right_with_icons",
        esc_html__( "Vertical Right With Text and Icons", 'moose' ) => "vertical_right_with_text_and_icons",
	),
	"save_always" => true
));

vc_add_param("vc_tabs", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Set Transparent Tabs", 'moose' ),
    "param_name" => "transparent_tabs",
    "value" => array(
        esc_html__( "No", 'moose' ) => "no",
        esc_html__( "Yes", 'moose' ) => "yes"
    )    
));

vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Space Between Tab and Content (px)", 'moose' ),
    "param_name" => "space_between_tab_and_content",
    "value" => "",
    "description" => esc_html__( "Insert value for space between Tab and Content (default value is 18px)", 'moose' ),
    "dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons','horizontal','horizontal_left','horizontal_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
));


vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Border Radius (px)", 'moose' ),
    "param_name" => "tab_border_radius",
    "value" => ""    
));

vc_add_param("vc_tabs", array(
    "type" => "dropdown",
    "heading" => esc_html__( "Icon Position", 'moose' ),
    "param_name" => "tab_icon_position",
    "value" => array(
        esc_html__( "Left", 'moose' ) => "left",
        esc_html__( "Right", 'moose' ) => "right"
    ),
	"save_always" => true,
    "dependency" => Array('element' => "style", 'value' => array('horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
));

vc_add_param("vc_tab", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Icon Pack", 'moose' ),
    "param_name" => $moose_elated_icon_collections->iconPackParamName,
	"save_always" => true,
    "value" => $moose_elated_icon_collections->getIconCollectionsVC()
));

foreach ($moose_elated_icon_collections->iconCollections as $collection_key => $collection ) {
    vc_add_param("vc_tab", array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Icon", 'moose' ),
        "param_name" => $collection->param,
        "value" => $collection->getIconsArray(),
        "dependency" => Array('element' => $moose_elated_icon_collections->iconPackParamName, 'value' => array($collection_key))
    ));
}


/*** Flickr Widget ***/

vc_add_param("vc_flickr", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Columns", 'moose' ),
    "param_name" => "columns",
    "value" => array(
        esc_html__( "Two", 'moose' ) => "two",
        esc_html__( "Three", 'moose' ) => "three",
        esc_html__( "Four", 'moose' ) => "four"
    ),
	"save_always" => true
));


/*** Empty Space ***/

vc_add_param("vc_empty_space",  array(
        "type" => "attach_image",
        "holder" => "div",
        'heading' => esc_html__( 'Background Image', 'moose' ),
        'param_name' => 'background_image',
        'value' => '',
        'description' => esc_html__( 'Select image from media library.', 'moose' ),
    )
);
vc_add_param("vc_empty_space",  array(
        "type" => "dropdown",
        'heading' => esc_html__( 'Image Repeat', 'moose' ),
        'param_name' => 'image_repeat',
        "value" => array(
            esc_html__( 'No Repeat', 'moose' ) => 'no-repeat',
            esc_html__( 'Repeat x', 'moose' ) => 'repeat-x',
            esc_html__( 'Repeat y', 'moose' ) => 'repeat-y',
            esc_html__( 'Repeat (x y)', 'moose' ) => 'repeat'
        ),
		'save_always' => true
    )
);

/*** Gallery ***/

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Column Number", 'moose' ),
	"param_name" => "column_number",
	 "value" => array(2, 3, 4, 5, "Disable" => 0),
	 "save_always" => true,
	 "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Grayscale Images", 'moose' ),
    "param_name" => "grayscale",
    "value" => array(
    	esc_html__( 'No', 'moose' ) => 'no',
	    esc_html__( 'Yes', 'moose' ) => 'yes'),
	"save_always" => true,
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Frame", 'moose' ),
    "param_name" => "frame",
	"value" => array("Use frame?" => "use_frame"),
	"value" => array(
		'' => '',
		esc_html__( 'Yes', 'moose' ) => 'use_frame',
		esc_html__( 'No', 'moose' ) => 'no'
	),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide'))
));

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Choose Frame", 'moose' ),
	"param_name" => "choose_frame",
	"value" => array(
		esc_html__( 'Default', 'moose' ) => 'default',
		esc_html__( 'Frame 1', 'moose' ) => 'frame1',
		esc_html__( 'Frame 2', 'moose' ) => 'frame2',
		esc_html__( 'Frame 3', 'moose' ) => 'frame3',
		esc_html__( 'Frame 4', 'moose' ) => 'frame4'
	),
	"save_always" => true,
	"dependency" => Array('element' => "frame", 'value' => array('use_frame'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Show image title?", 'moose' ),
    "param_name" => "show_image_title",
    "value" => array("Show image title in the bottom of image" => "show_image_title"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Disable navigation arrows?", 'moose' ),
    "param_name" => "disable_navigation_arrows",
    "value" => array("Disable navigation arrows" => "yes"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Show navigation controls?", 'moose' ),
    "param_name" => "show_navigation_controls",
    "value" => array("Show navigation controls" => "yes"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Alignment", 'moose' ),
    "param_name" => "title_alignment",
    "value" => array(
        esc_html__( "Left", 'moose' ) => "left",
        esc_html__( "Center", 'moose' ) => "center",
        esc_html__( "Right", 'moose' ) => "right"
    ),
	"save_always" => true,
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Title Font Family", 'moose' ),
    "param_name" => "title_font_family",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Title Font Size (px)", 'moose' ),
    "param_name" => "title_font_size",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Font Weight", 'moose' ),
    "param_name" => "title_font_weight",
    "value" => array(
        esc_html__( "Default", 'moose' ) => "",
        esc_html__( "Thin 100", 'moose' ) => "100",
        esc_html__( "Extra-Light 200", 'moose' ) => "200",
        esc_html__( "Light 300", 'moose' ) => "300",
        esc_html__( "Regular 400", 'moose' ) => "400",
        esc_html__( "Medium 500", 'moose' ) => "500",
        esc_html__( "Semi-Bold 600", 'moose' ) => "600",
        esc_html__( "Bold 700", 'moose' ) => "700",
        esc_html__( "Extra-Bold 800", 'moose' ) => "800",
        esc_html__( "Ultra-Bold 900", 'moose' ) => "900"
    ),
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Font Style", 'moose' ),
    "param_name" => "title_font_style",
    "value" => array(
        "" 		   => "",
        esc_html__( "Normal", 'moose' ) => "normal",
        esc_html__( "Italic", 'moose' ) => "italic"
    ),
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Layer Color", 'moose' ),
    "param_name" => "title_layer_color",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Background hover color", 'moose' ),
    "param_name" => "background_hover_color",
    "value" => "",
    "dependency" => Array('element' => "grayscale", 'value' => array("no"))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Choose hover icon", 'moose' ),
    "param_name" => "hover_icon",
    "value" => array(
    	esc_html__( 'None', 'moose' ) => 'none',
	    esc_html__( 'Magnifier', 'moose' ) => 'magnifier',
	    esc_html__( 'Plus', 'moose' ) => 'plus'),
	"save_always" => true,
    "dependency" => Array('element' => "grayscale", 'value' => array("no"))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Spaces between images", 'moose' ),
    "param_name" => "images_space",
    "value" => array(
	    esc_html__('No', 'moose' ) => 'gallery_without_space',
	    esc_html__('Yes', 'moose' ) => 'gallery_with_space'),
	"save_always" => true,
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));



/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'moose' ),
	"param_name" => "row_type",
	"value" => array(
		esc_html__( "Row", 'moose' ) => "row",
		esc_html__( "Parallax", 'moose' ) => "parallax",
		esc_html__( "Expandable", 'moose' ) => "expandable",
		esc_html__( "Content menu", 'moose' ) => "content_menu"
	),
	"save_always" => true
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Use Row as Full Screen Section", 'moose' ),
	"param_name" => "use_row_as_full_screen_section",
	"value" => array(
		esc_html__( "No", 'moose' ) => "no",
		esc_html__( "Yes", 'moose' ) => "yes"
	),
	"save_always" => true,
	"description" => esc_html__( "This option works only for Full Screen Sections Template", 'moose' ),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Type", 'moose' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Full Width", 'moose' ) => "full_width",
		esc_html__( "In Grid", 'moose' ) => "grid"		
	),
	"save_always" => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','content_menu'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Header Style", 'moose' ),
    "param_name" => "header_style",
    "value" => array(
        "" => "",
        esc_html__( "Light", 'moose' ) => "light",
        esc_html__( "Dark", 'moose' ) => "dark"
    ),
    "dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Anchor ID (Example home)", 'moose' ),
	"param_name" => "anchor",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Row in content menu", 'moose' ),
	"value" => array("Use row for content menu?" => "in_content_menu"),
	"param_name" => "in_content_menu",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable', 'expandable_with_background'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Content menu title", 'moose' ),
	"value" => "",
	"param_name" => "content_menu_title",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Content menu icon pack", 'moose' ),
	"param_name" => $moose_elated_icon_collections->iconPackParamName,
	"value" => $moose_elated_icon_collections->getIconCollectionsVC(),
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

foreach($moose_elated_icon_collections->iconCollections as $collection_key => $collection) {
    vc_add_param("vc_row", array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Content menu icon", 'moose' ),
        "param_name" => "content_menu_".$collection->param,
        "value" => $collection->getIconsArray(),
        "dependency" => Array('element' => $moose_elated_icon_collections->iconPackParamName, 'value' => array($collection_key))
    ));
}

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Text Align", 'moose' ),
	"param_name" => "text_align",
	"value" => array(
		esc_html__( "Left", 'moose' ) => "left",
		esc_html__( "Center", 'moose' ) => "center",
		esc_html__( "Right", 'moose' ) => "right"
	),
	"save_always" => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Video background", 'moose' ),
	"value" => array(
		esc_html__( "No", 'moose' ) => "",
		esc_html__( "Yes", 'moose' ) => "show_video"
	),
	"param_name" => "video",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Video overlay", 'moose' ),
	"value" => array(
		esc_html__( "No", 'moose' ) => "",
		esc_html__( "Yes", 'moose' ) => "show_video_overlay"
	),
	"param_name" => "video_overlay",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Video overlay image (pattern)", 'moose' ),
	"value" => "",
	"param_name" => "video_overlay_image",
	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Video background (webm) file url", 'moose' ),
	"value" => "",
	"param_name" => "video_webm",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Video background (mp4) file url", 'moose' ),
	"value" => "",
	"param_name" => "video_mp4",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Video background (ogv) file url", 'moose' ),
	"value" => "",
	"param_name" => "video_ogv",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Video preview image", 'moose' ),
	"value" => "",
	"param_name" => "video_image",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Background image", 'moose' ),
	"value" => "",
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Pattern background", 'moose' ),
	"value" => array("Use background image as pattern?" => "pattern_background"),
	"param_name" => "pattern_background",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Full Screen Height", 'moose' ),
    "param_name" => "full_screen_section_height",
    "value" => array(
        esc_html__( "No", 'moose' ) => "no",
        esc_html__( "Yes", 'moose' ) => "yes"
    ),
	"save_always" => true,
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Vertically Align Content In Middle", 'moose' ),
    "param_name" => "vertically_align_content_in_middle",
    "value" => array(
        esc_html__( "No", 'moose' ) => "no",
        esc_html__( "Yes", 'moose' ) => "yes"
    ),
	"save_always" => true,
    "dependency" => array('element' => 'full_screen_section_height', 'value' => 'yes')
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Section height", 'moose' ),
	"param_name" => "section_height",
	"value" => "",
	"dependency" => Array('element' => "full_screen_section_height", 'value' => array('no'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Use as box", 'moose' ),
	"value" => array("Use row as box" => "use_row_as_box" ),
	"param_name" => "use_as_box",
	"description" => esc_html__( '', 'moose' ),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Parallax speed", 'moose' ),
    "param_name" => "parallax_speed",
    "value" => "",
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Background color", 'moose' ),
	"param_name" => "background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable','content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Show logo", 'moose' ),
	"value" => array("Show logo in content menu" => "logo_in_content_menu"),
	"param_name" => "logo_in_content_menu",
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Custom widget area", 'moose' ),
	"param_name" => "custom_widget_area",
	"value" => array_merge(array('' => ''), array_flip(moose_elated_get_custom_sidebars())),
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Show Border Bottom", 'moose' ),
	"value" => array("Show border bottom on content menu?" => "yes"),
	"param_name" => "content_menu_border_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Content Menu Border Color", 'moose' ),
	"param_name" => "content_menu_border_color",
	"value" => "",
	"dependency" => Array('element' => "content_menu_border_bottom", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Content Menu Border Style", 'moose' ),
	"param_name" => "content_menu_border_style",
	"value" => array(
		esc_html__( "Solid", 'moose' ) => "solid",
		esc_html__( "Dashed", 'moose' ) => "dashed",
		esc_html__( "Dotted", 'moose' ) => "dotted"
		),
	"save_always" => true,
	"dependency" => Array('element' => "content_menu_border_bottom", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Enable Badge", 'moose' ),
	"param_name" => "enable_badge",
	"value" => array(esc_html__("Enable badge at the top of the row?", 'moose') => "yes"),
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Badge Text", 'moose' ),
	"param_name" => "badge_text",
	"value" => "",
	"dependency" => Array('element' => "enable_badge", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Border Top Color", 'moose' ),
	"param_name" => "border_top_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Border Bottom Color", 'moose' ),
	"param_name" => "border_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding", 'moose' ),
	"value" => "",
	"param_name" => "side_padding",
	"description" => esc_html__( "Padding (left/right in pixels or percentage. Put number and px or %. Ex. 30% or 30px)", 'moose' ),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
    "heading" => esc_html__( "Padding Top (px)", 'moose' ),
	"value" => "",
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
    "heading" => esc_html__( "Padding Bottom (px)", 'moose' ),
	"value" => "",
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Label Color", 'moose' ),
	"param_name" => "color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Label Hover Color", 'moose' ),
	"param_name" => "hover_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "More Label", 'moose' ),
	"param_name" => "more_button_label",
	"value" =>  "",
	"description" => esc_html__( "Default label is Expand Section", 'moose' ),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Less Label", 'moose' ),
	"param_name" => "less_button_label",
	"value" =>  "",
	"description" => esc_html__( "Default label is Contract Section", 'moose' ),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Label Position", 'moose' ),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'moose' ) => "left",
		esc_html__( "Right", 'moose' ) => "right",
		esc_html__( "Center", 'moose' ) => "center"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row",  array(
  "type" => "dropdown",
  "heading" => esc_html__( "CSS Animation", 'moose' ),
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => $animations,
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

vc_add_param("vc_row",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Transition delay (ms)", 'moose' ),
	"param_name" => "transition_delay",
	"admin_label" => true,
	"value" => "",
	"dependency" => array("element" => "css_animation", "not_empty" => true)
  
));

vc_add_param("vc_row",  array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Box Shadow on Row", 'moose' ),
    "param_name" => "box_shadow_on_row",
    "value" => array(
        esc_html__( "No", 'moose' ) => "no",
        esc_html__( "Yes", 'moose' ) => "yes"
    ),
	"save_always" => true,
    "dependency" => array("element" => "row_type", "value" => array("row")) 
));

vc_add_param("vc_row",  array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Box Shadow Color", 'moose' ),
    "param_name" => "box_shadow_color",
    "value" => "",
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
  
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Horizontal Offset (px)", 'moose' ),
    "param_name" => "horizontal_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'moose' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Vertical Offset (px)", 'moose' ),
    "param_name" => "vertical_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'moose' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Blur (px)", 'moose' ),
    "param_name" => "box_shadow_blur",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'moose' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Spread (px)", 'moose' ),
    "param_name" => "box_shadow_spread",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'moose' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));


/*** Row Inner ***/

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'moose' ),
	"param_name" => "row_type",
	"value" => array(
		esc_html__( "Row", 'moose' ) => "row",
		esc_html__( "Parallax", 'moose' ) => "parallax",
		esc_html__( "Expandable", 'moose' ) => "expandable"
	),
	"save_always" => true
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Type", 'moose' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Full Width", 'moose' ) => "full_width",
		esc_html__( "In Grid", 'moose' ) => "grid"
	),
	"save_always" => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Use Row as Full Screen Section Slide", 'moose' ),
    "param_name" => "use_row_as_full_screen_section_slide",
    "value" => array(
        esc_html__( "No", 'moose' ) => "no",
        esc_html__( "Yes", 'moose' ) => "yes"
    ),
	"save_always" => true,
    "description" => esc_html__( "This option works only for Full Screen Sections Template", 'moose' ),
    "dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Use as box", 'moose' ),
    "value" => array("Use row as box" => "use_row_as_box" ),
    "param_name" => "use_as_box",
    "description" => esc_html__( '', 'moose' ),
    "dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Border Radius(px)", 'moose' ),
	"param_name" => "row_box_border_radius",
	"value" => "",
	"dependency" => Array('element' => "use_as_box", 'value' => array('use_row_as_box'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Border Width(px)", 'moose' ),
	"param_name" => "row_box_border_width",
	"value" => "",
	"dependency" => Array('element' => "use_as_box", 'value' => array('use_row_as_box'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Anchor ID", 'moose' ),
	"param_name" => "anchor",
	"value" => ""
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Text Align", 'moose' ),
	"param_name" => "text_align",
	"value" => array(
		esc_html__( "Left", 'moose' ) => "left",
		esc_html__( "Center", 'moose' ) => "center",
		esc_html__( "Right", 'moose' ) => "right"
	),
	"save_always" => true
	
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Background color", 'moose' ),
	"param_name" => "background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Background image", 'moose' ),
	"value" => "",
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Border color", 'moose' ),
	"param_name" => "border_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding", 'moose' ),
	"value" => "",
	"param_name" => "side_padding",
	"description" => esc_html__( "Left and right spacing in pixels", 'moose' ),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding Top", 'moose' ),
	"value" => "",
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding Bottom", 'moose' ),
	"value" => "",
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "More Button Label", 'moose' ),
	"param_name" => "more_button_label",
	"value" =>  "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Less Button Label", 'moose' ),
	"param_name" => "less_button_label",
	"value" =>  "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Button Position", 'moose' ),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'moose' ) => "left",
		esc_html__( "Right", 'moose' ) => "right",
		esc_html__( "Center", 'moose' ) => "center"	
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Color", 'moose' ),
	"param_name" => "color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'moose' ),
	"param_name" => "css_animation",
	"admin_label" => true,
	"value" => $animations,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

vc_add_param("vc_row_inner",  array(
  "type" => "textfield",
  "heading" => esc_html__( "Transition delay (ms)", 'moose' ),
  "param_name" => "transition_delay",
  "admin_label" => true,
  "value" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

vc_add_param("vc_row_inner",  array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Box Shadow on Row", 'moose' ),
    "param_name" => "box_shadow_on_row",
    "value" => array(
        esc_html__( "No", 'moose' ) => "no",
        esc_html__( "Yes", 'moose' ) => "yes"
    ),
	"save_always" => true,
    "dependency" => array("element" => "row_type", "value" => array("row")) 
));

vc_add_param("vc_row_inner",  array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Box Shadow Color", 'moose' ),
    "param_name" => "box_shadow_color",
    "value" => "",
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
  
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Horizontal Offset (px)", 'moose' ),
    "param_name" => "horizontal_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'moose' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Vertical Offset (px)", 'moose' ),
    "param_name" => "vertical_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'moose' ),
    "dependency" => array("element" =>  "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Blur (px)", 'moose' ),
    "param_name" => "box_shadow_blur",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'moose' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Spread (px)", 'moose' ),
    "param_name" => "box_shadow_spread",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'moose' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));


/*** Separator ***/

$separator_setting = array (
  'show_settings_on_create' => true,
  "controls"	=> '',
);
vc_map_update('vc_separator', $separator_setting);

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Type", 'moose' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Normal", 'moose' ) => "normal",
		esc_html__( "Transparent", 'moose' ) => "transparent",
		esc_html__( "Small", 'moose' ) => "small",
	),
	"save_always" => true
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Position", 'moose' ),
	"param_name" => "position",
	"value" => array(
		esc_html__( "Center", 'moose' ) => "center",
		esc_html__( "Left", 'moose' ) => "left",
		esc_html__( "Right", 'moose' ) => "right",
		esc_html__( "Inherit from Elements Holder", 'moose' ) => "inherit"
	),
	"save_always" => true,
    "dependency" => array("element" => "type", "value" => array("small"))
));

vc_add_param("vc_separator", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Color", 'moose' ),
	"param_name" => "color",
	"value" => "",
    "dependency" => array("element" => "type", "value" => array("small", "normal"))
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Border Style", 'moose' ),
	"param_name" => "border_style",
	"value" => array(
		"" => "",
		esc_html__( "Dashed", 'moose' ) => "dashed",
		esc_html__( "Solid", 'moose' ) => "solid",
        esc_html__( "Dotted", 'moose' ) => "dotted"
    )
));

vc_add_param("vc_separator", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Width (px)", 'moose' ),
    "param_name" => "width",
    "value" => "",
	"dependency" => array("element" => "type", "value" => array("small"))
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Thickness (px)", 'moose' ),
	"param_name" => "thickness",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Top Margin", 'moose' ),
	"param_name" => "up",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Top Margin Measuring Unit", 'moose' ),
	"param_name" => "up_style",
	"value" => array(
		esc_html__( "Pixels", 'moose' ) => "px",
		esc_html__( "Percentages", 'moose' ) => "%",
    ),
	"save_always" => true
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Bottom Margin", 'moose' ),
	"param_name" => "down",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Bottom Margin Measuring Unit", 'moose' ),
	"param_name" => "down_style",
	"value" => array(
		esc_html__( "Pixels", 'moose' ) => "px",
		esc_html__( "Percentages", 'moose' ) => "%",
    ),
	"save_always" => true
));


/*** Separator With Text ***/

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Title Color", 'moose' ),
    "param_name" => "title_color",
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Title Font size (px)", 'moose' ),
    "param_name" => 'title_size',
    "value" => ""
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Text In Box", 'moose' ),
    "param_name" => "text_in_box",
    "value" => array(
        esc_html__( "Yes", 'moose' ) => "yes",
        esc_html__( "No", 'moose' ) => "no"
    ),
	"save_always" => true
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Text Position", 'moose' ),
    "param_name" => "text_position",
    "value" => array(
        esc_html__( "Center", 'moose' ) => "center",
        esc_html__( "Left", 'moose' ) => "left",
        esc_html__( "Right", 'moose' ) => "right"
    ),
	"save_always" => true
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Height (px)", 'moose' ),
    "param_name" => 'box_height',
    "value" => "",
    "description" => esc_html__( "Insert height for a shape around the text", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Left/right Padding (px)", 'moose' ),
    "param_name" => 'box_padding',
    "value" => "",
    "description" => esc_html__( "Insert size for a padding on left and right side of text", 'moose' ),
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Box Background Color", 'moose' ),
    "param_name" => "box_background_color",
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Box Border Width (px)", 'moose' ),
    "param_name" => "box_border_width",
    "value" => "",
    "description" => esc_html__( "Insert width for the separator line", 'moose' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Box Border Color", 'moose' ),
    "param_name" => "box_border_color",
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Box Border radius (px)", 'moose' ),
    "param_name" => "box_border_radius",
    "description" => esc_html__( 'Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default.', 'moose' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Box Border Style", 'moose' ),
    "param_name" => "box_border_style",
    "value" => array(
        esc_html__( "Solid", 'moose' ) => "solid",
        esc_html__( "Dashed", 'moose' ) => "dashed",
        esc_html__( "Dotted", 'moose' ) => "dotted",
        esc_html__( "Transparent", 'moose' ) => "transparent"
    ),
	"save_always" => true,
    "description" => esc_html__( "Choose a style for the separator line", 'moose' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Line Color", 'moose' ),
    "param_name" => "line_color",
    "value" => "",
    "description" => esc_html__( "Choose a color for the separator line", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Line Width (px)", 'moose' ),
    "param_name" => "line_width",
    "value" => "",
    "description" => esc_html__( "Insert width for the separator line", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Animation", 'moose' ),
    "param_name" => "animation",
    "value" => array(
        esc_html__( "Default", 'moose' ) => "default",
        esc_html__( "Animate Width", 'moose' ) => "animate_width" 
    ),
	"save_always" => true,
    "description" => esc_html__( "Choose animation for separator", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Line Thickness (px)", 'moose' ),
    "param_name" => "line_thickness",
    "value" => "",
    "description" => esc_html__( "Insert thickness for the separator line", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Separator Line Style", 'moose' ),
    "param_name" => "line_border_style",
    "value" => array(
        esc_html__( "Solid", 'moose' ) => "solid",
        esc_html__( "Dashed", 'moose' ) => "dashed",
        esc_html__( "Dotted", 'moose' ) => "dotted",
        esc_html__( "Transparent", 'moose' ) => "transparent"
    ),
	"save_always" => true,
    "description" => esc_html__( "Choose a style for the separator line", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Top Margin (px)", 'moose' ),
    "param_name" => "up",
    "value" => "",
    "description" => esc_html__( "Insert top margin for the separator", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Bottom Margin (px)", 'moose' ),
    "param_name" => "down",
    "value" => "",
    "description" => esc_html__( "Insert bottom margin for the separator", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Box Margins (px)", 'moose' ),
    "param_name" => "box_margin",
    "description" => esc_html__( "Insert left and right line margins", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Dots on line end ", 'moose' ),
    "param_name" => "line_dots",
    "value" => array(
        esc_html__( "No", 'moose' ) => "no",
        esc_html__( "Yes", 'moose' ) => "yes"
    ),
	"save_always" => true,
    "description" => esc_html__( "Insert icons on the end of the border", 'moose' )
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Dots Color", 'moose' ),
    "param_name" => "line_dots_color",
    "description" => esc_html__( "Insert dots color (default value is #b2b2b2)", 'moose' ),
    "dependency" => Array('element' => "line_dots", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Dots Size (px)", 'moose' ),
    "param_name" => "line_dots_size",
    "description" => esc_html__( "Insert dots size", 'moose' ),
    "dependency" => Array('element' => "line_dots", 'value' => array('yes'))
));


/*** Single Image ***/

vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'moose' ),
	"param_name" => "eltd_css_animation",
	"admin_label" => true,
	"value" => $animations 
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Transition delay (s)", 'moose' ),
	"param_name" => "transition_delay",
	"admin_label" => true,
	"value" => "",
	"dependency" => array("element" => "eltd_css_animation", "not_empty" => true)
));

vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "Add hover animation with additional text?", 'moose' ),
	"param_name" => "circle_hover",
	"admin_label" => true,
	"value" => array(
		esc_html__( "No", 'moose' ) => "no",
		esc_html__( "Yes", 'moose' ) => "yes"
	),
	"description" => esc_html__( "Choose whether to animate the image on hover with a shader and showcase additional text on top of it.", 'moose' ),
	"dependency" => array("element" => "style", 'value' => 'vc_box_circle_2')
));

vc_add_param("vc_single_image",  array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Shader background color", 'moose' ),
	"param_name" => "circle_color",
	"value" => "#e5735c",
	"description" => esc_html__( "Set the shader background color.", 'moose' ),
	"dependency" => array("element" => "circle_hover", 'value' => 'yes')
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Hover text", 'moose' ),
	"param_name" => "hover_message",
	"admin_label" => true,
	"value" => "",
	"description" => esc_html__( "Add text to appear on hover.", 'moose' ),
	"dependency" => array("element" => "circle_hover", 'value' => 'yes')
));

vc_add_param("vc_single_image",  array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Hover text color", 'moose' ),
	"param_name" => "message_color",
	"value" => "#fff",
	"description" => esc_html__( "Set the color for the text that appears on hover.", 'moose' ),
	"dependency" => array("element" => "hover_message", "not_empty" => true)
));

/*************************************
 	Mapping Shortcodes
 *************************************/


/*** Elements Holder ***/

class WPBakeryShortCode_No_Elements_Holder  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elements Holder', 'moose' ),
	"base" => "no_elements_holder",
	"as_parent" => array('only' => 'no_elements_holder_item'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-elements-holder extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'moose' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'moose' ),
			"param_name" => "number_of_columns",
			"value" => array(
				esc_html__( "1 Column", 'moose' ) => "one_column",
				esc_html__( "2 Columns", 'moose' ) => "two_columns",
				esc_html__( "3 Columns", 'moose' ) => "three_columns",
				esc_html__( "4 Columns", 'moose' ) => "four_columns",
				esc_html__( "5 Columns", 'moose' ) => "five_columns",
				esc_html__( "6 Columns", 'moose' ) => "six_columns"
			),
			"save_always" => true
		),
		array(
			"type" => "checkbox",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Items Float Left", 'moose' ),
			"param_name" => "items_float_left",
			"value" => array("Make Items Float Left?" => "yes")
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'moose' ),
			"heading" => esc_html__( "Switch to One Column", 'moose' ),
			"param_name" => "switch_to_one_column",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Below 1300px", 'moose' ) => "1300",
				esc_html__( "Below 1000px", 'moose' ) => "1000",
				esc_html__( "Below 768px", 'moose' ) => "768",
				esc_html__( "Below 600px", 'moose' ) => "600",
				esc_html__( "Below 480px", 'moose' ) => "480",
				esc_html__( "Never", 'moose' ) => "never"
			),
			"description" => esc_html__( "Choose on which stage item will be in one column", 'moose' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'moose' ),
			"heading" => esc_html__( "Choose Alignment In Responsive Mode", 'moose' ),
			"param_name" => "alignment_one_column",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Left", 'moose' ) => "left",
				esc_html__( "Center", 'moose' ) => "center",
				esc_html__( "Right", 'moose' ) => "right"
			),
			"description" => esc_html__( "Alignment When Items are in One Column", 'moose' )
		)
	)
) );


/*** Elements Holder Item ***/

class WPBakeryShortCode_No_Elements_Holder_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elements Holder Item', 'moose' ),
	"base" => "no_elements_holder_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, no_cover_boxes, no_portfolio_list, no_portfolio_slider'),
	"as_child" => array('only' => 'no_elements_holder'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-elements-holder-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'moose' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Image", 'moose' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding", 'moose' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'moose' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Alignment", 'moose' ),
			"param_name" => "aligment",
			"value" => array(
				esc_html__( "Left", 'moose' ) => "left",
				esc_html__( "Right", 'moose' ) => "right",
				esc_html__( "Center", 'moose' ) => "center"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Vertical Alignment", 'moose' ),
			"param_name" => "vertical_alignment",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Top", 'moose' ) => "top",
				esc_html__( "Middle", 'moose' ) => "middle",
				esc_html__( "Bottom", 'moose' ) => "bottom"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Enable hover effect?", 'moose' ),
			"param_name" => "enable_hover_effect",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hover Image", 'moose' ),
			"param_name" => "hover_image",
			"value" => "",
			"description" => esc_html__( "Add an image to appear on hover action.", 'moose' ),
			"dependency" => array("element" => "enable_hover_effect", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Link", 'moose' ),
			"param_name" => "image_link",
			"value" => "",
			"description" => esc_html__( "Set the link your image will link to.", 'moose' ),
			"dependency" => array("element" => "enable_hover_effect", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Link Text", 'moose' ),
			"param_name" => "image_link_text",
			"value" => "",
			"description" => esc_html__( "Set the link text. Default value is Find out more.", 'moose' ),
			"dependency" => array("element" => "enable_hover_effect", "value" => array("yes"))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Name", 'moose' ),
			"param_name" => "animation_name",
			"value" => array(
				esc_html__( "No Animation", 'moose' ) => "",
				esc_html__( "Flip In", 'moose' ) => "flip_in",
				esc_html__( "Grow In", 'moose' ) => "grow_in",
				esc_html__( "X Rotate", 'moose' ) => "x_rotate",
				esc_html__( "Z Rotate", 'moose' ) => "z_rotate",
				esc_html__( "Y Translate", 'moose' ) => "y_translate",
				esc_html__( "Fade In", 'moose' ) => "fade_in",
				esc_html__( "Fade In Down", 'moose' ) => "fade_in_down",
				esc_html__( "Fade In Left X Rotate", 'moose' ) => "fade_in_left_x_rotate"
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Delay (ms)", 'moose' ),
			"param_name" => "animation_delay",
			"value" => "",
			"dependency" => array('element' => "animation_name", 'value' => array('flip_in', 'grow_in', 'x_rotate','z_rotate','y_translate','fade_in', 'fade_in_down', 'fade_in_left_x_rotate'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Advanced Animations", 'moose' ),
			"param_name" => "advanced_animations",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Start Position", 'moose' ),
			"param_name" => "start_position",
			"value" => array(
				esc_html__( 'Bottom of Page', 'moose' ) => 'bottom',
				esc_html__( 'Center of Page', 'moose' ) => 'center'
			),
			"save_always" => true,
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Start Animation Style", 'moose' ),
			"param_name" => "start_animation_style",
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation End Position", 'moose' ),
			"param_name" => "end_position",
			"value" => array(
				esc_html__( "Center of Page", 'moose' ) => "center",
				esc_html__( "Top of Page", 'moose' ) => "top-bottom"
			),
			"save_always" => true,
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "End Animation Style", 'moose' ),
			"param_name" => "end_animation_style",
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'moose' ),
			"heading" => esc_html__( "Padding on screen size between 1300px-1600px", 'moose' ),
			"param_name" => "item_padding_1300_1600",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'moose' ),
			"heading" => esc_html__( "Padding on screen size between 1000px-1300px", 'moose' ),
			"param_name" => "item_padding_1000_1300",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'moose' ),
			"heading" => esc_html__( "Padding on screen size between 768px-1000px", 'moose' ),
			"param_name" => "item_padding_768_1000",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'moose' ),
			"heading" => esc_html__( "Padding on screen size between 600px-768px", 'moose' ),
			"param_name" => "item_padding_600_768",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'moose' ),
			"heading" => esc_html__( "Padding on screen size between 480px-600px", 'moose' ),
			"param_name" => "item_padding_480_600",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'moose' ),
			"heading" => esc_html__( "Padding on Screen Size Bellow 480px", 'moose' ),
			"param_name" => "item_padding_480",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'moose' )
		)
	)
) );


/*** Blog List ***/

vc_map( array(
	"name" => esc_html__( "Blog List", 'moose' ),
	"base" => "no_blog_list",
	"icon" => "icon-wpb-blog-list extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( 'Type', 'moose' ),
                "param_name" => "type",
                "value" => array(
                    esc_html__( "Image in left box", 'moose' ) => "image_in_box",
                    esc_html__( "Boxes", 'moose' ) => "boxes",
                    esc_html__( "Minimal", 'moose' ) => "minimal"
                ),
				"save_always" => true
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number of Posts", 'moose' ),
                "param_name" => "number_of_posts",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'minimal', 'boxes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image Size", 'moose' ),
                "param_name" => "image_size",
                "value" => array(
                    esc_html__( "Original", 'moose' ) => "original",
                    esc_html__( "Landscape", 'moose' ) => "landscape",
                    esc_html__( "Square", 'moose' ) => "square"
                ),
				"save_always" => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number of Columns", 'moose' ),
                "param_name" => "number_of_columns",
                "value" => array(
                    esc_html__( "One", 'moose' ) => "1",
                    esc_html__( "Two", 'moose' ) => "2",
                    esc_html__( "Three", 'moose' ) => "3",
                    esc_html__( "Four", 'moose' ) => "4"
                ),
				"save_always" => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Order By", 'moose' ),
                "param_name" => "order_by",
                "value" => array(
                    esc_html__( "Title", 'moose' ) => "title",
                    esc_html__( "Date", 'moose' ) => "date"
                ),
				"save_always" => true,
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Order", 'moose' ),
                "param_name" => "order",
                "value" => array(
                    esc_html__( "ASC", 'moose' ) => "ASC",
                    esc_html__( "DESC", 'moose' ) => "DESC"
                ),
				"save_always" => true,
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Category Slug", 'moose' ),
                "param_name" => "category",
                "description" => esc_html__( "Leave empty for all or use comma for list", 'moose' )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text length", 'moose' ),
                "param_name" => "text_length",
                "description" => esc_html__( "Number of characters", 'moose' )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Title Tag", 'moose' ),
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    esc_html__( "h2", 'moose' ) => "h2",
                    esc_html__( "h3", 'moose' ) => "h3",
                    esc_html__( "h4", 'moose' ) => "h4",
                    esc_html__( "h5", 'moose' ) => "h5",
                    esc_html__( "h6", 'moose' ) => "h6",
                )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Size (px)", 'moose' ),
                "param_name" => "title_size"
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color", 'moose' ),
                "param_name" => "title_color"
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Display excerpt", 'moose' ),
                "param_name" => "display_excerpt",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Yes", 'moose' ) => "1",
                    esc_html__( "No", 'moose' ) => "0"
                ),
                "description" => esc_html__( '', 'moose' )
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Excerpt Color", 'moose' ),
                "param_name" => "excerpt_color",
                "dependency" => Array('element' => "display_excerpt", 'value' => array('1', ''))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Info Position", 'moose' ),
                "param_name" => "info_position",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Top", 'moose' ) => "top",
                    esc_html__( "Bottom", 'moose' ) => "bottom"
                ),
                "dependency" => array('element' => "type", 'value' => array('image_in_box', 'minimal','boxes'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info font size (px)", 'moose' ),
                "param_name" => "post_info_font_size",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info color", 'moose' ),
                "param_name" => "post_info_color",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info link color", 'moose' ),
                "param_name" => "post_info_link_color",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info font family", 'moose' ),
                "param_name" => "post_info_font_family",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info text transform", 'moose' ),
                "param_name" => "post_info_text_transform",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "None", 'moose' ) => "none",
                    esc_html__( "Capitalize", 'moose' ) => "capitalize",
                    esc_html__( "Uppercase", 'moose' ) => "uppercase",
                    esc_html__( "Lowercase", 'moose' ) => "lowercase"
                ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info font weight", 'moose' ),
                "param_name" => "post_info_font_weight",
                "value" => $font_weight_array,
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info font style", 'moose' ),
                "param_name" => "post_info_font_style",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Normal", 'moose' ) => "normal",
                    esc_html__( "Italic", 'moose' ) => "italic"
                ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info letter spacing (px)", 'moose' ),
                "param_name" => "post_info_letter_spacing",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Display category", 'moose' ),
                "param_name" => "display_category",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Yes", 'moose' ) => "1",
                    esc_html__( "No", 'moose' ) => "0"
                ),
                "description" => esc_html__( '', 'moose' ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box','boxes','minimal'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Display date", 'moose' ),
                "param_name" => "display_date",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Yes", 'moose' ) => "1",
                    esc_html__( "No", 'moose' ) => "0"
                ),
                "description" => esc_html__( '', 'moose' ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Date Position", 'moose' ),
                "param_name" => "date_place",
                "value" => array(
                    esc_html__( "Date by Title", 'moose' ) => "by_title",
                    esc_html__( "Date by Post Info", 'moose' ) => "by_post_info",
                    esc_html__( "Date over Title", 'moose' ) => "over_title"
                ),
				"save_always" => true,
                "description" => esc_html__( 'Choose where will be date placed', 'moose' ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Date Size (px)", 'moose' ),
                "param_name" => "date_size",
                "dependency" => array('element' => "type", 'value' => array('image_in_box'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Display author", 'moose' ),
                "param_name" => "display_author",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Yes", 'moose' ) => "1",
                    esc_html__( "No", 'moose' ) => "0"
                )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Display comments", 'moose' ),
                "param_name" => "display_comments",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Yes", 'moose' ) => "1",
                    esc_html__( "No", 'moose' ) => "0"
                ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box','boxes'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Box Background Color", 'moose' ),
                "param_name" => "background_color",
                "dependency" => Array('element' => "type", 'value' => array('boxes', 'image_in_box'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Box Padding", 'moose' ),
                "param_name" => "box_info_padding",
                "description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'moose' ),
                "dependency" => Array('element' => "type", 'value' => array('boxes', 'image_in_box'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Between Item Color", 'moose' ),
                "param_name" => "border_color",
                "dependency" => array('element' => "type", 'value' => array('minimal','image_in_box'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Between Item Thickness (px)", 'moose' ),
                "param_name" => "border_width",
                "dependency" => array('element' => "type", 'value' => array('minimal','image_in_box'))

            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Display Share", 'moose' ),
                "param_name" => "display_share",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Yes", 'moose' ) => "1",
                    esc_html__( "No", 'moose' ) => "0"
                ),
                "dependency" => array('element' => 'type', 'value' => array('boxes')),
                "description" => esc_html__( "Default value is No", 'moose' )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Display Button", 'moose' ),
                "param_name" => "display_button",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Yes", 'moose' ) => "1",
                    esc_html__( "No", 'moose' ) => "0"
                ),
                "description" => esc_html__( "Show button leading to post single page", 'moose' ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes', 'minimal'))

            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Size", 'moose' ),
                "param_name" => "button_size",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "Small", 'moose' ) => "small",
                    esc_html__( "Medium", 'moose' ) => "medium",
                    esc_html__( "Large", 'moose' ) => "large",
                    esc_html__( "Extra Large", 'moose' ) => "big_large"
                ),
                "description" => esc_html__( "Default value is small", 'moose' ),
                "dependency" => array('element' =>  "display_button", 'value' => '1')
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Style", 'moose' ),
                "param_name" => "button_style",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "White", 'moose' ) => "white",
                    esc_html__( "Transparent", 'moose' ) => "transparent"
                ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Text", 'moose' ),
                "param_name" => "button_text",
                "description" => esc_html__( "Default text is LEARN MORE", 'moose' ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Text Color", 'moose' ),
                "param_name" => "button_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Text Hover Color", 'moose' ),
                "param_name" => "button_hover_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Background Color", 'moose' ),
                "param_name" => "button_background_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Hover Background Color", 'moose' ),
                "param_name" => "button_hover_background_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Border Color", 'moose' ),
                "param_name" => "button_border_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Border Width", 'moose' ),
                "param_name" => "button_border_width",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Hover Border Color", 'moose' ),
                "param_name" => "button_hover_border_color",
                 "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Border Radius (px)", 'moose' ),
                "param_name" => "button_border_radius",
                "description" => esc_html__( "Border radius for button", 'moose' ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            )
        ),
        $moose_elated_icon_collections->getVCParamsArray( array( 'element' => 'display_button', 'value' => '1' ) ),
        array(
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Icon Position", 'moose' ),
                "param_name" => "button_icon_position",
                "value" => array(
                    esc_html__( "Right", 'moose' ) => "right",
                    esc_html__( "Left", 'moose' ) => "left"
                ),
				"save_always" => true,
                "dependency" => Array('element' => $moose_elated_icon_collections->iconPackParamName, 'not_empty' => true)
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Icon Color", 'moose' ),
                "param_name" => "button_icon_color",
                "dependency" => Array('element' =>$moose_elated_icon_collections->iconPackParamName, 'not_empty' => true)
            )
        )
	)
) );


/*** Blog Carousel ***/

vc_map( array(
	"name" => esc_html__( "Blog Carousel", 'moose' ),
	"base" => "no_blog_carousel",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-blog-carousel extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Carousel info type", 'moose' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Post Info visible", 'moose' ) => "info_always",
				esc_html__( "Post Info in Bottom", 'moose' ) => "info_in_bottom"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image size", 'moose' ),
			"param_name" => "image_size",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Original Size", 'moose' ) => "full",
				esc_html__( "Landscape", 'moose' ) => "landscape",
				esc_html__( "Portrait", 'moose' ) => "portrait"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order By", 'moose' ),
			"param_name" => "order_by",
			"value" => array(
				"" => "",
				esc_html__( "Title", 'moose' ) => "title",
				esc_html__( "Date", 'moose' ) => "date"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order", 'moose' ),
			"param_name" => "order",
			"value" => array(
				"" => "",
				esc_html__( "ASC", 'moose' ) => "ASC",
				esc_html__( "DESC", 'moose' ) => "DESC",
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number", 'moose' ),
			"param_name" => "number",
			"value" => "-1",
			"save_always" => true,
			"description" => esc_html__( "Number of blog posts on page (-1 is all)", 'moose' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number of Blog Posts Shown", 'moose' ),
			"param_name" => "blogs_shown",
			"value" => array(
				"" => "",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6"
			),
			"save_always" => true,
			"description" => esc_html__( "Number of blog posts that are showing at the same time in full width (on smaller screens is responsive so there will be less items shown)", 'moose' ),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Category", 'moose' ),
			"param_name" => "category",
			"value" => "",
			"description" => esc_html__( "Category Slug (leave empty for all)", 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Selected Projects", 'moose' ),
			"param_name" => "selected_projects",
			"value" => "",
			"description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'moose' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Info Box Background Color", 'moose' ),
			"param_name" => "hover_box_color",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Post Info Color", 'moose' ),
			"param_name" => "post_info_color",
			"value" => "",
			"dependency" => array("element" => "type","value" => "info_in_bottom")
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Author", 'moose' ),
			"param_name" => "show_author",
			"value" => array(
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			),
			"save_always" => true,
			"description" => esc_html__( "Default value is Yes", 'moose' ),
			"dependency" => array("element" => "type", "value" => "info_in_bottom")
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Author Color", 'moose' ),
			"param_name" => "author_color",
			"value" => "",
			"dependency" => array('element' => "show_author", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Category Names", 'moose' ),
			"param_name" => "show_categories",
			"value" => array(
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			),
			"save_always" => true,
			"description" => esc_html__( "Default value is Yes", 'moose' ),
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Category Name Color", 'moose' ),
			"param_name" => "category_color",
			"value" => "",
			"dependency" => array('element' => "show_categories", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'moose' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'moose' ) => "h2",
				esc_html__( "h3", 'moose' ) => "h3",
				esc_html__( "h4", 'moose' ) => "h4",
				esc_html__( "h5", 'moose' ) => "h5",
				esc_html__( "h6", 'moose' ) => "h6",
			)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'moose' ),
			"param_name" => "title_color",
			"value" => ""
		),
		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Prev/Next navigation", 'moose' ),
			"value" => array("Enable prev/next navigation?" => "enable_navigation"),
			"param_name" => "enable_navigation"
		),
		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Bullets navigation", 'moose' ),
			"value" => array("Show bullets navigation?" => "yes"),
			"param_name" => "pager_navigation"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Separator", 'moose' ),
			"param_name" => "show_separator",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true,
			"description" => esc_html__( "Show separator below title", 'moose' ),
			"dependency" => array('element' => 'type', 'value' => array('info_always',''))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Color", 'moose' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "show_separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Thickness (px)", 'moose' ),
			"param_name" => "separator_thickness",
			"dependency" => array('element' => "show_separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Width (px)", 'moose' ),
			"param_name" => "separator_width",
			"dependency" => array('element' => "show_separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Extra class name", 'moose' ),
			"param_name" => "add_class",
			"value" => "",
			"description" => esc_html__( "If you wish to style this particular blog carousel differently, you can use this field to add an extra class name to it and then refer to that class name in your css file.", 'moose' )
		)
	)
) );


/*** Blog Slider***/

vc_map( array(
	"name" => esc_html__( "Blog Slider", 'moose' ),
	"base" => "no_blog_slider",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-blog-slider extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order By", 'moose' ),
			"param_name" => "order_by",
			"value" => array(
				"" => "",
				esc_html__( "Title", 'moose' ) => "title",
				esc_html__( "Date", 'moose' ) => "date"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order", 'moose' ),
			"param_name" => "order",
			"value" => array(
				"" => "",
				esc_html__( "ASC", 'moose' ) => "ASC",
				esc_html__( "DESC", 'moose' ) => "DESC",
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number", 'moose' ),
			"param_name" => "number",
			"value" => "-1",
			"save_always" => true,
			"description" => esc_html__( "Number of blog posts on page (-1 is all)", 'moose' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'moose' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'moose' ) => "h2",
				esc_html__( "h3", 'moose' ) => "h3",
				esc_html__( "h4", 'moose' ) => "h4",
				esc_html__( "h5", 'moose' ) => "h5",
				esc_html__( "h6", 'moose' ) => "h6",
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image size", 'moose' ),
			"param_name" => "image_size",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Original Size", 'moose' ) => "full",
				esc_html__( "Landscape", 'moose' ) => "landscape",
				esc_html__( "Portrait", 'moose' ) => "portrait",
				esc_html__( "Custom Size", 'moose' ) => "custom"
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Width", 'moose' ),
			"param_name" => "image_width",
			"value" => "",
			"description" => esc_html__( "Set custom image width", 'moose' ),
			"dependency" => array("element" => "image_size", "value" => array("custom"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Height", 'moose' ),
			"param_name" => "image_height",
			"value" => "",
			"description" => esc_html__( "Set custom image height", 'moose' ),
			"dependency" => array("element" => "image_size", "value" => array("custom"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Category", 'moose' ),
			"param_name" => "category",
			"value" => "",
			"description" => esc_html__( "Category Slug (leave empty for all)", 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Selected Projects", 'moose' ),
			"param_name" => "selected_projects",
			"value" => "",
			"description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'moose' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Category", 'moose' ),
			"param_name" => "show_category",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "default",
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Author", 'moose' ),
			"param_name" => "show_author",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "default",
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Date", 'moose' ),
			"param_name" => "show_date",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "default",
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Read More Button", 'moose' ),
			"param_name" => "show_read_more",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "default",
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			),
			"save_always" => true
		),
	)
) );

/*** Vertical Split Slider ***/

class WPBakeryShortCode_No_Vertical_Split_Slider  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elated Vertical Split Slider', 'moose' ),
	"base" => "no_vertical_split_slider",
	"as_parent" => array('only' => 'no_vertical_left_sliding_panel,no_vertical_right_sliding_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-vertical-split-slider extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Preloader Background Color", 'moose' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Left Slide Panel size (%)", 'moose' ),
			"param_name" => "left_slide_panel_size"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Right Slide Panel size (%)", 'moose' ),
			"param_name" => "right_slide_panel_size"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Disable Dark/Light Header Skin Change", 'moose' ),
			"param_name" => "disable_header_skin_change",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true
		)
	)
) );


/*** Vertical Split Slider Left Panel ***/

class WPBakeryShortCode_No_Vertical_Left_Sliding_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Left Sliding Panel', 'moose' ),
	"base" => "no_vertical_left_sliding_panel",
	"as_parent" => array('only' => 'no_vertical_slide_content_item'),
	"as_child" => array('only' => 'no_vertical_split_slider'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-vertical-split-slider-left-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	'params' => array()
) );


/*** Vertical Split Slider Right Panel ***/

class WPBakeryShortCode_No_Vertical_Right_Sliding_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Right Sliding Panel', 'moose' ),
	"base" => "no_vertical_right_sliding_panel",
	"as_parent" => array('only' => 'no_vertical_slide_content_item'),
	"as_child" => array('only' => 'no_vertical_split_slider'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-vertical-split-slider-right-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	'params' => array()
) );


/*** Vertical Split Slider Content Item ***/

class WPBakeryShortCode_No_Vertical_Slide_Content_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Slide Content Item', 'moose' ),
	"base" => "no_vertical_slide_content_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, no_cover_boxes, no_portfolio_list, no_portfolio_slider, no_carousel'),
	"as_child" => array('only' => 'no_vertical_left_sliding_panel, no_vertical_right_sliding_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-vertical-split-slider-content-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'moose' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Image", 'moose' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding left/right", 'moose' ),
			"param_name" => "item_padding",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content Aligment", 'moose' ),
			"param_name" => "alignment",
			"value" => array(
				esc_html__( "left", 'moose' ) => "left",
				esc_html__( "right", 'moose' ) => "right",
				esc_html__( "center", 'moose' ) => "center"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Header/Bullets Style", 'moose' ),
			"param_name" => "header_style",
			"value" => array(
				""	=>	"",
				esc_html__( "Light", 'moose' ) => "light",
				esc_html__( "Dark", 'moose' ) => "dark"
			)
		)

	)
) );

/*** Image slider ***/

vc_map( array(
	"name" => esc_html__( "Elated Image Slider", 'moose' ),
	"base" => "no_image_slider_no_space",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-image-slider-no-space extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_images",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Images", 'moose' ),
			"param_name" => "images"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "On click", 'moose' ),
			"param_name" => "on_click",
			"value" => array(
				esc_html__( "Do nothing", 'moose' ) => "",
				esc_html__( "Open image in prettyphoto", 'moose' ) => "prettyphoto",
				esc_html__( "Open image in new tab", 'moose' ) => "new_tab",
				esc_html__( "Use custom links", 'moose' ) => "use_custom_links"
			)
		),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Custom Links", 'moose' ),
			"param_name" => "custom_links",
			"value" => "",
			"dependency" => array('element' => 'on_click', 'value' => 'use_custom_links'),
			"description" => esc_html__( "Enter links for each image here. Divide links with comma.", 'moose' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Custom links target", 'moose' ),
			"param_name" => "custom_links_target",
			"value" => array(
				"" => "",
				esc_html__( "Same window", 'moose' ) => "_self",
				esc_html__( "New window", 'moose' ) => "_blank"
			),
			"dependency" => array('element' => 'on_click', 'value' => 'use_custom_links')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show info", 'moose' ),
			"param_name" => "show_info",
			"value" => array(
				"" => "",
				esc_html__( "On Hover", 'moose' ) => "on_hover",
				esc_html__( "In The Bottom Corner", 'moose' ) => "in_bottom_corner",
			),
			"description" => esc_html__( "Show image title and description", 'moose' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Info position", 'moose' ),
			"param_name" => "info_position",
			"value" => array(
				esc_html__( "Bottom Left", 'moose' ) => "bottom_left",
				esc_html__( "Bottom Right", 'moose' ) => "bottom_right",
			),
			"save_always" => true,
			"dependency" => array('element' => "show_info", 'value' => array('in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'moose' ),
			"param_name" => "background_color",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'moose' ),
			"param_name" => "title_color",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title font size (px)", 'moose' ),
			"param_name" => "title_font_size",
			"value" => "",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Description Color", 'moose' ),
			"param_name" => "description_color",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Description font size (px)", 'moose' ),
			"param_name" => "description_font_size",
			"value" => "",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Color", 'moose' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "show_info", 'value' => 'on_hover')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator opacity (0-1)", 'moose' ),
			"param_name" => "separator_opacity",
			"value" => "",
			"dependency" => array('element' => "show_info", 'value' => 'on_hover')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Full Screen Height", 'moose' ),
			"param_name" => "full_screen",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Slider height (px)", 'moose' ),
			"param_name" => "height",
			"value" => "",
			"dependency" => array('element' => 'full_screen', 'value' => 'no')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Navigation style", 'moose' ),
			"param_name" => "navigation_style",
			"value" => array(
				"" => "",
				esc_html__( "Light", 'moose' ) => "light",
				esc_html__( "Dark", 'moose' ) => "dark"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlight Active Image", 'moose' ),
			"param_name" => "highlight_active_image",
			"value" => array(
				"" => "",
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlight Inactive Color", 'moose' ),
			"param_name" => "highlight_inactive_color",
			"dependency" => array('element' =>  "highlight_active_image", 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlight Inactive Opacity (0-1)", 'moose' ),
			"param_name" => "highlight_inactive_opacity",
			"value" => "",
			"dependency" => array('element' => "highlight_active_image", 'value' => 'yes')
		)
	)
) );


/*** Google Map ***/

vc_map( array(
	"name" => esc_html__( "Google Map", 'moose' ),
	"base" => "no_google_map",
	"icon" => "icon-wpb-google-map extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 1", 'moose' ),
			"param_name" => "address1"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 2", 'moose' ),
			"param_name" => "address2"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 3", 'moose' ),
			"param_name" => "address3"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 4", 'moose' ),
			"param_name" => "address4"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 5", 'moose' ),
			"param_name" => "address5"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Custom Map Style", 'moose' ),
			"param_name" => "custom_map_style",
			"value" => array(
				esc_html__( "No", 'moose' ) => "false",
				esc_html__( "Yes", 'moose' ) => "true"
			),
			"save_always" => true,
			"description" => esc_html__( "Enabling this option will allow Map editing", 'moose' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Color Overlay", 'moose' ),
			"param_name" => "color_overlay",
			"description" => esc_html__( "Choose a Map color overlay", 'moose' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Saturation", 'moose' ),
			"param_name" => "saturation",
			"description" => esc_html__( "Choose a level of saturation (-100 = least saturated, 100 = most saturated)", 'moose' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Lightness", 'moose' ),
			"param_name" => "lightness",
			"description" => esc_html__( "Choose a level of lightness (-100 = darkest, 100 = lightest)", 'moose' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Pin", 'moose' ),
			"param_name" => "pin",
			"description" => esc_html__( "Select a pin image to be used on Google Map", 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Map Zoom", 'moose' ),
			"param_name" => "zoom",
			"description" => esc_html__( "Enter a zoom factor for Google Map (0 = whole worlds, 19 = individual buildings)", 'moose' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Zoom Map on Mouse Wheel", 'moose' ),
			"param_name" => "google_maps_scroll_wheel",
			"value" => array(
				esc_html__( "No", 'moose' ) => "false",
				esc_html__( "Yes", 'moose' ) => "true"
			),
			"save_always" => true,
			"description" => esc_html__( "Enabling this option will allow users to zoom in on Map using mouse wheel", 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Map Height", 'moose' ),
			"param_name" => "map_height"
		) ,
		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Fullscreen Map Height", 'moose' ),
			"param_name" => "full_screen_map_height",
			"value" => array("Enable Fullscreen Map Height?" => "yes"),
			"description" => esc_html__( "Use only with Vertical Split Slider", 'moose' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Show address info box on page load", 'moose' ),
			"param_name" => "address_info_box",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true
		)
	)
));


/*** Parallax Layers ***/

vc_map( array(
	"name" => esc_html__( "Parallax Layers", 'moose' ),
	"base" => "no_parallax_layers",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-parallax-layers extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_images",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Layers", 'moose' ),
			"param_name" => "images"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Full Screen Height", 'moose' ),
			"param_name" => "full_screen",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Height (px)", 'moose' ),
			"param_name" => "height",
			"value" => "",
			"dependency" => array('element' => 'full_screen', 'value' => 'no')
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content", 'moose' ),
			"param_name" => "content",
			"value" => "",
			"description" => esc_html__( "This content will be displayed as final (top) layer over all other layers", 'moose' )
		)
	)
) );


/*** Team ***/

$team_social_icons_array = array();
for ($x = 1; $x<6; $x++) {
	$teamIconCollections = $moose_elated_icon_collections->getCollectionsWithSocialIcons();
	foreach($teamIconCollections as $collection_key => $collection) {

		$team_social_icons_array[] = array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Social Icon ", 'moose' ).$x,
			"param_name" => "team_social_".$collection->param."_".$x,
			"value" => $collection->getSocialIconsArrayVC(),
			"save_always" => true,
			"dependency" => Array('element' => "team_social_icon_pack", 'value' => array($collection_key))
		);

	}

	$team_social_icons_array[] = array(
		"type" => "textfield",
		"holder" => "div",
		"class" => "",
		"heading" => esc_html__( " Link", 'moose' ),
		"param_name" => "team_social_icon_".$x."_link",
		"dependency" => array('element' => 'team_social_icon_pack', 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
	);

	$team_social_icons_array[] = array(
		"type" => "dropdown",
		"holder" => "div",
		"class" => "",
		"heading" => esc_html__( " Target", 'moose' ),
		"param_name" => "team_social_icon_".$x."_target",
		"value" => array(
			"" => "",
			esc_html__( "Self", 'moose' ) => "_self",
			esc_html__( "Blank", 'moose' ) => "_blank"
		),
		"dependency" => Array('element' => "team_social_icon_".$x."_link", 'not_empty' => true)
	);

}

vc_map( array(
	"name" => esc_html__( "Team", 'moose' ),
	"base" => "no_team",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-team extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Type", 'moose' ),
				"param_name" => "team_type",
				"value" => array(
					esc_html__( "Main Info on Hover", 'moose' ) => "on_hover",
					esc_html__( "Main Info Below Image", 'moose' ) => "below_image"
				),
				"save_always" => true
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'moose' ),
				"param_name" => "team_image"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Image Type", 'moose' ),
				"param_name" => "team_image_type",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "Circle", 'moose' ) => "circle"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image hover color", 'moose' ),
				"param_name" => "team_image_hover_color"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Hover Type", 'moose' ),
				"param_name" => "team_hover_type",
				"value" => array(
					esc_html__( "Text In Center", 'moose' ) => "in_center",
					esc_html__( "Text in Left Corner", 'moose' ) => "in_corner"
				),
				"save_always" => true,
				"dependency" => array('element' => "team_type", 'value' => array('on_hover'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image Bottom Margin", 'moose' ),
				"param_name" => "team_info_margin_top",
				"dependency" => array('element' => "team_type", 'value' => array('below_image'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name", 'moose' ),
				"param_name" => "team_name"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Name Tag", 'moose' ),
				"param_name" => "team_name_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",
					esc_html__( "h5", 'moose' ) => "h5",
					esc_html__( "h6", 'moose' ) => "h6",
				),
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Margin bottom(px)", 'moose' ),
				"param_name" => "team_name_bottom_margin",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name font size(px)", 'moose' ),
				"param_name" => "team_name_font_size",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name color", 'moose' ),
				"param_name" => "team_name_color",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name font weight", 'moose' ),
				"param_name" => "team_name_font_weight",
				"value" => $font_weight_array,
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name text transform", 'moose' ),
				"param_name" => "team_name_text_transform",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "None", 'moose' ) => "none",
					esc_html__( "Capitalize", 'moose' ) => "capitalize",
					esc_html__( "Uppercase", 'moose' ) => "uppercase",
					esc_html__( "Lowercase", 'moose' ) => "lowercase"
				),
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'moose' ),
				"param_name" => "team_show_separator",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "yes",
					esc_html__( "No", 'moose' ) => "no"
				),
				"save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Width (px)", 'moose' ),
				"param_name" => "separator_width",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Thickness (px)", 'moose' ),
				"param_name" => "separator_thickness",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Top (px)", 'moose' ),
				"param_name" => "separator_margin_top",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Bottom (px)", 'moose' ),
				"param_name" => "separator_margin_bottom",
				"dependency" => array('element' =>  'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator color", 'moose' ),
				"param_name" => "team_separator_color",
				"dependency" => array('element' =>  'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position", 'moose' ),
				"param_name" => "team_position"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position font size(px)", 'moose' ),
				"param_name" => "team_position_font_size",
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position color", 'moose' ),
				"param_name" => "team_position_color",
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position font weight", 'moose' ),
				"param_name" => "team_position_font_weight",
				"value" => $font_weight_array,
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position text transform", 'moose' ),
				"param_name" => "team_position_text_transform",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "None", 'moose' ) => "none",
					esc_html__( "Capitalize", 'moose' ) => "capitalize",
					esc_html__( "Uppercase", 'moose' ) => "uppercase",
					esc_html__( "Lowercase", 'moose' ) => "lowercase"
				),
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Description", 'moose' ),
				"param_name" => "team_description"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Description color", 'moose' ),
				"param_name" => "team_description_color",
				"dependency" => array('element' => 'team_description', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text align", 'moose' ),
				"param_name" => "text_align",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "Left", 'moose' ) => "left_align",
					esc_html__( "Center", 'moose' ) => "center_align",
					esc_html__( "Right", 'moose' ) => "right_align"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'moose' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border", 'moose' ),
				"param_name" => "box_border",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border Width", 'moose' ),
				"param_name" => "box_border_width",
				"value" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border Color", 'moose' ),
				"param_name" => "box_border_color",
				"value" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icon Pack", 'moose' ),
				"param_name" => "team_social_icon_pack",
				"value" => array_merge(array("" => ""),$moose_elated_icon_collections->getIconCollectionsVCExclude('linea_icons'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Style", 'moose' ),
				"param_name" => "team_social_style",
				"value" => array(
					esc_html__( "Between Image and Info", 'moose' ) => "social_style_between",
					esc_html__( "In the center of the image", 'moose' ) => "social_style_center",
					esc_html__( "On the bottom of the image", 'moose' ) => "social_style_bottom"
				),
				"save_always" => true,
				"description" => esc_html__( "Social Style applies only when Main Info Below Image type is selected", 'moose' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Border color", 'moose' ),
				"param_name" => "team_social_icon_holder_border_color",
				"description" => esc_html__( "Social Icons Background Color applies only when Social Style On the bottom of the image is selected", 'moose' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Background color", 'moose' ),
				"param_name" => "team_social_icon_holder_back_color",
				"description" => esc_html__( "Social Icons Background Color applies only when Social Style On the bottom of the image is selected", 'moose' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Position", 'moose' ),
				"param_name" => "social_icons_position",
				"value" => array(
					esc_html__( "Left", 'moose' ) => "left",
					esc_html__( "Center", 'moose' ) => "center",
					esc_html__( "Right", 'moose' ) => "right"
				),
				"save_always" => true,
				"description" => esc_html__( "Social Icons Position applies only when Main Info Below Image type is selected", 'moose' ),
				"dependency" => array('element' => 'team_social_style', 'value' => array("social_style_between"))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Type", 'moose' ),
				"param_name" => "team_social_icon_type",
				"value" => array(
					esc_html__( "Normal", 'moose' ) => "normal_social",
					esc_html__( "Circle", 'moose' ) => "circle_social",
					esc_html__( "Square", 'moose' ) => "square_social"
				),
				"save_always" => true,
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons color", 'moose' ),
				"param_name" => "team_social_icon_color",
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Background Color", 'moose' ),
				"param_name" => "team_social_icon_background_color",
				"dependency" => array('element' => 'team_social_icon_type', 'value' => array('circle_social', 'square_social'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Border Color", 'moose' ),
				"param_name" => "team_social_icon_border_color",
				"dependency" => array('element' => 'team_social_icon_type', 'value' => array('circle_social', 'square_social'))
			)
		),
		$team_social_icons_array,
		array(
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Team Member Skills", 'moose' ),
				"value" => array("Show Team Member Skills?" => "yes"),
				"param_name" => "show_skills"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Skills Title Size", 'moose' ),
				"param_name" => "skills_title_size",
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "First Skill Title", 'moose' ),
				"param_name" => "skill_title_1",
				"description" => esc_html__( "For example Web design", 'moose' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "First Skill Percentage", 'moose' ),
				"param_name" => "skill_percentage_1",
				"description" => esc_html__( "Enter just number, without %", 'moose' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Second Skill Title", 'moose' ),
				"param_name" => "skill_title_2",
				"description" => esc_html__( "For example Web design", 'moose' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Second Skill Percentage", 'moose' ),
				"param_name" => "skill_percentage_2",
				"description" => esc_html__( "Enter just number, without %", 'moose' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Third Skill Title", 'moose' ),
				"param_name" => "skill_title_3",
				"description" => esc_html__( "For example Web design", 'moose' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Third Skill Percentage", 'moose' ),
				"param_name" => "skill_percentage_3",
				"description" => esc_html__( "Enter just number, without %", 'moose' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			)
		)
	)

) );


/*** Clients ***/

class WPBakeryShortCode_No_Clients  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Elated Clients", 'moose' ),
	"base" => "no_clients",
	"as_parent" => array('only' => 'no_client'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-clients extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'moose' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Two", 'moose' ) => "two_columns",
				esc_html__( "Three", 'moose' ) => "three_columns",
				esc_html__( "Four", 'moose' ) => "four_columns",
				esc_html__( "Five", 'moose' ) => "five_columns",
				esc_html__( "Six", 'moose' ) => "six_columns"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show borders", 'moose' ),
			"param_name" => "client_borders",
			"value" => array(
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Space between clients", 'moose' ),
			"param_name" => "space_between_clients",
			"description" => esc_html__( "When yes, space will be 10px", 'moose' ),
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Client ***/

class WPBakeryShortCode_No_Client extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Elated Client", 'moose' ),
	"base" => "no_client",
	"content_element" => true,
	"icon" => "icon-wpb-client extended-custom-icon",
	"as_child" => array('only' => 'no_clients'),
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'moose' ),
			"param_name" => "image"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link", 'moose' ),
			"param_name" => "link"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link Target", 'moose' ),
			"param_name" => "link_target",
			"value" => array(
				"" => "",
				esc_html__( "Self", 'moose' ) => "_self",
				esc_html__( "Blank", 'moose' ) => "_blank"
			)
		)
	)
) );


/*** Circles ***/

class WPBakeryShortCode_No_Circles  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Elated Process Holder", 'moose' ),
	"base" => "no_circles",
	"as_parent" => array('only' => 'no_circle'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-circles extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'moose' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Three", 'moose' ) => "three_columns",
				esc_html__( "Four", 'moose' ) => "four_columns",
				esc_html__( "Five", 'moose' ) => "five_columns",
				esc_html__( "Six", 'moose' ) => "six_columns"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Lines between items?", 'moose' ),
			"param_name" => "lines_between",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Line Color", 'moose' ),
			"param_name" => "line_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Process Item Height (px)", 'moose' ),
			"param_name" => "process_height"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Process Item Width (px)", 'moose' ),
			"param_name" => "process_width"
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Circle ***/

class WPBakeryShortCode_No_Circle extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Elated Process", 'moose' ),
	"base" => "no_circle",
	"content_element" => true,
	"icon" => "icon-wpb-circle extended-custom-icon",
	"as_child" => array('only' => 'no_circles'),
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'moose' ),
				"param_name" => "type",
				"value" => array(
					"Icon in Process" => "icon_type",
					esc_html__( "Image", 'moose' ) => "image_type",
					esc_html__( "Text in Process", 'moose' ) => "text_type",
					esc_html__( "Image with Text", 'moose' ) => "image_with_text_type"
				),
				"save_always" => true
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Process Background Image", 'moose' ),
				"param_name" => "background_image",
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Process Color", 'moose' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Process Transparency", 'moose' ),
				"param_name" => "background_transparency",
				"description" => esc_html__( "Insert value between 0 and 1", 'moose' )
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => '',
				"value" => array("Without outer border?" => "yes"),
				"param_name" => "without_double_border"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Process Color", 'moose' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Process Width", 'moose' ),
				"param_name" => "border_width"
			)
		),
		$moose_elated_icon_collections->getVCParamsArray( array( 'element' => 'type', 'value' => array( 'icon_type' ) ) ),
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size", 'moose' ),
				"param_name" => "size",
				"description" => esc_html__( "Enter just number. Omit px", 'moose' ),
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'moose' ),
				"param_name" => "icon_color",
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'moose' ),
				"param_name" => "image",
				"dependency" => array('element' => "type", 'value' => array("image_type", "image_with_text_type"))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Circle Hover Color", 'moose' ),
				"param_name" => "circle_hover_color",
				"dependency" => array('element' => "type", 'value' => array("image_type", "image_with_text_type")),
				"description" => esc_html__( "default #e5735c", 'moose' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Circle Border Hover Color", 'moose' ),
				"param_name" => "circle_hover_border_color",
				"dependency" => array('element' => "type", 'value' => array("image_type", "image_with_text_type")),
				"description" => esc_html__( "default #e5735c", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process - e.g. A number.", 'moose' ),
				"param_name" => "text_in_circle",
				"dependency" => array('element' => "type", 'value' => array("text_type", "image_with_text_type"))
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Text in Process Tag", 'moose' ),
				"param_name" => "text_in_circle_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",
					esc_html__( "h5", 'moose' ) => "h5",
					esc_html__( "h6", 'moose' ) => "h6",
				),
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process Font Family", 'moose' ),
				"param_name" => "font_family",
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process Size (px)", 'moose' ),
				"param_name" => "font_size",
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process Font Weight", 'moose' ),
				"param_name" => "font_weight",
				"value" => $font_weight_array,
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process Color", 'moose' ),
				"param_name" => "text_in_circle_color",
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text on Hover - e.g. We begin with:", 'moose' ),
				"param_name" => "text_in_circle_hover",
				"dependency" => array('element' => "type", 'value' => array("text_type", "image_with_text_type"))
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Text on Hover Tag", 'moose' ),
				"param_name" => "text_in_circle_hover_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",
					esc_html__( "h5", 'moose' ) => "h5",
					esc_html__( "h6", 'moose' ) => "h6",
				),
				"dependency" => array('element' => "text_in_circle_hover", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text on Hover Font Family", 'moose' ),
				"param_name" => "text_in_circle_hover_font_family",
				"dependency" => array('element' => "text_in_circle_hover", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text on Hover Size (px)", 'moose' ),
				"param_name" => "text_in_circle_hover_font_size",
				"dependency" => array('element' => "text_in_circle_hover", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text on Hover Font Weight", 'moose' ),
				"param_name" => "text_in_circle_hover_font_weight",
				"value" => $font_weight_array,
				"dependency" => array('element' => "text_in_circle_hover", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text on Hover Color", 'moose' ),
				"param_name" => "text_in_circle_hover_color",
				"dependency" => array('element' => "text_in_circle_hover", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'moose' ),
				"param_name" => "link"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link Target", 'moose' ),
				"param_name" => "link_target",
				"value" => array(
					"" => "",
					esc_html__( "Self", 'moose' ) => "_self",
					esc_html__( "Blank", 'moose' ) => "_blank"
				),
				"dependency" => array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'moose' ),
				"param_name" => "title"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'moose' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",
					esc_html__( "h5", 'moose' ) => "h5",
					esc_html__( "h6", 'moose' ) => "h6",
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Font Size (px)", 'moose' ),
				"param_name" => "title_font_size"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'moose' ),
				"param_name" => "title_color",
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Alignment", 'moose' ),
				"param_name" => "title_alignment",
				"value" => array(
					""   => "",
					esc_html__( "Left", 'moose' ) => "title_left",
					esc_html__( "Center", 'moose' ) => "title_center",
					esc_html__( "Right", 'moose' ) => "title_right"
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'moose' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'moose' ),
				"param_name" => "text_color",
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Text Alignment", 'moose' ),
				"param_name" => "text_alignment",
				"value" => array(
					""   => "",
					esc_html__( "Left", 'moose' ) => "text_left",
					esc_html__( "Center", 'moose' ) => "text_center",
					esc_html__( "Right", 'moose' ) => "text_right"
				),
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'moose' ),
				"param_name" => "show_separator",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "yes",
					esc_html__( "No", 'moose' ) => "no"
				),
				"save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Thickness (px)", 'moose' ),
				"param_name" => "separator_thickness",
				"description" => esc_html__( "Enter just number. Omit px (default value is 2)", 'moose' ),
				"dependency" => array('element' => 'show_separator', 'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Width (px)", 'moose' ),
				"param_name" => "separator_width",
				"description" => esc_html__( "Enter just number. Omit px (default value is 25)", 'moose' ),
				"dependency" => array('element' => 'show_separator', 'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Top (px)", 'moose' ),
				"param_name" => "separator_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 25)", 'moose' ),
				"dependency" => array('element' => 'show_separator', 'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Bottom (px)", 'moose' ),
				"param_name" => "separator_margin_bottom",
				"description" => esc_html__( "Enter just number. Omit px (default value is 25)", 'moose' ),
				"dependency" => array('element' => 'show_separator', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Color", 'moose' ),
				"param_name" => "separator_color",
				"dependency" => array('element' => 'show_separator', 'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Margin Top", 'moose' ),
				"param_name" => "title_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 24)", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Margin Top", 'moose' ),
				"param_name" => "text_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 5)", 'moose' )
			)
		)
	)
) );


/*** Pricing Tables ***/

class WPBakeryShortCode_No_Pricing_Tables  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Elated Pricing Tables", 'moose' ),
	"base" => "no_pricing_tables",
	"as_parent" => array('only' => 'no_pricing_table'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-pricing-tables extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'moose' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Two", 'moose' ) => "two_columns",
				esc_html__( "Three", 'moose' ) => "three_columns",
				esc_html__( "Four", 'moose' ) => "four_columns",
			),
			"save_always" => true
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Pricing Table ***/

class WPBakeryShortCode_No_Pricing_Table  extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Pricing Table", 'moose' ),
	"base" => "no_pricing_table",
	"icon" => "icon-wpb-pricing-table extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"as_child" => array('only' => 'no_pricing_tables'),
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( 'Type', 'moose' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Price on top", 'moose' ) => "price_on_top",
					esc_html__( "Title on top", 'moose' ) => "title_on_top"
				),
				"save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'moose' ),
				"param_name" => "title",
				"value" => "Basic Plan",
				"save_always" => true
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'moose' ),
				"param_name" => "title_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Background Color", 'moose' ),
				"param_name" => "title_background_color"
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Background Image", 'moose' ),
				"param_name" => "title_background_image"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Font Family", 'moose' ),
				"param_name" => "title_font_family"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Small Separator", 'moose' ),
				"param_name" => "title_separator",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				),
				"save_always" => true,
				"dependency" => array('element' => 'type', 'value' => 'price_on_top')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Separator Color", 'moose' ),
				"param_name" => "title_separator_color",
				"dependency" => array('element' => 'title_separator', 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Border Bottom", 'moose' ),
				"param_name" => "title_border_bottom",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "yes",
					esc_html__( "No", 'moose' ) => "no"
				),
				"save_always" => true,
				"dependency" => array('element' => 'type', 'value' => 'title_on_top')
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Border Bottom Style", 'moose' ),
				"param_name" => "title_border_bottom_style",
				"value" => array(
					esc_html__( "In grid", 'moose' ) => "pricing_title_grid",
					esc_html__( "Full Width", 'moose' ) => "pricing_title_full_width"
				),
				"save_always" => true,
				"dependency" => array('element' => 'title_border_bottom', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Border Bottom Color", 'moose' ),
				"param_name" => "title_border_bottom_color",
				"dependency" => array('element' => 'title_border_bottom', 'value' => 'yes')
			),

			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Around Color", 'moose' ),
				"param_name" => "border_arround_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Price", 'moose' ),
				"param_name" => "price",
				"description" => esc_html__( "Default value is 100", 'moose' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Price Color", 'moose' ),
				"param_name" => "price_color"
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Price Background Image", 'moose' ),
				"param_name" => "price_bckg_image"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Price Background Color", 'moose' ),
				"param_name" => "price_background"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Price Border Bottom", 'moose' ),
				"param_name" => "price_border_bottom",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "yes",
					esc_html__( "No", 'moose' ) => "no"
				),
				"save_always" => true
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Price Border Bottom Color", 'moose' ),
				"param_name" => "price_border_bottom_color",
				"dependency" => array('element' => 'price_border_bottom', 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Price Font Weight", 'moose' ),
				"param_name" => "price_font_weight",
				"value" => $font_weight_array
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Currency", 'moose' ),
				"param_name" => "currency",
				"description" => esc_html__( "Default mark is $", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Price Period", 'moose' ),
				"param_name" => "price_period",
				"description" => esc_html__( "Default label is monthly", 'moose' )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Price Period Position", 'moose' ),
				"param_name" => "price_period_position",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "Next to Title", 'moose' ) => "next_to_title",
					esc_html__( "Bellow Title", 'moose' ) => "bellow_title"
				),
				"dependency" => array('element' => 'type', 'value' => 'price_on_top')
			),		
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active", 'moose' ),
				"param_name" => "active",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				),
				"save_always" => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active Style", 'moose' ),
				"param_name" => "active_style",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "Circle", 'moose' ) => "circle",
					esc_html__( "Rectangle", 'moose' ) => "rectangle",
				),
				"dependency" => array('element' => 'active', 'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active text", 'moose' ),
				"param_name" => "active_text",
				"description" => esc_html__( "Best choice", 'moose' ),
				"dependency" => array('element' => 'active', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active Text Color", 'moose' ),
				"param_name" => "active_text_color",
				"dependency" => array('element' => 'active', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active Text Background Color", 'moose' ),
				"param_name" => "active_text_background_color",
				"dependency" => array('element' => 'active', 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content Style", 'moose' ),
				"param_name" => "content_style",
				"value" => array(
					esc_html__( "In Grid", 'moose' ) => "pricing_content_grid",
					esc_html__( "Full Width ", 'moose' ) => "pricing_content_full_width",
				),
				"save_always" => true
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content Text Color", 'moose' ),
				"param_name" => "content_text_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content Background Color", 'moose' ),
				"param_name" => "content_background_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set Different Background Color for Odd and Even Content Sections?", 'moose' ),
				"param_name" => "different_odd_even_sections",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes",
				),
				"save_always" => true
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Even Sections Background Color", 'moose' ),
				"param_name" => "even_back_color",
				"dependency" => array('element' =>  'different_odd_even_sections', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Odd Sections Background Color", 'moose' ),
				"param_name" => "odd_back_color",
				"dependency" => array('element' => 'different_odd_even_sections', 'value' => 'yes')
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Pricing Table Background Image", 'moose' ),
				"param_name" => "content_background_image"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Button", 'moose' ),
				"param_name" => "show_button",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "Yes", 'moose' ) => "yes",
					esc_html__( "No", 'moose' ) => "no"
				)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Hover Animation", 'moose' ),
				"param_name" => "button_hover_animation",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "default",
					esc_html__( "Disable Animation", 'moose' ) => "disable_animation",
					esc_html__( "Rotate Icon", 'moose' ) => "rotate_icon",
					esc_html__( "Rotate Text and Icon", 'moose' ) => "rotate_text_and_icon",
					esc_html__( "Fill Text and Rotate Icon", 'moose' ) => "fill_text_rotate_icon"
				),
				"save_always" => true,
				"dependency" => array('element' => 'show_button',  'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Text", 'moose' ),
				"param_name" => "button_text",
				"dependency" => array('element' => 'show_button',  'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Font Size (px)", 'moose' ),
				"param_name" => "button_font_size",
				"dependency" => array('element' => 'show_button',  'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Color", 'moose' ),
				"param_name" => "button_color",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Hover Color", 'moose' ),
				"param_name" => "button_hover_color",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Background Color", 'moose' ),
				"param_name" => "button_background_color",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Hover Background Color", 'moose' ),
				"param_name" => "button_hover_background_color",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Border Color", 'moose' ),
				"param_name" => "button_border_color",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Hover Border Color", 'moose' ),
				"param_name" => "button_hover_border_color",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Link", 'moose' ),
				"param_name" => "button_link",
				"dependency" => array('element' =>  'show_button',  'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Target", 'moose' ),
				"param_name" => "button_target",
				"value" => array(
					"" => "",
					esc_html__( "Self", 'moose' ) => "_self",
					esc_html__( "Blank", 'moose' ) => "_blank"
				),
				"dependency" => array('element' => 'show_button',  'value' => 'yes')
			)			
		),
		$moose_elated_icon_collections->getVCParamsArray(array("element" => "show_button", "value" => 'yes')),
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Icon Size", 'moose' ),
				"param_name" => "button_icon_size",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Button Icon Color", 'moose' ),
				"param_name" => "button_icon_color",
				"dependency" => array('element' => 'show_button', 'value' => 'yes')
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'moose' ),
				"param_name" => "content",
				"value" => '<li>' . esc_html__('content content content', 'moose') . '</li><li>' . esc_html__('content content content', 'moose') . '</li><li>' . esc_html__('content content content', 'moose') . '</li>'
			)
	)
	)
) );


/*** Service table ***/

vc_map( array(
		"name" => esc_html__( "Service Table", 'moose' ),
		"base" => "no_service_table",
		"icon" => "icon-wpb-service-table extended-custom-icon",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
			array(
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Type", 'moose' ),
					"param_name" => "type",
					"value" => array(
						"Icon/Image on Top" 	=> "icon_image_on_top",
						esc_html__( "Title on Top", 'moose' ) => "title_on_top",
					),
					"save_always" => true
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title", 'moose' ),
					"param_name" => "title",
					"value" => ""
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Title Tag", 'moose' ),
					"param_name" => "title_tag",
					"value" => array(
						""   => "",
						esc_html__( "h2", 'moose' ) => "h2",
						esc_html__( "h3", 'moose' ) => "h3",
						esc_html__( "h4", 'moose' ) => "h4",
						esc_html__( "h5", 'moose' ) => "h5",
						esc_html__( "h6", 'moose' ) => "h6",
					)
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Color", 'moose' ),
					"param_name" => "title_color"
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Background Color", 'moose' ),
					"param_name" => "title_background_color"
				),
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Top Background Image", 'moose' ),
					"param_name" => "top_background_image",
					"dependency" => array("element" => "type", "value" => array("icon_image_on_top"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Small Separator", 'moose' ),
					"param_name" => "title_separator",
					"value" => array(
						esc_html__( "No", 'moose' ) => "no",
						esc_html__( "Yes", 'moose' ) => "yes"
					),
					"save_always" => true,
					"dependency" => array("element" => "type", "value" => array("icon_image_on_top"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Subtitle", 'moose' ),
					"param_name" => "subtitle",
					"value" => ""
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Subtitle Color", 'moose' ),
					"param_name" => "subtitle_color",
					"dependency" => array("element" => "subtitle", 'not_empty' => true)
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Separator Color", 'moose' ),
					"param_name" => "title_separator_color",
					"dependency" => array("element" => "title_separator", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Border Bottom", 'moose' ),
					"param_name" => "title_border_bottom",
					"value" => array(
						esc_html__( "Yes", 'moose' ) => "yes",
						esc_html__( "No", 'moose' ) => "no"
					),
					"save_always" => true,
					"dependency" => array("element" => "type", "value" => array("title_on_top"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Border Bottom color", 'moose' ),
					"param_name" => "title_border_bottom_color",
					"dependency" => array("element" => "title_border_bottom", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Show Icon/Image", 'moose' ),
					"param_name" => "show_icon_image",
					"value" => array(
						esc_html__( "Yes", 'moose' ) => "yes",
						esc_html__( "No", 'moose' ) => "no"
					),
					"save_always" => true
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Header type", 'moose' ),
					"param_name" => "header_type",
					"value" => array(
						esc_html__( "With Icon", 'moose' ) => "with_icon",
						esc_html__( "With Image", 'moose' ) => "with_image"
					),
					"save_always" => true,
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				)
			),
			$moose_elated_icon_collections->getVCParamsArray(array("element" => "header_type", "value" => array("with_icon"))),
			array(
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Color", 'moose' ),
					"param_name" => "icon_color",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Holder Background Color", 'moose' ),
					"param_name" => "icon_background_color",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon/Image Holder Padding Top (px)", 'moose' ),
					"param_name" => "icon_padding_top",
					"value" => "",
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon/Image Holder Padding Bottom (px)", 'moose' ),
					"param_name" => "icon_padding_bottom",
					"value" => "",
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Custom Size (px)", 'moose' ),
					"param_name" => "custom_size",
					"value" => "",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Header Image", 'moose' ),
					"param_name" => "header_image",
					"dependency" => array("element" => "header_type", "value" => array("with_image"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Below Image/Icon", 'moose' ),
					"param_name" => "border_below_image",
					"value" => array(
						esc_html__( "Default", 'moose' ) => "",
						esc_html__( "No", 'moose' ) => "no",
						esc_html__( "Yes", 'moose' ) => "yes"
					),
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Below Image/Icon Color", 'moose' ),
					"param_name" => "border_below_image_color",

					"dependency" => array("element" => "border_below_image", "value" => array("yes"))),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Below Image/Icon Width", 'moose' ),
					"param_name" => "border_below_image_width",
					"dependency" => array("element" => "border_below_image",  "value" => array("yes"))),				
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content Background Color", 'moose' ),
					"param_name" => "content_background_color",

				),
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content Background Image", 'moose' ),
					"param_name" => "content_background_image",

				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border color", 'moose' ),
					"param_name" => "border_color",
					"value" => "",
					"dependency" => array('element' => "border", 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active", 'moose' ),
					"param_name" => "active",
					"value" => array(
						esc_html__( "No", 'moose' ) => "no",
						esc_html__( "Yes", 'moose' ) => "yes"
					),
					"save_always" => true,

				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active Style", 'moose' ),
					"param_name" => "active_style",
					"value" => array(
						esc_html__( "Default", 'moose' ) => "",
						esc_html__( "Circle", 'moose' ) => "circle",
						esc_html__( "Rectangle", 'moose' ) => "rectangle"
					),

					"dependency" => array('element' => "active", 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active text", 'moose' ),
					"param_name" => "active_text",
					"description" => esc_html__( "Best choice", 'moose' ),
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active Text Color", 'moose' ),
					"param_name" => "active_text_color",
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active Text Background Color", 'moose' ),
					"param_name" => "active_text_background_color",
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content Text Color", 'moose' ),
					"param_name" => "content_text_color"
				),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content", 'moose' ),
					"param_name" => "content",
					"value" => '<li>' . esc_html__('content content content', 'moose') . '</li><li>' . esc_html__('content content content', 'moose') . '</li><li>' . esc_html__('content content content', 'moose') . '</li>'

				)
			)
		)
	)
);


/*** Call to action ***/

$call_to_action_button_icons_array = array();
$call_to_action_button_IconCollections = $moose_elated_icon_collections->iconCollections;
foreach($call_to_action_button_IconCollections as $collection_key => $collection) {

    $call_to_action_button_icons_array[] = array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Button Icon", 'moose' ),
        "param_name" => "button_".$collection->param,
        "value" => $collection->getIconsArray(),
        "dependency" => Array('element' => "button_icon_pack", 'value' => array($collection_key))
    );

}


vc_map( array(
		"name" => esc_html__( "Call to Action", 'moose' ),
		"base" => "no_call_to_action",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"icon" => "icon-wpb-call-to-action extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
			array(
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"class"         => "",
					"heading" => esc_html__( "Full Width", 'moose' ),
					"param_name"    => "full_width",
					"value"         => array(
						esc_html__( "Yes", 'moose' ) => "yes",
						esc_html__( "No", 'moose' ) => "no"
					),
					"save_always" => true,

				),
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"class"         => "",
					"heading" => esc_html__( "Content in grid", 'moose' ),
					"param_name"    => "content_in_grid",
					"value"         => array(
						esc_html__( "Yes", 'moose' ) => "yes",
						esc_html__( "No", 'moose' ) => "no"
					),
					"save_always" => true,

					"dependency"    => array("element" => "full_width", "value" => "yes")
				),
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"class"         => "",
					"heading" => esc_html__( "Grid size", 'moose' ),
					"param_name"    => "grid_size",
					"value"         => array(
						esc_html__( "75/25", 'moose' ) => "75",
						esc_html__( "50/50", 'moose' ) => "50",
						esc_html__( "66/33", 'moose' ) => "66"
					),
					"save_always" => true,

					"dependency"    => array("element" => "content_in_grid", "value" => "yes")
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Type", 'moose' ),
					"param_name" => "type",
					"value" => array(
						esc_html__( "Normal", 'moose' ) => "normal",
						esc_html__( "With Icon", 'moose' ) => "with_icon",
						esc_html__( "With Custom Icon", 'moose' ) => "with_custom_icon"
					),
					"save_always" => true,

				)
			),
			$moose_elated_icon_collections->getVCParamsArray(array('element' => 'type', 'value' => array('with_icon'))),
			array(
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Custom Icon", 'moose' ),
					"param_name" => "custom_icon",
					"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Size (px)", 'moose' ),
					"param_name" => "icon_size",

					"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Position", 'moose' ),
					"param_name" => "icon_position",
					"value" => array(
						esc_html__( "Default/Middle", 'moose' ) => "middle",
						esc_html__( "Top", 'moose' ) => "top",
						esc_html__( "Bottom", 'moose' ) => "bottom"
					),
					"save_always" => true,

					"dependency" => array('element' => 'type', 'value' => array('with_icon','with_custom_icon'))
				),
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_html__( "Icon Color", 'moose' ),
					"param_name" => "icon_color",

					"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Background Color", 'moose' ),
					"param_name" => "background_color",

				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Color", 'moose' ),
					"param_name" => "border_color",

				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Box Padding (top right bottom left) px", 'moose' ),
					"param_name" => "box_padding",
					"description" => esc_html__( "Default padding is 20px on all sides", 'moose' )
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Default Text Font Size (px)", 'moose' ),
					"param_name" => "text_size",
					"description" => esc_html__( "Font size for p tag", 'moose' )
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Show Button", 'moose' ),
					"param_name" => "show_button",
					"value" => array(
						esc_html__( "Yes", 'moose' ) => "yes",
						esc_html__( "No", 'moose' ) => "no"
					),
					"save_always" => true,

				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Position", 'moose' ),
					"param_name" => "button_position",
					"value" => array(
						esc_html__( "Default/right", 'moose' ) => "",
						esc_html__( "Center", 'moose' ) => "center",
						esc_html__( "Left", 'moose' ) => "left"
					),

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Size", 'moose' ),
					"param_name" => "button_size",
					"value" => array(
						esc_html__( "Default", 'moose' ) => "",
						esc_html__( "Small", 'moose' ) => "small",
						esc_html__( "Medium", 'moose' ) => "medium",
						esc_html__( "Large", 'moose' ) => "large",
						esc_html__( "Extra Large", 'moose' ) => "big_large"
					),

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Text", 'moose' ),
					"param_name" => "button_text",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Animation", 'moose' ),
					"param_name" => "button_hover_animation",
					"value" => array(
						esc_html__( "Default", 'moose' ) => "default",
						esc_html__( "Disable Animation", 'moose' ) => "disable_animation",
						esc_html__( "Rotate Icon", 'moose' ) => "rotate_icon",
						esc_html__( "Rotate Text and Icon", 'moose' ) => "rotate_text_and_icon",
						esc_html__( "Fill Text and Rotate Icon", 'moose' ) => "fill_text_rotate_icon"
					),
					"save_always" => true,
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),				
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Link", 'moose' ),
					"param_name" => "button_link",

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Target", 'moose' ),
					"param_name" => "button_target",
					"value" => array(
						"" => "",
						esc_html__( "Self", 'moose' ) => "_self",
						esc_html__( "Blank", 'moose' ) => "_blank"
					),

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Text Color", 'moose' ),
					"param_name" => "button_text_color",

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Text Color", 'moose' ),
					"param_name" => "button_hover_text_color",

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Background Color", 'moose' ),
					"param_name" => "button_background_color",

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				 array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Background Color", 'moose' ),
					"param_name" => "button_hover_background_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Border Color", 'moose' ),
					"param_name" => "button_border_color",

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Border Color", 'moose' ),
					"param_name" => "button_hover_border_color",

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Border Width", 'moose' ),
					"param_name" => "button_border_width",

					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Radius (px)", 'moose' ),
					"param_name" => "border_radius",
					"description" => esc_html__( "Border radius for button", 'moose' ),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "class" => "",
                    "heading" => esc_html__( "Button Icon Pack", 'moose' ),
                    "param_name" => "button_icon_pack",
                    "value" => array_merge(array("No Icon" => ""),$moose_elated_icon_collections->getIconCollectionsVC())
                )
            ),
            $call_to_action_button_icons_array,
            array(
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => esc_html__( "Icon Size", 'moose' ),
                    "param_name" => "button_icon_size",
                    "dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
                ),
                array(
                    "type" => "colorpicker",
                    "class" => "",
                    "heading" => esc_html__( "Icon Color", 'moose' ),
                    "param_name" => "button_icon_color",
                    "dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
                ),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content", 'moose' ),
					"param_name" => "content",
					"value" => "<p>"."I am test text for Call to action."."</p>",

				)
			)
			)
    )
);


/*** Message shortcode ***/

vc_map( array(
	"name" => esc_html__( "Message", 'moose' ),
	"base" => "no_message",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-message extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'moose' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'moose' ) => "normal",
					esc_html__( "With Icon", 'moose' ) => "with_icon",
					esc_html__( "With Custom Icon", 'moose' ) => "with_custom_icon"
				),
				"save_always" => true
			)
		),
		$moose_elated_icon_collections->getVCParamsArray(array('element' => "type", 'value' => array('with_icon'))),
		array(			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Size", 'moose' ),
				"param_name" => "icon_size",
				"value" => $moose_elated_icon_collections->getIconSizesArray(),
				"save_always" => true,
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Size (px)", 'moose' ),
				"param_name" => "icon_custom_size",
				"value" => "",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'moose' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Icon Background Color", 'moose' ),
				"param_name" => "icon_background_color",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon", 'moose' ),
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'moose' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'moose' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Width (px)", 'moose' ),
				"param_name" => "border_width",
				"description" => esc_html__( "Default value is 1", 'moose' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Close Button Color", 'moose' ),
				"param_name" => "close_button_color",
				"description" => esc_html__( "Default color is #fff", 'moose' )
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'moose' ),
				"param_name" => "content",
				"value" => "<p>"."I am test text for Message shortcode."."</p>"
			)
		)
	)
) );


/*** Blockquote ***/

vc_map( array(
		"name" => esc_html__( "Blockquote", 'moose' ),
		"base" => "no_blockquote",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"icon" => "icon-wpb-blockquote extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'moose' ),
				"param_name" => "text",
				"value" => "Blockquote text",
				"save_always" => true
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'moose' ),
				"param_name" => "text_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title tag", 'moose' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",
					esc_html__( "h5", 'moose' ) => "h5",
					esc_html__( "h6", 'moose' ) => "h6",
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'moose' ),
				"param_name" => "width",
				"description" => esc_html__( "Width (%)", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Height", 'moose' ),
				"param_name" => "line_height",
				"description" => esc_html__( "Line Height (px)", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Left Padding", 'moose' ),
				"param_name" => "left_padding",
				"description" => esc_html__( "Left padding (px)", 'moose' )
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'moose' ),
				"param_name" => "background_color"
			),
             array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Show Border", 'moose' ),
                "param_name" => "show_border",
                "value" => array(
					esc_html__( "No", 'moose' ) => "no",
                    esc_html__( "Yes", 'moose' ) => "yes"
                ),
				"save_always" => true
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'moose' ),
				"param_name" => "border_color",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Border width (px)", 'moose' ),
                "param_name" => "border_width",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Border Right Margin (px)", 'moose' ),
                "param_name" => "border_right_margin",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Show Quote Icon", 'moose' ),
                "param_name" => "show_quote_icon",
                "value" => array(
                    esc_html__( "Yes", 'moose' ) => "yes",
                    esc_html__( "No", 'moose' ) => "no"
                ),
				"save_always" => true
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Use Custom Icon or Font", 'moose' ),
                "param_name" => "quote_icon_font",
                "value" => array(
					esc_html__( "Use Icon", 'moose' ) => "with_icon",
                    esc_html__( "Use Specific Font", 'moose' ) => "font_family"
                ),
				"save_always" => true,
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Quote Icon Font", 'moose' ),
                "param_name" => "quote_font_family",
                "dependency" => Array('element' => "quote_icon_font", 'value' => 'font_family')
            ),           
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Quote Icon Color", 'moose' ),
                "param_name" => "quote_icon_color",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Quote Icon Size (px)", 'moose' ),
				"param_name" => "quote_icon_size",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Quote Icon Left Padding (px)", 'moose' ),
				"param_name" => "quote_icon_padding_left",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
			)
		)
) );


/*** Custom Font ***/

vc_map( array(
	"name" => esc_html__( "Custom Font", 'moose' ),
	"base" => "no_custom_font",
	"icon" => "icon-wpb-custom-font extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font family", 'moose' ),
			"param_name" => "font_family",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font size", 'moose' ),
			"param_name" => "font_size",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Line height", 'moose' ),
			"param_name" => "line_height",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Style", 'moose' ),
			"param_name" => "font_style",
			"value" => array(
				esc_html__( "Normal", 'moose' ) => "normal",
				esc_html__( "Italic", 'moose' ) => "italic"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Align", 'moose' ),
			"param_name" => "text_align",
			"value" => array(
				esc_html__( "Left", 'moose' ) => "left",
				esc_html__( "Center", 'moose' ) => "center",
				esc_html__( "Right", 'moose' ) => "right"
			),
			"save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font weight", 'moose' ),
			"param_name" => "font_weight",
			"value" => "300",
			"save_always" => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Color", 'moose' ),
			"param_name" => "color"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text decoration", 'moose' ),
			"param_name" => "text_decoration",
			"value" => array(
				esc_html__( "None", 'moose' ) => "none",
				esc_html__( "Underline", 'moose' ) => "underline",
				esc_html__( "Overline", 'moose' ) => "overline",
				esc_html__( "Line Through", 'moose' ) => "line-through"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text transform", 'moose' ),
			"param_name" => "text_transform",
			"value" => array(
				esc_html__( "None", 'moose' ) => "none",
				esc_html__( "Uppercase", 'moose' ) => "uppercase",
				esc_html__( "Lowercase", 'moose' ) => "lowercase",
				esc_html__( "Capitalize", 'moose' ) => "capitalize"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text shadow", 'moose' ),
			"param_name" => "text_shadow",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Letter Spacing (px)", 'moose' ),
			"param_name" => "letter_spacing",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'moose' ),
			"param_name" => "background_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding", 'moose' ),
			"param_name" => "padding",
			"value" => "0",
			"save_always" => true,
			"description" => esc_html__( 'Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px', 'moose' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Margin", 'moose' ),
			"param_name" => "margin",
			"value" => "0",
			"save_always" => true,
			"description" => esc_html__( 'Please insert margin in format (top right bottom left) i.e. 5px 5px 5px 5px', 'moose' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show in border box", 'moose' ),
			"param_name" => "show_in_border_box",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Color", 'moose' ),
			"param_name" => "border_color",
			"dependency" => array('element' =>  'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Thickness (px)", 'moose' ),
			"param_name" => "border_width",
			"value" => "",
			"dependency" => array('element' =>  'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text background Color", 'moose' ),
			"param_name" => "text_background_color",
			"value" => "",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text padding (px)", 'moose' ),
			"param_name" => "text_padding",
			"value" => "",
			"description" => esc_html__( 'Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px', 'moose' ),
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Type out strings?", 'moose' ),
			"param_name" => "type_out_strings",
			"value" => array(
				esc_html__( "No", 'moose' ) => "no",
				esc_html__( "Yes", 'moose' ) => "yes"
			),
			"save_always" => true,
			"description" => esc_html__( "Choose whether to type out one string at a time or to display a non-animated custom font area.", 'moose' )
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content", 'moose' ),
			"param_name" => "content",
			"value" => "<p>content content content</p>",
			"dependency" => array('element' => 'type_out_strings', 'value' => 'no')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "First string", 'moose' ),
			"param_name" => "first_string",
			"value" => "",
			"description" => esc_html__( "Add the first string. You can type up to 3 strings.", 'moose' ),
			"dependency" => array('element' => 'type_out_strings', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Second string", 'moose' ),
			"param_name" => "second_string",
			"value" => "",
			"description" => esc_html__( "Add the second string", 'moose' ),
			"dependency" => array('element' => 'first_string', 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Third string", 'moose' ),
			"param_name" => "third_string",
			"value" => "",
			"description" => esc_html__( "Add the third string", 'moose' ),
			"dependency" => array('element' => 'second_string', 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Type Speed (ms)", 'moose' ),
			"param_name" => "type_speed",
			"value" => "",
			"description" => esc_html__( "Set the type speed in milliseconds. The default is 30.", 'moose' ),
			"dependency" => array('element' => 'type_out_strings', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Back Delay (ms)", 'moose' ),
			"param_name" => "back_delay",
			"value" => "",
			"description" => esc_html__( "Set the pause between typing out and erasing a string in milliseconds. The default value is 500.", 'moose' ),
			"dependency" => array('element' => 'type_out_strings', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Loop?", 'moose' ),
			"param_name" => "loop",
			"value" => array(
				esc_html__( "No", 'moose' ) => "false",
				esc_html__( "Yes", 'moose' ) => "true"
			),
			"description" => esc_html__( "Choose whether to loop the typing animation.", 'moose' ),
			"dependency" => array('element' => 'type_out_strings', 'value' => 'yes')
		)
	)
) );


/*** Button shortcode **/

vc_map( array(
		"name" => esc_html__( "Button", 'moose' ),
		"base" => "no_button",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"icon" => "icon-wpb-button extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
                    array(
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Size", 'moose' ),
                            "param_name" => "size",
                            "value" => array(
                                esc_html__( "Default", 'moose' ) => "",
                                esc_html__( "Small", 'moose' ) => "small",
                                esc_html__( "Medium", 'moose' ) => "medium",	
                                esc_html__( "Large", 'moose' ) => "large",
                                esc_html__( "Extra Large", 'moose' ) => "big_large",
                                esc_html__( "Extra Large Full Width", 'moose' ) => "big_large_full_width"
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Style", 'moose' ),
                            "param_name" => "style",
                            "value" => array(
                                esc_html__( "Default", 'moose' ) => "",
                                esc_html__( "Transparent", 'moose' ) => "transparent"
                            )
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Text", 'moose' ),
                            "param_name" => "text"
                        ),
						 array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Animation", 'moose' ),
                            "param_name" => "button_hover_animation",
                            "value" => array(
                                esc_html__( "Default", 'moose' ) => "default",
								esc_html__( "Disable Animation", 'moose' ) => "disable_animation",
								esc_html__( "Rotate Icon", 'moose' ) => "rotate_icon",
								esc_html__( "Rotate Text and Icon", 'moose' ) => "rotate_text_and_icon",
								esc_html__( "Fill Text and Rotate Icon", 'moose' ) => "fill_text_rotate_icon"
                            ),
                           "save_always" => true
                        )
                    ),
                    $moose_elated_icon_collections->getVCParamsArray(array(), '', true),
                    array(
            
						array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Font Size (px)", 'moose' ),
                            "param_name" => "icon_font_size",
                            "dependency" => array('element' => $moose_elated_icon_collections->iconPackParamName, 'not_empty' => true)

                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Color", 'moose' ),
                            "param_name" => "icon_color",
                            "dependency" => Array('element' =>$moose_elated_icon_collections->iconPackParamName, 'not_empty' => true)
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link", 'moose' ),
                            "param_name" => "link"
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link Target", 'moose' ),
                            "param_name" => "target",
                            "value" => array(
                                esc_html__( "Self", 'moose' ) => "_self",
                                esc_html__( "Blank", 'moose' ) => "_blank"
                            ),
							"save_always" => true
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Color", 'moose' ),
                            "param_name" => "color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Color", 'moose' ),
                            "param_name" => "hover_color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Background Color", 'moose' ),
                            "param_name" => "background_color",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Background Color", 'moose' ),
                            "param_name" => "hover_background_color",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Border Color", 'moose' ),
                            "param_name" => "border_color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Border Color", 'moose' ),
                            "param_name" => "hover_border_color"
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Border Width (px)", 'moose' ),
                            "param_name" => "border_width"
                        ),
						array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Font Size (px)", 'moose' ),
                            "param_name" => "font_size"                            
                        ),
						array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Line Height (px)", 'moose' ),
                            "param_name" => "line_height"
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Font Style", 'moose' ),
                            "param_name" => "font_style",
                            "value" => array(
                                "" => "",
                                esc_html__( "Normal", 'moose' ) => "normal",	
                                esc_html__( "Italic", 'moose' ) => "italic"
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Font Weight", 'moose' ),
                            "param_name" => "font_weight",
                            "value" => $font_weight_array
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Margin", 'moose' ),
                            "param_name" => "margin",
                            "description" => esc_html__( 'Please insert margin in format: 0px 0px 1px 0px', 'moose')
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Left/Right Padding (px)", 'moose' ),
                            "param_name" => "padding",
                            "description" => esc_html__( "For transparent style affects only space between icon and text", 'moose' ),
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Border radius", 'moose' ),
                            "param_name" => "border_radius",
                            "description" => esc_html__( 'Please insert border radius(Rounded corners) in px. For example: 4', 'moose' ),
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        )
                    )
                )
    )
);


/*** Counter ***/

vc_map( array(
	"name" => esc_html__( "Counter", 'moose' ),
	"base" => "no_counter",
	"category" => esc_html__( 'by Elated', 'moose' ),
	'admin_enqueue_css' => array(moose_elated_get_skin_uri().'/assets/css/eltdf-vc-extend.css'),
	"icon" => "icon-wpb-counter extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Type", 'moose' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Zero Counter", 'moose' ) => "zero",
				esc_html__( "Random Counter", 'moose' ) => "random"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Box", 'moose' ),
			"param_name" => "box",
			"value" => array(
				"" => "",
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Box Border Color", 'moose' ),
			"param_name" => "box_border_color",
			"dependency" => array('element' => "box", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Position", 'moose' ),
			"param_name" => "position",
			"value" => array(
				esc_html__( "Left", 'moose' ) => "left",
				esc_html__( "Right", 'moose' ) => "right",
				esc_html__( "Center", 'moose' ) => "center"
			),
			"save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Digit", 'moose' ),
			"param_name" => "digit"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Underline Digit", 'moose' ),
			"param_name" => "underline_digit",
			"value" => array(
				"" => "",
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Digit Font Size (px)", 'moose' ),
			"param_name" => "font_size"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Digit Font Weight", 'moose' ),
			"param_name" => "font_weight",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Thin 100", 'moose' ) => "100",
				esc_html__( "Extra-Light 200", 'moose' ) => "200",
				esc_html__( "Light 300", 'moose' ) => "300",
				esc_html__( "Regular 400", 'moose' ) => "400",
				esc_html__( "Medium 500", 'moose' ) => "500",
				esc_html__( "Semi-Bold 600", 'moose' ) => "600",
				esc_html__( "Bold 700", 'moose' ) => "700",
				esc_html__( "Extra-Bold 800", 'moose' ) => "800",
				esc_html__( "Ultra-Bold 900", 'moose' ) => "900"
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Digit Letter Spacing (px)", 'moose' ),
			"param_name" => "digit_letter_spacing"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Digit Font Color", 'moose' ),
			"param_name" => "font_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'moose' ),
			"param_name" => "title"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'moose' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'moose' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'moose' ) => "h2",
				esc_html__( "h3", 'moose' ) => "h3",
				esc_html__( "h4", 'moose' ) => "h4",
				esc_html__( "h5", 'moose' ) => "h5",
				esc_html__( "h6", 'moose' ) => "h6",
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Size (px)", 'moose' ),
			"param_name" => "title_size"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text", 'moose' ),
			"param_name" => "text"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Size (px)", 'moose' ),
			"param_name" => "text_size"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Font Weight", 'moose' ),
			"param_name" => "text_font_weight",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Thin 100", 'moose' ) => "100",
				esc_html__( "Extra-Light 200", 'moose' ) => "200",
				esc_html__( "Light 300", 'moose' ) => "300",
				esc_html__( "Regular 400", 'moose' ) => "400",
				esc_html__( "Medium 500", 'moose' ) => "500",
				esc_html__( "Semi-Bold 600", 'moose' ) => "600",
				esc_html__( "Bold 700", 'moose' ) => "700",
				esc_html__( "Extra-Bold 800", 'moose' ) => "800",
				esc_html__( "Ultra-Bold 900", 'moose' ) => "900"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Transform", 'moose' ),
			"param_name" => "text_transform",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "None", 'moose' ) => "none",
				esc_html__( "Capitalize", 'moose' ) => "capitalize",
				esc_html__( "Uppercase", 'moose' ) => "uppercase",
				esc_html__( "Lowercase", 'moose' ) => "lowercase"
			)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Color", 'moose' ),
			"param_name" => "text_color"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator", 'moose' ),
			"param_name" => "separator",
			"value" => array(
				esc_html__( "Yes", 'moose' ) => "yes",
				esc_html__( "No", 'moose' ) => "no"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Position", 'moose' ),
			"param_name" => "separator_position",
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Above Title", 'moose' ) => "above_title",
				esc_html__( "Under Title", 'moose' ) => "under_title",
			),
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Color", 'moose' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Thickness (px)", 'moose' ),
			"param_name" => "separator_thickness",
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Border Style", 'moose' ),
			"param_name" => "separator_border_style",
			"value" => array(
				"" => "",
				esc_html__( "Dashed", 'moose' ) => "dashed",
				esc_html__( "Solid", 'moose' ) => "solid"
			),
			"dependency" => array('element' => "separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding Bottom(px)", 'moose' ),
			"param_name" => "padding_bottom"
		),
	)
) );


/*** Countdown ***/

vc_map( array(
	"name" => esc_html__( "Countdown", 'moose' ),
	"base" => "no_countdown",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-countdown extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Year", 'moose' ),
			"param_name" => "year",
			"value" => array(
				"" => "",
				esc_html__( "2014", 'moose' ) => "2014",
				esc_html__( "2015", 'moose' ) => "2015",
				esc_html__( "2016", 'moose' ) => "2016",
				esc_html__( "2017", 'moose' ) => "2017",
				esc_html__( "2018", 'moose' ) => "2018",
				esc_html__( "2019", 'moose' ) => "2019",
				esc_html__( "2020", 'moose' ) => "2020"
			),
			"save_always" => true
		),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Month", 'moose' ),
			"param_name" => "month",
			"value" => array(
				"" => "",
				esc_html__( "January", 'moose' ) => "1",
				esc_html__( "February", 'moose' ) => "2",
				esc_html__( "March", 'moose' ) => "3",
				esc_html__( "April", 'moose' ) => "4",
				esc_html__( "May", 'moose' ) => "5",
				esc_html__( "June", 'moose' ) => "6",
				esc_html__( "July", 'moose' ) => "7",
				esc_html__( "August", 'moose' ) => "8",
				esc_html__( "September", 'moose' ) => "9",
				esc_html__( "October", 'moose' ) => "10",
				esc_html__( "November", 'moose' ) => "11",
				esc_html__( "December", 'moose' ) => "12"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day", 'moose' ),
			"param_name" => "day",
			"value" => array(
				"" => "",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				esc_html__( "10", 'moose' ) => "10",
				esc_html__( "11", 'moose' ) => "11",
				esc_html__( "12", 'moose' ) => "12",
				esc_html__( "13", 'moose' ) => "13",
				esc_html__( "14", 'moose' ) => "14",
				esc_html__( "15", 'moose' ) => "15",
				esc_html__( "16", 'moose' ) => "16",
				esc_html__( "17", 'moose' ) => "17",
				esc_html__( "18", 'moose' ) => "18",
				esc_html__( "19", 'moose' ) => "19",
				esc_html__( "20", 'moose' ) => "20",
				esc_html__( "21", 'moose' ) => "21",
				esc_html__( "22", 'moose' ) => "22",
				esc_html__( "23", 'moose' ) => "23",
				esc_html__( "24", 'moose' ) => "24",
				esc_html__( "25", 'moose' ) => "25",
				esc_html__( "26", 'moose' ) => "26",
				esc_html__( "27", 'moose' ) => "27",
				esc_html__( "28", 'moose' ) => "28",
				esc_html__( "29", 'moose' ) => "29",
				esc_html__( "30", 'moose' ) => "30",
				esc_html__( "31", 'moose' ) => "31",
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hour", 'moose' ),
			"param_name" => "hour",
			"value" => array(
				"" => "",
				"0" => "0",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				esc_html__( "10", 'moose' ) => "10",
				esc_html__( "11", 'moose' ) => "11",
				esc_html__( "12", 'moose' ) => "12",
				esc_html__( "13", 'moose' ) => "13",
				esc_html__( "14", 'moose' ) => "14",
				esc_html__( "15", 'moose' ) => "15",
				esc_html__( "16", 'moose' ) => "16",
				esc_html__( "17", 'moose' ) => "17",
				esc_html__( "18", 'moose' ) => "18",
				esc_html__( "19", 'moose' ) => "19",
				esc_html__( "20", 'moose' ) => "20",
				esc_html__( "21", 'moose' ) => "21",
				esc_html__( "22", 'moose' ) => "22",
				esc_html__( "23", 'moose' ) => "23",
				esc_html__( "24", 'moose' ) => "24"
			),
			"save_always" => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Minute", 'moose' ),
			"param_name" => "minute",
			"value" => array(
				"" => "",
				"0" => "0",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				esc_html__( "10", 'moose' ) => "10",
				esc_html__( "11", 'moose' ) => "11",
				esc_html__( "12", 'moose' ) => "12",
				esc_html__( "13", 'moose' ) => "13",
				esc_html__( "14", 'moose' ) => "14",
				esc_html__( "15", 'moose' ) => "15",
				esc_html__( "16", 'moose' ) => "16",
				esc_html__( "17", 'moose' ) => "17",
				esc_html__( "18", 'moose' ) => "18",
				esc_html__( "19", 'moose' ) => "19",
				esc_html__( "20", 'moose' ) => "20",
				esc_html__( "21", 'moose' ) => "21",
				esc_html__( "22", 'moose' ) => "22",
				esc_html__( "23", 'moose' ) => "23",
				esc_html__( "24", 'moose' ) => "24",
				esc_html__( "25", 'moose' ) => "25",
				esc_html__( "26", 'moose' ) => "26",
				esc_html__( "27", 'moose' ) => "27",
				esc_html__( "28", 'moose' ) => "28",
				esc_html__( "29", 'moose' ) => "29",
				esc_html__( "30", 'moose' ) => "30",
				esc_html__( "31", 'moose' ) => "31",
				esc_html__( "32", 'moose' ) => "32",
				esc_html__( "33", 'moose' ) => "33",
				esc_html__( "34", 'moose' ) => "34",
				esc_html__( "35", 'moose' ) => "35",
				esc_html__( "36", 'moose' ) => "36",
				esc_html__( "37", 'moose' ) => "37",
				esc_html__( "38", 'moose' ) => "38",
				esc_html__( "39", 'moose' ) => "39",
				esc_html__( "40", 'moose' ) => "40",
				esc_html__( "41", 'moose' ) => "41",
				esc_html__( "42", 'moose' ) => "42",
				esc_html__( "43", 'moose' ) => "43",
				esc_html__( "44", 'moose' ) => "44",
				esc_html__( "45", 'moose' ) => "45",
				esc_html__( "46", 'moose' ) => "46",
				esc_html__( "47", 'moose' ) => "47",
				esc_html__( "48", 'moose' ) => "48",
				esc_html__( "49", 'moose' ) => "49",
				esc_html__( "50", 'moose' ) => "50",
				esc_html__( "51", 'moose' ) => "51",
				esc_html__( "52", 'moose' ) => "52",
				esc_html__( "53", 'moose' ) => "53",
				esc_html__( "54", 'moose' ) => "54",
				esc_html__( "55", 'moose' ) => "55",
				esc_html__( "56", 'moose' ) => "56",
				esc_html__( "57", 'moose' ) => "57",
				esc_html__( "58", 'moose' ) => "58",
				esc_html__( "59", 'moose' ) => "59",
				esc_html__( "60", 'moose' ) => "60",
			),
			"save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Month Label", 'moose' ),
			"param_name" => "month_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day Label", 'moose' ),
			"param_name" => "day_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hour Label", 'moose' ),
			"param_name" => "hour_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Minute Label", 'moose' ),
			"param_name" => "minute_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Second Label", 'moose' ),
			"param_name" => "second_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Month Singular Label", 'moose' ),
			"param_name" => "month_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day Singular Label", 'moose' ),
			"param_name" => "day_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hour Singular Label", 'moose' ),
			"param_name" => "hour_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Minute Singular Label", 'moose' ),
			"param_name" => "minute_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Second Singular Label", 'moose' ),
			"param_name" => "second_singular_label"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Color", 'moose' ),
			"param_name" => "color",
			"description" => esc_html__( "For digits, labels and separators", 'moose' ),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Digit Font Size (px)", 'moose' ),
			"param_name" => "digit_font_size"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Label Font Size (px)", 'moose' ),
			"param_name" => "label_font_size"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Weight", 'moose' ),
			"param_name" => "font_weight",
			"description" => esc_html__( "For both digits and labels", 'moose' ),
			"value" => array(
				esc_html__( "Default", 'moose' ) => "",
				esc_html__( "Thin 100", 'moose' ) => "100",
				esc_html__( "Extra-Light 200", 'moose' ) => "200",
				esc_html__( "Light 300", 'moose' ) => "300",
				esc_html__( "Regular 400", 'moose' ) => "400",
				esc_html__( "Medium 500", 'moose' ) => "500",
				esc_html__( "Semi-Bold 600", 'moose' ) => "600",
				esc_html__( "Bold 700", 'moose' ) => "700",
				esc_html__( "Extra-Bold 800", 'moose' ) => "800",
				esc_html__( "Ultra-Bold 900", 'moose' ) => "900"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show separator", 'moose' ),
			"param_name" => "show_separator",
			"value" => array(
				esc_html__( "No", 'moose' ) => "hide_separator",
				esc_html__( "Yes", 'moose' ) => "show_separator"
			),
			"save_always" => true
		),
	)
) );


/*** Pie Chart ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart", 'moose' ),
		"base" => "no_pie_chart",
		"icon" => "icon-wpb-pie-chart extended-custom-icon",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Size(px)", 'moose' ),
                "param_name" => "size"
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Type of Central text", 'moose' ),
                "param_name" => "type_of_central_text",
                "value" => array(
                    esc_html__( "Title", 'moose' ) => "title",
                    esc_html__( "Percent", 'moose' ) => "percent"
                ),
				"save_always" => true
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage", 'moose' ),
				"param_name" => "percent"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Percentage Mark", 'moose' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "with_mark",
					esc_html__( "No", 'moose' ) => "without_mark"	
				),
				"save_always" => true,
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Color", 'moose' ),
				"param_name" => "percentage_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Percentage Font", 'moose' ),
                "param_name" => "percent_font_family",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font Size", 'moose' ),
				"param_name" => "percent_font_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font weight", 'moose' ),
				"param_name" => "percent_font_weight",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "Thin 100", 'moose' ) => "100",
					esc_html__( "Extra-Light 200", 'moose' ) => "200",
					esc_html__( "Light 300", 'moose' ) => "300",
					esc_html__( "Regular 400", 'moose' ) => "400",
					esc_html__( "Medium 500", 'moose' ) => "500",
					esc_html__( "Semi-Bold 600", 'moose' ) => "600",
					esc_html__( "Bold 700", 'moose' ) => "700",
					esc_html__( "Extra-Bold 800", 'moose' ) => "800",
					esc_html__( "Ultra-Bold 900", 'moose' ) => "900"
				),
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Active Color", 'moose' ),
				"param_name" => "active_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Inactive Color", 'moose' ),
				"param_name" => "noactive_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Pie Chart Line Width (px)", 'moose' ),
				"param_name" => "line_width"
			),
			array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Pie Chart Border", 'moose' ),
                "param_name" => "enable_border",
                "value" => array(
                    esc_html__( "No", 'moose' ) => "no",
                    esc_html__( "Yes", 'moose' ) => "yes"
                ),
				"save_always" => true
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'moose' ),
				"param_name" => "border_color",
				"dependency" => Array('element' => "enable_border", 'value' => 'yes')
			),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Chart Alignment", 'moose' ),
                "param_name" => "chart_alignment",
                "value" => array(
                    esc_html__( "Center", 'moose' ) => "",
                    esc_html__( "Left", 'moose' ) => "left",
                    esc_html__( "Right", 'moose' ) => "right"
                )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Margin below chart (px)", 'moose' ),
                "param_name" => "margin_below_chart"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'moose' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'moose' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'moose' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",	
					esc_html__( "h5", 'moose' ) => "h5",	
					esc_html__( "h6", 'moose' ) => "h6",	
				)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'moose' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'moose' ),
				"param_name" => "text_color"
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator", 'moose' ),
                "param_name" => "separator",
                "value" => array(
                    esc_html__( "Yes", 'moose' ) => "yes",
                    esc_html__( "No", 'moose' ) => "no"
                ),
				"save_always" => true
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Color", 'moose' ),
                "param_name" => "separator_color",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Border Style", 'moose' ),
                "param_name" => "separator_border_style",
                "value" => array(
                    "" => "",
                    esc_html__( "Dashed", 'moose' ) => "dashed",
                    esc_html__( "Solid", 'moose' ) => "solid"
                ),
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            )
		)
) );


/*** Pie Chart 2 (Pie) ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart 2 (Pie)", 'moose' ),
		"base" => "no_pie_chart2",
		"icon" => "icon-wpb-pie-chart2 extended-custom-icon",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'moose' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Height", 'moose' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Legend Text Color", 'moose' ),
				"param_name" => "color"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'moose' ),
				"param_name" => "content",
				"value" => "15,#F4C4BA,Legend One; 35,#EEA596,Legend Two; 50,#E5735C,Legend Three",
				"save_always" => true
			)

		)
) );


/*** Pie Chart 3 (Doughnut) ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart 3 (Doughnut)", 'moose' ),
		"base" => "no_pie_chart3",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"icon" => "icon-wpb-pie-chart3 extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'moose' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Height", 'moose' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Legend Text Color", 'moose' ),
				"param_name" => "color"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'moose' ),
				"param_name" => "content",
				"value" => "15,#F4C4BA,Legend One; 35,#EEA596,Legend Two; 50,#E5735C,Legend Three",
				"save_always" => true
			)

		)
) );


/*** Pie Chart With Icon ***/

vc_map( array(
	"name" => esc_html__( "Pie Chart With Icon", 'moose' ),
	"base" => "no_pie_chart_with_icon",
	"icon" => "icon-wpb-pie-chart-with-icon extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size(px)", 'moose' ),
				"param_name" => "size"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage", 'moose' ),
				"param_name" => "percent"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Active Color", 'moose' ),
				"param_name" => "active_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Inactive Color", 'moose' ),
				"param_name" => "noactive_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Pie Chart Line Width (px)", 'moose' ),
				"param_name" => "line_width"
			),
			array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Pie Chart Border", 'moose' ),
                "param_name" => "enable_border",
                "value" => array(
                    esc_html__( "No", 'moose' ) => "no",
                    esc_html__( "Yes", 'moose' ) => "yes"
                ),
				"save_always" => true
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'moose' ),
				"param_name" => "border_color",
				"dependency" => Array('element' => "enable_border", 'value' => 'yes')
			),
			array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Margin below chart (px)", 'moose' ),
                "param_name" => "margin_below_chart"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'moose' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'moose' ),
				"param_name" => "title_color",
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'moose' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",
					esc_html__( "h5", 'moose' ) => "h5",
					esc_html__( "h6", 'moose' ) => "h6",
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
		),
		$moose_elated_icon_collections->getVCParamsArray(),
		array(
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'moose' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon Size (px)", 'moose' ),
				"param_name" => "icon_custom_size",
				"dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Size", 'moose' ),
				"param_name" => "icon_size",
				"value" => $moose_elated_icon_collections->getIconSizesArray(),
				"save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'moose' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'moose' ),
				"param_name" => "text_color",
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator", 'moose' ),
				"param_name" => "separator",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "yes",
					esc_html__( "No", 'moose' ) => "no"
				),
				"save_always" => true
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Color", 'moose' ),
				"param_name" => "separator_color",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Border Style", 'moose' ),
				"param_name" => "separator_border_style",
				"value" => array(
					"" => "",
					esc_html__( "Dashed", 'moose' ) => "dashed",
					esc_html__( "Solid", 'moose' ) => "solid"
				),
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			)
		)
	)

) );


/** Horizontal progress bar shortcode ***/

vc_map( array(
		"name" => esc_html__( "Progress Bar - Horizontal", 'moose' ),
		"base" => "no_progress_bar",
		"icon" => "icon-wpb-progress-bar extended-custom-icon",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'moose' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'moose' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'moose' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",	
					esc_html__( "h5", 'moose' ) => "h5",	
					esc_html__( "h6", 'moose' ) => "h6",	
				)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Custom Size (px)", 'moose' ),
				"param_name" => "title_custom_size"
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Padding Bottom(px)", 'moose' ),
                "param_name" => "title_padding_bottom"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage", 'moose' ),
				"param_name" => "percent"
			),			
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Show Percentage Number", 'moose' ),
                "param_name" => "show_percent_number",
                "value" => array(
                    esc_html__( "Yes", 'moose' ) => "yes",
                    esc_html__( "No", 'moose' ) => "no"
                ),
				"save_always" => true,
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Percentage Mark", 'moose' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "with_mark",
					esc_html__( "No", 'moose' ) => "without_mark"	
				),
				"save_always" => true,
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Percentage Type", 'moose' ),
                "param_name" => "percentage_type",
                "value" => array(
                    esc_html__( "Floating", 'moose' ) => "floating",
                    esc_html__( "Static", 'moose' ) => "static"
                ),
				"save_always" => true,
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Percentage Bar Margin Bottom (px)", 'moose' ),
				"param_name" => "percentage_bar_margin_bottom",
				"dependency" => array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Percentage Bar Height (px)", 'moose' ),
				"param_name" => "percentage_bar_height",
				"dependency" => array('element' => "percentage_type", 'value' => array('floating'))
			),			
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Floating Type", 'moose' ),
				"param_name" => "floating_type",
				"value" => array(
					esc_html__( "Outside Floating", 'moose' ) => "floating_outside",
					esc_html__( "Inside Floating", 'moose' ) => "floating_inside"
				),
				"save_always" => true,
				"dependency" => array('element' => "percentage_type", 'value' => array('floating'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Color", 'moose' ),
				"param_name" => "percent_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Percentage Background Color", 'moose' ),
                "param_name" => "percent_background_color",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Percentage Border Radius (px)", 'moose' ),
                "param_name" => "percent_border_radius",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font Size", 'moose' ),
				"param_name" => "percent_font_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font weight", 'moose' ),
				"param_name" => "percent_font_weight",
				"value" => array(
					esc_html__( "Default", 'moose' ) => "",
					esc_html__( "Thin 100", 'moose' ) => "100",
					esc_html__( "Extra-Light 200", 'moose' ) => "200",
					esc_html__( "Light 300", 'moose' ) => "300",
					esc_html__( "Regular 400", 'moose' ) => "400",
					esc_html__( "Medium 500", 'moose' ) => "500",
					esc_html__( "Semi-Bold 600", 'moose' ) => "600",
					esc_html__( "Bold 700", 'moose' ) => "700",
					esc_html__( "Extra-Bold 800", 'moose' ) => "800",
					esc_html__( "Ultra-Bold 900", 'moose' ) => "900"
				),
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active Background Color", 'moose' ),
				"param_name" => "active_background_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active Border Color", 'moose' ),
				"param_name" => "active_border_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Inactive Background Color", 'moose' ),
				"param_name" => "noactive_background_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Progress Bar Height (px)", 'moose' ),
				"param_name" => "height"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Progress Bar Border Radius)", 'moose' ),
				"param_name" => "border_radius"
			)
		)
) );


/*** Vertical progress bar shortcode ***/

vc_map( array(
		"name" => esc_html__( "Progress Bar - Vertical", 'moose' ),
		"base" => "no_progress_bar_vertical",
		"icon" => "icon-wpb-vertical-progress-bar extended-custom-icon",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'moose' ),
				"param_name" => "title"
			),
            array (
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'moose' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'moose' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",	
					esc_html__( "h5", 'moose' ) => "h5",	
					esc_html__( "h6", 'moose' ) => "h6",	
				)
            ),
            array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Size", 'moose' ),
				"param_name" => "title_size"
			),
			 array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Progress Bar Height(px)", 'moose' ),
				"param_name" => "bar_content_height",
				"description" => esc_html__( "Default value is 190px", 'moose' )
			),
            array (
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Bar Color", 'moose' ),
                "param_name" => "bar_color"
            ),
            array (
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Bar Border Color", 'moose' ),
                "param_name" => "bar_border_color"
            ),
			array (
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'moose' ),
				"param_name" => "background_color"
			),
			array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Top Border Radius", 'moose' ),
				"param_name" => "border_radius"
			),
            array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percent", 'moose' ),
				"param_name" => "percent"
			),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Show Percentage Number", 'moose' ),
                "param_name" => "show_percent_number",
                "value" => array(
                    esc_html__( "Yes", 'moose' ) => "yes",
                    esc_html__( "No", 'moose' ) => "no"
                ),
				"save_always" => true,
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Percentage Mark", 'moose' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "with_mark",
					esc_html__( "No", 'moose' ) => "without_mark"	
				),
				"save_always" => true,
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Text Size", 'moose' ),
				"param_name" => "percentage_text_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Color", 'moose' ),
				"param_name" => "percent_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'moose' ),
				"param_name" => "text",
				"value" => ""
			),
            array (
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color", 'moose' ),
                "param_name" => "text_color",
                "dependency" => Array('element' => "text", 'not_empty' => true)
            )
		)
) );


/*** Progress Bar Icon ***/

vc_map( array(
	"name" => esc_html__( "Progress Bar - Icon", 'moose' ),
	"base" => "no_progress_bar_icon",
	"icon" => "icon-wpb-progress-bar-icon extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
                array(
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Number of Icons", 'moose' ),
                        "param_name" => "icons_number"
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Number of Active Icons", 'moose' ),
                        "param_name" => "active_number"
                    )
                ),
                $moose_elated_icon_collections->getVCParamsArray(),
                array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Size", 'moose' ),
                        "param_name" => "size",
                        "value" => array(
                            esc_html__( "Tiny", 'moose' ) => "tiny",
                            esc_html__( "Small", 'moose' ) => "small",
                            esc_html__( "Medium", 'moose' ) => "medium",
                            esc_html__( "Large", 'moose' ) => "large",
                            esc_html__( "Very Large", 'moose' ) => "very_large",
                            esc_html__( "Custom", 'moose' ) => "custom"
                        ),
						"save_always" => true,
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Size (px)", 'moose' ),
                        "param_name" => "custom_size",
                        "value" => "",
                        "dependency" => array('element' => 'size', 'value' => array('custom'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Type", 'moose' ),
                        "param_name" => "type",
                        "value" => array(
                            esc_html__( "Normal", 'moose' ) => "normal",
                            esc_html__( "Circle", 'moose' ) => "circle",
                            esc_html__( "Square", 'moose' ) => "square"
                        ),
						"save_always" => true,
                        "dependency" => array('element' => 'size', 'value' => array('tiny','small','medium','large','very_large'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Color", 'moose' ),
                        "param_name" => "icon_color"
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Active Color", 'moose' ),
                        "param_name" => "icon_active_color"
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Background Color", 'moose' ),
                        "param_name" => "background_color",
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle')) 
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Background Active Color", 'moose' ),
                        "param_name" => "background_active_color",
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Border Color", 'moose' ),
                        "param_name" => "border_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'moose' ),
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Border Active Color", 'moose' ),
                        "param_name" => "border_active_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'moose' ),
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    )
                )
            )
) );


/*** Line Graph shortcode ***/

vc_map( array(
		"name" => esc_html__( "Line Graph", 'moose' ),
		"base" => "no_line_graph",
		"icon" => "icon-wpb-line-graph extended-custom-icon",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'moose' ),
				"param_name" => "type",
				"value" => array(
					"" => "",
					esc_html__( "Rounded edges", 'moose' ) => "rounded",
					esc_html__( "Sharp edges", 'moose' ) => "sharp"	
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'moose' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Height", 'moose' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Color", 'moose' ),
				"param_name" => "custom_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Scale steps", 'moose' ),
				"param_name" => "scale_steps"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Scale step width", 'moose' ),
				"param_name" => "scale_step_width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Labels", 'moose' ),
				"param_name" => "labels",
				"value" => "Label 1, Label 2, Label 3",
				"save_always" => true
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'moose' ),
				"param_name" => "content",
				"value" => "#E5735C,Legend One,1,5,10;#DB4223,Legend Two,3,7,20;#B7371D,Legend Three,10,2,34"
			)
		)
) );


/*** Ordered List ***/

vc_map( array(
		"name" => esc_html__( "List - Ordered", 'moose' ),
		"base" => "no_ordered_list",
		"icon" => "icon-wpb-ordered-list extended-custom-icon",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'moose' ),
				"param_name" => "content",
				"value" => '<ol><li>' . esc_html__('Lorem Ipsum', 'moose') . '</li><li>' . esc_html__('Lorem Ipsum', 'moose') . '</li><li>' . esc_html__('Lorem Ipsum', 'moose') . '</li></ol>'

			)

		)
) );


/*** Unordered List ***/

vc_map( array(
		"name" => esc_html__( "List - Unordered", 'moose' ),
		"base" => "no_unordered_list",
		"icon" => "icon-wpb-unordered-list extended-custom-icon",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Style", 'moose' ),
				"param_name" => "style",
				"value" => array(
					esc_html__( "Circle", 'moose' ) => "circle",
					esc_html__( "Number", 'moose' ) => "number",
					esc_html__( "Line", 'moose' ) => "line"
				),
				"save_always" => true
			),
            array(
                "type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Number Type", 'moose' ),
				"param_name" => "number_type",
				"value" => array(
					esc_html__( "Circle", 'moose' ) => "circle_number",
					esc_html__( "Transparent", 'moose' ) => "transparent_number"
				),
				"save_always" => true,
                "dependency" => array('element' => "style", 'value' => array('number'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animate List", 'moose' ),
				"param_name" => "animate",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				),
				"save_always" => true
			),
            array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Font Weight", 'moose' ),
				"param_name" => "font_weight",
				"value" => array(
                    esc_html__( "Default", 'moose' ) => "",
					esc_html__( "Light", 'moose' ) => "light",
					esc_html__( "Normal", 'moose' ) => "normal",
                    esc_html__( "Bold", 'moose' ) => "bold"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Padding left (px)", 'moose' ),
				"param_name" => "padding_left",
				"value" => ""
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'moose' ),
				"param_name" => "content",
				"value" => '<ul><li>' . esc_html__('Lorem Ipsum', 'moose') . '</li><li>' . esc_html__('Lorem Ipsum', 'moose') . '</li><li>' . esc_html__('Lorem Ipsum', 'moose') . '</li></ul>'
			)
		)
) );


/*** Icon List Item ***/

vc_map( array(
	"name" => esc_html__( "Icon List Item", 'moose' ),
	"base" => "no_icon_list_item",
	"icon" => "icon-wpb-icon-list-item extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"params" => array_merge(
		$moose_elated_icon_collections->getVCParamsArray(),
		array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Icon Type", 'moose' ),
				"param_name" => "icon_type",
				"value" => array(
					esc_html__( "Normal", 'moose' ) => "normal_icon_list",
					esc_html__( "Small", 'moose' ) => "small_icon_list"
				),
				"save_always" => true
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Icon Position", 'moose' ),
				"param_name" => "icon_position",
				"value" => array(
					esc_html__( "Left", 'moose' ) => "left",
					esc_html__( "Right", 'moose' ) => "right"
				),
				"save_always" => true
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Icon Size (px)", 'moose' ),
                "param_name" => "icon_size"
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'moose' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Margin Right (px)", 'moose' ),
				"param_name" => "icon_margin_right",
				"dependency" => Array('element' => "icon_position", 'value' => 'left')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Margin Left (px)", 'moose' ),
				"param_name" => "icon_margin_left",
				"dependency" => Array('element' => "icon_position", 'value' => 'right')
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Border Type", 'moose' ),
				"param_name" => "border_type",
				"value" => array(
					"" => "",
					esc_html__( "Circle", 'moose' ) => "circle",
					esc_html__( "Square", 'moose' ) => "square"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'moose' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'moose' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'moose' ),
				"param_name" => "title_color",
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title size (px)", 'moose' ),
				"param_name" => "title_size",
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Font Family", 'moose' ),
                "param_name" => "title_font_family",
                "dependency" => Array('element' => "title", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Font Weight (px)", 'moose' ),
				"param_name" => "title_font_weight",
				"value" => $font_weight_array,
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bottom Margin (px)", 'moose' ),
				"param_name" => "bottom_margin"
			)
		)
	)
) );


/*** Icon Shortcode ***/

vc_map( array(
	"name" => esc_html__( "Icon", 'moose' ),
	"base" => "no_icons",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-icons extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		$moose_elated_icon_collections->getVCParamsArray(),
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size", 'moose' ),
				"param_name" => 'fa_size',
				"value" => $moose_elated_icon_collections->getIconSizesArray(),
				"save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Size (px)", 'moose' ),
				"param_name" => "custom_size",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'moose' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'moose' ) => "normal",
					esc_html__( "Circle", 'moose' ) => "circle",
					esc_html__( "Square", 'moose' ) => "square"
				),
				"save_always" => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Rotated Shape", 'moose' ),
				"param_name" => "rotated_shape",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				),
				"save_always" => true,
				"dependency" => Array('element' => "type", 'value' => "square")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border radius", 'moose' ),
				"param_name" => "border_radius",
				"description" => esc_html__( 'Please insert border radius(Rounded corners) in px. For example: 4', 'moose' ),
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Shape Size (px)", 'moose' ),
				"param_name" => 'shape_size',
				"value" => "",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'moose' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position", 'moose' ),
				"param_name" => "position",
				"value" => array(
					esc_html__( "Normal", 'moose' ) => "",
					esc_html__( "Left", 'moose' ) => "left",
					esc_html__( "Center", 'moose' ) => "center",
					esc_html__( "Right", 'moose' ) => "right"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'moose' ),
				"param_name" => "border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square')),
				"description" => esc_html__( "Same color for Inner Border if enabled", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Width", 'moose' ),
				"param_name" => "border_width",
				"description" => esc_html__( "Default value is 1. Enter just number. Omit pixels", 'moose' ),
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'moose' ),
				"param_name" => "background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Icon Color", 'moose' ),
				"param_name" => "hover_icon_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Border Color", 'moose' ),
				"param_name" => "hover_border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Background Color", 'moose' ),
				"param_name" => "hover_background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Shadow", 'moose' ),
				"param_name" => "icon_shadow",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				),
				"save_always" => true,
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Shadow Color", 'moose' ),
				"param_name" => "shadow_color",
				"dependency" => Array('element' => "icon_shadow", 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Shadow Color", 'moose' ),
				"param_name" => "hover_shadow_color",
				"dependency" => Array('element' => "icon_shadow", 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Inner Border", 'moose' ),
				"param_name" => "inner_border",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				),
				"save_always" => true,
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Margin", 'moose' ),
				"param_name" => "margin",
				"description" => esc_html__( "Margin (top right bottom left)", 'moose' )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Animation", 'moose' ),
				"param_name" => "icon_animation",
				"value" => array(
					esc_html__( "No", 'moose' ) => "",
					esc_html__( "Yes", 'moose' ) => "eltd_icon_animation"
				)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Animation", 'moose' ),
				"param_name" => "icon_hover_animation",
				"value" => array(
					esc_html__( "No Animation", 'moose' ) => "no_animation",
					esc_html__( "Outline Appear (Out)", 'moose' ) => "animation_border_out",
					esc_html__( "Outline Appear (In)", 'moose' ) => "animation_border_in",
					esc_html__( "Scale Down with Outline", 'moose' ) => "scale_in_outline",
					esc_html__( "Outline Enlarge", 'moose' ) => "outline_enlarge",
					esc_html__( "Pulse", 'moose' ) => "pulse",
					esc_html__( "Roll Over", 'moose' ) => "roll_over"
				),
				"save_always" => true,
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Effect", 'moose' ),
				"param_name" => "icon_hover_effect",
				"value" => array(
					esc_html__( "No Effect", 'moose' ) => "no_effect",
					esc_html__( "Roll Over", 'moose' ) => "roll_over"
				),
				"save_always" => true,
				"dependency" => Array('element' => "type", 'value' => 'normal'),
				"description" => esc_html__( "Choose the Roll Over effect on hover when Normal Icon type selected.", 'moose' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Outline Color", 'moose' ),
				"param_name" => "outline_color",
				"dependency" => Array('element' => "icon_hover_animation", 'value' => array('animation_border_out','animation_border_in','scale_in_outline', 'pulse', 'outline_enlarge'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Animation Delay (ms)", 'moose' ),
				"param_name" => "icon_animation_delay",
				"value" => "",
				"dependency" => Array('element' => "icon_animation", 'value' => 'eltd_icon_animation')
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Use For Back To Top", 'moose' ),
				"value" => array("Use this icon as Back to Top button?" => "yes"),
				"param_name" => "back_to_top_icon"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'moose' ),
				"param_name" => "link",
				"value" => ""
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Use Link as Anchor", 'moose' ),
				"value" => array("Use this icon as Anchor?" => "yes"),
				"param_name" => "anchor_icon",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'moose' ),
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Target", 'moose' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'moose' ) => "_self",
					esc_html__( "Blank", 'moose' ) => "_blank"
				),
				"save_always" => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
		))
	)
) );


/*** Social icon ***/

vc_map( array(
	"name" => esc_html__( "Social Icons", 'moose' ),
	"base" => "no_social_icons",
	"icon" => "icon-wpb-social-icons extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'moose' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'moose' ) => "normal_social",
					esc_html__( "Circle", 'moose' ) => "circle_social",
					esc_html__( "Square", 'moose' ) => "square_social"
				),
				"save_always" => true
			)
		),
		$moose_elated_icon_collections->getSocialVCParamsArray(array(), '', false, array('linea_icons', 'simple_line_icons', 'dripicons')),
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size", 'moose' ),
				"param_name" => "size",
				"value" => array(
					esc_html__( "Tiny", 'moose' ) => "tiny",
					esc_html__( "Small", 'moose' ) => "small",
					esc_html__( "Medium", 'moose' ) => "medium",
					esc_html__( "Large", 'moose' ) => "large",
					esc_html__( "Huge", 'moose' ) => "huge"
				),
				"save_always" => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'moose' ),
				"param_name" => "link",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Target", 'moose' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'moose' ) => "_self",
					esc_html__( "Blank", 'moose' ) => "_blank"
				),
				"save_always" => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'moose' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'moose' ),
				"param_name" => "background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'moose' ),
				"param_name" => "border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
			),
			array(
				"type"              => "colorpicker",
				"holder"            => "div",
				"class"             => "",
				"heading" => esc_html__( "Icon Hover Color", 'moose' ),
				"param_name"        => "icon_hover_color"
			),
			array(
				"type"              => "colorpicker",
				"holder"            => "div",
				"class"             => "",
				"heading" => esc_html__( "Background Hover Color", 'moose' ),
				"param_name"        => "background_hover_color",
				"dependency" => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
			),
			array(
				"type"              => "colorpicker",
				"holder"            => "div",
				"class"             => "",
				"heading" => esc_html__( "Border Hover Color", 'moose' ),
				"param_name"        => "border_hover_color",
				"dependency" => Array('element' => "type", 'value' => array('circle_social', 'square_social'))
			)
		)
	)
) );


/*** Icon with Text ***/

vc_map( array(
	"name" => esc_html__( "Icon With Text", 'moose' ),
	"base" => "no_icon_text",
	"icon" => "icon-wpb-icon-with-text extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
                array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box type", 'moose' ),
                        "param_name" => "box_type",
                        "value" => array(
                            esc_html__( "Normal", 'moose' ) => "normal",
                            "Icon in a box" => "icon_in_a_box"
                        ),
						"save_always" => true
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box Border", 'moose' ),
                        "param_name" => "box_border",
                        "value" => array(
                            esc_html__( "Yes", 'moose' ) => "yes",
                            esc_html__( "No", 'moose' ) => "no"
                        ),
						"save_always" => true,
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box Border Color", 'moose' ),
                        "param_name" => "box_border_color",
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box Background Color", 'moose' ),
                        "param_name" => "box_background_color",
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    )
                ),
                $moose_elated_icon_collections->getVCParamsArray(),
                array(
                    array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Icon", 'moose' ),
                        "param_name" => "custom_icon"
                    ),
					array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Hover Icon", 'moose' ),
                        "param_name" => "custom_icon_hover",
						"dependency" => Array('element' => "custom_icon", 'not_empty' => true)
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Type", 'moose' ),
                        "param_name" => "icon_type",
                        "value" => array(
                            esc_html__( "Normal", 'moose' ) => "normal",
                            esc_html__( "Circle", 'moose' ) => "circle",
                            esc_html__( "Square", 'moose' ) => "square"
                        ),
						"save_always" => true,
                        "description" => esc_html__( 'This attribute doesn\'t work when Icon Position is Top. In This case Icon Type is Normal', 'moose' ),
                    ),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "heading" => esc_html__( "Icon border width (px)", 'moose' ),
                        "param_name" => "icon_border_width",
                        "description" => esc_html__( "Enter just number, omit pixels", 'moose' ),
                        "dependency" => array('element' => 'icon_type' , 'value' => array('circle', 'square'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Size / Icon Space From Text", 'moose' ),
                        "param_name" => "icon_size",
                        "value" => $moose_elated_icon_collections->getIconSizesArray(),
						"save_always" => true,
                        "description" => esc_html__( 'This attribute doesn\'t work when Icon Position is Top', 'moose' )
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Icon Size (px)", 'moose' ),
                        "param_name" => "custom_icon_size",
                        "description" => esc_html__( "Default value is 30", 'moose' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Animation", 'moose' ),
                        "param_name" => "icon_animation",
                        "value" => array(
                            esc_html__( "No", 'moose' ) => "",
                            esc_html__( "Yes", 'moose' ) => "eltd_icon_animation"
                        )
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Animation Delay (ms)", 'moose' ),
                        "param_name" => "icon_animation_delay",
                        "value" => "",
                        "dependency" => Array('element' => "icon_animation", 'value' => array('eltd_icon_animation'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Animation on Hover", 'moose' ),
                        "param_name" => "icon_animation_hover",
                        "value" => array(
                            esc_html__( "No", 'moose' ) => "no",
                            esc_html__( "Roll Over", 'moose' ) => "roll_over",
                            esc_html__( "Zoom Icon", 'moose' ) => "zoom",
							esc_html__( "Outline Enlarge", 'moose' ) => "outline_enlarge"
                        ),
						"save_always" => true,
						"description" => esc_html__( 'Note: Roll Over animation is available only for custom icon type.', 'moose' )
                    ),
					array(
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => esc_html__( "Outline Color", 'moose' ),
						"param_name" => "outline_color",
						"dependency" => Array('element' => "icon_animation_hover", 'value' => array('outline_enlarge'))
					),
					array(
						"type" => "colorpicker",
						"holder" => "div",
						"class" => "",
						"heading" => esc_html__( "Outline Hover Color", 'moose' ),
						"param_name" => "outline_hover_color",
						"dependency" => Array('element' => "icon_animation_hover", 'value' => array('outline_enlarge'))
					),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Position", 'moose' ),
                        "param_name" => "icon_position",
                        "value" => array(
                            esc_html__( "Top", 'moose' ) => "top",
                            esc_html__( "Left", 'moose' ) => "left",
                            esc_html__( "Left From Title", 'moose' ) => "left_from_title",
                            esc_html__( "Right", 'moose' ) => "right"
                        ),
						"save_always" => true,
                        "description" => esc_html__( "Icon Position (only for normal box type)", 'moose' ),
                        "dependency" => Array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Margin", 'moose' ),
                        "param_name" => "icon_margin",
                        "value" => "",
                        "description" => esc_html__( "Margin should be set in a top right bottom left format", 'moose' )
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text Left Padding (px)", 'moose' ),
                        "param_name" => "text_left_padding",
                        "description" => esc_html__( "Default value is 86. Only when Icon Position is Left", 'moose' ),
                        "dependency" => Array('element' => "icon_position", 'value' => array('left'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text Right Padding (px)", 'moose' ),
                        "param_name" => "text_right_padding",
                        "description" => esc_html__( "Default value is 86. Only when Icon Position is Right", 'moose' ),
                        "dependency" => Array('element' => "icon_position", 'value' => array('right'))
                    ),
					array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Shape Size (px)", 'moose' ),
                        "param_name" => "shape_size"
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Border Color", 'moose' ),
                        "param_name" => "icon_border_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'moose' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Color", 'moose' ),
                        "param_name" => "icon_color",
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Hover Color", 'moose' ),
                        "param_name" => "icon_hover_color",
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Background Color", 'moose' ),
                        "param_name" => "icon_background_color",
                        "description" => esc_html__( "Icon Background Color (only for square and circle icon type)", 'moose' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Hover Background Color", 'moose' ),
                        "param_name" => "icon_hover_background_color",
                        "description" => esc_html__( "Icon Hover Background Color (only for square and circle icon type)", 'moose' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator", 'moose' ),
                        "param_name" => "separator",
                        "value" => array(
                            esc_html__( "No", 'moose' ) => "no",
                            esc_html__( "Yes", 'moose' ) => "yes",
                        ),
						"save_always" => true
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator Color", 'moose' ),
                        "param_name" => "separator_color",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator Thickness (px)", 'moose' ),
                        "param_name" => "separator_thickness",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator Size (px)", 'moose' ),
                        "param_name" => "separator_width",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Separator Alignment", 'moose' ),
                        "param_name" => "separator_alignment",
                        "value" => array(
                            esc_html__( "Center", 'moose' ) => "none",
                            esc_html__( "Left", 'moose' ) => "left",
                            esc_html__( "Right", 'moose' ) => "right",
                        ),
						"save_always" => true,
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title", 'moose' ),
                        "param_name" => "title",
                        "value" => ""
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Title Tag", 'moose' ),
                        "param_name" => "title_tag",
                        "value" => array(
                            ""   => "",
                            esc_html__( "h2", 'moose' ) => "h2",
                            esc_html__( "h3", 'moose' ) => "h3",
                            esc_html__( "h4", 'moose' ) => "h4",
                            esc_html__( "h5", 'moose' ) => "h5",
                            esc_html__( "h6", 'moose' ) => "h6",
                        ),
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
					array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Font Size (px)", 'moose' ),
                        "param_name" => "title_font_size",
                        "value" => "",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Color", 'moose' ),
                        "param_name" => "title_color",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Space Between title and text (px)", 'moose' ),
                        "param_name" => "title_margin",
                        "value" => "",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Top Padding (px)", 'moose' ),
                        "param_name" => "title_padding",
                        "value" => "",
                        "description" => esc_html__( "This attribute is used for boxed type", 'moose' ),
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text", 'moose' ),
                        "param_name" => "text",
                        "value" => ""
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text Color", 'moose' ),
                        "param_name" => "text_color",
                        "dependency" => Array('element' => "text", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link", 'moose' ),
                        "param_name" => "link",
                        "value" => "",
                        "dependency" => Array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link Text", 'moose' ),
                        "param_name" => "link_text",
                        "description" => esc_html__( "Default value is READ MORE", 'moose' ),
                        "dependency" => Array('element' => "link", 'not_empty' => true)
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Button Link Text Color", 'moose' ),
                        "param_name" => "link_color",
                        "dependency" => Array('element' => "link_text", 'not_empty' => true)
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Target", 'moose' ),
                        "param_name" => "target",
                        "value" => array(
                            ""   => "",
                            esc_html__( "Self", 'moose' ) => "_self",
                            esc_html__( "Blank", 'moose' ) => "_blank"
                        ),
                        "dependency" => Array('element' => "link", 'not_empty' => true)
                    )
                )
            )
) );

/*** Separator with Icon ***/

vc_map( array(
	"name" => esc_html__( "Separator with Icon", 'moose' ),
	"base" => "no_separator_with_icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-separator-with-icon extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Line Style", 'moose' ),
				"param_name" => "border_style",
				"value" => array(
					esc_html__( "Solid", 'moose' ) => "solid",
					esc_html__( "Dashed", 'moose' ) => "dashed",
					esc_html__( "Dotted", 'moose' ) => "dotted",
					esc_html__( "Transparent", 'moose' ) => "transparent"
				),
				"save_always" => true,
				"description" => esc_html__( "Choose a style for the separator line", 'moose' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Color", 'moose' ),
				"param_name" => "color",
				"value" => "",
				"description" => esc_html__( "Choose a color for the separator line", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Width (px)", 'moose' ),
				"param_name" => "width",
				"value" => "",
				"description" => esc_html__( "Insert width for the separator line", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Thickness (px)", 'moose' ),
				"param_name" => "thickness",
				"value" => "",
				"description" => esc_html__( "Insert thickness for the separator line", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Top Margin (px)", 'moose' ),
				"param_name" => "up",
				"value" => "",
				"description" => esc_html__( "Insert top margin for the separator", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bottom Margin (px)", 'moose' ),
				"param_name" => "down",
				"value" => "",
				"description" => esc_html__( "Insert bottom margin for the separator", 'moose' )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animation", 'moose' ),
				"param_name" => "animation",
				"value" => array(
					esc_html__( "No Animation", 'moose' ) => "",
					esc_html__( "Animate Width", 'moose' ) => "animate_width"
				),
				"description" => esc_html__( "Choose animation for separator", 'moose' )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'moose' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Default Icon", 'moose' ) => "with_icon",
					esc_html__( "Custom Icon", 'moose' ) => "with_custom_icon"
				),
				"save_always" => true,
				"description" => esc_html__( "Choose a style for the separator line", 'moose' )
			),
		),
		$moose_elated_icon_collections->getVCParamsArray(array('element' => "type", 'value' => array('with_icon'))),
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Custom Size (px)", 'moose' ),
				"param_name" => "icon_custom_size",
				"value" => "",
				"description" => esc_html__( "Insert size for the icon (default value is 20)", 'moose' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Type", 'moose' ),
				"param_name" => "icon_type",
				"value" => array(
					esc_html__( "Normal", 'moose' ) => "normal",
					esc_html__( "Circle", 'moose' ) => "circle",
					esc_html__( "Square", 'moose' ) => "square"
				),
				"save_always" => true,
				"description" => esc_html__( "Choose icon type", 'moose' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon", 'moose' ),
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Position", 'moose' ),
				"param_name" => "separator_icon_position",
				"value" => array(
					esc_html__( "Center", 'moose' ) => "center",
					esc_html__( "Left", 'moose' ) => "left",
					esc_html__( "Right", 'moose' ) => "right"
				),
				"save_always" => true,
				"description" => esc_html__( "Choose position of the icon", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Margins", 'moose' ),
				"param_name" => "icon_margin",
				"description" => esc_html__( "Insert left and right icon margins", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Border radius", 'moose' ),
				"param_name" => "icon_border_radius",
				"description" => esc_html__( 'Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default.', 'moose' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Shape Size (px)", 'moose' ),
				"param_name" => 'icon_shape_size',
				"value" => "",
				"description" => esc_html__( "Insert size for a shape around the icon", 'moose' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'moose' ),
				"param_name" => "icon_color",
				"description" => esc_html__( "Choose a color for the icon", 'moose' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'moose' ),
				"param_name" => "icon_border_color",
				"description" => esc_html__( "Choose a color for the border around the icon shape", 'moose' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Border Width", 'moose' ),
				"param_name" => "icon_border_width",
				"description" => esc_html__( "Insert border width (just number, omit pixels)", 'moose' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Background Color", 'moose' ),
				"param_name" => "icon_background_color",
				"description" => esc_html__( "Choose a background color for the icon shape", 'moose' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Icon Color", 'moose' ),
				"param_name" => "hover_icon_color",
				"description" => esc_html__( "Choose a hover color for the icon", 'moose' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Border Color", 'moose' ),
				"param_name" => "hover_icon_border_color",
				"description" => esc_html__( "Choose a hover color for the border around the icon shape", 'moose' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Background Color", 'moose' ),
				"param_name" => "hover_icon_background_color",
				"description" => esc_html__( "Choose a background hover color for the icon shape", 'moose' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'moose' ),
				"param_name" => "link"
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Use Link as Anchor", 'moose' ),
				"value" => array("Use this icon as Anchor?" => "yes"),
				"param_name" => "icon_anchor",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'moose' ),
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Target", 'moose' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'moose' ) => "_self",
					esc_html__( "Blank", 'moose' ) => "_blank"
				),
				"save_always" => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
			)
		)
	)

) );


/*** Social Share ***/

vc_map( array(
	"name" => esc_html__( "Social Share", 'moose' ),
	"base" => "no_social_share",
	"icon" => "icon-wpb-social-share extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"show_settings_on_create" => false
) );


/*** Cover Boxes ***/

$cover_boxes_icons_array = array(array());
for ($x = 1; $x<4; $x++) {
    $coverBoxesCollections = $moose_elated_icon_collections->iconCollections;
    foreach($coverBoxesCollections as $collection_key => $collection) {

        $cover_boxes_icons_array[$x][] = array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Button Icon ", 'moose' ).$x,
            "param_name" => "cover_social_".$collection->param."_".$x,
            "value" => $collection->getIconsArray(),
            "dependency" => Array('element' => "cover_boxes_icon_pack", 'value' => array($collection_key))
        );

    }
}

vc_map( array(
	"name" => esc_html__( "Cover Boxes", 'moose' ),
	"base" => "no_cover_boxes",
	"icon" => "icon-wpb-cover-boxes extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
        array(
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Active element", 'moose' ),
                "param_name" => "active_element",
                "value" => ""
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title tag", 'moose' ),
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    esc_html__( "h2", 'moose' ) => "h2",
                    esc_html__( "h3", 'moose' ) => "h3",
                    esc_html__( "h4", 'moose' ) => "h4",
                    esc_html__( "h5", 'moose' ) => "h5",
                    esc_html__( "h6", 'moose' ) => "h6",
                ),
                "description" => esc_html__( "Choose with heading tag to display for titles", 'moose' )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number of items", 'moose' ),
                "param_name" => "number_of_items",
                "value" => array(
                    "" => "",
                    "2"   => "2",
                    "3" => "3"
                ),
                "description" => esc_html__( "Choose the number of items shown", 'moose' ),
                "save_always" => true
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Icon Pack", 'moose' ),
                "param_name" => "cover_boxes_icon_pack",
                "value" => array_merge(array("No Icon" => ""),$moose_elated_icon_collections->getIconCollectionsVC())
            ),
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image 1", 'moose' ),
                "param_name" => "image1"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title 1", 'moose' ),
                "param_name" => "title1",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color 1", 'moose' ),
                "param_name" => "title_color1"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text 1", 'moose' ),
                "param_name" => "text1",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color 1", 'moose' ),
                "param_name" => "text_color1"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link 1", 'moose' ),
                "param_name" => "link1",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link label 1", 'moose' ),
                "param_name" => "link_label1",
                "value" => ""
            )
        ),
        $cover_boxes_icons_array['1'],
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Target 1", 'moose' ),
                "param_name" => "target1",
                "value" => array(
                    esc_html__( "Self", 'moose' ) => "_self",
                    esc_html__( "Blank", 'moose' ) => "_blank"
                ),
				"save_always" => true
            ),
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image 2", 'moose' ),
                "param_name" => "image2"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title 2", 'moose' ),
                "param_name" => "title2",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color 2", 'moose' ),
                "param_name" => "title_color2"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text 2", 'moose' ),
                "param_name" => "text2",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color 2", 'moose' ),
                "param_name" => "text_color2"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link 2", 'moose' ),
                "param_name" => "link2",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link label 2", 'moose' ),
                "param_name" => "link_label2",
                "value" => ""
            )
        ),
        $cover_boxes_icons_array['2'],
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Target 2", 'moose' ),
                "param_name" => "target2",
                "value" => array(
                    esc_html__( "Self", 'moose' ) => "_self",
                    esc_html__( "Blank", 'moose' ) => "_blank"
                ),
				"save_always" => true
            ),
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image 3", 'moose' ),
                "param_name" => "image3",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title 3", 'moose' ),
                "param_name" => "title3",
                "value" => "",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color 3", 'moose' ),
                "param_name" => "title_color3",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text 3", 'moose' ),
                "param_name" => "text3",
                "value" => "",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color 3", 'moose' ),
                "param_name" => "text_color3",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link 3", 'moose' ),
                "param_name" => "link3",
                "value" => "",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link label 3", 'moose' ),
                "param_name" => "link_label3",
                "value" => "",
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            )
        ),
        $cover_boxes_icons_array['3'],
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Target 3", 'moose' ),
                "param_name" => "target3",
                "value" => array(
                    esc_html__( "Self", 'moose' ) => "_self",
                    esc_html__( "Blank", 'moose' ) => "_blank"
                ),
				"save_always" => true,
                "dependency" => array('element' => 'number_of_items', 'value' => array('','3'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Show Link as Default Button", 'moose' ),
                "param_name" => "read_more_button_style",
                "value" => array(
                    esc_html__( "Default", 'moose' ) => "",
                    esc_html__( "No", 'moose' ) => "no",
                    esc_html__( "Yes", 'moose' ) => "yes"
                )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator", 'moose' ),
                "param_name" => "separator",
                "value" => array(
                    esc_html__( "Yes", 'moose' ) => "yes",
                    esc_html__( "No", 'moose' ) => "no"
                ),
				"save_always" => true
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Thicknes (px)", 'moose' ),
                "param_name" => "separator_thickness",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Color", 'moose' ),
                "param_name" => "separator_color",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Border Style", 'moose' ),
                "param_name" => "separator_border_style",
                "value" => array(
                    "" => "",
                    esc_html__( "Dashed", 'moose' ) => "dashed",
                    esc_html__( "Solid", 'moose' ) => "solid"
                ),
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Icon Size (px)", 'moose' ),
                "param_name" => "button_icon_size",
                "dependency" => Array('element' => "cover_boxes_icon_pack", 'not_empty' => true)
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Button Icon Color", 'moose' ),
                "param_name" => "button_icon_color",
                "dependency" => Array('element' => "cover_boxes_icon_pack", 'not_empty' => true)
            ),
        )
    )
) );


/*** Interactive Banners ***/

vc_map( array(
		"name" => esc_html__( "Interactive Banners", 'moose' ),
		"base" => "no_interactive_banners",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"icon" => "icon-wpb-interactive-banners extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
                    array(
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Width", 'moose' ),
                            "param_name" => "layout_width",
                            "value" => array(
                                ""   => "",
                                esc_html__( "1/2", 'moose' ) => "one_half",
                                esc_html__( "1/3", 'moose' ) => "one_third",
                                esc_html__( "1/4", 'moose' ) => "one_fourth",
                            )
                        ),
                        array(
                            "type" => "attach_image",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image", 'moose' ),
                            "param_name" => "image"
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image Color Overlay", 'moose' ),
                            "param_name" => "overlay_color",
                            "value" => "",
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image Hover Color Overlay", 'moose' ),
                            "param_name" => "overlay_color_hover",
                            "value" => "",
                        ),
						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Image Zoom on Hover", 'moose' ),
							"param_name" => "image_animate",
							"value" => array(
								esc_html__( "No", 'moose' ) => "no",
								esc_html__( "Yes", 'moose' ) => "yes"
							),
							'save_always' => true,
		
							"dependency" => Array('element' => "image", 'not_empty' => true)
						),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Image Inner Border", 'moose' ),
                            "param_name" => "show_border",
                            "value" => array(
                                esc_html__( "Always", 'moose' ) => "always",
								esc_html__( "Only On Hover", 'moose' ) => "on_hover",
								esc_html__( "Only Before Hover", 'moose' ) => "before_hover",
								esc_html__( "Never", 'moose' ) => "never"
                            ),
							'save_always' => true
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__( "Image Inner Border Color", 'moose' ),
                            "param_name" => "border_color",
                            "dependency" => Array('element' => "show_border", 'value' => array('always','on_hover','before_hover'))
                        ),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Inner Border Width", 'moose' ),
							"param_name" => "border_width",
							"value" => "",
							"dependency" => Array('element' => "show_border", 'value' => array('always','on_hover','before_hover'))
						),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Inner Border Offset (px)", 'moose' ),
                            "param_name" => "inner_border_offset",
                            "value" => "",
                            "description" => esc_html__( "Default value is 5", 'moose' ),
                            "dependency" => Array('element' => "show_border", 'value' => array('always','on_hover','before_hover'))
                        ),
						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Show Icon", 'moose' ),
							"param_name" => "show_icon",
							"value" => array(
								esc_html__( "Always", 'moose' ) => "always",
								esc_html__( "Only On Hover", 'moose' ) => "on_hover",
								esc_html__( "Never", 'moose' ) => "never"
							),
							'save_always' => true,
		
						),
                    ),
                    $moose_elated_icon_collections->getVCParamsArray((array('element' => "show_icon", 'value' => array('always', 'on_hover'))), '', true),
                    array(
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Type", 'moose' ),
                            "param_name" => "icon_type",
                            "value" => array(
                                esc_html__( "Normal", 'moose' ) => "normal",
                                esc_html__( "Circle", 'moose' ) => "circle",
                                esc_html__( "Square", 'moose' ) => "square"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Size (px)", 'moose' ),
                            "param_name" => "icon_custom_size",
                            "value" => "",
                            "description" => esc_html__( "Default value is 20", 'moose' ),
                            "dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Color", 'moose' ),
                            "param_name" => "icon_color",
                            "dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Title", 'moose' ),
                            "param_name" => "show_title",
                            "value" => array(
                                esc_html__( "Always", 'moose' ) => "always",
                                esc_html__( "Only On Hover", 'moose' ) => "on_hover",
                                esc_html__( "Only Before Hover", 'moose' ) => "before_hover",
                                esc_html__( "Never", 'moose' ) => "never"
                            ),
							'save_always' => true,
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Text", 'moose' ),
                            "param_name" => "title",
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Color", 'moose' ),
                            "param_name" => "title_color",
                            "dependency" => Array('element' => "title", 'not_empty' => true),
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Size (px)", 'moose' ),
                            "param_name" => "title_size",
                            "description" => esc_html__( "Default value is 17", 'moose' ),
                            "dependency" => Array('element' => "title", 'not_empty' => true),
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Title Tag", 'moose' ),
                            "param_name" => "title_tag",
                            "value" => array(
                                ""   => "",
                                esc_html__( "h2", 'moose' ) => "h2",
                                esc_html__( "h3", 'moose' ) => "h3",
                                esc_html__( "h4", 'moose' ) => "h4",	
                                esc_html__( "h5", 'moose' ) => "h5",	
                                esc_html__( "h6", 'moose' ) => "h6",	
                            ),
                            "dependency" => Array('element' => "title", 'not_empty' => true)
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Button", 'moose' ),
                            "param_name" => "show_button",
                            "value" => array(
                                esc_html__( "Always", 'moose' ) => "always",
                                esc_html__( "Only On Hover", 'moose' ) => "on_hover",
                                esc_html__( "Never", 'moose' ) => "never"
                            ),
							'save_always' => true,
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Height", 'moose' ),
                            "param_name" => "button_size",
                            "description" => esc_html__( 'It uses "small" button options (px)', 'moose' ),
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Left and Right Padding", 'moose' ),
                            "param_name" => "button_padding",
                            "description" => esc_html__( 'It uses "small" button options (px)', 'moose' ),
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Text", 'moose' ),
                            "param_name" => "link_text",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link Button to following URL", 'moose' ),
                            "param_name" => "button_link",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Link Target", 'moose' ),
                            "param_name" => "target",
                            "value" => array(
                                esc_html__( "Self", 'moose' ) => "_self",
                                esc_html__( "Blank", 'moose' ) => "_blank"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Text Color", 'moose' ),
                            "param_name" => "link_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Border Color", 'moose' ),
                            "param_name" => "link_border_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Background Color", 'moose' ),
                            "param_name" => "link_background_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Add Link Over Banner Content", 'moose' ),
                            "param_name" => "link_over_content",
                            "value" => array(
                                esc_html__( "No", 'moose' ) => "no",
                                esc_html__( "Yes", 'moose' ) => "yes"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "show_button", 'value' => "never")
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link Banner Content to following URL", 'moose' ),
                            "param_name" => "content_link",
                            "dependency" => Array('element' => "link_over_content", 'value' => 'yes')
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Separator under Title", 'moose' ),
                            "param_name" => "separator",
                            "value" => array(
                                esc_html__( "Never", 'moose' ) => "no",
                                esc_html__( "Always", 'moose' ) => "yes",
                                esc_html__( "Only On Hover", 'moose' ) => "on_hover"
                            ),
							'save_always' => true
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Separator Thickness (px)", 'moose' ),
                            "param_name" => "separator_thickness",
                            "dependency" => Array('element' => "separator", 'value' => array("yes","on_hover"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Separator Color", 'moose' ),
                            "param_name" => "separator_color",
                            "dependency" => Array('element' => "separator", 'value' => array("yes","on_hover"))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Content", 'moose' ),
                            "param_name" => "show_content",
                            "value" => array(
                                esc_html__( "Always", 'moose' ) => "always",
                                esc_html__( "Only On Hover", 'moose' ) => "on_hover",
                                esc_html__( "Only Before Hover", 'moose' ) => "before_hover",
                                esc_html__( "Never", 'moose' ) => "never"
                            ),
							'save_always' => true,
                        ),
                        array(
                            "type" => "textarea_html",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Content", 'moose' ),
                            "param_name" => "content",
                            "value" => "<p>"."I am test text for 'Interactive Banner' shortcode."."</p>"
                        )
                    )
                )
    )
);

/*** Image with Text and Icon ***/

vc_map( array(
    "name" => esc_html__( "Image with text and Icon", 'moose' ),
    "base" => "no_image_with_text_and_icon",
    "icon" => "icon-wpb-image-with-text-and-icon extended-custom-icon",
    "category" => esc_html__( 'by Elated', 'moose' ),
    "allowed_container_element" => 'vc_row',
    "params" => array_merge(
                array(
                    array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Image", 'moose' ),
                        "param_name" => "image"
                    )
                ),
                $moose_elated_icon_collections->getVCParamsArray(array(), '', true),
                array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Type", 'moose' ),
                        "param_name" => "icon_type",
                        "value" => array(
                            esc_html__( "Circle", 'moose' ) => "circle",
                            esc_html__( "Square", 'moose' ) => "square"
                        ),
						"save_always" => true,
                        "dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Size (px)", 'moose' ),
                        "param_name" => "icon_custom_size",
                        "value" => "",
                        "description" => esc_html__( "Default value is 25", 'moose' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Shape Size (px)", 'moose' ),
                        "param_name" => "icon_shape_size",
                        "value" => "",
                        "description" => esc_html__( "Default value is 100", 'moose' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Color", 'moose' ),
                        "param_name" => "icon_color",
                        "dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Background Color", 'moose' ),
                        "param_name" => "icon_background_color",
                        "dependency" => Array('element' => "icon_pack", 'value' => $moose_elated_icon_collections->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link", 'moose' ),
                        "param_name" => "link"
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link Target", 'moose' ),
                        "param_name" => "target",
                        "value" => array(
                            "" => "",
                            esc_html__( "Self", 'moose' ) => "_self",
                            esc_html__( "Blank", 'moose' ) => "_blank"
                        )
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title", 'moose' ),
                        "param_name" => "title"
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Title Tag", 'moose' ),
                        "param_name" => "title_tag",
                        "value" => array(
                            ""   => "",
                            esc_html__( "h2", 'moose' ) => "h2",
                            esc_html__( "h3", 'moose' ) => "h3",
                            esc_html__( "h4", 'moose' ) => "h4",
                            esc_html__( "h5", 'moose' ) => "h5",
                            esc_html__( "h6", 'moose' ) => "h6",
                        ),
                        "description" => esc_html__( "Default value is h4", 'moose' ),
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Color", 'moose' ),
                        "param_name" => "title_color",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textarea_html",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Content", 'moose' ),
                        "param_name" => "content",
                        "value" => "<p>" . esc_html__("I am test text for Image With Text and Icon shortcode.", 'moose') ."</p>",
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Top Margin", 'moose' ),
                        "param_name" => "position_top",
                        "description" => esc_html__( "Select top position of title from image. Default value is 75", 'moose' )
                    )
                )
            )

) );


/*** Image with text ***/

vc_map( array(
	"name" => esc_html__( "Image With Text", 'moose' ),
	"base" => "no_image_with_text",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-image-with-text extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'moose' ),
			"param_name" => "image"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Alignment", 'moose' ),
			"param_name" => "alignment",
			"value" => array(
				esc_html__( "Center", 'moose' ) => "center",
				esc_html__( "Left", 'moose' ) => "left",
				esc_html__( "Right", 'moose' ) => "right"
			),
			"save_always" => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'moose' ),
			"param_name" => "title"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'moose' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'moose' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'moose' ) => "h2",
				esc_html__( "h3", 'moose' ) => "h3",
				esc_html__( "h4", 'moose' ) => "h4",
				esc_html__( "h5", 'moose' ) => "h5",
				esc_html__( "h6", 'moose' ) => "h6",
			)
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content", 'moose' ),
			"param_name" => "content",
			"value" => "<p>".esc_html__("I am test text for Interactive Banners shortcode.", 'moose' )."</p>"
		)
	)
) );

/*** Numbered image ***/

vc_map( array(
	"name" => esc_html__( "Numbered Image", 'moose' ),
	"base" => "no_numbered_image",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-numbered-image extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'moose' ),
			"param_name" => "image"
		),		
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number", 'moose' ),
			"param_name" => "number"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number Color", 'moose' ),
			"param_name" => "number_color"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Stripe Color", 'moose' ),
			"param_name" => "stripe_color"
		),	
	)
) );


/*** Image hover ***/

vc_map( array(
		"name" => esc_html__( "Image Hover", 'moose' ),
		"base" => "no_image_hover",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"icon" => "icon-wpb-image-hover extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'moose' ),
				"param_name" => "image"
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Image", 'moose' ),
				"param_name" => "hover_image"
			),
            array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'moose' ),
				"param_name" => "link"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Target", 'moose' ),
				"param_name" => "target",
                "value" => array(
                    esc_html__( "Self", 'moose' ) => "_self",
                    esc_html__( "Blank", 'moose' ) => "_blank"
                ),
				"save_always" => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animation", 'moose' ),
				"param_name" => "animation",
                "value" => array(
                    "" => "",
                    esc_html__( "Yes", 'moose' ) => "yes",
                    esc_html__( "No", 'moose' ) => "no"
                )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animation Hover Effect", 'moose' ),
				"param_name" => "hover_effect",
				"description" => esc_html__( "Choose what happens on image hover", 'moose' ),
                "value" => array(
                        esc_html__( "Roll Over - images switch", 'moose' ) => "roll_over",
                        esc_html__( "Opacity change", 'moose' ) => "opacity",
                ),
				"save_always" => true,
                "dependency" => array('element' => "animation", 'value' => array("yes"))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animation speed (In seconds)", 'moose' ),
				"param_name" => "animation_speed",
				"dependency" => array('element' => "animation", 'value' => array("yes"))
			),
            array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Transition delay", 'moose' ),
				"param_name" => "transition_delay",
                "dependency" => array('element' => "animation", 'value' => array("yes"))
			)
		)
) );

/*** Image Carousel ***/

vc_map( array(
		"name" => esc_html__( "Image Carousel", 'moose' ),
		"base" => "no_image_carousel",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"icon" => "icon-wpb-image-carousel extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(

			array(
				"type" => "attach_images",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'moose' ),
				"param_name" => "images"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "On click", 'moose' ),
				"param_name" => "on_click",
				"value" => array(
					esc_html__( "Do nothing", 'moose' ) => "",
					esc_html__( "Open image in prettyPhoto", 'moose' ) => "prettyPhoto"
				),
				"description" => esc_html__( "Choose On Click action.", 'moose' )
			),
			array(
			    "type" => "textfield",
			    "holder" => "div",
			    "class" => "",
			    "heading" => esc_html__( "Title", 'moose' ),
			    "param_name" => "image_carousel_title",
			    "description" => esc_html__( "Enter image carousel title - displayed on the left-hand side.", 'moose' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'moose' ),
				"param_name" => "title_color",
				"description" => esc_html__( "Set the color property for the title. The default value is #fff.", 'moose' ),
			),
			array(
			    "type" => "textfield",
			    "holder" => "div",
			    "class" => "",
			    "heading" => esc_html__( "Content", 'moose' ),
			    "param_name" => "image_carousel_content",
			    "description" => esc_html__( "Enter image carousel content - displayed on the left-hand side.", 'moose' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content Color", 'moose' ),
				"param_name" => "content_color",
				"description" => esc_html__( "Set the color property for the content. The default value is #fff.", 'moose' ),
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'moose' ),
				"param_name" => "image_carousel_separator",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "yes",
					esc_html__( "No", 'moose' ) => "no"
				),
				"save_always" => true,
				"description" => esc_html__( "Show separator between heading and content?", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Width (px)", 'moose' ),
				"param_name" => "separator_width",
				"dependency" => array('element' => 'image_carousel_separator', 'value' => "yes"),
				"description" => esc_html__( "The default value is 43.", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Thickness (px)", 'moose' ),
				"param_name" => "separator_thickness",
				"save_always" => true,
				"dependency" => array('element' => 'image_carousel_separator', 'value' => "yes"),
				"description" => esc_html__( "The default value is 2.", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Top (px)", 'moose' ),
				"param_name" => "separator_margin_top",
				"dependency" => array('element' => 'image_carousel_separator', 'value' => "yes"),
				"description" => esc_html__( "The default value is 18.", 'moose' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Bottom (px)", 'moose' ),
				"param_name" => "separator_margin_bottom",
				"dependency" => array('element' =>  'image_carousel_separator', 'value' => "yes"),
				"description" => esc_html__( "The default value is 12.", 'moose' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator color", 'moose' ),
				"param_name" => "separator_color",
				"save_always" => true,
				"dependency" => array('element' => 'image_carousel_separator', 'value' => "yes"),
				"description" => esc_html__( "Set the background color property for the separator. The default value is #e5735c.", 'moose' ),
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'moose' ),
				"param_name" => "background_color",
				"description" => esc_html__( "Set the background color property for the entire caorusel element. The default value is #303030.", 'moose' ),
			)

		)
) );

class WPBakeryShortCode_No_Info_Card_Slider extends WPBakeryShortCodesContainer {}
vc_map( array(
	'name' => esc_html__( 'Info Card Slider', 'moose' ),
	'base' => 'no_info_card_slider',
	'as_parent' => array('only' => 'no_info_card_slider_item'),
	'content_element' => true,
	'category' => esc_html__( 'by Elated', 'moose' ),
	'icon' => 'icon-wpb-info-slider extended-custom-icon',
	'show_settings_on_create' => false,
	'js_view' => 'VcColumnView',
	'params' => array(

	)
));

class WPBakeryShortCode_No_Info_Card_Slider_Item extends WPBakeryShortCode {}
vc_map( array(
	'name' => esc_html__( 'Info Card Item', 'moose' ),
	'base' => 'no_info_card_slider_item',
	'as_child' => array('only' => 'no_info_card_slider'),
	'icon' => 'icon-wpb-info-card-item extended-custom-icon',
	'show_settings_on_create' => true,
	'params' => array_merge(
		array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Title', 'moose' ),
				'param_name' => 'title'
			),
		),
		$moose_elated_icon_collections->getVCParamsArray(),
		array(
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'heading' => esc_html__( 'Front Side Content', 'moose' ),
				'description' => esc_html__( 'Insert text for card front side', 'moose' ),
				'param_name' => 'front_side_content'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'heading' => esc_html__( 'Back Side Content', 'moose' ),
				'description' => esc_html__( 'Insert text for card back side', 'moose' ),
				'param_name' => 'back_side_content'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Link', 'moose' ),
				esc_html__( 'descripition', 'moose' ) => 'Insert card link',
				'param_name' => 'link'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'heading' => esc_html__( 'Link Text', 'moose' ),
				'param_name' => 'link_text',
				'dependency' => array('element' => 'link', 'not_empty' => true)
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'heading' => esc_html__( 'Link Target', 'moose' ),
				'param_name' => 'link_target',
				'value' => array(
					esc_html__( 'Self', 'moose' ) => '_self',
					esc_html__( 'Blank', 'moose' ) => '_blank'
				),
				'save_always' => true,
				'dependency' => array('element' => 'link', 'not_empty' => true)
			)
		)
	)
));

/*** Contact Form 7 ***/

if(moose_elated_contact_form_7_installed()){
	vc_add_param("contact-form-7", array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Style", 'moose' ),
		"param_name" => "html_class",
		"value" => array(
			esc_html__( "Default", 'moose' ) => "default",
			esc_html__( "Custom Style 1", 'moose' ) => "cf7_custom_style_1",
			esc_html__( "Custom Style 2", 'moose' ) => "cf7_custom_style_2",
			esc_html__( "Custom Style 3", 'moose' ) => "cf7_custom_style_3"
		),
		"save_always" => true,
		"description" => esc_html__( "You can style each form element individually in Elated Options > Contact Form 7", 'moose' )
	));
}

/*** Tabs ***/

$tabs_icon_array = array();
foreach ($moose_elated_icon_collections->iconCollections as $collection_key => $collection ) {
	$tabs_icon_array[] = array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Icon", 'moose' ),
		"param_name" => $collection->param,
		"value" => $collection->getIconsArray(),
		"dependency" => Array('element' => $moose_elated_icon_collections->iconPackParamName, 'value' => array($collection_key))
	);
}

class WPBakeryShortCode_No_Tabs  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elated Tabs', 'moose' ),
	"base" => "no_tabs",
	"as_parent" => array('only' => 'no_tab'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-tabs extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'moose' ),
				"param_name" => "background_color",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Style", 'moose' ),
				"param_name" => "style",
				"value" => array(
					esc_html__( "Horizontal Center", 'moose' ) => "horizontal",
					esc_html__( "Horizontal Center With Icons", 'moose' ) => "horizontal_with_icons",
					esc_html__( "Horizontal Center With Text And Icons", 'moose' ) => "horizontal_with_text_and_icons",
					esc_html__( "Horizontal Left", 'moose' ) => "horizontal_left",
					esc_html__( "Horizontal Left With Icons", 'moose' ) => "horizontal_left_with_icons",
					esc_html__( "Horizontal Left With Text And Icons", 'moose' ) => "horizontal_left_with_text_and_icons",
					esc_html__( "Horizontal Right", 'moose' ) => "horizontal_right",
					esc_html__( "Horizontal Right With Icons", 'moose' ) => "horizontal_right_with_icons",
					esc_html__( "Horizontal Right With Text And Icons", 'moose' ) => "horizontal_right_with_text_and_icons",
					esc_html__( "Vertical Left", 'moose' ) => "vertical_left",
					esc_html__( "Vertical Left With Icons", 'moose' ) => "vertical_left_with_icons",
					esc_html__( "Vertical Left With Text and Icons", 'moose' ) => "vertical_left_with_text_and_icons",
					esc_html__( "Vertical Right", 'moose' ) => "vertical_right",
					esc_html__( "Vertical Right With Icons", 'moose' ) => "vertical_right_with_icons",
					esc_html__( "Vertical Right With Text and Icons", 'moose' ) => "vertical_right_with_text_and_icons",
				),
				"save_always" => true
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Set Transparent Tabs", 'moose' ),
				"param_name" => "transparent_tabs",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				)
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Space Between Tab and Content (px)", 'moose' ),
				"param_name" => "space_between_tab_and_content",
				"value" => "",
				"description" => esc_html__( "Insert value for space between Tab and Content (default value is 18px)", 'moose' ),
				"dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons','horizontal','horizontal_left','horizontal_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Border Radius (px)", 'moose' ),
				"param_name" => "tab_border_radius",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Icon Position", 'moose' ),
				"param_name" => "tab_icon_position",
				"value" => array(
					esc_html__( "Left", 'moose' ) => "left",
					esc_html__( "Right", 'moose' ) => "right"
				),
				"save_always" => true,
				"dependency" => Array('element' => "style", 'value' => array('horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
			)
		),
	"js_view" => 'VcColumnView'

) );


/*** Tab ***/

class WPBakeryShortCode_No_Tab  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elated Tab', 'moose' ),
	"base" => "no_tab",
	"as_parent" => array('except' => 'vc_row'),
	"as_child" => array('only' => 'no_tabs'),
	'is_container' => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-tab extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array_merge(
		$moose_elated_icon_collections->getVCParamsArray(),
		array(
		array(
			"type" => "textfield",
			"class" => "",
			"admin_label" => true,
			"heading" => esc_html__( "Tab Title", 'moose' ),
			"param_name" => "title",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__( "Tab ID", 'moose' ),
			"param_name" => "tab_id",
			"value" => rand(15, 20),
			"description" => esc_html__( "This ID is randomly generated. It can be changed, but each ID has to be unique. Therefore, if you duplicate a tab, please make sure to change the tab ID manually.", 'moose' )
		))

	)
) );

/*** Accordion ***/


class WPBakeryShortCode_No_Accordion  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elated Accordion', 'moose' ),
	"base" => "no_accordion",
	"as_parent" => array('only' => 'no_accordion_section'),
	"content_element" => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-accordion extended-custom-icon",
	"show_settings_on_create" => true,
	"params" =>
		array(
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Active section', 'moose' ),
				'param_name' => 'active_tab',
				'value' => 1,
				'description' => esc_html__( 'Enter section number to be active on load or enter "false" to collapse all sections.', 'moose' )
			),
			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Allow collapse all sections?', 'moose' ),
				'param_name' => 'collapsible',
				'description' => esc_html__( 'If checked, it is allowed to collapse all sections.', 'moose' ),
				'value' => array( esc_html__( 'Yes', 'moose' ) => 'yes' )
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Extra class name', 'moose' ),
				'param_name' => 'el_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'moose' )
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Transparent Background", 'moose' ),
				"param_name" => "background_transparency",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				),
				"save_always" => true
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Style", 'moose' ),
				"param_name" => "style",
				"value" => array(
					esc_html__( "Accordion", 'moose' ) => "accordion",
					esc_html__( "Toggle", 'moose' ) => "toggle",
					esc_html__( "Boxed Accordion", 'moose' ) => "boxed_accordion",
					esc_html__( "Boxed Toggle", 'moose' ) => "boxed_toggle"
				),
				"save_always" => true
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Accordion Title Border Radius", 'moose' ),
				"param_name" => "accordion_section_border_radius",
				"value" => "",
				"dependency" => Array('element' => "style", 'value' => array('boxed_accordion', 'boxed_toggle'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Accordion Mark Border Radius", 'moose' ),
				"param_name" => "accordion_border_radius",
				"value" => "",
				"dependency" => Array('element' => "style", 'value' => array('accordion', 'toggle'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Accordion Title Height", 'moose' ),
				"param_name" => "accordion_section_height",
				"value" => ""
			)
	),
	"js_view" => 'VcColumnView'

) );


/*** Accordion Section ***/

$accordion_icon_array = array();
foreach ($moose_elated_icon_collections->iconCollections as $collection_key => $collection ) {
	$accordion_icon_array[] = array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Icon", 'moose' ),
		"param_name" => $collection->param,
		"value" => $collection->getIconsArray(),
		"dependency" => Array('element' => $moose_elated_icon_collections->iconPackParamName, 'value' => array($collection_key))
	);
}

class WPBakeryShortCode_No_Accordion_Section  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elated Accordion Section', 'moose' ),
	"base" => "no_accordion_section",
	"as_parent" => array('except' => 'vc_row'),
	"as_child" => array('only' => 'no_accordion'),
	'is_container' => true,
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-accordion-section extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array_merge(
		array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'moose' ) ,
			'param_name' => 'title',
			'admin_label' => true,
			'value' => esc_html__( 'Section', 'moose' ),
			'description' => esc_html__( 'Enter accordion section title.', 'moose' )
		),
		array(
			'type' => 'el_id',
			'heading' => esc_html__( 'Section ID', 'moose' ),
			'param_name' => 'el_id',
			'description' => sprintf( esc_html__( 'Enter optional row ID. Make sure it is unique, and it is valid as w3c specification: %s (Must not have spaces)', 'moose' ), '<a target="_blank" href="http://www.w3schools.com/tags/att_global_id.asp">' . esc_html__( 'link', 'moose' ) . '</a>' ),
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Type", 'moose' ),
			"param_name" => "accordion_type",
			"value" => array(
				esc_html__( "Standard Accordion", 'moose' ) => "standard_accordion",
				esc_html__( "With Icon", 'moose' ) => "accordion_icon"
			)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Icon Pack", 'moose' ),
			"param_name" => $moose_elated_icon_collections->iconPackParamName,
			"value" => $moose_elated_icon_collections->getIconCollectionsVC(),
			"save_always" => true,
			"dependency" => Array('element' => "accordion_type", 'value' => array('accordion_icon'))
		)),
		$accordion_icon_array,
		array(
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Icon size(px)", 'moose' ),
			"param_name" => "icon_custom_size",
			"value" => "",
			"dependency" => Array('element' => "accordion_type", 'value' => array('accordion_icon'))
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Icon Color", 'moose' ),
			"param_name" => "icon_color",
			"value" => "",
			"dependency" => Array('element' => "accordion_type", 'value' => array('accordion_icon'))
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Icon Hover Color", 'moose' ),
			"param_name" => "hover_icon_color",
			"value" => "",
			"dependency" => Array('element' => "accordion_type", 'value' => array('accordion_icon'))
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'moose' ),
			"param_name" => "title_color",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Title Hover Color", 'moose' ),
			"param_name" => "title_hover_color",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Mark Icon Color", 'moose' ),
			"param_name" => "mark_icon_color",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Mark Icon Hover Color", 'moose' ),
			"param_name" => "mark_icon_color_hover",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Title Background Color", 'moose' ),
			"param_name" => "background_color",
			"value" => "",
			"description" => esc_html__( "This option is only used for boxed accordions with background transparency set to No", 'moose' )
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Title Background Hover Color", 'moose' ),
			"param_name" => "background_hover_color",
			"value" => "",
			"description" => esc_html__( "This option is only used for boxed accordions with background transparency set to No", 'moose' )
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Title Border Color", 'moose' ),
			"param_name" => "border_color",
			"value" => "",
			"description" => esc_html__( "This option is only used for boxed accordions", 'moose' )
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__( "Title Border Hover Color", 'moose' ),
			"param_name" => "border_hover_color",
			"value" => "",
			"description" => esc_html__( "This option is only used for boxed accordions", 'moose' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'moose' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				"p"  => "p",
				esc_html__( "h2", 'moose' ) => "h2",
				esc_html__( "h3", 'moose' ) => "h3",
				esc_html__( "h4", 'moose' ) => "h4",
				esc_html__( "h5", 'moose' ) => "h5",
				esc_html__( "h6", 'moose' ) => "h6",
			)
		)
		)

	)
) );


/*** Magnified Image ***/

vc_map( array(
	"name" => esc_html__( 'Magnified Image', 'moose' ),
	"base" => "no_magnified_image",
	"category" => esc_html__( 'by Elated', 'moose' ),
	"icon" => "icon-wpb-magnified-image extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
			array(
				"type" => "attach_image",
				'heading' => esc_html__( 'Image', 'moose' ),
				'param_name' => 'image',
				'value' => '',
				'description' => esc_html__( 'Select image from media library.', 'moose' ),
			),
			array(
				"type" => "attach_image",
				'heading' => esc_html__( 'Image in magnifier', 'moose' ),
				'param_name' => 'image_in_magnifier',
				'value' => '',
				'description' => esc_html__( 'Select image from media library.', 'moose' ),
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Subtitle", 'moose' ),
				"param_name" => "subtitle",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"class" => "",
				"admin_label" => true,
				"heading" => esc_html__( "Title", 'moose' ),
				"param_name" => "title",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'moose' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					"p"  => "p",
					esc_html__( "h2", 'moose' ) => "h2",
					esc_html__( "h3", 'moose' ) => "h3",
					esc_html__( "h4", 'moose' ) => "h4",
					esc_html__( "h5", 'moose' ) => "h5",
					esc_html__( "h6", 'moose' ) => "h6",
				)
			),
			array(
				"type" => "textarea",
				"class" => "",
				"heading" => esc_html__( "Text", 'moose' ),
				"param_name" => "text",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Link", 'moose' ),
				"param_name" => "link",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Link Text", 'moose' ),
				"param_name" => "link_text",
				"value" => "",
				"dependency" => array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Link Target", 'moose' ),
				"param_name" => "link_target",
				"value" => array(
					"" => "",
					esc_html__( "Self", 'moose' ) => "_self",
					esc_html__( "Blank", 'moose' ) => "_blank"
				),
				"dependency" => array('element' => "link", 'not_empty' => true)
			)

		)

) );

vc_map( array(
		"name" => esc_html__( "Image Stack", 'moose' ),
		"base" => "no_image_stack",
		"category" => esc_html__( 'by Elated', 'moose' ),
		"icon" => "icon-wpb-image-stack extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
			    "type" => "textfield",
			    "holder" => "div",
			    "class" => "",
			    "value" => "895",
			    "heading" => esc_html__( "Set the height parameter (px) for the Image Stack.", 'moose' ),
			    "param_name" => "height",
			    "description" => esc_html__( "The default value is 895. This is the initial height value. Under 1200px responsiveness takes effect.", 'moose' )
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the hero image for the image stack.", 'moose' ),
				"param_name" => "image_1",
				"description" => esc_html__( "This image is positioned in the center.", 'moose' ),
				"dependency" => array('element' => "height", 'not_empty' => true)
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the left inner image.", 'moose' ),
				"param_name" => "image_2",
				"dependency" => array('element' => "image_1", 'not_empty' => true)
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the right inner image.", 'moose' ),
				"param_name" => "image_3",
				"dependency" => array('element' => "image_1", 'not_empty' => true)
			),
				array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the left outer image.", 'moose' ),
				"param_name" => "image_4",
				"dependency" => array('element' => "image_3", 'not_empty' => true)
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Set the right outer image.", 'moose' ),
				"param_name" => "image_5",
				"dependency" => array('element' => "image_3", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Pop Up Image?", 'moose' ),
				"param_name" => "show_pop_up",
				"value" => array(
					esc_html__( "Yes", 'moose' ) => "yes",
					esc_html__( "No", 'moose' ) => "no"
				),
				"save_always" => true,
				"description" => esc_html__( "Choose whether to display a Pop Up Image on the image stack.", 'moose' )
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Attach the Pop Up Image.", 'moose' ),
				"param_name" => "pop_up_image",
				"dependency" => array('element' => 'show_pop_up', 'value' => "yes")
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link your Pop Up Image?", 'moose' ),
				"param_name" => "set_pop_up_link",
				"value" => array(
					esc_html__( "No", 'moose' ) => "no",
					esc_html__( "Yes", 'moose' ) => "yes"
				),
				"save_always" => true,
				"description" => esc_html__( "Choose whether to have your Pop Up Image link to an external URL.", 'moose' ),
				"dependency" => array('element' => 'show_pop_up', 'value' => "yes")
			),
			array(
			    "type" => "textfield",
			    "holder" => "div",
			    "class" => "",
			    "heading" => esc_html__( "Pop Up Image link", 'moose' ),
			    "param_name" => "pop_up_image_link",
			    "description" => esc_html__( "Set the external URL to link to.", 'moose' ),
			    "dependency" => array('element' => 'set_pop_up_link', 'value' => "yes")
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"value" => "#fff",
				"heading" => esc_html__( "Shader Color", 'moose' ),
				"param_name" => "pop_up_image_shader_color",
				"description" => esc_html__( "Set the shader color for the pop up image. The default value is #fff.", 'moose' ),
				"dependency" => array('element' => 'show_pop_up', 'value' => "yes")
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"value" => "rgba(0,0,0,0.7)",
				"heading" => esc_html__( "Responsive overlay color", 'moose' ),
				"param_name" => "responsive_overlay_color",
				"description" => esc_html__( "Set the shader color for the hero image overlay, under 600px.", 'moose' ),
				"dependency" => array('element' => 'show_pop_up', 'value' => "yes")
			)
		)
) );