<?php

$moose_elated_icon_collections = moose_elated_return_icon_collections();

$socialPage = new MooseElatedAdminPage(
	"12",
	esc_html__( "Social", 'moose' ),
	"fa fa-share-alt"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"socialPage",
	$socialPage
);

//Enable Social Share

$panel2 = new MooseElatedPanel(
	esc_html__( "Enable Social Share", 'moose' ),
	"social_sharing_panel"
);
$socialPage->addChild(
	"panel2",
	$panel2
);

$enable_social_share = new MooseElatedField(
	"yesno",
	"enable_social_share",
	"no",
	esc_html__( "Enable Social Share", 'moose' ),
	esc_html__( "Enabling this option will allow social share on networks of your choice", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_social_networks_panel,#eltdf_show_social_share_panel"
	)
);
$panel2->addChild(
	"enable_social_share",
	$enable_social_share
);

//Show Social Share

$panel3 = new MooseElatedPanel(
	esc_html__( "Show Social Share On", 'moose' ),
	"show_social_share_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel3",
	$panel3
);

$post_types_names_post = new MooseElatedField(
	"flagpost",
	"post_types_names_post",
	"",
	esc_html__( "Posts", 'moose' ),
	esc_html__( "Show Social Share on Blog Posts", 'moose' )
);
$panel3->addChild(
	"post_types_names_post",
	$post_types_names_post
);

$post_types_names_page = new MooseElatedField(
	"flagpage",
	"post_types_names_page",
	"",
	esc_html__( "Pages", 'moose' ),
	esc_html__( "Show Social Share on Pages", 'moose' )
);
$panel3->addChild(
	"post_types_names_page",
	$post_types_names_page
);

$post_types_names_attachment = new MooseElatedField(
	"flagmedia",
	"post_types_names_attachment",
	"",
	esc_html__( "Media", 'moose' ),
	esc_html__( "Show Social Share for Images and Videos", 'moose' )
);
$panel3->addChild(
	"post_types_names_attachment",
	$post_types_names_attachment
);

$post_types_names_portfolio_page = new MooseElatedField(
	"flagportfolio",
	"post_types_names_portfolio_page",
	"",
	esc_html__( "Portfolio Item", 'moose' ),
	esc_html__( "Show Social Share for Portfolio Items", 'moose' )
);
$panel3->addChild(
	"post_types_names_portfolio_page",
	$post_types_names_portfolio_page
);

if ( moose_elated_is_woocommerce_installed() ) {
	$post_types_names_product = new MooseElatedField(
		"flagproduct",
		"post_types_names_product",
		"",
		esc_html__( "Product", 'moose' ),
		esc_html__( "Show Social Share for Product Items", 'moose' )
	);
	$panel3->addChild(
		"post_types_names_product",
		$post_types_names_product
	);
}

//Social Share Networks

$panel4 = new MooseElatedPanel(
	esc_html__( "Social Networks", 'moose' ),
	"social_networks_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel4",
	$panel4
);

//Facebook

$facebook_subtitle = new MooseElatedTitle(
	"facebook_subtitle",
	esc_html__( "Share on Facebook", 'moose' )
);
$panel4->addChild(
	"facebook_subtitle",
	$facebook_subtitle
);

$enable_facebook_share = new MooseElatedField(
	"yesno",
	"enable_facebook_share",
	"no",
	esc_html__( "Enable Share", 'moose' ),
	esc_html__( "Enabling this option will allow sharing via Facebook", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_facebook_share_container"
	)
);
$panel4->addChild(
	"enable_facebook_share",
	$enable_facebook_share
);

$enable_facebook_share_container = new MooseElatedContainer(
	"enable_facebook_share_container",
	"enable_facebook_share",
	"no"
);
$panel4->addChild(
	"enable_facebook_share_container",
	$enable_facebook_share_container
);

