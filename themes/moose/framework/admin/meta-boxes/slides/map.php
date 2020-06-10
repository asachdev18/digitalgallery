<?php

$moose_elated_icon_collections = moose_elated_return_icon_collections();

$eltd_blog_categories = array();
$categories           = get_categories();
foreach ( $categories as $category ) {
	$eltd_blog_categories[ $category->term_id ] = $category->name;
}

//Slide Type

$eltdSlideType = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide Background Type", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_type",
	$eltdSlideType
);

$eltd_slide_background_type = new MooseElatedMetaField(
	"imagevideo",
	"eltd_slide-background-type",
	"image",
	esc_html__( "Slide Background Type", 'moose' ),
	esc_html__( "Do you want to upload an image or video?", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf-meta-box-slides_video_settings",
		"dependence_show_on_yes" => "#eltdf-meta-box-slides_image_settings"
	)
);
$eltdSlideType->addChild(
	"eltd_slide-background-type",
	$eltd_slide_background_type
);

//Slide Image

$eltdSlideImageSettings = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide Background Image", 'moose' ),
	"eltd_slide-background-type",
	array( "video" )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_image_settings",
	$eltdSlideImageSettings
);

$eltd_slide_image = new MooseElatedMetaField(
	"image",
	"eltd_slide-image",
	"",
	esc_html__( "Slide Image", 'moose' ),
	esc_html__( "Choose background image", 'moose' )
);
$eltdSlideImageSettings->addChild(
	"eltd_title-image",
	$eltd_slide_image
);

$eltd_slide_overlay_image = new MooseElatedMetaField(
	"image",
	"eltd_slide-overlay-image",
	"",
	esc_html__( "Overlay Image", 'moose' ),
	esc_html__( "Choose overlay image (pattern) for background image", 'moose' )
);
$eltdSlideImageSettings->addChild(
	"eltd_slide-overlay-image",
	$eltd_slide_overlay_image
);

//Slide Video

$eltdSlideVideoSettings = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide Background Video", 'moose' ),
	"eltd_slide-background-type",
	array( "image" )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_video_settings",
	$eltdSlideVideoSettings
);

$eltd_slide_video_webm = new MooseElatedMetaField(
	"text",
	"eltd_slide-video-webm",
	"",
	esc_html__( "Video - webm", 'moose' ),
	esc_html__( "Path to the webm file that you have previously uploaded in Media Section", 'moose' )
);
$eltdSlideVideoSettings->addChild(
	"eltd_slide-video-webm",
	$eltd_slide_video_webm
);

$eltd_slide_video_mp4 = new MooseElatedMetaField(
	"text",
	"eltd_slide-video-mp4",
	"",
	esc_html__( "Video - mp4", 'moose' ),
	esc_html__( "Path to the mp4 file that you have previously uploaded in Media Section", 'moose' )
);
$eltdSlideVideoSettings->addChild(
	"eltd_slide-video-mp4",
	$eltd_slide_video_mp4
);

$eltd_slide_video_ogv = new MooseElatedMetaField(
	"text",
	"eltd_slide-video-ogv",
	"",
	esc_html__( "Video - ogv", 'moose' ),
	esc_html__( "Path to the ogv file that you have previously uploaded in Media Section", 'moose' )
);
$eltdSlideVideoSettings->addChild(
	"eltd_slide-video-ogv",
	$eltd_slide_video_ogv
);

$eltd_slide_video_image = new MooseElatedMetaField(
	"image",
	"eltd_slide-video-image",
	"",
	esc_html__( "Video Preview Image", 'moose' ),
	esc_html__( "Choose background image that will be visible until video is loaded. This image will be shown on touch devices too.", 'moose' )
);
$eltdSlideVideoSettings->addChild(
	"eltd_slide-video-image",
	$eltd_slide_video_image
);

$eltd_slide_video_overlay = new MooseElatedMetaField(
	"yesempty",
	"eltd_slide-video-overlay",
	"",
	esc_html__( "Video Overlay Image", 'moose' ),
	esc_html__( "Do you want to have a overlay image on video? ", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide-video-overlay_container"
	)
);
$eltdSlideVideoSettings->addChild(
	"eltd_slide-video-overlay",
	$eltd_slide_video_overlay
);

$eltd_slide_video_overlay_container = new MooseElatedContainer(
	"eltd_slide-video-overlay_container",
	"eltd_slide-video-overlay",
	""
);
$eltdSlideVideoSettings->addChild(
	"eltd_slide_video_overlay_container",
	$eltd_slide_video_overlay_container
);

$eltd_slide_video_overlay_image = new MooseElatedMetaField(
	"image",
	"eltd_slide-video-overlay-image",
	"",
	esc_html__( "Overlay Image", 'moose' ),
	esc_html__( "Choose overlay image (pattern) for background video", 'moose' )
);
$eltd_slide_video_overlay_container->addChild(
	"eltd_slide-video-overlay-image",
	$eltd_slide_video_overlay_image
);

//Slide General

$eltdSlideGeneral = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide General", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_layout",
	$eltdSlideGeneral
);

$section_title_1 = new MooseElatedTitle(
	'section_title_1',
	esc_html__( 'Slide Text Content', 'moose' )
);
$eltdSlideGeneral->addChild(
	'section_title_1',
	$section_title_1
);

$eltd_slide_hide_title = new MooseElatedMetaField(
	"yesempty",
	"eltd_slide-hide-title",
	"",
	esc_html__( "Hide Slide Title", 'moose' ),
	esc_html__( "Do you want to hide slide title?", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf-meta-box-slides_title, #eltdf_eltd_slide_hide_title_container, #eltdf_eltd_slide_scroll_title_container",
		"dependence_show_on_yes" => ""
	)
);
$eltdSlideGeneral->addChild(
	"eltd_slide-hide-title",
	$eltd_slide_hide_title
);

$eltd_slide_hide_title_container = new MooseElatedContainer(
	'eltd_slide_hide_title_container',
	'eltd_slide-hide-title',
	'yes'
);
$eltdSlideGeneral->addChild(
	'eltd_slide_hide_title_container',
	$eltd_slide_hide_title_container
);

$title_link_group = new MooseElatedGroup(
	esc_html__( "Title Link", 'moose' ),
	esc_html__( "Define styles for title", 'moose' )
);
$eltd_slide_hide_title_container->addChild(
	"title_link_group",
	$title_link_group
);
$row1 = new MooseElatedRow();
$title_link_group->addChild(
	"row1",
	$row1
);

$title_link = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-title-link",
	"",
	esc_html__( "Link", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-title-link",
	$title_link
);
$title_target = new MooseElatedMetaField(
	"selectsimple",
	"eltd_slide-title-target",
	"_self",
	esc_html__( "Target", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"_self" => esc_html__( "Self", 'moose' ),
		"_blank" => esc_html__( "Blank", 'moose' )
	)
);
$row1->addChild(
	"eltd_slide-title-target",
	$title_target
);

