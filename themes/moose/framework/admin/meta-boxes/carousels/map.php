<?php

//Carousels

$eltdCarousels = new MooseElatedMetaBox(
	"carousels",
	esc_html__( "Carousels", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"carousels",
	$eltdCarousels
);

$eltd_carousel_image = new MooseElatedMetaField(
	"image",
	"eltd_carousel-image",
	"",
	esc_html__( "Carousel Image", 'moose' ),
	esc_html__( "Choose carousel image (min width needs to be 215px)", 'moose' )
);
$eltdCarousels->addChild(
	"eltd_carousel-image",
	$eltd_carousel_image
);

$eltd_carousel_hover_image = new MooseElatedMetaField(
	"image",
	"eltd_carousel-hover-image",
	"",
	esc_html__( "Carousel Hover Image", 'moose' ),
	esc_html__( "Choose carousel hover image (min width needs to be 215px)", 'moose' )
);
$eltdCarousels->addChild(
	"eltd_carousel-hover-image",
	$eltd_carousel_hover_image
);

$eltd_carousel_item_text = new MooseElatedMetaField(
	"textarea",
	"eltd_carousel-item-text",
	"",
	esc_html__( "Text", 'moose' ),
	esc_html__( "Enter carousel text", 'moose' )
);
$eltdCarousels->addChild(
	"eltd_carousel-item-text",
	$eltd_carousel_item_text
);

$eltd_carousel_item_link = new MooseElatedMetaField(
	"text",
	"eltd_carousel-item-link",
	"",
	esc_html__( "Link", 'moose' ),
	esc_html__( "Enter the URL to which you want the image to link to (e.g. http://www.example.com)", 'moose' )
);
$eltdCarousels->addChild(
	"eltd_carousel-item-link",
	$eltd_carousel_item_link
);

$eltd_carousel_item_target = new MooseElatedMetaField(
	"selectblank",
	"eltd_carousel-item-target",
	"",
	esc_html__( "Target", 'moose' ),
	esc_html__( "Specify where to open the linked document", 'moose' ),
	array(
		"_self" => esc_html__("Self", 'moose' ),
		"_blank" => esc_html__("Blank", 'moose' )
	)
);
$eltdCarousels->addChild(
	"eltd_carousel-item-target",
	$eltd_carousel_item_target
);