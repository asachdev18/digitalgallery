<?php

$blogPage = new MooseElatedAdminPage(
	"8",
	esc_html__( "Blog", 'moose' ),
	"fa fa-files-o"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"blogPage",
	$blogPage
);

// Blog Post Lists - General

$panel1 = new MooseElatedPanel(
	esc_html__( "Blog Lists", 'moose' ),
	"post_lists_general_panel"
);
$blogPage->addChild(
	"panel1",
	$panel1
);

$blog_style = new MooseElatedField(
	"select",
	"blog_style",
	"1",
	esc_html__( "Archive and Category Layout", 'moose' ),
	esc_html__( "Choose a default blog layout for archived Blog Post Lists and Category Blog Lists", 'moose' ),
	array(
		"1" => esc_html__( "Blog: Standard", 'moose' ),
		"2" => esc_html__( "Blog: Split Column", 'moose' ),
		"3" => esc_html__( "Blog: Masonry", 'moose' ),
		"4" => esc_html__( "Blog: Masonry Full Width", 'moose' ),
		"9" => esc_html__( "Blog: Standard Whole Post", 'moose' ),
		"14" => esc_html__( "Blog: Masonry Gallery", 'moose' ),
		"15" => esc_html__( "Blog: Masonry Gallery Full Width", 'moose' )
	)
);
$panel1->addChild(
	"blog_style",
	$blog_style
);

$category_blog_sidebar = new MooseElatedField(
	"select",
	"category_blog_sidebar",
	"default",
	esc_html__( "Archive and Category Sidebar", 'moose' ),
	esc_html__( "Choose a sidebar layout for archived Blog Post Lists and Category Blog Lists", 'moose' ),
	array(
		"default" => esc_html__( "No Sidebar", 'moose' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'moose' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'moose' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'moose' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'moose' )
	)
);
$panel1->addChild(
	"category_blog_sidebar",
	$category_blog_sidebar
);

$pagination = new MooseElatedField(
	"yesno",
	"pagination",
	"yes",
	esc_html__( "Pagination", 'moose' ),
	esc_html__( "Enabling this option will display pagination links on bottom of Blog Post List", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_hide_pagination_list_container"
	)
);
$panel1->addChild(
	"pagination",
	$pagination
);

$blog_hide_pagination_list_container = new MooseElatedContainer(
	"blog_hide_pagination_list_container",
	"pagination",
	""
);
$panel1->addChild(
	"blog_hide_pagination_list_container",
	$blog_hide_pagination_list_container
);

$blog_pagination_type = new MooseElatedField(
	"select",
	"blog_pagination_type",
	"standard",
	esc_html__( "Pagination type", 'moose' ),
	esc_html__( "Choose type of pagination", 'moose' ),
	array(
		"standard" => esc_html__( "Standard", 'moose' ),
		"prev_and_next" => esc_html__( "Only Previous and Next", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"prev_and_next" => "#eltdf_blog_page_range_container",
			"standard"      => "#eltdf_blog_pagination_text_container"
		),
		"show"       => array(
			"standard"      => "#eltdf_blog_page_range_container",
			"prev_and_next" => "#eltdf_blog_pagination_text_container"
		)
	)
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_type",
	$blog_pagination_type
);

$blog_page_range_container = new MooseElatedContainer(
	"blog_page_range_container",
	"blog_pagination_type",
	"prev_and_next"
);
$blog_hide_pagination_list_container->addChild(
	"blog_page_range_container",
	$blog_page_range_container
);

$blog_page_range = new MooseElatedField(
	"text",
	"blog_page_range",
	"",
	esc_html__( "Pagination Range limit", 'moose' ),
	esc_html__( "Enter a number that will limit pagination to a certain range of links", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_page_range_container->addChild(
	"blog_page_range",
	$blog_page_range
);

$blog_pagination_text_container = new MooseElatedContainer(
	"blog_pagination_text_container",
	"blog_pagination_type",
	"standard"
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_text_container",
	$blog_pagination_text_container
);

$group17 = new MooseElatedGroup(
	esc_html__( "Labels for Buttons", 'moose' ),
	esc_html__( "Enter labels you want for Previous and Next buttons (Previous and Next are standard labels)", 'moose' )
);
$blog_pagination_text_container->addChild(
	"group17",
	$group17
);

$row1 = new MooseElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_pagination_previous_label = new MooseElatedField(
	"textsimple",
	"blog_pagination_previous_label",
	"",
	esc_html__( "Previous Label", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_pagination_previous_label",
	$blog_pagination_previous_label
);

$blog_pagination_next_label = new MooseElatedField(
	"textsimple",
	"blog_pagination_next_label",
	"",
	esc_html__( "Next Label", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_pagination_next_label",
	$blog_pagination_next_label
);

$blog_pagination_border_above_yesno = new MooseElatedField(
	"yesno",
	"blog_pagination_border_above_yesno",
	"no",
	esc_html__( "Border Above Pagination", 'moose' ),
	esc_html__( "Enabling this option will display border above pagination", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_show_on_yes" => "#eltdf_blog_pagination_border_container"
	)
);
$blog_page_range_container->addChild(
	"blog_pagination_border_above_yesno",
	$blog_pagination_border_above_yesno
);

$blog_pagination_border_container = new MooseElatedContainer(
	"blog_pagination_border_container",
	"blog_pagination_border_above_yesno",
	"no"
);
$blog_page_range_container->addChild(
	"blog_pagination_border_container",
	$blog_pagination_border_container
);

$group18 = new MooseElatedGroup(
	esc_html__( "Border Style", 'moose' ),
	esc_html__( "Define style for border top on pagination", 'moose' )
);
$blog_pagination_border_container->addChild(
	"group18",
	$group18
);

$row1 = new MooseElatedRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_pgn_border_color = new MooseElatedField(
	"colorsimple",
	"blog_pgn_border_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_pgn_border_color",
	$blog_pgn_border_color
);

$blog_pgn_border_width = new MooseElatedField(
	"textsimple",
	"blog_pgn_border_width",
	"",
	esc_html__( "Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_pgn_border_width",
	$blog_pgn_border_width
);

$blog_pgn_border_style = new MooseElatedField(
	"selectsimple",
	"blog_pgn_border_style",
	"",
	esc_html__( "Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	array(
		"solid" => esc_html__( "Solid", 'moose' ),
		"dotted" => esc_html__( "Dotted", 'moose' ),
		"dashed" => esc_html__( "Dashed", 'moose' )
	)
);
$row1->addChild(
	"blog_pgn_border_style",
	$blog_pgn_border_style
);

$blog_pagination_border_margin = new MooseElatedField(
	"text",
	"blog_pagination_border_margin",
	"",
	esc_html__( "Margin from Border (px)", 'moose' ),
	esc_html__( "Set margin from border to pagination buttons", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_pagination_border_container->addChild(
	"blog_pagination_border_margin",
	$blog_pagination_border_margin
);

$number_of_chars = new MooseElatedField(
	"text",
	"number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'moose' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"number_of_chars",
	$number_of_chars
);

// Blog Single

$panel20 = new MooseElatedPanel(
	esc_html__( "Blog Single", 'moose' ),
	"blog_single_panel"
);
$blogPage->addChild(
	"panel20",
	$panel20
);

$blog_single_sidebar = new MooseElatedField(
	"select",
	"blog_single_sidebar",
	"default",
	esc_html__( "Sidebar Layout", 'moose' ),
	esc_html__( "Choose a sidebar layout for Blog Single pages", 'moose' ),
	array(
		"default" => esc_html__( "No Sidebar", 'moose' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'moose' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'moose' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'moose' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'moose' )
	)
);
$panel20->addChild(
	"blog_single_sidebar",
	$blog_single_sidebar
);

$custom_sidebars = moose_elated_get_custom_sidebars();

$blog_single_sidebar_custom_display = new MooseElatedField(
	"selectblank",
	"blog_single_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'moose' ),
	esc_html__( "Choose a sidebar to display on Blog Single pages", 'moose' ),
	$custom_sidebars
);
$panel20->addChild(
	"blog_single_sidebar_custom_display",
	$blog_single_sidebar_custom_display
);

$blog_single_image_size = new MooseElatedField(
	"select",
	"blog_single_image_size",
	"full",
	esc_html__( "Blog Image Size", 'moose' ),
	esc_html__( "Choose image size for Blog Single pages", 'moose' ),
	array(
		"full" => esc_html__( "Default", 'moose' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'moose' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'moose' ),
		"custom" => esc_html__( "Custom", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"full"                => "#eltdf_blog_single_image_size_container",
			"portfolio-landscape" => "#eltdf_blog_single_image_size_container",
			"portfolio-portrait"  => "#eltdf_blog_single_image_size_container",
			"custom"              => ""
		),
		"show"       => array(
			"full"                => "",
			"portfolio-landscape" => "",
			"portfolio-portrait"  => "",
			"custom"              => "#eltdf_blog_single_image_size_container"
		)
	)
);
$panel20->addChild(
	"blog_single_image_size",
	$blog_single_image_size
);

$blog_single_image_size_container = new MooseElatedContainer(
	"blog_single_image_size_container",
	"blog_single_image_size",
	"",
	array(
		"full",
		"portfolio-landscape",
		"portfolio-portrait"
	)
);
$panel20->addChild(
	"blog_single_image_size_container",
	$blog_single_image_size_container
);

$blog_single_image_size_height = new MooseElatedField(
	"text",
	"blog_single_image_size_height",
	"",
	esc_html__( "Image Height (px)", 'moose' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_single_image_size_container->addChild(
	"blog_single_image_size_height",
	$blog_single_image_size_height
);

$blog_single_image_size_width = new MooseElatedField(
	"text",
	"blog_single_image_size_width",
	"",
	esc_html__( "Image Width (px)", 'moose' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_single_image_size_container->addChild(
	"blog_single_image_size_width",
	$blog_single_image_size_width
);

$blog_single_show_ql_icon = new MooseElatedField(
	"yesno",
	"blog_single_show_ql_icon",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'moose' ),
	esc_html__( "Enabling this option will show Quote/Link Icon on Blog Single posts", 'moose' )
);
$panel20->addChild(
	"blog_single_show_ql_icon",
	$blog_single_show_ql_icon
);

$blog_single_navigation = new MooseElatedField(
	"yesno",
	"blog_single_navigation",
	"no",
	esc_html__( "Enable Prev/Next Single Post Navigation Links", 'moose' ),
	esc_html__( "Enable navigation links through the blog posts (left and right arrows will appear)", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_hide_pagination_container"
	)
);
$panel20->addChild(
	"blog_single_navigation",
	$blog_single_navigation
);

$blog_hide_pagination_container = new MooseElatedContainer(
	"blog_hide_pagination_container",
	"blog_single_navigation",
	"no"
);
$panel20->addChild(
	"blog_hide_pagination_container",
	$blog_hide_pagination_container
);

$blog_navigation_through_same_category = new MooseElatedField(
	"yesno",
	"blog_navigation_through_same_category",
	"no",
	esc_html__( "Enable Navigation Only in Current Category", 'moose' ),
	esc_html__( "Limit your navigation only through current category", 'moose' )
);
$blog_hide_pagination_container->addChild(
	"blog_navigation_through_same_category",
	$blog_navigation_through_same_category
);

$blog_single_title_tags = new MooseElatedField(
	"select",
	"blog_single_title_tags",
	"h5",
	esc_html__( "Headlines Below Post Content", 'moose' ),
	esc_html__( 'Choose a tag for headlines below post content ("Tags", "Post a comment", etc)', 'moose' ),
	array(
		"h2" => esc_html__( "h2", 'moose' ),
		"h3" => esc_html__( "h3", 'moose' ),
		"h4" => esc_html__( "h4", 'moose' ),
		"h5" => esc_html__( "h5", 'moose' ),
		"h6" => esc_html__( "h6", 'moose' )
	)
);
$panel20->addChild(
	"blog_single_title_tags",
	$blog_single_title_tags
);

$post_info_data_single = new MooseElatedTitle(
	"post_info_data_single",
	esc_html__( "Post Info Data Fields", 'moose' )
);
$panel20->addChild(
	"post_info_data_single",
	$post_info_data_single
);

$blog_single_show_date = new MooseElatedField(
	"yesno",
	"blog_single_show_date",
	"yes",
	esc_html__( "Show Date", 'moose' ),
	esc_html__( "Enabling this option will show date on Blog Single posts", 'moose' )
);
$panel20->addChild(
	"blog_single_show_date",
	$blog_single_show_date
);

$blog_single_show_like = new MooseElatedField(
	"yesno",
	"blog_single_show_like",
	"yes",
	esc_html__( "Show Like", 'moose' ),
	esc_html__( "Enabling this option will turn on 'Likes' on Blog Single posts", 'moose' )
);
$panel20->addChild(
	"blog_single_show_like",
	$blog_single_show_like
);

$blog_single_show_social_share = new MooseElatedField(
	"yesno",
	"blog_single_show_social_share",
	"yes",
	esc_html__( "Show Share", 'moose' ),
	esc_html__( "Enabling this option will show share on Single Post", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_single_share_options_container"
	)
);
$panel20->addChild(
	"blog_single_show_social_share",
	$blog_single_show_social_share
);

$blog_single_share_options_container = new MooseElatedContainer(
	"blog_single_share_options_container",
	"blog_single_show_social_share",
	"no"
);
$panel20->addChild(
	"blog_single_share_options_container",
	$blog_single_share_options_container
);

$blog_single_select_share_option = new MooseElatedField(
	"select",
	"blog_single_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'moose' ),
	esc_html__( "Choose Social Share Style for Single Post", 'moose' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'moose' ),
		"list" => esc_html__( "Social Share List", 'moose' )
	)
);

$blog_single_share_options_container->addChild(
	"blog_single_select_share_option",
	$blog_single_select_share_option
);

$blog_single_show_category = new MooseElatedField(
	"yesno",
	"blog_single_show_category",
	"yes",
	esc_html__( "Show Category", 'moose' ),
	esc_html__( "Enabling this option will show category/categories on Blog Single posts", 'moose' )
);
$panel20->addChild(
	"blog_single_show_category",
	$blog_single_show_category
);

$blog_single_show_time = new MooseElatedField(
	"yesno",
	"blog_single_show_time",
	"yes",
	esc_html__( "Show Time", 'moose' ),
	esc_html__( "Enabling this option will show time on Blog Single posts for Meta Info Featured on Side Template", 'moose' ),
	"",
	array(
		"blog_standard_type",
		"blog_date_in_title",
		"blog_post_info_hierarchical",
		"blog_split_column",
		"blog_masonry"
	)
);
$panel20->addChild(
	"blog_single_show_time",
	$blog_single_show_time
);

$blog_author_info = new MooseElatedField(
	"yesno",
	"blog_author_info",
	"yes",
	esc_html__( "Show Author Info", 'moose' ),
	esc_html__( "Enabling this option will display author name and descriptions on Blog Single pages", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_blog_author_info_container"
	)
);
$panel20->addChild(
	"blog_author_info",
	$blog_author_info
);

$enable_blog_author_info_container = new MooseElatedContainer(
	"enable_blog_author_info_container",
	"blog_author_info",
	"no"
);
$panel20->addChild(
	"enable_blog_author_info_container",
	$enable_blog_author_info_container
);

$enable_author_info_email = new MooseElatedField(
	"yesno",
	"enable_author_info_email",
	"no",
	esc_html__( "Show Author Email", 'moose' ),
	esc_html__( "Enabling this option will show author email", 'moose' )
);
$enable_blog_author_info_container->addChild(
	"enable_author_info_email",
	$enable_author_info_email
);

$group1 = new MooseElatedGroup(
	esc_html__( "Blog Single Author Info Box Style", 'moose' ),
	esc_html__( "Set styles for author info box on single post pages", 'moose' )
);
$enable_blog_author_info_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_border_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_author_info_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_border_color",
	$blog_single_post_author_info_border_color
);

$blog_single_post_author_info_back_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_author_info_back_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_back_color",
	$blog_single_post_author_info_back_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Blog Single Author Info Title Style", 'moose' ),
	esc_html__( "Set styles for author info title on single post pages", 'moose' )
);
$enable_blog_author_info_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_title_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_author_info_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_title_color",
	$blog_single_post_author_info_title_color
);

$blog_single_post_author_info_title_font_family = new MooseElatedField(
	"fontsimple",
	"blog_single_post_author_info_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_title_font_family",
	$blog_single_post_author_info_title_font_family
);

$blog_single_post_author_info_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_single_post_author_info_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_title_fontsize",
	$blog_single_post_author_info_title_fontsize
);

$blog_single_post_author_info_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_single_post_author_info_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_title_lineheight",
	$blog_single_post_author_info_title_lineheight
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_single_post_author_info_title_fontstyle",
	$blog_single_post_author_info_title_fontstyle
);

$blog_single_post_author_info_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_single_post_author_info_title_fontweight",
	$blog_single_post_author_info_title_fontweight
);

$blog_single_post_author_info_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_single_post_author_info_title_texttransform",
	$blog_single_post_author_info_title_texttransform
);

$blog_single_post_author_info_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_single_post_author_info_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_single_post_author_info_title_letterspacing",
	$blog_single_post_author_info_title_letterspacing
);

$row3 = new MooseElatedRow();
$group2->addChild(
	"row3",
	$row3
);

$blog_single_post_author_info_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_single_post_author_info_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom for Author Info Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_single_post_author_info_title_margin_bottom",
	$blog_single_post_author_info_title_margin_bottom
);

$group3 = new MooseElatedGroup(
	esc_html__( "Blog Single Author Info Text Style", 'moose' ),
	esc_html__( "Set styles for author info text on single post pages", 'moose' )
);
$enable_blog_author_info_container->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_text_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_author_info_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_text_color",
	$blog_single_post_author_info_text_color
);

$blog_single_post_author_info_text_font_family = new MooseElatedField(
	"fontsimple",
	"blog_single_post_author_info_text_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_text_font_family",
	$blog_single_post_author_info_text_font_family
);

$blog_single_post_author_info_text_fontsize = new MooseElatedField(
	"textsimple",
	"blog_single_post_author_info_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_text_fontsize",
	$blog_single_post_author_info_text_fontsize
);

$blog_single_post_author_info_text_lineheight = new MooseElatedField(
	"textsimple",
	"blog_single_post_author_info_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_author_info_text_lineheight",
	$blog_single_post_author_info_text_lineheight
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_text_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_single_post_author_info_text_fontstyle",
	$blog_single_post_author_info_text_fontstyle
);

$blog_single_post_author_info_text_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_single_post_author_info_text_fontweight",
	$blog_single_post_author_info_text_fontweight
);

$blog_single_post_author_info_text_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_text_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_single_post_author_info_text_texttransform",
	$blog_single_post_author_info_text_texttransform
);

$blog_single_post_author_info_text_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_single_post_author_info_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_single_post_author_info_text_letterspacing",
	$blog_single_post_author_info_text_letterspacing
);

$blog_single_show_comments = new MooseElatedField(
	"yesno",
	"blog_single_show_comments",
	"yes",
	esc_html__( "Show Comments", 'moose' ),
	esc_html__( "Enabling this option will show comments on Blog Single posts", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_blog_comments_container"
	)
);
$panel20->addChild(
	"blog_single_show_comments",
	$blog_single_show_comments
);

$enable_blog_comments_container = new MooseElatedContainer(
	"enable_blog_comments_container",
	"blog_single_show_comments",
	"no"
);
$panel20->addChild(
	"enable_blog_comments_container",
	$enable_blog_comments_container
);

$group1 = new MooseElatedGroup(
	esc_html__( "Comments Box Style", 'moose' ),
	esc_html__( "Set styles for comments box on single post pages", 'moose' )
);
$enable_blog_comments_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_border_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_comments_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_comments_border_color",
	$blog_single_post_comments_border_color
);

$blog_single_post_comments_back_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_comments_back_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_comments_back_color",
	$blog_single_post_comments_back_color
);

$group2 = new MooseElatedGroup(
	esc_html__( "Comments Color Style", 'moose' ),
	esc_html__( "Set styles for comments on single post pages", 'moose' )
);
$enable_blog_comments_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_title_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_comments_title_color",
	"",
	esc_html__( "Title Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_comments_title_color",
	$blog_single_post_comments_title_color
);

$blog_single_post_comments_text_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_comments_text_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_comments_text_color",
	$blog_single_post_comments_text_color
);

$blog_single_post_comments_link_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_comments_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_comments_link_color",
	$blog_single_post_comments_link_color
);