$eltd_slide_subtitle = new MooseElatedMetaField(
	"text",
	"eltd_slide-subtitle",
	"",
	esc_html__( "Subtitle Text", 'moose' ),
	esc_html__( "Enter text for subtitle", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide-subtitle",
	$eltd_slide_subtitle
);

$eltd_slide_text = new MooseElatedMetaField(
	"text",
	"eltd_slide-text",
	"",
	esc_html__( "Body Text", 'moose' ),
	esc_html__( "Enter slide body text", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide-text",
	$eltd_slide_text
);

$button1_label = new MooseElatedMetaField(
	"text",
	"eltd_slide-button-label",
	"",
	esc_html__( "Button 1 Text", 'moose' ),
	" Enter text to be displayed on button 1"
);
$eltdSlideGeneral->addChild(
	"eltd_slide-button-label",
	$button1_label
);

$button1_group1 = new MooseElatedGroup(
	esc_html__( "Button 1 Link", 'moose' ),
	""
);
$eltdSlideGeneral->addChild(
	"button1_group1",
	$button1_group1
);

$row1 = new MooseElatedRow();
$button1_group1->addChild(
	"row1",
	$row1
);

$button1_link = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button-link",
	"",
	esc_html__( "Link", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button-link",
	$button1_link
);
$button1_target = new MooseElatedMetaField(
	"selectsimple",
	"eltd_slide-button-target",
	"_self",
	esc_html__( "Target", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"_self" => esc_html__( "Self", 'moose' ),
		"_blank" => esc_html__( "Blank", 'moose' )
	)
);
$row1->addChild(
	"eltd_slide-button-target",
	$button1_target
);

$button2_label = new MooseElatedMetaField(
	"text",
	"eltd_slide-button-label2",
	"",
	esc_html__( "Button 2 Text", 'moose' ),
	" Enter text to be displayed on button 2"
);
$eltdSlideGeneral->addChild(
	"eltd_slide-button-label2",
	$button2_label
);

$button2_group1 = new MooseElatedGroup(
	esc_html__( "Button 2 Link", 'moose' ),
	""
);
$eltdSlideGeneral->addChild(
	"button2_group1",
	$button2_group1
);
$row1 = new MooseElatedRow();
$button2_group1->addChild(
	"row1",
	$row1
);

$button2_link = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button-link2",
	"",
	esc_html__( "Link", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button-link2",
	$button2_link
);
$button2_target = new MooseElatedMetaField(
	"selectsimple",
	"eltd_slide-button-target2",
	"_self",
	esc_html__( "Target", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"_self" => esc_html__( "Self", 'moose' ),
		"_blank" => esc_html__( "Blank", 'moose' )
	)
);
$row1->addChild(
	"eltd_slide-button-target",
	$button2_target
);

$eltd_slide_text_content_top_margin = new MooseElatedMetaField(
	"text",
	"eltd_slide_text_content_top_margin",
	"",
	esc_html__( "Text Content Top Margin", 'moose' ),
	esc_html__( "Enter top margin for text content", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdSlideGeneral->addChild(
	"eltd_slide_text_content_top_margin",
	$eltd_slide_text_content_top_margin
);

$eltd_slide_text_content_bottom_margin = new MooseElatedMetaField(
	"text",
	"eltd_slide_text_content_bottom_margin",
	"",
	esc_html__( "Text Content Bottom Margin", 'moose' ),
	esc_html__( "Enter bottom margin for text content", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdSlideGeneral->addChild(
	"eltd_slide_text_content_bottom_margin",
	$eltd_slide_text_content_bottom_margin
);

$section_title_2 = new MooseElatedTitle(
	'section_title_2',
	esc_html__( 'Slide Graphics', 'moose' )
);
$eltdSlideGeneral->addChild(
	'section_title_2',
	$section_title_2
);

$eltd_slide_graphic = new MooseElatedMetaField(
	"image",
	"eltd_slide-thumbnail",
	"",
	esc_html__( "Slide Graphic", 'moose' ),
	esc_html__( "Choose slide graphic", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide-thumbnail",
	$eltd_slide_graphic
);

$eltd_slide_graphic_link = new MooseElatedMetaField(
	"text",
	"eltd_slide-thumbnail-link",
	"",
	esc_html__( "Graphic Link", 'moose' ),
	esc_html__( "Enter URL to link slide graphic", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide-thumbnail-link",
	$eltd_slide_graphic_link
);

$eltd_slide_svg_source = new MooseElatedMetaField(
	"textarea",
	"eltd_slide_svg_source",
	"",
	esc_html__( "SVG Source code", 'moose' ),
	esc_html__( "Paste SVG Source code. (Note: all CSS styling for SVG you may put in Options > General > Custom SVG CSS)", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide_svg_source",
	$eltd_slide_svg_source
);

$eltd_slide_svg_link = new MooseElatedMetaField(
	"text",
	"eltd_slide-svg-link",
	"",
	esc_html__( "SVG Link", 'moose' ),
	esc_html__( "Enter URL to link SVG", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide-svg-link",
	$eltd_slide_svg_link
);

$eltd_slide_graphic_top_padding = new MooseElatedMetaField(
	"text",
	"eltd_slide_graphic_top_padding",
	"",
	esc_html__( "Graphic Top Padding", 'moose' ),
	esc_html__( "Enter top padding for slide graphic", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdSlideGeneral->addChild(
	"eltd_slide_graphic_top_padding",
	$eltd_slide_graphic_top_padding
);

$eltd_slide_graphic_bottom_padding = new MooseElatedMetaField(
	"text",
	"eltd_slide_graphic_bottom_padding",
	"",
	esc_html__( "Graphic Bottom Padding", 'moose' ),
	esc_html__( "Enter bottom padding for slide graphic", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdSlideGeneral->addChild(
	"eltd_slide_graphic_bottom_padding",
	$eltd_slide_graphic_bottom_padding
);

$section_title_3 = new MooseElatedTitle(
	'section_title_3',
	esc_html__( 'General Styling', 'moose' )
);
$eltdSlideGeneral->addChild(
	'section_title_3',
	$section_title_3
);

$eltd_slide_header_style = new MooseElatedMetaField(
	"selectblank",
	"eltd_slide-header-style",
	"",
	esc_html__( "Header Style", 'moose' ),
	esc_html__( "Header style will be applied when this slide is in focus", 'moose' ),
	array(
		"light" => esc_html__( "Light", 'moose' ),
		"dark" => esc_html__( "Dark", 'moose' )
	)
);
$eltdSlideGeneral->addChild(
	"eltd_slide-header-style",
	$eltd_slide_header_style
);

$eltd_slide_content_background = new MooseElatedMetaField(
	"color",
	"eltd_slide-content-background-color",
	"",
	esc_html__( "Slide Content Background Color", 'moose' ),
	esc_html__( "Choose background color for slide content", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide-content-background-color",
	$eltd_slide_content_background
);

$eltd_slide_graphic_background = new MooseElatedMetaField(
	"color",
	"eltd_slide_graphic_background",
	"",
	esc_html__( "Slide Graphic Background Color", 'moose' ),
	esc_html__( "Choose background color for slide graphic", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide_graphic_background",
	$eltd_slide_graphic_background
);

$eltd_slide_content_graphic_background = new MooseElatedMetaField(
	"color",
	"eltd_slide_content_graphic_background",
	"",
	esc_html__( "Background Color Around Slide Content and Graphic", 'moose' ),
	esc_html__( "Choose background color for box around slide content and graphic", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide_content_graphic_background",
	$eltd_slide_content_graphic_background
);

$eltd_slide_text_content_box_shaddow = new MooseElatedMetaField(
	"text",
	"eltd_slide_text_content_box_shaddow",
	"",
	esc_html__( "Box Shadow Around Text Content", 'moose' ),
	esc_html__( "Enter box shadow for text content box (in format: 2px 2px 2px 2px #000)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdSlideGeneral->addChild(
	"eltd_slide_text_content_box_shaddow",
	$eltd_slide_text_content_box_shaddow
);

$eltd_slide_content_graphic_box_shaddow = new MooseElatedMetaField(
	"text",
	"eltd_slide_content_graphic_box_shaddow",
	"",
	esc_html__( "Box Shadow Around Text Content and Graphic", 'moose' ),
	esc_html__( "Enter shadow for box around text and graphic (in format: 2px 2px 2px 2px #000)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdSlideGeneral->addChild(
	"eltd_slide_content_graphic_box_shaddow",
	$eltd_slide_content_graphic_box_shaddow
);

/*
	$eltd_slide_navigation_color = new MooseElatedMetaField("color","eltd_slide-navigation-color","",esc_html__( "Navigation Color","Navigation color will be applied when this slide is in focus", 'moose' ));
	$eltdSlideGeneral->addChild("eltd_slide-navigation-color",$eltd_slide_navigation_color);
*/

$eltd_slide_hide_shadow = new MooseElatedMetaField(
	"yesempty",
	"eltd_slide-hide-shadow",
	"",
	esc_html__( "Show Slide Text Shadow", 'moose' ),
	esc_html__( "Do you want to show text shadow?", 'moose' )
);
$eltdSlideGeneral->addChild(
	"eltd_slide-hide-shadow",
	$eltd_slide_hide_shadow
);

$eltdSlideBehaviour = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide Behaviours", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_behaviour",
	$eltdSlideBehaviour
);

$eltd_slide_scroll_to_section = new MooseElatedMetaField(
	"text",
	"eltd_slide-anchor-button",
	"",
	esc_html__( "Scroll to Section", 'moose' ),
	esc_html__( "An arrow will appear to take viewers to the next section of the page. Enter the section anchor here, for example, '#contact'", 'moose' )
);
$eltdSlideBehaviour->addChild(
	"eltd_slide-anchor-button",
	$eltd_slide_scroll_to_section
);

$eltd_slide_scroll_to_section_position = new MooseElatedMetaField(
	"select",
	"eltd_slide-anchor-button_position",
	"in_content",
	esc_html__( "Scroll to Section Icon Position", 'moose' ),
	esc_html__( "Choose position for anchor icon - scroll to section", 'moose' ),
	array(
		"in_content" => esc_html__( "In Text Content", 'moose' ),
		"bottom_of_slider" => esc_html__( "Bottom of the slide", 'moose' )
	)
);
$eltdSlideBehaviour->addChild(
	"eltd_slide-anchor-button_position",
	$eltd_slide_scroll_to_section_position
);

$section_title_1 = new MooseElatedTitle(
	'section_title_1',
	esc_html__( 'SVG Line Drawing Animation', 'moose' )
);
$eltdSlideBehaviour->addChild(
	'section_title_1',
	$section_title_1
);

$eltd_slide_svg_drawing = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_svg_drawing",
	"no",
	esc_html__( "SVG Drawing Animation", 'moose' ),
	esc_html__( "Enable SVG drawing animation", 'moose' ),
	array(),
	array(
		"dependence"             => "true",
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_svg_drawing_container"
	)
);
$eltdSlideBehaviour->addChild(
	"eltd_slide_svg_drawing",
	$eltd_slide_svg_drawing
);

$eltd_slide_svg_drawing_container = new MooseElatedContainer(
	"eltd_slide_svg_drawing_container",
	"eltd_slide_svg_drawing",
	"no"
);
$eltdSlideBehaviour->addChild(
	"eltd_slide_svg_drawing_container",
	$eltd_slide_svg_drawing_container
);

$eltd_slide_svg_frame_rate = new MooseElatedMetaField(
	"text",
	"eltd_slide_svg_frame_rate",
	"",
	esc_html__( "SVG Frame Rate", 'moose' ),
	esc_html__( "FPS (frames per second) value, defines speed of drawing", 'moose' )
);
$eltd_slide_svg_drawing_container->addChild(
	"eltd_slide_svg_frame_rate",
	$eltd_slide_svg_frame_rate
);

$section_title_2 = new MooseElatedTitle(
	'section_title_2',
	esc_html__( 'Slide Image Animation', 'moose' )
);
$eltdSlideBehaviour->addChild(
	'section_title_2',
	$section_title_2
);

$eltd_enable_image_animation = new MooseElatedMetaField(
	"yesno",
	"eltd_enable_image_animation",
	"no",
	esc_html__( "Enable Image Animation", 'moose' ),
	esc_html__( "Enabling this option will turn on a motion animation on the slide image", 'moose' ),
	array(),
	array(
		"dependence"             => "true",
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_enable_image_animation_container"
	)
);
$eltdSlideBehaviour->addChild(
	'eltd_enable_image_animation',
	$eltd_enable_image_animation
);

$eltd_enable_image_animation_container = new MooseElatedContainer(
	"eltd_enable_image_animation_container",
	"eltd_enable_image_animation",
	"no"
);
$eltdSlideBehaviour->addChild(
	"eltd_enable_image_animation_container",
	$eltd_enable_image_animation_container
);

$eltd_enable_image_animation_type = new MooseElatedMetaField(
	"select",
	"eltd_enable_image_animation_type",
	"zoom_center",
	esc_html__( "Animation Type", 'moose' ),
	"",
	array(
		"zoom_center" => esc_html__( "Zoom In Center", 'moose' ),
		"zoom_top_left" => esc_html__( "Zoom In to Top Left", 'moose' ),
		"zoom_top_right" => esc_html__( "Zoom In to Top Right", 'moose' ),
		"zoom_bottom_left" => esc_html__( "Zoom In to Bottom Left", 'moose' ),
		"zoom_bottom_right" => esc_html__( "Zoom In to Bottom Right", 'moose' )
	)
);
$eltd_enable_image_animation_container->addChild(
	"eltd_enable_image_animation_type",
	$eltd_enable_image_animation_type
);

$section_title_3 = new MooseElatedTitle(
	'section_title_3',
	esc_html__( 'Slide Content Entry Animations', 'moose' )
);
$eltdSlideBehaviour->addChild(
	'section_title_3',
	$section_title_3
);

$eltd_slide_thumbnail_animation = new MooseElatedMetaField(
	"select",
	"eltd_slide-thumbnail-animation",
	"flip",
	esc_html__( "Graphic Entry Animation", 'moose' ),
	esc_html__( "Choose entry animation for graphic", 'moose' ),
	array(
		"flip" => esc_html__( "Flip", 'moose' ),
		"fade" => esc_html__( "Fade In", 'moose' ),
		"from_bottom" => esc_html__( "From Bottom", 'moose' ),
		"from_top" => esc_html__( "From Top", 'moose' ),
		"from_left" => esc_html__( "From Left", 'moose' ),
		"from_right" => esc_html__( "From Right", 'moose' ),
		"clip_anim_hor" => esc_html__( "Clip Animation Horizontal", 'moose' ),
		"clip_anim_ver" => esc_html__( "Clip Animation Vertical", 'moose' ),
		"clip_anim_puzzle" => esc_html__( "Clip Animation Puzzle", 'moose' ),
		"without_animation" => esc_html__( "No Animation", 'moose' )
	)
);
$eltdSlideBehaviour->addChild(
	"eltd_slide-thumbnail-animation",
	$eltd_slide_thumbnail_animation
);

$eltd_slide_content_animation = new MooseElatedMetaField(
	"select",
	"eltd_slide-content-animation",
	"all_at_once",
	esc_html__( "Content Entry Animation", 'moose' ),
	esc_html__( "Choose entry animation for whole slide content group (title, subtitle, text, button)", 'moose' ),
	array(
		"all_at_once" => esc_html__( "All At Once", 'moose' ),
		"one_by_one" => esc_html__( "One By One", 'moose' ),
		"without_animation" => esc_html__( "No Animation", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"all_at_once"       => "",
			"one_by_one"        => "",
			"without_animation" => "#eltdf_eltd_slide_content_animation_container"
		),
		"show"       => array(
			"all_at_once"       => "#eltdf_eltd_slide_content_animation_container",
			"one_by_one"        => "#eltdf_eltd_slide_content_animation_container",
			"without_animation" => ""
		)
	)
);
$eltdSlideBehaviour->addChild(
	"eltd_slide-content-animation",
	$eltd_slide_content_animation
);

$eltd_slide_content_animation_container = new MooseElatedContainer(
	"eltd_slide_content_animation_container",
	"eltd_slide-content-animation",
	"without_animation"
);
$eltdSlideBehaviour->addChild(
	"eltd_slide_content_animation_container",
	$eltd_slide_content_animation_container
);

$eltd_slide_content_animation_direction = new MooseElatedMetaField(
	"select",
	"eltd_slide-content-animation-direction",
	"from_bottom",
	esc_html__( "Animation Direction", 'moose' ),
	"",
	array(
		"from_bottom" => esc_html__( "From Bottom", 'moose' ),
		"from_top" => esc_html__( "From Top", 'moose' ),
		"from_left" => esc_html__( "From Left", 'moose' ),
		"from_right" => esc_html__( "From Right", 'moose' ),
		"fade" => esc_html__( "Fade In", 'moose' )
	
	)
);
$eltd_slide_content_animation_container->addChild(
	"eltd_slide-content-animation-direction",
	$eltd_slide_content_animation_direction
);

$section_title_4 = new MooseElatedTitle(
	'section_title_4',
	esc_html__( 'Slide Content Animations Controlled by Scrolling', 'moose' )
);
$eltdSlideBehaviour->addChild(
	'section_title_4',
	$section_title_4
);

$eltd_slide_general_animation = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_general_animation",
	"no",
	esc_html__( "Animate Whole Slide Content Group at Once on Scroll", 'moose' ),
	esc_html__( "All parts of slide content will animate on scroll as group", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_general_animation_container"
	)
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_general_animation',
	$eltd_slide_general_animation
);

$eltd_slide_general_animation_container = new MooseElatedContainer(
	'eltd_slide_general_animation_container',
	'eltd_slide_general_animation',
	'no'
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_general_animation_container',
	$eltd_slide_general_animation_container
);

$eltd_slide_content_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are starting properties for the scrolling animation of the slide content group", 'moose' )
);
$eltd_slide_general_animation_container->addChild(
	"eltd_slide_content_animation_data_start",
	$eltd_slide_content_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_content_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	"",
	array(),
	array( "col_width" => 1 )
);
$row1->addChild(
	"eltd_slide_data_start",
	$eltd_slide_data_start
);

$eltd_slide_data_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	"",
	array(),
	array( "col_width" => 4 )
);
$row1->addChild(
	"eltd_slide_data_start_custom_style",
	$eltd_slide_data_start_custom_style
);

$eltd_slide_content_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are ending properties for the scrolling animation of the slide content group", 'moose' )
);
$eltd_slide_general_animation_container->addChild(
	"eltd_slide_content_animation_data_end",
	$eltd_slide_content_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_content_animation_data_end->addChild(
	'row2',
	$row2
);

$eltd_slide_data_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_end",
	$eltd_slide_data_end
);

$eltd_slide_data_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_end_custom_style",
	$eltd_slide_data_end_custom_style
);

//Title scroll animation
$eltd_slide_scroll_title_container = new MooseElatedContainerNoStyle(
	'eltd_slide_scroll_title_container',
	'eltd_slide-hide-title',
	'yes'
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_scroll_title_container',
	$eltd_slide_scroll_title_container
);

$eltd_slide_title_animation_scroll = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_title_animation_scroll",
	"no",
	esc_html__( "Animate Title on Scroll", 'moose' ),
	esc_html__( "Enable title text to animate separately", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_title_animation_scroll_container"
	)
);
$eltd_slide_scroll_title_container->addChild(
	'eltd_slide_title_animation_scroll',
	$eltd_slide_title_animation_scroll
);

$eltd_slide_title_animation_scroll_container = new MooseElatedContainer(
	'eltd_slide_title_animation_scroll_container',
	'eltd_slide_title_animation_scroll',
	'no'
);
$eltd_slide_scroll_title_container->addChild(
	'eltd_slide_title_animation_scroll_container',
	$eltd_slide_title_animation_scroll_container
);

$eltd_slide_title_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'moose' )
);
$eltd_slide_title_animation_scroll_container->addChild(
	"eltd_slide_title_animation_data_start",
	$eltd_slide_title_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_title_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_title_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_title_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_data_title_start",
	$eltd_slide_data_title_start
);

$eltd_slide_data_title_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_title_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_data_title_start_custom_style",
	$eltd_slide_data_title_start_custom_style
);

$eltd_slide_title_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'moose' )
);
$eltd_slide_title_animation_scroll_container->addChild(
	"eltd_slide_title_animation_data_end",
	$eltd_slide_title_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_title_animation_data_end->addChild(
	"row2",
	$row2
);

$eltd_slide_data_title_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_title_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_title_end",
	$eltd_slide_data_title_end
);

$eltd_slide_data_title_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_title_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_title_end_custom_style",
	$eltd_slide_data_title_end_custom_style
);

//Subtitle scroll animation
$eltd_slide_subtitle_animation_scroll = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_subtitle_animation_scroll",
	"no",
	esc_html__( "Animate Subtitle on Scroll", 'moose' ),
	esc_html__( "Enable subtitle text to animate separately", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_subtitle_animation_scroll_container"
	)
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_subtitle_animation_scroll',
	$eltd_slide_subtitle_animation_scroll
);

$eltd_slide_subtitle_animation_scroll_container = new MooseElatedContainer(
	'eltd_slide_subtitle_animation_scroll_container',
	'eltd_slide_subtitle_animation_scroll',
	'no'
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_subtitle_animation_scroll_container',
	$eltd_slide_subtitle_animation_scroll_container
);

$eltd_slide_subtitle_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'moose' )
);
$eltd_slide_subtitle_animation_scroll_container->addChild(
	"eltd_slide_subtitle_animation_data_start",
	$eltd_slide_subtitle_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_subtitle_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_subtitle_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_subtitle_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_data_subtitle_start",
	$eltd_slide_data_subtitle_start
);

$eltd_slide_data_subtitle_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_subtitle_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_data_subtitle_start_custom_style",
	$eltd_slide_data_subtitle_start_custom_style
);

$eltd_slide_subtitle_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'moose' )
);
$eltd_slide_subtitle_animation_scroll_container->addChild(
	"eltd_slide_subtitle_animation_data_end",
	$eltd_slide_subtitle_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_subtitle_animation_data_end->addChild(
	"row2",
	$row2
);

$eltd_slide_data_subtitle_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_subtitle_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_subtitle_end",
	$eltd_slide_data_subtitle_end
);

$eltd_slide_data_subtitle_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_subtitle_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_subtitle_end_custom_style",
	$eltd_slide_data_subtitle_end_custom_style
);

//Graphics scroll animation
$eltd_slide_graphic_animation_scroll = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_graphic_animation_scroll",
	"no",
	esc_html__( "Animate Graphic on Scroll", 'moose' ),
	esc_html__( "Enable graphic to animate separately", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_graphic_animation_scroll_container"
	)
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_graphic_animation_scroll',
	$eltd_slide_graphic_animation_scroll
);

$eltd_slide_graphic_animation_scroll_container = new MooseElatedContainer(
	'eltd_slide_graphic_animation_scroll_container',
	'eltd_slide_graphic_animation_scroll',
	'no'
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_graphic_animation_scroll_container',
	$eltd_slide_graphic_animation_scroll_container
);

$eltd_slide_graphics_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'moose' )
);
$eltd_slide_graphic_animation_scroll_container->addChild(
	"eltd_slide_graphics_animation_data_start",
	$eltd_slide_graphics_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_graphics_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_graphics_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_graphics_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_data_graphics_start",
	$eltd_slide_data_graphics_start
);

$eltd_slide_data_graphics_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_graphics_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_data_graphics_start_custom_style",
	$eltd_slide_data_graphics_start_custom_style
);

$eltd_slide_graphics_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'moose' )
);
$eltd_slide_graphic_animation_scroll_container->addChild(
	"eltd_slide_graphics_animation_data_end",
	$eltd_slide_graphics_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_graphics_animation_data_end->addChild(
	"row2",
	$row2
);

$eltd_slide_data_graphics_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_graphics_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_graphics_end",
	$eltd_slide_data_graphics_end
);

$eltd_slide_data_graphics_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_graphics_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_graphics_end_custom_style",
	$eltd_slide_data_graphics_end_custom_style
);

//Text scroll animation
$eltd_slide_text_animation_scroll = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_text_animation_scroll",
	"no",
	esc_html__( "Animate Text on Scroll", 'moose' ),
	esc_html__( "Enable text to animate separately", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_text_animation_scroll_container"
	)
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_text_animation_scroll',
	$eltd_slide_text_animation_scroll
);

$eltd_slide_text_animation_scroll_container = new MooseElatedContainer(
	'eltd_slide_text_animation_scroll_container',
	'eltd_slide_text_animation_scroll',
	'no'
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_text_animation_scroll_container',
	$eltd_slide_text_animation_scroll_container
);

