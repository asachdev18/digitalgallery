<?php

//Testimonials

$eltdTestimonials = new MooseElatedMetaBox(
	"testimonials",
	esc_html__( "Testimonials", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"testimonials",
	$eltdTestimonials
);

$eltd_show_testimonial_title_text = new MooseElatedMetaField(
	"yesno",
	"eltd_show_testimonial_title_text",
	"no",
	esc_html__( "Hide Testimonial Title Text", 'moose' ),
	esc_html__( "Enable this option to hide the title text", 'moose' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "#eltdf_eltd_testimonial_title_container",
		"dependence_show_on_yes" => ""
	)
);
$eltdTestimonials->addChild(
	"eltd_show_testimonial_title_text",
	$eltd_show_testimonial_title_text
);

$eltd_testimonial_title_container = new MooseElatedContainer(
	"eltd_testimonial_title_container",
	"eltd_show_testimonial_title_text",
	"yes"
);
$eltdTestimonials->addChild(
	"eltd_testimonial_title_container",
	$eltd_testimonial_title_container
);

$eltd_testimonial_title = new MooseElatedMetaField(
	"text",
	"eltd_testimonial_title",
	"",
	esc_html__( "Title", 'moose' ),
	esc_html__( "Enter testimonial title", 'moose' )
);
$eltd_testimonial_title_container->addChild(
	"eltd_testimonial_title",
	$eltd_testimonial_title
);

$eltd_testimonial_author = new MooseElatedMetaField(
	"text",
	"eltd_testimonial-author",
	"",
	esc_html__( "Author", 'moose' ),
	esc_html__( "Enter author name", 'moose' )
);
$eltdTestimonials->addChild(
	"eltd_testimonial-author",
	$eltd_testimonial_author
);

$eltd_testimonial_author_position = new MooseElatedMetaField(
	"text",
	"eltd_testimonial_author_position",
	"",
	esc_html__( "Job Position", 'moose' ),
	esc_html__( "Enter job position name", 'moose' )
);
$eltdTestimonials->addChild(
	"eltd_testimonial_author_position",
	$eltd_testimonial_author_position
);

$eltd_testimonial_text = new MooseElatedMetaField(
	"textarea",
	"eltd_testimonial-text",
	"",
	esc_html__( "Text", 'moose' ),
	esc_html__( "Enter testimonial text", 'moose' )
);
$eltdTestimonials->addChild(
	"eltd_testimonial-text",
	$eltd_testimonial_text
);