$blog_single_post_comments_date_color = new MooseElatedField(
	"colorsimple",
	"blog_single_post_comments_date_color",
	"",
	esc_html__( "Date Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_single_post_comments_date_color",
	$blog_single_post_comments_date_color
);

// Advanced Options

$panel_advanced_options = new MooseElatedPanel(
	esc_html__( "Advanced Options", 'moose' ),
	"panel_advanced_options"
);
$blogPage->addChild(
	"panel_advanced_options",
	$panel_advanced_options
);

$blog_standard_type_show_options = new MooseElatedField(
	"yesno",
	"blog_standard_type_show_options",
	"no",
	esc_html__( "Show Standard Template Options", 'moose' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_standard_type_show_options",
	$blog_standard_type_show_options
);

$blog_split_column_show_options = new MooseElatedField(
	"yesno",
	"blog_split_column_show_options",
	"no",
	esc_html__( "Show Split Column Template Options", 'moose' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_split_column_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_split_column_show_options",
	$blog_split_column_show_options
);

$blog_masonry_show_options = new MooseElatedField(
	"yesno",
	"blog_masonry_show_options",
	"no",
	esc_html__( "Show Masonry & Masonry Full Width Template Options", 'moose' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_masonry_show_options",
	$blog_masonry_show_options
);

$blog_masonry_gallery_show_options = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_show_options",
	"no",
	esc_html__( "Show Masonry Gallery and Masonry Gallery Full Width Template Options", 'moose' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_gallery_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_masonry_gallery_show_options",
	$blog_masonry_gallery_show_options
);

$blog_vertical_loop_show_options = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_show_options",
	"no",
	esc_html__( "Show Vertical Loop Template Options", 'moose' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_vertical_loop_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_vertical_loop_show_options",
	$blog_vertical_loop_show_options
);

// Blog Post List - Blog: Masonry
$panel10 = new MooseElatedPanel(
	esc_html__( "Blog List Templates Options: Masonry & Masonry Full Width", 'moose' ),
	"blog_masonry_post_lists",
	"blog_masonry_show_options",
	"no"
);
$blogPage->addChild(
	"panel10",
	$panel10
);

$blog_masonry_number_of_chars = new MooseElatedField(
	"text",
	"blog_masonry_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'moose' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_number_of_chars",
	$blog_masonry_number_of_chars
);

$blog_masonry_read_more_button = new MooseElatedField(
	"yesno",
	"blog_masonry_read_more_button",
	"no",
	esc_html__( "Read More Button", 'moose' ),
	esc_html__( "Enable Read More Button", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_read_more_button_container"
	)
);
$panel10->addChild(
	"blog_masonry_read_more_button",
	$blog_masonry_read_more_button
);

$blog_masonry_read_more_button_container = new MooseElatedContainer(
	"blog_masonry_read_more_button_container",
	"blog_masonry_read_more_button",
	"no"
);
$panel10->addChild(
	"blog_masonry_read_more_button_container",
	$blog_masonry_read_more_button_container
);

$blog_masonry_read_more_button_icon = new MooseElatedField(
	"yesno",
	"blog_masonry_read_more_button_icon",
	"no",
	esc_html__( "Enable Icon", 'moose' ),
	esc_html__( "Enabling this option will place icon in read more button", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_read_more_button_icon_container"
	)
);
$blog_masonry_read_more_button_container->addChild(
	"blog_masonry_read_more_button_icon",
	$blog_masonry_read_more_button_icon
);

$blog_masonry_read_more_button_icon_container = new MooseElatedContainer(
	"blog_masonry_read_more_button_icon_container",
	"blog_masonry_read_more_button_icon",
	"no"
);
$blog_masonry_read_more_button_container->addChild(
	"blog_masonry_read_more_button_icon_container",
	$blog_masonry_read_more_button_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$blog_masonry_read_more_button_icon_pack_hide_array = array();
$blog_masonry_read_more_button_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$blog_masonry_read_more_button_icon_collections_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$blog_masonry_read_more_button_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_blog_masonry_read_more_button_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $blog_masonry_read_more_button_icon_collections_params as $blog_masonry_read_more_button_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $blog_masonry_read_more_button_icon_collections_param !== $dep_collection_object->param ) {
				$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_blog_masonry_read_more_button_icon_' . $blog_masonry_read_more_button_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$blog_masonry_read_more_button_icon_pack = new MooseElatedField(
	"select",
	"blog_masonry_read_more_button_icon_pack",
	"font_awesome",
	esc_html__( "Icon Pack", 'moose' ),
	esc_html__( "Choose icon pack for show load more button", 'moose' ),
	$moose_elated_icon_collections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $blog_masonry_read_more_button_icon_pack_hide_array,
		"show"       => $blog_masonry_read_more_button_icon_pack_show_array
	)
);

$blog_masonry_read_more_button_icon_container->addChild(
	"blog_masonry_read_more_button_icon_pack",
	$blog_masonry_read_more_button_icon_pack
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
		
		$blog_masonry_read_more_button_icon_hide_values = $icon_collections_keys;
		$blog_icon_container                            = new MooseElatedContainer(
			"blog_masonry_read_more_button_icon_" . $collection_object->param . "_container",
			"blog_masonry_read_more_button_icon_pack",
			"",
			$blog_masonry_read_more_button_icon_hide_values
		);
		$blog_masonry_read_more_button_icon             = new MooseElatedField(
			"select",
			"blog_masonry_read_more_button_icon_" . $collection_object->param,
			"",
			esc_html__( "Button Icon", 'moose' ),
			esc_html__( "Choose Button Icon", 'moose' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$blog_icon_container->addChild(
			"blog_masonry_read_more_button_icon_" . $collection_object->param,
			$blog_masonry_read_more_button_icon
		);
		
		$blog_masonry_read_more_button_icon_container->addChild(
			"blog_masonry_read_more_button_icon_" . $collection_object->param . "_container",
			$blog_icon_container
		);
	}
	
}

$pagination_masonry = new MooseElatedField(
	"select",
	"pagination_masonry",
	"pagination",
	esc_html__( "Pagination on Masonry", 'moose' ),
	esc_html__( 'Choose a pagination style for "Masonry" Blog List', 'moose' ),
	array(
		"pagination" => esc_html__( "Pagination", 'moose' ),
		"load_more" => esc_html__( "Load More", 'moose' ),
		"infinite_scroll" => esc_html__( "Infinite Scroll", 'moose' )
	)
);
$panel10->addChild(
	"pagination_masonry",
	$pagination_masonry
);

$blog_masonry_columns = new MooseElatedField(
	'select',
	'blog_masonry_columns',
	'',
	esc_html__( 'Masonry Blog Columns', 'moose' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List without sidebar', 'moose' ),
	array(
		'two_columns'   => '2',
		'three_columns' => '3'
	)
);
$panel10->addChild(
	'blog_masonry_columns',
	$blog_masonry_columns
);

$blog_masonry_full_width_columns = new MooseElatedField(
	'select',
	'blog_masonry_full_width_columns',
	'',
	esc_html__( 'Full Width Masonry Blog Columns', 'moose' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List', 'moose' ),
	array(
		'three_columns' => '3',
		'four_columns'  => '4',
		'five_columns'  => '5'
	)
);
$panel10->addChild(
	'blog_masonry_full_width_columns',
	$blog_masonry_full_width_columns
);

$blog_masonry_full_width_margin = new MooseElatedField(
	"text",
	"blog_masonry_full_width_margin",
	"",
	esc_html__( "Full Width Masonry Margin", 'moose' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_full_width_margin",
	$blog_masonry_full_width_margin
);

$blog_masonry_filter = new MooseElatedField(
	"yesno",
	"blog_masonry_filter",
	"no",
	esc_html__( "Show Category Filter on Masonry", 'moose' ),
	esc_html__( 'Enabling this option will display a Category Filter on "Masonry" Blog List', 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_filter_container"
	)
);
$panel10->addChild(
	"blog_masonry_filter",
	$blog_masonry_filter
);

$blog_masonry_filter_container = new MooseElatedContainer(
	"blog_masonry_filter_container",
	"blog_masonry_filter",
	"no"
);
$panel10->addChild(
	"blog_masonry_filter_container",
	$blog_masonry_filter_container
);

// Blog Masonry Filter
$blog_masonry_filter_background_color = new MooseElatedField(
	"color",
	"blog_masonry_filter_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose color for background of filter area", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_background_color",
	$blog_masonry_filter_background_color
);

$blog_masonry_filter_height = new MooseElatedField(
	"text",
	"blog_masonry_filter_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "Enter height for filter area", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_height",
	$blog_masonry_filter_height
);

$blog_masonry_filter_margin_bottom = new MooseElatedField(
	"text",
	"blog_masonry_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'moose' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_margin_bottom",
	$blog_masonry_filter_margin_bottom
);

$blog_masonry_filter_alignment = new MooseElatedField(
	"select",
	"blog_masonry_filter_alignment",
	"",
	esc_html__( "Horizontal Alignment", 'moose' ),
	esc_html__( "Choose filter alignment", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_alignment",
	$blog_masonry_filter_alignment
);

$blog_masonry_enable_filter_title = new MooseElatedField(
	"yesno",
	"blog_masonry_enable_filter_title",
	"no",
	esc_html__( "Enable Filter Title", 'moose' ),
	esc_html__( "Enabling this option will show category filter title", 'moose' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_enable_filter_title",
	$blog_masonry_enable_filter_title
);

$group1 = new MooseElatedGroup(
	esc_html__( "Title", 'moose' ),
	esc_html__( "Define text styles for filter title", 'moose' )
);
$blog_masonry_filter_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_title_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_filter_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_filter_title_color",
	$blog_masonry_filter_title_color
);
$blog_masonry_filter_title_font_size = new MooseElatedField(
	"textsimple",
	"blog_masonry_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_filter_title_font_size",
	$blog_masonry_filter_title_font_size
);
$blog_masonry_filter_title_line_height = new MooseElatedField(
	"textsimple",
	"blog_masonry_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_filter_title_line_height",
	$blog_masonry_filter_title_line_height
);
$blog_masonry_filter_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"blog_masonry_filter_title_text_transform",
	$blog_masonry_filter_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_title_font_family = new MooseElatedField(
	"fontsimple",
	"blog_masonry_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_filter_title_font_family",
	$blog_masonry_filter_title_font_family
);
$blog_masonry_filter_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_filter_title_font_style",
	$blog_masonry_filter_title_font_style
);
$blog_masonry_filter_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_filter_title_font_weight",
	$blog_masonry_filter_title_font_weight
);
$blog_masonry_filter_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_filter_title_letter_spacing",
	$blog_masonry_filter_title_letter_spacing
);

$group2 = new MooseElatedGroup(
	esc_html__( "Categories", 'moose' ),
	esc_html__( "Define text styles for filter categories", 'moose' )
);
$blog_masonry_filter_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_filter_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_filter_color",
	$blog_masonry_filter_color
);
$blog_masonry_filter_hovercolor = new MooseElatedField(
	"colorsimple",
	"blog_masonry_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_filter_hovercolor",
	$blog_masonry_filter_hovercolor
);
$blog_masonry_filter_font_size = new MooseElatedField(
	"textsimple",
	"blog_masonry_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_filter_font_size",
	$blog_masonry_filter_font_size
);
$blog_masonry_filter_line_height = new MooseElatedField(
	"textsimple",
	"blog_masonry_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_filter_line_height",
	$blog_masonry_filter_line_height
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_font_family = new MooseElatedField(
	"fontsimple",
	"blog_masonry_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_filter_font_family",
	$blog_masonry_filter_font_family
);
$blog_masonry_filter_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_filter_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_filter_font_style",
	$blog_masonry_filter_font_style
);
$blog_masonry_filter_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_filter_font_weight",
	$blog_masonry_filter_font_weight
);
$blog_masonry_filter_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_masonry_filter_text_transform",
	$blog_masonry_filter_text_transform
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);
$blog_masonry_filter_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_masonry_filter_letter_spacing",
	$blog_masonry_filter_letter_spacing
);

$blog_masonry_filter_disable_separator = new MooseElatedField(
	"yesno",
	"blog_masonry_filter_disable_separator",
	"yes",
	esc_html__( "Disable Separator Between Categories", 'moose' ),
	esc_html__( "Disabling this option will remove separator between filter categories.", 'moose' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_disable_separator",
	$blog_masonry_filter_disable_separator
);

$blog_masonry_type = new MooseElatedField(
	"select",
	"blog_masonry_type",
	"post_info_below_title",
	esc_html__( "Post Info Position", 'moose' ),
	esc_html__( "Choose Post Info Position for Masonry Blog List", 'moose' ),
	array(
		"post_info_below_title" => esc_html__( "Post Info Section Below Title", 'moose' ),
		"post_info_at_bottom" => esc_html__( "Post Info Section at Bottom", 'moose' )
	)
);
$panel10->addChild(
	"blog_masonry_type",
	$blog_masonry_type
);

$blog_masonry_content_position = new MooseElatedField(
	"select",
	"blog_masonry_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'moose' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'moose' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'moose' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'moose' )
	)
);
$panel10->addChild(
	"blog_masonry_content_position",
	$blog_masonry_content_position
);

$blog_masonry_post_meta_data_section = new MooseElatedTitle(
	"blog_masonry_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'moose' )
);
$panel10->addChild(
	"blog_masonry_post_meta_data_section",
	$blog_masonry_post_meta_data_section
);

$blog_masonry_show_categories = new MooseElatedField(
	"yesno",
	"blog_masonry_show_categories",
	"no",
	esc_html__( "Show Categories", 'moose' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'moose' )
);
$panel10->addChild(
	"blog_masonry_show_categories",
	$blog_masonry_show_categories
);

$blog_masonry_show_comments = new MooseElatedField(
	"yesno",
	"blog_masonry_show_comments",
	"yes",
	esc_html__( "Show Comments", 'moose' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'moose' )
);
$panel10->addChild(
	"blog_masonry_show_comments",
	$blog_masonry_show_comments
);

$blog_masonry_show_author = new MooseElatedField(
	"yesno",
	"blog_masonry_show_author",
	"no",
	esc_html__( "Show Author Name", 'moose' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'moose' )
);
$panel10->addChild(
	"blog_masonry_show_author",
	$blog_masonry_show_author
);

$blog_masonry_show_date = new MooseElatedField(
	"yesno",
	"blog_masonry_show_date",
	"no",
	esc_html__( "Show Date", 'moose' ),
	esc_html__( "Enabling this option will show date on Post List", 'moose' )
);
$panel10->addChild(
	"blog_masonry_hide_date",
	$blog_masonry_show_date
);

$blog_masonry_show_share = new MooseElatedField(
	"yesno",
	"blog_masonry_show_share",
	"no",
	esc_html__( "Show Share", 'moose' ),
	esc_html__( "Enabling this option will show share on Post List", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_share_options_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_share",
	$blog_masonry_show_share
);

$blog_masonry_share_options_container = new MooseElatedContainer(
	"blog_masonry_share_options_container",
	"blog_masonry_show_share",
	"no"
);
$panel10->addChild(
	"blog_masonry_share_options_container",
	$blog_masonry_share_options_container
);

$blog_masonry_select_share_options_masonry_type = new MooseElatedField(
	"select",
	"blog_masonry_select_share_options_masonry_type",
	"dropdown",
	esc_html__( "Social Share Style", 'moose' ),
	esc_html__( "Choose Social Share Style for Masonry Type", 'moose' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'moose' ),
		"list" => esc_html__( "Social Share List", 'moose' )
	),
	array(
		"dependence" => true,
		"show"       => array(
			"list"     => "#eltdf_blog_masonry_share_list_type_options_container",
			"dropdown" => "#eltdf_blog_masonry_share_dropdown_type_options_container"
		),
		"hide"       => array(
			"dropdown" => "#eltdf_blog_masonry_share_list_type_options_container",
			"list"     => "#eltdf_blog_masonry_share_dropdown_type_options_container"
		),
	)
);

$blog_masonry_share_options_container->addChild(
	"blog_masonry_select_share_options_masonry_type",
	$blog_masonry_select_share_options_masonry_type
);

$blog_masonry_share_list_type_options_container = new MooseElatedContainer(
	"blog_masonry_share_list_type_options_container",
	"blog_masonry_select_share_options_masonry_type",
	"dropdown"
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_list_type_options_container",
	$blog_masonry_share_list_type_options_container
);

$blog_masonry_share_hld_hover_icon_color = new MooseElatedField(
	"color",
	"blog_masonry_share_hld_hover_icon_color",
	"",
	esc_html__( "Icon color on Quote/Link Holder Hover", 'moose' ),
	esc_html__( "Choose icon color for share list when the quote/link holder is hovered over", 'moose' )
);
$blog_masonry_share_list_type_options_container->addChild(
	"blog_masonry_share_hld_hover_icon_color",
	$blog_masonry_share_hld_hover_icon_color
);

$blog_masonry_share_dropdown_type_options_container = new MooseElatedContainer(
	"blog_masonry_share_dropdown_type_options_container",
	"blog_masonry_select_share_options_masonry_type",
	"list"
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_dropdown_type_options_container",
	$blog_masonry_share_dropdown_type_options_container
);

$blog_masonry_share_background_color = new MooseElatedField(
	"color",
	"blog_masonry_share_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for share dropdown", 'moose' )
);
$blog_masonry_share_dropdown_type_options_container->addChild(
	"blog_masonry_share_background_color",
	$blog_masonry_share_background_color
);

$blog_masonry_share_background_color_link_post_type = new MooseElatedField(
	"color",
	"blog_masonry_share_background_color_link_post_type",
	"",
	esc_html__( "Background Color on Quote/Link Post Type", 'moose' ),
	esc_html__( "Choose background color for share dropdown", 'moose' )
);
$blog_masonry_share_dropdown_type_options_container->addChild(
	"blog_masonry_share_background_color_link_post_type",
	$blog_masonry_share_background_color_link_post_type
);

$blog_masonry_share_icon_color = new MooseElatedField(
	"color",
	"blog_masonry_share_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for share dropdown and list", 'moose' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_color",
	$blog_masonry_share_icon_color
);

$blog_masonry_share_icon_hover_color = new MooseElatedField(
	"color",
	"blog_masonry_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose icon hover color for share dropdown and list", 'moose' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_hover_color",
	$blog_masonry_share_icon_hover_color
);

$blog_masonry_share_icon_color_link_post_type = new MooseElatedField(
	"color",
	"blog_masonry_share_icon_color_link_post_type",
	"",
	esc_html__( "Icon Color for Quote/Link Post Type", 'moose' ),
	esc_html__( "Choose icon color for share dropdown and list", 'moose' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_color_link_post_type",
	$blog_masonry_share_icon_color_link_post_type
);

$blog_masonry_share_icon_hover_color_link_post_type = new MooseElatedField(
	"color",
	"blog_masonry_share_icon_hover_color_link_post_type",
	"",
	esc_html__( "Icon Hover Color for Quote/Link Post Type", 'moose' ),
	esc_html__( "Choose icon hover color for share dropdown and list", 'moose' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_hover_color_link_post_type",
	$blog_masonry_share_icon_hover_color_link_post_type
);

$blog_masonry_show_like = new MooseElatedField(
	"yesno",
	"blog_masonry_show_like",
	"no",
	esc_html__( "Show Likes", 'moose' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'moose' )
);
$panel10->addChild(
	"blog_masonry_show_like",
	$blog_masonry_show_like
);

$blog_masonry_post_design_style = new MooseElatedTitle(
	"blog_masonry_post_design_style",
	esc_html__( "Post Design Style", 'moose' )
);
$panel10->addChild(
	"blog_masonry_post_design_style",
	$blog_masonry_post_design_style
);

$blog_masonry_post_alignment = new MooseElatedField(
	"select",
	"blog_masonry_post_alignment",
	"",
	esc_html__( "Post Alignment", 'moose' ),
	esc_html__( "Choose alignment for whole post", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$panel10->addChild(
	"blog_masonry_post_alignment",
	$blog_masonry_post_alignment
);

$blog_masonry_enable_text_box = new MooseElatedField(
	"yesno",
	"blog_masonry_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'moose' ),
	esc_html__( "Enable post text boxed features", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_enable_text_box_container"
	)
);
$panel10->addChild(
	"blog_masonry_enable_text_box",
	$blog_masonry_enable_text_box
);

$blog_masonry_enable_text_box_container = new MooseElatedContainer(
	"blog_masonry_enable_text_box_container",
	"blog_masonry_enable_text_box",
	"no"
);
$panel10->addChild(
	"blog_masonry_enable_text_box_container",
	$blog_masonry_enable_text_box_container
);

$blog_masonry_box_background_color = new MooseElatedField(
	"color",
	"blog_masonry_box_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for post text box", 'moose' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_background_color",
	$blog_masonry_box_background_color
);

$blog_masonry_box_border_color = new MooseElatedField(
	"color",
	"blog_masonry_box_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose border color for post text box", 'moose' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_border_color",
	$blog_masonry_box_border_color
);

$blog_masonry_box_padding = new MooseElatedField(
	"text",
	"blog_masonry_box_padding",
	"",
	esc_html__( "Text box padding", 'moose' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_padding",
	$blog_masonry_box_padding
);

$group7 = new MooseElatedGroup(
	esc_html__( "Paragraph", 'moose' ),
	esc_html__( "Set paragraph color", 'moose' )
);
$panel10->addChild(
	"group7",
	$group7
);

$blog_masonry_paragraph_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_paragraph_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$group7->addChild(
	"blog_masonry_paragraph_color",
	$blog_masonry_paragraph_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Quote/Link Background", 'moose' ),
	esc_html__( "Set background of Quote/Link post type", 'moose' )
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

$blog_masonry_ql_background_image = new MooseElatedField(
	"yesnosimple",
	"blog_masonry_ql_background_image",
	"yes",
	esc_html__( "Background Image", 'moose' ),
	""
);
$row1->addChild(
	"blog_masonry_ql_background_image",
	$blog_masonry_ql_background_image
);

$blog_masonry_ql_background_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_ql_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Default color is #ffffff.", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_background_color",
	$blog_masonry_ql_background_color
);

$blog_masonry_ql_hover_background_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "Default color is #e6ae48.", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_hover_background_color",
	$blog_masonry_ql_hover_background_color
);

$blog_masonry_show_ql_mark = new MooseElatedField(
	"yesno",
	"blog_masonry_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'moose' ),
	esc_html__( "Show Icons for quote/link post format", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_show_ql_mark_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_ql_mark",
	$blog_masonry_show_ql_mark
);

$blog_masonry_show_ql_mark_container = new MooseElatedContainer(
	"blog_masonry_show_ql_mark_container",
	"blog_masonry_show_ql_mark",
	"no"
);
$panel10->addChild(
	"blog_masonry_show_ql_mark_container",
	$blog_masonry_show_ql_mark_container
);

$row1 = new MooseElatedRow();
$blog_masonry_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_mark_color = new MooseElatedField(
	"color",
	"blog_masonry_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for quote/link post", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_mark_color",
	$blog_masonry_ql_mark_color
);

$blog_masonry_ql_mark_hover_color = new MooseElatedField(
	"color",
	"blog_masonry_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_mark_hover_color",
	$blog_masonry_ql_mark_hover_color
);

$group8 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing", 'moose' ),
	esc_html__( "Set spacing for blog layouts", 'moose' )
);
$panel10->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_masonry_image_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_masonry_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_image_margin_bottom",
	$blog_masonry_image_margin_bottom
);

$blog_masonry_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_masonry_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_title_margin_bottom",
	$blog_masonry_title_margin_bottom
);

$blog_masonry_post_info_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_masonry_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_post_info_margin_bottom",
	$blog_masonry_post_info_margin_bottom
);

$blog_masonry_read_more_margin_top = new MooseElatedField(
	"textsimple",
	"blog_masonry_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_read_more_margin_top",
	$blog_masonry_read_more_margin_top
);

$row2 = new MooseElatedRow();
$group8->addChild(
	"row2",
	$row2
);

$blog_masonry_social_share_list_margin_top = new MooseElatedField(
	"textsimple",
	"blog_masonry_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_social_share_list_margin_top",
	$blog_masonry_social_share_list_margin_top
);

$blog_masonry_article_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_masonry_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_article_margin_bottom",
	$blog_masonry_article_margin_bottom
);

$blog_masonry_post_info_bottom_margin_top = new MooseElatedField(
	"textsimple",
	"blog_masonry_post_info_bottom_margin_top",
	"",
	esc_html__( "Margin Above Post Info When Post Info is on the bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_post_info_bottom_margin_top",
	$blog_masonry_post_info_bottom_margin_top
);

$group9 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'moose' ),
	esc_html__( "Set spacing for blog layouts", 'moose' )
);
$panel10->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_title_margin_bottom",
	$blog_masonry_ql_title_margin_bottom
);

$blog_masonry_ql_quote_author_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_quote_author_margin_bottom",
	$blog_masonry_ql_quote_author_margin_bottom
);

$blog_masonry_ql_social_share_list_margin_top = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_social_share_list_margin_top",
	$blog_masonry_ql_social_share_list_margin_top
);

$group10 = new MooseElatedGroup(
	esc_html__( "Border Arround Article", 'moose' ),
	esc_html__( "Set border style for articles", 'moose' )
);
$panel10->addChild(
	"group10",
	$group10
);