$eltd_slide_text_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'moose' )
);
$eltd_slide_text_animation_scroll_container->addChild(
	"eltd_slide_text_animation_data_start",
	$eltd_slide_text_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_text_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_text_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_text_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_data_text_start",
	$eltd_slide_data_text_start
);

$eltd_slide_data_text_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_text_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_data_text_start_custom_style",
	$eltd_slide_data_text_start_custom_style
);

$eltd_slide_text_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'moose' )
);
$eltd_slide_text_animation_scroll_container->addChild(
	"eltd_slide_text_animation_data_end",
	$eltd_slide_text_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_text_animation_data_end->addChild(
	"row2",
	$row2
);

$eltd_slide_data_text_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_text_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_text_end",
	$eltd_slide_data_text_end
);

$eltd_slide_data_text_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_text_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' ),
	""
);
$row2->addChild(
	"eltd_slide_data_text_end_custom_style",
	$eltd_slide_data_text_end_custom_style
);

//Button 1 scroll animation
$eltd_slide_button1_animation_scroll = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_button1_animation_scroll",
	"no",
	esc_html__( "Animate Button 1 on Scroll", 'moose' ),
	esc_html__( "Enable button 1 to animate separately", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_button1_animation_scroll_container"
	)
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_button1_animation_scroll',
	$eltd_slide_button1_animation_scroll
);

$eltd_slide_button1_animation_scroll_container = new MooseElatedContainer(
	'eltd_slide_button1_animation_scroll_container',
	'eltd_slide_button1_animation_scroll',
	'no'
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_button1_animation_scroll_container',
	$eltd_slide_button1_animation_scroll_container
);

$eltd_slide_button_1_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'moose' )
);
$eltd_slide_button1_animation_scroll_container->addChild(
	"eltd_slide_button_1_animation_data_start",
	$eltd_slide_button_1_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_button_1_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_button_1_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_button_1_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_button_1_start",
	$eltd_slide_data_button_1_start
);

$eltd_slide_data_button_1_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_button_1_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_button_1_start_custom_style",
	$eltd_slide_data_button_1_start_custom_style
);

$eltd_slide_button_1_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'moose' )
);
$eltd_slide_button1_animation_scroll_container->addChild(
	"eltd_slide_button_1_animation_data_end",
	$eltd_slide_button_1_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_button_1_animation_data_end->addChild(
	"row2",
	$row2
);

$eltd_slide_data_button_1_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_button_1_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_button_1_end",
	$eltd_slide_data_button_1_end
);

$eltd_slide_data_button_1_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_button_1_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_button_1_end_custom_style",
	$eltd_slide_data_button_1_end_custom_style
);

//Button 2 scroll animation
$eltd_slide_button2_animation_scroll = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_button2_animation_scroll",
	"no",
	esc_html__( "Animate Button 2 on Scroll", 'moose' ),
	esc_html__( "Enable button 2 to animate separately", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_button2_animation_scroll_container"
	)
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_button2_animation_scroll',
	$eltd_slide_button2_animation_scroll
);

$eltd_slide_button2_animation_scroll_container = new MooseElatedContainer(
	'eltd_slide_button2_animation_scroll_container',
	'eltd_slide_button2_animation_scroll',
	'no'
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_button2_animation_scroll_container',
	$eltd_slide_button2_animation_scroll_container
);

$eltd_slide_button_2_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'moose' )
);
$eltd_slide_button2_animation_scroll_container->addChild(
	"eltd_slide_button_2_animation_data_start",
	$eltd_slide_button_2_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_button_2_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_button_2_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_button_2_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_button_2_start",
	$eltd_slide_data_button_2_start
);

$eltd_slide_data_button_2_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_button_2_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_button_2_start_custom_style",
	$eltd_slide_data_button_2_start_custom_style
);

$eltd_slide_button_2_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'moose' )
);
$eltd_slide_button2_animation_scroll_container->addChild(
	"eltd_slide_button_2_animation_data_end",
	$eltd_slide_button_2_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_button_2_animation_data_end->addChild(
	"row2",
	$row2
);

$eltd_slide_data_button_2_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_button_2_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_button_2_end",
	$eltd_slide_data_button_2_end
);

$eltd_slide_data_button_2_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_button_2_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_button_2_end_custom_style",
	$eltd_slide_data_button_2_end_custom_style
);

$eltd_slide_scroll_separator_container = new MooseElatedContainerNoStyle(
	'eltd_slide_scroll_separator_container',
	'eltd_slide-separator-title',
	'no'
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_scroll_separator_container',
	$eltd_slide_scroll_separator_container
);

//Separator Top scroll animation
$eltd_slide_separator_top_animation_scroll = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_separator_top_animation_scroll",
	"no",
	esc_html__( "Animate Separator Top on Scroll", 'moose' ),
	esc_html__( "Enable separator top to animate separately", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_separator_top_animation_scroll_container"
	)
);
$eltd_slide_scroll_separator_container->addChild(
	'eltd_slide_separator_top_animation_scroll',
	$eltd_slide_separator_top_animation_scroll
);

$eltd_slide_separator_top_animation_scroll_container = new MooseElatedContainer(
	'eltd_slide_separator_top_animation_scroll_container',
	'eltd_slide_separator_top_animation_scroll',
	'no'
);
$eltd_slide_scroll_separator_container->addChild(
	'eltd_slide_separator_top_animation_scroll_container',
	$eltd_slide_separator_top_animation_scroll_container
);

$eltd_slide_separator_top_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'moose' )
);
$eltd_slide_separator_top_animation_scroll_container->addChild(
	"eltd_slide_separator_top_animation_data_start",
	$eltd_slide_separator_top_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_separator_top_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_separator_top_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_separator_top_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_separator_top_start",
	$eltd_slide_data_separator_top_start
);

$eltd_slide_data_separator_top_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_separator_top_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_separator_top_start_custom_style",
	$eltd_slide_data_separator_top_start_custom_style
);

$eltd_slide_separator_top_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'moose' )
);
$eltd_slide_separator_top_animation_scroll_container->addChild(
	"eltd_slide_separator_top_animation_data_end",
	$eltd_slide_separator_top_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_separator_top_animation_data_end->addChild(
	"row2",
	$row2
);

$eltd_slide_data_separator_top_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_separator_top_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_separator_top_end",
	$eltd_slide_data_separator_top_end
);

$eltd_slide_data_separator_top_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_separator_top_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_separator_top_end_custom_style",
	$eltd_slide_data_separator_top_end_custom_style
);

//Separator Bottom scroll animation
$eltd_slide_separator_bottom_animation_scroll = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_separator_bottom_animation_scroll",
	"no",
	esc_html__( "Animate Separator Bottom on Scroll", 'moose' ),
	esc_html__( "Enable separator bottom to animate separately", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_separator_bottom_animation_scroll_container"
	)
);
$eltd_slide_scroll_separator_container->addChild(
	'eltd_slide_separator_bottom_animation_scroll',
	$eltd_slide_separator_bottom_animation_scroll
);

$eltd_slide_separator_bottom_animation_scroll_container = new MooseElatedContainer(
	'eltd_slide_separator_bottom_animation_scroll_container',
	'eltd_slide_separator_bottom_animation_scroll',
	'no'
);
$eltd_slide_scroll_separator_container->addChild(
	'eltd_slide_separator_bottom_animation_scroll_container',
	$eltd_slide_separator_bottom_animation_scroll_container
);

$eltd_slide_separator_bottom_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'moose' )
);
$eltd_slide_separator_bottom_animation_scroll_container->addChild(
	"eltd_slide_separator_bottom_animation_data_start",
	$eltd_slide_separator_bottom_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_separator_bottom_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_separator_bottom_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_separator_bottom_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_separator_bottom_start",
	$eltd_slide_data_separator_bottom_start
);

$eltd_slide_data_separator_bottom_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_separator_bottom_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_separator_bottom_start_custom_style",
	$eltd_slide_data_separator_bottom_start_custom_style
);

$eltd_slide_separator_bottom_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'moose' )
);
$eltd_slide_separator_bottom_animation_scroll_container->addChild(
	"eltd_slide_separator_bottom_animation_data_end",
	$eltd_slide_separator_bottom_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_separator_bottom_animation_data_end->addChild(
	"row2",
	$row2
);

$eltd_slide_data_separator_bottom_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_separator_bottom_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_separator_bottom_end",
	$eltd_slide_data_separator_bottom_end
);

$eltd_slide_data_separator_bottom_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_separator_bottom_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_separator_bottom_end_custom_style",
	$eltd_slide_data_separator_bottom_end_custom_style
);

//SVG scroll animation
$eltd_slide_svg_animation_scroll = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_svg_animation_scroll",
	"no",
	esc_html__( "Animate SVG on Scroll", 'moose' ),
	esc_html__( "Enable SVG to animate separately", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_svg_animation_scroll_container"
	)
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_svg_animation_scroll',
	$eltd_slide_svg_animation_scroll
);

$eltd_slide_svg_animation_scroll_container = new MooseElatedContainer(
	'eltd_slide_svg_animation_scroll_container',
	'eltd_slide_svg_animation_scroll',
	'no'
);
$eltdSlideBehaviour->addChild(
	'eltd_slide_svg_animation_scroll_container',
	$eltd_slide_svg_animation_scroll_container
);

$eltd_slide_svg_animation_data_start = new MooseElatedGroup(
	esc_html__( "Scrolling Animation Start Point", 'moose' ),
	esc_html__( "These are properties for the first keyframe in scrolling animation", 'moose' )
);
$eltd_slide_svg_animation_scroll_container->addChild(
	"eltd_slide_svg_animation_data_start",
	$eltd_slide_svg_animation_data_start
);

$row1 = new MooseElatedRow();
$eltd_slide_svg_animation_data_start->addChild(
	"row1",
	$row1
);

$eltd_slide_data_svg_start = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_svg_start",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_svg_start",
	$eltd_slide_data_svg_start
);

$eltd_slide_data_svg_start_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_svg_start_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row1->addChild(
	"eltd_slide_data_svg_start_custom_style",
	$eltd_slide_data_svg_start_custom_style
);

$eltd_slide_svg_animation_data_end = new MooseElatedGroup(
	esc_html__( "Scrolling Animation End Point", 'moose' ),
	esc_html__( "These are properties for the last keyframe in scrolling animation", 'moose' )
);
$eltd_slide_svg_animation_scroll_container->addChild(
	"eltd_slide_svg_animation_data_end",
	$eltd_slide_svg_animation_data_end
);

$row2 = new MooseElatedRow();
$eltd_slide_svg_animation_data_end->addChild(
	"row2",
	$row2
);

$eltd_slide_data_svg_end = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_data_svg_end",
	"",
	esc_html__( "Scrollbar Top Distance (px)", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_svg_end",
	$eltd_slide_data_svg_end
);

$eltd_slide_data_svg_end_custom_style = new MooseElatedMetaField(
	"textareasimple",
	"eltd_slide_data_svg_end_custom_style",
	"",
	esc_html__( "Enter CSS declarations separated by semicolons", 'moose' )
);
$row2->addChild(
	"eltd_slide_data_svg_end_custom_style",
	$eltd_slide_data_svg_end_custom_style
);

//Slide Title

$eltdSlideTitle = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide Title Style", 'moose' ),
	"eltd_slide-hide-title",
	array( "yes" )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_title",
	$eltdSlideTitle
);

$title_text_group = new MooseElatedGroup(
	esc_html__( "Title Text Style", 'moose' ),
	esc_html__( "Define styles for title text", 'moose' )
);
$eltdSlideTitle->addChild(
	"title_text_group",
	$title_text_group
);
$row1 = new MooseElatedRow();
$title_text_group->addChild(
	"row1",
	$row1
);
$title_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-title-color",
	"",
	esc_html__( "Font Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-title-color",
	$title_color
);
$title_fontsize = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-title-font-size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-title-font-size",
	$title_fontsize
);
$title_lineheight = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-title-line-height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-title-line-height",
	$title_lineheight
);
$title_letterspacing = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-title-letter-spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-title-letter-spacing",
	$title_letterspacing
);

$row2 = new MooseElatedRow( true );
$title_text_group->addChild(
	"row2",
	$row2
);
$title_google_fonts = new MooseElatedMetaField(
	"fontsimple",
	"eltd_slide-title-font-family",
	"",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-title-font-family",
	$title_google_fonts
);
$title_fontstyle = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-title-font-style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"eltd_slide-title-font-style",
	$title_fontstyle
);
$title_fontweight = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-title-font-weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"eltd_slide-title-font-weight",
	$title_fontweight
);
$title_texttransform = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-title-text-transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"eltd_slide-title-text-transform",
	$title_texttransform
);

$title_background_group = new MooseElatedGroup(
	esc_html__( "Background", 'moose' ),
	esc_html__( "Define background for title", 'moose' )
);
$eltdSlideTitle->addChild(
	"title_background_group",
	$title_background_group
);
$row1 = new MooseElatedRow();
$title_background_group->addChild(
	"row1",
	$row1
);
$title_background_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-title-background-color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-title-background-color",
	$title_background_color
);
$title_background_color_transparency = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-title-bg-color-transparency",
	"",
	esc_html__( "Background Color Transparency (values 0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-title-bg-color-transparency",
	$title_background_color_transparency
);

$title_margin_group = new MooseElatedGroup(
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "Enter value for title bottom margin (default value is 14)", 'moose' )
);
$eltdSlideTitle->addChild(
	"title_margin_group",
	$title_margin_group
);
$row1 = new MooseElatedRow();
$title_margin_group->addChild(
	"row1",
	$row1
);
$title_margin_bottom = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_title_margin_bottom",
	"",
	"",
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_title_margin_bottom",
	$title_margin_bottom
);

$title_padding_group = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define padding for title", 'moose' )
);
$eltdSlideTitle->addChild(
	"title_padding_group",
	$title_padding_group
);
$row1 = new MooseElatedRow();
$title_padding_group->addChild(
	"row1",
	$row1
);
$title_padding_top = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_title_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_title_padding_top",
	$title_padding_top
);
$title_padding_right = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_title_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_title_padding_right",
	$title_padding_right
);
$title_padding_bottom = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_title_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_title_padding_bottom",
	$title_padding_bottom
);
$title_padding_left = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_title_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_title_padding_left",
	$title_padding_left
);

$eltd_slide_title_border = new MooseElatedMetaField(
	'yesno',
	'eltd_slide_title_border',
	'no',
	esc_html__( 'Border', 'moose' ),
	esc_html__( 'Do you want to have a title border?', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_title_border_container'
	)
);
$eltdSlideTitle->addChild(
	'eltd_slide_title_border',
	$eltd_slide_title_border
);

$title_border_container = new MooseElatedContainer(
	'title_border_container',
	'eltd_slide_title_border',
	'no'
);
$eltdSlideTitle->addChild(
	'title_border_container',
	$title_border_container
);

$title_border_group = new MooseElatedGroup(
	esc_html__( "Title Border", 'moose' ),
	esc_html__( "Define border for title", 'moose' )
);
$title_border_container->addChild(
	"title_border_group",
	$title_border_group
);
$row1 = new MooseElatedRow();
$title_border_group->addChild(
	"row1",
	$row1
);
$title_border_thickness = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_title_border_thickness",
	"",
	esc_html__( "Thickness (px)", 'moose' ),
	""
);
$row1->addChild(
	"title_border_thickness",
	$title_border_thickness
);
$title_border_style = new MooseElatedMetaField(
	"selectsimple",
	"eltd_slide_title_border_style",
	"",
	esc_html__( "Style", 'moose' ),
	"",
	array(
		"solid" => esc_html__( "solid", 'moose' ),
		"dashed" => esc_html__( "dashed", 'moose' ),
		"dotted" => esc_html__( "dotted", 'moose' ),
		"double" => esc_html__( "double", 'moose' ),
		"groove" => esc_html__( "groove", 'moose' ),
		"ridge" => esc_html__( "ridge", 'moose' ),
		"inset" => esc_html__( "inset", 'moose' ),
		"outset" => esc_html__( "outset", 'moose' )
	)
);
$row1->addChild(
	"title_border_style",
	$title_border_style
);
$title_border_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slider_title_border_color",
	"",
	esc_html__( "Color", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slider_title_border_color",
	$title_border_color
);

