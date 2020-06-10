<?php

if ( ! function_exists( 'elated_cpt_register_widgets' ) ) {
	function elated_cpt_register_widgets() {
		register_widget('MooseElatedCallToAction');
		register_widget('MooseElatedLatestPostsMenu');
		register_widget('MooseElatedLatestPosts');
		register_widget( 'MooseElatedStickySidebar' );

		if ( elated_cpt_is_installed( 'woocommerce' ) ) {
			register_widget('MooseElatedWoocommerceDropdownCart');
		}
	}
	
	add_action( 'widgets_init', 'elated_cpt_register_widgets' );
}