$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_masonry_article_border_width = new MooseElatedField(
	"textsimple",
	"blog_masonry_article_border_width",
	"",
	esc_html__( "Border Width (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_article_border_width",
	$blog_masonry_article_border_width
);

$blog_masonry_article_border_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_article_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_article_border_color",
	$blog_masonry_article_border_color
);

$post_text_styling = new MooseElatedTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'moose' )
);
$panel10->addChild(
	"post_text_styling",
	$post_text_styling
);

$group2 = new MooseElatedGroup(
	esc_html__( "Post Title", 'moose' ),
	esc_html__( "Define title styles in this blog post template.", 'moose' )
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

$blog_masonry_title_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_title_color",
	$blog_masonry_title_color
);

$blog_masonry_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_title_hover_color",
	$blog_masonry_title_hover_color
);

$blog_masonry_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_masonry_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_title_fontsize",
	$blog_masonry_title_fontsize
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_masonry_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_masonry_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_title_lineheight",
	$blog_masonry_title_lineheight
);

$blog_masonry_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_masonry_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_title_google_fonts",
	$blog_masonry_title_google_fonts
);

$blog_masonry_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_title_fontstyle",
	$blog_masonry_title_fontstyle
);

$blog_masonry_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_title_fontweight",
	$blog_masonry_title_fontweight
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_masonry_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_masonry_title_texttransform",
	$blog_masonry_title_texttransform
);

$blog_masonry_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_masonry_title_letterspacing",
	$blog_masonry_title_letterspacing
);

$group4 = new MooseElatedGroup(
	esc_html__( "Post Info Data", 'moose' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'moose' )
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

$blog_masonry_info_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_info_color",
	$blog_masonry_info_color
);

$blog_masonry_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_info_link_color",
	$blog_masonry_info_link_color
);

$blog_masonry_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_info_hover_color",
	$blog_masonry_info_hover_color
);

$blog_masonry_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_masonry_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_info_fontsize",
	$blog_masonry_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$blog_masonry_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_masonry_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_info_lineheight",
	$blog_masonry_info_lineheight
);

$blog_masonry_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_masonry_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_info_google_fonts",
	$blog_masonry_info_google_fonts
);

$blog_masonry_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_info_fontstyle",
	$blog_masonry_info_fontstyle
);

$blog_masonry_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_info_fontweight",
	$blog_masonry_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$blog_masonry_info_link_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_info_link_fontweight",
	"",
	esc_html__( "Link Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_masonry_info_link_fontweight",
	$blog_masonry_info_link_fontweight
);

$blog_masonry_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_masonry_info_texttransform",
	$blog_masonry_info_texttransform
);

$blog_masonry_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_masonry_info_letterspacing",
	$blog_masonry_info_letterspacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Quote/Link Title Style", 'moose' ),
	esc_html__( "Define title styles for Quote/Link articles", 'moose' )
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

$blog_masonry_ql_title_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_ql_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_title_color",
	$blog_masonry_ql_title_color
);

$blog_masonry_ql_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_title_hover_color",
	$blog_masonry_ql_title_hover_color
);

$blog_masonry_ql_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_title_font_size",
	$blog_masonry_ql_title_fontsize
);

$blog_masonry_ql_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_title_lineheight",
	$blog_masonry_ql_title_lineheight
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_masonry_ql_title_texttransform",
	$blog_masonry_ql_title_texttransform
);

$blog_masonry_ql_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_masonry_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_ql_title_google_fonts",
	$blog_masonry_ql_title_google_fonts
);

$blog_masonry_ql_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_ql_title_fontstyle",
	$blog_masonry_ql_title_fontstyle
);

$blog_masonry_ql_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_ql_title_fontweight",
	$blog_masonry_ql_title_fontweight
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_masonry_ql_title_letterspacing",
	$blog_masonry_ql_title_letterspacing
);

$group5 = new MooseElatedGroup(
	esc_html__( "Quote/Link Post Info Data", 'moose' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'moose' )
);
$panel10->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_info_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_ql_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_info_color",
	$blog_masonry_ql_info_color
);

$blog_masonry_ql_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_info_link_color",
	$blog_masonry_ql_info_link_color
);

$blog_masonry_ql_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_info_hover_color",
	$blog_masonry_ql_info_hover_color
);

$blog_masonry_ql_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_info_fontsize",
	$blog_masonry_ql_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_ql_info_lineheight",
	$blog_masonry_ql_info_lineheight
);

$blog_masonry_ql_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_masonry_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_ql_info_google_fonts",
	$blog_masonry_ql_info_google_fonts
);

$blog_masonry_ql_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_ql_info_fontstyle",
	$blog_masonry_ql_info_fontstyle
);

$blog_masonry_ql_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_ql_info_fontweight",
	$blog_masonry_ql_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_info_link_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_info_link_fontweight",
	"",
	esc_html__( "Link Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_masonry_ql_info_link_fontweight",
	$blog_masonry_ql_info_link_fontweight
);

$blog_masonry_ql_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_masonry_ql_info_texttransform",
	$blog_masonry_ql_info_texttransform
);

$blog_masonry_ql_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_masonry_ql_info_letterspacing",
	$blog_masonry_ql_info_letterspacing
);

$group6 = new MooseElatedGroup(
	esc_html__( "Quote Author Style", 'moose' ),
	esc_html__( "Define author styles for Quote articles", 'moose' )
);
$panel10->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_author_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_ql_author_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_author_color",
	$blog_masonry_ql_author_color
);

$blog_masonry_ql_author_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_author_hover_color",
	$blog_masonry_ql_author_hover_color
);

$blog_masonry_ql_author_fontsize = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_author_font_size",
	$blog_masonry_ql_author_fontsize
);

$blog_masonry_ql_author_lineheight = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_ql_author_lineheight",
	$blog_masonry_ql_author_lineheight
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_author_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_masonry_ql_author_texttransform",
	$blog_masonry_ql_author_texttransform
);

$blog_masonry_ql_author_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_masonry_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_ql_author_google_fonts",
	$blog_masonry_ql_author_google_fonts
);

$blog_masonry_ql_author_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_ql_author_fontstyle",
	$blog_masonry_ql_author_fontstyle
);

$blog_masonry_ql_author_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_ql_author_fontweight",
	$blog_masonry_ql_author_fontweight
);

$row3 = new MooseElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_author_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_masonry_ql_author_letterspacing",
	$blog_masonry_ql_author_letterspacing
);

$group14 = new MooseElatedGroup(
	esc_html__( "Date Style", 'moose' ),
	esc_html__( "Define style for date box", 'moose' )
);
$panel10->addChild(
	"group14",
	$group14
);

$row1 = new MooseElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$blog_masonry_corner_date_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_corner_date_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_corner_date_color",
	$blog_masonry_corner_date_color
);

$blog_masonry_corner_date_bckg_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_corner_date_bckg_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_corner_date_bckg_color",
	$blog_masonry_corner_date_bckg_color
);

$group15 = new MooseElatedGroup(
	esc_html__( "Comments Style", 'moose' ),
	esc_html__( "Define style for comments box", 'moose' )
);
$panel10->addChild(
	"group15",
	$group15
);

$row1 = new MooseElatedRow();
$group15->addChild(
	"row1",
	$row1
);

$blog_masonry_corner_comments_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_corner_comments_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_corner_comments_color",
	$blog_masonry_corner_comments_color
);

$blog_masonry_corner_comments_bckg_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_corner_comments_bckg_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_corner_comments_bckg_color",
	$blog_masonry_corner_comments_bckg_color
);

// Blog Post List - Blog: Split Column
$panel11 = new MooseElatedPanel(
	esc_html__( "Blog List Template Options: Split Column", 'moose' ),
	"blog_split_column_post_lists",
	"blog_split_column_show_options",
	"no"
);
$blogPage->addChild(
	"panel11",
	$panel11
);

$blog_split_column_number_of_chars = new MooseElatedField(
	"text",
	"blog_split_column_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'moose' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel11->addChild(
	"blog_split_column_number_of_chars",
	$blog_split_column_number_of_chars
);

$blog_split_column_image_size = new MooseElatedField(
	"select",
	"blog_split_column_image_size",
	"full",
	esc_html__( "Blog Image Size", 'moose' ),
	esc_html__( "Choose image size for Post List", 'moose' ),
	array(
		"full" => esc_html__( "Default", 'moose' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'moose' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'moose' ),
		"custom" => esc_html__( "Custom", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"full"                => "#eltdf_blog_split_column_image_size_container",
			"portfolio-landscape" => "#eltdf_blog_split_column_image_size_container",
			"portfolio-portrait"  => "#eltdf_blog_split_column_image_size_container",
			"custom"              => ""
		),
		"show"       => array(
			"full"                => "",
			"portfolio-landscape" => "",
			"portfolio-portrait"  => "",
			"custom"              => "#eltdf_blog_split_column_image_size_container"
		)
	)
);
$panel11->addChild(
	"blog_split_column_image_size",
	$blog_split_column_image_size
);

$blog_split_column_image_size_container = new MooseElatedContainer(
	"blog_split_column_image_size_container",
	"blog_split_column_image_size",
	"",
	array(
		"full",
		"portfolio-landscape",
		"portfolio-portrait"
	)
);
$panel11->addChild(
	"blog_split_column_image_size_container",
	$blog_split_column_image_size_container
);

$blog_split_column_image_size_height = new MooseElatedField(
	"text",
	"blog_split_column_image_size_height",
	"",
	esc_html__( "Image Height (px)", 'moose' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Post List", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_split_column_image_size_container->addChild(
	"blog_split_column_image_size_height",
	$blog_split_column_image_size_height
);

$blog_split_column_image_size_width = new MooseElatedField(
	"text",
	"blog_split_column_image_size_width",
	"",
	esc_html__( "Image Width (px)", 'moose' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Post List", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_split_column_image_size_container->addChild(
	"blog_split_column_image_size_width",
	$blog_split_column_image_size_width
);

$blog_split_column_read_more_button = new MooseElatedField(
	"yesno",
	"blog_split_column_read_more_button",
	"yes",
	esc_html__( "Read More Button", 'moose' ),
	esc_html__( "Enable Read More Button", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_split_column_read_more_button_container"
	)
);
$panel11->addChild(
	"blog_split_column_read_more_button",
	$blog_split_column_read_more_button
);

$blog_split_column_read_more_button_container = new MooseElatedContainer(
	"blog_split_column_read_more_button_container",
	"blog_split_column_read_more_button",
	"no"
);
$panel11->addChild(
	"blog_split_column_read_more_button_container",
	$blog_split_column_read_more_button_container
);

$blog_split_column_read_more_button_icon = new MooseElatedField(
	"yesno",
	"blog_split_column_read_more_button_icon",
	"no",
	esc_html__( "Enable Icon", 'moose' ),
	esc_html__( "Enabling this option will place icon in read more button", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_split_column_read_more_button_icon_container"
	)
);
$blog_split_column_read_more_button_container->addChild(
	"blog_split_column_read_more_button_icon",
	$blog_split_column_read_more_button_icon
);

$blog_split_column_read_more_button_icon_container = new MooseElatedContainer(
	"blog_split_column_read_more_button_icon_container",
	"blog_split_column_read_more_button_icon",
	"no"
);
$blog_split_column_read_more_button_container->addChild(
	"blog_split_column_read_more_button_icon_container",
	$blog_split_column_read_more_button_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$blog_split_column_read_more_button_icon_pack_hide_array = array();
$blog_split_column_read_more_button_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$blog_split_column_read_more_button_icon_collections_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$blog_split_column_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$blog_split_column_read_more_button_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_blog_split_column_read_more_button_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $blog_split_column_read_more_button_icon_collections_params as $blog_split_column_read_more_button_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $blog_split_column_read_more_button_icon_collections_param !== $dep_collection_object->param ) {
				$blog_split_column_read_more_button_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_blog_split_column_read_more_button_icon_' . $blog_split_column_read_more_button_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$blog_split_column_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$blog_split_column_read_more_button_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$blog_split_column_read_more_button_icon_pack = new MooseElatedField(
	"select",
	"blog_split_column_read_more_button_icon_pack",
	"font_awesome",
	esc_html__( "Icon Pack", 'moose' ),
	esc_html__( "Choose icon pack for show load more button", 'moose' ),
	$moose_elated_icon_collections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $blog_split_column_read_more_button_icon_pack_hide_array,
		"show"       => $blog_split_column_read_more_button_icon_pack_show_array
	)
);

$blog_split_column_read_more_button_icon_container->addChild(
	"blog_split_column_read_more_button_icon_pack",
	$blog_split_column_read_more_button_icon_pack
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
		
		$blog_split_column_read_more_button_icon_hide_values = $icon_collections_keys;
		$blog_icon_container                                 = new MooseElatedContainer(
			"blog_split_column_read_more_button_icon_" . $collection_object->param . "_container",
			"blog_split_column_read_more_button_icon_pack",
			"",
			$blog_split_column_read_more_button_icon_hide_values
		);
		$blog_split_column_read_more_button_icon             = new MooseElatedField(
			"select",
			"blog_split_column_read_more_button_icon_" . $collection_object->param,
			"",
			esc_html__( "Button Icon", 'moose' ),
			esc_html__( "Choose Button Icon", 'moose' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$blog_icon_container->addChild(
			"blog_split_column_read_more_button_icon_" . $collection_object->param,
			$blog_split_column_read_more_button_icon
		);
		
		$blog_split_column_read_more_button_icon_container->addChild(
			"blog_split_column_read_more_button_icon_" . $collection_object->param . "_container",
			$blog_icon_container
		);
	}
	
}

$blog_split_column_content_position = new MooseElatedField(
	"select",
	"blog_split_column_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'moose' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'moose' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'moose' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'moose' )
	)
);
$panel11->addChild(
	"blog_split_column_content_position",
	$blog_split_column_content_position
);

$blog_split_column_post_meta_data_section = new MooseElatedTitle(
	"blog_split_column_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'moose' )
);
$panel11->addChild(
	"blog_split_column_post_meta_data_section",
	$blog_split_column_post_meta_data_section
);

$blog_split_column_show_categories = new MooseElatedField(
	"yesno",
	"blog_split_column_show_categories",
	"no",
	esc_html__( "Show Categories", 'moose' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'moose' )
);
$panel11->addChild(
	"blog_split_column_show_categories",
	$blog_split_column_show_categories
);

$blog_split_column_show_comments = new MooseElatedField(
	"yesno",
	"blog_split_column_show_comments",
	"yes",
	esc_html__( "Show Comments", 'moose' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'moose' )
);
$panel11->addChild(
	"blog_split_column_show_comments",
	$blog_split_column_show_comments
);

$blog_split_column_show_author = new MooseElatedField(
	"yesno",
	"blog_split_column_show_author",
	"yes",
	esc_html__( "Show Author Name", 'moose' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'moose' )
);
$panel11->addChild(
	"blog_split_column_show_author",
	$blog_split_column_show_author
);

$blog_split_column_show_date = new MooseElatedField(
	"yesno",
	"blog_split_column_show_date",
	"yes",
	esc_html__( "Show Date", 'moose' ),
	esc_html__( "Enabling this option will show date on Post List", 'moose' )
);
$panel11->addChild(
	"blog_split_column_hide_date",
	$blog_split_column_show_date
);

$blog_split_column_show_share = new MooseElatedField(
	"yesno",
	"blog_split_column_show_share",
	"no",
	esc_html__( "Show Share", 'moose' ),
	esc_html__( "Enabling this option will show share on Post List", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_split_column_share_options_container"
	)
);
$panel11->addChild(
	"blog_split_column_show_share",
	$blog_split_column_show_share
);

$blog_split_column_share_options_container = new MooseElatedContainer(
	"blog_split_column_share_options_container",
	"blog_split_column_show_share",
	"no"
);
$panel11->addChild(
	"blog_split_column_share_options_container",
	$blog_split_column_share_options_container
);

$blog_split_column_select_share_option = new MooseElatedField(
	"select",
	"blog_split_column_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'moose' ),
	esc_html__( "Choose Social Share Style for Split Column Type", 'moose' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'moose' ),
		"list" => esc_html__( "Social Share List", 'moose' )
	)
);

$blog_split_column_share_options_container->addChild(
	"blog_split_column_select_share_option",
	$blog_split_column_select_share_option
);

$blog_split_column_share_icon_color = new MooseElatedField(
	"color",
	"blog_split_column_share_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for share dropdown", 'moose' )
);
$blog_split_column_share_options_container->addChild(
	"blog_split_column_share_icon_color",
	$blog_split_column_share_icon_color
);

$blog_split_column_share_hld_hover_icon_color = new MooseElatedField(
	"color",
	"blog_split_column_share_hld_hover_icon_color",
	"",
	esc_html__( "Icon color on Quote/Link Holder Hover", 'moose' ),
	esc_html__( "Choose icon color for share dropdown when the quote/link holder is hovered over", 'moose' )
);
$blog_split_column_share_options_container->addChild(
	"blog_split_column_share_hld_hover_icon_color",
	$blog_split_column_share_hld_hover_icon_color
);

$blog_split_column_share_icon_hover_color = new MooseElatedField(
	"color",
	"blog_split_column_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose icon hover color for share dropdown", 'moose' )
);
$blog_split_column_share_options_container->addChild(
	"blog_split_column_share_icon_hover_color",
	$blog_split_column_share_icon_hover_color
);

$blog_split_column_share_background_color = new MooseElatedField(
	"color",
	"blog_split_column_share_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for share dropdown list field", 'moose' )
);
$blog_split_column_share_options_container->addChild(
	"blog_split_column_share_background_color",
	$blog_split_column_share_background_color
);

$blog_split_column_show_like = new MooseElatedField(
	"yesno",
	"blog_split_column_show_like",
	"no",
	esc_html__( "Show Likes", 'moose' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'moose' )
);
$panel11->addChild(
	"blog_split_column_show_like",
	$blog_split_column_show_like
);

$blog_split_column_post_design_style = new MooseElatedTitle(
	"blog_split_column_post_design_style",
	esc_html__( "Post Design Style", 'moose' )
);
$panel11->addChild(
	"blog_split_column_post_design_style",
	$blog_split_column_post_design_style
);

$blog_split_column_enable_text_box = new MooseElatedField(
	"yesno",
	"blog_split_column_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'moose' ),
	esc_html__( "Enable post text boxed features", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_split_column_enable_text_box_container"
	)
);
$panel11->addChild(
	"blog_split_column_enable_text_box",
	$blog_split_column_enable_text_box
);

$blog_split_column_enable_text_box_container = new MooseElatedContainer(
	"blog_split_column_enable_text_box_container",
	"blog_split_column_enable_text_box",
	"no"
);
$panel11->addChild(
	"blog_split_column_enable_text_box_container",
	$blog_split_column_enable_text_box_container
);

$blog_split_column_box_background_color = new MooseElatedField(
	"color",
	"blog_split_column_box_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for post text box", 'moose' )
);
$blog_split_column_enable_text_box_container->addChild(
	"blog_split_column_box_background_color",
	$blog_split_column_box_background_color
);

$blog_split_column_box_border_color = new MooseElatedField(
	"color",
	"blog_split_column_box_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose border color for post text box", 'moose' )
);
$blog_split_column_enable_text_box_container->addChild(
	"blog_split_column_box_border_color",
	$blog_split_column_box_border_color
);

$blog_split_column_box_padding = new MooseElatedField(
	"text",
	"blog_split_column_box_padding",
	"",
	esc_html__( "Text box padding", 'moose' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_split_column_enable_text_box_container->addChild(
	"blog_split_column_box_padding",
	$blog_split_column_box_padding
);

$group8 = new MooseElatedGroup(
	esc_html__( "Paragraph", 'moose' ),
	esc_html__( "Set paragraph color", 'moose' )
);
$panel11->addChild(
	"group8",
	$group8
);

$blog_split_column_paragraph_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_paragraph_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$group8->addChild(
	"blog_split_column_paragraph_color",
	$blog_split_column_paragraph_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Quote/Link Background", 'moose' ),
	esc_html__( "Set background of Quote/Link post type", 'moose' )
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

$blog_split_column_ql_background_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_ql_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Default color is #ffffff.", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_background_color",
	$blog_split_column_ql_background_color
);

$blog_split_column_ql_hover_background_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "Default color is #e6ae48.", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_hover_background_color",
	$blog_split_column_ql_hover_background_color
);

$blog_split_column_show_ql_mark = new MooseElatedField(
	"yesno",
	"blog_split_column_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'moose' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_split_column_show_ql_mark_container"
	)
);
$panel11->addChild(
	"blog_split_column_show_ql_mark",
	$blog_split_column_show_ql_mark
);

$blog_split_column_show_ql_mark_container = new MooseElatedContainer(
	"blog_split_column_show_ql_mark_container",
	"blog_split_column_show_ql_mark",
	"no"
);
$panel11->addChild(
	"blog_split_column_show_ql_mark_container",
	$blog_split_column_show_ql_mark_container
);

$row1 = new MooseElatedRow();
$blog_split_column_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_mark_color = new MooseElatedField(
	"color",
	"blog_split_column_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for quote/link post.", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_mark_color",
	$blog_split_column_ql_mark_color
);

$blog_split_column_ql_mark_hover_color = new MooseElatedField(
	"color",
	"blog_split_column_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_mark_hover_color",
	$blog_split_column_ql_mark_hover_color
);

$group9 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing", 'moose' ),
	esc_html__( "Set spacing for blog layouts", 'moose' )
);
$panel11->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_split_column_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_split_column_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_title_margin_bottom",
	$blog_split_column_title_margin_bottom
);

$blog_split_column_post_info_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_split_column_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_post_info_margin_bottom",
	$blog_split_column_post_info_margin_bottom
);

$blog_split_column_read_more_margin_top = new MooseElatedField(
	"textsimple",
	"blog_split_column_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_read_more_margin_top",
	$blog_split_column_read_more_margin_top
);

$blog_split_column_social_share_list_margin_top = new MooseElatedField(
	"textsimple",
	"blog_split_column_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_social_share_list_margin_top",
	$blog_split_column_social_share_list_margin_top
);

$row2 = new MooseElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$blog_split_column_article_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_split_column_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_article_margin_bottom",
	$blog_split_column_article_margin_bottom
);

$group10 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'moose' ),
	esc_html__( "Set spacing for blog layouts", 'moose' )
);
$panel11->addChild(
	"group10",
	$group10
);

$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_title_margin_bottom",
	$blog_split_column_ql_title_margin_bottom
);

$blog_split_column_ql_quote_author_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_quote_author_margin_bottom",
	$blog_split_column_ql_quote_author_margin_bottom
);

$blog_split_column_ql_share_list_margin_top = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_share_list_margin_top",
	$blog_split_column_ql_share_list_margin_top
);

$post_text_styling = new MooseElatedTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'moose' )
);
$panel11->addChild(
	"post_text_styling",
	$post_text_styling
);