$eltd_slide_title_separator = new MooseElatedMetaField(
	"yesno",
	"eltd_slide-separator-title",
	"no",
	esc_html__( "Title Separator", 'moose' ),
	esc_html__( "Do you want to have a title separator?", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_eltd_slide_title_separator_container, #eltdf_eltd_slide_scroll_separator_container"
	)
);
$eltdSlideTitle->addChild(
	"eltd_slide-separator-title",
	$eltd_slide_title_separator
);

$eltd_slide_title_separator_container = new MooseElatedContainer(
	"eltd_slide_title_separator_container",
	"eltd_slide-separator-title",
	"no"
);
$eltdSlideTitle->addChild(
	"eltd_slide_title_separator_container",
	$eltd_slide_title_separator_container
);

//Separator with or without icon
$eltd_slide_title_separator_type = new MooseElatedMetaField(
	'select',
	'eltd_slide_title_separator_type',
	'',
	esc_html__( 'Separator Type', 'moose' ),
	'',
	array(
		'without_icon' => esc_html__( 'Without Icon', 'moose' ),
		'with_icon' => esc_html__( 'With Icon', 'moose' ),
		'with_custom_icon' => esc_html__( 'With Custom Icon', 'moose' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			'without_icon'     => '#eltdf_eltd_slide_title_separator_with_icon_container, #eltdf_eltd_slide_title_separator_with_custom_icon_container',
			'with_icon'        => '#eltdf_eltd_slide_title_separator_without_icon_container, #eltdf_eltd_slide_title_separator_with_custom_icon_container',
			'with_custom_icon' => '#eltdf_eltd_slide_title_separator_with_icon_container, #eltdf_eltd_slide_title_separator_without_icon_container'
		),
		'show'       => array(
			'without_icon'     => '#eltdf_eltd_slide_title_separator_without_icon_container',
			'with_icon'        => '#eltdf_eltd_slide_title_separator_with_icon_container',
			'with_custom_icon' => '#eltdf_eltd_slide_title_separator_with_custom_icon_container'
		)
	)
);
$eltd_slide_title_separator_container->addChild(
	'eltd_slide_title_separator_type',
	$eltd_slide_title_separator_type
);

//Separator without Icon Container
$eltd_slide_title_separator_without_icon_container = new MooseElatedContainer(
	'eltd_slide_title_separator_without_icon_container',
	'eltd_slide_title_separator_type',
	'',
	array( 'with_icon', 'with_custom_icon' )
);
$eltd_slide_title_separator_container->addChild(
	'eltd_slide_title_separator_without_icon_container',
	$eltd_slide_title_separator_without_icon_container
);

$eltd_slide_title_separator_align_container = new MooseElatedContainerNoStyle(
	'eltd_slide_title_separator_align_container',
	'eltd_slide-title-separator-position',
	'left_right'
);
$eltd_slide_title_separator_without_icon_container->addChild(
	'eltd_slide_title_separator_align_container',
	$eltd_slide_title_separator_align_container
);

$eltd_slide_title_separator_align = new MooseElatedMetaField(
	"select",
	"eltd_slide-title-separator-align",
	"both",
	esc_html__( "Alignment", 'moose' ),
	esc_html__( "Choose alignment of slider separator", 'moose' ),
	array(
		"none" => esc_html__( "Center", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$eltd_slide_title_separator_align_container->addChild(
	"eltd_slide-title-separator-align",
	$eltd_slide_title_separator_align
);

$eltd_slide_separator_color_group = new MooseElatedGroup(
	esc_html__( "Separator Color", 'moose' ),
	esc_html__( "Define color for slider separator", 'moose' )
);
$eltd_slide_title_separator_without_icon_container->addChild(
	"eltd_slide_separator_color_group",
	$eltd_slide_separator_color_group
);

$row1 = new MooseElatedRow();
$eltd_slide_separator_color_group->addChild(
	"row1",
	$row1
);

$eltd_slide_title_separator_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-separator-color",
	"",
	esc_html__( "Separator Color", 'moose' ),
	esc_html__( "Choose a color for the separator", 'moose' )
);
$row1->addChild(
	"eltd_slide-separator-color",
	$eltd_slide_title_separator_color
);

$eltd_slide_title_separator_transparency = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-separator-transparency",
	"",
	esc_html__( "Separator transparency (values 0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-separator-transparency",
	$eltd_slide_title_separator_transparency
);

$eltd_slide_separator_border_group = new MooseElatedGroup(
	esc_html__( "Separator Border", 'moose' ),
	esc_html__( "Define border for slider separator", 'moose' )
);
$eltd_slide_title_separator_without_icon_container->addChild(
	"eltd_slide_separator_border_group",
	$eltd_slide_separator_border_group
);

$row1 = new MooseElatedRow();
$eltd_slide_separator_border_group->addChild(
	"row1",
	$row1
);

$eltd_slide_separator_border_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-separator-border-color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "Choose a color for the separator", 'moose' )
);
$row1->addChild(
	"eltd_slide-separator-border-color",
	$eltd_slide_separator_border_color
);

$eltd_slide_separator_border_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-separator-border-width",
	"",
	esc_html__( "Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-separator-border-width",
	$eltd_slide_separator_border_width
);

$eltd_slide_separator_border_style = new MooseElatedMetaField(
	'selectsimple',
	'eltd_slide-separator-border-style',
	'solid',
	esc_html__( 'Style', 'moose' ),
	'',
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' ),
		"transparent" => esc_html__( "Transparent", 'moose' )
	)
);
$row1->addChild(
	"eltd_slide-separator-border-style",
	$eltd_slide_separator_border_style
);

$eltd_slide_separator_size_group = new MooseElatedGroup(
	esc_html__( "Separator Size", 'moose' ),
	esc_html__( "Define size for slider separator", 'moose' )
);
$eltd_slide_title_separator_without_icon_container->addChild(
	"eltd_slide_separator_size_group",
	$eltd_slide_separator_size_group
);

$row1 = new MooseElatedRow();
$eltd_slide_separator_size_group->addChild(
	"row1",
	$row1
);

$eltd_slide_title_separator_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-separator-width",
	"",
	esc_html__( "Separator Width (%)", 'moose' ),
	esc_html__( "Enter value from 0% to 100%. Enter just number.", 'moose' )
);
$row1->addChild(
	"eltd_slide-separator-width",
	$eltd_slide_title_separator_width
);

$eltd_slide_title_separator_thickness = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-separator-thickness",
	"",
	esc_html__( "Separator Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-separator-thickness",
	$eltd_slide_title_separator_thickness
);

//Separator with icon container
$eltd_slide_title_separator_with_icon_container = new MooseElatedContainer(
	'eltd_slide_title_separator_with_icon_container',
	'eltd_slide_title_separator_type',
	'',
	array( 'without_icon', 'with_custom_icon' )
);
$eltd_slide_title_separator_container->addChild(
	'eltd_slide_title_separator_with_icon_container',
	$eltd_slide_title_separator_with_icon_container
);

$eltd_slide_separator_icon_hide_array = array();
$eltd_slide_separator_icon_show_array = array();

if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	
	$eltd_slide_separator_icon_collections_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$eltd_slide_separator_icon_hide_array[ $dep_collection_key ] = '';
		
		$eltd_slide_separator_icon_show_array[ $dep_collection_key ] = '#eltdf_eltd_slide_title_separator_with_icon_' . $dep_collection_object->param . '_container';
		
		foreach ( $eltd_slide_separator_icon_collections_params as $eltd_slide_separator_icon_collections_param ) {
			
			if ( $eltd_slide_separator_icon_collections_param !== $dep_collection_object->param ) {
				$eltd_slide_separator_icon_hide_array[ $dep_collection_key ] .= '#eltdf_eltd_slide_title_separator_with_icon_' . $eltd_slide_separator_icon_collections_param . '_container,';
			}
			
		}
		
		$eltd_slide_separator_icon_hide_array[ $dep_collection_key ] = rtrim(
			$eltd_slide_separator_icon_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$eltd_slide_title_separator_with_icon_icon_pack = new MooseElatedMetaField(
	'select',
	'eltd_slide_title_separator_with_icon_icon_pack',
	'font_awesome',
	esc_html__( 'Icon Package', 'moose' ),
	esc_html__( 'Choose Icon Package', 'moose' ),
	$moose_elated_icon_collections->getIconCollections(),
	array(
		'dependence' => true,
		'hide'       => $eltd_slide_separator_icon_hide_array,
		'show'       => $eltd_slide_separator_icon_show_array
	)
);
$eltd_slide_title_separator_with_icon_container->addChild(
	'eltd_slide_title_separator_with_icon_icon_pack',
	$eltd_slide_title_separator_with_icon_icon_pack
);

if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	
	foreach ($moose_elated_icon_collections->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		$icon_collections_keys = $moose_elated_icon_collections->getIconCollectionsKeys();
		
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$eltd_slide_title_separator_icon_hide_values = $icon_collections_keys;
		
		$eltd_slide_title_separator_with_icon_icon_pack_container = new MooseElatedContainer(
			'eltd_slide_title_separator_with_icon_' . $collection_object->param . '_container',
			'eltd_slide_title_separator_with_icon_icon_pack',
			'',
			$eltd_slide_title_separator_icon_hide_values
		);
		$eltd_slide_title_separator_with_icon_container->addChild(
			'eltd_slide_title_separator_with_icon_' . $collection_object->param . '_container',
			$eltd_slide_title_separator_with_icon_icon_pack_container
		);
		
		$eltd_slide_title_separator_with_icon_icon_type = new MooseElatedMetaField(
			'select',
			'eltd_slide_title_separator_with_icon_' . $collection_object->param,
			'',
			$collection_object->title,
			esc_html__( 'Icon Package', 'moose' ),
			$icons_array
		);
		$eltd_slide_title_separator_with_icon_icon_pack_container->addChild(
			'eltd_slide_title_separator_with_icon_' . $collection_object->param,
			$eltd_slide_title_separator_with_icon_icon_type
		);
		
	}
	
}

$eltd_slide_title_separator_with_icon_separator_size_group = new MooseElatedGroup(
	esc_html__( 'Separator Size and Style', 'moose' ),
	esc_html__( 'Define size, color and margins', 'moose' )
);
$eltd_slide_title_separator_with_icon_container->addChild(
	'eltd_slide_title_separator_with_icon_separator_size_group',
	$eltd_slide_title_separator_with_icon_separator_size_group
);

$row1 = new MooseElatedRow();
$eltd_slide_title_separator_with_icon_separator_size_group->addChild(
	'row1',
	$row1
);

$eltd_slide_title_separator_with_icon_line_style = new MooseElatedMetaField(
	'selectsimple',
	'eltd_slide_title_separator_with_icon_line_style',
	'normal',
	esc_html__( 'Separator Line Style', 'moose' ),
	'',
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' ),
		"transparent" => esc_html__( "Transparent", 'moose' )
	)
);
$row1->addChild(
	'eltd_slide_title_separator_with_icon_line_style',
	$eltd_slide_title_separator_with_icon_line_style
);

$eltd_slide_title_separator_with_icon_separator_width = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_icon_separator_width',
	'',
	esc_html__( 'Width (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_slide_title_separator_with_icon_separator_width',
	$eltd_slide_title_separator_with_icon_separator_width
);

$eltd_slide_title_separator_with_icon_separator_margin_top = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_icon_separator_margin_top',
	'',
	esc_html__( 'Top Margin (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_slide_title_separator_with_icon_separator_margin_top',
	$eltd_slide_title_separator_with_icon_separator_margin_top
);

$eltd_slide_title_separator_with_icon_separator_margin_bottom = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_icon_separator_margin_bottom',
	'',
	esc_html__( 'Bottom Margin (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_slide_title_separator_with_icon_separator_margin_bottom',
	$eltd_slide_title_separator_with_icon_separator_margin_bottom
);

$row2 = new MooseElatedRow( true );
$eltd_slide_title_separator_with_icon_separator_size_group->addChild(
	'row2',
	$row2
);

$eltd_slide_title_separator_with_icon_separator_thickness = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_icon_separator_thickness',
	'',
	esc_html__( 'Thickness (px)', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_title_separator_with_icon_separator_thickness',
	$eltd_slide_title_separator_with_icon_separator_thickness
);

$eltd_slide_title_separator_with_icon_separator_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_slide_title_separator_with_icon_separator_color',
	'',
	esc_html__( 'Separator Color', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_title_separator_with_icon_separator_color',
	$eltd_slide_title_separator_with_icon_separator_color
);

$eltd_slide_title_separator_with_icon_icon_size_group = new MooseElatedGroup(
	esc_html__( 'Icon Position and Size', 'moose' ),
	esc_html__( 'Define icon position, size and type', 'moose' )
);
$eltd_slide_title_separator_with_icon_container->addChild(
	'eltd_slide_title_separator_with_icon_icon_size_group',
	$eltd_slide_title_separator_with_icon_icon_size_group
);

$row1 = new MooseElatedRow();
$eltd_slide_title_separator_with_icon_icon_size_group->addChild(
	'row1',
	$row1
);

$eltd_slide_title_separator_with_icon_icon_type = new MooseElatedMetaField(
	'selectsimple',
	'eltd_slide_title_separator_with_icon_icon_type',
	'normal',
	esc_html__( 'Icon Type', 'moose' ),
	'',
	array(
		'normal' => esc_html__( 'Normal', 'moose' ),
		'circle' => esc_html__( 'Circle', 'moose' ),
		'square' => esc_html__( 'Square', 'moose' )
	)
);
$row1->addChild(
	'eltd_slide_title_separator_with_icon_icon_type',
	$eltd_slide_title_separator_with_icon_icon_type
);

$eltd_slide_title_separator_with_icon_icon_postition = new MooseElatedMetaField(
	'selectsimple',
	'eltd_slide_title_separator_with_icon_icon_postition',
	'normal',
	esc_html__( 'Icon Position', 'moose' ),
	'',
	array(
		'center' => esc_html__( 'Center', 'moose' ),
		'left' => esc_html__( 'Left', 'moose' ),
		'right' => esc_html__( 'Right', 'moose' )
	)
);
$row1->addChild(
	'eltd_slide_title_separator_with_icon_icon_postition',
	$eltd_slide_title_separator_with_icon_icon_postition
);

$eltd_slide_title_separator_with_icon_icon_custom_size = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_icon_icon_custom_size',
	'',
	esc_html__( 'Icon Custom Size (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_slide_title_separator_with_icon_icon_custom_size',
	$eltd_slide_title_separator_with_icon_icon_custom_size
);

$eltd_slide_title_separator_with_icon_icon_shape_size = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_icon_icon_shape_size',
	'',
	esc_html__( 'Icon Shape Size (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_slide_title_separator_with_icon_icon_shape_size',
	$eltd_slide_title_separator_with_icon_icon_shape_size
);

$row2 = new MooseElatedRow( true );
$eltd_slide_title_separator_with_icon_icon_size_group->addChild(
	'row2',
	$row2
);

$eltd_slide_title_separator_with_icon_icon_margin = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_icon_icon_margin',
	'',
	esc_html__( 'Icon Margin (px)', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_title_separator_with_icon_icon_margin',
	$eltd_slide_title_separator_with_icon_icon_margin
);

