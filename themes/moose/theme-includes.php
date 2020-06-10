<?php

//define constants
define( 'MOOSE_ELATED', true );
define( 'MOOSE_ELATED_ROOT', get_template_directory_uri() );
define( 'MOOSE_ELATED_ROOT_DIR', get_template_directory() );
define( 'MOOSE_ELATED_CSS_ROOT', MOOSE_ELATED_ROOT . '/css' );
define( 'MOOSE_ELATED_CSS_ROOT_DIR', MOOSE_ELATED_ROOT_DIR . '/css' );
define( 'MOOSE_ELATED_JS_ROOT', MOOSE_ELATED_ROOT . '/js' );
define( 'MOOSE_ELATED_JS_ROOT_DIR', MOOSE_ELATED_ROOT_DIR . '/js' );
define( 'MOOSE_ELATED_INCLUDES_ROOT', MOOSE_ELATED_ROOT . '/includes' );
define( 'MOOSE_ELATED_INCLUDES_ROOT_DIR', MOOSE_ELATED_ROOT_DIR . '/includes' );
define( 'MOOSE_ELATED_VAR_PREFIX', 'eltdf_' );

include_once MOOSE_ELATED_ROOT_DIR .'/framework/eltd-framework.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/eltd-body-classes.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/eltd-breadcrumbs.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/nav_menu/eltd-menu.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/sidebar/eltd-custom-sidebar.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/header/eltd-header-functions.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/title/eltd-title-functions.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/eltd-portfolio-functions.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/eltd-loading-spinners.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/eltd-options-helper-functions.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/eltd-dynamic-helper-functions.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/eltd-fallback-helper-functions.php';
/* Include comment functionality */
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/comment/comment.php';
/* Include sidebar functionality */
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/sidebar/sidebar.php';
/* Include pagination functionality */
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/pagination/pagination.php';
/** Include the TGM_Plugin_Activation class. */
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/plugins/class-tgm-plugin-activation.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/plugins/plugins-activation.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/eltd-blog-functions.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/eltd-plugin-helper-functions.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/widgets/eltd-call-to-action-widget.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/widgets/eltd-sticky-sidebar.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/widgets/eltd-latest-posts-widget.php';
include_once MOOSE_ELATED_INCLUDES_ROOT_DIR .'/widgets/eltd-latest-posts-menu-widget.php';

//does woocommerce function exists?
if(function_exists("is_woocommerce")){
	//include woocommerce configuration
	require_once( MOOSE_ELATED_ROOT_DIR . '/woocommerce/woocommerce_configuration.php' );
	//include cart dropdown widget
	include_once( MOOSE_ELATED_INCLUDES_ROOT_DIR . '/widgets/eltd-woocommerce-dropdown-cart.php');
}