$group2 = new MooseElatedGroup(
	esc_html__( "Post Title", 'moose' ),
	esc_html__( "Define title styles in this blog post template.", 'moose' )
);
$panel11->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_split_column_title_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_title_color",
	$blog_split_column_title_color
);

$blog_split_column_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_title_hover_color",
	$blog_split_column_title_hover_color
);

$blog_split_column_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_split_column_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_title_fontsize",
	$blog_split_column_title_fontsize
);

$blog_split_column_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_split_column_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_title_lineheight",
	$blog_split_column_title_lineheight
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_split_column_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_split_column_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_split_column_title_google_fonts",
	$blog_split_column_title_google_fonts
);

$blog_split_column_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_split_column_title_fontstyle",
	$blog_split_column_title_fontstyle
);

$blog_split_column_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_split_column_title_fontweight",
	$blog_split_column_title_fontweight
);

$blog_split_column_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_split_column_title_texttransform",
	$blog_split_column_title_texttransform
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_split_column_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_split_column_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_split_column_title_letterspacing",
	$blog_split_column_title_letterspacing
);

$group4 = new MooseElatedGroup(
	esc_html__( "Post Info Data", 'moose' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'moose' )
);
$panel11->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$blog_split_column_info_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_info_color",
	$blog_split_column_info_color
);

$blog_split_column_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_info_link_color",
	$blog_split_column_info_link_color
);

$blog_split_column_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_info_hover_color",
	$blog_split_column_info_hover_color
);

$blog_split_column_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_split_column_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_info_fontsize",
	$blog_split_column_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$blog_split_column_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_split_column_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_split_column_info_lineheight",
	$blog_split_column_info_lineheight
);

$blog_split_column_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_split_column_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_split_column_info_google_fonts",
	$blog_split_column_info_google_fonts
);

$blog_split_column_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_split_column_info_fontstyle",
	$blog_split_column_info_fontstyle
);

$blog_split_column_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_split_column_info_fontweight",
	$blog_split_column_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$blog_split_column_info_link_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_info_link_fontweight",
	"",
	esc_html__( "Link Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_split_column_info_link_fontweight",
	$blog_split_column_info_link_fontweight
);

$blog_split_column_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_split_column_info_texttransform",
	$blog_split_column_info_texttransform
);

$blog_split_column_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_split_column_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_split_column_info_letterspacing",
	$blog_split_column_info_letterspacing
);

$group3 = new MooseElatedGroup(
	esc_html__( "Quote/Link Title Style", 'moose' ),
	esc_html__( "Define title styles for Quote/Link articles", 'moose' )
);
$panel11->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_title_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_ql_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_title_color",
	$blog_split_column_ql_title_color
);

$blog_split_column_ql_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_title_hover_color",
	$blog_split_column_ql_title_hover_color
);

$blog_split_column_ql_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_title_font_size",
	$blog_split_column_ql_title_fontsize
);

$row2 = new MooseElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_split_column_ql_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_split_column_ql_title_lineheight",
	$blog_split_column_ql_title_lineheight
);

$blog_split_column_ql_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_split_column_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_split_column_ql_title_google_fonts",
	$blog_split_column_ql_title_google_fonts
);

$blog_split_column_ql_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_split_column_ql_title_fontstyle",
	$blog_split_column_ql_title_fontstyle
);

$blog_split_column_ql_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_split_column_ql_title_fontweight",
	$blog_split_column_ql_title_fontweight
);

$row3 = new MooseElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$blog_split_column_ql_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_split_column_ql_title_texttransform",
	$blog_split_column_ql_title_texttransform
);

$blog_split_column_ql_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_split_column_ql_title_letterspacing",
	$blog_split_column_ql_title_letterspacing
);

$group5 = new MooseElatedGroup(
	esc_html__( "Quote/Link Post Info Data", 'moose' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'moose' )
);
$panel11->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_info_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_ql_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_info_color",
	$blog_split_column_ql_info_color
);

$blog_split_column_ql_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_info_link_color",
	$blog_split_column_ql_info_link_color
);

$blog_split_column_ql_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_ql_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_info_hover_color",
	$blog_split_column_ql_info_hover_color
);

$blog_split_column_ql_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_info_fontsize",
	$blog_split_column_ql_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_split_column_ql_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_split_column_ql_info_lineheight",
	$blog_split_column_ql_info_lineheight
);

$blog_split_column_ql_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_split_column_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_split_column_ql_info_google_fonts",
	$blog_split_column_ql_info_google_fonts
);

$blog_split_column_ql_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_split_column_ql_info_fontstyle",
	$blog_split_column_ql_info_fontstyle
);

$blog_split_column_ql_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_split_column_ql_info_fontweight",
	$blog_split_column_ql_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_split_column_ql_info_link_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_info_link_fontweight",
	"",
	esc_html__( "Link Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_split_column_ql_info_link_fontweight",
	$blog_split_column_ql_info_link_fontweight
);

$blog_split_column_ql_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_split_column_ql_info_texttransform",
	$blog_split_column_ql_info_texttransform
);

$blog_split_column_ql_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_split_column_ql_info_letterspacing",
	$blog_split_column_ql_info_letterspacing
);

$group6 = new MooseElatedGroup(
	esc_html__( "Quote Author Style", 'moose' ),
	esc_html__( "Define author styles for Quote articles", 'moose' )
);
$panel11->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_split_column_ql_author_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_ql_author_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_author_color",
	$blog_split_column_ql_author_color
);

$blog_split_column_ql_author_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_author_hover_color",
	$blog_split_column_ql_author_hover_color
);

$blog_split_column_ql_author_fontsize = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_author_font_size",
	$blog_split_column_ql_author_fontsize
);

$blog_split_column_ql_author_lineheight = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_ql_author_lineheight",
	$blog_split_column_ql_author_lineheight
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_split_column_ql_author_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_split_column_ql_author_texttransform",
	$blog_split_column_ql_author_texttransform
);

$blog_split_column_ql_author_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_split_column_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_split_column_ql_author_google_fonts",
	$blog_split_column_ql_author_google_fonts
);

$blog_split_column_ql_author_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_split_column_ql_author_fontstyle",
	$blog_split_column_ql_author_fontstyle
);

$blog_split_column_ql_author_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_split_column_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_split_column_ql_author_fontweight",
	$blog_split_column_ql_author_fontweight
);

$row3 = new MooseElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_split_column_ql_author_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_split_column_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_split_column_ql_author_letterspacing",
	$blog_split_column_ql_author_letterspacing
);

$group14 = new MooseElatedGroup(
	esc_html__( "Date Style", 'moose' ),
	esc_html__( "Define style for date box", 'moose' )
);
$panel11->addChild(
	"group14",
	$group14
);

$row1 = new MooseElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$blog_split_column_corner_date_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_corner_date_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_corner_date_color",
	$blog_split_column_corner_date_color
);

$blog_split_column_corner_date_bckg_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_corner_date_bckg_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_corner_date_bckg_color",
	$blog_split_column_corner_date_bckg_color
);

$group15 = new MooseElatedGroup(
	esc_html__( "Comments Style", 'moose' ),
	esc_html__( "Define style for comments box", 'moose' )
);
$panel11->addChild(
	"group15",
	$group15
);

$row1 = new MooseElatedRow();
$group15->addChild(
	"row1",
	$row1
);

$blog_split_column_corner_comments_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_corner_comments_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_corner_comments_color",
	$blog_split_column_corner_comments_color
);

$blog_split_column_corner_comments_bckg_color = new MooseElatedField(
	"colorsimple",
	"blog_split_column_corner_comments_bckg_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_split_column_corner_comments_bckg_color",
	$blog_split_column_corner_comments_bckg_color
);

// Blog Post List - Blog: Standard
$panel21 = new MooseElatedPanel(
	esc_html__( "Blog List Template Options: Standard", 'moose' ),
	"blog_standard_type_post_lists",
	"blog_standard_type_show_options",
	"no"
);
$blogPage->addChild(
	"panel21",
	$panel21
);

$blog_standard_type_number_of_chars = new MooseElatedField(
	"text",
	"blog_standard_type_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'moose' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel21->addChild(
	"blog_standard_type_number_of_chars",
	$blog_standard_type_number_of_chars
);

$blog_standard_type_image_size = new MooseElatedField(
	"select",
	"blog_standard_type_image_size",
	"full",
	esc_html__( "Blog Image Size", 'moose' ),
	esc_html__( "Choose image size for Post List", 'moose' ),
	array(
		"full" => esc_html__( "Default", 'moose' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'moose' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'moose' ),
		"custom" => esc_html__( "Custom", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"full"                => "#eltdf_blog_standard_type_image_size_container",
			"portfolio-landscape" => "#eltdf_blog_standard_type_image_size_container",
			"portfolio-portrait"  => "#eltdf_blog_standard_type_image_size_container",
			"custom"              => ""
		),
		"show"       => array(
			"full"                => "",
			"portfolio-landscape" => "",
			"portfolio-portrait"  => "",
			"custom"              => "#eltdf_blog_standard_type_image_size_container"
		)
	)
);
$panel21->addChild(
	"blog_standard_type_image_size",
	$blog_standard_type_image_size
);

$blog_standard_type_image_size_container = new MooseElatedContainer(
	"blog_standard_type_image_size_container",
	"blog_standard_type_image_size",
	"",
	array(
		"full",
		"portfolio-landscape",
		"portfolio-portrait"
	)
);
$panel21->addChild(
	"blog_standard_type_image_size_container",
	$blog_standard_type_image_size_container
);

$blog_standard_type_image_size_height = new MooseElatedField(
	"text",
	"blog_standard_type_image_size_height",
	"",
	esc_html__( "Image Height (px)", 'moose' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Post List", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_image_size_container->addChild(
	"blog_standard_type_image_size_height",
	$blog_standard_type_image_size_height
);

$blog_standard_type_image_size_width = new MooseElatedField(
	"text",
	"blog_standard_type_image_size_width",
	"",
	esc_html__( "Image Width (px)", 'moose' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Post List", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_image_size_container->addChild(
	"blog_standard_type_image_size_width",
	$blog_standard_type_image_size_width
);

$blog_standard_type_read_more_button = new MooseElatedField(
	"yesno",
	"blog_standard_type_read_more_button",
	"yes",
	esc_html__( "Read More Button", 'moose' ),
	esc_html__( "Enable Read More Button", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_read_more_button_container"
	)
);
$panel21->addChild(
	"blog_standard_type_read_more_button",
	$blog_standard_type_read_more_button
);

$blog_standard_type_read_more_button_container = new MooseElatedContainer(
	"blog_standard_type_read_more_button_container",
	"blog_standard_type_read_more_button",
	"no"
);
$panel21->addChild(
	"blog_standard_type_read_more_button_container",
	$blog_standard_type_read_more_button_container
);

$blog_standard_type_read_more_button_icon = new MooseElatedField(
	"yesno",
	"blog_standard_type_read_more_button_icon",
	"no",
	esc_html__( "Enable Icon", 'moose' ),
	esc_html__( "Enabling this option will place icon in read more button", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_read_more_button_icon_container"
	)
);
$blog_standard_type_read_more_button_container->addChild(
	"blog_standard_type_read_more_button_icon",
	$blog_standard_type_read_more_button_icon
);

$blog_standard_type_read_more_button_icon_container = new MooseElatedContainer(
	"blog_standard_type_read_more_button_icon_container",
	"blog_standard_type_read_more_button_icon",
	"no"
);
$blog_standard_type_read_more_button_container->addChild(
	"blog_standard_type_read_more_button_icon_container",
	$blog_standard_type_read_more_button_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$blog_standard_type_read_more_button_icon_pack_hide_array = array();
$blog_standard_type_read_more_button_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$blog_standard_type_read_more_button_icon_collections_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$blog_standard_type_read_more_button_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_blog_standard_type_read_more_button_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $blog_standard_type_read_more_button_icon_collections_params as $blog_standard_type_read_more_button_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $blog_standard_type_read_more_button_icon_collections_param !== $dep_collection_object->param ) {
				$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_blog_standard_type_read_more_button_icon_' . $blog_standard_type_read_more_button_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$blog_standard_type_read_more_button_icon_pack = new MooseElatedField(
	"select",
	"blog_standard_type_read_more_button_icon_pack",
	"font_awesome",
	esc_html__( "Icon Pack", 'moose' ),
	esc_html__( "Choose icon pack for show load more button", 'moose' ),
	$moose_elated_icon_collections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $blog_standard_type_read_more_button_icon_pack_hide_array,
		"show"       => $blog_standard_type_read_more_button_icon_pack_show_array
	)
);

$blog_standard_type_read_more_button_icon_container->addChild(
	"blog_standard_type_read_more_button_icon_pack",
	$blog_standard_type_read_more_button_icon_pack
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
		
		$blog_standard_type_read_more_button_icon_hide_values = $icon_collections_keys;
		$blog_icon_container                                  = new MooseElatedContainer(
			"blog_standard_type_read_more_button_icon_" . $collection_object->param . "_container",
			"blog_standard_type_read_more_button_icon_pack",
			"",
			$blog_standard_type_read_more_button_icon_hide_values
		);
		$blog_standard_type_read_more_button_icon             = new MooseElatedField(
			"select",
			"blog_standard_type_read_more_button_icon_" . $collection_object->param,
			"",
			esc_html__( "Button Icon", 'moose' ),
			esc_html__( "Choose Button Icon", 'moose' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$blog_icon_container->addChild(
			"blog_standard_type_read_more_button_icon_" . $collection_object->param,
			$blog_standard_type_read_more_button_icon
		);
		
		$blog_standard_type_read_more_button_icon_container->addChild(
			"blog_standard_type_read_more_button_icon_" . $collection_object->param . "_container",
			$blog_icon_container
		);
	}
	
}

$blog_standard_type_content_position = new MooseElatedField(
	"select",
	"blog_standard_type_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'moose' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'moose' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'moose' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'moose' )
	)
);
$panel21->addChild(
	"blog_standard_type_content_position",
	$blog_standard_type_content_position
);

$blog_standard_type_post_meta_data_section = new MooseElatedTitle(
	"blog_standard_type_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'moose' )
);
$panel21->addChild(
	"blog_standard_type_post_meta_data_section",
	$blog_standard_type_post_meta_data_section
);

$blog_standard_type_show_categories = new MooseElatedField(
	"yesno",
	"blog_standard_type_show_categories",
	"yes",
	esc_html__( "Show Categories", 'moose' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'moose' )
);
$panel21->addChild(
	"blog_standard_type_show_categories",
	$blog_standard_type_show_categories
);

$blog_standard_type_show_comments = new MooseElatedField(
	"yesno",
	"blog_standard_type_show_comments",
	"yes",
	esc_html__( "Show Comments", 'moose' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'moose' )
);
$panel21->addChild(
	"blog_standard_type_show_comments",
	$blog_standard_type_show_comments
);

$blog_standard_type_show_author = new MooseElatedField(
	"yesno",
	"blog_standard_type_show_author",
	"yes",
	esc_html__( "Show Author Name", 'moose' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'moose' )
);
$panel21->addChild(
	"blog_standard_type_show_author",
	$blog_standard_type_show_author
);

$blog_standard_type_show_date = new MooseElatedField(
	"yesno",
	"blog_standard_type_show_date",
	"yes",
	esc_html__( "Show Date", 'moose' ),
	esc_html__( "Enabling this option will show date on Post List", 'moose' )
);
$panel21->addChild(
	"blog_standard_type_hide_date",
	$blog_standard_type_show_date
);

$blog_standard_type_show_share = new MooseElatedField(
	"yesno",
	"blog_standard_type_show_share",
	"no",
	esc_html__( "Show Share", 'moose' ),
	esc_html__( "Enabling this option will show share on Post List", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_share_options_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_share",
	$blog_standard_type_show_share
);

$blog_standard_type_share_options_container = new MooseElatedContainer(
	"blog_standard_type_share_options_container",
	"blog_standard_type_show_share",
	"no"
);
$panel21->addChild(
	"blog_standard_type_share_options_container",
	$blog_standard_type_share_options_container
);

$blog_standard_type_select_share_option = new MooseElatedField(
	"select",
	"blog_standard_type_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'moose' ),
	esc_html__( "Choose Social Share Style for Standard Type", 'moose' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'moose' ),
		"list" => esc_html__( "Social Share List", 'moose' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"dropdown" => "#eltdf_blog_standard_type_share_list_type_container",
			"list"     => "#eltdf_blog_standard_type_share_dropdown_type_container"
		),
		"show"       => array(
			"dropdown" => "#eltdf_blog_standard_type_share_dropdown_type_container",
			"list"     => "#eltdf_blog_standard_type_share_list_type_container"
		)
	)
);

$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_select_share_option",
	$blog_standard_type_select_share_option
);

$blog_standard_type_share_list_type_container = new MooseElatedContainer(
	"blog_standard_type_share_list_type_container",
	"blog_standard_type_select_share_option",
	"dropdown"
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_list_type_container",
	$blog_standard_type_share_list_type_container
);

$blog_standard_type_share_hld_hover_icon_color = new MooseElatedField(
	"color",
	"blog_standard_type_share_hld_hover_icon_color",
	"",
	esc_html__( "Icon color on Quote/Link Holder Hover", 'moose' ),
	esc_html__( "Choose icon color for list share type when the quote/link holder is hovered over", 'moose' )
);
$blog_standard_type_share_list_type_container->addChild(
	"blog_standard_type_share_hld_hover_icon_color",
	$blog_standard_type_share_hld_hover_icon_color
);

$blog_standard_type_share_dropdown_type_container = new MooseElatedContainer(
	"blog_standard_type_share_dropdown_type_container",
	"blog_standard_type_select_share_option",
	"list"
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_dropdown_type_container",
	$blog_standard_type_share_dropdown_type_container
);

$blog_standard_type_share_background_color = new MooseElatedField(
	"color",
	"blog_standard_type_share_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for dropdown share type", 'moose' )
);
$blog_standard_type_share_dropdown_type_container->addChild(
	"blog_standard_type_share_background_color",
	$blog_standard_type_share_background_color
);

$blog_standard_type_share_background_color_link_post_type = new MooseElatedField(
	"color",
	"blog_standard_type_share_background_color_link_post_type",
	"",
	esc_html__( "Background Color on Quote/Link Post Type", 'moose' ),
	esc_html__( "Choose background color for dropdown share type on quote post type", 'moose' )
);
$blog_standard_type_share_dropdown_type_container->addChild(
	"blog_standard_type_share_background_color_link_post_type",
	$blog_standard_type_share_background_color_link_post_type
);

$blog_standard_type_share_icon_color = new MooseElatedField(
	"color",
	"blog_standard_type_share_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for dropdown and list share type", 'moose' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_color",
	$blog_standard_type_share_icon_color
);

$blog_standard_type_share_icon_hover_color = new MooseElatedField(
	"color",
	"blog_standard_type_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type", 'moose' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_hover_color",
	$blog_standard_type_share_icon_hover_color
);

$blog_standard_type_share_icon_color_link_post_type = new MooseElatedField(
	"color",
	"blog_standard_type_share_icon_color_link_post_type",
	"",
	esc_html__( "Icon Color For Quote/Link Post Type", 'moose' ),
	esc_html__( "Choose icon color for dropdown and list share type for quote post type", 'moose' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_color_link_post_type",
	$blog_standard_type_share_icon_color_link_post_type
);

$blog_standard_type_share_icon_hover_color_link_post_type = new MooseElatedField(
	"color",
	"blog_standard_type_share_icon_hover_color_link_post_type",
	"",
	esc_html__( "Icon Hover Color For Quote/Link Post Type", 'moose' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type for quote post type", 'moose' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_hover_color_link_post_type",
	$blog_standard_type_share_icon_hover_color_link_post_type
);

$blog_standard_type_show_like = new MooseElatedField(
	"yesno",
	"blog_standard_type_show_like",
	"no",
	esc_html__( "Show Likes", 'moose' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'moose' )
);
$panel21->addChild(
	"blog_standard_type_show_like",
	$blog_standard_type_show_like
);

$blog_standard_type_post_design_style = new MooseElatedTitle(
	"blog_standard_type_post_design_style",
	esc_html__( "Post Design Style", 'moose' )
);
$panel21->addChild(
	"blog_standard_type_post_design_style",
	$blog_standard_type_post_design_style
);

$blog_standard_type_enable_text_box = new MooseElatedField(
	"yesno",
	"blog_standard_type_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'moose' ),
	esc_html__( "Enable post text boxed features", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_enable_text_box_container"
	)
);
$panel21->addChild(
	"blog_standard_type_enable_text_box",
	$blog_standard_type_enable_text_box
);

$blog_standard_type_enable_text_box_container = new MooseElatedContainer(
	"blog_standard_type_enable_text_box_container",
	"blog_standard_type_enable_text_box",
	"no"
);
$panel21->addChild(
	"blog_standard_type_enable_text_box_container",
	$blog_standard_type_enable_text_box_container
);

$blog_standard_type_box_background_color = new MooseElatedField(
	"color",
	"blog_standard_type_box_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for post text box", 'moose' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_background_color",
	$blog_standard_type_box_background_color
);

$blog_standard_type_box_border_color = new MooseElatedField(
	"color",
	"blog_standard_type_box_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose border color for post text box", 'moose' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_border_color",
	$blog_standard_type_box_border_color
);

$blog_standard_type_box_padding = new MooseElatedField(
	"text",
	"blog_standard_type_box_padding",
	"",
	esc_html__( "Text box padding", 'moose' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_padding",
	$blog_standard_type_box_padding
);

$group10 = new MooseElatedGroup(
	esc_html__( "Paragraph", 'moose' ),
	esc_html__( "Set paragraph color", 'moose' )
);
$panel21->addChild(
	"group10",
	$group10
);

$blog_standard_type_paragraph_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_paragraph_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$group10->addChild(
	"blog_standard_type_paragraph_color",
	$blog_standard_type_paragraph_color
);

$group1 = new MooseElatedGroup(
	esc_html__( "Quote/Link Background", 'moose' ),
	esc_html__( "Set background of Quote/Link post type", 'moose' )
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

$blog_standard_type_ql_background_image = new MooseElatedField(
	"yesnosimple",
	"blog_standard_type_ql_background_image",
	"yes",
	esc_html__( "Background Image", 'moose' ),
	""
);
$row1->addChild(
	"blog_standard_type_ql_background_image",
	$blog_standard_type_ql_background_image
);

$blog_standard_type_ql_background_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_ql_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Default color is #ffffff.", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_background_color",
	$blog_standard_type_ql_background_color
);

$blog_standard_type_ql_hover_background_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "Default color is #e6ae48.", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_hover_background_color",
	$blog_standard_type_ql_hover_background_color
);

$blog_standard_type_show_ql_mark = new MooseElatedField(
	"yesno",
	"blog_standard_type_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'moose' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_show_ql_mark_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark",
	$blog_standard_type_show_ql_mark
);

$blog_standard_type_show_ql_mark_container = new MooseElatedContainer(
	"blog_standard_type_show_ql_mark_container",
	"blog_standard_type_show_ql_mark",
	"no"
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark_container",
	$blog_standard_type_show_ql_mark_container
);

$row1 = new MooseElatedRow();
$blog_standard_type_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_mark_color = new MooseElatedField(
	"color",
	"blog_standard_type_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for quote/link post.", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_color",
	$blog_standard_type_ql_mark_color
);

$blog_standard_type_ql_mark_hover_color = new MooseElatedField(
	"color",
	"blog_standard_type_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_hover_color",
	$blog_standard_type_ql_mark_hover_color
);

$group11 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing", 'moose' ),
	esc_html__( "Set spacing for blog layouts", 'moose' )
);
$panel21->addChild(
	"group11",
	$group11
);

$row1 = new MooseElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_standard_type_image_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_standard_type_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_image_margin_bottom",
	$blog_standard_type_image_margin_bottom
);