$eltd_slide_title_separator_with_icon_icon_border_radius = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_icon_icon_border_radius',
	'',
	esc_html__( 'Icon Border Radius (px)', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_title_separator_with_icon_icon_border_radius',
	$eltd_slide_title_separator_with_icon_icon_border_radius
);

$eltd_slide_title_separator_with_icon_icon_border_width = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_icon_icon_border_width',
	'',
	esc_html__( 'Icon Border Width (px)', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_title_separator_with_icon_icon_border_width',
	$eltd_slide_title_separator_with_icon_icon_border_width
);

$eltd_slide_title_separator_with_icon_icon_colour_group = new MooseElatedGroup(
	esc_html__( 'Icon Color', 'moose' ),
	esc_html__( 'Define icon, icon background and icon hover colors', 'moose' )
);
$eltd_slide_title_separator_with_icon_container->addChild(
	'eltd_slide_title_separator_with_icon_icon_colour_group',
	$eltd_slide_title_separator_with_icon_icon_colour_group
);

$row3 = new MooseElatedRow();
$eltd_slide_title_separator_with_icon_icon_colour_group->addChild(
	'row3',
	$row3
);

$eltd_slide_title_separator_with_icon_icon_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_slide_title_separator_with_icon_icon_color',
	'',
	esc_html__( 'Icon Color', 'moose' ),
	''
);
$row3->addChild(
	'eltd_slide_title_separator_with_icon_icon_color',
	$eltd_slide_title_separator_with_icon_icon_color
);

$eltd_slide_title_separator_with_icon_icon_border_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_slide_title_separator_with_icon_icon_border_color',
	'',
	esc_html__( 'Icon Border Color', 'moose' ),
	''
);
$row3->addChild(
	'eltd_slide_title_separator_with_icon_icon_border_color',
	$eltd_slide_title_separator_with_icon_icon_border_color
);

$eltd_slide_title_separator_with_icon_icon_background_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_slide_title_separator_with_icon_icon_background_color',
	'',
	esc_html__( 'Icon Background Color', 'moose' ),
	''
);
$row3->addChild(
	'eltd_slide_title_separator_with_icon_icon_background_color',
	$eltd_slide_title_separator_with_icon_icon_background_color
);

$eltd_slide_title_separator_with_icon_icon_hover_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_slide_title_separator_with_icon_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'moose' ),
	''
);
$row3->addChild(
	'eltd_slide_title_separator_with_icon_icon_hover_color',
	$eltd_slide_title_separator_with_icon_icon_hover_color
);

$row4 = new MooseElatedRow( true );
$eltd_slide_title_separator_with_icon_icon_colour_group->addChild(
	'row4',
	$row4
);

$eltd_slide_title_separator_with_icon_icon_hover_border_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_slide_title_separator_with_icon_icon_hover_border_color',
	'',
	esc_html__( 'Icon Hover Border Color', 'moose' ),
	''
);
$row4->addChild(
	'eltd_slide_title_separator_with_icon_icon_hover_border_color',
	$eltd_slide_title_separator_with_icon_icon_hover_border_color
);

$eltd_slide_title_separator_with_icon_icon_hover_background_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_slide_title_separator_with_icon_icon_hover_background_color',
	'',
	esc_html__( 'Icon Hover Background Color', 'moose' ),
	''
);
$row4->addChild(
	'eltd_slide_title_separator_with_icon_icon_hover_background_color',
	$eltd_slide_title_separator_with_icon_icon_hover_background_color
);

//Separator with custom icon container
$eltd_slide_title_separator_with_custom_icon_container = new MooseElatedContainer(
	'eltd_slide_title_separator_with_custom_icon_container',
	'eltd_slide_title_separator_type',
	'',
	array( 'without_icon', 'with_icon' )
);
$eltd_slide_title_separator_container->addChild(
	'eltd_slide_title_separator_with_custom_icon_container',
	$eltd_slide_title_separator_with_custom_icon_container
);

$eltd_slide_title_separator_with_custom_icon_custom_icon = new MooseElatedMetaField(
	'image',
	'eltd_slide_title_separator_with_custom_icon_custom_icon',
	'',
	esc_html__( 'Custom Icon', 'moose' ),
	''
);
$eltd_slide_title_separator_with_custom_icon_container->addChild(
	'eltd_slide_title_separator_with_custom_icon_custom_icon',
	$eltd_slide_title_separator_with_custom_icon_custom_icon
);

$eltd_slide_title_separator_with_custom_icon_separator_style_group = new MooseElatedGroup(
	esc_html__( 'Style', 'moose' ),
	''
);
$eltd_slide_title_separator_with_custom_icon_container->addChild(
	'eltd_slide_title_separator_with_custom_icon_separator_style_group',
	$eltd_slide_title_separator_with_custom_icon_separator_style_group
);

$row1 = new MooseElatedRow();
$eltd_slide_title_separator_with_custom_icon_separator_style_group->addChild(
	'row1',
	$row1
);

$eltd_slide_title_separator_with_custom_icon_line_style = new MooseElatedMetaField(
	'selectsimple',
	'eltd_slide_title_separator_with_custom_icon_line_style',
	'normal',
	esc_html__( 'Separator Line Style', 'moose' ),
	'',
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' ),
		"transparent" => esc_html__( "Transparent", 'moose' )
	)
);
$row1->addChild(
	'eltd_slide_title_separator_with_custom_icon_line_style',
	$eltd_slide_title_separator_with_custom_icon_line_style
);

$eltd_slide_title_separator_with_custom_icon_separator_width = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_custom_icon_separator_width',
	'',
	esc_html__( 'Width (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_slide_title_separator_with_custom_icon_separator_width',
	$eltd_slide_title_separator_with_custom_icon_separator_width
);

$eltd_slide_title_separator_with_custom_icon_separator_margin_top = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_custom_icon_separator_margin_top',
	'',
	esc_html__( 'Top Margin (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_slide_title_separator_with_custom_icon_separator_margin_top',
	$eltd_slide_title_separator_with_custom_icon_separator_margin_top
);

$eltd_slide_title_separator_with_custom_icon_separator_margin_bottom = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_custom_icon_separator_margin_bottom',
	'',
	esc_html__( 'Bottom Margin (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_slide_title_separator_with_custom_icon_separator_margin_bottom',
	$eltd_slide_title_separator_with_custom_icon_separator_margin_bottom
);

$row2 = new MooseElatedRow( true );
$eltd_slide_title_separator_with_custom_icon_separator_style_group->addChild(
	'row2',
	$row2
);

$eltd_slide_title_separator_with_custom_icon_separator_thickness = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_custom_icon_separator_thickness',
	'',
	esc_html__( 'Thickness (px)', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_title_separator_with_custom_icon_separator_thickness',
	$eltd_slide_title_separator_with_custom_icon_separator_thickness
);

$eltd_slide_title_separator_with_custom_icon_separator_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_slide_title_separator_with_custom_icon_separator_color',
	'',
	esc_html__( 'Separator Color', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_title_separator_with_custom_icon_separator_color',
	$eltd_slide_title_separator_with_custom_icon_separator_color
);

$eltd_slide_title_separator_with_custom_icon_icon_postition = new MooseElatedMetaField(
	'selectsimple',
	'eltd_slide_title_separator_with_custom_icon_icon_postition',
	'normal',
	esc_html__( 'Icon Position', 'moose' ),
	'',
	array(
		'center' => esc_html__( 'Center', 'moose' ),
		'left' => esc_html__( 'Left', 'moose' ),
		'right' => esc_html__( 'Right', 'moose' )
	)
);
$row2->addChild(
	'eltd_slide_title_separator_with_custom_icon_icon_postition',
	$eltd_slide_title_separator_with_custom_icon_icon_postition
);

$eltd_slide_title_separator_with_custom_icon_icon_margin = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_title_separator_with_custom_icon_icon_margin',
	'',
	esc_html__( 'Icon Margin (px)', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_title_separator_with_custom_icon_icon_margin',
	$eltd_slide_title_separator_with_custom_icon_icon_margin
);

//Separator Position Without Icon
$eltd_slide_title_separator_position = new MooseElatedMetaField(
	"select",
	"eltd_slide-title-separator-position",
	"both",
	esc_html__( "Position", 'moose' ),
	esc_html__( "Choose position of slider separator", 'moose' ),
	array(
		"both" => esc_html__( "Top and Bottom", 'moose' ),
		"left_right" => esc_html__( "Left and Right", 'moose' ),
		"top" => esc_html__( "Top", 'moose' ),
		"bottom" => esc_html__( "Bottom", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"both"       => "#eltdf_eltd_slide_left_right_separator_container",
			"left_right" => "#eltdf_eltd_slide_top_separator_container, #eltdf_eltd_slide_bottom_separator_container, #eltdf_eltd_slide_title_separator_align_container",
			"top"        => "#eltdf_eltd_slide_bottom_separator_container, #eltdf_eltd_slide_left_right_separator_container",
			"bottom"     => "#eltdf_eltd_slide_top_separator_container, #eltdf_eltd_slide_left_right_separator_container"
		),
		"show"       => array(
			"both"       => "#eltdf_eltd_slide_top_separator_container,#eltdf_eltd_slide_bottom_separator_container, #eltdf_eltd_slide_title_separator_align_container",
			"top"        => "#eltdf_eltd_slide_top_separator_container, #eltdf_eltd_slide_title_separator_align_container",
			"bottom"     => "#eltdf_eltd_slide_bottom_separator_container, #eltdf_eltd_slide_title_separator_align_container",
			"left_right" => "#eltdf_eltd_slide_left_right_separator_container"
		)
	)
);
$eltd_slide_title_separator_without_icon_container->addChild(
	"eltd_slide-title-separator-position",
	$eltd_slide_title_separator_position
);

$eltd_slide_top_separator_container = new MooseElatedContainer(
	"eltd_slide_top_separator_container",
	"eltd_slide-title-separator-position",
	"",
	array( "bottom", "left_right" )
);
$eltd_slide_title_separator_without_icon_container->addChild(
	"eltd_slide_top_separator_container",
	$eltd_slide_top_separator_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Top Separator Margins", 'moose' ),
	esc_html__( "Enter top separator margins", 'moose' )
);
$eltd_slide_top_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_slide_top_separator_margin_top = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-top-separator-margin-top",
	"",
	esc_html__( "Margin Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-top-separator-margin-top",
	$eltd_slide_top_separator_margin_top
);

$eltd_slide_top_separator_margin_bottom = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-top-separator-margin-bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-top-separator-margin-bottom",
	$eltd_slide_top_separator_margin_bottom
);

$eltd_slide_bottom_separator_container = new MooseElatedContainer(
	"eltd_slide_bottom_separator_container",
	"eltd_slide-title-separator-position",
	"",
	array( "top", "left_right" )
);
$eltd_slide_title_separator_without_icon_container->addChild(
	"eltd_slide_bottom_separator_container",
	$eltd_slide_bottom_separator_container
);

$group2 = new MooseElatedGroup(
	esc_html__( "Bottom Separator Margins", 'moose' ),
	esc_html__( "Enter bottom separator margins", 'moose' )
);
$eltd_slide_bottom_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$eltd_slide_bottom_separator_margin_top = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-bottom-separator-margin-top",
	"",
	esc_html__( "Margin Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-bottom-separator-margin-top",
	$eltd_slide_bottom_separator_margin_top
);

$eltd_slide_bottom_separator_margin_bottom = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-bottom-separator-margin-bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-bottom-separator-margin-bottom",
	$eltd_slide_bottom_separator_margin_bottom
);

$eltd_slide_left_right_separator_container = new MooseElatedContainer(
	"eltd_slide_left_right_separator_container",
	"eltd_slide-title-separator-position",
	"",
	array( "top", "bottom", "both" )
);
$eltd_slide_title_separator_without_icon_container->addChild(
	'eltd_slide_left_right_separator_container',
	$eltd_slide_left_right_separator_container
);

$eltd_slide_left_right_separator_style = new MooseElatedMetaField(
	'select',
	'eltd_slide_left_right_separator_style',
	'solid',
	esc_html__( 'Line Style', 'moose' ),
	esc_html__( 'Separator Line Style', 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' )
	)
);
$eltd_slide_left_right_separator_container->addChild(
	'eltd_slide_left_right_separator_style',
	$eltd_slide_left_right_separator_style
);

$group3 = new MooseElatedGroup(
	esc_html__( 'Left/Right Separator Margins', 'moose' ),
	esc_html__( 'Enter left and right separator margins', 'moose' )
);
$eltd_slide_left_right_separator_container->addChild(
	'group3',
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	'row1',
	$row1
);

$eltd_slide_left_separator_margin_right = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_left_separator_margin_right",
	"",
	esc_html__( "Left Separator Margin Right (px)", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_left_separator_margin_right",
	$eltd_slide_left_separator_margin_right
);

$eltd_slide_right_separator_margin_left = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_right_separator_margin_left",
	"",
	esc_html__( "Right Separator Margin Left (px)", 'moose' ),
	""
);
$row1->addChild(
	"eltd_slide_right_separator_margin_left",
	$eltd_slide_right_separator_margin_left
);

$group4 = new MooseElatedGroup(
	esc_html__( 'Dots on Line End', 'moose' ),
	esc_html__( 'Add dots on line end', 'moose' )
);
$eltd_slide_left_right_separator_container->addChild(
	'group4',
	$group4
);

$row2 = new MooseElatedRow();
$group4->addChild(
	'row2',
	$row2
);

$eltd_slide_left_right_separator_linedots = new MooseElatedMetaField(
	'selectsimple',
	'eltd_slide_left_right_separator_linedots',
	'no',
	esc_html__( 'Dots on line end', 'moose' ),
	'',
	array(
		'no' => esc_html__( 'No', 'moose' ),
		'yes' => esc_html__( 'Yes', 'moose' ),
	)
);
$row2->addChild(
	'eltd_slide_left_right_separator_linedots',
	$eltd_slide_left_right_separator_linedots
);

$eltd_slide_left_right_separator_line_dots_size = new MooseElatedMetaField(
	'textsimple',
	'eltd_slide_left_right_separator_line_dots_size',
	'',
	esc_html__( 'Dots Size (px)', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_left_right_separator_line_dots_size',
	$eltd_slide_left_right_separator_line_dots_size
);

$eltd_slide_left_right_separator_dots_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_slide_left_right_separator_dots_color',
	'',
	esc_html__( 'Dots Color', 'moose' ),
	''
);
$row2->addChild(
	'eltd_slide_left_right_separator_dots_color',
	$eltd_slide_left_right_separator_dots_color
);

//Separator Position With Icon
$eltd_slide_title_separator_with_icon_position = new MooseElatedMetaField(
	"select",
	"eltd_slide_title_separator_with_icon_position",
	"both",
	esc_html__( "Position", 'moose' ),
	esc_html__( "Choose position of slider separator", 'moose' ),
	array(
		"top" => esc_html__( "Top", 'moose' ),
		"bottom" => esc_html__( "Bottom", 'moose' )
	)
);
$eltd_slide_title_separator_with_icon_container->addChild(
	"eltd_slide_title_separator_with_icon_position",
	$eltd_slide_title_separator_with_icon_position
);

//Separator Position With Custom Icon
$eltd_slide_title_separator_with_custom_icon_position = new MooseElatedMetaField(
	"select",
	"eltd_slide_title_separator_with_custom_icon_position",
	"both",
	esc_html__( "Position", 'moose' ),
	esc_html__( "Choose position of slider separator", 'moose' ),
	array(
		"top" => esc_html__( "Top", 'moose' ),
		"bottom" => esc_html__( "Bottom", 'moose' )
	)
);
$eltd_slide_title_separator_with_custom_icon_container->addChild(
	'eltd_slide_title_separator_with_custom_icon_position',
	$eltd_slide_title_separator_with_custom_icon_position
);

//Slide Subtitle

