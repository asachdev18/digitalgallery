<?php

if(!function_exists('moose_elated_register_sidebars')) {
    /**
     * Function that registers theme's sidebars
     */
    function moose_elated_register_sidebars() {
        global $moose_elated_options;
        $centered_logo = false;

        if (isset($moose_elated_options['center_logo_image'])){ if($moose_elated_options['center_logo_image'] == "yes") { $centered_logo = true; }};
        if(isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == "fixed_hiding"){
            $centered_logo = true;
        }


        register_sidebar(array(
            'name' => esc_html__('Sidebar', 'moose'),
            'id' => 'sidebar',
            'description' => esc_html__('Default Sidebar', 'moose'),
            'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => esc_html__('Sidebar Page', 'moose'),
            'id' => 'sidebar_page',
            'description' => esc_html__('Sidebar for Page', 'moose'),
            'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => esc_html__('Header Top Left', 'moose'),
            'id' => 'header_left',
            'description' => esc_html__('Header Top Left', 'moose'),
            'before_widget' => '<div class="header-widget %2$s header-left-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => esc_html__('Header Top Right', 'moose'),
            'id' => 'header_right',
            'description' => esc_html__('Header Top Right', 'moose'),
            'before_widget' => '<div class="header-widget %2$s header-right-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));

        if($centered_logo){
            register_sidebar(array(
                'name' => esc_html__('Header Left From Logo', 'moose'),
                'id' => 'header_left_from_logo',
                'description' => esc_html__('Header Left From Logo', 'moose'),
                'before_widget' => '<div class="header-widget %2$s header-left-from-logo-widget"><div class="header-left-from-logo-widget-inner"><div class="header-left-from-logo-widget-inner2">',
                'after_widget' => '</div></div></div>',
                'before_title' => '',
                'after_title' => ''
            ));
            register_sidebar(array(
                'name' => esc_html__('Header Right From Logo', 'moose'),
                'id' => 'header_right_from_logo',
                'description' => esc_html__('Header Right From Logo', 'moose'),
                'before_widget' => '<div class="header-widget %2$s header-right-from-logo-widget"><div class="header-right-from-logo-widget-inner"><div class="header-right-from-logo-widget-inner2">',
                'after_widget' => '</div></div></div>',
                'before_title' => '',
                'after_title' => ''
            ));
        }
		
		if((isset($moose_elated_options['header_bottom_appearance']) && $moose_elated_options['header_bottom_appearance'] == "stick_with_left_right_menu") ||  $centered_logo == true){
			register_sidebar(array(
				'name' => esc_html__('Header Bottom Left', 'moose'),
				'id' => 'header_bottom_left',
				'description' => esc_html__('Header Bottom Left (Next to the menu)', 'moose'),
				'before_widget' => '<div class="header_bottom_widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '',
				'after_title' => ''
			));
		}
		
        register_sidebar(array(
            'name' => esc_html__('Header Bottom Right', 'moose'),
            'id' => 'header_bottom_right',
            'description' => esc_html__('Header Bottom Right (Next to the menu)', 'moose'),
            'before_widget' => '<div class="header_bottom_widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));
		
		 register_sidebar(array(
            'name' => esc_html__('Header Bottom Center', 'moose'),
            'id' => 'header_bottom_center',
            'description' => esc_html__('This widget area is used only for content of Header Bottom when header type is set to Fixed Header Top', 'moose'),
            'before_widget' => '<div class="header_bottom_center_widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => esc_html__('Fullscreen Menu Bottom', 'moose'),
            'id' => 'fullscreen_menu',
            'description' => esc_html__('This widget area is rendered below fullscreen menu', 'moose'),
            'before_widget' => '<div class="header-widget %2$s fullscreen-menu-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => esc_html__('Fullscreen Menu Top', 'moose'),
            'id' => 'fullscreen_above_menu',
            'description' => esc_html__('This widget area is rendered above fullscreen menu', 'moose'),
            'before_widget' => '<div class="header-above-menu-widget %2$s fullscreen-above-menu-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => esc_html__('Side Area', 'moose'),
            'id' => 'sidearea',
            'description' => esc_html__('Side Area', 'moose'),
            'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => esc_html__('Left Menu Area', 'moose'),
            'id' => 'vertical_menu_area',
            'description' => esc_html__('Left Menu Area', 'moose'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Column 1', 'moose'),
            'id' => 'footer_column_1',
            'description' => esc_html__('Footer Column 1', 'moose'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Column 2', 'moose'),
            'id' => 'footer_column_2',
            'description' => esc_html__('Footer Column 2', 'moose'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Column 3', 'moose'),
            'id' => 'footer_column_3',
            'description' => esc_html__('Footer Column 3', 'moose'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Column 4', 'moose'),
            'id' => 'footer_column_4',
            'description' => esc_html__('Footer Column 4', 'moose'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Text', 'moose'),
            'id' => 'footer_text',
            'description' => esc_html__('Footer Text', 'moose'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Bottom Left', 'moose'),
            'id' => 'footer_bottom_left',
            'description' => esc_html__('Footer Bottom Left', 'moose'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => esc_html__('Footer Bottom Right', 'moose'),
            'id' => 'footer_bottom_right',
            'description' => esc_html__('Footer Bottom Right', 'moose'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));

        register_sidebar(array(
            'name' => esc_html__('Header Fixed Right', 'moose'),
            'id' => 'header_fixed_right',
            'description' => esc_html__('This widget area is used only with sticky with menu on bottom menu type', 'moose'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));
    }

    add_action('widgets_init', 'moose_elated_register_sidebars');
}

if(!function_exists('moose_elated_add_support_custom_sidebar')) {
    /**
     * Function that adds theme support for custom sidebars. It also creates moose_elated_sidebar object
     */
    function moose_elated_add_support_custom_sidebar() {
        add_theme_support('MooseElatedSidebar');
        if (get_theme_support('MooseElatedSidebar')) new MooseElatedSidebar();
    }

    add_action('after_setup_theme', 'moose_elated_add_support_custom_sidebar');
}