$blog_standard_type_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_standard_type_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_title_margin_bottom",
	$blog_standard_type_title_margin_bottom
);

$blog_standard_type_read_more_margin_top = new MooseElatedField(
	"textsimple",
	"blog_standard_type_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_read_more_margin_top",
	$blog_standard_type_read_more_margin_top
);

$blog_standard_type_post_info_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_standard_type_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_post_info_margin_bottom",
	$blog_standard_type_post_info_margin_bottom
);

$row2 = new MooseElatedRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_standard_type_article_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_standard_type_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_standard_type_article_margin_bottom",
	$blog_standard_type_article_margin_bottom
);

$blog_standard_type_single_article_social_share_list_margin_top = new MooseElatedField(
	"textsimple",
	"blog_standard_type_single_article_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_standard_type_single_article_social_share_list_margin_top",
	$blog_standard_type_single_article_social_share_list_margin_top
);

$group12 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'moose' ),
	esc_html__( "Set spacing for blog layouts", 'moose' )
);
$panel21->addChild(
	"group12",
	$group12
);

$row1 = new MooseElatedRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_title_margin_bottom",
	$blog_standard_type_ql_title_margin_bottom
);

$blog_standard_type_ql_social_share_list_margin_top = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_social_share_list_margin_top",
	$blog_standard_type_ql_social_share_list_margin_top
);

$blog_standard_type_ql_quote_author_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_quote_author_margin_bottom",
	$blog_standard_type_ql_quote_author_margin_bottom
);

$post_text_styling = new MooseElatedTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'moose' )
);
$panel21->addChild(
	"post_text_styling",
	$post_text_styling
);

$group5 = new MooseElatedGroup(
	esc_html__( "Post Title", 'moose' ),
	esc_html__( "Define title styles in this blog post template.", 'moose' )
);
$panel21->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_standard_type_title_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_title_color",
	$blog_standard_type_title_color
);

$blog_standard_type_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_title_hover_color",
	$blog_standard_type_title_hover_color
);

$blog_standard_type_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_standard_type_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_title_fontsize",
	$blog_standard_type_title_fontsize
);

$blog_standard_type_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_standard_type_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_title_lineheight",
	$blog_standard_type_title_lineheight
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_standard_type_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_standard_type_title_texttransform",
	$blog_standard_type_title_texttransform
);

$blog_standard_type_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_standard_type_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_standard_type_title_google_fonts",
	$blog_standard_type_title_google_fonts
);

$blog_standard_type_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_standard_type_title_fontstyle",
	$blog_standard_type_title_fontstyle
);

$blog_standard_type_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_standard_type_title_fontweight",
	$blog_standard_type_title_fontweight
);

$row3 = new MooseElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_standard_type_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_standard_type_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_standard_type_title_letterspacing",
	$blog_standard_type_title_letterspacing
);

$group7 = new MooseElatedGroup(
	esc_html__( "Post Info Data", 'moose' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'moose' )
);
$panel21->addChild(
	"group7",
	$group7
);

$row1 = new MooseElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$blog_standard_type_info_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_info_color",
	$blog_standard_type_info_color
);

$blog_standard_type_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_info_link_color",
	$blog_standard_type_info_link_color
);

$blog_standard_type_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_info_hover_color",
	$blog_standard_type_info_hover_color
);

$blog_standard_type_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_standard_type_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_info_fontsize",
	$blog_standard_type_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$blog_standard_type_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_standard_type_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_standard_type_info_lineheight",
	$blog_standard_type_info_lineheight
);

$blog_standard_type_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_standard_type_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_standard_type_info_google_fonts",
	$blog_standard_type_info_google_fonts
);

$blog_standard_type_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_standard_type_info_fontstyle",
	$blog_standard_type_info_fontstyle
);

$blog_standard_type_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_standard_type_info_fontweight",
	$blog_standard_type_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);

$blog_standard_type_info_link_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_info_link_fontweight",
	"",
	esc_html__( "Link Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_standard_type_info_link_fontweight",
	$blog_standard_type_info_link_fontweight
);

$blog_standard_type_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_standard_type_info_texttransform",
	$blog_standard_type_info_texttransform
);

$blog_standard_type_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_standard_type_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_standard_type_info_letterspacing",
	$blog_standard_type_info_letterspacing
);

$group2 = new MooseElatedGroup(
	esc_html__( "Date Style", 'moose' ),
	esc_html__( "Define style for date box", 'moose' )
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

$blog_standard_type_date_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_date_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_date_color",
	$blog_standard_type_date_color
);

$blog_standard_type_date_bckg_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_date_bckg_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_date_bckg_color",
	$blog_standard_type_date_bckg_color
);

$group3 = new MooseElatedGroup(
	esc_html__( "Comments Style", 'moose' ),
	esc_html__( "Define style for comments box", 'moose' )
);
$panel21->addChild(
	"group3",
	$group3
);

$row1 = new MooseElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$blog_standard_type_cmmt_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_cmmt_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_cmmt_color",
	$blog_standard_type_cmmt_color
);

$blog_standard_type_cmmt_bckg_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_cmmt_bckg_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_cmmt_bckg_color",
	$blog_standard_type_cmmt_bckg_color
);

$group6 = new MooseElatedGroup(
	esc_html__( "Quote/Link Title Style", 'moose' ),
	esc_html__( "Define title styles for Quote/Link articles", 'moose' )
);
$panel21->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_title_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_ql_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_title_color",
	$blog_standard_type_ql_title_color
);

$blog_standard_type_ql_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_title_hover_color",
	$blog_standard_type_ql_title_hover_color
);

$blog_standard_type_ql_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_title_font_size",
	$blog_standard_type_ql_title_fontsize
);

$blog_standard_type_ql_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_title_lineheight",
	$blog_standard_type_ql_title_lineheight
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_standard_type_ql_title_texttransform",
	$blog_standard_type_ql_title_texttransform
);

$blog_standard_type_ql_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_standard_type_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_standard_type_ql_title_google_fonts",
	$blog_standard_type_ql_title_google_fonts
);

$blog_standard_type_ql_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_standard_type_ql_title_fontstyle",
	$blog_standard_type_ql_title_fontstyle
);

$blog_standard_type_ql_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_standard_type_ql_title_fontweight",
	$blog_standard_type_ql_title_fontweight
);

$row3 = new MooseElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_standard_type_ql_title_letterspacing",
	$blog_standard_type_ql_title_letterspacing
);

$group8 = new MooseElatedGroup(
	esc_html__( "Quote/Link Post Info Data", 'moose' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'moose' )
);
$panel21->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_info_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_ql_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_info_color",
	$blog_standard_type_ql_info_color
);

$blog_standard_type_ql_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_info_link_color",
	$blog_standard_type_ql_info_link_color
);

$blog_standard_type_ql_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_info_hover_color",
	$blog_standard_type_ql_info_hover_color
);

$blog_standard_type_ql_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_info_fontsize",
	$blog_standard_type_ql_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_standard_type_ql_info_lineheight",
	$blog_standard_type_ql_info_lineheight
);

$blog_standard_type_ql_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_standard_type_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_standard_type_ql_info_google_fonts",
	$blog_standard_type_ql_info_google_fonts
);

$blog_standard_type_ql_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_standard_type_ql_info_fontstyle",
	$blog_standard_type_ql_info_fontstyle
);

$blog_standard_type_ql_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_standard_type_ql_info_fontweight",
	$blog_standard_type_ql_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group8->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_info_link_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_info_link_fontweight",
	"",
	esc_html__( "Link Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_standard_type_ql_info_link_fontweight",
	$blog_standard_type_ql_info_link_fontweight
);

$blog_standard_type_ql_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_standard_type_ql_info_texttransform",
	$blog_standard_type_ql_info_texttransform
);

$blog_standard_type_ql_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_standard_type_ql_info_letterspacing",
	$blog_standard_type_ql_info_letterspacing
);

$group9 = new MooseElatedGroup(
	esc_html__( "Quote Author Style", 'moose' ),
	esc_html__( "Define author styles for Quote articles", 'moose' )
);
$panel21->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_author_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_ql_author_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_author_color",
	$blog_standard_type_ql_author_color
);

$blog_standard_type_ql_author_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_standard_type_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_author_hover_color",
	$blog_standard_type_ql_author_hover_color
);

$blog_standard_type_ql_author_fontsize = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_author_font_size",
	$blog_standard_type_ql_author_fontsize
);

$blog_standard_type_ql_author_lineheight = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_standard_type_ql_author_lineheight",
	$blog_standard_type_ql_author_lineheight
);

$row2 = new MooseElatedRow( true );
$group9->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_author_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_standard_type_ql_author_texttransform",
	$blog_standard_type_ql_author_texttransform
);

$blog_standard_type_ql_author_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_standard_type_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_standard_type_ql_author_google_fonts",
	$blog_standard_type_ql_author_google_fonts
);

$blog_standard_type_ql_author_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_standard_type_ql_author_fontstyle",
	$blog_standard_type_ql_author_fontstyle
);

$blog_standard_type_ql_author_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_standard_type_ql_author_fontweight",
	$blog_standard_type_ql_author_fontweight
);

$row3 = new MooseElatedRow( true );
$group9->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_author_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_standard_type_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_standard_type_ql_author_letterspacing",
	$blog_standard_type_ql_author_letterspacing
);

// Blog Post List - Blog: Vertical Loop
$panel22 = new MooseElatedPanel(
	esc_html__( "Blog List Template Options: Vertical Loop", 'moose' ),
	"blog_vertical_loop_post_lists",
	"blog_vertical_loop_show_options",
	"no"
);
$blogPage->addChild(
	"panel22",
	$panel22
);

$blog_vertical_loop_type_number_of_chars = new MooseElatedField(
	"text",
	"blog_vertical_loop_type_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'moose' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel22->addChild(
	"blog_vertical_loop_type_number_of_chars",
	$blog_vertical_loop_type_number_of_chars
);

$blog_vertical_loop_type_post_meta_data_section = new MooseElatedTitle(
	"blog_vertical_loop_type_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'moose' )
);
$panel22->addChild(
	"blog_vertical_loop_type_post_meta_data_section",
	$blog_vertical_loop_type_post_meta_data_section
);

$blog_vertical_loop_type_show_categories = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_type_show_categories",
	"yes",
	esc_html__( "Show Categories", 'moose' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'moose' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_categories",
	$blog_vertical_loop_type_show_categories
);

$blog_vertical_loop_type_show_comments = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_type_show_comments",
	"no",
	esc_html__( "Show Comments", 'moose' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'moose' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_comments",
	$blog_vertical_loop_type_show_comments
);

$blog_vertical_loop_type_show_author = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_type_show_author",
	"yes",
	esc_html__( "Show Author Name", 'moose' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'moose' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_author",
	$blog_vertical_loop_type_show_author
);

$blog_vertical_loop_type_show_date = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_type_show_date",
	"yes",
	esc_html__( "Show Date", 'moose' ),
	esc_html__( "Enabling this option will show date on Post List", 'moose' )
);
$panel22->addChild(
	"blog_vertical_loop_type_hide_date",
	$blog_vertical_loop_type_show_date
);

$blog_vertical_loop_type_show_share = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_type_show_share",
	"no",
	esc_html__( "Show Share", 'moose' ),
	esc_html__( "Enabling this option will show share on Post List", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_vertical_loop_type_share_options_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_type_show_share",
	$blog_vertical_loop_type_show_share
);

$blog_vertical_loop_type_share_options_container = new MooseElatedContainer(
	"blog_vertical_loop_type_share_options_container",
	"blog_vertical_loop_type_show_share",
	"no"
);
$panel22->addChild(
	"blog_vertical_loop_type_share_options_container",
	$blog_vertical_loop_type_share_options_container
);

$blog_vertical_loop_type_select_share_option = new MooseElatedField(
	"select",
	"blog_vertical_loop_type_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'moose' ),
	esc_html__( "Choose Social Share Style for Standard Type", 'moose' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'moose' ),
		"list" => esc_html__( "Social Share List", 'moose' )
	)
);

$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_select_share_option",
	$blog_vertical_loop_type_select_share_option
);

$blog_vertical_loop_type_share_icon_color = new MooseElatedField(
	"color",
	"blog_vertical_loop_type_share_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for dropdown and list share type", 'moose' )
);
$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_share_icon_color",
	$blog_vertical_loop_type_share_icon_color
);

$blog_vertical_loop_type_share_icon_hover_color = new MooseElatedField(
	"color",
	"blog_vertical_loop_type_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type", 'moose' )
);
$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_share_icon_hover_color",
	$blog_vertical_loop_type_share_icon_hover_color
);

$blog_vertical_loop_type_share_background_color = new MooseElatedField(
	"color",
	"blog_vertical_loop_type_share_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for dropdown share type", 'moose' )
);
$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_share_background_color",
	$blog_vertical_loop_type_share_background_color
);

$blog_vertical_loop_type_show_like = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_type_show_like",
	"no",
	esc_html__( "Show Likes", 'moose' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'moose' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_like",
	$blog_vertical_loop_type_show_like
);

$blog_vertical_loop_type_post_design_style = new MooseElatedTitle(
	"blog_vertical_loop_type_post_design_style",
	esc_html__( "Post Design Style", 'moose' )
);
$panel22->addChild(
	"blog_vertical_loop_type_post_design_style",
	$blog_vertical_loop_type_post_design_style
);

$blog_vertical_loop_type_enable_clapper = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_type_enable_clapper",
	"no",
	esc_html__( "Clapper Effect", 'moose' ),
	esc_html__( "The featured image of the first blog post opens on scroll in clapper fashion to reveal the blog content.", 'moose' )
);
$panel22->addChild(
	"blog_vertical_loop_type_enable_clapper",
	$blog_vertical_loop_type_enable_clapper
);

$blog_vertical_loop_type_enable_text_box = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_type_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'moose' ),
	esc_html__( "Enable post text boxed features", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_vertical_loop_type_enable_text_box_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_type_enable_text_box",
	$blog_vertical_loop_type_enable_text_box
);

$blog_vertical_loop_type_enable_text_box_container = new MooseElatedContainer(
	"blog_vertical_loop_type_enable_text_box_container",
	"blog_vertical_loop_type_enable_text_box",
	"no"
);
$panel22->addChild(
	"blog_vertical_loop_type_enable_text_box_container",
	$blog_vertical_loop_type_enable_text_box_container
);

$blog_vertical_loop_type_box_background_color = new MooseElatedField(
	"color",
	"blog_vertical_loop_type_box_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for post text box", 'moose' )
);
$blog_vertical_loop_type_enable_text_box_container->addChild(
	"blog_vertical_loop_type_box_background_color",
	$blog_vertical_loop_type_box_background_color
);

$blog_vertical_loop_type_box_border_color = new MooseElatedField(
	"color",
	"blog_vertical_loop_type_box_border_color",
	"",
	esc_html__( "Border Color", 'moose' ),
	esc_html__( "Choose border color for post text box", 'moose' )
);
$blog_vertical_loop_type_enable_text_box_container->addChild(
	"blog_vertical_loop_type_box_border_color",
	$blog_vertical_loop_type_box_border_color
);

$blog_vertical_loop_type_box_padding = new MooseElatedField(
	"text",
	"blog_vertical_loop_type_box_padding",
	"",
	esc_html__( "Text box padding", 'moose' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_vertical_loop_type_enable_text_box_container->addChild(
	"blog_vertical_loop_type_box_padding",
	$blog_vertical_loop_type_box_padding
);

$group1 = new MooseElatedGroup(
	esc_html__( "Quote/Link Background", 'moose' ),
	esc_html__( "Set background of Quote/Link post type", 'moose' )
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

$blog_vertical_loop_type_ql_background_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Default color is #ffffff.", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_background_color",
	$blog_vertical_loop_type_ql_background_color
);

$blog_vertical_loop_type_ql_hover_background_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "Default color is #e6ae48.", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_hover_background_color",
	$blog_vertical_loop_type_ql_hover_background_color
);

$blog_vertical_loop_type_show_ql_mark = new MooseElatedField(
	"yesno",
	"blog_vertical_loop_type_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'moose' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_vertical_loop_type_show_ql_mark_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_type_show_ql_mark",
	$blog_vertical_loop_type_show_ql_mark
);

$blog_vertical_loop_type_show_ql_mark_container = new MooseElatedContainer(
	"blog_vertical_loop_type_show_ql_mark_container",
	"blog_vertical_loop_type_show_ql_mark",
	"no"
);
$panel22->addChild(
	"blog_vertical_loop_type_show_ql_mark_container",
	$blog_vertical_loop_type_show_ql_mark_container
);

$row1 = new MooseElatedRow();
$blog_vertical_loop_type_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_mark_color = new MooseElatedField(
	"color",
	"blog_vertical_loop_type_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for quote/link post.", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_mark_color",
	$blog_vertical_loop_type_ql_mark_color
);

$blog_vertical_loop_type_ql_mark_hover_color = new MooseElatedField(
	"color",
	"blog_vertical_loop_type_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_mark_hover_color",
	$blog_vertical_loop_type_ql_mark_hover_color
);

$blog_vertical_loop_type_image_height = new MooseElatedField(
	"text",
	"blog_vertical_loop_type_image_height",
	"",
	esc_html__( "Image Height", 'moose' ),
	esc_html__( "Define image height for current and next article", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel22->addChild(
	"blog_vertical_loop_type_image_height",
	$blog_vertical_loop_type_image_height
);

$group11 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing", 'moose' ),
	esc_html__( "Set spacing for blog layouts", 'moose' )
);
$panel22->addChild(
	"group11",
	$group11
);

$row1 = new MooseElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_image_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_image_margin_bottom",
	$blog_vertical_loop_type_image_margin_bottom
);

$blog_vertical_loop_type_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_margin_bottom",
	$blog_vertical_loop_type_title_margin_bottom
);

$blog_vertical_loop_type_post_info_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_post_info_margin_bottom",
	$blog_vertical_loop_type_post_info_margin_bottom
);

$blog_vertical_loop_type_article_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_article_margin_bottom",
	$blog_vertical_loop_type_article_margin_bottom
);

$row2 = new MooseElatedRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_single_article_social_share_list_margin_top = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_single_article_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_single_article_social_share_list_margin_top",
	$blog_vertical_loop_type_single_article_social_share_list_margin_top
);

$group12 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'moose' ),
	esc_html__( "Set spacing for blog layouts", 'moose' )
);
$panel22->addChild(
	"group12",
	$group12
);

$row1 = new MooseElatedRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_margin_bottom",
	$blog_vertical_loop_type_ql_title_margin_bottom
);

$blog_vertical_loop_type_ql_social_share_list_margin_top = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_social_share_list_margin_top",
	$blog_vertical_loop_type_ql_social_share_list_margin_top
);

$blog_vertical_loop_type_ql_quote_author_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_quote_author_margin_bottom",
	$blog_vertical_loop_type_ql_quote_author_margin_bottom
);

$post_text_styling = new MooseElatedTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'moose' )
);
$panel22->addChild(
	"post_text_styling",
	$post_text_styling
);

$group5 = new MooseElatedGroup(
	esc_html__( "Post Title", 'moose' ),
	esc_html__( "Define title styles in this blog post template.", 'moose' )
);
$panel22->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_title_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_color",
	$blog_vertical_loop_type_title_color
);

$blog_vertical_loop_type_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_hover_color",
	$blog_vertical_loop_type_title_hover_color
);

$blog_vertical_loop_type_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_fontsize",
	$blog_vertical_loop_type_title_fontsize
);

$blog_vertical_loop_type_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_lineheight",
	$blog_vertical_loop_type_title_lineheight
);

$row2 = new MooseElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_vertical_loop_type_title_texttransform",
	$blog_vertical_loop_type_title_texttransform
);

$blog_vertical_loop_type_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_vertical_loop_type_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_title_google_fonts",
	$blog_vertical_loop_type_title_google_fonts
);

$blog_vertical_loop_type_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_vertical_loop_type_title_fontstyle",
	$blog_vertical_loop_type_title_fontstyle
);

$blog_vertical_loop_type_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_title_fontweight",
	$blog_vertical_loop_type_title_fontweight
);

$row3 = new MooseElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_vertical_loop_type_title_letterspacing",
	$blog_vertical_loop_type_title_letterspacing
);

$group20 = new MooseElatedGroup(
	esc_html__( "Post subtitle", 'moose' ),
	esc_html__( "Define subtitle styles in this blog post template.", 'moose' )
);
$panel22->addChild(
	"group20",
	$group20
);

$row1 = new MooseElatedRow();
$group20->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_subtitle_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_subtitle_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_subtitle_color",
	$blog_vertical_loop_type_subtitle_color
);

$blog_vertical_loop_type_subtitle_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_subtitle_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_subtitle_hover_color",
	$blog_vertical_loop_type_subtitle_hover_color
);

$blog_vertical_loop_type_subtitle_fontsize = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_subtitle_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_subtitle_fontsize",
	$blog_vertical_loop_type_subtitle_fontsize
);

$blog_vertical_loop_type_subtitle_lineheight = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_subtitle_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_subtitle_lineheight",
	$blog_vertical_loop_type_subtitle_lineheight
);

$row2 = new MooseElatedRow( true );
$group20->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_subtitle_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_subtitle_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_vertical_loop_type_subtitle_texttransform",
	$blog_vertical_loop_type_subtitle_texttransform
);

$blog_vertical_loop_type_subtitle_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_vertical_loop_type_subtitle_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_subtitle_google_fonts",
	$blog_vertical_loop_type_subtitle_google_fonts
);

$blog_vertical_loop_type_subtitle_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_subtitle_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_vertical_loop_type_subtitle_fontstyle",
	$blog_vertical_loop_type_subtitle_fontstyle
);

$blog_vertical_loop_type_subtitle_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_subtitle_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_subtitle_fontweight",
	$blog_vertical_loop_type_subtitle_fontweight
);

$row3 = new MooseElatedRow( true );
$group20->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_subtitle_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_subtitle_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_vertical_loop_type_subtitle_letterspacing",
	$blog_vertical_loop_type_subtitle_letterspacing
);

