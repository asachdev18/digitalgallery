<?php

$logoPage = new MooseElatedAdminPage(
	"1",
	esc_html__( "Logo", 'moose' ),
	"fa fa-coffee"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	"logo",
	$logoPage
);

$panel1 = new MooseElatedPanel(
	esc_html__( "Logo Upload", 'moose' ),
	"logo"
);
$logoPage->addChild(
	"panel1",
	$panel1
);

$show_logo = new MooseElatedField(
	"yesno",
	"show_logo",
	"yes",
	esc_html__( "Show Logo", 'moose' ),
	esc_html__( "Disabling this option will hide logo", 'moose' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_show_logo_container"
	)
);
$panel1->addChild(
	"show_logo",
	$show_logo
);
$show_logo_container = new MooseElatedContainer(
	"show_logo_container",
	"show_logo",
	"no"
);
$panel1->addChild(
	"show_logo_container",
	$show_logo_container
);

$logo_image = new MooseElatedField(
	"image",
	"logo_image",
	MOOSE_ELATED_ROOT . "/img/logo.png",
	esc_html__( "Logo Image - Normal", 'moose' ),
	esc_html__( "Choose a default logo image to display ", 'moose' )
);
$show_logo_container->addChild(
	"logo_image",
	$logo_image
);

$logo_image_light = new MooseElatedField(
	"image",
	"logo_image_light",
	MOOSE_ELATED_ROOT . "/img/logo_white.png",
	esc_html__( "Logo Image - Light", 'moose' ),
	esc_html__( 'Choose a logo image to display for "Light" header skin', 'moose' )
);
$show_logo_container->addChild(
	"logo_image_light",
	$logo_image_light
);

$logo_image_dark = new MooseElatedField(
	"image",
	"logo_image_dark",
	MOOSE_ELATED_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Dark", 'moose' ),
	esc_html__( 'Choose a logo image to display for "Dark" header skin', 'moose' )
);
$show_logo_container->addChild(
	"logo_image_dark",
	$logo_image_dark
);

$logo_image_sticky = new MooseElatedField(
	"image",
	"logo_image_sticky",
	MOOSE_ELATED_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Sticky Header", 'moose' ),
	esc_html__( 'Choose a logo image to display for "Sticky" header type', 'moose' )
);
$show_logo_container->addChild(
	"logo_image_sticky",
	$logo_image_sticky
);

$logo_image_fixed_hidden = new MooseElatedField(
	"image",
	"logo_image_fixed_hidden",
	"",
	esc_html__( "Logo Image - Fixed Advanced Header", 'moose' ),
	esc_html__( 'Choose a logo image to display for "Fixed Advanced" header type', 'moose' )
);
$show_logo_container->addChild(
	"logo_image_fixed_hidden",
	$logo_image_fixed_hidden
);

$logo_image_mobile = new MooseElatedField(
	"image",
	"logo_image_mobile",
	"",
	esc_html__( "Logo Image - Mobile Header", 'moose' ),
	esc_html__( 'Choose a logo image to display for "Mobile" header type', 'moose' )
);
$show_logo_container->addChild(
	"logo_image_mobile",
	$logo_image_mobile
);

$vertical_logo_bottom = new MooseElatedField(
	"image",
	"vertical_logo_bottom",
	"",
	esc_html__( "Side Menu Area Bottom Logo Image", 'moose' ),
	esc_html__( 'Choose a logo image to display on the bottom of side menu area for "Initially Hidden" side menu area type', 'moose' )
);
$show_logo_container->addChild(
	"vertical_logo_bottom",
	$vertical_logo_bottom
);

$content_menu_logo_image = new MooseElatedField(
	"image",
	"content_menu_logo_image",
	"",
	esc_html__( "Content Menu Logo Image", 'moose' ),
	esc_html__( 'Choose a logo image to display on the Content Menu', 'moose' )
);
$show_logo_container->addChild(
	"content_menu_logo_image",
	$content_menu_logo_image
);