$eltdSlideSubtitle = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide Subtitle Style", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_subtitle",
	$eltdSlideSubtitle
);

$subtitle_text_group = new MooseElatedGroup(
	esc_html__( "Subtitle Text Style", 'moose' ),
	esc_html__( "Define styles for subtitle text", 'moose' )
);
$eltdSlideSubtitle->addChild(
	"subtitle_text_group",
	$subtitle_text_group
);
$row1 = new MooseElatedRow();
$subtitle_text_group->addChild(
	"row1",
	$row1
);
$subtitle_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-subtitle-color",
	"",
	esc_html__( "Font Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-subtitle-color",
	$subtitle_color
);
$subtitle_fontsize = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-subtitle-font-size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-subtitle-font-size",
	$subtitle_fontsize
);
$subtitle_lineheight = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-subtitle-line-height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-subtitle-line-height",
	$subtitle_lineheight
);
$subtitle_letterspacing = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-subtitle-letter-spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-subtitle-letter-spacing",
	$subtitle_letterspacing
);

$row2 = new MooseElatedRow( true );
$subtitle_text_group->addChild(
	"row2",
	$row2
);
$subtitle_google_fonts = new MooseElatedMetaField(
	"fontsimple",
	"eltd_slide-subtitle-font-family",
	"",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-subtitle-font-family",
	$subtitle_google_fonts
);
$subtitle_fontstyle = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-subtitle-font-style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"eltd_slide-subtitle-font-style",
	$subtitle_fontstyle
);
$subtitle_fontweight = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-subtitle-font-weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"eltd_slide-subtitle-font-weight",
	$subtitle_fontweight
);
$subtitle_transform = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-subtitle-text-transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"eltd_slide-subtitle-text-transform",
	$subtitle_transform
);

$subtitle_background_group = new MooseElatedGroup(
	esc_html__( "Background", 'moose' ),
	esc_html__( "Define background for subtitle", 'moose' )
);
$eltdSlideSubtitle->addChild(
	"subtitle_background_group",
	$subtitle_background_group
);
$row1 = new MooseElatedRow( true );
$subtitle_background_group->addChild(
	"row1",
	$row1
);
$subtitle_background_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-subtitle-background-color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-subtitle-background-color",
	$subtitle_background_color
);
$subtitle_background_color_transparency = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-subtitle-bg-color-transparency",
	"",
	esc_html__( "Background Color Transparency (values: 0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-subtitle-bg-color-transparency",
	$subtitle_background_color_transparency
);

$subtitle_margin_group = new MooseElatedGroup(
	esc_html__( "Margin Bottom (px)", 'moose' ),
	esc_html__( "Enter value for subtitle bottom margin (default value is 14)", 'moose' )
);
$eltdSlideSubtitle->addChild(
	"subtitle_margin_group",
	$subtitle_margin_group
);
$row1 = new MooseElatedRow( true );
$subtitle_margin_group->addChild(
	"row1",
	$row1
);
$subtitle_margin_bottom = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_subtitle_margin_bottom",
	"",
	"",
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_subtitle_margin_bottom",
	$subtitle_margin_bottom
);

$subtitle_padding_group = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define padding for subtitle", 'moose' )
);
$eltdSlideSubtitle->addChild(
	"subtitle_padding_group",
	$subtitle_padding_group
);
$row1 = new MooseElatedRow( true );
$subtitle_padding_group->addChild(
	"row1",
	$row1
);
$subtitle_padding_top = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_subtitle_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_subtitle_padding_top",
	$subtitle_padding_top
);
$subtitle_padding_right = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_subtitle_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_subtitle_padding_right",
	$subtitle_padding_right
);
$subtitle_padding_bottom = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_subtitle_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_subtitle_padding_bottom",
	$subtitle_padding_bottom
);
$subtitle_padding_left = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_subtitle_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_subtitle_padding_left",
	$subtitle_padding_left
);

$slide_subtitle_like_separator = new MooseElatedMetaField(
	"yesno",
	"slide_subtitle_like_separator",
	"no",
	esc_html__( "Separator Around Subtitle", 'moose' ),
	esc_html__( "Enable separator around subtitle", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_slide_subtitle_separator_container"
	)
);
$eltdSlideSubtitle->addChild(
	"slide_subtitle_like_separator",
	$slide_subtitle_like_separator
);

$slide_subtitle_separator_container = new MooseElatedContainer(
	"slide_subtitle_separator_container",
	"slide_subtitle_like_separator",
	"no"
);
$eltdSlideSubtitle->addChild(
	"slide_subtitle_separator_container",
	$slide_subtitle_separator_container
);

$slide_subtitle_separator_group = new MooseElatedGroup(
	esc_html__( "Separator Style", 'moose' ),
	esc_html__( "Define style for separator around subtitle", 'moose' )
);
$slide_subtitle_separator_container->addChild(
	"slide_subtitle_separator_group",
	$slide_subtitle_separator_group
);

$row1 = new MooseElatedRow();
$slide_subtitle_separator_group->addChild(
	"row1",
	$row1
);

$slide_subtitle_separator_color = new MooseElatedMetaField(
	"colorsimple",
	"slide_subtitle_separator_color",
	"",
	esc_html__( "Separator Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"slide_subtitle_separator_color",
	$slide_subtitle_separator_color
);

$slide_subtitle_separator_transparency = new MooseElatedMetaField(
	"textsimple",
	"slide_subtitle_separator_transparency",
	"",
	esc_html__( "Separator Transparency (values 0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"slide_subtitle_separator_transparency",
	$slide_subtitle_separator_transparency
);

$slide_subtitle_separator_width = new MooseElatedMetaField(
	"textsimple",
	"slide_subtitle_separator_width",
	"",
	esc_html__( "Separator Width (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"slide_subtitle_separator_width",
	$slide_subtitle_separator_width
);

$slide_subtitle_separator_thickness = new MooseElatedMetaField(
	"textsimple",
	"slide_subtitle_separator_thickness",
	"",
	esc_html__( "Separator Thickness (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"slide_subtitle_separator_thickness",
	$slide_subtitle_separator_thickness
);

$row2 = new MooseElatedRow();
$slide_subtitle_separator_group->addChild(
	"row2",
	$row2
);

$slide_subtitle_separator_style = new MooseElatedMetaField(
	"selectsimple",
	"slide_subtitle_separator_style",
	"",
	esc_html__( "Separator Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' )
	)
);
$row2->addChild(
	"slide_subtitle_separator_style",
	$slide_subtitle_separator_style
);

$slide_subtitle_separator_position = new MooseElatedMetaField(
	"selectsimple",
	"slide_subtitle_separator_position",
	"",
	esc_html__( "Separator on Subtitle Side", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' ),
		"both" => esc_html__( "Both", 'moose' )
	)
);
$row2->addChild(
	"slide_subtitle_separator_position",
	$slide_subtitle_separator_position
);

$slide_subtitle_separator_margin = new MooseElatedMetaField(
	"textsimple",
	"slide_subtitle_separator_margin",
	"",
	esc_html__( "Separators Margins From Subtitle", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"slide_subtitle_separator_margin",
	$slide_subtitle_separator_margin
);

//Slide Text

$eltdSlideText = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide Text Style", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_text",
	$eltdSlideText
);

$text_common_text_group = new MooseElatedGroup(
	esc_html__( 'Text Color and Size', 'moose' ),
	esc_html__( 'Define text color and size', 'moose' )
);
$eltdSlideText->addChild(
	'text_common_text_group',
	$text_common_text_group
);

$row1 = new MooseElatedRow();
$text_common_text_group->addChild(
	'row1',
	$row1
);

$text_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-text-color",
	"",
	esc_html__( "Font Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-text-color",
	$text_color
);
$text_background_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-text-background-color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-text-background-color",
	$text_background_color
);
$text_fontsize = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-text-font-size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-text-font-size",
	$text_fontsize
);
$text_lineheight = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-text-line-height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-text-line-height",
	$text_lineheight
);

$text_separator_text = new MooseElatedMetaField(
	'yesno',
	'text_separator_text',
	'no',
	esc_html__( 'Separator Around Text', 'moose' ),
	esc_html__( 'Do you want to have a separator around text', 'moose' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '#eltdf_text_without_separator_container',
		'dependence_show_on_yes' => '#eltdf_text_with_separator_container'
	)
);
$eltdSlideText->addChild(
	'text_separator_text',
	$text_separator_text
);

$text_without_separator_container = new MooseElatedContainerNoStyle(
	'text_without_separator_container',
	'text_separator_text',
	'yes'
);
$eltdSlideText->addChild(
	'text_without_separator_container',
	$text_without_separator_container
);

$text_without_separator_padding_group = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define padding for text", 'moose' )
);
$text_without_separator_container->addChild(
	"text_without_separator_padding_group",
	$text_without_separator_padding_group
);

$row1 = new MooseElatedRow( true );
$text_without_separator_padding_group->addChild(
	"row1",
	$row1
);

$text_padding_top = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_text_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_text_padding_top",
	$text_padding_top
);
$text_padding_right = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_text_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_text_padding_right",
	$text_padding_right
);
$text_padding_bottom = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_text_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_text_padding_bottom",
	$text_padding_bottom
);
$text_padding_left = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_text_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_text_padding_left",
	$text_padding_left
);

$text_without_separator_text_group = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define styles for text text", 'moose' )
);
$text_without_separator_container->addChild(
	"text_without_separator_text_group",
	$text_without_separator_text_group
);

$row1 = new MooseElatedRow();
$text_without_separator_text_group->addChild(
	"row1",
	$row1
);

$text_letterspacing = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-text-letter-spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-text-letter-spacing",
	$text_letterspacing
);

$row2 = new MooseElatedRow( true );
$text_without_separator_text_group->addChild(
	"row2",
	$row2
);

$text_google_fonts = new MooseElatedMetaField(
	"fontsimple",
	"eltd_slide-text-font-family",
	"",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-text-font-family",
	$text_google_fonts
);
$text_fontstyle = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-text-font-style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"eltd_slide-text-font-style",
	$text_fontstyle
);
$text_fontweight = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-text-font-weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"eltd_slide-text-font-weight",
	$text_fontweight
);
$text_transform = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-text-text-transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"eltd_slide-text-text-transform",
	$text_transform
);

$text_without_separator_background_group = new MooseElatedGroup(
	esc_html__( "Background", 'moose' ),
	esc_html__( "Define background for text", 'moose' )
);
$text_without_separator_container->addChild(
	"text_without_separator_background_group",
	$text_without_separator_background_group
);

$row1 = new MooseElatedRow( true );
$text_without_separator_background_group->addChild(
	"row1",
	$row1
);

$text_background_color_transparency = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-text-bg-color-transparency",
	"",
	esc_html__( "Background Color Transparency (values 0-1)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-text-bg-color-transparency",
	$text_background_color_transparency
);

$text_with_separator_container = new MooseElatedContainer(
	'text_with_separator_container',
	'text_separator_text',
	'no'
);
$eltdSlideText->addChild(
	'text_with_separator_container',
	$text_with_separator_container
);

$text_with_separator_border_styles = new MooseElatedGroup(
	esc_html__( 'Separator Line Style', 'moose' ),
	esc_html__( 'Define separator line style', 'moose' )
);
$text_with_separator_container->addChild(
	'text_with_separator_border_styles',
	$text_with_separator_border_styles
);

$row1 = new MooseElatedRow();
$text_with_separator_border_styles->addChild(
	'row1',
	$row1
);

$eltd_separator_line_border_style = new MooseElatedMetaField(
	'selectsimple',
	'eltd_separator_line_border_style',
	'solid',
	esc_html__( 'Line Border Style', 'moose' ),
	'',
	array(
		'solid' => esc_html__( 'Solid', 'moose' ),
		'dashed' => esc_html__( 'Dashed', 'moose' ),
		'dotted' => esc_html__( 'Dotted', 'moose' ),
		'transparent' => esc_html__( 'Transparent', 'moose' )
	)
);
$row1->addChild(
	'eltd_separator_line_border_style',
	$eltd_separator_line_border_style
);