$group7 = new MooseElatedGroup(
	esc_html__( "Post Info Data", 'moose' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'moose' )
);
$panel22->addChild(
	"group7",
	$group7
);

$row1 = new MooseElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_info_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_color",
	$blog_vertical_loop_type_info_color
);

$blog_vertical_loop_type_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_link_color",
	$blog_vertical_loop_type_info_link_color
);

$blog_vertical_loop_type_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_hover_color",
	$blog_vertical_loop_type_info_hover_color
);

$blog_vertical_loop_type_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_fontsize",
	$blog_vertical_loop_type_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_info_lineheight",
	$blog_vertical_loop_type_info_lineheight
);

$blog_vertical_loop_type_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_vertical_loop_type_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_info_google_fonts",
	$blog_vertical_loop_type_info_google_fonts
);

$blog_vertical_loop_type_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_vertical_loop_type_info_fontstyle",
	$blog_vertical_loop_type_info_fontstyle
);

$blog_vertical_loop_type_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_info_fontweight",
	$blog_vertical_loop_type_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_vertical_loop_type_info_texttransform",
	$blog_vertical_loop_type_info_texttransform
);

$blog_vertical_loop_type_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_vertical_loop_type_info_letterspacing",
	$blog_vertical_loop_type_info_letterspacing
);

$group6 = new MooseElatedGroup(
	esc_html__( "Quote/Link Title Style", 'moose' ),
	esc_html__( "Define title styles for Quote/Link articles", 'moose' )
);
$panel22->addChild(
	"group6",
	$group6
);

$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_title_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_color",
	$blog_vertical_loop_type_ql_title_color
);

$blog_vertical_loop_type_ql_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_hover_color",
	$blog_vertical_loop_type_ql_title_hover_color
);

$blog_vertical_loop_type_ql_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_font_size",
	$blog_vertical_loop_type_ql_title_fontsize
);

$blog_vertical_loop_type_ql_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_lineheight",
	$blog_vertical_loop_type_ql_title_lineheight
);

$row2 = new MooseElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_ql_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_texttransform",
	$blog_vertical_loop_type_ql_title_texttransform
);

$blog_vertical_loop_type_ql_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_vertical_loop_type_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_google_fonts",
	$blog_vertical_loop_type_ql_title_google_fonts
);

$blog_vertical_loop_type_ql_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_fontstyle",
	$blog_vertical_loop_type_ql_title_fontstyle
);

$blog_vertical_loop_type_ql_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_fontweight",
	$blog_vertical_loop_type_ql_title_fontweight
);

$row3 = new MooseElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_ql_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_title_letterspacing",
	$blog_vertical_loop_type_ql_title_letterspacing
);

$group8 = new MooseElatedGroup(
	esc_html__( "Quote/Link Post Info Data", 'moose' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'moose' )
);
$panel22->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_info_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_color",
	$blog_vertical_loop_type_ql_info_color
);

$blog_vertical_loop_type_ql_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_link_color",
	$blog_vertical_loop_type_ql_info_link_color
);

$blog_vertical_loop_type_ql_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_hover_color",
	$blog_vertical_loop_type_ql_info_hover_color
);

$blog_vertical_loop_type_ql_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_fontsize",
	$blog_vertical_loop_type_ql_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_ql_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_lineheight",
	$blog_vertical_loop_type_ql_info_lineheight
);

$blog_vertical_loop_type_ql_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_vertical_loop_type_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_google_fonts",
	$blog_vertical_loop_type_ql_info_google_fonts
);

$blog_vertical_loop_type_ql_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_fontstyle",
	$blog_vertical_loop_type_ql_info_fontstyle
);

$blog_vertical_loop_type_ql_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_fontweight",
	$blog_vertical_loop_type_ql_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group8->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_ql_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_vertical_loop_type_ql_info_texttransform",
	$blog_vertical_loop_type_ql_info_texttransform
);

$blog_vertical_loop_type_ql_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_info_letterspacing",
	$blog_vertical_loop_type_ql_info_letterspacing
);

$group9 = new MooseElatedGroup(
	esc_html__( "Quote Author Style", 'moose' ),
	esc_html__( "Define author styles for Quote articles", 'moose' )
);
$panel22->addChild(
	"group9",
	$group9
);

$row1 = new MooseElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_author_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_author_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_color",
	$blog_vertical_loop_type_ql_author_color
);

$blog_vertical_loop_type_ql_author_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_hover_color",
	$blog_vertical_loop_type_ql_author_hover_color
);

$blog_vertical_loop_type_ql_author_fontsize = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_font_size",
	$blog_vertical_loop_type_ql_author_fontsize
);

$blog_vertical_loop_type_ql_author_lineheight = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_lineheight",
	$blog_vertical_loop_type_ql_author_lineheight
);

$row2 = new MooseElatedRow( true );
$group9->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_ql_author_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_texttransform",
	$blog_vertical_loop_type_ql_author_texttransform
);

$blog_vertical_loop_type_ql_author_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_vertical_loop_type_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_google_fonts",
	$blog_vertical_loop_type_ql_author_google_fonts
);

$blog_vertical_loop_type_ql_author_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_fontstyle",
	$blog_vertical_loop_type_ql_author_fontstyle
);

$blog_vertical_loop_type_ql_author_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_fontweight",
	$blog_vertical_loop_type_ql_author_fontweight
);

$row3 = new MooseElatedRow( true );
$group9->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_ql_author_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_author_letterspacing",
	$blog_vertical_loop_type_ql_author_letterspacing
);

$post_vertical_loop_type_next_article_title = new MooseElatedTitle(
	"post_vertical_loop_type_next_article_title",
	esc_html__( "Next Article Styles", 'moose' )
);
$panel22->addChild(
	"post_vertical_loop_type_next_article_title",
	$post_vertical_loop_type_next_article_title
);

$group10 = new MooseElatedGroup(
	esc_html__( "Title Style", 'moose' ),
	esc_html__( "Define title styles for article", 'moose' )
);
$panel22->addChild(
	"group10",
	$group10
);

$row1 = new MooseElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_next_article_title_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_color",
	$blog_vertical_loop_type_next_article_title_color
);

$blog_vertical_loop_type_next_article_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_fontsize",
	$blog_vertical_loop_type_next_article_title_fontsize
);

$blog_vertical_loop_type_next_article_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_lineheight",
	$blog_vertical_loop_type_next_article_title_lineheight
);

$blog_vertical_loop_type_next_article_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_texttransform",
	$blog_vertical_loop_type_next_article_title_texttransform
);

$row2 = new MooseElatedRow( true );
$group10->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_next_article_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_vertical_loop_type_next_article_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_google_fonts",
	$blog_vertical_loop_type_next_article_title_google_fonts
);

$blog_vertical_loop_type_next_article_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_fontstyle",
	$blog_vertical_loop_type_next_article_title_fontstyle
);

$blog_vertical_loop_type_next_article_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_fontweight",
	$blog_vertical_loop_type_next_article_title_fontweight
);

$blog_vertical_loop_type_next_article_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_letterspacing",
	$blog_vertical_loop_type_next_article_title_letterspacing
);

$row3 = new MooseElatedRow( true );
$group10->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_next_article_title_position = new MooseElatedField(
	"selectsimple",
	"blog_vertical_loop_type_next_article_title_position",
	"dropdown",
	esc_html__( "Title Position", 'moose' ),
	esc_html__( "Choose title position for next article", 'moose' ),
	array(
		"center" => esc_html__( "Center", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);

$row3->addChild(
	"blog_vertical_loop_type_next_article_title_position",
	$blog_vertical_loop_type_next_article_title_position
);

$group19 = new MooseElatedGroup(
	esc_html__( "Subtitle Style", 'moose' ),
	esc_html__( "Define subtitle styles for article", 'moose' )
);
$panel22->addChild(
	"group19",
	$group19
);

$row1 = new MooseElatedRow();
$group19->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_next_article_subtitle_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_subtitle_color",
	"",
	esc_html__( "Text Color", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_subtitle_color",
	$blog_vertical_loop_type_next_article_subtitle_color
);

$blog_vertical_loop_type_next_article_subtitle_fontsize = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_subtitle_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_subtitle_fontsize",
	$blog_vertical_loop_type_next_article_subtitle_fontsize
);

$blog_vertical_loop_type_next_article_subtitle_lineheight = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_subtitle_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_subtitle_lineheight",
	$blog_vertical_loop_type_next_article_subtitle_lineheight
);

$blog_vertical_loop_type_next_article_subtitle_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_subtitle_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	"",
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_subtitle_texttransform",
	$blog_vertical_loop_type_next_article_subtitle_texttransform
);

$row2 = new MooseElatedRow( true );
$group19->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_next_article_subtitle_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_vertical_loop_type_next_article_subtitle_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_subtitle_google_fonts",
	$blog_vertical_loop_type_next_article_subtitle_google_fonts
);

$blog_vertical_loop_type_next_article_subtitle_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_subtitle_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_subtitle_fontstyle",
	$blog_vertical_loop_type_next_article_subtitle_fontstyle
);

$blog_vertical_loop_type_next_article_subtitle_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_subtitle_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_subtitle_fontweight",
	$blog_vertical_loop_type_next_article_subtitle_fontweight
);

$blog_vertical_loop_type_next_article_subtitle_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_subtitle_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_subtitle_letterspacing",
	$blog_vertical_loop_type_next_article_subtitle_letterspacing
);

$row3 = new MooseElatedRow( true );
$group19->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_next_article_subtitle_position = new MooseElatedField(
	"selectsimple",
	"blog_vertical_loop_type_next_article_subtitle_position",
	"dropdown",
	esc_html__( "Subtitle Position", 'moose' ),
	esc_html__( "Choose subtitle position for next article", 'moose' ),
	array(
		"center" => esc_html__( "Center", 'moose' ),
		"left" => esc_html__( "Left", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$row3->addChild(
	"blog_vertical_loop_type_next_article_subtitle_position",
	$blog_vertical_loop_type_next_article_subtitle_position
);

$group14 = new MooseElatedGroup(
	esc_html__( "Post Info Data", 'moose' ),
	esc_html__( "Define post info text styles", 'moose' )
);
$panel22->addChild(
	"group14",
	$group14
);

$row1 = new MooseElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_next_info_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_info_color",
	$blog_vertical_loop_type_next_info_color
);

$blog_vertical_loop_type_next_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_info_link_color",
	$blog_vertical_loop_type_next_info_link_color
);

$blog_vertical_loop_type_next_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_info_hover_color",
	$blog_vertical_loop_type_next_info_hover_color
);

$blog_vertical_loop_type_next_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_info_fontsize",
	$blog_vertical_loop_type_next_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group14->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_next_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_info_lineheight",
	$blog_vertical_loop_type_next_info_lineheight
);

$blog_vertical_loop_type_next_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_vertical_loop_type_next_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_info_google_fonts",
	$blog_vertical_loop_type_next_info_google_fonts
);

$blog_vertical_loop_type_next_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_vertical_loop_type_next_info_fontstyle",
	$blog_vertical_loop_type_next_info_fontstyle
);

$blog_vertical_loop_type_next_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_next_info_fontweight",
	$blog_vertical_loop_type_next_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group14->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_next_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_vertical_loop_type_next_info_texttransform",
	$blog_vertical_loop_type_next_info_texttransform
);

$blog_vertical_loop_type_next_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_vertical_loop_type_next_info_letterspacing",
	$blog_vertical_loop_type_next_info_letterspacing
);

$post_vertical_loop_type_next_previous_arrow_title = new MooseElatedTitle(
	"post_vertical_loop_type_next_previous_arrow_title",
	esc_html__( "Previous/Next Article Arrow Style", 'moose' )
);
$panel22->addChild(
	"post_vertical_loop_type_next_previous_arrow_title",
	$post_vertical_loop_type_next_previous_arrow_title
);

$group13 = new MooseElatedGroup(
	esc_html__( "Article Arrow Style", 'moose' ),
	esc_html__( "Define arrow styles for next article", 'moose' )
);
$panel22->addChild(
	"group13",
	$group13
);

$row1 = new MooseElatedRow();
$group13->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_next_article_arrow_background_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_background_color",
	$blog_vertical_loop_type_next_article_arrow_background_color
);

$blog_vertical_loop_type_next_article_arrow_color = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_color",
	"",
	esc_html__( "Arrow Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_color",
	$blog_vertical_loop_type_next_article_arrow_color
);

$blog_vertical_loop_type_next_article_arrow_bckg_hover_clr = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_bckg_hover_clr",
	"",
	esc_html__( "Background Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_bckg_hover_clr",
	$blog_vertical_loop_type_next_article_arrow_bckg_hover_clr
);

$blog_vertical_loop_type_next_article_arrow_color_hover = new MooseElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_color_hover",
	"",
	esc_html__( "Arrow Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_color_hover",
	$blog_vertical_loop_type_next_article_arrow_color_hover
);

$row2 = new MooseElatedRow();
$group13->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_next_article_arrow_size = new MooseElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_arrow_size",
	"",
	esc_html__( "Arrow Size", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_arrow_size",
	$blog_vertical_loop_type_next_article_arrow_size
);

$blog_vertical_loop_type_next_article_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_font_weight",
	$blog_vertical_loop_type_next_article_font_weight
);

// Blog Post List - Blog: Masonry Gallery
$panel23 = new MooseElatedPanel(
	esc_html__( "Blog List Templates Options: Masonry Gallery & Masonry Gallery Full Width", 'moose' ),
	"blog_masonry_gallery_post_lists",
	"blog_masonry_gallery_show_options",
	"no"
);
$blogPage->addChild(
	"panel23",
	$panel23
);

$blog_masonry_gallery_number_of_chars = new MooseElatedField(
	"text",
	"blog_masonry_gallery_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'moose' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel23->addChild(
	"blog_masonry_gallery_number_of_chars",
	$blog_masonry_gallery_number_of_chars
);

$blog_masonry_gallery_read_more_button = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_read_more_button",
	"no",
	esc_html__( "Read More Button", 'moose' ),
	esc_html__( "Enable Read More Button", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_gallery_read_more_button_container"
	)
);
$panel23->addChild(
	"blog_masonry_gallery_read_more_button",
	$blog_masonry_gallery_read_more_button
);

$blog_masonry_gallery_read_more_button_container = new MooseElatedContainer(
	"blog_masonry_gallery_read_more_button_container",
	"blog_masonry_gallery_read_more_button",
	"no"
);
$panel23->addChild(
	"blog_masonry_gallery_read_more_button_container",
	$blog_masonry_gallery_read_more_button_container
);

$blog_masonry_gallery_read_more_button_icon = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_read_more_button_icon",
	"no",
	esc_html__( "Enable Icon", 'moose' ),
	esc_html__( "Enabling this option will place icon in read more button", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_gallery_read_more_button_icon_container"
	)
);
$blog_masonry_gallery_read_more_button_container->addChild(
	"blog_masonry_gallery_read_more_button_icon",
	$blog_masonry_gallery_read_more_button_icon
);

$blog_masonry_gallery_read_more_button_icon_container = new MooseElatedContainer(
	"blog_masonry_gallery_read_more_button_icon_container",
	"blog_masonry_gallery_read_more_button_icon",
	"no"
);
$blog_masonry_gallery_read_more_button_container->addChild(
	"blog_masonry_gallery_read_more_button_icon_container",
	$blog_masonry_gallery_read_more_button_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$blog_masonry_gallery_read_more_button_icon_pack_hide_array = array();
$blog_masonry_gallery_read_more_button_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$blog_masonry_gallery_read_more_button_icon_collections_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$blog_masonry_gallery_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$blog_masonry_gallery_read_more_button_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_blog_masonry_gallery_read_more_button_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $blog_masonry_gallery_read_more_button_icon_collections_params as $blog_masonry_gallery_read_more_button_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $blog_masonry_gallery_read_more_button_icon_collections_param !== $dep_collection_object->param ) {
				$blog_masonry_gallery_read_more_button_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_blog_masonry_gallery_read_more_button_icon_' . $blog_masonry_gallery_read_more_button_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$blog_masonry_gallery_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$blog_masonry_gallery_read_more_button_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$blog_masonry_gallery_read_more_button_icon_pack = new MooseElatedField(
	"select",
	"blog_masonry_gallery_read_more_button_icon_pack",
	"font_awesome",
	esc_html__( "Icon Pack", 'moose' ),
	esc_html__( "Choose icon pack for show load more button", 'moose' ),
	$moose_elated_icon_collections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $blog_masonry_gallery_read_more_button_icon_pack_hide_array,
		"show"       => $blog_masonry_gallery_read_more_button_icon_pack_show_array
	)
);

$blog_masonry_gallery_read_more_button_icon_container->addChild(
	"blog_masonry_gallery_read_more_button_icon_pack",
	$blog_masonry_gallery_read_more_button_icon_pack
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
		
		$blog_masonry_gallery_read_more_button_icon_hide_values = $icon_collections_keys;
		$blog_icon_container                                    = new MooseElatedContainer(
			"blog_masonry_gallery_read_more_button_icon_" . $collection_object->param . "_container",
			"blog_masonry_gallery_read_more_button_icon_pack",
			"",
			$blog_masonry_gallery_read_more_button_icon_hide_values
		);
		$blog_masonry_gallery_read_more_button_icon             = new MooseElatedField(
			"select",
			"blog_masonry_gallery_read_more_button_icon_" . $collection_object->param,
			"",
			esc_html__( "Button Icon", 'moose' ),
			esc_html__( "Choose Button Icon", 'moose' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$blog_icon_container->addChild(
			"blog_masonry_gallery_read_more_button_icon_" . $collection_object->param,
			$blog_masonry_gallery_read_more_button_icon
		);
		
		$blog_masonry_gallery_read_more_button_icon_container->addChild(
			"blog_masonry_gallery_read_more_button_icon_" . $collection_object->param . "_container",
			$blog_icon_container
		);
	}
	
}

$pagination_masonry_gallery = new MooseElatedField(
	"select",
	"pagination_masonry_gallery",
	"pagination",
	esc_html__( "Pagination on Masonry", 'moose' ),
	esc_html__( 'Choose a pagination style for "Masonry" Blog List', 'moose' ),
	array(
		"pagination" => esc_html__( "Pagination", 'moose' ),
		"load_more" => esc_html__( "Load More", 'moose' ),
		"infinite_scroll" => esc_html__( "Infinite Scroll", 'moose' )
	)
);
$panel23->addChild(
	"pagination_masonry_gallery",
	$pagination_masonry_gallery
);

$blog_masonry_gallery_columns = new MooseElatedField(
	'select',
	'blog_masonry_gallery_columns',
	'two_columns',
	esc_html__( 'Masonry Blog Columns', 'moose' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List without sidebar', 'moose' ),
	array(
		'two_columns'   => '2',
		'three_columns' => '3',
		'four_columns'  => '4'
	)
);
$panel23->addChild(
	'blog_masonry_gallery_columns',
	$blog_masonry_gallery_columns
);

$blog_masonry_gallery_full_width_columns = new MooseElatedField(
	'select',
	'blog_masonry_gallery_full_width_columns',
	'three_columns',
	esc_html__( 'Full Width Masonry Blog Columns', 'moose' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List', 'moose' ),
	array(
		'three_columns' => '3',
		'four_columns'  => '4',
		'five_columns'  => '5'
	)
);
$panel23->addChild(
	'blog_masonry_gallery_full_width_columns',
	$blog_masonry_gallery_full_width_columns
);

$blog_masonry_gallery_full_width_margin = new MooseElatedField(
	"text",
	"blog_masonry_gallery_full_width_margin",
	"",
	esc_html__( "Full Width Masonry Margin", 'moose' ),
	esc_html__( 'Please insert margin in px i.e. 5px, or in % i.e 5%', 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel23->addChild(
	"blog_masonry_gallery_full_width_margin",
	$blog_masonry_gallery_full_width_margin
);

$blog_masonry_gallery_filter = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_filter",
	"no",
	esc_html__( "Show Category Filter on Masonry", 'moose' ),
	esc_html__( 'Enabling this option will display a Category Filter on "Masonry" Blog List', 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_gallery_filter_container"
	)
);
$panel23->addChild(
	"blog_masonry_gallery_filter",
	$blog_masonry_gallery_filter
);

$blog_masonry_gallery_filter_container = new MooseElatedContainer(
	"blog_masonry_gallery_filter_container",
	"blog_masonry_gallery_filter",
	"no"
);
$panel23->addChild(
	"blog_masonry_gallery_filter_container",
	$blog_masonry_gallery_filter_container
);

// Blog Masonry Filter
$blog_masonry_gallery_filter_background_color = new MooseElatedField(
	"color",
	"blog_masonry_gallery_filter_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose color for background of filter area", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_gallery_filter_container->addChild(
	"blog_masonry_gallery_filter_background_color",
	$blog_masonry_gallery_filter_background_color
);

$blog_masonry_gallery_filter_height = new MooseElatedField(
	"text",
	"blog_masonry_gallery_filter_height",
	"",
	esc_html__( "Height (px)", 'moose' ),
	esc_html__( "Enter height for filter area", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_gallery_filter_container->addChild(
	"blog_masonry_gallery_filter_height",
	$blog_masonry_gallery_filter_height
);

$blog_masonry_gallery_filter_margin_bottom = new MooseElatedField(
	"text",
	"blog_masonry_gallery_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'moose' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_gallery_filter_container->addChild(
	"blog_masonry_gallery_filter_margin_bottom",
	$blog_masonry_gallery_filter_margin_bottom
);

$blog_masonry_gallery_filter_alignment = new MooseElatedField(
	"select",
	"blog_masonry_gallery_filter_alignment",
	"",
	esc_html__( "Horizontal Alignment", 'moose' ),
	esc_html__( "Choose filter alignment", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$blog_masonry_gallery_filter_container->addChild(
	"blog_masonry_gallery_filter_alignment",
	$blog_masonry_gallery_filter_alignment
);

$blog_masonry_gallery_enable_filter_title = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_enable_filter_title",
	"no",
	esc_html__( "Enable Filter Title", 'moose' ),
	esc_html__( "Enabling this option will show category filter title", 'moose' )
);
$blog_masonry_gallery_filter_container->addChild(
	"blog_masonry_gallery_enable_filter_title",
	$blog_masonry_gallery_enable_filter_title
);

$group1 = new MooseElatedGroup(
	esc_html__( "Title", 'moose' ),
	esc_html__( "Define text styles for filter title", 'moose' )
);
$blog_masonry_gallery_filter_container->addChild(
	"group1",
	$group1
);

$row1 = new MooseElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$blog_masonry_gallery_filter_title_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_gallery_filter_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_filter_title_color",
	$blog_masonry_gallery_filter_title_color
);
$blog_masonry_gallery_filter_title_font_size = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_filter_title_font_size",
	$blog_masonry_gallery_filter_title_font_size
);
$blog_masonry_gallery_filter_title_line_height = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_filter_title_line_height",
	$blog_masonry_gallery_filter_title_line_height
);
$blog_masonry_gallery_filter_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"blog_masonry_gallery_filter_title_text_transform",
	$blog_masonry_gallery_filter_title_text_transform
);

$row2 = new MooseElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$blog_masonry_gallery_filter_title_font_family = new MooseElatedField(
	"fontsimple",
	"blog_masonry_gallery_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_gallery_filter_title_font_family",
	$blog_masonry_gallery_filter_title_font_family
);
$blog_masonry_gallery_filter_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_gallery_filter_title_font_style",
	$blog_masonry_gallery_filter_title_font_style
);
$blog_masonry_gallery_filter_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_gallery_filter_title_font_weight",
	$blog_masonry_gallery_filter_title_font_weight
);
$blog_masonry_gallery_filter_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_gallery_filter_title_letter_spacing",
	$blog_masonry_gallery_filter_title_letter_spacing
);

$group2 = new MooseElatedGroup(
	esc_html__( "Categories", 'moose' ),
	esc_html__( "Define text styles for filter categories", 'moose' )
);
$blog_masonry_gallery_filter_container->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$blog_masonry_gallery_filter_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_gallery_filter_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_filter_color",
	$blog_masonry_gallery_filter_color
);
$blog_masonry_gallery_filter_hovercolor = new MooseElatedField(
	"colorsimple",
	"blog_masonry_gallery_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_filter_hovercolor",
	$blog_masonry_gallery_filter_hovercolor
);
$blog_masonry_gallery_filter_font_size = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_filter_font_size",
	$blog_masonry_gallery_filter_font_size
);
$blog_masonry_gallery_filter_line_height = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_filter_line_height",
	$blog_masonry_gallery_filter_line_height
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$blog_masonry_gallery_filter_font_family = new MooseElatedField(
	"fontsimple",
	"blog_masonry_gallery_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_gallery_filter_font_family",
	$blog_masonry_gallery_filter_font_family
);
$blog_masonry_gallery_filter_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_filter_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_gallery_filter_font_style",
	$blog_masonry_gallery_filter_font_style
);
$blog_masonry_gallery_filter_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_gallery_filter_font_weight",
	$blog_masonry_gallery_filter_font_weight
);
$blog_masonry_gallery_filter_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_masonry_gallery_filter_text_transform",
	$blog_masonry_gallery_filter_text_transform
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_masonry_gallery_filter_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_masonry_gallery_filter_letter_spacing",
	$blog_masonry_gallery_filter_letter_spacing
);

