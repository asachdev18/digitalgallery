<?php 

function post_type() {
	//Single Events Post Type
	register_post_type("Simple Events", array(
		//"capability_type" => "Simple-Event",
		"map_meta_cap" => true,
		"show_in_rest" => true,
		"supports" => array("title", "editor", "excerpt", "thumbnail"),
		'taxonomies' => array('topics', 'category' ),		
		"rewrite" => array("slug" => "simple-events"),
		"has_archive" => true,
		"public" => true, 
		"labels" => array(
			"name" => "Simple Events",
			"add_new_item" => "Add New Simple Event",
			"edit_item" => "Edit Simple Event",
			"all_items" => "All Simple Events",
			"singular_name" => "Simple Event"
		),
		"menu_icon" => "dashicons-star-empty"
	));

	//Advanced Events Post Type
	register_post_type("Advanced Events", array(
		//"capability_type" => "Advanced-Events",
		"map_meta_cap" => true,
		"show_in_rest" => true,
		"supports" => array("title", "editor", "excerpt", "thumbnail"),
		'taxonomies' => array('topics', 'category' ),			
		"rewrite" => array("slug" => "Advanced Events"),
		"has_archive" => true,
		"public" => true, 
		"labels" => array(
			"name" => "Advanced Events",
			"add_new_item" => "Add New Advanced Events",
			"edit_item" => "Edit Advanced Events",
			"all_items" => "All Advanced Events",
			"singular_name" => "Advanced Events"
		),
		"menu_icon" => "dashicons-star-half"
	));

	//Flex Events Post Type
	register_post_type("Flex Events", array(
		//"capability_type" => "Flex-Events",
		"map_meta_cap" => true,
		"show_in_rest" => true,
		"supports" => array("title", "editor", "excerpt", "thumbnail"),
		'taxonomies' => array('topics', 'category' ),		
		"rewrite" => array("slug" => "Flex Events"),
		"has_archive" => true,
		"public" => true, 
		"labels" => array(
			"name" => "Flex Events",
			"add_new_item" => "Add New Flex Events",
			"edit_item" => "Edit Flex Events",
			"all_items" => "All Flex Events",
			"singular_name" => "Flex Events"
		),
		"menu_icon" => "dashicons-star-filled"
	));

	register_post_type("Mobile Apps", array(
		//"capability_type" => "Mobile Apps",
		"map_meta_cap" => true,
		"show_in_rest" => true,
		"supports" => array("title", "editor", "excerpt", "thumbnail"),
		'taxonomies' => array('topics', 'category' ),		
		"rewrite" => array("slug" => "Mobile Apps"),
		"has_archive" => true,
		"public" => true, 
		"labels" => array(
			"name" => "Mobile Apps",
			"add_new_item" => "Add New Mobile Apps",
			"edit_item" => "Edit Mobile Apps",
			"all_items" => "All Mobile Apps",
			"singular_name" => "Mobile Apps"
		),
		"menu_icon" => "dashicons-smartphone"
	));	


} 

add_action("init", "post_type");

?>