$eltd_separator_line_width = new MooseElatedMetaField(
	'textsimple',
	'eltd_separator_line_width',
	'',
	esc_html__( 'Line Width (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_line_width',
	$eltd_separator_line_width
);

$eltd_separator_line_thickness = new MooseElatedMetaField(
	'textsimple',
	'eltd_separator_line_thickness',
	'',
	esc_html__( 'Line Thickness (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_line_thickness',
	$eltd_separator_line_thickness
);

$eltd_separator_line_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_separator_line_color',
	'',
	esc_html__( 'Line Color', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_line_color',
	$eltd_separator_line_color
);

$text_with_separator_boxed = new MooseElatedGroup(
	esc_html__( 'Boxed Text', 'moose' ),
	esc_html__( 'Add box around text', 'moose' )
);
$text_with_separator_container->addChild(
	'text_with_separator_boxed',
	$text_with_separator_boxed
);

$row1 = new MooseElatedRow();
$text_with_separator_boxed->addChild(
	'row1',
	$row1
);

$eltd_separator_text_in_box = new MooseElatedMetaField(
	'selectsimple',
	'eltd_separator_text_in_box',
	'no',
	esc_html__( 'Text in Box', 'moose' ),
	'',
	array(
		'yes' => esc_html__( 'Yes', 'moose' ),
		'no' => esc_html__( 'No', 'moose' )
	)
);
$row1->addChild(
	'eltd_separator_text_in_box',
	$eltd_separator_text_in_box
);

$eltd_separator_box_border_style = new MooseElatedMetaField(
	'selectsimple',
	'eltd_separator_box_border_style',
	'solid',
	esc_html__( 'Box Border Style', 'moose' ),
	'',
	array(
		'solid' => esc_html__( 'Solid', 'moose' ),
		'dashed' => esc_html__( 'Dashed', 'moose' ),
		'dotted' => esc_html__( 'Dotted', 'moose' ),
		'transparent' => esc_html__( 'Transparent', 'moose' )
	)
);
$row1->addChild(
	'eltd_separator_box_border_style',
	$eltd_separator_box_border_style
);

$eltd_separator_box_border_width = new MooseElatedMetaField(
	'textsimple',
	'eltd_separator_box_border_width',
	'',
	esc_html__( 'Box Border Width (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_box_border_width',
	$eltd_separator_box_border_width
);

$eltd_separator_box_border_radius = new MooseElatedMetaField(
	'textsimple',
	'eltd_separator_box_border_radius',
	'',
	esc_html__( 'Box Border Radius (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_box_border_radius',
	$eltd_separator_box_border_radius
);

$row2 = new MooseElatedRow( true );
$text_with_separator_boxed->addChild(
	'row2',
	$row2
);

$eltd_separator_box_border_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_separator_box_border_color',
	'',
	esc_html__( 'Box Border Color', 'moose' ),
	''
);
$row2->addChild(
	'eltd_separator_box_border_color',
	$eltd_separator_box_border_color
);

$text_with_separator_position = new MooseElatedGroup(
	esc_html__( 'Text Position', 'moose' ),
	esc_html__( 'Define position of text', 'moose' )
);
$text_with_separator_container->addChild(
	'text_with_separator_position',
	$text_with_separator_position
);

$row1 = new MooseElatedRow();
$text_with_separator_position->addChild(
	'row1',
	$row1
);

$eltd_separator_text_position = new MooseElatedMetaField(
	'selectsimple',
	'eltd_separator_text_position',
	'center',
	esc_html__( 'Text position', 'moose' ),
	'',
	array(
		'center' => esc_html__( 'Center', 'moose' ),
		'left' => esc_html__( 'Left', 'moose' ),
		'right' => esc_html__( 'Right', 'moose' )
	)
);
$row1->addChild(
	'eltd_separator_text_position',
	$eltd_separator_text_position
);

$eltd_separator_text_leftright_padding = new MooseElatedMetaField(
	'textsimple',
	'eltd_separator_text_leftright_padding',
	'',
	esc_html__( 'Left/Right Text padding (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_text_leftright_padding',
	$eltd_separator_text_leftright_padding
);

$eltd_separator_text_top_margin = new MooseElatedMetaField(
	'textsimple',
	'eltd_separator_text_top_margin',
	'',
	esc_html__( 'Top Margin (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_text_top_margin',
	$eltd_separator_text_top_margin
);

$eltd_separator_text_bottom_margin = new MooseElatedMetaField(
	'textsimple',
	'eltd_separator_text_bottom_margin',
	'',
	esc_html__( 'Bottom Margin (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_text_bottom_margin',
	$eltd_separator_text_bottom_margin
);

$row2 = new MooseElatedRow( true );
$text_with_separator_position->addChild(
	'row2',
	$row2
);

$eltd_separator_box_margin = new MooseElatedMetaField(
	'textsimple',
	'eltd_separator_box_margin',
	'',
	esc_html__( 'Box Margins Left/Right (px)', 'moose' ),
	''
);
$row2->addChild(
	'eltd_separator_box_margin',
	$eltd_separator_box_margin
);

$text_with_separator_linedots = new MooseElatedGroup(
	esc_html__( 'Dots on Line End', 'moose' ),
	esc_html__( 'Add dots on line end', 'moose' )
);
$text_with_separator_container->addChild(
	'text_with_separator_linedots',
	$text_with_separator_linedots
);

$row1 = new MooseElatedRow();
$text_with_separator_linedots->addChild(
	'row1',
	$row1
);

$eltd_separator_linedots = new MooseElatedMetaField(
	'selectsimple',
	'eltd_separator_linedots',
	'no',
	esc_html__( 'Dots on line end', 'moose' ),
	'',
	array(
		'no' => esc_html__( 'No', 'moose' ),
		'yes' => esc_html__( 'Yes', 'moose' ),
	)
);
$row1->addChild(
	'eltd_separator_linedots',
	$eltd_separator_linedots
);

$eltd_separator_line_dots_size = new MooseElatedMetaField(
	'textsimple',
	'eltd_separator_line_dots_size',
	'',
	esc_html__( 'Dots Size (px)', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_line_dots_size',
	$eltd_separator_line_dots_size
);

$eltd_separator_dots_color = new MooseElatedMetaField(
	'colorsimple',
	'eltd_separator_dots_color',
	'',
	esc_html__( 'Dots Color', 'moose' ),
	''
);
$row1->addChild(
	'eltd_separator_dots_color',
	$eltd_separator_dots_color
);

//Slide Buttons
//Button 1
$eltdSlideButtons = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide Buttons Style", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_buttons",
	$eltdSlideButtons
);

$button1_section = new MooseElatedTitle(
	"button1_section",
	esc_html__( "Button 1", 'moose' )
);
$eltdSlideButtons->addChild(
	"button1_section",
	$button1_section
);

$button1_group2 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text style", 'moose' )
);
$eltdSlideButtons->addChild(
	"button1_group2",
	$button1_group2
);

$row1 = new MooseElatedRow();
$button1_group2->addChild(
	"row1",
	$row1
);
$button1_font_family = new MooseElatedMetaField(
	"fontsimple",
	"eltd_slide-button_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_font_family",
	$button1_font_family
);
$button1_font_size = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_font_size",
	"",
	esc_html__( "Text Size(px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_font_size",
	$button1_font_size
);
$button1_font_style = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row1->addChild(
	"eltd_slide-button_font_style",
	$button1_font_style
);
$button1_font_weight = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"eltd_slide-button_font_weight",
	$button1_font_weight
);

$row2 = new MooseElatedRow();
$button1_group2->addChild(
	"row2",
	$row2
);

$button1_letter_spacing = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_letter_spacing",
	"",
	esc_html__( "Letter Spacing(px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-button_letter_spacing",
	$button1_letter_spacing
);

$button1_line_height = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-button_line_height",
	$button1_line_height
);

$button1_text_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-button_text_color",
	$button1_text_color
);

$button1_text_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-button_text_hover_color",
	$button1_text_hover_color
);

$row3 = new MooseElatedRow();
$button1_group2->addChild(
	"row3",
	$row3
);

$button1_text_align = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button_text_align",
	"",
	esc_html__( "Text Align", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$row3->addChild(
	"eltd_slide-button_text_align",
	$button1_text_align
);
$button1_text_transform = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"eltd_slide-button_text_transform",
	$button1_text_transform
);

$button1_group3 = new MooseElatedGroup(
	esc_html__( "Background", 'moose' ),
	esc_html__( "Define background", 'moose' )
);
$eltdSlideButtons->addChild(
	"button1_group3",
	$button1_group3
);

$row1 = new MooseElatedRow();
$button1_group3->addChild(
	"row1",
	$row1
);

$button1_background_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_background_color",
	$button1_background_color
);

$button1_background_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_background_hover_color",
	$button1_background_hover_color
);

$button1_group4 = new MooseElatedGroup(
	esc_html__( "Size", 'moose' ),
	esc_html__( "Define button size", 'moose' )
);
$eltdSlideButtons->addChild(
	"button1_group4",
	$button1_group4
);

$row1 = new MooseElatedRow();
$button1_group4->addChild(
	"row1",
	$row1
);

$button1_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_width",
	$button1_width
);

$button1_height = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_height",
	$button1_height
);

$button1_group5 = new MooseElatedGroup(
	esc_html__( "Border", 'moose' ),
	esc_html__( "Define border style", 'moose' )
);
$eltdSlideButtons->addChild(
	"button1_group5",
	$button1_group5
);

$row1 = new MooseElatedRow();
$button1_group5->addChild(
	"row1",
	$row1
);

$button1_border_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_border_width",
	$button1_border_width
);

$button1_border_radius = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_border_radius",
	$button1_border_radius
);

$button1_border_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_border_color",
	$button1_border_color
);

$button1_border_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_border_hover_color",
	$button1_border_hover_color
);

$button1_margin = new MooseElatedMetaField(
	"text",
	"eltd_slide-button_margin1",
	"",
	esc_html__( "Margin (px)", 'moose' ),
	esc_html__( "Please insert margin in format (top right bottom left) i.e. 5px 5px 5px 5px", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdSlideButtons->addChild(
	"eltd_slide-button_margin1",
	$button1_margin
);

$button1_group6 = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define left/right padding for button (px)", 'moose' )
);
$eltdSlideButtons->addChild(
	"button1_group6",
	$button1_group6
);

$row1 = new MooseElatedRow( true );
$button1_group6->addChild(
	"row1",
	$row1
);

$button1_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_padding",
	"",
	"",
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_padding",
	$button1_padding
);

$button1_group7 = new MooseElatedGroup(
	esc_html__( "Button Hover Animation", 'moose' ),
	esc_html__( "Define hover animation for button", 'moose' )
);
$eltdSlideButtons->addChild(
	"button1_group7",
	$button1_group7
);

$row1 = new MooseElatedRow( true );
$button1_group7->addChild(
	"row1",
	$row1
);

$button1_hover_button_animation = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button1_hover_button_animation",
	"",
	esc_html__( "Hover Animation", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"rotate_icon" => esc_html__( "Rotate Icon", 'moose' ),
		"rotate_text_and_icon" => esc_html__( "Rotate Text and Icon", 'moose' ),
		"fill_text_rotate_icon" => esc_html__( "Fill Text and Rotate Icon", 'moose' )
	)
);
$row1->addChild(
	"eltd_slide-button1_hover_button_animation",
	$button1_hover_button_animation
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$button1_icon_pack_hide_array = array();
$button1_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$button1_icon_collections_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$button1_icon_pack_hide_array[ $dep_collection_key ] = '';
		$button1_icon_pack_hide_array["no_icon"]             = "";
		
		//button1_icon_size is input that is always shown when some icon pack is activated and hidden if 'no_icon' is selected
		$button1_icon_pack_hide_array["no_icon"] .= "#eltdf_slider_button1_icon_size,";
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$button1_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_slider_button1_icon_size, #eltdf_button1_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $button1_icon_collections_params as $button1_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $button1_icon_collections_param !== $dep_collection_object->param ) {
				$button1_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_button1_icon_' . $button1_icon_collections_param . '_container,';
			}
			
			$button1_icon_pack_hide_array["no_icon"] .= '#eltdf_button1_icon_' . $button1_icon_collections_param . '_container,';
		}
		
		//remove remaining ',' character
		$button1_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$button1_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
		$button1_icon_pack_hide_array["no_icon"]             = rtrim(
			$button1_icon_pack_hide_array["no_icon"],
			','
		);
	}
	
}

$button1_icon_pack = new MooseElatedMetaField(
	"select",
	"button1_icon_pack",
	"no_icon",
	esc_html__( "Button 1 Icon Pack", 'moose' ),
	esc_html__( "Choose icon pack for first button", 'moose' ),
	$moose_elated_icon_collections->getIconCollectionsEmpty( "no_icon" ),
	array(
		"dependence" => true,
		"hide"       => $button1_icon_pack_hide_array,
		"show"       => $button1_icon_pack_show_array
	)
);

$eltdSlideButtons->addChild(
	"button1_icon_pack",
	$button1_icon_pack
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
		
		$button1_icon_hide_values   = $icon_collections_keys;
		$button1_icon_hide_values[] = "no_icon";
		$button1_icon_container     = new MooseElatedContainer(
			"button1_icon_" . $collection_object->param . "_container",
			"button1_icon_pack",
			"",
			$button1_icon_hide_values
		);
		$button1_icon               = new MooseElatedMetaField(
			"select",
			"button1_icon_" . $collection_object->param,
			"",
			esc_html__( "Button 1 Icon", 'moose' ),
			esc_html__( "Choose First Button Icon", 'moose' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$button1_icon_container->addChild(
			"button1_icon_" . $collection_object->param,
			$button1_icon
		);
		
		$eltdSlideButtons->addChild(
			"button1_icon_" . $collection_object->param . "_container",
			$button1_icon_container
		);
	}
	
}

$slider_button1_icon_size = new MooseElatedMetaField(
	"text",
	"slider_button1_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "Define size for icon in button", 'moose' ),
	array(),
	array( "col_width" => 3 ),
	"button1_icon_pack",
	array( "no_icon" )
);
$eltdSlideButtons->addChild(
	"slider_button1_icon_size",
	$slider_button1_icon_size
);

//Button 2
$button2_section = new MooseElatedTitle(
	"button2_section",
	esc_html__( "Button 2", 'moose' )
);
$eltdSlideButtons->addChild(
	"button2_section",
	$button2_section
);

$button2_group2 = new MooseElatedGroup(
	esc_html__( "Text Style", 'moose' ),
	esc_html__( "Define text style", 'moose' )
);
$eltdSlideButtons->addChild(
	"button2_group2",
	$button2_group2
);
$row1 = new MooseElatedRow();
$button2_group2->addChild(
	"row1",
	$row1
);

$button2_font_family = new MooseElatedMetaField(
	"fontsimple",
	"eltd_slide-button_font_family2",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_font_family2",
	$button2_font_family
);
$button2_font_size = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_font_size2",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_font_size2",
	$button2_font_size
);
$button2_font_style = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button_font_style2",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row1->addChild(
	"eltd_slide-button_font_style2",
	$button2_font_style
);
$button2_font_weight = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button_font_weight2",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row1->addChild(
	"eltd_slide-button_font_weight2",
	$button2_font_weight
);

$row2 = new MooseElatedRow();
$button2_group2->addChild(
	"row2",
	$row2
);
$button2_letter_spacing = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_letter_spacing2",
	"",
	esc_html__( "Letter Spacing(px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-button_letter_spacing2",
	$button2_letter_spacing
);
$button2_line_height = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_line_height2",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-button_line_height2",
	$button2_line_height
);
$button2_text_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_text_color2",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-button_text_color2",
	$button2_text_color
);
$button2_text_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_text_hover_color2",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-button_text_hover_color2",
	$button2_text_hover_color
);

$row3 = new MooseElatedRow();
$button2_group2->addChild(
	"row3",
	$row3
);
$button2_text_align = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button_text_align2",
	"",
	esc_html__( "Text Align", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$row3->addChild(
	"eltd_slide-button_text_align2",
	$button2_text_align
);
$button2_text_transform = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button_text_transform2",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"eltd_slide-button_text_transform2",
	$button2_text_transform
);

$button2_group3 = new MooseElatedGroup(
	esc_html__( "Background", 'moose' ),
	esc_html__( "Define background", 'moose' )
);
$eltdSlideButtons->addChild(
	"button2_group3",
	$button2_group3
);
$row4 = new MooseElatedRow();
$button2_group3->addChild(
	"row4",
	$row4
);
$button2_background_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_background_color2",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"eltd_slide-button_background_color2",
	$button2_background_color
);
$button2_background_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_background_hover_color2",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row4->addChild(
	"eltd_slide-button_background_hover_color2",
	$button2_background_hover_color
);

$button2_group4 = new MooseElatedGroup(
	esc_html__( "Size", 'moose' ),
	esc_html__( "Define button size", 'moose' )
);
$eltdSlideButtons->addChild(
	"button2_group4",
	$button2_group4
);
$row1 = new MooseElatedRow();
$button2_group4->addChild(
	"row1",
	$row1
);
$button2_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_width2",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_width2",
	$button2_width
);
$button2_height = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_height2",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_height2",
	$button2_height
);

$button2_group5 = new MooseElatedGroup(
	esc_html__( "Border", 'moose' ),
	esc_html__( "Define border style", 'moose' )
);
$eltdSlideButtons->addChild(
	"button2_group5",
	$button2_group5
);
$row1 = new MooseElatedRow();
$button2_group5->addChild(
	"row1",
	$row1
);
$button2_border_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_border_width2",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_border_width2",
	$button2_border_width
);
$button2_border_radius = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_border_radius2",
	"",
	esc_html__( "Border Radius (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_border_radius2",
	$button2_border_radius
);
$button2_border_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_border_color2",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_border_color2",
	$button2_border_color
);
$button2_border_hover_color = new MooseElatedMetaField(
	"colorsimple",
	"eltd_slide-button_border_hover_color2",
	"",
	esc_html__( "Border Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_border_hover_color2",
	$button2_border_hover_color
);

$button2_margin = new MooseElatedMetaField(
	"text",
	"eltd_slide-button_margin2",
	"",
	esc_html__( "Margin (px)", 'moose' ),
	esc_html__( "Please insert margin in format (top right bottom left) i.e. 5px 5px 5px 5px", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltdSlideButtons->addChild(
	"eltd_slide-button_margin2",
	$button2_margin
);

$button2_group6 = new MooseElatedGroup(
	esc_html__( "Padding", 'moose' ),
	esc_html__( "Define left/right padding for button (px)", 'moose' )
);
$eltdSlideButtons->addChild(
	"button2_group6",
	$button2_group6
);

$row1 = new MooseElatedRow( true );
$button2_group6->addChild(
	"row1",
	$row1
);

$button2_padding = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-button_padding2",
	"",
	"",
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-button_padding2",
	$button2_padding
);

$button2_group7 = new MooseElatedGroup(
	esc_html__( "Button Hover Animation", 'moose' ),
	esc_html__( "Define hover animation for button", 'moose' )
);
$eltdSlideButtons->addChild(
	"button2_group7",
	$button2_group7
);

$row1 = new MooseElatedRow( true );
$button2_group7->addChild(
	"row1",
	$row1
);

$button2_hover_button_animation = new MooseElatedMetaField(
	"selectblanksimple",
	"eltd_slide-button2_hover_button_animation",
	"",
	esc_html__( "Hover Animation", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"rotate_icon" => esc_html__( "Rotate Icon", 'moose' ),
		"rotate_text_and_icon" => esc_html__( "Rotate Text and Icon", 'moose' ),
		"fill_text_rotate_icon" => esc_html__( "Fill Text and Rotate Icon", 'moose' )
	)
);
$row1->addChild(
	"eltd_slide-button2_hover_button_animation",
	$button2_hover_button_animation
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$button2_icon_pack_hide_array = array();
$button2_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$button2_icon_collections_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$button2_icon_pack_hide_array[ $dep_collection_key ] = '';
		$button2_icon_pack_hide_array["no_icon"]             = "";
		
		//button2_icon_size is input that is always shown when some icon pack is activated and hidden if 'no_icon' is selected
		$button2_icon_pack_hide_array["no_icon"] .= "#eltdf_slider_button2_icon_size,";
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$button2_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_slider_button2_icon_size,#eltdf_button2_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $button2_icon_collections_params as $button2_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $button2_icon_collections_param !== $dep_collection_object->param ) {
				$button2_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_button2_icon_' . $button2_icon_collections_param . '_container,';
			}
			
			$button2_icon_pack_hide_array["no_icon"] .= '#eltdf_button2_icon_' . $button2_icon_collections_param . '_container,';
		}
		
		//remove remaining ',' character
		$button2_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$button2_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
		$button2_icon_pack_hide_array["no_icon"]             = rtrim(
			$button2_icon_pack_hide_array["no_icon"],
			','
		);
	}
	
}

