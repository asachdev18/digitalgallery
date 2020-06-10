<?php

function eltd_moose_get_inline_style($param1) {
	return moose_elated_get_inline_style($param1);
}

function eltd_moose_get_attachment_meta_from_url($param1, $param2){
	return moose_elated_get_attachment_meta_from_url($param1, $param2);
}

if ( ! function_exists( 'moose_elated_init_icon_collection_variable_fallback' ) ) {
	function moose_elated_init_icon_collection_variable_fallback() {
		global $eltdIconCollections;

		$eltdIconCollections = MooseElatedIconCollections::get_instance();
	}

	add_action( 'moose_elated_action_before_options_map', 'moose_elated_init_icon_collection_variable_fallback', 11 );
}
function eltd_moose_horizontal_slider_icon_classes (){
	return null;
}