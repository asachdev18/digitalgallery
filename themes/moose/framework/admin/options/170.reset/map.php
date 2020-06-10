<?php

$resetPage = new MooseElatedAdminPage(
	"21",
	esc_html__( "Reset", 'moose' ),
	"fa fa-retweet"
);
moose_elated_framework()->eltdOptions->addAdminPage(
	esc_html__( "Reset", 'moose' ),
	$resetPage
);

//Reset

$panel1 = new MooseElatedPanel(
	esc_html__( "Reset to Defaults", 'moose' ),
	"reset_panel"
);
$resetPage->addChild(
	"panel1",
	$panel1
);

$reset_to_defaults = new MooseElatedField(
	"yesno",
	"reset_to_defaults",
	"no",
	esc_html__( "Reset to Defaults", 'moose' ),
	esc_html__( "This option will reset all Elated Options values to defaults", 'moose' )
);
$panel1->addChild(
	"reset_to_defaults",
	$reset_to_defaults
);