$button2_icon_pack = new MooseElatedMetaField(
	"select",
	"button2_icon_pack",
	"no_icon",
	esc_html__( "Button 2 Icon Pack", 'moose' ),
	esc_html__( "Choose icon pack for first button", 'moose' ),
	$moose_elated_icon_collections->getIconCollectionsEmpty( "no_icon" ),
	array(
		"dependence" => true,
		"hide"       => $button2_icon_pack_hide_array,
		"show"       => $button2_icon_pack_show_array
	)
);

$eltdSlideButtons->addChild(
	"button2_icon_pack",
	$button2_icon_pack
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
		
		$button2_icon_hide_values   = $icon_collections_keys;
		$button2_icon_hide_values[] = "no_icon";
		$button2_icon_container     = new MooseElatedContainer(
			"button2_icon_" . $collection_object->param . "_container",
			"button2_icon_pack",
			"",
			$button2_icon_hide_values
		);
		$button2_icon               = new MooseElatedMetaField(
			"select",
			"button2_icon_" . $collection_object->param,
			"",
			esc_html__( "Button 2 Icon", 'moose' ),
			esc_html__( "Choose First Button Icon", 'moose' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$button2_icon_container->addChild(
			"button2_icon_" . $collection_object->param,
			$button2_icon
		);
		
		$eltdSlideButtons->addChild(
			"button2_icon_" . $collection_object->param . "_container",
			$button2_icon_container
		);
	}
	
}

$slider_button2_icon_size = new MooseElatedMetaField(
	"text",
	"slider_button2_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'moose' ),
	esc_html__( "Define size for icon in button", 'moose' ),
	array(),
	array( "col_width" => 3 ),
	"button2_icon_pack",
	array( "no_icon" )
);
$eltdSlideButtons->addChild(
	"slider_button2_icon_size",
	$slider_button2_icon_size
);

//Slide Content Positioning

$eltdSlideContentPositioning = new MooseElatedMetaBox(
	"slides",
	esc_html__( "Slide Content Positioning", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"slides_content_positioning",
	$eltdSlideContentPositioning
);

$eltd_slide_predefined_content_position = new MooseElatedMetaField(
	"selectblank",
	"eltd_slide_predefined_content_position",
	"",
	esc_html__( "Predefined content position", 'moose' ),
	esc_html__( "Choose position of slide content", 'moose' ),
	array(
		""                     => "",
		"content_bottom_left" => esc_html__( "Bottom Left", 'moose' ),
		"content_bottom_right" => esc_html__( "Bottom Right", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                     => "#eltdf_eltd_slide_predefined_content_position_width_container",
			"content_bottom_left"  => "#eltdf_eltd_slide_predefined_content_position_container",
			"content_bottom_right" => "#eltdf_eltd_slide_predefined_content_position_container"
		),
		"show"       => array(
			""                     => "#eltdf_eltd_slide_predefined_content_position_container",
			"content_bottom_left"  => "#eltdf_eltd_slide_predefined_content_position_width_container",
			"content_bottom_right" => "#eltdf_eltd_slide_predefined_content_position_width_container"
		)
	)
);
$eltdSlideContentPositioning->addChild(
	"eltd_slide_predefined_content_position",
	$eltd_slide_predefined_content_position
);

$eltd_slide_predefined_content_position_width_container = new MooseElatedContainerNoStyle(
	"eltd_slide_predefined_content_position_width_container",
	"eltd_slide_predefined_content_position",
	""
);
$eltdSlideContentPositioning->addChild(
	"eltd_slide_predefined_content_position_width_container",
	$eltd_slide_predefined_content_position_width_container
);

$eltd_slide_predefined_content_position_width = new MooseElatedMetaField(
	"text",
	"eltd_slide_predefined_content_position_width",
	"",
	esc_html__( "Content Width", 'moose' ),
	esc_html__( "Enter Width for Content Area (px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltd_slide_predefined_content_position_width_container->addChild(
	"eltd_slide_predefined_content_position_width",
	$eltd_slide_predefined_content_position_width
);

$eltd_slide_predefined_content_position_width_fs = new MooseElatedMetaField(
	"text",
	"eltd_slide_predefined_content_position_width_fs",
	"",
	esc_html__( "Content Width (smaller devices)", 'moose' ),
	esc_html__( "Enter Width for Content Area (px) on smaller devices (1000px - 1350px)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltd_slide_predefined_content_position_width_container->addChild(
	"eltd_slide_predefined_content_position_width_fs",
	$eltd_slide_predefined_content_position_width_fs
);

$eltd_slide_predefined_content_position_container = new MooseElatedContainerNoStyle(
	"eltd_slide_predefined_content_position_container",
	"eltd_slide_predefined_content_position",
	"content_bottom_left",
	array( "content_bottom_left", "content_bottom_right" )
);
$eltdSlideContentPositioning->addChild(
	"eltd_slide_predefined_content_position_container",
	$eltd_slide_predefined_content_position_container
);

$eltd_slide_text_alignment = new MooseElatedMetaField(
	"selectblank",
	"eltd_slide-content-alignment",
	"",
	esc_html__( "Text Alignment", 'moose' ),
	esc_html__( "Choose an alignment for the slide text", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$eltd_slide_predefined_content_position_container->addChild(
	"eltd_slide-content-alignment",
	$eltd_slide_text_alignment
);

$eltd_slide_separate_text_graphic = new MooseElatedMetaField(
	"selectblank",
	"eltd_slide-separate-text-graphic",
	"no",
	esc_html__( "Separate Graphic and Text Positioning", 'moose' ),
	esc_html__( "Do you want to separately position graphic and text?", 'moose' ),
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#eltdf_eltd_slide_graphic_positioning_container, #eltdf_eltd_slide_general_animation_separate_container",
			"no" => "#eltdf_eltd_slide_graphic_positioning_container, #eltdf_eltd_slide_general_animation_separate_container"
		),
		"show"       => array(
			"yes" => "#eltdf_eltd_slide_graphic_positioning_container, #eltdf_eltd_slide_general_animation_separate_container"
		)
	)
);
$eltd_slide_predefined_content_position_container->addChild(
	"eltd_slide-separate-text-graphic",
	$eltd_slide_separate_text_graphic
);

$eltd_slide_content_vertical_middle = new MooseElatedMetaField(
	"yesno",
	"eltd_slide-content-vertical-middle",
	"no",
	esc_html__( "Vertically Align Content to Middle", 'moose' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_eltd_slide-content-vertical-middle-container",
		"dependence_show_on_yes" => "#eltdf_eltd_slide-content-vertical-middle-type-container"
	)
);
$eltd_slide_predefined_content_position_container->addChild(
	"eltd_slide-content-vertical-middle",
	$eltd_slide_content_vertical_middle
);

$eltd_slide_content_vertical_middle_type_container = new MooseElatedContainer(
	"eltd_slide-content-vertical-middle-type-container",
	"eltd_slide-content-vertical-middle",
	"no"
);
$eltd_slide_predefined_content_position_container->addChild(
	"eltd_slide-content-vertical-middle-type-container",
	$eltd_slide_content_vertical_middle_type_container
);

$eltd_slide_content_vertical_middle_type = new MooseElatedMetaField(
	"selectblank",
	"eltd_slide-content-vertical-middle-type",
	"",
	esc_html__( "Align Content Vertically Relative to the Height Measured From", 'moose' ),
	"",
	array(
		"bottom_of_header" => esc_html__( "Bottom of Header", 'moose' ),
		"window_top" => esc_html__( "Window Top", 'moose' )
	)
);
$eltd_slide_content_vertical_middle_type_container->addChild(
	"eltd_slide-content-vertical-middle-type",
	$eltd_slide_content_vertical_middle_type
);

$eltd_slide_vertical_content_full_width = new MooseElatedMetaField(
	"yesno",
	"eltd_slide_vertical_content_full_width",
	"no",
	esc_html__( "Content Holder Full Width", 'moose' ),
	esc_html__( "Do you want to set slide content holder to full width?", 'moose' )
);
$eltd_slide_content_vertical_middle_type_container->addChild(
	"eltd_slide_vertical_content_full_width",
	$eltd_slide_vertical_content_full_width
);

$eltd_slide_vertical_content_width = new MooseElatedMetaField(
	"text",
	"eltd_slide_vertical_content_width",
	"",
	esc_html__( "Content Width", 'moose' ),
	esc_html__( "Enter Width for Content Area (%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltd_slide_content_vertical_middle_type_container->addChild(
	"eltd_slide_vertical_content_width",
	$eltd_slide_vertical_content_width
);

$content_vertical_positioning_group = new MooseElatedGroup(
	esc_html__( "Space Around Content in Slide", 'moose' ),
	esc_html__( "Enter values for margins around slide content", 'moose' )
);
$eltd_slide_content_vertical_middle_type_container->addChild(
	"content_vertical_positioning_group",
	$content_vertical_positioning_group
);
$row1 = new MooseElatedRow( true );
$content_vertical_positioning_group->addChild(
	"row1",
	$row1
);
$eltd_slide_vertical_content_left = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_vertical_content_left",
	"",
	esc_html__( "From Left (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_vertical_content_left",
	$eltd_slide_vertical_content_left
);
$eltd_slide_vertical_content_right = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide_vertical_content_right",
	"",
	esc_html__( "From Right (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide_vertical_content_right",
	$eltd_slide_vertical_content_right
);

$eltd_slide_content_vertical_middle_container = new MooseElatedContainer(
	"eltd_slide-content-vertical-middle-container",
	"eltd_slide-content-vertical-middle",
	"yes"
);
$eltd_slide_predefined_content_position_container->addChild(
	"eltd_slide-content-vertical-middle-container",
	$eltd_slide_content_vertical_middle_container
);

$eltd_slide_content_full_width = new MooseElatedMetaField(
	"yesno",
	"eltd_slide-content-full-width",
	"no",
	esc_html__( "Content Holder Full Width", 'moose' ),
	esc_html__( "Do you want to set slide content holder to full width?", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_eltd_slide_content_width_container",
		"dependence_show_on_yes" => ""
	)
);
$eltd_slide_content_vertical_middle_container->addChild(
	"eltd_slide-content-full-width",
	$eltd_slide_content_full_width
);

$eltd_slide_content_width_container = new MooseElatedContainer(
	"eltd_slide_content_width_container",
	"eltd_slide-content-full-width",
	"yes"
);
$eltd_slide_content_vertical_middle_container->addChild(
	"eltd_slide_content_width_container",
	$eltd_slide_content_width_container
);

$eltd_slide_content_width = new MooseElatedMetaField(
	"text",
	"eltd_slide-content-width",
	"",
	esc_html__( "Content Holder Width", 'moose' ),
	esc_html__( "Enter Width for Content Holder Area (%)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$eltd_slide_content_width_container->addChild(
	"eltd_slide-content-width",
	$eltd_slide_content_width
);

$content_positioning_group = new MooseElatedGroup(
	esc_html__( "Space Around Content in Slide", 'moose' ),
	esc_html__( "Enter values for margins around slide content", 'moose' )
);
$eltd_slide_content_vertical_middle_container->addChild(
	"content_positioning_group",
	$content_positioning_group
);
$row1 = new MooseElatedRow( true );
$content_positioning_group->addChild(
	"row1",
	$row1
);
$eltd_slide_content_top = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-content-top",
	"",
	esc_html__( "From Top (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-content-top",
	$eltd_slide_content_top
);
$eltd_slide_content_left = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-content-left",
	"",
	esc_html__( "From Left (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-content-left",
	$eltd_slide_content_left
);
$eltd_slide_content_bottom = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-content-bottom",
	"",
	esc_html__( "From Bottom (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-content-bottom",
	$eltd_slide_content_bottom
);
$eltd_slide_content_right = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-content-right",
	"",
	esc_html__( "From Right (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-content-right",
	$eltd_slide_content_right
);

$eltd_slide_graphic_positioning_container = new MooseElatedContainer(
	"eltd_slide_graphic_positioning_container",
	"eltd_slide-separate-text-graphic",
	"no"
);
$eltd_slide_content_vertical_middle_container->addChild(
	"eltd_slide_graphic_positioning_container",
	$eltd_slide_graphic_positioning_container
);

$eltd_slide_graphic_alignment = new MooseElatedMetaField(
	"selectblank",
	"eltd_slide-graphic-alignment",
	"",
	esc_html__( "Graphic Alignment", 'moose' ),
	esc_html__( "Choose an alignment for the slide graphic", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$eltd_slide_graphic_positioning_container->addChild(
	"eltd_slide-graphic-alignment",
	$eltd_slide_graphic_alignment
);

$graphic_positioning_group = new MooseElatedGroup(
	esc_html__( "Graphic Positioning", 'moose' ),
	esc_html__( "Positioning for slide graphic", 'moose' )
);
$eltd_slide_graphic_positioning_container->addChild(
	"graphic_positioning_group",
	$graphic_positioning_group
);

$row1 = new MooseElatedRow();
$graphic_positioning_group->addChild(
	"row1",
	$row1
);

$eltd_slide_content_top = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-graphic-top",
	"",
	esc_html__( "From Top (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-graphic-top",
	$eltd_slide_content_top
);

$eltd_slide_content_left = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-graphic-left",
	"",
	esc_html__( "From Left (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-graphic-left",
	$eltd_slide_content_left
);

$eltd_slide_content_bottom = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-graphic-bottom",
	"",
	esc_html__( "From Bottom (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-graphic-bottom",
	$eltd_slide_content_bottom
);

$eltd_slide_content_right = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-graphic-right",
	"",
	esc_html__( "From Right (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"eltd_slide-graphic-right",
	$eltd_slide_content_right
);

$row2 = new MooseElatedRow( true );
$graphic_positioning_group->addChild(
	"row2",
	$row2
);

$eltd_slide_content_width = new MooseElatedMetaField(
	"textsimple",
	"eltd_slide-graphic-width",
	"",
	esc_html__( "Width (%)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"eltd_slide-graphic-width",
	$eltd_slide_content_width
);

$eltd_slide_content_padding = new MooseElatedMetaField(
	"text",
	"eltd_slide-content-text-padding",
	"",
	esc_html__( "Slide Content Text Padding", 'moose' ),
	esc_html__( "Define some padding around text (top right bottom left) - Default value is 0px 0px 0px 0px", 'moose' )
);
$eltdSlideContentPositioning->addChild(
	"eltd_slide-content-text-padding",
	$eltd_slide_content_padding
);    