$blog_masonry_gallery_filter_disable_separator = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_filter_disable_separator",
	"yes",
	esc_html__( "Disable Separator Between Categories", 'moose' ),
	esc_html__( "Disabling this option will remove separator between filter categories.", 'moose' )
);
$blog_masonry_gallery_filter_container->addChild(
	"blog_masonry_gallery_filter_disable_separator",
	$blog_masonry_gallery_filter_disable_separator
);

$blog_masonry_gallery_content_position = new MooseElatedField(
	"select",
	"blog_masonry_gallery_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'moose' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'moose' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'moose' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'moose' )
	)
);
$panel23->addChild(
	"blog_masonry_gallery_content_position",
	$blog_masonry_gallery_content_position
);

$blog_masonry_gallery_post_meta_data_section = new MooseElatedTitle(
	"blog_masonry_gallery_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'moose' )
);
$panel23->addChild(
	"blog_masonry_gallery_post_meta_data_section",
	$blog_masonry_gallery_post_meta_data_section
);

$blog_masonry_gallery_show_categories = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_show_categories",
	"no",
	esc_html__( "Show Categories", 'moose' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'moose' )
);
$panel23->addChild(
	"blog_masonry_gallery_show_categories",
	$blog_masonry_gallery_show_categories
);

$blog_masonry_gallery_show_comments = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_show_comments",
	"no",
	esc_html__( "Show Comments", 'moose' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'moose' )
);
$panel23->addChild(
	"blog_masonry_gallery_show_comments",
	$blog_masonry_gallery_show_comments
);

$blog_masonry_gallery_show_author = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_show_author",
	"no",
	esc_html__( "Show Author Name", 'moose' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'moose' )
);
$panel23->addChild(
	"blog_masonry_gallery_show_author",
	$blog_masonry_gallery_show_author
);

$blog_masonry_gallery_show_date = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_show_date",
	"no",
	esc_html__( "Show Date", 'moose' ),
	esc_html__( "Enabling this option will show date on Post List", 'moose' )
);
$panel23->addChild(
	"blog_masonry_gallery_show_date",
	$blog_masonry_gallery_show_date
);

$blog_masonry_gallery_show_share = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_show_share",
	"no",
	esc_html__( "Show Share", 'moose' ),
	esc_html__( "Enabling this option will show share on Post List", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_gallery_share_options_container"
	)
);
$panel23->addChild(
	"blog_masonry_gallery_show_share",
	$blog_masonry_gallery_show_share
);

$blog_masonry_gallery_share_options_container = new MooseElatedContainer(
	"blog_masonry_gallery_share_options_container",
	"blog_masonry_gallery_show_share",
	"no"
);
$panel23->addChild(
	"blog_masonry_gallery_share_options_container",
	$blog_masonry_gallery_share_options_container
);

$blog_masonry_gallery_select_share_options_masonry_type = new MooseElatedField(
	"select",
	"blog_masonry_gallery_select_share_options_masonry_type",
	"dropdown",
	esc_html__( "Social Share Style", 'moose' ),
	esc_html__( "Choose Social Share Style for Masonry Type", 'moose' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'moose' ),
		"list" => esc_html__( "Social Share List", 'moose' )
	)
);

$blog_masonry_gallery_share_options_container->addChild(
	"blog_masonry_gallery_select_share_options_masonry_type",
	$blog_masonry_gallery_select_share_options_masonry_type
);

$blog_masonry_gallery_share_icon_color = new MooseElatedField(
	"color",
	"blog_masonry_gallery_share_icon_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color for share dropdown", 'moose' )
);
$blog_masonry_gallery_share_options_container->addChild(
	"blog_masonry_gallery_share_icon_color",
	$blog_masonry_gallery_share_icon_color
);

$blog_masonry_gallery_share_hld_hover_icon_color = new MooseElatedField(
	"color",
	"blog_masonry_gallery_share_hld_hover_icon_color",
	"",
	esc_html__( "Icon color on Quote/Link Holder Hover", 'moose' ),
	esc_html__( "Choose icon color for share dropdown when the quote/link holder is hovered over", 'moose' )
);
$blog_masonry_gallery_share_options_container->addChild(
	"blog_masonry_gallery_share_hld_hover_icon_color",
	$blog_masonry_gallery_share_hld_hover_icon_color
);

$blog_masonry_gallery_share_icon_hover_color = new MooseElatedField(
	"color",
	"blog_masonry_gallery_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose icon hover color for share dropdown", 'moose' )
);
$blog_masonry_gallery_share_options_container->addChild(
	"blog_masonry_gallery_share_icon_hover_color",
	$blog_masonry_gallery_share_icon_hover_color
);

$blog_masonry_gallery_share_background_color = new MooseElatedField(
	"color",
	"blog_masonry_gallery_share_background_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color for share dropdown list field", 'moose' )
);
$blog_masonry_gallery_share_options_container->addChild(
	"blog_masonry_gallery_share_background_color",
	$blog_masonry_gallery_share_background_color
);

$blog_masonry_gallery_show_like = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_show_like",
	"no",
	esc_html__( "Show Likes", 'moose' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'moose' )
);
$panel23->addChild(
	"blog_masonry_gallery_show_like",
	$blog_masonry_gallery_show_like
);

$blog_masonry_gallery_post_design_style = new MooseElatedTitle(
	"blog_masonry_gallery_post_design_style",
	esc_html__( "Post Design Style", 'moose' )
);
$panel23->addChild(
	"blog_masonry_gallery_post_design_style",
	$blog_masonry_gallery_post_design_style
);

$blog_masonry_gallery_post_alignment = new MooseElatedField(
	"select",
	"blog_masonry_gallery_post_alignment",
	"center",
	esc_html__( "Post Alignment", 'moose' ),
	esc_html__( "Choose alignment for whole post", 'moose' ),
	array(
		"left" => esc_html__( "Left", 'moose' ),
		"center" => esc_html__( "Center", 'moose' ),
		"right" => esc_html__( "Right", 'moose' )
	)
);
$panel23->addChild(
	"blog_masonry_gallery_post_alignment",
	$blog_masonry_gallery_post_alignment
);

$blog_masonry_gallery_show_article_icon = new MooseElatedField(
	"yesno",
	"blog_masonry_gallery_show_article_icon",
	"yes",
	esc_html__( "Enable Article Icon", 'moose' ),
	esc_html__( "Enabling this option will show article icon", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_gallery_show_article_icon_container"
	)
);
$panel23->addChild(
	"blog_masonry_gallery_show_article_icon",
	$blog_masonry_gallery_show_article_icon
);

$blog_masonry_gallery_show_article_icon_container = new MooseElatedContainer(
	"blog_masonry_gallery_show_article_icon_container",
	"blog_masonry_gallery_show_article_icon",
	"no"
);
$panel23->addChild(
	"blog_masonry_gallery_show_article_icon_container",
	$blog_masonry_gallery_show_article_icon_container
);

$row1 = new MooseElatedRow();
$blog_masonry_gallery_show_article_icon_container->addChild(
	"row1",
	$row1
);

$blog_masonry_gallery_article_mark_color = new MooseElatedField(
	"color",
	"blog_masonry_gallery_article_mark_color",
	"",
	esc_html__( "Icon Color", 'moose' ),
	esc_html__( "Choose icon color", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_article_mark_color",
	$blog_masonry_gallery_article_mark_color
);

$blog_masonry_gallery_article_mark_hover_color = new MooseElatedField(
	"color",
	"blog_masonry_gallery_article_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'moose' ),
	esc_html__( "Choose hover icon color", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_article_mark_hover_color",
	$blog_masonry_gallery_article_mark_hover_color
);

$blog_masonry_gallery_overlay_group = new MooseElatedGroup(
	esc_html__( 'Hover Overlay Style', 'moose' ),
	esc_html__( 'Define Hover Overlay Style', 'moose' )
);
$panel23->addChild(
	'blog_masonry_gallery_overlay_group',
	$blog_masonry_gallery_overlay_group
);

$row1 = new MooseElatedRow();
$blog_masonry_gallery_overlay_group->addChild(
	'row1',
	$row1
);

$blog_masonry_gallery_overlay_color = new MooseElatedField(
	'colorsimple',
	'blog_masonry_gallery_overlay_color',
	'',
	esc_html__( 'Color', 'moose' )
);
$row1->addChild(
	'blog_masonry_gallery_overlay_color',
	$blog_masonry_gallery_overlay_color
);

$blog_masonry_gallery_overlay_transparency = new MooseElatedField(
	'textsimple',
	'blog_masonry_gallery_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'moose' )
);
$row1->addChild(
	'blog_masonry_gallery_overlay_transparency',
	$blog_masonry_gallery_overlay_transparency
);

$group8 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing", 'moose' ),
	esc_html__( "Set spacing for blog layouts", 'moose' )
);
$panel23->addChild(
	"group8",
	$group8
);

$row1 = new MooseElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_masonry_gallery_icon_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_icon_margin_bottom",
	"",
	esc_html__( "Margin Under Icon Holder (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_icon_margin_bottom",
	$blog_masonry_gallery_icon_margin_bottom
);

$blog_masonry_gallery_post_info_margin_top = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_post_info_margin_top",
	"",
	esc_html__( "Margin Above Post Info (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_post_info_margin_top",
	$blog_masonry_gallery_post_info_margin_top
);

$blog_masonry_gallery_read_more_margin_top = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_read_more_margin_top",
	$blog_masonry_gallery_read_more_margin_top
);

$blog_masonry_gallery_social_share_list_margin_top = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_social_share_list_margin_top",
	$blog_masonry_gallery_social_share_list_margin_top
);

$post_text_styling = new MooseElatedTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'moose' )
);
$panel23->addChild(
	"post_text_styling",
	$post_text_styling
);

$group2 = new MooseElatedGroup(
	esc_html__( "Post Title", 'moose' ),
	esc_html__( "Define title styles in this blog post template.", 'moose' )
);
$panel23->addChild(
	"group2",
	$group2
);

$row1 = new MooseElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_masonry_gallery_title_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_gallery_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_title_color",
	$blog_masonry_gallery_title_color
);

$blog_masonry_gallery_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_gallery_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_title_hover_color",
	$blog_masonry_gallery_title_hover_color
);

$blog_masonry_gallery_title_fontsize = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_title_fontsize",
	$blog_masonry_gallery_title_fontsize
);

$row2 = new MooseElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_masonry_gallery_title_lineheight = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_title_lineheight",
	$blog_masonry_gallery_title_lineheight
);

$blog_masonry_gallery_title_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_masonry_gallery_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_gallery_title_google_fonts",
	$blog_masonry_gallery_title_google_fonts
);

$blog_masonry_gallery_title_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_title_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_gallery_title_fontstyle",
	$blog_masonry_gallery_title_fontstyle
);

$blog_masonry_gallery_title_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_title_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_gallery_title_fontweight",
	$blog_masonry_gallery_title_fontweight
);

$row3 = new MooseElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_masonry_gallery_title_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_title_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_masonry_gallery_title_texttransform",
	$blog_masonry_gallery_title_texttransform
);

$blog_masonry_gallery_title_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_masonry_gallery_title_letterspacing",
	$blog_masonry_gallery_title_letterspacing
);

$group4 = new MooseElatedGroup(
	esc_html__( "Post Info Data", 'moose' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'moose' )
);
$panel23->addChild(
	"group4",
	$group4
);

$row1 = new MooseElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$blog_masonry_gallery_info_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_gallery_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_info_color",
	$blog_masonry_gallery_info_color
);

$blog_masonry_gallery_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_gallery_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_info_link_color",
	$blog_masonry_gallery_info_link_color
);

$blog_masonry_gallery_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_masonry_gallery_info_hover_color",
	"",
	esc_html__( "Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_info_hover_color",
	$blog_masonry_gallery_info_hover_color
);

$blog_masonry_gallery_info_fontsize = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_masonry_gallery_info_fontsize",
	$blog_masonry_gallery_info_fontsize
);

$row2 = new MooseElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$blog_masonry_gallery_info_lineheight = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_gallery_info_lineheight",
	$blog_masonry_gallery_info_lineheight
);

$blog_masonry_gallery_info_google_fonts = new MooseElatedField(
	"fontsimple",
	"blog_masonry_gallery_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_masonry_gallery_info_google_fonts",
	$blog_masonry_gallery_info_google_fonts
);

$blog_masonry_gallery_info_fontstyle = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_info_fontstyle",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_masonry_gallery_info_fontstyle",
	$blog_masonry_gallery_info_fontstyle
);

$blog_masonry_gallery_info_fontweight = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_info_fontweight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_masonry_gallery_info_fontweight",
	$blog_masonry_gallery_info_fontweight
);

$row3 = new MooseElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$blog_masonry_gallery_info_texttransform = new MooseElatedField(
	"selectblanksimple",
	"blog_masonry_gallery_info_texttransform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row3->addChild(
	"blog_masonry_gallery_info_texttransform",
	$blog_masonry_gallery_info_texttransform
);

$blog_masonry_gallery_info_letterspacing = new MooseElatedField(
	"textsimple",
	"blog_masonry_gallery_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_masonry_gallery_info_letterspacing",
	$blog_masonry_gallery_info_letterspacing
);

//Blog List

$panel28 = new MooseElatedPanel(
	esc_html__( "Blog List Shortcode", 'moose' ),
	"blog_list_panel"
);
$blogPage->addChild(
	"panel28",
	$panel28
);

//Blog List Boxes

$blog_list_boxes_section_subtitle = new MooseElatedTitle(
	"blog_list_boxes_section_subtitle",
	esc_html__( "Blog List - Boxes", 'moose' )
);
$panel28->addChild(
	"blog_list_boxes_section_subtitle",
	$blog_list_boxes_section_subtitle
);

$group6 = new MooseElatedGroup(
	esc_html__( "Blog List Padding", 'moose' ),
	esc_html__( "Enter Boxes Blog List padding", 'moose' )
);
$panel28->addChild(
	"group6",
	$group6
);
$row1 = new MooseElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_list_boxes_padding_top = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_padding_top",
	$blog_list_boxes_padding_top
);

$blog_list_boxes_padding_right = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_padding_right",
	$blog_list_boxes_padding_right
);

$blog_list_boxes_padding_bottom = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_padding_bottom",
	$blog_list_boxes_padding_bottom
);

$blog_list_boxes_padding_left = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_padding_left",
	$blog_list_boxes_padding_left
);

$group16 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing", 'moose' ),
	esc_html__( "Define blog list spacing", 'moose' )
);
$panel28->addChild(
	"group16",
	$group16
);

$row1 = new MooseElatedRow();
$group16->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_title_margin_bottom",
	$blog_list_boxes_title_margin_bottom
);

$blog_list_boxes_post_info_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_post_info_margin_bottom",
	$blog_list_boxes_post_info_margin_bottom
);

$blog_list_boxes_read_more_margin_top = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_read_more_margin_top",
	$blog_list_boxes_read_more_margin_top
);

$group17 = new MooseElatedGroup(
	esc_html__( "Blog List Title", 'moose' ),
	esc_html__( "Define Blog List title style", 'moose' )
);
$panel28->addChild(
	"group17",
	$group17
);

$row1 = new MooseElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_color = new MooseElatedField(
	"colorsimple",
	"blog_list_boxes_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_title_color",
	$blog_list_boxes_title_color
);

$blog_list_boxes_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_list_boxes_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_title_hover_color",
	$blog_list_boxes_title_hover_color
);

$blog_list_boxes_title_font_size = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_title_font_size",
	$blog_list_boxes_title_font_size
);

$blog_list_boxes_title_line_height = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_title_line_height",
	$blog_list_boxes_title_line_height
);

$row2 = new MooseElatedRow();
$group17->addChild(
	"row2",
	$row2
);

$blog_list_boxes_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_list_boxes_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_list_boxes_title_text_transform",
	$blog_list_boxes_title_text_transform
);

$blog_list_boxes_title_font_family = new MooseElatedField(
	"fontsimple",
	"blog_list_boxes_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_list_boxes_title_font_family",
	$blog_list_boxes_title_font_family
);

$blog_list_boxes_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_list_boxes_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_list_boxes_title_font_style",
	$blog_list_boxes_title_font_style
);

$blog_list_boxes_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_list_boxes_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_list_boxes_title_font_weight",
	$blog_list_boxes_title_font_weight
);

$row3 = new MooseElatedRow();
$group17->addChild(
	"row3",
	$row3
);

$blog_list_boxes_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_list_boxes_title_letter_spacing",
	$blog_list_boxes_title_letter_spacing
);

$group18 = new MooseElatedGroup(
	esc_html__( "Blog List Post Info", 'moose' ),
	esc_html__( "Define blog list post info style", 'moose' )
);
$panel28->addChild(
	"group18",
	$group18
);

$row1 = new MooseElatedRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_list_boxes_post_info_color = new MooseElatedField(
	"colorsimple",
	"blog_list_boxes_post_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_post_info_color",
	$blog_list_boxes_post_info_color
);

$blog_list_boxes_post_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_list_boxes_post_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_color",
	$blog_list_boxes_post_info_link_color
);

$blog_list_boxes_post_info_link_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_list_boxes_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_hover_color",
	$blog_list_boxes_post_info_link_hover_color
);

$blog_list_boxes_post_info_font_size = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_post_info_font_size",
	$blog_list_boxes_post_info_font_size
);

$row2 = new MooseElatedRow();
$group18->addChild(
	"row2",
	$row2
);

$blog_list_boxes_post_info_line_height = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_list_boxes_post_info_line_height",
	$blog_list_boxes_post_info_line_height
);

$blog_list_boxes_post_info_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_list_boxes_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_list_boxes_post_info_text_transform",
	$blog_list_boxes_post_info_text_transform
);

$blog_list_boxes_post_info_font_family = new MooseElatedField(
	"fontsimple",
	"blog_list_boxes_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_list_boxes_post_info_font_family",
	$blog_list_boxes_post_info_font_family
);

$blog_list_boxes_post_info_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_list_boxes_post_info_font_style",
	$blog_list_boxes_post_info_font_style
);

$row3 = new MooseElatedRow();
$group18->addChild(
	"row3",
	$row3
);

$blog_list_boxes_post_info_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_list_boxes_post_info_font_weight",
	$blog_list_boxes_post_info_font_weight
);

$blog_list_boxes_post_info_link_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_list_boxes_post_info_link_font_weight",
	"",
	esc_html__( "Link Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_list_boxes_post_info_link_font_weight",
	$blog_list_boxes_post_info_link_font_weight
);

$blog_list_boxes_post_info_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_list_boxes_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_list_boxes_post_info_letter_spacing",
	$blog_list_boxes_post_info_letter_spacing
);

$group23 = new MooseElatedGroup(
	esc_html__( "Blog List Date Style", 'moose' ),
	esc_html__( "Define blog list date box style", 'moose' )
);
$panel28->addChild(
	"group23",
	$group23
);

$row1 = new MooseElatedRow();
$group23->addChild(
	"row1",
	$row1
);

$blog_list_boxes_date_color = new MooseElatedField(
	"colorsimple",
	"blog_list_boxes_date_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "Choose color for date", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_date_color",
	$blog_list_boxes_date_color
);

$blog_list_boxes_date_bckg_color = new MooseElatedField(
	"colorsimple",
	"blog_list_boxes_date_bckg_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose color for date background", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_date_bckg_color",
	$blog_list_boxes_date_bckg_color
);

$group24 = new MooseElatedGroup(
	esc_html__( "Blog List Comments Style", 'moose' ),
	esc_html__( "Define blog list comments box style", 'moose' )
);
$panel28->addChild(
	"group24",
	$group24
);

$row1 = new MooseElatedRow();
$group24->addChild(
	"row1",
	$row1
);

$blog_list_boxes_comments_color = new MooseElatedField(
	"colorsimple",
	"blog_list_boxes_comments_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "Choose color for date", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_comments_color",
	$blog_list_boxes_comments_color
);

$blog_list_boxes_comments_bckg_color = new MooseElatedField(
	"colorsimple",
	"blog_list_boxes_comments_bckg_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose color for date background", 'moose' )
);
$row1->addChild(
	"blog_list_boxes_comments_bckg_color",
	$blog_list_boxes_comments_bckg_color
);

$blog_list_minimal_subtitle = new MooseElatedTitle(
	"blog_list_minimal_subtitle",
	esc_html__( "Blog List - Minimal", 'moose' )
);
$panel28->addChild(
	"blog_list_minimal_subtitle",
	$blog_list_minimal_subtitle
);