$facebook_icon = new MooseElatedField(
	"image",
	"facebook_icon",
	"",
	esc_html__( "Upload Icon", 'moose' ),
	""
);
$enable_facebook_share_container->addChild(
	"facebook_icon",
	$facebook_icon
);

//Twitter
$twitter_subtitle = new MooseElatedTitle(
	"twitter_subtitle",
	esc_html__( "Share on Twitter", 'moose' )
);
$panel4->addChild(
	"twitter_subtitle",
	$twitter_subtitle
);

$enable_twitter_share = new MooseElatedField(
	"yesno",
	"enable_twitter_share",
	"no",
	esc_html__( "Enable Share", 'moose' ),
	esc_html__( "Enabling this option will allow sharing via Twitter", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_twitter_share_container"
	)
);
$panel4->addChild(
	"enable_twitter_share",
	$enable_twitter_share
);
$enable_twitter_share_container = new MooseElatedContainer(
	"enable_twitter_share_container",
	"enable_twitter_share",
	"no"
);
$panel4->addChild(
	"enable_twitter_share_container",
	$enable_twitter_share_container
);
$twitter_icon = new MooseElatedField(
	"image",
	"twitter_icon",
	"",
	esc_html__( "Upload Icon", 'moose' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_icon",
	$twitter_icon
);
$twitter_via = new MooseElatedField(
	"text",
	"twitter_via",
	"",
	esc_html__( "Via", 'moose' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_via",
	$twitter_via
);

//Google Plus

$google_plus_subtitle = new MooseElatedTitle(
	"google_plus_subtitle",
	esc_html__( "Share on Google Plus", 'moose' )
);
$panel4->addChild(
	"google_plus_subtitle",
	$google_plus_subtitle
);

$enable_google_plus = new MooseElatedField(
	"yesno",
	"enable_google_plus",
	"no",
	esc_html__( "Enable Share", 'moose' ),
	esc_html__( "Enabling this option will allow sharing via Google Plus", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_google_plus_container"
	)
);
$panel4->addChild(
	"enable_google_plus",
	$enable_google_plus
);
$enable_google_plus_container = new MooseElatedContainer(
	"enable_google_plus_container",
	"enable_google_plus",
	"no"
);
$panel4->addChild(
	"enable_google_plus_container",
	$enable_google_plus_container
);
$google_plus_icon = new MooseElatedField(
	"image",
	"google_plus_icon",
	"",
	esc_html__( "Upload Icon", 'moose' ),
	""
);
$enable_google_plus_container->addChild(
	"google_plus_icon",
	$google_plus_icon
);

//LinkedIn

$linkedin_subtitle = new MooseElatedTitle(
	"linkedin_subtitle",
	esc_html__( "Share on LinkedIn", 'moose' )
);
$panel4->addChild(
	"linkedin_subtitle",
	$linkedin_subtitle
);

$enable_linkedin = new MooseElatedField(
	"yesno",
	"enable_linkedin",
	"no",
	esc_html__( "Enable Share", 'moose' ),
	esc_html__( "Enabling this option will allow sharing via LinkedIn", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_linkedin_container"
	)
);
$panel4->addChild(
	"enable_linkedin",
	$enable_linkedin
);
$enable_linkedin_container = new MooseElatedContainer(
	"enable_linkedin_container",
	"enable_linkedin",
	"no"
);
$panel4->addChild(
	"enable_linkedin_container",
	$enable_linkedin_container
);
$linkedin_icon = new MooseElatedField(
	"image",
	"linkedin_icon",
	"",
	esc_html__( "Upload Icon", 'moose' ),
	""
);
$enable_linkedin_container->addChild(
	"linkedin_icon",
	$linkedin_icon
);

//Tumblr

$tumblr_subtitle = new MooseElatedTitle(
	"tumblr_subtitle",
	esc_html__( "Share on Tumblr", 'moose' )
);
$panel4->addChild(
	"tumblr_subtitle",
	$tumblr_subtitle
);

$enable_tumblr = new MooseElatedField(
	"yesno",
	"enable_tumblr",
	"no",
	esc_html__( "Enable Share", 'moose' ),
	esc_html__( "Enabling this option will allow sharing via Tumblr", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_tumblr_container"
	)
);
$panel4->addChild(
	"enable_tumblr",
	$enable_tumblr
);

$enable_tumblr_container = new MooseElatedContainer(
	"enable_tumblr_container",
	"enable_tumblr",
	"no"
);
$panel4->addChild(
	"enable_tumblr_container",
	$enable_tumblr_container
);

$tumblr_icon = new MooseElatedField(
	"image",
	"tumblr_icon",
	"",
	esc_html__( "Upload Icon", 'moose' ),
	""
);
$enable_tumblr_container->addChild(
	"tumblr_icon",
	$tumblr_icon
);

// Pinterest

$pinterest_subtitle = new MooseElatedTitle(
	"pinterest_subtitle",
	esc_html__( "Share on Pinterest", 'moose' )
);
$panel4->addChild(
	"pinterest_subtitle",
	$pinterest_subtitle
);

$enable_pinterest = new MooseElatedField(
	"yesno",
	"enable_pinterest",
	"no",
	esc_html__( "Enable Share", 'moose' ),
	esc_html__( "Enabling this option will allow sharing via Pinterest", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_pinterest_container"
	)
);
$panel4->addChild(
	"enable_pinterest",
	$enable_pinterest
);
$enable_pinterest_container = new MooseElatedContainer(
	"enable_pinterest_container",
	"enable_pinterest",
	"no"
);
$panel4->addChild(
	"enable_pinterest_container",
	$enable_pinterest_container
);
$pinterest_icon = new MooseElatedField(
	"image",
	"pinterest_icon",
	"",
	esc_html__( "Upload Icon", 'moose' ),
	""
);
$enable_pinterest_container->addChild(
	"pinterest_icon",
	$pinterest_icon
);

//VK

$vk_subtitle = new MooseElatedTitle(
	"vk_subtitle",
	esc_html__( "Share on VK", 'moose' )
);
$panel4->addChild(
	"vk_subtitle",
	$vk_subtitle
);

$enable_vk = new MooseElatedField(
	"yesno",
	"enable_vk",
	"no",
	esc_html__( "Enable Share", 'moose' ),
	esc_html__( "Enabling this option will allow sharing via VK", 'moose' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_vk_container"
	)
);
$panel4->addChild(
	"enable_vk",
	$enable_vk
);
$enable_vk_container = new MooseElatedContainer(
	"enable_vk_container",
	"enable_vk",
	"no"
);
$panel4->addChild(
	"enable_vk_container",
	$enable_vk_container
);
$vk_icon = new MooseElatedField(
	"image",
	"vk_icon",
	"",
	esc_html__( "Upload Icon", 'moose' ),
	""
);
$enable_vk_container->addChild(
	"vk_icon",
	$vk_icon
);

if ( defined( 'ELTD_TWITTER_FEED_VERSION' ) ) {
	$twitter_panel = new MooseElatedPanel(
		esc_html__( 'Twitter', 'moose' ),
		'twitter_panel'
	);
	$socialPage->addChild(
		"twitter_panel",
		$twitter_panel
	);
	
	$twitter_field = new MooseElatedTwitterFramework();
	$twitter_panel->addChild(
		'twitter_field',
		$twitter_field
	);
}

if ( defined( 'MOOSE_INSTAGRAM_FEED_VERSION' ) ) {
	
	$instagram_panel = new MooseElatedPanel(
		esc_html__( 'Instagram', 'moose' ),
		'instagram_panel'
	);
	
	$socialPage->addChild(
		"instagram_panel",
		$instagram_panel
	);
	
	$instagram_field = new MooseElatedInstagramFramework();
	$instagram_panel->addChild(
		'instagram_field',
		$instagram_field
	);
}