$group5 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing", 'moose' ),
	esc_html__( "Define blog list spacing", 'moose' )
);
$panel28->addChild(
	"group5",
	$group5
);

$row1 = new MooseElatedRow( true );
$group5->addChild(
	"row1",
	$row1
);

$blog_list_minimal_title_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_list_minimal_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_minimal_title_margin_bottom",
	$blog_list_minimal_title_margin_bottom
);

$blog_list_minimal_post_info_margin_bottom = new MooseElatedField(
	"textsimple",
	"blog_list_minimal_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_minimal_post_info_margin_bottom",
	$blog_list_minimal_post_info_margin_bottom
);

$blog_list_minimal_read_more_margin_top = new MooseElatedField(
	"textsimple",
	"blog_list_minimal_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_minimal_read_more_margin_top",
	$blog_list_minimal_read_more_margin_top
);

// Image in left box

$image_in_left_box = new MooseElatedTitle(
	"image_in_left_box",
	esc_html__( "Blog List - Image in Left Box", 'moose' )
);
$panel28->addChild(
	"image_in_left_box",
	$image_in_left_box
);

$group28 = new MooseElatedGroup(
	esc_html__( "Blog List Title", 'moose' ),
	esc_html__( "Define Blog List title style", 'moose' )
);
$panel28->addChild(
	"group28",
	$group28
);
$row1 = new MooseElatedRow();
$group28->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_color = new MooseElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_title_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_color",
	$blog_list_img_in_lbox_title_color
);

$blog_list_img_in_lbox_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_hover_color",
	$blog_list_img_in_lbox_title_hover_color
);

$blog_list_img_in_lbox_title_font_size = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_font_size",
	$blog_list_img_in_lbox_title_font_size
);

$blog_list_img_in_lbox_title_line_height = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_line_height",
	$blog_list_img_in_lbox_title_line_height
);

$row2 = new MooseElatedRow( true );
$group28->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_list_img_in_lbox_title_text_transform",
	$blog_list_img_in_lbox_title_text_transform
);

$blog_list_img_in_lbox_title_font_family = new MooseElatedField(
	"fontsimple",
	"blog_list_img_in_lbox_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_family",
	$blog_list_img_in_lbox_title_font_family
);

$blog_list_img_in_lbox_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_style",
	$blog_list_img_in_lbox_title_font_style
);

$blog_list_img_in_lbox_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_weight",
	$blog_list_img_in_lbox_title_font_weight
);

$row3 = new MooseElatedRow( true );
$group28->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_list_img_in_lbox_title_letter_spacing",
	$blog_list_img_in_lbox_title_letter_spacing
);

$group29 = new MooseElatedGroup(
	esc_html__( "Blog List Post Info", 'moose' ),
	esc_html__( "Define blog list post info style", 'moose' )
);
$panel28->addChild(
	"group29",
	$group29
);
$row1 = new MooseElatedRow();
$group29->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_post_info_color = new MooseElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_color",
	$blog_list_img_in_lbox_post_info_color
);

$blog_list_img_in_lbox_post_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_color",
	$blog_list_img_in_lbox_post_info_link_color
);

$blog_list_img_in_lbox_post_info_link_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_hover_color",
	$blog_list_img_in_lbox_post_info_link_hover_color
);

$blog_list_img_in_lbox_post_info_font_size = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_font_size",
	$blog_list_img_in_lbox_post_info_font_size
);

$row2 = new MooseElatedRow( true );
$group29->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_post_info_line_height = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_line_height",
	$blog_list_img_in_lbox_post_info_line_height
);

$blog_list_img_in_lbox_post_info_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_text_transform",
	$blog_list_img_in_lbox_post_info_text_transform
);

$blog_list_img_in_lbox_post_info_font_family = new MooseElatedField(
	"fontsimple",
	"blog_list_img_in_lbox_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_family",
	$blog_list_img_in_lbox_post_info_font_family
);

$blog_list_img_in_lbox_post_info_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_style",
	$blog_list_img_in_lbox_post_info_font_style
);

$row3 = new MooseElatedRow( true );
$group29->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_post_info_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_font_weight",
	$blog_list_img_in_lbox_post_info_font_weight
);

$blog_list_img_in_lbox_post_info_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_letter_spacing",
	$blog_list_img_in_lbox_post_info_letter_spacing
);

$group30 = new MooseElatedGroup(
	esc_html__( "Blog List Date Style", 'moose' ),
	esc_html__( "Define blog list date style", 'moose' )
);
$panel28->addChild(
	"group30",
	$group30
);
$row1 = new MooseElatedRow();
$group30->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_date_color = new MooseElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_date_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_color",
	$blog_list_img_in_lbox_date_color
);

$blog_list_img_in_lbox_date_font_size = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_font_size",
	$blog_list_img_in_lbox_date_font_size
);

$blog_list_img_in_lbox_date_line_height = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_line_height",
	$blog_list_img_in_lbox_date_line_height
);

$blog_list_img_in_lbox_date_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"blog_list_img_in_lbox_date_text_transform",
	$blog_list_img_in_lbox_date_text_transform
);

$row2 = new MooseElatedRow( true );
$group30->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_date_font_family = new MooseElatedField(
	"fontsimple",
	"blog_list_img_in_lbox_date_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_family",
	$blog_list_img_in_lbox_date_font_family
);

$blog_list_img_in_lbox_date_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_style",
	$blog_list_img_in_lbox_date_font_style
);

$blog_list_img_in_lbox_date_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_weight",
	$blog_list_img_in_lbox_date_font_weight
);

$blog_list_img_in_lbox_date_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_letter_spacing",
	$blog_list_img_in_lbox_date_letter_spacing
);

$group31 = new MooseElatedGroup(
	esc_html__( "Blog List Spacing", 'moose' ),
	esc_html__( "Define blog list spacing", 'moose' )
);
$panel28->addChild(
	"group31",
	$group31
);

$row1 = new MooseElatedRow( true );
$group31->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_margin_bttm = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_margin_bttm",
	$blog_list_img_in_lbox_title_margin_bttm
);

$blog_list_img_in_lbox_post_info_margin_bttm = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_margin_bttm",
	$blog_list_img_in_lbox_post_info_margin_bttm
);

$blog_list_img_in_lbox_read_more_margin_top = new MooseElatedField(
	"textsimple",
	"blog_list_img_in_lbox_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_list_img_in_lbox_read_more_margin_top",
	$blog_list_img_in_lbox_read_more_margin_top
);

/*** Blog Carousel ***/

$panel31 = new MooseElatedPanel(
	esc_html__( "Blog Carousel", 'moose' ),
	"blog_slider"
);
$blogPage->addChild(
	"panel31",
	$panel31
);

$blog_slider_default_and_with_info_always_title = new MooseElatedTitle(
	"blog_slider_default_and_with_info_always_title",
	esc_html__( "Default and Post Info Visible", 'moose' )
);
$panel31->addChild(
	"blog_slider_default_and_with_info_always_title",
	$blog_slider_default_and_with_info_always_title
);

$group23 = new MooseElatedGroup(
	esc_html__( "Title style", 'moose' ),
	esc_html__( "Blog Carousel title style", 'moose' )
);
$panel31->addChild(
	"group23",
	$group23
);

$row1 = new MooseElatedRow();
$group23->addChild(
	"row1",
	$row1
);

$blog_slider_title_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_title_color",
	"",
	esc_html__( "Title Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_title_color",
	$blog_slider_title_color
);

$blog_slider_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_title_hover_color",
	$blog_slider_title_hover_color
);

$blog_slider_title_font_size = new MooseElatedField(
	"textsimple",
	"blog_slider_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_title_font_size",
	$blog_slider_title_font_size
);

$blog_slider_title_line_height = new MooseElatedField(
	"textsimple",
	"blog_slider_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_title_line_height",
	$blog_slider_title_line_height
);

$row2 = new MooseElatedRow();
$group23->addChild(
	"row2",
	$row2
);

$blog_slider_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_slider_title_text_transform",
	$blog_slider_title_text_transform
);

$blog_slider_title_font_family = new MooseElatedField(
	"fontsimple",
	"blog_slider_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_title_font_family",
	$blog_slider_title_font_family
);

$blog_slider_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_slider_title_font_style",
	$blog_slider_title_font_style
);

$blog_slider_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_slider_title_font_weight",
	$blog_slider_title_font_weight
);

$row3 = new MooseElatedRow();
$group23->addChild(
	"row3",
	$row3
);

$blog_slider_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_slider_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_slider_title_letter_spacing",
	$blog_slider_title_letter_spacing
);

$group24 = new MooseElatedGroup(
	esc_html__( "Category style", 'moose' ),
	esc_html__( "Blog Carousel categories style", 'moose' )
);
$panel31->addChild(
	"group24",
	$group24
);

$row1 = new MooseElatedRow();
$group24->addChild(
	"row1",
	$row1
);

$blog_slider_category_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_category_color",
	"",
	esc_html__( "Category Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_category_color",
	$blog_slider_category_color
);

$blog_slider_category_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_category_hover_color",
	"",
	esc_html__( "Category Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_category_hover_color",
	$blog_slider_category_hover_color
);

$blog_slider_category_font_size = new MooseElatedField(
	"textsimple",
	"blog_slider_category_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_category_font_size",
	$blog_slider_category_font_size
);

$blog_slider_category_line_height = new MooseElatedField(
	"textsimple",
	"blog_slider_category_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_category_line_height",
	$blog_slider_category_line_height
);

$row2 = new MooseElatedRow();
$group24->addChild(
	"row2",
	$row2
);

$blog_slider_category_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_category_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_slider_category_text_transform",
	$blog_slider_category_text_transform
);

$blog_slider_category_font_family = new MooseElatedField(
	"fontsimple",
	"blog_slider_category_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_category_font_family",
	$blog_slider_category_font_family
);

$blog_slider_category_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_category_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_slider_category_font_style",
	$blog_slider_category_font_style
);

$blog_slider_category_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_category_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_slider_category_font_weight",
	$blog_slider_category_font_weight
);

$row3 = new MooseElatedRow();
$group24->addChild(
	"row3",
	$row3
);

$blog_slider_category_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_slider_category_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_slider_category_letter_spacing",
	$blog_slider_category_letter_spacing
);

$group25 = new MooseElatedGroup(
	esc_html__( "Date style", 'moose' ),
	esc_html__( "Blog Carousel date style", 'moose' )
);
$panel31->addChild(
	"group25",
	$group25
);

$row1 = new MooseElatedRow();
$group25->addChild(
	"row1",
	$row1
);

$blog_slider_date_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_date_color",
	"",
	esc_html__( "Date Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_date_color",
	$blog_slider_date_color
);

$blog_slider_date_font_size = new MooseElatedField(
	"textsimple",
	"blog_slider_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_date_font_size",
	$blog_slider_date_font_size
);

$blog_slider_date_line_height = new MooseElatedField(
	"textsimple",
	"blog_slider_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_date_line_height",
	$blog_slider_date_line_height
);

$blog_slider_date_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_date_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row1->addChild(
	"blog_slider_date_text_transform",
	$blog_slider_date_text_transform
);

$row2 = new MooseElatedRow();
$group25->addChild(
	"row2",
	$row2
);

$blog_slider_date_font_family = new MooseElatedField(
	"fontsimple",
	"blog_slider_date_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_date_font_family",
	$blog_slider_date_font_family
);

$blog_slider_date_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_date_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_slider_date_font_style",
	$blog_slider_date_font_style
);

$blog_slider_date_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_date_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_slider_date_font_weight",
	$blog_slider_date_font_weight
);

$blog_slider_date_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_slider_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_date_letter_spacing",
	$blog_slider_date_letter_spacing
);

$blog_slider_info_in_bottom_title = new MooseElatedTitle(
	"blog_slider_info_in_bottom_title",
	esc_html__( "Post Info in Bottom", 'moose' )
);
$panel31->addChild(
	"blog_slider_info_in_bottom_title",
	$blog_slider_info_in_bottom_title
);

$group26 = new MooseElatedGroup(
	esc_html__( "Title style", 'moose' ),
	esc_html__( "Blog Carousel title style", 'moose' )
);
$panel31->addChild(
	"group26",
	$group26
);

$row1 = new MooseElatedRow();
$group26->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_title_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_color",
	"",
	esc_html__( "Title Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_color",
	$blog_slider_post_info_in_bottom_title_color
);

$blog_slider_post_info_in_bottom_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_hover_color",
	$blog_slider_post_info_in_bottom_title_hover_color
);

$blog_slider_post_info_in_bottom_title_font_size = new MooseElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_font_size",
	$blog_slider_post_info_in_bottom_title_font_size
);

$blog_slider_post_info_in_bottom_title_line_height = new MooseElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_line_height",
	$blog_slider_post_info_in_bottom_title_line_height
);

$row2 = new MooseElatedRow();
$group26->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_text_transform",
	$blog_slider_post_info_in_bottom_title_text_transform
);

$blog_slider_post_info_in_bottom_title_font_family = new MooseElatedField(
	"fontsimple",
	"blog_slider_post_info_in_bottom_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_family",
	$blog_slider_post_info_in_bottom_title_font_family
);

$blog_slider_post_info_in_bottom_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_style",
	$blog_slider_post_info_in_bottom_title_font_style
);

$blog_slider_post_info_in_bottom_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_weight",
	$blog_slider_post_info_in_bottom_title_font_weight
);

$row3 = new MooseElatedRow();
$group26->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	$blog_slider_post_info_in_bottom_title_letter_spacing
);

$group27 = new MooseElatedGroup(
	esc_html__( "Post Info style", 'moose' ),
	esc_html__( "Blog Carousel post info style", 'moose' )
);
$panel31->addChild(
	"group27",
	$group27
);

$row1 = new MooseElatedRow();
$group27->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_post_info_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_color",
	"",
	esc_html__( "Text Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_color",
	$blog_slider_post_info_in_bottom_post_info_color
);

$blog_slider_post_info_in_bottom_post_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_color",
	$blog_slider_post_info_in_bottom_post_info_link_color
);

$blog_slider_post_info_in_bottom_post_info_link_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	$blog_slider_post_info_in_bottom_post_info_link_hover_color
);

$blog_slider_post_info_in_bottom_post_info_font_size = new MooseElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_size",
	$blog_slider_post_info_in_bottom_post_info_font_size
);

$row2 = new MooseElatedRow();
$group27->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_post_info_line_height = new MooseElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_line_height",
	$blog_slider_post_info_in_bottom_post_info_line_height
);

$blog_slider_post_info_in_bottom_post_info_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	$blog_slider_post_info_in_bottom_post_info_text_transform
);

$blog_slider_post_info_in_bottom_post_info_font_family = new MooseElatedField(
	"fontsimple",
	"blog_slider_post_info_in_bottom_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_family",
	$blog_slider_post_info_in_bottom_post_info_font_family
);

$blog_slider_post_info_in_bottom_post_info_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_style",
	$blog_slider_post_info_in_bottom_post_info_font_style
);

$row3 = new MooseElatedRow();
$group27->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_post_info_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	$blog_slider_post_info_in_bottom_post_info_font_weight
);

$blog_slider_post_info_in_bottom_post_info_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	$blog_slider_post_info_in_bottom_post_info_letter_spacing
);

/*** Blog Slider ***/

$panel32 = new MooseElatedPanel(
	esc_html__( "Blog Slider", 'moose' ),
	"blog_slider_simple_simple"
);
$blogPage->addChild(
	"panel32",
	$panel32
);

$blog_slider_simple_simple_box = new MooseElatedTitle(
	"blog_slider_simple_simple_box",
	esc_html__( "Box Style", 'moose' )
);
$panel32->addChild(
	"blog_slider_simple_simple_box",
	$blog_slider_simple_simple_box
);

$blog_slider_simple_box_back_color = new MooseElatedField(
	"color",
	"blog_slider_simple_box_back_color",
	"",
	esc_html__( "Background Color", 'moose' ),
	esc_html__( "Choose background color", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_back_color",
	$blog_slider_simple_box_back_color
);

$blog_slider_simple_box_opacity = new MooseElatedField(
	"text",
	"blog_slider_simple_box_opacity",
	"",
	esc_html__( "Background Opacity", 'moose' ),
	esc_html__( "Choose a transparency for the shader background color (0 = fully transparent, 1 = opaque)", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_opacity",
	$blog_slider_simple_box_opacity
);

$blog_slider_simple_box_padding = new MooseElatedField(
	"text",
	"blog_slider_simple_box_padding",
	"",
	esc_html__( "Box Padding", 'moose' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px or 5% 5% 5% 5%", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_padding",
	$blog_slider_simple_box_padding
);

$blog_slider_simple_box_border_color = new MooseElatedField(
	"color",
	"blog_slider_simple_box_border_color",
	"",
	esc_html__( "Box Border Color", 'moose' ),
	esc_html__( "Choose border color", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_border_color",
	$blog_slider_simple_box_border_color
);

$blog_slider_simple_simple_spacing = new MooseElatedTitle(
	"blog_slider_simple_simple_spacing",
	esc_html__( "Blog simple slider spacing", 'moose' )
);
$panel32->addChild(
	"blog_slider_simple_simple_spacing",
	$blog_slider_simple_simple_spacing
);

$blog_slider_simple_info_margin_top = new MooseElatedField(
	"text",
	"blog_slider_simple_info_margin_top",
	"",
	esc_html__( "Post Info Margin Top (px)", 'moose' ),
	esc_html__( "Define post info margin top", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_info_margin_top",
	$blog_slider_simple_info_margin_top
);

$blog_slider_simple_read_more_margin_top = new MooseElatedField(
	"text",
	"blog_slider_simple_read_more_margin_top",
	"",
	esc_html__( "Read More Margin Top (px)", 'moose' ),
	esc_html__( "Define read more margin top", 'moose' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_read_more_margin_top",
	$blog_slider_simple_read_more_margin_top
);

$blog_slider_simple_simple_text = new MooseElatedTitle(
	"blog_slider_simple_simple_text",
	esc_html__( "Post Text Style", 'moose' )
);
$panel32->addChild(
	"blog_slider_simple_simple_text",
	$blog_slider_simple_simple_text
);

$group_title = new MooseElatedGroup(
	esc_html__( "Title style", 'moose' ),
	esc_html__( "Blog slider title style", 'moose' )
);
$panel32->addChild(
	"group_title",
	$group_title
);

$row1 = new MooseElatedRow();
$group_title->addChild(
	"row1",
	$row1
);

$blog_slider_simple_title_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_simple_title_color",
	"",
	esc_html__( "Title Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_simple_title_color",
	$blog_slider_simple_title_color
);

$blog_slider_simple_title_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_simple_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_simple_title_hover_color",
	$blog_slider_simple_title_hover_color
);

$blog_slider_simple_title_font_size = new MooseElatedField(
	"textsimple",
	"blog_slider_simple_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_simple_title_font_size",
	$blog_slider_simple_title_font_size
);

$blog_slider_simple_title_line_height = new MooseElatedField(
	"textsimple",
	"blog_slider_simple_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_simple_title_line_height",
	$blog_slider_simple_title_line_height
);

$row2 = new MooseElatedRow();
$group_title->addChild(
	"row2",
	$row2
);

$blog_slider_simple_title_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_simple_title_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_slider_simple_title_text_transform",
	$blog_slider_simple_title_text_transform
);

$blog_slider_simple_title_font_family = new MooseElatedField(
	"fontsimple",
	"blog_slider_simple_title_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_simple_title_font_family",
	$blog_slider_simple_title_font_family
);

$blog_slider_simple_title_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_simple_title_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_slider_simple_title_font_style",
	$blog_slider_simple_title_font_style
);

$blog_slider_simple_title_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_simple_title_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row2->addChild(
	"blog_slider_simple_title_font_weight",
	$blog_slider_simple_title_font_weight
);

$row3 = new MooseElatedRow();
$group_title->addChild(
	"row3",
	$row3
);

$blog_slider_simple_title_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_slider_simple_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_slider_simple_title_letter_spacing",
	$blog_slider_simple_title_letter_spacing
);

$group_post_info = new MooseElatedGroup(
	esc_html__( "Post Info Style", 'moose' ),
	esc_html__( "Blog slider post info style", 'moose' )
);
$panel32->addChild(
	"group_post_info",
	$group_post_info
);

$row1 = new MooseElatedRow();
$group_post_info->addChild(
	"row1",
	$row1
);

$blog_slider_simple_info_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_simple_info_color",
	"",
	esc_html__( "Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_simple_info_color",
	$blog_slider_simple_info_color
);

$blog_slider_simple_info_link_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_simple_info_link_color",
	"",
	esc_html__( "Link Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_simple_info_link_color",
	$blog_slider_simple_info_link_color
);

$blog_slider_simple_info_hover_color = new MooseElatedField(
	"colorsimple",
	"blog_slider_simple_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_simple_info_hover_color",
	$blog_slider_simple_info_hover_color
);

$blog_slider_simple_info_font_size = new MooseElatedField(
	"textsimple",
	"blog_slider_simple_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row1->addChild(
	"blog_slider_simple_info_font_size",
	$blog_slider_simple_info_font_size
);

$row2 = new MooseElatedRow();
$group_post_info->addChild(
	"row2",
	$row2
);

$blog_slider_simple_info_line_height = new MooseElatedField(
	"textsimple",
	"blog_slider_simple_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_simple_info_line_height",
	$blog_slider_simple_info_line_height
);

$blog_slider_simple_info_text_transform = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_simple_info_text_transform",
	"",
	esc_html__( "Text Transform", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_text_transform_array()
);
$row2->addChild(
	"blog_slider_simple_info_text_transform",
	$blog_slider_simple_info_text_transform
);

$blog_slider_simple_info_font_family = new MooseElatedField(
	"fontsimple",
	"blog_slider_simple_info_font_family",
	"-1",
	esc_html__( "Font Family", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row2->addChild(
	"blog_slider_simple_info_font_family",
	$blog_slider_simple_info_font_family
);

$blog_slider_simple_info_font_style = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_simple_info_font_style",
	"",
	esc_html__( "Font Style", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_style_array()
);
$row2->addChild(
	"blog_slider_simple_info_font_style",
	$blog_slider_simple_info_font_style
);

$row3 = new MooseElatedRow();
$group_post_info->addChild(
	"row3",
	$row3
);

$blog_slider_simple_info_font_weight = new MooseElatedField(
	"selectblanksimple",
	"blog_slider_simple_info_font_weight",
	"",
	esc_html__( "Font Weight", 'moose' ),
	esc_html__( "This is some description", 'moose' ),
	moose_elated_get_font_weight_array()
);
$row3->addChild(
	"blog_slider_simple_info_font_weight",
	$blog_slider_simple_info_font_weight
);

$blog_slider_simple_info_letter_spacing = new MooseElatedField(
	"textsimple",
	"blog_slider_simple_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'moose' ),
	esc_html__( "This is some description", 'moose' )
);
$row3->addChild(
	"blog_slider_simple_info_letter_spacing",
	$blog_slider_simple_info_letter_spacing
);